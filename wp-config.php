<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'route134-wp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qtGc_&;z4YuhI6^~CrO|<[+@F(GBws[k}pPx$l+c->{N8WQUl8%TqaL?8;P&r~)|');
define('SECURE_AUTH_KEY',  'w(TK0]WVy(fc M?_NeM9q[s=~)uI^Za=:,|ldxl~|GS,R|-A<|oy{(y+|?n=V[yy');
define('LOGGED_IN_KEY',    '6EoJ(0o8y d~Es I{^*siizf@x^{;Avlu3>BIBt5z%BiF&e&B*n~4&-*-gXd#8r.');
define('NONCE_KEY',        '<?Fm3G$M`k$vK(.]7a <z8B]wXEL!,DwgpI{<nXcRe+dxce,Mhd]C)T1I4#ad|+%');
define('AUTH_SALT',        ' ~ezepAS`HH&?gn*7`$IWNf8m78h^hs~&%rDfd+cGPS 9&7#Hsr]TVK R-.BLuyI');
define('SECURE_AUTH_SALT', 'R+#M+%6/syc#|^k--bz+o>H3|!}h{^yk^nqy~fULsx>-n)A|86IsPxG|4LToKh|Q');
define('LOGGED_IN_SALT',   'KiIql7o!L&r }GuE oETm8mhDF?2U2cOh+)WgBu0kl`aEM[!lu8a%/0}.!m-mKxN');
define('NONCE_SALT',       'kI]S;HDKEC?-8qzyJ|}f}uJS89g1J%q6tTY}G^t] WkAk0]$Is <bu^=)v&d+nyV');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
