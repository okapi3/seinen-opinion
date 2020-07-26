<?php
/**
 * seinennohi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seinennohi
 */

if ( ! function_exists( 'youthday_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function youthday_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on seinennohi, use a find and replace
		 * to change 'youthday' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'youthday', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		// add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'youthday' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
//		add_theme_support( 'custom-background', apply_filters( 'youthday_custom_background_args', array(
//			'default-color' => 'ffffff',
//			'default-image' => '',
//		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
/*		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );*/
	}
endif;
add_action( 'after_setup_theme', 'youthday_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function youthday_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'youthday_content_width', 640 );
}
add_action( 'after_setup_theme', 'youthday_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
/*function youthday_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'youthday' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'youthday' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'youthday_widgets_init' );*/

/**
 * Enqueue scripts and styles.
 */
function youthday_scripts() {
	wp_enqueue_style( 'youthday-style', get_stylesheet_uri() );

//	wp_enqueue_script( 'youthday-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'youthday-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'youthday_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}

// フィード、コメントフィードへのリンク削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// コメント削除
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}
add_action('widgets_init', 'remove_recent_comments_style');

//jquery stop
//add_action('wp_print_scripts','my_deregister_script',100);
//function my_deregister_script() {
//wp_deregister_script('jquery');
//}
/*ipad切り替え*/
function is_ipad() {
  $is_ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
  if ($is_ipad) {
    return true;
  } else {
    return false;
  }
}

/*スマートフォンを判別*/
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
function is_mac() {
 	// UAを取得
	$ua = $_SERVER['HTTP_USER_AGENT'];
 	// UAに Macintosh が含まれるか
	if (preg_match('/Macintosh/', $ua)) {
 		return true;
 	} else {
 		return false;
 	}
}
/* ---------------------------------------------------------------------------
アイキャッチ画像登録
--------------------------------------------------------------------------- */
// アイキャッチ画像を有効にする
add_theme_support('post-thumbnails');
set_post_thumbnail_size(800, 800, true );
// カスタム投稿タイプでアイキャッチ画像を使う
register_post_type(
    'event',
    // 'supports'に'thumbnail'を追記
    array('supports' => array('title','editor','thumbnail'))
);

// ページネーション
//function wp_query_page() {
//	global $wp_query;
//	$big = 999999999;
//	echo paginate_links( array(
//		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
//		'format' => '?paged=%#%',
//		'current' => max( 1, get_query_var('paged') ),
//		'total' => $wp_query->max_num_pages
//	) );
//}
//    function pagenavi($args = array()) {
//    //デフォルト値
//    $defaults = array(
//    'class_name' => 'pagenavi', //div 要素のクラス名
//    'show_all' => false, //全件表示するかどうか。
//    'prev_next' => true, //「前へ」「次へ」のリンクの有無
//    'prev_text' => __('&laquo; Previous'), //「前へ」のテキスト。
//    'next_text' => __('Next &raquo;'), //「次へ」のテキスト
//    'end_size' => 1, //最初のページと最終のページ部の表示件数（1以上）
//    'mid_size' => 3, //現在のページ部分（但し現在のページを含まない）の表示件数（0以上）
//    );
//    $args = wp_parse_args( $args, $defaults ); //パラメータを解析し、省略されたパレメータにはデフォルト値をセット
//    extract( $args, EXTR_SKIP ); //キーを変数名、値を変数の値として処理
//    echo '<div class="' .$class_name. '">';
//    global $wp_rewrite;
//    $paginate_base = get_pagenum_link(1);
//    if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
//    $paginate_format = '';
//    $paginate_base = add_query_arg('paged', '%#%');
//    } else {
//    $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
//    user_trailingslashit('page/%#%/', 'paged');;
//    $paginate_base .= '%_%';
//    }
//    global $paged;
//    global $wp_query;
//    //paginate_links()の出力を $outputs に格納
//    $outputs = paginate_links( array(
//    'base' => $paginate_base,
//    'format' => $paginate_format,
//    'total' => $wp_query->max_num_pages,
//    'current' => max( 1, get_query_var('paged') ),
//    'show_all' => $show_all,
//    'prev_next' => $prev_next,
//    'prev_text' => $prev_text ,
//    'next_text' => $next_text ,
//    'end_size' => $end_size,
//    'mid_size' => $mid_size,
//    'type' => 'list'
//    ));
//    //★ ul 要素のクラス名を変更（置換）して出力
//    echo str_replace("<ul class='page-numbers'>", "<ul class='pagination'>", $outputs);
//    echo '</div>';
//    }

/*meta keyword description set*/
//add_action('admin_menu', 'add_custom_fields');
//add_action('save_post', 'save_custom_fields');
 
// 記事ページのカスタムフィールドを表示
/*function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'post');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'page');
}
 
function my_custom_fields() {
  global $post;
  $keywords = get_post_meta($post->ID,'keywords',true);
  $description = get_post_meta($post->ID,'description',true);
   
  echo '<p>キーワード（半角カンマ区切りで複数設置可能）<br>';
  echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" size="60" /></p>';
   
  echo '<p>ディスクリプション（ページの説明）160文字以内<br>';
  echo '<input type="text" style="width: 600px;height: 40px;" name="description" value="'.esc_html($description).'" maxlength="160" /></p>';
}*/
 
// カスタムフィールドの値を保存
/*function save_custom_fields( $post_id ) {
  if(!empty($_POST['keywords']))
    update_post_meta($post_id, 'keywords', $_POST['keywords'] );
  else delete_post_meta($post_id, 'keywords');
 
  if(!empty($_POST['description']))
    update_post_meta($post_id, 'description', $_POST['description'] );
  else delete_post_meta($post_id, 'description');
}*/

// 抜粋文の末尾を変更
function new_excerpt_more($more) {
    return '…';
}
add_filter('excerpt_more', 'new_excerpt_more');
 
/*function my_description() {*/
 
// カスタムフィールドの値を読み込む
/*$custom = get_post_custom();
if(!empty( $custom['keywords'][0])) {
  $keywords = $custom['keywords'][0];
}
if(!empty( $custom['description'][0])) {
  $description = $custom['description'][0];
}
?>
<?php if(is_single()): // 記事ページ ?>
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">
<?php endif; ?>
<?php
}*/

// 自動Pタグ挿入禁止
add_action('init', function() {
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_content', 'wpautop');
});
 
add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = true;
	return $init;
});

