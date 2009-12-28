<?php
// PVPGN REPORT PARSER
// (c) 2006-2009, HarpyWar
// http://harpywar.com

// IMPORTANT: To run this script setup shell script for cron "script\start\parse_reports*"

define('HWSTATSPATH', realpath(dirname(__FILE__).DIRECTORY_SEPARATOR.'..').DIRECTORY_SEPARATOR); // absolute path to hwstats root dir

require (HWSTATSPATH . "inc/config.inc.php");
require (HWSTATSPATH . "inc/functions.inc.php");


/**
 * Function returns short game option
 *
 * @param string $option variants: "one on one" | "top vs bottom" | "free for all" | "Diablo II (closed)" | "Diablo II (open)" | "unknown"
 * @return string Full game option name
 *
 */
function GetGameOption($option)
{
    switch ($option)
    {
        case "one on one":
            $text = "one"; break;
        case "top vs bottom":
            $text = "top"; break;
        case "free for all":
            $text = "ffa"; break;
        case "Diablo II (closed)":
            $text = "d2closed"; break;
        case "Diablo II (open)":
            $text = "d2open"; break;

        default:
            $text = "unknown";
    }
    return $text;
}

/**
 * parse dates from string
 *
 * @param	string created="%s" started="%s" ended="%s", dates may be null
 * @return	array (created, started, ended)
 */
function GetGameDateInfo($str)
{
    preg_match_all("/\"([^\"]*)\"/", $str, $dates);
    return $dates[1];
}

/**
 * return player race
 *
 * @param	string $race = "Zerg" | "Protoss" | "Terran" | "" (NULL)
 * @return	string not null
 */
function GetRace($race)
{
    if (!$race)
        return "x3";
    return $race;
}


/**
 * Function returns replay info from report file
 * @copyright	HarpyWar 2009
 * @version		for pvpgn >= 1.8.x
 *
 * @param		string $filename	report filename
 * @param		string $template	report template filename
 * @return		array Like option => value
 */
function LoadReport($filename, $template)
{
    $template = file_get_contents($template);
    $content = file_get_contents($filename);

    $host = "";
    $port = 6112;
    // if host found
    if ( $hostport = strstr($content, "host=") )
    {
        list($host, $port) = sscanf($hostport, "host=%[^:]:%u"); // get host and port
        $content = ereg_replace("host=[^\n]+\n", "", $content); // delete host string
    }

    $ri = sscanf( $content, $template ); // report info

    $dates = GetGameDateInfo($ri[5]);

    $info=array(
        //game info
        "GameName" => $ri[0],
        "GameID" => $ri[1],
        "ClientTag" => $ri[2],
        "GameType" => GetGameOption($ri[3]),
        "GameOption" => $ri[4], // game option should be < 8 characters
        "GameCreated" => $dates[0],
        "GameStarted" => $dates[1],
        "GameEnded" => filemtime($filename),

        "Map" => $ri[6],
        "MapAuth" => $ri[7],
        "MapSize" => sprintf("%ux%u", $ri[8], $ri[9]),
        "TileSet" => $ri[10],
        "Joins" => $ri[11],
        "MaxPlayers" => $ri[12],
        "Host" => $host,
        "Port" => $port,

        //player1 info
        "p1Name" => $ri[13],
        "p1Result" => $ri[14],
        "p1Rating" => $ri[15],
        "p1Num" => $ri[16],
        "p1Prob" => $ri[17],
        "p1K" => $ri[18],
        "p1Adj" => $ri[19],

        //player2 info
        "p2Name" => $ri[20],
        "p2Result" => $ri[21],
        "p2Rating" => $ri[22],
        "p2Num" => $ri[23],
        "p2Prob" => $ri[24],
        "p2K" => $ri[25],
        "p2Adj" => $ri[26],

        //player1 results
        "p1Map" => $ri[27], // do not insert
        "p1League" => $ri[28], // do not insert
        "p1GameID" => $ri[29], // do not insert

        "p1Race" => GetRace($ri[30]),
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

        "p2Race" => GetRace($ri[51]),
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

        "GameDuration" => $ri[93],

    );
    return $info;

}

$db = MYSQL_CONNECT(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) OR DIE("Can not create connection");
@mysql_select_db(MYSQL_DB, $db) or die("Can not select database");

