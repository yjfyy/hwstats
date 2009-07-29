HarpyWar's Statistics for PvPGN (HWStats) v2.31

Project homepage: http://harpywar.com/?a=projects&b=6

0. If the players' accounts are stored in files / cdb, import them into mysql using perl script script/storage/plain2sql.pl (cdb2sql.pl for cdb)
1. Setup PvPGN config bnetd.conf:
		Ladder_games = "melee, oneonone"
		disc_is_loss = true (not required, but it is desirable for players)
		Output_update_secs = 60
		XML_status_output = false

2. The files which you need to change the pathes:
		config.inc.php
		/script/parse_reports.php ($config)
		/script/start/parse_reports (shell to run the script)

3. Next, you'll need insert hwreports.sql to your pvpgn "bnet" database

3.1. Important step:
	Compare fields from record_alter.sql with your PvPGN "record" database. There, all the required fields for various games of Battle.net which are not in the database by default, but uses by PvPGN.

3.2 Create new Index in the table "record" for the field SEXP_1_rating (optional, but a select players request will faster)

4. PHP Script /script/parse_reports.php should run with an interval (for example 5 minutes). This script parse info from Starcraft game reports to the database mysql.
More about cycling startup scripts, see http://harpywar.com/?a=articles&b=4&c=0&d=31

-- 
HWStats licensed under GPL (http://www.gnu.org/copyleft/gpl.html)