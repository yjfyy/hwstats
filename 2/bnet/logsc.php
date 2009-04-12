<?
#showstart
$strCaption="Battle.net Server channel log";
include ("start.php");

echo '<p>';

$filename = "C:\Program Files\TopazChat\Logs\log.txt";
$handle = fopen ($filename, "r");

$contents = fread ($handle, filesize ($filename));
$ab=ereg_replace("<","",$contents);
$ab=ereg_replace(">",":",$ab);
$ab=ereg_replace("\n","<br>",$ab);

fclose ($handle);
echo $ab;


echo '</p>';
?>



