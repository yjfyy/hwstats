HarpyWar's Statistics for PvPGN (HWStats) v2.3

��������� �������: http://harpywar.com/?a=projects&b=6

0. ���� �������� ������� �������� � ������/cdb, ������������� �� � mysql � ������� perl ������� script/storage/plain2sql.pl (cdb2sql.pl ��� cdb)
1. � pvpgn ������� bnetd.conf ������ ���� ����������:
	ladder_games = "melee,oneonone"
	disc_is_loss = true (�� �����������, �� ���������� ��� ������ �������)
	output_update_secs = 60
	XML_status_output = false

2. �����, � ������� ����� �������� ����:
	config.inc.php
	/script/parse_reports.php ($config)
	/script/start/parse_reports (���� ��� ������� �������)

3. ����� ���������� � pvpgn �� mysql (bnet) �������� ����� ������� �� ����� hwreports.sql

3.1. �������� record_alter.sql � ������ � ���� ������ PvPGN "record" (�������� �����������). ��� ��� ����������� ���� ��� ������ ��� �����, ������� ��� � ���� ��-���������, �� ������������ pvpgn'��. � ����� ������ ��� ��� ������ ��������� ������ ��� ������� ������.

3.2 ������� ������ � ������� "record" ��� ���� SEXP_1_rating (�������������, �� ������� ������� ����� ����������� ������ ������ ������ �������)

4. /script/parse_reports.php ������ ���� ��������� ����� ������������ ���������� �������, ����� �������� ���������� ��� Starcraft � �� mysql. 
��������� � ����������� ������� �������� ��. http://harpywar.com/?a=articles&b=4&c=0&d=31

--
HWStats licensed under GPL (http://www.gnu.org/copyleft/gpl.html)