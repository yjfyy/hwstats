&nbsp;<b>Server status</b>
<div class="status-info">
<?php

require("bnet/online-offline.php");
require ("bnet/status.php");


echo GetServerStatusInfo ("inc/server.xml", EXTERNAL_ADDRESS, SHOW_CHANNELS);
?>
</div>
<br><br>