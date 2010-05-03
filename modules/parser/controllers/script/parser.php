<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Starcraft statistics
 *
 * @package    Core
 * @author     http://harpywar.com
 * @copyright  (c) 2010 HarpyWar
 */
class Starcraft_Controller extends Main_Controller
{
    protected $db;
    public function __construct()
    {
        parent::__construct(); // This must be included
        $this->db = Database::instance();
    }

    public function index()
    {
        url::redirect("starcraft/ladder");
    }


    /**
     * Display ladder stats
     * @param int $page
     */
    public function parser($page = 1)
    {
        $p = new Report_Model();
	$parser = new ReportParser;
	
	// TODO: parse reports

    }

}
