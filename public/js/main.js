$(function(){
	'use strict';

	// preloader
	$(".preloader").fadeOut();

	// sidebar
	$('.sidebar').sideNav({
		edge: 'left'
	});

	// sidebar search on right
	$('.sidebar-right-search').sideNav({
		edge: 'right'
	});

	// sidebar cart on right
    $('.sidebar-right-cart').sideNav({
        edge: 'right'
    });

    // navbar on scroll
    $(window).on('scroll', function() {

        if ($(document).scrollTop() > 50) {

            $(".navbar-home").css({
                "box-shadow": "rgba(0, 0, 0, 0.12) 0px 0px 9px"
            });

        } else {

            $(".navbar-home").css({
                "transition": ".5s ease-out",
                "box-shadow": "none"
            });
        }

    });

	// slider
	$(".slide-show").owlCarousel({
		items: 1,
		stagePadding: 65,
    	loop: true,
    	dots: false,
    	margin: 10,
    	autoplay: true
	});

	// booking date
	$(".datepicker").pickadate();

	// booking time
	$(".timepicker").pickatime();

	// testimonial
	$(".testimonial-slide").owlCarousel({
		items: 1,
		navigation: true,
		slideSpeed: 1000,
		dots: true,
		paginationSpeed: 400,
		singleItem: true,
		loop: true,
		margin: 10
	});

	// product details slide
	$(".product-d-slide").owlCarousel({
		items: 1,
		loop: false,
		margin: 10,
	});

	// service modal
	$(".modal-service").modal({
		dismissible: false
	});
	
	// tabs
	$('ul.tabs').tabs();

	// collapse
	$('.collapsible').collapsible();

	// modal
	$(".modal6").modal();

});