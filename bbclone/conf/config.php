<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: config.php 356 2015-12-11 10:49:19Z joku $
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

///////////////////////////
// BBClone Configuration //
///////////////////////////

// Part I: Options affecting the visual presentation

// If this variable has been set, a link to the specified location will be generated. The default value
// is pointing to the parent directory. In case your main site is located elsewhere, you probably want
// to adjust the value to suit your needs.
// Syntax:
// $BBC_MAINSITE = "http://www.myserver.com/";    => Link to the specified URL
// $BBC_MAINSITE = ".."                           => Link to parent directory (Default)
// $BBC_MAINSITE = "";                            => Show no link
$BBC_MAINSITE = "..";

// BBClone defaults to revealing the stats' settings. In case this behavior
// isn't desired you can deny access to it by deactivating the option.
// Syntax:
// $BBC_SHOW_CONFIG = 1;      => Display show_config.php
// $BBC_SHOW_CONFIG = "";     => Don't display show_config.php (Default)
$BBC_SHOW_CONFIG = "1";

// The title being displayed in the navigation bar of all bbclone pages.
// The following macros are recognised:
// %SERVER          => server name
// %DATE            => the current date
// Syntax:
// $BBC_TITLEBAR = ""; => "Statistics for %SERVER generated on %DATE" but language specific (Default)
// $BBC_TITLEBAR = "Some text"; => FIXED TEXT, not language specific)
// $BBC_TITLEBAR = "Statistics for %SERVER generated on %DATE"; => Example
$BBC_TITLEBAR = "";

// BBClone's default language, in case it hasn't been specified by the browser.
// It's strongly recommended you set your language (if listed) because will encode search
// engine keywords according to $BBC_LANGUAGE. You can, however, overwrite the default.
// See explanation of $BBC_CUSTOM_CHARSET for details.
// The following languages are supported:
// ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk,
// nb, nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn and zh-tw.
$BBC_LANGUAGE = "en";

// This variable defines the length of an unique visit in seconds. Each hit from the same visitor
// within this period will be considered as one visit, as long as two successive hits don't exceed
// the specified limit. Default is 30 minutes (1800 seconds), but depending on your needs
// you may wish to assign a different value.
// Syntax:
// $BBC_MAXTIME = 0;          => Treat each single hit as unique
// $BBC_MAXTIME = 1800;       => Treat every hit within 30 minutes by the same visitor as unique visit
$BBC_MAXTIME = 1800;

// How many entries you want to have listed in the detailed stats? The default value is 100.
// It's recommended not to set it higher than 500 to avoid too heavy load.
// A value of "0" will reset the detailed stats.
$BBC_MAXVISIBLE = 100;

// The following entries affect how much items will be displayed in each ranking of show_global.php.
// The second group can be reset by setting "0" as value.
$BBC_MAXBROWSER = 10;         // Browsers
$BBC_MAXEXTENSION = 10;       // Extensions
$BBC_MAXOS = 10;              // Operating Systems
$BBC_MAXROBOT = 10;           // Robots

$BBC_MAXHOST = 10;            // Hosts (reset possible)
$BBC_MAXKEY = 10;             // Keywords (reset possible)
$BBC_MAXORIGIN = 10;          // Referrers (reset possible)
$BBC_MAXPAGE = 10;            // Pages (reset possible)

// The variable $BBC_DETAILED_STAT_FIELDS Contains a comma separated list of
// all columns to be displayed in the detailed stats. You can choose from:

// id               => The x-th visitor since you've started counting
// time             => The time at which the last hit was registerred
// visits           => The hits of one unique visitor
// dns              => visitor's hostname
// ip               => visitor's ip address
// os               => The operating system (if available and/or no robot)
// browser          => The software used for establishing the connection
// ext              => visitor's country or extension
// referer          => The link from which a visitor came (if available)
// page             => the last visited page
// search           => The search query a visitor used (if available)

// The order of the list is also representative for the column's arrangement
// in the detailed stats
// Syntax:
// $BBC_DETAILED_STAT_FIELDS = "id, time, visits, ip, ext, os, browser";
// $BBC_DETAILED_STAT_FIELDS = "date, ext, browser, os, ip";
$BBC_DETAILED_STAT_FIELDS = "id, time, ext, dns, visits, os, browser, referer";

