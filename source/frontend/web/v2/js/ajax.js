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

		// FOLLOW COMMENT
		$('body').delegate('.sub-follow-click', 'click', function (e) {
			e.preventDefault();
			var element = $(this);
    		var id = $(this).attr('data-ajax-id');
    		handleFollow(id, function(response) {
    			if (!response.error) {
					if (response.data === 1) {
						element.html('Theo Dõi');
					} else {
						element.html('Bỏ Theo');
					}
				} 
    		});
		});

		// SHARE FACEBOOK
		$('body').delegate('.share-fa', 'click', function (e) {
			e.preventDefault();
			var element = $(this);
    		var href = $(this).attr('href');
    		FB.ui({
				method: 'share',
				href: href,
				display: 'popup',
				mobile_iframe: true,
			}, function(response){
				console.log('response', response);
			});
		});

		// FAVORITE ANSWER
		$('body').delegate('.like-btn', 'click', function (e) {
     	    e.preventDefault();
     	    var element = $(this);
    		var id = $(this).attr('data-ajax-id');
    		handleFavoriteAnswer(id, function(response) {
    			if (!response.error) {
        			var numberElement = element.find('.like-number');
        			var count = !isNaN(parseInt(numberElement.html())) ? parseInt(numberElement.html()) : 0;
					if (response.data === 1) {
	        			element.removeClass('active');
	        			count = count - 1;
	        			var text = ' '+ count;
	        			numberElement.html(text);
					} else {
	        			element.addClass('active');
	        			count = count + 1;
	        			var text = ' '+ count;
	        			numberElement.html(text);
					}
				} 
    		});
	    });

	    // FOLLOW ANSWER
		$('body').delegate('.action-follow a', 'click', function (e) {
     	    e.preventDefault();
     	    var element = $(this);
    		var id = $(this).attr('data-ajax-id');
    		handleFollowAnswer(id, function(response) {
    			if (!response.error) {
        			var numberElement = element.find('span');
        			var count = !isNaN(parseInt(numberElement.html())) ? parseInt(numberElement.html()) : 0;
					if (response.data === 1) {
	        			count = count - 1;
	        			var text = ' '+ count;
	        			numberElement.html(text);
					} else {
	        			count = count + 1;
	        			var text = ' '+ count;
	        			numberElement.html(text);
					}
				} 
    		});
	    });

		// REPORT ANSWER
	    $('body').delegate('.action-report a', 'click', function (e) {
        	e.preventDefault();
        	var element = $(this);
    		var id = $(this).attr('data-ajax-id');
    		tooglePopupReport()
	        $('body').find('.report-send').attr('data-ajax-id', id);
	    });

	    // SEND REPORT ANSWER
	    $('body').delegate('.report-send', 'click', function (e) {
	    	var reportPopup = $('body').find('.report-popup');
	    	e.preventDefault();
	    	var id = $(this).attr('data-ajax-id');
	    	var reason_id = $('input[name=report_answer]:checked').val();
	    	var params = {
	    		id: id,
	    		reason_id: reason_id
	    	};
	    	handleReportAnswer(params, function(response){
	    		if (!response.error) {
	    			delay(function() {
						tooglePopupReport();
						$('body').find('.report-content').find('.alert.alert-success').remove();
				    }, 5000 );
	    			$('body').find('.report-content').prepend('<div class="alert alert-success">'
			            +'Báo cáo thành công.'
			        +'</div>');
	    		} else {
	    			console.log('error', response);
	    		}
	    	});
	    });
	    
	    // CREATE ANSWER
	    $('body').delegate('.btn-answer', 'click', function (e) {
	    	var id = $(this).attr('data-ajax-id');
	    	var textAreaE = $(this).parent().find('textarea');
	    	var text = textAreaE.val();
	    	var params = {
	    		id: id,
	    		text: text
	    	};
	    	handleAnswer(params, function(response) {
	    		console.log('response', response);
	    	});
	    });
		
		// UPDATE PROFILES QUOTES
		$('body').delegate('#btn-save-quotes','click',function(e)
		{
			var quotes = $("#quotes").val();
			var params = {
				quotes: quotes
			};
			handleProfileQuotes(params,function(response)
			{
				if(!response.error)
				{
					location.reload();
				}
			});
		});
		
		// UPDATE PROFILE DESCRIPTION
		$('body').delegate('#bnt-save-profile-description','click',function(e)
		{
			var desc = $("#textarea-profile-description").val();
			var params = {
				desc: desc
			};
			handleProfileDescription(params,function(response)
			{
				if(!response.error)
				{
					location.reload();
				}
			});
		});
		
		// TOPIC SEARCH
	    $('.what-topic-popup input').on('keyup', function () {
	    	var key = $(this).val();
	    	delay(function() {
				searchTopic({key: key});
		    }, 500 );
	        $('.suggest-topic-search').fadeIn();
	    });

	    $('.what-topic-popup input').on("keypress", function(e) {
	        if (e.keyCode == 13) {
	             e.preventDefault();
				searchTopic({key: $(this).val()});
    			return false;
	        }
		});
		
		 // FOLLOW TOPIC
		$('body').delegate('.action-follow-topic a', 'click', function (e) {
     	    e.preventDefault();
     	    var element = $(this);
    		var id = $(this).attr('data-ajax-id');
    		handleFollowTopic(id, function(response) {
    			if (!response.error) {
        			var numberElement = element.find('span');
        			var count = !isNaN(parseInt(numberElement.html())) ? parseInt(numberElement.html()) : 0;
					if (response.data === 1) {
	        			count = count - 1;
	        			var text = ' '+ count;
	        			numberElement.html(text);
					} else {
	        			count = count + 1;
	        			var text = ' '+ count;
	        			numberElement.html(text);
					}
				} 
    		});
	    });
		
		$('body').delegate('.selector_result_topic', 'click', function(e){
			e.preventDefault();
			var element = $(this);
			var id 		= $(this).attr('data-ajax-id');
			var title 	= $(this).attr('data-ajax-title');
			handleFollowTopic(id, function(response)
			{
				if(!response.error){
					$('.suggest-topic-search').hide();
					$('.suggest-topic-search').html('');
					var html = '<li><a class="remove_selecter_topic" data-ajax-id="'+id+
					'" href="javascript:void(0)"><i class="nc-icon-mini ui-1_simple-remove"></i> </a> <span>'
					+title+'</span> </li>';
					$('.list-choose-topic').prepend(html);
				}
			});
		});
		
		$('body').delegate('.none_result_topic .submit_button', 'click', function(e){
			e.preventDefault();
			var element = $(this);
			var key 	= $(this).parent().attr('data-ajax-title');
			handleCreateTopic(key, function(response){
				if(!response.error){
					handleFollowTopic(response.id, function(responsefollow)
					{
						$('.suggest-topic-search').hide();
						$('.suggest-topic-search').html('');
						var html = '<li><a class="remove_selecter_topic" data-ajax-id="'+response.id+
						'" href="javascript:void(0)"><i class="nc-icon-mini ui-1_simple-remove"></i> </a> <span>'
						+response.title+'</span> </li>';
						$('.list-choose-topic').prepend(html);
					});
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

/**
 * process load all comment
 * params object value
 * params object id
 * return void
*/
function handleFollow(id, callback) {
	appAjax(
		'/theo-doi-binh-luan',
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
/**
 * process favorite answer
 * params object value
 * params object id
 * return void
*/
function handleFavoriteAnswer(id, callback) {
	appAjax(
		'/thich-cau-tra-loi',
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
/**
 * process follo answer
 * params object value
 * params object id
 * return void
*/
function handleFollowAnswer(id, callback) {
	appAjax(
		'/theo-doi-tra-loi',
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
/**
 * process report answer
 * params object id
 * return void
*/
function handleReportAnswer(params, callback) {
	appAjax(
		'/bao-cao-tra-loi',
		'post',
		params,
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
/**
 * process answer
 * params object id
 * return void
*/
function handleAnswer(params, callback) {
	appAjax(
		'/tra-loi',
		'post',
		params,
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

function tooglePopupReport() {
    $('body').find('.report-bg').fadeToggle();
    $('body').find('.report-popup').fadeToggle();
}

function handleProfileDescription(params, callback)
{
	appAjax(
		'/ajax/update-profile-description',
		'post',
		params,
		'json',
		function(response)
		{
			callback(response);
			if (!response.error) {
				console.log('success');
			} else {
				console.log('error');
			}
		}
	)	
}

function handleProfileQuotes(params, callback)
{
	appAjax(
		'/ajax/update-profile-quotes',
		'post',
		params,
		'json',
		function(response)
		{
			callback(response);
			if (!response.error) {
				console.log('success');
			} else {
				console.log('error');
			}
		}
	)
}

/**
 * process user follow topic
 * params object value
 * params object id
 * return void
*/
function handleFollowTopic(id, callback) {
	appAjax(
		'/ajax/follow-topic',
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


/**
 * process user create topic
 * params object value
 * params object key
 * return void
*/
function handleCreateTopic(key, callback) {
	appAjax(
		'/ajax/create-topics',
		'post',
		{key: key},
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

// HANDLE SEARCH TOPIC
function searchTopic(params) {
	appAjax(
		'/ajax/search-topic',
		'post',
		params,
		'json',
		function(response) {
			console.log(response);
			if (!response.error){
				
				var htmlTopic = '<li class="none_result_topic" data-ajax-title="'+ params.key +'">'+
				'<span>'+ params.key +'</span>'+
				'<span class="submit_button">Thêm chủ đề</span>'+
				'</li>';
	
				var html = '<div class="suggest-title">' +
					'<p><i class="nc-icon-outline ui-1_zoom"></i>Tìm kiếm cho: '+ params.key +'</p>' +
					'</div>' +
						'<ul>';
					_.each(response.data, function(item) {
						html += getItemTopicSearch(item);
					});
						
				html += '</ul>';
				if(response.data.length > 0){
					$('.suggest-topic-search').html(html);
				}
				else{
					$('.suggest-topic-search').html(htmlTopic);
				}
				
			}
		}
	);
}

function getItemTopicSearch(item) {
	return '<li class="selector_result_topic" data-ajax-title="'+item.title+'" data-ajax-id="'+item.id+
	'"><a href="javascript:;"><img class="img-header-avatar" src="'+ item.images +
	'" alt=""><span>'+ item.title +'</span></a></li>';
}