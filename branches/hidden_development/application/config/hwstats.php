<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Main statistics configuration
 */



/**
 * Page display style (see application/views)
 */
$config['style'] = "silver";


/**
 * How many players display on page
 */
$config['players_on_page'] = 50;

/**
 * How many games display on page
 */
$config['games_on_page'] = 20;


/**
 * Show country flag image near player name
 */
$config['geoip'] = true;


/**
 * Show this games in statistics
 * Comment game strings you won't show
 */
$config['games'] = array (
    "sexp", // starcraft broodwar
    "drtl", // diablo retail
    "d2dv", // diablo 2 original
    "d2xp", // diablo 2 lord of destruction
    "w3xp", // warcraft 3 the frozen throne
    //"dota", // not supported
);
