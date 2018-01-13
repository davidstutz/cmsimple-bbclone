<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: ca.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Catalan (Català)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Local",
"numeric" => "Adreça IP",
"unknown" => "Desconegut",
"museum" => "Museu",
"travel" => "viatges",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Arpa",
"asia" => "Asia-Pacific",
"coop" => "Coop",
"info" => "Informació",
"jobs" => "Ocupació",
"mobi" => "Els mòbils",
"name" => "Personal",
"post" => "Serveis Postals",

"biz" => "Empreses",
"cat" => "Català",
"com" => "Comercial",
"edu" => "Educació",
"gal" => "Gallec", 
"gov" => "Govern d'Estats Units",
"int" => "Organitzacions",
"mil" => "Exèrcit dels Estats Units",
"net" => "Xarxes",
"org" => "Organitzacions",
"pro" => "Professional",
"tel" => "Contacts",
"xxx" => "Sexualment explícits",

"a1" => "Anonymous Proxy",
"a2" => "Satellite Provider",
"ac" => "Illes de l'assumpció",
"ad" => "Andorra",
"ae" => "Emirats Àrabs",
"af" => "Afganistan",
"ag" => "Antigua i Barbuda",
"ai" => "Anguilla",
"al" => "Albània",
"am" => "Armènia",
"an" => "Antilles Holandeses",
"ao" => "Angola",
"ap" => "Asia-Pacific",
"aq" => "Antàrtica",
"ar" => "Argentina",
"as" => "Samoa Americana",
"at" => "Àustria",
"au" => "Austràlia",
"aw" => "Aruba",
"ax" => "Illes Åland",
"az" => "Azerbaidjan",
"ba" => "Bòsnia Hercegovina",
"bb" => "Barbados",
"bd" => "Bangladesh",
"be" => "Bèlgica",
"bf" => "Burkina Faso",
"bg" => "Bulgària",
"bh" => "Bahrain",
"bi" => "Burundi",
"bj" => "Benín",
"bm" => "Bermudes",
"bn" => "Brunei",
"bo" => "Bolívia",
"br" => "Brasil",
"bs" => "Bahames",
"bt" => "Bhutan",
"bw" => "Botswana",
"by" => "Bielorrússia",
"bz" => "Belize",
"ca" => "Canadà",
"cc" => "Illes Cocos",
"cd" => "Congo",
"cf" => "República centre africana",
"cg" => "República del Congo",
"ch" => "Suïssa",
"ci" => "Costa d'ivori",
"ck" => "Illes Cook",
"cl" => "Xile",
"cm" => "Camerun",
"cn" => "Xina",
"co" => "Colòmbia",
"cr" => "Costa Rica",
"cu" => "Cuba",
"cv" => "Cap Verd",
"cw" => "Curaçao",
"cx" => "Illes de Navidad",
"cy" => "Xipre",
"cz" => "República Txeca",
"de" => "Alemanya",
"dj" => "Djibouti",
"dk" => "Dinamarca",
"dm" => "Dominica",
"do" => "República Dominicana",
"dz" => "Algèria",
"ec" => "Equador",
"ee" => "Estònia",
"eg" => "Egipte",
"er" => "Eritrea",
"es" => "Espanya",
"et" => "Etiòpia",
"eu" => "European Union",
"fi" => "Finlàndia",
"fj" => "Fiji",
"fk" => "Illes Falkland (Malvines)",
"fm" => "Micronèsia",
"fo" => "Illes Fèroe",
"fr" => "França",
"ga" => "Gabon",
"gd" => "Granada",
"ge" => "Geòrgia",
"gf" => "Guinea francesa",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Terra Verda",
"gm" => "Gàmbia",
"gn" => "Guinea",
"gp" => "Guadalupe",
"gq" => "Guinea equatorial",
"gr" => "Grècia",
"gs" => "Sud de Geòrgia i illes Sandwich",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bissau",
"gy" => "Guyana",
"hk" => "Hong Kong",
"hm" => "Illes Heard i Mc Donald",
"hn" => "Hondures",
"hr" => "Croàcia",
"ht" => "Haití",
"hu" => "Hongria",
"id" => "Indonèsia",
"ie" => "Irlanda",
"il" => "Israel",
"im" => "Illa de Man",
"in" => "Índia",
"io" => "Territori britànic de l'oceà índic",
"iq" => "Irak",
"ir" => "Iran",
"is" => "Islàndia",
"it" => "Itàlia",
"je" => "Jersey",
"jm" => "Jamaica",
"jo" => "Jordània",
"jp" => "Japó",
"ke" => "Kenya",
"kg" => "Kirguizistan",
"kh" => "Cambodja",
"ki" => "Kiribati",
"km" => "Comores",
"kn" => "Sant Kitts i Nevis",
"kp" => "North Korea",
"kr" => "Corea",
"kw" => "Kuwait",
"ky" => "Illes Caiman",
"kz" => "Kazakhstan",
"la" => "Laos",
"lb" => "Líban",
"lc" => "Saint Lucia",
"li" => "Liechtenstein",
"lk" => "Sri Lanka",
"lr" => "Libèria",
"ls" => "Lesotho",
"lt" => "Lituània",
"lu" => "Luxemburg",
"lv" => "Letònia",
"ly" => "Líbia",
"ma" => "Marroc",
"mc" => "Mònaco",
"md" => "Moldàvia",
"me" => "Montenegro",
"mg" => "Madagascar",
"mh" => "Illes Marshall",
"mk" => "Macedònia",
"ml" => "Mali",
"mm" => "Myanmar",
"mn" => "Mongòlia",
"mo" => "Macau",
"mp" => "Illes marines del nord",
"mq" => "Martinica",
"mr" => "Mauritània",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauritània",
"mv" => "Maldives",
"mw" => "Malawi",
"mx" => "Mèxic",
"my" => "Malàisia",
"mz" => "Moçambic",
"na" => "Namíbia",
"nc" => "Nova Caledònia",
"ne" => "Nigèria",
"nf" => "Illes Norfolk",
"ng" => "Nigèria",
"ni" => "Nicaragua",
"nl" => "Holanda",
"no" => "Noruega",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "Nova Zelanda",
"om" => "Oman",
"pa" => "Panamà",
"pe" => "Perú",
"pf" => "Polinèsia francesa",
"pg" => "Papua Nova Guinea",
"ph" => "Filipines",
"pk" => "Pakistan",
"pl" => "Polònia",
"pm" => "Saint-Pierre-et-Miquelon",
"pn" => "Pitcairn",
"pr" => "Puerto Rico",
"ps" => "Palestina",
"pt" => "Portugal",
"pw" => "Illes Palau",
"py" => "Paraguai",
"qa" => "Qatar",
"re" => "Illa de la reunió",
"ro" => "Romania",
"rs" => "Sèrbia",
"ru" => "Rússia",
"rw" => "Rwanda",
"sa" => "Aràbia Saudita",
"sb" => "Illes Salomó",
"sc" => "Seychelles",
"sd" => "Sudan",
"se" => "Suècia",
"sg" => "Singapur",
"sh" => "Saint Helena",
"si" => "Eslovènia",
"sk" => "Eslovàquia",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somàlia",
"sr" => "Surinam",
"st" => "São Tomé i Príncep",
"su" => "Unió soviètica",
"sv" => "El Salvador",
"sx" => "Sint Maarten",
"sy" => "Síria",
"sz" => "Swazilàndia",
"tc" => "Illes Turks i Caicos",
"td" => "Txad",
"tf" => "Territoris del sud de França",
"tg" => "Togo",
"th" => "Tailàndia",
"tj" => "Tadjikistan",
"tk" => "Tokelau",
"tl" => "Timor est",
"tm" => "Turkmenistan",
"tn" => "Tunísia",
"to" => "Tonga",
"tp" => "Timor est",
"tr" => "Turquia",
"tt" => "Trinitat i Tobago",
"tv" => "Tuvalu",
"tw" => "Taiwan",
"tz" => "Tanzània",
"ua" => "Ucraïna",
"ug" => "Uganda",
"uk" => "Regne Unit",
"us" => "Estats Units",
"uy" => "Uruguai",
"uz" => "Uzbekistan",
"va" => "Estat del vaticà",
"vc" => "Saint Vincent i les Grenadines ",
"ve" => "Veneçuela",
"vg" => "Illes verges (Anglaterra)",
"vi" => "Illes Verges",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Wallis i illes Futuna",
"ws" => "Samoa",
"ye" => "Iemen",
"yt" => "Mayotte",
"za" => "Sud Àfrica",
"zm" => "Zàmbia",
"zw" => "Zimbabwe",

