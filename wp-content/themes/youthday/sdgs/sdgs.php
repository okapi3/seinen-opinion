<?php
/*
Template Name: sdgs
*/
get_header();
?>

<?php //サブナビゲーション
    get_template_part( 'template-parts/sdgs/subnav', 'list' );
?>

<div class="main-contents">
    <div class="goals-wrapper">
        <div class="goals-inner">
            <div class="goals">
                <div class="goals-icon-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_goal-icon.png" alt="青">
                </div>
                <div class="goals-icon-multiple">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_multiple-icon.png" alt="×">
                </div>
                <div class="goals-map">
                    <img id="mapimg" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_click-map.png" alt="" usemap="#17goal-map">
                    <map name="17goal-map">
                        <area shape="poly" alt="" class="map-trigger" coords="184,87, 207,92, 232,26, 209,20, 184,17, 184,87" data-id="01">
                        <area shape="poly" alt="" class="map-trigger" coords="216,96, 236,108, 284,56, 264,41, 242,30, 216,96" data-id="02">
                        <area shape="poly" alt="" class="map-trigger" coords="259,135, 321,101, 307,80, 290,63, 245,116, 259,135, 259,135" data-id="03">
                        <area shape="poly" alt="" class="map-trigger" coords="326,111, 263,143, 269,165, 339,159, 334,134, 326,111, 326,111" data-id="04">
                        <area shape="poly" alt="" class="map-trigger" coords="270,179, 268,198, 336,218, 341,179, 340,169, 270,175, 270,179, 270,179" data-id="05">
                        <area shape="poly" alt="" class="map-trigger" coords="265,208, 255,228, 312,271, 324,250, 333,227, 265,208" data-id="06">
                        <area shape="poly" alt="" class="map-trigger" coords="249,237, 232,253, 269,313, 289,297, 306,279, 249,237" data-id="07">
                        <area shape="poly" alt="" class="map-trigger" coords="260,318, 223,258, 202,267, 215,337, 239,329, 260,318, 260,318" data-id="08">
                        <area shape="poly" alt="" class="map-trigger" coords="192,269, 179,270, 168,269, 155,339, 179,341, 205,339, 192,269" data-id="09">
                        <area shape="poly" alt="" class="map-trigger" coords="158,268, 135,259, 98,319, 121,330, 145,337, 158,268" data-id="10">
                        <area shape="poly" alt="" class="map-trigger" coords="109,238, 53,281, 70,299, 90,314, 127,254, 109,238, 109,238" data-id="11">
                        <area shape="poly" alt="" class="map-trigger" coords="103,230, 92,208, 24,228, 34,251, 47,273, 103,230" data-id="12">
                        <area shape="poly" alt="" class="map-trigger" coords="87,179, 87,174, 17,168, 17,179, 21,218, 89,198, 87,179, 87,179" data-id="13">
                        <area shape="poly" alt="" class="map-trigger" coords="87,165, 95,143, 33,109, 23,132, 17,156, 87,165" data-id="14">
                        <area shape="poly" alt="" class="map-trigger" coords="100,132, 114,114, 67,62, 50,80, 36,101, 100,132" data-id="15">
                        <area shape="poly" alt="" class="map-trigger" coords="122,107, 142,95, 116,29, 94,40, 74,55, 122,107" data-id="16">
                        <area shape="poly" alt="" class="map-trigger" coords="151,92, 174,87, 174,17, 149,19, 125,26, 151,92" data-id="17">
                    </map>
                </div>
                <!-- [/map] -->
            </div>
            <!-- [/goals] -->

            <div class="goals-number-wrap">
                <div id="goals-number">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_num_01.png" alt="">
                </div>
            </div>
        </div>
        <!-- [/goals-inner] -->

        <div class="goals-contents-wrap">
            <div id="01" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">1 貧困をなくそう</h3>
                    <p class="goals-contents__txt">あらゆる場所で、<br>あらゆる形態の貧困に終止符を打つ</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_01.png" alt="">
                </div>
            </div>
            <div id="02" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">2 飢餓をゼロに</h3>
                    <p class="goals-contents__txt">飢餓に終止符を打ち、<br>食料の安定確保と栄養状態の改善を<br class="sp-only">達成するとともに、<br>持続可能な農業を推進する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_02.png" alt="">
                </div>
            </div>
            <div id="03" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">3 すべての人に健康と福祉を</h3>
                    <p class="goals-contents__txt">あらゆる年齢の<br class="sp-only">すべての人々の健康的な生活を確保し、<br>福祉を推進する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_03.png" alt="">
                </div>
            </div>
            <div id="04" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">4 質の高い教育をみんなに</h3>
                    <p class="goals-contents__txt">すべての人々に包摂的かつ<br class="sp-only">公平で質の高い教育を提供し、<br>生涯学習の機会を促進する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_04.png" alt="">
                </div>
            </div>
            <div id="05" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">5 ジェンダー平等を実現しよう</h3>
                    <p class="goals-contents__txt">ジェンダーの平等を達成し、<br>すべての女性と女児のエンパワーメントを図る</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_05.png" alt="">
                </div>
            </div>
            <div id="06" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">6 安全な水とトイレを世界中に</h3>
                    <p class="goals-contents__txt">すべての人に水と衛生へのアクセスと<br>持続可能な管理を確保する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_06.png" alt="">
                </div>
            </div>
            <div id="07" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">7 エネルギーをみんなに<br class="sp-only">そしてクリーンに</h3>
                    <p class="goals-contents__txt">すべての人々に手ごろで信頼でき、<br>持続可能かつ近代的なエネルギーへの<br class="sp-only">アクセスを確保する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_07.png" alt="">
                </div>
            </div>
            <div id="08" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">8 働きがいも経済成長も</h3>
                    <p class="goals-contents__txt">すべての人のための持続的、<br class="pc-only">包摂的かつ持続可能な経済成長、生産的な完全雇用および<br class="pc-only">ディーセント・ワーク（働きがいのある人間らしい仕事）を推進する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_08.png" alt="">
                </div>
            </div>
            <div id="09" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">9 産業と技術革新の<br class="sp-only">基盤をつくろう</h3>
                    <p class="goals-contents__txt">強靭なインフラを整備し、<br class="sp-only">包摂的で持続可能な産業化を推進するとともに、<br>技術革新の拡大を図る</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_09.png" alt="">
                </div>
            </div>
            <div id="10" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">10 人や国の不平等をなくそう</h3>
                    <p class="goals-contents__txt">国内および国家間の格差を是正する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_10.png" alt="">
                </div>
            </div>
            <div id="11" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">11 住み続けられるまちづくりを</h3>
                    <p class="goals-contents__txt">都市と人間の居住地を<br>包摂的、安全、強靭かつ持続可能にする</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_11.png" alt="">
                </div>
            </div>
            <div id="12" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">12 つくる責任つかう責任</h3>
                    <p class="goals-contents__txt">持続可能な消費と生産のパターンを確保する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_12.png" alt="">
                </div>
            </div>
            <div id="13" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">13 気候変動に具体的な対策を</h3>
                    <p class="goals-contents__txt">気候変動とその影響に立ち向かうため、<br>緊急対策を取る</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_13.png" alt="">
                </div>
            </div>
            <div id="14" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">14 海の豊かさを守ろう</h3>
                    <p class="goals-contents__txt">海洋と海洋資源を持続可能な開発に向けて保全し、<br>持続可能な形で利用する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_14.png" alt="">
                </div>
            </div>
            <div id="15" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">15 陸の豊かさも守ろう</h3>
                    <p class="goals-contents__txt">陸上生態系の保護、回復および持続可能な利用の推進、<br class="pc-only">森林の持続可能な管理、砂漠化への対処、<br class="pc-only">土地劣化の阻止および逆転、ならびに生物多様性損失の阻止を図る</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_15.png" alt="">
                </div>
            </div>
            <div id="16" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">16 平和と公正をすべての人に</h3>
                    <p class="goals-contents__txt">持続可能な開発に向けて平和で包摂的な社会を推進し、<br class="pc-only">すべての人に司法へのアクセスを提供するとともに、<br class="pc-only">あらゆるレベルにおいて効果的で責任ある包摂的な制度を構築する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_16.png" alt="">
                </div>
            </div>
            <div id="17" class="goals-contents">
                <div class="goals-contents__txt-area">
                    <h3 class="goals-contents__ttl">17 パートナーシップで <br class="sp-only">目標を達成しよう</h3>
                    <p class="goals-contents__txt">持続可能な開発に向けて実施手段を強化し、<br>グローバル ・パートナーシップを活性化する</p>
                </div>
                <div class="goals-contents__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/17goals/img_icon_17.png" alt="">
                </div>
            </div>
        </div>
        <!-- [/goals-contents-wrap] -->
    </div>
    <!-- [/goals-wrapper] -->
</div>

<?php
get_footer();
