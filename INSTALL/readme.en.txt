HarpyWar's Statistics for PvPGN (HWStats)

Project homepage: http://harpywar.com/?a=projects&b=6

0. If the players' accounts are stored in files / cdb, import them into mysql using perl script script/storage/plain2sql.pl (cdb2sql.pl for cdb)
1. Setup PvPGN config bnetd.conf:
		Ladder_games = "melee, oneonone"
		disc_is_loss = true (not required, but it is desirable for players)
		Output_update_secs = 60
		XML_status_output = true

2. Open install.php in your browser and follow the installation

3. Shell script "hwstats\script\start\parse_reports" should run with an interval (for example 5 minutes). This script parse info from Starcraft game reports to the database mysql.
More about cycling startup scripts, see http://harpywar.com/?a=articles&b=4&c=0&d=31

-- 
HWStats licensed under GPL (http://www.gnu.org/copyleft/gpl.html)

If you want to get a new feature, or have a bugreport - please, post your message at http://code.google.com/p/hwstats/issues/list