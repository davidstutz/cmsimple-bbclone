<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: mark_page.php 356 2015-12-11 10:49:19Z joku $
 *  
 * Copyright (C) 2001-2016, the BBClone Team (see doc/authors.txt for details)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * See doc/copying.txt for details
 */

////////////////////////////////
// Mark Page and Write to Var //
////////////////////////////////

if (!defined("_MARK_PAGE")) define("_MARK_PAGE", "1");
else return;

// Check for PHP 4.0.3 or older
if (!function_exists("array_sum")) exit("<hr /><b>Error:</b> PHP ".PHP_VERSION." is too old for BBClone.");
elseif ((!defined("_BBCLONE_DIR")) || (!is_readable(_BBCLONE_DIR."constants.php"))) return;
else require_once(_BBCLONE_DIR."constants.php");

foreach (array($BBC_LIB_PATH."io.php", $BBC_LIB_PATH."marker.php", $BBC_CONFIG_FILE) as $i) {
  if (is_readable($i)) require_once($i);
  else {
    if (empty($BBC_DEBUG)) return;
    else exit(bbc_msg($i));
  }
}

if (extension_loaded("sysvsem") && (stristr("sem", $BBC_USE_LOCK) !== false)) define("_BBC_SEM", 1);
if (extension_loaded("dio") && (stristr("dio", $BBC_USE_LOCK) !== false)) define("_BBC_DIO", 1);

// locking method must not be empty
$BBC_USE_LOCK = empty($BBC_USE_LOCK) ? "flk" :  $BBC_USE_LOCK;

if (!function_exists("flock") && (stristr("flk", $BBC_USE_LOCK) !== false)) {
  if (empty($BBC_DEBUG)) return;
  else exit(bbc_msg("", "l"));
}

if (!is_readable($BBC_CACHE_PATH)) {
  if (empty($BBC_DEBUG)) return;
  else exit(bbc_msg($BBC_CACHE_PATH));
}

ignore_user_abort(1);

// Don't write to counter files if we want to reset stats
if (empty($BBC_KILL_STATS)) {
  // needs to be always executed because otherwise our counter wouldn't work
  // any longer by the time $BBC_DEBUG was activated
  $i = bbc_exec_marker();

  // Don't process anything unless we are told to do so
  if (!defined("_OK")) {
    if (empty($BBC_DEBUG)) return ignore_user_abort(0);
    else exit($i);
  }
  else !empty($BBC_DEBUG) ? print($i) : "";
}

foreach (array("ACCESS_FILE", "LAST_FILE", "LOCK") as $i) {
  if (!is_readable(${"BBC_".$i})) {
    if (empty($BBC_DEBUG)) return;
    else exit(bbc_msg(${"BBC_".$i}));
  }
  if (!is_writable(${"BBC_".$i})) {
    if (empty($BBC_DEBUG)) return;
    else exit(bbc_msg(${"BBC_".$i}, "w"));
  }
}

// Kill'em all if requested and return
if (!empty($BBC_KILL_STATS)) {
  bbc_kill_stats();

  if (empty($BBC_DEBUG)) return;
  else exit(bbc_msg("", "k"));
}

foreach (array($BBC_LOG_PROCESSOR, $BBC_LIB_PATH."new_connect.php", $BBC_LIB_PATH."timecalc.php",
               $BBC_LIB_PATH."referrer.php", $BBC_LIB_PATH."charconv.php", $BBC_LIB_PATH."browser.php",
               $BBC_LIB_PATH."os.php", $BBC_LIB_PATH."robot.php") as $i) {
  if (!is_readable($i)) {
    if (empty($BBC_DEBUG)) return;
    else exit(bbc_msg($i));
  }
}

// Extension (country) look-up via plugin 
if ($BBC_EXT_LOOKUP) {
	$EXT_INCLUDE = $BBC_PLUGIN_PATH."ext_lookup_".strtolower($BBC_EXT_LOOKUP).".php";
	if (!is_readable($EXT_INCLUDE)) {
		if (empty($BBC_DEBUG)) return;
		else exit(bbc_msg($EXT_INCLUDE));
	}
	require_once($EXT_INCLUDE);
}

if (($BBC_TIMESTAMP <= filemtime($BBC_ACCESS_FILE)) || (function_exists("bbc_sort_time_sc"))) return;
clearstatcache();

if (filesize($BBC_LOCK) !== 0) {
  // crash recovery if lockfile is older than 30 secs
  if ($BBC_TIMESTAMP - filemtime($BBC_LOCK) > 30) fclose(fopen($BBC_LOCK, "wb"));
  return;
}

// write to lockfile
if (($al = bbc_begin_write($BBC_LOCK, "1")) !== false) {
  foreach (array($BBC_LOG_PROCESSOR, $BBC_LIB_PATH."new_connect.php", $BBC_LIB_PATH."timecalc.php",
                 $BBC_LIB_PATH."referrer.php", $BBC_LIB_PATH."charconv.php") as $i) require_once($i);

  require($BBC_ACCESS_FILE);
  require($BBC_LAST_FILE);

  // global and time stats
  if (bbc_add_new_connections_to_old()) {
    $af = bbc_begin_write($BBC_ACCESS_FILE, "<?php\nglobal \$access;\n\$access =\n".bbc_array_to_str($access).";\n?>");

    bbc_end_write($af);
    !empty($BBC_DEBUG) ? print(bbc_msg(basename($BBC_ACCESS_FILE), "o")) : "";
    bbc_update_last_access();

    $af = bbc_begin_write($BBC_LAST_FILE, "<?php\nglobal \$last;\n\$last =\n".bbc_array_to_str($last).";\n?>");
    bbc_end_write($af);
    !empty($BBC_DEBUG) ? print(bbc_msg(basename($BBC_LAST_FILE), "o")) : "";
  }
}
else (!empty($BBC_DEBUG) ? print(bbc_msg("", "l")) : "");

// once we've finished we unlock and truncate the lock file
bbc_end_write($al);
fclose(fopen($BBC_LOCK, "wb"));
ignore_user_abort(0);

// Exit if debug mode is turned on.
if (!empty($BBC_DEBUG)) exit();
?>