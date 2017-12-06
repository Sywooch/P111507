(function( $ ){
	$('.carousel').carousel({
	    interval: 5000 //changes the speed
	});
	$('[data-hover="dropdown"]').dropdownHover();


});
(function( $ ){
	$('.selector_input').on('input', function() {
	  $(this).scrollTop($(this).height());
	});
	$('.selector_input').scroll(function() {
	  var h = $(this).scrollTop();
	  if (h > 0)
	    $(this).height($(this).height() + h);
	});
})( jQuery );