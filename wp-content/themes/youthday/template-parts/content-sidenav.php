<?php
/**
 * content-sidenav
 *
 * @package seinennohi
 */
?>
		<aside id="js-side-nav" class="side-nav">
			<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/img_header-txt.svg" alt="青年の日ロゴマーク"></a></h1>
			<p class="logo-lead">大河の一滴になろう。</p>
			<div class="side-nav-area">
				<?php wp_nav_menu( array('menu' => 'sideNav' ) ); ?>
			</div>

			<div class="share-area">
				<h2 class="h2">SHARE</h2>
				<ul>
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://www.kosei-kai.or.jp/youthday/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/icn-fb.svg" alt=""><span class="inner-txt">Face book</span></a>
					</li>
					<li><a href="http://twitter.com/share?url=http://www.kosei-kai.or.jp/youthday/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/icn-tw.svg" alt=""><span class="inner-txt">Twitter</span></a>
					</li>
					<li class="sp-only"><a href="http://line.me/R/msg/text/?http://www.kosei-kai.or.jp/youthday/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/icn-line.svg" alt=""><span class="inner-txt">LINE</span></a>
					</li>
				</ul>
			</div>
			<div id="js-nav-side-toggle" class="nav-side-toggle"></div>
		</aside>
