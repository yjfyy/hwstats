<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Database
 *
 * Database connection settings, defined as arrays, or "groups". If no group
 * name is used when loading the database library, the group named "default"
 * will be used.
 *
 * Each group can be connected to independently, and multiple groups can be
 * connected at once.
 *
 * Group Options:
 *  benchmark     - Enable or disable database benchmarking
 *  persistent    - Enable or disable a persistent connection
 *  connection    - Array of connection specific parameters; alternatively,
 *                  you can use a DSN though it is not as fast and certain
 *                  characters could create problems (like an '@' character
 *                  in a password):
 *                  'connection'    => 'mysql://dbuser:secret@localhost/kohana'
 *  character_set - Database character set
 *  table_prefix  - Database table prefix
 *  object        - Enable or disable object results
 *  cache         - Enable or disable query caching
 *	escape        - Enable automatic query builder escaping
 */
$config['default'] = array
(
	'benchmark'     => TRUE,
	'persistent'    => FALSE,
	'connection'    => array
	(
		'type'     => 'mysql', // pvpgn database type (mysql, mysqli, mssql, pdosqlite, pgsql)
		'user'     => 'hwstats_readonly', // pvpgn database username
		'pass'     => 'dydYeZi2', // pvpgn database password
		'host'     => 'harpywar.com', // pvpgn database host
		'port'     => FALSE,
		'socket'   => FALSE,
		'database' => 'hwstats' // pvpgn database name
	),
	'character_set' => 'utf8',
	'table_prefix'  => '', // (optional) if you are using prefix for pvpgn tables
	'object'        => TRUE,
	'cache'         => FALSE,
	'escape'        => TRUE
);

// predefined tables
$config['table_record'] = "record";
$config['table_profile'] = "profile";
$config['table_games_starcraft'] = "games_starcraft";
$config['table_games_warcraft3'] = "games_warcraft3";
$config['table_games_dota'] = "games_dota";
$config['table_games_diablo'] = "games_diablo";
$config['table_games_diablo2'] = "games_diablo2";

