<?php
/*
Template Name: history
*/
get_header();
?>


<h1 class="h1"><span class="sub-tit"><span class="sub-tit-inner">history</span></span>ヒストリー</h1>

				<ul class="history-box">
					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">01</span><time class="time-date" datetime="1970">1970</time></div>
						
						<div class="story-box">
							<figure class="figure-history"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/1970.jpg" alt=""></figure>
							<div class="story-box-inner">
								<h2 class="h2"><span class="inner-tit">県別に「青年の日」はじまる（第１回）</span></h2>
								<p class="inner-txt">「青年の日」は、毎年５月の第３日曜日を中心に身近な地域社会や世界の平和のために具体的な行動を行う日です。第１回目は、明るい社会をめざし、県別に活動を行いました。交通事故ゼロを願った交通安全キャンペーンや、献血、花いっぱい運動、清掃奉仕などに取り組みました。</p>
							</div>
						</div>




						
						</div>
					</li>

					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">02</span><time class="time-date" datetime="1978">1978</time></div>

<?php
   $args = array('tag' => '1978','posts_per_page' => -1,'post_type' => 'post');
   $the_query = new WP_Query( $args ); 
   if ( $the_query->have_posts() ) : 
	?>
<p class="tit-img-mystory"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/img_tit_mystory.svg" alt="My Story. Your Story."></p>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="story-box-mystory">
	<?php if ( $post->txt_title) : ?>
	<h3 class="h3">『<?php echo esc_html( $post->txt_title); ?>』</h3>
	<?php else : endif ; ?>
	<?php the_content() ?>

</div>
<?php endwhile; ?>
<?php else : endif; wp_reset_query(); ?>

						</div>
					</li>
					
					
					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">03</span><time class="time-date" datetime="1979">1979</time></div>
						
						<div class="story-box">
							<figure class="figure-history"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/1979.jpg" alt=""></figure>
							<div class="story-box-inner">
								<h2 class="h2"><span class="inner-tit">世界平和への第一歩（第１０回）</span></h2>
								<p class="inner-txt">国際児童年を機に、全国統一の行動としてユニセフ募金の取り組みを開始し、開発途上国の子どもたちに対する支援を始めました。</p>
							</div>
						</div>
							
<?php
   $args = array('tag' => '1979','posts_per_page' => -1,'post_type' => 'post');
   $the_query = new WP_Query( $args ); 
   if ( $the_query->have_posts() ) : 
	?>
<p class="tit-img-mystory"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/img_tit_mystory.svg" alt="My Story. Your Story."></p>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="story-box-mystory">
	<?php if ( $post->txt_title) : ?>
	<h3 class="h3">『<?php echo esc_html( $post->txt_title); ?>』</h3>
	<?php else : endif ; ?>
	<?php the_content() ?>

</div>
<?php endwhile; ?>
<?php else : endif; wp_reset_query(); ?>

							
							</div>
					</li>

					
					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">04</span><time class="time-date" datetime="1980">1980</time></div>
						
						<div class="story-box fig-none">
							<div class="story-box-inner">
								<h2 class="h2"><span class="inner-tit">「一食ユニセフ募金」がスタート（第１１回）</span></h2>
								<p class="inner-txt">開祖さまが朝日新聞にて「一食を捧げる運動」の国民運動化を呼びかけられたのを受け、広く市民の方にご参加いただくため「一食ユニセフ募金」が始まりました。</p>
							</div>
						</div>
							</div>
					</li>

					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">05</span><time class="time-date" datetime="1982">1982</time></div>

<?php
   $args = array('tag' => '1982','posts_per_page' => -1,'post_type' => 'post');
   $the_query = new WP_Query( $args ); 
   if ( $the_query->have_posts() ) : 
	?>
<p class="tit-img-mystory"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/img_tit_mystory.svg" alt="My Story. Your Story."></p>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="story-box-mystory">
	<?php if ( $post->txt_title) : ?>
	<h3 class="h3">『<?php echo esc_html( $post->txt_title); ?>』</h3>
	<?php else : endif ; ?>
	<?php the_content() ?>

