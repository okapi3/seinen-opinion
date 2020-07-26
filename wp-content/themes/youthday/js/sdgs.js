
/* ---------------------------------------------
*   RWD Image Maps
--------------------------------------------- */
// クリッカブルマップ

$(document).ready(function() {
    $('img[usemap]').rwdImageMaps();
});

/* ---------------------------------------------
*   17goals
--------------------------------------------- */
// map コンテンツ変更

$(function() {

    clickMap();

    $(window).on('resize', function() {
        clickMap();
    });

    function clickMap() {
        if($(window).width() > 750) {
            $(function() {
            var $btn = $('.map-trigger');
            $btn.on('mouseenter', function() {
                var tagId = $(this).data('id');
                var imgmapUrl = "/youthday/wp-content/themes/youthday/img/17goals/img_click_"+tagId+".png";
                var imgnumUrl = "/youthday/wp-content/themes/youthday/img/17goals/img_num_"+tagId+".png";
                var goalNumber = $('#goals-number');
                var goalContents = $('.goals-contents');

                goalNumber.css({'opacity':'0'});
                goalContents.css({'opacity':'0'});

                $btn.removeClass('current');
                $('.goals-contents').removeClass('current');
                $(this).addClass('current');
                $('#' + tagId).addClass('current');
                goalNumber.stop().animate({opacity:'1',zIndex:'20'},500);
                goalContents.stop().animate({opacity:'1',zIndex:'20'},500);

                $('#mapimg').attr('src', imgmapUrl);
                //mapの画像変更
                goalNumber.children('img').attr('src', imgnumUrl);
                 //番号の画像変更
            });
        });
        } else {
            $(function() {
            var $btn = $('.map-trigger');
            $btn.on('click', function() {
                var tagId = $(this).data('id');
                var imgmapUrl = "/youthday/wp-content/themes/youthday/img/17goals/img_click_"+tagId+".png";
                var imgnumUrl = "/youthday/wp-content/themes/youthday/img/17goals/img_num_"+tagId+".png";
                var goalNumber = $('#goals-number');

                goalNumber.css({'opacity':'1'});

                $btn.removeClass('current');
                $('.goals-contents').removeClass('current');
                $(this).addClass('current');
                $('#' + tagId).addClass('current');

                $('#mapimg').attr('src', imgmapUrl);
                //mapの画像変更
                goalNumber.children('img').attr('src', imgnumUrl);
                 //番号の画像変更
            });
        });
        }
    }
});



