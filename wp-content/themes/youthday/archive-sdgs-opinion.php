<?php
/*
Template Name: opinion
*/
get_header();
?>

<?php //サブナビゲーション
    get_template_part( 'template-parts/sdgs/subnav', 'list' );
?>

<div class="main-contents opinion">
    
    <?php
	    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
	    $posts_per_page = 6;
        $args = array(
            'post_type' => 'sdgs-opinion',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
        );
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ):
            echo '<ul class="sdgs-posts-list opinion">';
            while ( $the_query->have_posts() ): $the_query->the_post();
                $url = get_the_permalink();
                echo '<li><div class="post-info">';
                echo '<div class="topics-title sp"><a href="'.$url.'"><h2>'.get_field('name').'</h2><p class="name_roman">'.get_field('name_roman').'</p><p class="term">'.get_field('group').' '.get_field('role').'</p></a></div>';
                echo '<div class="icatch sp"><a href="'.$url.'"><img src="'.ks_get_thumbnail($post->ID).'"></a></div>';
                echo '<p class="num"><span class="small">opinion</span><span class="number">'.get_post_number('sdgs-opinion').'</span></p>';
                echo '<p><span class="small">'.date('Y',strtotime($post->post_date)).'</span><span class="date">'.date('m.d',strtotime($post->post_date)).'</span></p>';
                echo '</div>';
                echo '<div class="pc">';
                echo '<a href="'.$url.'"><h2 class="pc_title">'.get_field('name').'</h2>';
                echo '<p class="name_roman">'.get_field('name_roman').'</p>';
                echo '<p class="term">'.get_field('group').' '.get_field('role').'</a></p>';
                echo '</div>';
                echo '<div class="icatch pc"><a href="'.$url.'"><img src="'.ks_get_thumbnail($the_query->post->ID).'" alt="'.$the_query->post->post_title.'"></a><div class="tag"><a href="'.$term_url.'"><hr class="tag-icon">'.$term->name.'</a></div></div>';
                echo '</li>';
                // echo '<li><div class="post-info">';
                // echo '<p><span class="small">opinion</span><span class="number">'.get_post_number('sdgs-opinion').'</span></p>';
                // echo '<p><span class="small">'.date('Y',strtotime($post->post_date)).'</span><span class="date">'.date('m.d',strtotime($post->post_date)).'</span></p>';
                // echo '</div>';
                // echo '<a href="'.$url.'"><h2>'.get_field('name').'</h2>';
                // echo '<p class="name_roman">'.get_field('name_roman').'</p>';
                // echo '<p class="term">'.get_field('group').' '.get_field('role').'</p>';
                // echo '<div class="icatch"><img src="'.ks_get_thumbnail($the_query->post->ID).'" alt="'.$the_query->post->post_title.'"></div></a>';
                // echo '</li>';
            endwhile;
            echo '</ul>';
        else:
            echo '<h3>記事が登録されていません</h3>';
        endif;
        wp_reset_postdata();
        
        pagenation($posts_per_page, 'sdgs-opinion');

    ?>

</div>
<!-- [/main-contents] -->
	
<?php
get_footer();
