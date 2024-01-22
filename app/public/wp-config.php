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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Jxj2v%)rnw(!S8RFc^*Bn;;-T%N~`K,]$fH6W0M.Py%OFj*%R@a}Ot-Wo](:+DF ' );
define( 'SECURE_AUTH_KEY',   ':b8XqE40Y{6Ao =^KXE-:OWhU]|A<x EXj0py<o WCSw#~69DGav!QSVCCDm7W0%' );
define( 'LOGGED_IN_KEY',     '^(ytvMiDbxNt99?9>,.<D_g@/ZK|969qu~OSr2jr#W9|#EXD?N/;/c5[rmP?+o@K' );
define( 'NONCE_KEY',         's:HuV,hEV)1?)mbL5x0t>#3lBzjPL.F$|0Whx;`KqvfM8g{:tkvuQ!o`x ~_)nrO' );
define( 'AUTH_SALT',         '$6}J=J/0su*)y8q#oY!4Lysa#^Yt[{/|juQ^^W}5&]P$I(nL:cN$tcvZIO4pprT4' );
define( 'SECURE_AUTH_SALT',  'N+MC3R!+M>+7rcm[4=u!(iuJr]Hx.~NtNPUP=Iy;olX@a2/%,h)oN?h%fqw~LGgr' );
define( 'LOGGED_IN_SALT',    '-%yHytsQWk1X)kN,.&/5FrhWTVYoIwG}C7*SZ@:Of2)xJc.A.PiJ:4*!G`vv8fYl' );
define( 'NONCE_SALT',        ',a<Qg>&86M$f8&k~srL,4?oa?YEcagP gw4WG^v e[1dgmX6Qv)s/]y,5I& KL9n' );
define( 'WP_CACHE_KEY_SALT', 'wh5~#YJrk+D{V+S?l^U%)=v!vR,xU>CCZrl7n(~Wy8i6IGQzy#~QmcgS@ZR%p]_a' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
