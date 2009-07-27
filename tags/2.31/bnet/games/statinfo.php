<?php

echo '</table><table>

        <tr>
          <td width="70" class="rankingHeader">&nbsp;</td>
          <td class="rankingHeader" width="100">Rank</td>
          <td class="rankingHeader" width="100">Rating</td>
          <td class="rankingHeader" width="100">Wins</td>
          <td class="rankingHeader" width="100">Losses</td>
          <td class="rankingHeader" width="100">Draws</td>
          <td class="rankingHeader" width="150">Last game result</td>
        </tr>
        <tr>
          <td width="66" class="rankingHeader">Ladder</td>
          <td class="rankingrow" nowrap width="49">
            <div align="left"> #
              '.$p_SEXP_1_rank.'
            </div>
          </td>
          <td class="rankingrow" width="43">
            <div align="left">
              '.$p_SEXP_1_rating.'
            </div>
          </td>
          <td class="rankingrow" width="37">
            '.$p_SEXP_1_wins.'
          </td>
          <td class="rankingrow" width="47">
            '.$p_SEXP_1_losses.'
          </td>
          <td class="rankingrow" width="75">
           '.$p_SEXP_1_draws.'
          </td>
          <td class="rankingrow" width="234">
            '.$p_SEXP_1_last_game_result.'
          </td>

        </tr>
        <tr>
          <td width="66" class="rankingHeader">Normal</td>
          <td class="rankingrow" nowrap width="49">
            <div align="left">-</div>
          </td>
          <td class="rankingrow" width="43">
            <div align="left">-</div>
          </td>
          <td class="rankingrow" width="37">
            '.$p_SEXP_0_wins.'
          </td>
          <td class="rankingrow" width="47">
            '.$p_SEXP_0_losses.'
          </td>
          <td class="rankingrow" width="75">
            '.$p_SEXP_0_draws.'
          </td>

          <td class="rankingrow" width="234">'.$p_SEXP_0_last_game_result.' </td>
        </tr>
        <tr>
          <td width="70" class="rankingHeader" height="21">&nbsp;</td>
          <td class="rankingHeader" width="100" height="21">High rank</td>
          <td class="rankingHeader" width="100" height="21">High rating</td>
          <td class="rankingHeader" width="100" height="21">Registration ID</td>
          <td class="rankingHeader" width="100" height="21">Last game</td>
          <td class="rankingHeader" width="100" height="21">Last owner</td>
          ';
		  if ($show_player_ip) echo '<td class="rankingHeader" width="150 height="21">IP-adress</td>';
		  
        echo '</tr>
        <tr>
          <td width="66" class="rankingHeader">Account</td>
          <td class="rankingrow" nowrap width="49">
            <div align="left"> #
              '.$p_SEXP_1_high_rank.'
            </div>
          </td>
          <td class="rankingrow" width="43">
            <div align="left">
              '.$p_SEXP_1_high_rating.'
            </div>
          </td>
          <td class="rankingrow" width="37">
            '.$p_uid.'
            <br>
            <font color="red"></font>
          <td class="rankingrow" width="47">
            '.$p_acct_lastlogin_clienttag.'
          </td>
          <td class="rankingrow" width="75">
            '.$p_acct_lastlogin_owner.'
          </td>
          <td class="rankingrow" width="234">
            ';
			if ($show_player_ip) echo $p_acct_lastlogin_ip;
			
          echo '</td>
        </tr>
      </table>';
?>
