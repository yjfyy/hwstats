<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Core
 *
 * Default language locale name(s).
 * First item must be a valid i18n directory name, subsequent items are alternative locales
 * for OS's that don't support the first (e.g. Windows). The first valid locale in the array will be used.
 *
 * If language is not found, it will display "en_US"
 *
 * @see http://php.net/setlocale
 */
$config['language'] = array('en_US', 'English');
//$config['language'] = array('ru_RU', 'English');
// TODO: autodetect language
//       parse $_SERVER["HTTP_ACCEPT_LANGUAGE"] to extract user agent language
//       give user to choose language and save choise in the cookie

/**
 * Locale timezone. Defaults to use the server timezone.
 * @see http://php.net/timezones
 */
$config['timezone'] = '';