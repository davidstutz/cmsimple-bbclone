<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: es.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Spanish (Español)

// The DNS Extensions array
$extensions = array(
"localdomain" => "Local",
"numeric" => "Numérico",
"unknown" => "Desconocido",
"museum" => "Museo",
"travel" => "viajes",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "Aero",
"arpa" => "Errores",
"asia" => "Asia-Pacífic",
"coop" => "Cooperativa",
"info" => "Información",
"jobs" => "El empleo",
"mobi" => "Los móviles",
"name" => "Individual",
"post" => "Servicios Postales",

"biz" => "Negocio",
"cat" => "Catalana",
"com" => "Comercial",
"edu" => "Educación Estados Unidos",
"gal" => "Gallega",
"gov" => "Gobierno Estados Unidos",
"int" => "Organizaciones Internacionales",
"mil" => "Ejercito Estados Unidos",
"net" => "Redes",
"org" => "Organizaciones",
"pro" => "Profesional",
"tel" => "Contactos",
"xxx" => "Pornográfico",

"a1" => "Anonymous Proxy",
"a2" => "Satellite Provider",
"ac" => "Isla Ascensión",
"ad" => "Andorra",
"ae" => "Emiratos Árabes Unidos",
"af" => "Afganistán",
"ag" => "Antigua y Barbuda",
"ai" => "Anguilla",
"al" => "Albania",
"am" => "Armenia",
"an" => "Antillas Holandesas",
"ao" => "Angola",
"ap" => "Asia-Pacífic",
"aq" => "Antártida",
"ar" => "Argentina",
"as" => "Samoa Americana",
"at" => "Austria",
"au" => "Australia",
"aw" => "Aruba",
"ax" => "Åland",
"az" => "Azerbaiyán",
"ba" => "Bosnia Herzegovina",
"bb" => "Barbados",
"bd" => "Bangladés",
"be" => "Bélgica",
"bf" => "Burkina Faso",
"bg" => "Bulgaria",
"bh" => "Baréin",
"bi" => "Burundi",
"bj" => "Benin",
"bm" => "Bermudas",
"bn" => "Brunéi",
"bo" => "Bolivia",
"br" => "Brasil",
"bs" => "Bahamas",
"bt" => "Bután",
"bw" => "Botswana",
"by" => "Bielorrusias",
"bz" => "Belice",
"ca" => "Canadá",
"cc" => "Islas Cocos",
"cd" => "República Democrática del Congo",
"cf" => "República Centroafricana",
"cg" => "Congo",
"ch" => "Suiza",
"ci" => "Costa de Marfil",
"ck" => "Islas Cook",
"cl" => "Chile",
"cm" => "Camerún",
"cn" => "China",
"co" => "Colombia",
"cr" => "Costa Rica",
"cu" => "Cuba",
"cv" => "Cabo Verde",
"cw" => "Curazao",
"cx" => "Islas de Navidad",
"cy" => "Chipre",
"cz" => "República Checa",
"de" => "Alemania",
"dj" => "Yibuti",
"dk" => "Dinamarca",
"dm" => "Dominica",
"do" => "República Dominicana",
"dz" => "Argelia",
"ec" => "Ecuador",
"ee" => "Estonia",
"eg" => "Egipto",
"er" => "Eritrea",
"es" => "España",
"et" => "Etiopía",
"eu" => "Unión Europea",
"fi" => "Finlandia",
"fj" => "Fiyi",
"fk" => "Islas Malvinas",
"fm" => "Micronesia",
"fo" => "Islas Feroe",
"fr" => "Francia",
"ga" => "Gabón",
"gd" => "Granada",
"ge" => "Georgia",
"gf" => "Guayana Francesa",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Groenlandia",
"gm" => "Gambia",
"gn" => "Guinea",
"gp" => "Guadalupe",
"gq" => "Guinea Ecuatorial",
"gr" => "Grecia",
"gs" => "Georgias del Sur y Islas Sandwich del Sur",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bisáu",
"gy" => "Guyana",
"hk" => "Hong Kong",
"hm" => "Islas Heard y McDonald",
"hn" => "Honduras",
"hr" => "Croacia",
"ht" => "Haití",
"hu" => "Hungría",
"id" => "Indonesia",
"ie" => "Irlanda",
"il" => "Israel",
"im" => "Isla de Man",
"in" => "India",
"io" => "Territorio Británico del Océano Índico",
"iq" => "Irak",
"ir" => "Irán",
"is" => "Islandia",
"it" => "Italia",
"je" => "Jersey",
"jm" => "Jamaica",
"jo" => "Jordania",
"jp" => "Japón",
"ke" => "Kenia",
"kg" => "Kirguistán",
"kh" => "Camboya",
"ki" => "Kiribati",
"km" => "Comores",
"kn" => "San Cristóbal y Nieves",
"kp" => "Corea del Norte",
"kr" => "Corea del Sur",
"kw" => "Kuwait",
"ky" => "Islas Caimán",
"kz" => "Kazajistán",
"la" => "Laos",
"lb" => "Líbano",
"lc" => "Santa Lucía",
"li" => "Liechtenstein",
"lk" => "Sri Lanka",
"lr" => "Liberia",
"ls" => "Lesotho",
"lt" => "Lituania",
"lu" => "Luxemburgo",
"lv" => "Letonia",
"ly" => "Libia",
"ma" => "Marruecos",
"mc" => "Mónaco",
"md" => "Moldavia",
"me" => "Montenegro",
"mg" => "Madagascar",
"mh" => "Islas Marshall",
"mk" => "Macedonia",
"ml" => "Malí",
"mm" => "Myanmar",
"mn" => "Mongolia",
"mo" => "Macao",
"mp" => "Islas Marianas del Norte",
"mq" => "Martinica",
"mr" => "Mauritania",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauricio",
"mv" => "Maldivas",
"mw" => "Malaui",
"mx" => "México",
"my" => "Malasia",
"mz" => "Mozambique",
"na" => "Namibia",
"nc" => "Nueva Caledonia",
"ne" => "Níger",
"nf" => "Isla Norfolk",
"ng" => "Nigeria",
"ni" => "Nicaragua",
"nl" => "Países Bajos",
"no" => "Noruega",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"nz" => "Nueva Zelanda",
"om" => "Omán",
"pa" => "Panamá",
"pe" => "Perú",
"pf" => "Polinesia Francesa",
"pg" => "Papúa Nueva Guinea",
"ph" => "Filipinas",
"pk" => "Pakistán",
"pl" => "Polonia",
"pm" => "San Pedro y Miquelón",
"pn" => "Islas Pitcairn",
"pr" => "Puerto Rico",
"ps" => "Palestina",
"pt" => "Portugal",
"pw" => "Palaos",
"py" => "Paraguay",
"qa" => "Catar",
"re" => "Reunión",
"ro" => "Rumania",
"rs" => "Serbia",
"ru" => "Rusia",
"rw" => "Ruanda",
"sa" => "Arabia Saudita",
"sb" => "Islas Salomón",
"sc" => "Seychelles",
"sd" => "Sudán",
"se" => "Suecia",
"sg" => "Singapur",
"sh" => "Santa Elena",
"si" => "Eslovenia",
"sk" => "Eslovaquia",
"sl" => "Sierra Leona",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somalia",
"sr" => "Surinam",
"st" => "Santo Tomé y Príncipe",
"su" => "Unión Soviética",
"sv" => "El Salvador",
"sx" => "Sint Maarten",
"sy" => "Siria",
"sz" => "Suazilandia",
"tc" => "Islas Turks y Caicos",
"td" => "Chad",
"tf" => "Territorios Franceses del Sur",
"tg" => "Togo",
"th" => "Tailandia",
"tj" => "Tayikistán",
"tk" => "Tokelau",
"tl" => "Timor Oriental",
"tm" => "Turkmenistán",
"tn" => "Túnez",
"to" => "Tonga",
"tp" => "Timor Oriental",
"tr" => "Turquía",
"tt" => "Trinidad y Tobago",
"tv" => "Tuvalu",
"tw" => "Taiwán",
"tz" => "Tanzania",
"ua" => "Ucrania",
"ug" => "Uganda",
"uk" => "Reino Unido",
"us" => "Estados Unidos",
"uy" => "Uruguay",
"uz" => "Uzbekistán",
"va" => "Ciudad del Vaticano",
"vc" => "San Vicente y las Granadinas",
"ve" => "Venezuela",
"vg" => "Islas Vírgenes Británicas",
"vi" => "Islas Vírgenes Americanas",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Wallis y Futuna",
"ws" => "Samoa",
"ye" => "Yemen",
"yt" => "Mayotte",
"za" => "Sudáfrica",
"zm" => "Zambia",
"zw" => "Zimbabwe",

// No longer active but needed for history purpose
"bl" => "San Bartolomé",
"bv" => "Islas Bouvet",
"bq" => "Caribe Neerlandés",
"cs" => "Serbia y Montenegro",
"eh" => "Sahara Occidental",
"gb" => "Reino Unido",
"mf" => "San Martín",
"sj" => "Islas Svalbard y Jan Mayen",
"ss" => "Sudán del Sur",
"um" => "Islas Menores de Estados Unidos",
"yu" => "Serbia y Montenegro",
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
"global_titlebar"=> "Estadísticas para %SERVER generadas el %DATE",
"global_bbclone_copyright" => "El equipo de BBClone - licenciado bajo la",
"global_last_reset" => "Último puesto de las estadísticas",
"global_yes" => "si",
"global_no" => "no",

// The error messages
"error_cannot_see_config" =>
"No puedes ver la configuración de BBClone en este servidor.",

// Miscellaneous translations
"misc_other" => "Otras",
"misc_unknown" => "Desconocido",
"misc_second_unit" => "segs.",
"misc_ignored" => "No hecho caso",

// The Navigation Bar
"navbar_main_site" => "Sitio principal",
"navbar_configuration" => "Configuración",
"navbar_global_stats" => "Estadísticas globales",
"navbar_detailed_stats" => "Estadísticas detalladas",
"navbar_time_stats" => "Estadísticas temporales",
"navbar_language" => "Idiome",
"navbar_go" => "ir",

// Detailed Stats words
"dstat_id" => "ID",
"dstat_time" => "Tiempo",
"dstat_visits" => "Visitas",
"dstat_extension" => "Extensión",
"dstat_dns" => "Nombre del host",
"dstat_from" => "Proveniente de",
"dstat_os" => "S.O.",
"dstat_browser" => "Navegador",
"dstat_visible_rows" => "Accesos visibles",
"dstat_green_rows" => "filas verdes",
"dstat_blue_rows" => "filas azules",
"dstat_red_rows" => "filas rojas",
"dstat_orange_rows" => "filas naranjas",
"dstat_search" => "Búsqueda",
"dstat_last_page" => "última página",
"dstat_last_visit" => "última visita",
"dstat_robots" => "robots",
"dstat_my_visit" => "visitas de tu IP",
"dstat_no_data" => "Ningunos datos disponibles",
"dstat_prx" => "Servidor Proxy",
"dstat_ip" => "Dirección IP",
"dstat_user_agent" => "Agente de usuario",
"dstat_nr" => "Nº",
"dstat_pages" => "Páginas",
"dstat_visit_length" => "Duración",
"dstat_reloads" => "Recargas",
"dstat_whois_information" => "Busque información en esta Dirección IP",

// Global Stats words
"gstat_accesses" => "Accesos",
"gstat_total_visits" => "Visitas totales",
"gstat_total_unique" => "Totales únicas",
"gstat_operating_systems" => "%d primeros sistemas operativos",
"gstat_browsers" => "%d primeros navegadores",
"gstat_extensions" => "%d primeras extensiones",
"gstat_robots" => "%d primeros robots",
"gstat_pages" => "%d primeras páginas",
"gstat_origins" => "%d primeros orígenes",
"gstat_hosts" => "%d primeros hosts",
"gstat_keys" => "%d primeras palabras clave",
"gstat_total" => "Total",
"gstat_not_specified" => "Sin especificar",

// Time Stats words
"tstat_su" => "Dom",
"tstat_mo" => "Lun",
"tstat_tu" => "Mar",
"tstat_we" => "Mié",
"tstat_th" => "Jue",
"tstat_fr" => "Vie",
"tstat_sa" => "Sáb",

"tstat_full_su" => "Domingo",
"tstat_full_mo" => "Lunes",
"tstat_full_tu" => "Martes",
"tstat_full_we" => "Miércoles",
"tstat_full_th" => "Jueves",
"tstat_full_fr" => "Viernes",
"tstat_full_sa" => "Sábado",

"tstat_jan" => "Ene",
"tstat_feb" => "Feb",
"tstat_mar" => "Mar",
"tstat_apr" => "Abr",
"tstat_may" => "May",
"tstat_jun" => "Jun",
"tstat_jul" => "Jul",
"tstat_aug" => "Ago",
"tstat_sep" => "Sep",
"tstat_oct" => "Oct",
"tstat_nov" => "Nov",
"tstat_dec" => "Dic",

"tstat_full_jan" => "Enero",
"tstat_full_feb" => "Febrero",
"tstat_full_mar" => "Marzo",
"tstat_full_apr" => "Abril",
"tstat_full_may" => "Mayo",
"tstat_full_jun" => "Junio",
"tstat_full_jul" => "Julio",
"tstat_full_aug" => "Agosto",
"tstat_full_sep" => "Septiembre",
"tstat_full_oct" => "Octubre",
"tstat_full_nov" => "Noviembre",
"tstat_full_dec" => "Diciembre",

"tstat_last_day" => "último día",
"tstat_last_week" => "última semana",
"tstat_last_month" => "último mes",
"tstat_last_year" => "último año",
"tstat_average" => "promedio",

// Loadtime notice
"generated" => "página generada en ",
"seconds" => " segundo",

// Configuration page words and sentences
"config_variable_name" => "Nombre de la variable",
"config_variable_value" => "Valor de la variable",
"config_explanations" => "Explicaciones",

"config_BBC_MAINSITE" =>
"Si esta variable está establecida, se generará un enlace al sitio especificado. El valor
por defecto apunta al directorio pariente. En caso de que el sitio principal esté
localizado en cualquier otra parte, probablemente querrás ajustar este valor para
satisfacer tus necesidades.<br />
Ejemplos:<br />
\$BBC_MAINSITE = &quot;http://www.miservidor.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"Por defecto, la configuración de BBClone aparece visible. En caso de que no deseas
esta característica, puedes denegar el acceso desactivando esta opción.<br />
Ejemplos:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Título de tus páginas de estadísticas. Aparecerá en la barra de navegación de todas
las páginas de BBClone.<br />
Las macros disponibles son:<br />
<ul>
<li>%SERVER: nombre del servidor,</li>
<li>%DATE: fecha actual.</li>
</ul>
Etiquetas HTML permitidas.<br />
Ejemplos:<br />
\$BBC_TITLEBAR = &quot;Estadísticas para %SERVER generadas el %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;Mi estadística de %DATE se parece a esto:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"Idioma por defecto de BBClone, en caso de que no sea especificado por el navegador.
Los siguientes idiomas están soportados:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn und zh-tw</p>",

"config_BBC_MAXTIME" =>
"Esta variable define la duración de una única visita en segundos. Cada acceso del mismo
visitante dentro de ese periodo de tiempo se considerará la misma visita, mientras que
dos accesos sucesivos no excedan el límite especificado. Por defecto se establecen
30 minutos (1800 segundos), considerado el standard de hecho en la web, pero dependiendo
de tus necesidades puede que desees asignar un valor diferente.<br />
Ejemplos:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"¿Cuántas entradas quieres que aparezcan listadas en las estadísticas detalladas?
El valor por defecto es 100. Se recomienda no asignar más de 500 para evitar una carga pesada.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"La variable \$BBC_DETAILED_STAT_FIELDS determina las columnas que se mostrarán en las
estadísticas detalladas. Las columnas posibles son:
<ul>
<li>id => Visitante número x de que se comenzó a contarlos</li>
<li>time => Tiempo de registro del último acceso</li>
<li>visits => Accesos de un único visitante</li>
<li>dns => Nombre del host del visitante</li>
<li>ip => Dirección IP del visitante</li>
<li>os => Sistema operativo (si está disponible y/o si no es robot)</li>
<li>browser => Navegador usado para establecer la conexión</li>
<li>ext => Pais o extensión del visitante</li>
<li>referer => Enlace desde el que procede el visitante (si está disponible)</li>
<li>page => última página visitada</li>
<li>search => Parámetro de búsqueda usado por el visitante (si está disponible)</li>
</ul>
El mismo orden en el que coloques las columnas se usarán para mostrarlas.<br />
Ejemplos:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"En caso de que la hora del servidor no coincida con tu hora local, puede ajustarse
la hora en minutos usando esta variable. Los valores negativos retrasan la hora,
los positivos la aumentan.<br />
Ejemplos:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Esta opción define si las direcciones IP deben ser resueltas para adquirir el
nombre del servidor. Aunque los nombres de servidores nos proporcionan más datos
sobre un visitante, este método puede relentizar considerablemente nuestro sitio, si los
servidores de DNS usados son lentos, limitados en su capacidad o no accesibles.
Estableciendo esta variable puede resolver el problema.<br />
Ejemplos:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClone por defecto muestra los accesos en las estadísticas por hora, por que nos da
una imagen muy útil de la carga del servidor. Si, a pesar de ello, prefieres usar
visitas únicas como base de tus estadísticas horarias, puedes cambiar la forma de
contabilización estableciendo esta variable.<br />
Ejemplos:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Esta opción se usa para excluir una dirección IP particular o un rango de direcciones
de las estadísticas. En caso de que se quiere añadir varias expresiones usar una
coma como separador.<br />
Ejemplos:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"En caso de que no quieras tener referentes particulares de tus visitantes listados
en tus estadísticas detalladas usa esta variable. Si quieres utilizar más de
una expresión sepáralas con comas.<br />
Ejemplos:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Puedes usar esta opción para determinar el tratamiento de los robots. La
configuración por defecto es ignorarlos en las estadísticas de servidores y
mostrarlos en el resto de éstas. Si deseas que no aparezcan en ninguna,
puedes configurar esta opción con un &quot;2&quot;, de manera que sólo se
contabilizarán las visitas &quot;humanas&quot;.<br />
Ejemplos:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Esta opción define como BBClone identifica a un visitante. Por defecto se
usa sólo la dirección IP, que proporciona una imagen real en la mayoría de los
casos. Si tus visitantes accedieran frecuentemente ocultos detrás de un proxy,
la desactivación de esta opción podría proporcionar datos más reales.<br />
Ejemplos:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Cada vez que desees resetear tus estadísticas puedes activar esta variable,
lo que borrará las estadísticas en la próxima visita. No olvides desactivarla
inmediatamente después, ya que podrías experimentar probablemente una
disminución en el número de visitas en tu sitio.<br />
Ejemplos:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Las estadísticas de servidores y referentes pueden generar una gran cantidad
de datos. Activando esta variable se eliminan los detalles de las visitas menos
relevantes, reduciéndose considerablemente el tama&ntilde;o del archivo access.php
sin afectar al ranking de servidores y referentes. Las visitas eliminadas se
agregarán a las entradas &quot;no especificadas&quot; para mantener el número
de visitas intacto.<br />
Ejemplos:<br />
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
