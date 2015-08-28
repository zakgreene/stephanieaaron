// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function($){

	// slideToggle speed
	speed = 200;

	/* trigger when page is ready */
	$(document).ready(function (){

		var wh = $(window).height();
		// var ww = $(window).width();
		// if (ww >= 600)
		$("section").css("min-height", wh);
	
		$("#bio h3").click( function() {
			$(this).next().slideToggle(speed);
		});

		$("a[href='#more']").click(function() {
			$(this).parent().parent().find(".more").slideToggle(speed);
			$(this).toggleClass("active");
		});

		$("#methods-list a[href='#more']").click( function() {
			$(this).parent().parent().toggleClass("active");
		});

		$("#process svg").hover( function() {
			var id = $(this).attr("id");

			$("h3#" + id + "-title").toggleClass("on");
		});


		// smooth scrolling

		$('footer a[href*=#]:not([href=#]), .site-title a').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
			    $('html,body').animate({
			      scrollTop: target.offset().top
			    }, 1000);
			    return false;
			  }
			}
		});


		// insert words list into intro

		$("#intro span.adjective").html($("#intro #adjectives"));
	
	});
	
	
	$(window).resize(function() {
		var wh = $(window).height();
		$("section").css("min-height", wh);
	});

	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		$("section").each( function() {
			
			if ($(this).attr("data-nav") != null)
				var section = $(this).attr("data-nav");
			else
				var section = $(this).attr("id");

			// if ($(this).offset().top <= scroll + 55) {
			// 	$(this).find("header.site-title").show();
			// 	$(this).find("header.site-title").css("position", "fixed");
			// 	$("footer nav a").removeClass("active");
			// 	$("footer nav a[href='#" + section + "']").addClass("active");
			// }
			// else {
			// 	$(this).find("header.site-title").hide();
			// 	$(this).find("header.site-title").css("position", "absolute");
			// 	// $("footer nav").find("a[href='#" + section + "']").removeClass("active");
			// }
		});
	});

})(window.jQuery);