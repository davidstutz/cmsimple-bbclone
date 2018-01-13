<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: bs.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Bosnian (Bosanski)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Lokalni",
"numeric" => "Brojčano",
"unknown" => "Nepoznato",
"museum" => "Muzeum",
"travel" => "Putovanje",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Avionsli",
"arpa" => "Arpa",
"asia" => "Azija-Pacifik",
"coop" => "Coop",
"info" => "Informaciona",
"jobs" => "Zaposlenost",
"mobi" => "Mobiles",
"name" => "Personalna",
"post" => "poštanske usluge",

"biz" => "Biznis",
"cat" => "Katalonac",
"com" => "Komercijalna",
"edu" => "Edukaciona",
"gal" => "Galicijski",
"gov" => "US Government",
"int" => "Internacionalna organizacija",
"mil" => "US armija",
"net" => "Networks",
"org" => "Organizacije",
"pro" => "Profesionalna",
"tel" => "Kontakti",
"xxx" => "Erotski",

"a1" => "Anonymous Proxy",
"a2" => "Satellite Provider",
"ac" => "Ascension Island",
"ad" => "Andora",
"ae" => "Ujedinjeni Arapski Emirati",
"af" => "Afganistan",
"ag" => "Antigua i Barbuda",
"ai" => "Anguila",
"al" => "Albanija",
"am" => "Armenija",
"an" => "Nizozemski Antili",
"ao" => "Angola",
"ap" => "Azija-Pacifik",
"aq" => "Antarktika",
"ar" => "Argentina",
"as" => "Americka Samoa",
"at" => "Austrija",
"au" => "Australija",
"aw" => "Aruba",
"ax" => "Ålandska ostrva",
"az" => "Azerbaidžan",
"ba" => "Bosnia i Herzegovina",
"bb" => "Barbados",
"bd" => "Bangladeš",
"be" => "Belgija",
"bf" => "Burkina Faso",
"bg" => "Bugarska",
"bh" => "Bahrain",
"bi" => "Burundi",
"bj" => "Benin",
"bm" => "Bermuda",
"bn" => "Brunei",
"bo" => "Bolivija",
"br" => "Brazil",
"bs" => "Bahame",
"bt" => "Butan",
"bw" => "Botsvana",
"by" => "Bijelorusija",
"bz" => "Belize",
"ca" => "Kanada",
"cc" => "Kokos ostrva",
"cd" => "Kongo",
"cf" => "Centralno Africka republika",
"cg" => "Kongo",
"ch" => "Švicerska",
"ci" => "Ivory Coast",
"ck" => "Cook Islands",
"cl" => "Cile",
"cm" => "Kamerun",
"cn" => "Kina",
"co" => "Kolumbija",
"cr" => "Kosta Rika",
"cu" => "Kuba",
"cv" => "Cape Verde",
"cw" => "Curaçao",
"cx" => "Božićni otok",
"cy" => "Kipar",
"cz" => "Ceška Republika",
"de" => "Njemacka",
"dj" => "Džiboti",
"dk" => "Danska",
"dm" => "Dominika",
"do" => "Dominikanska Republika",
"dz" => "Algerija",
"ec" => "Ekvador",
"ee" => "Estonija",
"eg" => "Egipt",
"er" => "Eritrea",
"es" => "Španija",
"et" => "Etiopia",
"eu" => "Evropska unija",
"fi" => "Finska",
"fj" => "Fidži",
"fk" => "Falklandski Otoci",
"fm" => "Micronesia",
"fo" => "Farski Otoci",
"fr" => "Francuska",
"ga" => "Gabon",
"gd" => "Grenada",
"ge" => "Georgia",
"gf" => "French Guiana",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Grenland",
"gm" => "Gambia",
"gn" => "Guinea",
"gp" => "Guadeloupe",
"gq" => "Equatorial Guinea",
"gr" => "Grcka",
"gs" => "Južna Džordžija i Otoci Južni Sendvič",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bisau",
"gy" => "Guiana",
"hk" => "Hong Kong",
"hm" => "Čuo sam Mc Donald otoci",
"hn" => "Honduras",
"hr" => "Hrvatska",
"ht" => "Haiti",
"hu" => "Hungary",
"id" => "Indonezija",
"ie" => "Ireland",
"il" => "Izrael",
"im" => "Mana ostrvo",
"in" => "Indija",
"io" => "UK Indian Ocean Territory",
"iq" => "Irak",
"ir" => "Iran",
"is" => "Island",
"it" => "Italija",
"je" => "Jersey",
"jm" => "Jamaika",
"jo" => "Jordan",
"jp" => "Japan",
"ke" => "Kenija",
"kg" => "Kirgizstan",
"kh" => "CKambodža",
"ki" => "Kiribati",
"km" => "Comoros",
"kn" => "Sveti Kristofor i Nevis",
"kp" => "Sjeverna Korea",
"kr" => "Korea",
"kw" => "Kuvait",
"ky" => "Cayman Islands",
"kz" => "Kazakhstan",
"la" => "Laos",
"lb" => "Libanon",
"lc" => "Saint Lucia",
"li" => "Liehtenštajn",
"lk" => "Šri Lanka",
"lr" => "Liberia",
"ls" => "Lesotho",
"lt" => "Litvanija",
"lu" => "Luksemburg",
"lv" => "Latvija",
"ly" => "Libija",
"ma" => "Moroko",
"mc" => "Monaco",
"md" => "Moldova",
"me" => "Montenegro",
"mg" => "Madagaskar",
"mh" => "Marshall Islands",
"mk" => "Makedonija",
"ml" => "Mali",
"mm" => "Myanmar",
"mn" => "Mongolija",
"mo" => "Macau",
"mp" => "Sjeverni Marijanski otoci",
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
"nl" => "Holandija",
"no" => "Norway",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "Novi Zealand",
"om" => "Oman",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "French Polynesia",
"pg" => "Papua New Guinea",
"ph" => "Filipine",
"pk" => "Pakistan",
"pl" => "Poljska",
"pm" => "St. Pierre i Miquelon",
"pn" => "Pitcairn",
"pr" => "Puerto Rico",
"ps" => "Palestina",
"pt" => "Portugal",
"pw" => "Palau",
"py" => "Paragvaj",
"qa" => "Katar",
"re" => "Reunion",
"ro" => "Rumunija",
"rs" => "Srbija",
"ru" => "Rusija",
"rw" => "Rwanda",
"sa" => "Saudijska Arabija",
"sb" => "Solomon Islands",
"sc" => "Seychelles",
"sd" => "Sudan",
"se" => "Sweden",
"sg" => "Singapore",
"sh" => "St. Helena",
"si" => "Slovenija",
"sk" => "Slovacka",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somalia",
"sr" => "Suriname",
"st" => "Sao Tome i Principe",
"su" => "Soviet Union",
"sv" => "El Salvador",
"sx" => "Sint Maarten",
"sy" => "Sirija",
"sz" => "Švicerska",
"tc" => "Otoci Turks i Caicos",
"td" => "Chad",
"tf" => "Francuski južni teritoriji",
"tg" => "Togo",
"th" => "Thailand",
"tj" => "Tajikistan",
"tk" => "Tokelau",
"tl" => "East Timor",
"tm" => "Turkmenistan",
"tn" => "Tunisia",
"to" => "Tonga",
"tp" => "East Timor",
"tr" => "Turska",
"tt" => "Trinidad i Tobago",
"tv" => "Tuvalu",
"tw" => "Taiwan",
"tz" => "Tanzania",
"ua" => "Ukraine",
"ug" => "Uganda",
"uk" => "United Kingdom",
"us" => "Sjedinjene države",
"uy" => "Uruguaj",
"uz" => "Uzbekistan",
"va" => "Vatican State",
"vc" => "Sveti Vincent i Grenadini",
"ve" => "Venezuela",
"vg" => "Virgin Islands (UK)",
"vi" => "Virgin Islands (US)",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Wallis i Futuna Islands",
"ws" => "Samoa",
"ye" => "Yemen",
"yt" => "Mayotte",
"za" => "Južna Afrika",
"zm" => "Zambia",
"zw" => "Zimbabwe",

