<?
#showstart
$strCaption="Battle.net server statistics";
include ("start.php");
include ("top/server.php");

?>
<p><b>���������� �������</b> <FONT COLOR="#C0C0C0"><? echo "Last Update: $sUpdate"; ?></FONT></p>
<b>IP-�����:</b> 10.61.241.50<br>
<b>�������� �����:</b> 6112(UDP), 6200(UDP), 6667(TCP)<br>
<b>������ �������:</b> PvPGN <? echo $sVersion ?><br>
<b>��������:</b> <? echo $sUp ?><br>
<b>������� ����:</b> <? echo $sGames ?><br>
<b>������ �������:</b> <? echo $sUsers ?><br>
<b>������:</b> <? echo $sChannels ?><br>
<b>��������� ���:</b> <? echo $sAllGames+1 ?><br>
<b>���������������� �������:</b> <? echo $sAllUsers ?>

