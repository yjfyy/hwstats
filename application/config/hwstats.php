<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Main statistics configuration
 */



/**
 * Page display style (see application/views)
 */
$config['style'] = "ghost";


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
$config['show_country_flag'] = true;


/**
 * Show this games in statistics
 * Comment game strings you won't show
 */
$config['games'] = array (
    "starcraft",
    "diablo",
    "diablo2",
    "warcraft3",
    //"dota", // not supported
);
