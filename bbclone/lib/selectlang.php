<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: selectlang.php 356 2015-12-11 10:49:19Z joku $
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
// Detection & Setup Language //
////////////////////////////////

if (is_readable($BBC_LIB_PATH."html.php")) require_once($BBC_LIB_PATH."html.php");
else exit(bbc_msg($BBC_LIB_PATH."html.php"));

// Initialising the HTML class
$BBC_HTML = new BBC_HTML;

if (is_readable($BBC_LANGUAGE_PATH.$BBC_HTML->lng.".php")) require_once($BBC_LANGUAGE_PATH.$BBC_HTML->lng.".php");
// When no detection, use English language as default
elseif (is_readable($BBC_LANGUAGE_PATH."en.php")) {
}
else exit(bbc_msg($BBC_LANGUAGE_PATH."en.php"));

/**
 * Format date/time according to given format string, in the selected language.
 * @param $format date format, as per PHP specs
 * @param $timestamp the timestamp to format
 * @return String with formatted timestamp
 */
function date_format_translated($format, $timestamp) {
	global $translation;
	
	$day_name_short = array($translation['tstat_su'], $translation['tstat_mo'], $translation['tstat_tu'], $translation['tstat_we'], $translation['tstat_th'], $translation['tstat_fr'], $translation['tstat_sa']);
	$day_name_full = array($translation['tstat_full_su'], $translation['tstat_full_mo'], $translation['tstat_full_tu'], $translation['tstat_full_we'], $translation['tstat_full_th'], $translation['tstat_full_fr'], $translation['tstat_full_sa']);
	$month_name_short = array($translation['tstat_jan'], $translation['tstat_feb'], $translation['tstat_mar'], $translation['tstat_apr'], $translation['tstat_may'], $translation['tstat_jun'],
      					  $translation['tstat_jul'], $translation['tstat_aug'], $translation['tstat_sep'], $translation['tstat_oct'], $translation['tstat_nov'], $translation['tstat_dec']);
	$month_name_full = array($translation['tstat_full_jan'], $translation['tstat_full_feb'], $translation['tstat_full_mar'], $translation['tstat_full_apr'], $translation['tstat_full_may'], $translation['tstat_full_jun'],
      					  $translation['tstat_full_jul'], $translation['tstat_full_aug'], $translation['tstat_full_sep'], $translation['tstat_full_oct'], $translation['tstat_full_nov'], $translation['tstat_full_dec']);
      					  
    // Loop char by char through php date format string, cacth the ones which need translating
//--- PHP 4 :-)--------------------------------
if(!function_exists('str_split')){
   function str_split($str,$split_lengt=1){

       $cnt = strlen($str);

       for ($i=0;$i<$cnt;$i+=$split_lengt)
           $rslt[]= substr($str,$i,$split_lengt);    
   
       return $rslt;
   }
} 
//----------------------------------------------
	$result = "";
	$format_chars = str_split($format, 1);
	foreach ($format_chars as $format_char) {
		if ($format_char == "l") {
			$day_index = date("w", $timestamp);
			$result = $result . $day_name_full[$day_index];
		} else if ($format_char == "D") {
			$day_index = date("w", $timestamp);
			$result = $result . $day_name_short[$day_index];
		} else if ($format_char == "F") {
			$month_index = date("n", $timestamp) - 1;
			$result = $result . $month_name_full[$month_index];
		} else if ($format_char == "M") {
			$month_index = date("n", $timestamp) - 1;
			$result = $result . $month_name_short[$month_index];
		} else {
			$result = $result . date($format_char, $timestamp);
		}
	}
	
	return $result;
}
?>
