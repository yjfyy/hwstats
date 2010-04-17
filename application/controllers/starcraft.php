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
        $this->template->content = "Welcome";
    }


    /**
     * Display player list
     * @param int $page
     */
    public function playerlist($page = 1)
    {
        $p = new Player_Model();

        $this->template->content = new View('playerlist');
        
        $this->template->content->players = $p->GetPlayerList("sexp");
    }



} 