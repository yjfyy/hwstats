HarpyWar's Statistics for PvPGN (HWStats)

Страничка проекта: http://harpywar.com/?a=projects&b=6

0. Если аккаунты игроков хранятся в файлах/cdb, импортировать их в mysql с помощью perl скрипта script/storage/plain2sql.pl (cdb2sql.pl для cdb)
1. В pvpgn конфиге bnetd.conf должно быть выставлено:
	ladder_games = "melee, oneonone"
	disc_is_loss = true (не обязательно, но желательно для самого сервера)
	output_update_secs = 60
	XML_status_output = true

2. Откройте install.php через браузер и следуйте инструкции установки

3. Скрипт "hwstats\script\start\parse_reports" надо запускать через определенный промежуток времени (например, 5 минут), чтобы заносить результаты игр Starcraft в бд mysql.
Подробнее о циклическом запуске скриптов см. http://harpywar.com/?a=articles&b=4&c=0&d=31

--
HWStats licensed under GPL (http://www.gnu.org/copyleft/gpl.html)

Если у вас есть предложения по улучшению или багрепорт - оставьте своё сообщение на http://code.google.com/p/hwstats/issues/list или на форуме http://forums.harpywar.com/ в разделе "PvPGN > Дополнения"