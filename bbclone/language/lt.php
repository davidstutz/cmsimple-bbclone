<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: lt.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Lithuanian (Lietuvių)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Vietinis",
"numeric" => "Skaitinis",
"unknown" => "Nežinoma",
"museum" => "Muziejus",
"travel" => "Kelionė",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Klaidos",
"asia" => "Azijos ir Ramiojo vandenyno",
"coop" => "Coop",
"info" => "Informacinės Tarnybos",
"jobs" => "užimtumas",
"mobi" => "Mobilieji telefonai",
"name" => "asmens",
"post" => "pašto paslaugos",

"biz" => "Verslas",
"cat" => "katalonų",
"com" => "prekybos",
"edu" => "mokymo",
"gal" => "Galisų",
"gov" => "Vyriausybė (.gov)",
"int" => "Tarptautinės Organizacijos",
"mil" => "Jungtinių Tautų karinė tarnyba",
"net" => "tinklas",
"org" => "organizacija",
"pro" => "Professional",
"tel" => "Kontaktai",
"xxx" => "erotika",

"a1" => "Anoniminis Proxy",
"a2" => "Palydovinė Teikėjas",
"ac" => "Prisikėlimo Sala",
"ad" => "Andora",
"ae" => "Jungtiniai arabų emiratai",
"af" => "Afghanistanas",
"ag" => "Antigva ir Barbuda",
"ai" => "Angila",
"al" => "Albanija",
"am" => "Armenija",
"an" => "Skandinavų Antilai",
"ao" => "Angola",
"ap" => "Azijos ir Ramiojo vandenyno",
"aq" => "Antarktika",
"ar" => "Argentina",
"as" => "Amerikos Samoa",
"at" => "Austrija",
"au" => "Australija",
"aw" => "Aruba",
"ax" => "Alandai",
"az" => "Azerbaidžianas",
"ba" => "Bosnija ir Hercogovina",
"bb" => "Barbadosas",
"bd" => "Bangladešas",
"be" => "Belgija",
"bf" => "Burkina Faso",
"bg" => "Bulgarija",
"bh" => "Bachrainas",
"bi" => "Burundi",
"bj" => "Beninas",
"bm" => "Bermudai",
"bn" => "Brunėjus",
"bo" => "Bolivija",
"br" => "Brazilija",
"bs" => "Bahamai",
"bt" => "Bhutanas",
"bw" => "Botsvana",
"by" => "Belarus",
"bz" => "Belizė",
"ca" => "Kanada",
"cc" => "Kokoso Salos",
"cd" => "Kongas",
"cf" => "Centrinės Afrikos Respublika",
"cg" => "Kongas",
"ch" => "Šveicarija",
"ci" => "Ivory Coast",
"ck" => "Gegutės Salos",
"cl" => "Čilė",
"cm" => "Kamerūnas",
"cn" => "Kinija",
"co" => "Kolombija",
"cr" => "Kosta Rika",
"cu" => "Kuba",
"cv" => "Cape Verde",
"cw" => "Kiurasao",
"cx" => "Kalėdų Salos",
"cy" => "Kipras",
"cz" => "Čekijos respublika",
"de" => "Vokietija",
"dj" => "Djibouti",
"dk" => "Danija",
"dm" => "Dominika",
"do" => "Dominikos Respublika",
"dz" => "Algerija",
"ec" => "Ekvadoras",
"ee" => "Estija",
"eg" => "Egiptas",
"er" => "Eritrea",
"es" => "Ispanija",
"et" => "Etiopija",
"eu" => "European Union",
"fi" => "Suomija",
"fj" => "Fidži",
"fk" => "Folklando Salos",
"fm" => "Mikronezija",
"fo" => "Faraonų Salos",
"fr" => "Prancūzija",
"ga" => "Gabonas",
"gd" => "Grenada",
"ge" => "Georgija",
"gf" => "Prancūzų Gujana",
"gg" => "Guernsey",
"gh" => "Gana",
"gi" => "Gibraltaras",
"gl" => "Greenland'as",
"gm" => "Gambija",
"gn" => "Gvinėja",
"gp" => "Gvadelupė",
"gq" => "Ekvatorinė Gvinėja",
"gr" => "Graikija",
"gs" => "Pietų Georgija ir Pietų Buterbrodo Salos",
"gt" => "Gvatemala",
"gu" => "Guama",
"gw" => "Gvinėja-Bissau",
"gy" => "Gujana",
"hk" => "Hong-Kongas",
"hm" => "Heard ir Mc Donald Salos",
"hn" => "Honduras",
"hr" => "Kroatija",
"ht" => "Haitis",
"hu" => "Vangrija",
"id" => "Indonezija",
"ie" => "Airija",
"il" => "Izraelis",
"im" => "Vyro sala",
"in" => "Indija",
"io" => "Britų Indijos Vandenyno teritorijos",
"iq" => "Irakas",
"ir" => "Iranas",
"is" => "Islandija",
"it" => "Italija",
"je" => "Džersis",
"jm" => "Jamaika",
"jo" => "Jordanija",
"jp" => "Japonija",
"ke" => "Kenia",
"kg" => "Kirgistanas",
"kh" => "Cambodža",
"ki" => "Kiribati",
"km" => "Komorosas",
"kn" => "Sent Kitsas ir Nevis",
"kp" => "North Korea",
"kr" => "Korėja",
"kw" => "Kuveitas",
"ky" => "Caimanų Salos",
"kz" => "Kazakstanas",
"la" => "Laosas",
"lb" => "Lebanonas",
"lc" => "Šventoji Liucija",
"li" => "Liechtenšteinas",
"lk" => "Šri Lanka",
"lr" => "Liberija",
"ls" => "Lesotas",
"lt" => "Lietuva",
"lu" => "Liuksemburgas",
"lv" => "Latvija",
"ly" => "Libija",
"ma" => "Marokas",
"mc" => "Monakas",
"md" => "Moldova",
"me" => "Juodkalnija",
"mg" => "Madagaskaras",
"mh" => "Maršalo Salos",
"mk" => "Makedonija",
"ml" => "Mali",
"mm" => "Myanmar",
"mn" => "Mongolija",
"mo" => "Makau",
"mp" => "Šiaurinės Marijanos Salos",
"mq" => "Martinika",
"mr" => "Mauritanija",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauricijus",
"mv" => "Maldivai",
"mw" => "Malawi",
"mx" => "Meksika",
"my" => "Malaizija",
"mz" => "Mozambikas",
"na" => "Namibija",
"nc" => "Naujoji Caledonija",
"ne" => "Nigeris",
"nf" => "Norfolk'o Sala",
"ng" => "Nigerija",
"ni" => "Nikaragva",
"nl" => "Netherlands",
"no" => "Norvegija",
"np" => "Nepalas",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "Naujoji Zelandija",
"om" => "Omanas",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Prancūzų Polinezija",
"pg" => "Papua Naujoji Gvinėja",
"ph" => "Filipinai",
"pk" => "Pakistanas",
"pl" => "Lenkija",
"pm" => "Šv. Pierre ir Miquelon",
"pn" => "Pitcairn",
"pr" => "Puerto Rikas",
"ps" => "Palestina",
"pt" => "Portugalija",
"pw" => "Palau",
"py" => "Paragvajus",
"qa" => "Qatar",
"re" => "Reunion",
"ro" => "Rumunija",
"rs" => "Serbija",
"ru" => "Rusijos federacija",
"rw" => "Rovanda",
"sa" => "Saudo Arabija",
"sb" => "Saliamono Salos",
"sc" => "Seišeliai",
"sd" => "Sudanas",
"se" => "Švedija",
"sg" => "Singapūras",
"sh" => "Šv. Helena",
"si" => "Slovėnija",
"sk" => "Slovakija",
"sl" => "Siera Leonas",
"sm" => "San Marinas",
"sn" => "Senegalas",
"so" => "Somalia",
"sr" => "Surinamas",
"st" => "Sao Tome and Principe",
"su" => "Savietų Sąjunga",
"sv" => "El Salvadoras",
"sx" => "Sint Maarten",
"sy" => "Sirija",
"sz" => "Swaziland'as",
"tc" => "Terkso ir Kaikoso salos",
"td" => "Čiadas",
"tf" => "Prancūzų Pietų teritorijos",
"tg" => "Togo",
"th" => "Tailandas",
"tj" => "Taikistanas",
"tk" => "Tokelau",
"tl" => "Rytų Timūras",
"tm" => "Turkmenistanas",
"tn" => "Tunisija",
"to" => "Tongas",
"tp" => "Rytų Timūras",
"tr" => "Turkija",
"tt" => "Trinidadas ir Tobagas",
"tv" => "Tuvalu",
"tw" => "Taivan",
"tz" => "Tanzanija",
"ua" => "Ukraina",
"ug" => "Uganda",
"uk" => "Jungtinės Karalystės",
"us" => "JAV",
"uy" => "Urugvajus",
"uz" => "Uzbekistanas",
"va" => "Vatikanas",
"vc" => "Šv. Vincent ir Grenadines",
"ve" => "Venesuela",
"vg" => "Virginijos Salos (UK)",
"vi" => "Virginijos Salos (US)",
"vn" => "Vietnamas",
"vu" => "Vanuatu",
"wf" => "Uolio irFutunos salos",
"ws" => "Samoa",
"ye" => "Jemenas",
"yt" => "Majotas",
"za" => "Pietų Afrika",
"zm" => "Zambija",
"zw" => "Zimbabvė",

