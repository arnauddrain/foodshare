jQuery(document).ready(function($) {
    
	
	
	/***************** PARALLAX BLOCK ******************/

	var $window = $(window);
	var windowHeight = $window.height();
	
	$window.resize(function () {
		windowHeight = $window.height();
	});
	
	$.fn.parallax = function(xpos, speedFactor, outerHeight) {
		var $this = $(this);
		var getHeight;
		var firstTop;
		var paddingTop = 0;
		
		//get the starting position of each element to have parallax applied to it		
		$this.each(function(){
		    firstTop = $this.offset().top;
		});
		
		$window.resize(function () {
			$this.each(function(){
		  	    firstTop = $this.offset().top;
			});
		});
		
		$window.load(function(){
			$this.each(function(){
		  	    firstTop = $this.offset().top;
			}); 
		});
	 
	
		getHeight = function(jqo) {
			return jqo.outerHeight(true);
		};
		 
			
		// setup defaults if arguments aren't specified
		if (arguments.length < 1 || xpos === null) xpos = "50%";
		if (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
		if (arguments.length < 3 || outerHeight === null) outerHeight = true;
		
		// function to be called whenever the window is scrolled or resized
		function update(){
			var pos = $window.scrollTop();				
	
			$this.each(function(){
				var $element = $(this);
				var top = $element.offset().top;
				var height = getHeight($element);
				// Check if totally above or totally below viewport
				if (top + height < pos || top > pos + windowHeight) {
					return;
				}
	
				$this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");
			});
		}		
	
		$window.bind('scroll', update).resize(update);
		update();
	};
	
	if ($('.parallax-zone').length){
		$('.parallax-zone').each(function(){
			var $id = $(this).attr('id');
			$('#'+$id + ".parallax-zone").parallax("50%", 0.4);
		});
		
    }
    
    
    
    
    /***************** TEXT LOGO ******************/
    
    if ($('.text-logo').length){
    	var fontSize = $('.text-logo').css('font-size');
		$(".text-logo").fitText(1.1, { maxFontSize: fontSize });
    }
   
    
    
    
    /***************** AJAX SPINNER ******************/
	
	$.fn.spin.presets.garnish = {
	  lines: 11, // The number of lines to draw
	  length: 3, // The length of each line
	  width: 7, // The line thickness
	  radius: 15, // The radius of the inner circle
	  corners: 1, // Corner roundness (0..1)
	  rotate: 0, // The rotation offset
	  direction: 1, // 1: clockwise, -1: counterclockwise
	  color: '#aaa', // #rgb or #rrggbb or array of colors
	  speed: 1, // Rounds per second
	  trail: 60, // Afterglow percentage
	  shadow: false, // Whether to render a shadow
	  hwaccel: false, // Whether to use hardware acceleration
	  className: 'spinner', // The CSS class to assign to the spinner
	  zIndex: 2e9, // The z-index (defaults to 2000000000)
	  top: 'auto', // Top position relative to parent in px
	  left: 'auto' // Left position relative to parent in px
	}
	
	$('ul#mobileNav').slicknav({
		label: '',
		duration: 400,
		easingOpen: "easeOutExpo", //available with jQuery UI
		easingClose: "easeOutExpo",
		prependTo:'#mobileSlickNav'
	});
	
	
	
	
	/***************** AJAX FUNCTIONS ******************/

	if ($('.ajax-wrapper').length){
		$('.ajax-wrapper').each(function(){
			var thisContent = this.id;
			if (thisContent == 'schedule-block'){
				var event_category = $('.schedule-category').html();
				if (!event_category){ event_category = 0; }
				$(this).load(templateDir+'/ajax/'+thisContent+'.php',{'category':event_category},function(response, status, xhr){
				
				});
			} else {
				$(this).load(templateDir+'/ajax/'+thisContent+'.php',function(response, status, xhr){
				
				});
			}
		});
	}
	
	if ($('#schedule-block')){
	
		var currentlyLoadingSchedule = false;
		
		$('.fg-schedule-week-change').click(function(e){
		
			e.preventDefault();
			
			if (!currentlyLoadingSchedule){
				
				var event_category = $('.schedule-category').html();
				if (!event_category){ event_category = 0; }
			
				currentlyLoadingSchedule = true;
				$('#schedule-block').html('<div class="spinner"></div>');
				$('.spinner').spin('garnish');
				
				var weekToLoad = $(this).attr('data');
				
				$('#schedule-block').load(templateDir+'/ajax/schedule-block.php',{'first_day':weekToLoad,'category':event_category},function(response, status, xhr){
					var firstDay = new Date(weekToLoad);
					var nextWeek = new Date(firstDay.getTime() + 7 * 24 * 60 * 60 * 1000);
					var lastWeek = new Date(firstDay.getTime() - 7 * 24 * 60 * 60 * 1000);
				
					lastWeekYear = lastWeek.getFullYear();
					lastWeekDay = lastWeek.getDate();
					lastWeekMonth = lastWeek.getMonth() + 1;
					
					nextWeekYear = nextWeek.getFullYear();
					nextWeekDay = nextWeek.getDate();
					nextWeekMonth = nextWeek.getMonth() + 1;
					
					$('.fg-schedule-prev-week').attr('data',lastWeekYear+'/'+lastWeekMonth+'/'+lastWeekDay);
					$('.fg-schedule-next-week').attr('data',nextWeekYear+'/'+nextWeekMonth+'/'+nextWeekDay);
					currentlyLoadingSchedule = false;
				});
			}
			
		})
	}
	
	
	
	/***************** STICKY NAV ******************/
	nav = $('nav');
	topBar = $('#top-bar');
	headerHeight = $('header').height();
	
	if (topBar.length){
		headerHeight = headerHeight + 48;
	}
	
	if (nav.length && sticky_nav){
		$(window).scroll(function() {

			if($(window).scrollTop() >= headerHeight) {
				nav.addClass('fixed');
				$('body').addClass('sticky-nav');
			} else {
				nav.removeClass('fixed');
				$('body').removeClass('sticky-nav');
			}
			
		});
	}
    
    $('.dropdown').animate({opacity:0},0);
    
    $('nav ul > li').on('mouseenter', function() {
    	if($(this).find('> .dropdown').length) {
    		$(this).find('a').addClass('hovered');
    		if($.browser.msie && $.browser.version < 9) {
                $(this).find('> .dropdown').show().animate({opacity:1},0);
            } else {
                $(this).find('> .dropdown').show().stop().animate({opacity:1},150,'easeOutQuad');
            }
    	}
    }).on('mouseleave', function() {
    	if($(this).find('> .dropdown').length) {
    		$(this).find('a').removeClass('hovered');
    		if($.browser.msie && $.browser.version < 9) {
                $(this).find('> .dropdown').animate({opacity:0},0,function(){
                	$(this).hide();
                });
            } else {
                $(this).find('> .dropdown').stop().animate({opacity:0},150,'easeInQuad',function(){
                	$(this).hide();
                });
            }
    	}
    });
    
    
    
    
    /***************** FIELD CLEARING ******************/
    
    $(document).on('focusin', '.field', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});
    
    
    
    
    
    /***************** FITVIDS & FANCYBOX ******************/
     
    $('.page-content').fitVids();
    $('a.fancybox').fancybox();
    
    
    
    
    
    /***************** GALLERIES ON-RESIZE ******************/
    
    if (jQuery('.Collage').length){
    	var resizeTimer = null;
		$(window).bind('resize', function() {
		    $('.Collage .Image_Wrapper').css("opacity", 0);
		    if (resizeTimer) clearTimeout(resizeTimer);
		    resizeTimer = setTimeout(initCarousels, 400);
		});
	}
	
    
    
    
    /***************** INITIATE SLIDERS ******************/
	
	$(window).on('load', function(){
    	initCarousels();    	
    });
    
    
	
});



