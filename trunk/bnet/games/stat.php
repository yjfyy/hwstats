<TR class=rankingRow style="BACKGROUND-COLOR: #271a13">
                        <TD class=rankingRow><?php echo $p_SEXP_1_rank #$i+1 ?><!-- <SUP>st</SUP> --> </TD>
                        <TD class=rankingRow style="WIDTH: 70px">
                              <DIV id=levelbarParent>
                              <DIV id=levelbarChild><?php echo $p_SEXP_1_rating; ?></DIV></DIV>
                              <TABLE class=expOutline cellSpacing=0
                              cellPadding=0 width="100%" border=0>
                                <TBODY>
                                <TR>
                                <TD width="<?php echo $p_SEXP_1_rating-1000; ?>%" background="stats.files/expbar-var<?php if($p_SEXP_1_rating <= 1000 and $p_SEXP_1_rating>900 ){echo "3";}elseif($p_SEXP_1_rating <= 900){echo "4";}else{echo "2";} ?>.gif"><IMG height=14 src="stats.files/pixel.gif" width=1></TD>
                                <TD width="49%"></TD></TR></TBODY></TABLE></TD></TD>
                            <TD class=rankingRow><img src="images/bnet/<?php echo $img1; ?>.gif">
                            </TD>
                            <TD class=rankingRow><SPAN class=rankingName><a href="index.php?game=SEXP&type=1&user=<?php echo $p_acct_username; ?>"><?php echo $p_acct_username; ?></a></SPAN></TD>
                            <TD class=rankingRowAlt align=middle><font color=#00CCFF><?php echo $p_SEXP_1_wins; ?></font>
                            </TD>
                            <TD class=rankingRow><font color=#FF6600><?php echo $p_SEXP_1_losses; ?></font></TD>
                            <TD class=rankingRow><font color=#B35900><?php echo $alldraws; ?></font></TD>
                            <TD class=rankingRow><?php echo $allgames; ?></TD>
                            <TD class=rankingRow><b><?php if($p_SEXP_1_last_game_result=="WIN"){echo "Win";} elseif($p_SEXP_1_last_game_result=="LOSS"){echo "Loss";} else {echo "None";} ?></b></TD>
			    <TD  class=rankingRow align=right><b><?php if ($show_player_ip and isset($p_acct_lastlogin_ip)) echo $p_acct_lastlogin_ip; ?></b></TD>

			    </TR>
<!--  -->