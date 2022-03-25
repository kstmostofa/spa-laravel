/*============================================================
* Template Name    : Lotus Spa - Beauty Creative HTML5 Template
* Author           : vThemes solution
* Version          : 1.0
* Created          : 1/June/2021;
* File Description : Main JS file of the template
===========================================================*/

/*====================== TABLE 
	1.PRELOADER
	2.GALLERT FILTER
	3.DROPDOWN MENU
	4.HOME	CAROUSEL
	5.STICKY ADD
    6.SCROLL DOWN SPEED
	7.MENU-BAR TOGGLE
	8.COUNTER
    9.SCROLL TOP SHOW
	10.SCROLL TOP CLICK EVENT
    11.TESTIMONIAL CAROUSEL
	12.BRAND CAROUSEL
    13.ZOOM IMAGE
	14.PARALLAX EFFECT
    15.DIGITAL CLOCK
 ========================*/
 
(function($)  {
	"use strict"; // Start of use strict
	
	// PRELOADER
    $(window).on('load', function() {
        $('.preloader').delay(3000).fadeOut('slow');
    });
	
	// INIT ISOTOPE	
	 var $grid = $('.tab-grid').isotope({
		itemSelector: '.item',
		'layoutMode': 'packery',
		isOriginLeft: true,
           stagger: 30,
           masonry: {
             percentPosition: true
           },	
	});
	
	// layout Isotope after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.isotope('layout');
	});

	// FILTER ITEMS ON BUTTON CLICK
	$('.filter-button-group').on( 'click', 'button', function() {
	  var filterValue = 
	  $(this).attr('data-filter');
	  $grid.isotope({ filter: filterValue });
	   $('.grid').isotope({
            hiddenStyle: {
              opacity: 0
            },
            visibleStyle: {
              opacity: 1
            }
          });
	});
	
	// CHANGE ACTIVE CLASS ON FILTER ISOTOPE BUTTONS
	$('.filter-button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
		$buttonGroup.find('.active').removeClass('active');
		$( this ).addClass('active');
	  });
	});
	
	//  DROPDOWN MENU
	$(".menu-bar ul li.drop-mobile-li").click(function() {
		  $('.custom-drop-mobile-menu').toggleClass('active');
	 });
	
	//  HOME CAROUSEL
	$('.home-inner').owlCarousel({
		loop: true,
		margin: -1,
		autoplay: true,
		dots: true,
		animateOut: 'fadeOut',
		nav: true,
		autoplayTimeout: 15000,
		smartSpeed: 1500,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			1170: {
				items: 1
			}
		}
	});
	
	// STICKY ADD
	window.onscroll = function() {myFunction()};
	var header = document.getElementById("navigation");
	var sticky = header.offsetTop;
	function myFunction() {
	  if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
	  } else {
		header.classList.remove("sticky");
	  }
	}
	
	// SCROLL DOWN SPEED
	$('a.page-scroll').on('click', function(e) {
		var targetHref = $(this).attr('href');
		var navbar = $('.navbar').outerHeight();
		$('html, body').animate({		
			scrollTop: $(targetHref).offset().top - navbar		
		}, 1250,  'easeInOutExpo');
		e.preventDefault();
	});
			
	// MENU-BAR TOGGLE
	$('.bar-toggler').on('click', function (e) {
		$('.menu-bar').toggleClass('active');
		$('.bar-toggler').toggleClass('change');
		e.preventDefault();
	});
	
    // COUNTER
    $('.counter-data').appear(function() {
		$('.counter-number').countTo();
    });	
	
    // SCROLL TOP SHOW
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	//SCROLL TOP CLICK EVENT
	$('.scrollToTop').on('click', function() {
		$('html, body').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	//  TESTIMONIAL CAROUSEL
	$('.inner-testimonial').owlCarousel({
		loop: true,
		margin: 15,
		autoplay: true,
		dots: false,
		nav: true,
		autoplayTimeout: 15000,
		smartSpeed: 1500,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			1170: {
				items: 1
			}
		}
	});
	
	//  BRAND CAROUSEL
	$('.brand-inner').owlCarousel({
		loop: true,
		margin: 0,
		autoplay: true,
		dots: false,
		nav: false,
		autoplayTimeout: 15000,
		smartSpeed: 1500,
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			},
			1170: {
				items: 5
			}
		}
	});
	
	//ZOOM IMAGE
	$('.img-zoom').magnificPopup({
		type: 'image'
	});
	
	//PARALLAX EFFECT
	$(".parallaxie").parallaxie({
		speed: 0.55,
		offset: 0,
	});
	
	//Clock
	var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36251023-1']);
	  _gaq.push(['_setDomainName', 'jqueryscript.net']);
	  _gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
		
})(jQuery);

	