// No longer active but needed for history purpose
"bl" => "Sveti Bartolomej",
"bv" => "Bouvet ostrva",
"bq" => "Caribbean Netherlands",
"cs" => "Serbija i Crna Gora",
"eh" => "Western Sahara",
"gb" => "Ujedinjeno Kraljevstvo",
"mf" => "Saint Martin",
"sj" => "Svalbard and Jan Mayen Islands",
"ss" => "South Sudan",
"um" => "US Minor Outlying Islands",
"yu" => "Srbija i Crna Gora",
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
"global_titlebar"=> "Statistika za %SERVER generated on %DATE",
"global_bbclone_copyright" => "The BBClone team - Licenzirano pod",
"global_last_reset" => "Zadnje resetovanje statistike",
"global_yes" => "da",
"global_no" => "ne",

// The error messages
"error_cannot_see_config" =>
"Vama nije dozvoljeno vidjeti statistike.",

// Miscellaneous translations
"misc_other" => "Ostali",
"misc_unknown" => "Nepoznato",
"misc_second_unit" => "s",
"misc_ignored" => "Ignorisano",

// The Navigation Bar
"navbar_main_site" => "Glavna stranica",
"navbar_configuration" => "Konfiguracija",
"navbar_global_stats" => "Globalne statistike",
"navbar_detailed_stats" => "Detaljna statistika",
"navbar_time_stats" => "Vremeska statistika",
"navbar_language" => "Jezik",
"navbar_go" => "ići",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Vrijeme",
"dstat_visits" => "Posjete",
"dstat_extension" => "Ekstenzija",
"dstat_dns" => "Hostname",
"dstat_from" => "Od",
"dstat_os" => "OS",
"dstat_browser" => "Browser",
"dstat_visible_rows" => "Vidljivi pristupi",
"dstat_green_rows" => "zeleni redovi",
"dstat_blue_rows" => "plavi redovi",
"dstat_red_rows" => "crveni redovi",
"dstat_search" => "Pretraga",
"dstat_last_page" => "Predhodna stranica",
"dstat_last_visit" => "zadnja posjeta",
"dstat_robots" => "Roboti",
"dstat_my_visit" => "Visits from your IP",
"dstat_no_data" => "Bez podataka",
"dstat_prx" => "Proxy Server",
"dstat_ip" => "IP adresa",
"dstat_user_agent" => "Korisnicki agent",
"dstat_nr" => "Br",
"dstat_pages" => "Stranica",
"dstat_visit_length" => "Duzina posjete",
"dstat_reloads" => "Osvježavanja",
"dstat_whois_information" => "Pogledaj se informacije o ovom IP Adresa",

