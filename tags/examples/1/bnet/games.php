<?
#showstart
$strCaption="Battle.net player statistics";
$pnum=$HTTP_GET_VARS["p"];


include ("start.php");


include("bnet/top/tops.php");
$i=0;
while ($name[$i] != $pnum) {
$i++;


}

if ($rank[$i]==1): $img1="GOSU";
elseif ($rank[$i]==2): $img1="GOS3";
elseif ($rank[$i]==3): $img1="HAS2";
elseif ($rank[$i]==4): $img1="CHO1";
else: $img1="NEWB";
endif;

echo '<h2>Player: '.$name[$i].'</h2>

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
			<tr class="row">';

$t=$u-1; #for expanded stats
include ("bnet/games/stat.php");
echo $txtstat; #echo stats.php

include ("bnet/games/users/".$p.".php");

if ($p1name[1]==""): echo "<br><h2>Never played ladder games</h2>";
else: echo "<br><h2>Ladder games</h2>";
endif;

$u=count($p1name)+1;
while ($u != 1) {
$u--;
include ("bnet/games/game.php");

}


?>