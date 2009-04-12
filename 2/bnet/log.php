<?
#showstart
$strCaption="#StarCraft_UTech channel log (irc:10.61.241.5)";
include ("start.php");

echo '<p>';

$filename = "C:\HarpyWar\mIRC\logs\#Starcraft_UTech.Dal.Net.Ru.log";
$handle = fopen ($filename, "r");

$contents = fread ($handle, filesize ($filename));

$ab=ereg_replace("<","",$contents);
$ab=ereg_replace(">",":",$ab);
$ab=ereg_replace("\n","<br>",$ab);

fclose ($handle);
echo $ab;

echo '</p>';
?>



