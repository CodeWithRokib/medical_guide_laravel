(function($) {
    "use strict";

    /*------------------------------------
        01. Menu
    ------------------------------------- */
    var win = $(window);
    var stic = $(".header-sticky");
    win.on('scroll', function() {
        var scroll = win.scrollTop();
        if (scroll < 245) {
            stic.removeClass("sticky");
        } else {
            stic.addClass("sticky");
        }
    });

    $('.main-menu nav').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: '.mobile-menu'
    });

    /*------------------------------------
        Menu-toggle
    ------------------------------------- */
    var tog = $('.menu-toggle');
    var mnav = $('.main-menu nav');
    tog.on('click', function() {
        if (tog.hasClass('is-active')) {
            mnav.removeClass('menu-open');
        } else {
            mnav.addClass('menu-open');
        }
    });

    /*------------------------------------
        02. Owl Carousel
    ------------------------------------- */
    $(".dental-owl-slider").owlCarousel({
        autoPlay: 8000,
        items: 1,
        slideSpeed: 500,
        pagination: true,
        navigation: false,
        loop: true,
        mouseDrag: true,
        singleItem: true,
        transitionStyle: "fade",
        transitionStyle: "fade",
        addClassActive: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });

    /*------------------------------------
        Team Carousel
    ------------------------------------- */
    $('.team-owl').owlCarousel({
        loop: true,
        autoPlay: false,
        smartSpeed: 2000,
        fluidSpeed: true,
        items: 4,
        responsiveClass: true,
        nav: false,
        margin: 30,
        pagination: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    });

    /*--------------------------------
    	Testimonial Slick Carousel
    -----------------------------------*/
    $('.testimonial-text-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: true,
        asNavFor: '.slider-nav'
    });

    /*------------------------------------
    	Testimonial Slick Carousel as Nav
    --------------------------------------*/
    $('.testimonial-image-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.testimonial-text-slider',
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '10px',
        responsive: [{
                breakpoint: 450,
                settings: {
                    dots: false,
                    slidesToShow: 3,
                    centerPadding: '0px',
                }
            },
            {
                breakpoint: 420,
                settings: {
                    autoplay: true,
                    dots: false,
                    slidesToShow: 1,
                    centerMode: false,
                }
            }
        ]
    });

    /*--------------------------
        03. Portfolio Isotope
    ---------------------------- */
    $('.grid').imagesLoaded(function() {

        // filter items on button click
        $('.portfolio-menu').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item',
            }
        });

    });

    $('.portfolio-menu button').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });

    /*--------------------------
        04. Magnific Popup
    ---------------------------- */
    $('.img-poppu').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*--------------------------
        05. Counter Up
    ---------------------------- */
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    });

    /*-------------------------------------------
    06. ScrollUp jquery
--------------------------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*--------------------------------
    	07. One Page Nav
    -----------------------------------*/
    var top_offset = $('.main-menu').height() - 38;
    $('.main-menu nav ul#nav').onePageNav({
        currentClass: 'active',
        scrollOffset: top_offset
    });
    
    
    /*---------------------
    chosen
    --------------------- */
    jQuery('.orderby').chosen({disable_search: true, width: "auto"});
    
    
    
    
    
    
    

})(jQuery);