<?
$pnum=$HTTP_GET_VARS["p"];
$gnum=$HTTP_GET_VARS["g"];


	include ("start.php");

	  
	include("top/tops.php");
	$i=0;
	while ($name[$i] != $pnum) {
	$i++;


	}

	if ($rank[$i]==1): $img1="GOSU";
	elseif ($rank[$i]==2): $img1="GOS3";
	elseif ($rank[$i]==3): $img1="HAS2";
	elseif ($rank[$i]==4): $img1="CHO1";
	else: $img1="NEWB";
	endif;

	echo '<p><b>Player: '.$name[$i].'</b></p>';
	?>

			<TR>
	                            <TD class=rankingHeader align=middle><A class=button href="">Rank<IMG height=6 src="stats.files/arrow-down.gif" width=14 border=0></A></TD>

	                            <TD class=rankingHeader><A class=button href="">Rating</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Stats</A></TD>
	                            <TD class=rankingHeader><A class=button href="">Player Name</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Wins</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Losses</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Discs</A></TD>
	                            <TD class=rankingHeader><A class=button href="">Games</A></TD>
	                            <TD class=rankingHeader><A class=button href="">Last</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">IP adress</A></TD>
			</TR>


	<?
	$t=$u-1; #for expanded stats
	include ("bnet/games/stat.php");
include ("bnet/games/statinfo.php");
if (file_exists("bnet/games/users/".$pnum.".php")==true) { include ("bnet/games/users/".$pnum.".php"); }

#/*
	if ($p1name=="" and file_exists("bnet/games/users/".$pnum.".php")==false) { echo "<p><b>Never played ladder games</b></p>";
	}
	else { 
		echo "<p><b>Ladder games"; 
		if ($gnum!="") { echo " > Single game full info"; } 
		}
echo "</b></p><TABLE cellSpacing=0 cellPadding=0 width='100%' border=0>"; 

#*/
	?>
<!---->
	<TR>
	                            <TD class=rankingHeader align=middle><A class=button>&nbsp;<IMG height=6 src="stats.files/arrow-down.gif" width=14 border=0></A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Winner</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Race</A></TD>
	                            <TD class=rankingHeader><div class=button>&nbsp;<div></TD>

	                            <TD class=rankingHeader align=middle><A class=button href="">Race</A></TD>
	                            <TD class=rankingHeader><A class=button href="">Losser</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Map</A></TD>
	                            <TD class=rankingHeader align=middle><A class=button href="">Date</A></TD>
	                                                   <TD class=rankingHeader align=middle><div class=button>&nbsp;<div></TD>
			</TR>

	<?
#/*
if ($gnum!=""){
$u=$gnum;
include ("bnet/games/game.php");
include ("bnet/games/gameinfo.php");

}
else{
	$u=count($p1name)+1;
	while ($u != 1) {
	$u--;
	include ("bnet/games/game.php");

	}
}
#*/

?>

<table>
