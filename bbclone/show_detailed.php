<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: show_detailed.php 356 2015-12-11 10:49:19Z joku $
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
// Show Detailed Stats //
/////////////////////////

if(!defined("_BBC_PAGE_NAME")){define("_BBC_PAGE_NAME", "BBClone - Show Detailed");}

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

// Functions to generate Stats for each row
function bbc_show_connect_field($connect, $field, $lng, $titles = false) {
  global $BBC_WHOIS, $BBC_IMAGES_PATH, $BBC_LIB_PATH, $BBC_HTML, $extensions, $translation;

  $id = empty($connect['id']) ? 0 : $connect['id'];

  switch ($field) {
    case "id":
      return "<div align=\"center\">".$connect['id']."&nbsp;</div>\n";

    case "time":
      return "<div align=\"center\">".str_replace(" ", "&nbsp;", date_format_translated($translation["global_time_format"], $connect['time']))."&nbsp;</div>\n";

    case "visits":
      return "<div align=\"center\"><a href=\"show_views.php?id=$id&amp;lng=$lng\">".$connect['visits']."</a>&nbsp;</div>\n";

    case "ext":
      if (isset($extensions[$connect['ext']])) $label = $extensions[$connect['ext']];
      else $label = $connect['ext'];
      return "<div align=\"left\">&nbsp;<img src=\"".$BBC_IMAGES_PATH."ext/".$connect['ext'].".png\" class=\"icon\" alt=\"".$label."\" title=\"".$label."\" />&nbsp;&nbsp;".$label."</div>";

    case "dns":
      if (strlen($connect['dns']) > 50) $connect['dns'] = "...".substr($connect['dns'], -47);
      if (strlen($connect['dns']) < 2) $connect['dns'] = $connect['ip']; // Invalid dns => take IP
      $dns_str = $connect['dns'];
      $ip_str = $connect['ip'];
      if (!strcasecmp ($dns_str, $ip_str))
      	if ($BBC_WHOIS) return "<div align=\"left\">&nbsp;".$connect[$field]."&nbsp;<a href=\"".$BBC_WHOIS.$dns_str."\" target=\"blank\" title=\"".$translation['dstat_whois_information']."\">(?)</a></div>";
      return "<div align=\"left\">&nbsp;".$connect['dns']."</div>";

    case "referer":
      if (strpos($connect['referer'], "://") === false) return "&nbsp;";

      $url = substr(strstr($connect['referer'], "://"), 3);
      $str = (($slash = strpos($url, "/")) !== false) ? substr($url, 0, $slash) : $url;
      $str = (strlen($str) > 50) ? "...".substr($str, -47) : $str;

      return "<div align=\"left\">&nbsp;\n"
            ."<script type=\"text/javascript\">\n"
            ."<!--\n"
            ."document.write('<a href=\"http://$url\" rel=\"nofollow\" title=\"$str\">$str<\/a>');\n"
            ."-->\n"
            ."</script>\n"
            ."<noscript><span title=\"$str\">$str</span></noscript>\n"
            ."</div>\n";

    case "browser":
      if (!empty($connect['robot'])) return bbc_show_connect_field($connect, "robot", $lng);
      elseif (is_readable($BBC_LIB_PATH."browser.php")) require($BBC_LIB_PATH."browser.php");
      else return bbc_msg($BBC_LIB_PATH."browser.php");

      if (!$match = (!isset($browser[$connect[$field]]) ? false : $browser[$connect[$field]])) return "&nbsp;";

      $title = str_replace("other", $translation['misc_other'], $match['title']);

      return "<div align=\"left\">&nbsp;<img src=\"".$BBC_IMAGES_PATH."browser/".$match['icon'].".png\" class=\"icon\" alt=\"$title\" title=\"$title\" />"
      		."&nbsp;&nbsp;".str_replace(" ", "&nbsp;", $title)
            .(empty($connect['browser_note']) ? "" : "&nbsp;".$connect['browser_note'])."</div>";

    case "os":
      if (!empty($connect['robot'])) return bbc_show_connect_field($connect,"robot", $lng);
      elseif (is_readable($BBC_LIB_PATH."os.php")) require($BBC_LIB_PATH."os.php");
      else return bbc_msg($BBC_LIB_PATH."os.php");

      if (!$match = (!isset($os[$connect[$field]]) ? false : $os[$connect[$field]])) return "&nbsp;";

      $title = str_replace("other", $translation['misc_other'], $match['title']);
      if (isset($connect['screen_res'])) $res_str = "(".$connect['screen_res'].")";

      return "<div align=\"left\">&nbsp;<img src=\"".$BBC_IMAGES_PATH."os/".$match['icon'].".png\" class=\"icon\" alt=\"$title\" title=\"$title\" />"
      		."&nbsp;&nbsp;".str_replace(" ", "&nbsp;", $title)
      		.(empty($connect['os_note']) ? "" : "&nbsp;".$connect['os_note']).(isset($res_str) ? "&nbsp;".$res_str : "")."</div>";

    case "robot":
      if (is_readable($BBC_LIB_PATH."robot.php")) require($BBC_LIB_PATH."robot.php");
      else return bbc_msg($BBC_LIB_PATH."robot.php");

      if (!$match = (!isset($robot[$connect[$field]]) ? false : $robot[$connect[$field]])) return "&nbsp;";

      $title = str_replace("other", $translation['misc_other'], $match['title']);

      return "<div align=\"left\">&nbsp;<img src=\"".$BBC_IMAGES_PATH."robot/".$match['icon'].".png\" class=\"icon\" alt=\"$title\" title=\"$title\" />"
      		."&nbsp;&nbsp;".str_replace(" ", "&nbsp;", $title)
            .(empty($connect['robot_note']) ? "" : "&nbsp;".$connect['robot_note'])."</div>";

    case "page":
      if (!isset($connect['page'])) return "&nbsp;";

      $last_page = $titles[($connect['page'])];
      $last_page = ($last_page == "index") ? $translation["navbar_main_site"] : $last_page;

      return "<div align=\"left\">&nbsp;$last_page</div>";

    default:
      if (!isset($connect[$field]) || ($connect[$field] == "-")) return "&nbsp;";
      return "<div align=\"left\">&nbsp;".$connect[$field]."</div>";
  }
}

