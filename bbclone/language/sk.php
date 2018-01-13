<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: sk.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Slovak (Slovenčina)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Lokalni",
"numeric" => "Číselná",
"unknown" => "Neznámy",
"museum" => "Múzeum",
"travel" => "Cestovanie",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Sieťova infraštruktúra",
"asia" => "Asia-Pacific",
"coop" => "Kooperatívny",
"info" => "Informačné servery",
"jobs" => "Práca",
"mobi" => "Mobilný",
"name" => "Osobné servery",
"post" => "Poštovné servery",

"biz" => "Biznis servery",
"cat" => "Katalánsko",
"com" => "Komerčné servery",
"edu" => "Školstvo",
"gal" => "Gália",
"gov" => "Vládne servery USA",
"int" => "Medzinárodné organizácie",
"mil" => "Vojenské servery USA",
"net" => "Sieťová infraštruktúra",
"org" => "Nevládne organizácie",
"pro" => "Profesionál",
"tel" => "Kontakty",
"xxx" => "Pornografia",

"a1" => "Аnonymný proxy",
"a2" => "Satelitný Provider",
"ac" => "Ascension",
"ad" => "Andorra",
"ae" => "Spojené arabské emiráty",
"af" => "Afghanistán",
"ag" => "Antigua a Barbuda",
"ai" => "Anguilla",
"al" => "Albánsko",
"am" => "Arménia",
"an" => "Holandské Antily",
"ao" => "Angola",
"ap" => "Asia-Pacific",
"aq" => "Antarktída",
"ar" => "Argentína",
"as" => "Americká Samoa",
"at" => "Rakúsko",
"au" => "Austrália",
"aw" => "Aruba",
"ax" => "Ålandy",
"az" => "Azerbajdžán",
"ba" => "Bosna a Hercegovina",
"bb" => "Barbados",
"bd" => "Bangladéš",
"be" => "Belgicko",
"bf" => "Burkina Faso",
"bg" => "Bulharsko",
"bh" => "Bahrajn",
"bi" => "Burundi",
"bj" => "Benin",
"bm" => "Bermudy",
"bn" => "Brunej",
"bo" => "Bolívia",
"br" => "Brazília",
"bs" => "Bahamy",
"bt" => "Bhután",
"bw" => "Botswana",
"by" => "Bielorusko",
"bz" => "Belizia",
"ca" => "Kanada",
"cc" => "Kokosové ostrovy",
"cd" => "Kongo, Demokratická republika",
"cf" => "Stredoafrická republika",
"cg" => "Kongo",
"ch" => "Švajčiarsko",
"ci" => "Pobrežie slonoviny",
"ck" => "Cookové ostrovy",
"cl" => "Chile",
"cm" => "Kamerun",
"cn" => "Čína",
"co" => "Kolumbia",
"cr" => "Kostarika",
"cu" => "Kuba",
"cv" => "Kapverdy",
"cw" => "Curaçao",
"cx" => "Veľkonočný ostrov",
"cy" => "Cyprus",
"cz" => "Česká republika",
"de" => "Nemecko",
"dj" => "Džibuti",
"dk" => "Dánsko",
"dm" => "Dominika",
"do" => "Dominikánska republika",
"dz" => "Alžírsko",
"ec" => "Ekvádor",
"ee" => "Estónsko",
"eg" => "Egypt",
"er" => "Eritrea",
"es" => "Španielsko",
"et" => "Etiópia",
"eu" => "Európska Únia",
"fi" => "Fínsko",
"fj" => "Fidži",
"fk" => "Falklandy",
"fm" => "Mikronézia",
"fo" => "Faerské ostrovy",
"fr" => "Francúzsko",
"ga" => "Gabun",
"gd" => "Grenada",
"ge" => "Georgie",
"gf" => "Francúzska Guyana",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltár",
"gl" => "Grónsko",
"gm" => "Gambia",
"gn" => "Guinea",
"gp" => "Guadeloupe",
"gq" => "Rovníková Guinea",
"gr" => "Grécko",
"gs" => "Juzná Georgie a Južné Sandwichové ostrovy",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bissau",
"gy" => "Guyana",
"hk" => "Hongkong",
"hm" => "Ostrovy Heard a McDonald",
"hn" => "Honduras",
"hr" => "Chorvátsko",
"ht" => "Haiti",
"hu" => "Maďarsko",
"id" => "Indonézia",
"ie" => "Irsko",
"il" => "Izrael",
"im" => "Isle of Man",
"in" => "India",
"io" => "Britské indickooceánské teritórium",
"iq" => "Irak",
"ir" => "Irán",
"is" => "Island",
"it" => "Taliansko",
"je" => "Jersey",
"jm" => "Jamajka",
"jo" => "Jordánsko",
"jp" => "Japonsko",
"ke" => "Keňa",
"kg" => "Kyrgizsko",
"kh" => "Kambodža",
"ki" => "Kiribati",
"km" => "Komory",
"kn" => "Svatý Kitts a Nevis",
"kp" => "Severná Kórea",
"kr" => "Južná Kórea",
"kw" => "Kuvajt",
"ky" => "Kajmanské ostrovy",
"kz" => "Kazachstan",
"la" => "Laos",
"lb" => "Libanon",
"lc" => "Svatá Lucia",
"li" => "Lichtejštansko",
"lk" => "Srí Lanka",
"lr" => "Libéria",
"ls" => "Lesotho",
"lt" => "Lotyšsko",
"lu" => "Luxembursko",
"lv" => "Litva",
"ly" => "Líbya",
"ma" => "Maroko",
"mc" => "Monako",
"md" => "Moldavsko",
"me" => "Čierna Hora",
"mg" => "Madagaskar",
"mh" => "Maršálove ostrovy",
"mk" => "Macedónsko",
"ml" => "Mali",
"mm" => "Barma (Myanmar)",
"mn" => "Mongolsko",
"mo" => "Macao",
"mp" => "Severná Mariana",
"mq" => "Martinik",
"mr" => "Mauretánia",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Maurítius",
"mv" => "Maledivy",
"mw" => "Malawi",
"mx" => "Mexiko",
"my" => "Malajzia",
"mz" => "Mozambik",
"na" => "Namíbia",
"nc" => "Nová Kaledonia",
"ne" => "Niger",
"nf" => "Norfolk",
"ng" => "Nigéria",
"ni" => "Nikaragua",
"nl" => "Holandsko",
"no" => "Nórsko",
"np" => "Nepál",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "Nový Zéland",
"om" => "Omán",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Francúzska Polynézia",
"pg" => "Papua - Nová Guinea",
"ph" => "Filipíny",
"pk" => "Pakistán",
"pl" => "Poľsko",
"pm" => "Svatý Pierre a Miquelon",
"pn" => "Pitcairn",
"pr" => "Portoriko",
"ps" => "Palestína",
"pt" => "Portugalsko",
"pw" => "Palau",
"py" => "Paraguay",
"qa" => "Katar",
"re" => "Réunion",
"ro" => "Rumunsko",
"rs" => "Srbsko",
"ru" => "Rusko",
"rw" => "Rwanda",
"sa" => "Saudská Arábia",
"sb" => "Šalamúnové ostrovy",
"sc" => "Seychely",
"sd" => "Sudán",
"se" => "Švédsko",
"sg" => "Singapur",
"sh" => "Svatá Helena",
"si" => "Slovinsko",
"sk" => "Slovensko",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somálsko",
"sr" => "Surinam",
"st" => "Svatý Tomáš a Princov ostrov",
"su" => "Sovietsky zvaz",
"sv" => "Salvador",
"sx" => "Sint Maarten",
"sy" => "Sýria",
"sz" => "Svazijsko",
"tc" => "Ostrovy Turks a Caicos",
"td" => "Čad",
"tf" => "Francúzske južné teritória",
"tg" => "Togo",
"th" => "Thajsko",
"tj" => "Tádžikistán",
"tk" => "Tokelau",
"tl" => "Timor Leste",
"tm" => "Turkmenistán",
"tn" => "Tunisko",
"to" => "Tongo",
"tp" => "Východný Timor",
"tr" => "Turecko",
"tt" => "Trinidad a Tobago",
"tv" => "Tuvalu",
"tw" => "Tchajwan",
"tz" => "Tanzánia",
"ua" => "Ukrajina",
"ug" => "Uganda",
"uk" => "Veĺká Británia",
"us" => "USA",
"uy" => "Uruguay",
"uz" => "Uzbekistán",
"va" => "Vatikán",
"vc" => "Svatý Vincenc a Grenadiny",
"ve" => "Venezuela",
"vg" => "Britské Panenské ostrovy",
"vi" => "Americké Panenské ostrovy",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Ostrovy Wallis a Futuna",
"ws" => "Samoa",
"ye" => "Jemen",
"yt" => "Mayotte",
"za" => "Južná Afrika",
"zm" => "Zambia",
"zw" => "Zimbabwe",

