<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: marker.php 356 2015-12-11 10:49:19Z joku $
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

////////////
// Marker //
////////////

// Main Class Counter
class bbc_marker {
  var $sep, $filename, $ignored, $string;

  // randomly choose a counter file to write to
  function bbc_counter_file($cache_path, $counter_pre, $counter_suf) {
    global $BBC_COUNTER_FILES;

    mt_srand((double) microtime() * 1000000);
    return ($cache_path.$counter_pre.mt_rand(0, ($BBC_COUNTER_FILES - 1)).$counter_suf);
  }

  function bbc_known_range($addr, $class_a) {
    // look up whether an address is registerred
    global $BBC_IP2EXT_PATH;

    $long = sprintf("%u", ip2long($addr));
    $file = $BBC_IP2EXT_PATH.$class_a.".inc";
    $is_valid = false;

    if (!is_readable($file)) return false;

    $fp = fopen($file, "rb");

    while (($range = fgetcsv($fp, 32, "|")) !== false) {
      if (($long >= $range[1]) && ($long < ($range[1] + $range[2]))) {
        $is_valid = true;
        break;
      }
    }
    fclose($fp);
    return ($is_valid ? true : false);
  }

  // validates a hostname or ip address
  function bbc_valid_ip($addr, $prx = 0) {
    $iptest = explode(".", $addr);
    $iptest = defined("_rev") ? array_reverse($iptest) : $iptest;
    $oct = count($iptest);

    if ($oct != 4) return false;

    for ($i = 0; $i < $oct; $i++) {
      $iptest[$i] = trim($iptest[$i]);

      if ((!preg_match(":^[0-9]{1,3}$:", $iptest[$i])) || ($iptest[$i] > 255)) return false;
    }

    if (($iptest[0] < 1) || ($iptest[0] > 223) || ($iptest[3] < 1) || ($iptest[3] > 254) ||
        (($prx) && ($this->bbc_known_range($addr, $iptest[0]) === false))) return false;

    return (defined("_rev") ? implode(".", $iptest) : $addr);
  }

  // converts a hexadecimal ip address to the dotted format if applicable
  function bbc_hex2ip($str) {
    if (!preg_match(":[a-fA-F0-9]{8}:", $str)) return $str;

    $arr = explode(".", wordwrap($str, 2, ".", 2));

    for ($i = 0, $k = count($arr); $i < $k; $i++) $arr[$i] = trim(hexdec($arr[$i]));
    return ($arr[0].".".$arr[1].".".$arr[2].".".$arr[3]);
  }

  // returns the first valid host
  function bbc_select_host($array) {
    arsort($array, SORT_NUMERIC);

    foreach ($array as $key => $val) {
      $key = $this->bbc_hex2ip(trim($key));

      if (($prx = $this->bbc_valid_ip($key, 1)) !== false) return $prx;
    }
    return false;
  }

  // extract the first valid address from a chain
  function bbc_unchain_addr($val) {
    if (strpos($val, ",") === false) return $val;

    $array = explode(",", $val);

    for ($i = 0, $max = count($array); $i < $max; $i++) $array[$i] = trim($array[$i]);
    return $this->bbc_select_host(array_flip($array));
  }

  // return the correct remote address
  function bbc_get_remote_addr($addr, $reverse) {
    $addr = $this->bbc_unchain_addr($addr);
    $reverse = $this->bbc_unchain_addr($reverse);

    if ((!empty($reverse)) && ($this->bbc_valid_ip($addr, 1) === false)) return $reverse;
    elseif (empty($addr)) return "127.0.0.1";
    else return ((substr($addr, 0, strpos($addr, ".")) == 127) ? "127.0.0.1" : $addr);
  }

