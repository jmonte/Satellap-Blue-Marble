<!DOCTYPE html>
<html lang="en-us">
<head>

<script type="text/javascript" src="<?php echo site_url('js/processing.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('js/processing-twitter.js'); ?>"></script>

<script type="text/javascript" src="<?php echo site_url('js/jquery-1.8.0.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('js/jquery-ui.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo site_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
<link href="<?php echo site_url('css/main.css') ?>" rel="stylesheet" media="screen">
 <title>Blue Marble</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script>
$(function() {
$( "#slider" ).slider({
  slide: function( event, ui ) {
    var  pjs2 = Processing.getInstanceById('mycanvas');
    pjs2.drawPercent(ui.value);
  },
  value : 100
});
});
</script>
</head>

<body>
	

	<img id="imagecanvas" src="<?php echo site_url('images/map.png'); ?>" />


<canvas  width="2127" height="1070" id="mycanvas" ></canvas>

<canvas  width="2127" height="1070" id="windEffect" ></canvas>


<div id="moreinfo">
<select id="missionsSelect">
    <option value="AS06" selected="selected" selected>AS06(127)</option>
    <option value="AS07">AS07(267)</option><option value="AS09">AS09(449)</option><option value="AS11">AS11(13)</option><option value="GEM04">GEM04(8)</option><option value="GEM05">GEM05(12)</option><option value="GEM07">GEM07(1)</option><option value="GEM09">GEM09(4)</option><option value="ISS001">ISS001(2498)</option><option value="ISS002">ISS002(5940)</option><option value="ISS003">ISS003(174)</option><option value="ISS004">ISS004(2356)</option><option value="ISS005">ISS005(146)</option><option value="ISS006">ISS006(194)</option><option value="ISS007">ISS007(224)</option><option value="ISS008">ISS008(46)</option><option value="ISS009">ISS009(33)</option><option value="ISS010">ISS010(38)</option><option value="ISS011">ISS011(23)</option><option value="ISS012">ISS012(23)</option><option value="ISS013">ISS013(41)</option><option value="ISS014">ISS014(29)</option><option value="ISS015">ISS015(26)</option><option value="ISS016">ISS016(29)</option><option value="ISS017">ISS017(28)</option><option value="ISS018">ISS018(24)</option><option value="ISS019">ISS019(9)</option><option value="ISS020">ISS020(19)</option><option value="ISS021">ISS021(8)</option><option value="ISS022">ISS022(15)</option><option value="ISS023">ISS023(13)</option><option value="ISS024">ISS024(14)</option><option value="ISS025">ISS025(11)</option><option value="ISS026">ISS026(21)</option><option value="ISS027">ISS027(18)</option><option value="ISS028">ISS028(21)</option><option value="ISS029">ISS029(7)</option><option value="ISS030">ISS030(25)</option><option value="ISS031">ISS031(8)</option><option value="ISS032">ISS032(9)</option><option value="ISS033">ISS033(13)</option><option value="ISS034">ISS034(11)</option><option value="ISS035">ISS035(3)</option><option value="NASA6">NASA6(33)</option><option value="NASA7">NASA7(1821)</option><option value="NM21">NM21(128)</option><option value="NM22">NM22(84)</option><option value="NM23">NM23(152)</option><option value="SL2">SL2(273)</option><option value="SL3">SL3(557)</option><option value="SL4">SL4(1072)</option><option value="STS001">STS001(326)</option><option value="STS002">STS002(648)</option><option value="STS003">STS003(408)</option><option value="STS004">STS004(340)</option><option value="STS005">STS005(575)</option><option value="STS006">STS006(307)</option><option value="STS007">STS007(640)</option><option value="STS008">STS008(1588)</option><option value="STS009">STS009(1869)</option><option value="STS026">STS026(1342)</option><option value="STS027">STS027(1380)</option><option value="STS028">STS028(3309)</option><option value="STS029">STS029(1432)</option><option value="STS030">STS030(1737)</option><option value="STS031">STS031(1654)</option><option value="STS032">STS032(1489)</option><option value="STS033">STS033(1762)</option><option value="STS034">STS034(1009)</option><option value="STS035">STS035(1157)</option><option value="STS036">STS036(2051)</option><option value="STS037">STS037(3323)</option><option value="STS038">STS038(1752)</option><option value="STS039">STS039(2437)</option><option value="STS040">STS040(2113)</option><option value="STS041">STS041(1599)</option><option value="STS042">STS042(2319)</option><option value="STS043">STS043(3112)</option><option value="STS044">STS044(1527)</option><option value="STS045">STS045(3119)</option><option value="STS046">STS046(1629)</option><option value="STS047">STS047(4760)</option><option value="STS048">STS048(2697)</option><option value="STS049">STS049(1906)</option><option value="STS050">STS050(3223)</option><option value="STS051">STS051(1502)</option><option value="STS052">STS052(2363)</option><option value="STS053">STS053(1285)</option><option value="STS054">STS054(1434)</option><option value="STS055">STS055(3720)</option><option value="STS056">STS056(5194)</option><option value="STS057">STS057(2238)</option><option value="STS058">STS058(3529)</option><option value="STS059">STS059(8947)</option><option value="STS060">STS060(2763)</option><option value="STS061">STS061(2001)</option><option value="STS062">STS062(5483)</option><option value="STS063">STS063(875)</option><option value="STS064">STS064(3009)</option><option value="STS065">STS065(2302)</option><option value="STS066">STS066(4090)</option><option value="STS067">STS067(4550)</option><option value="STS068">STS068(9673)</option><option value="STS069">STS069(2013)</option><option value="STS070">STS070(1804)</option><option value="STS071">STS071(681)</option><option value="STS072">STS072(1170)</option><option value="STS073">STS073(5083)</option><option value="STS074">STS074(1856)</option><option value="STS075">STS075(3334)</option><option value="STS076">STS076(2261)</option><option value="STS077">STS077(3563)</option><option value="STS078">STS078(166)</option><option value="STS079">STS079(117)</option><option value="STS080">STS080(98)</option><option value="STS081">STS081(131)</option><option value="STS082">STS082(12)</option><option value="STS083">STS083(35)</option><option value="STS084">STS084(60)</option><option value="STS085">STS085(182)</option><option value="STS086">STS086(8)</option><option value="STS087">STS087(94)</option><option value="STS088">STS088(1346)</option><option value="STS089">STS089(26)</option><option value="STS090">STS090(296)</option><option value="STS091">STS091(76)</option><option value="STS092">STS092(2166)</option><option value="STS093">STS093(1232)</option><option value="STS094">STS094(85)</option><option value="STS095">STS095(73)</option><option value="STS096">STS096(1012)</option><option value="STS097">STS097(745)</option><option value="STS098">STS098(2642)</option><option value="STS099">STS099(4118)</option><option value="STS100">STS100(2256)</option><option value="STS101">STS101(1067)</option><option value="STS102">STS102(1530)</option><option value="STS103">STS103(1545)</option><option value="STS104">STS104(1277)</option><option value="STS105">STS105(1504)</option><option value="STS106">STS106(2108)</option><option value="STS107">STS107(1)</option><option value="STS108">STS108(1403)</option><option value="STS109">STS109(1612)</option><option value="STS110">STS110(653)</option><option value="STS111">STS111(2797)</option><option value="STS112">STS112(21)</option><option value="STS113">STS113(3)</option><option value="STS118">STS118(1)</option><option value="STS125">STS125(1)</option><option value="STS129">STS129(1)</option><option value="STS131">STS131(3)</option><option value="STS41B">STS41B(1093)</option><option value="STS41C">STS41C(1187)</option><option value="STS41D">STS41D(1049)</option><option value="STS41G">STS41G(2009)</option><option value="STS51A">STS51A(1321)</option><option value="STS51B">STS51B(1826)</option><option value="STS51C">STS51C(634)</option><option value="STS51D">STS51D(980)</option><option value="STS51F">STS51F(1067)</option><option value="STS51G">STS51G(1349)</option><option value="STS51I">STS51I(1008)</option><option value="STS51J">STS51J(875)</option><option value="STS61A">STS61A(3075)</option><option value="STS61B">STS61B(2172)</option><option value="STS61C">STS61C(1833)</option></select>
    