// Main functions to generate Stats
function bbc_rows_gen() {
  global $BBC_DETAILED_STAT_FIELDS, $BBC_MAXVISIBLE, $BBC_HTML, $translation, $last;

  $fields_title = array(
    "browser" => $translation['dstat_browser'],
    "dns" => $translation['dstat_dns'],
    "ext" => $translation['dstat_extension'],
    "id" => $translation['dstat_id'],
    "ip" => $translation['dstat_ip'],
    "os" => $translation['dstat_os'],
    "page" => $translation['dstat_last_page'],
    "prx_ip" => $translation['dstat_prx'],
    "referer" => $translation['dstat_from'],
    "search" => $translation['dstat_search'],
    "time" => $translation['dstat_time'],
    "visits" => $translation['dstat_visits'],
  );

  $fields = explode(",", str_replace(" ", "", $BBC_DETAILED_STAT_FIELDS));
  $nb_access = isset($last['traffic']) ? count($last['traffic']) : 0;
  $str = "<tr>\n";

  foreach ($fields as $val) $str .= "<td class=\"label\">".$fields_title[$val]."</td>\n";

  $str .= "</tr>\n";

  for ($k = $nb_access - 1; $k >= max(0, $nb_access - $BBC_MAXVISIBLE); $k--) {
  	$style_class = $BBC_HTML->connect_color_class($last['traffic'][$k]);
    $str .= "<tr class=\"$style_class hover_white\">\n";
    reset($fields);
    while (list(, $val) = each($fields)) {
      $cell = bbc_show_connect_field($last['traffic'][$k], $val, $BBC_HTML->lng, $last['pages']);
      $str .= "<td class=\"cell\">".(empty($cell) ? "&nbsp;" : $cell)."</td>\n";
    }
    $str .= "</tr>\n";
  }
  return $str;
}

// Generate page (with use of the functions above)
echo $BBC_HTML->html_begin()
    .$BBC_HTML->topbar()
    .$BBC_HTML->color_explain()
    ."<table class=\"centerdata\">\n"
    ."<tr><td class=\"labelbox\">\n"
    ."<table class=\"centerdata\">\n"
    .bbc_rows_gen()
    ."</table>\n"
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