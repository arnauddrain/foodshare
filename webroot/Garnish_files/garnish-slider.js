jQuery(document).ready(function($) {

	if ($('#slider').length){
	
		if ($('.image-slider-wrap').length){
			$('#slider').spin('garnish');
		}

		$(window).on('load', function(){
			initCycleCarousel();
			adjust_slides();
		});
		
		$('.carousel').on('mouseenter', function(){
			$('.text-slider').trigger('pause');
			$('.image-slider').trigger('pause');	
		}).on('mouseleave', function(){
			$('.text-slider').trigger('play');
			$('.image-slider').trigger('play');	
		});	
		$('#slider .btn-prev').on('click', function(){
			$('.text-slider').trigger('prev', 1);
			$('.image-slider').trigger('prev', 1);
			return false;
		});
		$('#slider .btn-next').on('click', function(){
			$('.text-slider').trigger('next', 1);
			$('.image-slider').trigger('next', 1);
			return false;
		});
		
		var $window = $(window);
		
		$window.resize(function () {
			adjust_slides();
		});
	
	}
	
	
});


function adjust_slides(){
	jQuery('#slider .text-slider').find('.slide').each(function(){
		SLIDER_height = jQuery('#slider').height();
		H2_height = jQuery(this).find('h2').height();
		P_height = jQuery(this).find('p').height();
		this_total_height = H2_height + P_height + 90;
		topPadding = (SLIDER_height - this_total_height) / 2;
		jQuery(this).css({'paddingTop':topPadding});
	});
}



// cycle scroll galleries init
function initCycleCarousel() {

	if ( jQuery('.text-slider').length ){
		
		jQuery('.text-slider').carouFredSel({
			auto: slider_auto_cycle_speed,
			width: 690,
		    responsive: true,
		    direction: "up",
		    items: {
		        visible: 1,
		        width: 690,
		    },
		    scroll: {
		    	duration: 700,
		    	easing: 'easeInOutExpo'
		    },
		    onCreate: function(data) {
		    	setTimeout(function(){
		    		jQuery('#slider .spinner').remove();
					jQuery('.text-slider-wrap').animate({'opacity':1},300);
				},100);
			}
		});
		
		jQuery('.image-slider').carouFredSel({
			auto: slider_auto_cycle_speed,
			width: 510,
		    responsive: true,
		    scroll: {
		    	duration: 700,
		    	easing: 'easeInOutQuad',
		    	fx: 'crossfade'
		    },
		    items: {
		        visible: 1,
		        width: 510,
		    },
		    onCreate: function(data) {
		    	setTimeout(function(){
					jQuery('.image-slider-wrap').animate({'opacity':1},300);
				},100);
			}
		});
	}
		
}