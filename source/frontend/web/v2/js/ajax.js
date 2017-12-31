(function($) {
	"use strict";
	$(document).ready(function() {
	
		// MAIN SEARCH
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
	
	    // COMMENT QUESTION
		$('body').delegate('.btn-comment', 'click', function (e) {
			e.preventDefault();
			console.log('COMMENT');
			var input = $(this).parent().find('input[type="text"]');
			var value = input.val();
			var id = input.attr('data-ajax-id');
			var type = input.attr('data-ajax-type');
			var parent = input.attr('data-ajax-parent');
			var params = {
				value: value,
				id: id,
				type: type,
				parent: parent
			};
			handleComment(params, function(response) {
				input.val('');
				if (_.isUndefined(parent) || _.isNull(parent) || parent === '') {
					var commentContent = input.parent().parent().find('.comment-content').first();
					commentContent.prepend(response);
				} else {
					var commentInfo = input.parent().parent().parent();
					var subComment = '<div class="sub-comment comment-content">' + response + '</div/';
					commentInfo.after(subComment);
				}
			});
		});

		// REPLY COMMENT
		$('body').delegate('.sub-reply-click', 'click', function (e) {
			e.preventDefault();
        	$(this).parent().parent().parent().parent().find('.sub-reply-comment').fadeIn();
		});

		// LIKE COMMENT
		$('body').delegate('.sub-like-click', 'click', function (e) {
			e.preventDefault();
			var element = $(this);
    		var id = $(this).attr('data-ajax-id');
    		handleLike(id, function(response) {
    			if (!response.error) {
					if (response.data === 1) {
						element.html('Yêu thích');
					} else {
						element.html('Bỏ thích');
					}
				} 
    		});
		});
	});
})(jQuery);
// 

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
// HANDLE SEARCH
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


/**
 * process comment
 * params object value
 * params object id
 * return void
*/
function handleComment(params, callback) {
	appAjax(
		'/them-binh-luan',
		'post',
		params,
		'html',
		function(response) {
			callback(response);
			if (!response.error) {
				console.log('success');
			} else {
				console.log('error');
			}
		}
	);
}

/**
 * process load all comment
 * params object value
 * params object id
 * return html
*/
function loadAllComment(id, type, callback) {
	var params = {
		id: id,
		type: type
	};
	appAjax(
		'/binh-luan',
		'get',
		params,
		'html',
		function(response) {
			callback(response);
			if (!response.error) {
				console.log('success');
			} else {
				console.log('error');
			}
		}
	);
}

/**
 * process load all comment
 * params object value
 * params object id
 * return void
*/
function handleLike(id, callback) {
	appAjax(
		'/thich-binh-luan',
		'post',
		{id: id},
		'json',
		function(response) {
			callback(response);
			if (!response.error) {
				console.log('success');
			} else {
				console.log('error');
			}
		}
	);
}