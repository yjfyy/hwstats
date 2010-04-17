<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>


<?php foreach ($players as $p): ?>
	<li><?php echo $p->acct_username; ?></li>
<?php endforeach ?>