// Part II: Options affecting BBClone's functionality

// Before BBClone writes to a file it attempts to lock the file to prevent it
// from being corrupted. Should BBClone complain that it would not be able to
// lock files you can set an alternative method by using this switch. As a rule
// of thumb you should use the method BBClone is suggesting unless you have a
// very good reason not to use it. Possible options are "dio", "flk" and "sem"
// Syntax:
// $BBC_USE_LOCK = "flk";    => Use flock() (default)
// $BBC_USE_LOCK = "sem";    => Use SysV Semaphores (PHP >= 4.1.0 and Unix only)
// $BBC_USE_LOCK = "dio";    => Use Direct I/O (PHP >= 4.2.0 and Unix only)
$BBC_USE_LOCK = "flk";

// In case the server time doesn't match your local timezone, you can adjust the time in minutes by
// using this switch. Negative values will set back the time, positive ones will set it forth.
// Syntax:
// $BBC_TIME_OFFSET = 300;    => Set time forth by 5 hours (5 x 60 min)
// $BBC_TIME_OFFSET = -300;   => Set time back by 5 hours (5 x 60 min)
// $BBC_TIME_OFFSET = 0;      => Use the server time "as is" (Default)
$BBC_TIME_OFFSET = 0;

// This options defines, whether IP addresses should be resolved to hostnames or not. While hostnames
// tell a lot more about the visitor, resolving them may considerably slow down your site, if the
// DNS servers used are slow, limited in their capacity or otherwise unreliable.
// Setting this variable may solve the problem.
// Syntax:
// $BBC_NO_DNS = "";          => Resolve addresses to hostnames (Default)
// $BBC_NO_DNS = 1;           => Turn off name resolving
$BBC_NO_DNS = "";

// This options defines, whether IP addresses are looked up to determine location (country).
// Please read the terms of use and privacy policy of the provider before using this!
// These plug-ins are NO part of BBClone, please keep this in mind.
// Syntax:
// $BBC_EXT_LOOKUP = "";          => No external Look-Up used for IP address (Default)
// $BBC_EXT_LOOKUP = "IP2EXT";    => Use the old IP2EXT to Look-Up IP addresses
// $BBC_EXT_LOOKUP = "GEOIP";  	  => Use GeoIP API plug-in
// $BBC_EXT_LOOKUP = "GEOIP-mod"; => Use GeoIP PHP/Perl Module (geoip.so)
// (See http://www.maxmind.com for more details)
$BBC_GEOIP_PATH = "geoip/";
$BBC_EXT_LOOKUP = "";

// BBClone's default is to show hits in the time stats, because it gives a quite useful impression
// from the actual server load. If, however, you prefer to use unique visits as base for your
// time stats, you can change the way of counting by setting this variable.
// Syntax:
// $BBC_NO_HITS = "";         => Show hits in time stats (Default)
// $BBC_NO_HITS = 1;          => Show unique visits in time stats
$BBC_NO_HITS = "";

// This option can be used to exclude particular IP addresses or address ranges from counting.
// In case you want to add several expressions, use a comma as separator. This option does not
// accept any hostnames, you first have to convert them to IP addresses. You can, however,
// leave off octetts from right to left in order to block IP ranges (as illustrated in the example below).
// Syntax:
// $BBC_IGNORE_IP = "127., 192.168.";    => Ignore specified ranges
// $BBC_IGNORE_IP = "";                  => Don't ignore anything (Default)
$BBC_IGNORE_IP = "";

// In case you don't want to have particular referrers from your visitors listed
// in your ranking or detailed stats, you can define a comma separated list of
// keywords, each referrer will be checked against with. BBClone uses two
// detection modes:
// - If the expression starts with a slash, it will be considered as part of the
//   referrer uri. This is useful for blocking unwanted sites on freehosts
// - If the expression doesn't start with a slash, it will be compared with the
//   referrer host only. This is useful for specifying unwanted hosts without
//   accidentally blocking legitimate referrers from visitors
// Syntax:
// $BBC_IGNORE_REFER = "spambot.org, .escort.";   => Ignore specified matches
// $BBC_IGNORE_REFER = "";                        => Don't ignore anything
//                                                   (default)
$BBC_IGNORE_REFER = "";

