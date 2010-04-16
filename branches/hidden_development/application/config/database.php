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
		'user'     => 'root', // pvpgn database username
		'pass'     => '11532', // pvpgn database password
		'host'     => 'localhost', // pvpgn database host
		'port'     => FALSE,
		'socket'   => FALSE,
		'database' => 'hwstats' // pvpgn database name
	),
	'character_set' => 'utf8',
	'table_prefix'  => 'pvpgn_', // (optional) if you are using prefix for pvpgn tables
	'object'        => TRUE,
	'cache'         => TRUE, // it caches the results of all queries, so when the next one is run, it uses that cache result instead of querying the database again
	'escape'        => TRUE
);

// predefined table names
$config['table_record'] = "record";
$config['table_bnet'] = "bnet";
$config['table_reports_starcraft'] = "reports_starcraft";
$config['table_reports_warcraft3'] = "reports_warcraft3"; // not supported
$config['table_reports_dota'] = "reports_dota"; // not supported
$config['table_reports_diablo'] = "reports_diablo";
$config['table_reports_diablo2'] = "reports_diablo2";

