<?php
/*
Template Name: opinion
*/
get_header();
?>

<?php //サブナビゲーション
    get_template_part( 'template-parts/sdgs/subnav', 'list' );
?>

<div class="main-contents">
    
    <?php
	    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
	    $posts_per_page = 1;
        $args = array(
            'post_type' => 'sdgs-opinion',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
        );
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ):
            echo '<section class="sdgs-post opinion">';
            while ( $the_query->have_posts() ): $the_query->the_post();
                $post = $the_query->post;
            ?>

            <section class="sdgs-post opinion">
                <div class="icatch"><img src="<?php echo ks_get_thumbnail($post->ID); ?>"></div>
                <div class="post_info">
                    <div class="aside">
                        <p class="number">SDGs Opinion <?php echo get_post_number('sdgs-opinion'); ?></p>
                        <hr class="arrow_bottom">
                        <p class="name_roman"><?php the_field('name_roman'); ?></p>
                        <p class="date"><?php echo date(('Y d.F'), strtotime(get_the_time('Y-m-d', $post->ID))); ?></p>
                    </div>
                    <div class="sperker_info">
                        <p class="name"><?php the_field('name'); ?></p>
                        <p class="group"><?php the_field('group'); ?></p>
                        <p class="role"><?php the_field('role'); ?></p>
                    </div>
                </div>

                <section class="post_content">
                    <h2 class="post_title"><?php echo str_replace(':br','<br>', get_the_title()); ?></h2>
                    <div class="post_description"><?php the_content(); ?></div>

                    <section class="section">
                        <h3 class="question"><span>Q1</span><p><?php the_field('q1'); ?></p></h3>
                        <div class="answer"><?php the_field('a1'); ?></div>
                        <?php $image = get_field('image1'); if($image){ ?>
                            <div class="section_image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"></div>
                            <?php if(get_field('caption1')){ ?><p class="caption"><?php the_field('caption1'); ?></p><?php } ?>
                        <?php } ?>
                    </section>

                    <section class="section">
                        <h3 class="question"><span>Q2</span><p><?php the_field('q2'); ?></p></h3>
                        <div class="answer"><?php the_field('a2'); ?></div>
                        <?php $image = get_field('image2'); if($image){ ?>
                            <div class="section_image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"></div>
                            <?php if(get_field('caption2')){ ?><p class="caption"><?php the_field('caption2'); ?></p><?php } ?>
                        <?php } ?>
                    </section>

                </section>
                
                <ul class="page_link">
                <?php 
                    // 現在何ページ目かを取得
                    $page = (get_query_var('page')) ? get_query_var('page') : 1;
                    //全ページ数
                    $pages = count( explode('<!--nextpage-->', $post->post_content) ) ;
                ?>

                <?php if ( $pages > 1 ) { ?>
                    <?php if ( $page == $pages ) { //最後のページの場合 ?>
                        <?php if ( $page == 2 ) { //全ページが２ページしかない場合 ?>
                            <li><a class="prev" href="<?php the_permalink(); ?>">prev page</a></li>
                        <?php } else { //２ページ以上の場合 ?>
                            <li><a class="prev" href="<?php the_permalink(); ?><?php echo $page - 1; ?>">prev page</a></li>
                        <?php } ?>
                    <?php } else { //最後のページではない場合 ?>
                        <?php if ( $page == 1 ) { //１ページ目の場合 ?>
                            <li><a class="next" href="<?php the_permalink(); ?><?php echo $page + 1; ?>">next page</a></li>
                        <?php } else { //１ページ目以外の場合 ?>
                            <?php if ( $page == 2 ) { //２ページ目の場合 ?>
                                <li><a class="prev" href="<?php the_permalink(); ?>">prev page</a></li>
                            <?php } else { //２ページ目以降の場合 ?>
                                <li><a class="prev" href="<?php the_permalink(); ?><?php echo $page - 1; ?>">prev page</a></li>
                            <?php } ?>
                            <li><a class="next" href="<?php the_permalink(); ?><?php echo $page + 1; ?>">next page</a></li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>

                </ul>


            </section>

        <?php
            endwhile;
            echo '</section>';
        else:
            echo '<h3>記事が登録されていません</h3>';
        endif;
        wp_reset_postdata();
        

    ?>

</div>
<!-- [/main-contents] -->
	
<?php
get_footer();
