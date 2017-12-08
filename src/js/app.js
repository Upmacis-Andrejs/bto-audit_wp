$(document).ready(function() {

	'use strict';
	//toggle mobile menu
	$(".xs-nav-btn-open").click(function() {
		$(".cont-xs-nav").removeClass("hidden");
	});
	$(".xs-nav-btn-close").click(function() {
		$('.xs-nav .ul-sub-menu').slideUp();
		$(".cont-xs-nav").addClass("hidden");
	});
			
	//xs menu submenu
	$(".xs-nav .menu-item-has-children > a").append("<span class='xs-nav-menu-item-arrow' style='z-index: 99;'></span>");
	$('.xs-nav > .menu-item-has-children > a > .xs-nav-menu-item-arrow').click(function(event) {
		 event.preventDefault();
		$('.xs-nav .ul-sub-menu .ul-sub-menu').slideUp();
		$('.ul-sub-menu .menu-item-has-children .xs-nav-menu-item-arrow').removeClass('hidden');
		$('.xs-nav > .menu-item-has-children > a > .xs-nav-menu-item-arrow').not(this).parent().siblings('.ul-sub-menu').slideUp();
		$('.xs-nav > .menu-item-has-children > a > .xs-nav-menu-item-arrow').not(this).removeClass('hidden');
		$(this).parent().siblings('.ul-sub-menu').stop(true, true).slideToggle(400);
		$(this).addClass("hidden");
		return false;
	});
	$('.ul-sub-menu .menu-item-has-children .xs-nav-menu-item-arrow').click(function(event) {
		 event.preventDefault();
		$('.ul-sub-menu .menu-item-has-children .xs-nav-menu-item-arrow').not(this).parent().siblings('.ul-sub-menu').slideUp();
		$('.ul-sub-menu .menu-item-has-children .xs-nav-menu-item-arrow').not(this).removeClass('hidden');
		$(this).parent().siblings('.ul-sub-menu').stop(true, true).slideToggle(400);
		$(this).addClass("hidden");
		return false;
	});
	 
	//simulate background-size: cover for img tag
	$(".jquery-cover img").each(function() {
		$(this).cover();
		$(this).css("visibility", 'visible');
	});
	
	//fallback for .jquery-cover, if the image does not load
	$(".jquery-cover").each(function() {
		var $jquery_cover = $(this);
		if ($jquery_cover.find(".greenishCover").length) { } else {
			var $img = $jquery_cover.find('img').attr('src');
			$jquery_cover.css('background-image', 'url(' + $img + ')');
			$jquery_cover.addClass('section-bg');
		}
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

