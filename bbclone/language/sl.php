<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: sl.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Slovenian (Slovenski)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Lokalni",
"numeric" => "Číselná",
"unknown" => "Neznámy",
"museum" => "Musej",
"travel" => "Potovanja",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Sieťova infraštruktúra",
"asia" => "Asia-Pacific",
"coop" => "Coop",
"info" => "Informačné servery",
"jobs" => "Zaposlovanje",
"mobi" => "Mobiles",
"name" => "Osobné servery",
"post" => "Poštne storitve",

"biz" => "Biznis servery",
"cat" => "Catalan",
"com" => "Komerčné servery",
"edu" => "Školstvo",
"gal" => "Galicijski",
"gov" => "Vládne servery USA",
"int" => "Medzinárodné organizácie",
"mil" => "Vojenské servery USA",
"net" => "Sieťová infraštruktúra",
"org" => "Nevládne organizácie",
"pro" => "Professional",
"tel" => "Imenik",
"xxx" => "Pornografski",

"a1" => "Anonymous Proxy",
"a2" => "Satellite Provider",
"ac" => "Otok Ascension",
"ad" => "Andora",
"ae" => "Združeni arabski emirati",
"af" => "Afganistan",
"ag" => "Antigva in Barbuda",
"ai" => "Angvila",
"al" => "Albanija",
"am" => "Armenija",
"an" => "Nizozemski Antili",
"ao" => "Angola",
"ap" => "Asia-Pacific",
"aq" => "Antarktika",
"ar" => "Argentina",
"as" => "Ameriška Samoa",
"at" => "Avstrija",
"au" => "Avstralija",
"aw" => "Aruba",
"ax" => "Åland",
"az" => "Azerbajdžan",
"ba" => "Bosna in Hercegovina",
"bb" => "Barbados",
"bd" => "Bangladeš",
"be" => "Belgija",
"bf" => "Burkina Faso",
"bg" => "Bolgarija",
"bh" => "Bahrajn",
"bi" => "Burundi",
"bj" => "Benin",
"bm" => "Bermudi",
"bn" => "Brunej",
"bo" => "Bolivija",
"br" => "Brazilija",
"bs" => "Bahami",
"bt" => "Butan",
"bw" => "Bocvana",
"by" => "Belorusija",
"bz" => "Belize",
"ca" => "Kanada",
"cc" => "Kokosovi otoki",
"cd" => "Kongo",
"cf" => "Srednjeafriška republika",
"cg" => "Kongo",
"ch" => "Švica",
"ci" => "Slonokoščena Obala",
"ck" => "Cookovi otoki",
"cl" => "Čile",
"cm" => "Kamerun",
"cn" => "Kitajska",
"co" => "Kolumbija",
"cr" => "Kostarika",
"cu" => "Kuba",
"cv" => "Zelenortski otoki",
"cw" => "Curaçao",
"cx" => "Božični otok",
"cy" => "Ciper",
"cz" => "Češka Republika",
"de" => "Nemčija",
"dj" => "Džibuti",
"dk" => "Danska",
"dm" => "Dominika",
"do" => "Dominikanska republika",
"dz" => "Alžirija",
"ec" => "Ekvador",
"ee" => "Estonija",
"eg" => "Egipt",
"er" => "Eritreja",
"es" => "Španija",
"et" => "Etiopija",
"eu" => "European Union",
"fi" => "Finska",
"fj" => "Fidži",
"fk" => "Falklandski otoki",
"fm" => "Mikronesija",
"fo" => "Ferski otoki",
"fr" => "Francija",
"ga" => "Gabon",
"gd" => "Grenada",
"ge" => "Georgia",
"gf" => "Franvoska Gvajana",
"gg" => "Guernesey",
"gh" => "Gana",
"gi" => "Gibraltar",
"gl" => "Grenlandija",
"gm" => "Gambija",
"gn" => "Gvineja",
"gp" => "Guadeloupe",
"gq" => "Ekvatorialna Gvineja",
"gr" => "Grčija",
"gs" => "Južna Georgia in otoki Južni Sandwich",
"gt" => "Gvatemala",
"gu" => "Guam",
"gw" => "Gvineja Bissau",
"gy" => "Gvajana",
"hk" => "Hongkong",
"hm" => "Heardov otok in McDonaldovi otoki",
"hn" => "Honduras",
"hr" => "Hrvaška",
"ht" => "Haiti",
"hu" => "Madžarska",
"id" => "Indonezija",
"ie" => "Irska",
"il" => "Izrael",
"im" => "Otok Man",
"in" => "Indija",
"io" => "Britansko ozemlje indijskega oceana",
"iq" => "Irak",
"ir" => "Iran",
"is" => "Islandija",
"it" => "Italija",
"je" => "Otok Jersey",
"jm" => "Jamajka",
"jo" => "Jordanija",
"jp" => "Japonska",
"ke" => "Kenija",
"kg" => "Kirgizistan",
"kh" => "Kambodža",
"ki" => "Kiribati",
"km" => "Komori",
"kn" => "St. Kitts in Nevis",
"kp" => "North Korea",
"kr" => "Koreja",
"kw" => "Kuvajt",
"ky" => "Kajmanski otoki",
"kz" => "Kazahstan",
"la" => "Laos",
"lb" => "Libanon",
"lc" => "St. Lucia",
"li" => "Lihtenštajn",
"lk" => "Šrilanka",
"lr" => "Liberija",
"ls" => "Lesoto",
"lt" => "Litva",
"lu" => "Luksemburg",
"lv" => "Latvija",
"ly" => "Libija",
"ma" => "Maroko",
"mc" => "Monako",
"md" => "Moldavija",
"me" => "Črna gora",
"mg" => "Madagaskar",
"mh" => "Marshallovi otoki",
"mk" => "Makedonija",
"ml" => "Mali",
"mm" => "Mjanmar",
"mn" => "Mongolija",
"mo" => "Macau",
"mp" => "Severni Marianski otoki",
"mq" => "Martinik",
"mr" => "Mavretanija",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauritius",
"mv" => "Maldivi",
"mw" => "Malavi",
"mx" => "Mehika",
"my" => "Malezija",
"mz" => "Mozambik",
"na" => "Namibija",
"nc" => "Nova Kaledonija",
"ne" => "Nigerija",
"nf" => "Norfolški otok",
"ng" => "Nigerija",
"ni" => "Nikaragva",
"nl" => "Nizozemska",
"no" => "Norveška",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "Nova Zelandija",
"om" => "Oman",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Francoska polinezija",
"pg" => "Papua Nova Gvineja",
"ph" => "Filipini",
"pk" => "Pakistan",
"pl" => "Poljska",
"pm" => "St. Pierre in Miquelon",
"pn" => "Pitcairn",
"pr" => "Portoriko",
"ps" => "Palestina",
"pt" => "Portugalska",
"pw" => "Palau",
"py" => "Paragvaj",
"qa" => "Katar",
"re" => "Reunion",
"ro" => "Romunija",
"rs" => "Srbija",
"ru" => "Rusija",
"rw" => "Ruanda",
"sa" => "Savdova Arabija",
"sb" => "Salomonovi otoki",
"sc" => "Sejšeli",
"sd" => "Sudan",
"se" => "Švedska",
"sg" => "Singapur",
"sh" => "St. Helena",
"si" => "Slovenija",
"sk" => "Slovaška",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somalija",
"sr" => "Surinam",
"st" => "Sao Tome in Principe",
"su" => "Sovjetska zveza",
"sv" => "Salvador",
"sx" => "Sint Maarten",
"sy" => "Sirija",
"sz" => "Svazi",
"tc" => "Otoki Turks in Caicos",
"td" => "Čad",
"tf" => "Francosko južno ozemlje",
"tg" => "Togo",
"th" => "Tajska",
"tj" => "Tadžikistan",
"tk" => "Tokelau",
"tl" => "Vzhodni Timor",
"tm" => "Turkmenistan",
"tn" => "Tunizija",
"to" => "Tonga",
"tp" => "Vzhodni Timor",
"tr" => "Turčija",
"tt" => "Trinidad in Tobago",
"tv" => "Tuvalu",
"tw" => "Tajvan",
"tz" => "Tanzanija",
"ua" => "Ukrajina",
"ug" => "Uganda",
"uk" => "Združeno kraljestvo",
"us" => "Združene države Amerike",
"uy" => "Urugvaj",
"uz" => "Uzbekistan",
"va" => "Vatikan",
"vc" => "St. Vincent in Grenadine",
"ve" => "Venezuela",
"vg" => "Deviški otoki (VB)",
"vi" => "Deviški otoki (ZDA)",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Otoki Wallis in Futuna",
"ws" => "Samoa",
"ye" => "Jemen",
"yt" => "Mayotte",
"za" => "Južna Afrika",
"zm" => "Zambija",
"zw" => "Zimbabve",

