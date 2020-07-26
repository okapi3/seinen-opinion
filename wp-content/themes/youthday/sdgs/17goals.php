<?php
/*
Template Name: 17goals
*/
get_header();
?>

<div class="page-link">
    <ul class="page-link__list">
        <li class="page-link__list-item">
            <a href="<?php echo home_url('/') ?>sdgs/" class="page-link__list-link page-link__list-link--circle">SDGs</a>
        </li>
        <li class="page-link__list-item">
            <a href="<?php echo home_url('/') ?>sdgs/mission/" class="page-link__list-link page-link__list-link--2">our<br>mission</a>
        </li>
        <li class="page-link__list-item">
            <a href="<?php echo home_url('/') ?>sdgs/what/" class="page-link__list-link page-link__list-link--3">What is<br>SDGs</a>
        </li>
        <li class="page-link__list-item">
            <a href="<?php echo home_url('/') ?>sdgs/17goals/" class="page-link__list-link page-link__list-link--current page-link__list-link--4">17 goals</a>
        </li>
        <li class="page-link__list-item">
            <div class="page-link__list-inner">
                <span class="page-link__list-link page-link__list-link--5">opinion</span>
                <!-- リンク有効にする場合はspanをaタグに変更 -->
            </div>
        </li>
        <li class="page-link__list-item">
            <div class="page-link__list-inner">
                <span class="page-link__list-link page-link__list-link--6">topics</span>
                <!-- リンク有効にする場合はspanをaタグに変更 -->
            </div>
        </li>
    </ul>
</div>

