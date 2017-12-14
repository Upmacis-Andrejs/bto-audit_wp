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
	        scrollTop: $($href).offset().top + 2
	    }, 500);
	    return false;
	});

	//hide header when scrolling down, show when scrolling up
		var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('#site-header').outerHeight();
		// on scroll, let the interval function know the user has scrolled
		$(window).scroll(function(event){
		  didScroll = true;
		});
		// run hasScrolled() and reset didScroll status
		setInterval(function() {
		  if (didScroll) {
		    hasScrolled();
		    didScroll = false;
		  }
		}, 250);
		function hasScrolled() {
		    var st = $(this).scrollTop();
		    
		    // Make sure they scroll more than delta
		    if(Math.abs(lastScrollTop - st) <= delta)
		        return;
		    
		    // If they scrolled down and are past the navbar, add class .nav-up.
		    // This is necessary so you never see what is "behind" the navbar.
		    if (st > lastScrollTop && st > navbarHeight){
		        // Scroll Down
		        $('#site-header').removeClass('nav-down').addClass('nav-up');
		    } else {
		        // Scroll Up
		        if(st + $(window).height() < $(document).height()) {
		            $('#site-header').removeClass('nav-up').addClass('nav-down');
		        }
		    }
		    
		    lastScrollTop = st;
		}

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
	AOS.init({
		easing: 'ease-in-out-quart',
		offset: 0,
	});
}


$(window).resize(function() {

});