// No longer active but needed for history purpose
"bl" => "Saint-Barthélemy",
"bv" => "Bouvetov otok",
"bq" => "Karibik Holandské",
"cs" => "Srbija in Črna gora",
"eh" => "Západná Sahara",
"gb" => "Velika Britanija",
"mf" => "Saint Martin",
"sj" => "Svalbard in Jan Mayen",
"ss" => "Južni Sudan",
"um" => "Stranski zunanji otoki Združenih držav",
"yu" => "Srbija in Črna gora",
"zr" => "Zair"
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
"global_titlebar"=> "Statistika za %SERVER narejena %DATE",
"global_bbclone_copyright" => "BBClone ekipa - Pod licenco",
"global_last_reset" => "Statistika nazadnje obnovljena",
"global_yes" => "Da",
"global_no" => "Ne",

// The error messages
"error_cannot_see_config" =>
"Nimate dovoljenja videti BBClone nastavitev na tem strežniku.",

// Miscellaneous translations
"misc_other" => "Ostalo",
"misc_unknown" => "Neznano",
"misc_second_unit" => "s",
"misc_ignored" => "Prezrto",

// The Navigation Bar
"navbar_main_site" => "Glavna stran",
"navbar_configuration" => "Nastavitve",
"navbar_global_stats" => "Celotna statistika",
"navbar_detailed_stats" => "Izčrpna statistika",
"navbar_time_stats" => "Časovna statistika",
"navbar_language" => "Jezik",
"navbar_go" => "Pojdi",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Čas",
"dstat_visits" => "Št. obiskov",
"dstat_extension" => "Končnica",
"dstat_dns" => "Ime gostitelja",
"dstat_from" => "Izvira iz",
"dstat_os" => "Operacijski sistem",
"dstat_browser" => "Brskalnik",
"dstat_visible_rows" => "Vidnih dostopov",
"dstat_green_rows" => "zelene vrste",
"dstat_blue_rows" => "modre vrste",
"dstat_red_rows" => "rdeče vrste",
"dstat_search" => "Search",
"dstat_last_page" => "Last Page",
"dstat_last_visit" => "zadnji obisk",
"dstat_robots" => "roboti",
"dstat_my_visit" => "Obiske iz vašega IP",
"dstat_no_data" => "Ni dostopnih podatkov",
"dstat_prx" => "Proxy strežnik",
"dstat_ip" => "IP naslov",
"dstat_user_agent" => "Uporabniški vmesnik",
"dstat_nr" => "Št.",
"dstat_pages" => "Strani",
"dstat_visit_length" => "Dolžina obiska",
"dstat_reloads" => "Št. osvežitev",
"dstat_whois_information" => "Iskanje informacij o tem IP adress",

