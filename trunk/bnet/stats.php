<tr><td colspan=10>
<table border=0><tbody><tr>
<td><b>StarCraft Ladder</b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td align=center>
</td>
</tr></tbody></table>
</td></tr>

		<TR>
                            <TD class=rankingHeader align=middle><A class=button href="">Rank<IMG height=6 src="stats.files/arrow-down.gif" width=14 border=0></A></TD>

                            <TD class=rankingHeader><A class=button href="">Rating</A></TD>
                            <TD class=rankingHeader align=middle><A class=button href="">Stats</A></TD>
                            <TD class=rankingHeader><A class=button href="">Player Name</A></TD>
                            <TD class=rankingHeader align=middle><A class=button href="">Wins</A></TD>
                            <TD class=rankingHeader align=middle><A class=button href="">Losses</A></TD>
                            <TD class=rankingHeader align=middle><A class=button href="">Draws</A></TD>
                            <TD class=rankingHeader><A class=button href="">Games</A></TD>
                            <TD class=rankingHeader><A class=button href="">Last</A></TD>
                           
			    
<?php
if ($show_player_ip) echo '<TD class=rankingHeader align=middle><A class=button href="">IP adress</A></TD>';

echo "</TR>";

MYSQL_CONNECT($hostname,$username,$password) OR DIE("Не могу создать соединение ");
mysql_select_db($db_bnet) or die("Can not select database");


$limit_time=gmmktime() - 2592000 * 5;
$lim_first = $current_page*$players_on_page-$players_on_page;

// если поисковое значение не пустое, выбрать только по нему
if ( $searchPlayer )
{
	if ( strlen($searchPlayer) >= $min_search_symbols )
	{
		$condition = 'LIKE "%' . mysql_escape_string($searchPlayer) . '%"';
		
		$result = MYSQL_QUERY("SELECT uid, SEXP_1_last_game_result, SEXP_1_rating, SEXP_1_rank, SEXP_0_wins, SEXP_0_losses,  SEXP_0_disconnects, SEXP_1_wins, SEXP_1_losses, SEXP_0_draws,SEXP_1_draws FROM $table_record 
		WHERE uid IN ( SELECT uid FROM $table_bnet WHERE acct_username $condition ) 
		ORDER BY SEXP_1_rating DESC;");

		$players_count = mysql_num_rows($result);
	}
	else
	{
		echo sprintf("Please, input %s or more symbols", $min_search_symbols);
	}
}
// иначе выбрать всех игроков
else
{	
	$result = MYSQL_QUERY("SELECT (select count(uid) from $table_record) as count, uid, SEXP_1_last_game_result, SEXP_1_rating, SEXP_1_rank, SEXP_0_wins, SEXP_0_losses,  SEXP_0_disconnects, SEXP_1_wins, SEXP_1_losses, SEXP_0_draws,SEXP_1_draws FROM $table_record 
	ORDER BY SEXP_1_rating DESC LIMIT $lim_first,$players_on_page;");

	$players_count = mysql_result($result,0,"count");
}


// $players_count = mysql_result( mysql_query("SELECT FOUND_ROWS()"),0 );

$number = @MYSQL_NUM_ROWS($result); #всего выбрано

for ($i=0;$i<$number;$i++)
{
	$p_uid=mysql_result($result,$i,"uid"); #player unicue id
	$p_SEXP_1_last_game_result=mysql_result($result,$i,"SEXP_1_last_game_result"); 
	$p_SEXP_1_rating=mysql_result($result,$i,"SEXP_1_rating"); 
	$p_SEXP_1_rank=mysql_result($result,$i,"SEXP_1_rank"); 
	$p_SEXP_0_wins=mysql_result($result,$i,"SEXP_0_wins"); 
	$p_SEXP_0_losses=mysql_result($result,$i,"SEXP_0_losses"); 
	$p_SEXP_0_draws=mysql_result($result,$i,"SEXP_0_draws"); 
	$p_SEXP_1_wins=mysql_result($result,$i,"SEXP_1_wins"); 
	$p_SEXP_1_losses=mysql_result($result,$i,"SEXP_1_losses"); 
	$p_SEXP_1_draws=mysql_result($result,$i,"SEXP_1_draws"); 

	$result2 = MYSQL_QUERY("SELECT acct_userid,acct_username, acct_lastlogin_ip,acct_lastlogin_time FROM $table_bnet WHERE uid='$p_uid' LIMIT 1");
		$p_acct_userid=mysql_result($result2,0,"acct_userid");
		$p_acct_username=mysql_result($result2,0,"acct_username");
		$p_acct_lastlogin_time=mysql_result($result2,0,"acct_lastlogin_time");
		$p_acct_lastlogin_ip=mysql_result($result2,0,"acct_lastlogin_ip");

	$allgames=$p_SEXP_0_wins+$p_SEXP_0_losses+$p_SEXP_1_wins+$p_SEXP_1_losses;
	$alldraws=$p_SEXP_0_draws+$p_SEXP_1_draws;

	if ($p_SEXP_1_rank==1): $img1="GOSU";
	elseif ($p_SEXP_1_rank==2): $img1="GOS3";
	elseif ($p_SEXP_1_rank==3): $img1="HAS2";
	elseif ($p_SEXP_1_rank==4): $img1="CHO1";
	else: $img1="NEWB";    
	endif;

	#$pp='<table cellpadding="2" cellspacing="0" width="98%" border="1" bordercolor="white" class="infotable"><tr class="row">';

	 require ("bnet/games/stat.php"); #если рейтинг не тысячный и не нулевой
	#echo $pp.$txtstat;

}
MYSQL_CLOSE();

	echo "<tr><td colspan=10><small>";
	
	echo pageNavigator($current_page, $players_on_page, $players_count, $trim_count, "index.php?game=SEXP&type=1&");
	

	echo "</small></td></tr>";



?>

