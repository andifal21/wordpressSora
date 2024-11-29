<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ujianinterview_sorakreatif' );

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
define( 'AUTH_KEY',         '&V{#Z~XtXu,gqx7,[eqyEwJ-x(p{jau57I9+Bl4TS6|FC^*50W:(.X,o;&*(d{s}' );
define( 'SECURE_AUTH_KEY',  '_,*aRg{UyYX0mCJ_4^%X!H>$ByKp Hd) ,xK.MyX`OM/Z.6VpxE4NRjvyg1KuY4y' );
define( 'LOGGED_IN_KEY',    'Igi|mz^OG~W-b@z?h0=4BW^$l3de9^/P3#dZ9F4TMi4FNr9dYeb`#/8d?dC9W2Nb' );
define( 'NONCE_KEY',        'A.(-31Tg{!M5;Sk36cfB]<}-i0AZRv,0z]OF19Yp+!Cr2?rx?;y+:x!dm=~Aoc@=' );
define( 'AUTH_SALT',        '+zCuq;CRJU9J0mjt/jN f]=h%E~[doNKIRTCnlu!Hp<WRE^#:bLDLiZ0wlpDU%2p' );
define( 'SECURE_AUTH_SALT', 'a}LLM),[aege@eSncbJR_zb U+<X(Msd[HEKd[`[?^[`b3&MRX<H&fR9?`ejERH*' );
define( 'LOGGED_IN_SALT',   ')*H2SQ2D`:62yPp|J iKK{[.r0*LZD,nBMA,P[mn?&^J:-B`FI`:)Lcw{=DmiQgF' );
define( 'NONCE_SALT',       'Z;WQ6V60@9sY1Aq+.RsLsw,2>@GJxNe9C_abpC34{ Q3<d,YICU(2(TLNDONp#)<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_MEMORY_LIMIT', '256M');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
