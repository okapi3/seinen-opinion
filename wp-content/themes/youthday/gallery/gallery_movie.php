<?php
/*
Template Name: gallery-movie
*/
get_header();
?>

<!--<h1 class="h1"><span class="sub-tit"><span class="sub-tit-inner">gallery</span></span>ギャラリー</h1>-->

				<div class="tab-btn">
					<?php wp_nav_menu( array('menu' => 'tab-btn' ) ); ?>
				</div>

<div class="tab-box-area">
<ul class="movie-list">
	<?php
   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
   $args = array(
	   'category_name' => 'movie_gallery,movie_gallery_only',
     'posts_per_page' => 10,
     'paged' => $paged,
     'post_type' => 'post'
   );
   $the_query = new WP_Query( $args ); 
   $max_num_pages = $the_query->max_num_pages;
   if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>

	<li><iframe class="movi-frame" src="https://player.vimeo.com/video/<?php echo esc_html( $post->post_movi); ?>" style="border:none;" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	<h2 class='movie-tit'><?php the_title(); ?></h2><p class='movie-txt'><?php the_content() ?></p></li>
	
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
</div>


<p class="link-base"><a href="<?php echo esc_url( home_url( '/timeline/' )); ?>">タイムラインへ</a></p>	


<?php
get_footer();

