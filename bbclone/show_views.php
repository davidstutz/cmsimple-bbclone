<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: show_views.php 356 2015-12-11 10:49:19Z joku $
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

//////////////////////
// Show Views Stats //
//////////////////////

if(!defined("_BBC_PAGE_NAME")){define("_BBC_PAGE_NAME", "BBClone - Show Views");}

// START Time Measuring, load-time of the page (see config)
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

// Read constants
if (is_readable("constants.php")) require_once("constants.php");
else exit("ERROR: Unable to open constants.php");

foreach (array($BBC_CONFIG_FILE, $BBC_LIB_PATH."selectlang.php", $BBC_LAST_FILE) as $i) {
  if (is_readable($i)) require_once($i);
  else exit(bbc_msg($i));
}

function bbc_visit_time($this_time, $next_time, $nr = 0) {
  $diff = ($next_time !== false) ? ($next_time - $this_time) : 0;

  if ($diff <  1) return false;
  elseif ($diff >= 3600) {
    $h = floor($diff / 3600);
    $m = floor((($mod = $diff % 3600) / 60));
    $s = $mod % 60;

    return "$h&nbsp;h&nbsp;".(($m < 10) ? "0".$m : $m)."&nbsp;m&nbsp;".(($s < 10) ? "0".$s : $s)."&nbsp;s&nbsp;";
  }
  elseif (($diff > 60) && ($diff < 3600)) {
    return ((($rnd = floor(($diff / 60))) < 10) ? "0".$rnd : $rnd)."&nbsp;m&nbsp;".((($mod = $diff % 60) < 10) ?
           "0".$mod : $mod)."&nbsp;s";
  }
  else return (($diff < 10) ? "0".$diff : $diff)."&nbsp;s";
}

function bbc_list_visits() {
  global $BBC_MAXVISIBLE, $BBC_HTML, $translation, $last;
  if (_BBC_PHP < 410) global $HTTP_GET_VARS;
  
  $fields_title = array(
    "id"			=> $translation['dstat_id'],
    "prx_ip" 		=> $translation['dstat_prx'],
    "ip" 			=> $translation['dstat_ip'],
    "user_agent"	=> $translation['dstat_user_agent'],
    "nr" 			=> $translation['dstat_nr'],
    "pages" 		=> $translation['dstat_pages'],
    "visit_length" 	=> $translation['dstat_visit_length'],
    "reloads" 		=> $translation['dstat_reloads'],
  );

  $str = "<tr>\n";

  foreach (array_keys($fields_title) as $val) $str .= "<td class=\"label\">".$fields_title[$val]."</td>\n";

  $str .= "</tr>\n";


  $is_id = 0;

  if (((_BBC_PHP < 410) ? !isset($HTTP_GET_VARS['id']) : !isset($_GET['id'])) ||
      !preg_match(":^[\d]+$:", ((_BBC_PHP < 410) ? $HTTP_GET_VARS['id'] : $_GET['id'])) ||
      !is_array($last['traffic']) || empty($last['traffic'])) {
    return $translation['dstat_no_data'].".";
  }

  reset($last['traffic']);

  // Search for traffic row with selected id, result in $connect
  while (list(, $connect) = each($last['traffic'])) {
    if ((isset($connect['id'])) && ($connect['id'] == ((_BBC_PHP < 410) ? $HTTP_GET_VARS['id'] : $_GET['id']))) {
      $is_id = 1;
      break;
    }
  }
  if (!$is_id) {
  	$str .= "<tr><td colspan=8>" . $translation['dstat_no_data'].".</td></tr>";
  	return $str;
  }

  $prx_ip = (($connect['prx_ip'] == "unknown") || ($connect['prx_ip'] == $connect['ip'])) ? $translation['global_no'] : $connect['prx_ip'];
  $previous_visit_count = $connect['visits'] - ($BBC_MAXVISIBLE + (isset($connect['off']) ? $connect['off'] : 0));

  $viewcount = count($connect['views']);
  
  $style_class = $BBC_HTML->connect_color_class($connect);

  $str .= "<tr class=\"$style_class\">\n";
  $str .= "<td class=\"cell valigntop\" align=\"center\" rowspan=\"$viewcount\">".$connect['id']."</td>\n"
         ."<td class=\"cell valigntop\" align=\"center\" rowspan=\"$viewcount\">".$prx_ip."</td>\n"
         ."<td class=\"cell valigntop\" align=\"center\" rowspan=\"$viewcount\">".$connect['ip']."</td>\n"
         ."<td class=\"cell valigntop\" align=\"left\" rowspan=\"$viewcount\">&nbsp;"
         .(($connect['agent'] == "unknown") ? $translation['unknown'] : $connect['agent'])."</td>\n";
  
  for ($i = 0; $i < $viewcount; $i++) {
	if ($i != 0) {
		$str .= "<tr class=\"$style_class\">";
	}
	
    $page = substr($connect['views'][$i], (strpos($connect['views'][$i], "|") + 1));
    $page = substr($page, 0, strpos($page, "|"));
    $page = ($last['pages'][$page] == "index") ? $translation['navbar_main_site'] : $last['pages'][$page];
    $reload = substr($connect['views'][$i], (strrpos($connect['views'][$i], "|") + 1)) - 1;
    $this_time = substr($connect['views'][$i], 0, strpos($connect['views'][$i], "|"));
    $next_time = !isset($connect['views'][($i + 1)]) ? $connect['time'] :
                 substr($connect['views'][($i + 1)], 0, strpos($connect['views'][($i + 1)], "|"));
    $length = bbc_visit_time($this_time, $next_time, $i);
    $length = (($i + 1 !== $viewcount) && ($length === false)) ? "00&nbsp;s" : $length;
    $visit_count = ($i + (($previous_visit_count > 0) ? ($previous_visit_count + 1) : 1));

    $str .= "<td class=\"cell\" align=\"center\">".$visit_count."</td>\n"
           ."<td class=\"cell\" align=\"left\">&nbsp;".$page."</td>"
           ."<td class=\"cell\" align=\"right\">".$length."&nbsp;</td>\n"
           ."<td class=\"cell\" align=\"center\">".(($reload > 0) ? $reload : "")."</td>"
           ."</tr>\n";
  }
  
  $str .= "</table>";
  
  return $str;
}

// Generate page (with use of the functions above)
echo $BBC_HTML->html_begin()
    .$BBC_HTML->topbar()
    .$BBC_HTML->color_explain()
    ."<table class=\"centerdata\">\n"
    ."<tr><td class=\"labelbox\">\n"
    ."<table class=\"centerdata\">\n"
    .bbc_list_visits()
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