HarpyWar's Statistics for PvPGN (HWStats)

��������� �������: http://harpywar.com/?a=projects&b=6

0. ���� �������� ������� �������� � ������/cdb, ������������� �� � mysql � ������� perl ������� script/storage/plain2sql.pl (cdb2sql.pl ��� cdb)
1. � pvpgn ������� bnetd.conf ������ ���� ����������:
	ladder_games = "melee, oneonone"
	disc_is_loss = true (�� �����������, �� ���������� ��� ������ �������)
	output_update_secs = 60
	XML_status_output = true

2. �������� install.php ����� ������� � �������� ���������� ���������

3. ������ "hwstats\script\start\parse_reports" ���� ��������� ����� ������������ ���������� ������� (��������, 5 �����), ����� �������� ���������� ��� Starcraft � �� mysql.
��������� � ����������� ������� �������� ��. http://harpywar.com/?a=articles&b=4&c=0&d=31

--
HWStats licensed under GPL (http://www.gnu.org/copyleft/gpl.html)

���� � ��� ���� ����������� �� ��������� ��� ��������� - �������� ��� ��������� �� http://code.google.com/p/hwstats/issues/list ��� �� ������ http://forums.harpywar.com/ � ������� "PvPGN > ����������"