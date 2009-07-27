<?php
// PVPGN REPORT PARSER
// (c) 2006-2009, HarpyWar

$config = "full_path_to/inc/config.inc.php"; // full path to config.inc.php


// возвращает абсолютный путь к папке с hwstats, через файл конфига
function GetHWStatsPath($config)
{
	$path = str_replace("inc/config.inc.php", "", $config); // удалить конфиг
	return $path; 
}

require ($config);
require (GetHWStatsPath($config) . 'inc/functions.inc.php'); 


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
* return player race
*
* @param	string $race = "Zerg" | "Protoss" | "Terran" | "" (NULL)
* @return	string not null
*/
function GetRace($race)
{
	if (!$race)
		return "x3";
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
	
	
	// if host found
	if ( $hostport = strstr($content, "host=") )
	{
		list($host, $port) = sscanf($hostport, "host=%[^:]:%u"); // get host and port
		$content = ereg_replace("host=[^\n]+\n", "", $content); // delete host string
	}
		
	
	$ri = sscanf( $content, $template ); // report info
	
		$info=array(
		//game info
			"GameName" => $ri[0],
			"GameID" => $ri[1],
			"ClientTag" => $ri[2],
			"GameType" => $ri[3],
			"GameOption" => GetGameOption($ri[4]), // game option should be < 8 characters
			"GameCreated" => $ri[5],
			"GameStarted" => $ri[6],
			"GameEnded" => filemtime($filename),
			"Map" => $ri[8],
			"MapAuth" => $ri[9],
			"MapSize" => sprintf("%ux%u", $ri[10], $ri[11]),
			"TileSet" => $ri[12],
			"Joins" => $ri[13],
			"MaxPlayers" => $ri[14],
			"Host" => $host,
			"Port" => $port,

		//player1 info
			"p1Name" => $ri[15],
			"p1Result" => $ri[16],
			"p1Rating" => $ri[17],
			"p1Num" => $ri[18],
			"p1Prob" => $ri[19],
			"p1K" => $ri[20],
			"p1Adj" => $ri[21],

		//player2 info
			"p2Name" => $ri[22],
			"p2Result" => $ri[23],
			"p2Rating" => $ri[24],
			"p2Num" => $ri[25],
			"p2Prob" => $ri[26],
			"p2K" => $ri[27],
			"p2Adj" => $ri[28],

		//player1 results
			"p1Map" => $ri[29], // do not insert
			"p1League" => $ri[30], // do not insert
			"p1GameID" => $ri[31], // do not insert

			"p1Race" => GetRace($ri[32]), 
			"p1Time" => $ri[33], 
			"p1ScoreOverall" => $ri[34],
				"p1Units" => $ri[35],
				"p1Structures" => $ri[36],
				"p1Resources" => $ri[37],
			"p1UnitsScore" => $$ri[38],
				"p1Produced" => $ri[39],
				"p1Killed" => $ri[40],
				"p1LostU" => $ri[41],
			"p1StructuresScore" => $ri[42],
				"p1Constructed" => $ri[43],
				"p1Razed" => $ri[44],
				"p1LostS" => $ri[45],
			"p1ResourcesScore" => $ri[46],
				"p1Gas" => $ri[47],
				"p1Minerals" => $ri[48],
				"p1Spent" => $ri[49],

		//player1 results
			"p1Map" => $ri[50], // do not insert
			"p1League" => $ri[51], // do not insert
			"p1GameID" => $ri[52], // do not insert

			"p2Race" => GetRace($ri[53]),
			"p2Time" => $ri[54],
			"p2ScoreOverall" => $ri[55],
				"p2Units" => $ri[56],
				"p2Structures" => $ri[57],
				"p2Resources" => $ri[58],
			"p2UnitsScore" => $ri[59],
				"p2Produced" => $ri[60],
				"p2Killed" => $ri[61],
				"p2LostU" => $ri[62],
			"p2StructuresScore" => $ri[63],
				"p2Constructed" => $ri[64],
				"p2Razed" => $ri[65],
				"p2LostS" => $ri[66],
			"p2ResourcesScore" => $ri[67],
				"p2Gas" => $ri[68],
				"p2Minerals" => $ri[69],
				"p2Spent" => $ri[70],

		//game result
			"p1NormalRecord" => sprintf("%u/%u/%u", $ri[72], $ri[73], $ri[74]),
			"p2NormalRecord" => sprintf("%u/%u/%u", $ri[77], $ri[78], $ri[79]),

			"p1LadderRecord" => sprintf("%u/%u/%u", $ri[82], $ri[83], $ri[84]),
			"p2LadderRecord" => sprintf("%u/%u/%u", $ri[89], $ri[90], $ri[91]),

			"GameDuration" => $ri[95],

		);
	return $info;

}

MYSQL_CONNECT($hostname,$username,$password) OR DIE("Can not create connection");
@mysql_select_db($db_bnet) or die("Can not select database");

foreach (glob( $reports_all."*") as $filename) { #пройти все файлы
	$report_file=basename($filename); #real file name
	$repinfo=LoadReport($filename, GetHWStatsPath($config) . $report_tpl); #parse each file of di
	
echo $repinfo['ClientTag'];

	//exists report in mysql?
	//$result = MYSQL_QUERY("SELECT filename FROM $table_reports WHERE filename='$report_file' LIMIT 1");
	//$number = MYSQL_NUM_ROWS($result); #всего
	//if ($number>0) $r_filename=mysql_result($result,0,"filename"); #check this file in db mysql
	if (file_exists($filename) and $repinfo['ClientTag']=="SEXP" and $repinfo['p1Rating']>0 and $repinfo['p2Rating']>0 and $repinfo['GameDuration']>3) { #check true
		
	$result = MYSQL_QUERY("INSERT INTO `$table_reports` (
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
			if (file_exists(GetHWStatsPath($config) . $reports_sexp_ladder)) {
				rename ($filename, GetHWStatsPath($config) . $reports_sexp_ladder . $report_file); #...move to reports_sexp_ladder
				echo "<br>".$report_file." was moved to ".GetHWStatsPath($config) . $reports_sexp_ladder; #info message
							
			} else echo GetHWStatsPath($config) . "$reports_sexp_ladder not exists!";

		
	} 
	// если же репорт существует и он из diablo
	elseif (file_exists($filename)==true and ($repinfo['ClientTag']=="D2XP" or $repinfo['ClientTag']=="DRTL" or $repinfo['ClientTag']=="D2DV")) 
	{

		$result = MYSQL_QUERY("SELECT acct_username FROM $table_bnet WHERE acct_lastlogin_ip='".$repinfo['Host']."' ORDER BY acct_lastlogin_time DESC LIMIT 1");
		if (MYSQL_NUM_ROWS($result)>0) $repinfo['p1Name']=mysql_result($result,0,"acct_username"); #insert account name on this ip (от динамической подмены ипа, напр. ADSL)

		$result = MYSQL_QUERY("INSERT INTO `$table_reports` (
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
				rename ($filename, GetHWStatsPath($config) . $reports_others. $report_file); #...move to reports_sexp_ladder
				echo "<br>".$report_file." was moved to ". GetHWStatsPath($config) . $reports_others; #info message
			} else echo GetHWStatsPath($config) . "$reports_others not exists!";
	}


}

MYSQL_CLOSE();


#записать дату последнего обновления
		$text=date("H:i");
		$f = fopen(GetHWStatsPath($config) . "bnet/top/lastupdate.txt", "w");
		   fwrite($f,$text); // Пишем в файл содержимое строки $text;
		fclose($f);
#/записать дату последнего обновления



?>