<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: sv.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Swedish (Svenska)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Lokal",
"numeric" => "Numerisk",
"unknown" => "Okänd",
"museum" => "Museum",
"travel" => "Resor",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Arpa",
"asia" => "Asien och Stillahavsområdet",
"coop" => "Coop",
"info" => "Information",
"jobs" => "Arbets",
"mobi" => "Mobiler",
"name" => "Personligt",
"post" => "Posttjänster",

"biz" => "Business",
"cat" => "Catalan",
"com" => "Kommersiell",
"edu" => "Utbildning",
"gal" => "Galician",
"gov" => "Förenta staternas regering",
"int" => "Internationella organisationer",
"mil" => "Förenta staternas militär",
"net" => "Nätverk",
"org" => "Organisationer",
"pro" => "Professional",
"tel" => "kontakter",
"xxx" => "Pornografiska",

"a1" => "Anonymous Proxy",
"a2" => "Satellite Provider",
"ac" => "Ascension",
"ad" => "Andorra",
"ae" => "Förenade Arabemiraten",
"af" => "Afghanistan",
"ag" => "Antigua och Barbuda",
"ai" => "Anguilla",
"al" => "Albanien",
"am" => "Armenien",
"an" => "Nederländska Antillerna",
"ao" => "Angola",
"ap" => "Asien och Stillahavsområdet",
"aq" => "Antarktis",
"ar" => "Argentina",
"as" => "Amerikanska Samoa",
"at" => "Österrike",
"au" => "Australien",
"aw" => "Aruba",
"ax" => "Åland",
"az" => "Azerbajdzjan",
"ba" => "Bosnien och Hercegovina",
"bb" => "Barbados",
"bd" => "Bangladesh",
"be" => "Belgien",
"bf" => "Burkina Faso",
"bg" => "Bulgarien",
"bh" => "Bahrain",
"bi" => "Burundi",
"bj" => "Benin",
"bm" => "Bermuda",
"bn" => "Brunei",
"bo" => "Bolivia",
"br" => "Brasilien",
"bs" => "Bahamas",
"bt" => "Bhutan",
"bw" => "Botswana",
"by" => "Vitryssland",
"bz" => "Belize",
"ca" => "Kanada",
"cc" => "Kokosöarna",
"cd" => "Demokratiska republiken Kongo",
"cf" => "Centralafrikanska republiken",
"cg" => "Kongo",
"ch" => "Schweiz",
"ci" => "Elfenbenskusten",
"ck" => "Cooköarna",
"cl" => "Chile",
"cm" => "Kamerun",
"cn" => "Kina",
"co" => "Colombia",
"cr" => "Costa Rica",
"cu" => "Kuba",
"cv" => "Kap Verde",
"cw" => "Curaçao",
"cx" => "Julön",
"cy" => "Cypern",
"cz" => "Tjeckien",
"de" => "Tyskland",
"dj" => "Djibouti",
"dk" => "Danmark",
"dm" => "Dominica",
"do" => "Dominikanska republiken",
"dz" => "Algeriet",
"ec" => "Ecuador",
"ee" => "Estland",
"eg" => "Egypten",
"er" => "Eritrea",
"es" => "Spanien",
"et" => "Etiopien",
"eu" => "European Union",
"fi" => "Finland",
"fj" => "Fiji",
"fk" => "Falklandsöarna",
"fm" => "Mikronesien",
"fo" => "Färöarna",
"fr" => "Frankrike",
"ga" => "Gabon",
"gd" => "Grenada",
"ge" => "Georgien",
"gf" => "Franska Guyana",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Grönland",
"gm" => "Gambia",
"gn" => "Guinea",
"gp" => "Guadeloupe",
"gq" => "Ekvatorialguinea",
"gr" => "Grekland",
"gs" => "Sydgeorgien och Sydsandwichöarna",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bissau",
"gy" => "Guyana",
"hk" => "Hongkong",
"hm" => "Heardön och McDonaldöarna",
"hn" => "Honduras",
"hr" => "Kroatien",
"ht" => "Haiti",
"hu" => "Ungern",
"id" => "Indonesien",
"ie" => "Irland",
"il" => "Israel",
"im" => "Isle of Man",
"in" => "Indien",
"io" => "Brittiska territoriet i Indiska Oceanen",
"iq" => "Irak",
"ir" => "Iran",
"is" => "Island",
"it" => "Italien",
"je" => "Jersey",
"jm" => "Jamaica",
"jo" => "Jordanien",
"jp" => "Japan",
"ke" => "Kenya",
"kg" => "Kirgizistan",
"kh" => "Kambodja",
"ki" => "Kiribati",
"km" => "Komorerna",
"kn" => "Saint Christopher och Nevis",
"kp" => "North Korea",
"kr" => "Korea",
"kw" => "Kuwait",
"ky" => "Caymanöarna",
"kz" => "Kazakstan",
"la" => "Laos",
"lb" => "Libanon",
"lc" => "Saint Lucia",
"li" => "Liechtenstein",
"lk" => "Sri Lanka",
"lr" => "Liberia",
"ls" => "Lesotho",
"lt" => "Litauen",
"lu" => "Luxemburg",
"lv" => "Lettland",
"ly" => "Libyen",
"ma" => "Marocko",
"mc" => "Monaco",
"md" => "Moldova",
"me" => "Montenegro",
"mg" => "Madagaskar",
"mh" => "Marshallöarna",
"mk" => "Makedonien",
"ml" => "Mali",
"mm" => "Myanmar",
"mn" => "Mongoliet",
"mo" => "Macau",
"mp" => "Nordmarianerna",
"mq" => "Martinique",
"mr" => "Mauretanien",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauritius",
"mv" => "Maldiverna",
"mw" => "Malawi",
"mx" => "Mexico",
"my" => "Malaysia",
"mz" => "Moçambique",
"na" => "Namibia",
"nc" => "Nya Kaledonien",
"ne" => "Niger",
"nf" => "Norfolkön",
"ng" => "Nigeria",
"ni" => "Nicaragua",
"nl" => "Nederländerna",
"no" => "Norge",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "Nya Zeeland",
"om" => "Oman",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Franska Polynesien",
"pg" => "Papua Nua Guinea",
"ph" => "Filippinerna",
"pk" => "Pakistan",
"pl" => "Polen",
"pm" => "Saint Pierre och Miquelon",
"pn" => "Pitcairn",
"pr" => "Puerto Rico",
"ps" => "Palestina",
"pt" => "Portugal",
"pw" => "Palau",
"py" => "Paraguay",
"qa" => "Qatar",
"re" => "Réunion",
"ro" => "Rumänien",
"rs" => "Serbien",
"ru" => "Ryssland",
"rw" => "Rwanda",
"sa" => "Saudiarabien",
"sb" => "Salomonöarna",
"sc" => "Seychellerna",
"sd" => "Sudan",
"se" => "Sverige",
"sg" => "Singapore",
"sh" => "Saint Helena",
"si" => "Slovenien",
"sk" => "Slovakien",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somalia",
"sr" => "Surinam",
"st" => "São Tomé och Príncipe",
"su" => "Sovjetunionen",
"sv" => "El Salvador",
"sx" => "Sint Maarten",
"sy" => "Syrien",
"sz" => "Swaziland",
"tc" => "Turks- och Caicosöarna",
"td" => "Tchad",
"tf" => "De franska territorierna i södra Indiska oceanen",
"tg" => "Togo",
"th" => "Thailand",
"tj" => "Tadzjikistan",
"tk" => "Tokelau",
"tl" => "Östtimor",
"tm" => "Turkmenistan",
"tn" => "Tunisien",
"to" => "Tonga",
"tp" => "Östtimor",
"tr" => "Turkiet",
"tt" => "Trinidad och Tobago",
"tv" => "Tuvalu",
"tw" => "Taiwan",
"tz" => "Tanzania",
"ua" => "Ukraina",
"ug" => "Uganda",
"uk" => "Förenade kungariket",
"us" => "Förenta staterna",
"uy" => "Uruguay",
"uz" => "Uzbekistan",
"va" => "Heliga stolen",
"vc" => "Saint Vincent och Grenadinerna",
"ve" => "Venezuela",
"vg" => "Jungfruöarna (UK)",
"vi" => "Jungfruöarna (US)",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Wallis och Futuna",
"ws" => "Samoa",
"ye" => "Yemen",
"yt" => "Mayotte",
"za" => "Sydafrika",
"zm" => "Zambia",
"zw" => "Zimbabwe",

