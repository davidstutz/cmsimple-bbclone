<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: tr.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Turkish (Türkçe)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Yerel",
"numeric" => "Sayısal",
"unknown" => "Bilinmeyen",
"museum" => "Müse",
"travel" => "seyahat",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Hatalar",
"asia" => "Asya-Pasifik",
"coop" => "Coop",
"info" => "Bilgi",
"jobs" => "iş",
"mobi" => "Cep",
"name" => "Kişisel",
"post" => "Posta Hizmetleri",

"biz" => "İş",
"cat" => "Catalan",
"com" => "Ticari",
"edu" => "Eğitimsel",
"gal" => "Galician",
"gov" => "Hükümet",
"int" => "Uluslararası Kuruluşlar",
"mil" => "A.B.D Askeri",
"net" => "Net Ağı",
"org" => "Kuruluşlar",
"pro" => "Profesyonel",
"tel" => "Rehber",
"xxx" => "Pornografic",

"a1" => "Anonymous Proxy",
"a2" => "Satellite Provider",
"ac" => "Yükselme Adası",
"ad" => "Andor Prensliği",
"ae" => "Birleşik Arap Emirlikleri",
"af" => "Afganistan",
"ag" => "Antigua ve Barbuda",
"ai" => "Anguilla",
"al" => "Arnavutluk",
"am" => "Ermenistan",
"an" => "Hollanda Antilleri",
"ao" => "Angola",
"ap" => "Asya-Pasifik",
"aq" => "Antartika",
"ar" => "Arjantin",
"as" => "Amerikan Samoa",
"at" => "Avusturya",
"au" => "Avusturalya",
"aw" => "Aruba",
"ax" => "Åland",
"az" => "Azerbaycan",
"ba" => "Bosna Hersek",
"bb" => "Barbados",
"bd" => "Bangladeş",
"be" => "Belçika",
"bf" => "Burkina Faso",
"bg" => "Bulgaristan",
"bh" => "Bahreyn",
"bi" => "Burundi",
"bj" => "Benin",
"bm" => "Bermuda",
"bn" => "Brunei",
"bo" => "Bolivya",
"br" => "Brezilya",
"bs" => "Bahama",
"bt" => "Butan",
"bw" => "Botsvana",
"by" => "Beyaz Rusya",
"bz" => "Beliz",
"ca" => "Kanada",
"cc" => "Kokos Adaları",
"cd" => "Kongo Demoktarik Cum.",
"cf" => "Orta Afrika Cumhuriyeti",
"cg" => "Kongo",
"ch" => "İsviçre",
"ci" => "Fildişi Sahilleri",
"ck" => "Yemek Adaları",
"cl" => "Şili",
"cm" => "Kamerun",
"cn" => "Çin",
"co" => "Kolombiya",
"cr" => "Kosta Rika",
"cu" => "Küba",
"cv" => "Cabo Verde",
"cw" => "Curaçao",
"cx" => "Noel Adası",
"cy" => "Güney Kıbrıs",
"cz" => "Çek Cumhuriyeti",
"de" => "Almanya",
"dj" => "Djiboti",
"dk" => "Danimarka",
"dm" => "Dominik",
"do" => "Dominik Cumhuriyeti",
"dz" => "Cezayir",
"ec" => "Ekvator",
"ee" => "Estonya",
"eg" => "Mısır",
"er" => "Eritre",
"es" => "İspanya",
"et" => "Etiyopya",
"eu" => "European Union",
"fi" => "Finlandiya",
"fj" => "Fiji",
"fk" => "Falkland Adaları",
"fm" => "Mikronezya",
"fo" => "Faroe Adaları",
"fr" => "Fransa",
"ga" => "Gabon",
"gd" => "Grenada",
"ge" => "Gürcistan",
"gf" => "Fransız Guyanası",
"gg" => "Guernsey",
"gh" => "Gana",
"gi" => "Cebelitarık",
"gl" => "Grönland Adası",
"gm" => "Gambiya",
"gn" => "Gine",
"gp" => "Guadeloupe",
"gq" => "Ekvatoryal Gine",
"gr" => "Yunanistan",
"gs" => "Güney Gürcistan ve Güney Sandviç Adaları",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Gine-Bisav",
"gy" => "Guyana",
"hk" => "Honk Hong",
"hm" => "Heard ve Mc Donald Adaları",
"hn" => "Honduras",
"hr" => "Hırvatistan",
"ht" => "Haiti",
"hu" => "Macaristan",
"id" => "Endonezya",
"ie" => "İrlanda",
"il" => "İsrail",
"im" => "Adam Adası",
"in" => "Hindistan",
"io" => "İngiliz Hint Okyanusu Bölgesi",
"iq" => "Irak",
"ir" => "İran",
"is" => "İzlanda",
"it" => "İtalya",
"je" => "Jerse Adası",
"jm" => "Jamaika",
"jo" => "Ürdün",
"jp" => "Japonya",
"ke" => "Kenya",
"kg" => "Kırgızistan",
"kh" => "Kamboçya",
"ki" => "Kiribati",
"km" => "Komor Adaları",
"kn" => "Aziz Kitts ve Nevis",
"kp" => "North Korea",
"kr" => "Kore",
"kw" => "Kuveyt",
"ky" => "Seymen Adaları",
"kz" => "Kazakistan",
"la" => "Laos",
"lb" => "Lübnan",
"lc" => "Aziz Lucia",
"li" => "Lihtenştayn",
"lk" => "Sri Lanka",
"lr" => "Liberya",
"ls" => "Lesoto",
"lt" => "Litvanya",
"lu" => "Lüksemburg",
"lv" => "Letonya",
"ly" => "Libya",
"ma" => "Fas",
"mc" => "Monako",
"md" => "Moldova",
"me" => "Karadağ",
"mg" => "Madagaskar",
"mh" => "Marşal Adaları",
"mk" => "Makedonya",
"ml" => "Mali",
"mm" => "Miyanmar",
"mn" => "Moğolistan",
"mo" => "Makao",
"mp" => "Kuzey Mariana Adaları",
"mq" => "Martinik",
"mr" => "Moritanya",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Maritus",
"mv" => "Maldivler",
"mw" => "Malavi",
"mx" => "Meksika",
"my" => "Malezya",
"mz" => "Mozambik",
"na" => "Namibya",
"nc" => "Yeni Kaledonya",
"ne" => "Nijer",
"nf" => "Norfolk Adası",
"ng" => "Nijerya",
"ni" => "Nikaragua",
"nl" => "Hollanda",
"no" => "Norveç",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "Yeni Zellanda",
"om" => "Umman",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Fransız Polonezyası",
"pg" => "Papua Yeni Gine",
"ph" => "Filipinler",
"pk" => "Pakistan",
"pl" => "Polonya",
"pm" => "Aziz Pierre ve Miquelon",
"pn" => "Pitcairn Adaları",
"pr" => "Porto Riko",
"ps" => "Palestina",
"pt" => "Portekiz",
"pw" => "Palau",
"py" => "Paraguay",
"qa" => "Katar",
"re" => "Birleşme",
"ro" => "Romanya",
"rs" => "Sırbistan",
"ru" => "Rusya",
"rw" => "Ruanda",
"sa" => "Suudi Arabistan",
"sb" => "Solomon Adaları",
"sc" => "Seyşeller",
"sd" => "Sudan",
"se" => "Isveç",
"sg" => "Singapur",
"sh" => "Aziz Helena",
"si" => "Slovenya",
"sk" => "Slovakya",
"sl" => "Siera Leon",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somali",
"sr" => "Surinam",
"st" => "Sao Tome ve Principe",
"su" => "Sovyetler Birliği",
"sv" => "El Salvador",
"sx" => "Sint Maarten",
"sy" => "Suriye",
"sz" => "Svaziland",
"tc" => "Turks ve Caicos Adaları",
"td" => "Çad",
"tf" => "Fransız Güney Bölgeleri",
"tg" => "Togo",
"th" => "Tayland",
"tj" => "Tacikistan",
"tk" => "Tokelau",
"tl" => "Doğu Timor",
"tm" => "Türkmenistan",
"tn" => "Tunus",
"to" => "Tonga",
"tp" => "Doğu Timor",
"tr" => "Türkıye",
"tt" => "Trinidad ve Tobago",
"tv" => "Tuvalu",
"tw" => "Tayvan",
"tz" => "Tanzanya",
"ua" => "Ukrayna",
"ug" => "Uganda",
"uk" => "İngiltere",
"us" => "A.B.D",
"uy" => "Uruguay",
"uz" => "Özbekistan",
"va" => "Vatikan",
"vc" => "Aziz Vincent ve the Grenadines",
"ve" => "Venezuella",
"vg" => "Bakire Adaları (UK)",
"vi" => "Bakire Adaları (A.B.D)",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Wallis ve Futuna Adaları",
"ws" => "Samoa",
"ye" => "Yemen",
"yt" => "Mayotte",
"za" => "Güney Afrika",
"zm" => "Zambiya",
"zw" => "Zimbabve",