// コメントのフィードを削除
remove_action('wp_head', 'feed_links_extra', 3);
// 「絵文字」のコードを削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
// 「投稿ツール」のためのコードを削除
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
// WordPressのバージョン表示を削除
remove_action('wp_head', 'wp_generator');


//noindex,nofollow
function add_noindex_insert() {
	if (is_single() || is_archive() || is_search()) {
		echo '<meta name="robots" content="noindex,nofollow,noarchive">'."\n";
		echo '<meta name="googlebot" content="noindex,nofollow,noarchive">'."\n";
	}
}
add_action('wp_head', 'add_noindex_insert');

// Ajax jquery.autopager-1.0.0
//function add_my_scripts() {  
//  if(is_admin()) return; 
//  wp_enqueue_script('jquery'); //WordPress内蔵の jQuery をロード（省略可能）  
// 
//  if(is_home){
//    wp_enqueue_script('jquery', //「autopager」をロード
//					  '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js',
//    array('jquery'),
//    '1.0.0' ,true
//    );
//  }  
//}
//add_action('wp_print_scripts', 'add_my_scripts');

// ページングロード（Ajax風）
//add_action( 'pre_get_posts', 'modify_my_main_queries' ); 
//function modify_my_main_queries ( $query ) {
//  if ( ! is_admin() && $query->is_main_query() ) {
//      $query->set('posts_per_page', 1 );
//
//  }
//}
// フロントページ用ページャーの設定
//add_action( 'parse_query', 'my_parse_query' );
//function my_parse_query( $query ) {
//  if ( ! isset( $query->query_vars['paged'] ) && isset( $query->query_vars['page'] ) )
//    $query->query_vars['paged'] = $query->query_vars['page'];
//}
// パンくずリスト
function the_breadcrumb() {
	global $post;
	$str = '';
	$pNum = 2;
	$str .= '<div class="breadcrumb-list">';
	$str .= '<ul>';
	$str .= '<li><a href="' . home_url( '/' ) . '" class="icn-home"><img src="' . get_template_directory_uri() . '/img/common/icn-home.svg"' . ' alt="ホームへ"></a></li>';

	/* 通常の投稿ページ  */
	if ( is_singular( 'post' ) ) {
		$categories = get_the_category( $post->ID );
		$cat = $categories[ 0 ];

		if ( $cat->parent != 0 ) {
			$ancestors = array_reverse( get_ancestors( $cat->cat_ID, 'category' ) );
			foreach ( $ancestors as $ancestor ) {
				$str .= '<li><a href="' . get_category_link( $ancestor ) . '">' . get_cat_name( $ancestor ) . '</a></li>';
			}
		}
		$str .= '<li><a href="' . get_category_link( $cat->term_id ) . '">' . $cat->cat_name . '</a></li>';
		$str .= '<li>' . $post->post_title . '</li>';
	}

	/* カスタムポスト */
	elseif ( is_single() && !is_singular( 'post' ) ) {		
		/*eddited by Kimura 2020.03.30*/
		
			/* TOPICSシングルページ */
		if ( is_singular('sdgs-topics') ) {
			$str .= '<li><a href="'.get_bloginfo('url').'/sdgs/">SDGs' . '</a></li>';
			$str .= '<li><a href="'.get_bloginfo('url').'/sdgs/topics/">topics' . '</a></li>';
			$str .= '<li>' . $post->post_title . '</li>';
		}else{
			
			$cp_name = get_post_type_object( get_post_type() )->label;
			$cp_url = home_url( '/' ) . get_post_type_object( get_post_type() )->name;
	
			$str .= '<li><a href="' . $cp_url . '">' . $cp_name . '</a></li>';
			$str .= '<li>' . $post->post_title . '</li>';
			
		}
	
		
		/*eddited by Kimura 2020.03.30*/
	}

	/* 固定ページ */
	elseif ( is_page() ) {
		$pNum = 2;
		if ( $post->post_parent != 0 ) {
			$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
			foreach ( $ancestors as $ancestor ) {
				$str .= '<li><a href="' . get_permalink( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a></li>';
			}
		}
		$str .= '<li>' . $post->post_title . '</li>';
	}

	/* カテゴリページ */
	elseif ( is_category() ) {
		$cat = get_queried_object();
		$pNum = 2;
		if ( $cat->parent != 0 ) {
			$ancestors = array_reverse( get_ancestors( $cat->cat_ID, 'category' ) );
			foreach ( $ancestors as $ancestor ) {
				$str .= '<li><a href="' . get_category_link( $ancestor ) . '">' . get_cat_name( $ancestor ) . '</a></li>';
			}
		}
		$str .= '<li>' . $cat->name . '</li>';
	}

	/* タグページ */
	elseif ( is_tag() ) {
		$str .= '<li>' . single_tag_title( '', false ) . '</li>';
	}

	/* 時系列アーカイブページ */
	elseif ( is_date() ) {
		if ( get_query_var( 'day' ) != 0 ) {
			$str .= '<li><a href="' . get_year_link( get_query_var( 'year' ) ) . '">' . get_query_var( 'year' ) . '年</a></li>';
			$str .= '<li><a  href="' . get_month_link( get_query_var( 'year' ), get_query_var( 'monthnum' ) ) . '">' . get_query_var( 'monthnum' ) . '月</a></li>';
			$str .= '<li>' . get_query_var( 'day' ) . '日</li>';
		} elseif ( get_query_var( 'monthnum' ) != 0 ) {
			$str .= '<li><a href="' . get_year_link( get_query_var( 'year' ) ) . '">' . get_query_var( 'year' ) . '年</a></li>';
			$str .= '<li>' . get_query_var( 'monthnum' ) . '月</li>';
		} else {
			$str .= '<li>' . get_query_var( 'year' ) . '年</li>';
		}
	}
	
	/*eddited by Kimura 2020.03.30*/
	/* TOPICSアーカイブページ */
	elseif ( is_archive('sdgs-topics') ) {
		$queried_object = get_queried_object();
		$str .= '<li><a href="'.get_bloginfo('url').'/sdgs/">SDGs' . '</a></li>';
		$str .= '<li><a href="'.get_bloginfo('url').'/sdgs/topics/">topics' . '</a></li>';
		$str .= '<li>'.$queried_object->name.'</li>';
	}
	
	/*eddited by Kimura 2020.03.30*/


	/* 投稿者ページ */
	elseif ( is_author() ) {
		$str .= '<li>投稿者 : ' . get_the_author_meta( 'display_name', get_query_var( 'author' ) ) . '</li>';
	}

	/* 添付ファイルページ */
	elseif ( is_attachment() ) {
		$pNum = 2;
		if ( $post->post_parent != 0 ) {
			$str .= '<li><a href="' . get_permalink( $post->post_parent ) . '">' . get_the_title( $post->post_parent ) . '</a></li>';
		}
		$str .= '<li>' . $post->post_title . '</li>';
	}

	/* 検索結果ページ */
	elseif ( is_search() ) {
		$str .= '<li>「' . get_search_query() . '」で検索した結果</li>';
	}

	/* 404 Not Found ページ */
	elseif ( is_404() ) {
		$str .= '<li>お探しの記事は見つかりませんでした。</li>';
	}

	/* その他のページ */
	else {
		$str .= '<li>' . wp_title( '', false ) . '</li>';
	}
	$str .= '</ul>';
	$str .= '</div>';

	echo $str;
}


////////////////////added 2020.3.26 by Kimura//////////////////////////////

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'sdgs-topics',
    array(
      'labels' => array(
        'name' => __( 'topics' ),
        'singular_name' => __( 'sdgs-topics' )
      ),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 4,
		'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes'),
		'has_archive' => true

    )
  );
	register_taxonomy(
		'sdgs-topics-cat', 
		'sdgs-topics', 
		array(
		  'hierarchical' => true, 
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'カテゴリー',
		  'singular_label' => 'カテゴリー',
		  'public' => true,
		  'show_ui' => true
		)
	);
	flush_rewrite_rules( false );
}

