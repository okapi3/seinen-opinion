<?php
/*
Template Name: topics
*/
get_header();
?>

<?php //サブナビゲーション
    get_template_part( 'template-parts/sdgs/subnav', 'list' );
?>

<div class="main-contents">
    
    <?php
	    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
	    $posts_per_page = 6;
        $args = array(
            'post_type' => 'sdgs-topics',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
        );
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ):
            echo '<ul class="sdgs-posts-list">';
            while ( $the_query->have_posts() ): $the_query->the_post();
                $terms = get_the_terms($the_query->post->ID,'sdgs-topics-cat'); $term = $terms[0]; //カテゴリの取得
                $term_url = get_term_link($term->slug, 'sdgs-topics-cat');
                $url = get_the_permalink();
                echo '<li><div class="post-info">';
                echo '<div class="topics-title sp"><a href="'.$url.'">'.$the_query->post->post_title.'</a></div>';
                echo '<div class="icatch sp"><a href="'.$url.'"><img src="'.ks_get_thumbnail($post->ID).'"></a><div class="tag"><a href="'.$term_url.'"><hr class="tag-icon">'.$term->name.'</a></div></div>';
                echo '<p><span class="small">topics</span><span class="number">'.get_post_number('sdgs-topics').'</span></p>';
                echo '<p><span class="small">'.date('Y',strtotime($post->post_date)).'</span><span class="date">'.date('m.d',strtotime($post->post_date)).'</span></p>';
                echo '</div>';
                echo '<h2><a href="'.$url.'">'.$the_query->post->post_title.'</a></h2>';
                echo '<div class="icatch pc"><a href="'.$url.'"><img src="'.ks_get_thumbnail($the_query->post->ID).'" alt="'.$the_query->post->post_title.'"></a><div class="tag"><a href="'.$term_url.'"><hr class="tag-icon">'.$term->name.'</a></div></div>';
                echo '</li>';
            endwhile;
            echo '</ul>';
        else:
            echo '<h3>記事が登録されていません</h3>';
        endif;
        wp_reset_postdata();
        
        pagenation($posts_per_page, 'sdgs-topics');

    ?>

</div>
<!-- [/main-contents] -->
	
<?php
get_footer();
