<?php

// return safe value from $_GET array
function GETGetValue($name)
{
	if (isset($_GET))
	{
		if (array_key_exists($name, $_GET))
			return $_GET[$name];
	}
	return false;
}


/**
* Parses the original map name and adds the appropriate font tags according to the special characters we find
* This can easily be replaced with span tags instead of font tags for XHTML compliance.
* @copyright	http://repasm.free.fr/
*
* @param		string $mapName	map name
* @return		string html map name
*/
function getColoredMapName($mapName)
{
    $mapWithColors = "";
    $hasColorChanged = 0;
    $isAlwaysGray = 0;
    
    // Parses the original map name and adds the appropriate font tags according to the special characters we find
    // This can easily be replaced with span tags instead of font tags for XHTML compliance.
    for($i = 0; $i < strlen($mapName); $i++)
    {
        $curChar = substr($mapName, $i, 1);
        if(ord($curChar) < 32)
        {
            if(!$isAlwaysGray)
            {
                if($hasColorChanged)
                    $mapWithColors .= "</font>";
                
                switch(ord($curChar))
                {
                    // Light Green
                    case 1:
                        $mapWithColors .= "<font color=\"#B7FC78\">";
                        $hasColorChanged = 1;
                        break;
                    
                    // Light Blue
                    case 2:
                        $mapWithColors .= "<font color=\"#A7B7F8\">";
                        $hasColorChanged = 1;
                        break;
                    
                    // Dark Green
                    case 3:
                        $mapWithColors .= "<font color=\"#09E100\">";
                        $hasColorChanged = 1;
                        break;
                    
                    // Light Green (same as #1)
                    case 4:
                        $mapWithColors .= "<font color=\"#B7FC78\">";
                        $hasColorChanged = 1;
                        break;
                    
                    // Gray and all following characters will remain gray even if another color tag is set
                    case 5:
                        $mapWithColors .= "<font color=\"#7C7C7C\">";
                        $hasColorChanged = 1;
                        $isAlwaysGray = 1;
                        break;
                    
                    // White
                    case 6:
                        $mapWithColors .= "<font color=\"#FCFCF0\">";
                        $hasColorChanged = 1;
                        break;
                    
                    // Red
                    case 7:
                        $mapWithColors .= "<font color=\"#FC0000\">";
                        $hasColorChanged = 1;
                        break;
                        
                    default:
                        break;
                }
            }
        }
        else
            $mapWithColors .= $curChar;
    }
    
    // Closes the last <font> tag and returns
    if($hasColorChanged)
    {
        $mapWithColors .= "</font>";
        return $mapWithColors;
    }
    
    return $mapName;
}


/**
* Page navigator 
* @copyright	HarpyWar 2009
*
* @param		integer $page = current page number
* @param		integer $rows_on_page = how many rows place on page
* @param		integer $rows_count = all rows count
* @param		integer $trim_count = how many pages shoud 
* @param		string $query = browser address bar query (example index.php?x=1&y=2& - will replace to index.php?x=1&y=2&page=x)
* @return		string html page navigator bordered by <DIV>
*/
function pageNavigator($page, $rows_on_page, $rows_count, $trim_count, $query) 
{
	$pages_count=ceil($rows_count/$rows_on_page); //всего страниц
	
	if ($pages_count <= 1)
		return false;
	
	$page_prev=$page-1;
	$page_next=$page+1;
	$trim_left=$page-$trim_count;
		if ($trim_left<1) $trim_left=1;
	$trim_right=$page+$trim_count;
		if ($trim_right>$pages_count) $trim_right=$pages_count;

	if ($page<1 or $page>$pages_count or $page=="") $page=1; //защита от неверной страницы
	
	$output = "<table width=100% border=0><tr>";
	if ($page>1) $output .= "<td class=rankingRow><a href='{$query}page=1'>First</a>";
	else $output .= "<td class=rankingRow style='color:silver'>First</td>";
	if ($page>1) $output .= "<td class=rankingRow align=right><a href='{$query}page={$page_prev}'>Previous</a></td>"; 
	else $output .= "<td class=rankingRow style='color:silver' align=right>Previous</td>";
	$output .= "<td>&nbsp;</td><td class=rankingRow align=center width=100>";
	if ($page-$trim_count>1) $output .= "...&nbsp;";
	for ($i=$trim_left;$i<=$trim_right;$i++) //вывод номеров страниц
	{
		if ($i==$page) 
			$output .= $i.'&nbsp;&nbsp;';
		else 
			$output .= "<a href='{$query}page={$i}'>{$i}</a>&nbsp;&nbsp;";
	}
	if ($page+$trim_count<$pages_count) $output .= "...&nbsp;";
	$output .= "</td><td>&nbsp;</td>";
	if ($page<$pages_count) $output .= "<td class=rankingRow align=left><a href='{$query}page={$page_next}'>Next</a></td>&nbsp;"; 
	else $output .= "<td class=rankingRow style='color:silver' align=left>Next</td>";

	if ($page<$pages_count) $output .= "<td class=rankingRow align=right><a href='{$query}page={$pages_count}'>Latest</a>&nbsp;</td>";
	else $output .= "<td class=rankingRow style='color:silver' align=right>Latest</td>";
	$output .= "</tr></table>";

	return $output;
}


function DiePlease($path)
{
	if ( !file_exists($path) ) // относительный путь
		echo ("<h3>I am noob, because file: <div>&nbsp;" . $path . "</div> not exists :(</h3>");
}

function ShowError($text)
{
    echo sprintf("<div class=error>%s</div>", $text);
    die();
}
/*
// создать папку
function CreateFolder($path)
{	
	// если папки не существует, то создать её
	if (!file_exists($path))
		if ( !mkdir( $path, 0755 ) )
			die ( "Can't create folder " . $path );
}

function GetDateFromReport($filename)
{
	$format = "gr_%04d%02d%02d%02d%02d%02d_%06d";
	list($year, $month, $day, $hour, $minute, $second, $number) = sscanf($filename, $format);
	
	$date = sprintf("%s %s %s %s:%s", case_month($month), $day, $year, $hour, $minute);
	return $date;
}
*/


?>