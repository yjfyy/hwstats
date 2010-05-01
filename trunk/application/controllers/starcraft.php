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
	$this->template->title = 'StarCraft Ladder';

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
	$this->template->title = 'StarCraft Normal';

        $p = new Player_Model();
        $this->template->content = new View('starcraft/normal');

        $this->template->content->players = $p->GetPlayerList("sexp_normal");
    }

    /**
     * Display profile page
     */
    public function profile($username)
    {
	// TODO: check for non exists player name
	//	if (!$name)
	//	     throw new Kohana_404_Exception('divide by zero');

        $p = new Player_Model();
	$player = $p->GetPlayerInfo($username);

	$this->template->title = Kohana::lang("content.gaming_profile", $player->acct_username);

        $this->template->content = new View('starcraft/profile');
        $this->template->content->player = $player;

	// TODO: map statistics

	// TODO: race statistics


    }

    /**
     * Display matches list for player
     * @param int $page
     */
    public function matchlist($username, $page = 1)
    {
	// TODO: check for non exists player name

	$p = new Player_Model();
	$player = $p->GetPlayerInfo($username);
	$this->template->title = 'Match List / ' . $player->acct_username;


        $this->template->content = new View('starcraft/matchlist');
        $this->template->content->player = $player;
    }

    /**
     * Display match details
     * @param int $matchId
     */
    public function matchinfo($matchId)
    {
	$player1 = "Player 1";
	$player2 = "Player 2";
	$this->template->title = 'Game Details / ' . $matchId . ' / ' . $player1 . ' vs ' . $player2;

        //$r = new Report_Model();
        $this->template->content = new View('starcraft/matchinfo');

        //$this->template->content->matches = $r->GetReportDetails($matchId);
    }
}
