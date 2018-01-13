<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: cs.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Czech (Čeština)

// The DNS Extensions array
$extensions = array(
"localdomain" => "lokální",
"numeric" => "Číselná",
"unknown" => "Neznámý",
"museum" => "Muzea",
"travel" => "cestování",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Arpa",
"asia" => "Asia-Pacific",
"coop" => "cooperatives",
"info" => "Informační",
"jobs" => "companies",
"mobi" => "Mobily",
"name" => "název",
"post" => "poštovní služby",

"biz" => "Business",
"cat" => "Catalan",
"com" => "Komerční servery",
"edu" => "Školství",
"gal" => "Gallego",
"gov" => "Vládní servery USA",
"int" => "Mezinárodní organizace",
"mil" => "Vojenské servery USA",
"net" => "Síťová infrastruktura",
"org" => "Nevládní organizace",
"pro" => "profesionální",
"tel" => "Kontakty",
"xxx" => "dospělé kulturních aa",

"a1" => "Anonymní proxy",
"a2" => "Satelitní Provider",
"ac" => "Ascension",
"ad" => "Andorra",
"ae" => "Spojené arabské emiráty",
"af" => "Afghanistán",
"ag" => "Antigua a Barbuda",
"ai" => "Anguilla",
"al" => "Albánie",
"am" => "Arménie",
"an" => "Nizozemské Antily",
"ao" => "Angola",
"ap" => "Asia-Pacific",
"aq" => "Antarktida",
"ar" => "Argentina",
"as" => "Americká Samoa",
"at" => "Rakousko",
"au" => "Austrálie",
"aw" => "Aruba",
"ax" => "Ålandy",
"az" => "Azerbajdžán",
"ba" => "Bosna a Hercegovina",
"bb" => "Barbados",
"bd" => "Bangladéš",
"be" => "Belgie",
"bf" => "Burkina Faso",
"bg" => "Bulharsko",
"bh" => "Bahrajn",
"bi" => "Burundi",
"bj" => "Benin",
"bm" => "Bermudy",
"bn" => "Brunej",
"bo" => "Bolívie",
"br" => "Brazílie",
"bs" => "Bahamy",
"bt" => "Bhútán",
"bw" => "Botswana",
"by" => "Bělorusko",
"bz" => "Belize",
"ca" => "Kanada",
"cc" => "Kokosové ostrovy",
"cd" => "Kongo, Demokratická republika",
"cf" => "Středoafrická republika",
"cg" => "Kongo",
"ch" => "Švýcarsko",
"ci" => "Pobřeží slonoviny",
"ck" => "Cookovy ostrovy",
"cl" => "Chile",
"cm" => "Kamerun",
"cn" => "Čína",
"co" => "Kolumbie",
"cr" => "Kostarika",
"cu" => "Kuba",
"cv" => "Kapverdy",
"cw" => "Curaçao",
"cx" => "Vánoční ostrov",
"cy" => "Kypr",
"cz" => "Česká republika",
"de" => "Německo",
"dj" => "Džibuti",
"dk" => "Dánsko",
"dm" => "Dominika",
"do" => "Dominikánská republika",
"dz" => "Alžírsko",
"ec" => "Ekvádor",
"ee" => "Estonsko",
"eg" => "Egypt",
"er" => "Eritrea",
"es" => "Španělsko",
"et" => "Etiopie",
"eu" => "Evropská unie",
"fi" => "Finsko",
"fj" => "Fidži",
"fk" => "Falklandy",
"fm" => "Mikronésie",
"fo" => "Faerské ostrovy",
"fr" => "Francie",
"ga" => "Gabun",
"gd" => "Grenada",
"ge" => "Georgie",
"gf" => "Francouzská Guyana",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Grónsko",
"gm" => "Gambie",
"gn" => "Guinea",
"gp" => "Guadeloupe",
"gq" => "Rovníková Guinea",
"gr" => "Řecko",
"gs" => "Jižní Georgie a Jižní Sandwichovy ostrovy",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bissau",
"gy" => "Guyana",
"hk" => "Hongkong",
"hm" => "Ostrovy Heard a McDonald",
"hn" => "Honduras",
"hr" => "Chorvatsko",
"ht" => "Haiti",
"hu" => "Maďarsko",
"id" => "Indonézie",
"ie" => "Irsko",
"il" => "Izrael",
"im" => "Ostrov Man",
"in" => "Indie",
"io" => "Britské indickooceánské teritorium",
"iq" => "Irák",
"ir" => "Irán",
"is" => "Island",
"it" => "Itálie",
"je" => "Jersey",
"jm" => "Jamajka",
"jo" => "Jordánsko",
"jp" => "Japonsko",
"ke" => "Keňa",
"kg" => "Kyrgyzsko",
"kh" => "Kambodža",
"ki" => "Kiribati",
"km" => "Komory",
"kn" => "Svatý Kitts a Nevis",
"kp" => "Severní Korea",
"kr" => "Korea",
"kw" => "Kuvajt",
"ky" => "Kajmanské ostrovy",
"kz" => "Kazachstán",
"la" => "Laos",
"lb" => "Libanon",
"lc" => "Svatá Lucie",
"li" => "Lichtenštejnsko",
"lk" => "Srí Lanka",
"lr" => "Libérie",
"ls" => "Lesotho",
"lt" => "Lotyšsko",
"lu" => "Lucembursko",
"lv" => "Litva",
"ly" => "Libye",
"ma" => "Maroko",
"mc" => "Monako",
"md" => "Moldávie",
"me" => "Černá Hora",
"mg" => "Madagaskar",
"mh" => "Marshallovy ostrovy",
"mk" => "Makedonie",
"ml" => "Mali",
"mm" => "Barma (Myanmar)",
"mn" => "Mongolsko",
"mo" => "Macao",
"mp" => "Severní Mariany",
"mq" => "Martinik",
"mr" => "Mauretánie",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauritius",
"mv" => "Maledivy",
"mw" => "Malawi",
"mx" => "Mexiko",
"my" => "Malajsie",
"mz" => "Mozambik",
"na" => "Namibie",
"nc" => "Nová Kaledonie",
"ne" => "Niger",
"nf" => "Norfolk",
"ng" => "Nigérie",
"ni" => "Nikaragua",
"nl" => "Holandsko",
"no" => "Norsko",
"np" => "Nepál",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "Nový Zéland",
"om" => "Omán",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Francouzská Polynésie",
"pg" => "Papua - Nová Guinea",
"ph" => "Filipíny",
"pk" => "Pákistán",
"pl" => "Polsko",
"pm" => "Svatý Pierre a Miquelon",
"pn" => "Pitcairn",
"pr" => "Portoriko",
"ps" => "Palestina",
"pt" => "Portugalsko",
"pw" => "Palau",
"py" => "Paraguay",
"qa" => "Katar",
"re" => "Réunion",
"ro" => "Rumunsko",
"rs" => "Srbsko",
"ru" => "Rusko",
"rw" => "Rwanda",
"sa" => "Saudská Arábie",
"sb" => "Šalamounovy ostrovy",
"sc" => "Seychely",
"sd" => "Súdán",
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
"st" => "Svatý Tomáš a Princův ostrov",
"su" => "Sovětský svaz",
"sv" => "Salvador",
"sx" => "Sint Maarten",
"sy" => "Sýrie",
"sz" => "Svazijsko",
"tc" => "Ostrovy Turks a Caicos",
"td" => "Čad",
"tf" => "Francouzská jižní teritoria",
"tg" => "Togo",
"th" => "Thajsko",
"tj" => "Tádžikistán",
"tk" => "Tokelau",
"tl" => "Východní Timor",
"tm" => "Turkmenistán",
"tn" => "Tunisko",
"to" => "Tonga",
"tp" => "Východní Timor",
"tr" => "Turecko",
"tt" => "Trinidad a Tobago",
"tv" => "Tuvalu",
"tw" => "Tchajwan",
"tz" => "Tanzánie",
"ua" => "Ukrajina",
"ug" => "Uganda",
"uk" => "Spojené království",
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
"za" => "Jižní Afrika",
"zm" => "Zambie",
"zw" => "Zimbabwe",

// No longer active but needed for history purpose
"bl" => "Saint-Barthélemy",
"bv" => "Bouvet",
"bq" => "Karibik Nizozemské",
"cs" => "Srbsko a Černá Hora",
"eh" => "Západní Sahara",
"gb" => "Velká Británie",
"mf" => "Saint-Martin",
"sj" => "Ostrovy Svalbard a Jan Mayen",
"ss" => "Jižní Súdán",
"um" => "Malé odlehlé ostrovy patřící USA",
"yu" => "Srbsko a Černá Hora",
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
"global_titlebar"=> "Statistika %SERVER generována %DATE",
"global_bbclone_copyright" => "BBClone tým - Šířeno pod licencí",
"global_last_reset" => "Statistiky naposledy vynulovány",
"global_yes" => "ano",
"global_no" => "ne",

// The error messages
"error_cannot_see_config" =>
"Nemáte oprávnění k prohlížení konfiguračního souboru BBClone.",

// Miscellaneous translations
"misc_other" => "Jiný",
"misc_unknown" => "Neznámý",
"misc_second_unit" => "s",
"misc_ignored" => "Ignorovaný",

// The Navigation Bar
"navbar_main_site" => "Hlavní stránka",
"navbar_configuration" => "Konfigurace",
"navbar_global_stats" => "Souhrnná statistika",
"navbar_detailed_stats" => "Podrobná statistika",
"navbar_time_stats" => "Historie",
"navbar_language" => "jazyk",
"navbar_go" => "jit",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Čas",
"dstat_visits" => "Shlédnuto",
"dstat_extension" => "Doména",
"dstat_dns" => "Jméno počítače",
"dstat_from" => "Odkud",
"dstat_os" => "OS",
"dstat_browser" => "Prohlížeč",
"dstat_visible_rows" => "Zobrazených záznamů",
"dstat_green_rows" => "zelený řádek",
"dstat_blue_rows" => "modrý řádek",
"dstat_red_rows" => "červený řádek",
"dstat_search" => "Hledáno",
"dstat_last_page" => "poslední strana",
"dstat_last_visit" => "poslední návštěva",
"dstat_robots" => "roboti",
"dstat_my_visit" => "Návštěvy z vaší IP",
"dstat_no_data" => "Informace nejsou k dispozici",
"dstat_prx" => "Proxy server",
"dstat_ip" => "IP Adresa",
"dstat_user_agent" => "Prohlížeč",
"dstat_nr" => "č.",
"dstat_pages" => "Stránky",
"dstat_visit_length" => "Délka návštěvy",
"dstat_reloads" => "Obnovení",
"dstat_whois_information" => "Vyhledejte informace o této IP adresa",

// Global Stats words
"gstat_accesses" => "Přístupy",
"gstat_total_visits" => "Celkem shlédnuto",
"gstat_total_unique" => "Celkem unikátních hostů",
"gstat_operating_systems" => "Top %d operačních systémů",
"gstat_browsers" => "Top %d prohlížečů",
"gstat_extensions" => "Top %d domén",
"gstat_robots" => "Top %d robotů",
"gstat_pages" => "Top %d navštívených stránek",
"gstat_origins" => "Top %d zdrojů",
"gstat_hosts" => "Top %d návštěv",
"gstat_keys" => "Top %d hledaných slov",
"gstat_total" => "Celkem",
"gstat_not_specified" => "Neurčeno",

// Time Stats words
"tstat_su" => "Ne",
"tstat_mo" => "Po",
"tstat_tu" => "Út",
"tstat_we" => "St",
"tstat_th" => "Čt",
"tstat_fr" => "Pá",
"tstat_sa" => "So",

"tstat_full_su" => "Neděle",
"tstat_full_mo" => "Pondělí",
"tstat_full_tu" => "Úterý",
"tstat_full_we" => "Středu",
"tstat_full_th" => "Čtvrtek",
"tstat_full_fr" => "Pátek",
"tstat_full_sa" => "Sobotu",

"tstat_jan" => "Led",
"tstat_feb" => "Úno",
"tstat_mar" => "Bře",
"tstat_apr" => "Dub",
"tstat_may" => "Kvě",
"tstat_jun" => "Čer",
"tstat_jul" => "Čec",
"tstat_aug" => "Srp",
"tstat_sep" => "Zář",
"tstat_oct" => "Říj",
"tstat_nov" => "Lis",
"tstat_dec" => "Pro",

"tstat_full_jan" => "Leden",
"tstat_full_feb" => "Únor",
"tstat_full_mar" => "Březen",
"tstat_full_apr" => "Duben",
"tstat_full_may" => "Květen",
"tstat_full_jun" => "Červen",
"tstat_full_jul" => "Červenec",
"tstat_full_aug" => "August",
"tstat_full_sep" => "Září",
"tstat_full_oct" => "Říjen",
"tstat_full_nov" => "Listopad",
"tstat_full_dec" => "Prosinec",

"tstat_last_day" => "Poslední den",
"tstat_last_week" => "Poslední týden",
"tstat_last_month" => "Poslední měsíc",
"tstat_last_year" => "Poslední rok",
"tstat_average" => "Průměrá",

// Loadtime notice
"generated" => "Stránka vygenerována za ",
"seconds" => " vteřin",

// Configuration page words and sentences
"config_variable_name" => "Název proměnné",
"config_variable_value" => "Hodnota proměnné",
"config_explanations" => "Vysvětlivky",

"config_BBC_MAINSITE" =>
"Jestliže byla nastavena tato proměnná bude vytvořen odkaz na Vámi zvolené umístění.
Přednastavená hodnota odkazuje na nadřazený adresář. V případě, že je Vaše
hlavní stránka umístěna na jiném místě budete si chtít pravděpodobně tuto
hodnotu změnit.<br />
Příklady:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone má přednastaveno zobrazení &quot;Konfigurace&quot; nahoře v hlavní nabídce.
V případě že si nepřejete konfiguraci zobrazovat nechte tuto hodnotu prázdnou.
<br />
Přiklady:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Titulek stránek se statistikou. <br />
Tento titulek bude zobrazen v navigačním panelu na všech BBClone stránkách.<br />
K dispozici jsou následující hodnoty:<br />
<ul>
<li>%SERVER: jméno serveru,</li>
<li>%DATE: aktuální datum.</li>
</ul>
HTML tagy jsou povoleny.<br />
Příklady:<br />
\$BBC_TITLEBAR = &quot;Statistiky pro %SERVER vytvořeny %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;Moje statistiky od %DATE vypadají takto:&quot;;<br />",

"config_BBC_LANGUAGE" =>
"Přednastavený jazyk pro BBClone. Bere se v potaz pokud není nastaven pomocí prohlížeče.
Podporovány jsou následující jazyky:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn a zh-tw</p>",

"config_BBC_MAXTIME" =>
"Tato proměnná stanovuje délku unikátní návětěvy v sekundách. Každý přístup od stejného
návštěvníka v tomto intervalu bude počítán jako jedna návštěva. Přednastavená hodnota
je de facto webový standard a to 30 minut (1800 sekund), ale záleží pouze na Vás jakou
hodnotu si nastavíte.<br />
Příklady:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Kolik chcete mít záznamů v podrobné statistice? Přednastaveno je 100 záznamů.
Doporučuje se nenastavovat hodnotu větší než 500 v důsledku zamezení dlouhého
načítání.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Proměnná \$BBC_DETAILED_STAT_FIELDS určuje sloupce které mají být zobrazeny
v podrobné statistice. Možnosti jsou:
<ul>
<li>id => X-tý návštěvník od doby vynulování statistiky</li>
<li>time => Čas kdy byl zaznamenán poslední klik</li>
<li>visits => Počet zobrazení unikátního návštěvníka</li>
<li>dns => Hostitelské jméno návštěvníka</li>
<li>ip => IP adresa návštěvníka</li>
<li>os => Operační systém návštěvníka (jestliže je k dispozici a není robot)</li>
<li>browser => Prohlížeč návštěvníka</li>
<li>ext => Země návštěvníka</li>
<li>referer => Stránka ze které návštěvník přišel (jestliže je k dispozici)</li>
<li>page => Poslední prohlížená stránka</li>
<li>search => Jaká slova hledal návštěvník ve vyhledávači (jestliže je k dispozici)</li>
</ul>
Sloupce s požadovanými informacemi budou zobrazeny v pořadí v jakém jste je zadali.<br />
Příklady:<br />

\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"V případě že čas serveru nesouhlasí s Vaším časovým pásmem můžete čas změnit.
Záporné hodnoty nastaví čas zpět, kladné jej posunou dopředu.<br />
Příklady:<br />

\$BBC_TIME_OFFSET = 300; (čas +300 minut)<br />
\$BBC_TIME_OFFSET = -300; (čas -300 minut)<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Toto nastavnení definuje zda IP adresy mají být překládány na hostitelské jméno.
Hostitelské jméno Vám řekne mnohem více o návštěvníkovi, jejich zjištování však
může značně zpomalit Vaši stránku. To je způsobeno tím že použité DNS servery
jsou pomalé, mají omezenou kapacitu nebo jsou nevěrohodné. Změnou této hodnoty
můžete problém vyřešit.<br />
Příklady:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClone je přednastaveno aby ukazovalo celková zobrazení (reloady/hity) v historii,
protože dává užitečné informace o zátěži serveru. Jestliže si ale přejete
používat unikatní zobrazení v historii můžete změnit způsob počítání
nastavením této proměnné.<br />
Příklady:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Tato možnost může být použita pro vyloučení konkrétních IP adres případně i
jejich rozsahů od započítávání. V případě že chcete přidat více adres
použijte čárku jako oddělovač.<br />
Příklady:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"V případě že nechcete mít ve statistikách některé odkazy na stránky ze
kterých návštěvnící přistupují, můžete specifikovat jedno nebo více slov které
jsou obsaženy v jejich odkazu. Tím zabráníte jejich zobrazení. Chcete-li
přidat více slov použijte čárku jako oddělovač.<br />
Příklady:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Toto nastavení slouží ke změně započítávání robotů. Přednastaveno je ignorovat
roboty v souhrných statistikách a ponechat je v ostatních. Pokud si přejete
nezobrazovat roboty ve všech statistikách nastavte hodnotu na &quot;2&quot; pak budou
započítávány pouze přístupy jednotlivých návštěvníků.<br />
Příklady:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"V tomto nastavení definujete jak BBClone rozpozná jednoho uživatele od druhého.
Defaultně se používá jen IP adresa která poskytuje reálné čísla ve většině
případů. Jestliže jsou ale Vaši návštěvníci často skryti za proxy serverem
může vypnutím této možnoti dosáhnout reálnějších čísel. O tom že se
jedná o nového navštěvníka se rozhodne podle změny hodnoty hlavičky user agent.<br />
Příklady:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Kdykoliv si přejete vymazat Vaše statistiky můžete aktivovat tuto přoměnou
a příští návštěvou je vymazat. Nezapomeňte ji zase poté deaktivovat jinak
pravděpodobně pocítíte neobvykle nízkou návštěvnost ;)<br />
Příklady:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Statistiky hostu a odkazujících stránek mohou vytvářet velké objemy dat většinou
však tvořené jednorázovými návštěvníky. Zapnutím této volby můžete odstranit
záznamy a znatelně zmenšit access.php bez ovlivnění zěbříčku přístupů a
odkazujících stránek. Množství zobrazení bude přidáno do &quot;nespecifikovaných&quot;
záznamů aby bylo zachováno celkové skóre.<br />
Příklady:<br />
\$BBC_PURGE_SINGLE = 1;<br />
\$BBC_PURGE_SINGLE = &quot;&quot;;",

