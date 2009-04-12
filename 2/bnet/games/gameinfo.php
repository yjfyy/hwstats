</table><table>

        <? if ($p1race[$u] != "x3") { echo '
        <tr>
          <td class="rankingHeader">&nbsp;</td>
          <td class="rankingHeader">units</td>
          <td class="rankingHeader">structures</td>
          <td class="rankingHeader">resources</td>
          <td class="rankingHeader">produced</td>
          <td class="rankingHeader">killed</td>
          <td class="rankingHeader">lost</td>
          <td class="rankingHeader">constructed</td>
          <td class="rankingHeader" >razed</td>
          <td class="rankingHeader">lost</td>
          <td class="rankingHeader" >gas</td>
          <td class="rankingHeader">minerals</td>
          <td class="rankingHeader">spent</td>
        </tr>
        <tr>
          <td class="rankingHeader">'.$p1name[$u].'</td>
          <td class="rankingrow" nowrap >
            <div align="left">'.$p1units[$u].'</div>
          </td>
          <td class="rankingrow">
            <div align="left">'.$p1structures[$u].'</div>
          </td>
          <td class="rankingrow">'.$p1resources[$u].'</td>
          <td class="rankingrow">'.$p1produced[$u].'</td>
          <td class="rankingrow">'.$p1killed[$u].'</td>
          <td class="rankingrow">'.$p1lost[$u].'</td>
          <td class="rankingrow" >'.$p1constructed[$u].'</td>
          <td class="rankingrow">'.$p1razed[$u].'</td>
          <td class="rankingrow">'.$p1slost[$u].'</td>
          <td class="rankingrow">'.$p1gas[$u].'</td>
          <td class="rankingrow">'.$p1minerals[$u].'</td>
          <td class="rankingrow">'.$p1spent[$u].'</td>
        </tr>
        <tr>
          <td class="rankingHeader">'.$p2name[$u].'</td>
          <td class="rankingrow" nowrap>'.$p2units[$u].'</td>
          <td class="rankingrow">'.$p2structures[$u].'</td>
          <td class="rankingrow" >'.$p2resources[$u].'</td>
          <td class="rankingrow">'.$p2produced[$u].'</td>
          <td class="rankingrow" >'.$p2killed[$u].'</td>
          <td class="rankingrow" >'.$p2lost[$u].'</td>
          <td class="rankingrow" >'.$p2constructed[$u].'</td>
          <td class="rankingrow">'.$p2razed[$u].'</td>
          <td class="rankingrow">'.$p2slost[$u].'</td>
          <td class="rankingrow">'.$p2gas[$u].'</td>
          <td class="rankingrow">'.$p2minerals[$u].'</td>
          <td class="rankingrow">'.$p2spent[$u].'</td>
        </tr>
        ';}
        ?>
        <tr>
          <td class="rankingHeader">&nbsp;</td>
          <td class="rankingHeader" >Rating</td>
          <td class="rankingHeader" >Ladder</td>
          <td class="rankingHeader" >Normal</td>
          <td class="rankingHeader">Race</td>
          <td class="rankingHeader">Result</td>
          <td class="rankingHeader">K</td>
          <td class="rankingHeader">Probablity</td>
          <td class="rankingHeader">Time</td>
          <td class="rankingHeader">ScoreOverAll</td>
          <td class="rankingHeader">UnitScore</td>
          <td class="rankingHeader">StructScore</td>
          <td class="rankingHeader">ResScore</td>
        </tr>

        <tr>
          <td  class="rankingHeader"><? echo $p1name[$u] ?></td>
          <td class="rankingrow"><? echo $p1rating[$u] ?></td>
          <td class="rankingrow"><? echo $p1ladderN[$u] ?></td>
          <td class="rankingrow"><? echo $p1normalN[$u] ?></td>
          <td class="rankingrow" ><? if ($p1race[$u]=="Z") {echo "Zerg";} elseif ($p1race[$u]=="P") {echo "Protoss";} elseif ($p1race[$u]=="T") {echo "Terran";} else {echo "x3";}?></td>
          <td class="rankingrow"><? echo $p1result[$u] ?></td>
          <td class="rankingrow" ><? echo $p1k[$u] ?></td>
          <td class="rankingrow" ><? echo $p1prob[$u] ?></td>
          <td class="rankingrow" ><? echo $p1time[$u] ?></td>
          <td class="rankingrow"><? echo $p1overSc[$u] ?></td>
          <td class="rankingrow"><? echo $p1unitSc[$u] ?></td>
          <td class="rankingrow"><? echo $p1structSc[$u] ?></td>
          <td class="rankingrow" ><? echo $p1resSc[$u] ?></td>
        </tr>
        <tr>
          <td class="rankingHeader"><? echo $p2name[$u] ?></td>
          <td class="rankingrow"><? echo $p2rating[$u] ?></td>
          <td class="rankingrow" ><? echo $p2ladderN[$u] ?></td>
          <td class="rankingrow"><? echo $p2normalN[$u] ?></td>
          <td class="rankingrow"><? if ($p2race[$u]=="Z") {echo "Zerg";} elseif ($p2race[$u]=="P") {echo "Protoss";} elseif ($p2race[$u]=="T") {echo "Terran";} else {echo "x3";}?></td>
          <td class="rankingrow"><? echo $p2result[$u] ?></td>
          <td class="rankingrow"><? echo $p2k[$u] ?></td>
          <td class="rankingrow" ><? echo $p2prob[$u] ?></td>
          <td class="rankingrow" ><? echo $p2time[$u] ?></td>
          <td class="rankingrow"><? echo $p2overSc[$u] ?></td>
          <td class="rankingrow" ><? echo $p2unitSc[$u] ?></td>
          <td class="rankingrow"><? echo $p2structSc[$u] ?></td>
          <td class="rankingrow"><? echo $p2resSc[$u] ?></td>
        </tr>

        <tr>
          <td  class="rankingHeader">&nbsp;</td>
          <td class="rankingHeader" nowrap>Name</td>
          <td class="rankingHeader" >ID</td>
          <td class="rankingHeader">Type</td>
          <td class="rankingHeader">Option</td>
          <td class="rankingHeader" >Maxplayers</td>
          <td class="rankingHeader">Joins</td>
          <td class="rankingHeader" >Host IP</td>
		  <td class="rankingHeader">Clienttag</td>
          <td class="rankingHeader">Time</td>
          <td class="rankingHeader" >Size</td>
          <td class="rankingHeader" >Tileset</td>
          <td class="rankingHeader" >Author</td>
        </tr>
        <tr>
          <td  class="rankingHeader">Game stats</td>
          <td class="rankingrow" nowrap ><? echo $gname[$u] ?></td>
          <td class="rankingrow" ><? echo $gnumber[$u] ?></td>
          <td class="rankingrow"><? echo $gtype[$u] ?></td>
          <td class="rankingrow" ><? echo $goption[$u] ?></td>
          <td class="rankingrow"><? echo $maxplayers[$u] ?></td>
          <td class="rankingrow" ><? echo $gjoins[$u] ?></td>
          <td class="rankingrow" ><? echo $ghost[$u] ?></td>
		  <td class="rankingrow" ><? echo $gclienttag[$u] ?></td>
          <td class="rankingrow" ><? echo "$gtime[$u] minutes" ?></td>
          <td class="rankingrow" ><? echo $msize[$u] ?></td>
          <td class="rankingrow" ><? echo $mtileset[$u] ?></td>
          <td class="rankingrow" ><? echo $mauthor[$u] ?></td>
        </tr>
      </table>
