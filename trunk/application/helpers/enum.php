<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Enums
 * First value of each enum should be default as "Unknown",
 * because it returns if nothing found
 *
 * @author HarpyWar
 * @copyright (c) 2010, HarpyWar
 */
class enum_Core
{
    // rank_icon => array( rating_from, rating_to )
    public static $ranks = array(
        "d1" => array (1, 999),         // D-
        "d2" => array (1000, 1249),     // D
        "d3" => array (1250, 1499),     // D+
        "c1" => array (1500, 1749),     // C-
        "c2" => array (1750, 1999),     // C
        "c3" => array (2000, 2249),     // C+
        "b1" => array (2250, 2499),     // B-
        "b2" => array (2500, 2749),     // B
        "b3" => array (2750, 2999),     // B+
        "a1" => array (3000, 3249),     // A-
        "a2" => array (3250, 3499),     // A
        "a3" => array (3500, 3749),     // A+
    // iccup rating system
    //        //"e" => array (1, 599),        // E
    //        "d1" => array (600, 999),       // D-
    //        "d2" => array (1000, 1999),     // D
    //        "d3" => array (2000, 2999),     // D+
    //        "c1" => array (3000, 3999),     // C-
    //        "c2" => array (4000, 4999),     // C
    //        "c3" => array (5000, 5999),     // C+
    //        "b1" => array (6000, 6999),     // B-
    //        "b2" => array (7000, 7999),     // B
    //        "b3" => array (8000, 8999),     // B+
    //        "a1" => array (9000, 9999),     // A-
    //        "a2" => array (10000, 10999),   // A
    //        "a3" => array (11000, 11999),   // A+
    );


    // game client tags
    private static $clienttag = array (
	    0 => "UNKN",
	    1 => "SEXP",
	    2 => "STAR",
	    3 => "D2DV",
	    4 => "D2XP",
	    5 => "DRTL",
	    6 => "W2BN",
	    7 => "W3XP",
	    8 => "WAR3",
	    9 => "WWOL",
	    // ...
    );

    // starcraft races
    private static $race = array (
	    0 => "Unknown",
	    1 => "Zerg",
	    2 => "Protoss",
	    3 => "Terran"
    );