// Global Stats words
"gstat_accesses" => "Dostopi",
"gstat_total_visits" => "Skupnih dostopov",
"gstat_total_unique" => "Edinstvenih dostopov",
"gstat_operating_systems" => "%d naj operacijskih sistemov",
"gstat_browsers" => "%d naj brskalnikov",
"gstat_extensions" => "%d naj končnic",
"gstat_robots" => "%d naj robotov",
"gstat_pages" => "%d naj obiskanih strani",
"gstat_origins" => "%d naj izvorov",
"gstat_hosts" => "%d naj gostiteljev",
"gstat_keys" => "%d naj ključnih besed",
"gstat_total" => "Skupno",
"gstat_not_specified" => "Ni določeno",

// Time Stats words
"tstat_su" => "Ned",
"tstat_mo" => "Pon",
"tstat_tu" => "Tor",
"tstat_we" => "Sre",
"tstat_th" => "Čet",
"tstat_fr" => "Pet",
"tstat_sa" => "Sob",

"tstat_full_su" => "Nedelja",
"tstat_full_mo" => "Ponedeljek",
"tstat_full_tu" => "Torek",
"tstat_full_we" => "Sreda",
"tstat_full_th" => "Četrtek",
"tstat_full_fr" => "Petek",
"tstat_full_sa" => "Sobota",

