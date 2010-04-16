<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Player_Model extends Model
{
    var $t_bnet;
    var $t_record;

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
			    ->get($this->t_bnet, 10);
        if (count($p) == 0)
            return false;

        return $p;
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
	$fields[] = "uid"; // unicue player id


	switch(strtolower($client))
	{
	    case "starcraft":
		$fields[] = "acct_username";
		$fields[] = "acct_lastlogin_ip";
		$fields[] = "acct_lastlogin_time";
		$fields[] = "SEXP_1_last_game_result";
		$fields[] = "SEXP_1_rating";
		$fields[] = "SEXP_1_rank";
		$fields[] = "SEXP_0_wins";
		$fields[] = "SEXP_0_losses";
		$fields[] = "SEXP_0_disconnects";
		$fields[] = "SEXP_1_wins";
		$fields[] = "SEXP_1_losses";
		$fields[] = "SEXP_0_draws";
		$fields[] = "SEXP_1_draws";

		$orderby['SEXP_1_rating'] = "DESC";

		break;
	    
	    default:
		return false;
	}
	return array("fields" => $fields, "orderby" => $orderby);
    }

}

?>