// cycle scroll galleries init
function initCarousels() {

	if (jQuery('.tweets-carousel').length){
		jQuery('.tweets-carousel').carouFredSel({
			auto: false,
			width: 1440,
			height: 'variable',
		    responsive: true,
		    items: {
		        visible: 1,
		        width: 1440,
		    },
		    scroll: {
		    	duration: 700,
		    	easing: 'easeInOutExpo'
		    }
		});
		
		jQuery('.tweets-carousel').on('mouseenter', function(){
			jQuery('.tweets-carousel').trigger('pause');
		}).on('mouseleave', function(){
			jQuery('.tweets-carousel').trigger('play');	
		});	
		jQuery('#recent-tweets .btn-prev').on('click', function(){
			jQuery('.tweets-carousel').trigger('prev', 1);
			return false;
		});
		jQuery('#recent-tweets .btn-next').on('click', function(){
			jQuery('.tweets-carousel').trigger('next', 1);
			return false;
		});
		
	}

	if (jQuery('.Collage').length){
		jQuery('.Collage').collageCaption().removeWhitespace().collagePlus({
            'targetHeight'    		: 400,
            'fadeSpeed'       		: 2000,
            'effect'          		: 'effect-2',
            'direction'       		: 'horizontal',
            'allowPartialLastRow'	: false
		});
		jQuery('.Collage a').magnificPopup({
			type:'image',
			mainClass: 'mfp-with-zoom', // this class is for CSS animation below
			zoom: {
				enabled: true, // By default it's false, so don't forget to enable it
				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function 
				opener: function(openerElement) {
					return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			},
			gallery: {
				enabled: true, // set to true to enable gallery
				preload: [0,2], // read about this option in next Lazy-loading section
				navigateByImgClick: true,
				arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
				tPrev: 'Previous (Left arrow key)', // title for left button
				tNext: 'Next (Right arrow key)', // title for right button
				tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
			}
		});
		
	}

}