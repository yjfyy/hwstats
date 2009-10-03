<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title> Welcome to hwstats installation </title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link href="stats.files/main.css" type="text/css" rel=stylesheet>
  </head>
  <body>
<?php
/* 
 * hwstats installation script
 * (c) 2009, HarpyWar
 * http://harpywar.com
 */

if ($_POST)
{
    Install1();
    Install2();
    Install3();
}
else
    Install0();


// step 0 - show form
function Install0()
{
    $vars = explode(";", $_SERVER['PATH']);
    $php_path = $vars[0] . "php";

    $content = "<h2>Welcome to hwstats installation</h2>
<small>Please, visit <a href='http://code.google.com/p/hwstats/' target='_blank'>http://code.google.com/p/hwstats/</a> to download latest version</small>
<br><br><form action='' method='POST'>

    <table class='install-form'>
<tr><th width='300'></th><th width=600></th></tr>
<tr><td align=right>MySQL host:</td><td><input name='mysql_host' type='text' size=60  value='localhost'></td></tr>
<tr><td align=right>MySQL user:</td><td><input name='mysql_user' type='text' size=60 value='root'></td></tr>
<tr><td align=right>MySQL password:</td><td><input name='mysql_password' type='text' size=60></td></tr>
<tr><td align=right>PvPGN database:</td><td><input name='mysql_db' type='text' size=60 value='pvpgn'></td></tr>
<tr><td align=right>Table 'bnet':</td><td><input name='table_bnet' type='text' size=60 value='bnet'></td></tr>
<tr><td align=right>Table 'record':</td><td><input name='table_record' type='text' size=60 value='Record'></td></tr>
<tr><td align=right>External PvPGN address:</td><td><input name='external_address' type='text' size=60 value='pvpgn.harpywar.com'></td></tr>
<tr><td align=right valign=top>Path to PvPGN directory:</td><td><input name='pvpgn_path' type='text' size=60 value=''>
<br>  (windows example: D:\\\SERVERS\\\PVPGN\\\)
<br>  (unix example: /usr/local/pvpgn/)
</td></tr>
<tr><td align=right>Your server forum URL:</td><td>http://<input name='forum_link' type='text' size=54 value='forums.harpywar.com'></td></tr>
<tr><td align=right>Players on page:</td><td><input name='players_on_page' type='text' size=10 value='40'></td></tr>
<tr><td align=right>Games on page:</td><td><input name='games_on_page' type='text' size=10 value='20'></td></tr>
<tr><td align=right>Page count on page navigator:</td><td><input name='trim_count' type='text' size=10 value='4'></td></tr>
<tr><td align=right>Show players IPs:</td><td><input name='show_player_ip' type='checkbox' CHECKED></td></tr>
<tr><td align=right>Show channels on server status page:</td><td><input name='show_channels' type='checkbox'></td></tr>
<tr><td align=right>Compress pages with GZip:</td><td><input name='gzip_compress' type='checkbox' CHECKED></td></tr>
<tr><td align=right>Minimal symbols to player search:</td><td><input name='min_search_symbols' type='text' size=10 value='3'></td></tr>
<tr><td align=right valign=top>Path to PHP binary file:</td><td><input name='php_path' type='text' size=60 value='".$php_path."'>
<br>  (windows example: C:\Program files\php\php.exe)
<br>  (unix example: /usr/local/bin/php)
</td></tr>
    </table>
<br><br>
<div class='install-button'><input type='submit' value='I am ready to install'></div>
<br><br>
    </form>";
   echo  $content;
}

// step 2 - config creation
function Install1()
{
    echo "<h3>Step 1: inc/config.inc.php creation</h3>";
    if (!$_POST)
        DieMessage("No data to write config!");

    require ("inc/functions.inc.php");
    $config = file_get_contents("INSTALL/config.inc.php.tpl");
    
    // replace values from $_POST to template
    $newconfig = sprintf($config,
        $_POST['mysql_host'],
        $_POST['mysql_user'],
        $_POST['mysql_password'],
        $_POST['mysql_db'],
        $_POST['external_address'],
        $_POST['table_bnet'],
        $_POST['table_record'],
        $_POST['pvpgn_path'],
        ($_POST['games_on_page']) ? $_POST['games_on_page'] : 20,
        ($_POST['players_on_page']) ? $_POST['players_on_page'] : 40,
        ($_POST['trim_count']) ? $_POST['trim_count'] : 4,
        (isset($_POST['show_player_ip'])) ? "true" : "false",
        (isset($_POST['show_channels'])) ? "true" : "false",
        (isset($_POST['gzip_compress'])) ? "true" : "false",
        $_POST['forum_link'],
        ($_POST['min_search_symbols']) ? $_POST['games_on_page'] : 3
    );

    $cfg_file = "inc/config.inc.php";
    // if create config success
    if ( !WriteToFile($cfg_file, $newconfig) )
    {
        DieMessage("Can not write to " . $cfg_file);
    }
    echo sprintf("<ul><pre>%s</pre>Ok!</ul>", var_export($_POST, true));
    
}

