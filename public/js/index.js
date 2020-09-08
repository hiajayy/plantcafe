$(document).ready(function() {
    $(".plants-slider").owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        margin: 16,
        navText: ['<a class="left">❮</a>', '<a class="right">❯</a>'],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            992: {
                items: 4
            }
        }
    });

    $(".testimonial_wrapper").owlCarousel({
        loop: true,
        margin: 16,
        navText: ['<a class="left">❮</a>', '<a class="right">❯</a>'],
        // nav:true,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            575: {
                items: 2
            },
            768: {
                items: 3
            }
        }
    });
    $(".hero-slider-wrapper").owlCarousel({
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        loop: false,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 10000,
        navText: ['<a class="left">❮</a>', '<a class="right">❯</a>'],
        responsive: {
            0: {
                dots: true,
                nav: false,
                items: 1
            },
            // 575: {
            //     item: 3,
            //     margin: 8
            // },
            992: {
                items: 1,
                dots: true,
                nav: true
            }
        }
    });

    $(".offers-slider-wrapper").owlCarousel({
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        loop: false,
        margin: 16,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            }
        }
    });

    var slidercontainer = $(".banner-slider");
    slidercontainer.owlCarousel({
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 10000,
        navText: ['<a class="left">❮</a>', '<a class="right">❯</a>'],
        items: 1,
        // nav: true,
        dots: true
    });

    slidercontainer.on("changed.owl.carousel", function(event) {
        // selecting the current active item
        var item = event.item.index - 2;
        // first removing animation for all captions
        $(".caption-text").removeClass("caption");
        $(".owl-item")
            .not(".cloned")
            .eq(item)
            .find(".caption-text")
            .addClass("caption");
    });
});