// No longer active but needed for history purpose
"bl" => "Saint-Barthélemy",
"bv" => "Bouvet",
"bq" => "Holandský Karibik",
"cs" => "Srbsko a Čierna hora",
"eh" => "Západná Sahara",
"gb" => "Veľká Británia",
"mf" => "Svatý Martin",
"sj" => "Ostrovy Svalbard a Jan Mayen",
"ss" => "Južný Sudán",
"um" => "Malé vzdialené ostrovy patriace USA",
"yu" => "Srbsko a Čierna hora",
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
"global_titlebar"=> "Štatistika pre %SERVER generovaná dňa %DATE",
"global_bbclone_copyright" => "BBClone tím - Šírené pod licenciou",
"global_last_reset" => "Štatistika začala od",
"global_yes" => "Ano",
"global_no" => "Nie",

// The error messages
"error_cannot_see_config" =>
"Nemáte oprávnenie k prehliadaniu konfiguračného súboru BBClone.",

// Miscellaneous translations
"misc_other" => "Iný",
"misc_unknown" => "Neznámy",
"misc_second_unit" => "s",
"misc_ignored" => "ignorované",

// The Navigation Bar
"navbar_main_site" => "Hlavná strana",
"navbar_configuration" => "Konfigurácia",
"navbar_global_stats" => "Súhrná štatistika",
"navbar_detailed_stats" => "Podrobná štatistika",
"navbar_time_stats" => "História",
"navbar_language" => "Jazyk",
"navbar_go" => "Vstúpiť",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Čas",
"dstat_visits" => "Navštívené",
"dstat_extension" => "Doména",
"dstat_dns" => "Meno stroja",
"dstat_from" => "Odkiaľ",
"dstat_os" => "OS",
"dstat_browser" => "Prehliadač",
"dstat_visible_rows" => "Zobrazených prístupov",
"dstat_green_rows" => "zelený riadok",
"dstat_blue_rows" => "modrý riadok",
"dstat_red_rows" => "červený riadok",
"dstat_search" => "Hľadať",
"dstat_last_page" => "Posledná stránka",
"dstat_last_visit" => "posledná návšteva",
"dstat_robots" => "Roboti",
"dstat_my_visit" => "Vyhľadajte informácie o tejto IP adrese",
"dstat_no_data" => "Dáta nedostupné",
"dstat_prx" => "Proxy Server",
"dstat_ip" => "IP Addresa",
"dstat_user_agent" => "Užívatelský agent",
"dstat_nr" => "Nr",
"dstat_pages" => "Strana",
"dstat_visit_length" => "Dĺžka prehliadania",
"dstat_reloads" => "Znova načítané",
"dstat_whois_information" => "Nájdi informácie o tejto IP adrese",