  // check for client in proxy headers
  function bbc_parse_headers() {
    if (_BBC_PHP < 410) global $HTTP_SERVER_VARS;

    foreach (((_BBC_PHP < 410) ? $HTTP_SERVER_VARS : $_SERVER) as $key => $val) {
      if (!(substr($key, 0, strpos($key, "_")) == "HTTP")) continue;

      if ((stristr($val, " for ") !== false)) {
        $tmp = explode(" for ", strtolower($val));
        $tmpval = trim($tmp[count($tmp) - 1]);
        $tmpval = $this->bbc_unchain_addr($tmpval);
        $chk[$tmpval] = isset($chk[$tmpval]) ? ++$chk[$tmpval] : 1;
      }
      if ((strpos($key, "_CLIENT") !== false) || (substr($key, -4) == "_FOR")) {
        $val = $this->bbc_unchain_addr($val);
        $chk[$val] = isset($chk[$val]) ? ++$chk[$val] : 1;
      }
      // If we find this, the client's ip address needs to be reversed
      if (($key == "HTTP_VIA") && (preg_match("|Traffic[ \-]?Server/5\.2\.0|i", $val))) {
        !defined("_rev") ? define("_rev", 1) : "";
      }
    }
    return (!empty($chk) ? $this->bbc_select_host($chk) : false);
  }

  // Check if an ip address is matching up against the blacklist
  function bbc_is_ignored($blacklist, $client) {
    $ipmatch = (empty($blacklist) ? "" : explode(",", $blacklist));

    if (empty($ipmatch)) return false;

    for($i = count($ipmatch) - 1; $i >= 0; $i--) {
      $test = trim($ipmatch[$i]);

      if (substr($client, 0, strlen($test)) === $test) return true;
    }
    return false;
  }

  // checking for matching hosts which we have to ignore. We assume that a
  // keyword with leading slash implies an uri and everything else a hostname
  function bbc_ignore_ref($array) {
    global $BBC_IGNORE_REFER;

    if (!empty($BBC_IGNORE_REFER)) {
      foreach(explode(",", $BBC_IGNORE_REFER) as $test) {
        $test = trim($test);
        $is_path = ($test[0] == "/") ? true : false;

        if (stristr(($is_path ? $array[2] : $array[1]), $test) !== false) return true;
      }
    }
    return false;
  }

  // checks for a valid url format
  function bbc_valid_ref($ref) {
    $tmp = explode(":", $ref);

    for ($i = 0, $k = count($tmp); $i < $k; $i++) $tmp[$i] = trim($tmp[$i]);
    return (((($tmp[0] == "http") || ($tmp[0] == "https")) && (substr($tmp[1], 0, 2) == "//")) ? true : false);
  }

  //converts a referrer to an array with the hostname, ip address and the full referrer
  function bbc_parse_ref($ref) {
    if (!$this->bbc_valid_ref($ref)) return false;

    // getting rid of stupid user input
    $ref = str_replace(":/", "://", preg_replace(":/+:", "/", $ref));
    $ref = preg_replace(":\.+(/|$):", "\\1", $ref);
    $ref = substr(strstr($ref, "://"), 3);

    $uri = (($slash = strpos($ref, "/")) !== false) ? substr($ref, $slash) : "/";
    $host_raw = strtolower((($slash !== false) ? substr($ref, 0, $slash) : $ref));
    $host = (($port = strpos($host_raw, ":")) !== false) ? substr($host_raw, 0, $port) : $host_raw;

    return (preg_match("|^[a-zA-Z0-9._\-]{2,64}$|", $host) ? array("http://".$host_raw.$uri, $host, $uri) : false);
  }

  // determine and filter stuff which came from the local server
  function bbc_filter_ref($srvhost, $ref, $srvname, $srvaddr) {
    $ref_array = $this->bbc_parse_ref($ref);

    if (is_array($ref_array) && ($this->bbc_ignore_ref($ref_array) !== false)) return "ignored";

    if (!$ref_array || ($ref_array[1] == $srvaddr) || ($ref_array[1] == $srvname) ||
        ((substr($ref_array[1], 0, 4) == "127.") || (substr($ref_array[1], 0, 2) == "0.")) ||
        ((substr($srvname, 0, 4) == "www.") && (substr($srvname, 4) == $ref_array[1])) ||
        ((substr($ref_array[1], 0, 4) == "www.") && (substr($ref_array[1], 4) == $srvname)) ||
        (!empty($srvhost) && (($srvhost == $ref_array[1]) ||
         ((substr($srvhost, 0, 4) == "www.") && (substr($srvhost, 4) == $ref_array[1])) ||
         ((substr($ref_array[1], 0, 4) == "www.") && (substr($ref_array[1], 4) == $srvhost))))) {
      return "unknown";
    }
    else return $ref_array[0];
  }

