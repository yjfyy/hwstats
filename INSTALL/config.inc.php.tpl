<?php
// main configuration file of hwstats

// mysql settings
DEFINE ("MYSQL_HOST", "%s");
DEFINE ("MYSQL_USER", "%s");
DEFINE ("MYSQL_PASSWORD", "%s");


DEFINE ("MYSQL_DB", "%s"); //pvpgn database

DEFINE ("EXTERNAL_ADDRESS", "%s"); // pvpgn external server address

// mysql tables
DEFINE ("TABLE_REPORTS", "hwreports"); // should not change
DEFINE ("TABLE_BNET", "%s");
DEFINE ("TABLE_RECORD", "%s");

// full path to PVPGN
//  (windows example: I:\\SERVERS\\PVPGN\\185\\pvpgn-1.8.5\\bin\\)
//  (unix example: /usr/local/pvpgn/)
$PVPGN_PATH = "%s";

$games_on_page = %s; // games count on page
$players_on_page = %s; // players count on page
$trim_count = %s; // page numbers 4 def (page navigation bounds)

DEFINE ("SHOW_PLAYER_IP", %s); // show player IPs? true | false
DEFINE ("SHOW_CHANNELS", %s); // show channel list in server status page?
DEFINE ("GZIP_COMPRESS", %s); // compress output pages with gzip?

$forum_link = "http://%s"; // yoursite forum url

// minimal count of symbols to search player (below - reduce perfomance)
$min_search_symbols = %d;


///--- DO NOT CHANGE!

DEFINE ("STATUS_FILE", $PVPGN_PATH . "var/status/server.xml");

$reports_all = $PVPGN_PATH . "var/reports/"; 

// copy parsed reports from pvpgn dir to:
$reports_sexp_ladder="reports/reports_sexp_ladder/"; // SEXP ladder
$reports_sexp="reports/reports_sexp/"; // SEXP nonladder
$reports_others="reports/reports_others/"; // all others


$path_lastupdate="bnet/top/lastupdate.txt"; // into this file we write past reports parse
$report_tpl = "script/report.tpl"; // template for report parse

?>