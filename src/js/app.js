$(document).ready(function() {
	'use strict';

	//toggle mobile menu
	$("#nav-icon").click(function(event) {
	    var click_target = $(event.target);
        var html_top = Math.abs(parseInt($('html').css('top'), 10));
		if ( $(this).hasClass('open') ) {
	        $("html").removeClass('no-scroll');
	        $("html").css("top",  '');
	        $(window).scrollTop( html_top );
        } else {
            $("html").css("top",  - $(window).scrollTop() );
            $("html").addClass('no-scroll');                      
        }
		$(this).toggleClass('open');
		$("#site-header").toggleClass('open');
		$("#site-header .nav").toggleClass('hidden');
		return false;
	});
	$(".header-menu a").click(function() {
        $("html").removeClass('no-scroll');
        $("html").css("top",  '');
        $(window).scrollTop( html_top );
		$("#nav-icon").removeClass('open');
		$("#site-header").removeClass('open');
		$("#site-header .nav").addClass('hidden');
	});
			
	//scroll the page according to clicked navigation item
	$(".header-menu a, .teammate-email, .btn").click(function() {
		var $href = $(this).attr('href');
	    $("html, body").animate({
	        scrollTop: $($href).offset().top + 1
	    }, 500);
	    return false;
	});

	//replace all .svg to .png, in case the browser does not support the format
	if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function() {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}

	//hide site header when scrolling down
		//define custom options
	var $options = {
			offset: 5,
			tolerance: 5,
		}
		// grab an element
		var myElement = document.querySelector(".headroom");
		// construct an instance of Headroom, passing the element
		var headroom  = new Headroom(myElement, $options);
		// initialise
		headroom.init();

});

window.onload = function() {
	//add class to body element after page has loaded (including pictures)
	$("body").addClass('content-loaded');

	//animate elements
	AOS.init({
		easing: 'ease-in-out-quart',
		offset: 70,
	    once: true
	});
}


$(window).resize(function() {

});