foreach (glob( $reports_all."*") as $filename) { #пройти все файлы
    $report_file=basename($filename); #real file name
    $repinfo=LoadReport($filename, HWSTATSPATH . $report_tpl); #parse each file of di

    #echo $repinfo['ClientTag'];

    //exists report in mysql?
    //$result = MYSQL_QUERY("SELECT filename FROM ".TABLE_REPORTS." WHERE filename='$report_file' LIMIT 1");
    //$number = MYSQL_NUM_ROWS($result); #всего
    //if ($number>0) $r_filename=mysql_result($result,0,"filename"); #check this file in db mysql
    if (file_exists($filename) and $repinfo['ClientTag']=="SEXP" and $repinfo['p1Rating']>0 and $repinfo['p2Rating']>0 and $repinfo['GameDuration']>3) { #check true

        $result = MYSQL_QUERY("INSERT INTO `".TABLE_REPORTS."` (
			`filename`,
			`gamename`,
			`gameid`,
			`clienttag`,
			`gametype`,
			`gameoption`,
			`gamecreated`,
			`gamestarted`,
			`gameended`,
			`map`,
			`mapAuth`,
			`mapSize`,
			`tileSet`,
			`joins`,
			`maxplayers`,
			`host`,
			`port`,
			`p1name`,
			`p1result`,
			`p1rating`,
			`p1num`,
			`p1prob`,
			`p1k`,
			`p1adj`,
			`p2name`,
			`p2result`,
			`p2rating`,
			`p2num`,
			`p2prob`,
			`p2k`,
			`p2adj`,
			`p1race`,
			`p1time`,
			`p1scoreoverall`,
			`p1units`,
			`p1structures`,
			`p1resources`,
			`p1unitsScore`,
			`p1produced`,
			`p1killed`,
			`p1lostu`,
			`p1structuresscore`,
			`p1constructed`,
			`p1razed`,
			`p1losts`,
			`p1resourcesscore`,
			`p1gas`,
			`p1minerals`,
			`p1spent`,
			`p2race`,
			`p2time`,
			`p2scoreoverall`,
			`p2units`,
			`p2structures`,
			`p2resources`,
			`p2unitsscore`,
			`p2produced`,
			`p2killed`,
			`p2lostu`,
			`p2structuresscore`,
			`p2constructed`,
			`p2razed`,
			`p2losts`,
			`p2resourcesscore`,
			`p2gas`,
			`p2minerals`,
			`p2spent`,
			`p1normalrecord`,
			`p2normalrecord`,
			`p1ladderrecord`,
			`p2ladderrecord`,
			`gameduration`
	  )
		VALUES (
			'".$report_file."',
			'".$repinfo['GameName']."',
			'".$repinfo['GameID']."',
			'".$repinfo['ClientTag']."',
			'".$repinfo['GameType']."',
			'".$repinfo['GameOption']."',
			'".$repinfo['GameCreated']."',
			'".$repinfo['GameStarted']."',
			'".$repinfo['GameEnded']."',
			'".$repinfo['Map']."',
			'".$repinfo['MapAuth']."',
			'".$repinfo['MapSize']."',
			'".$repinfo['TileSet']."',
			'".$repinfo['Joins']."',
			'".$repinfo['MaxPlayers']."',
			'".$repinfo['Host']."',
			'".$repinfo['Port']."',
			'".$repinfo['p1Name']."',
			'".$repinfo['p1Result']."',
			'".$repinfo['p1Rating']."',
			'".$repinfo['p1Num']."',
			'".$repinfo['p1Prob']."',
			'".$repinfo['p1K']."',
			'".$repinfo['p1Adj']."',
			'".$repinfo['p2Name']."',
			'".$repinfo['p2Result']."',
			'".$repinfo['p2Rating']."',
			'".$repinfo['p2Num']."',
			'".$repinfo['p2Prob']."',
			'".$repinfo['p2K']."',
			'".$repinfo['p2Adj']."',
			'".$repinfo['p1Race']."',
			'".$repinfo['p1Time']."',
			'".$repinfo['p1ScoreOverall']."',
			'".$repinfo['p1Units']."',
			'".$repinfo['p1Structures']."',
			'".$repinfo['p1Resources']."',
			'".$repinfo['p1UnitsScore']."',
			'".$repinfo['p1Produced']."',
			'".$repinfo['p1Killed']."',
			'".$repinfo['p1LostU']."',
			'".$repinfo['p1StructuresScore']."',
			'".$repinfo['p1Constructed']."',
			'".$repinfo['p1Razed']."',
			'".$repinfo['p1LostS']."',
			'".$repinfo['p1ResourcesScore']."',
			'".$repinfo['p1Gas']."',
			'".$repinfo['p1Minerals']."',
			'".$repinfo['p1Spent']."',
			'".$repinfo['p2Race']."',
			'".$repinfo['p2Time']."',
			'".$repinfo['p2ScoreOverall']."',
			'".$repinfo['p2Units']."',
			'".$repinfo['p2Structures']."',
			'".$repinfo['p2Resources']."',
			'".$repinfo['p2UnitsScore']."',
			'".$repinfo['p2Produced']."',
			'".$repinfo['p2Killed']."',
			'".$repinfo['p2LostU']."',
			'".$repinfo['p2StructuresScore']."',
			'".$repinfo['p2Constructed']."',
			'".$repinfo['p2Razed']."',
			'".$repinfo['p2LostS']."',
			'".$repinfo['p2ResourcesScore']."',
			'".$repinfo['p2Gas']."',
			'".$repinfo['p2Minerals']."',
			'".$repinfo['p2Spent']."',
			'".$repinfo['p1NormalRecord']."',
			'".$repinfo['p2NormalRecord']."',
			'".$repinfo['p1LadderRecord']."',
			'".$repinfo['p2LadderRecord']."',
			'".$repinfo['GameDuration']."'
		);");

        // если путь к репортам SEXP ladder существует,
        if (file_exists(HWSTATSPATH . $reports_sexp_ladder)) {
            rename ($filename, HWSTATSPATH . $reports_sexp_ladder . $report_file); #...move to reports_sexp_ladder
            echo "<br>".$report_file." was moved to ".HWSTATSPATH . $reports_sexp_ladder; #info message

        } else echo HWSTATSPATH . "$reports_sexp_ladder not exists!";


    }
    // если же репорт существует и он из diablo
    elseif (file_exists($filename)==true and ($repinfo['ClientTag']=="D2XP" or $repinfo['ClientTag']=="DRTL" or $repinfo['ClientTag']=="D2DV"))
    {

        $result = MYSQL_QUERY("SELECT acct_username FROM ".TABLE_BNET." WHERE acct_lastlogin_ip='".$repinfo['Host']."' ORDER BY acct_lastlogin_time DESC LIMIT 1");
        if (MYSQL_NUM_ROWS($result)>0) $repinfo['p1Name']=mysql_result($result,0,"acct_username"); #insert account name on this ip (от динамической подмены ипа, напр. ADSL)

        $result = MYSQL_QUERY("INSERT INTO `".TABLE_REPORTS."` (
			`filename`,
			`gamename`,
			`gameid`,
			`clienttag`,
			`gametype`,
			`gameoption`,
			`gamecreated`,
			`gamestarted`,
			`gameended`,
			`map`,
			`mapAuth`,
			`mapSize`,
			`tileSet`,
			`joins`,
			`maxplayers`,
			`host`,
			`port`,
			`p1name`,
			`p2name`,
			`gameduration`
		  )
			VALUES (
			'".$report_file."',
			'".$repinfo['GameName']."',
			'".$repinfo['GameID']."',
			'".$repinfo['ClientTag']."',
			'".$repinfo['GameType']."',
			'".$repinfo['GameOption']."',
			'".$repinfo['GameCreated']."',
			'".$repinfo['GameStarted']."',
			'".$repinfo['GameEnded']."',
			'".$repinfo['Map']."',
			'".$repinfo['MapAuth']."',
			'".$repinfo['MapSize']."',
			'".$repinfo['TileSet']."',
			'".$repinfo['Joins']."',
			'".$repinfo['MaxPlayers']."',
			'".$repinfo['Host']."',
			'".$repinfo['Port']."',
			'".$repinfo['p1Name']."',
			'".$repinfo['p2Name']."',
			'".$repinfo['GameDuration']."'
		);");

        unlink($filename); #...remove diablo report
        echo "<br>".$report_file." was deleted (Diablo)"; #info message


    } else { #if other game...

        if (file_exists($filename)) {
            rename ($filename, HWSTATSPATH . $reports_others. $report_file); #...move to reports_sexp_ladder
            echo "<br>".$report_file." was moved to ". HWSTATSPATH . $reports_others; #info message
        } else echo HWSTATSPATH . "$reports_others not exists!";
    }


}

MYSQL_CLOSE($db);


// записать дату последнего обновления
WriteToFile(HWSTATSPATH . "bnet/top/lastupdate.txt", date("H:i"));

?>