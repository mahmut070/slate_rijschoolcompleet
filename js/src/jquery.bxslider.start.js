
jQuery(document).ready(function($){
	$('.Review-slider.bxslider').bxSlider({
	  minSlides: 3,
	  maxSlides: 3,
	  slideWidth: 300,
	  slideMargin: 60,
	  captions: true,
	  auto: true,
	  speed: 800,
	  pause: 9000,
	  adaptiveHeight: true,
	  // preventDefaultSwipeX: true,
	  // touchEnabled:false,
	  infiniteLoop: true
	});

	$('.Offer-slider.bxslider').bxSlider({
	  minSlides: 3,
	  // randomStart:  'true',
	  startSlide: 5,
	  maxSlides: 3,
	  slideWidth: 500,
	  slideMargin: 40,
	  captions: true,
	  auto: true,
	  speed: 800,
	  infiniteLoop: true,
	  // touchEnabled:false,
	  pause: 7000,
	  // preventDefaultSwipeX: true,
	  pager: false
	});

	$('.Slider-slider.bxslider').bxSlider({
	  mode: 'fade',
	  minSlides: 1,
	  maxSlides: 1,
	  startSlide: 1,
	  //slideWidth: 1200,
	  slideMargin: 0,
	  // captions: true,
	  pause: 4000,
	  auto: true,
	  speed: 1500,
	  infiniteLoop: true,
	  hideControlOnEnd: true, 
	  touchEnabled:false,
	  pager: false
	});
});

$(window).resize(function() {
	renderRecensies();
});

$(document).ready(function(){
	renderRecensies();
});

function renderRecensies(){
	if ($(window).width() <= 800) {
		slider = $('.Review-slider.bxslider').bxSlider();
		slider.reloadSlider({
			minSlides: 1,
			maxSlides: 1,
			captions: true,
			auto: true,
			speed: 800,
			pause: 5000,
			infiniteLoop: true,
			preventDefaultSwipeX: true,
			// touchEnabled:false,
			// controls: true,
			pager: false
		});
	}

}