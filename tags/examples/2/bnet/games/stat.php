<TR class=rankingRow style="BACKGROUND-COLOR: #271a13">
                        <TD class=rankingRow><? echo $rank[$i]; ?><SUP>st</SUP> </TD>
                        <TD class=rankingRow style="WIDTH: 70px">
                              <DIV id=levelbarParent>
                              <DIV id=levelbarChild><? echo $rating0[$i]; ?></DIV></DIV>
                              <TABLE class=expOutline cellSpacing=0
                              cellPadding=0 width="100%" border=0>
                                <TBODY>
                                <TR>
                                <TD width="<? echo $rating0[$i]-1000; ?>%" background="stats.files/expbar-var<? if($rating0[$i] <= 1000 and $rating0[$i]>900 ){echo "3";}elseif($rating0[$i] <= 900){echo "4";}else{echo "2";} ?>.gif"><IMG height=14 src="stats.files/pixel.gif" width=1></TD>
                                <TD width="49%"></TD></TR></TBODY></TABLE></TD></TD>
                            <TD class=rankingRow><img src="images/bnet/<? echo $img1; ?>.gif">
                            </TD>
                            <TD class=rankingRow><SPAN class=rankingName><a href="index.php?dir=bnet/&siteid=games&p=<? echo $name[$i]; ?>"><? echo $name[$i]; ?></a></SPAN></TD>
                            <TD class=rankingRowAlt align=middle><font color=#00CCFF><? echo $wins0[$i]; ?></font>
                            </TD>
                            <TD class=rankingRow><font color=#FF6600><? echo $looses0[$i]; ?></font></TD>
                            <TD class=rankingRow><font color=#B35900><? echo $disconnects0[$i]; ?></font></TD>
                            <TD class=rankingRow><? echo $allgames[$i]; ?></TD>
                            <TD align=middle><b><? if($last0[$i]=="WIN"){echo "Win";} elseif($last0[$i]=="LOSS"){echo "Loss";} else {echo "None";} ?></b></TD>
			    <TD align=right><b><? echo $ip[$i]; ?></b></TD>

			    </TR>
<!--  -->