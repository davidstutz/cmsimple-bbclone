<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: da.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Danish (Dansk)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Local",
"numeric" => "Numerisk",
"unknown" => "Ukendt",
"museum" => "Museum",
"travel" => "Reser",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Arpanet",
"asia" => "Asia-Pacific",
"coop" => "Coop",
"info" => "Information",
"jobs" => "Employment",
"mobi" => "Mobiles",
"name" => "Personlig",
"post" => "Posttjenester",

"biz" => "Business",
"cat" => "Catalansk",
"com" => "Kommerciel",
"edu" => "Uddannelsesinstitution",
"gal" => "Galicisk",
"gov" => "De Forenede Staters regering",
"int" => "Internationale organisationer",
"mil" => "De Forenede Staters militær",
"net" => "Netværk",
"org" => "Organisationer",
"pro" => "Professionel",
"tel" => "Kontakter",
"xxx" => "Pornografisk",

"a1" => "Anonym Proxy",
"a2" => "satellit-udbyder",
"ac" => "Ascens ión",
"ad" => "Andorra",
"ae" => "Forenede Arabiske Emirater",
"af" => "Afghanistan",
"ag" => "Antigua og Barbuda",
"ai" => "Anguilla",
"al" => "Albanien",
"am" => "Armenien",
"an" => "Nederlandske Antiller",
"ao" => "Angola",
"ap" => "Asia-Pacific",
"aq" => "Antarktis",
"ar" => "Argentina",
"as" => "Amerikansk Samoa",
"at" => "Østrig",
"au" => "Australien",
"aw" => "Aruba",
"ax" => "Åland",
"az" => "Aserbajdsjan",
"ba" => "Bosnien & Hercegovina",
"bb" => "Barbados",
"bd" => "Bangladesh",
"be" => "Belgien",
"bf" => "Burkina",
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
"by" => "Hviderusland",
"bz" => "Belize",
"ca" => "Canada",
"cc" => "Cocos Øerne",
"cd" => "Demokratiske Republik Congo",
"cf" => "Centralafrikanske Republik",
"cg" => "Congo",
"ch" => "Schweiz",
"ci" => "Elfenbenskysten",
"ck" => "Cook Øerne",
"cl" => "Chile",
"cm" => "Cameroun",
"cn" => "Kina",
"co" => "Colombia",
"cr" => "Costa Rica",
"cu" => "Cuba",
"cv" => "Kap Verde",
"cw" => "Curaçao",
"cx" => "Juleøen",
"cy" => "Cypern",
"cz" => "Tjekkiet",
"de" => "Tyskland",
"dj" => "Djibouti",
"dk" => "Danmark",
"dm" => "Dominica",
"do" => "Dominikanske Republik",
"dz" => "Algeriet",
"ec" => "Ecuador",
"ee" => "Estland",
"eg" => "Egypten",
"er" => "Eritrea",
"es" => "Spanien",
"et" => "Etiopien",
"eu" => "Europæiske Union",
"fi" => "Finland",
"fj" => "Fiji",
"fk" => "Falklandsøerne",
"fm" => "Mikronesien",
"fo" => "Færøerne",
"fr" => "Frankrig",
"ga" => "Gabon",
"gd" => "Grenada",
"ge" => "Georgien",
"gf" => "Fransk Guyana",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Grønland",
"gm" => "Gambia",
"gn" => "Guinea",
"gp" => "Guadeloupe",
"gq" => "Ækvatorial Guinea",
"gr" => "Grækenland",
"gs" => "South Georgia & South Sandwich Øerne",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bissau",
"gy" => "Guyana",
"hk" => "Hong Kong",
"hm" => "Heard & Mc Donald Øerne",
"hn" => "Honduras",
"hr" => "Kroatien",
"ht" => "Haiti",
"hu" => "Ungarn",
"id" => "Indonesien",
"ie" => "Irland",
"il" => "Israel",
"im" => "Isle of Man",
"in" => "Indien",
"io" => "Britisk Territorium i det Indiske Ocean",
"iq" => "Irak",
"ir" => "Iran",
"is" => "Island",
"it" => "Italien",
"je" => "Jersey",
"jm" => "Jamaica",
"jo" => "Jordan",
"jp" => "Japan",
"ke" => "Kenya",
"kg" => "Kirgisistan",
"kh" => "Cambodia",
"ki" => "Kiribati",
"km" => "Comorerne",
"kn" => "Saint Christopher & Nevis",
"kp" => "Nord Korea",
"kr" => "Korea",
"kw" => "Kuwait",
"ky" => "Cayman Øerne",
"kz" => "Kazakhstan",
"la" => "Laos",
"lb" => "Libanon",
"lc" => "Saint Lucia",
"li" => "Liechtenstein",
"lk" => "Sri Lanka",
"lr" => "Liberia",
"ls" => "Lesotho",
"lt" => "Litauen",
"lu" => "Luxembourg",
"lv" => "Letland",
"ly" => "Libyen",
"ma" => "Marokko",
"mc" => "Monaco",
"md" => "Moldova",
"me" => "Montenegro",
"mg" => "Madagaskar",
"mh" => "Marshalløerne",
"mk" => "Makedonien",
"ml" => "Mali",
"mm" => "Myanmar",
"mn" => "Mongoliet",
"mo" => "Macau",
"mp" => "Nordmarianerne",
"mq" => "Martinique",
"mr" => "Mauretanien",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauritius",
"mv" => "Maldiverne",
"mw" => "Malawi",
"mx" => "Mexico",
"my" => "Malaysia",
"mz" => "Moçambique",
"na" => "Namibia",
"nc" => "Ny Caledonien",
"ne" => "Niger",
"nf" => "Norfolk Øen",
"ng" => "Nigeria",
"ni" => "Nicaragua",
"nl" => "Holland",
"no" => "Norge",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "New Zealand",
"om" => "Oman",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Fransk Polynesien",
"pg" => "Papua Ny Guinea",
"ph" => "Filippinerne",
"pk" => "Pakistan",
"pl" => "Polen",
"pm" => "Saint Pierre et Miquelon",
"pn" => "Pitcairn",
"pr" => "Puerto Rico",
"ps" => "Palestina",
"pt" => "Portugal",
"pw" => "Palau",
"py" => "Paraguay",
"qa" => "Qatar",
"re" => "Réunion",
"ro" => "Rumænien",
"rs" => "Serbien",
"ru" => "Rusland",
"rw" => "Rwanda",
"sa" => "Saudi Arabien",
"sb" => "Salomon Øerne",
"sc" => "Seychellerne",
"sd" => "Sudan",
"se" => "Sverige",
"sg" => "Singapore",
"sh" => "Saint Helena",
"si" => "Slovenien",
"sk" => "Slovakiet",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somalia",
"sr" => "Surinam",
"st" => "São Tomé & Príncipe",
"su" => "Sovjetunionen",
"sv" => "El Salvador",
"sx" => "Sint Maarten",
"sy" => "Syrien",
"sz" => "Swaziland",
"tc" => "Turks og Caicos Øer",
"td" => "Tchad",
"tf" => "Franske Territorier i Sydhavet og Antarktis",
"tg" => "Togo",
"th" => "Thailand",
"tj" => "Tadsjikistan",
"tk" => "Tokelau",
"tl" => "Øttimor",
"tm" => "Turkmenistan",
"tn" => "Tunesien",
"to" => "Tonga",
"tp" => "Øttimor",
"tr" => "Tyrkiet",
"tt" => "Trinidad og Tobago",
"tv" => "Tuvalu",
"tw" => "Taiwan",
"tz" => "Tanzania",
"ua" => "Ukraine",
"ug" => "Uganda",
"uk" => "Storbritannien",
"us" => "De Forenede Stater",
"uy" => "Uruguay",
"uz" => "Usbekistan",
"va" => "Vatikanstaten",
"vc" => "Saint Vincent og Grenadinerne",
"ve" => "Venezuela",
"vg" => "Britiske Jomfruøer",
"vi" => "Amerikanske Jomfruøer",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Wallis og Futuna",
"ws" => "Samoa",
"ye" => "Yemen",
"yt" => "Mayotte",
"za" => "Sydafrika",
"zm" => "Zambia",
"zw" => "Zimbabwe",

