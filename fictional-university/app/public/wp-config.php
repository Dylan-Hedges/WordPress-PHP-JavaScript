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
define( 'AUTH_KEY',          'HJ/r|[_?`.wzR`??~aFk_T;{z,Ti[XeS5n,M3KQDtr2><e2UD:./_q;;a*ybLq0M' );
define( 'SECURE_AUTH_KEY',   'vLd/Jy9?p.v+$A0w@v[t!Lb>H24Li~:K@sRA? qQu@Wn%p`dqI8B`>8;)0-.%3G-' );
define( 'LOGGED_IN_KEY',     '{Jjy`ddU`GvY|id<=MpmR>959i_o$>11B,uUV~9k6DcNV~fS-&]3`Hakuc]r&x$O' );
define( 'NONCE_KEY',         '&oM`4tN_CRTRV:5&cbPl0M:C=.dn}Qi?phP-*{%pq1pE)e54OQB3~aoT*R=^?pI6' );
define( 'AUTH_SALT',         '/jNGpd>N6u%E(@$MckU<kv$d10*g3$r8S^g8xCCFqDr?usn5n<:D5zHQh-i=9G{V' );
define( 'SECURE_AUTH_SALT',  'd?8*+k$r=ip5[-wA>D7UiN;}]w#CmSS3m1ql*RJw-&VBJ^PeKt@7gp/{Y{(aCgVx' );
define( 'LOGGED_IN_SALT',    '[*DQ{DK3HQjk8Zg>iwz7--Zq|3zl9G[|m+}!HPqy-?+VaOtc]wB#_TH,<F5/FT7F' );
define( 'NONCE_SALT',        ',`=wMV,9KBOhn[>Dzvi=a/IDMbIN=2m>>l^?*|7SZ5E?H0(Avc+Qi[rzss/737kK' );
define( 'WP_CACHE_KEY_SALT', 'L-!Y31zC2%/{,t 2{c9}ydAKTO&@0}Y{nOIpTk#aCQ-o15qhh~QY]~XioLPk5#dO' );


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
