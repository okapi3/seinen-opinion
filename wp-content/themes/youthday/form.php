<?php
/*
Template Name: form
*/
get_header();
?>

<h1 class="h1"><span class="sub-tit"><span class="sub-tit-inner">post</span></span>タイムラインへの投稿</h1>

<div class="main-inner">
<div class="post-box">
	
	<?php echo do_shortcode('[contact-form-7 id="40" title="post"]'); ?>
</div>
		<?php get_template_part('template-parts/content', 'gohonzon'); ?>

		</div>

		<?php
get_footer();