// Global Stats words
"gstat_accesses" => "Pristupi",
"gstat_total_visits" => "Ukupno posjeta",
"gstat_total_unique" => "Ukupno jedinstvenih",
"gstat_operating_systems" => "Prvih %d operativnih sistema",
"gstat_browsers" => "Prvih %d browsera",
"gstat_extensions" => "Prvih %d ekstenzija",
"gstat_robots" => "Prvih %d robota",
"gstat_pages" => "Prvih %d posjecenih stranica",
"gstat_origins" => "Prvih %d Origins",
"gstat_hosts" => "Prvih %d hostova",
"gstat_keys" => "Prvih %d Keywords",
"gstat_total" => "Ukupno",
"gstat_not_specified" => "Nije dato",

// Time Stats words
"tstat_su" => "Nedj",
"tstat_mo" => "Pon",
"tstat_tu" => "Uto",
"tstat_we" => "Sri",
"tstat_th" => "Cet",
"tstat_fr" => "Pet",
"tstat_sa" => "Sub",

"tstat_full_su" => "Nedjelja",
"tstat_full_mo" => "Ponedjeljak",
"tstat_full_tu" => "Utorak",
"tstat_full_we" => "Srijeda",
"tstat_full_th" => "Četvrtak",
"tstat_full_fr" => "Petak",
"tstat_full_sa" => "subota",

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
"tstat_full_feb" => "februar",
"tstat_full_mar" => "March",
"tstat_full_apr" => "April",
"tstat_full_may" => "Maj",
"tstat_full_jun" => "Juni",
"tstat_full_jul" => "Juli",
"tstat_full_aug" => "Avgust",
"tstat_full_sep" => "Septembar",
"tstat_full_oct" => "Oktobar",
"tstat_full_nov" => "Novembar",
"tstat_full_dec" => "Decembar",

"tstat_last_day" => "Jučer",
"tstat_last_week" => "Prošle sedmice",
"tstat_last_month" => "Prošlog mjeseca",
"tstat_last_year" => "Prošle godine",
"tstat_average" => "Average",

// Loadtime notice
"generated" => "strani nastaje u ",
"seconds" => " sekundi",

// Configuration page words and sentences
"config_variable_name" => "Ime varijable",
"config_variable_value" => "Vrijednost varijable",
"config_explanations" => "Objašnjenje",

