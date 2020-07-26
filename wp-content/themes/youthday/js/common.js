
/* ---------------------------------------------
*   <body>クラス設定
--------------------------------------------- */
/**
 * <body>要素に、ユーザーのOS・デバイスとブラウザ等に関数情報をクラスとして付与する
 * OS・デバイス: ios, iphone, ipad, android, androidphone, androidtablet, windows, mac
 * ブラウザ: ie, edge, chrome, firefox, safari
 */
$(function() {
    'use strict';

    $('body').addClass(function() {
        var bodyClasses = '';

        // プラットフォーム判定
        if (is.ios()) {
            bodyClasses += ' ios';

            if (is.iphone()) {
                bodyClasses += ' iphone';
            } else if (is.ipad()) {
                bodyClasses += ' ipad';
            }
        } else if (is.android()) {
            bodyClasses += ' android';

            if (is.androidPhone()) {
                bodyClasses += ' androidphone';
            } else if (is.androidTablet()) {
                bodyClasses += ' androidtablet';
            }
        } else if (is.windows()) {
            bodyClasses += ' windows';
        } else if (is.mac()) {
            bodyClasses += ' mac';
        }

        // ブラウザ判定
        if (is.ie()) {
            bodyClasses += ' ie';

            if (is.ie(10)) {
                bodyClasses += ' ie10';
            } else if (is.ie(11)) {
                bodyClasses += ' ie11';
            }
        } else if (is.edge()) {
            bodyClasses += ' edge';
        } else if (is.chrome()) {
            bodyClasses += ' chrome';
        } else if (is.firefox()) {
            bodyClasses += ' firefox';
        } else if (is.safari()) {
            bodyClasses += ' safari';
        }

        return bodyClasses;
    });
});


// var img_dir = "http://" + window.location.hostname + "/img/";
$(document).ready(function () {
 $(function(){
    var $sideBotton = $('.nav-side-toggle');
    var $sideNav = $('.side-nav');
    $('#js-nav-side-toggle').click(function () {
        $sideBotton.toggleClass('open');
        $sideNav.toggleClass('open');
    });
     });
    
    $(function () {
function scrollMenuDef() {
        $( ".ly-report .nav-menu-scroll" ).scrollLeft( 150 );
    }
        $(window).on('load resize', function() {scrollMenuDef();});
function scrollMenuSub() {
            $( ".repArea .nav-menu-scroll" ).scrollLeft( 150 );
}
        $(window).on('load resize', function() {scrollMenuSub();});
        $('img').attr('onmousedown', 'return false');
    $('img').attr('onselectstart', 'return false');
    $('img').attr('oncontextmenu', 'return false');
});
$(function () {
    var ua = navigator.userAgent;
if(/iPhone|iPad|iPod/.test(ua)) {
  $("body").addClass("ios");
}
    });
    /*sns button*/
// カレントで判断しBodyにclass付与[Judge by menu and assign class to element]
    $(function () {
        var $menu1 = $('.nav-menu ul li:nth-child(1)').hasClass('current_page_item');
        var $menu2 = $('.nav-menu ul li:nth-child(2)').hasClass('current_page_item');
        var $menu3 = $('.nav-menu ul li:nth-child(3)').hasClass('current_page_item');
        var $menu4 = $('.nav-menu ul li:nth-child(4)').hasClass('current_page_item');
        var $menu5 = $('.nav-menu ul li:nth-child(5)').hasClass('current_page_item');
        var $menuSide1 = $('.side-nav-area ul li:nth-child(1)').hasClass('current_page_item');
        var $menuSide2 = $('.side-nav-area ul li:nth-child(2)').hasClass('current_page_item');
        var $menuSide3 = $('.side-nav-area ul li:nth-child(3)').hasClass('current_page_item');
        var $menuSide4 = $('.side-nav-area ul li:nth-child(4)').hasClass('current_page_item');
        var $menuSide5 = $('.side-nav-area ul li:nth-child(5)').hasClass('current_page_item');
        if ($menu1) {
            $('body').addClass('ly-top');
        } else if ($menu2) {
            $('body').addClass('ly-timeline');
        } else if ($menu3) {
            $('body').addClass('ly-gallery');
        } else if ($menu4) {
            $('body').addClass('ly-history');
        } else if ($menu5) {
            $('body').addClass('ly-report');        
        } else if ($menuSide1) {
            $('body').addClass('ly-seinen');
        } else if ($menuSide2) {
            $('body').addClass('ly-howto');
        } else if ($menuSide3) {
            $('body').addClass('ly-kotoba');
        } else if ($menuSide4) {
            $('body').addClass('ly-contract');
        } else if ($menuSide5) {
            $('body').addClass('ly-personal');
        } else {
            $('body').addClass('ly-etc');
        }
    });

$(function() {
    var topBtn = $('.js-btn-form-box');
    var headFix = $('header').scrollTop();
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            topBtn.fadeIn();
            topBtn.addClass("ani");
        } else {
            topBtn.fadeOut();
            topBtn.removeClass("ani");
        }
    });
});

});


/* ---------------------------------------------
*　　スムーススクロール
--------------------------------------------- */

if (!$("a").hasClass("mfp-inline")) {
$(function() {
    'use strict';

    $('a[href^="#"]').on('click.smoothScroll', function() {
        var href = $(this).attr('href');
        var $target;

        if (is.ie(9) || is.ie(10)) {
            $target = $(href === '#' ? 'body' : href);
        } else {
            $target = $(href === '#' ? 'html' : href);
        }

        var offset = 0;

        $target.velocity('scroll', {
            duration: 400,
            easing: 'swing',
            offset: offset
        });

        return false;
    });
});
}

/* ---------------------------------------------
*   ハンバーガー
--------------------------------------------- */

$(function() {
    var $body = $('body');
    var $trigger = $('.js-spmenu-trigger');
    var $content = $('.menu-gnav-container');
    var $overlay = $('.header-menu-overlay');
    var openClass = 'js-sp-menu-opened';

    $trigger.on('click.spmenu', function() {
        var isOpened = $body.hasClass(openClass);
        var contantAnimName = isOpened ? 'slideUp' : 'slideDown';
        var overlayAnimName = isOpened ? 'fadeOut' : 'fadeIn';
        var params = {
            duration: 500,
            easing: 'easeInOutQuart'
        };

        if (!$content.hasClass('velocity-animating')) {
            $body.toggleClass(openClass);
            $content.velocity('stop').velocity(contantAnimName, params);
            $overlay.velocity('stop').velocity(overlayAnimName, params);
        }

        return false;
    });
});

/* ---------------------------------------------
*   accordion
--------------------------------------------- */

$(function() {
    var $open = $('.lead-btn-open');
    var $close = $('.lead-btn-close');
    var $contents = $('.lead-open');

    $open.on('click', function() {
        $contents.slideDown();
    });

    $close.on('click', function() {
        $contents.slideUp();
    });
});

/* ---------------------------------------------
*   swiper
--------------------------------------------- */
$(function() {
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: true,
        effect: 'fade',
        speed: 2000,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });
});

/* ---------------------------------------------
*   popup
--------------------------------------------- */
$(function() {
    if($('.mfp-inline').length) {
        $('.mfp-inline').magnificPopup({
          type: 'inline',
      });
    }


    var hash = location.hash;
    console.log(hash);

    if(hash) {
        $.magnificPopup.open({
          items: {
            src: hash
            },
            type: 'inline',
        }, 0);
    }
});