// Include BBClone hits within the Stats
// Syntax:
// $BBC_HITS = 1;     => Include BBClone hits (Default)
// $BBC_HITS = "";    => Ignore BBClone hits
$BBC_HITS = 1;

// BBClone doesn't display any messages in its counting mode. Time and again,
// however you may wish to see what BBClone is doing or why it no longer is
// working. That's what the debug mode is for: If you activate it, you'll get
// a lot of lengthy messages, which should help you with your problem in most
// cases. Remember to turn this mode off again, as it isn't meant to run
// permanently.
// Syntax:
// $BBC_DEBUG = "";       => Run BBClone in its counting mode
// $BBC_DEBUG = 1;        => Turn on debugging for troubleshooting
$BBC_DEBUG = "";

// Part III Miscellaneous

// In case there's no translation for your language or you want to use a
// particular character set, you can overwrite the language used for converting
// keywords by setting your desired encoding here.
// Syntax:
// $BBC_CUSTOM_CHARSET = "UTF-8";  => Use UTF-8 as encoding
// $BBC_CUSTOM_CHARSET = "";       => Use the default charset of the translation
$BBC_CUSTOM_CHARSET = "";

// BBClone CSS File Name
// Please note; Within this css file you can change the way BBClone looks
// (for example change colors or what text size/fonts are used)
$BBC_CSS_FILE = "bbclone.css";

// Generate the page load-time in seconds at bottom of the page
// Syntax:
// $BBC_LOADTIME = "";       => No load-time generated (Default)
// $BBC_LOADTIME = 1;        => Generate load-time at bottom of the page
$BBC_LOADTIME = "";

// With this option you can enable whois search in Detailed Stats
//
// Please read the terms of use and privacy policy of the provider before using this!
//
// By default comment out and disabled, remove // to enable
// Syntax:
// $BBC_WHOIS ="http://whois.domaintools.com/";   => Example
// $BBC_WHOIS ="http://www.ripe.net/perl/whois?"; => Example
$BBC_WHOIS ="";

// You can use this option to determine the treatment of robots. The default is
// to ignore them in the top hosts ranking but leave them in the remaining
// stats. If you don't want to see any robots at all you can set this option to
// "2", then only human visits will be taken into account.
// Syntax:
// $BBC_IGNORE_BOTS = 2;      => Completely ignore robots
// $BBC_IGNORE_BOTS = 1;      => Don't list hostnames of robots (default)
// $BBC_IGNORE_BOTS = "";     => Treat robots as normal visitors
$BBC_IGNORE_BOTS = 1;

// This option defines how BBClone tells one visitor from another. Default is to
// use the IP address only, which provides realistic figures in most cases. If,
// however, your visitors often are hidden behind proxy servers, deactivation of
// this option could provide more realistic figures, since a new visitor will be
// assumed by the time the user agent has changed.
// Syntax:
// $BBC_IGNORE_AGENT = 1;     => Ignore different user agents of one visitor
// $BBC_IGNORE_AGENT = "";    => Treat each user agent change of one visitor as
//                               separate visit (default)
$BBC_IGNORE_AGENT = "";

// Enable this option when the "Top Visited Pages" URI's are not working due
// filtering of the URI. This can happen if you use BBClone with some Content
// Management Systems (CMS) which are using very long (complex) URI naming.
// IMPORTED NOTE: This option changes how URI's are recorded,
//                so you may need to reset the stats.
// Syntax:
// $BBC_USE_ORIGINAL_URI = 1;	=> No filtering, use original URI
// $BBC_USE_ORIGINAL_URI = "";	=> Filter URI (default)
$BBC_USE_ORIGINAL_URI = "";

// The max. number of characters for the page name.
// Longer page names will be stripped-down at the front, leading with "..."
// IMPORTED NOTE: This option changes how page names are recorded,
//                so you may need to reset the stats.
// Syntax:
// $BBC_MAX_PAGENAME = 60;	=> 60 characters (default)
$BBC_MAX_PAGENAME = 60;

//
?>