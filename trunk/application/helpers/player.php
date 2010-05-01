<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Helper
 *
 * @author HarpyWar
 * @copyright (c) 2010, HarpyWar
 */
class player_Core
{
    private $server_status;

    public function __construct()
    {
        // load xml to $server_status
    }

    /**
     * Returns player flag class (image)
     */
    public static function FlagClass($cc2)
    {
	switch($cc2)
	{
	    case false:
		$flag = "noflag";
		break;
	    case "xx":
		$flag = "badflag";
		break;
	    default:
		$flag = 'flag f-' . $cc2;
	}
	return $flag;
    }


    /**
     * Return html image flag icon
     */
    public static function FlagIcon($acct_username, $acct_lastlogin_ip, $cc2)
    {
        $output = '';
        if (Kohana::config("hwstats.show_country_flag"))
        {
            $class = self::FlagClass($cc2);
            $title = self::GetCountryByCode($cc2);
            $data = self::EncodeFlagData($acct_username, $acct_lastlogin_ip, $cc2);
            $output = '<div id="flag-container"><div onclick="LoadFlag(this);" class="'.$class.'" style="float:left;" title="'.$title.'" alt="'.$data.'"></div></div>';
        }
	return $output;
    }


    /**
     * Encode flag data
     */
    public static function EncodeFlagData($acct_username, $acct_lastlogin_ip, $cc2)
    {
	return base64_encode($acct_username . '&&' . $acct_lastlogin_ip . '&&' . $cc2);
    }

    /**
     * Decode flag data
     */
    public static function DecodeFlagData($flag_data)
    {
	return base64_decode($flag_data);
    }



    /**
     * Return country name from country-code-2 (2 symbols)
     */
    public static function GetCountryByCode($cc2)
    {
	$country = enum::GetValueByKey('country', $cc2);
	return $country;
    }




    /**
     * Return rank icon name from player $rating
     */
    public static function RankIcon($rating)
    {
        foreach (enum::$ranks as $rank => $calc)
        {
            if ( ($rating >= $calc[0]) and ($rating <= $calc[1]) )
            {
                return $rank;
                break;
            }
        }

        // default D
	return "d2";
    }


    /**
     * Return procent of played games
     */
    public static function WinRatio($all_count, $cur_count)
    {
	$one_procent = $all_count / 100;
	$current = @round($cur_count / $one_procent);

	return $current;
    }


    /**
     * Return status for current player from server status.xml
     */
    public static function StatusIcon($player)
    {
        // TODO: try to find $player in online list
//        foreach ($this->server_status)
//        {
//              if ()
//                  return 'on';
//        }

	return 'off';
    }





}
?>
