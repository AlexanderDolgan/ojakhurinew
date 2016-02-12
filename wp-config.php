<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '5704737_ojakhuri');

/** MySQL database username */
define('DB_USER', '5704737');

/** MySQL database password */
define('DB_PASSWORD', 'Alizee12');

/** MySQL hostname */
define('DB_HOST', 'mysql.5704737.myjino.ru');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R=}B~WGb`-zZ|A|LS>eHe-n~Cf-::pl5LT+? ~~34>5qv7F_P%Ogf>f0WO,_Rrb`');
define('SECURE_AUTH_KEY',  '8)s` 7R44ztDstwR=mtq1D$I9J7@i-3lg<lHLrjMHfu~Eb^C7V-OJ2$i1pzsV9)>');
define('LOGGED_IN_KEY',    'q;+JWf]^.lbnwGqt@Ut4FG-2|-&S?Q=W7D%C3{PcDnkL[U$O0]u&pRwc8&U(+m4k');
define('NONCE_KEY',        '*4O4XWm  i#!]/HSAorx75{|[|s9R+f_laP]9KJ,8]{^2wgHRu!%7tAE8Il]ClM}');
define('AUTH_SALT',        'CnYK?Qz}=_<dWx=jYu|/8`W@2u1li/0gL1/4o_l[-Pj?jcu`m 4[PEQ[/l+Q-0}|');
define('SECURE_AUTH_SALT', '%RLIKU],uxrC2q[H#<&8lFQjynLhwK9ol&}n7P^.8O,@>{QSvWl+?PyZpp/7&i-z');
define('LOGGED_IN_SALT',   'g=Yx=_!AOuD?PP+5sv1^F+[|*pXRQJ.[l_-: }9C71/-nV|J,K+Sk:~VLt_ys c1');
define('NONCE_SALT',       '9D~F+6bYV#q2Vn;n=c+jIy >6.Iof[gEq$m=u:a09$rSHaOf&K1CFD+&BH(Y73-W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
//define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', false);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost:8888/ojahuri');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
