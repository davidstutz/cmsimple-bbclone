<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: th.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Thai (ภาษาไทย)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Local",
"numeric" => "Numeric",
"unknown" => "ไม่มีข้อมูล",
"museum" => "Museum",
"travel" => "Travel",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Arpa",
"asia" => "Asia-Pacific",
"coop" => "Coop",
"info" => "Information",
"jobs" => "Employment",
"mobi" => "Mobiles",
"name" => "Personal",
"post" => "Postal Services",

"biz" => "Business",
"cat" => "Catalan",
"com" => "Commercial",
"edu" => "Educational",
"gal" => "Galician",
"gov" => "US Government",
"int" => "International Organizations",
"mil" => "US Military",
"net" => "Networks",
"org" => "Organizations",
"pro" => "Professional",
"tel" => "Contacts",
"xxx" => "Pornographic",

"a1" => "Anonymous Proxy",
"a2" => "Satellite Provider",
"ac" => "Ascension Island",
"ad" => "Andorra",
"ae" => "United Arab Emirates",
"af" => "Afghanistan",
"ag" => "Antigua and Barbuda",
"ai" => "Anguilla",
"al" => "Albania",
"am" => "Armenia",
"an" => "Netherlands Antilles",
"ao" => "Angola",
"ap" => "Asia-Pacific",
"aq" => "Antarctica",
"ar" => "Argentina",
"as" => "American Samoa",
"at" => "Austria",
"au" => "Australia",
"aw" => "Aruba",
"ax" => "หมู่เกาะโอลันด์",
"az" => "Azerbaijan",
"ba" => "Bosnia and Herzegovina",
"bb" => "Barbados",
"bd" => "Bangladesh",
"be" => "Belgium",
"bf" => "Burkina Faso",
"bg" => "Bulgaria",
"bh" => "Bahrain",
"bi" => "Burundi",
"bj" => "Benin",
"bm" => "Bermuda",
"bn" => "Brunei",
"bo" => "Bolivia",
"br" => "Brazil",
"bs" => "Bahamas",
"bt" => "Bhutan",
"bw" => "Botswana",
"by" => "Belarus",
"bz" => "Belize",
"ca" => "Canada",
"cc" => "Cocos Islands",
"cd" => "Congo",
"cf" => "Central African Republic",
"cg" => "Congo",
"ch" => "Switzerland",
"ci" => "Ivory Coast",
"ck" => "Cook Islands",
"cl" => "Chile",
"cm" => "Cameroon",
"cn" => "China",
"co" => "Colombia",
"cr" => "Costa Rica",
"cu" => "Cuba",
"cv" => "Cape Verde",
"cw" => "Curaçao",
"cx" => "Christmas Island",
"cy" => "Cyprus",
"cz" => "Czech Republic",
"de" => "Germany",
"dj" => "Djibouti",
"dk" => "Denmark",
"dm" => "Dominica",
"do" => "Dominican Republic",
"dz" => "Algeria",
"ec" => "Ecuador",
"ee" => "Estonia",
"eg" => "Egypt",
"er" => "Eritrea",
"es" => "Spain",
"et" => "Ethiopia",
"eu" => "European Union",
"fi" => "Finland",
"fj" => "Fiji",
"fk" => "Falkland Islands",
"fm" => "Micronesia",
"fo" => "Faroe Islands",
"fr" => "France",
"ga" => "Gabon",
"gd" => "Grenada",
"ge" => "Georgia",
"gf" => "French Guiana",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Greenland",
"gm" => "Gambia",
"gn" => "Guinea",
"gp" => "Guadeloupe",
"gq" => "Equatorial Guinea",
"gr" => "Greece",
"gs" => "South Georgia and the South Sandwich Islands",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bissau",
"gy" => "Guyana",
"hk" => "Hong Kong",
"hm" => "Heard and Mc Donald Islands",
"hn" => "Honduras",
"hr" => "Croatia",
"ht" => "Haiti",
"hu" => "Hungary",
"id" => "Indonesia",
"ie" => "Ireland",
"il" => "Israel",
"im" => "Isle of Man",
"in" => "India",
"io" => "UK Indian Ocean Territory",
"iq" => "Iraq",
"ir" => "Iran",
"is" => "Iceland",
"it" => "Italy",
"je" => "Jersey",
"jm" => "Jamaica",
"jo" => "Jordan",
"jp" => "Japan",
"ke" => "Kenya",
"kg" => "Kyrgyzstan",
"kh" => "Cambodia",
"ki" => "Kiribati",
"km" => "Comoros",
"kn" => "Saint Kitts and Nevis",
"kp" => "North Korea",
"kr" => "Korea",
"kw" => "Kuwait",
"ky" => "Cayman Islands",
"kz" => "Kazakhstan",
"la" => "Laos",
"lb" => "Lebanon",
"lc" => "Saint Lucia",
"li" => "Liechtenstein",
"lk" => "Sri Lanka",
"lr" => "Liberia",
"ls" => "Lesotho",
"lt" => "Lithuania",
"lu" => "Luxembourg",
"lv" => "Latvia",
"ly" => "Libya",
"ma" => "Morocco",
"mc" => "Monaco",
"md" => "Moldova",
"me" => "ประเทศมอนเตเนโกร",
"mg" => "Madagascar",
"mh" => "Marshall Islands",
"mk" => "Macedonia",
"ml" => "Mali",
"mm" => "Myanmar",
"mn" => "Mongolia",
"mo" => "Macau",
"mp" => "Northern Mariana Islands",
"mq" => "Martinique",
"mr" => "Mauritania",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauritius",
"mv" => "Maldives",
"mw" => "Malawi",
"mx" => "Mexico",
"my" => "Malaysia",
"mz" => "Mozambique",
"na" => "Namibia",
"nc" => "New Caledonia",
"ne" => "Niger",
"nf" => "Norfolk Island",
"ng" => "Nigeria",
"ni" => "Nicaragua",
"nl" => "Netherlands",
"no" => "Norway",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "New Zealand",
"om" => "Oman",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "French Polynesia",
"pg" => "Papua New Guinea",
"ph" => "Philippines",
"pk" => "Pakistan",
"pl" => "Poland",
"pm" => "St. Pierre and Miquelon",
"pn" => "Pitcairn",
"pr" => "Puerto Rico",
"ps" => "Palestine",
"pt" => "Portugal",
"pw" => "Palau",
"py" => "Paraguay",
"qa" => "Qatar",
"re" => "Reunion",
"ro" => "Romania",
"rs" => "ประเทศเซอร์เบีย",
"ru" => "Russia",
"rw" => "Rwanda",
"sa" => "Saudi Arabia",
"sb" => "Solomon Islands",
"sc" => "Seychelles",
"sd" => "Sudan",
"se" => "Sweden",
"sg" => "Singapore",
"sh" => "St. Helena",
"si" => "Slovenia",
"sk" => "Slovakia",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somalia",
"sr" => "Suriname",
"st" => "Sao Tome and Principe",
"su" => "Soviet Union",
"sv" => "El Salvador",
"sx" => "Sint Maarten",
"sy" => "Syria",
"sz" => "Swaziland",
"tc" => "Turks and Caicos Islands",
"td" => "Chad",
"tf" => "French Southern Territories",
"tg" => "Togo",
"th" => "ประเทศไทย",
"tj" => "Tajikistan",
"tk" => "Tokelau",
"tl" => "East Timor",
"tm" => "Turkmenistan",
"tn" => "Tunisia",
"to" => "Tonga",
"tp" => "East Timor",
"tr" => "Turkey",
"tt" => "Trinidad and Tobago",
"tv" => "Tuvalu",
"tw" => "Taiwan",
"tz" => "Tanzania",
"ua" => "Ukraine",
"ug" => "Uganda",
"uk" => "United Kingdom",
"us" => "United States",
"uy" => "Uruguay",
"uz" => "Uzbekistan",
"va" => "Vatican State",
"vc" => "St. Vincent and the Grenadines",
"ve" => "Venezuela",
"vg" => "Virgin Islands (UK)",
"vi" => "Virgin Islands (US)",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Wallis and Futuna Islands",
"ws" => "Samoa",
"ye" => "Yemen",
"yt" => "Mayotte",
"za" => "South Africa",
"zm" => "Zambia",
"zw" => "Zimbabwe",

