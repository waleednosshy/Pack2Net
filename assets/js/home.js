$(document).ready(function() {

    // Home 01 swiper
    var animEndEv = 'webkitAnimationEnd animationend';
    var swiper1 = new Swiper(".swiper-container.homeswiper-01", {
        autoplay: {
            delay: 6000,
        },
        loop: true,
        effect: 'fade',
        speed: 1000,
        grabCursor: true,
        parallax: !0,
        autoplayDisableOnInteraction: false,
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        on: {
            slideChange: function() {
                var currentSlide = $(this.slides[this.activeIndex]);
                var elems = currentSlide.find(".animated")
                elems.each(function() {
                    var $this = $(this);
                    var animationType = $this.data('animation');
                    $this.addClass(animationType, 0).on(animEndEv, function() {
                        $this.removeClass(animationType);
                    });
                });
            }
        }
    });
    $(".homeswiper-01 .slideshow").mouseover(function() {
        swiper1.autoplay.stop();
    });
    $(".homeswiper-01 .slideshow").mouseleave(function() {
        swiper1.autoplay.start();
    });


    // Home 02 swiper
    var swiper2 = new Swiper(".homeswiper-02", {
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        speed: 800,
        loop: true,
        grabCursor: true,
        slidesPerView: 2,
        spaceBetween: 32,
        freeMode: true,
        breakpoints: {
            576: {
                slidesPerView: 3,
                spaceBetween: 32
            },
            992: {
                slidesPerView: 6,
                spaceBetween: 32
            }
        }
    });
    $(".homeswiper-02 .swipe-img-02").mouseover(function() {
        swiper2.autoplay.stop();
    });
    $(".homeswiper-02 .swipe-img-02").mouseleave(function() {
        swiper2.autoplay.start();
    });


});