// No longer active but needed for history purpose
"bl" => "Saint Barthélemy",
"bv" => "Illes Bouvet",
"bq" => "Carib Països Baixos",
"cs" => "Servia i Montenegro",
"eh" => "Sàhara Occidental",
"gb" => "Gabon",
"mf" => "Saint-Martin",
"sj" => "Illes Svalbard i Jan Mayen",
"ss" => "Sudan del Sud",
"um" => "Illes menors dels Estats Units",
"yu" => "Servia i Montenegro",
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
"global_titlebar"=> "Estadístiques %SERVER generada en %DATE",
"global_bbclone_copyright" => "L'equip de BBClone - Llicenciat sota la",
"global_last_reset" => "Estadístiques des de",
"global_yes" => "sí",
"global_no" => "no",

// The error messages
"error_cannot_see_config" =>
"No es pot mostrar la configuració de BBClone en aquest servidor.",

// Miscellaneous translations
"misc_other" => "Altres",
"misc_unknown" => "Desconegut",
"misc_second_unit" => "s",
"misc_ignored" => "Ignorat",

// The Navigation Bar
"navbar_main_site" => "Lloc principal",
"navbar_configuration" => "Configuració",
"navbar_global_stats" => "Estadístiques globals",
"navbar_detailed_stats" => "Estadístiques detallades",
"navbar_time_stats" => "Estadístiques temporals",
"navbar_language" => "idioma",
"navbar_go" => "anar",

