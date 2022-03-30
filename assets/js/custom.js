// Preloader
(function($) {
    $(window).on("load", function() {
        $(function() {
            $.each($('.preloader'), function() {
                new Preloader($(this));
            });
        });
        var Preloader = function(obj) {
            var _window = $(window),
                _obg = obj;
            var _onEvents = function() {
                    setTimeout(function() {
                        $('.preloader').addClass('loaded');
                        $("html").removeClass('overflow-hidden');
                    }, 100)
                },
                _init = function() {
                    _onEvents();
                };
            _init()
        };
    });
})(jQuery);


$(document).ready(function() {

    // This Year	
    document.getElementById("thisyear").innerHTML = new Date().getFullYear();


    // Input Autocomplete off	
    $("input").attr("autocomplete", "off");


    // Imgages Draggable off
    $('img').attr('draggable', false);
    $('img').attr('loading', 'lazy');
    $('a').attr('draggable', false);


    // SlideHeader
    (function() {
        var header = new Headroom(document.querySelector("header"), {
            offset: 400,
        });
        header.init();
    }());

    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height >= 300 && height <= 500) {
            $('header').addClass('headroom--between');
        } else {
            $('header').removeClass('headroom--between');
        }
    });


    // MetisMenu	
    $(".metismenu").metisMenu();
    $(function() {
        for (var nk = window.location, o = $(".metismenu a").filter(function() {
                    return this.href == nk;
                })
                .addClass("active")
                .parent()
                .addClass("");;) {
            if (!o.is("li")) break;
            o = o.parent()
                .addClass("")
                .parent()
                .addClass("");
        }
    });


    // Back To Top
    $(".back-to-top").click(function() {
        $("html,body").animate({
            scrollTop: 0
        }, 10);
    });


    // SVG
    $(function() {
        jQuery("img.svg").each(function() {
            var a = jQuery(this),
                e = a.attr("id"),
                i = a.attr("class"),
                t = a.attr("src");
            jQuery.get(t, function(t) {
                var r = jQuery(t).find("svg");
                void 0 !== e && (r = r.attr("id", e)), void 0 !== i && (r = r.attr("class", i + " replaced-svg")), r = r.removeAttr("xmlns:a"), a.replaceWith(r)
            }, "xml")
        })
    });


    // Parallax
    (function($) {
        var parallax = -0.2;
        var $bg_images = $(".section-parallax");
        var offset_tops = [];
        $bg_images.each(function(i, el) {
            offset_tops.push($(el).offset().top);
        });
        $(window).scroll(function() {
            var dy = $(this).scrollTop();
            $bg_images.each(function(i, el) {
                var ot = offset_tops[i];
                $(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
            });
        });
    })(jQuery);


    // Counter Up
    function inVisible(element) {
        var WindowTop = $(window).scrollTop();
        var WindowBottom = WindowTop + $(window).height();
        var ElementTop = element.offset().top;
        var ElementBottom = ElementTop + element.height();
        if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
            animate(element);
    }

    function animate(element) {
        if (!element.hasClass('ms-animated')) {
            var maxval = element.data('max');
            var html = element.html();
            element.addClass("ms-animated");
            $({
                countNum: element.html()
            }).animate({
                countNum: maxval
            }, {
                duration: 3000,
                easing: 'linear',
                step: function() {
                    element.html(Math.floor(this.countNum) + html);
                },
                complete: function() {
                    element.html(this.countNum + html);
                }
            });
        }
        if ($('.progress-bar').hasClass('ms-animated')) {
            $('.progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                })
        }
    }
    $(function() {
        $(window).scroll(function() {
            $("[data-max]").each(function() {
                inVisible($(this));
            });
        })
    });


    // Filters
    $('.filters ul li').click(function() {
        $('.filters ul li').removeClass('active');
        $(this).addClass('active');
        var data = $(this).attr('data-filter');
        var $grid = $(".grid-img").isotope();
        $grid.isotope({
            filter: data
        })
    });


    // Image Popup
    $('.image-popup').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });


});