    // pvpgn game types
    // http://bnetd.sourcearchive.com/lines/0.4.25-6/bnetd_2game_8c-source.html
    private static $gametype = array (
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

    // pvpgn starcraft game option
    private static $gameoption = array (
	    0 => "unknown",
	    1 => "normal",
            // greed (don't use for )
	    2 => "10000 minerals",
	    3 => "7500 minerals",
	    4 => "5000 minerals",
	    5 => "2500 minerals",
            // slaughter
	    6 => "60 minutes",
	    7 => "45 minutes",
	    8 => "30 minutes",
	    9 => "15 minutes",
	    10 => "count as loss",
	    11 => "no penalty",
            // teamffa, teammelee, teamctf
	    12 => "4 teams",
	    13 => "3 teams",
	    14 => "2 teams",
            // none
	    15 => "none"
    );

    // pvpgn game result
    private static $gameresult = array (
	    0 => "UNKNOWN",
	    1 => "WIN",
	    2 => "LOSS",
	    3 => "DRAW",
	    4 => "DISCONNECT",
	    5 => "OBSERVER",
	    6 => "NONE"
    );


    // map tileset
    private static $tileset = array (
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
    private static $mapauth = array (
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


    // countries and it codes
    private static $country = array(
        'xx' => 'Local Network',
        'ch' => 'Switzerland',
        'af' => 'Afghanistan',
        'za' => 'South Africa',
        'al' => 'Albania',
        'dz' => 'Algeria',
        'de' => 'Germany',
        'sa' => 'Saoudi Arabia',
        'ar' => 'Argentina',
        'au' => 'Australia',
        'at' => 'Austria',
        'be' => 'Belgium',
        'br' => 'Brasil',
        'bg' => 'Bulgaria',
        'ca' => 'Canada',
        'cl' => 'Chile',
        'cn' => 'China',
        'co' => 'Colombia',
        'kr' => 'South Korea',
        'cr' => 'Costa Rica',
        'hr' => 'Croatia',
        'dk' => 'Denmark',
        'eg' => 'Egypt',
        'ae' => 'United Arab Emirates',
        'ec' => 'Ecuador',
        'us' => 'Usa',
        'sv' => 'El Salvador',
        'es' => 'Spain',
        'fi' => 'Finland',
        'fr' => 'France',
        'gr' => 'Greece',
        'hk' => 'Hong Kong',
        'hu' => 'Hungary',
        'in' => 'India',
        'id' => 'Indonesia',
        'ie' => 'Ireland',
        'il' => 'Israel',
        'it' => 'Italia',
        'jp' => 'Japan',
        'jo' => 'Jordania',
        'lb' => 'Lebanon',
        'my' => 'Malaisia',
        'ma' => 'Morocco',
        'mx' => 'Mexico',
        'no' => 'Norvay',
        'nz' => 'New Zealand',
        'pe' => 'Peru',
        'pk' => 'Pakistan',
        'nl' => 'Netherlands',
        'ph' => 'Philippines',
        'pl' => 'Poland',
        'pr' => 'Puerto Rico',
        'pt' => 'Portugal',
        'cz' => 'Czech Republic',
        'ro' => 'Romania',
        'uk' => 'United Kingdom',
        'ru' => 'Russia',
        'sg' => 'Singapore',
        'se' => 'Sweden',
        'tw' => 'Taiwan',
        'th' => 'Thailand',
        'tr' => 'Turqey',
        'ua' => 'Ukraine',
        've' => 'Venezuela',
        'yu' => 'Yougoslavia',
        'as' => 'Samoa',
        'ad' => 'Andorra',
        'ao' => 'Angola',
        'ai' => 'Anguilla',
        'aq' => 'Antarctica',
        'ag' => 'Antigua and Barbuda',
        'am' => 'Armenia',
        'aw' => 'Aruba',
        'az' => 'Azerbaijan',
        'bs' => 'Bahamas',
        'bh' => 'Bahrain',
        'bd' => 'Bangladesh',
        'by' => 'Belarus',
        'bz' => 'Belize',
        'bj' => 'Benin',
        'bm' => 'Bermuda',
        'bt' => 'Bhutan',
        'bo' => 'Bolivia',
        'ba' => 'Bosnia and Herzegovina',
        'bw' => 'Botswana',
        'io' => 'British Indian Ocean Territory',
        'vg' => 'Virgin Islands',
        'bn' => 'Brunei Darussalam',
        'bf' => 'Burkina Faso',
        'bi' => 'Burundi',
        'kh' => 'Cambodia',
        'cm' => 'Cameroon',
        'cv' => 'Cape Verde',
        'ky' => 'Cayman Islands',
        'cf' => 'Cetral African Republic',
        'td' => 'Tchad',
        'km' => 'Comoros',
        'cg' => 'Congo, The Democratic Republic of the',
        'ck' => 'Cook Islands',
        'cu' => 'Cuba',
        'cy' => 'Cyprus',
        'dj' => 'Djibouti',
        'dm' => 'Dominica',
        'do' => 'Dominican Republic',
        'tp' => 'Timor-Leste',
        'gq' => 'Guinea',
        'er' => 'Eritrea',
        'ee' => 'Estonia',
        'et' => 'Ethiopia',
        'fk' => 'Falkland Islands',
        'fo' => 'Faroe Islands',
        'fj' => 'Fidji',
        'gf' => 'French Guyana ',
        'pf' => 'French Polynesia ',
        'ga' => 'Gabon',
        'gm' => 'Gambia',
        'ge' => 'Georgia',
        'gh' => 'Ghana',
        'gi' => 'Gibraltar',
        'gl' => 'Greenland',
        'gd' => 'Grenada',
        'gp' => 'Guadeloupe',
        'gu' => 'Guam',
        'gt' => 'Guatemala',
        'gn' => 'Guinea',
        'gw' => 'Guinea-Bissau',
        'gy' => 'Guyana',
        'ht' => 'Haiti',
        'hn' => 'Honduras',
        'is' => 'Iceland',
        'ir' => 'Iran',
        'iq' => 'Irak',
        'ci' => 'Cote d&#39;Ivoire',
        'jm' => 'Jamaica',
        'kz' => 'Kazakhstan',
        'ke' => 'Kenya',
        'ki' => 'Kiribati',
        'kp' => 'North Korea',
        'kw' => 'Kuweit',
        'kg' => 'Kyrgyzstan',
        'la' => 'Laos',
        'lv' => 'Latvia',
        'ls' => 'Lesotho',
        'lr' => 'Liberia',
        'ly' => 'Libya',
        'li' => 'Liechtenstein',
        'lt' => 'Lithuania',
        'lu' => 'Luxembourg',
        'mo' => 'Macao',
        'mk' => 'Macedonia',
        'mg' => 'Madagascar',
        'mw' => 'Malawi',
        'mv' => 'Maldives',
        'ml' => 'Mali',
        'mt' => 'Malta',
        'mh' => 'Marshall Islands',
        'mq' => 'Martinique',
        'mr' => 'Mauritania',
        'mu' => 'Mauritius',
        'yt' => 'Mayotte',
        'fm' => 'Micronesia',
        'md' => 'Moldova',
        'mc' => 'Monaco',
        'mn' => 'Mongolia',
        'ms' => 'Montserrat',
        'mz' => 'Mozambique',
        'mm' => 'Myanmar',
        'na' => 'Namibia',
        'nr' => 'Nauru',
        'np' => 'Nepal',
        'an' => 'Netherlands Antilles',
        'ni' => 'Nicaragua',
        'ne' => 'Niger',
        'ng' => 'Nigeria',
        'nu' => 'Niue',
        'nf' => 'Norfolk Islands',
        'om' => 'Oman',
        'pw' => 'Palau',
        'pa' => 'Panama',
        'pg' => 'Papua New Guinea',
        'py' => 'Paraguay',
        'pn' => 'Pitcairn Islands',
        'qa' => 'Qatar',
        'rw' => 'Rwanda',
        'kn' => 'Saint-Kitts and Nevis',
        'lc' => 'Saint Lucia',
        'vc' => 'Saint Vincent and the Grenadines',
        'ws' => 'Samoa',
        'sm' => 'San Marino',
        'st' => 'Sao Tome and Principe',
        'sn' => 'Senegal',
        'sc' => 'Seychelles',
        'sl' => 'Sierra Leone',
        'sk' => 'Slovakia',
        'si' => 'Slovenia',
        'so' => 'Somalia',
        'lk' => 'Sri Lanka',
        'sh' => 'Saint Helena',
        'pm' => 'Saint Pierre et Miquelon',
        'sd' => 'Sudan',
        'sr' => 'Suriname',
        'sz' => 'Swaziland',
        'sy' => 'Syria',
        'tj' => 'Tajikistan',
        'tz' => 'Tanzania',
        'tg' => 'Togo',
        'to' => 'Tonga',
        'tt' => 'Trinidad and Tobago',
        'tn' => 'Tunisia',
        'tm' => 'Turkmenistan',
        'tv' => 'Tuvalu',
        'ug' => 'Uganda',
        'uy' => 'Uruguay',
        'uz' => 'Ouzbekistan',
        'vu' => 'Vanuatu',
        'va' => 'Vatican City State',
        'vn' => 'Viet Nam',
        'vi' => 'Virgin Islands',
        'wf' => 'Wallis et Futuna',
        'ye' => 'Yemen',
        'zm' => 'Zambia',
        'zw' => 'Zimbabwe',
        'bb' => 'Barbados'
    );





    /**
     * Returns key from enum array by array value
     */
    public static function GetKeyByValue($array, $value)
    {
	if ($key = array_search($value, self::${$array}))
	{
	    return self::${$array}[$key];
	}
	return ${$array}[0]; // unknown
    }

    /**
     * Returns value from enum array by array key
     */
    public static function GetValueByKey($array, $key)
    {

	if (array_key_exists($key, self::${$array}))
	{
	    return self::${$array}[$key];
	}
	return ${$array}[0]; // unknown
    }





    /**
     * Return game type
     * If $search_by_key = false, search by value and return key
     * If $search_by_key = true, search by key and return value
     */
    public static function GetGameType($value, $search_by_key = false)
    {
	$return = (!$search_by_key)
			? enum::GetValueByKey('gametype', $value)
			: enum::GetKeyByValue('gametype', $value);
	return $return;
    }

    /**
     * Return game option
     * If $search_by_key = false, search by value and return key
     * If $search_by_key = true, search by key and return value
     */
    public static function GetGameOption($value, $search_by_key = false)
    {
	$return = (!$search_by_key)
			? enum::GetValueByKey('gameoption', $value)
			: enum::GetKeyByValue('gameoption', $value);
	return $return;
    }

    /**
     * Return client tag
     * If $search_by_key = false, search by value and return key
     * If $search_by_key = true, search by key and return value
     */
    public static function GetClientTag($value, $search_by_key = false)
    {
	$return = (!$search_by_key)
			? enum::GetValueByKey('clienttag', $value)
			: enum::GetKeyByValue('clienttag', $value);
	return $return;
    }

    /**
     * Return map tile set
     * If $search_by_key = false, search by value and return key
     * If $search_by_key = true, search by key and return value
     */
    public static function GetMapTileSet($value, $search_by_key = false)
    {
	$return = (!$search_by_key)
			? enum::GetValueByKey('tileset', $value)
			: enum::GetKeyByValue('tileset', $value);
	return $return;
    }

    /**
     * Return mapauth
     * If $search_by_key = false, search by value and return key
     * If $search_by_key = true, search by key and return value
     */
    public static function GetMapAuth($value, $search_by_key = false)
    {
	$return = (!$search_by_key)
			? enum::GetValueByKey('mapauth', $value)
			: enum::GetKeyByValue('mapauth', $value);
	return $return;
    }

    /**
     * Return map tile set
     * If $search_by_key = false, search by value and return key
     * If $search_by_key = true, search by key and return value
     */
    public static function GetGameResult($value, $search_by_key = false)
    {
	$return = (!$search_by_key)
			? enum::GetValueByKey('gameresult', $value)
			: enum::GetKeyByValue('gameresult', $value);
	return $return;
    }

    /**
     * Return player race
     * If $search_by_key = false, search by value and return key
     * If $search_by_key = true, search by key and return value
     */
    public static function GetRace($value, $search_by_key = false)
    {
	$return = (!$search_by_key)
			? enum::GetValueByKey('race', $value)
			: enum::GetKeyByValue('race', $value);
	return $return;
    }










    /**
     * Return country name from country-code-2 (2 symbols)
     */
    public static function GetCountryName($cc2)
    {
	$country = enum::GetValueByKey('country', $cc2);
	return $country;
    }


}
?>
