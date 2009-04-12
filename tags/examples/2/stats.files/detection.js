	var agt=navigator.userAgent.toLowerCase();
	var nsBool = ((navigator.appVersion.indexOf('MSIE 4.0') != -1) || ((navigator.appName == "Netscape") && (navigator.appVersion.indexOf('4') != -1)))
		

		
	if (nsBool) {
		
		window.location="browsernotsupported.html";
	
	}