<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: nb.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Norwegian Bokmål (Norsk Bokmål)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Lokal",
"numeric" => "Numerisk",
"unknown" => "Ukjent",
"museum" => "Museum",
"travel" => "Reise",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Feil",
"asia" => "Asia-Pacific",
"coop" => "Coop",
"info" => "Informasjon",
"jobs" => "sysselsetting",
"mobi" => "Mobiler",
"name" => "Personlig",
"post" => "Posttjenester",

"biz" => "forretnings",
"cat" => "Catalan",
"com" => "Kommersiell",
"edu" => "Utdannelse",
"gal" => "Galisisk",
"gov" => "De forente staters regjering",
"int" => "Internasjonale organisajoner",
"mil" => "De forente staters militære",
"net" => "Nettverk",
"org" => "Organisasjoner",
"pro" => "Profesjonell",
"tel" => "Contacts",
"xxx" => "Erotisk",

"a1" => "Anonymo Proxy",
"a2" => "Satellite Provider",
"ac" => "Ascención",
"ad" => "Andorra",
"ae" => "De forente arabiske emirater",
"af" => "Afghanistan",
"ag" => "Antigua og Barbuda",
"ai" => "Anguilla",
"al" => "Albanien",
"am" => "Armenia",
"an" => "De Nederlandske Antillene",
"ao" => "Angola",
"ap" => "Asia-Pacific",
"aq" => "Antarktis",
"ar" => "Argentina",
"as" => "Amerikansk Samoa",
"at" => "Østerrike",
"au" => "Australia",
"aw" => "Aruba",
"ax" => "Åland",
"az" => "Aserbajdsjan",
"ba" => "Bosnia-Hercegovina",
"bb" => "Barbados",
"bd" => "Bangladesh",
"be" => "Belgia",
"bf" => "Burkina Faso",
"bg" => "Bulgaria",
"bh" => "Bahrain",
"bi" => "Burundi",
"bj" => "Benin",
"bm" => "Bermuda",
"bn" => "Brunei",
"bo" => "Bolivia",
"br" => "Brasil",
"bs" => "Bahamas",
"bt" => "Bhutan",
"bw" => "Botswana",
"by" => "Hviterussland",
"bz" => "Belize",
"ca" => "Canada",
"cc" => "Kokosøyene",
"cd" => "Kongo",
"cf" => "Den sentralafrikanske republikken",
"cg" => "Kongo",
"ch" => "Sveits",
"ci" => "Elfenbenskysten",
"ck" => "Cookøyene",
"cl" => "Chile",
"cm" => "Kamerun",
"cn" => "Kina",
"co" => "Colombia",
"cr" => "Costa Rica",
"cu" => "Cuba",
"cv" => "Kap Verde",
"cw" => "Curaçao",
"cx" => "Christmasøya",
"cy" => "Kypros",
"cz" => "Tsjekkia",
"de" => "Tyskland",
"dj" => "Djibouti",
"dk" => "Danmark",
"dm" => "Dominica",
"do" => "Dominikanske republik",
"dz" => "Algerie",
"ec" => "Ecuador",
"ee" => "Estland",
"eg" => "Egypt",
"er" => "Eritrea",
"es" => "Spania",
"et" => "Etiopia",
"eu" => "Den europeiske union",
"fi" => "Finland",
"fj" => "Fiji",
"fk" => "Falklandsøyene",
"fm" => "Mikronesia",
"fo" => "Færøyene",
"fr" => "Frankrike",
"ga" => "Gabon",
"gd" => "Grenada",
"ge" => "Georgia",
"gf" => "Fransk Guyana",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Grønnland",
"gm" => "Gambia",
"gn" => "Guinea",
"gp" => "Guadeloupe",
"gq" => "Ekvatorial-Guinea",
"gr" => "Hellea",
"gs" => "Sør-Georgia og de sørlige Sandwichøyene",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bissau",
"gy" => "Guyana",
"hk" => "Hongkong",
"hm" => "Heard- og McDonaldøyene",
"hn" => "Honduras",
"hr" => "Kroatia",
"ht" => "Haiti",
"hu" => "Ungarn",
"id" => "Indonesia",
"ie" => "Irland",
"il" => "Israel",
"im" => "Isle of Man",
"in" => "India",
"io" => "Det britiske området i Indiahavet",
"iq" => "Irak",
"ir" => "Iran",
"is" => "Island",
"it" => "Italia",
"je" => "Jersey",
"jm" => "Jamaica",
"jo" => "Jordan",
"jp" => "Japan",
"ke" => "Kenya",
"kg" => "Kirgisistan",
"kh" => "Kambodsja",
"ki" => "Kiribati",
"km" => "Komorene",
"kn" => "Saint Christopher og Nevis",
"kp" => "Nord-Korea",
"kr" => "Korea",
"kw" => "Kuwait",
"ky" => "Caymanøyene",
"kz" => "Kasakhstan",
"la" => "Laos",
"lb" => "Libanon",
"lc" => "Saint Lucia",
"li" => "Liechtenstein",
"lk" => "Sri Lanka",
"lr" => "Liberia",
"ls" => "Lesotho",
"lt" => "Litauen",
"lu" => "Luxemburg",
"lv" => "Letland",
"ly" => "Libya",
"ma" => "Marokko",
"mc" => "Monaco",
"md" => "Moldova",
"me" => "Montenegro",
"mg" => "Madagaskar",
"mh" => "Marshalløyene",
"mk" => "Makedonia",
"ml" => "Mali",
"mm" => "Myanmar",
"mn" => "Mongolia",
"mo" => "Macau",
"mp" => "Nord-Marianene",
"mq" => "Martinique",
"mr" => "Mauritania",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauritius",
"mv" => "Maldivene",
"mw" => "Malawi",
"mx" => "Mexico",
"my" => "Malaysia",
"mz" => "Moçambique",
"na" => "Namibia",
"nc" => "Ny-Caledonien",
"ne" => "Niger",
"nf" => "Norfolk øen",
"ng" => "Nigeria",
"ni" => "Nicaragua",
"nl" => "Nederland",
"no" => "Norge",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "New Zealand",
"om" => "Oman",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Fransk Polynesia",
"pg" => "Papua Ny-Guinea",
"ph" => "Filippinene",
"pk" => "Pakistan",
"pl" => "Polen",
"pm" => "Saint Pierre og Miquelon",
"pn" => "Pitcairn",
"pr" => "Puerto Rico",
"ps" => "Palestina",
"pt" => "Portugal",
"pw" => "Palau",
"py" => "Paraguay",
"qa" => "Qatar",
"re" => "Réunion",
"ro" => "Romania",
"rs" => "Serbia",
"ru" => "Russland",
"rw" => "Rwanda",
"sa" => "Saudi-Arabia",
"sb" => "Salomonøyene",
"sc" => "Seychellene",
"sd" => "Sudan",
"se" => "Sverige",
"sg" => "Singapore",
"sh" => "Saint Helena",
"si" => "Slovenia",
"sk" => "Slovakia",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somalia",
"sr" => "Surinam",
"st" => "Sao Tomé og Príncipe",
"su" => "Sovjetunionen",
"sv" => "El Salvador",
"sx" => "Sint Maarten",
"sy" => "Syria",
"sz" => "Swaziland",
"tc" => "Turks- og Caicosøyene",
"td" => "Tchad",
"tf" => "Franske sørlige territorier",
"tg" => "Togo",
"th" => "Thailand",
"tj" => "Tadsjikistan",
"tk" => "Tokelau",
"tl" => "Øttimor",
"tm" => "Turkmenistan",
"tn" => "Tunisia",
"to" => "Tonga",
"tp" => "Øttimor",
"tr" => "Tyrkia",
"tt" => "Trinidad og Tobago",
"tv" => "Tuvalu",
"tw" => "Taiwan",
"tz" => "Tanzania",
"ua" => "Ukraina",
"ug" => "Uganda",
"uk" => "Storbritannia",
"us" => "De forente stater",
"uy" => "Uruguay",
"uz" => "Usbekistan",
"va" => "Vatikanstaten",
"vc" => "Saint Vincent og Grenadinerne",
"ve" => "Venezuela",
"vg" => "Jomfruøyene (Storbritannia)",
"vi" => "Jomfruøyene (USA)",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Wallis- og Futunaøyene",
"ws" => "Samoa",
"ye" => "Yemen",
"yt" => "Mayotte",
"za" => "Sørafrika",
"zm" => "Zambia",
"zw" => "Zimbabwe",

