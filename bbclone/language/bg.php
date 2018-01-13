<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: bg.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Bulgarian (български)

// The DNS Extensions array
$extensions = array(
"localdomain" => "местен",
"numeric" => "IP Адрес",
"unknown" => "Непознат",
"museum" => "Музей",
"travel" => "Туристически",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "аеро",
"arpa" => "ARPA",
"asia" => "Азия и Тикоокеански регион",
"coop" => "Кооперативен",
"info" => "Инфо",
"jobs" => "Кариери",
"mobi" => "Мобилен",
"name" => "Персонален",
"post" => "Пoct",

"biz" => "Бизнес",
"cat" => "Каталония",
"com" => "Търговски",
"edu" => "Образователен (САЩ)",
"gal" => "галисийски",
"gov" => "Правителствен (САЩ)",
"int" => "Международна организация",
"mil" => "Военен (САЩ)",
"net" => "Мрежови",
"org" => "Организация",
"pro" => "Професионален",
"tel" => "Контакти",
"xxx" => "Eротизъм",

"a1" => "Anonymous Proxy",
"a2" => "Satellite Provider", 
"ac" => "о-в Възнесение",
"ad" => "Андора",
"ae" => "Обединени арабски емирства",
"af" => "Афганистан",
"ag" => "Антигуа и Барбуда",
"ai" => "Ангила",
"al" => "Албания",
"am" => "Армения",
"an" => "Холандски Антили",
"ao" => "Ангола",
"ap" => "Азия и Тикоокеански регион",
"aq" => "Антарктика",
"ar" => "Аржентина",
"as" => "Американска Самоа",
"at" => "Австрия",
"au" => "Австралия",
"aw" => "Аруба",
"ax" => "Български",
"az" => "Азербайджан",
"ba" => "Босна и Херцеговина",
"bb" => "Барбадос",
"bd" => "Бангладеш",
"be" => "Белгия",
"bf" => "Буркина Фасо",
"bg" => "България",
"bh" => "Бахрейн",
"bi" => "Бурунди",
"bj" => "Бенин",
"bm" => "Бермуди",
"bn" => "Бруней",
"bo" => "Боливия",
"br" => "Бразилия",
"bs" => "Бахами",
"bt" => "Бутан",
"bw" => "Ботсуана",
"by" => "Беларус",
"bz" => "Белиз",
"ca" => "Канада",
"cc" => "Кокосови о-ви",
"cd" => "Конго",
"cf" => "Централна Африканска Република",
"cg" => "Конго",
"ch" => "Швейцария",
"ci" => "Бряг на слоновата кост",
"ck" => "о-ви Кук",
"cl" => "Китай",
"cm" => "Камерун",
"cn" => "Китай",
"co" => "Колумбия",
"cr" => "Коста рика",
"cu" => "Куба",
"cv" => "Острови Зелен нос",
"cw" => "Кюрасао",
"cx" => "Коледни о-ви",
"cy" => "Кипър",
"cz" => "Чехия",
"de" => "Германия",
"dj" => "Джибути",
"dk" => "Дания",
"dm" => "Доминика",
"do" => "Доминиканска република",
"dz" => "Алжир",
"ec" => "Еквадор",
"ee" => "Естония",
"eg" => "Египет",
"er" => "Еритрея",
"es" => "Испания",
"et" => "Етиопия",
"eu" => "Европейски Съюз",
"fi" => "Финландия",
"fj" => "Фиджи",
"fk" => "Фолкледски о-ви",
"fm" => "Микронезия",
"fo" => "Фаройски о-ви",
"fr" => "Франция",
"ga" => "Габон",
"gd" => "Гренада",
"ge" => "Грузия",
"gf" => "Френска Гвиана",
"gg" => "Гуернси",
"gh" => "Гана",
"gi" => "Гибралтар",
"gl" => "Гренландия",
"gm" => "Гамбия",
"gn" => "Гвинея",
"gp" => "Гваделупа",
"gq" => "Екваториална Гвинея",
"gr" => "Гърция",
"gs" => "Южна Джорджия и о-ви Южен Сандвич",
"gt" => "Гватемала",
"gu" => "Гуам",
"gw" => "Гвинея-Бисау",
"gy" => "Гвиана",
"hk" => "Хонг-Конг",
"hm" => "Острови Херд и Макдоналд",
"hn" => "Хондурас",
"hr" => "Хърватска",
"ht" => "Хаити",
"hu" => "Унгария",
"id" => "Индонезия",
"ie" => "Ирландия",
"il" => "Израел",
"im" => "О-в Ман",
"in" => "Индия",
"io" => "Британски територии в Индийския океан",
"iq" => "Ирак",
"ir" => "Иран",
"is" => "Исландия",
"it" => "Италия",
"je" => "Джърси",
"jm" => "Ямайка",
"jo" => "Йордания",
"jp" => "Япония",
"ke" => "Кения",
"kg" => "Киргизстан",
"kh" => "Камбоджа",
"ki" => "Кирибати",
"km" => "Коморос",
"kn" => "Свети Киттс и Невис",
"kp" => "Северна Корея",
"kr" => "Южна Корея",
"kw" => "Кувейт",
"ky" => "Кайманови Острови",
"kz" => "Казахстан",
"la" => "Лаос",
"lb" => "Ливан",
"lc" => "Света Лусия",
"li" => "Лихтенщайн",
"lk" => "Шри Ланка",
"lr" => "Либерия",
"ls" => "Лесото",
"lt" => "Литва",
"lu" => "Люксембург",
"lv" => "Латвия",
"ly" => "Либия",
"ma" => "Мароко",
"mc" => "Монако",
"md" => "Молдова",
"me" => "Български",
"mg" => "Мадагаскар",
"mh" => "Маршалови о-ви",
"mk" => "Македония",
"ml" => "Мали",
"mm" => "Мианмар",
"mn" => "Монголия",
"mo" => "Макао",
"mp" => "О-ви Северна Мариана",
"mq" => "Мартиника",
"mr" => "Мавритания",
"ms" => "Монтсерат",
"mt" => "Малта",
"mu" => "Мавриций",
"mv" => "Малдиви",
"mw" => "Малави",
"mx" => "Мексико",
"my" => "Малайзия",
"mz" => "Мозамбик",
"na" => "Намибия",
"nc" => "Нова Каледония",
"ne" => "Нигер",
"nf" => "О-в Норфолк",
"ng" => "Нигерия",
"ni" => "Никарагуа",
"nl" => "Холандия",
"no" => "Норвегия",
"np" => "Непал",
"nr" => "Науру",
"nu" => "Ниуе",
"nz" => "Нова Зеландия",
"om" => "Оман",
"pa" => "Панама",
"pe" => "Перу",
"pf" => "Френска Полинезия",
"pg" => "Папуа Нова Гвинея",
"ph" => "Филипини",
"pk" => "Пакистан",
"pl" => "Полша",
"pm" => "Свети Пиер и Микулон",
"pn" => "о-в Питкаирн",
"pr" => "Пуерт Рико",
"ps" => "Палестина",
"pt" => "Португалия",
"pw" => "Палау",
"py" => "Парагвай",
"qa" => "Катар",
"re" => "Реюнион",
"ro" => "Румъния",
"rs" => "Сърбия",
"ru" => "Русия",
"rw" => "Руанда",
"sa" => "Саудитска Арабия",
"sb" => "Соломонови о-ви",
"sc" => "Сейшелски о-ви",
"sd" => "Судан",
"se" => "Швеция",
"sg" => "Сингапур",
"sh" => "Св. Елена",
"si" => "Словения",
"sk" => "Словакия",
"sl" => "Сиера Леоне",
"sm" => "Сан Марино",
"sn" => "Сенегал",
"so" => "Сомалия",
"sr" => "Суринам",
"st" => "Сао Том и Принсип",
"su" => "Съветски съюз",
"sv" => "Салвадор",
"sx" => "Синт-Маартен",
"sy" => "Сирия",
"sz" => "Свазиленд",
"tc" => "Туркс и Кайкос о-ви",
"td" => "ЧАД",
"tf" => "Френски южни територии",
"tg" => "Того",
"th" => "Тайланд",
"tj" => "Таджикистан",
"tk" => "Токелау",
"tl" => "Източен Тимор",
"tm" => "Туркменистан",
"tn" => "Тунис",
"to" => "Тонга",
"tp" => "Източен Тимор",
"tr" => "Турция",
"tt" => "Тринидад и Тобаго",
"tv" => "Тувалу",
"tw" => "Тайван",
"tz" => "Танзания",
"ua" => "Украйна",
"ug" => "Уганда",
"uk" => "Великобритания",
"us" => "САЩ",
"uy" => "Уругвай",
"uz" => "Узбекистан",
"va" => "Ватикана",
"vc" => "Свети Винсент и Гренадини",
"ve" => "Венецуела",
"vg" => "Вирджински о-ви (Великобритания)",
"vi" => "Вирджински Острови (САЩ)",
"vn" => "Виетнам",
"vu" => "Вануату",
"wf" => "о-ви Уолис и Футуна",
"ws" => "Самоа",
"ye" => "Йемен",
"yt" => "Майот",
"za" => "ЮАР",
"zm" => "Замбия",
"zw" => "Зимбабве",

// No longer active but needed for history purpose
"bl" => "Български",
"bv" => "Буве",
"bq" => "Caribbean Холандия",
"cs" => "Сърбия и Черна гора",
"eh" => "Западна Сахара",
"gb" => "Великобритания",
"mf" => "Сен Мартен",
"sj" => "О-ви Свалбард и Ян Майен",
"ss" => "Южен Судан",
"um" => "САЩ отделни о-ви",
"yu" => "Югославия",
"zr" => "Заир"
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
"global_titlebar"=> "Статистика за %SERVER обработена на %DATE",
"global_bbclone_copyright" => "The BBClone team - Лицензирано съгласно",
"global_last_reset" => "Последно анулиране на статистиката на ",
"global_yes" => "Да",
"global_no" => "Не",

// The error messages
"error_cannot_see_config" =>
"Вие нямате позволения за разглеждане на конфигурацията на BBClone на този сървър.",

// Miscellaneous translations
"misc_other" => "Друг",
"misc_unknown" => "Непознат",
"misc_second_unit" => "сек.",
"misc_ignored" => "Игнориран",

// The Navigation Bar
"navbar_main_site" => "Основен сайт",
"navbar_configuration" => "Конфигурация",
"navbar_global_stats" => "Обобщена статистика",
"navbar_detailed_stats" => "Подробна статистика",
"navbar_time_stats" => "Статистика по време",
"navbar_language" => "Език",
"navbar_go" => "Go",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Време",
"dstat_visits" => "Посещения",
"dstat_extension" => "Домейн",
"dstat_dns" => "Име на хост",
"dstat_from" => "Референт",
"dstat_os" => "Операционна с/ма",
"dstat_browser" => "Браузер",
"dstat_visible_rows" => "Последни",
"dstat_green_rows" => "зелени редове",
"dstat_blue_rows" => "сини редове",
"dstat_red_rows" => "червени редове",
"dstat_search" => "Търсене",
"dstat_last_page" => "Последна страница",
"dstat_last_visit" => "последно посещение",
"dstat_robots" => "Роботи",
"dstat_my_visit" => "Посещения от вашия IP адрес",
"dstat_no_data" => "Няма налични данни",
"dstat_prx" => "Прокси сървър",
"dstat_ip" => "IP адрес",
"dstat_user_agent" => "Потребителски агент",
"dstat_nr" => "No",
"dstat_pages" => "Страници",
"dstat_visit_length" => "Време",
"dstat_reloads" => "Обновявания",
"dstat_whois_information" => "Потърсете информация за този IP адрес",

// Global Stats words
"gstat_accesses" => "Посещаемост",
"gstat_total_visits" => "Посещения общо",
"gstat_total_unique" => "Посещения уникални",
"gstat_operating_systems" => "Топ %d операционни с/ми",
"gstat_browsers" => "Топ %d браузери",
"gstat_extensions" => "Топ %d домейни",
"gstat_robots" => "Топ %d роботи",
"gstat_pages" => "Топ %d посещаеми страници",
"gstat_origins" => "Топ %d референти",
"gstat_hosts" => "Топ %d хостове",
"gstat_keys" => "Топ %d ключови думи",
"gstat_total" => "Общо",
"gstat_not_specified" => "Директни",

// Time Stats words
"tstat_su" => "Нед",
"tstat_mo" => "Пон",
"tstat_tu" => "Вт",
"tstat_we" => "Ср",
"tstat_th" => "Чет",
"tstat_fr" => "Пет",
"tstat_sa" => "Съб",

"tstat_full_su" => "Неделя",
"tstat_full_mo" => "Понеделник",
"tstat_full_tu" => "Вторник",
"tstat_full_we" => "Сряда",
"tstat_full_th" => "Четвъртък",
"tstat_full_fr" => "Петък",
"tstat_full_sa" => "Събота",

"tstat_jan" => "Яну",
"tstat_feb" => "Фев",
"tstat_mar" => "Мар",
"tstat_apr" => "Апр",
"tstat_may" => "Май",
"tstat_jun" => "Юни",
"tstat_jul" => "Юли",
"tstat_aug" => "Авг",
"tstat_sep" => "Сеп",
"tstat_oct" => "Окт",
"tstat_nov" => "Ное",
"tstat_dec" => "Дек",

"tstat_full_jan" => "Януари",
"tstat_full_feb" => "Февруари",
"tstat_full_mar" => "Март",
"tstat_full_apr" => "Април",
"tstat_full_may" => "Май",
"tstat_full_jun" => "Юни",
"tstat_full_jul" => "Юли",
"tstat_full_aug" => "Август",
"tstat_full_sep" => "Септември",
"tstat_full_oct" => "Октомври",
"tstat_full_nov" => "Ноември",
"tstat_full_dec" => "Декември",

"tstat_last_day" => "Последен ден",
"tstat_last_week" => "Последна седмица",
"tstat_last_month" => "Последен месец",
"tstat_last_year" => "Последна година",
"tstat_average" => "Средно",

// Loadtime notice
"generated" => "Обработено за ",
"seconds" => " сек.",

// Configuration page words and sentences
"config_variable_name" => "Име на променлива",
"config_variable_value" => "Стойност",
"config_explanations" => "Описание",

"config_BBC_MAINSITE" =>
"Ако е зададена стойност на тази променлива, към навигационната лента на BBClone ще бъде добавена връзка към зададеното местоположение. Стойността по подразбиране е предната директория. В случай, че вашият основен сайт се намира на друго място, вероятно ще пожелаете да зададете стойност според вашите нужди.<br />
Примери:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"По подразбиране BBClone показва своите настройки. В случай, че не желаете това, можете да забраните достъпа като деактивирате тази опция.<br />
Примери:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Заглавието на навигационната лента на всички bbclonе страници.<br />
Следващите макроси са използваеми:<br />
<ul>
<li>%SERVER: име на сървъра,</li>
<li>%DATE: текуща дата.</li>
</ul>
HTML тагове също са позволени.<br />
Примери:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My Statistics from %DATE look like this:&quot;;<br />",

"config_BBC_LANGUAGE" =>
"Езикът по подразбиране на BBClone, в случай, че не е спесифициран от браузерa.
Поддържат се следните езици:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn и zh-tw</p>",

"config_BBC_MAXTIME" =>
"Тази променлива дефинира дължината на всяко уникално посещение в секунди. Всяко попадение от същия посетител в рамките на този период ще бъде третирано като едно посещение, докато две последователни попадения не надвишат указания лимит. По подразбиране е де факто уеб стандартът от 30 минути (1800 секунди), но в зависимост от вашите нужди, можете да зададете друга стойност.<br />
Примери:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Колко записа желаете да имате в подробната статистика?
По подразбиране е 100, препоръчително е да не използвате повече от 500 за да избегнете натоварване.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Променливата \$BBC_DETAILED_STAT_FIELDS  определя колоните, показвани в подробната статистика. Възможните колони са:
<ul>
<li>id => x-тия поред посетител след стартирането на статистиката</li>
<li>time => Времето, когато е регистрирано последното посещение</li>
<li>visits => Общия брой попадения на уникален посетител</li>
<li>dns => Името на хоста на посетителя</li>
<li>ip => IP адреса на посетителя</li>
<li>os => Операционната система (ако е достъпна и/или робот)</li>
<li>browser => Софтуера, използван за осъществяване на връзката</li>
<li>ext => Държавата или разширението на посетителя</li>
<li>referer => Връзката от която е дошъл посетител (ако е налична)</li>
<li>page => В последната посетена страница</li>
<li>search => Заявката за търсене посетител използва (ако е налична)</li>
</ul>
Същият ред, в който сте подредили колоните, ще бъде използван за представяне.<br />
Примери:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"В случай, че времето на сървъра не съвпада с вашата часова зона, вие можете да нагласите времето в минути, използвайки тази променлива. Отрицателните стойности задават времето назад,
положителните - напред.<br />
Примери:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Тази опция дефинира, дали IP адресите да бъдат преобразувани имена на хостове или не. Имената на хостове могат да дадат повече информация за посетителя, но тяхното преобразуване може значително да забави вашия сайт, ако използваните DNS сървъри са бавни, с ограничен капацитет или по ненадеждни друга причина. Указването на тази променлива може да реши проблема.<br />
Примери:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"По подразбиране BBClone показва всички попадения във статистиката по време, защото това дава полезна информация за натоварването на сървъра. Ако обаче предпочитате да използвате само уникалните посещения, можете да промените начина на отчитане като зададете тази променлива.<br />
Примери:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Тази опция може да се използва за да се игнорират определени IP адреси или мрежи от отчитане. Ако желаете да зададете няколко израза, използвайте запетая за разделител.<br />
Примери:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"В случай, че не желаете определени референти да бъдат отчитани във вашата подробна и обобщена статистика, можете да зададете една или повече ключови думи за блокиране на референт при съвпадение. Ако зададете няколко ключови думи, използвайте запетая за разделител.<br />
Примери:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Тази променлива определя начина, по който ще бъдат третирани роботите. По подразбиране те се игнорират в списъка на топ хостовете, като се отчитат в останалата част от статистиката. В случай, че не желаете да виждате никакви роботи, задайте на променливата стойност
&quot;2&quot;, при което само реалните заявки ще бъдат регистрирани.<br />
Примери:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Тази опция дефинира начина, по който BBClone различава един потребител от друг. По подразбиране това се осъществява само посредством IP адреса, което дава реална представа в повечето случаи. Ако обаче, вашите посетители често се намират зад прокси сървъри, деактивирането на тази опция може да даде по-реална представа, след като новия посетител бъде определен при промяната на потребителския агент.<br />
Примери:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Когато желаете да анулирате статистиката, можете да активирате тази променлива и съдържанието ще бъде изтрито при следващо посещение. Не забравяйте да деактивирате променливата след това, в противен случай вероятно ще наблюдавате изключително нисък трафик ;).<br />
Примери:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Статистиката за хостове и референти може да генерира огромно количество данни, повечето
от които в следствие на еднократни посещения. Задавайки тази опция, вие можете да изчистите тези данни и значително да намалите големината на файла access.php без това да засегне видимата подредба на хостовете и референтите. Количеството посещения ще бъде добавено към
категорията &quot;not_specified&quot;  за да се запазят общите показатели непроменени.<br />
Примери:<br />
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
