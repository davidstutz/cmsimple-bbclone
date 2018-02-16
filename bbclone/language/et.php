<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: et.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Estonian (Eesti keel)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Kohalik",
"numeric" => "Numbriline",
"unknown" => "Tundmatu",
"museum" => "Musueum",
"travel" => "Reisimine",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Arpa",
"asia" => "Asia-Pacific",
"coop" => "Coop",
"info" => "Info",
"jobs" => "Tööhõive",
"mobi" => "Mobiilid",
"name" => "Kontaktid",
"post" => "Postal Services",

"biz" => "Business",
"cat" => "Katalaani",
"com" => "Commercial",
"edu" => "Huridus",
"gal" => "Galeegi", 
"gov" => "US valitsus",
"int" => "International Organizations",
"mil" => "US sõjaväe",
"net" => "Networks",
"org" => "Organisatsioonid",
"pro" => "Professional",
"tel" => "Contacts",
"xxx" => "erootiline",

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
"ax" => "Åland Islands",
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
"me" => "Montenegro",
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
"rs" => "Serbia",
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
"th" => "Thailand",
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
"bl" => "Saint-Barthélemy",
"bv" => "Bouvet Island",
"bq" => "Caribbean Netherlands",
"cs" => "Serbia and Montenegro",
"eh" => "Western Sahara",
"gb" => "United Kingdom",
"mf" => "Saint-Martin",
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
"global_titlebar"=> "Statistika %SERVER genereeritud %DATE",
"global_bbclone_copyright" => "BBClone - Litsenseeritud",
"global_last_reset" => "Statistika viimati nullitud",
"global_yes" => "Jah",
"global_no" => "Ei",

// The error messages
"error_cannot_see_config" =>
"Sul ei ole lubatud näha BBClone konfiguratsiooni selles serveris.",

// Miscellaneous translations
"misc_other" => "Muu",
"misc_unknown" => "Tundmatu",
"misc_second_unit" => "s",
"misc_ignored" => "Ignoreeritud",

// The Navigation Bar
"navbar_main_site" => "Põhisait",
"navbar_configuration" => "Konfiguratsioon",
"navbar_global_stats" => "Üldine statistika",
"navbar_detailed_stats" => "Detailne statistika",
"navbar_time_stats" => "Ajaline statistika",
"navbar_language" => "Keel", 
"navbar_go" => "minema",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Aeg",
"dstat_visits" => "Külastusi",
"dstat_extension" => "Riik",
"dstat_dns" => "Hostinimi",
"dstat_from" => "Tuldud rada",
"dstat_os" => "Operatsioonisüsteem",
"dstat_browser" => "Brauser",
"dstat_visible_rows" => "Nähtavaid ridu",
"dstat_green_rows" => "rohelised read",
"dstat_blue_rows" => "sinised read",
"dstat_red_rows" => "punased read",
"dstat_orange_rows" => "oranzid read",
"dstat_search" => "Otsing",
"dstat_last_page" => "Viimane lehekülg",
"dstat_last_visit" => "viimane külastus",
"dstat_robots" => "Robotid",
"dstat_my_visit" => "Külastused sinu IP-aadressilt",
"dstat_no_data" => "Andmed puuduvad",
"dstat_prx" => "Proxy server",
"dstat_ip" => "IP-aadress",
"dstat_user_agent" => "Kasutajaagent(User Agent)",
"dstat_nr" => "Nr",
"dstat_pages" => "leheküljed",
"dstat_visit_length" => "Külastuse pikkus",
"dstat_reloads" => "Uuestilaadimisi",
"dstat_whois_information" => "Look up information on this IP Adress",

// Global Stats words
"gstat_accesses" => "Summaarne ülevaade",
"gstat_total_visits" => "Külastusi kokku",
"gstat_total_unique" => "Unikaalseid kokku",
"gstat_operating_systems" => "Top %d Operatsioonisüsteemid",
"gstat_browsers" => "Top %d Brauserid",
"gstat_extensions" => "Top %d Riigid",
"gstat_robots" => "Top %d Robotid",
"gstat_pages" => "Top %d Külastatud leheküljed",
"gstat_origins" => "Top %d Rajad",
"gstat_hosts" => "Top %d Hostid",
"gstat_keys" => "Top %d Märksõnad",
"gstat_total" => "Kokku",
"gstat_not_specified" => "Pole täpsustatud",

