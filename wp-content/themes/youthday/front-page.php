<?php
/*
Template Name: front-page
*/
get_header();
?>
<div class="keyvisual">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<picture>
<source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_keyvisual_01.jpg">
<source media="(min-width: 300px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/sp/img_keyvisual_01.jpg">
<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_keyvisual_01.jpg" alt="">
</picture>
<a href="#member1" class="keyvisual__link mfp-inline">My Youth Day 001<span class="keyvisual__link-name keyvisual__link-name--bluegreen">Taichi Sakuyama</span></a>
</div>
<div class="swiper-slide">
<picture>
<source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_keyvisual_02.jpg">
<source media="(min-width: 300px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/sp/img_keyvisual_02.jpg">
<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_keyvisual_02.jpg" alt="">
</picture>
<a href="#member2" class="keyvisual__link keyvisual__link--right mfp-inline">My Youth Day 002<span class="keyvisual__link-name keyvisual__link-name--orange">Koichi Iizuka</span></a>
</div>
<div class="swiper-slide">
<picture>
<source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_keyvisual_03.jpg">
<source media="(min-width: 300px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/sp/img_keyvisual_03.jpg">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_keyvisual_03.jpg" alt="">
</picture>
<a href="#member3" class="keyvisual__link mfp-inline">My Youth Day 003<span class="keyvisual__link-name keyvisual__link-name--red">Masako Ishikawa</span></a>
</div>
<div class="swiper-slide">
	<picture>
		<source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_keyvisual_04.jpg">
			<source media="(min-width: 300px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/sp/img_keyvisual_04.jpg">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_keyvisual_04.jpg" alt="">
			</picture>
			<a href="#member4" class="keyvisual__link keyvisual__link--right mfp-inline">My Youth Day 004<span class="keyvisual__link-name keyvisual__link-name--green">Konoka Wakabayashi</span></a>
		</div>
	</div>
</div>
<div class="keyvisual__icon">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_key-icon.png" alt="">
</div>
<p class="keyvisual__txt">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_key-txt.png" alt="" class="pc-only">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/sp/img_key-txt.png" alt="" class="sp-only">
</p>

</div>

<div id="member1" class="mfp-hide maintheme-member">
	<div class="maintheme-member__img">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/img_member_01.jpg" class="pc-only" alt="">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/sp/img_member_01.jpg" class="sp-only" alt="">
	</div>
	<div class="maintheme-member__txt-area maintheme-member__txt-area--blue">
		<h2 class="maintheme-member__ttl">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/img_member-ttl.png" alt="">
		</h2>
		<p class="maintheme-member__number">My Youth Day 001</p>
		<p class="maintheme-member__en-name">Taichi Sakuyama</p>
		<p class="maintheme-member__txt">自分の想いを発信できるひとになりたい<br>平和をつくるために、自ら発信しないといけない、と思う。<br>自分一人でやるのか、仲間といっしょにやるのか、方法はまだわからない。</p>
		<p class="maintheme-member__txt">自分が変われば相手も変わる。<br>相手に求めるのではなく、自分が変わればいいという法華経の教え。<br>でもこれまでの自分は、その教えを完璧に守ろうとしすぎていた気がする。<br>完璧にはできないけれど、がんばっている自分のことも認めてあげたい。<br>前よりちょっとずつ成長する自分でありたい、と思う。</p>
		<p class="maintheme-member__name">作山太一（川崎教会）</p>
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/icon_close.png" class="mfp-close" alt="">
	</div>
</div>
<div id="member2" class="mfp-hide maintheme-member">
	<div class="maintheme-member__img">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/img_member_02.jpg" class="pc-only" alt="">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/sp/img_member_02.jpg" class="sp-only" alt="">
	</div>
	<div class="maintheme-member__txt-area maintheme-member__txt-area--orange">
		<h2 class="maintheme-member__ttl">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/img_member-ttl.png" alt="">
		</h2>
		<p class="maintheme-member__number">My Youth Day 002</p>
		<p class="maintheme-member__en-name">Koichi Iizuka</p>
		<p class="maintheme-member__txt">18歳、福祉の勉強ができる可能性に喜ぶ私を、父は声を荒げて叱責した。<br>体を使った仕事なんかできるものか。お前には首から下はないものと思え。<br>医師が見放すほどの大病を患った生後直後から、父は私の成長を見守っている。<br>そのときは大喧嘩になったが、子を思う父の気持ちが、今はわかる。</p>
		<p class="maintheme-member__txt">「不惜身命」———父との大喧嘩から一月後、初めてお説法のお役をいただいた日、<br>教会長さんから渡されたおたすきに書かれていた。それが自分の言葉になった。<br>まごころをもって人に接すること。それが世界の平和に通じることだと思う。<br>まごころとは、きっと、笑顔とやさしい言葉をともなうもの。</p>
		<p class="maintheme-member__name">飯塚紘一（港教会）</p>
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/icon_close.png" class="mfp-close" alt="">
	</div>
