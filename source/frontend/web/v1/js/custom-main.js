topics_value = [];
(function( $ ){
	var LoadingDots = ' <div class="LoadingDots small"><div class="dot first"></div><div class="dot second"></div><div class="dot third"></div></div>';
	function PopupCenter(url, title, w, h) {
	    // Fixes dual-screen position                         Most browsers      Firefox
	    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
	    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

	    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
	    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

	    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
	    var top = ((height / 2) - (h / 2)) + dualScreenTop;
	    var newWindow = window.open(url, title, 'scrollbars=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

	    // Puts focus on the newWindow
	    if (window.focus) {
            if (newWindow !== null) {
                newWindow.focus();
            }
	    }
	}

    function loadComment(data, obj) {
        $.ajax({ 
            url: '/ajax/load-comment',
            type: 'POST',
            data: data
        }).done(function(html) {
            obj.closest('.status-footer').find('.feed-comments').html(html);
            //comment at single post
            if( $('.container').hasClass('single-post-content') ){
                obj.closest('.single-post').find('.feed-comments').html(html);
            }
            do_qtip_profile();
        });
    }

	/* FORM SEACH */
	$('#bs-example-navbar-collapse-1 form input[type="text"].form-control').on('click',function(){
		$('.overlay-search').remove();
		$('section.main-content').prepend('<div class="overlay-search"></div>');
	});

	$('.main-content').on('click',function(){
		$('.overlay-search').remove();
	});

	$('.has-qtip-menu-action').on('click',function(){
		return false;
	});

	$("body").on("click",".info_background", function(){
		var topic_id = $(this).closest('.topic_photo_card').attr('data');
		if($(this).closest('.topic_photo_card').hasClass('following')){
            $(this).closest('.topic_photo_card').removeClass('following');
            for(var i = topics_value.length - 1; i >= 0; i--) {
                if(topics_value[i] === topic_id) {
                   topics_value.splice(i, 1);
                }
            }

            if(topics_value.length < 10){
                topics_num = 10 - topics_value.length;
                $('#topic_interest_button').text(topics_num + ' More Topics to Continue');
                $('#topic_interest_button').addClass('submit_button_disabled');
            }else{
                $('#topic_interest_button').text('Continue').click(function(){
			        $.ajax({
			            url : "/ajax/follow",
			            type : "post",
			            dateType:"json",
			            data : {
			                topics : topics_value
			            },
			            success : function (result){
			               /* $('#popup-choose-topic').dialog('close');
			                $('#popup-choose-topic-know').dialog('open');
			                $('#__w2_Z3jd6Md_progress_bar').css('width','250');*/
			                console.log(result);
			            }
			        });
                });
                $('#topic_interest_button').removeClass('submit_button_disabled');
            }
        }else{
            $(this).closest('.topic_photo_card').addClass('following');
            topics_value.push(topic_id);
            if(topics_value.length < 10){
                topics_num = 10 - topics_value.length;
                $('#topic_interest_button').text(topics_num + ' More Topics to Continue');
                $('#topic_interest_button').addClass('submit_button_disabled');
            }else{
                $('#topic_interest_button').text('Continue').click(function(){
                	$(this).attr("disabled", true);
                	$.ajax({
			            url : "/ajax/follow",
			            type : "post",
			            dateType:"json",
			            data : {
			                topics : topics_value
			            },
			            success : function (result){
			            	result = JSON.parse(result);
			                if(result.error == false){
			                	$('#modal-your-interests').modal('hide');
			                	$('#modal-your-selector').modal('show');
			                	var data_action = 'modal_your_interests';
							  	var dta = {
						     		action  : data_action
						     	};
							  	 $.ajax({ 
						            url: '/ajax/your-selector',
						            type: 'POST',
						            data: dta
						        }).done(function(html) {
						        	$('#modal-your-selector .modal-body').addClass('modal-scroll');
						        	$('#modal-your-selector .modal-footer').removeClass('hide');
						        	$('#modal-your-selector .modal-body').html(html);
						        });
			                }
			            }
			        }).done(function(){
			        	$(this).attr("disabled", false);
			        });
                });
                $('#topic_interest_button').removeClass('submit_button_disabled');
            }
        }
	});
	$("body").on("click",".edit-menu-feed-done", function(){
		$(this).text('Edit');
		$(this).removeClass('edit-menu-feed-done');
		$('.sidebar-left-home').removeClass('is_editing');
		$('.remove-feed').hide();
	});

	/*ADD MORE FEED MENU*/
    /*DINHTIN edit this function*/
	$("body").on("click","li.selector_result.topic", function(){
		var obj = $(this);
        var topic_id = obj.attr('data-ajax');
		var dta = {
			action  : 'ajax_add_feed_menu', 
			topic_id: topic_id
		};
		$('.ajax-spiner').removeClass('hide');
		$.ajax({ 
            url: 'ajax/add-bookmark',
            type: 'POST',
            data: dta
        }).done(function(html) {
            obj.remove();
        	$('.list-link').append(html);
        	do_qtip_cat();
        	$('.ajax-spiner').addClass('hide');
        });
	});
	/* REMOVE FEED MENU */
    /*DINHTIN EDIT FUNCTION*/
	$("body").on("click",".remove-feed", function(){
		var obj = $(this);
        var topic_id = obj.attr('data-ajax');
		var dta = {
			action  : 'remove_feed_menu', 
			topic_id: topic_id
		};
		$('.ajax-spiner').removeClass('hide');
		$.ajax({ 
            url: 'ajax/remove-topic-bookmark',
            type: 'POST',
            data: dta
        }).done(function(html) {
        	obj.closest('li').remove();
        	$('.ajax-spiner').addClass('hide');
        });
	});

	/* DOWWNVOTE INLINE  */ /*DINH TIN EDIT THIS*/
	$(".main-content").on("click",".downvote_inline", function(){
		var obj = $(this);
		var dta = {
			action  : 'downvote', 
			parram_1: 0,
            id: $(this).attr('data-ajax')
		};
		$('.ajax-spiner').removeClass('hide');
		$.ajax({ 
            url: '/ajax/down-vote-comment',
            type: 'POST',
            data: dta
        }).done(function(result) {
            var result = JSON.parse(result);
        	if( result.data === null){
        		obj.find('.downvote-text').text('Downvote');
        		obj.removeClass('downvoted');
        	}else{
        		obj.find('.downvote-text').text('Downvoted');
        		obj.addClass('downvoted');
        	}
        	$('.ajax-spiner').addClass('hide');
        });
        return false;
	});

	/* UPVOTE AND UPVOTED ACTION */
	$(".main-content").on("click",".upvote", function(){
        var obj = $(this);
        var type = obj.attr('data-ajax-type');
        if (type === 'comment') {
            var dta = {
                action  : 'upvote', 
                parram_1: 0,
                id: $(this).attr('data-ajax')
            };
            $('.ajax-spiner').removeClass('hide');
            $.ajax({ 
                url: '/ajax/vote-comment',
                type: 'POST',
                data: dta
            }).done(function(result) {
                var rs = JSON.parse(result);
                if (rs.data !== null) {
                    obj.find('.upvote-text').text('Upvoted');
                } else {
                    obj.find('.upvote-text').text('Upvote');
                }
                $('.ajax-spiner').addClass('hide');
            });
            return false;
        } else {
            var dta = {
                action  : 'upvote', 
                parram_1: 0,
                id: $(this).attr('data-ajax')
            };
            $('.ajax-spiner').removeClass('hide');
            $.ajax({ 
                url: '/ajax/vote-question',
                type: 'POST',
                data: dta
            }).done(function(html) {
                var el_count = obj.find('span.count');
                var count = el_count.attr('data-ajax');
                
                if( obj.hasClass('upvoted') ){
                    obj.find('.upvote-text').text('Upvote');
                    obj.removeClass('upvoted');

                    count--;
                    el_count.attr('data-ajax', count);
                    el_count.text('| '+ count);
                }else{
                    obj.find('.upvote-text').text('Upvoted');
                    obj.addClass('upvoted');


                    count++;
                    el_count.attr('data-ajax', count);
                    el_count.text('| '+ count);
                }
                
                $('.ajax-spiner').addClass('hide');
            });
            return false;
        }		
	});

	/* FOLLOW AND UNFOLLOW ACTION */
	
	$("body").on("click",".btn-action-follow, .inline-action-follow", function(){
		var obj = $(this);
		var dta = {
			action  : 'follow', 
			parram_1: $(this).attr('data-href')
		};
		$('.ajax-spiner').removeClass('hide');
		$.ajax({ 
            url: '/ajax/follow-toggle',
            type: 'POST',
            data: dta
        }).done(function(html) {

        	if( obj.hasClass('unfollow') ){
        		obj.find('.follow-text').text('Theo dõi');
	        	obj.addClass('follow');
	        	obj.removeClass('unfollow');
        	}else{
        		obj.find('.follow-text').text('Hủy theo dõi');
        		obj.addClass('unfollow');
        		obj.removeClass('follow');
        	}
        	
        	$('.ajax-spiner').addClass('hide');
        });
        return false;
	});

	/* MUTE, REPORT */
	$("body").on("click","#report_feed_form input", function(){
		$('#report_feed_form .form-group.hide').removeClass('hide');
	});
	$("body").on("click",".report_feed, .mute_feed, .report_comment", function(){
		var dta = {
			action  : 'ajax_report_feed', 
			parram_1: 0,
            id: $(this).attr('data-ajax'),
		};
		if( $(this).hasClass('report_feed') ){
			dta.action = 'ajax_report_feed';
			$('#modal-default .modal-title').text('Report Answer');
		}

		if( $(this).hasClass('mute_feed') ){
			dta.action = 'ajax_mute_feed';
			$('#modal-default .modal-title').text('Mute Jake Williams');
		}

		if( $(this).hasClass('report_comment') ){
			dta.action = 'ajax_report_feed';
			$('#modal-default .modal-title').text('Report Comment');
		}

		$.ajax({ 
            url: '/ajax/report',
            type: 'POST',
            data: dta
        }).done(function(html) {
			$('#modal-default .modal-body').html(html);
        });

		$('#modal-default').modal('show');
		return false;
	});

	/* COMMENTS */
	$("body").on("click",".comments", function(){
		var obj = $(this);
		var LoadingDots = ' <div class="LoadingDots small"><div class="dot first"></div><div class="dot second"></div><div class="dot third"></div></div>';
		obj.closest('.status-footer').find('.feed-comments').remove();
		obj.closest('.status-footer').find('.row').append('<div class="col-md-12"><div class="feed-comments">'+LoadingDots+'</div></div>');
		//comment at single post
		if( $('.container').hasClass('single-post-content') ){
			obj.closest('.single-post').find('.single-feed-comments-wrapper').find('.feed-comments').remove();
			obj.closest('.single-post').find('.single-feed-comments-wrapper').html('<div class="feed-comments">'+LoadingDots+'</div>');
		}
		var dta = {
     		action  	: 'ajax_load_comments',
     		feed_id  	: $(this).attr('data-ajax'),
     		show_form 	: true
     	};
	  	/*$.ajax({ 
            url: '/ajax/load-comment',
            type: 'POST',
            data: dta
        }).done(function(html) {
        	obj.closest('.status-footer').find('.feed-comments').html(html);
        	//comment at single post
        	if( $('.container').hasClass('single-post-content') ){
        		obj.closest('.single-post').find('.feed-comments').html(html);
        	}
			do_qtip_profile();
        });*/
        loadComment(dta, obj);
		return false;
	});

	$("body").on("click",".load-more-parrent-comments", function(){
		var obj = $(this);
		obj.empty();
		obj.html(LoadingDots);
		var dta = {
     		action  	: 'ajax_load_comments',
     		feed_id  	: $(this).attr('data-ajax'),
            offset      : $(this).attr('data-offset')
     	};
	  	 $.ajax({ 
            url: '/ajax/load-comment',
            type: 'POST',
            data: dta
        }).done(function(html) {
        	obj.closest('.meidas-commets').append(html);
        	obj.remove();
        	do_qtip_profile();
        });
	});

    /*DINHTIN EDIT THIS*/
	$("body").on("click",".load-more-comments", function(){
		var obj = $(this);
		obj.closest('.media-body').find('.comments-child').removeClass('hide');
        obj.hide();
        /*obj.empty();
		obj.html(LoadingDots);
		var dta = {
     		action  	: 'ajax_load_comments',
     		feed_id  	: 0
     	};
	  	 $.ajax({ 
            url: '/ajax/load-comment-child',
            type: 'POST',
            data: dta
        }).done(function(html) {
        	obj.next('.comments-child').removeClass('hide');
        	obj.remove();
			do_qtip_profile();
        });*/
	});


	/* REPLY */
	
	$("body").on("focusin",".show_reply_box_toggle", function(){
		var obj = $(this);
		$('.feed-comments .reply-form').addClass('hide');
		$('.feed-comments .comment-meta').removeClass('hide');
		$('.feed-comments .bullet').removeClass('hide');
		obj.closest('.comment-actions').find('.reply-form').removeClass('hide');
		obj.closest('.comment-actions').find('.comment-meta').addClass('hide');
		obj.closest('.comment-actions').find('.bullet').addClass('hide');
        obj.closest('.comment-actions').find('.reply-form .show_reply_box_link').focus();
        obj.closest('.comment-actions').find('.reply-form .show_reply_box_link').focusout(function(){
            setTimeout(function() {
                obj.closest('.comment-actions').find('.reply-form').addClass('hide');
                obj.closest('.comment-actions').find('.comment-meta').removeClass('hide');
                obj.closest('.comment-actions').find('.bullet').removeClass('hide');
            }, 1000);
        });
	});

	/* DOWN VOTE */
	
	$("body").on("click",".undo", function(){
		var obj = $(this);
        var id = $(this).attr('data-ajax');
		
        /*$('div[data-key="'+id+'"]').css('display', 'block');*/
        var dta = {
            id : id,
            action: 'undo'
        };
        $.ajax({
            action:'undo-question',
            url:'/ajax/undo-question',
            id: id,
            method: 'POST',
            data: dta,
            success: function (result) {
                result = JSON.parse(result);
                $('div[data-key="'+result.data+'"]').css('display', 'block');
                obj.closest('.news-feed').find('.feed-alert').remove();
            }
        })
	});
    /*Dinh Tin edit this*/
	$("body").on("click",".downvote", function(){
		var obj = $(this);
		$('.feed-alert').remove();
		var LoadingDots = ' <div class="LoadingDots small"><div class="dot first"></div><div class="dot second"></div><div class="dot third"></div></div>';
		/*obj.closest('.news-feed').find('.status-content-answer').prepend('<div class="feed-alert">'+LoadingDots+'</div>');*/
        $('.content-message-downvote').prepend('<div class="feed-alert">'+LoadingDots+'</div>');
		var data_action = 'ajax_downvote';
		var data_feed_id = 0;
        var id = $(this).attr('data-ajax');
	  	var dta = {
     		action  	: data_action,
     		feed_id  	: data_feed_id,
            id          : id,
     	};
	  	 $.ajax({ 
            url: '/ajax/down-vote-question',
            type: 'POST',
            data: dta
        }).done(function(html) {
        	/*obj.closest('.news-feed').find('.status-content-answer .feed-alert').html(html);*/
            $('.content-message-downvote .feed-alert').html(html);
            $('.content-message-downvote').removeClass('hide');
            $('div[data-key="'+id+'"]').css('display', 'none');
        });

        return false;
	});



	/* SHARE ICON */

	$("body").on("click",".fb-icon, .tt-icon", function(){
		PopupCenter(this.href,'Share Window',600,500);
	});

	/* MODAL TURN ON NOTIFICATION */
	$("body").on("click",".turn_on_notifications", function(){
		$('#modal-turn-on-notifications').modal('show');
		return false;
	});

	/* MODAL WHAT IS YOUR QUESTION */
	$("body").on("click",".user-question a", function(){
		$('#modal-user-question').modal('show');
		return false;
	});

	$('.anon input').on('click',function(){
		if( $(this).is(":checked") ){
			$('#modal-user-question .status-info-user').addClass('hide');
			$('#modal-user-question .status-info-user-anonymous').removeClass('hide');
		}else{
			$('#modal-user-question .status-info-user').removeClass('hide');
			$('#modal-user-question .status-info-user-anonymous').addClass('hide');
		}
	});

	/* MODAL WHAT IS YOUR INTERESTED IN */
	/*$('.check-list-link li:nth-child(3) a, .follow-more-topics').on('click',function(){
		$('#modal-your-interests').modal('show');

		var data_action = 'modal_your_interests';
	  	var dta = {
     		action  : data_action
     	};
	  	 $.ajax({ 
            url: '/ajax/your-interest',
            type: 'POST',
            data: dta
        }).done(function(html) {
        	$('#modal-your-interests .modal-body').addClass('modal-scroll');
        	$('#modal-your-interests .modal-footer').removeClass('hide');
        	$('#modal-your-interests .modal-body').html(html);
        });
	});*/

	/* MODAL SELECTOR TOPIC*/
	/*$('.check-list-link li:nth-child(4) a, .follow-more-topics').on('click',function(){
		$('#modal-your-selector').modal('show');
		var data_action = 'modal_your_interests';
	  	var dta = {
     		action  : data_action
     	};
	  	 $.ajax({ 
            url: '/ajax/your-selector',
            type: 'POST',
            data: dta
        }).done(function(html) {
        	$('#modal-your-selector .modal-body').addClass('modal-scroll');
        	$('#modal-your-selector .modal-footer').removeClass('hide');
        	$('#modal-your-selector .modal-body').html(html);
        });
	});*/

	// ADD SELECTOR TOPIC 
   	$('#topic_selector_button').on('click', function(){
      	var selector_topics = $('#selector_topic_values').val();
      	$.ajax({
      		url: '/ajax/topic-know',
      		type: 'POST',
      		data: {topics: selector_topics},
      		success: function(data){
				$('#modal-your-selector').modal('toggle');
      		}
      	});
   	});

	/* MODAL MORE */
	$('.modal-more').on('click',function(){
		$('#modal-read-more').modal('show');
		console.log('zo');
	  	var data_action = 'tooltip_feed';
	  	var data_feed_id = 0;
	  	var dta = {
     		feed_id : data_feed_id,
     		action  : data_action
     	};
	  	 $.ajax({ 
            url: '/ajax/read-more',
            type: 'POST',
            data: dta
        }).done(function(html) {
            $('#modal-read-more .modal-body').html(html);
            do_qtip_menu_action();
        }).fail(function(xhr, status, error) {
            $('#modal-read-more .modal-body').html(status + ":" + error);
        });
		return false;
	});

	/* SINGLE POST */
	/* MODAL ANSWER */
	
	$('.answer-question').on('click',function(){
		$('#modal-read-more').modal('show');
		var dta = {
     		feed_id : 0,
     		action  : 'answer_question',
            question_id: $(this).attr('data-ajax')
     	};
	  	 $.ajax({ 
            url: '/ajax/answer-box',
            type: 'POST',
            data: dta
        }).done(function(html) {
            $('#modal-read-more .modal-body').html(html);
            do_qtip_menu_action();
            do_qtip_profile();
        });
		return false;
	});

	$('.respect').on('click',function(){
		$('.single-feed-requests-wrapper').toggle();
	});
	$('.request_answers_button ').on('click',function(){
		var obj = $(this);
		var dta = {
			action  : 'no-action', 
			parram_1: 0
		};
		$('.ajax-spiner').removeClass('hide');
		$.ajax({ 
            url: 'ajax.php',
            type: 'POST',
            data: dta
        }).done(function(html) {
        	obj.addClass('is_active');
        	$('.ajax-spiner').addClass('hide');
        });
        return false;
	});
	$('.follow-user .button-follow').on('click',function(){
		var obj = $(this);
		var dta = {
			action  : 'no-action', 
			parram_1: 0
		};
		$('.ajax-spiner').removeClass('hide');
		$.ajax({ 
            url: 'ajax.php',
            type: 'POST',
            data: dta
        }).done(function(html) {
        	obj.toggleClass('followed-user');
        	$('.ajax-spiner').addClass('hide');
        	
        });
        return false;
	});

	/* FOLLOW QUESTION */
	$("body").on("click",".follow-question", function(){
		var dta = {
     		action  : 'no-action',
            question_id: $(this).attr('data-ajax')
     	};
		var obj = $(this);
		$('.ajax-spiner').removeClass('hide');
		$.ajax({ 
            url: '/ajax/question-follow',
            type: 'POST',
            data: dta
        }).done(function(result) {
			var rs = $.parseJSON(result);
        	$('.follow-question').html('Đang theo dõi <span class="label label-default count">'+rs.data+'</span>');
			obj.attr('class','follow text-link unfollow-question');
			$('.ajax-spiner').addClass('hide');
		});
	});
	
	/* UNFOLLOW QUESTION */
	$("body").on("click",".unfollow-question", function(){
		var dta = {
     		action  : 'no-action',
            question_id: $(this).attr('data-ajax')
     	};
		var obj = $(this);
		$('.ajax-spiner').removeClass('hide');
		$.ajax({ 
            url: '/ajax/question-unfollow',
            type: 'POST',
            data: dta
        }).done(function(result) {
			var rs = $.parseJSON(result);
        	$('.unfollow-question').html('Theo dõi <span class="label label-default count">'+rs.data+'</span>');
			obj.attr('class','follow text-link follow-question');
			$('.ajax-spiner').addClass('hide');
		});
	});
	
	/* PASS QUESTION */
	$("body").on("click",".pass", function(){
		var dta = {
     		action  : 'no-action',
            question_id: $(this).attr('data-ajax')
     	};
		var obj = $(this);
		$.ajax({ 
            url: '/ajax/question-pass',
            type: 'POST',
            data: dta
        }).done(function(result) {
			var rs = $.parseJSON(result);
        	$('.item[data-key="'+obj.attr('data-ajax')+'"]').remove();
		});
	});
		
})( jQuery );