// Global Stats words
"gstat_accesses" => "Prístupy",
"gstat_total_visits" => "Celkom navštívené",
"gstat_total_unique" => "Celkom jedinečné adresy",
"gstat_operating_systems" => "Top %d operačných systémov",
"gstat_browsers" => "Top %d prehliadačov",
"gstat_extensions" => "Top %d domén",
"gstat_robots" => "Top %d robotov",
"gstat_pages" => "Top %d navštívených stránok",
"gstat_origins" => "Top %d zdrojov",
"gstat_hosts" => "Top %d Hosts",
"gstat_keys" => "Top %d Slov",
"gstat_total" => "Celkom",
"gstat_not_specified" => "Neurčené",

// Time Stats words
"tstat_su" => "Ne",
"tstat_mo" => "Po",
"tstat_tu" => "Ut",
"tstat_we" => "St",
"tstat_th" => "Št",
"tstat_fr" => "Pi",
"tstat_sa" => "So",

"tstat_full_su" => "Nedeľa",
"tstat_full_mo" => "Pondelok",
"tstat_full_tu" => "Utorok",
"tstat_full_we" => "Streda",
"tstat_full_th" => "Štvrtok",
"tstat_full_fr" => "Piatok",
"tstat_full_sa" => "Sobota",

"tstat_jan" => "Jan",
"tstat_feb" => "Feb",
"tstat_mar" => "Mar",
"tstat_apr" => "Apr",
"tstat_may" => "Máj",
"tstat_jun" => "Jún",
"tstat_jul" => "Júl",
"tstat_aug" => "Aug",
"tstat_sep" => "Sep",
"tstat_oct" => "Okt",
"tstat_nov" => "Nov",
"tstat_dec" => "Dec",

