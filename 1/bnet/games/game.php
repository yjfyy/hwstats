<?
#$p1structureSc
#$p1unitSc
#$p1resourcesSc
#$p1overSc
#$p1race
#$p1result
#$p1normalN
#$p1ladderN
#
#

?>


<table cellpadding="2" cellspacing="0" width="98%" border="1" bordercolor="white" class="infotable" height="32">
  <tr>

<td nowrap class="header" width="6%">Game #</td>
    <td nowrap class="header" width="15%">Victory</td>
    <td nowrap class="header" width="5%">Race</td>
    <td nowrap class="header" width="4%">Result</td>
    <td nowrap class="header" width="5%">Race</td>
    <td nowrap class="header" width="15%">Defeat</td>
    <td nowrap class="header" width="18%">Map</td>
    <td nowrap class="header" width="30%">Date</td>
    <td nowrap class="header" width="2%">&nbsp;</td>
  </tr>
  <tr class="row">
    <td class="content" width="6%" height="18"><IMG alt="expand/collapse section" class="expandable" height="11" onclick="changepic()" src="index.files/Plus.gif" width="9"
child="issue<? echo $u ?>">&nbsp;
<? echo $u ?>
    <td class="content" width="20%" height="18">
      <div align="center"><b><a href="index.php?dir=bnet/&siteid=games&p=<? echo $p1name[$u] ?>"><? echo $p1name[$u] ?></a></b><br>
        <b><? echo $p1rating[$u] ?> (<span style="COLOR: green"><? echo $p1adj[$u] ?></span>)</b>
      </div>
    </td>
    <td class="content" valign=center width="5%" height="18"><img src="images/bnet/<? echo $p1race[$u] ?>.gif" width="31" height="29" alt="<? if ($p1race[$u]=="Z") {echo "Zerg";} elseif ($p1race[$u]=="P") {echo "Protoss";} elseif ($p1race[$u]=="T") {echo "Terran";} else {echo "x3";}?>"></td>
<td class="content"width="4%" height="18">
      <div class="content" align="center">def</div>
    </td>
    <td class="content" valign=center width="5%" height="18"><img src="images/bnet/<? echo $p2race[$u] ?>.gif" width="31" height="29" alt="<? if ($p2race[$u]=="Z") {echo "Zerg";} elseif ($p2race[$u]=="P") {echo "Protoss";} elseif ($p2race[$u]=="T") {echo "Terran";} else {echo "x3";}?>"></td>
