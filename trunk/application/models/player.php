<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Player_Model extends Model
{
    private $t_bnet;
    private $t_record;

    public function __construct($id = NULL)
    {
	// load database library into $this->db (can be omitted if not required)
        parent::__construct($id);

	// shorten tables variables to simple use
	$this->t_bnet = Kohana::config("database.table_bnet");
	$this->t_record = Kohana::config("database.table_record");
    }

    /**
     * Get player profile info by player name from "bnet" and "record"
     * @param integer $name
     * @return the result object
     */
    public function GetPlayerInfo($name)
    {

        $p = $this->db->join($this->t_record, $this->t_record.'.uid', $this->t_bnet.'.uid', 'inner')
			    ->where('bnet.username', strtolower($name))
			    ->get($this->t_bnet, 1);

        if (count($p) == 0)
            return false;

        $player = $p[0];
        return $player;
    }


     /**
     * Get player stats by game name
     * return false if no players or game is incorrect
     * 
     * @param string $client game client
     * @return the result object
     */
    public function GetPlayerList($client)
    {
	if (!$qf = $this->queryFields($client))
	    return false;

        $p = $this->db->select($qf['fields'])
			    ->join($this->t_record, $this->t_record.'.uid', $this->t_bnet.'.uid', 'inner')
			    ->orderby($qf['orderby'])
			    ->get($this->t_bnet, 50);
        if (count($p) == 0)
            return false;

        return $p;
    }

     /**
     * Update player country code
     *
     * @param string $client game client
     * @return bool
     */
    public function UpdateCountryCode($userName, $countryCode)
    {
	 $this->db->where('username', $userName)
		  ->update( $this->t_bnet, array('cc2' => $countryCode) );
    }


    /**
     * Return fields and orderby fields data for the current $game
     * It used for sql query optimization when display player list
     * @param string $client
     * @return array
     */
    private function queryFields($client)
    {
	$orderby = array();
	$fields = array();
	$fields[] = $this->t_bnet . ".uid"; // unicue player id

	$fields[] = "acct_username";
	$fields[] = "username";
	$fields[] = "acct_lastlogin_ip";
	$fields[] = "acct_lastlogin_time";
	$fields[] = "cc2"; // country code

	switch($client)
	{
	    case "sexp_ladder":
		$fields[] = "SEXP_1_rating AS rating";
		$fields[] = "SEXP_1_rank AS rank";
		$fields[] = "SEXP_1_wins AS wins";
		$fields[] = "SEXP_1_losses AS losses";
		$fields[] = "SEXP_1_draws AS draws";
		$fields[] = "SEXP_1_disconnects AS disconnects";
		$fields[] = "SEXP_1_last_game_result AS last_game_result";

		$orderby['SEXP_1_rating'] = "DESC";

		break;
	    
	    case "sexp_normal":
		$fields[] = "SEXP_0_rank AS rank";
		$fields[] = "SEXP_0_wins AS wins";
		$fields[] = "SEXP_0_losses AS losses";
		$fields[] = "SEXP_0_draws AS draws";
		$fields[] = "SEXP_0_disconnects AS disconnects";
		$fields[] = "SEXP_0_last_game_result AS last_game_result";

		$orderby['SEXP_0_rank'] = "DESC";

		break;
	    default:
		return false;
	}
	return array("fields" => $fields, "orderby" => $orderby);
    }

}

?>
