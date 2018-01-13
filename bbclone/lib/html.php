<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: html.php 356 2015-12-11 10:49:19Z joku $
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
// HTML Output Builder //
/////////////////////////

// Include BBClone hits in Stats (see config, enabled by default)
if ($BBC_HITS == 1) {
  if (!defined("_BBCLONE_DIR")) {define("_BBCLONE_DIR", "./");}
  if (!defined("COUNTER")) {
  define("COUNTER", _BBCLONE_DIR."mark_page.php");
  if (is_readable(COUNTER)) include_once(COUNTER);
  }
}

class bbc_html {
  var $lang_tab, $lng, $server;

  function get_lng() {
    if (_BBC_PHP < 410) global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_SERVER_VARS;

    global $BBC_LANGUAGE;

	// Get variables depending on PHP version
    $get = ((_BBC_PHP < 410) ? !empty($HTTP_GET_VARS['lng']) : !empty($_GET['lng'])) ?
           ((_BBC_PHP < 410) ? $HTTP_GET_VARS['lng'] : $_GET['lng']) : "";
    $post = ((_BBC_PHP < 410) ? !empty($HTTP_POST_VARS['lng']) : !empty($_POST['lng'])) ?
            ((_BBC_PHP < 410) ? $HTTP_POST_VARS['lng'] : $_POST['lng']) : "";
    $aclng = ((_BBC_PHP < 410) ? !empty($HTTP_SERVER_VARS['HTTP_ACCEPT_LANGUAGE']) :
             !empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) ? ((_BBC_PHP < 410) ?
             $HTTP_SERVER_VARS['HTTP_ACCEPT_LANGUAGE'] : $_SERVER['HTTP_ACCEPT_LANGUAGE']) : "";

    if ($get && preg_match(":^[\w\-]{1,5}:", $get)) $this->lng = $get;
    elseif ($post && (preg_match(":^[\w\-]{1,5}:", $post))) $this->lng = $post;
    elseif ($aclng && (preg_match(":^[\w\-]{1,5}:", $aclng))) {

      $this->lng = (($comma = strpos($aclng, ",")) !== false) ? substr($aclng, 0, $comma) : $aclng;
      $this->lng = ((($dash = strpos($this->lng, "-")) !== false) && (!isset($this->lang_tab[$this->lng]))) ?
                   substr($this->lng, 0, $dash) : $this->lng;
    }
    else $this->lng = $BBC_LANGUAGE;

    return (isset($this->lang_tab[$this->lng]) ? $this->lng : $BBC_LANGUAGE);
  }

  function set_title() {
    global $BBC_TIMESTAMP, $BBC_TIME_OFFSET, $BBC_TITLEBAR, $translation;

    $conv = array(
      "%DATE" => date_format_translated($translation['global_day_format'], ($BBC_TIMESTAMP + ($BBC_TIME_OFFSET * 60))),
      "%SERVER" => $this->server
    );
    if (empty($BBC_TITLEBAR)) {
    	$BBC_TITLEBAR = $translation['global_titlebar'];
    };
    return strtr($BBC_TITLEBAR, $conv);
  }

  function last_reset() {
    global $translation, $access;
    $timestamp = isset($access['time']['reset']) ? $access['time']['reset'] : "";
    return "<p align=\"center\"><i>".$translation['global_last_reset'].": ".date_format_translated($translation['global_day_format'], $timestamp)
          .".</i></p>\n";
  }

