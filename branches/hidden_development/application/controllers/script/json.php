<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Some scripts, called by web client
 *
 * @package    Core
 * @author     http://harpywar.com
 * @copyright  (c) 2010 HarpyWar
 */
class Json_Controller extends Controller
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
	$response = file_get_contents("http://easy4web.ru/api/geoip/get.php?&f=s&p=a&ip={$playerIp}");
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