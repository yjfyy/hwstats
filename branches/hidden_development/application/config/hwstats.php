<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Main statistics configuration
 */


/**
 * Show country flag image near player name
 * 1. You should setup php GeoIP extension http://www.php.net/manual/en/geoip.setup.php
 * 2. Extract http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz
 *    to modules/geoip/GeoLiteCity.dat
 * 3. Uncomment string in application/config/config.php
 *       MODPATH.'geoip',
 */
$config['geoip'] = false;


