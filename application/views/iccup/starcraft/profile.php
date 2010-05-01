<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div id="container-left">


<div class="top-zag">
    <h1><?php echo $player->acct_username; ?></h1>
    <div class="teamgames">
	<?php foreach (Kohana::config("hwstats.games") as $gametag): ?>
	
	    <div class="tg-sc">
		<?php if ($gametag != Router::$controller) { ?>
		<a href="<?php echo sprintf("%s%s/profile/%s", url::base(), $gametag, $player->username); ?>">
		<?php } ?>
		    <img src="<?php echo url::base(); ?>files/images/client/<?php echo $gametag; ?>.gif" border="0" title="<?php echo $gametag; ?>"/>
		<?php if ($gametag != Router::$controller) { ?>
		</a>
		<?php } ?>
	    </div>

	<?php endforeach ?>
    </div>
</div>

<div class="clear"></div>

<!-- 1X1 LADDER-->
<div class="pg-left">
<div class="block">
    <h1><span class="times">1x1</span> Ladder <?php echo Kohana::lang("content.rating")  ?></h1>
<div class="clear"></div>
</div>
<div class="t-im width100 padding15 bdt">
    <div class="t-corp3 t-hover-2">
	<div class="field1 width160">Location</div>
	<div class="field2">#<?php echo $player->SEXP_1_rank; ?></div>
    </div>
    <div class="t-corp3 t-hover-1">
	<div class="field1 width160">Rank</div>
	<div class="field2"><div class="<?php echo player::RankIcon($player->SEXP_1_rating); ?>" title="<?php echo $player->SEXP_1_rating; ?>"></div></div>
    </div>
    <div class="t-corp3 t-hover-2">
	<div class="field1 width160">Points</div>
	<div class="field2"><?php echo $player->SEXP_1_rating; ?></div>
    </div>
    <div class="t-corp3 t-hover-1">
	<div class="field1 width160">Statistics (win / loss / disc)</div>
	<div class="field2"><?php echo $player->SEXP_1_wins; ?> / <?php echo $player->SEXP_1_losses; ?> / <?php echo $player->SEXP_1_disconnects; ?></div>
    </div>
    <div class="t-corp3 t-hover-2">
	<div class="field1 width160">Match List</div>
	<div class="field2">322 | <a href='<?php echo hwstats::url_base("matchlist", $player->username); ?>'>Match List</a></div>
    </div>
    <div class="t-corp3 t-hover-1">
	<div class="field1 width160">Win Ratio</div>
	<div class="field2"><?php echo player::WinRatio($player->SEXP_0_wins + $player->SEXP_0_losses, $player->SEXP_0_wins); ?>%</div>
    </div>
</div>
<div class="t-im width100 bdt">
    <div class="t-corp3 t-hover-1">
	<div class="field1 width160">Best rank:</div>
	<div class="field2"><div class="<?php echo player::RankIcon($player->SEXP_1_high_rating); ?>" title="<?php echo $player->SEXP_1_high_rating; ?>"></div></div>
    </div>
    <div class="t-corp3 t-hover-2">
	<div class="field1 width160">Last game result:</div>
	<div class="field2"><?php echo $player->SEXP_1_last_game_result; ?></div>
    </div>
</div>
</div>
<!-- end 1X1 LADDER-->


<!-- NORMAL STATS -->
<div class="pg-right">
<div class="block">
    <h1>Normal <?php echo Kohana::lang("content.rating") ?></h1>
<div class="clear"></div>
</div>
<div class="t-im width100 padding15 bdt">
    <div class="t-corp3 t-hover-2">
	<div class="field1 width160">Location</div>
	<div class="field2">#<?php echo $player->SEXP_0_rank; ?></div>
    </div>
    <div class="t-corp3 t-hover-1">
	<div class="field1 width160">Statistics (win / loss / disc)</div>
	<div class="field2"><?php echo $player->SEXP_0_wins; ?> / <?php echo $player->SEXP_0_losses; ?> / <?php echo $player->SEXP_0_disconnects; ?></div>
    </div>
    <div class="t-corp3 t-hover-1">
	<div class="field1 width160">Win Ratio</div>
	<div class="field2"><?php echo player::WinRatio($player->SEXP_0_wins + $player->SEXP_0_losses, $player->SEXP_0_wins); ?>%</div>
    </div>
</div>
<div class="t-im width100 bdt">
    <div class="t-corp3 t-hover-2">
	<div class="field1 width160">Last game result:</div>
	<div class="field2"><?php echo $player->SEXP_0_last_game_result; ?></div>
    </div>
</div>
</div>
<!-- end NORMAL STATS-->

<div class="clear"></div>


<!--MAPS AND RACE statistics-->
<div class="block">
<h1><?php echo Kohana::lang("content.maps_statistics")  ?></h1>
<div class="clear"></div>
</div>
<div class="t-im width100">
<div class="t-corp3">
    <div class="field6 width150"><div class="top-a"></div><?php echo Kohana::lang("content.maps_statistics")  ?></div>
    <div class="field6 width100px"><div class="down-a"></div><a href="#"><?php echo Kohana::lang("content.played")  ?></a></div>
    <div class="field6 width120"><div class="down-a"></div><a href="#">Zerg</a></div>
    <div class="field6 width120"><div class="down-a"></div><a href="#">Protoss</a></div>
    <div class="field6 width120"><div class="down-a"></div><a href="#">Terran</a></div>
</div>

<?php #foreach ($maps as $m): ?>
<div class="t-corp3 t-hover-1">
    <div class="field2 width155"><a href="mapinfo/iccup_fighting_spirit_1.3.html">| iCCup | Fighting Spirit 1.3</a></div>
    <div class="field2 width100px">38 | 31%</div>
    <div class="field2 width120">0 - 0 | 0%</div>
    <div class="field2 width120">29 - 9 | 76.3%</div>
    <div class="field2 width120">0 - 0 | 0%</div>
</div> 
<?php #endforeach ?>

</div><!--MAPS AND RACE statistics-->



</div>