// No longer active but needed for history purpose
"bl" => "Saint-Barthélemy",
"bv" => "Bouvetön",
"bq" => "Karibien Nederländska",
"cs" => "Serbien och Montenegro",
"eh" => "Västsahara",
"gb" => "Storbritannien",
"mf" => "Saint Martin",
"sj" => "Svalbard och Jan Mayen",
"ss" => "Sydsudan",
"um" => "US mindre öar i Oceanien och Västindien",
"yu" => "Serbien och Montenegro",
"zr" => "Zaire"
);

// The main Translation array
$translation = array(

// Specific charset
"global_charset" => "utf-8",

// Global translation
"global_titlebar"=> "Statistik för %SERVER genereras på %DATE",
"global_bbclone_copyright" => "BBClone-teamet - licensierad under ",
"global_last_reset" => "Statistik senast nollställd ",
"global_yes" => "Ja",
"global_no" => "Nej",

// The error messages
"error_cannot_see_config" =>
"Du har inte tillstånd att se BBClone-konfigurationen på den här servern.",

// Date format (used with date())
"global_time_format" => "M jS, H:i:s",
"global_day_format" => "l F jS, Y",
"global_hours_format" => "l F jS, G:00",
"global_month_format" => "F Y",

// Miscellaneous translations
"misc_other" => "Annan",
"misc_unknown" => "Okänd",
"misc_second_unit" => "s",
"misc_ignored" => "ignoreras",

// The Navigation Bar
"navbar_main_site" => "Huvudsidan",
"navbar_configuration" => "Konfiguration",
"navbar_global_stats" => "Global statistik",
"navbar_detailed_stats" => "Detaljerad statistik",
"navbar_time_stats" => "Tidsstatistik",
"navbar_language" => "Språk",
"navbar_go" => "Go",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Tid",
"dstat_visits" => "Besök",
"dstat_extension" => "Toppdomän",
"dstat_dns" => "Domännamn",
"dstat_from" => "Från",
"dstat_os" => "OS",
"dstat_browser" => "Webbläsare",
"dstat_visible_rows" => "Synliga besök",
"dstat_green_rows" => "gröna rader",
"dstat_blue_rows" => "blå rader",
"dstat_red_rows" => "röda rader",
"dstat_search" => "Search",
"dstat_last_page" => "Senaste Sidan",
"dstat_last_visit" => "senaste besök",
"dstat_robots" => "robotar",
"dstat_my_visit" => "Besök från din IP",
"dstat_no_data" => "Ingen data",
"dstat_prx" => "Proxyserver",
"dstat_ip" => "IP-address",
"dstat_user_agent" => "Användaragent",
"dstat_nr" => "Nr",
"dstat_pages" => "Sidor",
"dstat_visit_length" => "Besökslängd",
"dstat_reloads" => "Omladdningar",
"dstat_whois_information" => "Slå upp informationen på denna IP Adress",

// Global Stats words
"gstat_accesses" => "Besök",
"gstat_total_visits" => "Totala besök",
"gstat_total_unique" => "Totala unika",
"gstat_operating_systems" => "Operativsystem",
"gstat_browsers" => "Webbläsare",
"gstat_extensions" => "Top %d toppdomäner",
"gstat_hosts" => "Top %d domännamn",
"gstat_robots" => "Robotar",
"gstat_pages" => "Top %d sidor",
"gstat_origins" => "Top %d ursprungssidor",
"gstat_keys" => "Top %d sökord",
"gstat_total" => "Totalt",
"gstat_not_specified" => "Ospecificerat",

// Time Stats words
"tstat_su" => "Sön",
"tstat_mo" => "Mån",
"tstat_tu" => "Tis",
"tstat_we" => "Ons",
"tstat_th" => "Tor",
"tstat_fr" => "Fre",
"tstat_sa" => "Lör",

"tstat_full_su" => "Söndag",
"tstat_full_mo" => "Måndag",
"tstat_full_tu" => "Tisdag",
"tstat_full_we" => "Onsdag",
"tstat_full_th" => "Torsdag",
"tstat_full_fr" => "Fredag​​",
"tstat_full_sa" => "Lördag",

"tstat_jan" => "Jan",
"tstat_feb" => "Feb",
"tstat_mar" => "Mar",
"tstat_apr" => "Apr",
"tstat_may" => "Maj",
"tstat_jun" => "Jun",
"tstat_jul" => "Jul",
"tstat_aug" => "Aug",
"tstat_sep" => "Sep",
"tstat_oct" => "Okt",
"tstat_nov" => "Nov",
"tstat_dec" => "Dec",

"tstat_full_jan" => "Januari",
"tstat_full_feb" => "Februari",
"tstat_full_mar" => "Mars",
"tstat_full_apr" => "April",
"tstat_full_may" => "Maj",
"tstat_full_jun" => "Juni",
"tstat_full_jul" => "Jul",
"tstat_full_aug" => "August",
"tstat_full_sep" => "September",
"tstat_full_oct" => "October",
"tstat_full_nov" => "November",
"tstat_full_dec" => "December",

"tstat_last_day" => "Senaste dagen",
"tstat_last_week" => "Senaste veckan",
"tstat_last_month" => "Senaste månaden",
"tstat_last_year" => "Senaste året",
"tstat_average" => "Genomsnitt",

// Loadtime notice
"generated" => "Sidan skapades på ",
"seconds" => " sekunden",

// Configuration page words and sentences
"config_variable_name" => "Variabelnamn",
"config_variable_value" => "Variabelvärde",
"config_explanations" => "Förklaringar",

"config_BBC_MAINSITE" =>
"Om den här variabeln har satts kommer en länk till den specificerade platsen
skapas. Standardvärdet pekar på underkatalogen. Om din sida finns någon annanstans
behöver du mest troligt justera värdet för att matcha det.<br />
Exempel:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone visar som standard statistikinställningarna. Om detta inte
är önskvärt kan du stänga av det genom att avaktivera denna inställning.<br />
Exempel:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Titeln som visas i titelfältet och som är synlig i alla BBClone-sidor.<br />
Fungerande makros är:<br />
<ul>
<li>%SERVER: servernamn,</li>
<li>%DATE: nuvarande datum.</li>
</ul>
HTML-taggar är också tillåtna.<br />
Exempel:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My stats from %DATE look like this:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBClones standardspråk, om det inte specificerats av webläsaren.
Följande språk stödjs:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn and zh-tw</p>",

"config_BBC_MAXTIME" =>
"Denna variabel definierar längden av ett unikt besök i sekunder. Varje träff
från samma besökare inom denna period kommer räknas som ett besök, så länge inte
tiden mellan två på varandra följande träffar överskrider den specificerade gränsen.
Standard är den de facto webstandarden på 30 minuter (1800 sekunder), men beroende
på dina behov kan du behöva sätta ett annat värde.<br />
Exempel:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Hur många rader vill du lista i den detaljerade statistiken? Standardvärdet är
100. Att sätta detta värde högre än 500 rekommenderas inte på grund av hög serverlast.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Variabeln \$BBC_DETAILED_STAT_FIELDS bestämmer vilka kolumner som ska visas i den
detaljerade statistiken. De kolumner som finns är:
<ul>
<li>id => Den x-te besökaren sedan räkningen började</li>
<li>time => Tiden vid vilken den senaste träffen registrerades</li>
<li>visits => Antal träffar från en unik besökare</li>
<li>dns => Besökarens domännamn</li>
<li>ip => Besökarens IP-adress</li>
<li>os => Operativsystemet besökaren använder (om tillgängligt och/eller ingen robot)</li>
<li>browser => Besökarens webläsare</li>
<li>ext => Besökarens land eller toppdomän</li>
<li>referer => Länken besökaren kom från (om tillgänglig)</li>
<li>page => Den senast besökta sidan</li>
<li>search => Sökfrågan en besökare används (om tillgänglig)</li>
</ul>
Kolumnerna kommer visas på sidan i samma ordning som du arrangerar dem i här.<br />
Exempel:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"Om servertiden inte matchar den lokala tidszonen kan du justera tiden (i minuter)
med hjälp av denna variabel. Negativa värden ställer tillbaka tiden, positiva ställer fram den.<br />
Exempel:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Denna variabel definierar om IP-adresser ska slås upp till domännamn eller inte.
Domännamn säger betydligt mer om en besökare, men uppslagningen av dem kan
sakta ned din sida ordentligt om de DNS-servrar du använde är långsamma eller
instabila. Att slå på denna variabel kan lösa dylika problem.<br />
Exempel:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClone visar som standard antalet träffar i tidsstatistiken, eftersom det
ger en användbar bild av lasten på servern. Om du å andra sidan hellre använder
unika användare som basis för tidsstatistiken kan du ändra till detta genom att
sätta denna variabel.<br />
Exempel:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Denna variabel kan användas för att exkludera specifika IP-adresser eller
serier av IP-adresser från att räknas. Använd komma som separator om du vill
lägga till flera adresser.<br />
Exempel:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Om du inte vill ha med vissa ursprungssidor i statistiken kan du specificera
ett eller flera ord som inte får ingå i ursprungssidan. Om du använder flera ord,
separera dem med komma.<br />
Exempel:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Du kan använda denna inställning för att bestämma hur sökrobotar ska hanteras.
Standard är att ignorera dem i listan över de mest frekventa domännamnen men
lämna kvar dem i den övriga statistiken. Om du inte vill se några robotar
över huvudet taget sätter du denna variabel till &quot;2&quot;, vilket gör
att enbart människor räknas.<br />
Exempel:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Denna inställning bestämmer hur BBClone skiljer på olika besökare. Standard
är att enbart använda IP-adressen, vilket ger realistiska siffror för det mesta.
Om dina besökare befinner sig bakom proxyservrar kan du få mer realistiska siffror
om du stänger av denna inställning då BBClone tittar på användaragenten och registrerar
ett nytt besök så fort den ändras.<br />
Exempel:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Om du vill nollställa statistiken aktiverar du denna variabel, varpå nästa besök
resulterar i att statistiken töms. Glöm bara inte bort att avaktivera den efteråt,
annars kommer det se ut som om din sida har väldigt lite trafik. :).<br />
Exempel:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Domännamns- och ursprungsstatistik kan generera stora mängder data, mestadels
orsakad av engångsbesökare. Genom att sätta denna variabel till 1 kan du rensa
bort källdatan och avsevärt krympa access.php utan att den synliga domännamns-
och ursprungsstatistiken ändras. Antal träffar denna data står för kommer adderas
till &quot;not_specified&quot;-kategorin för att hålla totalvärdena intakta.<br />
Exempel:<br />
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
