<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Helper
 *
 * @author HarpyWar
 * @copyright (c) 2010, HarpyWar
 */
class enum_Core
{
    $clienttag = array (
	    0 => "UNKN",
	    1 => "SEXP",
	    2 => "STAR",
	    3 => "D2DV",
	    4 => "D2XP",
	    5 => "DRTL",
	    6 => "W2BN",
	    7 => "W3XP",
	    8 => "WAR3",
	    // ...
    );

    // pvpgn game types
    // http://bnetd.sourcearchive.com/lines/0.4.25-6/bnetd_2game_8c-source.html
    $gametype = array (
	    0 => "UNKNOWN",
	    1 => "melee",
	    2 => "one on one",
	    3 => "top vs bottom",
	    4 => "free for all",
	    5 => "Diablo II (closed)",
	    6 => "Diablo II (open)",
	    7 => "Diablo",
	    8 => "PGL",
	    9 => "team capture the flag",
	    10 => "team free for all",
	    11 => "team melee",
	    12 => "mapset",
	    13 => "ironman",
	    14 => "ladder",
	    15 => "sudden death",
	    16 => "slaughter",
	    17 => "greed",
	    18 => "capture the flag",
	    19 => "NONE"
    );

//0253 extern char const * game_option_get_str(t_game_option option)
//00254 {
//00255     switch (option)
//00256     {
//00257     case game_option_melee_normal:
//00258       return "normal";
//00259     case game_option_ffa_normal:
//00260       return "normal";
//00261     case game_option_oneonone_normal:
//00262       return "normal";
//00263     case game_option_ctf_normal:
//00264       return "normal";
//00265     case game_option_greed_10000:
//00266       return "10000 minerals";
//00267     case game_option_greed_7500:
//00268       return "7500 minerals";
//00269     case game_option_greed_5000:
//00270       return "5000 minerals";
//00271     case game_option_greed_2500:
//00272       return "2500 minerals";
//00273     case game_option_slaughter_60:
//00274       return "60 minutes";
//00275     case game_option_slaughter_45:
//00276       return "45 minutes";
//00277     case game_option_slaughter_30:
//00278       return "30 minutes";
//00279     case game_option_slaughter_15:
//00280       return "15 minutes";
//00281     case game_option_sdeath_normal:
//00282       return "normal";
//00283     case game_option_ladder_countasloss:
//00284       return "count as loss";
//00285     case game_option_ladder_nopenalty:
//00286       return "no penalty";
//00287     case game_option_mapset_normal:
//00288       return "normal";
//00289     case game_option_teammelee_4:
//00290       return "4 teams";
//00291     case game_option_teammelee_3:
//00292       return "3 teams";
//00293     case game_option_teammelee_2:
//00294       return "2 teams";
//00295     case game_option_teamffa_4:
//00296       return "4 teams";
//00297     case game_option_teamffa_3:
//00298       return "3 teams";
//00299     case game_option_teamffa_2:
//00300       return "2 teams";
//00301     case game_option_teamctf_4:
//00302       return "4 teams";
//00303     case game_option_teamctf_3:
//00304       return "3 teams";
//00305     case game_option_teamctf_2:
//00306       return "2 teams";
//00307     case game_option_none:
//00308       return "none";
//00309     default:
//00310       return "UNKNOWN";
//00311     }
//00312 }
    // starcraft game option
    $gameoption = array (
	    0 => "unknown",
	    1 => "normal",

    );

    // starcraft races
    $race = array (
	    0 => "Unknown",
	    1 => "Zerg",
	    2 => "Protoss",
	    3 => "Terran"
    );

    // game result
    $gameresult = array (
	    0 => "UNKNOWN",
	    1 => "WIN",
	    2 => "LOSS",
	    3 => "DRAW",
	    4 => "DISCONNECT",
	    5 => "OBSERVER",
	    6 => "NONE"
    );


    // map tileset
    $tileset = array (
	    0 => "Unknown",
	    1 => "Badlands", // default = unknown
	    2 => "Platform",
	    3 => "Installation",
	    4 => "Space",
	    5 => "Ash World",
	    6 => "Jungle",
	    7 => "Desert",
	    8 => "Ice",
	    9 => "Twilight"
    );