<select id="geonSelect"><option value="">---</value>
  <option value="ADRIATIC SEA">ADRIATIC SEA(11)</option><option value="AEGEAN SEA">AEGEAN SEA(1)</option><option value="AFGHANISTAN">AFGHANISTAN(327)</option><option value="AFRICA">AFRICA(49)</option><option value="ALBANIA">ALBANIA(74)</option><option value="ALGERIA">ALGERIA(2159)</option><option value="ANDAMAN ISLANDS">ANDAMAN ISLANDS(164)</option><option value="ANDAMAN SEA">ANDAMAN SEA(4)</option><option value="ANDORRA">ANDORRA(5)</option><option value="ANGOLA">ANGOLA(782)</option><option value="ANTARCTICA">ANTARCTICA(15)</option><option value="ARABIAN SEA">ARABIAN SEA(115)</option><option value="ARGENTINA">ARGENTINA(4502)</option><option value="ARMENIA">ARMENIA(49)</option><option value="ASIA">ASIA(11)</option><option value="ATLANTIC OCEAN">ATLANTIC OCEAN(350)</option><option value="ATLANTIC OCEAN I(S).">ATLANTIC OCEAN I(S).(55)</option><option value="AUSTRALIA">AUSTRALIA(260)</option><option value="AUSTRALIA-ACT">AUSTRALIA-ACT(1)</option><option value="AUSTRALIA-NSW">AUSTRALIA-NSW(939)</option><option value="AUSTRALIA-NT">AUSTRALIA-NT(1752)</option><option value="AUSTRALIA-Q">AUSTRALIA-Q(3781)</option><option value="AUSTRALIA-SA">AUSTRALIA-SA(1698)</option><option value="AUSTRALIA-T">AUSTRALIA-T(225)</option><option value="AUSTRALIA-V">AUSTRALIA-V(282)</option><option value="AUSTRALIA-WA">AUSTRALIA-WA(4664)</option><option value="AUSTRIA">AUSTRIA(159)</option><option value="AZERBAIJAN">AZERBAIJAN(178)</option><option value="AZORES">AZORES(115)</option><option value="BAHAMAS">BAHAMAS(2032)</option><option value="BAHRAIN">BAHRAIN(84)</option><option value="BALEARIC ISLANDS">BALEARIC ISLANDS(168)</option><option value="BALTIC SEA">BALTIC SEA(8)</option><option value="BANGLADESH">BANGLADESH(458)</option><option value="BAY OF BENGAL">BAY OF BENGAL(41)</option><option value="BAY OF BISCAY">BAY OF BISCAY(1)</option><option value="BELARUS">BELARUS(72)</option><option value="BELGIUM">BELGIUM(25)</option><option value="BELIZE">BELIZE(192)</option><option value="BENIN">BENIN(36)</option><option value="BERING SEA">BERING SEA(13)</option><option value="BERMUDA">BERMUDA(68)</option><option value="BHUTAN">BHUTAN(71)</option><option value="BLACK SEA">BLACK SEA(27)</option><option value="BOLIVIA">BOLIVIA(1975)</option><option value="BOSNIA-HERZEGOVINA">BOSNIA-HERZEGOVINA(47)</option><option value="BOTSWANA">BOTSWANA(634)</option><option value="BOUVET ISLAND">BOUVET ISLAND(6)</option><option value="BRAZIL">BRAZIL(9896)</option><option value="BRUNEI">BRUNEI(15)</option><option value="BULGARIA">BULGARIA(69)</option><option value="BURKINA FASO">BURKINA FASO(25)</option><option value="BURUNDI">BURUNDI(24)</option><option value="CAMBODIA">CAMBODIA(282)</option><option value="CAMEROON">CAMEROON(280)</option><option value="CANADA">CANADA(44)</option><option value="CANADA-A">CANADA-A(527)</option><option value="CANADA-BC">CANADA-BC(1069)</option><option value="CANADA-M">CANADA-M(800)</option><option value="CANADA-N">CANADA-N(761)</option><option value="CANADA-NB">CANADA-NB(183)</option><option value="CANADA-NS">CANADA-NS(350)</option><option value="CANADA-NT">CANADA-NT(149)</option><option value="CANADA-O">CANADA-O(1380)</option><option value="CANADA-PEI">CANADA-PEI(105)</option><option value="CANADA-Q">CANADA-Q(1464)</option><option value="CANADA-S">CANADA-S(506)</option><option value="CANADA-YT">CANADA-YT(52)</option><option value="CANARY ISLANDS">CANARY ISLANDS(738)</option><option value="CAPE VERDE ISLANDS">CAPE VERDE ISLANDS(400)</option><option value="CARIBBEAN SEA">CARIBBEAN SEA(112)</option><option value="CAROLINE ISLANDS">CAROLINE ISLANDS(174)</option><option value="CASPIAN SEA">CASPIAN SEA(10)</option><option value="CAYMAN ISLANDS">CAYMAN ISLANDS(84)</option><option value="CENTRAL AFRICAN REP.">CENTRAL AFRICAN REP.(108)</option><option value="CENTRAL AMERICA">CENTRAL AMERICA(13)</option><option value="CHAD">CHAD(1799)</option><option value="CHAGOS ARCHIPELAGO">CHAGOS ARCHIPELAGO(64)</option><option value="CHANNEL ISLANDS">CHANNEL ISLANDS(9)</option><option value="CHILE">CHILE(2490)</option><option value="CHINA">CHINA(8310)</option><option value="CLOUDS">CLOUDS(44)</option><option value="COLOMBIA">COLOMBIA(1089)</option><option value="COMOROS">COMOROS(164)</option><option value="CONGO">CONGO(104)</option><option value="COOK ISLANDS">COOK ISLANDS(108)</option><option value="CORAL SEA">CORAL SEA(159)</option><option value="CORSICA">CORSICA(95)</option><option value="COSTA RICA">COSTA RICA(432)</option><option value="CRETE">CRETE(215)</option><option value="CROATIA">CROATIA(222)</option><option value="CROZET ISLANDS">CROZET ISLANDS(14)</option><option value="CUBA">CUBA(1579)</option><option value="CYPRUS">CYPRUS(197)</option><option value="CZECH REPUBLIC">CZECH REPUBLIC(16)</option><option value="DEM. REP. OF CONGO">DEM. REP. OF CONGO(1277)</option><option value="DENMARK">DENMARK(297)</option><option value="DJIBOUTI">DJIBOUTI(229)</option><option value="DOMINICAN REPUBLIC">DOMINICAN REPUBLIC(584)</option><option value="EAST CHINA SEA">EAST CHINA SEA(3)</option><option value="EASTER ISLAND">EASTER ISLAND(28)</option><option value="ECUADOR">ECUADOR(182)</option><option value="EGYPT">EGYPT(4483)</option><option value="EL SALVADOR">EL SALVADOR(287)</option><option value="EQUATORIAL GUINEA">EQUATORIAL GUINEA(9)</option><option value="ERITREA">ERITREA(47)</option><option value="ESTONIA">ESTONIA(45)</option><option value="ETHIOPIA">ETHIOPIA(1740)</option><option value="EUROPE">EUROPE(16)</option><option value="FALKLAND ISLANDS">FALKLAND ISLANDS(192)</option><option value="FEDERAL REPUBLIC OF YUGOSLAVIA">FEDERAL REPUBLIC OF YUGOSLAVIA(26)</option><option value="FIJI ISLANDS">FIJI ISLANDS(315)</option><option value="FINLAND">FINLAND(3)</option><option value="FRANCE">FRANCE(1153)</option><option value="FRENCH GUIANA">FRENCH GUIANA(144)</option><option value="GABON">GABON(109)</option><option value="GALAPAGOS ISLANDS">GALAPAGOS ISLANDS(798)</option><option value="GAMBIA">GAMBIA(79)</option><option value="GEORGIA">GEORGIA(127)</option><option value="GERMANY">GERMANY(403)</option><option value="GHANA">GHANA(255)</option><option value="GREECE">GREECE(912)</option><option value="GREENLAND">GREENLAND(125)</option><option value="GUATEMALA">GUATEMALA(233)</option><option value="GUINEA">GUINEA(109)</option><option value="GUINEA-BISSAU">GUINEA-BISSAU(111)</option><option value="GULF OF ADEN">GULF OF ADEN(116)</option><option value="GULF OF CALIFORNIA">GULF OF CALIFORNIA(38)</option><option value="GULF OF GUINEA">GULF OF GUINEA(10)</option><option value="GULF OF MEXICO">GULF OF MEXICO(94)</option><option value="GULF OF OMAN">GULF OF OMAN(32)</option><option value="GULF OF PANAMA">GULF OF PANAMA(1)</option><option value="GULF OF ST. LAWRENCE">GULF OF ST. LAWRENCE(10)</option><option value="GULF OF THAILAND">GULF OF THAILAND(5)</option><option value="GULF OF TONKIN">GULF OF TONKIN(1)</option><option value="GUYANA">GUYANA(199)</option><option value="HAITI">HAITI(459)</option><option value="HONDURAS">HONDURAS(411)</option><option value="HOWLAND ISLAND">HOWLAND ISLAND(1)</option><option value="HUNGARY">HUNGARY(123)</option><option value="ICELAND">ICELAND(13)</option><option value="INDIA">INDIA(4417)</option><option value="INDIAN OCEAN">INDIAN OCEAN(243)</option><option value="INDIAN OCEAN I(S).">INDIAN OCEAN I(S).(110)</option><option value="INDONESIA">INDONESIA(3305)</option><option value="INDONESIA-B">INDONESIA-B(280)</option><option value="INDONESIA-C">INDONESIA-C(263)</option><option value="INDONESIA-J">INDONESIA-J(435)</option><option value="INDONESIA-S">INDONESIA-S(328)</option><option value="INDONESIA-WNG">INDONESIA-WNG(281)</option><option value="IONIAN SEA">IONIAN SEA(16)</option><option value="IRAN">IRAN(2016)</option><option value="IRAQ">IRAQ(812)</option><option value="IRELAND">IRELAND(167)</option><option value="IRISH SEA">IRISH SEA(9)</option><option value="ISRAEL">ISRAEL(499)</option><option value="ITALY">ITALY(1928)</option><option value="IVORY COAST">IVORY COAST(120)</option><option value="JAMAICA">JAMAICA(241)</option><option value="JAPAN">JAPAN(2204)</option><option value="JAVA SEA">JAVA SEA(6)</option><option value="JOHNSTON ATOLL">JOHNSTON ATOLL(3)</option><option value="JORDAN">JORDAN(262)</option><option value="KAZAKHSTAN">KAZAKHSTAN(3049)</option><option value="KENYA">KENYA(1015)</option><option value="KERGUELEN ILES">KERGUELEN ILES(54)</option><option value="KIRIBATI">KIRIBATI(472)</option><option value="KUWAIT">KUWAIT(309)</option><option value="KYRGYZSTAN">KYRGYZSTAN(386)</option><option value="LABRADOR SEA">LABRADOR SEA(2)</option><option value="LACCADIVE SEA">LACCADIVE SEA(6)</option><option value="LAKSHADWEEP ISLANDS">LAKSHADWEEP ISLANDS(52)</option><option value="LAND">LAND(3)</option><option value="LAOS">LAOS(179)</option><option value="LATVIA">LATVIA(78)</option><option value="LEBANON">LEBANON(115)</option><option value="LESOTHO">LESOTHO(55)</option><option value="LESSER ANTILLES">LESSER ANTILLES(637)</option><option value="LIBERIA">LIBERIA(47)</option><option value="LIBYA">LIBYA(1992)</option><option value="LITHUANIA">LITHUANIA(37)</option><option value="LOYALTY ISLANDS">LOYALTY ISLANDS(68)</option><option value="MACEDONIA">MACEDONIA(12)</option><option value="MADAGASCAR">MADAGASCAR(3219)</option><option value="MADEIRA ISLANDS">MADEIRA ISLANDS(62)</option><option value="MALAWI">MALAWI(270)</option><option value="MALAYSIA">MALAYSIA(721)</option><option value="MALDIVES">MALDIVES(367)</option><option value="MALI">MALI(942)</option><option value="MALTA">MALTA(36)</option><option value="MARQUESAS ISLANDS">MARQUESAS ISLANDS(164)</option><option value="MARSHALL ISLANDS">MARSHALL ISLANDS(385)</option><option value="MAURITANIA">MAURITANIA(935)</option><option value="MAURITIUS">MAURITIUS(191)</option><option value="MEDITERRANEAN SEA">MEDITERRANEAN SEA(254)</option><option value="MEDITERRANEAN SEA IS.">MEDITERRANEAN SEA IS.(1)</option><option value="MEXICO">MEXICO(8431)</option><option value="MOLDOVA">MOLDOVA(23)</option><option value="MONGOLIA">MONGOLIA(1084)</option><option value="MOROCCO">MOROCCO(1088)</option><option value="MOZAMBIQUE">MOZAMBIQUE(1945)</option><option value="MOZAMBIQUE CHANNEL">MOZAMBIQUE CHANNEL(123)</option><option value="MYANMAR (BURMA)">MYANMAR (BURMA)(1317)</option><option value="NAMIBIA">NAMIBIA(2318)</option><option value="NAURU">NAURU(4)</option><option value="NEPAL">NEPAL(480)</option><option value="NETHERLANDS">NETHERLANDS(195)</option><option value="NETHERLANDS ANTILLES">NETHERLANDS ANTILLES(41)</option><option value="NEW CALEDONIA">NEW CALEDONIA(468)</option><option value="NEW ZEALAND">NEW ZEALAND(353)</option><option value="NEW ZEALAND ISLANDS">NEW ZEALAND ISLANDS(6)</option><option value="NEW ZEALAND-NI">NEW ZEALAND-NI(547)</option><option value="NEW ZEALAND-SI">NEW ZEALAND-SI(945)</option><option value="NICARAGUA">NICARAGUA(661)</option><option value="NICOBAR ISLANDS">NICOBAR ISLANDS(41)</option><option value="NIGER">NIGER(735)</option><option value="NIGERIA">NIGERIA(721)</option><option value="NORTH KOREA">NORTH KOREA(300)</option><option value="NORTH SEA">NORTH SEA(5)</option><option value="NORTHERN MARIANA IS.">NORTHERN MARIANA IS.(133)</option><option value="NORWAY">NORWAY(75)</option><option value="OCEAN">OCEAN(3)</option><option value="OMAN">OMAN(1264)</option><option value="PACIFIC OCEAN">PACIFIC OCEAN(353)</option><option value="PACIFIC OCEAN I(S).">PACIFIC OCEAN I(S).(231)</option><option value="PAKISTAN">PAKISTAN(1275)</option><option value="PANAMA">PANAMA(735)</option><option value="PAPUA NEW GUINEA">PAPUA NEW GUINEA(1031)</option><option value="PARACEL ISLANDS">PARACEL ISLANDS(12)</option><option value="PARAGUAY">PARAGUAY(422)</option><option value="PERSIAN GULF">PERSIAN GULF(175)</option><option value="PERU">PERU(2414)</option><option value="PHILIPPINE SEA">PHILIPPINE SEA(14)</option><option value="PHILIPPINES">PHILIPPINES(1907)</option><option value="PITCAIRN ISLANDS">PITCAIRN ISLANDS(8)</option><option value="POLAND">POLAND(208)</option><option value="PORTUGAL">PORTUGAL(300)</option><option value="PUERTO RICO">PUERTO RICO(304)</option><option value="QATAR">QATAR(134)</option><option value="RED SEA">RED SEA(210)</option><option value="REPUBLIC SOUTH AFRICA">REPUBLIC SOUTH AFRICA(2650)</option><option value="REUNION">REUNION(183)</option><option value="ROMANIA">ROMANIA(260)</option><option value="RUSSIAN FEDERATION">RUSSIAN FEDERATION(7850)</option><option value="RWANDA">RWANDA(14)</option><option value="SAMOA ISLANDS">SAMOA ISLANDS(72)</option><option value="SAO TOME AND PRINCIPE">SAO TOME AND PRINCIPE(3)</option><option value="SARDINIA">SARDINIA(128)</option><option value="SAUDI ARABIA">SAUDI ARABIA(2850)</option><option value="SEA OF JAPAN">SEA OF JAPAN(7)</option><option value="SEA OF OKHOTSK">SEA OF OKHOTSK(49)</option><option value="SENEGAL">SENEGAL(392)</option><option value="SERBIA">SERBIA(1)</option><option value="SEYCHELLES">SEYCHELLES(208)</option><option value="SICILY">SICILY(532)</option><option value="SIERRA LEONE">SIERRA LEONE(41)</option><option value="SINGAPORE">SINGAPORE(28)</option><option value="SLOVAKIA">SLOVAKIA(34)</option><option value="SLOVENIA">SLOVENIA(29)</option><option value="SOCIETY ISLANDS">SOCIETY ISLANDS(267)</option><option value="SOCOTRA">SOCOTRA(177)</option><option value="SOLOMON ISLANDS">SOLOMON ISLANDS(273)</option><option value="SOMALIA">SOMALIA(1589)</option><option value="SOUTH AMERICA">SOUTH AMERICA(20)</option><option value="SOUTH CHINA SEA">SOUTH CHINA SEA(51)</option><option value="SOUTH GEORGIA IS.">SOUTH GEORGIA IS.(39)</option><option value="SOUTH KOREA">SOUTH KOREA(390)</option><option value="SPAIN">SPAIN(1479)</option><option value="SRI LANKA">SRI LANKA(579)</option><option value="SUDAN">SUDAN(2359)</option><option value="SULU SEA">SULU SEA(13)</option><option value="SURINAME">SURINAME(215)</option><option value="SWAZILAND">SWAZILAND(35)</option><option value="SWEDEN">SWEDEN(241)</option><option value="SWITZERLAND">SWITZERLAND(392)</option><option value="SYRIA">SYRIA(486)</option><option value="TAIWAN">TAIWAN(323)</option><option value="TAJIKISTAN">TAJIKISTAN(203)</option><option value="TANZANIA">TANZANIA(1382)</option><option value="TASMAN SEA">TASMAN SEA(6)</option><option value="THAILAND">THAILAND(747)</option><option value="TIMOR SEA">TIMOR SEA(1)</option><option value="TOGO">TOGO(27)</option><option value="TOKELAU">TOKELAU(18)</option><option value="TONGA">TONGA(92)</option><option value="TRINIDAD AND TOBAGO">TRINIDAD AND TOBAGO(37)</option><option value="TUAMOTU ARCHIPELAGO">TUAMOTU ARCHIPELAGO(712)</option><option value="TUBUAI ISLANDS">TUBUAI ISLANDS(27)</option><option value="TUNISIA">TUNISIA(397)</option><option value="TURKEY">TURKEY(1770)</option><option value="TURKMENISTAN">TURKMENISTAN(812)</option><option value="TURKS AND CAICOS IS.">TURKS AND CAICOS IS.(246)</option><option value="TUVALU">TUVALU(48)</option><option value="UGANDA">UGANDA(276)</option><option value="UK-ENGLAND">UK-ENGLAND(422)</option><option value="UK-NORTHERN IRELAND">UK-NORTHERN IRELAND(23)</option><option value="UK-ORKNEY ISLANDS">UK-ORKNEY ISLANDS(6)</option><option value="UK-SCOTLAND">UK-SCOTLAND(216)</option><option value="UK-SHETLAND ISLANDS">UK-SHETLAND ISLANDS(3)</option><option value="UK-WALES">UK-WALES(73)</option><option value="UKRAINE">UKRAINE(682)</option><option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES(424)</option><option value="UNITED KINGDOM">UNITED KINGDOM(1)</option><option value="URUGUAY">URUGUAY(225)</option><option value="USA">USA(59)</option><option value="USA-ALABAMA">USA-ALABAMA(270)</option><option value="USA-ALASKA">USA-ALASKA(1083)</option><option value="USA-ARIZONA">USA-ARIZONA(868)</option><option value="USA-ARKANSAS">USA-ARKANSAS(179)</option><option value="USA-CALIFORNIA">USA-CALIFORNIA(3255)</option><option value="USA-COLORADO">USA-COLORADO(886)</option><option value="USA-CONNECTICUT">USA-CONNECTICUT(70)</option><option value="USA-DC">USA-DC(33)</option><option value="USA-DELAWARE">USA-DELAWARE(73)</option><option value="USA-FLORIDA">USA-FLORIDA(3136)</option><option value="USA-GEORGIA">USA-GEORGIA(288)</option><option value="USA-HAWAII">USA-HAWAII(2924)</option><option value="USA-IDAHO">USA-IDAHO(257)</option><option value="USA-ILLINOIS">USA-ILLINOIS(381)</option><option value="USA-INDIANA">USA-INDIANA(183)</option><option value="USA-IOWA">USA-IOWA(90)</option><option value="USA-KANSAS">USA-KANSAS(271)</option><option value="USA-KENTUCKY">USA-KENTUCKY(149)</option><option value="USA-LOUISIANA">USA-LOUISIANA(936)</option><option value="USA-MAINE">USA-MAINE(184)</option><option value="USA-MARYLAND">USA-MARYLAND(345)</option><option value="USA-MASSACHUSETTS">USA-MASSACHUSETTS(670)</option><option value="USA-MICHIGAN">USA-MICHIGAN(1057)</option><option value="USA-MINNESOTA">USA-MINNESOTA(299)</option><option value="USA-MISSISSIPPI">USA-MISSISSIPPI(205)</option><option value="USA-MISSOURI">USA-MISSOURI(314)</option><option value="USA-MONTANA">USA-MONTANA(485)</option><option value="USA-NEBRASKA">USA-NEBRASKA(266)</option><option value="USA-NEVADA">USA-NEVADA(554)</option><option value="USA-NEW HAMPSHIRE">USA-NEW HAMPSHIRE(39)</option><option value="USA-NEW JERSEY">USA-NEW JERSEY(256)</option><option value="USA-NEW MEXICO">USA-NEW MEXICO(752)</option><option value="USA-NEW YORK">USA-NEW YORK(937)</option><option value="USA-NORTH CAROLINA">USA-NORTH CAROLINA(590)</option><option value="USA-NORTH DAKOTA">USA-NORTH DAKOTA(218)</option><option value="USA-OHIO">USA-OHIO(292)</option><option value="USA-OKLAHOMA">USA-OKLAHOMA(397)</option><option value="USA-OREGON">USA-OREGON(497)</option><option value="USA-PENNSYLVANIA">USA-PENNSYLVANIA(265)</option><option value="USA-RHODE ISLAND">USA-RHODE ISLAND(73)</option><option value="USA-SOUTH CAROLINA">USA-SOUTH CAROLINA(281)</option><option value="USA-SOUTH DAKOTA">USA-SOUTH DAKOTA(267)</option><option value="USA-TENNESSEE">USA-TENNESSEE(210)</option><option value="USA-TEXAS">USA-TEXAS(2703)</option><option value="USA-UTAH">USA-UTAH(913)</option><option value="USA-VERMONT">USA-VERMONT(23)</option><option value="USA-VIRGINIA">USA-VIRGINIA(566)</option><option value="USA-WASHINGTON">USA-WASHINGTON(796)</option><option value="USA-WEST VIRGINIA">USA-WEST VIRGINIA(99)</option><option value="USA-WISCONSIN">USA-WISCONSIN(355)</option><option value="USA-WYOMING">USA-WYOMING(343)</option><option value="UZBEKISTAN">UZBEKISTAN(620)</option><option value="VANUATU">VANUATU(124)</option><option value="VENEZUELA">VENEZUELA(1598)</option><option value="VIETNAM">VIETNAM(925)</option><option value="VOLCANO ISLANDS">VOLCANO ISLANDS(28)</option><option value="WAKE ISLAND">WAKE ISLAND(4)</option><option value="WALLIS ISLANDS">WALLIS ISLANDS(20)</option><option value="WESTERN SAHARA">WESTERN SAHARA(480)</option><option value="YELLOW SEA">YELLOW SEA(7)</option><option value="YEMEN">YEMEN(1023)</option><option value="YUGOSLAVIA">YUGOSLAVIA(32)</option><option value="ZAMBIA">ZAMBIA(694)</option><option value="ZIMBABWE">ZIMBABWE(661)</option></select>