// No longer active but needed for history purpose
"bl" => "Šv. Bartolomėjaus sala",
"bv" => "Bouvet Island",
"bq" => "Karibų Nyderlandai",
"cs" => "Serbija ir Juodkalnija",
"eh" => "Western Sahara",
"gb" => "Jungtinės Karalystės",
"mf" => "San Martenas",
"sj" => "Svalbard and Jan Mayen Islands",
"ss" => "Pietų Sudanas",
"um" => "US Minor Outlying Islands",
"yu" => "Serbija ir Juodkalnija", 
"zr" => "Zairas"
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
"global_titlebar"=> "%SERVER statistika sugeneruota %DATE",
"global_bbclone_copyright" => "BBClone komanda - Licenzijuota pagal",
"global_last_reset" => "Statistika paskutinis Reset",
"global_yes" => "Taip",
"global_no" => "Ne",

// The error messages
"error_cannot_see_config" =>
"Jums nėra leista matyti BBClone konfigūracijos šiame serveryje.",

// Miscellaneoux translations
"misc_other" => "Kita",
"misc_unknown" => "Nežinoma",
"misc_second_unit" => "s",
"misc_ignored" => "Ignored",

// The Navigation Bar
"navbar_main_site" => "Titulinis",
"navbar_configuration" => "Konfigūracija",
"navbar_global_stats" => "Globali Statistika",
"navbar_detailed_stats" => "Detali Statistika",
"navbar_time_stats" => "Laikmatis",
"navbar_language" => "Kalba",
"navbar_go" => "eiti",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Laikas",
"dstat_visits" => "Apsilankymai",
"dstat_extension" => "Išplėtimas",
"dstat_dns" => "Hostname'as",
"dstat_from" => "Iš kur",
"dstat_os" => "OS",
"dstat_browser" => "Naršyklė",
"dstat_visible_rows" => "Matoma užklausų",
"dstat_green_rows" => "žalios eilutės",
"dstat_blue_rows" => "mėlynos eilutės",
"dstat_red_rows" => "raudonos eilutės",
"dstat_search" => "paieška",
"dstat_last_page" => "Paskutinis puslapis",
"dstat_last_visit" => "paskutinis apsilankymas",
"dstat_robots" => "paieškos sistemos",
"dstat_my_visit" => "Apsilankymai iš savo IP",
"dstat_no_data" => "Nėra duomenų",
"dstat_prx" => "Proxy Serveris",
"dstat_ip" => "IP Addresas",
"dstat_user_agent" => "User Agent",
"dstat_nr" => "Nr",
"dstat_pages" => "Puslapiai",
"dstat_visit_length" => "Apsilankymo trukmė",
"dstat_reloads" => "Perkrovimai",
"dstat_whois_information" => "Ieškoti informacijos apie šio IP Adresas",

