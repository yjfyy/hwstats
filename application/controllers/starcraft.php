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
    public function ladder($page = 1)
    {
	$this->template->title = "StarCraft Ladder";

        $p = new Player_Model();
        $this->template->content = new View('starcraft/ladder');
 
        $this->template->content->players = $p->GetPlayerList("sexp_ladder");
    }

    /**
     * Display normal stats
     * @param int $page
     */
    public function normal($page = 1)
    {
	$this->template->title = "StarCraft Normal";

        $p = new Player_Model();
        $this->template->content = new View('starcraft/normal');

        $this->template->content->players = $p->GetPlayerList("sexp_normal");
    }

    /**
     * Display profile page
     */
    public function profile($name=false)
    {
// TODO: check for non exists player name
//	if (!$name)
//	     throw new Kohana_404_Exception('divide by zero');

        $p = new Player_Model();
	$player = $p->GetPlayerInfo($name);

	$this->template->title = Kohana::lang("content.gaming_profile", $player->acct_username);

        $this->template->content = new View('starcraft/profile');
        $this->template->content->player = $player;

// TODO: map statistics

// TODO: race statistics


    }


}
