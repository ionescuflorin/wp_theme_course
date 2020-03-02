<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'univ' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.;@c0eF^+JN7ATUmp>T.9E{VFN@kV#)M>^($93&=DUh>lRsssu@Fp9i2#`/ck%A>' );
define( 'SECURE_AUTH_KEY',  '_2.)l,]ITDaYmJ#O3wF4#K6.s36t@H@?Cep _s&A~?B[cc4<O{*dtXpX2bGC+P$a' );
define( 'LOGGED_IN_KEY',    'CJ$&j4v]q78)hCM&bO?v>_7/,%7:D.I[7[F}15+{~xy-tyG,>oW)sjw%jM|[m){4' );
define( 'NONCE_KEY',        '_ $aCa*?nm2BRH -<.;|]?/SE.|%&hxomUymJiX}> grte?`i,-,jBn7eBq%Wf/6' );
define( 'AUTH_SALT',        '3#Ah;ElB2+C9c)A6kv1A`4_4SiO$~k`(_q:Aipsgav0!BTJNZaF9{XFTehH)Sclw' );
define( 'SECURE_AUTH_SALT', 'xJ]M-XR(C49THuhP*e^gA8k}[p^ZsodZ3QzVNEM4<sS6b,BuK7SX@gs]+0F]x8@Z' );
define( 'LOGGED_IN_SALT',   'F(XcFuBz!h1+u/|=r$A#R Zd[dO=w1(]Wi(R4MKcSN~KoZ]4:Du(7BQ3 A?We`ly' );
define( 'NONCE_SALT',       'rl$[cnKPnBSqv/07z{,ZMM)k0j#1cKM#+:^u{TLg+(ux:FLjkUNu;q)rsCjr?h%.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
