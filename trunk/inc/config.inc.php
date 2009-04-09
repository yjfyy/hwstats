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
$trim_count = 4; #page numbers 4 def (�� �����)
$show_player_ip = true; #���������� �� �������? true | false

$forum_link = "http://games.utech.ru/forums/"; // ������ �� ����� (������ ����������)
$gzip = true; // ������� ��������� �������� gzip'��?

// ����������� ����� �������� ��� ������ ������ (������ - ���� ������������������)
$min_search_symbols = 3;

///--- do not change

$reports_sexp_ladder="reports/reports_sexp_ladder/"; #���� ���������� SEXP ladder
$reports_sexp="reports/reports_sexp/"; #���� ���������� ������� SEXP nonladder
$reports_others="reports/reports_others/"; #���� ���������� ��� ��������� �������
$path_lastupdate="bnet/top/lastupdate.txt"; //� ���� ������������ ��������� ���������� ��������
$report_tpl = "script/report.tpl"; // ������ ��� �������� ��������

if (isset($_SERVER['REMOTE_ADDR'])) #ip for user account
	$nip = $_SERVER['REMOTE_ADDR']; 
else 
	$nip="127.0.0.1";

$curdate=gmdate("ymd"); #������� ����
$curtime=gmdate("His"); #������� �����
$fulldate = "$curdate$curtime"; #date
$realdate=gmmktime(); #���. ����� � ������ unix ����� � ��������
$date_now=gmmktime(0,0,0,gmdate("m"),gmdate("d"),gmdate("y")); #���. ����! � ������ unix ����� � �������� (��� ������)
$date_nowcounter=gmmktime(0,0,0,date("m"),date("d"),date("y")); #���. ����! � ������ unix ����� � �������� (��� ������)




$h_back="<div align=right><a href='javascript:history.go(-1)'>Back</a></div>";
?>