// No longer active but needed for history purpose
"bl" => "Saint-Barthélemy",
"bv" => "Bouvetøya",
"bq" => "Caribbean Nederland",
"cs" => "Serbia og Montenegro",
"eh" => "Vest-Sahara",
"gb" => "Storbritannia",
"mf" => "Saint-Martin",
"sj" => "Svalbard og Jan Mayen",
"ss" => "sør-Sudan",
"um" => "US mindre øyer i Oceania og Vestindia",
"yu" => "Serbia og Montenegro",
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
"global_titlebar"=> "statistikk for %SERVER generert på %DATE",
"global_bbclone_copyright" => "BBClone-laget - lisensiert under ",
"global_last_reset" => "Statistikk sist nullstilt på",
"global_yes" => "Ja",
"global_no" => "Nei",

// The error messages
"error_cannot_see_config" =>
"Du har ikke tillatelse til å se BBClone konfigurasjonen på denne tjeneren.",

// Miscellaneoux translations
"misc_other" => "Andre",
"misc_unknown" => "Ukjent",
"misc_second_unit" => "s",
"misc_ignored" => "Ignorert",

// The Navigation Bar
"navbar_main_site" => "Hovedside",
"navbar_configuration" => "Konfigurasjon",
"navbar_global_stats" => "Generell statistikk",
"navbar_detailed_stats" => "Detaljert statistikk",
"navbar_time_stats" => "Historikk",
"navbar_language" => "språk",
"navbar_go" => "gå",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Tidspunkt",
"dstat_visits" => "Besøk",
"dstat_extension" => "Toppdomene",
"dstat_dns" => "Vertsnavn",
"dstat_from" => "Fra",
"dstat_os" => "OS",
"dstat_browser" => "Nettleser",
"dstat_visible_rows" => "Synlige besøk",
"dstat_green_rows" => "grønne rekker",
"dstat_blue_rows" => "blå rekker",
"dstat_red_rows" => "røde rekker",
"dstat_orange_rows" => "oransje rekker",
"dstat_search" => "Søk",
"dstat_last_page" => "Siste side",
"dstat_last_visit" => "seneste besøk",
"dstat_robots" => "roboter",
"dstat_my_visit" => "Besøk fra din IP",
"dstat_no_data" => "Ingen data tiljgjengelig",
"dstat_prx" => "Proxytjener",
"dstat_ip" => "IP-adresser",
"dstat_user_agent" => "Brukeragent",
"dstat_nr" => "Nr",
"dstat_pages" => "Sider",
"dstat_visit_length" => "Besøklengde",
"dstat_reloads" => "Oppdateringer",
"dstat_whois_information" => "Slå opp informasjon på denne IP Adresse",

