ALTER TABLE bnet ADD current_at_team varchar(16);

ALTER TABLE record ADD (`STAR_0_draws` int(11) default '0');
ALTER TABLE record ADD (`STAR_1_draws` int(11) default '0');
ALTER TABLE record ADD (`STAR_1_active_rank` int(11) default '0');
ALTER TABLE record ADD (`STAR_1_active_last_game` int(11) default '0');
ALTER TABLE record ADD (`STAR_1_active_rating` int(11) default '0');
ALTER TABLE record ADD (`STAR_1_active_disconnects` int(11) default '0');
ALTER TABLE record ADD (`STAR_1_active_draws` int(11) default '0');
ALTER TABLE record ADD (`STAR_1_active_wins` int(11) default '0');
ALTER TABLE record ADD (`STAR_1_active_losses` int(11) default '0');

ALTER TABLE record ADD (`SEXP_0_rank` int(11) default '0');
ALTER TABLE record ADD (`SEXP_1_draws` int(11) default '0');
ALTER TABLE record ADD (`SEXP_1_active_rank` int(11) default '0');
ALTER TABLE record ADD (`SEXP_1_active_last_game` int(11) default '0');
ALTER TABLE record ADD (`SEXP_1_active_rating` int(11) default '0');
ALTER TABLE record ADD (`SEXP_1_active_disconnects` int(11) default '0');
ALTER TABLE record ADD (`SEXP_1_active_draws` int(11) default '0');
ALTER TABLE record ADD (`SEXP_1_active_wins` int(11) default '0');
ALTER TABLE record ADD (`SEXP_1_active_losses` int(11) default '0');

ALTER TABLE record ADD (`DRTL_0_rank` int(11) NOT NULL);
ALTER TABLE record ADD (`DRTL_0_vitality` varchar(128) default '0');
ALTER TABLE record ADD (`DRTL_0_dexterity` varchar(128) default '0');
ALTER TABLE record ADD (`DRTL_0_magic` varchar(128) default '0');
ALTER TABLE record ADD (`DRTL_0_strength` varchar(128) default '0');
ALTER TABLE record ADD (`DRTL_0_diablo_kills` varchar(128) default '0');
ALTER TABLE record ADD (`DRTL_0_class` varchar(128) default '0');
ALTER TABLE record ADD (`DRTL_0_level` varchar(128) default '0');
ALTER TABLE record ADD (`DRTL_0_gold` varchar(128) default '0');

ALTER TABLE record ADD (`W2BN_0_rank` int(11) NOT NULL);
ALTER TABLE record ADD (`W2BN_0_last_game` int(11) default '0');
ALTER TABLE record ADD (`W2BN_0_losses` int(11) default '0');
ALTER TABLE record ADD (`W2BN_0_last_game_result` int(11) default '0');
ALTER TABLE record ADD (`W2BN_0_wins` int(11) default '0');
ALTER TABLE record ADD (`W2BN_0_draws` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_active_last_game` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_active_rank` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_active_rating` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_active_disconnects` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_active_draws` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_active_losses` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_active_wins` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_high_rank` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_rank` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_losses` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_rating` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_last_game` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_high_rating` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_last_game_result` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_draws` int(11) default '0');
ALTER TABLE record ADD (`W2BN_1_wins` int(11) default '0');

ALTER TABLE record ADD (`WAR3_w3pgrace` varchar(128) default NULL);
ALTER TABLE record ADD (`W3XP_demons_wins` int(11) default '0');
ALTER TABLE record ADD (`W3XP_demons_losses` int(11) default '0');
ALTER TABLE record ADD (`W3XP_solo_high_rank` int(11) default '0');
ALTER TABLE record ADD (`W3XP_team_high_rank` int(11) default '0');
ALTER TABLE record ADD (`W3XP_w3pgrace` int(11) default '0');
ALTER TABLE record ADD (`W3XP_ffa_high_rank` int(11) default '0');

ALTER TABLE `bnet`.`record` ADD INDEX `SEXP_1_rating` (`SEXP_1_rating`);