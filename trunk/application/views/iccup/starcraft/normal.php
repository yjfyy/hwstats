<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<?php echo Kohana::lang("hwstats.test", "[hi]") ?>




<div id="players">
<?php foreach ($players as $p): ?>
	<?php echo player::FlagIcon($p->acct_username, $p->acct_lastlogin_ip, $p->cc2); ?><?php echo $p->acct_username; ?> - <?php echo $p->rank; ?></div>
<?php endforeach ?>
</div>