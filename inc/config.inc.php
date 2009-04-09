<?php
//main configuration file of hwstats

//mysql settings

$hostname="127.0.0.1";
$username="dbuser";
$password="dbpass";


$db_bnet="bnet"; //pvpgn database
$bnet_ip="games.utech.ru"; //pvpgn server address for all

$table_reports="hwreports";
$table_bnet="bnet";
$table_record="record";
$table_profile="profile";


$reports_all="/full_path_to/var/reports/"; #full path to pvpgn reports
$path_statusfile="var/server.xml"; //full_path_to var/server.xml


$games_on_page = 20; #games on page
$players_on_page = 40; #players on page
$trim_count = 4; #page numbers 4 def (по краям)
$show_player_ip = true; #показывать ип игроков? true | false

$forum_link = "http://games.utech.ru/forums/"; // ссылка на форум (вверху статистики)
$gzip = true; // сжимать выводимые страницы gzip'ом?

// минимальное колво символов для поиска игрока (меньше - ниже производительность)
$min_search_symbols = 3;

///--- do not change

$reports_sexp_ladder="reports/reports_sexp_ladder/"; #сюда копируются SEXP ladder
$reports_sexp="reports/reports_sexp/"; #сюда копируются репорты SEXP nonladder
$reports_others="reports/reports_others/"; #сюда копируются все остальные репорты
$path_lastupdate="bnet/top/lastupdate.txt"; //в файл записывается последнее обновление репортов
$report_tpl = "script/report.tpl"; // шаблон для парсинга репортов

if (isset($_SERVER['REMOTE_ADDR'])) #ip for user account
	$nip = $_SERVER['REMOTE_ADDR']; 
else 
	$nip="127.0.0.1";

$curdate=gmdate("ymd"); #текущая дата
$curtime=gmdate("His"); #текущее время
$fulldate = "$curdate$curtime"; #date
$realdate=gmmktime(); #тек. время с начала unix эпохи в секундах
$date_now=gmmktime(0,0,0,gmdate("m"),gmdate("d"),gmdate("y")); #тек. дата! с начала unix эпохи в секундах (без секунд)
$date_nowcounter=gmmktime(0,0,0,date("m"),date("d"),date("y")); #тек. дата! с начала unix эпохи в секундах (без секунд)




$h_back="<div align=right><a href='javascript:history.go(-1)'>Back</a></div>";
?>