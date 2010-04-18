function LoadFlag(el)
{
    var pInfo = $(el).attr("alt");

    $(el).removeClass().addClass("noflag");

    $.ajax({
	type: 'GET',
	dataType: 'json',
	url: relativePath + 'api/json/flag/' + pInfo,
	success: function (data) {
	    var countrycode = data.cc2.toLowerCase();
	    if (countrycode == "xx") // bad cc2
		$(el).removeClass().addClass("badflag");
	    else
		$(el).removeClass().addClass("flag").addClass("f-"+countrycode);
	},
	error: function () {
	    $(el).removeClass().addClass("badflag");
	}
    });
}

$(document).ready(function(){
    $("div#flag-container .noflag").each(function(){
	    LoadFlag(this);
    });

});