"config_BBC_LOADTIME" =>
"V spodní části stránky se zobrazí čas čtení stránky ve vteřinách.<br />
Příklady:<br />
\$BBC_LOADTIME =&quot;&quot;;<br />
\$BBC_LOADTIME = 1;",

"config_BBC_EXT_LOOKUP" =>
"Táto volba určuje jesti se u IP adresy má zjistit určení polohy (štátu).<br />
Mějte na paměti že tyhle pluginy nejsou súčastí BBClone.<br />
<ul>
<li>IP2EXT => Použití starého IP2EXT na prozkoumání IP adresy</li>
<li>GEOIP => Použití GeoIP API plugu</li>
<li>GEOIP-mod => Použití GeoIP PHP/Perl Modulu (geoip.so)</li>
</ul>
Příklady:<br />
\$BBC_EXT_LOOKUP =&quot;&quot;;<br />
\$BBC_EXT_LOOKUP =&quot;IP2EXT&quot;;<br />
\$BBC_EXT_LOOKUP =&quot;GEOIP&quot;;<br />
\$BBC_EXT_LOOKUP =&quot;GEOIP-mod&quot;;",

"config_BBC_CSS_FILE" =>
"BBClone CSS soubor<br />
Poznámka; Tímto souborem můžete změnit to jak bude BBClone vypadat.<br />
(například zmeníte barvu nebo velikost textu/použitý font)<br />
Příklady:<br />
\$BBC_CSS_FILE =&quot;bbclone.css&quot;;<br />
\$BBC_CSS_FILE =&quot;other.css&quot;;",

