<html><head>
		<link rel="stylesheet" href="index.files/stats.css">



       <script language="JavaScript">
var IE = (document.all) ? true : false;
var currentMenu = false;
var currentMenuSelect = false;
var menuTimer = false;
var txtErr = '';
var intErr = 0;
if(!IE){
	window.captureEvents(Event.MOUSEMOVE);
	window.captureEvents(Event.CLICK);

	window.onmousemove = setXY;
	window.onclick = Click;
}else{
	document.onmousemove = setXY;
	document.onclick = Click;
}

function setXY(e) {
	clientX = (!IE)? e.pageX : event.x+document.body.scrollLeft;
	clientY = (!IE)? e.pageY : event.y+document.body.scrollTop;
	var srcElement = (!IE) ? e.target : event.srcElement;
	sType = getSType(srcElement);
	if(currentMenu && sType == 'menu'){
		var LX = (document.body.clientWidth - 780)/2;
		var RX = (document.body.clientWidth - 780)/2 + 633 - 160;
		var x = clientX - 80;
		if(x < LX) x = LX;
		if(x > RX) x = RX;
		currentMenu.style.left = x;
	}
	if(sType && menuTimer){
		window.clearTimeout(menuTimer);
		menuTimer = null;
	}
	if(currentMenu && !sType && !menuTimer) menuTimer = window.setTimeout("hideMenu()",300);
}

function getSType(obj){
	while(obj.parentNode){
		if (obj.nodeType!=3 && obj.getAttribute('sType')) return obj.getAttribute('sType');
		obj = obj.parentNode;
	}
	return false;
}

function Click(e){
	if(!IE){
		var o = e.target;
	}else{
		var o = event.srcElement;
	}
	if(!o.getAttribute('sType') && currentMenu){
		currentMenu.style.display = 'none';
		currentMenu = false;
	}
}

function hideMenu(){
	window.clearTimeout(menuTimer);
	menuTimer = null;
	if(!currentMenu) return;
	currentMenu.style.display = 'none';
	currentMenu = false;
}


function showMenu(name){
	window.clearTimeout(menuTimer);
	menuTimer = null;

	if(currentMenu){
		currentMenu.style.display = 'none';
	}
	var o = document.getElementById(name);
	if(!o){
		currentMenu = false;
		return;
	}
	var LX = (document.body.offsetWidth - 780)/2;
	var RX = (document.body.offsetWidth - 780)/2 + 633 - 160;
	var x = clientX - 80;
	if(x < LX) x = LX;
	if(x > RX) x = RX;
	o.style.left = x;
	currentMenu = o;
	o.style.display = '';
}

function selectMenu(o){
	if(currentMenuSelect)currentMenuSelect.className = '';
	o.className = 'select';
	currentMenuSelect = o;
}
function getCookie(name)
{
 var begin = document.cookie.indexOf(name+"=")
 if(begin==-1) return false;
 begin = document.cookie.indexOf("=",begin)+1;
 var end = document.cookie.indexOf("; ",begin);
 if (end == -1) end = document.cookie.length;
 return document.cookie.substring(begin,end);;
}

function setCookie (name,content,path)
{
 var domain='';
 var expDate='expires=Wednesday, 09-Aug-2020 00:00:00 GMT'
 path = (path) ? 'path='+path+'; ' : ''
 document.cookie = name+'='+content+'; '+path+expDate+domain
}

function AddErr(txt) { txtErr += (++intErr) + '. ' + txt + '\r\n'; }
function ShowErrors(title)
{
 if (intErr)
  {
   alert(title+':\r\n\r\n'+txtErr);
   intErr = 0;
   txtErr = '';
   return false;
  }
   else
  {
   intErr = 0;
   txtErr = '';
   return true;
  }
}

function TestEMAIL(addr)
{
 try
  {
    var email_re = /^[\w\d\.\_\-]{2,}@[\w\d\_\-]{2,}\.[\w\d\_\-\.]{2,}$/i;
    return email_re.test(addr);
  }
 catch(e)
  {
    return true;
  }
}



function outliner () {
				oMe = window.event.srcElement
				//get child element
				var child = document.all[event.srcElement.getAttribute("child",false)];
				//if child element exists, expand or collapse it.
				if (null != child)
					child.className = child.className == "collapsed" ? "expanded" : "collapsed";
			}

function changepic() {
				uMe = window.event.srcElement;
				var check = uMe.src.toLowerCase();
				if (check.lastIndexOf("plus.gif") != -1)
				{
					uMe.src = "index.files/Minus.gif"
				}
				else
				{
					uMe.src = "index.files/Plus.gif"
				}
			}
        </script>

<title><? echo $strCaption ?></title>
	</head>

<body topmargin="0" leftmargin="0" rightmargin="0" onclick="outliner();">
<CENTER><script type="text/javascript"><!--
google_ad_client = "pub-2941842979958056";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text_image";
google_ad_channel ="";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></CENTER>


<h1><? echo $strCaption ?></h1>
<p></p>
<TABLE id="Table1" borderColor="#cccc66" cellSpacing="0" cols="5" borderColorDark="#ccccff" cellPadding="0" width="600" align="center" bgColor="#f5f5dc" borderColorLight="#999966" border="1" frame="border" height="25" sType="menu" >
  <TR>
    <TD ONMOUSEOVER="this.style.backgroundColor = 'floralwhite';" ONMOUSEOUT="this.style.backgroundColor = '#f5f5dc'">
      <div align="center" style="CURSOR: default; COLOR: #cc6633; TEXT-DECORATION: underline"> <a href="http://harpywar.com/?a=projects&b=6">Main page</a> </div>
    </TD>
    <TD ONMOUSEOVER="this.style.backgroundColor = 'floralwhite';" ONMOUSEOUT="this.style.backgroundColor = '#f5f5dc'">
      <div align="center" style="CURSOR: default; COLOR: #cc6633; TEXT-DECORATION: underline"> <a href="index.php?dir=bnet/&siteid=bnrules">Server rules</a> </div>
    </TD>
    <TD ONMOUSEOVER="this.style.backgroundColor = 'floralwhite';" ONMOUSEOUT="this.style.backgroundColor = '#f5f5dc'">
      <div align="center" style="CURSOR: default; COLOR: #cc6633; TEXT-DECORATION: underline"> <a href="index.php?dir=bnet/&siteid=stats">Player statistics</a> </div>
    </TD>
    <TD ONMOUSEOVER="this.style.backgroundColor = 'floralwhite';" ONMOUSEOUT="this.style.backgroundColor = '#f5f5dc'">
      <div align="center" style="CURSOR: default; COLOR: #cc6633; TEXT-DECORATION: underline"> <a href="index.php?dir=bnet/&siteid=bnserver">Server statistics</a> </div>
    </TD>
</TABLE>
<p></p>
<table width="46%" border="0" height="23" align="right">
  <tr>
    <td height="20">
      <div align="right"><font size="1">© 2004, <a href="http://harpywar.com">HarpyWar</a></font></div>
    </td>
  </tr>
</table>
<div align="right"></div>
<p class="note"> <b>Last Update: </b><? include("bnet/top/server.php"); echo $sUpdate; ?></p>
<p></p>
<HR width="100%" color="#915b44" SIZE="1">