<div class="main-contents">

    <p class="sdg-txt">SDGsには17のゴールと、ターゲットと呼ばれる<br>各々の目標を達成するための<br class="pc-hide">より具体的な169の目標があります。</p>

    <div class="gole">
        <ul class="gole__list">
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal1">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_01.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal2">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_02.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal3">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_03.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal4">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_04.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal5">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_05.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal6">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_06.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal7">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_07.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal8">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_08.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal9">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_09.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal10">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_10.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal11">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_11.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal12">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_12.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal13">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_13.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal14">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_14.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal15">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_15.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal16">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_16.png" alt="">
                </a>
            </li>
            <li class="gole__list-item">
                <a class="gole__list-link" href="#goal17">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_17.png" alt="">
                </a>
            </li>
        </ul>
        <div class="gole__img pc-only">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_seventeen.png" alt="17 goles">
        </div>
    </div>
    <!-- [/gole] -->

    <div id="goal1" class="gole-detail gole-detail--1">
        <div class="gole-detail__container gole-detail__container--1">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_01.png" alt="貧困をなくそう">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">貧困をなくそう</h2>
                    <p class="gole-detail__upper-txt">あらゆる場所の<br>あらゆる形態の貧困を終わらせる</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">1.1</dt>
                    <dd class="gole-detail__target-txt">2030年までに、現在１日1.25ドル未満で生活する人々と定義されている極度の貧困をあらゆる場所で終わらせる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">1.2</dt>
                    <dd class="gole-detail__target-txt">2030年までに、各国定義によるあらゆる次元の貧困状態にある、すべての年齢の男性、女性、子どもの割合を半減させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">1.3</dt>
                    <dd class="gole-detail__target-txt">各国において最低限の基準を含む適切な社会保護制度及び対策を実施し、2030年までに貧困層及び脆弱層に対し十分な保護を達成する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">1.4</dt>
                    <dd class="gole-detail__target-txt">2030年までに、貧困層及び脆弱層をはじめ、すべての男性及び女性が、基礎的サービスへのアクセス、土地及びその他の形態の財産に対する所有権と管理権限、相続財産、天然資源、適切な新技術、マイクロファイナンスを含む金融サービスに加え、経済的資源についても平等な権利を持つことができるように確保する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">1.5</dt>
                    <dd class="gole-detail__target-txt">2030年までに、貧困層や脆弱な状況にある人々の強靱性（レジリエンス）を構築し、気候変動に関連する極端な気象現象やその他の経済、社会、環境的ショックや災害に暴露や脆弱性を軽減する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">1.a</dt>
                    <dd class="gole-detail__target-txt">あらゆる次元での貧困を終わらせるための計画や政策を実施するべく、後発開発途上国をはじめとする開発途上国に対して適切かつ予測可能な手段を講じるため、開発協力の強化などを通じて、さまざまな供給源からの相当量の資源の動員を確保する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">1.b</dt>
                    <dd class="gole-detail__target-txt">貧困撲滅のための行動への投資拡大を支援するため、国、地域及び国際レベルで、貧困層やジェンダーに配慮した開発戦略に基づいた適正な政策的枠組みを構築する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [1] -->

    <div id="goal2" class="gole-detail gole-detail--2">
        <div class="gole-detail__container gole-detail__container--2">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_02.png" alt="飢餓をゼロ">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">飢餓をゼロ</h2>
                    <p class="gole-detail__upper-txt">飢餓を終わらせ、食料安全保障及び栄養改善を実現し、<br class="pc-only">持続可能な農業を促進する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">2.1</dt>
                    <dd class="gole-detail__target-txt">2030年までに、飢餓を撲滅し、すべての人々、特に貧困層及び幼児を含む脆弱な立場にある人々が一年中安全かつ栄養のある食料を十分得られるようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">2.2</dt>
                    <dd class="gole-detail__target-txt">５歳未満の子どもの発育阻害や消耗性疾患について国際的に合意されたターゲットを2025年までに達成するなど、2030年までにあらゆる形態の栄養不良を解消し、若年女子、妊婦・授乳婦及び高齢者の栄養ニーズへの対処を行う。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">2.3</dt>
                    <dd class="gole-detail__target-txt">2030年までに、土地、その他の生産資源や、投入財、知識、金融サービス、市場及び高付加価値化や非農業雇用の機会への確実かつ平等なアクセスの確保などを通じて、女性、先住民、家族農家、牧畜民及び漁業者をはじめとする小規模食料生産者の農業生産性及び所得を倍増させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">2.4</dt>
                    <dd class="gole-detail__target-txt">2030年までに、生産性を向上させ、生産量を増やし、生態系を維持し、気候変動や極端な気象現象、干ばつ、洪水及びその他の災害に対する適応能力を向上させ、漸進的に土地と土壌の質を改善させるような、持続可能な食料生産システムを確保し、強靭（レジリエント）な農業を実践する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">2.5</dt>
                    <dd class="gole-detail__target-txt">2020年までに、国、地域及び国際レベルで適正に管理及び多様化された種子・植物バンクなども通じて、種子、栽培植物、飼育・家畜化された動物及びこれらの近縁野生種の遺伝的多様性を維持し、国際的合意に基づき、遺伝資源及びこれに関連する伝統的な知識へのアクセス及びその利用から生じる利益の公正かつ衡平な配分を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">2.a</dt>
                    <dd class="gole-detail__target-txt">開発途上国、特に後発開発途上国における農業生産能力向上のために、国際協力の強化などを通じて、農村インフラ、農業研究・普及サービス、技術開発及び植物・家畜のジーン・バンクへの投資の拡大を図る。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">2.b</dt>
                    <dd class="gole-detail__target-txt">ドーハ開発ラウンドの決議に従い、すべての形態の農産物輸出補助金及び同等の効果を持つすべての輸出措置の並行的撤廃などを通じて、世界の農産物市場における貿易制限や歪みを是正及び防止する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">2.c</dt>
                    <dd class="gole-detail__target-txt">食料価格の極端な変動に歯止めをかけるため、食料市場及びデリバティブ市場の適正な機能を確保するための措置を講じ、食料備蓄などの市場情報への適時のアクセスを容易にする。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [2] -->

    <div id="goal3" class="gole-detail gole-detail--3">
        <div class="gole-detail__container gole-detail__container--3">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_03.png" alt="すべての人に健康と福祉を">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">すべての人に健康と福祉を</h2>
                    <p class="gole-detail__upper-txt">あらゆる年齢の<br class="sp-only">すべての人々の健康的な生活を確保し、<br>福祉を推進する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.1</dt>
                    <dd class="gole-detail__target-txt">2030年までに、世界の妊産婦の死亡率を出生10万人当たり70人未満に削減する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.2</dt>
                    <dd class="gole-detail__target-txt">すべての国が新生児死亡率を少なくとも出生1,000件中12件以下まで減らし、5歳以下死亡率を少なくとも出生1,000件中25件以下まで減らすことを目指し、2030年までに、新生児及び5歳未満児の予防可能な死亡を根絶する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.3</dt>
                    <dd class="gole-detail__target-txt">2030年までに、エイズ、結核、マラリア及び顧みられない熱帯病といった伝染病を根絶するとともに肝炎、水系感染症及びその他の感染症に対処する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.4</dt>
                    <dd class="gole-detail__target-txt">2030年までに、非感染性疾患による若年死亡率を、予防や治療を通じて3分の1減少させ、精神保健及び福祉を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.5</dt>
                    <dd class="gole-detail__target-txt">薬物乱用やアルコールの有害な摂取を含む、物質乱用の防止・治療を強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.6</dt>
                    <dd class="gole-detail__target-txt">2020年までに、世界の道路交通事故による死傷者を半減させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.7</dt>
                    <dd class="gole-detail__target-txt">2030年までに、家族計画、情報・教育及び性と生殖に関する健康の国家戦略・計画への組み入れを含む、性と生殖に関する保健サービスをすべての人々が利用できるようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.8</dt>
                    <dd class="gole-detail__target-txt">すべての人々に対する財政リスクからの保護、質の高い基礎的な保健サービスへのアクセス及び安全で効果的かつ質が高く安価な必須医薬品とワクチンへのアクセスを含む、ユニバーサル・ヘルス・カバレッジ（UHC）を達成する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.9</dt>
                    <dd class="gole-detail__target-txt">2030年までに、有害化学物質、ならびに大気、水質及び土壌の汚染による死亡及び疾病の件数を大幅に減少させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.a</dt>
                    <dd class="gole-detail__target-txt">すべての国々において、たばこの規制に関する世界保健機関枠組条約の実施を適宜強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.b</dt>
                    <dd class="gole-detail__target-txt">主に開発途上国に影響を及ぼす感染性及び非感染性疾患のワクチン及び医薬品の研究開発を支援する。また、知的所有権の貿易関連の側面に関する協定(TRIPS協定)及び公衆の健康に関するドーハ宣言に従い、安価な必須医薬品及びワクチンへのアクセスを提供する。同宣言は公衆衛生保護及び、特にすべての人々への医薬品のアクセス提供にかかわる「知的所有権の貿易関連の側面に関する協定(TRIPS協定)」の柔軟性に関する規定を最大限に行使する開発途上国の権利を確約したものである。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.c</dt>
                    <dd class="gole-detail__target-txt">開発途上国、特に後発開発途上国及び小島嶼開発途上国において保健財政及び保健人材の採用、能力開発・訓練及び定着を大幅に拡大させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">3.d</dt>
                    <dd class="gole-detail__target-txt">すべての国々、特に開発途上国の国家・世界規模な健康危険因子の早期警告、危険因子緩和及び危険因子管理のための能力を強化する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [3] -->

    <div id="goal4" class="gole-detail gole-detail--4">
        <div class="gole-detail__container gole-detail__container--4">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_04.png" alt="質の高い教育をみんなに">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">質の高い教育をみんなに</h2>
                    <p class="gole-detail__upper-txt"> すべての人々への包摂的かつ公正な質の高い教育を提供し、<br class="pc-only">生涯学習の機会を促進する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.1</dt>
                    <dd class="gole-detail__target-txt">2030年までに、すべての子どもが男女の区別なく、適切かつ効果的な学習成果をもたらす、無償かつ公正で質の高い初等教育及び中等教育を修了できるようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.2</dt>
                    <dd class="gole-detail__target-txt">2030年までに、すべての子どもが男女の区別なく、質の高い乳幼児の発達支援、ケア及び就学前教育にアクセスすることにより、初等教育を受ける準備が整うようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.3</dt>
                    <dd class="gole-detail__target-txt">2030年までに、すべての子どもが男女の区別なく、手頃な価格で質の高い技術教育・職業教育及び大学を含む高等教育への平等なアクセスを得られるようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.4</dt>
                    <dd class="gole-detail__target-txt">2030年までに、技術的・職業的スキルなど、雇用、働きがいのある人間らしい仕事及び起業に必要な技能を備えた若者と成人の割合を大幅に増加させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.5</dt>
                    <dd class="gole-detail__target-txt">2030年までに、教育におけるジェンダー格差を無くし、障害者、先住民及び脆弱な立場にある子どもなど、脆弱層があらゆるレベルの教育や職業訓練に平等にアクセスできるようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.6</dt>
                    <dd class="gole-detail__target-txt">2030年までに、すべての若者及び大多数（男女ともに）の成人が、読み書き能力及び基本的計算能力を身に付けられるようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.7</dt>
                    <dd class="gole-detail__target-txt">2030年までに、持続可能な開発のための教育及び持続可能なライフスタイル、人権、男女の平等、平和及び非暴力的文化の推進、グローバル・シチズンシップ、文化多様性と文化の持続可能な開発への貢献の理解の教育を通して、すべての学習者が、持続可能な開発を促進するために必要な知識及び技能を習得できるようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.a</dt>
                    <dd class="gole-detail__target-txt">子ども、障害及びジェンダーに配慮した教育施設を構築・改良し、すべての人々に安全で非暴力的、包摂的、効果的な学習環境を提供できるようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.b</dt>
                    <dd class="gole-detail__target-txt">2020年までに、開発途上国、特に後発開発途上国及び小島嶼開発途上国、ならびにアフリカ諸国を対象とした、職業訓練、情報通信技術（ICT）、技術・工学・科学プログラムなど、先進国及びその他の開発途上国における高等教育の奨学金の件数を全世界で大幅に増加させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">4.c</dt>
                    <dd class="gole-detail__target-txt">2030年までに、開発途上国、特に後発開発途上国及び小島嶼開発途上国における教員養成のための国際協力などを通じて、資格を持つ教員の数を大幅に増加させる。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [4] -->

    <div id="goal5" class="gole-detail gole-detail--5">
        <div class="gole-detail__container gole-detail__container--5">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_05.png" alt="ジェンダー平等を実現しよう">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">ジェンダー平等を実現しよう</h2>
                    <p class="gole-detail__upper-txt">ジェンダー平等を達成し、<br class="pc-only">すべての女性及び女児のエンパワーメントを行う</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">5.1</dt>
                    <dd class="gole-detail__target-txt">あらゆる場所におけるすべての女性及び女児に対するあらゆる形態の差別を撤廃する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">5.2</dt>
                    <dd class="gole-detail__target-txt">人身売買や性的、その他の種類の搾取など、すべての女性及び女児に対する、公共・私的空間におけるあらゆる形態の暴力を排除する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">5.3</dt>
                    <dd class="gole-detail__target-txt">未成年者の結婚、早期結婚、強制結婚及び女性器切除など、あらゆる有害な慣行を撤廃する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">5.4</dt>
                    <dd class="gole-detail__target-txt">公共のサービス、インフラ及び社会保障政策の提供、ならびに各国の状況に応じた世帯・家族内における責任分担を通じて、無報酬の育児・介護や家事労働を認識・評価する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">5.5</dt>
                    <dd class="gole-detail__target-txt">政治、経済、公共分野でのあらゆるレベルの意思決定において、完全かつ効果的な女性の参画及び平等なリーダーシップの機会を確保する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">5.6</dt>
                    <dd class="gole-detail__target-txt">国際人口・開発会議（ICPD）の行動計画及び北京行動綱領、ならびにこれらの検証会議の成果文書に従い、性と生殖に関する健康及び権利への普遍的アクセスを確保する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">5.a</dt>
                    <dd class="gole-detail__target-txt">女性に対し、経済的資源に対する同等の権利、ならびに各国法に従い、オーナーシップ及び土地その他の財産、金融サービス、相続財産、天然資源に対するアクセスを与えるための改革に着手する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">5.b</dt>
                    <dd class="gole-detail__target-txt">女性のエンパワーメント促進のため、ICTをはじめとする実現技術の活用を強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">5.c</dt>
                    <dd class="gole-detail__target-txt">ジェンダー平等の促進、ならびにすべての女性及び女子のあらゆるレベルでのエンパワーメントのための適正な政策及び拘束力のある法規を導入・強化する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [5] -->

    <div id="goal6" class="gole-detail gole-detail--6">
        <div class="gole-detail__container gole-detail__container--6">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_06.png" alt="ジェンダー平等を実現しよう">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">安全な水とトイレを世界中に</h2>
                    <p class="gole-detail__upper-txt">すべての人々の水と衛生の利用可能性と<br class="pc-only">持続可能な管理を確保する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">6.1</dt>
                    <dd class="gole-detail__target-txt">2030年までに、すべての人々の、安全で安価な飲料水の普遍的かつ平等なアクセスを達成する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">6.2</dt>
                    <dd class="gole-detail__target-txt">2030年までに、すべての人々の、適切かつ平等な下水施設・衛生施設へのアクセスを達成し、野外での排泄をなくす。女性及び女児、ならびに脆弱な立場にある人々のニーズに特に注意を向ける。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">6.3</dt>
                    <dd class="gole-detail__target-txt">2030年までに、汚染の減少、投棄の廃絶と有害な化学物・物質の放出の最小化、未処理の排水の割合半減及び再生利用と安全な再利用の世界的規模で大幅に増加させることにより、水質を改善する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">6.4</dt>
                    <dd class="gole-detail__target-txt">2030年までに、全セクターにおいて水利用の効率を大幅に改善し、淡水の持続可能な採取及び供給を確保し水不足に対処するとともに、水不足に悩む人々の数を大幅に減少させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">6.5</dt>
                    <dd class="gole-detail__target-txt">2030年までに、国境を越えた適切な協力を含む、あらゆるレベルでの統合水資源管理を実施する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">6.6</dt>
                    <dd class="gole-detail__target-txt">2020年までに、山地、森林、湿地、河川、帯水層、湖沼を含む水に関連する生態系の保護・回復を行う。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">6.a</dt>
                    <dd class="gole-detail__target-txt">2030年までに、集水、海水淡水化、水の効率的利用、排水処理、リサイクル・再利用技術など、開発途上国における水と衛生分野での活動と計画を対象とした国際協力と能力構築支援を拡大する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">6.b</dt>
                    <dd class="gole-detail__target-txt">水と衛生に関わる分野の管理向上への地域コミュニティの参加を支援・強化する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [6] -->

    <div id="goal7" class="gole-detail gole-detail--7">
        <div class="gole-detail__container gole-detail__container--7">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_07.png" alt="エネルギーをみんなに そしてクリーンに">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">エネルギーをみんなに <br class="pc-only">そしてクリーンに</h2>
                    <p class="gole-detail__upper-txt">すべての人々の、安価かつ信頼できる<br class="pc-only">持続可能な近代的エネルギーへのアクセスを確保する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">7.1</dt>
                    <dd class="gole-detail__target-txt">2030年までに、安価かつ信頼できる現代的エネルギーサービスへの普遍的アクセスを確保する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">7.2</dt>
                    <dd class="gole-detail__target-txt">2030年までに、世界のエネルギーミックスにおける再生可能エネルギーの割合を大幅に拡大させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">7.3</dt>
                    <dd class="gole-detail__target-txt">2030年までに、世界全体のエネルギー効率の改善率を倍増させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">7.a</dt>
                    <dd class="gole-detail__target-txt">2030年までに、再生可能エネルギー、エネルギー効率及び先進的かつ環境負荷の低い化石燃料技術などのクリーンエネルギーの研究及び技術へのアクセスを促進するための国際協力を強化し、エネルギー関連インフラとクリーンエネルギー技術への投資を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">7.b</dt>
                    <dd class="gole-detail__target-txt">2030年までに、各々の支援プログラムに沿って開発途上国、特に後発開発途上国及び小島嶼開発途上国、内陸開発途上国のすべての人々に現代的で持続可能なエネルギーサービスを供給できるよう、インフラ拡大と技術向上を行う。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [7] -->

    <div id="goal8" class="gole-detail gole-detail--8">
        <div class="gole-detail__container gole-detail__container--8">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_08.png" alt="働きがいも経済成長も">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">働きがいも経済成長も</h2>
                    <p class="gole-detail__upper-txt">包摂的かつ持続可能な経済成長及びすべての人々の完全かつ生産的な雇用と働きがいのある人間らしい雇用(ディーセント・ワーク)を促進する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.1</dt>
                    <dd class="gole-detail__target-txt">各国の状況に応じて、一人当たり経済成長率を持続させる。特に後発開発途上国は少なくとも年率7%の成長率を保つ。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.2</dt>
                    <dd class="gole-detail__target-txt">高付加価値セクターや労働集約型セクターに重点を置くことなどにより、多様化、技術向上及びイノベーションを通じた高いレベルの経済生産性を達成する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.3</dt>
                    <dd class="gole-detail__target-txt">生産活動や適切な雇用創出、起業、創造性及びイノベーションを支援する開発重視型の政策を促進するとともに、金融サービスへのアクセス改善などを通じて中小零細企業の設立や成長を奨励する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.4</dt>
                    <dd class="gole-detail__target-txt">2030年までに、世界の消費と生産における資源効率を漸進的に改善させ、先進国主導の下、持続可能な消費と生産に関する10カ年計画枠組みに従い、経済成長と環境悪化の分断を図る。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.5</dt>
                    <dd class="gole-detail__target-txt">2030年までに、若者や障害者を含むすべての男性及び女性、完全かつ生産的な雇用及び働きがいのある人間らしい仕事、ならびに同一労働同一賃金を達成する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.6</dt>
                    <dd class="gole-detail__target-txt">2020年までに、就労、就学及び職業訓練のいずれも行っていない若者の割合を大幅に減らす。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.7</dt>
                    <dd class="gole-detail__target-txt">強制労働を根絶し、現代の奴隷制、人身売買を終らせるための緊急かつ効果的な措置の実施、最悪な形態の児童労働の禁止及び撲滅を確保する。2025年までに児童兵士の募集と使用を含むあらゆる形態の児童労働を撲滅する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.8</dt>
                    <dd class="gole-detail__target-txt">移住労働者、特に女性の移住労働者や不安定な雇用状態にある労働者など、すべての労働者の権利を保護し、安全・安心な労働環境を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.9</dt>
                    <dd class="gole-detail__target-txt">2030年までに、雇用創出、地方の文化振興・産品販促につながる持続可能な観光業を促進するための政策を立案し実施する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.10</dt>
                    <dd class="gole-detail__target-txt">国内の金融機関の能力を強化し、すべての人々の銀行取引、保険及び金融サービスへのアクセスを促進・拡大する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.a</dt>
                    <dd class="gole-detail__target-txt">後発開発途上国への貿易関連技術支援のための拡大統合フレームワーク（EIF）などを通じた支援を含む、開発途上国、特に後発開発途上国に対する貿易のための援助を拡大する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">8.b</dt>
                    <dd class="gole-detail__target-txt">2020年までに、若年雇用のための世界的戦略及び国際労働機関（ILO）の仕事に関する世界協定の実施を展開・運用化する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [8] -->

    <div id="goal9" class="gole-detail gole-detail--9">
        <div class="gole-detail__container gole-detail__container--9">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_09.png" alt="産業と技術革新の基盤をつくろう">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">産業と技術革新の<br class="sp-only">基盤をつくろう</h2>
                    <p class="gole-detail__upper-txt">強靱（レジリエント）なインフラ構築、包摂的かつ持続可能な産業化の促進及びイノベーションの推進を図る</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">9.1</dt>
                    <dd class="gole-detail__target-txt">すべての人々に安価で公平なアクセスに重点を置いた経済発展と人間の福祉を支援するために、地域・越境インフラを含む質の高い、信頼でき、持続可能かつ強靱(レジリエント)なインフラを開発する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">9.2</dt>
                    <dd class="gole-detail__target-txt">包摂的かつ持続可能な産業化を促進し、2030年までに各国の状況に応じて雇用及びGDPに占める産業セクターの割合を大幅に増加させる。後発開発途上国については同割合を倍増させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">9.3</dt>
                    <dd class="gole-detail__target-txt">特に開発途上国における小規模の製造業その他の企業の、安価な資金貸付などの金融サービスやバリューチェーン及び市場への統合へのアクセスを拡大する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">9.4</dt>
                    <dd class="gole-detail__target-txt">2030年までに、資源利用効率の向上とクリーン技術及び環境に配慮した技術・産業プロセスの導入拡大を通じたインフラ改良や産業改善により、持続可能性を向上させる。すべての国々は 各国の能力に応じた取組を行う。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">9.5</dt>
                    <dd class="gole-detail__target-txt">2030年までにイノベーションを促進させることや100万人当たりの研究開発従事者数を大幅に増加させ、また官民研究開発の支出を拡大させるなど、開発途上国をはじめとするすべての国々の産業セクターにおける科学研究を促進し、技術能力を向上させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">9.a</dt>
                    <dd class="gole-detail__target-txt">アフリカ諸国、後発開発途上国、内陸開発途上国及び小島嶼開発途上国への金融・テクノロジー・技術の支援強化を通じて、開発途上国における持続可能かつ強靱（レジリエント）なインフラ開発を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">9.b</dt>
                    <dd class="gole-detail__target-txt">産業の多様化や商品への付加価値創造などに資する政策環境の確保などを通じて、開発途上国の国内における技術開発、研究及びイノベーションを支援する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">9.c</dt>
                    <dd class="gole-detail__target-txt">後発開発途上国において情報通信技術へのアクセスを大幅に向上させ、2020年までに普遍的かつ安価なインターネット・アクセスを提供できるよう図る。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [9] -->

    <div id="goal10" class="gole-detail gole-detail--10">
        <div class="gole-detail__container gole-detail__container--10">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_10.png" alt="人や国の不平等をなくそう">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">人や国の不平等をなくそう</h2>
                    <p class="gole-detail__upper-txt">各国内及び各国間の不平等を是正する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.1</dt>
                    <dd class="gole-detail__target-txt">2030年までに、各国の所得下位40%の所得成長率について、国内平均を上回る数値を漸進的に達成し、持続させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.2</dt>
                    <dd class="gole-detail__target-txt">2030年までに、年齢、性別、障害、人種、民族、出自、宗教、あるいは経済的地位その他の状況に関わりなく、すべての人々のエンパワーメント及び社会的、経済的及び政治的な包含を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.3</dt>
                    <dd class="gole-detail__target-txt">差別的な法律、政策及び慣行の撤廃、ならびに適切な関連法規、政策、行動の促進などを通じて、機会均等を確保し、成果の不平等を是正する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.4</dt>
                    <dd class="gole-detail__target-txt">税制、賃金、社会保障政策をはじめとする政策を導入し、平等の拡大を漸進的に達成する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.5</dt>
                    <dd class="gole-detail__target-txt">世界金融市場と金融機関に対する規制とモニタリングを改善し、こうした規制の実施を強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.6</dt>
                    <dd class="gole-detail__target-txt">地球規模の国際経済・金融制度の意思決定における開発途上国の参加や発言力を拡大させることにより、より効果的で信用力があり、説明責任のある正当な制度を実現する。</dd>
                </dl>
                             <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.7</dt>
                    <dd class="gole-detail__target-txt">計画に基づき良く管理された移住政策の実施などを通じて、秩序のとれた、安全で規則的かつ責任ある移住や流動性を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.a</dt>
                    <dd class="gole-detail__target-txt">世界貿易機関(WTO)協定に従い、開発途上国、特に後発開発途上国に対する特別かつ異なる待遇の原則を実施する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.b</dt>
                    <dd class="gole-detail__target-txt">各国の国家計画やプログラムに従って、後発開発途上国、アフリカ諸国、小島嶼開発途上国及び内陸開発途上国を始めとする、ニーズが最も大きい国々への、政府開発援助（ODA）及び海外直接投資を含む資金の流入を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">10.c</dt>
                    <dd class="gole-detail__target-txt">2030年までに、移住労働者による送金コストを3%未満に引き下げ、コストが5%を越える送金経路を撤廃する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [10] -->

    <div id="goal11" class="gole-detail gole-detail--11">
        <div class="gole-detail__container gole-detail__container--11">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_11.png" alt="住み続けられるまちづくりを">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">住み続けられるまちづくりを</h2>
                    <p class="gole-detail__upper-txt">包摂的で安全かつ強靱（レジリエント）で持続可能な都市及び人間居住を実現する</p> 
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.1</dt>
                    <dd class="gole-detail__target-txt">2030年までに、すべての人々の、適切、安全かつ安価な住宅及び基本的サービスへのアクセスを確保し、スラムを改善する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.2</dt>
                    <dd class="gole-detail__target-txt">2030年までに、脆弱な立場にある人々、女性、子ども、障害者及び高齢者のニーズに特に配慮し、公共交通機関の拡大などを通じた交通の安全性改善により、すべての人々に、安全かつ安価で容易に利用できる、持続可能な輸送システムへのアクセスを提供する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.3</dt>
                    <dd class="gole-detail__target-txt">2030年までに、包摂的かつ持続可能な都市化を促進し、すべての国々の参加型、包摂的かつ持続可能な人間居住計画・管理の能力を強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.4</dt>
                    <dd class="gole-detail__target-txt">世界の文化遺産及び自然遺産の保護・保全の努力を強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.5</dt>
                    <dd class="gole-detail__target-txt">2030年までに、貧困層及び脆弱な立場にある人々の保護に焦点をあてながら、水関連災害などの災害による死者や被災者数を大幅に削減し、世界の国内総生産比で直接的経済損失を大幅に減らす。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.6</dt>
                    <dd class="gole-detail__target-txt">2030年までに、大気の質及び一般ならびにその他の廃棄物の管理に特別な注意を払うことによるものを含め、都市の一人当たりの環境上の悪影響を軽減する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.7</dt>
                    <dd class="gole-detail__target-txt">2030年までに、女性、子ども、高齢者及び障害者を含め、人々に安全で包摂的かつ利用が容易な緑地や公共スペースへの普遍的アクセスを提供する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.a</dt>
                    <dd class="gole-detail__target-txt">各国・地域規模の開発計画の強化を通じて、経済、社会、環境面における都市部、都市周辺部及び農村部間の良好なつながりを支援する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.b</dt>
                    <dd class="gole-detail__target-txt">2020年までに、包含、資源効率、気候変動の緩和と適応、災害に対する強靱さ（レジリエンス）を目指す総合的政策及び計画を導入・実施した都市及び人間居住地の件数を大幅に増加させ、仙台防災枠組2015-2030に沿って、あらゆるレベルでの総合的な災害リスク管理の策定と実施を行う。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">11.c</dt>
                    <dd class="gole-detail__target-txt">財政的及び技術的な支援などを通じて、後発開発途上国における現地の資材を用いた、持続可能かつ強靱(レジリエント)な建造物の整備を支援する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [11] -->

    <div id="goal12" class="gole-detail gole-detail--12">
        <div class="gole-detail__container gole-detail__container--12">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_12.png" alt="つくる責任 つかう責任">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">つくる責任 つかう責任</h2>
                    <p class="gole-detail__upper-txt">持続可能な生産消費形態を確保する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.1</dt>
                    <dd class="gole-detail__target-txt">開発途上国の開発状況や能力を勘案しつつ、持続可能な消費と生産に関する10年計画枠組み(10YFP)を実施し、先進国主導の下、すべての国々が対策を講じる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.2</dt>
                    <dd class="gole-detail__target-txt">2030年までに天然資源の持続可能な管理及び効率的な利用を達成する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.3</dt>
                    <dd class="gole-detail__target-txt">2030年までに小売・消費レベルにおける世界全体の一人当たりの食料の廃棄を半減させ、収穫後損失などの生産・サプライチェーンにおける食料の損失を減少させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.4</dt>
                    <dd class="gole-detail__target-txt">2020年までに、合意された国際的な枠組みに従い、製品ライフサイクルを通じ、環境上適正な化学物質やすべての廃棄物の管理を実現し、人の健康や環境への悪影響を最小化するため、化学物質や廃棄物の大気、水、土壌への放出を大幅に削減する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.5</dt>
                    <dd class="gole-detail__target-txt">2030年までに、廃棄物の発生防止、削減、再生利用及び再利用により、廃棄物の発生を大幅に削減する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.6</dt>
                    <dd class="gole-detail__target-txt">特に大企業や多国籍企業などの企業に対し、持続可能な取り組みを導入し、持続可能性に関する情報を定期報告に盛り込むよう奨励する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.7</dt>
                    <dd class="gole-detail__target-txt">国内の政策や優先事項に従って持続可能な公共調達の慣行を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.8</dt>
                    <dd class="gole-detail__target-txt">2030年までに、人々があらゆる場所において、持続可能な開発及び自然と調和したライフスタイルに関する情報と意識を持つようにする。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.a</dt>
                    <dd class="gole-detail__target-txt">開発途上国に対し、より持続可能な消費・生産形態の促進のための科学的・技術的能力の強化を支援する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.b</dt>
                    <dd class="gole-detail__target-txt">雇用創出、地方の文化振興・産品販促につながる持続可能な観光業に対して持続可能な開発がもたらす影響を測定する手法を開発・導入する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">12.c</dt>
                    <dd class="gole-detail__target-txt">開発途上国の特別なニーズや状況を十分考慮し、貧困層やコミュニティを保護する形で開発に関する悪影響を最小限に留めつつ、税制改正や、有害な補助金が存在する場合はその環境への影響を考慮してその段階的廃止などを通じ、各国の状況に応じて、市場のひずみを除去することで、浪費的な消費を奨励する、化石燃料に対する非効率な補助金を合理化する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [12] -->

    <div id="goal13" class="gole-detail gole-detail--13">
        <div class="gole-detail__container gole-detail__container--13">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_13.png" alt="気候変動に具体的な対策を">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">気候変動に具体的な対策を</h2>
                    <p class="gole-detail__upper-txt">気候変動及びその影響を軽減するための<br class="pc-only">緊急対策を講じる</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">13.1</dt>
                    <dd class="gole-detail__target-txt">すべての国々において、気候関連災害や自然災害に対する強靱性（レジリエンス）及び適応の能力を強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">13.2</dt>
                    <dd class="gole-detail__target-txt">気候変動対策を国別の政策、戦略及び計画に盛り込む。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">13.3</dt>
                    <dd class="gole-detail__target-txt">気候変動の緩和、適応、影響軽減及び早期警戒に関する教育、啓発、人的能力及び制度機能を改善する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">13.a</dt>
                    <dd class="gole-detail__target-txt">重要な緩和行動の実施とその実施における透明性確保に関する開発途上国のニーズに対応するため、2020年までにあらゆる供給源から年間1,000億ドルを共同で動員するという、UNFCCCの先進締約国によるコミットメントを実施するとともに、可能な限り速やかに資本を投入して緑の気候基金を本格始動させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">13.b</dt>
                    <dd class="gole-detail__target-txt">後発開発途上国及び小島嶼開発途上国において、女性や青年、地方及び社会的に疎外されたコミュニティに焦点を当てることを含め、気候変動関連の効果的な計画策定と管理のための能力を向上するメカニズムを推進する。※国連気候変動枠組条約（UNFCCC）が、<span class="indent">気候変動への世界的対応について交渉を行う一義的な国際的、政府間対話の場であると認識している。</span></dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [13] -->

    <div id="goal14" class="gole-detail gole-detail--14">
        <div class="gole-detail__container gole-detail__container--14">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_14.png" alt="海の豊かさを守ろう">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">海の豊かさを守ろう</h2>
                    <p class="gole-detail__upper-txt">持続可能な開発のために海洋・海洋資源を保全し、<br class="pc-only">持続可能な形で利用する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.1</dt>
                    <dd class="gole-detail__target-txt">2025年までに、海洋蓄積物や富栄養化を含む、特に陸上活動による汚染など、あらゆる種類の海洋汚染を防止し、大幅に削減する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.2</dt>
                    <dd class="gole-detail__target-txt">2020年までに、海洋及び沿岸の生態系に関する重大な悪影響を回避するため、強靱性（レジリエンス）の強化などによる持続的な管理と保護を行い、健全で生産的な海洋を実現するため、海洋及び沿岸の生態系の回復のための取組を行う。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.3</dt>
                    <dd class="gole-detail__target-txt">あらゆるレベルでの科学的協力の促進などを通じて、海洋酸性化の影響を最小限化し、対処する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.4</dt>
                    <dd class="gole-detail__target-txt">水産資源を、実現可能な最短期間で少なくとも各資源の生物学的特性によって定められる最大持続生産量のレベルまで回復させるため、2020年までに、漁獲を効果的に規制し、過剰漁業や違法・無報告・無規制(IUU)漁業及び破壊的な漁業慣行を終了し、科学的な管理計画を実施する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.5</dt>
                    <dd class="gole-detail__target-txt">2020年までに、国内法及び国際法に則り、最大限入手可能な科学情報に基づいて、少なくとも沿岸域及び海域の10パーセントを保全する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.6</dt>
                    <dd class="gole-detail__target-txt">開発途上国及び後発開発途上国に対する適切かつ効果的な、特別かつ異なる待遇が、世界貿易機関（WTO）漁業補助金交渉の不可分の要素であるべきことを認識した上で、2020年までに、過剰漁獲能力や過剰漁獲につながる漁業補助金を禁止し、違法・無報告・無規制（IUU）漁業につながる補助金を撤廃し、同様の新たな補助金の導入を抑制する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.7</dt>
                    <dd class="gole-detail__target-txt">2030年までに、漁業、水産養殖及び観光の持続可能な管理などを通じ、小島嶼開発途上国及び後発開発途上国の海洋資源の持続的な利用による経済的便益を増大させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.a</dt>
                    <dd class="gole-detail__target-txt">海洋の健全性の改善と、開発途上国、特に小島嶼開発途上国および後発開発途上国の開発における海洋生物多様性の寄与向上のために、海洋技術の移転に関するユネスコ政府間海洋学委員会の基準・ガイドラインを勘案しつつ、科学的知識の増進、研究能力の向上、及び海洋技術の移転を行う。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.b</dt>
                    <dd class="gole-detail__target-txt">小規模・沿岸零細漁業者に対し、海洋資源及び市場へのアクセスを提供する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">14.c</dt>
                    <dd class="gole-detail__target-txt">「我々の求める未来」のパラ158において想起されるとおり、海洋及び海洋資源の保全及び持続可能な利用のための法的枠組みを規定する海洋法に関する国際連合条約（UNCLOS）に反映されている国際法を実施することにより、海洋及び海洋資源の保全及び持続可能な利用を強化する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [14] -->

    <div id="goal15" class="gole-detail gole-detail--15">
        <div class="gole-detail__container gole-detail__container--15">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_15.png" alt="陸の豊かさも守ろう">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">陸の豊かさも守ろう</h2>
                    <p class="gole-detail__upper-txt">陸域生態系の保護、回復、持続可能な利用の推進、持続可能な森林の経営、砂漠化への対処、ならびに土地の劣化の阻止・回復及び生物多様性の損失を阻止する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.1</dt>
                    <dd class="gole-detail__target-txt">2020年までに、国際協定の下での義務に則って、森林、湿地、山地及び乾燥地をはじめとする陸域生態系と内陸淡水生態系及びそれらのサービスの保全、回復及び持続可能な利用を確保する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.2</dt>
                    <dd class="gole-detail__target-txt">2020年までに、あらゆる種類の森林の持続可能な経営の実施を促進し、森林減少を阻止し、劣化した森林を回復し、世界全体で新規植林及び再植林を大幅に増加させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.3</dt>
                    <dd class="gole-detail__target-txt">2030年までに、砂漠化に対処し、砂漠化、干ばつ及び洪水の影響を受けた土地などの劣化した土地と土壌を回復し、土地劣化に荷担しない世界の達成に尽力する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.4</dt>
                    <dd class="gole-detail__target-txt">2030年までに持続可能な開発に不可欠な便益をもたらす山地生態系の能力を強化するため、生物多様性を含む山地生態系の保全を確実に行う。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.5</dt>
                    <dd class="gole-detail__target-txt">自然生息地の劣化を抑制し、生物多様性の損失を阻止し、2020年までに絶滅危惧種を保護し、また絶滅防止するための緊急かつ意味のある対策を講じる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.6</dt>
                    <dd class="gole-detail__target-txt">国際合意に基づき、遺伝資源の利用から生ずる利益の公正かつ衡平な配分を推進するとともに、遺伝資源への適切なアクセスを推進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.7</dt>
                    <dd class="gole-detail__target-txt">保護の対象となっている動植物種の密猟及び違法取引を撲滅するための緊急対策を講じるとともに、違法な野生生物製品の需要と供給の両面に対処する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.8</dt>
                    <dd class="gole-detail__target-txt">2020年までに、外来種の侵入を防止するとともに、これらの種による陸域・海洋生態系への影響を大幅に減少させるための対策を導入し、さらに優先種の駆除または根絶を行う。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.9</dt>
                    <dd class="gole-detail__target-txt">2020年までに、生態系と生物多様性の価値を、国や地方の計画策定、開発プロセス及び貧困削減のための戦略及び会計に組み込む。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.a</dt>
                    <dd class="gole-detail__target-txt">生物多様性と生態系の保全と持続的な利用のために、あらゆる資金源からの資金の動員及び大幅な増額を行う。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.b</dt>
                    <dd class="gole-detail__target-txt">保全や再植林を含む持続可能な森林経営を推進するため、あらゆるレベルのあらゆる供給源から、持続可能な森林経営のための資金の調達と開発途上国への十分なインセンティブ付与のための相当量の資源を動員する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">15.c</dt>
                    <dd class="gole-detail__target-txt">持続的な生計機会を追求するために地域コミュニティの能力向上を図る等、保護種の密猟及び違法な取引に対処するための努力に対する世界的な支援を強化する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [15] -->

    <div id="goal16" class="gole-detail gole-detail--16">
        <div class="gole-detail__container gole-detail__container--16">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_16.png" alt="平和と公正をすべての人に">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">平和と公正をすべての人に</h2>
                    <p class="gole-detail__upper-txt">持続可能な開発のための平和で包摂的な社会を促進し、すべての人々に司法へのアクセスを提供し、あらゆるレベルにおいて効果的で説明責任のある包摂的な制度を構築する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.1</dt>
                    <dd class="gole-detail__target-txt">あらゆる場所において、すべての形態の暴力及び暴力に関連する死亡率を大幅に減少させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.2</dt>
                    <dd class="gole-detail__target-txt">子どもに対する虐待、搾取、取引及びあらゆる形態の暴力及び拷問を撲滅する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.3</dt>
                    <dd class="gole-detail__target-txt">国家及び国際的なレベルでの法の支配を促進し、すべての人々に司法への平等なアクセスを提供する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.4</dt>
                    <dd class="gole-detail__target-txt">2030年までに、違法な資金及び武器の取引を大幅に減少させ、奪われた財産の回復及び返還を強化し、あらゆる形態の組織犯罪を根絶する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.5</dt>
                    <dd class="gole-detail__target-txt">あらゆる形態の汚職や贈賄を大幅に減少させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.6</dt>
                    <dd class="gole-detail__target-txt">あらゆるレベルにおいて、有効で説明責任のある透明性の高い公共機関を発展させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.7</dt>
                    <dd class="gole-detail__target-txt">あらゆるレベルにおいて、対応的、包摂的、参加型及び代表的な意思決定を確保する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.8</dt>
                    <dd class="gole-detail__target-txt">グローバル・ガバナンス機関への開発途上国の参加を拡大・強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.9</dt>
                    <dd class="gole-detail__target-txt">2030年までに、すべての人々に出生登録を含む法的な身分証明を提供する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.10</dt>
                    <dd class="gole-detail__target-txt">国内法規及び国際協定に従い、情報への公共アクセスを確保し、基本的自由を保障する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.a</dt>
                    <dd class="gole-detail__target-txt">特に開発途上国において、暴力の防止とテロリズム・犯罪の撲滅に関するあらゆるレベルでの能力構築のため、国際協力などを通じて関連国家機関を強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">16.b</dt>
                    <dd class="gole-detail__target-txt">持続可能な開発のための非差別的な法規及び政策を推進し、実施する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [16] -->

    <div id="goal17" class="gole-detail gole-detail--17">
        <div class="gole-detail__container gole-detail__container--17">
            <div class="gole-detail__upper">
                <div class="gole-detail__upper-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sdgs/img_icon_17.png" alt="パートナーシップで目標を達成しよう">
                </div>
                <div class="gole-detail__upper-txt-area">
                    <h2 class="gole-detail__upper-ttl">パートナーシップで<br class="pc-only">目標を達成しよう</h2>
                    <p class="gole-detail__upper-txt">持続可能な開発のための実施手段を強化し、<br class="pc-only">グローバル・パートナーシップを活性化する</p>
                </div>
            </div>
            <div class="gole-detail__contents">
                <p class="gole-detail__contents-txt">ターゲット</p>
             <p class="gole-detail__contents-txt">資金</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.1</dt>
                    <dd class="gole-detail__target-txt">課税及び徴税能力の向上のため、開発途上国への国際的な支援なども通じて、国内資源の動員を強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.2</dt>
                    <dd class="gole-detail__target-txt">先進国は、開発途上国に対するODAをGNI比0.7%に、後発開発途上国に対するODAをGNI比0.15~0.20%にするという目標を達成するとの多くの国によるコミットメントを含む ODAに係るコミットメ ントを完全に実施する。ODA供与国が、少なくともGNI比0.20%のODAを後発開発途上国に供与するという目標の設定を検討することを奨励する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.3</dt>
                    <dd class="gole-detail__target-txt">複数の財源から、開発途上国のための追加的資金源を動員する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.4</dt>
                    <dd class="gole-detail__target-txt">必要に応じた負債による資金調達、債務救済及び債務再編の促進を目的とした協調的な政策により、開発途上国の長期的な債務の持続可能性の実現を支援し、責務貧困国（HIPC）の対外債務への対応により債務リスクを軽減する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.5</dt>
                    <dd class="gole-detail__target-txt">後発開発途上国のための投資促進枠組みを導入及び実施する。</dd>
                </dl>
             <p class="gole-detail__contents-txt">技術</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.6</dt>
                    <dd class="gole-detail__target-txt">科学技術イノベーション（STI）及びこれらへのアクセスに関する南北協力、南南協力及び地域的・国際的な三角協力を向上させる。また、国連レベルをはじめとする既存のメカニズム間の調整改善や、全世界的な技術促進メカニズムなどを通じて、相互に合意した条件において知識共有を進める。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.7</dt>
                    <dd class="gole-detail__target-txt">開発途上国に対し、譲許的・特恵的条件などの相互に合意した有利な条件の下で、環境に配慮した技術の開発、移転、普及及び拡散を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.8</dt>
                    <dd class="gole-detail__target-txt">2017年までに、後発開発途上国のための技術バンク及び科学技術イノベーション能力構築メカニズムを完全運用させ、情報通信技術（ICT）をはじめとする実現技術の利用を強化する。</dd>
                </dl>
             <p class="gole-detail__contents-txt">能力構築</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.9</dt>
                    <dd class="gole-detail__target-txt">すべての持続可能な開発目標を実施するための国家計画を支援するべく、南北協力、南南協力及び三角協力などを通じて、開発途上国における効果的かつ的をしぼった能力構築の実施に対する国際的な支援を強化する。</dd>
                </dl>
             <p class="gole-detail__contents-txt">貿易</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.10</dt>
                    <dd class="gole-detail__target-txt">ドーハ・ラウンド( DDA)交渉の結果を含めたWTOの下での普遍的でルールに基づいた、差別的でない、公平な多角的貿易体制を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.11</dt>
                    <dd class="gole-detail__target-txt">開発途上国による輸出を大幅に増加させ、特に2020年までに世界の輸出に占める後発開発途上国のシェアを倍増させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.12</dt>
                    <dd class="gole-detail__target-txt">後発開発途上国からの輸入に対する特恵的な原産地規則が透明で簡略的かつ市場アクセスの円滑化に寄与するものとなるようにすることを含む世界貿易機関（WTO）の決定に矛盾しない形で、すべての後発開発途上国に対し、永続的な無税・無枠の市場アクセスを適時実施する。</dd>
                </dl>
             <p class="gole-detail__contents-txt">体制面</p>
             <p class="gole-detail__contents-txt">政策・制度的整合性</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.13</dt>
                    <dd class="gole-detail__target-txt">政策協調や政策の首尾一貫性などを通じて、世界的なマクロ経済の安定を促進する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.14</dt>
                    <dd class="gole-detail__target-txt">持続可能な開発のための政策の一貫性を強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.15</dt>
                    <dd class="gole-detail__target-txt">貧困撲滅と持続可能な開発のための政策の確立・実施にあたっては、各国の政策空間及びリーダーシップを尊重する。</dd>
                </dl>
              <p class="gole-detail__contents-txt">マルチステークホルダー・パートナーシップ</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.16</dt>
                    <dd class="gole-detail__target-txt">すべての国々、特に開発途上国での持続可能な開発目標の達成を支援すべく、知識、専門的知見、技術及び資金源を動員、共有するマルチステークホルダー・パートナーシップによって補完しつつ、持続可能な開発のためのグローバル・パートナーシップを強化する。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.17</dt>
                    <dd class="gole-detail__target-txt">さまざまなパートナーシップの経験や資源戦略を基にした、効果的な公的、官民、市民社会のパートナーシップを奨励・推進する。</dd>
                </dl>
             <p class="gole-detail__contents-txt">データ、モニタリング、説明責任</p>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.18</dt>
                    <dd class="gole-detail__target-txt">2020年までに、後発開発途上国及び小島嶼開発途上国を含む開発途上国に対する能力構築支援を強化し、所得、性別、年齢、人種、民族、居住資格、障害、地理的位置及びその他各国事情に関連する特性別の質が高く、タイムリーかつ信頼性のある非集計型データの入手可能性を向上させる。</dd>
                </dl>
                <dl class="gole-detail__target">
                    <dt class="gole-detail__target-num">17.19</dt>
                    <dd class="gole-detail__target-txt">2030年までに、持続可能な開発の進捗状況を測るGDP以外の尺度を開発する既存の取組を更に前進させ、開発途上国における統計に関する能力構築を支援する。</dd>
                </dl>
            </div>
            <a href="#" class="gole-btn">back</a>
        </div>
    </div>
    <!-- [17] -->

</div>
<!-- [/main-contents] -->

<?php
get_footer();
