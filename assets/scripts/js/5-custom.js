jQuery( document ).ready(function($) {
	
	var _app = window._app || {};
		
	_app.emptyParentLinks = function() {
			
		$('.menu li a[href="#"]').click(function(e) {
		    e.preventDefault ? e.preventDefault() : e.returnValue = false;
		});	
		
	};
	
	_app.fixed_nav_hack = function() {
		$(document).on('click', 'a#menu-toggle', function(){
			
			if ( $(this).hasClass('clicked') ) {
				$(this).removeClass('clicked');
				$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
			
			} else {
			
				$(this).addClass('clicked');
				$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
			
			}
			
		});
	
		$(document).on('click', '.js-off-canvas-overlay', function(){
			$('a#menu-toggle').removeClass('clicked');
			$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
		});

	}
	
	_app.testimonials = function() {
		if($('.testimonials').length) {
			const swiper = new Swiper('.testimonial-slider', {
				// Optional parameters
				loop: true,
				loopAdditionalSlides: 3,
				slidesPerView: 1,
				spaceBetween: 20,
				speed: 400,
			
				// If we need pagination
				pagination: {
					el: '.swiper-pagination',
				},
				
				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			});
		}
	}
			
	_app.init = function() {
		
		// Standard Functions
		_app.emptyParentLinks();
		_app.fixed_nav_hack();
		
		// Theme Functions
		_app.testimonials();
		
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});