"tstat_full_jan" => "Január",
"tstat_full_feb" => "Február",
"tstat_full_mar" => "Marec",
"tstat_full_apr" => "Apríľ",
"tstat_full_may" => "Máj",
"tstat_full_jun" => "Jún",
"tstat_full_jul" => "Júl", 
"tstat_full_aug" => "August",
"tstat_full_sep" => "September",
"tstat_full_oct" => "Október",
"tstat_full_nov" => "November",
"tstat_full_dec" => "December",

"tstat_last_day" => "Posledný deň",
"tstat_last_week" => "Posledný týždeň",
"tstat_last_month" => "Posledný mesiac",
"tstat_last_year" => "Posledný rok",
"tstat_average" => "priemer",

// Loadtime notice
"generated" => "Stránka vygenerovaná za ",
"seconds" => " sekundy",

// Configuration page words and sentences
"config_variable_name" => "Názov premennej",
"config_variable_value" => "Hodnota promennej",
"config_explanations" => "Vysvetlivky",

"config_BBC_MAINSITE" =>
"Ak nastavíte túto hodnotu bude generovaná štatistika práve pre toto URL.
Defaultne je hodnota správne nastavená na predchádzajúci (parent) adresár.
V prípade že vaša stránka je umiestnená inde budete musieť prispôsobiť
túto hodnotu na správnu.<br />
Príklad:<br />
\$BBC_MAINSITE = &quot;http://www.mojserver.sk/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone defaultne zobrazí nastavenia štatistiky. V prípade že nechcete
všetkým ukazovat ako je nastavený BBClone možete zakázať prístup k
zobrazeniu nastavení.<br />
Príklad:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Tento titulok bude zobrazený v navigačnom panely na všetkých stránkach
BBClone.<br />
K dispozíci sú tieto premenné:<br />
<ul>
<li>%SERVER: meno serveru,</li>
<li>%DATE: aktuálny dátum.</li>
</ul>
HTML tagy sú povolené.<br />
Príklad:<br />
\$BBC_TITLEBAR = &quot;Štatistika pre %SERVER generovaná dňa %DATE&quot;;<br/>
\$BBC_TITLEBAR = &quot;Moja štatistika zo dňa %DATE vypadá takto:&quot;;<br/>",