// Global Stats words
"gstat_accesses" => "Užklausos",
"gstat_total_visits" => "Viso apsilankymų",
"gstat_total_unique" => "Viso unikalių",
"gstat_operating_systems" => "Operacinės sistemos",
"gstat_browsers" => "Naršyklės",
"gstat_extensions" => "%d pirmų plėtinių",
"gstat_robots" => "Paieškos sistemos",
"gstat_pages" => "%d pirmų puslapių",
"gstat_origins" => "%d pirmų nuorodų",
"gstat_hosts" => "%d pirmų Hostų",
"gstat_keys" => "%d pirmų raktažodžių",
"gstat_total" => "Viso",
"gstat_not_specified" => "Nenurodyta",

// Time Stats words
"tstat_su" => "Sek",
"tstat_mo" => "Pir",
"tstat_tu" => "Ant",
"tstat_we" => "Tre",
"tstat_th" => "Ket",
"tstat_fr" => "Pen",
"tstat_sa" => "Šeš",

"tstat_full_su" => "Sekmadienis",
"tstat_full_mo" => "pirmadienis",
"tstat_full_tu" => "antradienis",
"tstat_full_we" => "trečiadienis",
"tstat_full_th" => "ketvirtadienis",
"tstat_full_fr" => "penktadienis",
"tstat_full_sa" => "šeštadienis",