<td class="content" width="15%" height="18"><div align="center"><b><a href="index.php?dir=bnet/&siteid=games&p=<? echo $p2name[$u] ?>"><? echo $p2name[$u] ?></a></b><br>
        <b><? echo $p2rating[$u] ?> (<span style="COLOR: red"><? echo $p2adj[$u] ?></span>)</b>
      </div>
    </td>
    <td class="content" width="17%" height="18"><? echo $map[$u] ?></td>
    <td class="content" width="30%" height="18"><? echo $gdate[$u] ?></td>
    <td class="content" width="2%" height="18">&nbsp;</td>
  </tr>

          <tr class="collapsed" id="issue<? echo $u ?>" bgcolor="#ffffff"><td colspan="8">
      <table width="97%" border="1" bordercolor="#dcdcdc" rules="cols" class="issuetable">
        <? if ($p1race[$u] != "x3" and $p1race[$u] != "x3") { echo '
        <tr>
          <td width=10% class="issuehdr">&nbsp;</td>
          <td class="score" width="43">units</td>
          <td class="score" width="64">structures</td>
          <td class="score" width="61">resources</td>
          <td class="unites" width="75">produced</td>
          <td class="unites" width="82">killed</td>
          <td class="unites" width="29">lost</td>
          <td class="structures" width="84">constructed</td>
          <td class="structures" width="106">razed</td>
          <td class="structures" width="71">lost</td>
          <td class="resources" width="55">gas</td>
          <td class="resources" width="57">minerals</td>
          <td class="resources" width="29">spent</td>
        </tr>
        <tr>
          <td width=10% class="issuecontent">'.$p1name[$u].'</td>
          <td class="issuecontent" nowrap width="43">
            <div align="left">'.$p1units[$u].'</div>
          </td>
          <td class="issuecontent" width="64">
            <div align="left">'.$p1structures[$u].'</div>
          </td>
          <td class="issuecontent" width="61">'.$p1resources[$u].'</td>
          <td class="issuecontent" width="75">'.$p1produced[$u].'</td>
          <td class="issuecontent" width="82">'.$p1killed[$u].'</td>
          <td class="issuecontent" width="29">'.$p1lost[$u].'</td>
          <td class="issuecontent" width="84">'.$p1constructed[$u].'</td>
          <td class="issuecontent" width="106">'.$p1razed[$u].'</td>
          <td class="issuecontent" width="71">'.$p1slost[$u].'</td>
          <td class="issuecontent" width="55">'.$p1gas[$u].'</td>
          <td class="issuecontent" width="57">'.$p1minerals[$u].'</td>
          <td class="issuecontent" width="29">'.$p1spent[$u].'</td>
        </tr>
        <tr>
          <td width=10% class="issuecontent">'.$p2name[$u].'</td>
          <td class="issuecontent" nowrap width="43">'.$p2units[$u].'</td>
          <td class="issuecontent" width="64">'.$p2structures[$u].'</td>
          <td class="issuecontent" width="61">'.$p2resources[$u].'</td>
          <td class="issuecontent" width="75">'.$p2produced[$u].'</td>
          <td class="issuecontent" width="82">'.$p2killed[$u].'</td>
          <td class="issuecontent" width="29">'.$p2lost[$u].'</td>
          <td class="issuecontent" width="84">'.$p2constructed[$u].'</td>
          <td class="issuecontent" width="106">'.$p2razed[$u].'</td>
          <td class="issuecontent" width="71">'.$p2slost[$u].'</td>
          <td class="issuecontent" width="55">'.$p2gas[$u].'</td>
          <td class="issuecontent" width="57">'.$p2minerals[$u].'</td>
          <td class="issuecontent" width="29">'.$p2spent[$u].'</td>
        </tr>
        ';}
        ?>
        <tr>
          <td width=10% class="issuehdr">&nbsp;</td>
          <td class="issuehdr" width="43">Rating</td>
          <td class="issuehdr" width="64">Ladder</td>
          <td class="issuehdr" width="61">Normal</td>
          <td class="issuehdr" width="75">Race</td>
          <td class="issuehdr" width="82">Result</td>
          <td class="issuehdr" width="29">K</td>
          <td class="issuehdr" width="84">Probablity</td>
          <td class="issuehdr" width="106">Time</td>
          <td class="content" width="71">ScoreOverAll</td>
          <td class="unites" width="55">UnitScore</td>
          <td class="structures" width="57">StructScore</td>
          <td class="resources" width="29">ResScore</td>
        </tr>

        <tr>
          <td width=10% class="issuecontent"><? echo $p1name[$u] ?></td>
          <td class="issuecontent" width="61"><? echo $p1rating[$u] ?></td>
          <td class="issuecontent" width="75"><? echo $p1ladderN[$u] ?></td>
          <td class="issuecontent" width="82"><? echo $p1normalN[$u] ?></td>
          <td class="issuecontent" width="29"><? if ($p1race[$u]=="Z") {echo "Zerg";} elseif ($p1race[$u]=="P") {echo "Protoss";} elseif ($p1race[$u]=="T") {echo "Terran";} else {echo "x3";}?></td>
          <td class="issuecontent" width="82"><? echo $p1result[$u] ?></td>
          <td class="issuecontent" width="29"><? echo $p1k[$u] ?></td>
          <td class="issuecontent" width="84"><? echo $p1prob[$u] ?></td>
          <td class="issuecontent" width="106"><? echo $p1time[$u] ?></td>
          <td class="issuecontent" width="71"><? echo $p1overSc[$u] ?></td>
          <td class="issuecontent" width="55"><? echo $p1unitSc[$u] ?></td>
          <td class="issuecontent" width="57"><? echo $p1structSc[$u] ?></td>
          <td class="issuecontent" width="29"><? echo $p1resSc[$u] ?></td>
        </tr>
        <tr>
          <td width=10% class="issuecontent"><? echo $p2name[$u] ?></td>
          <td class="issuecontent" width="61"><? echo $p2rating[$u] ?></td>
          <td class="issuecontent" width="75"><? echo $p2ladderN[$u] ?></td>
          <td class="issuecontent" width="82"><? echo $p2normalN[$u] ?></td>
          <td class="issuecontent" width="29"><? if ($p2race[$u]=="Z") {echo "Zerg";} elseif ($p2race[$u]=="P") {echo "Protoss";} elseif ($p2race[$u]=="T") {echo "Terran";} else {echo "x3";}?></td>
          <td class="issuecontent" width="82"><? echo $p2result[$u] ?></td>
          <td class="issuecontent" width="29"><? echo $p2k[$u] ?></td>
          <td class="issuecontent" width="84"><? echo $p2prob[$u] ?></td>
          <td class="issuecontent" width="106"><? echo $p2time[$u] ?></td>
          <td class="issuecontent" width="71"><? echo $p2overSc[$u] ?></td>
          <td class="issuecontent" width="55"><? echo $p2unitSc[$u] ?></td>
          <td class="issuecontent" width="57"><? echo $p2structSc[$u] ?></td>
          <td class="issuecontent" width="29"><? echo $p2resSc[$u] ?></td>
        </tr>

        <tr>
          <td width10% class="issuehdr">&nbsp;</td>
          <td class="issuehdr" nowrap width="43">Name</td>
          <td class="issuehdr" width="64">ID</td>
          <td class="issuehdr" width="61">Type</td>
          <td class="issuehdr" width="75">Option</td>
          <td class="issuehdr" width="82">Maxplayers</td>
          <td class="issuehdr" width="29">Joins</td>
          <td class="issuehdr" width="84">Host IP</td>
		  <td class="issuehdr" width="57">Clienttag</td>
          <td class="issuehdr" width="106">Time</td>
          <td class="content" width="71">Size</td>
          <td class="content" width="55">Tileset</td>
          <td class="content" width="57">Author</td>
        </tr>
        <tr>
          <td width=10% class="issuecontent">Game stats</td>
          <td class="issuecontent" nowrap width="43"><? echo $gname[$u] ?></td>
          <td class="issuecontent" width="64"><? echo $gnumber[$u] ?></td>
          <td class="issuecontent" width="61"><? echo $gtype[$u] ?></td>
          <td class="issuecontent" width="75"><? echo $goption[$u] ?></td>
          <td class="issuecontent" width="82"><? echo $maxplayers[$u] ?></td>
          <td class="issuecontent" width="29"><? echo $gjoins[$u] ?></td>
          <td class="issuecontent" width="84"><? echo $ghost[$u] ?></td>
		  <td class="issuecontent" width="84"><? echo $gclienttag[$u] ?></td>
          <td class="issuecontent" width="106"><? echo "$gtime[$u] minutes" ?></td>
          <td class="issuecontent" width="71"><? echo $msize[$u] ?></td>
          <td class="issuecontent" width="55"><? echo $mtileset[$u] ?></td>
          <td class="issuecontent" width="57"><? echo $mauthor[$u] ?></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr valign="top">
    <td class="foot" width="6%" height="2">
      <div align="right">Elapsed</div>
    </td>
    <td class="foot" width="10%" height="2"> time: <? echo $gtime[$u] ?> minutes</td>
    <td class="foot" width="5%" height="2">&nbsp;</td>
    <td class="foot" width="4%" height="2">&nbsp; </td>
    <td class="foot" width="5%" height="2">&nbsp;</td>
    <td class="foot" width="21%" height="2">&nbsp;</td>
    <td class="foot" width="17%" height="2">&nbsp;</td>
    <td class="foot" width="30%" height="2">&nbsp;</td>
    <td class="foot" width="2%" height="2">&nbsp;</td>
  </tr>
</table>