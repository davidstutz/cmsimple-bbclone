<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: constants.php 362 2015-12-23 18:39:12Z matthys $
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

global $BBC_ROOT_PATH, $BBC_VERSION, $BBC_CACHE_PATH, $BBC_CONF_PATH,
  $BBC_CSS_PATH, $BBC_IMAGES_PATH, $BBC_LANGUAGE_PATH, $BBC_LIB_PATH,
  $BBC_PLUGIN_PATH, $BBC_IP2EXT_PATH, $BBC_ACCESS_FILE, $BBC_LAST_FILE,
  $BBC_CONFIG_FILE, $BBC_TIMESTAMP, $BBC_COUNTER_FILES, $BBC_COUNTER_PREFIX,
  $BBC_COUNTER_SUFFIX, $BBC_LOCK, $BBC_SEP, $BBC_COUNTER_COLUMNS,
  $BBC_COUNTER_COLUMN_NAMES, $BBC_LOG_PROCESSOR;

// BBClone's location relative from where it's been called
$BBC_ROOT_PATH = defined("_BBCLONE_DIR") ? _BBCLONE_DIR : "";
// BBClone version
$BBC_VERSION = "0.6.4";
// Directory paths
$BBC_CACHE_PATH  = $BBC_ROOT_PATH."var/";
$BBC_CONF_PATH = $BBC_ROOT_PATH."conf/";
$BBC_CSS_PATH = "css/";
$BBC_IMAGES_PATH = "images/";
$BBC_LANGUAGE_PATH = $BBC_ROOT_PATH."language/";
$BBC_LIB_PATH = $BBC_ROOT_PATH."lib/";
$BBC_PLUGIN_PATH = $BBC_LIB_PATH."plugin/";
$BBC_IP2EXT_PATH = $BBC_ROOT_PATH."ip2ext/";
// File paths
$BBC_ACCESS_FILE = $BBC_CACHE_PATH."access.php";
$BBC_LAST_FILE = $BBC_CACHE_PATH."last.php";
$BBC_CONFIG_FILE = $BBC_CONF_PATH."config.php";
// Timestamp at run-time
$BBC_TIMESTAMP = time();
// Amount of counter files
$BBC_COUNTER_FILES = 8;
// Name of the counter files
$BBC_COUNTER_PREFIX = "counter";
$BBC_COUNTER_SUFFIX = ".inc";
$BBC_LOCK = $BBC_CACHE_PATH.".htalock";
// Global separator
$BBC_SEP = chr(173);
// How many columns they contain
$BBC_COUNTER_COLUMNS = 8;
// What titles are assigned to them
$BBC_COUNTER_COLUMN_NAMES = array("time", "prx_ip", "ip", "dns", "agent", "referer", "uri", "page");
// File path Log Processor
$BBC_LOG_PROCESSOR = $BBC_ROOT_PATH."log_processor.php";

///////////////////////////////////////////////////////////////////////
// Do not touch the stuff below if you have no clue what it's doing! //
///////////////////////////////////////////////////////////////////////

// Message handling, needs to be globally available
function bbc_msg($item, $state = "r") {
	return "<div style=\"border: solid 2px red; background-color: yellow; padding: 4px; font-weight: bold;\">Error bbc_msg; item: " . $item . " / state: " . $state . "</div>";
}

// PHP version number
define("_BBC_PHP", substr(str_replace(".", "", PHP_VERSION), 0, 3));
?>