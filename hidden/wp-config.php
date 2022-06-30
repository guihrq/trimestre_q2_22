<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'hidden' );

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
define( 'AUTH_KEY',         'F%sh5JaYDpHGu>!eF6,<%}YYpMTj.w)I3Q+,sxR9{7Jv-(f~QB@}CL?aHf>1F|2.' );
define( 'SECURE_AUTH_KEY',  'Mn|j*m,Efwhj4.C0!,@~o5lv^uYJ!`auGU.c+T,{uPM:zH<gK6(hmoZ=X1M!XiE6' );
define( 'LOGGED_IN_KEY',    'f~56*+4P2bl2PtdpC1fOF-RTP46qXo~5-9s;G]|5ANyMMA0i/kkxhQH<nDW:X|<g' );
define( 'NONCE_KEY',        'FqSvF/(n4ac@K-XGr`(#eCk8k1>4,X()eR<{>X7N=HPfN%`%Q^r0Y5Rb)dps|QN4' );
define( 'AUTH_SALT',        '+fJrYW|t(MnoG<p.)T#5V?wzj<8&$d8Zx&z>x9-2{^(P(ZojT?--D_hh1pT3` .A' );
define( 'SECURE_AUTH_SALT', '^AYe )1#ZMX!j721H}[U2EZj!6UcHzY.VR<5Ll|=0TYuhD~(E#!_2[K2FV$Z,4x9' );
define( 'LOGGED_IN_SALT',   '^Q{eT%~#^FGh52;5&nB2nz<EOndEl7o^PW|O8_ `NJlTiGxmtAI3_tP@!`}{qGQ^' );
define( 'NONCE_SALT',       'VtVE/_~Da7%1]2Vd}dHeiyL|<PP0R:e:A8U0/55-P#>!zMq}zu!y2gnM]_:1`Oef' );

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
