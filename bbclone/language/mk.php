<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: mk.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Macedonian (Македонски)

// The DNS Extensions array
$extensions = array(
"localdomain" => "локалната",
"numeric" => "Бројни",
"unknown" => "Непознато",
"museum" => "Музеј",
"travel" => "Патување",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Аеро",
"arpa" => "Арпа",
"asia" => "Азија-Пацифик",
"coop" => "Кооп",
"info" => "Информација",
"jobs" => "вработување",
"mobi" => "мобилни телефони",
"name" => "Лични",
"post" => "поштенските услуги",

"biz" => "Бизнис",
"cat" => "Catalan",
"com" => "Комерцијално",
"edu" => "Образовно",
"gal" => "галициски",
"gov" => "Влада на САД",
"int" => "Интернационални организиции",
"mil" => "Војска на САД",
"net" => "Мрежи",
"org" => "Организации",
"pro" => "Професионални",
"tel" => "Контакт",
"xxx" => "еротски",

"a1" => "анонимен прокси",
"a2" => "сателитски провајдер",
"ac" => "Аксенсион остров",
"ad" => "Андора",
"ae" => "Обединети Арапски Емирати",
"af" => "Авганистан",
"ag" => "Антика и Барбуда",
"ai" => "Ангулија",
"al" => "Албанија",
"am" => "Ерменија",
"an" => "Холандски антили",
"ao" => "Ангола",
"ap" => "Азија-Пацифик",
"aq" => "Антартика",
"ar" => "Аргентина",
"as" => "Американска Самоа",
"at" => "Аустриа",
"au" => "Австралија",
"aw" => "Аруба",
"ax" => "Оланд",
"az" => "Азејрбејџан",
"ba" => "Босна и Херцеговина",
"bb" => "Барбадос",
"bd" => "Бангладеш",
"be" => "Белгија",
"bf" => "Буркина Фасо",
"bg" => "Бугарија",
"bh" => "Бехреин",
"bi" => "Бурунди",
"bj" => "Бенин",
"bm" => "Бермуди",
"bn" => "Бруени",
"bo" => "Боливија",
"br" => "Бразил",
"bs" => "Бахами",
"bt" => "Бутан",
"bw" => "Боцвана",
"by" => "Белорусија",
"bz" => "Белизе",
"ca" => "Канада",
"cc" => "Кокосови острови",
"cd" => "Конго",
"cf" => "Централно африканска република",
"cg" => "Конго",
"ch" => "Швајцарија",
"ci" => "Брег на слонова коска",
"ck" => "Кукови острови",
"cl" => "Чиле",
"cm" => "Камерун",
"cn" => "Кина",
"co" => "Колумбија",
"cr" => "Костарика",
"cu" => "Куба",
"cv" => "`Рт Верде",
"cw" => "Curaçao",
"cx" => "Божиќни острови",
"cy" => "Кипар",
"cz" => "Чешка република",
"de" => "Германија",
"dj" => "Џубоути",
"dk" => "Данска",
"dm" => "Доминика",
"do" => "Доминиканска република",
"dz" => "Алжир",
"ec" => "Еквадор",
"ee" => "Естонија",
"eg" => "Египет",
"er" => "Еритреа",
"es" => "Шпанија",
"et" => "Етиопија",
"eu" => "Европска унија",
"fi" => "Финска",
"fj" => "Фиџи",
"fk" => "Фокландски острови",
"fm" => "Микронезија",
"fo" => "Фарски острови",
"fr" => "Франција",
"ga" => "Габон",
"gd" => "Гренада",
"ge" => "Грузија",
"gf" => "Француска Гвајана",
"gg" => "Гуернси",
"gh" => "Гана",
"gi" => "Гибралтар",
"gl" => "Гренланд",
"gm" => "Гамбиа",
"gn" => "Гвинеја",
"gp" => "Гваделопе",
"gq" => "Екваторкска Гвинеја",
"gr" => "Грција",
"gs" => "Јужно Грузиски и Јужно Сендвич острови",
"gt" => "Гватемала",
"gu" => "Гуам",
"gw" => "Гвинеја-Бисау",
"gy" => "Гвајана",
"hk" => "Хонг Конг",
"hm" => "Херд и Мекдоналд острови",
"hn" => "Хондурас",
"hr" => "Хрватска",
"ht" => "Хаити",
"hu" => "Унгарија",
"id" => "Индонезија",
"ie" => "Ирска",
"il" => "Израел",
"im" => "Остров Ман",
"in" => "Индија",
"io" => "Британски територии во Индиски Океан",
"iq" => "Ирак",
"ir" => "Иран",
"is" => "Исланд",
"it" => "Италија",
"je" => "Џерси",
"jm" => "Јамајка",
"jo" => "Јордан",
"jp" => "Јапонија",
"ke" => "Кенија",
"kg" => "Киргистан",
"kh" => "Камбоџа",
"ki" => "Кирибати",
"km" => "Коморос",
"kn" => "Св. Китс и Невис",
"kp" => "Северна Кореја",
"kr" => "Кореја",
"kw" => "Кувајт",
"ky" => "Кајмански острови",
"kz" => "Казакстан",
"la" => "Лаос",
"lb" => "Либан",
"lc" => "Св. Луција",
"li" => "Линхештајн",
"lk" => "Шри Ланка",
"lr" => "Либерија",
"ls" => "Лезото",
"lt" => "Литванија",
"lu" => "Луксембург",
"lv" => "Летонија",
"ly" => "Либија",
"ma" => "Мороко",
"mc" => "Монако",
"md" => "Молдавија",
"me" => "Црна Гора",
"mg" => "Мадагаскар",
"mh" => "Маршалски острови",
"mk" => "Македонија",
"ml" => "Мали",
"mm" => "Мианмар",
"mn" => "Монголија",
"mo" => "Макао",
"mp" => "Северни Мариана острови",
"mq" => "Мартиник",
"mr" => "Мавританија",
"ms" => "Монтсерат",
"mt" => "Малта",
"mu" => "Маурициус",
"mv" => "Малдиви",
"mw" => "Малави",
"mx" => "Мексико",
"my" => "Малезија",
"mz" => "Мозамбик",
"na" => "Намибија",
"nc" => "Нова Каледонија",
"ne" => "Нигер",
"nf" => "Норфолк остров",
"ng" => "Нигерија",
"ni" => "Никарагва",
"nl" => "Холандија",
"no" => "Норвешка",
"np" => "Непал",
"nr" => "Науру",
"nu" => "Ниуе",
"nz" => "Нов Зеланд",
"om" => "Оман",
"pa" => "Панама",
"pe" => "Перу",
"pf" => "Француска Полинезија",
"pg" => "Папуа Нова Гвинеја",
"ph" => "Филипини",
"pk" => "Пакистан",
"pl" => "Полска",
"pm" => "Св. Пјер и Мигелон",
"pn" => "Питкаирин",
"pr" => "Пуеро Рико",
"ps" => "Палестина",
"pt" => "Португалија",
"pw" => "Палау",
"py" => "Парагвај",
"qa" => "Катар",
"re" => "Реунион",
"ro" => "Романија",
"rs" => "Србија",
"ru" => "Русија",
"rw" => "Руанда",
"sa" => "Саудиска Арабија",
"sb" => "Соломонски острови",
"sc" => "Сејшели",
"sd" => "Судан",
"se" => "Шведска",
"sg" => "Сингапур",
"sh" => "Св. Елена",
"si" => "Словенија",
"sk" => "Словакиа",
"sl" => "Сиера Леоне",
"sm" => "Сан Марино",
"sn" => "Сенегал",
"so" => "Сомалија",
"sr" => "Суринам",
"st" => "Сао Томе и Принципе",
"su" => "Советски сојуз",
"sv" => "Ел Салвадор",
"sx" => "Sint Maarten",
"sy" => "Сирија",
"sz" => "Свациленд",
"tc" => "Турски и Каикос острови",
"td" => "Чад",
"tf" => "Јужни француски територии",
"tg" => "Того",
"th" => "Тајланд",
"tj" => "Таџикистан",
"tk" => "Токелау",
"tl" => "Источен Тимор",
"tm" => "Туркменистан",
"tn" => "Тунис",
"to" => "Тонго",
"tp" => "Источен Тимор",
"tr" => "Турција",
"tt" => "Тринидад и Тобаго",
"tv" => "Тувалу",
"tw" => "Тајван",
"tz" => "Танзанија",
"ua" => "Украина",
"ug" => "Уганда",
"uk" => "Велика Британија",
"us" => "САД",
"uy" => "Уругвај",
"uz" => "Узбегистан",
"va" => "Ватикан",
"vc" => "Св. Винсент и Гранадините",
"ve" => "Венецуела",
"vg" => "Британски девствени острови",
"vi" => "Амеркиански девствени острови",
"vn" => "Виетнам",
"vu" => "Вануату",
"wf" => "Острови Валис и Футуна",
"ws" => "Самоа",
"ye" => "Јемен",
"yt" => "Мајоте",
"za" => "Јужна Африка",
"zm" => "Замбија",
"zw" => "Зимбабве",

// No longer active but needed for history purpose
"bl" => "Сен Бартелеми",
"bv" => "Остров Бувет",
"bq" => "Карибите Холандија",
"cs" => "Србија и Црнагора",
"eh" => "Западна Сахара",
"gb" => "Велика Британија",
"mf" => "Свети Мартин",
"sj" => "Свалбард и Жан Мајен острови",
"ss" => "јужен Судан",
"um" => "Мали острови на САД",
"yu" => "Србија и Црнагора",
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
"global_titlebar"=> "Статистика за %SERVER генерирано на %DATE",
"global_bbclone_copyright" => "ББКлон тимот - Лиценцирано под ",
"global_last_reset" => "Последно ресетирање на статистиката ",
"global_yes" => "да",
"global_no" => "не",

// The error messages
"error_cannot_see_config" =>
"Не ви е дозволено да ја гледате конфигурација на овој сервер.",

// Miscellaneous translations
"misc_other" => "Друго",
"misc_unknown" => "Непознато",
"misc_second_unit" => "с",
"misc_ignored" => "Игнорирано",

// The Navigation Bar
"navbar_main_site" => "Главен сајт",
"navbar_configuration" => "Конфигурација",
"navbar_global_stats" => "Глобална статистика",
"navbar_detailed_stats" => "Детална статистика",
"navbar_time_stats" => "Статистика по време",
"navbar_language" => "јазик",
"navbar_go" => "одат",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Време",
"dstat_visits" => "Посети",
"dstat_extension" => "Домен",
"dstat_dns" => "Име на домаќин",
"dstat_from" => "Од",
"dstat_os" => "ОС",
"dstat_browser" => "Прелистувач",
"dstat_visible_rows" => "Видливи пристапи",
"dstat_green_rows" => "зелени редови",
"dstat_blue_rows" => "сини редови",
"dstat_red_rows" => "црвени редови",
"dstat_search" => "Барај",
"dstat_last_page" => "Последна страница",
"dstat_last_visit" => "последна посета",
"dstat_robots" => "Роботи",
"dstat_my_visit" => "посети од вашиот IP",
"dstat_no_data" => "Нема достапни податоци",
"dstat_prx" => "Меѓу сервер",
"dstat_ip" => "ИП адреса",
"dstat_user_agent" => "Прелистувач",
"dstat_nr" => "Бр.",
"dstat_pages" => "Страници",
"dstat_visit_length" => "Должина на посета",
"dstat_reloads" => "Освежувања",
"dstat_whois_information" => "Да барате информации за оваа IP Адреса",

// Global Stats words
"gstat_accesses" => "Пристапи",
"gstat_total_visits" => "Вкупно посети",
"gstat_total_unique" => "Вкупно уникатни",
"gstat_operating_systems" => "Топ %d оперативни системи",
"gstat_browsers" => "Топ %d прелистувачи",
"gstat_extensions" => "Топ %d домени",
"gstat_robots" => "Топ %d Роботи",
"gstat_pages" => "Топ %d посетени страници",
"gstat_origins" => "Топ %d потекла",
"gstat_hosts" => "Топ %d домаќини",
"gstat_keys" => "Топ %d клучни зборови",
"gstat_total" => "Вкупно",
"gstat_not_specified" => "Неопределено",

// Time Stats words
"tstat_su" => "Нед",
"tstat_mo" => "Пон",
"tstat_tu" => "Вто",
"tstat_we" => "Сре",
"tstat_th" => "Чет",
"tstat_fr" => "Пет",
"tstat_sa" => "Саб",

"tstat_full_su" => "Недела",
"tstat_full_mo" => "Понеделник",
"tstat_full_tu" => "Вторник",
"tstat_full_we" => "Среда",
"tstat_full_th" => "Четврток",
"tstat_full_fr" => "Петок",
"tstat_full_sa" => "Сабота",

"tstat_jan" => "Јан",
"tstat_feb" => "Фев",
"tstat_mar" => "Мар",
"tstat_apr" => "Апр",
"tstat_may" => "Мај",
"tstat_jun" => "Јун",
"tstat_jul" => "Јул",
"tstat_aug" => "Авг",
"tstat_sep" => "Сеп",
"tstat_oct" => "Окт",
"tstat_nov" => "Ное",
"tstat_dec" => "Дек",

"tstat_full_jan" => "јануари",
"tstat_full_feb" => "февруари",
"tstat_full_mar" => "Март",
"tstat_full_apr" => "Април",
"tstat_full_may" => "Мај",
"tstat_full_jun" => "јуни",
"tstat_full_jul" => "јули",
"tstat_full_aug" => "Август",
"tstat_full_sep" => "Септември",
"tstat_full_oct" => "Октомври",
"tstat_full_nov" => "Ноември",
"tstat_full_dec" => "декември",

"tstat_last_day" => "Изминат ден",
"tstat_last_week" => "Измината седмица",
"tstat_last_month" => "Изминат месец",
"tstat_last_year" => "Измината година",
"tstat_average" => "просечна",

// Loadtime notice
"generated" => "Страницата е генерирана за ",
"seconds" => " секунди",

// Configuration page words and sentences
"config_variable_name" => "Име на променливата",
"config_variable_value" => "Вредност на променливата",
"config_explanations" => "Опис",

"config_BBC_MAINSITE" =>
"Ако е поставена, врска кон дадената локација ќе биде генериранa.
Вообичаената вредност е да се покажува кон главниот директориум. Во случај вашиот
главен сајт да е на друго место, единствено поставете ја вредноста соодветно.<br />
Примери: <br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"ББКлон вообичаено ги покажува поставките јавно. Во случај да не сакате тоа да
се случува може да го исклучите деактивирајќи ја оваа опција.<br />
Примери:
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Насловот на страната за статистика.<br />
Тој ќе биде ист на сите страни за статистика.<br />
Следните променливи се дозволени:<br />
<ul>
<li>%SERVER: име на серверот,</li>
<li>%DATE: моменталната дата.</li>
</ul>
HTML тагови се дозволени.<br />
Примери:<br />
\$BBC_TITLEBAR = &quot;Статистика за %SERVER генерирано на %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;Мојата статистика за %DATE изгледаат вака:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"Вообичаениот јазик на ББКлон, во случај да не е специфициран од прелистувачот.
Подржани се следните јазици:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn и zh-tw</p>",

"config_BBC_MAXTIME" =>
"Оваа променлива ја дефинира должината на уникатните посети во секунди.
Секоја посета од истиот посетител во овој период ќе се смета како една посета. Вообичаената
вредност од 30 минути (1800сек) е дефакто стандард, но во зависност од вашите потреби
може да поставите друга вредност.<br />
Примери:
<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Колку ставки сакате да бидат излистани во деталната статистика? Вообичаената
вредност е 100. Препорачливо е да не го поставувате ова на повеќе од 500 за
да избегнете големи отперетувања на серверот.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Променливата \$BBC_DETAILED_STAT_FIELDS ги поставува колоните кои ќе бидат
прикажани во деталната статистика. Можни колони се:
<ul>
<li>id => Х-тиот посетител откога сте почнале да броите</li>
<li>time => Времето кога била забележана последната посета</li>
<li>visits => Посетите на поединечниот посетител</li>
<li>dns => Домаќинот на посетителот</li>
<li>ip => ИП адресата на посетителот</li>
<li>os => Оперативниот систем (ако е достапен)</li>
<li>browser => Прелистувачот</li>
<li>ext => Државата или доменот на посетителот</li>
<li>referer => Страната од која што дошол посетителот (ако е достапна)</li>
<li>page => Последната посетена страна</li>
<li>search => Клучниот збор при пребарување ако корисникот користел пребарувач</li>
</ul>
Истиот редослед по кој ќе ги наведете тука ќе се прикажуваат.<br />
Примери:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"Во случај кога серверот не е во иста временска зона како и вас, можете да го
поставите времето во минути со оваа променлива. Негативни вредности ќе го вратат
времето назад, позитивни ќе го постават нанапред.<br />
Примери:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Оваа поставка дефинира дали ИП адресата треба да биде вратена во име на домаќин или не.
Иако името на домаќинот може да каже многу за вашиот посетител, сепак пронаѓањето може
значително да ви го успори вашиот сајт, ако ДНС серверите се спори, малку или на друг начин
недоверливи. Поставуањето на оваа променлива може да го реши проблемот.
<br />
Примери:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"Вообичаено за ББКлон е да ги прикажува сите посети во Временската статистика,
бидејќи тоа дава корисна информација за оптеретеноста на серверот. Сепак, ако сакате
во оваа статистика да се зимаат во предвид само уникатните посети поставете ја оваа
 променлива.<br />
Примери:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Оваа променлива може да се користи за да не се зимаат во предвид определени
ИП адреси од статистиката. Ако сакате да додадете повеќе вредности одвоете ги
со запирка.<br />
Примери:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Во случај да не сакате некој кој го препорачал вашиот сајт да биде излистан во
деталната статистика, можете да наведете еден или повеќе клучни зборови кои ако
се совпаѓаат со некој препорачител нема да биде земен во предвид. Ако користите повеќе
клучни зборови, ве молам користете запирка за да ги одвоите.<br />
Примери:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Може да ја користите оваа опција за како да се третираат роботите. Вообичаено е
да се игнорираат во Топ листите но да се остават во останатите статистики. Ако не
сакате воопшто да гледате роботи поставете ја вредноста на 2, тогаш само човечките посети
ќе се зимаат во предвид.<br />
Примери:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Оваа опција дефинира како ББКлон ги распознава посетителите еден од друг. Вообичаено
е да се користи само ИП адресата, што дава реални бројки во повеќето случаи. Ако сепак
, вашите посетители често сурфаат позади некои помошни сервери, исклучувањето на оваа
опција може да даде пореални бројки, бидејќи нов посетител ќе се смета
кога и прелистувачот кој го користат ќе се смени.<br />
Примери:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Ако некогаш сакате да ги ресетирате статистиките вклучете ја оваа опција и
тие ќе се избришат при следната посета. Не заборавајте да ја деактивирате потоа, бидејќи
најверојатно ќе забележите невообичаено мал сообраќај. ;).<br />
Примери:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Статистиките за домаќините и препорачувачите генерираат големи количини на податоци,
претежно генерирани од посетители кои доаѓаат еднаш. Вклчувајќи ја оваа
опција можете да ги избришете овие ставки и значително да го намалите access.php без
да се примети на вкупните видливи ставки за домаќините и препорачувачите. Овие посети
ќе видат броени како „Непознати“ ставки за да се зачува целокупниот резултат.<br />
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
