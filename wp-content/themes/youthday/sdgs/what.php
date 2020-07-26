<?php
/*
Template Name: what
*/
get_header();
?>


<?php //サブナビゲーション
    get_template_part( 'template-parts/sdgs/subnav', 'list' );
?>


<div class="main-contents">

    <section class="whats">
        <div class="whats__container">
            <div class="whats-img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/whats/img_whats.png" alt="">
            </div>
            <div class="whats__inner">
                <p class="whats__txt">SDGsとは「Sustainable Development Goals（持続可能な開発目標）」の略称です。<br>2015年9月の国連サミットにおいて世界のリーダーたちは「持続可能な開発のための2030アジェンダ」を採択しました。その中に掲げられた、この地上のすべての人に普遍的に適用される17の具体的な目標がSDGsです。<br>2030年までに、あらゆる形態の貧困に終止符を打ち、不平等と闘い、気候変動に対処しながら、真に持続可能な「誰一人取り残さない」世界を築くための取り組みを進めてゆくことになりました。そうした世界各地の人々の生活の改善に向けた道を歩み出すうえで、SDGsは、すべての国とすべての市民による行動を必要とします。</p>
            </div>
        </div>
    </section>
    <!-- [/whats] -->

</div>
<!-- [/main-contents] -->

<?php
get_footer();
