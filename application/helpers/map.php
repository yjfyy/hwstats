<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Helper
 *
 * @author HarpyWar
 * @copyright (c) 2010, HarpyWar
 */
class map_Core
{

    public function __construct()
    {
        // load xml to $server_status
    }

    /**
     * Returns compressed mapsize
     */
    public static function EncodeMapSize($map_width, $map_height)
    {
	$width = $map_width / 32;
	$height = $map_height / 32;
	$size = $width . $height;

	return $size;
    }

    /**
     * Returns compressed mapsize
     *  2 digit number, first digit X, 2nd digit Y, as multiplier of 32.
     *	Example: 44 = 4*32 x 4*32 = 128x128
     */
    public static function DecodeMapSize($size_int)
    {
	$width = substr($size_int, 0, 1) * 32;
	$height = substr($size_int, 1, 1) * 32;
	$size = $width . 'x' . $height;

	return $size;
    }
}
?>