"tstat_jan" => "Jan",
"tstat_feb" => "Feb",
"tstat_mar" => "Mar",
"tstat_apr" => "Apr",
"tstat_may" => "Maj",
"tstat_jun" => "Jun",
"tstat_jul" => "Jul",
"tstat_aug" => "Avg",
"tstat_sep" => "Sep",
"tstat_oct" => "Okt",
"tstat_nov" => "Nov",
"tstat_dec" => "Dec",

"tstat_full_jan" => "January",
"tstat_full_feb" => "February",
"tstat_full_mar" => "Marec",
"tstat_full_apr" => "April",
"tstat_full_may" => "May",
"tstat_full_jun" => "June",
"tstat_full_jul" => "July", 
"tstat_full_aug" => "Avgust",
"tstat_full_sep" => "September",
"tstat_full_oct" => "October",
"tstat_full_nov" => "November",
"tstat_full_dec" => "December",

"tstat_last_day" => "Zadnji dan",
"tstat_last_week" => "Zadnji teden",
"tstat_last_month" => "Zadnji mesec",
"tstat_last_year" => "Zadnje leto",
"tstat_average" => "Povprečna",

// Loadtime notice
"generated" => "Stran ustvarjena v ",
"seconds" => " sekund",

// Configuration page words and sentences
"config_variable_name" => "Ime spremenljivke",
"config_variable_value" => "Vrednost spremenljivke",
"config_explanations" => "Razlaga",

"config_BBC_MAINSITE" =>
"Glavna stran:<br />
Če je ta spremenljivka nastavljena, bo vzpostavljena povezava do navedene lokacije.
Privzeta vrednost kaže na starševski imenik. V primeru, da je vaša glavna stran
nameščena drugje, boste verjetno želeli popraviti vrednost, da bo ustrezala vašim
potrebam.<br />
Primeri:<br />
\$BBC_MAINSITE = &quot;http://www.mojstreznik.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"Prikaz nastavitev:<br />
Privzeta vrednost je nastavljena na prikaz nastavitev BBClona. Če tega ne
želite, lahko preprečite dostop z izklopom te izbire.<br />
Primeri:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Naslovna vrstica:<br />
Prikazana bo v navigacijski vrstici vseh BBClone strani<br />
Sledeči makroji so prepoznani:<br />
<ul>
<li>%SERVER: ime strežnika,</li>
<li>%DATE: trenutni datum.</li>
</ul>
HTML označbe dovoljene.<br />
Primeri:<br />
\$BBC_TITLEBAR = &quot;Statistika za %SERVER narejena %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;Moja statitika do dne %DATE zgleda takole:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"Privzet jezik prikaza strani, v primeru da ni bil določen s strani brskalnika.
Podprti so sledeči jeziki:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn and zh-tw</p>",