    // map type
    $mapauth = array (
	    1 => "Unknown",
	    2 => "Self-Made",
	    3 => "Blizzard",
	    4 => "Ladder",
	    5 => "PGL"
    );


/* diablo 2  */
//00383 extern char const * game_difficulty_get_str(t_game_difficulty difficulty)
//00384 {
//00385     switch (difficulty)
//00386     {
//00387     case game_difficulty_normal:
//00388       return "normal";
//00389     case game_difficulty_nightmare:
//00390       return "nightmare";
//00391     case game_difficulty_hell:
//00392       return "hell";
//00393     case game_difficulty_hardcore_normal:
//00394       return "hardcore normal";
//00395     case game_difficulty_hardcore_nightmare:
//00396       return "hardcore nightmare";
//00397     case game_difficulty_hardcore_hell:
//00398       return "hardcore hell";
//00399     default:
//00400       return "unknown";
//00401     }
//00402 }


//A
//AFGHANISTAN	 AF
//ÅLAND ISLANDS	 AX
//ALBANIA	 AL
//ALGERIA	 DZ
//AMERICAN SAMOA	 AS
//ANDORRA	 AD
//ANGOLA	 AO
//ANGUILLA	 AI
//ANTARCTICA	 AQ
//ANTIGUA AND BARBUDA	 AG
//ARGENTINA	 AR
//ARMENIA	 AM
//ARUBA	 AW
//AUSTRALIA	 AU
//AUSTRIA	 AT
//AZERBAIJAN	 AZ
//B
//BAHAMAS	 BS
//BAHRAIN	 BH
//BANGLADESH	 BD
//BARBADOS	 BB
//BELARUS	 BY
//BELGIUM	 BE
//BELIZE	 BZ
//BENIN	 BJ
//BERMUDA	 BM
//BHUTAN	 BT
//BOLIVIA, PLURINATIONAL STATE OF	 BO
//BOSNIA AND HERZEGOVINA	 BA
//BOTSWANA	 BW
//BOUVET ISLAND	 BV
//BRAZIL	 BR
//BRITISH INDIAN OCEAN TERRITORY	 IO
//BRUNEI DARUSSALAM	 BN
//BULGARIA	 BG
//BURKINA FASO	 BF
//BURUNDI	 BI
//C
//CAMBODIA	 KH
//CAMEROON	 CM
//CANADA	 CA
//CAPE VERDE	 CV
//CAYMAN ISLANDS	 KY
//CENTRAL AFRICAN REPUBLIC	 CF
//CHAD	 TD
//CHILE	 CL
//CHINA	 CN
//CHRISTMAS ISLAND	 CX
//COCOS (KEELING) ISLANDS	 CC
//COLOMBIA	 CO
//COMOROS	 KM
//CONGO	 CG
//CONGO, THE DEMOCRATIC REPUBLIC OF THE	 CD
//COOK ISLANDS	 CK
//COSTA RICA	 CR
//CÔTE D'IVOIRE	 CI
//CROATIA	 HR
//CUBA	 CU
//CYPRUS	 CY
//CZECH REPUBLIC	 CZ
//D
//DENMARK	 DK
//DJIBOUTI	 DJ
//DOMINICA	 DM
//DOMINICAN REPUBLIC	 DO
//E
//ECUADOR	 EC
//EGYPT	 EG
//EL SALVADOR	 SV
//EQUATORIAL GUINEA	 GQ
//ERITREA	 ER
//ESTONIA	 EE
//ETHIOPIA	 ET
//F
//FALKLAND ISLANDS (MALVINAS)	 FK
//FAROE ISLANDS	 FO
//FIJI	 FJ
//FINLAND	 FI
//FRANCE	 FR
//FRENCH GUIANA	 GF
//FRENCH POLYNESIA	 PF
//FRENCH SOUTHERN TERRITORIES	 TF
//G
//GABON	 GA
//GAMBIA	 GM
//GEORGIA	 GE
//GERMANY	 DE
//GHANA	 GH
//GIBRALTAR	 GI
//GREECE	 GR
//GREENLAND	 GL
//GRENADA	 GD
//GUADELOUPE	 GP
//GUAM	 GU
//GUATEMALA	 GT
//GUERNSEY	 GG
//GUINEA	 GN
//GUINEA-BISSAU	 GW
//GUYANA	 GY
//H
//HAITI	 HT
//HEARD ISLAND AND MCDONALD ISLANDS	 HM
//HOLY SEE (VATICAN CITY STATE)	 VA
//HONDURAS	 HN
//HONG KONG	 HK
//HUNGARY	 HU
//I
//ICELAND	 IS
//INDIA	 IN
//INDONESIA	 ID
//IRAN, ISLAMIC REPUBLIC OF	 IR
//IRAQ	 IQ
//IRELAND	 IE
//ISLE OF MAN	 IM
//ISRAEL	 IL
//ITALY	 IT
//J
//JAMAICA	 JM
//JAPAN	 JP
//JERSEY	 JE
//JORDAN	 JO
//K
//KAZAKHSTAN	 KZ
//KENYA	 KE
//KIRIBATI	 KI
//KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF	 KP
//KOREA, REPUBLIC OF	 KR
//KUWAIT	 KW
//KYRGYZSTAN	 KG
//L
//LAO PEOPLE'S DEMOCRATIC REPUBLIC	 LA
//LATVIA	 LV
//LEBANON	 LB
//LESOTHO	 LS
//LIBERIA	 LR
//LIBYAN ARAB JAMAHIRIYA	 LY
//LIECHTENSTEIN	 LI
//LITHUANIA	 LT
//LUXEMBOURG	 LU
//M
//MACAO	 MO
//MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF	 MK
//MADAGASCAR	 MG
//MALAWI	 MW
//MALAYSIA	 MY
//MALDIVES	 MV
//MALI	 ML
//MALTA	 MT
//MARSHALL ISLANDS	 MH
//MARTINIQUE	 MQ
//MAURITANIA	 MR
//MAURITIUS	 MU
//MAYOTTE	 YT
//MEXICO	 MX
//MICRONESIA, FEDERATED STATES OF	 FM
//MOLDOVA, REPUBLIC OF	 MD
//MONACO	 MC
//MONGOLIA	 MN
//MONTENEGRO	 ME
//MONTSERRAT	 MS
//MOROCCO	 MA
//MOZAMBIQUE	 MZ
//MYANMAR	 MM
//N
//NAMIBIA	 NA
//NAURU	 NR
//NEPAL	 NP
//NETHERLANDS	 NL
//NETHERLANDS ANTILLES	 AN
//NEW CALEDONIA	 NC
//NEW ZEALAND	 NZ
//NICARAGUA	 NI
//NIGER	 NE
//NIGERIA	 NG
//NIUE	 NU
//NORFOLK ISLAND	 NF
//NORTHERN MARIANA ISLANDS	 MP
//NORWAY	 NO
//O
//OMAN	 OM
//P
//PAKISTAN	 PK
//PALAU	 PW
//PALESTINIAN TERRITORY, OCCUPIED	 PS
//PANAMA	 PA
//PAPUA NEW GUINEA	 PG
//PARAGUAY	 PY
//PERU	 PE
//PHILIPPINES	 PH
//PITCAIRN	 PN
//POLAND	 PL
//PORTUGAL	 PT
//PUERTO RICO	 PR
//Q
//QATAR	 QA
//R
//RÉUNION	 RE
//ROMANIA	 RO
//RUSSIAN FEDERATION	 RU
//RWANDA	 RW
//S
//SAINT BARTHÉLEMY	 BL
//SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA	 SH
//SAINT KITTS AND NEVIS	 KN
//SAINT LUCIA	 LC
//SAINT MARTIN	 MF
//SAINT PIERRE AND MIQUELON	 PM
//SAINT VINCENT AND THE GRENADINES	 VC
//SAMOA	 WS
//SAN MARINO	 SM
//SAO TOME AND PRINCIPE	 ST
//SAUDI ARABIA	 SA
//SENEGAL	 SN
//SERBIA	 RS
//SEYCHELLES	 SC
//SIERRA LEONE	 SL
//SINGAPORE	 SG
//SLOVAKIA	 SK
//SLOVENIA	 SI
//SOLOMON ISLANDS	 SB
//SOMALIA	 SO
//SOUTH AFRICA	 ZA
//SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS	 GS
//SPAIN	 ES
//SRI LANKA	 LK
//SUDAN	 SD
//SURINAME	 SR
//SVALBARD AND JAN MAYEN	 SJ
//SWAZILAND	 SZ
//SWEDEN	 SE
//SWITZERLAND	 CH
//SYRIAN ARAB REPUBLIC	 SY
//T
//TAIWAN, PROVINCE OF CHINA	 TW
//TAJIKISTAN	 TJ
//TANZANIA, UNITED REPUBLIC OF	 TZ
//THAILAND	 TH
//TIMOR-LESTE	 TL
//TOGO	 TG
//TOKELAU	 TK
//TONGA	 TO
//TRINIDAD AND TOBAGO	 TT
//TUNISIA	 TN
//TURKEY	 TR
//TURKMENISTAN	 TM
//TURKS AND CAICOS ISLANDS	 TC
//TUVALU	 TV
//U
//UGANDA	 UG
//UKRAINE	 UA
//UNITED ARAB EMIRATES	 AE
//UNITED KINGDOM	 GB
//UNITED STATES	 US
//UNITED STATES MINOR OUTLYING ISLANDS	 UM
//URUGUAY	 UY
//UZBEKISTAN	 UZ
//V
//VANUATU	 VU
//VATICAN CITY STATE	 see HOLY SEE
//VENEZUELA, BOLIVARIAN REPUBLIC OF	 VE
//VIET NAM	 VN
//VIRGIN ISLANDS, BRITISH	 VG
//VIRGIN ISLANDS, U.S.	 VI
//W
//WALLIS AND FUTUNA	 WF
//WESTERN SAHARA	 EH
//Y
//YEMEN	 YE
//Z
//ZAMBIA	 ZM
//ZIMBABWE	 ZW
    // country codes
    $cc2 = array(
	"" => "",

    );











    /**
     * Returns player flag class (image)
     */
    public static function GetEnumByName($array, $value)
    {
	if ($key = array_search($value, $array))
	{
	    return $array[$key];
	}
	return false;
    }

    /**
     * Returns player flag class (image)
     */
    public static function GetNameByEnum($array, $key)
    {
	if (array_key_exists($key, $array))
	{
	    return $array[$key];
	}
	return false;
    }


}
?>
