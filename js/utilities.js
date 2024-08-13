$(window).on("load", function () {
    $("html").removeClass("no-js");
    $("body").addClass("is-loaded");
    Modernizr.on("webp");
    
    
    if ($('.page-dei').length > 0) {
        var html_output = '';

        // Clear the jump links html
        $('.jump-links-wrapper ul').html('');

        // Grab each section title and build the html for the jump links
        $(".page-dei .anchor").each(function(){
            var self = $(this),
                anchorText = self.attr('section-title').trim(),
                anchorId = anchorText.toLowerCase().replace(/ /g, '-');
            
            html_output += '<li><a href="#' + anchorId + '">' + anchorText + '</a></li>';
        });

        // Add jump links to DOM
        $('.jump-links-wrapper ul').html(html_output);
    }
});

$(document).ready(function () {
    gsap.registerPlugin(ScrollTrigger);
    ScrollTrigger.config({ limitCallbacks: true });

    gsap.from(".esg__scroll-to-top", {
        scrollTrigger: {
        trigger: ".esg",
        start: "top -500",
        },
                opacity: 0,

      });

    $(".main-navigation .search").click(function (e) {
        e.preventDefault();
        $("body").toggleClass("search-active");
    });

    var filter_items;
    var current_filter_title;
    var active_filter_items;

    $(".news-items__filters li").click(function () {
        var filter_items =
            ".news-items__filters " + "." + $(this).attr("data-filter");
        var active_filter_items = ".news-items__results " + "." + $(this).attr("data-filter");
            var current_filter_title = $(this).find(".filter-item__title").html();
            $(".news-items__filters li").removeClass("is-active");
        $(this).addClass("is-active");
        $(".news-items__results .news-item").addClass("is-hidden");
        $(active_filter_items).removeClass("is-hidden");
        /* Adjust Results Header */
        $(".news-items__results h3").addClass("is-filtered");
        $(".news-items__results .adjusted-header").html("Filtered News:");
        $(".news-items__results .result-title__title").html(current_filter_title);
    });

    $(".news-items__filters .clear-filter-button").click(function (e) {
        $(this).parent().removeClass("is-active");
        $(".news-items__results .news-item").removeClass("is-hidden");
        $(".news-items__results .adjusted-header").html("");
        $(".news-items__results .result-title__title").html("");
        $(".news-items__results h3").removeClass("is-filtered");
        e.stopPropagation();
    });

    $(".news-items__results h3 .clear-filter-button").click(function () {
        $(".news-items__filters li").removeClass("is-active");
        $(".news-items__results .news-item").removeClass("is-hidden");
        $(".news-items__results .adjusted-header").html("");
        $(".news-items__results .result-title__title").html("");
        $(".news-items__results h3").removeClass("is-filtered");
    });

    /* BRAND GENRE FILTERING */

    ScrollTrigger.create({
        start: "top -80",
        end: 99999,
        toggleClass: { className: "page-is-scrolling", targets: "body" },
    });

    

    $(".mobile-menu-button").click(function () {
        $("body").toggleClass("menu-active");
    });

    $(".page-our-brands .brand__logo a").click(function (e) {
        e.preventDefault();
        $(".page-our-brands .brand").removeClass("brand--active");
        $(this).parent().parent().parent().addClass("brand--active");
    });
    $(".brgs .card").on('click', function () {
        var self = $(this),
            wasActive = false

        $(".brgs .card").each(function(){
            var that = $(this);
            if (that.hasClass("current-menu-parent")) {
                wasActive = true;
                exit;
            }
        });
        $(".brgs .card").removeClass("card--active");

        if (!wasActive) {
            self.addClass("card--active");
        }
    });
    $(".brgs .card").on('mouseover', function () {
        var self = $(this);
        $(".brgs .card").removeClass("card--active");
        self.addClass("card--active");
    });
    $(".brgs .card").on('mouseleave', function () {
        $(".brgs .card").removeClass("card--active");
    });

    ScrollTrigger.batch(
        ".fade-in-slide-up",
        {
            onEnter: (elements) => {
                gsap.from(elements, {
                    autoAlpha: 0,
                    y: 30,
                    duration: 1,
                    stagger: 0.15,
                    delay: 0.15,
                });
            },
            once: true,
        }
    );

    $(".brand-train-1").slick({
        autoplay: true,
        speed: 3500,
        infinite: true,
        slidesToShow: 6,
        variableWidth: true,
        useTransform: true,
        cssEase: "linear",
        arrows: false,
        centerMode: true,
        autoplaySpeed: 0,
        scrollPerPage: true,
        focusOnSelect: true,
        pauseOnHover: true,
    });

    $(".careers__slider--1").slick({
        autoplay: true,
        speed: 9500,
        infinite: true,
        slidesToShow: 3,
        variableWidth: true,
        useTransform: true,
        cssEase: "linear",
        arrows: false,
        autoplaySpeed: 0,
        scrollPerPage: true,
        pauseOnHover: false,
    });

    $(".careers__slider--2").slick({
        autoplay: true,
        speed: 11500,
        infinite: true,
        slidesToShow: 3,
        variableWidth: true,
        useTransform: true,
        cssEase: "linear",
        arrows: false,
        autoplaySpeed: 0,
        scrollPerPage: true,
        pauseOnHover: false,
    });

    $(".tabs").tabs({
        heightStyle: "content",
        classes: {
            "ui-tabs": "highlight",
        },
        beforeActivate: function (event, ui) {
            if( $(ui.newTab).find('a').attr('href').indexOf('#') != 0 ){ //check if it is hash link
              window.open($(ui.newTab).find('a').attr('href'), '_self');
            }
          }
    });

    gsap.to(".esg__wbd-shield", {
        yPercent: -200,
        ease: "none",
        scrollTrigger: {
            trigger: ".esg",
            start: "top top",
            end: "bottom bottom",
            scrub: true,
        },
    });

    if ($(window).width() >= 512) {
        if ($('.home .news-items').length > 0) {
            var news_slider = tns({
                container: ".home .news-items",
                items: 3,
                loop: false,
                gutter: 20,
                nav: false,
                responsive: {
                    810: {
                        items: 2,
                    },
                    1120: {
                        items: 3,
                    },
                },
            });
        }
        if ($('.home .spotlight-items').length > 0) {
            var spotlight_slider = tns({
                container: ".home .spotlight-items",
                items: 5,
                loop: false,
                gutter: 20,
                nav: false,
                responsive: {
                    810: {
                        items: 3,
                    },
                    1120: {
                        items: 5,
                    },
                },
            });
        }
        if ($('.page-dei .news-items').length > 0) {
            var dei_slider = tns({
                container: ".page-dei .news-items",
                items: 3,
                loop: false,
                gutter: 20,
                nav: false,
                responsive: {
                    512: {
                        items: 2,
                    },
                    1120: {
                        items: 3,
                    },
                },
            });
        }
    }
    
});
