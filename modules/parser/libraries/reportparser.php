<?php defined('SYSPATH') or die('No direct script access.');


/**
 * PvPGN Report Parser
 *
 * @author HarpyWar
 * @version for pvpgn >= 1.8.x
 * @copyright (c) 2010, HarpyWar
 */
class ReportParser_Core
{
    private $template;

    public function __construct()
    {
	$template = file_get_contents(Kohana::config("parser.tpl_filename"));
    }


    /*
     * Process parsing
     */
    public function Process()
    {

    }


    /**
     * Function returns replay info from report file
     *
     * @param		string $filename	report filename
     * @param		string $template	report template filename
     * @return		array Like option => value
     */
    public function LoadReport($filename)
    {
	$content = file_get_contents($filename);

	$host = "";
	$port = 6112;
	// if host found
	if ( $hostport = strstr($content, "host=") )
	{
	    list($host, $port) = sscanf($hostport, "host=%[^:]:%u"); // get host and port
	    $content = ereg_replace("host=[^\n]+\n", "", $content); // delete host string
	}

	// parse report structure with template
	$ri = sscanf( $content, $this->template );

	$dates = $this->GetGameDateInfo($ri[5]);

	$info=array(
	    //game info
	    "gameName" => $ri[0],
	    "gameID" => $ri[1],
	    "clientTag" => enum::GetClientTag($ri[2]),
	    "gameType" => enum::GetGameType($ri[3]),
	    "gameOption" => enum::GetGameOption($ri[4]),
	    "gameCreated" => $dates[0],
	    "gameStarted" => $dates[1],
	    "gameEnded" => date(filemtime($filename)),

	    // TODO insert into database, if not exists
	    "map" => $ri[6],
	    "mapAuth" => enum::GetMapAuth($ri[7]),
	    "mapSize" => map::EncodeMapSize($ri[8], $ri[9]),
	    "tileSet" => enum::GetMapTileSet($ri[10]),
	    
	    "joins" => $ri[11],
	    "maxPlayers" => $ri[12],
	    "host" => $host,
	    "port" => $port,

	    //player1 info
	    "p1Name" => $ri[13], // TODO: Get player id
	    "p1Result" => enum::GetGameResult($ri[14]),
	    "p1Rating" => $ri[15],
	    "p1Num" => $ri[16],
	    "p1Prob" => $ri[17],
	    "p1K" => $ri[18],
	    "p1Adj" => $ri[19],

	    //player2 info
	    "p2Name" => $ri[20], // TODO: Get player id
	    "p2Result" => enum::GetGameResult($ri[21]),
	    "p2Rating" => $ri[22],
	    "p2Num" => $ri[23],
	    "p2Prob" => $ri[24],
	    "p2K" => $ri[25],
	    "p2Adj" => $ri[26],

	    //player1 results
	    "p1Map" => $ri[27], // do not insert
	    "p1League" => $ri[28], // do not insert
	    "p1GameID" => $ri[29],

	    "p1Race" => enum::GetRace($ri[30]),
	    "p1Time" => $ri[31],
	    "p1ScoreOverall" => $ri[32],
	    "p1Units" => $ri[33],
	    "p1Structures" => $ri[34],
	    "p1Resources" => $ri[35],
	    "p1UnitsScore" => $ri[36],
	    "p1Produced" => $ri[37],
	    "p1Killed" => $ri[38],
	    "p1LostU" => $ri[39],
	    "p1StructuresScore" => $ri[40],
	    "p1Constructed" => $ri[41],
	    "p1Razed" => $ri[42],
	    "p1LostS" => $ri[43],
	    "p1ResourcesScore" => $ri[44],
	    "p1Gas" => $ri[45],
	    "p1Minerals" => $ri[46],
	    "p1Spent" => $ri[47],

	    //player1 results
	    "p1Map" => $ri[48], // do not insert
	    "p1League" => $ri[49], // do not insert
	    "p1GameID" => $ri[50], // do not insert

	    "p2Race" => enum::GetRace($ri[51]),
	    "p2Time" => $ri[52],
	    "p2ScoreOverall" => $ri[53],
	    "p2Units" => $ri[54],
	    "p2Structures" => $ri[55],
	    "p2Resources" => $ri[56],
	    "p2UnitsScore" => $ri[57],
	    "p2Produced" => $ri[58],
	    "p2Killed" => $ri[59],
	    "p2LostU" => $ri[60],
	    "p2StructuresScore" => $ri[61],
	    "p2Constructed" => $ri[62],
	    "p2Razed" => $ri[63],
	    "p2LostS" => $ri[64],
	    "p2ResourcesScore" => $ri[65],
	    "p2Gas" => $ri[66],
	    "p2Minerals" => $ri[67],
	    "p2Spent" => $ri[68],

	    //game result
	    "p1NormalRecord" => sprintf("%u/%u/%u", $ri[70], $ri[71], $ri[72]),
	    "p2NormalRecord" => sprintf("%u/%u/%u", $ri[75], $ri[76], $ri[77]),

	    "p1LadderRecord" => sprintf("%u/%u/%u", $ri[80], $ri[81], $ri[82]),
	    "p2LadderRecord" => sprintf("%u/%u/%u", $ri[87], $ri[88], $ri[89]),

	    "gameDuration" => $ri[93],

	);
	return $info;

    }

    /**
     * parse dates from string
     *
     * @param	string created="%s" started="%s" ended="%s", dates may be null
     * @return	array (created, started, ended)
     */
    private function GetGameDateInfo($str)
    {
	preg_match_all("/\"([^\"]*)\"/", $str, $dates);
	return $dates[1];
    }

}

?>