<?php
/*
Template Name: gallery-photo
*/
get_header();
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/gamma.css" media="all">
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/modernizr.js"></script>
<noscript><link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/no_js.css"/></noscript>




<!--<h1 class="h1"><span class="sub-tit"><span class="sub-tit-inner">photo</span></span>写真</h1>-->
				<div class="tab-btn">
					<?php wp_nav_menu( array('menu' => 'tab-btn' ) ); ?>
				</div>

<div class="tab-box-area show">
					<div class="gamma-container gamma-loading" id="gamma-container">
						<ul class="gamma-gallery photo-list">
<?php
   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
   $args = array(
	 'category_name' => 'photo_gallery',
     'posts_per_page' => 40,
     'paged' => $paged,
     'post_type' => 'post'
   );
   $the_query = new WP_Query( $args ); 
   $max_num_pages = $the_query->max_num_pages;
   if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>

	<li>
		<div data-alt="<?php echo esc_html( $post->post_title); ?>" data-description="<h2 class='galleryTitle'><?php the_title(); ?><span class='galleryText'><?php $content = $post->post_content; $content = strip_tags($content); echo $content; ?></span></h2>">
			<div data-src="<?php 
if ( has_post_thumbnail() ) {
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
echo $large_image_url[0];
} else {
echo get_template_directory_uri() . '/img/common/noimages.gif';
} ?>">
			</div>
			<noscript>
				<?php the_post_thumbnail('full'); ?>
			</noscript>
		</div>
	</li>
	<?php endwhile; ?>
</ul>
<?php
//ページネーション表示前に$GLOBALS['wp_query']->max_num_pagesに値をセット
$GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
the_posts_pagination(array(
	'prev_text' => __( '前へ', 'textdomain' ),
	'next_text' => __( '次へ', 'textdomain' ),
	'screen_reader_text' => ' ',
));
wp_reset_postdata();
?>
<?php else: ?>
<p>まだ投稿がありません</p>
<?php endif; ?>		
						<div class="gamma-overlay"></div>
					</div>
					<!--gamma-container gamma-loading-->
</div>


<p class="link-base"><a href="<?php echo esc_url( home_url( '/timeline/' )); ?>">タイムラインへ</a></p>	

	</main>


</div>
<!-- /wrapper -->

<?php
get_footer();