"tstat_jan" => "Sau",
"tstat_feb" => "Vas",
"tstat_mar" => "Kov",
"tstat_apr" => "Bal",
"tstat_may" => "Geg",
"tstat_jun" => "Bir",
"tstat_jul" => "Lie",
"tstat_aug" => "Rugp",
"tstat_sep" => "Rugs",
"tstat_oct" => "Spa",
"tstat_nov" => "Lap",
"tstat_dec" => "Gruo",

"tstat_full_jan" => "sausis",
"tstat_full_feb" => "Vasaris",
"tstat_full_mar" => "Kovas",
"tstat_full_apr" => "kad balandžio",
"tstat_full_may" => "Gegužė",
"tstat_full_jun" => "birželis",
"tstat_full_jul" => "liepa",
"tstat_full_aug" => "Rugpjūčio",
"tstat_full_sep" => "September",
"tstat_full_oct" => "Spalis",
"tstat_full_nov" => "Lapkritis",
"tstat_full_dec" => "gruodis",

"tstat_last_day" => "Pastarają dieną",
"tstat_last_week" => "Pastarają savaitę",
"tstat_last_month" => "Pastarajį menėsį",
"tstat_last_year" => "Pastaraisiais metais",
"tstat_average" => "vidutinis",

// Loadtime notice
"generated" => "Puslapis sukurtas per ",
"seconds" => " sekundžių",

// Configuration page words and sentences
"config_variable_name" => "Kintamojo vardas",
"config_variable_value" => "Kintamojo reikšmė",
"config_explanations" => "Paaiškinimas",

"config_BBC_MAINSITE" =>
"Šis kintamasis nusako nuorodą į svetainę. Pagal nutylėjimą, svetainės
adresu laikoma aukštesnė direktorija. Jei Jūsų svetainė yra kur nors kitur,
galite pritakyti šią nuorodą savo reikmėms.<br />
Pavyzdžiai:<br />
\$BBC_MAINSITE = &quot;http://www.svetaine.lt/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone statistikos' nustatymų peržiūra. Šiuo kintamuoju galite
uždrausti jų peržiūrą.<br />
Pavyzdžiai:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Tekstas, atsirandantis antraštėje, visuose BBClone puslapiuose.<br />
Galima naudoti tokius kintamuosius:<br />
<ul>
<li>%SERVER: serverio adresas,</li>
<li>%DATE: dabartinė data.</li>
</ul>
Taip pat galima naudoti ir HTML.<br />
Pavyzdžiai:<br />
\$BBC_TITLEBAR = &quot;%SERVER statistika sugeneruota %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;Mano statistika %DATE buvo tokia:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBClone kalba pagal nutylėjimą, nustatoma tam atvejui, jei naršylė nepateikė pagedautinos kalbos.
Galima naudoti šias kalbas:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn ir zh-tw</p>",

