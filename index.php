<?php
	$time1 = time(); //����� � ������ �������
	$time_m1 = microtime(); 

require ("inc/config.inc.php");
require ("inc/functions.inc.php");
	
	
$hwgame=GETGetValue("game");
$hwtype=GETGetValue("type");
$searchPlayer = GETGetValue("search");
$searchLike = GETGetValue("like"); // ������ ����� �� ������? FALSE|on

$hwplayer = (!$searchLike) ? GETGetValue("user") : $searchPlayer;


$current_page=GETGetValue("page");
	if ($current_page=="" or $current_page<=0) $current_page=1;


if ( $hwgame == "SEXP")
{
	require ("inc/start.html");
	if ( $hwplayer or $searchLike ) // ���� ������ ����� �� ������, �� ������� ������
	{
		require ("bnet/games.php");
	}
	elseif ( !$hwplayer ) // �������� �����
	{
		require ("bnet/stats.php");
	}

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


	$time2 = time(); //����� � ����� �������
	$mtime = abs ($time2 - $time1);
	$time_m2 = microtime();
	$mtime_m = abs ($time_m2 - $time_m1);
	$mtime_m = substr($mtime_m, 2, 3);
	$mtime .= "." .$mtime_m;
		
	require ("inc/end.html");
?>
