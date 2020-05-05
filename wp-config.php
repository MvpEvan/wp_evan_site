<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wp_evan_site' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'root' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'supinfo' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{8q1!m3vJ^WFkq}yJ#F,RWLYIoyFc)H/MYr%KJ&n<@U$|n3Xt9x;0J*X:`iJTfXT' );
define( 'SECURE_AUTH_KEY',  'S3oA-IA8*}wD9Iz)@-=q.D sELWSyJ6tm^vY!}T<YjJ?Xdk-hK;EXGf$*VuA/j!]' );
define( 'LOGGED_IN_KEY',    'Q(EhY:1BFkOlwyA7VGUpFnZ1?@l?]0(UqY0XQRRI~71o.}U4ym=8EJPdp0M,R]&&' );
define( 'NONCE_KEY',        'K3)77+%!iC6::q_lWj+{6)BS9ZAb/.Ov9Dux )<2@N +N2];}nFF`/UwD)XK-kZr' );
define( 'AUTH_SALT',        '?6:A{nONqg@C9zPrl^`8$>TP>D~?2D~C`hb#0[PMCQ@!s!II]kJ/&te%m@26eR**' );
define( 'SECURE_AUTH_SALT', 'uYwW{0PwFm]bGa!;${dC6O!YD5?ah*5fpq$kK4e<Y3%VFuV)FnY/Ib=R 8DM &iB' );
define( 'LOGGED_IN_SALT',   '-8^#;fyoe;K1CtRZ-o7#Qp,>h(}Y?*Gq1P}>3hwRmIcv85pa0vugd8zZmV[GZ!N,' );
define( 'NONCE_SALT',       '`Z%%mUwml{BC[UV 1bnXzl5 ,?M&RsUhZck^^S4f1gU|!p*Bhu<UQ]FayTh`@0M0' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
