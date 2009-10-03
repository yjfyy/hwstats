<?php
#error_reporting(0);

$time1 = time(); // page generation time start
$time_m1 = microtime(); 


require ("inc/functions.inc.php");

if ( !file_exists("inc/config.inc.php") )
    header("location: install.php");
if ( file_exists("install.php") )
    ShowError("Now you should remove install.php");


require ("inc/config.inc.php");

// enable gzip if defined
if (GZIP_COMPRESS)
    require("inc/gzip.inc.php");


$hwgame=GETGetValue("game");
$hwtype=GETGetValue("type");
$searchPlayer = GETGetValue("search");
$searchLike = GETGetValue("like"); // is exact seach by player? FALSE|on

$hwplayer = (!$searchLike) ? GETGetValue("user") : $searchPlayer;


$current_page=GETGetValue("page");
if ($current_page=="" or $current_page<=0) $current_page=1;


if ( $hwgame == "SEXP")
{
    $mysql = @MYSQL_CONNECT(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) OR DIE("Can not create connection");
    @mysql_select_db(MYSQL_DB, $mysql) or die("Can not select database");

    require ("inc/start.html");
    if ( $hwplayer or $searchLike ) // if exact search by player, show the player
    {
        require ("bnet/games.php");
    }
    elseif ( !$hwplayer ) // non exact search
    {
        require ("bnet/stats.php");
    }
    MYSQL_CLOSE($mysql);
}
elseif ( $hwgame == "PVPGN")
{
    require ("inc/start.html");
    require ("bnet/bnserver.php");
}
else
{
    header("Location: index.php?game=SEXP&type=1");
}

// page generation time end
$time2 = time();
$mtime = abs ($time2 - $time1);
$time_m2 = microtime();
$mtime_m = abs ($time_m2 - $time_m1);
$mtime_m = substr($mtime_m, 2, 3);
$mtime .= "." .$mtime_m;

require ("inc/end.html");
?>