// Global Stats words
"gstat_accesses" => "Besøkende",
"gstat_total_visits" => "Samlede treff",
"gstat_total_unique" => "Samlede unike treff",
"gstat_operating_systems" => "Topp %d operativsystem",
"gstat_browsers" => "Topp %d nettlesere",
"gstat_extensions" => "Topp %d toppdomener",
"gstat_robots" => "Topp %d roboter",
"gstat_pages" => "Topp %d besøkte sider",
"gstat_origins" => "Topp %d opprinnelser",
"gstat_hosts" => "Topp %d tjenere",
"gstat_keys" => "Topp %d nøkkelord",
"gstat_total" => "I alt",
"gstat_not_specified" => "Ikke spesifisert",

// Time Stats words
"tstat_su" => "Søn",
"tstat_mo" => "Man",
"tstat_tu" => "Tir",
"tstat_we" => "Ons",
"tstat_th" => "Tor",
"tstat_fr" => "Fri",
"tstat_sa" => "Lør",

"tstat_full_su" => "Søndag",
"tstat_full_mo" => "mandag",
"tstat_full_tu" => "tirsdag",
"tstat_full_we" => "onsdag",
"tstat_full_th" => "Torsdag",
"tstat_full_fr" => "Fredag​​",
"tstat_full_sa" => "Lørdag",

