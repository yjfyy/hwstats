<?php
/*
 * Server Status Script for PvPGN
 * (c) 2009, HarpyWar
 * http://harpywar.com
 */

// parse XML status file
function GetServerStatusInfo($status_file, $server_address = "localhost", $show_channels = false)
{
    if (!$sxml = @simplexml_load_file($status_file))
        return "Please, setup your bnet.conf with:<pre>XML_status_output = true</pre>(I can't find $status_file)";

    $users = array();
    $games = array();
    $header_tpl = "<div id='round-header'><b class='rtop'><b class='r1'></b><b class='r2'></b><b class='r3'></b><b class='r4'></b></b><span id='head-content'>%s</span><b class='rbottom'><b class='r4'></b><b class='r3'></b><b class='r2'></b><b class='r1'></b></b></div>";


    $content = "";
    $content_users = "";
    $content_games = "";
    $content_channels = "";

    $content .= "<div class='server-status'>";
    $content .= sprintf("<div>Last updated at %s<br><br></div>", date("H:i", filemtime($status_file)));

    $content .= sprintf("<div>Connect to: %s</div>", $server_address);
    $content .= sprintf("<div>Server version: %s</div>", $sxml->Version);
    $content .= sprintf("<div>Uptime: %s</div>", (ServerStatus($server_address)) ? $sxml->Uptime : "<span class='server-down'>SERVER IS DOWN</span>");

    $content .= "</div>";

    foreach ($sxml->Users->user as $item)
    {
        $tag = (string)$item->clienttag;
        // если ключа в массиве юзеров нет, создать, чтобы не было ошибки
        if ( !array_key_exists($tag, $users) )
            $users[$tag] = 0;
        $users[$tag]++;

        $content_users .= sprintf("<div class='table'><div class='td' id='clienttag'><img src='images/gameicons/%s.jpg' border=0 width=28 height=14 alt=%s></div><div class='td'><a href='index?game=%s&user=%s'>%s</a></div><div class='td'>%s</div></div>",
            strtoupper($item->clienttag),
            strtoupper($item->clienttag),
            strtoupper($item->clienttag),
            $item->name,
            $item->name,
            ($item->version != "") ? "v" . $item->version : "");
    }
    $content .= sprintf($header_tpl, "<b>Players online</b> (" . $sxml->Users->Number . ")&nbsp;&nbsp;&nbsp;&nbsp;" . GetHeaderTagLine($users));
    $content .= sprintf("<div class='server-status'>%s</div>", $content_users);


    foreach ($sxml->Games->game as $item)
    {
        $tag = (string)$item->clienttag;
        // если ключа в массиве юзеров нет, создать, чтобы не было ошибки
        if ( !array_key_exists($tag, $games) )
            $games[$tag] = 0;
        $games[$tag]++;

        $content_games .= sprintf("<div c;ass='table'><div class='td' id='clienttag'><img src='images/gameicons/%s.jpg' border=0 width=28 height=14 alt=%s></div><div class='td'>%s</div></div>",
            strtoupper($item->clienttag),
            strtoupper($item->clienttag),
            $item->name);
    }
    $content .= sprintf($header_tpl, "<b>Games online</b> (" . $sxml->Games->Number . ")&nbsp;&nbsp;&nbsp;&nbsp;" . GetHeaderTagLine($games));
    $content .= sprintf("<div class='server-status'>%s</div>", $content_games);

    if ($show_channels)
    {
        $content .= "<div>Channels</div>";
        foreach ($sxml->Channels->channel as $item)
        {
            $content_channels .= sprintf("<div>%s</div>", strtoupper($item));
        }
        $content .= sprintf($header_tpl, "<b>Channels</b> (" . $sxml->Channels->Number . ")");
        $content .= sprintf("<div class='server-status'>%s</div>", $content_channels);
    }
    return $content;
}

// display image and count of this clienttag in the section (users, games or channels)
function GetHeaderTagLine($items)
{
    arsort($items);
    $content = "";
    foreach ($items as $tag => $count)
    {
        if ($count > 0)
            $content .= sprintf("<img src='images/gameicons/%s.jpg' border=0 align=top alt=%s width=28 height=14>&nbsp;(%s)&nbsp;&nbsp;",
                strtoupper($tag),
                strtoupper($tag),
                $count);
    }
    return $content;
}

/*
// получить конкретную игру из clienttag
function GetClientFromClientTag($clienttag)
{
    $tags = array (
        "D2XP" => "D2XP",
        "D2DV" => "D2XP",
        "DRTL" => "DRTL",
        "W3XP" => "W3XP",
        "SEXP" => "SEXP",
        "STAR" => "SEXP",
        "W2BN" => "SEXP",
        "WWOL" => "WWOL",
        "UNKN" => "UNKN",
    );

    if ( array_key_exists((string)$clienttag, $tags) )
        return $tags[(string)$clienttag];
    else
        return $tags['UNKN'];
}
*/
?>