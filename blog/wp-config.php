<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'coulton.org');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'punkrock');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '>UM*b&xKE;%S7B>u)ecC1[gby6U#Gn.X{C:B}|x$O07},ViZZy~6dLVD{UC%|{K:');
define('SECURE_AUTH_KEY',  'QWVhFHktS?IyjOmzx$R&TG.(EMBdfT|A5w`b&aP<>cp+%$Jl?..tgB;Lk1({C%[V');
define('LOGGED_IN_KEY',    'zfvj0n:2|BFaM/fN5TDP,;U$B6XAkv:C=JyA b7t7C!AbvFvAv~6^:2xK*QaUliW');
define('NONCE_KEY',        'p-*kZZ1j/f;26pMJ`BX7vK?T;3sYU+FveImt:DeJRh:pY`XG9x =|oK?MT?;o9$=');
define('AUTH_SALT',        ' :01ri[|@ygf5FrS/G_5rbwrcKi&LDF$87D?FrP(tVk#nD5%+Q|W<3W?~PPz3Y|/');
define('SECURE_AUTH_SALT', '`S)P,(Ls$7jd %/+y*!IlqP<2@s2Dq<W[=pd],}U_M$|<_0p&G !N|EX$x>]JYE&');
define('LOGGED_IN_SALT',   '#<:<5F~/lOusb,k&-o46* lFL sbrJXuz-e[n1M-L7 W_plQ,@`X $Ju2o*5`@U1');
define('NONCE_SALT',       '.[CVD(keyViKYe],_TO+SxZeEMx_jO-!![diXZ*+<vk5mPoBeq>/h,tU?r%6BB},');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tdb_blog_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