"tstat_jan" => "Jan",
"tstat_feb" => "Feb",
"tstat_mar" => "Mar",
"tstat_apr" => "Apr",
"tstat_may" => "Mai",
"tstat_jun" => "Jun",
"tstat_jul" => "Jul",
"tstat_aug" => "Aug",
"tstat_sep" => "Sep",
"tstat_oct" => "Okt",
"tstat_nov" => "Nov",
"tstat_dec" => "Des",

"tstat_full_jan" => "January",
"tstat_full_feb" => "February",
"tstat_full_mar" => "March",
"tstat_full_apr" => "April",
"tstat_full_may" => "May",
"tstat_full_jun" => "June",
"tstat_full_jul" => "July",
"tstat_full_aug" => "August",
"tstat_full_sep" => "September",
"tstat_full_oct" => "October",
"tstat_full_nov" => "November",
"tstat_full_dec" => "December",

"tstat_last_day" => "Siste døgn",
"tstat_last_week" => "Siste uke",
"tstat_last_month" => "Siste måned",
"tstat_last_year" => "Siste år",
"tstat_average" => "Gjennomsnittlig",

// Loadtime notice
"generated" => "side generert på ",
"seconds" => " sekunder",

// Configuration page words and sentences
"config_variable_name" => "Variabelnavn",
"config_variable_value" => "Variabelverdi",
"config_explanations" => "Forklaring",

"config_BBC_MAINSITE" =>
"Hvis denne variablen er satt, vil en lenke til den oppgitte siden bli generert.
Standardverdien er foreldrekategorien. Hvis din hovedside er plassert et annet sted,
så vil du sannsynligvis justere verdien.<br />
Eksempler:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone tillater visning av innstillinger som standard. I tilfellet dette ikke er
ønsket, kan du hindre visning ved å slå av denne opsjonen.<br />
Eksempler:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Tittelen på alle BBClone sidene.<br />
Følgende makroer kan brukes:<br />
<ul>
<li>%SERVER: servernavn,</li>
<li>%DATE: nåværende dato.</li>
</ul>
HTML-tagger kan også brukes.<br />
Eksempler:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My Statistics from %DATE look like this:&quot;;<br />",

"config_BBC_LANGUAGE" =>
"Standard språk i BBclone, hvis det ikke har blitt spesifisert av nettleseren.
Følgende språk er støttet:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn og zh-tw</p>",