// No longer active but needed for history purpose
"bl" => "Saint Barthelemy",
"bv" => "Bouvetøya",
"bq" => "Caribbean Holland",
"cs" => "Serbien og Montenegro",
"eh" => "Vest Sahara",
"gb" => "Storbritannien",
"mf" => "Saint Martin",
"sj" => "Svalbard og Jan Mayen",
"ss" => "Sydsudan",
"um" => "US mindre øer i Oceanien og Vestindien",
"yu" => "Serbien og Montenegro",
"zr" => "Zaire"
);

// The main Translation array
$translation = array(

// Specific charset
"global_charset" => "utf-8",

// Date format (used with date() )
"global_time_format" => "M jS, H:i:s",
"global_day_format" => "l F jS, Y",
"global_hours_format" => "l F jS, G:00",
"global_month_format" => "F Y",
		
// Global translation
"global_titlebar"=> "Statistik for %SERVER genereret den %DATE",
"global_bbclone_copyright" => "Den BBClone team - Licensed under",
"global_last_reset" => "Statistik siden den",
"global_yes" => "Ja",
"global_no" => "Nej",

// The error messages
"error_cannot_see_config" =>
"Du har ikke tilladelse til at se BBClone konfigurationen på denne server.",

// Miscellaneous translations
"misc_other" => "Andre",
"misc_unknown" => "Ukendt",
"misc_second_unit" => "sek.",
"misc_ignored" => "Udeladt",

// The Navigation Bar
"navbar_main_site" => "Hovedside",
"navbar_configuration" => "Konfiguration",
"navbar_global_stats" => "Generel Statistik",
"navbar_detailed_stats" => "Detaljeret Statistik",
"navbar_time_stats" => "Grafisk historik",
"navbar_language" => "Sprong",
"navbar_go" => "gå",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Tidspunkt",
"dstat_visits" => "Antal besøg",
"dstat_extension" => "Topdomæne",
"dstat_dns" => "Værtsnavn",
"dstat_from" => "Kommer fra",
"dstat_os" => "OS",
"dstat_browser" => "Browser",
"dstat_visible_rows" => "Synlige besøg",
"dstat_green_rows" => "grønne rækker",
"dstat_blue_rows" => "blå rækker",
"dstat_red_rows" => "røde rækker",
"dstat_search" => "Søg",
"dstat_last_page" => "Sidste side",
"dstat_last_visit" => "senest besøgt",
"dstat_robots" => "robotter",
"dstat_my_visit" => "Besøg fra din IP",
"dstat_no_data" => "Ingen tilgængelige data",
"dstat_prx" => "Proxy server",
"dstat_ip" => "IP-adresse",
"dstat_user_agent" => "Bruser agent",
"dstat_nr" => "Nr.",
"dstat_pages" => "Sider",
"dstat_visit_length" => "Tid pr. side",
"dstat_reloads" => "Sideopdateringer",
"dstat_whois_information" => "Finde information om denne IP Adresse",

// Global Stats words
"gstat_accesses" => "Samlet oversigt over besøgende",
"gstat_total_visits" => "Samlede hits",
"gstat_total_unique" => "Samlede unikke hits",
"gstat_operating_systems" => "Top %d operativsystemer",
"gstat_browsers" => "Top %d browsere",
"gstat_extensions" => "%d første topdomæner",
"gstat_robots" => "Top %d robotter",
"gstat_pages" => "%d første sider",
"gstat_origins" => "%d første oprindelser",
"gstat_hosts" => "Top %d internetudbydere",
"gstat_keys" => "Top %d søgeord",
"gstat_total" => "I alt",
"gstat_not_specified" => "Ikke specificeret",

// Time Stats words
"tstat_su" => "Søn",
"tstat_mo" => "Man",
"tstat_tu" => "Tir",
"tstat_we" => "Ons",
"tstat_th" => "Tor",
"tstat_fr" => "Fri",
"tstat_sa" => "Lør",

"tstat_full_su" => "Sunday",
"tstat_full_mo" => "Monday",
"tstat_full_tu" => "Tuesday",
"tstat_full_we" => "Onsdag",
"tstat_full_th" => "Tarsdag",
"tstat_full_fr" => "Friday",
"tstat_full_sa" => "Saturday",

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

"tstat_full_jan" => "Januar",
"tstat_full_feb" => "Februar",
"tstat_full_mar" => "March",
"tstat_full_apr" => "April",
"tstat_full_may" => "Maj",
"tstat_full_jun" => "Juni",
"tstat_full_jul" => "Juli",
"tstat_full_aug" => "August",
"tstat_full_sep" => "September",
"tstat_full_oct" => "October",
"tstat_full_nov" => "November",
"tstat_full_dec" => "December",

"tstat_last_day" => "Forløbne døgn",
"tstat_last_week" => "Forløbne uge",
"tstat_last_month" => "Sidste måned",
"tstat_last_year" => "Sidste år",
"tstat_average" => "Gennemsnitlig",

// Loadtime notice
"generated" => "Side genereret på ",
"seconds" => " sekunder",

// Configuration page words and sentences
"config_variable_name" => "Variabelnavn",
"config_variable_value" => "Variabelværdi pt.",
"config_explanations" => "Forklaring",

"config_BBC_MAINSITE" =>
"Hvis denne variabel er sat, vil et link til den angivne placering blive genereret.
Standardværdien vil pege mod rodbiblioteket. I tilfælde af at websitet
er placeret et andet sted, kan du angive en specifik sti eller url.<br />
Eksempler:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;; => (Standard)<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone viser konfigurationsindstillingerne som standard. Hvis det ikke ønskeses
kan du forhindre adgang ved at deaktivere denne mulighed.<br />
Eksempler:<br />
\$BBC_SHOW_CONFIG = 1; => Vis show_config.php (standard)<br />
\$BBC_SHOW_CONFIG = &quot;&quot;; => Vis ikke show_config.php",

"config_BBC_TITLEBAR" =>
"Titlen på alle BBClone siderne.<br />
Flg. makroer kan bruges:<br />
<ul>
<li>%SERVER: servernavn,</li>
<li>%DATE: nuværende dato.</li>
</ul>
HTML-tags må også bruges.<br />
Eksempler:<br />
\$BBC_TITLEBAR = &quot;Statistik for %SERVER genereret den %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;Min Statistik fra den %DATE er:&quot;;<br />",

"config_BBC_LANGUAGE" =>
"BBClones standardsprog, hvis ikke det er blevet specificeret af browseren.
Følgende sprog understøttes:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn og zh-tw</p>",

"config_BBC_MAXTIME" =>
"Denne variabel definerer længden af et unikt besøg i sekunder. Hvert hit fra
den samme besøgende inden for denne tidsperiode vil blive talt som eet besøg, så
længe de to efterfølgende hits ikke overskrider den angivne tidsperiode.
Webstandarden er 30 minutter (1800 sekunder), men denne tidsperiode kan ændres efter
behov.<br />
Eksempler:<br />
\$BBC_MAXTIME = 0;  => Alle hits behandles som unikke<br />
\$BBC_MAXTIME = 1800;  => Alle hits af den samme besøgende inden for 30 min. behandles som unikke",

"config_BBC_MAXVISIBLE" =>
"Hvor mange poster skal vises i den detaljerede statistik ad gangen? Standard er 100.
Det anbefales ikke at sætte værdien højere for at undgå tunge sider.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Variablen \$BBC_DETAILED_STAT_FIELDS bestemmer hvilke søjler der skal vises i
den detaljerede statistik. Mulighederne er:
<ul>
<li>id => Besøgende nr. x siden begyndelsen</li>
<li>time => Tiden hvor hittet blev registreret</li>
<li>visits => Antal unikke besøg</li>
<li>dns => Den besøgendes internetudbyder</li>
<li>ip => Den besøgendes IP-adresse</li>
<li>os => Operativsystemet (hvis tilgængeligt og/eller hvis det ikke er en robot)</li>
<li>browser => Software der er blevet brugt. (browsertype.)</li>
<li>ext => Det land den besøgende kommer fra eller den extension, han/hun har</li>
<li>referer => Det link, den besøgende kommer fra (hvis tilgængeligt)</li>
<li>page => Sidst besøgte side</li>
<li>search => De søgeord, den besøgende brugte (hvis tilgængeligt)</li>
</ul>
Den rækkefølge, søjlerne angives i, vil blive brugt i visningen af statistikken.br />
Eksempler:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"Hvis serverens tidszone ikke passer med din egen lokale tid, kan du her tilpasse
tiden i minutter ved at bruge denne variabel. Negative værdier sætter tiden tilbage,
positiver sætter den frem.<br />
Eksempler:<br />
\$BBC_TIME_OFFSET = 300; => Sæt tiden 5 timer frem. (5 x 60 min)<br />
\$BBC_TIME_OFFSET = -300; => Sæt tiden 5 timer tilbage. (5 x 60 min)<br />
\$BBC_TIME_OFFSET = 0; => Ingen tidsforskel.",

"config_BBC_NO_DNS" =>
"Denne variabel bestemmer om IP-adresser skal omdannes til navnet på internet-
udbyderen. Navnet på udbyderen vil give mere information omkring den besøgende,
men samtidig måske sløve websiden, hvis de DNS-servere, der benyttes til opslag er langsomme,
begrænsede i deres kapacitet er på andre måder upålidelige. Du kan slå denne mulighed
til eller fra.<br />
Eksempler:<br />
\$BBC_NO_DNS = 1; => IP-adresser vises som internetudbyder (standard)<br />
\$BBC_NO_DNS = &quot;&quot;; => Slå funktionen fra.",

"config_BBC_NO_HITS" =>
"BBClone viser som standard alle hits i tidsstatistikken (historikken), fordi
det giver et realistisk indtryk af servertrafikken. Men du kan også vælge kun at
få vist unikke besøg ved at ændre denne variabel.<br />
Eksempler:<br />
\$BBC_NO_HITS = 1; => Vis alle hits i historik (standard)<br />
\$BBC_NO_HITS = &quot;&quot;; => Vis unikke besøg i historik.",

"config_BBC_IGNORE_IP" =>
"Med denne mulighed kan du ekskludere bestemte IP-adresser eller hele rækker
af adresser fra at blive talt med i statistikken. Hvis der angives flere adresser,
bruges komma som separator.<br />
Eksempler:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Hvis du vil forhindre bestemte referrers fra dine besøende i at blive
oplistet i statistikken, kan du specificere et eller flere ord i
variablen nedenfor. Komma bruges som separator.<br />
Eksempler:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;; => (Standard)",

"config_BBC_IGNORE_BOTS" =>
"Du kan bestemme hvordan webrobotter skal behandles i statistikken. Standard
er at ignorere dem i udbyderstatistikken, men at lade dem optræde i resten.
Hvis du ikke vil tælle robotter overhovedet, kan du sætte variablen til &quot;2&quot;.
Så vil kun menneskelige besøgende tages i betragtning.<br />
Eksempler:<br />
\$BBC_IGNORE_BOTS = 2; => Ignorér robotter helt.<br />
\$BBC_IGNORE_BOTS = 1; => Oplist ikke robotter under hosts.<br />
\$BBC_IGNORE_BOTS = &quot;&quot;; => Robotter regnes som alm. besøgende.",

"config_BBC_IGNORE_AGENT" =>
"Denne indstilling definerer hvordan BBClone adskliller de besøgende fra
hinanden. Standard er udelukkende at bruge IP-adressen, hvilket i de fleste tilfælde
give helt realistiske tal. Hvis dine besøgende er skjult bag proxy servere, kan deaktivering
af denne variabel give de mest realistiske tal, idet en ny besøgende vil blive
bestemt jvf. ændringer i systemoplysninger, etc.<br />
Eksempler:<br />
\$BBC_IGNORE_AGENT = 1; => Ignorér en besøgendes forskellige browsere<br />
\$BBC_IGNORE_AGENT = &quot;&quot;; => Hver ændring i en besøgendes browser skal opfattes som et seperat besøg. (Standard)",

"config_BBC_KILL_STATS" =>
"Når du ønsker at nulstille statistikken kan du aktivere denne variabel, hvorved alt
nulstilles ved næste besøg. Husk dog at sætte variablen tilbage bagefter, da man ellers vil
opleve usædvanlig lav traffik! ;)<br />
Eksempler:<br />
\$BBC_KILL_STATS = 1; => Slet alle data<br />
\$BBC_KILL_STATS = &quot;&quot;; => Behold alle indsamlede data. (Standard)",

"config_BBC_PURGE_SINGLE" =>
"Udbyder og referrer-statistik kan generere store mængder data, som oftest
skyldes engangs-besøgende. Med denne variabel kan du tømme disse poster
og gøre access.php betydeligt lettere uden at påvirke den faktiske udbyder-
og referrer-statistik. Antallet af hits vil dermed blive lagt til
&quot;not_specified&quot;-posterne for at opretholde den overordnede score.<br />
Eksempler:<br />
\$BBC_PURGE_SINGLE = 1; => Tøm udbydere and referrer poster.<br />
\$BBC_PURGE_SINGLE = &quot;&quot;; => behold alle poster (standard)",

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
