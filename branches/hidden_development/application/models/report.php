<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Report_Model extends Model
{
    var $t_starcraft;
    var $t_diablo;
    var $t_diablo2;
    var $t_warcraft3;
    var $t_dota;

    public function __construct($id = NULL)
    {
	// load database library into $this->db (can be omitted if not required)
        parent::__construct($id);

	// shorten tables variables to simple use
	$t_starcraft = Kohana::config("database.table_reports_starcraft");
	$t_diablo = Kohana::config("database.table_reports_diablo");
	$t_diablo2 = Kohana::config("database.table_reports_diablo2");
	$t_warcraft3 = Kohana::config("database.table_reports_warcraft3");
	$t_dota = Kohana::config("database.table_reports_dota");
    }

    /**
     * Get game info by report Id
     * @param integer $reportId
     * @return the result object
     */
    public function GetReportInfo($client, $reportId)
    {
	// we need only table name from here
	if (!$qf = $this->queryFields($client))
	    return false;

	$g = $this->db->where('id', $reportId)
			   ->get($qf['table'], 1);

        if (count($g) == 0)
            return false;

        $game =  $g[0];
        return $game;
    }

    /**
     * Get report list
     * if player Id = false, return all report list for current game
     * @param string $client game client
     * @param int $offset database offset
     * @param int $playerId
     * @return <type>
     */
    public function GetReportList($client, $offset = 0, $playerId = false)
    {
	if (!$qf = $this->queryFields($client))
	    return false;

	// FIXME: join is different for each game?
	// FIXME: how to select games with 8 players? (if db will collect all games)
	$record = $this->db
			    #->join($this->t_record, $this->t_record.'.uid', $this->t_bnet.'.uid', 'inner')
			    ->orderby($qf['orderby'])
			    ->get($qf['table'], 1);
        if (count($record) == 0)
            return false;

        $pInfo =  $profile[0];
        return $pInfo;
    }


    /**
     * Return fields and orderby fields data for the current $game
     * It used for sql query optimization when display game list
     * @param string $game
     * @return array
     */
    private function queryFields($client)
    {
	$orderby = array();
	$fields = array();
	$table = "";
	
	switch(strtolower($client))
	{
	    case "starcraft":
		// TODO: edit fields in compliance with new database fields
		$fields[] = "uid";
		$fields[] = "filename";
		$fields[] = "map";
		$fields[] = "gameid";
		$fields[] = "gameended";
		$fields[] = "p1name";
		$fields[] = "p1race";
		$fields[] = "p1rating";
		$fields[] = "p1adj";
		$fields[] = "p2name";
		$fields[] = "p2race";
		$fields[] = "p2race";
		$fields[] = "p2rating";
		$fields[] = "p2adj";

		$orderby['date'] = "DESC";
		$table = $this->t_starcraft;
		break;

	    default:
		return false;
	}
	return array("fields" => $fields, "orderby" => $orderby, "table" => $table);
    }


}

?>