//該当記事のサムネイル画像を取得する
function ks_get_thumbnail( $post_id = '', $opt = '' ){
	if( !isset($post_id) ) $post_id = get_the_ID();
	if( !isset($opt) ) $opt = 'full';
	$thumbnail_id = get_post_thumbnail_id($post_id);
	$image = wp_get_attachment_image_src( $thumbnail_id, $opt );
	$src = $image[0];
	$width = $image[1]*0.3;
	$height = $image[2]*0.3;
	
	if(!isset($src)){
		$src = assets('img','/sdgs/img_seinen_cover.jpg',true);
	}
	
	return $src;
}

//文字数限定
function ks_get_excerpt($charlength,$id='') {
    $excerpt = apply_filters( 'the_content', get_the_content($id) );
    if($charlength < mb_strlen($excerpt)){
        $excerpt = mb_substr($excerpt, 0, $charlength)."...";
    }
	return strip_tags($excerpt);
}

//文字数限定
function ks_get_url_from_slug($slug) {
    //固定ページのスラッグからページを取得
	$page = get_page_by_path($slug);
	//ページIDからURLを取得
	$return = get_permalink( $page->ID );
	return $return;
}

//アセット内ファイル表示
function assets($path="",$key="",$return=""){
    if($key){
        if($return!=null){
            return get_bloginfo("template_url").'/'.$path.'/'.$key;
        }else{
            echo get_bloginfo("template_url").'/'.$path.'/'.$key;
        }
    }else{
        if($return!=null){
            return get_bloginfo("template_url").'/'.$path;
        }else{
            echo get_bloginfo("template_url").'/'.$path;
        }
    }
    
}