// No longer active but needed for history purpose
"bl" => "Saint Barthélemy",
"bv" => "Bouvet Adası",
"bq" => "Karayipler Hollanda",
"cs" => "Sırbistan ve Karadağ",
"eh" => "Batı Sahara",
"gb" => "İngiltere",
"mf" => "Ermiş Martin",
"sj" => "Svalbard ve Jan Mayen Adaları",
"ss" => "Güney Sudan",
"um" => "A.B.D Küçük Uzak Adaları",
"yu" => "Sırbistan ve Karadağ",
"zr" => "Zaire Cumhuriyeti"
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
"global_titlebar"=> "için İstatistik %SERVER oluşturulan %DATE",
"global_bbclone_copyright" => "BBClone takımı adına Lisanslıdır.",
"global_last_reset" => "İstatistikler en son sıfırlanır",
"global_yes" => "Evet",
"global_no" => "Hayır",

// The error messages
"error_cannot_see_config" =>
"Server'daki BBClone ayarlarının doğru olmadığı için bu sayfayı göremiyorsunuz.",

// Miscellaneous translations
"misc_other" => "Diğer",
"misc_unknown" => "Bilinmeyen",
"misc_second_unit" => "s",
"misc_ignored" => "Sayılan",

// The Navigation Bar
"navbar_main_site" => "Ana Sayfa",
"navbar_configuration" => "Biçim",
"navbar_global_stats" => "Kapsamlı İstatistikler",
"navbar_detailed_stats" => "Ayrıntılı İstatistikler",
"navbar_time_stats" => "Zaman İstatistikleri",
"navbar_language" => "Dil",
"navbar_go" => "gitmek",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Zaman",
"dstat_visits" => "Ziyaretler",
"dstat_extension" => "Uzantı",
"dstat_dns" => "Sunucu Adı",
"dstat_from" => "Nereden",
"dstat_os" => "İşletim Sistemi",
"dstat_browser" => "Tarayıcı",
"dstat_visible_rows" => "Görünür girişler",
"dstat_green_rows" => "yeşil satırlar",
"dstat_blue_rows" => "mavi satırlar",
"dstat_red_rows" => "kırmızı satırlar",
"dstat_search" => "arama",
"dstat_last_page" => "Son Sayfa",
"dstat_last_visit" => "son ziyaret",
"dstat_robots" => "robotlar",
"dstat_my_visit" => "Sizin IP Ziyaretler",
"dstat_no_data" => "Veri yok",
"dstat_prx" => "Proxy Server",
"dstat_ip" => "IP Adresi",
"dstat_user_agent" => "User Agent",
"dstat_nr" => "Nr",
"dstat_pages" => "Sayfalar",
"dstat_visit_length" => "Uzunluk Ziyaret",
"dstat_reloads" => "Çoğul",
"dstat_whois_information" => "Bu IP Adres hakkında bilgi aramak",

