<?

$txtstat='<td class="content" width="7%"><img alt="expand/collapse section" class="expandable" height="11" onClick="changepic()" src="index.files/Plus.gif" width="9" child="issue'.$t.'">&nbsp;#'.$rank[$i].'
    </td>
    <td class="content" width="8%"><img src="images/bnet/'.$img1.'.gif"></td>
    <td class="content" width="13%">
      '.$name[$i].'
    </td>
    <td class="content" width="12%">
      '.$rating0[$i].'
    </td>
    <td class="content" width="9%">
      '.$wins0[$i].'
    </td>
    <td class="content" width="7%">
     '.$looses0[$i].'
    </td>
    <td class="content" width="37%">
      '.$disconnects0[$i].'
    </td>
    <td class="content" width="7%">&nbsp;</td>
  </tr>
  <tr class="collapsed" id="issue'.$t.'" bgcolor="#ffffff">
    <td colspan="7">
      <table width="98%" border="1" bordercolor="#dcdcdc" rules="cols" class="issuetable">
        <tr>
          <td colspan="7" class="issuetitle" height="22">Expanded stats of
            '.$name[$i].'
          </td>
        </tr>
        <tr>
          <td width="70" class="issuehdr">&nbsp;</td>
          <td class="issuehdr" width="100">Rank</td>
          <td class="issuehdr" width="100">Rating</td>
          <td class="issuehdr" width="100">Wins</td>
          <td class="issuehdr" width="100">Losses</td>
          <td class="issuehdr" width="100">Disconnects</td>
          <td class="issuehdr" width="150">Last game result</td>
        </tr>
        <tr>
          <td width="66" class="issuecontent">Ladder</td>
          <td class="issuecontent" nowrap width="49">
            <div align="left"> #
              '.$rank[$i].'
            </div>
          </td>
          <td class="issuecontent" width="43">
            <div align="left">
              '.$rating0[$i].'
            </div>
          </td>
          <td class="issuecontent" width="37">
            '.$wins0[$i].'
          </td>
          <td class="issuecontent" width="47">
            '.$looses0[$i].'
          </td>
          <td class="issuecontent" width="75">
           '.$disconnects0[$i].'
          </td>
          <td class="issuecontent" width="234">
            '.$last0[$i].'
          </td>

        </tr>
        <tr>
          <td width="66" class="issuecontent">Normal</td>
          <td class="issuecontent" nowrap width="49">
            <div align="left">-</div>
          </td>
          <td class="issuecontent" width="43">
            <div align="left">-</div>
          </td>
          <td class="issuecontent" width="37">
            '.$wins1[$i].'
          </td>
          <td class="issuecontent" width="47">
            '.$looses1[$i].'
          </td>
          <td class="issuecontent" width="75">
            '.$disconnects1[$i].'
          </td>

          <td class="issuecontent" width="234">'.$last1[$i].' </td>
        </tr>
        <tr>
          <td width="70" class="issuehdr" height="21">&nbsp;</td>
          <td class="issuehdr" width="100" height="21">High rank</td>
          <td class="issuehdr" width="100" height="21">High rating</td>
          <td class="issuehdr" width="100" height="21">ID</td>
          <td class="issuehdr" width="100" height="21">Last game</td>
          <td class="issuehdr" width="100" height="21">Last owner</td>
          <td class="issuehdr" width="150 height="21">IP-adress</td>
        </tr>
        <tr>
          <td width="66" class="issuecontent">Account</td>
          <td class="issuecontent" nowrap width="49">
            <div align="left"> #
              '.$highrank[$i].'
            </div>
          </td>
          <td class="issuecontent" width="43">
            <div align="left">
              '.$highrating[$i].'
            </div>
          </td>
          <td class="issuecontent" width="37">
            '.$id[$i].'
            <br>
            <font color="red"></font>
          <td class="issuecontent" width="47">
            '.$lastgame[$i].'
          </td>
          <td class="issuecontent" width="75">
            '.$owner[$i].'
          </td>
          <td class="issuecontent" width="234">
            '.$ip[$i].'
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr valign="top">
    <td class="foot" width="20%">
      '.$allgames[$i].'
      games played</td>
    <td class="foot" width="8%">&nbsp;</td>
    <td class="foot" width="30%">Last login time:
      '.$lasttime[$i].'
    </td>
    <td class="foot" width="12%">&nbsp; </td>
    <td class="foot" width="9%">&nbsp;</td>
    <td class="foot" width="9%">&nbsp;</td>
    <td class="foot" width="37%">
      <div align="right"><font size="2"><a href="index.php?dir=bnet/&siteid=games&p='.$name[$i].'">Games</a></font></div>
    </td>

</table> ';
?>