  // avoid trails of query strings which aren't relevant for page counting
  function bbc_filter_uri($script, $pinfo, $uri) {
  	global $BBC_USE_ORIGINAL_URI;
  	
  	// check if we should use original uri, else we filter uri by default
  	if ((!empty($BBC_USE_ORIGINAL_URI))) {
  		return $uri;
  	}
    // filter -> getting rid of stupid user input
    foreach (array("pinfo", "uri") as $path) {
      ${$path} = str_replace(":/", "://", preg_replace(":/+:", "/", ${$path}));
      ${$path} = preg_replace(":\.+(/|$):", "\\1", ${$path});
    }

    // On some systems path info is just an alias for the script uri
    $pinfo = ($uri == $pinfo) ? 0 : $pinfo;

    $uri = !empty($pinfo) ? substr($uri, 0, (strlen($uri) - strlen($pinfo))) : $uri;
    $uri = (basename($uri) !== $script) ? (((($dir = dirname($uri)) == ".") || (empty($dir))) ? "/" : $dir."/")
           .$script : $uri;

    $test = explode(".", $script);
    $tmp = strtolower(trim($test[0]));
    $tmp = ((count($test) == 2) && (($tmp == "index") || ($tmp == "default"))) ? true : false;

    return (($tmp !== false) ? substr($uri, 0, (strrpos($uri, "/") + 1)) : (empty($uri) ? "/" : $uri));
  }

  // automatic page name generation in case of not being specified
  function bbc_auto_page_name($uri) {
    if (!is_string($uri) || empty($uri) || ($uri == "/")) return "index";

    $uri = (substr($uri, -1) == "/") ? substr($uri, 1, -1) : ((($dot = strrpos($uri, ".")) !== false) ?
           substr($uri, 1, --$dot) : substr($uri, 1));
    $uri = strtr($uri, array("/" => " -&gt; ", "_" => " "));

    return ucwords($uri);
  }

  // write the entry
  function bbc_write_entry() {
    global $BBC_CACHE_PATH;

    $file = $this->filename;
    $base = basename($file);

    if (!is_readable($file)) return array($base, "r");
    if (!is_writable($file)) return array($base, "w");

    $fp = defined("_BBC_DIO") ? dio_open($file, O_RDWR | O_APPEND) : fopen($file, "ab+");

    if (defined("_BBC_DIO") && (dio_fcntl($fp, F_SETLK, 1) !== -1)) {
      dio_write($fp, $this->string);
      dio_fcntl($fp, F_SETLK, 0);

      $ok = 1;
    }
    else {
      if (defined("_BBC_SEM") ? ($id = bbc_semlock($file)) : flock($fp, LOCK_EX)) {
        fputs($fp, $this->string);
        fflush($fp);
        defined("_BBC_SEM") ? sem_release($id) : flock($fp, LOCK_UN);

        $ok = 1;
      }
    }
    defined("_BBC_DIO") ? dio_close($fp) : fclose($fp);

    return (isset($ok) ? array($base, "o") : array($base, "l"));
  }