// Detailed Stats words
"dstat_id" => "Identificador",
"dstat_time" => "Data",
"dstat_visits" => "Visites",
"dstat_extension" => "Extensió",
"dstat_dns" => "Nom del host",
"dstat_from" => "Des d'on ha arribat",
"dstat_os" => "Sistema operatiu",
"dstat_browser" => "Navegador",
"dstat_visible_rows" => "Accessos visibles",
"dstat_green_rows" => "Files verdes",
"dstat_blue_rows" => "Files blaves",
"dstat_red_rows" => "Files vermelles",
"dstat_search" => "Búsqueda",
"dstat_last_page" => "Última pàgina",
"dstat_last_visit" => "Última visita",
"dstat_robots" => "Robots",
"dstat_my_visit" => "Les visites del teu IP",
"dstat_no_data" => "Dades no disponibles",
"dstat_prx" => "Servidor Proxy",
"dstat_ip" => "Adreça IP",
"dstat_user_agent" => "Agent d'usuari",
"dstat_nr" => "Nr",
"dstat_pages" => "Pàgines",
"dstat_visit_length" => "Durada de la visita",
"dstat_reloads" => "recàrregues",
"dstat_whois_information" => "Busqui informació en aquesta Adreça IP",

// Global Stats words
"gstat_accesses" => "Accessos",
"gstat_total_visits" => "Visites totals",
"gstat_total_unique" => "Totals úniques",
"gstat_operating_systems" => "Sistemes operatius",
"gstat_browsers" => "Navegadors",
"gstat_extensions" => "%d primeres extensions",
"gstat_robots" => "Robots",
"gstat_pages" => "%d primeres pàgines",
"gstat_origins" => "%d primers orígens",
"gstat_hosts" => "%d hosts amb més visites",
"gstat_keys" => "%d primeres paraules clau",
"gstat_total" => "Total",
"gstat_not_specified" => "sense especificar",

// Time Stats words
"tstat_su" => "Dium",
"tstat_mo" => "Dill",
"tstat_tu" => "Dima",
"tstat_we" => "Dime",
"tstat_th" => "Dijo",
"tstat_fr" => "Dive",
"tstat_sa" => "Diss",

"Tstat_full_su" => "Ddiumenge",
"Tstat_full_mo" => "Dilluns",
"Tstat_full_tu" => "Dimarts",
"Tstat_full_we" => "Dimecres",
"Tstat_full_th" => "Dijous",
"Tstat_full_fr" => "Divendres",
"Tstat_full_sa" => "Dissabte",

"tstat_jan" => "Gen",
"tstat_feb" => "Feb",
"tstat_mar" => "Mar",
"tstat_apr" => "Abr",
"tstat_may" => "Mai",
"tstat_jun" => "Jun",
"tstat_jul" => "Jul",
"tstat_aug" => "Ago",
"tstat_sep" => "Sep",
"tstat_oct" => "Oct",
"tstat_nov" => "Nov",
"tstat_dec" => "Des",

"Tstat_full_jan" => "Gener",
"Tstat_full_feb" => "Febrer",
"Tstat_full_mar" => "Març",
"Tstat_full_apr" => "Abril",
"Tstat_full_may" => "Maig",
"Tstat_full_jun" => "Juny",
"Tstat_full_jul" => "Juliol",
"Tstat_full_aug" => "Agost",
"Tstat_full_sep" => "Setembre",
"Tstat_full_oct" => "Octubre",
"Tstat_full_nov" => "Novembre",
"Tstat_full_dec" => "Desembre",

"tstat_last_day" => "Últim dia",
"tstat_last_week" => "Última setmana",
"tstat_last_month" => "Últim mes",
"tstat_last_year" => "Últim any",
"tstat_average" => "mitjana",

// Loadtime notice
"generated" => "pàgina generada en ",
"seconds" => " segon",

// Configuration page words and sentences
"config_variable_name" => "Nom de la variable",
"config_variable_value" => "Valor de la variable",
"config_explanations" => "Explicacions",