"config_BBC_MAINSITE" =>
"Ako je ova variabla uključena, bit ce generisan link do određene lokacije. 
Defaultna variabla je podešena za folder iznad foldera BBClone skripte. U slučaju da se 
vaš sajt nalazi na drugom serveru, onda morate napisati dodatne izmjene.<br />
Primjeri:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone je defaultno podešen da prikazuje Konfiguraciju. U slučaju da to ne želite
onda jednostavno upotrebom ove varijable iskljucite tu opciju.<br />
Primjeri:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Naslov vaše stranice za statistike.<br />
Bit će prikazano ispod navigacije svake BBClone stranice<br />
Sljedeći macrosi su validni:<br />
<ul>
<li>%SERVER: ime servera,</li>
<li>%DATE: trenutno vrijeme.</li>
</ul>
HTML Tagovi su dozvoljeni.<br />
Primjeri:<br />
\$BBC_TITLEBAR = &quot;Statistike za %SERVER generisane %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;Moja statistika %DATE je izgledala ovako:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBCloneov defaultni jezik, u slučaju da nije podešen od strane browsera.
Lista jezika:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn i zh-tw</p>",

"config_BBC_MAXTIME" =>
"Ova variabla definiše dužinu jedinstvene posjete. Svaki hit istog posjetioca
u odredenom vremenskom periodu će biti tretiran kao jedinstvena posjeta. Defaultna vrijednost je de facto
web standard odnosno 30 minuta što odgovara 1800 sekundi,  ali u zavisnosti od vaših potreba variabla 
je promjenjiva.<br />
Primjeri:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Odredivanje broja različitih browsera, operativnih sistema itd. koji će biti prikazani u listi? 
Defaultna vrijednost je 100. Preporučuje se postaviti manje od 500 prikaza jer prevelik broj otežava
učitavanje stranice.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Variabla \$BBC_DETAILED_STAT_FIELDS podešava boju celija u Detaljnoj statistici.
 Moguće ćelije su:
<ul>
<li>id => x-ni posjetioc od početka brojanja</li>
<li>time => Vrijeme kada je posjetitelj registrovan</li>
<li>visits => Broj osvježenja</li>
<li>dns => Hostname posjetioca</li>
<li>ip => IP adresa</li>
<li>os => Operativni sustav ili sistem posjetioca</li>
<li>browser => Software koji je bio iskoristen za pristup stranici (Browser)</li>
<li>ext => Država ili oznaka posjetica</li>
<li>referer => Link, kojim je posjetioc putovao</li>
<li>page => Posljednja posjećena stranica</li>
<li>search => Ključne riječi koje je koristio posjetioc</li>
</ul>
Primjeri:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"Ako se serversko i vaše vrijeme nepodudara, podesite ga putem ove variable 
upisivanjem razlike vremena u minutama. Negativni broj vraća vrijeme
unazad dok pozitivni pomjera unaprijed.<br />
Primjeri:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Opcija podešaje dali da se IP adresa razlaže u hostname ili ne.<br />
Primjeri:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"Standardno ponašanje BBClonea je, prikazivanje hitsova u vremenskoj statistici jer to 
pokazuje stvarnu opterećenost servera. Ali ako ćete radije koristiti jedinstvene posjete 
kao osnovicu vremenske statistike možete koristiti ovu varijablu.<br />
Primjeri:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Ova opcija se može koristiti da bi se određene IP adrese isključile
iz odbrojavanja statistike. Ako želite koristiti više
različitih IP adresa onda ih morate razdvajati zarezom.<br />
Primjeri:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Ako želite da se određeni Referreri ne prikazuju u statistici, jednostavno ih 
upišite u variablu i odvajajte ih sa zarezom..<br />
Primjeri:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Koristite ovu opciju ako želite brojati robote u vašoj statistici.
Standardno je da se botovi ignoriraju u listi Hostova, ali da se
ubrojavaju u ostalim statistikama. Ako želite da se robori uopće ne 
prikazuju onda morate variablu postaviti na &quot;2&quot;, tako će
se brojati samo posjete osoba a ne robota.<br />
Primjeri:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Je opcija koja služi za definisanje načina na koji BBClone razlikuje posjetioce. 
Standardno je razlikovanje samo po IP adresi, što prikazuje najčešće realnu posjećenost.<br />
Primjeri:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Svaki put kada resetujete vašu statistiku možete koristiti ovu opciju koja automatski briše
statistiku nakon prve posjete nekog posjetioca. Nemojte zaboraviti isključiti
ovu opciju nakon sto se statistika resetuje.<br />
Primjeri:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Host i Referrer statistika može prouzrokovati veliku količinu podataka koji
najčešće potiču od jedinstvenih posjetioca. Aktiviranjem ove opcije se brišu 
takvi zapisi i veličina access.php datoteke se znatno smanjuje.<br />
Primjeri:<br />
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
