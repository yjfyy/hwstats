<?php
$gnum=GETGetValue("g");

if (isset($rank))
{
	if ($rank[$i]==1) $img1="GOSU";
	elseif ($rank[$i]==2) $img1="GOS3";
	elseif ($rank[$i]==3) $img1="HAS2";
	elseif ($rank[$i]==4) $img1="CHO1";
	else $img1="NEWB";
}

	if ($gnum!="") 
		echo '<p><b>Game info</b></p>';


$gnum=mysql_escape_string($gnum); // filter

$hwplayer = mysql_escape_string($hwplayer);

$result = MYSQL_QUERY("SELECT uid,acct_userid,acct_username, acct_lastlogin_ip,  acct_lastlogin_owner, acct_lastlogin_clienttag FROM ".TABLE_BNET." WHERE acct_username='$hwplayer' LIMIT 1"); #выбираем игрока

$number = MYSQL_NUM_ROWS($result); #всего



if ($number>0 and $hwplayer!="all" and $gnum=="") 
{ #если есть такой игрок

	$p_uid=mysql_result($result,0,"uid"); #player unicue id
	$p_acct_userid=mysql_result($result,0,"acct_userid");
	$p_acct_username=mysql_result($result,0,"acct_username");

	echo '<p><b>Player: '.$p_acct_username.'</b></p>'
?>

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
	                            
			</TR>

<?php

	
	
	$p_acct_lastlogin_owner=mysql_result($result,0,"acct_lastlogin_owner");
	$p_acct_lastlogin_clienttag=mysql_result($result,0,"acct_lastlogin_clienttag");

	$result2 = MYSQL_QUERY("SELECT uid, SEXP_0_last_game_result, SEXP_1_last_game_result, SEXP_1_rating, SEXP_1_rank, SEXP_0_wins, SEXP_0_losses,  SEXP_0_draws, SEXP_1_wins, SEXP_1_losses,  SEXP_1_draws, SEXP_1_high_rating, SEXP_1_high_rank FROM ".TABLE_RECORD." WHERE uid='$p_uid' LIMIT 1");
	$number2 = MYSQL_NUM_ROWS($result2); #всего

	if ($number2 > 0)
	{
		$p_SEXP_1_last_game_result=@mysql_result($result2,0,"SEXP_1_last_game_result"); 
		$p_SEXP_0_last_game_result=@mysql_result($result2,0,"SEXP_0_last_game_result"); 
		$p_SEXP_1_rating=@mysql_result($result2,0,"SEXP_1_rating"); 
		$p_SEXP_1_rank=@mysql_result($result2,0,"SEXP_1_rank"); 
		$p_SEXP_0_wins=@mysql_result($result2,0,"SEXP_0_wins"); 
		$p_SEXP_0_losses=@mysql_result($result2,0,"SEXP_0_losses"); 
		$p_SEXP_0_draws=@mysql_result($result2,0,"SEXP_0_draws"); 
		$p_SEXP_1_wins=@mysql_result($result2,0,"SEXP_1_wins"); 
		$p_SEXP_1_losses=@mysql_result($result2,0,"SEXP_1_losses"); 
		$p_SEXP_1_draws=@mysql_result($result2,0,"SEXP_1_draws"); 
		$p_SEXP_1_high_rank=@mysql_result($result2,0,"SEXP_1_high_rank"); 
		$p_SEXP_1_high_rating=@mysql_result($result2,0,"SEXP_1_high_rating"); 

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
	
	$p_acct_lastlogin_ip=mysql_result($result,0,"acct_lastlogin_ip");
	require ("bnet/games/statinfo.php");
	
	}
	else
	{
		echo "<center><ul>User not found :(</ul><center>";
	}
	echo "<TABLE cellSpacing=0 cellPadding=0 width='100%' border=0>";
}
else
{
	?>
	<TR>
	                            <TD class=rankingHeader align=middle><A class=button>&nbsp;<IMG height=6 src="stats.files/arrow-down.gif" width=14 border=0></A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Winner</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Race</A></TD>
	                            <TD class=rankingHeader><div class=button>&nbsp;<div></TD>

	                            <TD class=rankingHeader align=middle><A class=button href="">Race</A></TD>
	                            <TD class=rankingHeader><A class=button href="">Losser</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Map</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Ended</A></TD>
	                                                   <TD class=rankingHeader align=middle><div class=button>&nbsp;<div></TD>
			</TR>

	<?php

}


