HarpyWar's Statistics for PvPGN (HWStats) v2.3

Страничка проекта: http://harpywar.com/?a=projects&b=6

0. Если аккаунты игроков хранятся в файлах/cdb, импортировать их в mysql с помощью perl скрипта script/storage/plain2sql.pl (cdb2sql.pl для cdb)
1. В pvpgn конфиге bnetd.conf должно быть выставлено:
	ladder_games = "melee,oneonone"
	disc_is_loss = true (не обязательно, но желательно для самого сервера)
	output_update_secs = 60
	XML_status_output = false

2. Файлы, в которых нужно изменить пути:
	config.inc.php
	/script/parse_reports.php ($config)
	/script/start/parse_reports (шелл для запуска скрипта)

3. Далее необходимо в pvpgn бд mysql (bnet) вставить новую таблицу из файла hwreports.sql

3.1. Сравнить record_alter.sql с полями в базе данных PvPGN "record" (добавить недостающие). Там все необходимые поля для разных игр бнета, которых нет в базе по-умолчанию, но используются pvpgn'ом. В логах пвпгна без них иногда возникают ошибки при попытке записи.

3.2 Создать индекс в таблице "record" для поля SEXP_1_rating (необязательно, но немного быстрее будет выполняться запрос вывода списка игроков)

4. /script/parse_reports.php скрипт надо запускать через определенный промежуток времени, чтобы заносить результаты игр Starcraft в бд mysql. 
Подробнее о циклическом запуске скриптов см. http://harpywar.com/?a=articles&b=4&c=0&d=31

--
HWStats licensed under GPL (http://www.gnu.org/copyleft/gpl.html)