"config_BBC_MAXTIME" =>
"Denne variabelen definerer varigheten for et unikt besøk i sekunder.
Hvert treff fra den samme besøkende vil bli betraktet som et
besøk så lenge perioden mellom to påfølgende treff
ikke overgår denne grensen. Standardverdien er de facto nettstandard
på 30 minutter (1800 sekunder), men avhengig av dine behov kan du endre
verdien.<br />
Eksempler:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Hvor mange oppføringer du vil ha listet i den detaljerte statistikken.
Standardverdien er 100. Det er ikke anbefalt å sette verdien
høyere enn 500 for å unngå for tung last på
netttjeneren.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Variablen \$BBC_DETAILED_STAT_FIELDS bestemmer hvilke kolonner som skal
vises i den detaljerte statistikken. Mulige kolonner er:
<ul>
<li>id => Den x-te besøkende siden du startet å telle</li>
<li>time => Tidspunktet det siste treffet ble registrert</li>
<li>visits => Treff for en unik besøkende</li>
<li>dns => Tjernernavn for besøkende</li>
<li>ip => IP-adresse for den besøkende</li>
<li>os => Operativsystemet (hvis tilgjengelig og/eller ikke en robot)</li>
<li>browser => Programvaren brukt for å opprette forbindelsen, vanligvis en nettleser</li>
<li>ext => Land (eller extension) for den besøkende</li>
<li>referer => Lenken til der den besøkende kom fra (hvis tilgjengelig)</li>
<li>page => Den sist besøkte side</li>
<li>search => Søket en besøkende brukt (hvis tilgjengelig)</li>
</ul>
Rekkefølgen du oppgir kolonnene i, vil bli brukt ved visning.<br />
Eksempler:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"I tilfellet tjeneren ikke har samme tidssone som deg, kan du tilpasse tiden i
minutter ved hjelp av denne opsjonen. Negative verdier vil stille tiden tilbake,
positive vil stille den frem.<br />
Eksempler:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Denne opsjonen bestemmer om tjenernavnet for IP-adresser skal finnes eller ei.
Tjenernavn forteller mye mer om den besøkende, men leting etter
tjenernavn kan senke hastigheten på nettstedet ditt hvis DNS-tjenerne som
blir brukt er trege.  Ved å slå på denne variabelen kan
eventuelle hastighetsproblemer bli løst.<br />
Eksempler:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClone sin standard er å vise treff i tidsstatistikken fordi det gir en
ganske god formening om den faktiske lasten på tjeneren. Hvis du heller
fortrekker å bruke unike treff som basis for din tidsstatistikken, kan du
slå på denne opsjonen.<br />
Eksempler:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Denne opsjonen kan brukes til å ekskludere enkelte IP-adresser eller
adresseområder fra å bli telt. Du kan legge til flere uttrykk ved
å bruke komma som skilletegn.<br />
Eksempler:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Hvis du ikke vil at enkelte referrers fra dine besøkende skal listes i
rankingen eller den detaljerte statistikken, kan du oppgi en eller flere
nøkkelord brukt for å blokkere referrers som inneholder
nøkkelordene. Bruk komma mellom nøkkelordene.<br />
Eksempler:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Du kan bruke denne opsjonen til å bestemme behandling av roboter.
Standardvalg er å eksludere tjenernavn fra roboter i din
tjener-ranking, men å ta det med i alle andre statistikker. (Dette er opsjon
&quot;1&quot;.) Hvis du ikke vil se noen roboter i det hele tatt, sett opsjonen til
&quot;2&quot;, da vil kun menneskelige besøk bli telt.<br />
Eksempler:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Denne opsjonen bestemmer hvordan BBClone skiller en besøkende fra en
annen. Standard er å bruke IP-adressen som gir realistiske tall i de
fleste tilfeller. Hvis dine besøkende often er gjemt bak proxytjenere,
kan du oppnå mer realistiske tall ved å slå av denne
opsjonen, siden da vil en ny besøkende bli anta hver gang user agent har
blitt skiftet.<br />
Eksempler:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Slå på denne opsjonen for å nullstille dine statistikker.
Ikke glem å slå den av igjen etterpå hvis ikke vil du
sannsynligvis oppleve uvanlig liten trafikk ;).<br />
Eksempler:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Tjener og referrer statistikk kan generere store mengder data - vanligvis
forårsaket av engangsbesøkende. Ved å slå på
denne opsjonen kan du slette disse oppføringene og vesentlig redusere
størrelsen på access.php (som inneholder all statistikken for
nettsidene dine) uten å påvirke den faktisk synlig tjener og
referrer rankingen. Antall treff vil bli lagt til
&quot;not_specified&quot;-oppføringene for å bevare det totale
antall treff intakt.<br />
Eksempler:<br />
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