</div>
<?php endwhile; ?>
<?php else : endif; wp_reset_query(); ?>

						</div>
					</li>
					
					

					
					
					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">06</span><time class="time-date" datetime="1984">1984</time></div>
						
						<div class="story-box">
							<figure class="figure-history"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/1984.jpg" alt=""></figure>
							<div class="story-box-inner">
								<h2 class="h2"><span class="inner-tit">アフリカへ毛布を（第１５回）</span></h2>
								<p class="inner-txt">アフリカの広い範囲で大干ばつが発生し、甚大な被害がでました。エチオピアだけでも100万人以上の人々がいのちを落としたと言われています。この危機的状況に当時のユニセフ事務局長が全世界に対して毛布の緊急支援を呼びかけたのを受け、アフリカへ毛布を届ける活動を始めました。現在の「アフリカへ毛布をおくる運動」につながっています。<span class="notice">※「アフリカへ毛布をおくる運動」の詳細については、<a href="//www.mofu.org/home.html" target="_blank">こちら</a>からご参照ください</p>
							</div>
						</div>
							</div>
					</li>
					
					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">07</span><time class="time-date" datetime="1988">1988</time></div>
						
						<div class="story-box">
							<figure class="figure-history"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/1988.jpg" alt=""></figure>
							<div class="story-box-inner">
								<h2 class="h2"><span class="inner-tit">「国連平和賞」受賞（第１９回）</span></h2>
								<p class="inner-txt">「一食ユニセフ募金」や「アフリカへ毛布をおくる運動」等の活動に取り組んできた平和への貢献が評価され、立正佼成会青年部に対し「国連平和賞」が贈られました。デクエヤル国連事務総長（当時）から「立正佼成会青年部は、国連の様々な活動を一貫して支持してこられたのであります。（中略）皆さまのご尽力によって明日の世界がそこに住む人々にとって、よりよくなり平和な場になっていくのであります。」とメッセージをいただきました。</p>
							</div>
						</div>
<?php
   $args = array('tag' => '1988','posts_per_page' => -1,'post_type' => 'post');
   $the_query = new WP_Query( $args ); 
   if ( $the_query->have_posts() ) : 
	?>
<p class="tit-img-mystory"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/img_tit_mystory.svg" alt="My Story. Your Story."></p>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="story-box-mystory">
	<?php if ( $post->txt_title) : ?>
	<h3 class="h3">『<?php echo esc_html( $post->txt_title); ?>』</h3>
	<?php else : endif ; ?>
	<?php the_content() ?>

</div>
<?php endwhile; ?>
<?php else : endif; wp_reset_query(); ?>

						</div>
					</li>


					
					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">08</span><time class="time-date" datetime="1999">1999</time></div>
						
						<div class="story-box fig-none">
							<div class="story-box-inner">
								<h2 class="h2"><span class="inner-tit">「社会変革の風をおこそう」　はじまる（第３０回）</span></h2>
								<p class="inner-txt">この年からメーンテーマ「社会変革の風をおこそう」がスタートしました。主体的・創造的に社会問題に対して取り組むことを大切にし、自分たちに何ができるのか考え、活動を始めました。</span>
								</p>
							</div>
						</div>


<?php
   $args = array('tag' => '1999','posts_per_page' => -1,'post_type' => 'post');
   $the_query = new WP_Query( $args ); 
   if ( $the_query->have_posts() ) : 
	?>
<p class="tit-img-mystory"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/img_tit_mystory.svg" alt="My Story. Your Story."></p>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="story-box-mystory">
	<?php if ( $post->txt_title) : ?>
	<h3 class="h3">『<?php echo esc_html( $post->txt_title); ?>』</h3>
	<?php else : endif ; ?>
	<?php the_content() ?>

