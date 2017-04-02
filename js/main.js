/** RESPONSIVE **/

var width = $(window).width();

$(document).ready(function() {
	responsivness();
	scrollAnimation();

	$(".anchor-link").each(function() {
		$(this).click(function(e) {
			e.preventDefault();
			var id = $(this).data('to');
		    $('html, body').animate({
		        scrollTop: $("#" + id).offset().top - 80
		    }, 200);
		});
	});
	
});

$(window).resize(function() {
	responsivness();
});

function responsivness() {
	var height = window.innerHeight;
	var width = window.innerWidth;

	if(height > 700)
		$('.fullpage').css({ 'height' : height });
	else
		$('.fullpage').css({ 'padding' : '50px 0' });
}

/** Scroll Animations **/
$(window).scroll(function() {

	var scroll = $(window).scrollTop();

	/** White Menu **/
	if(scroll > 30)
		$('.navbar').addClass('bg');
	else
		$('.navbar').removeClass('bg');

	scrollAnimation();
	
});

/** Animation on scroll **/
function scrollAnimation() {
	var scroll = $(window).scrollTop();

	$('.animation').each(function() {
		var el = $(this);
		var elPos = el.offset().top;

		var range = window.innerHeight - (window.innerHeight * 0.2);

		var min = elPos - range;
		var max = elPos + range;

		var delay = el.data('delay');
		if(delay === undefined)
			delay = 1;

		setTimeout(function() {
			if(scroll > min && scroll < max) 
				el.addClass('animated');
			else
				el.removeClass('animated');
		}, delay);
	});
}

/** Mobile Menu **/
$('#mobile-menu').on('click', function() {
	$('#navbar').fadeToggle();
});



