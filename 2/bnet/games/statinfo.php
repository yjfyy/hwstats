<?

echo '</table><table>

        <tr>
          <td width="70" class="rankingHeader">&nbsp;</td>
          <td class="rankingHeader" width="100">Rank</td>
          <td class="rankingHeader" width="100">Rating</td>
          <td class="rankingHeader" width="100">Wins</td>
          <td class="rankingHeader" width="100">Losses</td>
          <td class="rankingHeader" width="100">Disconnects</td>
          <td class="rankingHeader" width="150">Last game result</td>
        </tr>
        <tr>
          <td width="66" class="rankingHeader">Ladder</td>
          <td class="rankingrow" nowrap width="49">
            <div align="left"> #
              '.$rank[$i].'
            </div>
          </td>
          <td class="rankingrow" width="43">
            <div align="left">
              '.$rating0[$i].'
            </div>
          </td>
          <td class="rankingrow" width="37">
            '.$wins0[$i].'
          </td>
          <td class="rankingrow" width="47">
            '.$looses0[$i].'
          </td>
          <td class="rankingrow" width="75">
           '.$disconnects0[$i].'
          </td>
          <td class="rankingrow" width="234">
            '.$last0[$i].'
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
            '.$wins1[$i].'
          </td>
          <td class="rankingrow" width="47">
            '.$looses1[$i].'
          </td>
          <td class="rankingrow" width="75">
            '.$disconnects1[$i].'
          </td>

          <td class="rankingrow" width="234">'.$last1[$i].' </td>
        </tr>
        <tr>
          <td width="70" class="rankingHeader" height="21">&nbsp;</td>
          <td class="rankingHeader" width="100" height="21">High rank</td>
          <td class="rankingHeader" width="100" height="21">High rating</td>
          <td class="rankingHeader" width="100" height="21">ID</td>
          <td class="rankingHeader" width="100" height="21">Last game</td>
          <td class="rankingHeader" width="100" height="21">Last owner</td>
          <td class="rankingHeader" width="150 height="21">IP-adress</td>
        </tr>
        <tr>
          <td width="66" class="rankingHeader">Account</td>
          <td class="rankingrow" nowrap width="49">
            <div align="left"> #
              '.$highrank[$i].'
            </div>
          </td>
          <td class="rankingrow" width="43">
            <div align="left">
              '.$highrating[$i].'
            </div>
          </td>
          <td class="rankingrow" width="37">
            '.$id[$i].'
            <br>
            <font color="red"></font>
          <td class="rankingrow" width="47">
            '.$lastgame[$i].'
          </td>
          <td class="rankingrow" width="75">
            '.$owner[$i].'
          </td>
          <td class="rankingrow" width="234">
            '.$ip[$i].'
          </td>
        </tr>
      </table>';
?>