  function bbc_html() {
    if (_BBC_PHP < 410) global $HTTP_SERVER_VARS;

    global $translation;

    $this->lang_tab = array(
      "ar"    => "العربية",           // Arabic
      "bs"    => "Bosanski",         // Bosnian
      "bg"    => "български",        // Bulgarian
      "ca"    => "Català",           // Catalan
      "cs"    => "Čeština",          // Czech
      "da"    => "Dansk",            // Danish
      "de"    => "Deutsch",          // German
      "en"    => "English",          // English << DEFAULT
      "fr"    => "Français",         // French
      "fi"    => "Suomi",            // Finnish
      "el"    => "Ελληνικά",         // Greek
      "es"    => "Español",          // Spanish
      "et"    => "Eesti keel",       // Estonian
      "hu"    => "Magyar",           // Hungarian
      "id"    => "Bahasa Indonésia", // Indonesian
      "it"    => "Italiano",         // Italian
      "ja"    => "日本語",            // Japanese
      "ko"    => "한국어",             // Korean
      "lt"    => "Lietuvių",         // Lithuanian
      "mk"    => "Македонски",       // Macedonian
      "nb"    => "Norsk Bokmål",     // Norwegian Bokmål
      "nl"    => "Nederlands",       // Dutch
      "pl"    => "Polski",           // Polish
      "pt"    => "Português",        // Portuguese
      "pt-br" => "Português Brasil", // Brazilian Portuguese
      "ro"    => "Română",           // Romanian
      "ru"    => "Русский",          // Russian
      "sk"    => "Slovenčina",       // Slovak
      "sl"    => "Slovenski",        // Slovenian
      "sv"    => "Svenska",          // Swedish
      "th"    => "ภาษาไทย",             // Thai
      "tr"    => "Türkçe",           // Turkish
      "uk"    => "українська",       // Ukrainian
      "zh-cn" => "中文(简体)",          // Simplified Chinese
      "zh-tw" => "中文(繁體)"          // Traditional Chinese
    );
    $this->lng = $this->get_lng();
    $this->server = ((_BBC_PHP < 410) ? !empty($HTTP_SERVER_VARS['SERVER_NAME']) : !empty($_SERVER['SERVER_NAME'])) ?
                    htmlspecialchars(((_BBC_PHP < 410) ? $HTTP_SERVER_VARS['SERVER_NAME'] : $_SERVER['SERVER_NAME']),
                    ENT_QUOTES) : "noname";
  }

  // Generates BBClone Config details
  function show_config($varname, $booleanflag = 0) {

    global $translation, $$varname;

    return "<tr class=\"morethan_row hover_white\">\n"
          // Variable name
          ."<td align=\"left\" class=\"config-cell\">\n"
          ."<b>\$$varname</b>\n"
          ."</td>\n"
          // Explaination
          ."<td align=\"left\" class=\"config-cell text-wrap\">\n"
          .$translation["config_".$varname]."\n"
          ."</td>\n"
          // Variable value
          ."<td align=\"left\" class=\"config-cell\">\n"
          ."<b>".(!empty($$varname) ? ($booleanflag==1 ? $translation['global_yes'] : $$varname) : $translation['global_no'])."</b>\n"
          ."</td></tr>\n";
  }

  // Begin of all BBClone HTML documents
  function html_begin() {
    global $BBC_VERSION, $BBC_EXT_LOOKUP, $BBC_IMAGES_PATH, $BBC_CSS_PATH, $BBC_CSS_FILE, $translation;

    // Work around for default charset in Apache 2 (Thanks Martin Halachev!)
    if (!headers_sent()) header("Content-type: text/html; charset=".$translation['global_charset']);

        return "<?xml version=\"1.0\" encoding=\"".$translation['global_charset']."\"?>\n"
          ."<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\n"
          ."\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n"
          ."<html xmlns=\"http://www.w3.org/1999/xhtml\">\n"
          ."<head>\n"
          ."<title>BBClone $BBC_VERSION $BBC_EXT_LOOKUP</title>\n"
          ."<link rel=\"shortcut icon\" href=\"".$BBC_IMAGES_PATH."favicon.ico\" />\n"
          ."<link rel=\"stylesheet\" href=\"".$BBC_CSS_PATH.$BBC_CSS_FILE."\" type=\"text/css\" />\n"
          ."<meta http-equiv=\"cache-control\" content=\"no-cache\" />\n"
          ."<meta http-equiv=\"pragma\" content=\"no-cache\" />\n"
          ."<meta http-equiv=\"content-Script-Type\" content=\"text/javasript\" />\n"
          ."<meta http-equiv=\"content-Style-Type\" content=\"text/css\" />\n"
          ."<meta http-equiv=\"content-type\" content=\"text/html; charset=".$translation['global_charset']."\" />\n"
          ."<meta name=\"robots\" content=\"none\" />\n"
          ."<meta name=\"description\" content=\"BBClone ".$BBC_VERSION." - A PHP based Web Counter on Steroids\" />\n"
          ."</head>\n"
          ."<body>\n"
    // BBClone copyright notice: Removal or modification of the copyright holder
    // will void any support by the BBClone team and may be a reason to deny
    // access to the BBClone site if detected.
          ."<!--\n"
          ."This is BBClone $BBC_VERSION\n"
          ."Homebase: http://www.bbclone.de/\n"
          ."Copyright: 2001-2015 The BBClone Team\n"
          ."License: GNU/GPL, version 3 or later\n"
          ."-->\n";
  }
  
