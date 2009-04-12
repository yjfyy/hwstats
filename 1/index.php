<?

$strdir=$HTTP_GET_VARS["dir"];
$strname=$HTTP_GET_VARS["siteid"];

if ( $strname != "" and file_exists("$strdir"."$strname".".php")):
include ("$strdir"."$strname".".php");
else:
header("Location: index.php?dir=bnet/&siteid=stats");
endif;

?>