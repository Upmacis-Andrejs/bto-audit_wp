$(document).ready(function() {
	'use strict';

	//toggle mobile menu
	$("#nav-icon").click(function() {
		$(this).toggleClass('open');
		$("#site-header").toggleClass('open');
		$("#site-header .nav").toggleClass('hidden');
		return false;
	});
	$(".header-menu a").click(function() {
		$("#nav-icon").removeClass('open');
		$("#site-header").removeClass('open');
		$("#site-header .nav").addClass('hidden');
	});
			
	//scroll the page according to clicked navigation item
	$(".header-menu a, .teammate-email, .btn").click(function() {
		var $href = $(this).attr('href');
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

window.onload = function() {
	//add body class after elements have loaded
	$("body").addClass('contect-loaded');
	//animate elements
	var options = {
	    animateThreshold: 100,
	    scrollPollInterval: 50
	}

	$('.aniview').AniView(options);
}


$(window).resize(function() {

});