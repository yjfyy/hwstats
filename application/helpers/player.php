<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Helper
 *
 * @author HarpyWar
 * @copyright (c) 2009, HarpyWar
 */
class player_Core
{

    /**
     * Returns player flag class (image)
     */
    public static function GetFlagClass($cc2)
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
 * Returns copyrights
 */
    public static function Copyrights($year, $author, $url)
    {
    // если текущий год больше данного, то добавить через тире текущий год
        $newyear = (date("Y") > $year) ? '&#8212;'.date("Y") : '';

        $content = '&#169;&nbsp;'.$year.$newyear.'&nbsp;<a href="'.$url.'">'.$author.'</a>';

        return $content;
    }



    /**
     * Зашифровать емейл в яваскрипте (от спамботов)
     *
     * @param string $email url link (email)
     * @param string $text url text
     * @return string javascript
     */
    public static function EncodeEmail($email, $text)
    {
        list($login, $server) = explode("@", $email);
        $str = "<script language='JavaScript'>";
        $str .= "var a = '$login';";
        $str .= "var b = '$server';";
        $str .= "var c = a+'@'+b;";
        $str .= "var d = 'mailto:'+c;";
        $str .= "document.write('<a href=".'"'."'+d+'".'"'.">' + '" . $text . "' + '</a>');";
        $str .= "</script>";

        return $str;
    }


}
?>