// Time Stats words
"tstat_su" => "P",
"tstat_mo" => "E",
"tstat_tu" => "T",
"tstat_we" => "K",
"tstat_th" => "N",
"tstat_fr" => "R",
"tstat_sa" => "L",

"tstat_full_su" => "Pühapäev",
"tstat_full_mo" => "Esmaspäev",
"tstat_full_tu" => "Teisipäev",
"tstat_full_we" => "Kolmapäev",
"tstat_full_th" => "Neljapäev",
"tstat_full_fr" => "Reede",
"tstat_full_sa" => "Laupäev",

"tstat_jan" => "Jaan",
"tstat_feb" => "Veebr",
"tstat_mar" => "Märts",
"tstat_apr" => "Apr",
"tstat_may" => "Mai",
"tstat_jun" => "Juuni",
"tstat_jul" => "Juuli",
"tstat_aug" => "Aug",
"tstat_sep" => "Sept",
"tstat_oct" => "Okt",
"tstat_nov" => "Nov",
"tstat_dec" => "Dets",

"tstat_full_jan" => "Jaanuar",
"tstat_full_feb" => "Veebruar",
"tstat_full_mar" => "March",
"tstat_full_apr" => "Aprill",
"tstat_full_may" => "Mai",
"tstat_full_jun" => "Juuni",
"tstat_full_jul" => "Juuli",
"tstat_full_aug" => "August",
"tstat_full_sep" => "September",
"tstat_full_oct" => "Oktoober",
"tstat_full_nov" => "November",
"tstat_full_dec" => "Detsember",

"tstat_last_day" => "Möödunud päev",
"tstat_last_week" => "Möödunud nädal",
"tstat_last_month" => "Möödunud kuu",
"tstat_last_year" => "Möödunud aasta",
"tstat_average" => "keskeltläbi",

// Loadtime notice
"generated" => "Lehekülg loodud ",
"seconds" => " sekundit",

// Configuration page words and sentences
"config_variable_name" => "Muutuja nimi",
"config_variable_value" => "Muutuja väärtus",
"config_explanations" => "Selgitus",

"config_BBC_MAINSITE" =>
"Kui see muutuja on määratud, tekkib link ette antud asukohta.
Vaikeväärtus suunab emakataloogile. Juhul kui teie põhiveeb asub
mujal, siis tõenäoliselt soovite kohandada väärtust vastavalt enda vajadustele.<br />
Näited:<br />
\$BBC_MAINSITE = &quot;http://www.minudomeen.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone vaikimisi paljastab statistika seaded. Juhul kui see on probleemiks,
saate juurdepääsu keelata deaktiveerides valiku.<br />
Näited:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Pealkiri teie statistika lehekülgedel.<br />
Seda kuvatakse navigeerimisribal kõigi BBClone'i lehekülgedel<br />
Järgnevad makrod on ära tuntavad:<br />
<ul>
<li>%SERVER: domeeni nimi,</li>
<li>%DATE: tänane kuupäev.</li>
</ul>
HTML koodid on lubatud.<br />
Näited:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My stats from %DATE look like this:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBClone'i vaikimisi keel, kui see ei ole täpsustatud brauserist.
Järgnevad keeled on toetatud:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn and zh-tw</p>",