"config_BBC_MAINSITE" =>
"Si aquesta variable s'ha establert, es generarà un enllaç al lloc especificat.
El valor per defecte és un enllaç al directori pare. En el cas que la teva pàgina
web estigui localitzada en un altre lloc, probablement voldràs ajustar el valor
per satisfer les teves necessitats.<br />
Exemples:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"Per defecte, BBClone mostra la configuració. Si no t'agrada, pots desactivar aquesta opció.<br />
Examples:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Text que apareixerà a la barra de títol de totes les pàgines de BBClone.<br />
Les macros admeses són:<br />
<ul>
<li>%SERVER: nom del servidor,</li>
<li>%DATE: data actual.</li>
</ul>
S'accepten etiquetes HTML.<br />
Exemples:<br />
\$BBC_TITLEBAR = &quot;Estadístiques per %SERVER generades al %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;Les meves estadístiques al %DATE són aquestes:&quot;;<br />",

"config_BBC_LANGUAGE" =>
"Idioma per defecte del BBClone en el cas que no estigui especificat pel navegador.
Els seg&uuml;ents idiomes estan suportats:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn i zh-tw</p>",

"config_BBC_MAXTIME" =>
"Aquesta variable defineix la durada d'una visita única. Cada visita del mateix
visitant separada un temps superior a l'especificat serà considerada una nova
visita. El valor per defecte és de 30 minuts (1800 segons).<br />
Exemples:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Quantes visites vols que siguin llistades a les visites detallades? El valor
per defecte és 100. Es recomana no superar el valor de 500 per no alentir el
procés de càrrega de la pàgina.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"La variable \$BBC_DETAILED_STAT_FIELDS determina les columnes que es mostraran
a les estadístiques detallades. Columnes possibles són:
<ul>
<li>id => Número de visitants des de l'inici del comptador </li>
<li>time => Hora en que l'última visita va ser registrada </li>
<li>visits => Els clics de visitants únics </li>
<li>dns => Nom del servidor dels visitants </li>
<li>ip => Adreça IP dels visitants </li>
<li>os => El sistema operatiu (si està disponible i no és un robot) </li>
<li>browser => El programari utilitzat per establir la connexió</li>
<li>ext => País o extensió del visitant </li>
<li>referer => Enllaç des d'on ve el visitant (si està disponible)</li>
<li>page => Última pàgina visitada</li>
<li>search => La cadena de búsqueda utilitzada per un visitant (si està disponible)</li>
</ul>
Les columnes es mostraran en el mateix ordre que les especifiquis.<br />
Exemples:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"En el cas que l'hora del servidor no sigui la mateixa que la teva hora local,
pots ajustar-ho amb aquesta variable. Valors negatius endarreriran el temps
i valors positius l'avançaran.<br />
Exemples:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Aquesta opció defineix quan una adreça IP ha de ser resolta per trobar el nom
del servidor. El nom del servidor dóna molta més informació del visitant però
fa que la pàgina web vagi més lenta.<br />
Exemples:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"Per defecte, BBClone basa les estadístiques a partir de les visites però, si
vols, aquí pots fer que les basi en les visites úniques.<br />
Exemples:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Aquesta opció exclou una adreça o un rang d'adreces de les estadístiques. Si
vols utilitzar més d'una expressió, separa-les amb una coma.<br />
Exemples:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Si no vols que apareguin alguns dels orígens dels teus visitants, pots
especificar-los aquí. Si vols especificar-ne més d'un, utilitza la coma
com a separador.<br />
Exemples:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Aquí pots especificar el tractament dels robots. El valor per defecte és
ignorar-los en el rànquing de servidors però mantenir-los en la resta
d'estadístiques. Si no vols que apareguin enlloc, pots posar un &quot;2&quot;
, i aleshores només apareixeran les visites humanes.<br />
Exemples:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Aquesta opció especifica com el BBClone identifica un usuari. Per defecte
només s'utilitza l'adreça IP però alguns visitants s'amaguen darrera un proxy
i desactivar aquesta opció proporcionarà unes estadístiques més reals en
aquests casos.<br />
Exemples:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Quan vulguis esborrar totes les estadístiques, activa aquesta opció i quan entri
el seg&uuml;ent visitant, aquest esborrarà les estadístiques. No oblidis de
tornar-ho a desactivar si no vols experimentar un tràfic molt reduït.<br />
Exemples:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Les estadístiques poden generar una gran quantitat de dades. Activant aquesta
opció s'eliminen els detalls de les visites menys rellevants i s'aconsegueix
així reduir considerablement el fitxer access.php. Les visites que s'eliminin
s'afegiran a entrades &quot;sense especificar&quot; per mantenir el nombre
de visites intacte.<br />
Exemples:<br />
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
