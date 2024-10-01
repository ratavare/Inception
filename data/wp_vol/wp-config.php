<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'IluvB4ananas!' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'C@hB<;6$s7`@*gV*9!0l;+4Y)yh5n[m+|tt,vHay=(bmx%G=76>PLd [$!M.qp*p' );
define( 'SECURE_AUTH_KEY',   'c8ye4adJ*u,%LDeC;%,Tqz[FNlDg5/[N,d{MAw(T$JZxnW|laveQ<G+$O[Na/ZDO' );
define( 'LOGGED_IN_KEY',     '%[kUDbDk,&|C,@7Xg$!A?H{qnRO22 5Ob}5[K<F=yfkH ^[ u 5<{#Xj&U~7+[:>' );
define( 'NONCE_KEY',         '#C^0{2[t08:{/L$T1Q;e[n-H;y4eF,Bp>-&HtyxB^#i+Oe/ng bXLzU@N=9~-g,n' );
define( 'AUTH_SALT',         'cf%1Ykso.BZ%1e=P[ucXD?=W.M>vu@*^0i[M-zCb0bK5{n-W~7q.m~$np$204, >' );
define( 'SECURE_AUTH_SALT',  'l#r3wd{+We>}tOGN;; j+z6Sv<pR^ou=d&}T%C@GsG~dN7_i*nyrsTu^!+ueR:yJ' );
define( 'LOGGED_IN_SALT',    'MOpJL[Yki#G(4:XHB9DECnSM#|.oM=`Q1TBjiF-[lyVfrXtAbw/>zV5;,su/e/Iv' );
define( 'NONCE_SALT',        'XP$&TgAma.]R`bmT8:|i_4yif*b*n:g}Kl8s)23g@Z!lMD~@Y3A8JG7b},O)(_/x' );
define( 'WP_CACHE_KEY_SALT', '(*YaY&l]nad[BsRcfl~~ON#y5b`U,%{`%NOWLR.r[_eQ7-/nKtL}%@T;sDm.*:#B' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('WP_CACHE', true);
define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_PORT', 6379);