"config_BBC_MAXTIME" =>
"See muutuja piirab unikaalse külastuse kestvuse sekundites. Sellel perioodil
loetakse iga klikk samalt külastajalt üheks külastuseks, tingimusel kui kaks
järjestikkust klikki ei ületa kindlaksmääratud limiiti. Vaikimisi on de facto
web standard 30 minutit (1800 sekundit), kuid sõltuvalt teie vajadustele võite
anda teistsuguse väärtuse.<br />
Näited:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Kui palju sissekandeid te soovite kuvada üksikasjaliku statistika(detailne statistika)
loetellus? Vaikimisi väärtus on 100. On soovitatav mitte kehtestada seda suuremaks
kui 500, et vältida ülekoormust.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Muutuja \$BBC_DETAILED_STAT_FIELDS määrab veerud mida kuvada üksikasjaliku
statistikas. Võimalikud veerud on:
<ul>
<li>id => X-nes külastaja alates mil alustasite loendamist</li>
<li>time => Aeg, millal viimane klikk registreeriti</li>
<li>visits => Unikaalse külastaja klikid</li>
<li>dns => Külastaja hostinimi</li>
<li>ip => Külastaja IP-aadress</li>
<li>os => Operatsioonisüsteem (kui on kättesaadav ja/või robot)</li>
<li>browser => Tarkvara, mida kasutati ühenduse loomiseks</li>
<li>ext => Külastaja riik või laiendus</li>
<li>referer => Lehekülje link kust külastaja tuli (kui see on olemas)</li>
<li>page => Viimati külastatud leht</li>
<li>search => Otsingupäring mida külastaja kasutas (kui on teada)</li>
</ul>
Sama järjekorda kuidas teie kirjutasite, kasutatakse veergude kuvamisel.<br />
Näited:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"Juhul kui serveri aeg ei sobi teie kohalikku ajatsooni, saate reguleerida aega
minutites kasutades seda lülitit. Negatiivsed väärtused keeravad aega tagasi,
positiivsed keeravad ettepoole.<br />
Näited:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"See valik määrab, kas IP-aadressid peaks lahendama hostinimedeks või mitte.
Kuigi hostinimed ütlevad palju rohkem külastaja kohta, võib nende lahendamine
märgatavalt aeglustada teie saiti, kui kasutatavad DNS serverid on aeglased,
piiratud võimsusega või muidu ebalojaalsed. Seadistades seda muutujat võib
lahendada probleemi.<br />
Näited:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClone vaikimisi näitab klikke ajalises statistikas, sest see koormab
serverit vähem. Kui aga soovite kasutada unikaalseid külastusi oma ajalises
statistikas, saate muuta loendusmeetodit seadistades seda muutujat.<br />
Näited:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Seda võimalust saab kasutada, et välistada teatud IP-aadressid või aadressi vahemikud
loendamisest. Kui soovite lisada mitu kasuta koma eraldajana.<br />
Näited:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Juhul kui te ei taha üksikasjalikke viiteid oma külastajatelt kuvada pingeritta
või detailsesse statistikasse, saate määrata ühe või mitu märksõna mida kasutatakse
blokeerimiseks kui viide ühtib uuesti nendega. Kui te kasutate rohkem märksõnu,
palun kasuta koma eraldajana.<br />
Näited:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Võite kasutada seda võimalust, et piirata robotite käsitlemine. Vaikimisi
eiratakse neid hostide pingereas, kuid ülejäänud statistikasse jäävad alles.
Kui te ei soovi näha mitte ühtegi robotit, saate määrata selle valiku
&quot;2&quot;, siis ainult inimese külastusi võetakse arvesse.<br />
Näited:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"See valik määrab, kuidas BBClone vahet teeb ühel külastajal teisest. Vaikimisi on
kasutusel IP-aadress ainult, mis näeb ette, realistlik enamikul juhtudel. Kuid
siiski sinu külastajad on sageli varjatud proxy serverite taga, selle võimaluse
deaktiveerimine suudab kindlustada rohkem realistlike tulemusi, alates uuest
külastajast saab tõena võtta mil kasutajaagent on muutunud.<br />
Näited:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Kui te soovite nullida oma statistika saate aktiveerida selle lüliti siit ja
kustutada need järgmisel visiidil. Ära unusta deaktiveerimast pärast, muidu
on teil tõenäoliselt ebaharilikult väike liiklus ;).<br />
Näited:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Hosti ja viite statistikad võivad luua tohutu hulga andmeid, mis on enamasti
põhjustatud ühekorra külastajatest. Võimaldades seda lülitit saab puhastada neid
sissekandeid ja märkimisväärselt kahaneb access.php oma suurusest ilma et see
mõjutaks tegelikku nähtavat hosti ja viite pingerida. Klikkide summa on lisatud
&quot;not_specified&quot; sissekanneteks säilitamaks üldise skoori puutumatust.<br />
Näited:<br />
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
