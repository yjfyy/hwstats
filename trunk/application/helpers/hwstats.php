<?php defined('SYSPATH') or die('No direct script access.');

/**
 * HWStats main helper
 *
 * @author HarpyWar
 * @copyright (c) 2010, HarpyWar
 */
class hwstats_Core
{

    /**
     * Returns url with current game client
     * @param any additional url parameters
     * @example url_base("matchlist","harpywar") => /{currentgame}/matchlist/harpywar
     * @example url_base() => /{currentgame}
     */
    public static function url_base()
    {
	$url = url::base() . Router::$controller ;
	if ($args = func_get_args())
	    foreach ($args as $a)
		$url .= "/" . $a;
		
	return $url;
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