// step 2 - edit scripts to run
function Install2()
{
    $php_path = $_POST['php_path']; // full path to php binary file
    $script_path = dirname($_SERVER['SCRIPT_FILENAME']); // path to install.php without slash on the end
    
    ReplaceRunScript("script/start/parse_reports.freebsd.sh", $script_path, $php_path);
    ReplaceRunScript("script/start/parse_reports.linux.sh", $script_path, $php_path);
    ReplaceRunScript("script/start/parse_reports.windows.bat", $script_path, $php_path);

    echo "<h3>Step 2: editing script to run (script/start/*)</h3>";
    echo sprintf("<ul>parse_reports.php path is: [%s]<br>PHP path is: [%s]<br><br>Ok!</ul>", $script_path, $php_path);
}

// step 3 - sql installation
function Install3()
{
    require ("inc/config.inc.php");

    echo "<h3>Step 3: hwreports.sql installation</h3><ul>";
    $db = @MYSQL_CONNECT(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) OR DieMessage("Can not create connection");
    @mysql_select_db(MYSQL_DB, $db) or DieMessage("Can not select database");


    if ( TableExists($db, "hwreports") )
        echo "Table `hwreports` already exists!";
    else
        echo sprintf("%s", InstallSQL($db, "INSTALL/hwreports.sql") );

    echo "</ul><h3>Step 3: record_alter.sql installation</h3><ul>";
    if ( !TableExists($db, TABLE_RECORD) )
        DieMessage ("Table `". TABLE_RECORD ."` not exists!");
    else
        echo sprintf("%s", InstallSQL($db, "INSTALL/record_alter.sql") );

    echo "</ul><h1 style='color: green'>Installation was successfull!</h1>You should remove install.php now, and then read INSTALL/readme.txt<br><br>";

    MYSQL_CLOSE($db);
}

// replace pathes in scripts, which should run with cron
function ReplaceRunScript($filename, $script_path, $php_path)
{
    $content = file_get_contents($filename);
    $newcontent = str_replace("full_path_to_hwstats", $script_path, $content);
    $newcontent = str_replace("full_path_to_php", $php_path, $newcontent);
    if ( !WriteToFile($filename, $newcontent) )
    {
        DieMessage("Can not write to " . $filename);
    }
}

// run each mysql query
function InstallSQL($db, $sqlfile)
{
    $queries = LoadQueries($sqlfile);
    $content = "";
    foreach ($queries as $key => $query)
    {
        if (!$query)
            continue;
            
        if ( MYSQL_QUERY($query, $db) )
            $content .= "Line {$key}: success<br>";
        else
            $content .= "Line {$key}: already exists!<br>";
    }
    return $content;
}

// load queries from file to array
function LoadQueries($sqlfile)
{
    if ( !file_exists($sqlfile) )
        DieMessage("Can not find " . $sqlfile );

    $record_queries = file_get_contents($sqlfile);
    $queries = explode(";", $record_queries);
    return $queries;
}

// check table exists
function TableExists($db, $table_name)
{
    $query = "SHOW TABLES LIKE '{$table_name}'";
    if ( @mysql_result( MYSQL_QUERY($query, $db), 0 ) )
        return true;
    else
        return false;
}


// die and show error with red style 
function DieMessage($msg)
{
    echo "<h4 style='background: red; padding: 5px 10px 5px 10px; color: white'>$msg</h4>";
    echo "<h3 style='color: red'>Installation failed!</h3>&#8592; <a href='install.php'>Please, try again</a><br><br>";
    die();
}




?>
  </body>
</html>