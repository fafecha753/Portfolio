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
define( 'DB_NAME', 'port' );

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
define( 'AUTH_KEY',         'h<05W9rp76BZ@&MfG/6E_;*A,Gi8y&2u*O7:_gHsfM$+6I+z@={Osw4h_1hbY39f' );
define( 'SECURE_AUTH_KEY',  'YTB`-MOkmP}r$G&ac-_t5X%J-._~KhV0Kws*K_<4+,bM}oC}N^xK.cXiaW[<pzj{' );
define( 'LOGGED_IN_KEY',    '*nf:fj_4I?Su8/M/9soR+4| #~k7-kOF?U-*A,14I+<^VYJC4osuGBk>Gl~UNk.$' );
define( 'NONCE_KEY',        '?>z&va&r@v#T,>od}FI?x]O>aJ2x!P:r!.?;Wc^|a}fUcd$GZnkS-K{JGuN;hmM+' );
define( 'AUTH_SALT',        'Nfi;ZDq[(C)uTzoqUT)Kuu)HIGmw8]m}{2CBKFf!y}h49|fJ$kMu#!4EATZT/uO:' );
define( 'SECURE_AUTH_SALT', 'Il=68|@|c5t[Ms>RY(CJU$#]lB1[W;!+c7s?ojj:.V6Z0zOt{,K5u}YwYon0zGy&' );
define( 'LOGGED_IN_SALT',   'N#%Is%uf=JWtrXe0ZJzVF~^$C[wS}w(,b.w&N]&qra=PjDEX$7MO#~gO-Kv1agN1' );
define( 'NONCE_SALT',       'gar$y>#uvzQXptnK#)_?muy=*y7&B!!o.H[~gNyGMePg#kByHTg;g/Xm#8<6C2zW' );

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
