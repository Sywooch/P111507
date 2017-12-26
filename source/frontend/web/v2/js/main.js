(function($) {
	"use strict";
	$(document).ready(function() {

		/*  [ Connect Slider]
        - - - - - - - - - - - - - - - - - - - - */
	    $('.connect-slider').owlCarousel({
		    loop:true,
			autoplay:false,
			autoplayTimeout:7000,
   			autoplayHoverPause:true,
   			items: 4,
   			margin: 10,
   			nav: true,
   			dots: false,
   			navText: ['<i class="nc-icon-outline arrows-1_minimal-left"></i>', '<i class="nc-icon-outline arrows-1_minimal-right"></i>'],
		    responsive:{
		    	992:{
		    		items:4
		    	},
		        767:{
		            items:3
		        },
		        576:{
		            items:3
		        },
		        0:{
		            items:2
		        }
		    }
		});

		/*  [ Notice Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.notice a').on('click', function (e) {
        	e.preventDefault();
	        $('.notice-popup-bg').fadeToggle();
	        $('.notice-popup').fadeToggle(function(){$(this).focus();});
	    });
	    $('.notice-popup').on('blur', function () {
	        $(this).fadeToggle();
	    });
	    $('.notice-popup-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.notice-popup').fadeToggle();
	    });

	    /*  [ Account Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.account-ava').on('click', function (e) {
        	e.preventDefault();
	        $('.account-popup-bg').fadeToggle();
	        $('.account-popup').fadeToggle(function(){$(this).focus();});
	    });
	    $('.account-popup').on('blur', function () {
	        $(this).fadeToggle();
	    });
	    $('.account-popup-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.account-popup').fadeToggle();
	    });

	    /*  [ Ask Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.today-ask').on('click', function (e) {
        	e.preventDefault();
	        $('.ask-popup-bg').fadeToggle();
	        $('.ask-popup').fadeToggle();
	    });
	    $('.ask-popup-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.ask-popup').fadeToggle();
	    });
	    $('.ask-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.ask-popup-bg').fadeToggle();
	        $('.ask-popup').fadeToggle();
	    });
	    $('.ask-popup-close').on('click', function (e) {
        	e.preventDefault();
	        $('.ask-popup-bg').fadeToggle();
	        $('.ask-popup').fadeToggle();
	    });

	    /*  [ Choose Topic Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.choose-topic').on('click', function (e) {
        	e.preventDefault();
	        $('.choose-topic-bg').fadeToggle();
	        $('.choose-topic-popup').fadeToggle();
	    });
	    $('.choose-topic-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.choose-topic-popup').fadeToggle();
	    });
	    $('.ct-popup-close').on('click', function (e) {
        	e.preventDefault();
	        $('.choose-topic-bg').fadeToggle();
	        $('.choose-topic-popup').fadeToggle();
	    });
	    $('.list-choose-topic a').on('click', function () {
	        $(this).parent().fadeToggle();
	    });

	    /*  [ Pfa Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.pfa-remove').on('click', function (e) {
        	e.preventDefault();
	        $('.pfar-bg').fadeToggle();
	        $('.pfar-popup').fadeToggle();
	    });
	    $('.pfar-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.pfar-popup').fadeToggle();
	    });
	    $('.pfar-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.pfar-bg').fadeToggle();
	        $('.pfar-popup').fadeToggle();
	    });

	    /*  [ Edit Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.edit-photo').on('click', function (e) {
        	e.preventDefault();
	        $('.ep-bg').fadeToggle();
	        $('.ep-popup').fadeToggle();
	    });
	    $('.ep-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.ep-popup').fadeToggle();
	    });
	    $('.ep-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.ep-bg').fadeToggle();
	        $('.ep-popup').fadeToggle();
	    });

	    /*  [ Edit Topic ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.we-topic').on('click', function (e) {
        	e.preventDefault();
	        $('.we-topic-popup').fadeIn(function(){
	    		$('.we-topic-popup .wtp-form input').focus();    	
	        });
	    });
	    $('.we-topic-popup .wtp-form input').on('blur', function () {
	        $(this).parents( '.we-topic-popup' ).fadeOut();
	    });
	    

	    /*  [ Add Profile ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.add-info').on('click', function () {
	        $('.ai-bg').fadeToggle();
	        $('.ai-popup').fadeToggle();
	    });
	    $('.ai-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.ai-popup').fadeToggle();
	    });
	    $('.ai-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.ai-bg').fadeToggle();
	        $('.ai-popup').fadeToggle();
	    });

	    /*  [ Add Credential ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.add-credential').on('click', function (e) {
        	e.preventDefault();
	        $('.ac-bg').fadeToggle();
	        $('.ac-popup').fadeToggle();
	    });
	    $('.ac-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.ac-popup').fadeToggle();
	    });
	    $('.ac-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.ac-bg').fadeToggle();
	        $('.ac-popup').fadeToggle();
	    });

	    /*  [ Create Profile ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.create-new-blog').on('click', function (e) {
        	e.preventDefault();
	        $('.profile-post-bg').fadeToggle();
	        $('.profile-post-popup').fadeToggle();
	    });
	    $('.profile-post-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.profile-post-popup').fadeToggle();
	    });
	    $('.create-profile-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.profile-post-bg').fadeToggle();
	        $('.profile-post-popup').fadeToggle();
	    });

	    /*  [ New Messages ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.new-mess-btn').on('click', function (e) {
        	e.preventDefault();
	        $('.new-mess-bg').fadeToggle();
	        $('.new-mess-popup').fadeToggle();
	    });
	    $('.new-mess-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.new-mess-popup').fadeToggle();
	    });
	    $('.new-mess-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.new-mess-bg').fadeToggle();
	        $('.new-mess-popup').fadeToggle();
	    });

	    /*  [ Report Messages ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.report-mess').on('click', function (e) {
        	e.preventDefault();
	        $('.report-mess-bg').fadeToggle();
	        $('.report-mess-popup').fadeToggle();
	    });
	    $('.report-mess-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.report-mess-popup').fadeToggle();
	    });
	    $('.report-mess-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.report-mess-bg').fadeToggle();
	        $('.report-mess-popup').fadeToggle();
	    });

	    /*  [ Report Messages ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.change-pass').on('click', function (e) {
        	e.preventDefault();
	        $('.change-pass-bg').fadeToggle();
	        $('.change-pass-popup').fadeToggle();
	    });
	    $('.change-pass-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.change-pass-popup').fadeToggle();
	    });
	    $('.change-pass-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.change-pass-bg').fadeToggle();
	        $('.change-pass-popup').fadeToggle();
	    });

	    /*  [ Public Follow ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.click-follow').on('click', function (e) {
        	e.preventDefault();
	        $('.public-follow-bg').fadeToggle();
	        $('.public-follow-popup').fadeToggle();
	    });
	    $('.public-follow-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.public-follow-popup').fadeToggle();
	    });

	    /*  [ Hide Messages ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.hide-mess').on('click', function (e) {
        	e.preventDefault();
	        $('.hide-mess-bg').fadeToggle();
	        $('.hide-mess-popup').fadeToggle();
	    });
	    $('.hide-mess-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.hide-mess-popup').fadeToggle();
	    });
	    $('.hide-mess-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.hide-mess-bg').fadeToggle();
	        $('.hide-mess-popup').fadeToggle();
	    });

	    /*  [ Widget Employment ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.widget-employment').on('click', function () {
	        $('.popup-employment-bg').fadeToggle();
	        $('.popup-employment').fadeToggle();
	    });
	    $('.popup-employment-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.popup-employment').fadeToggle();
	    });
	    $('.btn-widget-employment').on('click', function (e) {
        	e.preventDefault();
	        $('.popup-employment-bg').fadeToggle();
	        $('.popup-employment').fadeToggle();
	    });

	    /*  [ Widget Education ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.widget-education').on('click', function () {
	        $('.popup-education-bg').fadeToggle();
	        $('.popup-education').fadeToggle();
	    });
	    $('.popup-education-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.popup-education').fadeToggle();
	    });
	    $('.btn-widget-education').on('click', function (e) {
        	e.preventDefault();
	        $('.popup-education-bg').fadeToggle();
	        $('.popup-education').fadeToggle();
	    });

	    /*  [ What Topic ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.what-topic').on('click', function () {
	        $('.what-topic-bg').fadeToggle();
	        $('.what-topic-popup').fadeToggle();
	    });
	    $('.what-topic-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.what-topic-popup').fadeToggle();
	    });

	    /*  [ Widget Location ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.widget-location').on('click', function () {
	        $('.popup-location-bg').fadeToggle();
	        $('.popup-location').fadeToggle();
	    });
	    $('.popup-location-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.popup-location').fadeToggle();
	    });
	    $('.btn-widget-location').on('click', function (e) {
        	e.preventDefault();
	        $('.popup-location-bg').fadeToggle();
	        $('.popup-location').fadeToggle();
	    });

	    /*  [ Request Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.request-view').on('click', function (e) {
        	e.preventDefault();
	        $('.request-popup-bg').fadeToggle();
	        $('.request-popup').fadeToggle();
	    });
	    $('.request-popup-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.request-popup').fadeToggle();
	    });

	    /*  [ Edit Name Profile ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.pf-info h1 a').on('click', function (e) {
        	e.preventDefault();
	        $(this).parent().fadeToggle(0);
	        $(this).parent().parent().find('.pf-name-edit').css('display','inline-block');
	    });
	    $('.en-cancel').on('click', function (e) {
        	e.preventDefault();
	        $(this).parent().parent().css('display','none');
	        $(this).parent().parent().parent().find('h1').fadeToggle();
	    });

	    /*  [ Check Topic Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.check-topic').on('click', function (e) {
        	e.preventDefault();
        	$(this).parent().parent().parent().parent().parent().find('.process').fadeToggle();
	        $(this).parent().parent().parent().parent().parent().find('.topic-bg').fadeToggle();
	        $(this).parent().parent().parent().parent().parent().find('.topic-popup').fadeToggle();
	    });

	    /*  [ Report Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.action-report a').on('click', function (e) {
        	e.preventDefault();
	        $(this).parent().find('.report-bg').fadeToggle();
	        $(this).parent().find('.report-popup').fadeToggle();
	    });
	    $('.report-bg').on('click', function () {
	        $(this).fadeToggle();
	        $(this).parent().find('.report-popup').fadeToggle();
	    });
	    $('.report-title i').on('click', function () {
	        $(this).parent().parent().parent().find('.report-bg').fadeToggle();
	        $(this).parent().parent().fadeToggle();
	    });
	    $('.report-cancel').on('click', function (e) {
	    	e.preventDefault();
	        $(this).parent().parent().parent().parent().find('.report-bg').css('display','none');
	        $(this).parent().parent().parent().css('display','none');
	    });

	    /*  [ Profile Popup ]
        - - - - - - - - - - - - - - - - - - - - */
        if ($(window).width() > 1200) {
        $('.info-top a').mouseover(function() {
	        $(this).parent().parent().find('.profile').css('display','block');
	        $(this).parent().parent().find('.profile').css('left','0px');
	        $(this).parent().parent().find('.profile').css('top','20px');
	    });
	    $('.notice-user-one').mouseover(function() {
	        $(this).parent().parent().find('.profile-one').css('display','block');
	        $(this).parent().parent().find('.profile-one').css('left','0px');
	        $(this).parent().parent().find('.profile-one').css('top','25px');
	    });
	    $('.notice-user-two').mouseover(function() {
	        $(this).parent().parent().find('.profile-two').css('display','block');
	        $(this).parent().parent().find('.profile-two').css('left','80px');
	        $(this).parent().parent().find('.profile-two').css('top','25px');
	    });
	    $('.notice-user-three').mouseover(function() {
	        $(this).parent().parent().find('.profile-three').css('display','block');
	        $(this).parent().parent().find('.profile-three').css('left','160px');
	        $(this).parent().parent().find('.profile-three').css('top','25px');
	    });
	    $('.notice-user-one').mouseout(function() {
	        $(this).parent().parent().find('.profile-one').css('display','none');
	    });
	    $('.notice-user-two').mouseout(function() {
	        $(this).parent().parent().find('.profile-two').css('display','none');
	    });
	    $('.notice-user-three').mouseout(function() {
	        $(this).parent().parent().find('.profile-three').css('display','none');
	    });
	    $('.wt-list li').mouseover(function() {
	        $(this).find('> .profile').css('display','block');
	        $(this).find('> .profile').css('left','0px');
	        $(this).find('> .profile').css('top','31px');
	    });
	    $('.wt-list li a').mouseover(function() {
	        $(this).find('> .profile').css('display','block');
	        $(this).find('> .profile').css('left','0px');
	        $(this).find('> .profile').css('top','31px');
	    });
	    $('.wr-wt-list li').mouseover(function() {
	    	$(this).find('.profile').css('display','block');
	        $(this).find('.profile').css('top','55px');
	        $(this).find('.profile').css('left','10px');
	    });
	    $('.wr-wt-list li').mouseout(function() {
	    	$(this).find('.profile').css('display','none');
	    });
	    $('.wt-list li').mouseout(function() {
	        $(this).find('> .profile').css('display','none');
	    });
	    $('.info-top a').mouseout(function() {
	        $(this).parent().parent().find('.profile').css('display','none');
	    });
	    // dinhtin fix mouseover to delegate
	    $('body').delegate('.qp-ava img', 'mouseenter', function (e) {
	    // $('.qp-ava img').mouseover(function() {
	        $(this).parent().parent().find('.profile').css('display','block');
	        $(this).parent().parent().find('.profile').css('left','-40px');
	        $(this).parent().parent().find('.profile').css('top','37px');
	    });
	    // $('.qp-ava img').mouseout(function() {
	    $('body').delegate('.qp-ava img', 'mouseleave', function (e) {
	        $(this).parent().parent().find('.profile').css('display','none');
	    });
	    $('a.qbt-hover').mouseover(function() {
	        $(this).parent().parent().find('.profile').css('display','block');
	    });
	    $('a.r-qbt-hover').mouseover(function() {
	    	$(this).parent().parent().find('.profile-request').css('display','block');
	        $(this).parent().parent().find('.profile-request').css('left','70px');
	        $(this).parent().parent().find('.profile-request').css('top','35px');
	    });
	    $('a.r-qbt-hover').mouseout(function() {
	    	$(this).parent().parent().find('.profile-request').css('display','none');
	    });
	    $('a.qbt-hover').mouseout(function() {
	        $(this).parent().parent().find('.profile').css('display','none');
	    });
	    $('.qp-hover').mouseover(function() {
	        $(this).parent().parent().find('.profile').css('display','block');
	        $(this).parent().parent().find('.profile').css('left','75px');
	    });
	    $('.qp-hover').mouseout(function() {
	        $(this).parent().parent().find('.profile').css('display','none');
	    });
	    $('.profile').mouseover(function() {
	        $(this).css('display','block');
	    });
	    $('.profile').mouseout(function() {
	        $(this).css('display','none');
	    });
	    $('.profile-request').mouseover(function() {
	        $(this).css('display','block');
	    });
	    $('.profile-request').mouseout(function() {
	        $(this).css('display','none');
	    });
		}

	    /*  [ Full Content ]
        - - - - - - - - - - - - - - - - - - - - */
        //dinh tin fix from on to delegate
        $('body').delegate('.qp-readmore', 'click', function (e) {
        	alert('load more');
        	e.preventDefault();
	        $(this).parent().parent().parent().fadeToggle(0);
	        $(this).parent().parent().parent().parent().find('.qp-full-content').fadeToggle();
	        if ( $(this).parent().parent().parent().parent().find('.comment-previews').hasClass('comment-previews') ) {
	        	$(this).parent().parent().parent().parent().find('.comment-previews').fadeToggle();
	        } else {
				$(this).parent().parent().parent().parent().find('.qp-comment').fadeToggle();
	        }
	    });
        $('.comment-previews').on('click', function () {
        	$(this).fadeToggle();
	        $(this).parent().find('.qp-comment').fadeToggle();
	    });

	    $('.comment-click').on('click', function () {
        	$(this).parent().parent().parent().parent().parent().find('.qp-comment').fadeToggle();
	    });

	    /*  [ Suggest Search ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.search-form form input').on('focus', function () {
	        $('.suggest-search').fadeToggle();
	        $('.site-main').addClass('search-focus');
	    });
	    $('.search-form form input').on('blur', function () {
	        $('.suggest-search').fadeToggle();
	        $('.site-main').removeClass('search-focus');
	    });

	    /*  [ Reply Comment ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.reply-click').on('click', function (e) {
        	e.preventDefault();
	        $(this).parent().parent().parent().fadeToggle(0);
	        $(this).parent().parent().parent().parent().find('.qp-full-content').fadeToggle();
	    });
	    $('.sub-reply-click').on('click', function (e) {
	    	e.preventDefault();
        	$(this).parent().parent().parent().parent().find('.sub-reply-comment').fadeIn();
	    });

	    /*  [ Follow Bookmark ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.follow-click').on('click', function (e) {
        	e.preventDefault();
	        $(this).css('display','none');
	        $('.unfollow-click').css('display','block');
	    });
	    $('.unfollow-click').on('click', function (e) {
        	e.preventDefault();
	        $(this).css('display','none');
	        $('.follow-click').css('display','block');
	    });
	    $('.unbookmark-click').on('click', function (e) {
        	e.preventDefault();
	        $(this).css('display','none');
	        $('.bookmark-click').css('display','block');
	    });
	    $('.bookmark-click').on('click', function (e) {
        	e.preventDefault();
	        $(this).css('display','none');
	        $('.unbookmark-click').css('display','block');
	    });
	    $('.mp-close').on('click', function () {
	        $('.m-complete-profile').css('display','none');
	    });

	    /*  [ Edit Blogs ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.edit-blog').on('click', function (e) {
        	e.preventDefault();
	        $('.your-blogs').fadeToggle(0);
	        $('.setting-blogs').fadeToggle();
	    });

	    /*  [ Edit Name Blog ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.edit-name-blog p a').on('click', function (e) {
        	e.preventDefault();
	        $(this).parent().fadeToggle(0);
	        $(this).parent().parent().find('form').fadeToggle();
	    });
	    $('.edit-name-cancel').on('click', function (e) {
        	e.preventDefault();
	        $(this).parent().parent().fadeToggle(0);
	        $(this).parent().parent().parent().find('.name-show').fadeToggle();
	    });

	    /*  [ List Credential ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.add-a-credential').on('click', function (e) {
        	e.preventDefault();
	        $(this).parent().find('.list-credential').fadeToggle(function(){$(this).focus();});
	    });
	    $('.list-credential').on('blur', function () {
	        $(this).fadeToggle();
	    });
	    $('.employment a').on('click', function (e) {
        	e.preventDefault();
        	$('.item-credential').css('display','none');
	        $('.item-employment').css('display','block');
	    });
	    $('.education a').on('click', function (e) {
        	e.preventDefault();
        	$('.item-credential').css('display','none');
	        $('.item-education').css('display','block');
	    });
	    $('.location a').on('click', function (e) {
        	e.preventDefault();
        	$('.item-credential').css('display','none');
	        $('.item-location').css('display','block');
	    });
	    $('.topic a').on('click', function (e) {
        	e.preventDefault();
        	$('.item-credential').css('display','none');
	        $('.item-topic').css('display','block');
	    });
	    $('.language a').on('click', function (e) {
        	e.preventDefault();
        	$('.item-credential').css('display','none');
	        $('.item-language').css('display','block');
	    });
	    $('.btn-credential').on('click', function (e) {
        	e.preventDefault();
        	$('.item-credential').css('display','none');
	    });

	    /*  [ Spam Mess ]
        - - - - - - - - - - - - - - - - - - - - */
	    if ($('input[name="rm"]').is(':checked')) {
	    	$('.form-spam').css('display','block');
	    } else {
	    	$('.form-spam').css('display','none');
	    }

	    $(".sb-item").hide();
    	$(".sb-item:first").show();
    	$(".sb-tabs li").click(function() {
		
      	$(".sb-item").hide();
	    var activeTab = $(this).attr("rel"); 
	    $("#"+activeTab).fadeIn();			
	    $(".sb-tabs li").removeClass("active");
	    $(this).addClass("active");
		});

		/*  [ Add Mail ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.click-add-mail').on('click', function (e) {
        	e.preventDefault();
        	$(this).fadeToggle(0);
	        $('.add-email').fadeToggle();
	    });

        /*  [ Load More ]
        - - - - - - - - - - - - - - - - - - - - */
	    $(".scroll").jscroll({ 
	    	loadingHtml: '<img class="img-load" src="images/loading.gif" alt="Loading" /> Loading...',
	    	contentSelector: ".question-basic",
	    	// callback: function() {
	    	// 	$( 'body' ).addClass( 'loading' );
	    	// 	setTimeout( function() {
	    	// 		$( 'body' ).removeClass( 'loading' );
	    	// 	}, 2000);
	    	// }
	    });



	    $('textarea#froala-editor').froalaEditor();

	    /*  [ Show Textarea ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.textarea-click').on('click', function (e) {
        	e.preventDefault();
        	$(this).parent().parent().parent().parent().parent().find('.qb-textarea').fadeIn();
	    });

	    $('.textarea-clicks').on('click', function (e) {
        	e.preventDefault();
        	$(this).parent().find('.qb-textarea').fadeIn();
	    });

	    $('.add-desc').on('click', function (e) {
        	e.preventDefault();
        	$(this).parent().find('.qb-textarea').fadeIn();
	    });

	    /*  [ Mobile Search ]
        - - - - - - - - - - - - - - - - - - - - */
	    $('.m-search-click').on('click', function (e) {
	    	e.preventDefault();
        	$('body').addClass('body-bg');
        	$('.search-form').fadeIn();
	    });
	    $('.search-back').on('click', function (e) {
	    	e.preventDefault();
        	$('body').removeClass('body-bg');
        	$('.search-form').fadeOut();
	    });

	    $('.m-process-btn').on('click', function (e) {
	    	e.preventDefault();
        	$('body').addClass('body-bg');
        	$('.m-credentials').fadeIn();
	    });

	    $('.m-select-credential').on('click', function (e) {
	    	e.preventDefault();
        	$(this).parent().find('.m-bg-credential').fadeIn();
        	$(this).parent().find('.m-add-credential').fadeIn();
	    });
	    $('.m-add-credential li i').on('click', function (e) {
	    	e.preventDefault();
        	$('.m-bg-credential').fadeOut();
        	$('.m-add-credential').fadeOut();
	    });

	    $('.m-employment-click').on('click', function (e) {
	    	e.preventDefault();
	    	$('.m-bg-credential').fadeOut();
        	$('.m-add-credential').fadeOut();
        	$(this).parent().parent().parent().find('.m-choose-credential').fadeOut(0);
        	$(this).parent().parent().parent().find('.m-employment').fadeIn();
	    });
	    $('.m-education-click').on('click', function (e) {
	    	e.preventDefault();
	    	$('.m-bg-credential').fadeOut();
        	$('.m-add-credential').fadeOut();
        	$(this).parent().parent().parent().find('.m-choose-credential').fadeOut(0);
        	$(this).parent().parent().parent().find('.m-education').fadeIn();
	    });
	    $('.m-location-click').on('click', function (e) {
	    	e.preventDefault();
	    	$('.m-bg-credential').fadeOut();
        	$('.m-add-credential').fadeOut();
        	$(this).parent().parent().parent().find('.m-choose-credential').fadeOut(0);
        	$(this).parent().parent().parent().find('.m-location').fadeIn();
	    });
	    $('.m-topic-click').on('click', function (e) {
	    	e.preventDefault();
	    	$('.m-bg-credential').fadeOut();
        	$('.m-add-credential').fadeOut();
        	$(this).parent().parent().parent().find('.m-choose-credential').fadeOut(0);
        	$(this).parent().parent().parent().find('.m-topic').fadeIn();
	    });
	    $('.m-language-click').on('click', function (e) {
	    	e.preventDefault();
	    	$('.m-bg-credential').fadeOut();
        	$('.m-add-credential').fadeOut();
        	$(this).parent().parent().parent().find('.m-choose-credential').fadeOut(0);
        	$(this).parent().parent().parent().find('.m-language').fadeIn();
	    });
	    $('.m-popup-title i').on('click', function (e) {
	    	e.preventDefault();
        	$('body').removeClass('body-bg');
        	$('.m-credentials').fadeOut();
	    });

	    $('.like-btn').on('click', function (e) {
        	e.preventDefault();
	        $(this).toggleClass('active');
	    });

	    $('.ar-click').on('click', function (e) {
        	e.preventDefault();
        	$(this).fadeOut(0);
	        $(this).parent().find('.request-info').fadeOut(0);
	        $(this).parent().find('.r-item').fadeOut(0);
	        $(this).parent().find('.ur-item').fadeIn(0);
	        $(this).parent().find('.unrequest-info').fadeIn(0);
	        $(this).parent().find('.ar-back-click').fadeIn(0);
	        $(this).parent().find('.ar-un-click').fadeIn(0);
	    });
	    $('.ar-back-click').on('click', function (e) {
        	e.preventDefault();
        	$(this).fadeOut(0);
	        $(this).parent().find('.unrequest-info').fadeOut(0);
	        $(this).parent().find('.request-info').fadeIn(0);
	        $(this).parent().find('.ar-click').fadeIn(0);
	    });

	    $('.request-click').on('click', function (e) {
        	e.preventDefault();
        	$('.qb-request').slideToggle();
	    });

	    $('.pre-click-edit').on('click', function (e) {
        	e.preventDefault();
        	$(this).fadeOut(0);
        	$('.pre-click-done').fadeIn(0);
        	$(this).parent().parent().parent().find('.r-remove').fadeIn(0);
        	$(this).parent().parent().parent().find('form').fadeIn(0);
	    });
	    $('.pre-click-done').on('click', function (e) {
        	e.preventDefault();
        	$(this).fadeOut(0);
        	$('.pre-click-edit').fadeIn(0);
        	$(this).parent().parent().parent().find('.r-remove').fadeOut(0);
        	$(this).parent().parent().parent().find('form').fadeOut(0);
	    });

	    $('.r-remove').on('click', function () {
        	$(this).parent().fadeOut(0);
	    });

	    $('.request-review').on('click', function () {
        	$(this).parent().parent().parent().find('.popup-content').fadeOut(0);
        	$(this).parent().parent().parent().find('.request-review-content').fadeIn(0);
	    });
	    $('.unrequest-review').on('click', function () {
        	$(this).parent().parent().parent().find('.request-review-content').fadeOut(0);
        	$(this).parent().parent().parent().find('.popup-content').fadeIn(0);
	    });
	});
	    
})(jQuery);