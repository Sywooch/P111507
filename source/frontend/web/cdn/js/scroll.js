var isClicked = false;
$(document).ready(function() {
	$('.btn-down').click(function() {
	   $dlOffset = $('.link-download').offset().top - 150;
	   $(window).scrollTop( $dlOffset );
	});	
    $('.menu-sidebar').click(function() {
        $('#sidebar').toggleClass("active");
        $('#main-content .mainContent').toggleClass("active");
        $('.menu-sidebar').toggleClass("active");
    });
    $('.title-right li').click(function() {
        $liIndex = $(this).index() + 1;
        $('.title-right li').removeClass('active');
        $(this).addClass('active');
        $('.mainCt-info div.tab').removeClass('active');
        $('.mainCt-info div.tab:nth-child(' + $liIndex + ')').addClass('active');
    });
    $('.actionUL li').click(function() {
        $liIndex = $(this).index() + 1;
        $('.actionUL li').removeClass('active');
        $('.actionUL li:nth-child(' + $liIndex + ')').addClass('active');
        $('.info-border .tab').removeClass('active');
        $('.info-border .tab:nth-child(' + $liIndex + ')').addClass('active');
    });
    $('.info-edit').click(function() {
        $('.info-border .tab-info').removeClass('active');
        $('.info-border .tab-info:nth-child(2)').addClass('active');
    });
    $('.info-cancel').click(function() {
        $('.info-border .tab-info').removeClass('active');
        $('.info-border .tab-info:nth-child(1)').addClass('active');
    });
    /*---- Dropdown ---- 
    $('.menudrop a').click(function() {
        if (isClicked == false) {
            $('.menudrop .small-menu').slideToggle("slow");
            isClicked = true;
        }
    });
    $(document).click(function() {
        if (!isClicked) {
            $('.menudrop .small-menu').slideUp("slow");
        }
        isClicked = false;
    });
    ------------------------*/
    var $stickyHeight = $('.link-right').height();
    var $footerHeight = $('#footer').height();
    var $hWindow = $(window).height();
    var $bannerHeight = $('.link-right > ul li:last-child').height();
    $(window).scroll(function() {
        var $hBody = $(document).height();
        if (($(this).scrollTop() + $hWindow) > $hBody - $footerHeight) {
            if ($hWindow - $footerHeight > $bannerHeight + 20) {
                $('.link-right > ul li:last-child').attr('style', 'position:fixed;top:50px;');
            } else {
                $('.link-right > ul li:last-child').attr('style', 'position:fixed;top:-' + $footerHeight + 'px;');
            }
        } else if ($(this).scrollTop() > $stickyHeight) {
            $('.link-right > ul li:last-child').attr('style', 'position:fixed;top:50px;');
        } else {
            $('.link-right > ul li:last-child').attr('style', 'position:relative;');
        }
    });
    $(window).scroll(function() {
        var $headerHeight = $('#header').height() + 80;
        if ($(this).scrollTop() > $headerHeight) {
            $('.reportlink_control').fadeIn();
        } else {
            $('.reportlink_control').fadeOut();
        }
    });
    
    var $headerHeight = $('#header').height() + 80;
    var $hFooter = $('#footer').height();
    var $hWindow = $(window).height();
    $(window).scroll(function() {
        var $hBody = $(document).height();
        var $brandLink = $('#brand-link').height();
        if ($(this).scrollTop() + $hWindow < $hBody - $hFooter - $brandLink) {
            if ($(this).scrollTop() > $headerHeight) {
                $('#sidebar').addClass('sidebar-scroll');
                $('#main-content').parent().addClass('mgleft');
            } else {
                $('#sidebar').removeClass('sidebar-scroll');
                $('#main-content').parent().removeClass('mgleft');
            }
        } else {
            $('#sidebar').removeClass('sidebar-scroll');
            $('#main-content').parent().removeClass('mgleft');
        }
    });
    
     /* Pokemon */
    $(".display-select-right .selectAll").change(function () {
        $(".display-select-right input:checkbox").prop('checked', $(this).prop("checked"));
    });
    
    $(".display-select-left .selectAll").change(function () {
        $(".display-select-left input:checkbox").prop('checked', $(this).prop("checked"));
    });

    $('.select-pk').click(function() {
      $(this).toggleClass('active');
    });
    $('.select-pk1').click(function() {
      $('.select-pk2').removeClass('active');
    });
    $('.select-pk2').click(function() {
      $('.select-pk1').removeClass('active');
    });

    $('.p-option,.display-select').click(function() {
        if (isClicked == false) {
            $(this).next().addClass('active');
            isClicked = true;
        }
    });
    $(document).click(function() {
        if (!isClicked) {
            $('.display-select').removeClass('active');
            $('.select-pk').removeClass('active');
        }
        isClicked = false;
    });
    /* Pokemon */
    
});