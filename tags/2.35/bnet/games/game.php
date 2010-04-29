<?php
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
                        <TD class=rankingRow>#<?php echo $r_uid ?></TD>
                        <TD class=rankingRow style="WIDTH: 110px"><div align="center"><SPAN class=rankingName><a href="index.php?game=SEXP&type=1&user=<?php echo $r_p1name ?>"><?php echo $r_p1name ?></a> </SPAN>
                              <DIV id=levelbarParent>
                              <DIV id=levelbarChild><?php echo $r_p1rating; ?> </DIV></DIV>
                              <TABLE class=expOutline cellSpacing=0
                              cellPadding=0 width="70%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=expOutline width="<?php echo $r_p1rating-1000; ?>%" background="stats.files/expbar-var<?php if($r_p1rating <= 1000 and $r_p1rating>900 ){echo "3";}elseif($r_p1rating <= 900){echo "4";}else{echo "2";} ?>.gif"><IMG height=14 src="stats.files/pixel.gif" width=1></TD>
                                <TD width="49%"></div>
				</TD></TR></TBODY></TABLE>(<span style="COLOR: green"><?php echo $r_p1adj; ?></span>)
				</TD></TD>
	
	 			
                            <TD class=rankingRow><img src="images/bnet/<?php echo $r_p1race; ?>.gif" width="31" height="29" alt="<?php echo $r_p1race; ?>"></TD>
                           <TD class=rankingRowAlt align=middle><font color=#C0C0C0>Def</font></TD>

			    <TD class=rankingRow><img src="images/bnet/<?php echo $r_p2race; ?>.gif" width="31" height="29" alt="<?php echo $r_p2race; ?>"></TD>
                        	<TD class=rankingRow style="WIDTH: 110px"><div align="center"><SPAN class=rankingName><a href="index.php?game=SEXP&type=1&user=<?php echo $r_p2name; ?>"><?php echo $r_p2name; ?></a> </SPAN>
                              <DIV id=levelbarParent>
                              <DIV id=levelbarChild><?php echo $r_p2rating ?> </DIV></DIV>
                              <TABLE class=expOutline cellSpacing=0
                              cellPadding=0 width="70%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=expOutline width="<?php echo $r_p2rating-1000; ?>%" background="stats.files/expbar-var<?php if($r_p2rating <= 1000 and $r_p2rating>900 ){echo "3";}elseif($r_p2rating <= 900){echo "4";}else{echo "2";} ?>.gif"><IMG height=14 src="stats.files/pixel.gif" width=1></TD>
                                <TD width="49%"></div>
				</TD></TR></TBODY></TABLE>(<span style="COLOR: #FF6600"><?php echo $r_p2adj; ?></span>)
				</TD></TD>
				
			<TD class=rankingRowAlt align=middle><font color=#9595B9><?php echo $r_map; ?></font></TD>
                        <TD class=rankingRowAlt align=middle><font color=#954A00><?php echo $r_gameended; ?></font></TD>
			    <TD align=right><SPAN class=rankingName><a href="index.php?game=SEXP&type=1&user=<?php echo $r_p1name;?>&g=<?php echo $r_uid; ?>"><img src="images/bnet/eyereport.gif" border=0 alt="see" title="see more"></a></SPAN></TD>

			    </TR>
