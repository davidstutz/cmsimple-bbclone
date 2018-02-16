<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: new_connect.php 356 2015-12-11 10:49:19Z joku $
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

/////////////////
// New Connect //
/////////////////

function bbc_get_extension($host, $addr) {
	global $BBC_EXT_LOOKUP;
	
	$ext = "";
	if ($BBC_EXT_LOOKUP) {
		// if plugin is defined, then try lookup via plugin
		$ext = bbc_extension_plugin($host, $addr);
	}
	
	if ($ext) {
		// plugin did find answer, so return it
		return $ext;
	}
	
	// plugin did not find extention, try taking the last part of the hostname

	$ext = strtolower(substr($host, (strrpos($host, ".") + 1)));
	if (preg_match(":^[0-9]+$:", $ext)) {
		return "ipv4";
	} else if (strpos($host, ":") >0) {
		return "ipv6";
	} else if (strpos($host, ".") === false) {
		return "unknown";
	} else {
		return $ext;
	}
}


function bbc_update_connect($connect) {
  global $BBC_LIB_PATH;

  // Sanity check has already been made in mark_page.php
  foreach (array("browser", "os", "robot") as $i) require($BBC_LIB_PATH.$i.".php");

  $connect['visits'] = 1;

  // Detecting robots, browsers and os
  foreach (array("robot", "browser", "os") as $rule) {
    reset($$rule);

    while (list(${$rule."_name"}, ${$rule."_elem"}) = each($$rule)) {
      reset(${$rule."_elem"}['rule']);

      while (list($pattern, $note) = each(${$rule."_elem"}['rule'])) {
		if (!preg_match('~'.$pattern.'~i', $connect['agent'], $regs)) continue;
        $connect[$rule] = ${$rule."_name"};

        if (preg_match(":\\\\[0-9]{1}:" ,$note)) {
          $str = preg_replace(":\\\\([0-9]{1}):", "\$regs[\\1]", $note);

          eval("\$str = \"$str\";");

          $connect[$rule."_note"] = $str;
        } else if (preg_match(":^text\:.*:", $note)) {
          $connect[$rule."_note"] = substr($note, 5);
        }
        break 2;
      }
    }
    if (!empty($connect['robot'])) break;
  }
  return $connect;
}

function bbc_update_access($connect) {
  global $access;

  // Assign an identification number to the new connection
  $connect['id'] = isset($access['stat']['totalcount']) ? ($access['stat']['totalcount'] + 1) : 1;

  // Recording the detected extension in the global statistics
  $access['stat']['ext'][$connect['ext']] = !isset($access['stat']['ext'][$connect['ext']]) ? 1 :
                                            ++$access['stat']['ext'][$connect['ext']];

  foreach (array("robot", "browser", "os") as $type) {
    if (($type == "robot") && (empty($connect[$type]))) continue;

    if (isset($access['stat'][$type][$connect[$type]])) $access['stat'][$type][$connect[$type]]++;
    else $access['stat'][$type][$connect[$type]] = 1;

    if (($type == "robot") && (!empty($connect[$type]))) break;
  }
  return $connect;
}
?>