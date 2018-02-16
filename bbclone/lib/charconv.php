<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: charconv.php 356 2015-12-11 10:49:19Z joku $
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

//////////////////////////////
// Character set conversion //
//////////////////////////////

function bbc_get_encoding($str) {
  global $BBC_LANGUAGE;

  switch ($BBC_LANGUAGE) {
    case "bg":
    case "mk":
    case "ru":
    case "uk":
      return mb_detect_encoding($str, "UTF-8, KOI8-R, Windows-1251");

    case "ja":
      return mb_detect_encoding($str, "JIS, UTF-8, EUC-JP, SJIS");

    case "ko":
      return mb_detect_encoding($str, "UTF-8, EUC-KR, ISO-2022-KR");

    default:
      // Note that iso-8859-1 is only a placeholder, the focus lies on detecting UTF-8...
      return (mb_detect_encoding($str, "UTF-8, iso-8859-1") == "UTF-8") ? "UTF-8" : false;
  }
}

function bbc_convert_keys($str, $from, $to) {
  if (($from !== false) && defined("_BBC_MBSTRING") && preg_match(":iso-8859-|EUC-(JP|KR)|gb2312:", $to) ||
      (!empty($BBC_CUSTOM_CHARSET) && stristr("UTF", $BBC_CUSTOM_CHARSET))) {
      return mb_convert_encoding($str, $to, $from);
  }
  elseif (($from !== false) && defined("_BBC_ICONV")) return iconv($from, $to."//TRANSLIT", $str);
  elseif (defined("_BBC_RECODE")) return recode_string($to, $str);

  else return $str;
}

// Note: Specify $BBC_CUSTOM_CHARSET to overwrite the default character set.
function bbc_convert_lang($str, $from, $char) {
  global $BBC_LANGUAGE;

  if (!empty($char)) return bbc_convert_keys($str, $from, $char);

  switch ($BBC_LANGUAGE) {

// Cyrillic encodings
    case "bg":
    case "mk":
    case "ru":
    case "uk":
      return bbc_convert_keys($str, $from, "Windows-1251");

// Central and East European encodings
    case "bs":
    case "cs":
    case "hu":
    case "pl":
    case "ro":
    case "sk":
    case "sl":
      return bbc_convert_keys($str, $from, "iso-8859-2");

// Various encodings
    case "ar":
      return bbc_convert_keys($str, $from, "Windows-1256");

    case "el":
      return bbc_convert_keys($str, $from, "iso-8859-7");

    case "ja":
      return bbc_convert_keys($str, $from, "EUC-JP");

    case "ko":
      return bbc_convert_keys($str, $from, "EUC-KR");

    case "lt":
      return bbc_convert_keys($str, $from, "Windows-1257");

    case "tr":
      return bbc_convert_keys($str, $from, "Windows-1254");

    case "zh-cn":
      return bbc_convert_keys($str, $from, "gb2312");

    case "zh-tw":
      return bbc_convert_keys($str, $from, "big5");

// All remaining languages not mentioned anywhere else
    default:
      return bbc_convert_keys($str, $from, "iso-8859-15");
  }
}
?>