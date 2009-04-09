<?
function filtch($str){
	$str=ereg_replace("'",'`',$str);
	$str=ereg_replace("\n","<br>",$str);
	return $str;
}

function unfiltch($str){
	$str=ereg_replace('`',"'",$str);
	$str=ereg_replace("<br>","\n",$str);

	return $str;
}

function parse_sqltext($str){ #для того, чтобы не было sql неправильных запросов
	$str=ereg_replace("'",'&#8217;',$str);

	return $str;
}

function GETGetValue($name)
{
	if (isset($_GET))
	{
		if (array_key_exists($name, $_GET))
			return $_GET[$name];
	}
	return false;
}

function txthtml($str){
	$str=ereg_replace("<","&#60;",$str);
	$str=ereg_replace(">","&#62;",$str);
	return $str;
}

function delete_script($str){
	$str=ereg_replace("<?","<#",$str);
	$str=ereg_replace("script","sсript",$str);
	return $str;
}

function r_date($string, $output) #replace date
{
	if ($string!="") {
		$year=strval(substr($string,0,2));
		$month=strval(substr($string,2,2));
		$day=strval(substr($string,4,2));
		$hour=strval(substr($string,6,2));
		$min=strval(substr($string,8,2));
		$sec=strval(substr($string,10,2));

		if ($output==0) $string="$day.$month.$year, <I>$hour:$min:$sec</I>";
		if ($output==1) $string="$day.$month.$year";
		if ($output==2) $string="$day";

	}
	return $string;
}

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


function case_month($month, $type=0) #insert form option date
{ 
	switch ($month) {
		case 1: return "Январь"; break;
		case 2: return "Февраль"; break;
		case 3: return "Март"; break;
		case 4: return "Апрель"; break;
		case 5: return "Май"; break;
		case 6: return "Июнь"; break;
		case 7: return "Июль"; break;
		case 8: return "Август"; break;
		case 9: return "Сентябрь"; break;
		case 10: return "Октябрь"; break;
		case 11: return "Ноябрь"; break;
		case 12: return "Декабрь"; break;
	}
}

function insert_fdate($date, $prefix, $type) #insert form option date
{ 
	if ($date=="") $date=$realdate;

	$day=gmdate("d",$date);
	$month=gmdate("m",$date);
	$year=gmdate("Y",$date);
	$hour=gmdate("H",$date);
	$minute=gmdate("i",$date);

	echo "<select name='{$prefix}_day'>";
	for ($i=1;$i!=32;$i++) {
		echo "<option value='$i'";
		if ($i==$day) echo " selected='true'";
		echo ">$i</option>";
	}
	echo "</select>";

	echo "<select name='{$prefix}_month'>";
	for ($i=1;$i!=13;$i++) {
		echo "<option value='$i'";
		if ($i==$month) echo " selected='true'";
		echo ">".case_month($i, 0)."</option>";
	}
	echo "</select>";

	echo "<select name='{$prefix}_year'>";
	for ($i=2003;$i!=2016;$i++) {
		echo "<option value='$i'";
		if ($i==$year) echo " selected='true'";
		echo ">$i</option>";
	}
	echo "</select>";
	if ($type==0) {
		echo " в <input type='text' style='width: 25px' name='{$prefix}_hour' value='$hour' maxlength=2>:<input type='text' style='width: 25px' name='{$prefix}_minute' value='$minute' maxlength=2>";
	}

	#...


}

//функция вывода номеров страниц
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