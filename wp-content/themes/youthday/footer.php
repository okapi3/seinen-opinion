<?php
/*
 * footer
 */
?>

</main>
<?php if (!is_page_template('form.php')) : ?>
<p class="js-btn-form-box  btn-form-box"><a href="<?php echo esc_url( home_url( '/form/' )); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/btn-form.svg" alt="投稿ボタン"></a></p>
<?php else : endif ; ?>
		</div>
		<!--/content-->

<?php get_template_part( 'template-parts/content', 'sidenav' ); ?>
<?php wp_footer(); ?>
<footer>
		<?php if ( is_home() || is_front_page() ) : ?>
<p class="btn-reader"><a href="https://get.adobe.com/jp/reader/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/pdf/acrobat_reader.png" alt="Get Adobe Acrobat Reader web button"><span class="inner-txt">PDFファイルをご覧になるには、Adobe Reader又はAcrobat Readerが必要です。<br class="pc-only">Adobe Readerの最新版はAdobeのサイトから無料でダウンロードできます。</span></a></p>
	<?php else : ?>
	<?php endif; ?>
	<p class="copy">『青年の日』©2020 Rissho Kosei-kai</p>
</footer>
<?php if(!is_page_template('gallery/gallery_photo.php')){ ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/lib.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<?php }else{ ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/common2.js"></script>
<?php } ?>
<script>
    document.createElement( "picture" );
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/picturefill.js"></script>
<?php if ( is_home() || is_front_page() ) : ?>
<?php elseif (is_page_template('timeline/timeline.php') || is_page_template('history/history.php')) : ?>
<script>
	$(function() {
		$('.js-btn-box-txt').hide();
$(".js-btn-box dt").on("click", function() {
  $(this).next().slideToggle();
	$(this).toggleClass("active");
});
	$('.post-ratings').on('click', function() {
           $(this).prev('.star').addClass('open').delay(1200).queue(function(next){
  $(this).removeClass('open');
  next();
});
		});
});
</script>
<?php elseif (is_page_template('sdgs/sdgs.php')) : ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/sdgs.js"></script>
<?php elseif (is_page_template('gallery/gallery_photo.php')) : ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.history.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/js-url.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquerypp.custom.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/gamma.js"></script>
	<script>
		jQuery( function () {
			var GammaSettings = {
				// order is important!
				viewport: [ {
					width: 1200,
					columns: 5
				}, {
					width: 900,
					columns: 4
				}, {
					width: 500,
					columns: 3
				}, {
					width: 320,
					columns: 2
				}, {
					width: 0,
					columns: 2
				} ]
			};
			Gamma.init( GammaSettings );
		} );

	</script>
<?php elseif (is_page_template('sidebar/about.php')) : ?>
<script>
	$(function () {
		$('body').addClass('ly-about');
	});
</script>
<?php elseif (is_page_template('form.php')) : ?>
<script>
	$(function () {
		$('body').addClass('ly-form');
	});
</script>
<?php elseif (is_page_template('use_timeline.php')) : ?>
<script>
	$(function () {
		$('body').addClass('ly-use-timeline');
	});
</script>
<?php elseif (is_page_template('linestamp.php')) : ?>
<!-- <script>
	$(function () {
		$('body').addClass('ly-linestamp');
	});
		 $(function(){
			$(".visu-snow").before().snowfall({flakeCount : 8, flakeIndex: "0", minSize: 4, maxSize: 6, minSpeed: 1, maxSpeed: 2, image : "/youthday/wp-content/themes/youthday/img/linestamp/sq_blue.gif"});
		});
			 $(function(){
			$(".visu-snow").before().snowfall({flakeCount : 12, flakeIndex: "0", minSize: 4, maxSize: 8, minSpeed: 1, maxSpeed: 1, image : "/youthday/wp-content/themes/youthday/img/linestamp/sq_red.gif"});
		});
				 $(function(){
			$(".visu-snow").before().snowfall({flakeCount : 8, flakeIndex: "0", minSize: 2, maxSize: 4, minSpeed: 1, maxSpeed: 2, image : "/youthday/wp-content/themes/youthday/img/linestamp/sq_yellow.gif"});
		});
					 $(function(){
			$(".visu-snow").before().snowfall({flakeCount : 6, flakeIndex: "10", minSize: 4, maxSize: 6, minSpeed: 1, maxSpeed: 1, image : "/youthday/wp-content/themes/youthday/img/linestamp/sq_yellow.gif"});
		});
						 $(function(){
			$(".visu-snow").before().snowfall({flakeCount : 4, flakeIndex: "0", minSize: 2, maxSize: 3, minSpeed: 1, maxSpeed: 3, image : "/youthday/wp-content/themes/youthday/img/linestamp/sq_purple.gif"});
		});
</script> -->
<?php else : ?><?php endif; ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-96038078-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>
