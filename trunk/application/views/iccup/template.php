<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title><?php echo Kohana::config("hwstats.name"); ?> &mdash; <?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="<?php echo url::base(); ?>files/css/main.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>

	<?php if (Kohana::config("hwstats.show_country_flag")): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo url::base(); ?>files/css/flags.css">
	<script src="<?php echo url::base(); ?>files/js/flags.js" type="text/javascript"></script>
	<?php endif ?>

<script type="text/javascript">
function url_base() { return "<?php echo url::base();?>"; }

</script>
    </head>
    <body>


    <div class="box">
    Header
    </div>
    <br><br>
    <?php

	echo $content;
    ?>


    
    <br><br>
    Footer
    </body>
</html>