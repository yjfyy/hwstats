<?php
#showstart
$strCaption="Battle.net server statistics";

require("bnet/online-offline.php");
require ("bnet/status.php");

?>
<p><b>Server statistics</b></p>

<b>Server address:</b> <?php echo $bnet_ip; ?><br>
<?php 

echo ServerStatus($bnet_ip);

?><br>
<!-- 
<b>�������� �����:</b><ul>
Warcraft II - 6112
<br>Warcraft III - 6112, 6200
<br>Starcraft - 6112
<br>Diablo - 6112
<br>Diablo II 6112, 6114, 4000
</ul>
<b>������ �������:</b> PvPGN <?php echo $sVersion ?><br>
<b>��������:</b> <?php echo $sUp ?><br>
<b>������� ����:</b> <?php echo $sGames ?><br>
<b>������ �������:</b> <?php echo $sUsers ?><br>
<b>������:</b> <?php echo $sChannels ?><br>
<b>��������� ���:</b> <?php echo $sAllGames+1 ?><br>
<b>���������������� �������:</b> <?php echo $sAllUsers ?>
 -->
<?php
if (file_exists($path_statusfile) )
	echo ServerStatusFile($path_statusfile); 
else
	DiePlease($path_statusfile);
?>