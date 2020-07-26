//var img_dir = "http://" + window.location.hostname + "/wp-content/themes/youthday/images/";

$(function(){
    function scrollDef() {$( ".visual-scroll" ).scrollLeft( 70 );}
    $(window).on('load', function() {scrollDef();});
});

$(function () {
    var userAgent = navigator.userAgent;
    var UA_iPhone = (userAgent.indexOf('iPhone') > -1) ? true : false;
    var UA_iPad = (userAgent.indexOf('iPad') > -1) ? true : false;
    var touched = false;
    var touch_time = 0;
        //iPhone,iPadを判定
    if (UA_iPhone || UA_iPad) {
        $("a").bind({
            'touchstart mousedown': function (e) {
                touched = true;
                touch_time = 0;
                document.interval = setInterval(function () {
                    touch_time += 100;
                    // 短すぎるタップとロングタップ時の処理
                    if (touch_time >= 500 || touch_time < 100) {
                        e.preventDefault();
                    }
                }, 100);
            },
            'touchend mouseup mouseout': function (e) { // マウスが領域外に出たかどうか
                if (touched) {
                    // ちょうどいいタップ時の処理
                    if (100 < touch_time < 500) {
                        var link = $(this).attr("href");
                        var target = $(this).attr("target");
                        var linktype = link.substring(0, 1);
                        if (linktype != "#") {
                            if (target == "_blank") {
                                window.open(link);
                            } else {
                                location.href = link;
                            }
                        }
                    }
                }
                touched = false;
                clearInterval(document.interval);
                e.preventDefault();
            }
        });
//		$(function(){
//$("#js-main-visual img").bind("touchstart", touchHandler);
//	function touchHandler( event ) {
//		$('.main-visual').css('max-width', '100%!important;');
//			$('#js-main-visual img').css('width', '100%!important;');
//		$('#js-main-visual .visual-scroll').css('overflow-x', 'visible;');
//	}
//});
    };
});