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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdd-wp-rolino' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'DO@dEa6WX^CZq.4-W!AMjcWX)UQraAS,r}Z?Pv_!U,R%5R54viHtxTYcklTCw6L^' );
define( 'SECURE_AUTH_KEY',  'c%{WX=%SD<eOvS6$OUq3z<Z.F:-U*AdC#Ll<$N.h,~@;qQf!)SyZjJjy`8`vgHu{' );
define( 'LOGGED_IN_KEY',    '<$4>RC`SQIO >wN?d$,5u83KuC.F!HPVAMbs)/|u~/I;2z/N-k1 r<Q9HMnfdBX?' );
define( 'NONCE_KEY',        'VDx?50NGJ}}XBhBsv*c7mDeNAQNIvRmk%aa++IfB8d7]J<i6R6}nz$`{9m<76.9=' );
define( 'AUTH_SALT',        'rxg[983&a~Y|o]EsEADq$6[gbSA-v;3! !sOZ*rJ-yit$8;8j0CgBpC;Su,P#kx.' );
define( 'SECURE_AUTH_SALT', '0Y=`Pxw1b;.nMW9qzODm_Y2gkC?pR8*g6T_*YS5m%+}NZ`f9)v|%K0`+o@q(xfp0' );
define( 'LOGGED_IN_SALT',   'T:&J?{`a+#&te)P?iD1J,u{H,,X*_FQz,(bPeC;[sOZ~~Tj!.B`&M3@/zqU]h?=P' );
define( 'NONCE_SALT',       'ig]*`*zt>6n$V0(1Ci3sQ5lPWJfdS= fZ-NYk,hIm.|xt)1[._8D@DYKO|s8H=2$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
