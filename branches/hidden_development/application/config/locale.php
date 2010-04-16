<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Core
 *
 * Default language locale name(s).
 * First item must be a valid i18n directory name, subsequent items are alternative locales
 * for OS's that don't support the first (e.g. Windows). The first valid locale in the array will be used.
 *
 * You can use $_SERVER["HTTP_ACCEPT_LANGUAGE"] to automacically detect user agent language.
 * If language is not found, it will display "en_US"
 *
 * @see http://php.net/setlocale
 */
$config['language'] = array('en_US', 'English');
// TODO: parse $_SERVER["HTTP_ACCEPT_LANGUAGE"] to extract user agent language


/**
 * Locale timezone. Defaults to use the server timezone.
 * @see http://php.net/timezones
 */
$config['timezone'] = '';