"config_BBC_MAXTIME" =>
"Ta spremenljivka definira dolžino edinstvenega dostopa v sekundah. Vsak
dostop istega naslova v tem času bo smatran kot en sam obisk, dokler dva
zaporedna obiska ne prekoračita določene meje. Privzeta je 'de facto'
vrednost spletnega standarda 30 minut (1800 sekund), ampak jo lahko spremenite
glede na svoje potrebe.<br />
Primeri:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Koliko vnosov želite imeti prikazanih pri izčrpni statistiki. Privzeta
vrednost je 100. Priporočene so vrednosti do 500 zaradi prevelikih
obremenitev.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Spremenljivka \$BBC_DETAILED_STAT_FIELDS določa, kateri stolpci naj bodo
prikazani pri izčrpni statistiki. Možnosti so:
<ul>
<li>id => zaporedna številka obiskovalca od začetka štetja</li>
<li>time => čas zadnjega obiska</li>
<li>visits => št. obiskov vsakega edinstvenega dostopa</li>
<li>dns => ime gostitelja</li>
<li>ip => IP naslov</li>
<li>os => operacijski sistem (ali robot, če obstaja)</li>
<li>browser => brskalnik (ali robot)</li>
<li>ext => država ali končnica obiskovalca</li>
<li>referer => povezava, s katere je obiskovalec prišel (če obstaja)</li>
<li>page => Posledná navštívená stránka</li>
<li>search => iskani niz (če obstaja)</li>
</ul>
Enak vrstni red bo uporabljen za prikaz.<br />
Primeri:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"V primeru da strežnik ni v enaki časovni zoni, se lahko nastavi relativni čas
v minutah z uporabo tega stikala. Negativne vrednosti bodo nastavile čas nazaj,
pozitivne pa naprej.<br />
Primeri:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Ta izbira upravlja nastavitev razrešitve gostiteljskega imena. Medtem, ko imena
povedo nekaj več o obiskovalcu, lahko razreševanje poteka sorazmerno počasi, če
so uporabljeni domenski strežniki počasni, omejeni v zmogljivosti ali kako
drugače nezanesljivi. Nastavljanje te spremenljivke lahko reši problem.<br />
Primeri:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClonova privzeta nastavitev je prikazovanje skupnega števila dostopov v
časovni statistiki, ker nam da uporaben vtis trenutne obremenitve strežnika.
Če vam je ljubše, lahko uporabljate prikaz edinstvenih dostopov.<br />
Primeri:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"S to nastavitvijo lahko določite IP naslove ali območja, ki jih ne boste
upoštevali pri štetju. Če bi radi uporabili več izrazov uporabite vejico kot
ločilo.<br />
Primeri:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Če ne želite upoštevati določenih izvorov obiskovalcev naštetih med
vodilnimi ali v izčrpni statistiki, lahko nastavite eno ali več ključnih
besed uporabljenih za filter. Če jih uporabite več, uporabljajte vejico
kot ločilo.<br />
Primeri:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"S to nastavitvijo upravljate ravnanje z roboti. Privzeto je, da se roboti
prezrejo med vodečimi, ampak se štejejo pri ostali statistiki. Če želite da
se roboti ne štejejo pri katerikoli statistiki, nastavite vrednost &quot;2&quot;,
takrat bodo v štetje vzeti le človeški obiski.<br />
Primeri:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Ta nastavitev določa, kako bo BBClone ločil med obiskovalci. Privzeto je
ločevanje samo po IP naslovu, ki je stvarna v večini primerov. Če pa so
obiskovalci za proxy strežnmiki, bo deaktviacije te nastavitve priskrbela
bolj točne številke, ker bodo obiskovalci ločeni s spremembo uporabniškega
vmesnika.<br />
Primeri:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Ko želite izbrisati statistiko, vključite to stikalo, statistika se
bo pa zbrisala ob naslednjem obisku. Ne pozabite ga potem izklopiti, drugače
boste verjetno izkusili nenavadno nizek promet ;).<br />
Primeri:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Ime gostitelja in stran izvora lahko proizvede velike količine
podatkov, čeprav jih je večina od enkratnih obiskovalcev. Z vključitvijo tega
stikala lahko očistite te vnose in znatno zmanjšate velikost datoteke
access.php brez da bi vplivali na vidne gostitelje ali tabelo naj
izvorov. Število zadetkov bo dodano &quot;nedoločenim&quot; vnosom da bo
skupni rezultat isti.<br />
Primeri:<br />
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