$preplace=0; #переменная для перестановки игроков
#ladder games список или...	

#se

$lim_first=$current_page*$games_on_page-$games_on_page;

if ($gnum=="" or $gnum=="all") { #если номер игры пустой, то показать все игры...
	if ($gnum=="")  $gresult="WHERE (p1name='$hwplayer' or p2name='$hwplayer') and clienttag='SEXP'"; #если игрок me_bot и игры все показываются
	else $gresult="WHERE clienttag='SEXP'";
		
		$result = MYSQL_QUERY("SELECT count(*) FROM ".TABLE_REPORTS." $gresult;", $mysql);
                if (!$result)
                    ShowError("Please, create table `hwreports`");
                    
                $games_count=mysql_result($result,0);#кол-во игр игрока

		
		$result = MYSQL_QUERY("SELECT uid, filename, map, gameid, gameended, p1name, p1race, p1rating, p1adj, p2name, p2race, p2rating, p2adj FROM ".TABLE_REPORTS." $gresult ORDER BY uid DESC LIMIT $lim_first,$games_on_page;"); #выбираем игры игрока
		$number = MYSQL_NUM_ROWS($result); #всего выбрать

		#$games_count = mysql_result( mysql_query("SELECT FOUND_ROWS()"),0 );

		
		echo "<p><b>Ladder games ($games_count)"; 
			if ($gnum!="" and $gnum!="all") echo " > Single game full info"; 
	echo "</b> (<FONT COLOR='#C0C0C0'>updated today at "; 
	
	DiePlease($path_lastupdate);
	echo date ( "H:i", filemtime($path_lastupdate) );

		
		
	echo "</FONT>)</p>"; 

#*/
	?>
<!---->


	<?php

	if ($number>0) { #если есть игры
	
		for ($i=0;$i<$number;$i++) {
			$r_uid=mysql_result($result,$i,"uid"); #game unicue id
			$r_filename=mysql_result($result,0,"filename");
			$r_gameid=mysql_result($result,$i,"gameid");
			$r_map=mysql_result($result,$i,"map"); $r_map=getColoredMapName($r_map);
			$r_gameended=mysql_result($result,$i,"gameended");
				$r_gameended = gmdate("M d Y, H:i",$r_gameended); #из секунд в норм дату

			$r_p1name=mysql_result($result,$i,"p1name"); 
			$r_p1race=mysql_result($result,$i,"p1race"); 
			$r_p1rating=mysql_result($result,$i,"p1rating"); 
			$r_p1adj=mysql_result($result,$i,"p1adj"); 
			$r_p2name=mysql_result($result,$i,"p2name"); 
			$r_p2race=mysql_result($result,$i,"p2race"); 
			$r_p2rating=mysql_result($result,$i,"p2rating"); 
			$r_p2adj=mysql_result($result,$i,"p2adj"); 
			
			if ($r_p1adj<0) { #если первый игрок проиграл, переставить местами
				$r_pname=$r_p1name;
				$r_prace=$r_p1race; 
				$r_prating=$r_p1rating; 
				$r_padj=$r_p1adj; 

				$r_p1name=$r_p2name;
				$r_p1race=$r_p2race; 
				$r_p1rating=$r_p2rating; 
				$r_p1adj=$r_p2adj; 

				$r_p2name=$r_pname;
				$r_p2race=$r_prace; 
				$r_p2rating=$r_prating; 
				$r_p2adj=$r_padj; 
			}

			require ("bnet/games/game.php"); #неполная информация об игре
		}
	}

} elseif ($gnum!="" and $gnum!="all") { #...если номер игры не пустой, то показать одну игру + её полную инфу (all - вообще все игры - показываются вместе с me_botom)
	$result = MYSQL_QUERY("SELECT * FROM ".TABLE_REPORTS." WHERE uid ='$gnum'"); #выбираем игрока
	$number = MYSQL_NUM_ROWS($result); #всего
	 
	if ($number>0) { #если есть такая игра
		$r_uid=mysql_result($result,0,"uid"); #game unicue id
		$r_filename=mysql_result($result,0,"filename");
		$r_gamename=mysql_result($result,0,"gamename");
		$r_gameid=mysql_result($result,0,"gameid");
		$r_clienttag=mysql_result($result,0,"clienttag");
		$r_gametype=mysql_result($result,0,"gametype");
		$r_gameoption=mysql_result($result,0,"gameoption");
		$r_gamecreated=mysql_result($result,0,"gamecreated");
		$r_gamestarted=mysql_result($result,0,"gamestarted");
		$r_gameended=mysql_result($result,0,"gameended");
			$r_gameended = gmdate("M d Y, H:i",$r_gameended);

		$r_map=mysql_result($result,0,"map"); $r_map=getColoredMapName($r_map);
		$r_mapauth=mysql_result($result,0,"mapauth");
		$r_mapsize=mysql_result($result,0,"mapsize");
		$r_tileset=mysql_result($result,0,"tileset");
		$r_joins=mysql_result($result,0,"joins");
		$r_maxplayers=mysql_result($result,0,"maxplayers");
		$r_host=mysql_result($result,0,"host");
		$r_port=mysql_result($result,0,"host");
		$r_p1name=mysql_result($result,0,"p1name"); 
		$r_p1result=mysql_result($result,0,"p1result"); 
		$r_p1rating=mysql_result($result,0,"p1rating"); 
		$r_p1num=mysql_result($result,0,"p1num");
		$r_p1prob=mysql_result($result,0,"p1prob");
		$r_p1k=mysql_result($result,0,"p1k");
		$r_p1adj=mysql_result($result,0,"p1adj"); 	
		$r_p1race=mysql_result($result,0,"p1race"); 
		$r_p1time=mysql_result($result,0,"p1time");
		$r_p1scoreoverall=mysql_result($result,0,"p1scoreoverall");
		 $r_p1units=mysql_result($result,0,"p1units");
		 $r_p1structures=mysql_result($result,0,"p1structures");
		 $r_p1resources=mysql_result($result,0,"p1resources");
		$r_p1unitsscore=mysql_result($result,0,"p1unitsscore");
		 $r_p1produced=mysql_result($result,0,"p1produced");
		 $r_p1killed=mysql_result($result,0,"p1killed");
		 $r_p1lostu=mysql_result($result,0,"p1lostu");
		$r_p1structuresscore=mysql_result($result,0,"p1structuresscore");
		 $r_p1constructed=mysql_result($result,0,"p1constructed");
		 $r_p1razed=mysql_result($result,0,"p1razed");
		 $r_p1losts=mysql_result($result,0,"p1losts");
		$r_p1resourcesscore=mysql_result($result,0,"p1resourcesscore");
		 $r_p1gas=mysql_result($result,0,"p1gas");
		 $r_p1minerals=mysql_result($result,0,"p1minerals");
		 $r_p1spent=mysql_result($result,0,"p1spent");
		$r_p2name=mysql_result($result,0,"p2name");
		$r_p2result=mysql_result($result,0,"p2result");
		$r_p2rating=mysql_result($result,0,"p2rating");
		$r_p2num=mysql_result($result,0,"p2num");
		$r_p2prob=mysql_result($result,0,"p2prob");
		$r_p2k=mysql_result($result,0,"p2k");
		$r_p2adj=mysql_result($result,0,"p2adj"); 	
		$r_p2race=mysql_result($result,0,"p2race"); 

		$r_p2time=mysql_result($result,0,"p2time");
		$r_p2scoreoverall=mysql_result($result,0,"p2scoreoverall");
		 $r_p2units=mysql_result($result,0,"p2units");
		 $r_p2structures=mysql_result($result,0,"p2structures");
		 $r_p2resources=mysql_result($result,0,"p2resources");
		$r_p2unitsscore=mysql_result($result,0,"p2unitsscore");
		 $r_p2produced=mysql_result($result,0,"p2produced");
		 $r_p2killed=mysql_result($result,0,"p2killed");
		 $r_p2lostu=mysql_result($result,0,"p2lostu");
		$r_p2structuresscore=mysql_result($result,0,"p2structuresscore");
		 $r_p2constructed=mysql_result($result,0,"p2constructed");
		 $r_p2razed=mysql_result($result,0,"p2razed");
		 $r_p2losts=mysql_result($result,0,"p2losts");
		$r_p2resourcesscore=mysql_result($result,0,"p2resourcesscore");
		 $r_p2gas=mysql_result($result,0,"p2gas");
		 $r_p2minerals=mysql_result($result,0,"p2minerals");
		 $r_p2spent=mysql_result($result,0,"p2spent");
		$r_p1normalrecord=mysql_result($result,0,"p1normalrecord");
		$r_p1ladderrecord=mysql_result($result,0,"p1ladderrecord");
		$r_p2normalrecord=mysql_result($result,0,"p2normalrecord");
		$r_p2ladderrecord=mysql_result($result,0,"p2ladderrecord");
		$r_gameduration=mysql_result($result,0,"gameduration");


			if ($r_p1adj<0) { #если первый игрок проиграл, переставить местами
				$r_pname=$r_p1name;
				$r_prace=$r_p1race; 
				$r_prating=$r_p1rating; 
				$r_padj=$r_p1adj; 

				$r_p1name=$r_p2name;
				$r_p1race=$r_p2race; 
				$r_p1rating=$r_p2rating; 
				$r_p1adj=$r_p2adj; 

				$r_p2name=$r_pname;
				$r_p2race=$r_prace; 
				$r_p2rating=$r_prating; 
				$r_p2adj=$r_padj; 

				$preplace=1;
			}

			require ("bnet/games/game.php"); #неполная информация об игре

			if ($preplace==1) { #и переделать обратно, чтобы не было изменений в инфе игры
				$r_pname=$r_p1name;
				$r_prace=$r_p1race; 
				$r_prating=$r_p1rating; 
				$r_padj=$r_p1adj; 

				$r_p1name=$r_p2name;
				$r_p1race=$r_p2race; 
				$r_p1rating=$r_p2rating; 
				$r_p1adj=$r_p2adj; 

				$r_p2name=$r_pname;
				$r_p2race=$r_prace; 
				$r_p2rating=$r_prating; 
				$r_p2adj=$r_padj; 
			}

			if ($r_p1result=="DISCONNE") $r_p1race="DISC"; elseif ($r_p1result=="DRAW") $r_p1race=="DRAW";
			if ($r_p2result=="DISCONNE") $r_p2race="DISC"; elseif ($r_p2result=="DRAW") $r_p2race=="DRAW"; else require ("bnet/games/gameinfo.php");
	}
}


if ($gnum=="" or $gnum=="all") { #если показыывается список игр, то отобразить страницы
	echo "<tr><td colspan=10 align=right><small>";
	
	echo pageNavigator($current_page, $games_on_page, $games_count, $trim_count, "index.php?game=SEXP&type=1&user=$hwplayer&g=$gnum&");
	
	/*
	echo "<br>Страницы: ";
	
	for ($i=1;$i!=$p_count;$i++) {
		if ($i!=$current_page) echo "<a href='$i'>$i</a>"; else echo "<B>$i</B>";
		if ($i!=$p_count-1) echo " <font color=#333333>|</font> ";
	}
	*/
	
	echo "</small></td></tr>";
}


?>