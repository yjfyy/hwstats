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
                            <TD class=rankingHeader><A class=button href="">All Games</A></TD>
                            <TD class=rankingHeader><A class=button href="">Last</A></TD>
                           
			    
<?php
if (SHOW_PLAYER_IP) echo '<TD class=rankingHeader align=middle><A class=button href="">IP adress</A></TD>';

echo "</TR>";

$limit_time=gmmktime() - 2592000 * 5;
$lim_first = $current_page*$players_on_page-$players_on_page;

// если поисковое значение не пустое, выбрать только по нему
if ( $searchPlayer )
{
	if ( strlen($searchPlayer) >= $min_search_symbols )
	{
		$condition = 'LIKE "%' . strtolower(mysql_escape_string($searchPlayer)) . '%"';
		
	/*
		// long search #1
		$result = MYSQL_QUERY("SELECT uid, SEXP_1_last_game_result, SEXP_1_rating, SEXP_1_rank, SEXP_0_wins, SEXP_0_losses,  SEXP_0_disconnects, SEXP_1_wins, SEXP_1_losses, SEXP_0_draws,SEXP_1_draws FROM ".TABLE_RECORD." 
		WHERE uid IN ( SELECT uid FROM ".TABLE_BNET." WHERE acct_username $condition ) 
		ORDER BY SEXP_1_rating DESC;");

		// long search #2
		$result = MYSQL_QUERY("SELECT ".TABLE_RECORD.".uid,SEXP_1_last_game_result, SEXP_1_rating, SEXP_1_rank, SEXP_0_wins, SEXP_0_losses,  SEXP_0_disconnects, SEXP_1_wins, SEXP_1_losses, SEXP_0_draws,SEXP_1_draws, 
		".TABLE_BNET.".acct_username, ".TABLE_BNET.".acct_lastlogin_ip, ".TABLE_BNET.".acct_lastlogin_time
		FROM ".TABLE_RECORD."  LEFT JOIN ".TABLE_BNET."
		ON ".TABLE_RECORD.".uid = ".TABLE_BNET.".uid
		WHERE username $condition ORDER BY SEXP_1_rating DESC;");
	*/	
	
		// fast search
		$result = MYSQL_QUERY("SELECT record.uid, record.SEXP_1_last_game_result, record.SEXP_1_rating, record.SEXP_1_rank, record.SEXP_0_wins, record.SEXP_0_losses, record.SEXP_0_disconnects, record.SEXP_1_wins, record.SEXP_1_losses, record.SEXP_0_draws,record.SEXP_1_draws,
		".TABLE_BNET.".acct_username, ".TABLE_BNET.".acct_lastlogin_ip, ".TABLE_BNET.".acct_lastlogin_time
		FROM ".TABLE_BNET."
		LEFT JOIN ".TABLE_RECORD."
		ON ".TABLE_BNET.".uid = ".TABLE_RECORD.".uid
		WHERE username $condition and ".TABLE_RECORD.".SEXP_1_rank > 0;");

	
		$players_count = mysql_num_rows($result);
	}
	else
	{
		echo sprintf("<h3 align=center>Please, input %s or more symbols</h3>", $min_search_symbols);
	}
}
// иначе выбрать всех игроков
else
{	
	$result = MYSQL_QUERY("SELECT (select count(*) from ".TABLE_RECORD.") as count, uid, SEXP_1_last_game_result, SEXP_1_rating, SEXP_1_rank, SEXP_0_wins, SEXP_0_losses,  SEXP_0_disconnects, SEXP_1_wins, SEXP_1_losses, SEXP_0_draws,SEXP_1_draws FROM ".TABLE_RECORD." 
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
	
	#if (!$p_SEXP_1_rank) // display only SEXP players
	#	continue;

	$p_SEXP_0_wins=mysql_result($result,$i,"SEXP_0_wins"); 
	$p_SEXP_0_losses=mysql_result($result,$i,"SEXP_0_losses"); 
	$p_SEXP_0_draws=mysql_result($result,$i,"SEXP_0_draws"); 
	$p_SEXP_1_wins=mysql_result($result,$i,"SEXP_1_wins"); 
	$p_SEXP_1_losses=mysql_result($result,$i,"SEXP_1_losses"); 
	$p_SEXP_1_draws=mysql_result($result,$i,"SEXP_1_draws"); 

	if ($searchPlayer)
	{
		$result2 = $result;
		$j = $i;
	}
	else
	{
		$result2 = MYSQL_QUERY("SELECT acct_username, acct_lastlogin_ip,acct_lastlogin_time FROM ".TABLE_BNET." WHERE uid='$p_uid' LIMIT 1");
		$j = 0;
	}
	
	$p_acct_username=mysql_result($result2,$j,"acct_username");
	$p_acct_lastlogin_time=mysql_result($result2,$j,"acct_lastlogin_time");
	$p_acct_lastlogin_ip=mysql_result($result2,$j,"acct_lastlogin_ip");

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


	echo "<tr><td colspan=10><small>";
	
	if (!$searchPlayer)
		echo pageNavigator($current_page, $players_on_page, $players_count, $trim_count, "index.php?game=SEXP&type=1&");
	

	echo "</small></td></tr>";



?>

