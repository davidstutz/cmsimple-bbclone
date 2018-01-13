<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: ext_lookup_ip2ext.php 356 2015-12-11 10:49:19Z joku $
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

//////////////////////////////////////////
// Plug-in: Extension look-up by IP2EXT //
//////////////////////////////////////////

function bbc_extension_plugin($host, $addr) {
  global $BBC_IP2EXT_PATH;

  // generic extensions which need to be looked up first
  $gen_ext = array(
    "ac", "aero", "ag", "arpa", "as", "biz", "cc", "cd", "com", "coop", "cx", "edu", "eu", "gb", "gov", "gs", "info",
    "int", "mil", "ms", "museum", "name", "net", "nu", "org", "pro", "sc", "st", "su", "tk", "to", "tv", "vu", "ws"
  );
  // hosts with reliable country extension don't need to be looked up
  $cnt_ext = array(
    "ad", "ae", "af", "ai", "al", "am", "an", "ao", "aq", "ar", "at", "au", "aw", "az", "ba", "bb", "bd", "be", "bf",
    "bg", "bh", "bi", "bj", "bm", "bn", "bo", "br", "bs", "bt", "bv", "bw", "by", "bz", "ca", "cf", "cg", "ch", "ci",
    "ck", "cl", "cm", "cn", "co", "cr", "cs", "cu", "cv", "cy", "cz", "de", "dj", "dk", "dm", "do", "dz", "ec", "ee",
    "eg", "eh", "er", "es", "et", "fi", "fj", "fk", "fm", "fo", "fr", "ga", "gd", "ge", "gf", "gg", "gh", "gi", "gl",
    "gm", "gn", "gp", "gq", "gr", "gt", "gu", "gw", "gy", "hk", "hm", "hn", "hr", "ht", "hu", "id", "ie", "il", "im",
    "in", "io", "iq", "ir", "is", "it", "je", "jm", "jo", "jp", "ke", "kg", "kh", "ki", "km", "kn", "kp", "kr", "kw",
    "ky", "kz", "la", "lb", "lc", "li", "lk", "lr", "ls", "lt", "lu", "lv", "ly", "ma", "mc", "md", "mg", "mh", "mk",
    "ml", "mm", "mn", "mo", "mp", "mq", "mr", "mt", "mu", "mv", "mw", "mx", "my", "mz", "na", "nc", "ne", "nf", "ng",
    "ni", "nl", "no", "np", "nr", "nz", "om", "pa", "pe", "pf", "pg", "ph", "pk", "pl", "pm", "pn", "pr", "ps", "pt",
    "pw", "py", "qa", "re", "ro", "ru", "rw", "sa", "sb", "sd", "se", "sg", "sh", "si", "sj", "sk", "sl", "sm", "sn",
    "so", "sr", "sv", "sy", "sz", "tc", "td", "tf", "tg", "th", "tj", "tl", "tm", "tn", "tp", "tr", "tt", "tw", "tz",
    "ua", "ug", "uk", "um", "us", "uy", "uz", "va", "vc", "ve", "vg", "vi", "vn", "wf", "ye", "yt", "yu", "za", "zm",
    "zr", "zw"
  );

  $file = $BBC_IP2EXT_PATH.(substr($addr, 0, strpos($addr, ".")).".inc");
  $ext = strtolower(substr($host, (strrpos($host, ".") + 1)));

  // Don't look up if there's already a country extension
  if (in_array($ext, $cnt_ext)) return $ext;
  if (!is_readable($file)) return "";

  $long = ip2long($addr);
  $long = sprintf("%u", $long);
  $fp = fopen($file, "rb");

  $db_ext = "";
  while (($range = fgetcsv($fp, 64, "|")) !== false) {
    if (($long >= $range[1]) && ($long <= ($range[1] + $range[2] - 1))) {
      // don't hose our stats if the database returns an unexpected extension
      $db_ext = (in_array($range[0], $cnt_ext) || in_array($range[0], $gen_ext)) ? $range[0] : "";
      break;
    }
  }
  fclose($fp);

  return $db_ext;
}

?>