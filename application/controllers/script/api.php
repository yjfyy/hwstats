<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Some scripts, called by web client
 *
 * @package    Core
 * @author     http://harpywar.com
 * @copyright  (c) 2010 HarpyWar
 */
class Api_Controller extends Controller
{
    protected $db;
    public function __construct()
    {
        parent::__construct(); // This must be included
        $this->db = Database::instance();
    }

    public function index()
    {

    }


    /**
     * Add/update country code for player
     * @param int $page
     */
    public function flag($playerInfo)
    {
	// decode player info
	list($playerName, $playerIp, $playerCC) = explode("&&", player::DecodeFlagData($playerInfo));

	// grab country code from API service
	// FIXME: mb use other API ?
        //        for example grab cc2 from ripn.net whois (http://www.phpclasses.org/package/3342-PHP-Determine-the-country-of-an-IP-address-using-Whois.html)
	if (!$response = @file_get_contents("http://easy4web.ru/api/geoip/get.php?&f=s&p=a&ip={$playerIp}"))
	    return false;

	// FIXME: use embedded php function to parse json

	$data = explode(";", $response);
	list($var, $countryCode) = explode("=", $data[0]);

	// country code may be only 2 symbols
	if (strlen($countryCode) != 2)
	    $countryCode = "xx"; // xx = bad code

	// don't update same cc2 again
	if (strtolower($playerCC) != strtolower($countryCode))
	{
	    // update cc2 to database
	    $p = new Player_Model();
	    $p->UpdateCountryCode(strtolower($playerName), strtolower($countryCode));
	}
	// output json
	echo '{"cc2":"' . $countryCode . '"}';
    }



} 