"config_BBC_LANGUAGE" =>
"BBClone defaultná jazyková lokalizácia v prípade že nieje špecifikovaná v
prehliadači.
Podporované sú nasledovné jazykové verzie:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn a zh-tw</p>",

"config_BBC_MAXTIME" =>
"Táto hodnota definuje dĺžku jedinečnej návštevy v sekundách. Každý ďalší
klik od
toho istého návštevníka vrámci tejto dĺžky bude povazovaný za jednu
návštevu.
Default je 30 minút (1800 sekúnd) čo je de facto web štandard, ale v
závislosti
na vašich potrebách môžete túto hodnotu upraviť.<br />
Príklad:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Koľko návštev chcete zobrazovať v detailnom výpise? Default hodnota je 100.
Je doporučené nemeniť túto hodnotu na viac ako 500, pretože načítanie bude
trvat
veľmi dlho",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Hodnota \$BBC_DETAILED_STAT_FIELDS určuje aké stĺpce sa zobrazia v
detailnom
štatistickom výpise. Dostupné sú tieto stĺpce:
<ul>
<li>id => Poradie návštevníka od začiatku počítania</li>
<li>time => Čas kedy bola registrovaná posledná návšteva</li>
<li>visits => Počet jedinečných návštev</li>
<li>dns => Provider návštevníka</li>
<li>ip => IP adresa návštevníka</li>
<li>os => Typ operačného systému (ak je dostupný a nie je to robot)</li>
<li>browser => Typ prehliadača použitého na pripojenie</li>
<li>ext => Krajina odkiaľ je návštevník</li>
<li>referer => Linka z ktorej prišiel návštevník (ak je dostupná)</li>
<li>page => Posledná navštívená stránka</li>
<li>search => Otázka akú hľadal návštevník vo vyhľadávači (ak je k dispozícii)</li>
</ul>
Tieto premenné budú prehľadne uložené v stĺpcoch.<br />
Príklad:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os,
browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"V prípade že server nemá správne definovaný čas, môžete ho prispôsobiť.
Urobíte to tak že pripočítate alebo odpočítate od tohoto času minúty.
Záporná hodnota posunie čas spať, kladná hodnota napred.<br />
Príklad:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Toto nastavenie určuje či sa má IP adresa prevádzať na host adresu alebo nie.
Pokiaľ host poskytuje o sebe veľa informácií, výsledkom môže byť pád vašej stránky.
Ak je váš DNS server pomalý alebo má limitovanú kapacitu zapnite túto voľbu
a vyriešite problém.<br />
Príklad:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClone defaultne zobrazuje všetky návštevy v časovej osi, pretože to
robí dobrý dojem pri zobrazení. Ak však preferujete zobrazenie len
jednoznačných
návštev zmeňte túto hodnotu na 1.<br />
Príklad:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Tuto je možno definovat rozsah IP adries ktoré sú vyradené z počítania.
V prípade že chcete definovať viac adries oddeľte ich čiarkou.<br />
Príklad:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"V prípade že chcete niektorých návštevníkov nezahŕňať do detailného
výpisu
môžete špecifikovať kľúčové slová ktoré ich charakterizujú.
Ak budete definovať viac oddeľte ich čiarkou.<br />
Príklad:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Tuto môžete definovať počítanie návštev pre robotov ktorý skenujú
stránky.<br />
Príklad:<br />
\$BBC_IGNORE_BOTS = 2; - robotov zahrnúť do všetkých štatistík<br />
\$BBC_IGNORE_BOTS = 1; - robotov zahrnúť len do štatistík robotov<br />
\$BBC_IGNORE_BOTS = &quot;&quot;; - počítať iba ľudí",

