<?php

/**

 * WordPress の基本設定

 *

 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。

 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして

 * 直接編集して値を入力してもかまいません。

 *

 * このファイルは、以下の設定を含みます。

 *

 * * MySQL 設定

 * * 秘密鍵

 * * データベーステーブル接頭辞

 * * ABSPATH

 *

 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// 注意:

// Windows の "メモ帳" でこのファイルを編集しないでください !

// 問題なく使えるテキストエディタ

// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)

// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。


// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //

/** WordPress のためのデータベース名 */

define( 'DB_NAME', "local" );


/** MySQL データベースのユーザー名 */

define( 'DB_USER', "root" );


/** MySQL データベースのパスワード */

define( 'DB_PASSWORD', "root" );


/** MySQL のホスト名 */

define( 'DB_HOST', "localhost" );


/** データベースのテーブルを作成する際のデータベースの文字セット */

define( 'DB_CHARSET', 'utf8' );


/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */

define( 'DB_COLLATE', '' );


/**#@+

 * 認証用ユニークキー

 *

 * それぞれを異なるユニーク (一意) な文字列に変更してください。

 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。

 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'DZ;V;:j!wlv?xVu]@k@Uee603w[ELX<[dM[(fh& r?6oym10K MZ=D%OfN*r *8M' );

define( 'SECURE_AUTH_KEY',  'v (KC=?%Q4`Nwxz?.@;&)|`;FCpI`VZx88SWFcebmED7J|.)Xu.TZSjOZ~:HRAK3' );

define( 'LOGGED_IN_KEY',    '.W+jk}5<e,[*Sd&IZPn&l|WB}%Z?OeU9m&D,BdDMG?{hisYXB0v:m4?W> ]0X~y{' );

define( 'NONCE_KEY',        'Z3vV*,zHi/50:Kf0hHhZ:UZs8eICkFq9FigKc?XA.WE6tu%(:>Hc}LHD-d1ycvJr' );

define( 'AUTH_SALT',        'hia>jvrReF^3aEM`SndXM8]hNQK})[9Wy#]G/+6~(B$0*VffkVTQaUxHEatPzJp5' );

define( 'SECURE_AUTH_SALT', 'NToC%Ms}`?1Uu(B1Y+h3IqM|qH@TgAKQNITxE6wWjz?H-%Qx-=)i/`7^i;L:&UO[' );

define( 'LOGGED_IN_SALT',   '>&;vg5?2=n9EiIqMwB8g MzX;enmUV*WXO~CnZk}E4(rbTr&4wL2`x?qTEEjvqz.' );

define( 'NONCE_SALT',       'CN?4&clM>CGX<wB%AqfSCF(x;Pv{8:obGwdC`!LLc=)I5]M#}%g41H5Lq_K/U|2L' );

define( 'WP_CACHE_KEY_SALT','<MfduE8z~D;d6x>d}eB1j/xnvHowOo06% D5#4eY7235Y!z%-StL*S$34-0D$-vK' );


/**#@-*/


/**

 * WordPress データベーステーブルの接頭辞

 *

 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を

 * インストールすることができます。半角英数字と下線のみを使用してください。

 */

$table_prefix = 'wp_';


/**

 * 開発者へ: WordPress デバッグモード

 *

 * この値を true にすると、開発中に注意 (notice) を表示します。

 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。

 *

 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。

 *

 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

