<?

$strdir=$HTTP_GET_VARS["dir"];
$strname=$HTTP_GET_VARS["siteid"];

if ( $strname != ""):
include ("$strdir"."$strname".".php");
include ("end.php");
else:
header("Location: index.php?dir=bnet/&siteid=stats");
endif;


?>
