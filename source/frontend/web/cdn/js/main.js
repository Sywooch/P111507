var isClicked = false;
(function($) {
	"use strict";
	$(document).ready(function() {

		/* Rating */
		$('ul.rating li').mouseenter(function(){
			var $lis = $(this).siblings("li").andSelf();
			var id   = $(this).index();
			$lis.slice(0, id + 1).addClass("starchose");
		});

		$('ul.rating li').mouseleave(function(){
			var $lis = $(this).siblings("li").andSelf();
			var id   = $(this).index();

			$lis.removeClass("starchose");
		});

		$('ul.rating li').on('click', function(){
			var $lis = $(this).siblings("li").andSelf();
			var id   = $(this).index();

			$lis.removeClass("starchosed");
			$lis.slice(0, id + 1).addClass("starchosed");
		});
		/* End Rating */

		/* Tab Menu Top */
		$('.top-menu li').click(function() {
			$('.top-menu li').removeClass('active');
			var liIndex = $(this).index() + 1;
			$('.top-menu li:nth-child('+liIndex+')').addClass('active');
			$('.top-list-tab .tab').removeClass('active');
			$('.top-list-tab .tab:nth-child('+liIndex+')').addClass('active');
			
			$('.bottom-pagiration .tab').removeClass('active');
			$('.bottom-pagiration .tab:nth-child('+liIndex+')').addClass('active');
		});
		/* End Tab Menu Top */

		/* Add Goggle Adsence */
		/*
		var numP = ($("#content-body p").length);
		var numAddDiv = Math.ceil(numP/2);
		$($("#content-body p")[numAddDiv]).before('<div class="ads-google"><a href=""><img src="images/ads.jpg" alt="" /></a></div>');

		var numP2 = ($(".top-list-ads .items").length);
		var numAddDiv2 = Math.ceil(numP2/2);
		$($(".top-list-ads .items")[numAddDiv2]).before('<div class="ads-google"><a href=""><img src="images/ads.jpg" alt="" /></a></div>');

		var numP3 = ($(".top-list-ads-tab .items").length);
		var numAddDiv3 = Math.ceil(numP3/2);
		$($(".top-list-ads-tab .items")[numAddDiv3]).before('<div class="ads-google"><a href=""><img src="images/ads.jpg" alt="" /></a></div>');

		var numP4 = ($(".top-list-ads-tab2 .items").length);
		var numAddDiv4 = Math.ceil(numP4/2);
		$($(".top-list-ads-tab2 .items")[numAddDiv4]).before('<div class="ads-google"><a href=""><img src="images/ads.jpg" alt="" /></a></div>');
		*/
		/* End Add Google Adsence */
		
		/* Comment */
		$('.btnReply').click(function() {
			$(this).parent().next().toggle();
		});
		$('.sub-comment button:last-child').click(function() {
			$('.sub-comment').hide();
		});
		/* End Comment */

		/* Cate Software */
		/*$('.cate-menu-ul li').click(function() {
			var liIndex = $(this).index() + 1;
			if(liIndex == 1) {
				$('.top-list-tab').removeClass('list-tab-free');
				$('.top-list-tab').removeClass('list-tab-paid');
			}else if(liIndex == 2) {
				$('.top-list-tab').addClass('list-tab-free');
				$('.top-list-tab').removeClass('list-tab-paid');
			}else {
				$('.top-list-tab').removeClass('list-tab-free');
				$('.top-list-tab').addClass('list-tab-paid');
			}
		});*/
		/* End Cate Software */

		/* menu */
		$(".menu-sub-info span").click(function(e) {
	     e.preventDefault();
			 $(this).toggleClass('active');
				$(this).next().toggleClass('open');
	   });



		 /* display comment */
		 $('.video-btnMore').click(function() {
			 $('.video-comment').slideDown('slow');
		 });

		 /* select option */
		 $('.form-group ul li:last-child .show-select span').click(function() {
         if (isClicked == false && $('.select-option').css('display') != 'block')  {
             $(this).next().show();
             isClicked = true;
         }
     });
     $(document).click(function() {
         if (!isClicked) {
             $('.select-option').hide();
         }
         isClicked = false;
     });
		 $('.select-option p').click(function() {
			 var $optionTxt = $(this).text();
			 $('.show-select span').text($optionTxt);
		 });

	});


})(jQuery);
