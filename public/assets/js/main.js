(function ($) {
    "use strict";
    $(".others-option-for-responsive .dot-menu").on("click", function () {
        $(".others-option-for-responsive .container .container").toggleClass("active");
    });
    $('.mean-menu').meanmenu({
        meanScreenWidth: "1199"
    });
    $(".others-option .search-box i").on("click", function () {
        $(".search-overlay").toggleClass("search-overlay-active");
    });
    $(".search-overlay-close").on("click", function () {
        $(".search-overlay").removeClass("search-overlay-active");
    });
    $('.home-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        navText: []
    });
    $(".home-slides").on("translate.owl.carousel", function () {
        $(".main-banner-content .sub-title").removeClass("animated fadeInLeft").css("opacity", "0");
        $(".main-banner-content h1").removeClass("animated fadeInUp").css("opacity", "0");
        $(".main-banner-content .logo").removeClass("animated fadeInUp").css("opacity", "0");
        $(".main-banner-content h6").removeClass("animated fadeInDown").css("opacity", "0");
        $(".main-banner-content .default-btn").removeClass("animated fadeInLeft").css("opacity", "0");
        $(".main-banner-content .optional-btn").removeClass("animated fadeInRight").css("opacity", "0");
        $(".main-banner-image img").removeClass("animated fadeInUp").css("opacity", "0");
    });
    $(".home-slides").on("translated.owl.carousel", function () {
        $(".main-banner-content .sub-title").addClass("animated fadeInLeft").css("opacity", "1");
        $(".main-banner-content h1").addClass("animated fadeInUp").css("opacity", "1");
        $(".main-banner-content .logo").addClass("animated fadeInUp").css("opacity", "1");
        $(".main-banner-content h6").addClass("animated fadeInDown").css("opacity", "1");
        $(".main-banner-content .default-btn").addClass("animated fadeInLeft").css("opacity", "1");
        $(".main-banner-content .optional-btn").addClass("animated fadeInRight").css("opacity", "1");
        $(".main-banner-image img").addClass("animated fadeInUp").css("opacity", "1");
    });
    $('.banner-video-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        navText: ["<img src='../logo/panah_kanan.svg'>", "<img src='../logo/panah_kanan.svg'>"]
    });
    $('.popup-youtube').magnificPopup({
        disableOn: 320,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    function makeTimer() {
        var endTime = new Date("September 20, 2025 17:00:00 PDT");
        var endTime = (Date.parse(endTime)) / 1000;
        var now = new Date();
        var now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }
        $("#days").html(days + "<span>Days</span>");
        $("#hours").html(hours + "<span>Hours</span>");
        $("#minutes").html(minutes + "<span>Minutes</span>");
        $("#seconds").html(seconds + "<span>Seconds</span>");
    }
    setInterval(function () {
        makeTimer();
    }, 0);
    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip()
    });
    $(function () {
        $('.accordion').find('.accordion-title').on('click', function () {
            $(this).toggleClass('active');
            $(this).next().slideToggle('fast');
            $('.accordion-content').not($(this).next()).slideUp('fast');
            $('.accordion-title').not($(this)).removeClass('active');
        });
    });
    (function ($) {
        $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
        $('.tab ul.tabs li a').on('click', function (g) {
            var tab = $(this).closest('.tab'),
                index = $(this).closest('li').index();
            tab.find('ul.tabs > li').removeClass('current');
            $(this).closest('li').addClass('current');
            tab.find('.tab-content').find('div.tabs-item').not('div.tabs-item:eq(' + index + ')').slideUp();
            tab.find('.tab-content').find('div.tabs-item:eq(' + index + ')').slideDown();
            g.preventDefault();
        });
    })(jQuery);
    $('.partner-slides').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        autoplay: false,
        margin: 40,
        navText: ["<i class='flaticon-null'></i>", "<i class='flaticon-null'></i>"],
        responsive: {
            0: {
                items: 2,
                margin: 30,
            },
            576: {
                items: 3,
                margin: 30,
            },
            768: {
                items: 4,
            },
            992: {
                items: 5,
            }
        }
    });
    $('.top-team-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: false,
        margin: 30,
        navText: ["<i class='flaticon-null-4'></i>", "<i class='flaticon-null-4'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            }
        }
    });
    $('.featured-games-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: false,
        items: 1,
        navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"]
    });
    $('.products-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: false,
        margin: 30,
        navText: ["<i class='flaticon-null-4'></i>", "<i class='flaticon-null-4'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 4,
            }
        }
    });
    $('.blog-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        center: true,
        autoplayHoverPause: true,
        autoplay: false,
        margin: 30,
        navText: ["<i class='flaticon-left-chevron'></i>", "<i class='flaticon-null-3'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            }
        }
    });
    $('.blog-slides-two').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: false,
        margin: 30,
        navText: ["<i class='flaticon-null-4'></i>", "<i class='flaticon-null-4'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }
    });
    $('.article-image-slides').owlCarousel({
        loop: true,
        nav: true,
        items: 1,
        dots: false,
        autoplayHoverPause: true,
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"]
    });
    if ($('.wow').length) {
        var wow = new WOW({
            mobile: false
        });
        wow.init();
    }
    $('.games-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: false,
        margin: 30,
        navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }
    });
    $('.input-counter').each(function () {
        var spinner = jQuery(this),
            input = spinner.find('input[type="text"]'),
            btnUp = spinner.find('.plus-btn'),
            btnDown = spinner.find('.minus-btn'),
            min = input.attr('min'),
            max = input.attr('max');
        btnUp.on('click', function () {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
        btnDown.on('click', function () {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
    });
    var $grid = $('.magazine-items').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            columnWidth: '.grid-item'
        }
    });
    $(".newsletter-form").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            formErrorSub();
            submitMSGSub(false, "Please enter your email correctly.");
        } else {
            event.preventDefault();
        }
    });

    function callbackFunction(resp) {
        if (resp.result === "success") {
            formSuccessSub();
        } else {
            formErrorSub();
        }
    }

    function formSuccessSub() {
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function () {
            $("#validator-newsletter").addClass('hide');
        }, 4000)
    }

    function formErrorSub() {
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function () {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000)
    }

    function submitMSGSub(valid, msg) {
        if (valid) {
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }
    $(".newsletter-form").ajaxChimp({
        url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9",
        callback: callbackFunction
    });
    $(function () {
        $(window).on('scroll', function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $('.go-top').addClass('active');
            if (scrolled < 600) $('.go-top').removeClass('active');
        });
        $('.go-top').on('click', function () {
            $("html, body").animate({
                scrollTop: "0"
            }, 500);
        });
    });
}(jQuery));
