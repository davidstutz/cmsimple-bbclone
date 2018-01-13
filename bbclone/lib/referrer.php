<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: referrer.php 356 2015-12-11 10:49:19Z joku $
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

//////////////
// Referrer //
//////////////

// referer stats
function bbc_sum_item($keep, $remove) {
  global $access;

  $access['referer'][$keep] += $access['referer'][$remove];

  unset($access['referer'][$remove]);
}

function bbc_update_referer_stat($referer) {
  global $access;

  if ($referer == "ignored") {
    $access['referer']['ignored'] = !isset($access['referer']['ignored']) ? 1 : ++$access['referer']['ignored'];
    return;
  }

  $referer_light = substr(strstr($referer, "://"), 3);

  if (empty($referer_light)) {
    $access['referer']['not_specified'] = !isset($access['referer']['not_specified']) ? 1 :
                                          ++$access['referer']['not_specified'];
    return;
  }

  if (($qm = strpos($referer_light, "?")) !== false) $referer_light = substr($referer_light, 0, $qm);
  if ((($parent = dirname($referer_light)) == ".") || ($parent === false)) {
    $referer_light = (substr($referer_light, -1) == "/") ? $referer_light : $referer_light."/";
  }
  else $referer_light = $parent."/";

  // compare whether we got a "www.*" equivalent recorded (or missing)
  $prefix = substr($referer_light, 0, ($tmp = strpos($referer_light, ".")));
  $suffix = substr($referer_light, ++$tmp);
  $result = ($prefix != "www") ? "www.".$referer_light : $suffix;
  // patterns for old records without trailing slashes
  $ref_no_slash = substr($referer_light, 0, -1);
  $res_no_slash = substr($result, 0, -1);

  // neither recorded with "www." nor without, seems to be our 1st visit ;)
  if (!isset($access['referer'][$referer_light]) && !isset($access['referer'][$result])) {
    $access['referer'][$referer_light] = 1;
  }
  // if there are old records without trailing slashes we will add them to our score too...
  elseif (!isset($access['referer'][$referer_light]) && isset($access['referer'][$result])) {
    isset($access['referer'][$res_no_slash]) ? bbc_sum_item($result, $res_no_slash) : "";

    ++$access['referer'][$result];
  }
  // same here...
  elseif (isset($access['referer'][$referer_light]) && !isset($access['referer'][$result])) {
    isset($access['referer'][$res_no_slash]) ? bbc_sum_item($referer_light, $res_no_slash) : "";

    ++$access['referer'][$referer_light];
  }
  // Now we got both of them, let's continue with the one we got most of
  else {
    if ($access['referer'][$referer_light] < $access['referer'][$result]) {
      bbc_sum_item($result, $referer_light);

      ++$access['referer'][$result];
    }
    else {
      bbc_sum_item($referer_light, $result);

      ++$access['referer'][$referer_light];
    }
  }
}

function bbc_fix_refer_stat($refsum) {
  global $access;

  $access['bugs']['ref_fix'] = 1;
  $access['referer']['not_specified'] = $access['stat']['totalcount'] - $refsum + $access['referer']['not_specified'];
}

function bbc_get_sep($query, $array) {
  // puts the query into an array

  foreach ($array as $match) {
    $has_sep = (strpos($query, $match) !== false) ? true : false;
    $pool = $has_sep ? explode($match, $query) : array($query);

    for ($i = 0, $max = count($pool); $i < $max; $i++) {
      // unsafe decoded characters could hose our stats
      $pool[$i] = preg_replace("%^[`\'\"<>@\^\!\?/\(\)\[\]\{\}|+*~#;,.:_\-]+%", "", $pool[$i]);
      $pool[$i] = preg_replace("%[`\'\"<>@\^\!\?/\(\)\[\]\{\}|+*~#;,.:_\-]+$%", "", $pool[$i]);

      if (empty($pool[$i]) || (strlen($pool[$i]) < 2)) {
        unset($pool[$i]);
        continue;
      }
    }
    if ($has_sep) return array_values($pool);
  }
  return array_values($pool);
}

