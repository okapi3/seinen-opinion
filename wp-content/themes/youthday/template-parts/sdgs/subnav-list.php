<div class="page-link">
    <ul class="page-link__list">
        <li class="page-link__list-item">
            <div class="page-link__list-inner">
                <a href="<?php echo ks_get_url_from_slug('sdgs'); ?>" class="page-link__list-link page-link__list-link--circle <?php ks_current_class('sdgs') ?>">SDGs</a>
            </div>
        </li>
        <li class="page-link__list-item">
            <div class="page-link__list-inner">
                <a href="<?php echo ks_get_url_from_slug('sdgs/mission'); ?>" class="page-link__list-link page-link__list-link--2 <?php ks_current_class('mission') ?>">our<br>mission</a>
            </div>
        </li>
        <li class="page-link__list-item">
            <h1 class="page-link__list-inner">
                <a href="<?php echo ks_get_url_from_slug('sdgs/what'); ?>" class="page-link__list-link page-link__list-link--3 <?php ks_current_class('what') ?>">What is<br>SDGs</a>
            </h1>
        </li>
        <li class="page-link__list-item">
            <div class="page-link__list-inner">
                <a href="<?php echo ks_get_url_from_slug('sdgs/17goals'); ?>" class="page-link__list-link page-link__list-link--4 <?php ks_current_class('17goals') ?>">17 goals</a>
            </div>
        </li>
        <li class="page-link__list-item">
            <div class="page-link__list-inner">
                <a href="<?php echo ks_get_url_from_slug('sdgs/opinion'); ?>" class="page-link__list-link page-link__list-link--5 <?php ks_current_class('opinion') ?>">opinion</a>
            </div>
        </li>
        <li class="page-link__list-item">
            <div class="page-link__list-inner">
                <a href="<?php echo ks_get_url_from_slug('sdgs/topics'); ?>" class="page-link__list-link page-link__list-link--6 <?php ks_current_class('topics') ?>">topics</a>
            </div>
        </li>
    </ul>

    <?php if (is_singular('sdgs-opinion') || is_tax( 'sdgs-opinion-cat' ) || is_archive( 'sdgs-opinion' ) || is_page('opinion')){ ?>
        <a class="other_opinion" href="<?php echo get_bloginfo('url'); ?>/sdgs-opinion/">
            <img src="<?php assets("img","opinion/icn_other.svg"); ?>">
            <p><span>その他の</span>opinion</p>
        </a>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>
            $(function(){
                $(document).on('scroll',function(){
                    if ($(this).scrollTop() > 50) {
                        $('.other_opinion').addClass('scrolled');
                    } else {
                        $('.other_opinion').removeClass('scrolled');
                    }
                });

            });
        </script>
    <?php } ?>
</div>

<!-- page-link__list-link--current -->