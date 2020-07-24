/*! svg4everybody v2.1.0 | github.com/jonathantneal/svg4everybody */
!function (a, b) {
    "function" == typeof define && define.amd ? define([], function () {
        return a.svg4everybody = b()
    }) : "object" == typeof exports ? module.exports = b() : a.svg4everybody = b()
}(this, function () {
    function a(a, b) {
        if (b) {
            var c = document.createDocumentFragment(), d = !a.getAttribute("viewBox") && b.getAttribute("viewBox");
            d && a.setAttribute("viewBox", d);
            for (var e = b.cloneNode(!0); e.childNodes.length;) c.appendChild(e.firstChild);
            a.appendChild(c)
        }
    }

    function b(b) {
        b.onreadystatechange = function () {
            if (4 === b.readyState) {
                var c = b._cachedDocument;
                c || (c = b._cachedDocument = document.implementation.createHTMLDocument(""), c.body.innerHTML = b.responseText, b._cachedTarget = {}), b._embeds.splice(0).map(function (d) {
                    var e = b._cachedTarget[d.id];
                    e || (e = b._cachedTarget[d.id] = c.getElementById(d.id)), a(d.svg, e)
                })
            }
        }, b.onreadystatechange()
    }

    function c(c) {
        function d() {
            for (var c = 0; c < o.length;) {
                var i = o[c], j = i.parentNode;
                if (j && /svg/i.test(j.nodeName)) {
                    var k = i.getAttribute("xlink:href");
                    if (e) {
                        var l = document.createElement("img");
                        l.style.cssText = "display:inline-block;height:100%;width:100%", l.setAttribute("width", j.getAttribute("width") || j.clientWidth), l.setAttribute("height", j.getAttribute("height") || j.clientHeight), l.src = f(k, j, i), j.replaceChild(l, i)
                    } else if (h && (!g.validate || g.validate(k, j, i))) {
                        j.removeChild(i);
                        var p = k.split("#"), q = p.shift(), r = p.join("#");
                        if (q.length) {
                            var s = m[q];
                            s || (s = m[q] = new XMLHttpRequest, s.open("GET", q), s.send(), s._embeds = []), s._embeds.push({
                                svg: j,
                                id: r
                            }), b(s)
                        } else a(j, document.getElementById(r))
                    }
                } else ++c
            }
            n(d, 67)
        }

        var e, f, g = Object(c);
        f = g.fallback || function (a) {
            return a.replace(/\?[^#]+/, "").replace("#", ".").replace(/^\./, "") + ".png" + (/\?[^#]+/.exec(a) || [""])[0]
        }, e = "nosvg" in g ? g.nosvg : /\bMSIE [1-8]\b/.test(navigator.userAgent), e && (document.createElement("svg"), document.createElement("use"));
        var h, i = /\bMSIE [1-8]\.0\b/, j = /\bTrident\/[567]\b|\bMSIE (?:9|10)\.0\b/, k = /\bAppleWebKit\/(\d+)\b/,
            l = /\bEdge\/12\.(\d+)\b/;
        h = "polyfill" in g ? g.polyfill : i.test(navigator.userAgent) || j.test(navigator.userAgent) || (navigator.userAgent.match(l) || [])[1] < 10547 || (navigator.userAgent.match(k) || [])[1] < 537;
        var m = {}, n = window.requestAnimationFrame || setTimeout, o = document.getElementsByTagName("use");
        h && d()
    }

    return c
});
!function (a, b) {
    "function" == typeof define && define.amd ? define([], function () {
        return a.svg4everybody = b()
    }) : "object" == typeof exports ? module.exports = b() : a.svg4everybody = b()
}(this, function () {
    function a(a, b) {
        if (b) {
            var c = document.createDocumentFragment(), d = !a.getAttribute("viewBox") && b.getAttribute("viewBox");
            d && a.setAttribute("viewBox", d);
            for (var e = b.cloneNode(!0); e.childNodes.length;) c.appendChild(e.firstChild);
            a.appendChild(c)
        }
    }

    function b(b) {
        b.onreadystatechange = function () {
            if (4 === b.readyState) {
                var c = b._cachedDocument;
                c || (c = b._cachedDocument = document.implementation.createHTMLDocument(""), c.body.innerHTML = b.responseText, b._cachedTarget = {}), b._embeds.splice(0).map(function (d) {
                    var e = b._cachedTarget[d.id];
                    e || (e = b._cachedTarget[d.id] = c.getElementById(d.id)), a(d.svg, e)
                })
            }
        }, b.onreadystatechange()
    }

    function c(c) {
        function d() {
            for (var c = 0; c < l.length;) {
                var g = l[c], h = g.parentNode;
                if (h && /svg/i.test(h.nodeName)) {
                    var i = g.getAttribute("xlink:href");
                    if (e && (!f.validate || f.validate(i, h, g))) {
                        h.removeChild(g);
                        var m = i.split("#"), n = m.shift(), o = m.join("#");
                        if (n.length) {
                            var p = j[n];
                            p || (p = j[n] = new XMLHttpRequest, p.open("GET", n), p.send(), p._embeds = []), p._embeds.push({
                                svg: h,
                                id: o
                            }), b(p)
                        } else a(h, document.getElementById(o))
                    }
                } else ++c
            }
            k(d, 67)
        }

        var e, f = Object(c), g = /\bTrident\/[567]\b|\bMSIE (?:9|10)\.0\b/, h = /\bAppleWebKit\/(\d+)\b/,
            i = /\bEdge\/12\.(\d+)\b/;
        e = "polyfill" in f ? f.polyfill : g.test(navigator.userAgent) || (navigator.userAgent.match(i) || [])[1] < 10547 || (navigator.userAgent.match(h) || [])[1] < 537;
        var j = {}, k = window.requestAnimationFrame || setTimeout, l = document.getElementsByTagName("use");
        e && d()
    }

    return c
});


$(document).ready(function () {
    $(".accordion_head").click(function() {
      $(this).removeClass('coll-back');
      if ($('.accordion_body').is(':visible')) {
        $(".accordion_body").slideUp(300);
        $(".plusminus").text('+');
        $(this).removeClass('coll-back');
        $('.rmv-cls').removeClass('coll-back');
      }

      if($(this).next(".accordion_body").is(':visible')) {
        $(this).next(".accordion_body").slideUp(300);
        $(this).children(".plusminus").text('+');
        $(this).removeClass('coll-back');
      }else {
        $(this).next(".accordion_body").slideDown(300);
        $(this).children(".plusminus").text('');
        $(this).children(".plusminus").append('<hr class="hr-clc">');
        $(this).toggleClass('coll-back');
        $(this).addClass('rmv-cls');
      }
    });

    
    $(window).scroll(function() {
  if ($(document).scrollTop() > 720) {
    $('header').addClass('shrink');
  } else {
    $('header').removeClass('shrink');
  }
});
    setTimeout(function () {
        $('#trionnloader').hide();
    }, 1000);

    svg4everybody();

    var wow = new WOW(
        {
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: false
        }
    );
    wow.init();

    $('.awards-slider').bxSlider({
        mode: 'fade',
        pager: !1,
        controls: true,
        auto: !0,
        speed: 1500
    })

    $('.landing-wrapper,  .tagline-wrapper').css({
        'height': $(window).height()
    });
    $(window).on('resize', function () {
        $('.landing-wrapper,  .tagline-wrapper').css({
            'height': $(window).height()
        })
    });

    $(window).on('scroll', function () {

        if ($('.home, .tag-line').offset() !== undefined) {
            if (this.pageYOffset > $('.home').offset().top - this.innerHeight) {
                $('.home, .tag-line').css('height', 725 - (this.pageYOffset - ($('.tag-line').offset().top / 2)))
            }
        }

        if ($('.home2, .tag-line').offset() !== undefined) {
            if (this.pageYOffset > $('.home2').offset().top - this.innerHeight) {
                $('.home2, .tag-line').css('height', 725 - (this.pageYOffset - ($('.tag-line').offset().top / 2)))
            }
        }

        if ($('.moveup').length > 0) {
            if (this.pageYOffset > $(window).height()) {
                $('.moveup').fadeIn()
            } else {
                $('.moveup').fadeOut()
            }
        }

        headerRightMenu();

    });

    function headerRightMenu() {
        if ($('#blog-detail .blogs-photo').length > 0) {
            if (this.pageYOffset >= $('#blog-detail .blogs-photo').height()) {
                $('.header-right').removeClass('ms-active');
            } else {
                $('.header-right').addClass('ms-active');
            }
        }
        if ($('#project-detail .project-photo').length > 0) {
            if (this.pageYOffset >= $('#project-detail .project-photo').height()) {
                $('.header-right').removeClass('ms-active');
            } else {
                $('.header-right').addClass('ms-active');
            }
        }
    }

    headerRightMenu();

    if ($('.moveup').length > 0) {
        $('.moveup').on('click', function (event) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 600);
        });
    }


    hScrollC = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
        triggerElement: "#creativeId",
        triggerHook: "onEnter",
        offset: 203,
        duration: 250
    }).addTo(hScrollC);

    $('.header-right .menu-icon').on('click', function (event) {
        event.preventDefault();

        $('.main-navigation').toggleClass('main-navigation-open');
        if ($('body').hasClass('navigation-visible')) {
            $('body').removeClass('navigation-visible');
        } else {
            $('body').addClass('navigation-visible');
        }
    });

    if ($('.bte').length) {
        setTimeout(function () {
            $('.bte').addClass('btb-active')
        }, 1000)
    }

    if ($('.back-nav').length) {
        $('.back-nav').hover(
            function () {
                $('.line.btwe').addClass('run');
            },
            function () {
                $('.line.btwe').removeClass('run');
            }
        )
    }

    if ($('.projects-page .wowd').length || $('.contact-page .wowd').length || $('.blogs .wowd').length || $('.project-page .wowd').length || $('.project-form.wowd').length) {
        setTimeout(function () {
            var wow = new WOW(
                {
                    boxClass: 'wowd',
                    animateClass: 'animated',
                    offset: 0,
                    mobile: true,
                    live: false
                }
            );
            wow.init();
        }, 800)
    }

    if ($('.projects-list ul li').length) {
        $('.projects-list ul li').hover(
            function () {
                $(this).addClass('active');
            }, function () {
                $(this).removeClass('active');
            }
        )
    }

    if ($('.testi-slider').length) {
        $('.testi-slider').bxSlider({
            mode: 'fade',
            pager: !0,
            controls: !1,
            speed: 1000,
            autoDelay: 100,
            auto: 0
        });
    }
    if ($('#contactForm').length) {
        $("input, textarea").focus(function () {
            $(this).parent().addClass('active');
        });
        $("input, textarea").blur(function () {
            $(this).parent().removeClass('active');
        });
    }
    if ($('.project-form').length) {
        $(".start-project-type li").each(function () {
            $(this).find('input[type="checkbox"]').prop("checked") ? $(this).addClass("active") : $(this).removeClass("active")
        }),
        $('.start-project-type li, .start-project-type input[type="checkbox"]').click(function () {
            $(this).toggleClass("active")
        })
    }
	
	
  $('.main-slider').owlCarousel({
	  items: 1,
	  autoplay: true,
	  autoplayTimeout: 7000,
	  loop: true
  });
  $('.blog-slider').owlCarousel({
     items: 1,
    loop:true,
    nav:false,
    dots:false,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 1500,
    })
});

(function($) {
$(function() {
 
  $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active').siblings().removeClass('active')
      .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
  });
 
});
})(jQuery);