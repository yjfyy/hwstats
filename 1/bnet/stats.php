<?
#showstart
$strCaption="Battle.net player statistics";
include ("start.php");
include ("top/server.php");

$pcount=26; #Переменная с кол-вом игроков. Сколько их зарегено на сервере, примерно +-1 здесь ставить надо.
?>
<h2>Top <? echo $pcount ?></h2>

		<table cellpadding="2" cellspacing="0" width="98%" border="1" bordercolor="white" class="infotable">
						<tr>

    <td nowrap class="header" width="7%">Rank</td>
    <td nowrap class="header" width="8%">Stats</td>
    <td nowrap class="header" width="13%">Nick</td>
    <td nowrap class="header" width="12%">Rating</td>
    <td nowrap class="header" width="9%">Victory</td>
    <td nowrap class="header" width="7%">Defeat</td>
    <td nowrap class="header" width="37%">Disconnects</td>
	<td nowrap class="header" width="7%"></td>
			</tr>
			<tr class="row">

<?
include("top/top.php");
$i=0;
while ($i != $pcount) {
$i++;
$t=$i-1;; #for expanded stats

if ($rank[$i]==1): $img1="GOSU"; $pp="";
elseif ($rank[$i]==2): $img1="GOS3"; $pp='<table cellpadding="2" cellspacing="0" width="98%" border="1" bordercolor="white" class="infotable"><tr class="row">';
elseif ($rank[$i]==3): $img1="HAS2"; $pp='<table cellpadding="2" cellspacing="0" width="98%" border="1" bordercolor="white" class="infotable"><tr class="row">';
elseif ($rank[$i]==4): $img1="CHO1"; $pp='<table cellpadding="2" cellspacing="0" width="98%" border="1" bordercolor="white" class="infotable"><tr class="row">';
else: $img1="NEWB"; $pp='<table cellpadding="2" cellspacing="0" width="98%" border="1" bordercolor="white" class="infotable"><tr class="row">';
endif;

include ("bnet/games/stat.php");
echo $pp.$txtstat;

}
?>