  // Navigation Bar (both top and bottom)
  function topbar($lang_sel = 1, $on_bottom = 0) {
    if (_BBC_PHP < 410) global $HTTP_SERVER_VARS;

    global $BBC_IMAGES_PATH, $BBC_MAINSITE, $BBC_SHOW_CONFIG, $translation;

    $self = basename((_BBC_PHP < 410) ? $HTTP_SERVER_VARS['PHP_SELF'] : $_SERVER['PHP_SELF']);
    $self = htmlspecialchars(str_replace("index.php", ".", $self), ENT_QUOTES);
    $url_lng = !empty($this->lang_tab[$this->lng]) ? "?lng=".$this->lng."" : "";
    // Navigation Buttons
    $navbar = array(
    	"main"		=> array( "url" => $BBC_MAINSITE,		"title" => $translation['navbar_main_site'],		"icon" => "navbar_main.png" ),
    	"config"	=> array( "url" => "show_config.php",	"title" => !empty($BBC_SHOW_CONFIG)? $translation['navbar_configuration'] : "", "icon" => "navbar_config.png" ),
    	"global"	=> array( "url" => "show_global.php",	"title" => $translation['navbar_global_stats'],	"icon" => "navbar_global.png" ),
    	"detailed"	=> array( "url" => "show_detailed.php", "title" => $translation['navbar_detailed_stats'], "icon" => "navbar_detailed.png" ),
    	"time"		=> array( "url" => "show_time.php",		"title" => $translation['navbar_time_stats'],		"icon" => "navbar_time.png" )
    );
    // Language Selector
    $str = (empty($lang_sel) ? "" : "<form method=\"post\" action=\"$self\">\n")
          ."<table ".(empty($on_bottom) ? "class=\"navbar\"" : "class=\"navbar bottom\"")."><tr><td>\n";

    $sep = "";
    // Create Navigation Buttons
    foreach (array_keys($navbar) as $menu_key) {
    	$url   = $navbar[$menu_key]['url'];
    	$title = $navbar[$menu_key]['title'];
    	$icon  = $navbar[$menu_key]['icon'];
    	$selected_class = (basename($_SERVER['SCRIPT_NAME']) == $url ? " selected" : "");
    	if ( basename($_SERVER['SCRIPT_NAME']) == "index.php" && $menu_key == "global") {
    		$selected_class = " selected";
    	}
	   	if (empty($title)){
    		continue;
    	}
    	$str .= "<a class=\"navbar".$selected_class."\" href=\"$url".($menu_key != "main" ? $url_lng : "")."\"><img src=\"".$BBC_IMAGES_PATH.$icon."\" alt=\"icon\" />&nbsp;$title</a>&nbsp;\n";
    }
    // Create Language Selector
    if (!empty($lang_sel)) {
      $str .= "&nbsp;<img src=\"".$BBC_IMAGES_PATH."navbar_lng.png\" alt=\"".$translation['navbar_language']."\" title=\"".$translation['navbar_language']."\" />&nbsp;\n"
             ."<select name=\"lng\" onchange=\"if (this.selectedIndex>0){location.href='$self?lng=' + "
             ."this.options[this.selectedIndex].value;}\">\n"
             ."<option value=\"\"".(empty($this->lng) ? " selected=\"selected\"" : "").">".$translation['navbar_language']."</option>\n";

      foreach ($this->lang_tab as $lang_id => $lang_name) {
        $str .= "<option value=\"$lang_id\"".(($this->lng == $lang_id) ? " selected=\"selected\"" : "")
               .">$lang_name</option>\n";
      }
      $lang_tab_lng = empty($this->lang_tab[$this->lng]) ? "" : $this->lang_tab[$this->lng];
      $str .= "</select>\n"
             ."&nbsp;<noscript><input type=\"submit\" value=\"".$translation['navbar_go']."\" /></noscript>\n";
    }

    $str .= "</td></tr></table>\n"
           .((!empty($on_bottom)) ? "" :
            "<table class=\"titlebar\">\n"
           ."<tr><td class=\"title\">\n"
           .$this->set_title()."\n"
           ."</td></tr></table>\n")
           .(empty($lang_sel) ? "" : "</form>\n");

      return $str;
  }

