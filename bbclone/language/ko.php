<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: ko.php 356 2015-12-11 10:49:19Z joku $
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

// Language: Korean (한국어)

// The DNS Extensions array
$extensions = array(
"localdomain" => "지방의",
"numeric" => "숫자",
"unknown" => "미지",
"museum" => "박물관",
"travel" => "여행",
"ipv4" => "IPv4",
"ipv6" => "IPv6",

"aero" => "에어로", 
"arpa" => "미국방 첨단사업 연구국",
"asia" => "아시아 - 태평양",
"coop" => "우리에 넣다",
"info" => "인포메이션",
"jobs" => "고용", 
"mobi" => "핸드폰",
"name" => "개인",
"post" => "우편 서비스",

"biz" => "비지니스",
"cat" => "카탈로니아의",
"com" => "기업",
"edu" => "교육기관",
"gal" => "갈리시아어",
"gov" => "미국 정부",
"int" => "국제기관",
"mil" => "미군",
"net" => "네트워크",
"org" => "비영리 단체",
"pro" => "전문가",
"tel" => "연락처",
"xxx" => "성욕을 자극하는",

"a1" => "익명 프록시 ",
"a2" => "위성 제공",
"ac" => "아센션섬",
"ad" => "안도라",
"ae" => "아랍 에미리트 연방",
"af" => "아프가니스탄",
"ag" => "앤티가 바부다",
"ai" => "안귤라",
"al" => "알바니아",
"am" => "아르메니아",
"an" => "네덜란드령 안티르",
"ao" => "앙골라",
"ap" => "아시아 - 태평양",
"aq" => "남극 대륙",
"ar" => "아르헨티나",
"as" => "아메리카령 사모아",
"at" => "오스트리아",
"au" => "오스트레일리아",
"aw" => "아르바",
"ax" => "올란드 제도",
"az" => "아제르바이잔",
"ba" => "보스니아 헤르체고비나",
"bb" => "바베이도스",
"bd" => "방글라데시",
"be" => "벨기에",
"bf" => "부르키나 파소",
"bg" => "불가리아",
"bh" => "바레인",
"bi" => "바룬디",
"bj" => "베냉",
"bm" => "버뮤다",
"bn" => "브루나이",
"bo" => "볼리비아",
"br" => "브라질",
"bs" => "바하마",
"bt" => "부탄",
"bw" => "보츠와나",
"by" => "벨로루시",
"bz" => "벨리즈",
"ca" => "캐나다",
"cc" => "코코스 제도",
"cd" => "콩고",
"cf" => "중앙아프리카 공화국",
"cg" => "콩고",
"ch" => "스위스",
"ci" => "코트디부아르",
"ck" => "쿡 제도",
"cl" => "칠레",
"cm" => "카메론",
"cn" => "중국",
"co" => "콜롬비아",
"cr" => "코스타리카",
"cu" => "쿠바",
"cv" => "카보베르데",
"cw" => "큐라",
"cx" => "크리스마스섬",
"cy" => "키프로스",
"cz" => "체코 공화국",
"de" => "독일",
"dj" => "지부티",
"dk" => "덴마크",
"dm" => "도미니카",
"do" => "도미니카 공화국",
"dz" => "알제리",
"ec" => "에콰도르",
"ee" => "에스토니아",
"eg" => "이집트",
"er" => "에리트레아",
"es" => "스페인",
"et" => "에티오피아",
"eu" => "유럽 연합",
"fi" => "핀란드",
"fj" => "피지",
"fk" => "포클랜드 제도",
"fm" => "미크로네시아",
"fo" => "파로에 제도",
"fr" => "프랑스",
"ga" => "가봉",
"gd" => "그레나다",
"ge" => "조지아",
"gf" => "프랑스령 기아나",
"gg" => "건지",
"gh" => "가나",
"gi" => "지브롤터",
"gl" => "그린란드",
"gm" => "감비아",
"gn" => "기니",
"gp" => "그아드르프섬",
"gq" => "적도 기니",
"gr" => "그리스",
"gs" => "남 조지아·남 샌드위치 제도",
"gt" => "과테말라",
"gu" => "괌",
"gw" => "키니비사우",
"gy" => "가이아나",
"hk" => "홍콩",
"hm" => "하드·맥도널드 제도",
"hn" => "온두라스",
"hr" => "크로아티아",
"ht" => "아이티",
"hu" => "헝가리",
"id" => "인도네시아",
"ie" => "아일랜드",
"il" => "이스라엘",
"im" => "맨섬",
"in" => "인도",
"io" => "이테리스령 인도양 지역",
"iq" => "이라크",
"ir" => "이란",
"is" => "아이슬란드",
"it" => "이탈리아",
"je" => "저지",
"jm" => "자메이카",
"jo" => "요르단",
"jp" => "일본",
"ke" => "케냐",
"kg" => "키르기스스탄",
"kh" => "캄보디아",
"ki" => "키리바시",
"km" => "코모로",
"kn" => "세인트 키츠 네비스",
"kp" => "북한",
"kr" => "한국",
"kw" => "쿠웨이트",
"ky" => "케이멘 제도",
"kz" => "카자흐스탄",
"la" => "라오스",
"lb" => "레바논",
"lc" => "세인트르시아",
"li" => "리히텐슈타인",
"lk" => "스리란카",
"lr" => "라이베리아",
"ls" => "레소토",
"lt" => "리투아니아",
"lu" => "룩셈브르크",
"lv" => "라트비아",
"ly" => "리비아",
"ma" => "모로코",
"mc" => "모나코",
"md" => "몰도바",
"me" => "몬테네그로",
"mg" => "마다가스카르",
"mh" => "마셜제도",
"mk" => "마케도니아",
"ml" => "말리",
"mm" => "미얀마",
"mn" => "몽골",
"mo" => "마카오",
"mp" => "마리아나 제도",
"mq" => "마르치니큐섬",
"mr" => "모리타니",
"ms" => "몬트세래트",
"mt" => "몰타",
"mu" => "모리셔스",
"mv" => "몰디브",
"mw" => "말라위",
"mx" => "멕시코",
"my" => "말레이시아",
"mz" => "모잠비크",
"na" => "나미비아",
"nc" => "뉴칼레도니아",
"ne" => "니제르",
"nf" => "노퍽",
"ng" => "나이지리아",
"ni" => "니카라과",
"nl" => "네덜란드",
"no" => "노르웨이",
"np" => "네팔",
"nr" => "나우루",
"nu" => "니웨",
"nz" => "뉴질렌드",
"om" => "오만",
"pa" => "마나마",
"pe" => "페루",
"pf" => "폴리네시아",
"pg" => "파푸아뉴기니",
"ph" => "필리핀",
"pk" => "파키스탄",
"pl" => "폴란드",
"pm" => "산피에르섬·미쿠론섬",
"pn" => "피트 케린섬",
"pr" => "루에르토리코",
"ps" => "팔레스타인",
"pt" => "포르투갈",
"pw" => "팔라우",
"py" => "파라과이",
"qa" => "카타르",
"re" => "레유니온",
"ro" => "루마니아",
"rs" => "세르비아",
"ru" => "러시아",
"rw" => "르완다",
"sa" => "사우디아라비아",
"sb" => "솔로몬 제도",
"sc" => "세이셸",
"sd" => "수단",
"se" => "스웨덴",
"sg" => "싱가포르",
"sh" => "?트헤레나섬",
"si" => "슬로베니아",
"sk" => "슬로바키아",
"sl" => "시에라리온",
"sm" => "산마리노",
"sn" => "세네갈",
"so" => "소말리아",
"sr" => "수리남",
"st" => "산트메·프린시피",
"su" => "소비엣 연방",
"sv" => "엘사바도르",
"sx" => "신트 마르텐", 
"sy" => "시리아",
"sz" => "스와질란드",
"tc" => "트럭-카이코스 제도",
"td" => "차드",
"tf" => "프랑스령 남방 제도",
"tg" => "토고",
"th" => "태국",
"tj" => "타지키스탄",
"tk" => "트케라우 제도",
"tl" => "동티모르",
"tm" => "투르크메니스탄",
"tn" => "튀니지",
"to" => "통가",
"tp" => "동티모르",
"tr" => "터키",
"tt" => "트리니다드토바고",
"tv" => "투발루",
"tw" => "타이완",
"tz" => "탄자니아",
"ua" => "우크라이나",
"ug" => "우간다",
"uk" => "영국",
"us" => "미국",
"uy" => "우루과이",
"uz" => "우즈베키스탄",
"va" => "바티칸국",
"vc" => "?트 빈센트 및 그레나디 제도",
"ve" => "베네수엘라",
"vg" => "버진아일랜드 (UK)",
"vi" => "버진아일랜드 (US)",
"vn" => "베트남",
"vu" => "바누아투",
"wf" => "와리스 및 후트나 제도",
"ws" => "사모아",
"ye" => "예멘",
"yt" => "마요테섬",
"za" => "남아프리카",
"zm" => "잠비아",
"zw" => "짐바브웨",

// No longer active but needed for history purpose
"bl" => "생바르텔레미",
"bv" => "브베섬",
"bq" => "캐리비안 네덜란드",
"cs" => "세르비아·몬테네그로",
"eh" => "서사하라",
"gb" => "연합 왕국",
"mf" => "생마르탱",
"sj" => "스바르바르드·얀마옌 제도",
"ss" => "남 수단",
"um" => "아메리카 변경 제도",
"yu" => "세르비아 몬테네그로",
"zr" => "자이르"
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
"global_titlebar"=> "에 대한 통계 %SERVER 에 생성 %DATE",
"global_bbclone_copyright" => "BBClone의 팀 - 아래 라이센스", 
"global_last_reset" => "통계는 마지막에 다시",
"global_yes" => "예",
"global_no" => "아니",

// The error messages
"error_cannot_see_config" =>
"BBClone의 설정이 잘못되었습니다.",

// Miscellaneous translations
"misc_other" => "그 외",
"misc_unknown" => "모름",
"misc_second_unit" => "초",
"misc_ignored" => "무시됨",

// The Navigation Bar
"navbar_main_site" => "홈페이지로",
"navbar_configuration" => "환경설정",
"navbar_global_stats" => "전체통계",
"navbar_detailed_stats" => "상세통계",
"navbar_time_stats" => "시간별통계",
"navbar_language" => "언어",
"navbar_go" => "가기",

// Detailed Stats words
"dstat_id" => "답하라",
"dstat_time" => "시간",
"dstat_visits" => "방문",
"dstat_extension" => "확장",
"dstat_dns" => "호스트이름",
"dstat_from" => "부터", 
"dstat_os" => "운영체제",
"dstat_browser" => "브라우저",
"dstat_visible_rows" => "액세스수",
"dstat_green_rows" => "녹색",
"dstat_blue_rows" => "파랑",
"dstat_red_rows" => "빨강",
"dstat_search" => "검색",
"dstat_last_page" => "마지막 페이지",
"dstat_last_visit" => "최종 방문",
"dstat_robots" => "검색로봇",
"dstat_my_visit" => "검색 로봇",
"dstat_no_data" => "데이터가 없습니다.",
"dstat_prx" => "프락시 서버",
"dstat_ip" => "IP 주소",
"dstat_user_agent" => "사용자 에이전트", 
"dstat_nr" => "수",
"dstat_pages" => "페이지",
"dstat_visit_length" => "이 방문",
"dstat_reloads" => "다시로드", 
"dstat_whois_information" => "이 IP 주소에 대한 정보를 조회",

// Global Stats words
"gstat_accesses" => "전체 접근 카운터",
"gstat_total_visits" => "전체 페이지 뷰",
"gstat_total_unique" => "전체 방문자",
"gstat_operating_systems" => "운영체계 순위 %d",
"gstat_browsers" => "브라우저 순위 %d",
"gstat_extensions" => "국가별 순위 %d",
"gstat_robots" => "검색로봇 순위 %d",
"gstat_pages" => "방문한 페이지 순위 %d",
"gstat_origins" => "리퍼러 순위 %d ",
"gstat_hosts" => "호스트 순위 %d",
"gstat_keys" => "키워드 순위 %d",
"gstat_total" => "전체",
"gstat_not_specified" => "지정되지 않음",

// Time Stats words
"tstat_su" => "일",
"tstat_mo" => "월",
"tstat_tu" => "화",
"tstat_we" => "수",
"tstat_th" => "목",
"tstat_fr" => "금",
"tstat_sa" => "토",

"tstat_full_su"=> "일요일",
"tstat_full_mo"=> "월요일",
"tstat_full_tu"=> "화요일",
"tstat_full_we"=> "수요일",
"tstat_full_th"=> "목요일",
"tstat_full_fr"=> "금요일",
"tstat_full_sa"=> "토요일",

"tstat_jan" => "1월",
"tstat_feb" => "2월",
"tstat_mar" => "3월",
"tstat_apr" => "4월",
"tstat_may" => "5월",
"tstat_jun" => "6월",
"tstat_jul" => "7월",
"tstat_aug" => "8월",
"tstat_sep" => "9월",
"tstat_oct" => "10월",
"tstat_nov" => "11월",
"tstat_dec" => "12월",

"tstat_full_jan"=> "1월",
"tstat_full_feb"=> "2월",
"tstat_full_mar"=> "월",
"tstat_full_apr"=> "4월",
"tstat_full_may"=> "월",
"tstat_full_jun"=> "6월",
"tstat_full_jul"=> "7월",
"tstat_full_aug"=> "8월",
"tstat_full_sep"=> "9월",
"tstat_full_oct"=> "10월",
"tstat_full_nov"=> "11월",
"tstat_full_dec"=> "12월",

"tstat_last_day" => "일간",
"tstat_last_week" => "주간",
"tstat_last_month" => "월간",
"tstat_last_year" => "년간",
"tstat_average" => "평균",

// Loadtime notice
"generated" => "에 생성 된 페이지 ",
"seconds" => " 초",

// Configuration page words and sentences
"config_variable_name" => "변수명",
"config_variable_value" => "변수값",
"config_explanations" => "설명",

"config_BBC_MAINSITE" =>
"이 변수가 세트 되었을 경우, 지정의 위치에 링크가 생성됩니다.디폴트는 친디렉토리입니다.당신의 주사이트가 다른 장소에 위치하는 경우, 거기에 맞추어 값을 변경해 주세요<br />
예:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;;<br />
\$BBC_MAINSITE = &quot;..&quot;;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"통계의 설정을 표시하는 것이 BBClone의 디폴트입니다.표시시키고 싶지 않은 경우는 공백으로 해 주세요<br />
예:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"모든 BBClone 페이지의 네비게이션 바에 표시되고 있는 타이틀
다음의 매크로를 사용할 수 있습니다:<br />
<ul>
<li>%SERVER: 서버명,</li>
<li>%DATE: 일자.</li>
</ul>
HTML 태그도 사용할 수 있습니다.<br />
예:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My stats from %DATE look like this:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBClone의 디폴트 언어 지정입니다.브라우저에 의해 명시적으로 지정이 없는 경우, 다음의 언어를 서포트합니다.
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb,
nl, pl, pt, pt-br, ro, ru, sk, sl, sv, th, tr, ua, zh-cn 과 zh-tw</p>",

"config_BBC_MAXTIME" =>
"이 변수는, 동일 액세스라고 보는 길이를 초에 정의합니다.2회의 액세스의 간격이 지정된 한계를 넘지 않는 이상 이 시간내에서의 동일 액세스는 1개의 액세스라고 보여집니다.디폴트는 30분 (1800초)입니다.다른 값을 할당할 수도 있습니다.<br />
예:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"상세한 통계로 표시하는 엔트리수.디폴트는 100입니다. 500(도움이 되지 않는다)을 넘은 설정은하지 마세요.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"변수 \$BBC_DETAILED_STAT_FIELDS 는 상세 통계에 표시하기 위한 컬럼을 결정합니다. 이용 가능한 컬럼명:
<ul>
<li>id => 카운트 개시부터 몇번째의 방문자인가</li>
<li>time => 최종 방문시간</li>
<li>visits => 동일 방문자의 액세스수</li>
<li>dns => 방문자의 호스트명</li>
<li>ip => 방문자의 IP주소</li>
<li>os => OS종별(가능하면 검색 로보트 등도)</li>
<li>browser => 접속에 이용된 소프트웨어</li>
<li>ext => 방문자의 국별 코드</li>
<li>referer => 방문자는 어디에서 왔는지 (가능한 경우)</li>
<li>page => 최종 방문 페이지</li>
<li>search => 방문자가 사용한 쿼리(가능한 경우)</li>
</ul>
컬럼을 어레인지 한 명령은 표시를 위해서도 사용됩니다.<br />
예:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"서버의 시계가 당신의 지역의 타임 존과 일치하지 않는 경우, 이 스윗치의 사용에 의해 수단위로 시간을 조절할 수가 있습니다.마이너스의 값은 시간을 되돌려, 플러스는 진행합니다.<br />
예:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"IP주소를 호스트명으로 변환하는지 어떤지의 옵션.사용하고 있는 DNS 서버가 늦은, 부하 제한을 하고 있다, 또는 신뢰성의 낮은 경우, 이름의 해결은 당신의 이용하고 있는 서버에에 부담을 줄지도 모릅니다.이 변수세트는 그 문제를 해결하기 위한의 것입니다.<br />
예:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"실제의 서버 운용에 있어 유익하다라고 생각되기 (위해)때문에, BBClone의 디폴트는 시간별 통계 중(안)에서 히트수를 나타내게 되어 있습니다.그러나, 당신의 시간 통계용으로 독특한 방문을 사용하는 편이 좋다면, 이 변수세트에 의해 세는 방법을 변경할 수가 있습니다.<br />
예:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"이 옵션은 특별한 IP주소 혹은 주소의 범위를 통계로부터 제외하기 위해서 사용할 수가 있습니다.세퍼레이터로서 콤마를 사용 할 수 있습니다.<br />
예:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"당신의 통계에 특정의 사이트로부터 온 액세스(리파라)를 제외할 수가 있습니다.복수의 키워드를 사용하는 경우는, 세퍼레이터로서 콤마를 사용해 주세요.<br />
예:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"검색 로보트를 어떻게 처리할까의 옵션.디폴트는, 「탑의 호스트 순위중에서는 무시해, 그 외의 통계 중(안)에서는 남긴다」입니다.어떤 검색 로보트도 보고 싶지 않으면, &quot;2&quot;입니다.사람의 방문만이, 카운트 되겠지요.<br />
예:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"이 옵션은, BBClone가 어떻게 1명의 방문객을 구별할까의 정의를 합니다.디폴트는 IP주소만(그것은 대부분의 경우 현실적)을 사용하는 것입니다.그렇지만, 당신의 방문객이 Proxy 서버를 사용하거나 하고 있는 경우, 이 옵션을 오프로 하는 것에 의해 보다 현실적인 통계를 제공할 수가 있습니다.<br />
예:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"통계를 리셋트 하고 싶은 경우는, 이 스윗치를 온으로 해, 다음의 액세스에 의해 그것들을 삭제할 수가 있습니다.바탕으로 되돌리는 일을 잊으면(자), 아마 비정상으로 낮은 트래픽을 경험하겠지요;) <br />
예:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"호스트와 리파라의 통계는 1회의 방문객의 방문에 의해 대량의 데이터를 생성합니다.이 스윗치를 온으로 하는 것에 의해, 이러한 엔트리를 제거해, 당신의 실제의 호스트 및 리파라의 랭킹에 영향을 주지 않고 , access.php의 사이즈를 작게 할 수가 있습니다.이 히트량은&quot;not_specified&quot;(종합 평점을 완전하게 해 두는 엔트리)에 더해지겠지요.<br />
예:<br />
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
