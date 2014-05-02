
jQuery(document).ready(function($){
	$('.bxslider').bxSlider({
	  minSlides: 3,
	  maxSlides: 3,
	  slideWidth: 300,
	  slideMargin: 60,
	  captions: true,
	  auto: true,
	  speed: 2200
	});


	$('.Offer-slider.bxslider').bxSlider({
	  minSlides: 2,
	  maxSlides: 3,
	  slideWidth: 500,
	  slideMargin: 60,
	  captions: true,
	  auto: true,
	  speed: 2200
	});
});