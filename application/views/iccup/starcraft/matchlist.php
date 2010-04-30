<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div id="container-left">


<div class="top-zag">
    <h1>Match List</h1>

</div>

<div class="clear"></div>

<!-- 1X1 LADDER-->
<div class="matches-list">

<div class="block">
    <h1><span class="times">1x1</span> Matches</h1>
<div class="clear"></div>
</div>

<!-- th -->
<div class="t-im width100">
    <div class="t-corp3">
    <div class="field6 width200">First team</div>
    <div class="field6 width200">Second team</div>
    <div class="field6 width60c">Duration</div>
    <div class="field6 width50c">Changes</div>
    <div class="field6 width110c">
    Details
    </div>
    </div>
</div>


<!-- UPCOMING MATCHES -->
<div class="t-im width100">
<?php #foreach ($maps as $m): ?>
    <div class="t-corp3 t-hover-1">
    <div class="field2 width200">
    <div class="a2" title="10941"></div> <a href='http://www.iccup.com/starcraft/ladder/1x1/republic_of_korea.html' title='REPUBLIC OF KOREA'><img src='http://www.iccup.com/upload/images/flags/kr.gif' alt='KR' height='12' width='20' border='0' /></a> <a href='gamingprofile/shrck.html' >shrck</a>
    </div>
    <div class="field2 width200">
    <div class="a3" title="13896"></div> <a href='http://www.iccup.com/starcraft/ladder/1x1/republic_of_korea.html' title='REPUBLIC OF KOREA'><img src='http://www.iccup.com/upload/images/flags/kr.gif' alt='KR' height='12' width='20' border='0' /></a> <a href='gamingprofile/tkcjsaksdnjs.html' style='font-weight:bold'>tkcjsaksdnjs</a>
    </div>
    <div class="field8 width60">16 : 37</div>
    <div class="field8 width50"><font color="darkred"><b>-170</b></font></div>
    <div class="field8 width110c">
    <a href="../matchinfo/1294267.html" class="compl game-details" id="game-1294267" style="padding:0">Details</a>

    <div class="details-anchor" id="game-details-1294267">
	<div class="popUp-lvl1" style="width:375px;left:-255px">
	<div style="width:375px">
	<span class="corner-1"></span>
	<span class="corner-s" style="width:361px"></span>
	<span class="corner-2"></span>
	</div>
	    <div class="popUp-out" style="width:363px">
	    popout
	    </div>
	<div style="width:375px">
	<span class="corner-4"></span>
	<span class="corner-b" style="width:361px"></span>
	<span class="corner-3"></span>
	</div>
	</div>
    </div>
    </div>
    </div>
<?php #endforeach ?>
</div>


</div>




</div>