</div>
<?php endwhile; ?>
<?php else : endif; wp_reset_query(); ?>

							</div>
					</li>

		
		
					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">09</span><time class="time-date" datetime="2007">2007</time></div>
						
						<div class="story-box fig-none">
							<div class="story-box-inner">
								<h2 class="h2"><span class="inner-tit">「大志」、かかげる（第３８回）</span></h2>
								<p class="inner-txt">メーンテーマに「大志」が追加され、一人ひとりが「日本をこんな国にしたい」「私たちの町をこうしていこう」という夢やビジョンを描き「社会変革の風をおこす」取り組みを始めました。</span>
								</p>
							</div>
						</div>
							</div>
					</li>


					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">10</span><time class="time-date" datetime="2010">2010</time></div>
						
						<div class="story-box">
							<figure class="figure-history"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/2010.jpg" alt=""></figure>
							<div class="story-box-inner">
								<h2 class="h2"><span class="inner-tit">ARMS DOWN!キャンペーンへの参画（第４１回）</span></h2>
								<p class="inner-txt">世界宗教者平和会議（WCRP/RfP）グローバルユースネットワークが主催する「A<span class="ws_nwrap ">RMS DOWN!</span>共にすべてのいのちを守るためのキャンペーン」に参画しました。署名活動を展開し、核廃絶と軍縮、ミレニアム開発目標の達成にむけて呼びかけを行いました。</span>
								</p>
							</div>
						</div>


<?php
   $args = array('tag' => '2010','posts_per_page' => -1,'post_type' => 'post');
   $the_query = new WP_Query( $args ); 
   if ( $the_query->have_posts() ) : 
	?>
<p class="tit-img-mystory"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/his/img_tit_mystory.svg" alt="My Story. Your Story."></p>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="story-box-mystory">
	<?php if ( $post->txt_title) : ?>
	<h3 class="h3">『<?php echo esc_html( $post->txt_title); ?>』</h3>
	<?php else : endif ; ?>
	<?php the_content() ?>

</div>
<?php endwhile; ?>
<?php else : endif; wp_reset_query(); ?>

							</div>
					</li>

					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">11</span><time class="time-date" datetime="2018">2018</time></div>

							<div class="story-box fig-none">
								<div class="story-box-inner">
									<h2 class="h2"><span class="inner-tit">青年の日（第４９回）</span></h2>
									<p class="inner-txt">『青年の日2018』のレポートは<a href="<?php echo esc_url( home_url( '/report/seinennohi2018' )); ?>">こちら</a>
									</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="main-inner">
							<div class="num-box"><span class="icn-num">12</span><time class="time-date" datetime="2019">2019</time></div>
							<div class="story-box fig-none">
								<div class="story-box-inner">
									<h2 class="h2"><span class="inner-tit">青年の日（第５０回）</span></h2>
									<p class="inner-txt">『青年の日2019』のレポートは<a href="<?php echo esc_url( home_url( '/report/seinennohi2019' )); ?>">こちら</a>
									</p>
								</div>
							</div>
						</div>
					</li>

				</ul>

<div class="main-inner">
<dl class="story-current">
					<dt class="inner-tit">2020年 現在（第51回）</dt>
					<dd class="inenr-txt">「大河の一滴になろう。」をメーンテーマに、全国統一の行動として「青年の日」当日の正午に祈りのことばを唱和し、各場所で世界平和への祈りを捧げます。 また、各教会で地域社会、世界の平和のための具体的な実践を検討し、実施します。主に、「一食を捧げる運動」や「一食ユニセフ募金」、「アフリカへ毛布をおくる運動」、清掃奉仕、献血などを展開します。あわせて、本年から世界の課題解決に向けた持続可能な開発目標（SDGs）への取り組みを推進します。一年に一度の「青年の日」のみならず、一年中、一人ひとりが自分の身を置くところでSDGsに向けた具体的な実践を展開していきます。</dd>
				</dl>
</div>




		

			</main>
		</div>
		<!--/contents-->
		
<?php
get_footer();