"config_BBC_IGNORE_AGENT" =>
"Táto voľba vraví ako počítať návštevníkov. Defaultne je použité počítanie
IP adries,
ktoré je dobré pre mnoho prípadov. Často sú však užívatelia skrytí za proxy
serverom. Deaktiváciou tejto voľby dosiahnete viacej návštev, pretože sa
budú počítať nový návštevníci ktorý majú síce rovnaké IP ale rozdielne
nastavené
hodiny.<br />
Príklad:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Týmto môžete zrušiť doteršiu štatistiku. Ak nastavíte na 1 a spustíte,
štatistika sa zmaže. Nezabudnite potom deaktivovat lebo sa budete diviť akú
máte slabú návštevnosť. ;).<br />
Príklad:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Návštevníci a roboti môžu generovat veľké množstvo dát, v prípade veľkého
počtu návštevníkov v ten istý čas. Zapnutím tejto voľby zmenšíte veľkosť
súborov a access.php z týchto dát vyberie len podstatné. Množstvo prístupov
a rebríčky hodnotení sa uložia ale stratíte detailnú štatistiku.<br />
Príklad:<br />
\$BBC_PURGE_SINGLE = 1;<br />
\$BBC_PURGE_SINGLE = &quot;&quot;;",

"config_BBC_LOADTIME" =>
"V spodnej časti stránky sa zobrazí čas načítania stránky v sekundách.<br />
Príklad:<br />
\$BBC_LOADTIME =&quot;&quot;;<br />
\$BBC_LOADTIME = 1;",

"config_BBC_EXT_LOOKUP" =>
"Táto voľba určuje či sa u IP adresy má pozrieť na určenie polohy (štátu).<br />
Majte na pamäti že tieto pluginy niesu súčasťou BBClone.<br />
<ul>
<li>IP2EXT => Použitie starého IP2EXT na preskúmanie IP adresy</li>
<li>GEOIP => Použitie GeoIP API plugu</li>
<li>GEOIP-mod => Použitie GeoIP PHP/Perl Modulu (geoip.so)</li>
</ul>
Príklad:<br />
\$BBC_EXT_LOOKUP =&quot;&quot;;<br />
\$BBC_EXT_LOOKUP =&quot;IP2EXT&quot;;<br />
\$BBC_EXT_LOOKUP =&quot;GEOIP&quot;;<br />
\$BBC_EXT_LOOKUP =&quot;GEOIP-mod&quot;;",

"config_BBC_CSS_FILE" =>
"BBClone CSS Súbor<br />
Poznámka: Týmto súborom možete zmeniť to ako bude BBClone vypadať.<br />
(napríklad zmeníte farbu alebo veľkosť textu/použitý font)<br />
Príklad:<br />
\$BBC_CSS_FILE =&quot;bbclone.css&quot;;<br />
\$BBC_CSS_FILE =&quot;other.css&quot;;",

"config_BBC_HITS" =>
"Zahrnúť pohyb po BBClone do štatistiky.<br />
Príklad:<br />
\$BBC_HITS =1;<br />
\$BBC_HITS =&quot;&quot;;",

"config_BBC_USE_ORIGINAL_URI" =>
"Zapnite túto možnosť ak &quot;Najnavštevovaniejšie stránky&quot; nepracujú z dôvodu
filtrovania URL. To sa može stať ak použijete BBClone s nejakým Redakčným
Systémom (CMS) ktorý používa veľmi dlhé (complexné) URL.<br />
DÔLEŽITÁ POZNÁMKA: Táto možnosť zmení ako sa budú ukladať URL,
takže budete potrebovať resetovať štatistiky.<br />
Príklad:<br />
\$BBC_USE_ORIGINAL_URI = 1;	=> Nefiltruj, použij originálny URL<br />
\$BBC_USE_ORIGINAL_URI = &quot;&quot;;	=> Filtruj URL (default)",

"config_BBC_MAX_PAGENAME" =>
"Maximálny počet znakov pre názov stránky.<br />
Dlhé názvy stránok budú skracované na začiatku s &quot;...&quot;<br />
DÔLEŽITÁ POZNÁMKA: Táto možnosť zmení ako sa budú ukladať URL,
takže budete potrebovať resetovať štatistiky.<br />
Príklad:<br />
\$BBC_MAX_PAGENAME = 60;	=> 60 znakov (default)"

);
?>