<div id="nearestImage" class="btn btn-medium">Nearest</div>

<div id="slider"></div>
<div id="imagePreview"></div>
    <div id="clearImagePreview">Clear</div>

  
</div>
<script type="text/javascript">
/*
 * jQuery UI Touch Punch 0.2.2
 *
 * Copyright 2011, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
(function(b){b.support.touch="ontouchend" in document;if(!b.support.touch){return;}var c=b.ui.mouse.prototype,e=c._mouseInit,a;function d(g,h){if(g.originalEvent.touches.length>1){return;}g.preventDefault();var i=g.originalEvent.changedTouches[0],f=document.createEvent("MouseEvents");f.initMouseEvent(h,true,true,window,1,i.screenX,i.screenY,i.clientX,i.clientY,false,false,false,false,0,null);g.target.dispatchEvent(f);}c._touchStart=function(g){var f=this;if(a||!f._mouseCapture(g.originalEvent.changedTouches[0])){return;}a=true;f._touchMoved=false;d(g,"mouseover");d(g,"mousemove");d(g,"mousedown");};c._touchMove=function(f){if(!a){return;}this._touchMoved=true;d(f,"mousemove");};c._touchEnd=function(f){if(!a){return;}d(f,"mouseup");d(f,"mouseout");if(!this._touchMoved){d(f,"click");}a=false;};c._mouseInit=function(){var f=this;f.element.bind("touchstart",b.proxy(f,"_touchStart")).bind("touchmove",b.proxy(f,"_touchMove")).bind("touchend",b.proxy(f,"_touchEnd"));e.call(f);};})(jQuery);
</script>

<script>


</script>

<script>
var uivars = {
  imageCount : 0,
  urlCount : 0,
  tagCount : 0,
  noneCount : 0,
  totalTweet : 0,
  width : $(window).width(),
  height : document.getElementById('imagecanvas').offsetHeight,
  languages : []
};
</script>
<script type="text/processing" data-processing-target="mycanvas">




ArrayList points;

int[] colors = new int[4];


int[] lines = new int[4];


void setup() {
  background(255 , 0);
  smooth();
  noFill();
  if( uivars.height < 10) {
    size( uivars.width , 600 );  
  } else {
    size( uivars.width , uivars.height );
  }
  
  rectMode(CENTER);
  points = new ArrayList(); 
  
}

void drawPercent( int percent ) {
   background(255 , 0);
  int num = points.size() * percent / 100 ;
  if( num < 1 ) num = 1;
  for( int i = 0 ; i < num ; i++) {
    Point pt = (Point) points.get(i);
    pt.draw();
    if( i >= 1) {
      stroke(0x11FF1300 , 75 );
      strokeWeight(3);
      Point pt2 = (Point) points.get(i - 1);
      line( pt.x , pt.y , pt2.x , pt2.y);
    }
  }
}

Point addPoint(int x, int y , int type , String url) {
  Point pt = new Point(x,y , type , url);

  points.add(pt);
  pt.draw();

  if( points.size() > 1) {
    stroke(0x11FF1300 , 75 );
    strokeWeight(3);
    Point pt2 = (Point) points.get(points.size() - 2);
    line( pt.x , pt.y , pt2.x , pt2.y);
  }
  return pt; 
}


  void mousePressed() {
  	clearImage();
  	for(int p=0, end=points.size(); p<end; p++) {

	    Point pt = (Point) points.get(p);
	    if( mouseX >= pt.x-15 && mouseX <= pt.x+15 &&
	        mouseY >= pt.y-15 && mouseY <= pt.y+15  ) {
        console.log(pt.url);
	    	addImage(pt.url,pt.type);
	    }
	  }
  }


class Point {
  
  int x,y , type, id;
  String url;
    	PImage b;

  Point(int x, int y , int type, String url) { 
    this.x=x; 
    this.y=y; 
    this.type = type;
    this.url = url;
  }

  void draw() {
 	  alpha(0.3);
    stroke(#A9E4FF, 222);
    strokeWeight( PI*PI/2 );
    point( x, y );
 
 
    stroke(#004EFF , 75 );
    strokeWeight(PI*TWO_PI);
    point( x, y );
 
 
 

    // stroke(colors[this.type]);
    // line( x+1 , y+1, x-1 , y-1 );
  }

  void mousePressed() {
	 console.log( this.url );
  }

}
</script>


<script data-processing-target="windEffect" type="application/processing">
    ArrayList<String> words = new ArrayList();

    // Global ArrayList of tweets is created in processing-twitter.js
    // ArrayList<Tweet> tweets = new ArrayList();

    // A class representing a Tweet.  Tweet objects are created in JS
    // and automatically placed in the tweets ArrayList (created in JS)
    class Tweet {
      public String id;
      public String profileName;
      public String profileImageUrl;
      public String text;
      public Date time;
    }

    void setup() {
      // XXX: jbuck: "just subtract 10"
      size(window.innerWidth, window.innerHeight-10);
      background(0);
      smooth();

      // Slow things down a bit...
      frameRate(15);

      // Start a live feed loading, results will be available in a global
      // ArrayList called tweets.  loadTweets() is a custom method added
      // by processing-twitter.js
      // loadTweets('#OWS');

      // // You can also pass geolocation data to limit tweets to a geographic area
      //  //loadTweets('class', '43.7496,-79.4886,1km'); // York University
      //   loadTweets('class', '1.3667,103.8,10km');  // Singapore
    }

    void draw() {
      // If we don't have any data back from Twitter yet, bail early
      var msg = "ADRIATIC SEA AEGEAN SEA AFGHANISTAN AFRICA ALBANIA ALGERIA ANDAMAN ISLANDS ANDAMAN SEA ANDORRA ANGOLA ANTARCTICA ARABIAN SEA ARGENTINA ARMENIA ASIA ATLANTIC OCEAN ATLANTIC OCEAN I(S). AUSTRALIA AUSTRALIA-ACT AUSTRALIA-NSW AUSTRALIA-NT AUSTRALIA-Q AUSTRALIA-SA AUSTRALIA-T AUSTRALIA-V AUSTRALIA-WA AUSTRIA AZERBAIJAN AZORES BAHAMAS BAHRAIN BALEARIC ISLANDS BALTIC SEA BANGLADESH BAY OF BENGAL BAY OF BISCAY BELARUS BELGIUM BELIZE BENIN BERING SEA BERMUDA BHUTAN BLACK SEA BOLIVIA BOSNIA-HERZEGOVINA BOTSWANA BOUVET ISLAND BRAZIL BRUNEI BULGARIA BURKINA FASO BURUNDI CAMBODIA CAMEROON CANADA CANADA-A CANADA-BC CANADA-M CANADA-N CANADA-NB CANADA-NS CANADA-NT CANADA-O CANADA-PEI CANADA-Q CANADA-S CANADA-YT CANARY ISLANDS CAPE VERDE ISLANDS CARIBBEAN SEA CAROLINE ISLANDS CASPIAN SEA CAYMAN ISLANDS CENTRAL AFRICAN REP. CENTRAL AMERICA CHAD CHAGOS ARCHIPELAGO CHANNEL ISLANDS CHILE CHINA CLOUDS COLOMBIA COMOROS CONGO COOK ISLANDS CORAL SEA CORSICA COSTA RICA CRETE CROATIA CROZET ISLANDS CUBA CYPRUS CZECH REPUBLIC DEM. REP. OF CONGO DENMARK DJIBOUTI DOMINICAN REPUBLIC EAST CHINA SEA EASTER ISLAND ECUADOR EGYPT EL SALVADOR EQUATORIAL GUINEA ERITREA ESTONIA ETHIOPIA EUROPE FALKLAND ISLANDS FEDERAL REPUBLIC OF YUGOSLAVIA FIJI ISLANDS FINLAND FRANCE FRENCH GUIANA GABON GALAPAGOS ISLANDS GAMBIA GEORGIA GERMANY GHANA GREECE GREENLAND GUATEMALA GUINEA GUINEA-BISSAU GULF OF ADEN GULF OF CALIFORNIA GULF OF GUINEA GULF OF MEXICO GULF OF OMAN GULF OF PANAMA GULF OF ST. LAWRENCE GULF OF THAILAND GULF OF TONKIN GUYANA HAITI HONDURAS HOWLAND ISLAND HUNGARY ICELAND INDIA INDIAN OCEAN INDIAN OCEAN I(S). INDONESIA INDONESIA-B INDONESIA-C INDONESIA-J INDONESIA-S INDONESIA-WNG IONIAN SEA IRAN IRAQ IRELAND IRISH SEA ISRAEL ITALY IVORY COAST JAMAICA JAPAN JAVA SEA JOHNSTON ATOLL JORDAN KAZAKHSTAN KENYA KERGUELEN ILES KIRIBATI KUWAIT KYRGYZSTAN LABRADOR SEA LACCADIVE SEA LAKSHADWEEP ISLANDS LAND LAOS LATVIA LEBANON LESOTHO LESSER ANTILLES LIBERIA LIBYA LITHUANIA LOYALTY ISLANDS MACEDONIA MADAGASCAR MADEIRA ISLANDS MALAWI MALAYSIA MALDIVES MALI MALTA MARQUESAS ISLANDS MARSHALL ISLANDS MAURITANIA MAURITIUS MEDITERRANEAN SEA MEDITERRANEAN SEA IS. MEXICO MOLDOVA MONGOLIA MOROCCO MOZAMBIQUE MOZAMBIQUE CHANNEL MYANMAR (BURMA) NAMIBIA NAURU NEPAL NETHERLANDS NETHERLANDS ANTILLES NEW CALEDONIA NEW ZEALAND NEW ZEALAND ISLANDS NEW ZEALAND-NI NEW ZEALAND-SI NICARAGUA NICOBAR ISLANDS NIGER NIGERIA NORTH KOREA NORTH SEA NORTHERN MARIANA IS. NORWAY OCEAN OMAN PACIFIC OCEAN PACIFIC OCEAN I(S). PAKISTAN PANAMA PAPUA NEW GUINEA PARACEL ISLANDS PARAGUAY PERSIAN GULF PERU PHILIPPINE SEA PHILIPPINES PITCAIRN ISLANDS POLAND PORTUGAL PUERTO RICO QATAR RED SEA REPUBLIC SOUTH AFRICA REUNION ROMANIA RUSSIAN FEDERATION RWANDA SAMOA ISLANDS SAO TOME AND PRINCIPE SARDINIA SAUDI ARABIA SEA OF JAPAN SEA OF OKHOTSK SENEGAL SERBIA SEYCHELLES SICILY SIERRA LEONE SINGAPORE SLOVAKIA SLOVENIA SOCIETY ISLANDS SOCOTRA SOLOMON ISLANDS SOMALIA SOUTH AMERICA SOUTH CHINA SEA SOUTH GEORGIA IS. SOUTH KOREA SPAIN SRI LANKA SUDAN SULU SEA SURINAME SWAZILAND SWEDEN SWITZERLAND SYRIA TAIWAN TAJIKISTAN TANZANIA TASMAN SEA THAILAND TIMOR SEA TOGO TOKELAU TONGA TRINIDAD AND TOBAGO TUAMOTU ARCHIPELAGO TUBUAI ISLANDS TUNISIA TURKEY TURKMENISTAN TURKS AND CAICOS IS. TUVALU UGANDA UK-ENGLAND UK-NORTHERN IRELAND UK-ORKNEY ISLANDS UK-SCOTLAND UK-SHETLAND ISLANDS UK-WALES UKRAINE UNITED ARAB EMIRATES UNITED KINGDOM URUGUAY USA USA-ALABAMA USA-ALASKA USA-ARIZONA USA-ARKANSAS USA-CALIFORNIA USA-COLORADO USA-CONNECTICUT USA-DC USA-DELAWARE USA-FLORIDA USA-GEORGIA USA-HAWAII USA-IDAHO USA-ILLINOIS USA-INDIANA USA-IOWA USA-KANSAS USA-KENTUCKY USA-LOUISIANA USA-MAINE USA-MARYLAND USA-MASSACHUSETTS USA-MICHIGAN USA-MINNESOTA USA-MISSISSIPPI USA-MISSOURI USA-MONTANA USA-NEBRASKA USA-NEVADA USA-NEW HAMPSHIRE USA-NEW JERSEY USA-NEW MEXICO USA-NEW YORK USA-NORTH CAROLINA USA-NORTH DAKOTA USA-OHIO USA-OKLAHOMA USA-OREGON USA-PENNSYLVANIA USA-RHODE ISLAND USA-SOUTH CAROLINA USA-SOUTH DAKOTA USA-TENNESSEE USA-TEXAS USA-UTAH USA-VERMONT USA-VIRGINIA USA-WASHINGTON USA-WEST VIRGINIA USA-WISCONSIN USA-WYOMING UZBEKISTAN VANUATU VENEZUELA VIETNAM VOLCANO ISLANDS WAKE ISLAND WALLIS ISLANDS WESTERN SAHARA YELLOW SEA YEMEN YUGOSLAVIA ZAMBIA ZIMBABWE";
      // Break the tweet into words
          String[] input = msg.split(" ");
          for (int j = 0;  j < input.length; j++) {
            // Put each word into the words ArrayList
            words.add(input[j]);
          }

      // if (tweets.size() > 0) {
      //   // If we haven't created the words list yet, do it now
      //   for (int i = 0; i < tweets.size(); i++) {
      //     Tweet t = (Tweet) tweets.get(i);
      //     String msg = t.text;

          
      //   }
      //   tweets.clear();
      // }

      // If we have a word list already, draw it
      if (words.size() > 0) {
        // Draw a faint black rectangle over what is currently on the stage so it fades over time.
        fill(0,8);
        rect(0,0,width,height);

        // Draw a word from the list of words that we've built
        int j = (frameCount % words.size());
        String word = words.get(j);

        // Put it somewhere random on the stage, with a random size and colour
        fill(255,random(50,150));
        textSize((int)random(10,30));
        text(word, random(width), random(height));
      }
    }

  </script>
  <canvas id="tweets"></canvas>


<script type="text/javascript">

function clearImage() {
	$('#imagePreview').empty();
}

function success(position) {
  
  
  $.getJSON('<?php echo site_url('index.php/image/near'); ?>/'+position.coords.latitude + '/'+position.coords.longitude, function(data) {

    var  pjs2 = Processing.getInstanceById('mycanvas');
    pjs2.setup();
  
    jQuery.each(data,function() {
      // console.log(this);
      var lat = parseFloat(this.lat);
              var lon = parseFloat(this.lon);
             
              var x = (180+lon) * (width / 360);
              var y = (90-lat) * (height / 180);
              var type = this.id;
// console.log(x , y , width , height);
              pjs2.addPoint(x, y , type , this.url);
    });
  });
 
}

function error(msg) {
 alert('We can\'t get your current position');
  
  // console.log(arguments);
}


	function addImage(url , id ) {

    if( $('#imagePreview').children().length <  23) {
      var a = $('<a/>').attr('href','<?php echo site_url("index.php/image/view"); ?>/'+id).attr('target','_blank');
      a.appendTo('#imagePreview');
  		$('<img/>').attr('src' , url).attr('width' , 50).appendTo(a);
    }
	}
  var width = document.getElementById('imagecanvas').offsetWidth;
  var height = document.getElementById('imagecanvas').offsetHeight;
	$(document).ready(function() {

		$('#clearImagePreview').click(function() {
			$('#imagePreview').empty();			
		})

    $('#nearestImage').click(function() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, error);
      } else {
        error('not supported');
      }
    });

    $('#missionsSelect').change(function() {
      // $( "#slider" ).slider('value' , 100);

      $.getJSON('<?php echo site_url('index.php/image/images'); ?>/'+$(this).val(), function(data) {

                  
              var  pjs2 = Processing.getInstanceById('mycanvas');
                  pjs2.setup();
      
        jQuery.each(data,function() {
          // console.log(this);
          var lat = parseFloat(this.lat);
                  var lon = parseFloat(this.lon);
                 
                  var x = (180+lon) * (width / 360);
                  var y = (90-lat) * (height / 180);
                  var type = this.id;
  // console.log(x , y , width , height);
                  pjs2.addPoint(x, y , type , this.url);
        });
      });
    });

    $('#geonSelect').change(function() {
      $( "#slider" ).slider('value' , 100);

      $.getJSON('<?php echo site_url('index.php/api/imagesGeon'); ?>/'+$(this).val(), function(data) {

              var  pjs2 = Processing.getInstanceById('mycanvas');
                  pjs2.setup();
      
        jQuery.each(data,function() {
          // console.log(this);
          var lat = parseFloat(this.lat);
                  var lon = parseFloat(this.lon);
                 
                  var x = (180+lon) * (width / 360);
                  var y = (90-lat) * (height / 180);
                  var type = this.id;
  // console.log(x , y , width , height);
                  pjs2.addPoint(x, y , type , this.url);
        });
      });
    });


    windEffect();

		$.getJSON('<?php echo site_url('index.php/image/images/AS06'); ?>', function(data) {
      // $.getJSON('<?php echo site_url('index.php/image/near/1.2825087/103.8522075'); ?>', function(data) {
                
            var  pjs2 = Processing.getInstanceById('mycanvas');
                
    
			jQuery.each(data,function() {
				
				var lat = parseFloat(this.lat);
        var lon = parseFloat(this.lon);
       
        var x = (180+lon) * (width / 360);
        var y = (90-lat) * (height / 180);
        var type = this.id;

        pjs2.addPoint(x, y , type , this.url);
			});
		});
	});

function windEffect() {
    $('#windEffect').show();
    $('#windEffect').delay(1000).animate({
      opacity: 0,
    }, 3000, function() {
    // Animation complete.
    $('#windEffect').hide();
    });
}

</script>


</body>


</html>