</table><table>

        <?php if ($r_p1race != "x3" and $r_p2race != "x3") { echo '
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
          <td class="rankingHeader">'.$r_p1name.'</td>
          <td class="rankingrow" nowrap >
            <div align="left">'.$r_p1units.'</div>
          </td>
          <td class="rankingrow">
            <div align="left">'.$r_p1structures.'</div>
          </td>
          <td class="rankingrow">'.$r_p1resources.'</td>
          <td class="rankingrow">'.$r_p1produced.'</td>
          <td class="rankingrow">'.$r_p1killed.'</td>
          <td class="rankingrow">'.$r_p1lostu.'</td>
          <td class="rankingrow" >'.$r_p1constructed.'</td>
          <td class="rankingrow">'.$r_p1razed.'</td>
          <td class="rankingrow">'.$r_p1losts.'</td>
          <td class="rankingrow">'.$r_p1gas.'</td>
          <td class="rankingrow">'.$r_p1minerals.'</td>
          <td class="rankingrow">'.$r_p1spent.'</td>
        </tr>
        <tr>
          <td class="rankingHeader">'.$r_p2name.'</td>
          <td class="rankingrow" nowrap>'.$r_p2units.'</td>
          <td class="rankingrow">'.$r_p2structures.'</td>
          <td class="rankingrow" >'.$r_p2resources.'</td>
          <td class="rankingrow">'.$r_p2produced.'</td>
          <td class="rankingrow">'.$r_p2killed.'</td>
          <td class="rankingrow">'.$r_p2lostu.'</td>
          <td class="rankingrow" >'.$r_p2constructed.'</td>
          <td class="rankingrow">'.$r_p2razed.'</td>
          <td class="rankingrow">'.$r_p2losts.'</td>
          <td class="rankingrow">'.$r_p2gas.'</td>
          <td class="rankingrow">'.$r_p2minerals.'</td>
          <td class="rankingrow">'.$r_p2spent.'</td>
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
          <td class="rankingHeader">Time/sec</td>
          <td class="rankingHeader">ScoreOverAll</td>
          <td class="rankingHeader">UnitScore</td>
          <td class="rankingHeader">StructScore</td>
          <td class="rankingHeader">ResScore</td>
        </tr>

        <tr>
          <td  class="rankingHeader"><?php echo $r_p1name ?></td>
          <td class="rankingrow"><?php echo $r_p1rating ?></td>
          <td class="rankingrow"><?php echo $r_p1ladderrecord ?></td>
          <td class="rankingrow"><?php echo $r_p1normalrecord ?></td>
          <td class="rankingrow" ><?php echo $r_p1race; ?></td>
          <td class="rankingrow"><?php echo $r_p1result ?></td>
          <td class="rankingrow" ><?php echo $r_p1k ?></td>
          <td class="rankingrow" ><?php echo $r_p1prob ?></td>
          <td class="rankingrow" ><?php echo $r_p1time ?></td>
          <td class="rankingrow"><?php echo $r_p1scoreoverall ?></td>
          <td class="rankingrow"><?php echo $r_p1unitsscore ?></td>
          <td class="rankingrow"><?php echo $r_p1structuresscore ?></td>
          <td class="rankingrow" ><?php echo $r_p1resourcesscore ?></td>
        </tr>
        <tr>
          <td  class="rankingHeader"><?php echo $r_p2name ?></td>
          <td class="rankingrow"><?php echo $r_p2rating ?></td>
          <td class="rankingrow"><?php echo $r_p2ladderrecord ?></td>
          <td class="rankingrow"><?php echo $r_p2normalrecord ?></td>
          <td class="rankingrow" ><?php echo $r_p2race; ?></td>
          <td class="rankingrow"><?php echo $r_p2result ?></td>
          <td class="rankingrow" ><?php echo $r_p2k ?></td>
          <td class="rankingrow" ><?php echo $r_p2prob ?></td>
          <td class="rankingrow" ><?php echo $r_p2time ?></td>
          <td class="rankingrow"><?php echo $r_p2scoreoverall ?></td>
          <td class="rankingrow"><?php echo $r_p2unitsscore ?></td>
          <td class="rankingrow"><?php echo $r_p2structuresscore ?></td>
          <td class="rankingrow" ><?php echo $r_p2resourcesscore ?></td>
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
          <td class="rankingrow" nowrap ><?php echo $r_gamename ?></td>
          <td class="rankingrow" >#<?php echo $r_gameid ?></td>
          <td class="rankingrow"><?php echo $r_gametype ?></td>
          <td class="rankingrow" ><?php echo $r_gameoption ?></td>
          <td class="rankingrow"><?php echo $r_maxplayers ?></td>
          <td class="rankingrow" ><?php echo $r_joins ?></td>
          <td class="rankingrow" ><?php if ($show_player_ip) echo $r_host ?></td>
		  <td class="rankingrow" ><?php echo $r_clienttag ?></td>
          <td class="rankingrow" ><?php echo $r_gameduration ?> минут</td>
          <td class="rankingrow" ><?php echo $r_mapsize ?></td>
          <td class="rankingrow" ><?php echo $r_tileset ?></td>
          <td class="rankingrow" ><?php echo $r_mapauth ?></td>
        </tr>
      </table>
