<?php
/*
Template Name: howto
*/
get_header();
?>

<div class="ff-min">
<h1 class="h1 howto-ttl"><span class="sub-tit"><span class="sub-tit-inner">how to</span></span>投稿方法について</h1>
<p class="main-lead">サイトの右下にある投稿ボタンから投稿してください。教会で考えたスローガン、意気込み、今抱えている葛藤、つぶやき等々自由にわかちあいましょう！</p>

<div class="main-inner">
				<div class="step-box  col1">
					<dl>
						<dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/how/img_step01.png" alt=""></dt>
						<dd class="txt">1. サイトの右下にある投稿ボタンを押してください。</dd>
						<dd class="notice  fc--red">※デスクトップパソコン(PC) とスマートフォンで、同様の操作となります</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/how/img_step02.png" alt=""></dt>
						<dd class="txt">2.「タイムライン」へ投稿するために、必要とする項目を記入後送信ボタンを押してください。</dd>
						<dd class="notice fc--red">※メールアドレスが公開されることはございません</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/how/img_step03.png" alt=""></dt>
						<dd class="txt">3. タイムラインのページへ反映されます。</dd>
						<dd class="notice  fc--red">※送信後公開まで数日お時間をいただく事がございます</dd>
					</dl>
				</div>

<div class="notice-box">
<h2 class="h2 color-txt"><span class="inner-icn">■</span>「タイムライン」へご投稿頂いたみなさまへ</h2>
<p>投稿された内容を一覧で見れるようにアーカイブページとしてギャラリーのページを設置しています。</p>
</div>

	<div class="notice-box">
	<h2 class="h2"><span class="inner-icn">■</span>撮影にあたって</h2>
<ul class="notice-list">
<li>・明るい場所で撮影してください。</li>
<li>・アプリを使った撮影はご遠慮ください。</li>
	<li>・動画は１分間を目安に撮影してください。</li>
<li>・動画の場合は、必ず横向きにして撮影してください。
<span class="notice">※画面サイズの都合上、縦向きで撮ると上手く掲載できません</span></li>
<li>・写真の場合は、向きに指定はございません。</li>
</ul>
	<p class="img-movie-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/how/img_movie.png" alt=""></p>
	</div>

	
<div class="notice-box">
	<h2 class="h2"><span class="inner-icn">■</span>投稿の修正・削除について</h2>
<ul class="notice-list">
	<li>・一度投稿した内容の変更はできません。</li>
<li>・投稿内容の変更/ 削除を希望される方は以下へお問い合わせください。</li>
	</ul>
	</div>

	
<div class="notice-box">
	<h2 class="h2"><span class="inner-icn">■</span>「青年の日」WEB サイト</h2>
<ul>
<li><address><span class="inner-tit">E-mail:</span>seinen@kosei-kai.or.jp</address></li>
<li><span class="inner-tit">受付時間:</span>午前8 時30 分～午後4 時30 分まで</li>
</ul>
	<p class="notice-mail">※上記メールアドレスにて「タイムライン」への投稿のご依頼も可能です。<br>
	必要事項を記入し、件名に「タイムラインへ投稿」とし送信してください。<span class="notice">（必須項目として「ニックネーム」「メールアドレス」が必要です）</span></p>
	
		</div>
	
<?php get_template_part('template-parts/content', 'gohonzon'); ?>
	

<div class="notice-box">
	<h2 class="h2"><span class="inner-icn">■</span>よくある質問</h2>
<dl class="faq-box">
<dt class="faq-tit">【Ｑ】WEBサイトが正常に表示されない！？</dt>

<dd>【Ａ】アプリ内ブラウザで閲覧していませんか？
<ul class="notice-list">
<li><span class="notice">※LINEなどのアプリで発生します。特にAndroidの端末での不具合が発生する場合あります。原因の一つとしてアプリが古いことでおこります。</span></li>
</ul>
<p>● 解決方法として、以下をお試しください。<br>
AndroidのOSのアップデートまたは、Webサイトをブラウザで開き直すなどの対応をしてください。</p></dd>
</dl>
	</div>
	
<div class="notice-box">
	<h2 class="h2"><span class="inner-icn">■</span>その他</h2>
<p>詳細につきましては、以下規約関連をご確認ください。</p>
<ul class="notice-link-list">
	<li>【利用規約】
<a href="<?php echo esc_url( home_url( '/contract/' )); ?>">http://www.kosei-kai.or.jp/youthday/contract/</a></li>
<li>【個人情報保護方針】
	<a href="<?php echo esc_url( home_url( '/personal/' )); ?>">http://www.kosei-kai.or.jp/youthday/personal/</a></li>
</ul>
	</div>
	</div>
</div>


		<?php
get_footer();