<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript">

    function LoadFlag(el)
    {
	var pInfo = $(el).attr("alt");

	$(el).removeClass().addClass("noflag");

        $.ajax({
	    type: 'GET',
	    dataType: 'json',
	    url: '<?php echo url::base() ?>script/json/flag/' + pInfo,
            success: function (data) {
		var countrycode = data.cc2.toLowerCase();
		if (countrycode == "xx") // bad cc2
		    $(el).removeClass().addClass("badflag");
		else
		    $(el).removeClass().addClass("flag").addClass("f-"+countrycode);
            },
	    error: function () {
		$(el).removeClass().addClass("badflag");
            }
        });
    }

    $(document).ready(function(){
	$("div#flag-container .noflag").each(function(){
		LoadFlag(this);
	});

    });

</script>


<div id="players">
<?php
//TODO: display country code
foreach ($players as $p): ?>
	<div id="flag-container"><div onclick="LoadFlag(this);" class="<?php echo player::GetFlagClass($p->cc2); ?>" style="float:left;" title="<?php echo "Country" ?>" alt="<?php echo player::EncodeFlagData($p->acct_username, $p->acct_lastlogin_ip, $p->cc2); ?>"></div><?php echo $p->acct_username; ?></div>
<?php endforeach ?>
</div>