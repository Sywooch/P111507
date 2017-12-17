(function($) {
	"use strict";
	$(document).ready(function() {
		$('#facebook-signin').on('click', function (e) {
        	e.preventDefault();
        	appAjax('/facebook-dang-ki', 'post', null, 'json', function(result, textStatus) {
        		console.log(result);
        		window.location.href = result;
        	});
	    });
	});
})(jQuery);

function appAjax(url, method, data, dataType, callback) {
	var csrfToken = $('meta[name="csrf-token"]').attr("content");
	if (data !== null && data.length) {
		data._csrf = csrfToken;
	} else {
		data = {_csrf: csrfToken}
	}
	var request = $.ajax({
	  url: url,
	  method: method,
	  data: data,
	  dataType: dataType
	});
	request.done(function( msg ) {
	  // $( "#log" ).html( msg );
	  callback(msg);
	});
	 
	request.fail(function( jqXHR, textStatus ) {
	  // alert( "Request failed: " + textStatus );
	  callback(jqXHR, textStatus);
	});
}