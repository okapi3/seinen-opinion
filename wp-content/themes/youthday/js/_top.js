// var img_dir = "http://" + window.location.hostname + "/img/";
 $(function(){
function scrollDef() {
	$( ".visual-scroll" ).scrollLeft( 70 );
}
    $(window).on('load', function() {scrollDef();});
});

$(document).ready(function () {
		        //初期時のカウンターファイル読み込み
        //同じファイル名だと正常に読み込めないので、ランダムな数字を生成し、パラメータとして付けることで、ユニークな状態にしている。
        var randnum1 = Math.floor( Math.random() * 10000 );     
        jQuery("#btn01 span.count").load("/youthday/counter/count01.txt?r=" + randnum1);        
        //カウンター追加後の読み込み関数
        function func01(data){
                var randnum1 = Math.floor( Math.random() * 10000 );
                jQuery("#btn01 span.count").load("/youthday/counter/count01.txt?r=" + randnum1);
        }
		        //カウンター＋1追加処理
        jQuery('#btn01').click(function(e){
                //「param1」変数の値と書き込みファイル名の情報をもってpost.phpへ。その後、関数func01を実行
                jQuery.post("/youthday/counter/post.php" , {"param1": 'count01.txt'} , func01);
                jQuery("#btn01 span.count").load("/counter/count01.txt");
                jQuery("#count_btn").attr("disabled", false);
        });
    $(document).on('contextmenu',function(e){
        return false;
    });
	
		 $(function(){
			 var cnt = 0;
			 $(".button_wrap").on("click", function() {
				 cnt++;
				 $(".btn-ani").toggleClass("active",cnt%5==0),$(".btn-ani-inner").toggleClass("active",cnt%5==0);
			 });
			 });
	
	 $(function(){
			$("body").before().snowfall({
			// 雪の量 (数値)
			//    flakeCount : 50,
			flakeCount : 8,
			// 色 (RGB)
			flakeColor: "#000",
			// z-indexの値
			flakeIndex: "0",
			// 最小サイズ （数値）
			minSize: 6,
			// 最大サイズ（数値）
			maxSize: 16,
			// 最低速度（数値）
			minSpeed: 1,
			// 最高速度（数値）
			maxSpeed: 3,
			// 雪の形を丸にする（boolean）
			//   round : true,
			// 影をつける（boolean）
			//    shadow : false
			// 要素に積もらせる場合
			//    collection : "積もらせる要素",
			//    image : "画像へのパス"
			image : "http://www.kosei-kai.or.jp/youthday/wp-content/themes/youthday/img/top/sakura.png"
});
		});
});

/*ウェーブアニメーション*/
/*$(window).on('load resize', function() {
	$(function() { 
var ocean = document.getElementById("wave-block1"),
    waveWidth = 10,
    waveCount = Math.floor(window.innerWidth/waveWidth),
    docFrag = document.createDocumentFragment();

for(var i = 0; i < waveCount; i++){
  var wave = document.createElement("div");
  wave.className += " wave1";
  docFrag.appendChild(wave);
  wave.style.left = i * waveWidth + "px";
  wave.style.webkitAnimationDelay = (i/100) + "s";
}

ocean.appendChild(docFrag);
	});
		$(function() { 
var ocean = document.getElementById("wave-block2"),
    waveWidth = 10,
    waveCount = Math.floor(window.innerWidth/waveWidth),
    docFrag = document.createDocumentFragment();

for(var i = 0; i < waveCount; i++){
  var wave = document.createElement("div");
  wave.className += " wave2";
  docFrag.appendChild(wave);
  wave.style.left = i * waveWidth + "px";
  wave.style.webkitAnimationDelay = (i/100) + "s";
}

ocean.appendChild(docFrag);
	});
});*/
