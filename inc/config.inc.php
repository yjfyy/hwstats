<?php
// main configuration file of hwstats

// mysql settings

$hostname="127.0.0.1";
$username="dbuser";
$password="dbpass";


$db_bnet="bnet"; //pvpgn database
$bnet_ip="games.utech.ru"; //pvpgn server address for all

$table_reports="hwreports";
$table_bnet="bnet";
$table_record="record";
$table_profile="profile";


$reports_all="/full_path_to/var/reports/"; // full path to pvpgn reports
$path_statusfile="var/server.xml"; // full_path_to var/server.xml


$games_on_page = 20; // games count on page
$players_on_page = 40; // players count on page
$trim_count = 4; // page numbers 4 def (page navigation bounds)
$show_player_ip = true; // show player IPs? true | false

$forum_link = "http://forums.harpywar.com"; // yoursite forum url
$gzip = true; // compress page with gzip?

// minimal count of symbols to search player (below - reduce perfomance)
$min_search_symbols = 3;

///--- do not change


// copy parsed reports from pvpgn dir to:
$reports_sexp_ladder="reports/reports_sexp_ladder/"; # SEXP ladder 
$reports_sexp="reports/reports_sexp/"; // SEXP nonladder
$reports_others="reports/reports_others/"; // all others


$path_lastupdate="bnet/top/lastupdate.txt"; // into this file we write past reports parse
$report_tpl = "script/report.tpl"; // template for report parse

if (isset($_SERVER['REMOTE_ADDR'])) #ip for user account
	$nip = $_SERVER['REMOTE_ADDR']; 
else 
	$nip="127.0.0.1";

$curdate=gmdate("ymd"); // current date
$curtime=gmdate("His"); // current time
$fulldate = "$curdate$curtime"; // full date
$realdate=gmmktime(); // current unixtime
$date_now=gmmktime(0,0,0,gmdate("m"),gmdate("d"),gmdate("y")); // current unixtime in seconds (without seconds)
$date_nowcounter=gmmktime(0,0,0,date("m"),date("d"),date("y")); // current unixtime in seconds (without seconds and timezone link)




$h_back="<div align=right><a href='javascript:history.go(-1)'>Back</a></div>";
?>