  // Color explanation
  function color_explain() {
    global $BBC_MAXTIME, $BBC_MAXVISIBLE, $translation;

    return "<p><i>".$translation['dstat_visible_rows'].": $BBC_MAXVISIBLE&nbsp;|&nbsp;\n"
          ."<span class=\"lessthan_row\">&nbsp;".$translation['dstat_last_visit']." &lt; $BBC_MAXTIME ".$translation['misc_second_unit']."&nbsp;</span>&nbsp;|&nbsp;\n"
          ."<span class=\"morethan_row\">&nbsp;".$translation['dstat_last_visit']." &gt; $BBC_MAXTIME ".$translation['misc_second_unit']."&nbsp;</span>&nbsp;|&nbsp;\n"
          ."<span class=\"robot_row\">&nbsp;".$translation['dstat_robots']."&nbsp;</span>&nbsp;|&nbsp;\n"
          ."<span class=\"my_visit_row\">&nbsp;".$translation['dstat_my_visit']."&nbsp;</span></i></p>\n";
  }

  // Determine the color style of the connection
  function connect_color_class($connect) {
    global $BBC_MAXTIME, $BBC_TIMESTAMP, $BBC_TIME_OFFSET;
    if (_BBC_PHP < 410) global $HTTP_SERVER_VARS;

    // It was you
    if (((_BBC_PHP < 410) ? $HTTP_SERVER_VARS["REMOTE_ADDR"] : $_SERVER["REMOTE_ADDR"]) == $connect['ip']) return 'my_visit_row';
    // else, it was an access within $BBC_TIME_OFFSET
    elseif ((($BBC_TIMESTAMP + ($BBC_TIME_OFFSET * 60)) - $connect['time']) < $BBC_MAXTIME) return "lessthan_row";
    // else, it is red if it is a robot
    elseif (!empty($connect['robot'])) return "robot_row";
    // or blue if something else
    else return "morethan_row";
  }

  // BBClone copyright notice
  function copyright() {
  global $BBC_CONF_PATH, $BBC_IMAGES_PATH, $BBC_VERSION, $BBC_EXT_LOOKUP, $translation;

  // Get Build No
  if (is_readable($BBC_CONF_PATH."build_version.inc")) {
    $BBC_BUILD_NO = trim(file_get_contents($BBC_CONF_PATH."build_version.inc"));
    if ($BBC_BUILD_NO !='') $BBC_BUILD = " (build ".$BBC_BUILD_NO.")";
  } else {
    $BBC_BUILD = "";
  }
  

  return "<p><a href=\"http://www.bbclone.de/\">BBClone ".$BBC_VERSION.$BBC_BUILD." ".$BBC_EXT_LOOKUP."</a>&nbsp;&copy;&nbsp;".$translation['global_bbclone_copyright']
        ."&nbsp;<a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>\n"
        ."&nbsp;<a href=\"http://validator.w3.org/check?url=referer\">"
        ."<img src=\"".$BBC_IMAGES_PATH."valid-xhtml10.png\" class=\"validicon\" alt=\"Valid XHTML 1.0!\" title=\"Valid XHTML 1.0!\" /></a>\n"
        ."&nbsp;<a href=\"http://jigsaw.w3.org/css-validator/check/referer\">"
        ."<img src=\"".$BBC_IMAGES_PATH."valid-css.png\" class=\"validicon\" alt=\"Valid CSS!\" title=\"Valid CSS!\" /></a>\n"
        ."&nbsp;<a href=\"http://tidy.sourceforge.net\">"
        ."<img src=\"".$BBC_IMAGES_PATH."valid-tidy.png\" class=\"validtidy\" alt=\"Valid HTML Tidy!\" title=\"Valid HTML Tidy!\" /></a></p>\n"
        ;
  }

  // End of all BBClone HTML documents
  function html_end() {
    return "</body>\n"
          ."</html>\n";
  }
}
?>
