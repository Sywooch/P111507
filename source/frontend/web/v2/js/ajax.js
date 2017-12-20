(function($) {
	"use strict";
	$(document).ready(function() {
	    $('.search-form form input').on('keyup', function () {
	    	var key = $(this).val();
	    	delay(function() {
				searchMain({key: key});
		    }, 500 );
	        $('.suggest-search').fadeIn();
	        $('.site-main').addClass('search-focus');
	    });

	    $('.search-form form input').on("keypress", function(e) {
	        if (e.keyCode == 13) {
	             e.preventDefault();
				searchMain({key: $(this).val()});
    			return false;
	        }
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
			if (!response.error) {
				var html = '<div class="suggest-title">' +
					'<p><i class="nc-icon-outline ui-1_zoom"></i>Tìm kiếm cho: '+ params.key +'</p>' +
					'</div>' +
						'<ul>';
					_.each(response.data.list, function(item) {
						html += getItemSearch(item);
					});
						
				html += '</ul>' +
					'<div class="suggest-footer"><a href="#" class="today-ask"><i class="fa fa-plus-circle" aria-hidden="true"></i>Đặt câu hỏi</a></div>';
				$('.suggest-search').html(html);
			}
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

/**
 * Get Item Search
 * params object item
 * return string
 * TODO need update URL
*/
function getItemSearch(item) {
	var listTitle = [
		{id: 'user', name: 'Tài Khoản'},
		{id: 'topic', name: 'Chủ Đề'},
		{id: 'question', name: 'Câu Hỏi'},
	];
	title = _.find(listTitle, function(e) {
		return item.type === e.id;
	});
	return '<li><a href="#"><img class="img-header-avatar" src="'+ item.image +
	'" alt="">'+ title.name +': <span>'+ item.name +'</span></a></li>';
}