</div>
<div id="member3" class="mfp-hide maintheme-member">
	<div class="maintheme-member__img">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/img_member_03.jpg" class="pc-only" alt="">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/sp/img_member_03.jpg" class="sp-only" alt="">
	</div>
	<div class="maintheme-member__txt-area maintheme-member__txt-area--pink">
		<h2 class="maintheme-member__ttl">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/img_member-ttl.png" alt="">
		</h2>
		<p class="maintheme-member__number">My Youth Day 003</p>
		<p class="maintheme-member__en-name">Masako Ishikawa</p>
		<p class="maintheme-member__txt">若い人には、“自分一人でやっても変わらない”って諦めがあるかもしれない。<br>法華経は縁起の教え。私は縁のもつ力というものをすごく信じている。<br>私の頑固な考えも、ご縁をいただいたみなさんによって変えることができる。<br></p>
		<p class="maintheme-member__txt">一つのご縁で変わっていく力ってとってもたくさんある。それが、<br>より集まったときには本当に大きな力に、大河になるってことを信じている。<br>だから政治も環境も自分一人で努力したって変わらないって諦めることなく、<br>はたらきかける、縁になる。そういう小さなチャレンジを、<br>大好きな青年部のみなさんと一緒につづけていきたい。</p>
		<p class="maintheme-member__name">石川雅女（豊田教会）</p>
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/icon_close.png" class="mfp-close" alt="">
	</div>
</div>
<div id="member4" class="mfp-hide maintheme-member">
	<div class="maintheme-member__img">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/img_member_04.jpg" class="pc-only" alt="">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/sp/img_member_04.jpg" class="sp-only" alt="">
	</div>
	<div class="maintheme-member__txt-area maintheme-member__txt-area--green">
		<h2 class="maintheme-member__ttl">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/img_member-ttl.png" alt="">
		</h2>
		<p class="maintheme-member__number">My Youth Day 004</p>
		<p class="maintheme-member__en-name">Konoka Wakabayashi</p>
		<p class="maintheme-member__txt">ばあちゃんがよく言うには、「人のいいところを探せ」って。<br>嫌なところばかり目が行きがちで、すぐ人と比べたくなるんだけどね。<br>でも教会の行事に誘われるたびに、私はそのままでいい、<br>何も気負うことない、自分の精一杯をやれればそれ以上を求めなくていい、<br>ということに気づかされる。うん、けっこう教会から学んでるわ！私。</p>
		<p class="maintheme-member__txt">徳分がいま自分に来てるって感じる。出会うべくして人に出会ってる。<br>私のことを見ていてくれる人がたくさんいるっていうのが嬉しい。<br>みんなの応援がある。一人じゃ生きられない。感謝。</p>
		<p class="maintheme-member__name">若林鼓乃郁（群馬太田教会）</p>
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/maintheme/icon_close.png" class="mfp-close" alt="">
	</div>
</div>

<div class="lead">
	<div class="lead__img">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/img_lead_01.png" alt="" class="pc-only">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/sp/img_lead_01.png" alt="" class="sp-only">
	</div>
	<div class="lead__container">
		<p class="lead__txt">私という存在は、<br class="sp-only">ほんの一粒のしずくにすぎないかもしれない。<br>でも、その一滴がなかったら、<br class="sp-only">世界を変える流れはうまれない。<br>大河の一滴になろう。<br class="sp-only">青年の日。</p>
		<p class="lead__txt-large">「開祖のことば」</p>
		<span class="lead-btn-open">open</span>
	</div>
</div>

