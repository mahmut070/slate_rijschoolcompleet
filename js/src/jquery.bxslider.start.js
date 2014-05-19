
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
	  infiniteLoop: true


	});


	$('.Offer-slider.bxslider').bxSlider({
	  minSlides: 2,
	  // randomStart: 'true',
	  startSlide: 5,
	  maxSlides: 3,
	  slideWidth: 500,
	  slideMargin: 40,
	  captions: true,
	  auto: true,
	  speed: 500,
	  infiniteLoop: true,
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
	  pause: 3000,
	  auto: true,
	  speed: 1500,
	  infiniteLoop: true,
	  hideControlOnEnd: true,
	  pager: false
	});
});