// Global Stats words
"gstat_accesses" => "Girişler",
"gstat_total_visits" => "Toplam Ziyaretler",
"gstat_total_unique" => "Toplam Tekil Ziyaretler",
"gstat_operating_systems" => "En yüksek %d İşletim Sistemi",
"gstat_browsers" => "En yüksek %d Tarayıcı",
"gstat_extensions" => "En yüksek %d Uzantı",
"gstat_robots" => "En yüksek %d Robot",
"gstat_pages" => "En yüksek %d Ziyaret Edilen Sayfalar",
"gstat_origins" => "En yüksek %d Kaynak",
"gstat_hosts" => "üst %d Hosts",
"gstat_keys" => "üst %d Anahtar Kelimeler",
"gstat_total" => "Toplam",
"gstat_not_specified" => "Belirlenmemiş",

// Time Stats words
"tstat_su" => "Paz",
"tstat_mo" => "Pzt",
"tstat_tu" => "Sal",
"tstat_we" => "Çar",
"tstat_th" => "Per",
"tstat_fr" => "Cum",
"tstat_sa" => "Cmt",

"tstat_full_su" => "Pazar",
"tstat_full_mo" => "Pazartesi",
"tstat_full_tu" => "Salı",
"tstat_full_we" => "Çarşamba",
"tstat_full_th" => "Perşembe",
"tstat_full_fr" => "Cuma",
"tstat_full_sa" => "Cumartesi",

"tstat_jan" => "Oca",
"tstat_feb" => "Şub",
"tstat_mar" => "Mar",
"tstat_apr" => "Nis",
"tstat_may" => "May",
"tstat_jun" => "Haz",
"tstat_jul" => "Tem",
"tstat_aug" => "Agu",
"tstat_sep" => "Eyl",
"tstat_oct" => "Eki",
"tstat_nov" => "Kas",
"tstat_dec" => "Ara",

"tstat_full_jan" => "Ocak",
"tstat_full_feb" => "Şubat",
"tstat_full_mar" => "Mart",
"tstat_full_apr" => "Nisan",
"tstat_full_may" => "May",
"tstat_full_jun" => "Haziran",
"tstat_full_jul" => "Temmuz",
"tstat_full_aug" => "Ağustos",
"tstat_full_sep" => "Eylül",
"tstat_full_oct" => "Ekim",
"tstat_full_nov" => "Kasım",
"tstat_full_dec" => "Aralık",

"tstat_last_day" => "Şimdiki gün",
"tstat_last_week" => "Şimdiki hafta",
"tstat_last_month" => "Şimdiki ay",
"tstat_last_year" => "Şimdiki yıl",
"tstat_average" => "ortalama",

// Loadtime notice
"generated" => "oluşturulan sayfa ",
"seconds" => " saniye",

// Configuration page words and sentences
"config_variable_name" => "Değişken adı",
"config_variable_value" => "Değişken değeri",
"config_explanations" => "Açıklama",

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
"Burdaki başlık bütün BBClone sayfalarında görünecek.<br />
The following macros are recognized:<br />
<ul>
<li>%SERVER: server adı,</li>
<li>%DATE: şu anki tarih.</li>
</ul>
HTML etiketinin izin verdiği gibi.<br />
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
<li>os => the operating system (if available and/or no robot)</li>
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