function bbc_get_search($array) {
  // turns variable assignments to an associative array
  $result = false;
  $query = array(
    "^as_(ep|o|e)?q=",
    "^q(_(a(ll|ny)|phrase|not)|s|t|u(ery)?)?=",
    "^s(u|2f|p\-q|earch(_?for)?|tring|zukaj)?=",
    "^k(w|e(reses|y(word)?s?))=",
    "^b(egriff|uscar?)=",
    "^w(d|ords?)?=",
    "^te(rms?|xt)=",
    "^mi?t=",
    "^heureka=",
    "^p=",
    "^r(eq)?=",
    "/search/web/",
    "^userQuery=",
    "^v[aeop]="
  );

  foreach ($array as $string) {
    $string = urldecode($string);

    // skip empty GET variables
    if (substr($string, -1) == "=") continue;

    foreach ($query as $key) {
      preg_match(":$key:", $string, $matches);
      if (empty($matches)) continue;

      $par = $matches[0];
      $pos = strpos($string, $par);
      $term = substr($string, ($pos + strlen($par)));

      if (strlen($term) < 2) {
        $matches = array();
        continue;
      }

      if (($par[0] == "q") || ($par[0] == "s")) return $term;
    }
    $result = (!empty($matches)) ? $term : $result;
  }
  return $result;
}

function bbc_get_keywords($ref) {
  global $BBC_CUSTOM_CHARSET, $access;

  $var_sep =  array("&", "|");
  $word_sep = array( "+", " ", "/");
  $match = array(
    "ara", "busca", "pesquis", "search", "srch", "seek", "zoek", "result", "szuka", "cherch", "such", "find",
    "trouve", "trova", "pursuit", "keres", "katalogus", "alltheinternet.com", "mamma.com", "baidu.com", "heureka.hu",
    "kartoo.com", "ask.com", "aport.ru", "google", "yahoo"
  );

  foreach ($match as $key) {
    // if string occurs at the beginning strpos() returns integer 0, if it can't be
    // found at all, however, it returns boolean false => definition required which
    // considers 0 as true
    $is_search = (strpos(strtolower($ref), $key) !== false) ? true : false;

    if ($is_search) break;
  }

  if (!$is_search) return false;

  $ref = str_replace("&amp;", "&", urldecode($ref));
  $is_query = strrpos($ref, "?");
  $ref = ($is_query !== false) ? substr($ref, ++$is_query) : substr($ref, (strpos($ref, "://") + 3));
  $get_vars = bbc_get_sep($ref, $var_sep);
  $raw_search = bbc_get_search($get_vars);

  if ($raw_search === false) return false;

  // Conversion of keywords, if applicable
  $from = extension_loaded("mbstring") ? bbc_get_encoding($raw_search) : false;
  $char = (!empty($BBC_CUSTOM_CHARSET)) ? $BBC_CUSTOM_CHARSET : false;
  $raw_search = (($from !== false) || extension_loaded("recode")) ?
                bbc_convert_lang($raw_search, $from, $char) : $raw_search;
  $flt_search = bbc_get_sep($raw_search, $word_sep);

  for ($i = 0, $j = count($flt_search); $i < $j; $i++) {
    // Filter search engine cache indicator
    if ((strlen($flt_search[$i]) > 50) || (strlen($flt_search[$i]) < 2) ||
        (preg_match("#^(cache|tbn)\:[a-z0-9_\-]{8,16}\:#", $flt_search[$i]))) {
      unset($flt_search[$i]);
      continue;
    }

    // strtolower messes up UTF-8 so we leave things case sensitive if it's
    // requested as charset
    $flt_search[$i] = (!$char || (stristr($char, "UTF") === false)) ?
                      strtolower(bbc_clean($flt_search[$i])) : bbc_clean($flt_search[$i]);

    $access['key'][($flt_search[$i])] = !isset($access['key'][($flt_search[$i])]) ? 1 :
                                        ++$access['key'][($flt_search[$i])];
  }
  return (!empty($flt_search) ? $flt_search : false);
}
?>