// No longer active but needed for history purpose
"bl" => "แซ็งบาร์เตเลอมี",
"bv" => "Bouvet Island",
"bq" => "Caribbean Netherlands",
"cs" => "Serbia and Montenegro",
"eh" => "Western Sahara",
"gb" => "United Kingdom",
"mf" => "Saint Martin",
"sj" => "Svalbard and Jan Mayen Islands",
"ss" => "South Sudan",
"um" => "US Minor Outlying Islands",
"yu" => "Serbia and Montenegro",
"zr" => "Zaire"
);

// The main Translation array
$translation = array(

// Specific charset
"global_charset" => "utf-8",

// Date format (used with date())
"global_time_format" => "M jS, H:i:s",
"global_day_format" => "l F jS, Y",
"global_hours_format" => "l F jS, G:00",
"global_month_format" => "F Y",

// Global translation
"global_titlebar"=> "สถิติสำหรับ %SERVER สร้างขึ้นบน %DATE",
"global_bbclone_copyright" => "The BBClone team - ใช้สัญญาอนุญาตแบบ",
"global_last_reset" => "เริ่มนับสถิติเมื่อ:",
"global_yes" => "ใช่",
"global_no" => "ไม่",

// The error messages
"error_cannot_see_config" => "คุณไม่มีสิทธิ์ในการดูการตั้งค่าของ BBClone บนเซิร์ฟเวอร์นี้",

// Miscellaneous translations
"misc_other" => "อื่นๆ",
"misc_unknown" => "ไม่มีข้อมูล",
"misc_second_unit" => "วินาที",
"misc_ignored" => "ละเว้น",

// The Navigation Bar
"navbar_main_site" => "เว็บหลัก",
"navbar_configuration" => "ตั้งค่า",
"navbar_global_stats" => "สถิติรวม",
"navbar_detailed_stats" => "สถิติละเอียด",
"navbar_time_stats" => "สถิติ (แยกตามเวลา)",
"navbar_language" => "ภาษา",
"navbar_go" => "ไป",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "เวลา",
"dstat_visits" => "จำนวนครั้ง",
"dstat_extension" => "ประเทศที่มา",
"dstat_dns" => "ชื่อโฮสต์",
"dstat_from" => "ลิงก์มาจาก",
"dstat_os" => "ระบบปฏิบัติการ",
"dstat_browser" => "เบราว์เซอร์",
"dstat_visible_rows" => "จำนวนที่แสดง",
"dstat_green_rows" => "แถวสีเขียว",
"dstat_blue_rows" => "แถวสีน้ำเงิน",
"dstat_red_rows" => "แถวสีแดง",
"dstat_search" => "ค้นหา",
"dstat_last_page" => "หน้าสุดท้ายที่เข้า",
"dstat_last_visit" => "เข้าครั้งล่าสุดใช้เมื่อ",
"dstat_robots" => "หุ่นยนต์",
"dstat_my_visit" => "การเข้าชมจาก IP ของคุณ",
"dstat_no_data" => "ไม่มีข้อมูล",
"dstat_prx" => "Proxy Server",
"dstat_ip" => "หมายเลข IP",
"dstat_user_agent" => "ตัวแทนผู้ใช้",
"dstat_nr" => "จำนวน",
"dstat_pages" => "หน้า",
"dstat_visit_length" => "ช่วงเวลาในการเข้า",
"dstat_reloads" => "โหลด",
"dstat_whois_information" => "ค้นหาข้อมูลเกี่ยวกับเรื่องนี้ที่อยู่ IP",

// Global Stats words
"gstat_accesses" => "การเข้าถึง",
"gstat_total_visits" => "จำนวนการเข้าทั้งหมด",
"gstat_total_unique" => "จำนวนการเข้าทั้งหมด (ไม่นับซ้ำ)",
"gstat_operating_systems" => "ระบบปฏิบัติการ %d อันดับสูงสุด",
"gstat_browsers" => "เว็บเบราวเซอร์ %d อันดับสูงสุด",
"gstat_extensions" => "ประเทศที่มา %d อันดับสูงสุด",
"gstat_robots" => "Robots %d อันดับสูงสุด",
"gstat_pages" => "หน้าที่เข้า %d อันดับสูงสุด",
"gstat_origins" => "ลิงก์ที่มา %d อันดับสูงสุด",
"gstat_hosts" => "โฮสต์ %d อันดับสูงสุด",
"gstat_keys" => "คีย์เวิร์ด %d อันดับสูงสุด",
"gstat_total" => "รวม",
"gstat_not_specified" => "ไม่ระบุ",

// Time Stats words
"tstat_su" => "อา",
"tstat_mo" => "จ",
"tstat_tu" => "อ",
"tstat_we" => "พ",
"tstat_th" => "พฤ",
"tstat_fr" => "ศ",
"tstat_sa" => "ส",


"tstat_full_su" => "อาทิตย์",
"tstat_full_mo" => "จันทร์",
"tstat_full_tu" => "อังคาร",
"tstat_full_we" => "พุธ",
"tstat_full_th" => "พฤหัสบดี",
"tstat_full_fr" => "ศุกร์",
"tstat_full_sa" => "เสาร์",

"tstat_jan" => "ม.ค.",
"tstat_feb" => "ก.พ.",
"tstat_mar" => "มี.ค.",
"tstat_apr" => "เม.ย.",
"tstat_may" => "พ.ค.",
"tstat_jun" => "มิ.ย.",
"tstat_jul" => "ก.ค.",
"tstat_aug" => "ส.ค.",
"tstat_sep" => "ก.ย.",
"tstat_oct" => "ต.ค.",
"tstat_nov" => "พ.ย.",
"tstat_dec" => "ธ.ค.",


"tstat_full_jan" => "มกราคม",
"tstat_full_feb" => "กุมภาพันธ์",
"tstat_full_mar" => "มีนาคม",
"tstat_full_apr" => "เมษายน",
"tstat_full_may" => "พฤษภาคม",
"tstat_full_jun" => "มิถุนายน",
"tstat_full_jul" => "กรกฎาคม",
"tstat_full_aug" => "สิงหาคม",
"tstat_full_sep" => "กันยายน",
"tstat_full_oct" => "ตุลาคม",
"tstat_full_nov" => "พฤศจิกายน",
"tstat_full_dec" => "ธันวาคม",

"tstat_last_day" => "รอบวันนี้",
"tstat_last_week" => "รอบสัปดาห์นี้",
"tstat_last_month" => "รอบเดือนนี้",
"tstat_last_year" => "รอบปีนี้",
"tstat_average" => "เฉลี่ย",

// Loadtime notice
"generated" => "หน้าสร้างขึ้นใน ",
"seconds" => " วินาที",

// Configuration page words and sentences
"config_variable_name" => "ชื่อตัวแปร",
"config_variable_value" => "ค่าตัวแปร",
"config_explanations" => "คำอธิบาย",

// needs to be translated
"config_BBC_MAINSITE" =>
"If this variable has been set, a link to the specified location will be
generated. The default value is pointing to the parent directory. In case your
main site is located elsewhere, you probably want to adjust the value to suit
your needs.<br />
Examples:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone defaults to revealing the stats' settings. In case this behavior isn't
desired you can deny access to it by deactivating the option.<br />
Examples:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"The title of your stats pages.<br />
It will be displayed in the navigation bar of all BBClone pages<br />
The following macros are recognised:<br />
<ul>
<li>%SERVER: server name,</li>
<li>%DATE: current date.</li>
</ul>
HTML Tags are allowed.<br />
Examples:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My stats from %DATE look like this:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBClone's default language, in case it hasn't been specified by the browser.
The following languages are supported:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn and zh-tw</p>",

"config_BBC_MAXTIME" =>
"This variable defines the length of an unique visit in seconds. Each hit from
the same visitor within this period will be considered as one visit, as long as
two successive hits don't exceed the specified limit. Default is the de facto
web standard of 30 minutes (1800 seconds), but depending on your needs you may
wish to assign a different value.<br />
Examples:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"How many entries you want to have listed in the detailed stats? The default
value is 100. It's recommended not to set it higher than 500 to avoid too heavy
load.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"The variable \$BBC_DETAILED_STAT_FIELDS determines the columns to be displayed
in the detailed statistics. Possible columns are:
<ul>
<li>id => The x-th visitor since you've started counting</li>
<li>time => The time at which the last hit was registerred</li>
<li>visits => The hits of one unique visitor</li>
<li>dns => Visitor's hostname</li>
<li>ip => Visitor's IP address</li>
<li>os => The operating system (if available and/or no robot)</li>
<li>browser => The software used for establishing the connection</li>
<li>ext => Visitor's country or extension</li>
<li>referer => The link from which a visitor came (if available)</li>
<li>page => The last visited page</li>
<li>search => The search query a visitor used (if available)</li>
</ul>
The same order you've arranged the columns will be used for display.<br />
Examples:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"In case the server time doesn't match your local timezone, you can adjust the
time in minutes by using this switch. Negative values will set back the time,
positive ones will set it forth.<br />
Examples:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"This options defines, whether IP addresses should be resolved to hostnames or
not. While hostnames tell a lot more about the visitor, resolving them may
considerably slow down your site, if the DNS servers used are slow, limited in
their capacity or otherwise unreliable. Setting this variable may solve the
problem.<br />
Examples:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClone's default is to show hits in the time stats, because it gives a quite
useful Impression from the actual server load. If, however, you prefer to use
unique visits as base for your time stats, you can change the way of counting
by setting this variable.<br />
Examples:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"This option can be used to exclude particular IP addresses or address ranges
from counting. In case you want to add several expressions use a comma as
separator.<br />
Examples:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"In case you don't want to have particular referrers from your visitors listed
in your ranking or detailed stats, you can specify one or more keywords used
for blocking if a referrer matches up against them. If you use more keywords,
please use a comma as separator.<br />
Examples:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"You can use this option to determine the treatment of robots. The default is
to ignore them in the top hosts ranking but leave them in the remaining
stats. If you don't want to see any robots at all you can set this option to
&quot;2&quot;, then only human visits will be taken into account.<br />
Examples:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"This option defines how BBClone tells one visitor from another. Default is to
use the IP address only, which provides realistic figures in most cases. If,
however, your visitors often are hidden behind proxy servers, deactivation of
this option could provide more realistic figures, since a new visitor will be
assumed by the time the user agent has changed.<br />
Examples:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Whenever you wish to reset your stats you can activate this switch and have
them deleted by the next visit. Don't forget to deactivate it afterwards, else
you'll probably experience unusually low traffic ;).<br />
Examples:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Host and referrer stats can generate a huge amount of data, however mostly
caused by one time visitors. By enabling this switch you can purge these
entries and considerably shrink access.php in its size without affecting your
actual visible host and referrer ranking. The amount of hits will be added to
the &quot;not_specified&quot; entries to keep the overall score intact.<br />
Examples:<br />
\$BBC_PURGE_SINGLE = 1;<br />
\$BBC_PURGE_SINGLE = &quot;&quot;;",

"config_BBC_LOADTIME" =>
"Generate the page load-time in seconds at bottom of the page.<br />
Examples:<br />
\$BBC_LOADTIME =&quot;&quot;;<br />
\$BBC_LOADTIME = 1;",

"config_BBC_EXT_LOOKUP" =>
"This options defines, whether IP addresses are looked up to determine location (country).<br />
These plug-ins are NO part of BBClone, please keep this in mind.<br />
<ul>
<li>IP2EXT => Use the old IP2EXT to Look-Up IP addresses</li>
<li>GEOIP => Use GeoIP API plug-in</li>
<li>GEOIP-mod => Use GeoIP PHP/Perl Module (geoip.so)</li>
</ul>
Examples:<br />
\$BBC_EXT_LOOKUP =&quot;&quot;;<br />
\$BBC_EXT_LOOKUP =&quot;IP2EXT&quot;;<br />
\$BBC_EXT_LOOKUP =&quot;GEOIP&quot;;<br />
\$BBC_EXT_LOOKUP =&quot;GEOIP-mod&quot;;",

"config_BBC_CSS_FILE" =>
"BBClone CSS File Name<br />
Please note; Within this css file you can change the way BBClone looks.<br />
(for example change colors or what text size/fonts are used)<br />
Examples:<br />
\$BBC_CSS_FILE =&quot;bbclone.css&quot;;<br />
\$BBC_CSS_FILE =&quot;other.css&quot;;",

"config_BBC_HITS" =>
"Include BBClone hits within the Stats<br />
Examples:<br />
\$BBC_HITS =1;<br />
\$BBC_HITS =&quot;&quot;;",

"config_BBC_USE_ORIGINAL_URI" =>
"Enable this option when the &quot;Top Visited Pages&quot; URI's are not working due
filtering of the URI. This can happen if you use BBClone with some Content
Management Systems (CMS) which are using very long (complex) URI naming.<br />
IMPORTED NOTE: This option changes how URI's are recorded,
so you may need to reset the stats.<br />
Examples:<br />
\$BBC_USE_ORIGINAL_URI = 1;	=> No filtering, use original URI<br />
\$BBC_USE_ORIGINAL_URI = &quot;&quot;;	=> Filter URI (default)",

"config_BBC_MAX_PAGENAME" =>
"The max. number of characters for the page name.<br />
Longer page names will be stript down at the front, leading with &quot;...&quot;<br />
IMPORTED NOTE: This option changes how page names are recorded,
so you may need to reset the stats.<br />
Examples:<br />
\$BBC_MAX_PAGENAME = 60;	=> 60 characters (default)"

);
?>
