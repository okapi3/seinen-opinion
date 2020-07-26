<?php
get_header();
?>
	
<?php //サブナビゲーション
    get_template_part( 'template-parts/sdgs/subnav', 'list' );
    global $post;
    $terms = get_the_terms($post->ID,'sdgs-topics-cat'); $term = $terms[0]; //カテゴリの取得
    $term_url = get_term_link($term->slug, 'sdgs-topics-cat');
?>

<div class="main-contents">
    <ul class="sdgs-posts-list single">
	    <li>
	    	<div class="post-info">
			    <p><span class="small">topics</span><span class="number"><?php echo get_post_number('sdgs-topics'); ?></span></p>
			    <p><span class="small"><?php echo date('Y',strtotime($post->post_date)); ?></span><span class="date"><?php echo date('m.d',strtotime($post->post_date)); ?></span></p>
			    <h2><?php echo $post->post_title; ?></h2>
		    </div>
	    </li>
    </ul>
	
	<article class="topics-content">
		<h2 class="sp"><?php echo $post->post_title; ?></h2>
		<div class="icatch">
			<?php 
				if(get_field('sub_image')){
					//追加画像があれば
					echo '<img src="'.get_field('sub_image').'">';
				}
				if($post->post_title==="［第一弾］SDGs関連動画"){
					echo '<img src="/youthday/wp-content/uploads/2020/05/200512_1.jpg">';
				}
			?>

		</div>
		<section class="content">
			<?php echo apply_filters('the_content', $post->post_content); ?>
			<div class="tag"><a href="<?php echo $term_url; ?>"><img src="<?php echo assets('img','/sdgs/icon_tag-b.svg',true); ?>"><?php echo $term->name; ?></a></div>
		</section>
	</article>
</div>
<!-- [/main-contents] -->

	<?php
get_footer();