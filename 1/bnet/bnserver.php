<?
#showstart
$strCaption="Battle.net server statistics";
include ("start.php");
include ("top/server.php")

?>

<table cellpadding="2" cellspacing="0" width="98%" border="1" bordercolor="white" class="infotable">
  <tr class="row">
  <td class="content" width="7%">&nbsp;<b><img src="index.files/note.ico" width="15" height="15" alt="" border=0> Статистика Battle.net сервера</b></td>
  </tr>
  <tr class="issuecontent" bgcolor="#ffffff">
    <td>
      <table width="98%" border="1" bordercolor="#dcdcdc" rules="cols" class="issuetable">
       <TD class="issuetable">
<b>Version:</b> <? echo $sVersion ?><br>
<b>Время работы:</b> <? echo $sUp ?><br>
<b>Игры:</b> <? echo $sGames ?><br>
<b>Пользователи:</b> <? echo $sUsers ?><br>
<b>Каналы:</b> <? echo $sChannels ?><br>
<b>Сыгранно игр:</b> <? echo $sAllGames ?><br>
<b>Зарегено игроков:</b> <? echo $sAllUsers ?><br>


<tr>

      </table>
     </td>

  </tr>
</table>