"config_BBC_MAXTIME" =>
"Šis kintamasis nusako unikalaus apsilankymo tarpsnį sekundėmis. Kiekvienas
to paties lankytojo paspaudimas per šį periodą bus laikomas kaip vienas apsilankymas,
kadangi du gretimi paspaudimai neviršyja šio laiko limito. Pagal nutylėjimą
yra laikomas defacto web standartas - 30 minučių (1800 sekundžių), nors, esant porekiui,
galite priskirti savo pageidaujamą reikšmę.<br />
Pavyzdžiai:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Kiek įrašų norite matyti Detaliame apsilankymų sąraše? Pagal nutylėjimą,
šio kintamojo reikšmė yra 100. Yra rekomenduotina nenaudoti daugiau nei
500 įrašų. Didesnis įrašų kiekis gali sukelti našumo problemų.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Kintamasis \$BBC_DETAILED_STAT_FIELDS nusako stulpelius detaliame apsilankymų sąraše.
Galimi šie stulpeliai:
<ul>
<li>id => n-tasis lankytojas nuo statistikos vedimo pradšios</li>
<li>time => Paskutinio paspaudimo laikas</li>
<li>visits => Unikalaus lankytojo paspaudimai</li>
<li>dns => Lankytojo hostname'as</li>
<li>ip => Lankytojo IP adresas</li>
<li>os => Operacinė sistema (arba, jei įmanoma nustatyti, paieškos robotas)</li>
<li>browser => Naršyklė</li>
<li>ext => Lankytojo šalis arba plėtinys</li>
<li>referer => Nuoroda, iš kurios lankytojas atėjo į Jūsų svetainę (jei įmanoma nustatyti)</li>
<li>page => Paskutinį kartą lankėsi puslapis</li>
<li>search => 
Paieškos užklausa lankytojas naudojama (jei žinomas)</li>
</ul>
Stulpeliai bus išdėstyti tokia tvarka, kokia Jūs nurodysit.<br />
Pavyzdžiai:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"Tam atvejui, jei Jūsų virtualaus serverio laikas nesutampa su Jūsų laiko juosta,
šiuo kintamuoju galite sureguliuoti laiką. Neigiama reikšmė nustatys laiką atgal.<br />
Pavyzdys:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Ši opcija nusako ar IP adresą reikia bandyti konvertuoti į hostname'ą.
Nors hostname'ai pasako daug daugiau apie lankytoją, jų nustatymas gali
smarkiai sulėtinti svetainės darbą, ypač jei Jūsų serverio ryšys su
DNS serveriu yra lėtas ar nepatikimas. Šios opcijos išjungimas gali išspręsti
susidariusias našumo problemas.<br />
Pavyzdžiai:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_STRING" => "Pagal nutylėjimą, BBClone išveda komentarus, nusakančius
statistikos veikimo būseną, į svetainės HTML kodą. Šis išvedimas gali neigiamai paveikti
kai kuriuos forumus ar turinio valdymo sistemas. Jei jums išvedamas tuščias puslapis
ar susiduriate su &quot;headers already sent by&quot; pranešimais, galite atjungti
šiuos komentarus.<br />
Pavyzdžiai:<br />
\$BBC_NO_STRING = 1;<br />
\$BBC_NO_STRING = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"Pagal nutylėjimą BBClone laikmatyje rodo lankytojų paspaudimus, kadangi tai
gerai atspindi tikrąjį svetainės apkrovimą. Jei Jūs, dėl tam tikrų priežasčių
pageidaujate matyti unikalius apsilankymus, pakeiskite šio kintamojo reikšmę.<br />
Pavyzdžiai:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Šia opcija galite nustatyti neregistruotinus lankytojų IP adresus.
Norėdami naudoti kelias išraiškas, skirtuku naudokite kablelį.<br />
Pavyzdžiai:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Tuo atveju, jei norite ignoruoti tam tikras nuorodas, vedančias į Jūsų svetainę,
galite įvesti vieną ar daugiau raktažodžių, blokuosiančių šias nuorodas.
Norėdami naudoti kelias išraiškas, skirtuku naudokite kablelį.<br />
Pavyzdžiai:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Čia galite nurodyti elgseną su paieškos robotais. Pagal nurylėjimą jie yra
ignoruojami lankomiausiuose host'uose, bet registruojami kiruose rodikliuose.
Jei apskritai nenorite matyti paieškos robotų, galite nustatyti šį kintamąjį
į &quot;2&quot;. Tokiu atveju bus registruojami tik tikrieji lankytojai.<br />
Pavyzdžiai:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Ši opcija nusako kaip BBClone skiria vienus lankytojus nuo kitų. Paga nutylėjimą
yra naudojamas ti IP adresas, kuris dažniausiai duoda tikriausius lankomumo duomenis.
Tačiau jei lankytojus dažnai dengia proxy serveriai, šios opcijos deaktyvavimas
gali duoti tikresnius duomenis, kadangi lankytojai bus atpažystami pagal naršyklės
parašą (user-agent).<br />
Pavyzdžiai:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Jei norite išvalyti visą svetainės statistiką, aktyvuokite šią parinktį.
Sekantis apsilankymas išvalys visus duomenis. Nepamirškite vėliau deaktyvuoti
šią parinktį. Priešingu atveju galite būti nustebintas itin silpnu svetainės
lankomumu ;).<br />
Pavyzdžiai:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Hostų ir Refererių statistika gali genruoti didelius duomenų kiekius, sukuriamus
vienkartinių lankytojų. Šios opcijos įjungimas gali ryškiai sumažinti duomenų
apimtis bei access.php failą neprarandant visų matomų hostų ir refererių sąrašo.
Paspaudimų kiekis bus pridėtas prie &quot;Nenurodyta&quot; žymės ir neįtakos
bendro paspaudimų skatliuko.<br />
Pavyzdžiai:<br />
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
