<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-04-16 20:06:45 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'inner IS NULL)
WHERE `username` = 'harpywar'
LIMIT 0, 1' at line 3 - SELECT *
FROM (`pvpgn_bnet`)
JOIN `pvpgn_record` ON (inner IS NULL)
WHERE `username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:09:25 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`pvpgn_bnet`.`uid` AND `1` = `pvpgn_=` AND `2` = `pvpgn_record`.`uid`)
WHERE `us' at line 3 - SELECT *
FROM (`pvpgn_bnet`)
JOIN `pvpgn_record` ON (0 `pvpgn_bnet`.`uid` AND `1` = `pvpgn_=` AND `2` = `pvpgn_record`.`uid`)
WHERE `username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:09:52 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`pvpgn_bnet`.`uid` AND `1` = `pvpgn_record`.`uid`)
WHERE `username` = 'harpywar'' at line 3 - SELECT *
FROM (`pvpgn_bnet`)
JOIN `pvpgn_record` ON (0 `pvpgn_bnet`.`uid` AND `1` = `pvpgn_record`.`uid`)
WHERE `username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:10:14 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`pvpgn_record`.`uid` AND `1` = `pvpgn_bnet`.`uid`)
WHERE `username` = 'harpywar'' at line 3 - SELECT *
FROM (`pvpgn_bnet`)
JOIN `pvpgn_record` ON (0 `pvpgn_record`.`uid` AND `1` = `pvpgn_bnet`.`uid`)
WHERE `username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:11:57 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`pvpgn_record`.`uid` AND `1` = `pvpgn_bnet`.`uid`)
WHERE `pvpgn_bnet`.`username`' at line 3 - SELECT *
FROM (`pvpgn_bnet`)
JOIN `pvpgn_record` ON (0 `pvpgn_record`.`uid` AND `1` = `pvpgn_bnet`.`uid`)
WHERE `pvpgn_bnet`.`username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:32:31 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Column 'uid' in field list is ambiguous - SELECT `uid`, `username`
FROM (`pvpgn_bnet`)
INNER JOIN `pvpgn_record` ON (`pvpgn_record`.`uid` = `pvpgn_bnet`.`uid`)
WHERE `pvpgn_bnet`.`username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:33:24 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Column 'uid' in field list is ambiguous - SELECT `uid`, `username`
FROM (`pvpgn_bnet`)
INNER JOIN `pvpgn_record` ON (`pvpgn_record`.`uid` = `pvpgn_bnet`.`uid`)
WHERE `pvpgn_bnet`.`username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:33:51 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'username, sexp_1_rank' in 'field list' - SELECT `username, sexp_1_rank`
FROM (`pvpgn_bnet`)
INNER JOIN `pvpgn_record` ON (`pvpgn_record`.`uid` = `pvpgn_bnet`.`uid`)
WHERE `pvpgn_bnet`.`username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:34:01 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'username, SEXP_1_rank' in 'field list' - SELECT `username, SEXP_1_rank`
FROM (`pvpgn_bnet`)
INNER JOIN `pvpgn_record` ON (`pvpgn_record`.`uid` = `pvpgn_bnet`.`uid`)
WHERE `pvpgn_bnet`.`username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:34:38 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'username, SEXP_1_rank' in 'field list' - SELECT `username, SEXP_1_rank`
FROM (`pvpgn_bnet`)
JOIN `pvpgn_record` ON (`pvpgn_record`.`uid` = `pvpgn_bnet`.`uid`)
WHERE `pvpgn_bnet`.`username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 20:34:50 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'username, SEXP_1_rank' in 'field list' - SELECT `username, SEXP_1_rank`
FROM (`pvpgn_bnet`)
JOIN `pvpgn_record` ON (`pvpgn_record`.`uid` = `pvpgn_bnet`.`uid`)
WHERE `pvpgn_bnet`.`username` = 'harpywar'
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 21:05:41 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN  ON (`pvpgn_`.`uid` = `pvpgn_`.`uid`)
LIMIT 0, 1' at line 2 - SELECT `uid` AS `uid`, `acct_username`, `acct_lastlogin_ip`, `acct_lastlogin_time`, `SEXP_1_last_game_result`, `SEXP_1_rating`, `SEXP_1_rank`, `SEXP_0_wins`, `SEXP_0_losses`, `SEXP_0_disconnects`, `SEXP_1_wins`, `SEXP_1_losses`, `SEXP_0_draws`, `SEXP_1_draws`
INNER JOIN  ON (`pvpgn_`.`uid` = `pvpgn_`.`uid`)
LIMIT 0, 1 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 21:05:53 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN  ON (`pvpgn_`.`uid` = `pvpgn_`.`uid`)
LIMIT 0, 10' at line 2 - SELECT `uid` AS `uid`, `acct_username`, `acct_lastlogin_ip`, `acct_lastlogin_time`, `SEXP_1_last_game_result`, `SEXP_1_rating`, `SEXP_1_rank`, `SEXP_0_wins`, `SEXP_0_losses`, `SEXP_0_disconnects`, `SEXP_1_wins`, `SEXP_1_losses`, `SEXP_0_draws`, `SEXP_1_draws`
INNER JOIN  ON (`pvpgn_`.`uid` = `pvpgn_`.`uid`)
LIMIT 0, 10 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 21:06:22 +04:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'bnetuid' in 'field list' - SELECT `bnetuid` AS `uid`, `acct_username`, `acct_lastlogin_ip`, `acct_lastlogin_time`, `SEXP_1_last_game_result`, `SEXP_1_rating`, `SEXP_1_rank`, `SEXP_0_wins`, `SEXP_0_losses`, `SEXP_0_disconnects`, `SEXP_1_wins`, `SEXP_1_losses`, `SEXP_0_draws`, `SEXP_1_draws`
FROM (`pvpgn_bnet`)
INNER JOIN `pvpgn_record` ON (`pvpgn_record`.`uid` = `pvpgn_bnet`.`uid`)
LIMIT 0, 10 in file H:/Projects/PHP/hwstats_hidden/system/libraries/drivers/Database/Mysql.php on line 371
2010-04-16 21:08:19 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:09:04 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:09:16 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:09:23 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:09:55 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:10:06 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:10:09 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:13:20 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:16:52 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, Kohana License.html, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:17:34 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:17:56 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:18:05 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:18:13 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:22:04 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:22:20 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:22:20 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:22:21 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:05 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:10 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:11 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:12 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:18 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:52 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:52 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:53 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:53 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:53 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:54 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:54 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:24:57 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:05 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:07 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:07 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:08 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:08 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:09 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:09 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:09 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:09 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:09 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:10 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:10 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:10 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:10 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:10 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:33 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:37 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:44 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:25:57 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:26:36 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:26:39 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 21:44:26 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
2010-04-16 22:36:55 +04:00 --- error: Uncaught Kohana_404_Exception: The page you requested, kohana.png, could not be found. in file H:/Projects/PHP/hwstats_hidden/system/core/Kohana.php on line 841
