var swiper = new Swiper('.swiper-container', {
	direction: 'vertical',
	mousewheel: true,
	/*
	autoplay: {
    	delay: 5000,
		disableOnInteraction: false,
	},
	*/
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});

$("a[href='#ontop']").click(function() {
	$("html, body").animate({ scrollTop: 0 }, "slow");
	return false;
});