<?php
/*
 * Template Name:teaser
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if (is_ipad()) : ?>
<meta name="viewport" content="width=1024">
<?php else: ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php endif; ?>
<title>2019 | 青年の日</title>
<meta name="description" content="「青年の日」は、毎年5月の第3日曜日を中心に身近な地域社会や世界の平和のために具体的な行動を行う日です。">
<meta name="keywords" content="2019, 青年の日">
<?php get_header(meta); ?>
	<meta name="format-detection" content="telephone=no">
<meta name="twitter:title" content="青年の日">
<meta name="twitter:description" content="世界が平和になりますように 人のことを思いやる人がふえますように まず私からやさしくなります（黙とう）">
<meta name="twitter:card" content="summary_large_image">
<meta property="og:url" content="http://www.kosei-kai.or.jp/youthday/" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/sns.jpg">
<meta http-equiv="Content-Style-Type" content="text/css;" />
<meta http-equiv="Content-Style-Type" content="text/javascript;" />

<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css" media="all">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.gif">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/webclip.png">

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"><\/script>')</script>

</head>
<body class="teaser">

	
	<div id="content" class="contents">
		<main class="main" role="main">
			<figure class="main-visual"><div id="js-main-visual" class="visual-scroll"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/main_visual.jpg" alt="第49 回の青年の日で投稿された活動風景"></div><figcaption>※第49 回の青年の日で投稿された活動風景です。</figcaption><div class="scroll-txt sp-only">You can scroll the image.<span></span><span></span><span></span></div></figure>

			<p class="img-open"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-open.svg" alt="「3月中旬に本オープン！」のお知らせ画像"></p>
			
<div class="main-inner">

<h1 class="h1"><span class="sub-tit"><span class="sub-tit-inner">infomation</span></span>実施要項のお知らせ</h1>

<ul class="down-list">
<li>『青年の日』の実施要項を下記よりダ<span class="txt-nowrap">ウンロードできます。</span><a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/pdf/seinen2019.pdf" class="btn-pdf" target="_blank"><span class="btn-inner">ダウンロード</span></a><span class="pdf-data">1.82MB</span></li>
			
	<li>『一食ユニセフ募金』の実施要項を下記よりダ<span class="txt-nowrap">ウンロードできます。</span><a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/pdf/unicef.pdf" class="btn-pdf" target="_blank"><span class="btn-inner">ダウンロード</span></a><span class="pdf-data">2.34MB</span></li>
			
	<li>『一食ユニセフ募金 事業レポート』を下記よりダ<span class="txt-nowrap">ウンロードできます。</span><a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/pdf/report.pdf" target="_blank" class="btn-pdf"><span class="btn-inner">ダウンロード</span></a><span class="pdf-data">4.46MB</span></li>
</ul>
</div>
			<!--/his_wrap-->


			
			</main>

	</div>
<footer>
<p class="btn-reader"><a href="https://get.adobe.com/jp/reader/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/pdf/acrobat_reader.png" alt="Get Adobe Acrobat Reader web button"><span class="inner-txt">PDFファイルをご覧になるには、Adobe Reader又はAcrobat Readerが必要です。<br class="pc-only">Adobe Readerの最新版はAdobeのサイトから無料でダウンロードできます。</span></a></p>
	
	<p class="copy">『青年の日』©2019 Rissho Kosei-kai</p>
</footer>

<!-- /wrapper -->
<script src="<?php echo get_template_directory_uri(); ?>/js/teaser.js"></script>
<script>
	$(document).ready(function () {
		$('img').attr('onmousedown', 'return false');
	$('img').attr('onselectstart', 'return false');
	$('img').attr('oncontextmenu', 'return false');
	});
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96038078-1', 'auto');
  ga('send', 'pageview');
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/instant.js" type="module"></script>
	</body>
</html>