"config_BBC_HITS" =>
"Započítat pohyb po BBClone do statistiky.<br />
Příklady:<br />
\$BBC_HITS =1;<br />
\$BBC_HITS =&quot;&quot;;",

"config_BBC_USE_ORIGINAL_URI" =>
"Zapněte tuhle možnost jestli &quot;Nejnavštevovanejší stránky&quot; nepracují z důvodu
filtrování URL. To se může stát jestli použijete BBClone s nejakým Redakčním
Systémem (CMS) který používa moc dlouhé (complexné) URL.<br />
DULEŽITÁ POZNÁMKA: Táto možnosť změní ukládání URL,
takže budete muset resetovat statistiky.<br />
Příklady:<br />
\$BBC_USE_ORIGINAL_URI = 1;	=> Nefiltruj, použij originální URL<br />
\$BBC_USE_ORIGINAL_URI = &quot;&quot;;	=> Filtruj URL (default)",

"config_BBC_MAX_PAGENAME" =>
"Maximální počet znaků pro název stránky.<br />
Dlouhé názvy stránek budou zkracované na začátku s &quot;...&quot;<br />
DULEŽITÁ POZNÁMKA: Táto možnosť změní ukládání URL,
takže budete muset resetovat statistiky.<br />
Příklady:<br />
\$BBC_MAX_PAGENAME = 60;	=> 60 znaků (default)"

);
?>
