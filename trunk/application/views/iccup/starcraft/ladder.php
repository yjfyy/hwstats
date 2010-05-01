<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div id="container-left">

    
<div class="top-zag">
<h1>Ladder</h1>
</div>
<div class="clear"></div>

<div class="block">
    <h1><span class="times">1x1</span> ladder</h1>
</div>

<div class="t-im width100">
<div class="t-corp3 sort-header">
    <div class="field6 width45">&nbsp;</div>
    <div class="field6 width100px">&nbsp;</div>
    <div class="field6 width215"><a href="javascript:;">Игрок</a></div>
    <div class="field6 width80"><div class="down-a"></div><a href="javascript:;">Очки</a></div>
    <div class="field6 width90"><a href="javascript:;">Статистика</a></div>
    <div class="field6 width90"><a href="javascript:;">Победы</a></div>
</div>
</div>

    
<div class="t-im width100" id="sort-body">
<?php $toggle = 1;
foreach ($players as $p): ?>
    <div class="t-corp3 t-hover-<?php $toggle = ($toggle != 1) ? 1 : 2; echo $toggle; ?> sort-row">
    <div class="field1 width45">#<?php echo $p->rank; ?></div>
    <div class="field2 width100px"> <div class='<?php echo player::StatusIcon($p->acct_username); ?>'></div> <div class="<?php echo player::RankIcon($p->rating); ?>" title="<?php echo $p->rating; ?>"></div>&nbsp;</div>
    <div class="field2 width210">
	<?php echo player::FlagIcon($p->acct_username, $p->acct_lastlogin_ip, $p->cc2); ?>
	&nbsp;<a href="<?php echo hwstats::url_base("profile", $p->username); ?>"><?php echo $p->acct_username; ?></a>

    </div>
    <div class="field2 width70p10"><?php echo $p->rating; ?></div>
    <div class="field2 width80c"><?php echo $p->wins; ?>-<?php echo $p->losses; ?></div>
    <div class="field2 width80r"><?php echo player::WinRatio($p->wins + $p->losses, $p->wins); ?>%</div>
    </div>
<?php endforeach ?>
</div>

</div>
<div class="clear"></div>

