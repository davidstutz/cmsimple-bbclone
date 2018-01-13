<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: show_config.php 356 2015-12-11 10:49:19Z joku $
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

/////////////////////////
// Show Config BBClone //
/////////////////////////

if(!defined("_BBC_PAGE_NAME")){define("_BBC_PAGE_NAME", "BBClone - Show Config");}

// START Time Measuring, load-time of the page (see config)
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

// Read constants
if (is_readable("constants.php")) require_once("constants.php");
else exit("ERROR: Unable to open constants.php");

foreach (array($BBC_CONFIG_FILE, $BBC_LIB_PATH."selectlang.php", $BBC_ACCESS_FILE) as $i) {
  if (is_readable($i)) require_once($i);
  else exit(bbc_msg($i));
}

// Determine whether we are allowed to display show_config.php
if (empty($BBC_SHOW_CONFIG)) {
	header("Location: show_global.php");
	return;
}

// Generate page
echo $BBC_HTML->html_begin()
    .$BBC_HTML->topbar()
    ."<table class=\"center\">\n"
    ."<tr><td class=\"padding\">\n"
    ."<table class=\"centerbox\">\n"
    ."<tr><td>\n"
    ."<table class=\"centerdata\">\n"
// TABLE TITLES
    ."<tr>\n"
    ."<td class=\"label\" width=\"20%\">".$translation['config_variable_name']."</td>\n"
    ."<td class=\"label\" width=\"60%\">".$translation['config_explanations']."</td>\n"
    ."<td class=\"label\" width=\"20%\">".$translation['config_variable_value']."</td>\n"
    ."</tr>\n"
    .$BBC_HTML->show_config("BBC_MAINSITE")
    .$BBC_HTML->show_config("BBC_SHOW_CONFIG", 1)
    .$BBC_HTML->show_config("BBC_TITLEBAR")
    .$BBC_HTML->show_config("BBC_LANGUAGE")
    .$BBC_HTML->show_config("BBC_MAXTIME")
    .$BBC_HTML->show_config("BBC_MAXVISIBLE")
    .$BBC_HTML->show_config("BBC_DETAILED_STAT_FIELDS")
    .$BBC_HTML->show_config("BBC_TIME_OFFSET")
    .$BBC_HTML->show_config("BBC_NO_DNS", 1)
    .$BBC_HTML->show_config("BBC_NO_HITS", 1)
    .$BBC_HTML->show_config("BBC_IGNORE_IP")
    .$BBC_HTML->show_config("BBC_IGNORE_REFER")
    .$BBC_HTML->show_config("BBC_IGNORE_BOTS")
    .$BBC_HTML->show_config("BBC_IGNORE_AGENT", 1)
    .$BBC_HTML->show_config("BBC_KILL_STATS", 1)
    .$BBC_HTML->show_config("BBC_PURGE_SINGLE", 1)
    .$BBC_HTML->show_config("BBC_LOADTIME", 1)
    .$BBC_HTML->show_config("BBC_EXT_LOOKUP")
    .$BBC_HTML->show_config("BBC_CSS_FILE")
    .$BBC_HTML->show_config("BBC_HITS", 1)
    .$BBC_HTML->show_config("BBC_USE_ORIGINAL_URI", 1)
    .$BBC_HTML->show_config("BBC_MAX_PAGENAME")
    ."</table>\n"
    ."</td></tr></table>\n"
    ."</td></tr></table>\n"
    .$BBC_HTML->copyright()
    .$BBC_HTML->topbar(0, 1);

// END + DISPLAY Time Measuring, load-time of the page (see config)
global $BBC_LOADTIME;

if (!empty($BBC_LOADTIME)) {
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$finish = $time;
	$total_time = round(($finish - $start), 4);
	echo "<div class=\"loadtime\">".$translation['generated'].$total_time.$translation['seconds']."</div>\n";
}

// End of HTML
echo $BBC_HTML->html_end()
?>
