jQuery(document).ready(function($){
	jQuery('[data-toggle="tooltip"]').tooltip();
});

jQuery(document).ready(function($){
  jQuery('.slider1').bxSlider({
  	slideWidth: 5000,
    minSlides: 1,
    maxSlides: 3,
    infiniteLoop: false,
    nextSelector: '#slider-right',
  	prevSelector: '#slider-left',
  	nextText: 'next',
  	prevText: 'prev'
  });
});

jQuery(document).ready(function($){
	$(".add_details").show();
	$(".remove_details").hide();
	$(".add_details").click(function(){
		$(this).hide();
		$('.remove_details').show();
		$('.focus_input').addClass('show_large');
	});
	$(".remove_details").click(function(){
		$(this).hide();
		$('.add_details').show();
		$('.focus_input').removeClass('show_large');
	});
	$(".form-control").click(function(){
		$(this).parent().parent().parent().parent().parent().addClass('focus_input');
	});
	$('.main-content').on('click',function(){
		$('.navbar.navbar-default.navbar-fixed-top').removeClass('focus_input');
	});
	$(".form-control").keyup(function(){
		var key = $('.form-control').val();
		if(key != ''){
			$('.navbar.navbar-default.navbar-fixed-top').addClass('have_text');
		}else{
			$('.navbar.navbar-default.navbar-fixed-top').removeClass('have_text');
		}
	});
	$('.main-content').on('click',function(){
		$('.navbar.navbar-default.navbar-fixed-top').removeClass('show_large');
	});
	
	var elem = document.getElementById("myBar"); 
	var elem = $("#myBar"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 65) {
            clearInterval(id);
        } else {
            width++; 
            //elem.style.width = width + '%'; 
            elem.css('width',width + '%');
            $("#label").html(width * 1 + '%');
        }
    }
});
