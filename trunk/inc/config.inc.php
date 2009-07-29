<?php
// main configuration file of hwstats

// mysql settings

$hostname="127.0.0.1";
$username="root";
$password="";


$db_bnet="bnet"; //pvpgn database
$bnet_ip="127.0.0.1"; //pvpgn external server address

$table_reports="hwreports";
$table_bnet="bnet";
$table_record="record";
$table_profile="profile";

$PVPGN_PATH = "/usr/local/pvpgn/"; // full path to PVPGN (example: I:\\SERVERS\\PVPGN\\185\\pvpgn-1.8.5\\bin\\)

$games_on_page = 20; // games count on page
$players_on_page = 40; // players count on page
$trim_count = 4; // page numbers 4 def (page navigation bounds)
$show_player_ip = true; // show player IPs? true | false

$forum_link = "http://forums.harpywar.com"; // yoursite forum url
$gzip = true; // compress page with gzip?

// minimal count of symbols to search player (below - reduce perfomance)
$min_search_symbols = 3;

///--- do not change

$reports_all = $PVPGN_PATH . "var/reports/"; 
$path_statusfile = $PVPGN_PATH . "var/server.xml";

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