<?
#showstart
$strCaption="Battle.net server statistics";
include ("start.php");
include ("top/server.php");

?>
<p><b>Статистика сервера</b> <FONT COLOR="#C0C0C0"><? echo "Last Update: $sUpdate"; ?></FONT></p>
<b>IP-адрес:</b> 10.61.241.50<br>
<b>Открытые порты:</b> 6112(UDP), 6200(UDP), 6667(TCP)<br>
<b>Версия сервера:</b> PvPGN <? echo $sVersion ?><br>
<b>Работает:</b> <? echo $sUp ?><br>
<b>Текущие игры:</b> <? echo $sGames ?><br>
<b>Сейчас игроков:</b> <? echo $sUsers ?><br>
<b>Каналы:</b> <? echo $sChannels ?><br>
<b>Ладдерных игр:</b> <? echo $sAllGames+1 ?><br>
<b>Зарегистрировано игроков:</b> <? echo $sAllUsers ?>

