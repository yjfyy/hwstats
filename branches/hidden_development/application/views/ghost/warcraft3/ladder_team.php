<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<?php echo Kohana::lang("hwstats.test", "[hi]") ?>




<div id="players">
<?php foreach ($players as $p): ?>
	<div id="flag-container"><div onclick="LoadFlag(this);" class="<?php echo player::FlagClass($p->cc2); ?>" style="float:left;" title="<?php echo player::GetCountryByCode($p->cc2); ?>" alt="<?php echo player::EncodeFlagData($p->acct_username, $p->acct_lastlogin_ip, $p->cc2); ?>"></div><?php echo $p->acct_username; ?> - <?php echo $p->rating; ?></div>
<?php endforeach ?>
</div>