<?php
/**
 * header
 *
 * @package seinennohi
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if (is_ipad()) : ?>
<meta name="viewport" content="width=1024">
<?php else: ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php endif; ?>
<meta name="format-detection" content="telephone=no">
<?php if(have_posts()):while(have_posts()):the_post() ?>
<?php endwhile;endif; ?>
<title><?php if ( is_home() || is_front_page() ) : ?>青年の日<?php else : ?><?php echo get_post($post->post_parent)->post_title; ?> | <?php the_title(); ?> | 青年の日<?php endif; ?></title>
<meta name="description" content="<?php if ( is_home() || is_front_page() ) : ?>世界が平和になりますように人のことを思いやる人がふえますようにまず私からやさしくなります（黙とう）<?php elseif (is_page_template('timeline/timeline.php')) : ?>青年の日-第50回-タイムラインを通して活動の様子を確認できます。<?php elseif (is_page_template('gallery/gallery.php') || is_page_template('gallery/gallery_movie.php')  || is_page_template('gallery/gallery_photo.php') ) : ?>青年の日-第50回-活動の写真や動画を確認できるギャラリーです。<?php elseif (is_page_template('history/history.php')) : ?>青年の日-第50回-50年を振り返るページです。<?php elseif (is_page_template('report/report.php')) : ?>青年の日の各レポートページです。<?php elseif (is_page_template('report-2018/report.php') || is_page_template('report-2018/ichijo.php') || is_page_template('report-2018/vol01.php') || is_page_template('report-2018/vol02.php') || is_page_template('report-2018/vol03.php') || is_page_template('report-2018/vol04.php')) : ?>青年の日-第49回-のレポートページです。<?php elseif (is_page_template('sidebar/about.php')) : ?>本サイトは、「他の教会の活動の様子を知り、励まし合ったり、情報交換をしたい」という全国の皆さまからのお声をいただき、「青年の日」の情報サイトとして２０１７年からスタートしました。<?php elseif (is_page_template('sidebar/howto.php')) : ?>投稿方法についての説明ページです。サイトの右下にある投稿ボタンから投稿してください。教会で考えたスローガン、意気込み、今抱えている葛藤、つぶやき等々自由にわかちあいましょう！<?php elseif (is_page_template('sidebar/kotoba.php')) : ?>開祖さまのおことば「青年よもっと燃え上がるのだ！！」<?php elseif (is_page_template('sidebar/contract.php')) : ?>本利用規約（以下「本規約」）は、宗教法人 立正佼成会（以下「弊会」）が「青年の日」ウェブサイト（以下「本サイト」）で提供するすべてのサービス（以下「本サービス」）の利用に際して遵守していただく事項を定めています。本規約に定める事項に同意した上で本サービスをご利用ください。<?php elseif (is_page_template('sidebar/personal.php')) : ?>宗教法人 立正佼成会（システム運用会社含む、以下－「弊会」といいます。）では、皆さまに楽しくサイトを利用して頂くため、プライバシーの尊重につとめています。皆様の個人情報は、以下の方針に基づき、適正な管理に努めてまいります。<?php else : endif; ?>">
<meta name="keywords" content="<?php if ( is_home() || is_front_page() ) : ?>実施要項,一食ユニセフ募金<?php else : ?><?php the_title(); ?><?php endif ; ?>, 青年の日">
<?php wp_head(); ?>
<meta name="twitter:title" content="青年の日">
<meta name="twitter:description" content="世界が平和になりますように 人のことを思いやる人がふえますように まず私からやさしくなります（黙とう）">
<meta name="twitter:card" content="summary_large_image">
<meta property="og:url" content="http://www.kosei-kai.or.jp/youthday/" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/sns.jpg">
<meta http-equiv="Content-Style-Type" content="text/css;" />
<meta http-equiv="Content-Style-Type" content="text/javascript;" />

<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css" media="all">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.gif">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/webclip.png">

<!-- JS -->
<script>!window.jQuery && document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"><\/script>')</script>

<?php if ( is_home() || is_front_page() ) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top2020.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugin.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/maintheme.css" media="all">
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.autopager-1.0.0.js"></script>
<?php elseif (is_singular('sdgs-topics') || is_tax( 'sdgs-topics-cat' ) || is_archive( 'sdgs-topics' )) :?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sdgs.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sdgs-topics.css" media="all">
<?php elseif (is_singular('sdgs-opinion') || is_tax( 'sdgs-opinion-cat' ) || is_archive( 'sdgs-opinion' ) || is_page('opinion')) :?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sdgs.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sdgs-topics.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sdgs-opinion.css" media="all">
<?php elseif (is_page_template('sdgs/what.php') || is_page_template('sdgs/mission.php') || is_page_template('sdgs/sdgs.php') || is_page_template('sdgs/17goals.php') || is_page_template('sdgs/topics.php') || is_page_template('sdgs/opinion.php'))  : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sdgs.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sdgs-topics.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sdgs-opinion.css" media="all">
<?php elseif (is_page_template('maintheme/maintheme.php')) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugin.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/maintheme.css" media="all">
<!-- CSS -->
<!-- JS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery_v1.8.2.js"><\/script>')</script>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/gamma.css" media="all">
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/modernizr.js"></script>
<noscript><link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/no_js.css"/></noscript>

	<?php elseif (is_page_template('report-2018/ichijo.php')) : ?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/report2018.css" media="all">
	<script>
		$(function () {
  $("body").addClass("repArea");
	});
	</script>
	<?php elseif (is_page_template('report-2018/report.php') || is_page_template('report-2018/vol01.php') || is_page_template('report-2018/vol02.php') || is_page_template('report-2018/vol03.php') || is_page_template('report-2018/vol04.php')): ?>
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/report2018.css" media="all">
	<script>
		$(function () {
  $("body").addClass("repArea");
	});
	</script>
	<?php elseif (is_page_template('linestamp.php')) : ?>
	<?php elseif (is_page_template('report-2019/report.php')) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css" media="all">
	<?php else : ?><?php endif; ?>
	<?php if(is_archive( 'sdgs-opinion' )){?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sdgs-opinion.css" media="all">
	<?php } ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( !is_home() && !is_front_page() ) : ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content'); ?></a>
		<?php else : ?><?php endif; ?>
	<!-- wapper -->
	<div class="wrapper">

		<header class="header">
			<div class="header-container">

			<?php if (is_front_page() ) : ?>
			<h1 class="header-logo-txt">
				<a href="<?php echo esc_url( get_home_url() ); ?>" class="header-logo-txt__link">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/img_header-txt.svg" alt="">
				</a>
			</h1>
			<?php else : ?><?php endif; ?>

			<?php if ( !is_home() && !is_front_page() ) : ?>

			<div class="header-left">
				<div class="header-logo sp-only">
					<a href="<?php echo esc_url( get_home_url() ); ?>" class="header-logo__link">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/img_header-logo_white.svg"  alt="">
					</a>
				</div>

				<h1 class="header-logo-txt">
					<a href="<?php echo esc_url( get_home_url() ); ?>" class="header-logo-txt__link">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/img_header-txt.svg" class="pc-only" alt="">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/img_header-txt_white.svg" class="sp-only" alt="">
					</a>
				</h1>
			</div>
				<?php else : ?><?php endif; ?>

				<?php wp_nav_menu( array('menu' => 'gNav' ) ); ?>

				<button type="button" value="MENU" class="header-menu-button js-spmenu-trigger">
					<span class="header-menu-button__lines">
						<span class="header-menu-button__line header-menu-button__line--top"></span>
						<span class="header-menu-button__line header-menu-button__line--center"></span>
						<span class="header-menu-button__line header-menu-button__line--bottom"></span>
					</span>
				</button>

			</div>
			<div class="header-menu-overlay js-spmenu-trigger"></div>
		</header>

<?php if ( !is_home() && !is_front_page() ) : ?>
<!-- breadcrumb START-->
<?php the_breadcrumb(); ?>
<!-- /breadcrumb END-->
	<?php else : ?><?php endif; ?>
		<div id="content" class="contents">
			<main class="main" role="main">
