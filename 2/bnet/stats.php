<?
#showstart
include ("start.php");
include ("top/server.php");
include("top/top.php");

$pcount=count($rating0); #Переменная с кол-вом игроков
?>
<p><b>StarCraft Ladder (Top <? echo $pcount ?>)</b> <FONT COLOR="#C0C0C0"><? echo "Last Update: $sUpdate"; ?></FONT></p>

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
$i=0;
while ($i != $pcount) {
$i++;
$t=$i-1;; #for expanded stats

if ($rank[$i]==1): $img1="GOSU";
elseif ($rank[$i]==2): $img1="GOS3";
elseif ($rank[$i]==3): $img1="HAS2";
elseif ($rank[$i]==4): $img1="CHO1";
else: $img1="NEWB";    
endif;

#$pp='<table cellpadding="2" cellspacing="0" width="98%" border="1" bordercolor="white" class="infotable"><tr class="row">';

include ("bnet/games/stat.php");
#echo $pp.$txtstat;

}
?>

