// Navigation
var prev = 100,
	$window = $(window),
	nav = $('.menu'),
	brand = $('.brand'),
	mobile = $('.mobile-menu');

$window.on('scroll', function() {
	var scrollTop = $window.scrollTop();
	brand.toggleClass('hidden', scrollTop > prev);
	nav.toggleClass('hidden', scrollTop > prev);
	mobile.toggleClass('visible', scrollTop > prev);
	//prev = scrollTop;
});

$('.mobile-button').click(function() {
	$(this).toggleClass('open');
	$('.mobile-dropdown').slideToggle();
});

// Slider
var swiper = new Swiper('.swiper-container', {
	direction: 'vertical',
	//mousewheel: true,
	autoplay: {
    	delay: 5000,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});

// On top
$("a[href='#ontop']").click(function() {
	$('html, body').animate({ scrollTop: 0 }, 'slow');
	return false;
});
