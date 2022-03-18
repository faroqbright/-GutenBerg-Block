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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gutenbergblock' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'S]KetT$rC$JVCbIS&_:)X7iJA}#h~o2K wU~=zOdj!,Yyg/AUE*G0auX.b:eQI0<' );
define( 'SECURE_AUTH_KEY',  '9]qG$~dTQfxo9${feZ|5w5)U@i/o6_]0f/EW:?Jlzh:(4N=;UWL(Vq}w_WWK?`;/' );
define( 'LOGGED_IN_KEY',    '!]}E|t)J/jE8C Bs3kT>AJKs?Nt{QEpRD<U&NX~@v4G_z(>aIvs @$ba/l=`|ap$' );
define( 'NONCE_KEY',        '*go(6 X,O*ns4+8r!UB3vws5aO_Gl9JCgQFfT,T]SsY5;nvJUW>FV#wWp< WOQfK' );
define( 'AUTH_SALT',        'tN<T5R#xtxmU*T,O[YEibBN|jrxRxT>WG]g/9ndoO!J.{Hz3,aX=u?lvHje!(]4`' );
define( 'SECURE_AUTH_SALT', '<^wlwZmB2y%A`gzFrb&F]8)3`*#|M)5<5K7*^)Ul%f5>cTmh^Z(1N{-ZqD<wK{- ' );
define( 'LOGGED_IN_SALT',   '@>lj;`2oz2O4Y$}}7cp0Bs};h|Y=.3`g=~a!s8ZZ>fRH]}cxG%#6n4;!oUf(:!G3' );
define( 'NONCE_SALT',       'DWzu?Yn,|&Ht E;DuN`zKz/-`@;e9F?E$q) fW!Ez(*nV4p+Mb;UOlY-yKljZ;G}' );

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
