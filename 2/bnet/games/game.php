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

<TR class=rankingRow style="BACKGROUND-COLOR: #271a13">
                        <TD class=rankingRow>#<? echo $u ?></TD>
                        <TD class=rankingRow style="WIDTH: 110px"><div align="center"><SPAN class=rankingName><a href="index.php?dir=bnet/&siteid=games&p=<? echo $p1name[$u] ?>"><? echo $p1name[$u] ?></a> </SPAN>
                              <DIV id=levelbarParent>
                              <DIV id=levelbarChild><? echo $p1rating[$u]; ?> </DIV></DIV>
                              <TABLE class=expOutline cellSpacing=0
                              cellPadding=0 width="70%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=expOutline width="<? echo $p1rating[$u]-1000; ?>%" background="stats.files/expbar-var<? if($p1rating[$u] <= 1000 and $p1rating[$u]>900 ){echo "3";}elseif($p1rating[$u] <= 900){echo "4";}else{echo "2";} ?>.gif"><IMG height=14 src="stats.files/pixel.gif" width=1></TD>
                                <TD width="49%"></div>
				</TD></TR></TBODY></TABLE>(<span style="COLOR: green"><? echo $p1adj[$u] ?></span>)
				</TD></TD>
	
	 			
                            <TD class=rankingRow><img src="images/bnet/<? if($p1race[$u]!=""){echo $p1race[$u];}else{echo "x3";} ?>.gif" width="31" height="29" alt="<? if ($p1race[$u]=="Z") {echo "Zerg";} elseif ($p1race[$u]=="P") {echo "Protoss";} elseif ($p1race[$u]=="T") {echo "Terran";} else {echo "x3";}?>"></TD>
                           <TD class=rankingRowAlt align=middle><font color=#C0C0C0>Def</font></TD>

			    <TD class=rankingRow><img src="images/bnet/<? if($p2race[$u]!=""){echo $p2race[$u];}else{echo "x3";} ?>.gif" width="31" height="29" alt="<? if ($p2race[$u]=="Z") {echo "Zerg";} elseif ($p2race[$u]=="P") {echo "Protoss";} elseif ($p2race[$u]=="T") {echo "Terran";} else {echo "x3";}?>"></TD>
                        	<TD class=rankingRow style="WIDTH: 110px"><div align="center"><SPAN class=rankingName><a href="index.php?dir=bnet/&siteid=games&p=<? echo $p2name[$u] ?>"><? echo $p2name[$u] ?></a> </SPAN>
                              <DIV id=levelbarParent>
                              <DIV id=levelbarChild><? echo $p2rating[$u]; ?> </DIV></DIV>
                              <TABLE class=expOutline cellSpacing=0
                              cellPadding=0 width="70%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=expOutline width="<? echo $p2rating[$u]-1000; ?>%" background="stats.files/expbar-var<? if($p2rating[$u] <= 1000 and $p2rating[$u]>900 ){echo "3";}elseif($p2rating[$u] <= 900){echo "4";}else{echo "2";} ?>.gif"><IMG height=14 src="stats.files/pixel.gif" width=1></TD>
                                <TD width="49%"></div>
				</TD></TR></TBODY></TABLE>(<span style="COLOR: #FF6600"><? echo $p2adj[$u] ?></span>)
				</TD></TD>
				
			<TD class=rankingRowAlt align=middle><font color=#9595B9><? echo $map[$u] ?></font></TD>
                        <TD class=rankingRowAlt align=middle><font color=#954A00><? echo $gdate[$u] ?></font></TD>
			    <TD align=right><SPAN class=rankingName><a href="index.php?dir=bnet/&siteid=games&g=<? echo $u; ?>&p=<? echo $name[$i];?>">More info...</a></SPAN></TD>

			    </TR>