  // constructor
  function bbc_marker() {
    if (_BBC_PHP < 410) global $HTTP_SERVER_VARS;

    global $BBC_CACHE_PATH, $BBC_COUNTER_PREFIX, $BBC_COUNTER_SUFFIX, $BBC_IGNORE_IP, $BBC_SEP, $BBC_TIMESTAMP,
           $BBC_TIME_OFFSET, $DOCUMENT_ROOT, $HTTP_HOST, $HTTP_X_REMOTECLIENT_IP, $LOCAL_ADDR, $PATH_INFO,
           $PHP_SELF, $SCRIPT_FILENAME, $SERVER_NAME;

    $this->sep = $BBC_SEP;
    $this->ignored = false;
    $this->filename = $this->bbc_counter_file($BBC_CACHE_PATH, $BBC_COUNTER_PREFIX, $BBC_COUNTER_SUFFIX);

	$time = $BBC_TIMESTAMP + ($BBC_TIME_OFFSET * 60);

    // loads of initialisations
    $hdr = array("DOCUMENT_ROOT", "HTTP_USER_AGENT", "LOCAL_ADDR", "REMOTE_HOST", "REMOTE_ADDR", "HTTP_HOST",
                 "HTTP_REFERER", "HTTP_X_REMOTECLIENT_IP", "ORIG_PATH_INFO", "ORIG_PATH_TRANSLATED",
                 "ORIG_SCRIPT_FILENAME", "PATH_INFO", "PATH_TRANSLATED", "HTTP_PC_REMOTE_ADDR", "PHP_SELF",
                 "SCRIPT_FILENAME", "SERVER_NAME", "SERVER_ADDR");

    foreach ($hdr as $str) {
      $$str = ((_BBC_PHP < 410) ? !empty($HTTP_SERVER_VARS[$str]) : !empty($_SERVER[$str])) ?
               bbc_clean(((_BBC_PHP < 410) ? $HTTP_SERVER_VARS[$str] : $_SERVER[$str]), $BBC_SEP) : false;
    }

    // determine whether we got the "ORIG_" prefix
    foreach (array("PATH_INFO", "PATH_TRANSLATED", "SCRIPT_FILENAME") as $env) {
      $$env = !empty(${"ORIG_".$env}) ? ${"ORIG_".$env} : $$env;
    }

    $filename = (empty($PATH_TRANSLATED) || ($PATH_TRANSLATED == $DOCUMENT_ROOT)) ? basename($SCRIPT_FILENAME) :
                 basename($PATH_TRANSLATED);
    $REMOTE_ADDR = ((stristr(PHP_OS, "darwin") !== false) && !empty($HTTP_PC_REMOTE_ADDR)) ? $HTTP_PC_REMOTE_ADDR :
                   $REMOTE_ADDR;
    $REQUEST_URI = $this->bbc_filter_uri($filename, $PATH_INFO , $PHP_SELF);
    $SERVER_ADDR = empty($SERVER_ADDR) ? $LOCAL_ADDR : $SERVER_ADDR;
    $SERVER_ADDR = $this->bbc_valid_ip($SERVER_ADDR) ? $SERVER_ADDR : "127.0.0.1";
    $HTTP_USER_AGENT = empty($HTTP_USER_AGENT) ? "unknown" : $HTTP_USER_AGENT;
    $HTTP_REFERER = empty($HTTP_REFERER) ? "unknown" :
                    $this->bbc_filter_ref($HTTP_HOST, $HTTP_REFERER, $SERVER_NAME, $SERVER_ADDR);
    // Use a page name even if the user didn't specify it
    $page = defined("_BBC_PAGE_NAME") ? bbc_clean(_BBC_PAGE_NAME, $BBC_SEP) : $this->bbc_auto_page_name($REQUEST_URI);
    $prx = $this->bbc_parse_headers();

    if (!empty($prx)) {
      $prx_addr = $this->bbc_get_remote_addr($REMOTE_ADDR, $HTTP_X_REMOTECLIENT_IP);

      if (($this->ignored = $this->bbc_is_ignored($BBC_IGNORE_IP, $prx_addr)) !== false) return;
      else $REMOTE_ADDR = bbc_clean($prx, $BBC_SEP);
    }
    else {
      $prx_addr = "unknown";
      $REMOTE_ADDR = $this->bbc_get_remote_addr($REMOTE_ADDR, $HTTP_X_REMOTECLIENT_IP);
    }

    if (($this->ignored = $this->bbc_is_ignored($BBC_IGNORE_IP, $REMOTE_ADDR)) !== false) return;

    // "unknown" is meant as a placeholder for the hostname, which will be processed at a different location
    $this->string = $time.$this->sep.$prx_addr.$this->sep.$REMOTE_ADDR.$this->sep."unknown".$this->sep
                   .$HTTP_USER_AGENT.$this->sep.$HTTP_REFERER.$this->sep.$REQUEST_URI.$this->sep.$page."\n";
  }
}
?>