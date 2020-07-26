<?php
/*
 * Template Name:report-2018
*/
get_header();
?>

<h1 class="h1"><span class="sub-tit"><span class="sub-tit-inner">report</span></span>2018</h1>

<div class="main-inner">
	<div class="rep_wrap">
		<div class="contArea  rep_inner">
			<h1 class="h1">REPORT</h1>
			<figure>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rep/main_visual.jpg" alt="活動レポートを彩飾る写真">
				<figcaption>今年も、「大志～社会変革の風をおこそう～」をメーンテーマに全国各地で「青年の日」を行いました。<br>身近な地域、社会そして世界平和に向かって、“いま”私たちにできることを考え、行動し、たくさんの出会いをいただくことができました。全国から届いた活動報告の中から当日の様子や出会いのエピソードなどをご紹介します！</figcaption></figure>
			
			<ul class="list_link">
				<li><a href="<?php echo esc_url( home_url( '/report/seinennohi2018/vol01/' )); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rep/icn_link01.png" alt="活動レポート Vol.01"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/report/seinennohi2018/vol02/' )); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rep/icn_link02.png" alt="活動レポート Vol.02"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/report/seinennohi2018/vol03/' )); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rep/icn_link03.png" alt="活動レポート Vol.03"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/report/seinennohi2018/vol04/' )); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rep/icn_link04.png" alt="活動レポート Vol.04"></a></li>
			</ul>
	<ul class="list_link">
							<li><a href="<?php echo esc_url( home_url( '/report/team-ichijo/' )); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rep/icn_link_ichijo.png" alt="TEAM ICHIJO～チーム一乗～"></a></li>
			</ul>
		</div>
		<!--/contArea  rep_inner-->
	</div>
	<!--/rep_wrap-->

		<?php
get_footer();