//ページネーション
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="prev more" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );
function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="next more" href=', $output);
}

function pagenation($limit = NULL, $post_typed = 'posts', $tax='') {
    global $wp_rewrite;
    global $paged;
    global $wp_query;

    // 検索条件
    $query = array();
    if ($limit != NULL) {
        $query['posts_per_page'] = $limit;
    }
    if (count($query) != 0) {
        $wp_query->query($query);
    }

    $wp_query->query(array(
        'post_type' => $post_typed,
        'posts_per_page' => $limit,
    ));
    
    if ($tax != NULL) {
        $wp_query->query(array(
        'post_type' => $post_typed,
        'posts_per_page' => $limit,
        'tax_query' => array(
	        array(
	            'taxonomy' => 'sdgs-topics-cat',
	            'field' => 'slug',
	            'terms' => $tax,
	            ),
	        ),
    ));
    }
    $paginate_base = get_pagenum_link();

    if( strpos( $paginate_base, '?' ) || !$wp_rewrite->using_permalinks() ) {
        $paginate_format = '';
        $paginate_base = add_query_arg( 'paged', '%#%' );
    } else {
        $paginate_format = (substr( $paginate_base, -1, 1 ) == '/' ? '' : '/') . user_trailingslashit('page/%#%/','paged');
        $paginate_base .= '%_%';
    }


    if( $paged < 2 ) {
        $paged = 1;
    }
    $args = array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'current' => $paged,
        'show_all' => false,
        'prev_next' => true,
        'prev_text' => '&nbsp;',
        'next_text' => '&nbsp;',
        'type' => 'array',
    );
    $pagenate_array = paginate_links($args);

    // 配列がある場合のみ
    if (is_array($pagenate_array) == TRUE) {
        $pagenate .= '<div class="wp-pagenavi">';
        foreach ($pagenate_array as $key => $value) {

            if (preg_match('/current/', $value) == TRUE) {
                $class = '';
            }
            else {
                $class = '';
            }

            // $value = "<span class=\"{$class}\">".$value.'</span>';
            // リンク追加
            $pagenate .= $value;
        }

        $pagenate .= '</div>';
        echo $pagenate;
    }
}

function get_post_number( $post_type = 'post', $op = '<=' ) {
    global $wpdb, $post;
    $post_type = is_array($post_type) ? implode("','", $post_type) : $post_type;
    $number = $wpdb->get_var("
        SELECT COUNT( * )
        FROM $wpdb->posts
        WHERE post_date {$op} '{$post->post_date}'
        AND post_status = 'publish'
        AND post_type = ('{$post_type}')
    ");
    return sprintf('%03d', $number);
}

function ks_current_class($slug=''){
	if( $slug ){
		global $post;
		$current_slug = $post->post_name;
		if( $current_slug == $slug ){
			echo "page-link__list-link--current";
		}
	}
}

function my_acf_init() { if (function_exists('acf_update_setting')) { acf_update_setting('remove_wp_meta_box', false); } } add_action('acf/init', 'my_acf_init');

////////////////////added 2020.3.26 by Kimura//////////////////////////////
