(function($) {
	"use strict";
	$(document).ready(function() {
	    $('.search-form form input').on('keyup', function () {
	    	delay(function() {
				searchMain({key: $(this).value});
		    }, 500 );
	        $('.suggest-search').fadeIn();
	        $('.site-main').addClass('search-focus');
	    });
	});
})(jQuery);


function appAjax(url, method, data, dataType, callback) {
	var csrfToken = $('meta[name="csrf-token"]').attr("content");
	if (data !== null) {
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

function searchMain(params) {
	appAjax(
		'/ajax/search-main',
		'post',
		params,
		'json',
		function(response) {
			console.log(response);
		}
	);
}
// COMMON delay function
var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();