$(document).ready(function() {
	'use strict';

	//toggle mobile menu
	$(".xs-nav-btn-open").click(function() {
		$(".cont-xs-nav").removeClass("hidden");
	});
	$(".xs-nav-btn-close").click(function() {
		$(".cont-xs-nav").addClass("hidden");
	});
			
	//scroll the page according to clicked navigation item
	$(".header-menu a, .teammate-email, .btn").click(function() {
		var $href = $(this).attr('href');
		var $href = $href.replace('#', '');
	    $("html, body").animate({
	        scrollTop: $($href).offset().top
	    }, 500);
	    return false;
	});

	//replace all .svg to .png, in case the browser does not support the format
	if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function() {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}
	
});


$(window).resize(function() {

});