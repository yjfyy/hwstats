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



}
?>
