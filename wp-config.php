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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'chirizirisdb');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wpuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'RTmy4aqQ# O i:9$;7T==$w@G1FJ|HM)j jOn O_B~%wS<9CG&2SYx_yk8ZL1XWu');
define('SECURE_AUTH_KEY',  's<wSl,SCYqxM3<r{/@>FOw;o&$%h4+2Zfcc/A$J-<x5O1aIb,;.2`0&_Zcv4C/&l');
define('LOGGED_IN_KEY',    'w+Zd@l;1p)VvMC,D8-r^#)>X2:MFUbtX<OWg*r%h+S.T_]pfl|eN<K9cjh<wK:JA');
define('NONCE_KEY',        'q|TT}KE7NzNPv.a3K6G}_-mU<zlMuJ%D-+7NrDE#9#Oa`{0bF60<F)b~PJ+;^nMD');
define('AUTH_SALT',        'Of-]F1HE(V{1z}/2C84]b`xwV!XUl){6:K&Fov/^7a)IwQe.hB3nP]p!746h~S`i');
define('SECURE_AUTH_SALT', 'VU4d)y9`3ZqLsG`in2C FPT&G&[L@zC;W1]ig;nMJ3vVe:&&FDImL|w%gxoe)g7%');
define('LOGGED_IN_SALT',   'gxLz:o!?Qd,qAS00#=]e4B{%syA)lT>zeqHEUp1Yr IGVn}nv]gy_OV-3md^=MK0');
define('NONCE_SALT',       'IDQ~3*a[ruaI;B,}wu/vpSZ +q_>_^X#8[3#bi)s;[`osv[A;b5@ Q8?KTiF]j!K');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'c1_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
