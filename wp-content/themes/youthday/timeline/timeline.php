<?php
/*
Template Name: timeline
*/
get_header();
?>


<h1 class="h1"><span class="sub-tit"><span class="sub-tit-inner">time line</span></span>タイムライン</h1>
<div class="toukou-box"><a href="<?php echo esc_url( home_url( '/form/' )); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/use_timeline/btn_toukou.png" alt="投稿する" class="toukou-box-btn"></a></div>
<?php $sticky = get_option('sticky_posts');?>
<?php //先頭固定表示
   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
   if(1===$paged && !empty($sticky)):
     $args = array(
 	   'category_name' => 'photo_gallery,movie_gallery,txt_only,history',
	   'post__in'  => $sticky
     );
     $the_query = new WP_Query( $args ); 
     $max_num_pages = $the_query->max_num_pages;
     if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :   $the_query->the_post();
?>
			<div  class="timeline-area">
					<div class="main-inner">

			<h2 class="h2"><span class="icnClip icnNo<?php echo esc_html( $post->icn_num); ?>"></span><span class="inner-tit"><?php the_title(); ?></span></h2>

<figure class="figure-timeline">
<?php if (in_category('photo_gallery') || in_category('history')) : ?>
<?php echo the_post_thumbnail('thumbnail'); ?>
<?php elseif (in_category('movie_gallery')) : ?>
<?php echo '<iframe style="border:none;" src="https://player.vimeo.com/video/' . esc_html( $post->post_movi) . '" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; ?>
<?php else : endif; ?></figure>
<div class="timeline-box">
<ul class="box-list">
<li><span class="star"></span><?php if(function_exists('the_ratings')) { the_ratings(); } ?></li>
<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/icn-time.svg" alt="投稿時間"><span class="inner-time"><?php the_time('Y.m.d') ?></span></li>
</ul>
<dl class="box-dl">
<dt class="box-tit">
<?php if ( $post->txt_title) : ?>
	『<?php echo esc_html( $post->txt_title);  ?>』
	<?php else : endif ; ?>
	</dt>
<dd><?php the_content() ?></dd>
</dl>
	</div>
<!--	/timeline-box-->

				</div>
				<!--/main-inner-->
			</div>
<!--/timeline-area-->
<?php endwhile; ?>
<?php endif; ?>	
<?php endif; ?>

<?php //先頭固定以外を表示
   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
   $args = array(
	 'category_name' => 'photo_gallery,movie_gallery,txt_only,history',
     'posts_per_page' => 20,
     'paged' => $paged,
     'post_type' => 'post',
	 'post__not_in' => $sticky
   );
   $the_query = new WP_Query( $args ); 
   $max_num_pages = $the_query->max_num_pages;
   if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>
			<div  class="timeline-area">
					<div class="main-inner">

			<h2 class="h2"><span class="icnClip icnNo<?php echo esc_html( $post->icn_num); ?>"></span><span class="inner-tit"><?php the_title(); ?></span></h2>

<figure class="figure-timeline">
<?php if (in_category('photo_gallery') || in_category('history')) : ?>
<?php echo the_post_thumbnail('thumbnail'); ?>
<?php elseif (in_category('movie_gallery')) : ?>
<?php echo '<iframe style="border:none;" src="https://player.vimeo.com/video/' . esc_html( $post->post_movi) . '" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; ?>
<?php else : endif; ?></figure>
<div class="timeline-box">
<ul class="box-list">
<li><span class="star"></span><?php if(function_exists('the_ratings')) { the_ratings(); } ?></li>
<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/icn-time.svg" alt="投稿時間"><span class="inner-time"><?php the_time('Y.m.d') ?></span></li>
</ul>
<dl class="box-dl">
<dt class="box-tit">
<?php if ( $post->txt_title) : ?>
	『<?php echo esc_html( $post->txt_title);  ?>』
	<?php else : endif ; ?>
	</dt>
<dd><?php the_content() ?></dd>
</dl>
	</div>
<!--	/timeline-box-->

				</div>
				<!--/main-inner-->
			</div>
<!--/timeline-area-->
<?php endwhile; ?>
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

				<p class="link-base"><a href="<?php echo esc_url( home_url( '/photo/' )); ?>">ギャラリー一覧へ</a></p>	

		

<?php
get_footer();