<div class="lead-open">
	<p class="lead-open__txt">水というものは、初めは一滴一滴の雨水ですが、<br>それが一度は土に浸み込んでから<br class="sp-only">泉となって湧き出し、<br>それが集まって谷川となり、<br class="sp-only">激しく流れ落ちれば水力電気をおこし、<br>平野にくだればいろいろな作物を育てる。<br>そして、たくさんの川が一緒になって<br class="sp-only">大河となる。<br>ここが水のすばらしいところで、<br>清濁を決して差別することなく、<br class="sp-only">みんな一緒になる。<br>同化する。そして、ついには大海に流れ込み、<br>そこでまた多くの生命を育てますね。<br>信仰者の生き方も、<br>行きつくところはこうでなくてはならないんです。</p>
	<p class="lead-open__txt-small">「躍進」1990 年 1 月号　年頭指導より抜粋</p>
	<span class="lead-btn-close">close</span>
</div>
<ul class="pdf-list">
	<li class="pdf-list__item">
		<a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/pdf/seinen2020_0424.pdf" class="pdf-list__link" onclick="ga('send', 'event', 'linkaction', 'click', 'seinen2020');">
			<span class="pdf-list__link-txt pdf-list__link-txt--1">「青年の日」<br class="pc-only">実施要項は<br class="pc-only">こちら</span>
			<span class="pdf-list__link-download">download</span>
		</a>
	</li>
	<li class="pdf-list__item">
		<a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/pdf/unicef2020.pdf" class="pdf-list__link" onclick="ga('send', 'event', 'linkaction', 'click', 'unicef2020');">
			<span class="pdf-list__link-txt pdf-list__link-txt--2">「一食<br class="pc-only">ユニセフ募金」<br class="pc-only">実施要項は<br class="pc-only">こちら</span>
			<span class="pdf-list__link-download pdf-list__link-download--circle">download</span>
		</a>
	</li>
	<li class="pdf-list__item">
		<a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/pdf/2019reports.pdf" class="pdf-list__link" onclick="ga('send', 'event', 'linkaction', 'click', 'reports2019');">
			<span class="pdf-list__link-txt pdf-list__link-txt--3">「一食<br class="pc-only">ユニセフ募金」<br class="pc-only">事業レポートは<br class="pc-only">こちら</span>
			<span class="pdf-list__link-download">download</span>
		</a>
	</li>
</ul>

<div class="bnr-area">
	<h2 class="bnr-area__ttl">Cooperatives for Youth Day</h2>
	<ul class="bnr-sponsor">
		<li><a href="https://www.unicef.or.jp/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_sup_01.gif" alt="公益財団法人　日本ユニセフ協会（ユニセフ日本委員会）"></a>
		</li>
		<li><a href="https://www.japanforunhcr.org/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_sup_03.jpg" alt="特定非営利活動法人　国連ＵＮＨＣＲ協会"></a>
		</li>
		<li><a href="http://www.unhcr.org/jp/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_sup_02.jpg" alt="ＵＮＨＣＲ（国連難民高等弁務官事務所）駐日事務所"></a>
		</li>
		<li><a href="https://ja.wfp.org/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_sup_04.jpg" alt="特定非営利活動法人　国際連合世界食糧計画ＷＦＰ協会"></a>
		</li>
		<li><a href="http://www.dear.or.jp/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_sup_05.jpg" alt="特定非営利活動法人　開発教育協会"></a>
		</li>
		<li><a href="http://saas01.netcommons.net/wcrp/htdocs/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_sup_06.jpg" alt="公益財団法人　世界宗教者平和会議（ＷＣＲＰ/ＲｆＰ）日本委員会"></a>
		</li>
		<li><a href="http://www.shinshuren.or.jp/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_sup_07.gif" alt="公益財団法人　新日本宗教団体連合会（新宗連）"></a>
		</li>
		<li><a href="http://www.meisha.jp/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_sup_08.jpg" alt="特定非営利活動法人　明るい社会づくり運動"></a>
		</li>
	</ul>
</div>

<div class="bnr-area">
        <h2 class="bnr-area__ttl">Related sites</h2>
        <ul class="bnr-sponsor">
                <li><a href="https://www.kosei-kai.or.jp/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_rkk_373_86.
jpg" alt="立正佼成会"></a>
                </li>
                <li><a href="https://www.ichijiki.org/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_ichigiki_373_86
.jpg" alt="一食を捧げる運動"></a>
                </li>
                <li><a href="https://mofu.org/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/bnr_afmo_373_8
6.jpg" alt="アフリカへ毛布をおくる運動"></a>
                </li>
<li></li>
        </ul>
</div>

<?php
get_footer();