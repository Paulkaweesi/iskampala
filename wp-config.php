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
define( 'DB_NAME', 'iskampala' );

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
define( 'AUTH_KEY',         'N0<I$C6BMWdbH0dDFJ^J!{S(#MW5s[u^eB8656E0pL|ZgOm&`^<4R]3X<9@_]wEv' );
define( 'SECURE_AUTH_KEY',  '#AD~FF1C?%#JU1Xi4j%*0b3&lhRB3,N^/n(MWwTMh|w$5+L_)IZ9RI@m5qb4 v{ ' );
define( 'LOGGED_IN_KEY',    'g`g}e$<BG{ie@he*oHB9s2{n}C@0i77w@E#r)eVk,b7/QF]FR}<td0|:P:PSjDN}' );
define( 'NONCE_KEY',        'J!YIJ1bp/zbM.b`FLRnxi3<KD6d:@=r:yxp)la:$LA}$>x.t|G:hzau#vu-ZMa^.' );
define( 'AUTH_SALT',        'UQ_#Jxi<$6@*sD_1[4*<;W+u-&_B%hQ)3R?2av6Lb[$vN>t*0Fp3Iw7puJ(^*1[h' );
define( 'SECURE_AUTH_SALT', 'dsD=uJ:SPpG;.yhNh=HQzS.ICm9. )27?&Fp,,%O|kY7T:R{=V: BvO={3JG3Hd.' );
define( 'LOGGED_IN_SALT',   'c/dR$8D<xLk+/5k3UeUWhDiX#u`>Imz{^u.9B-x^CLi!8F z6}@fyH3p=p67EOfw' );
define( 'NONCE_SALT',       '11(oo1&,~rh> 3mtR);6^s5N,yQ0ZajIX!HUH;eV{o5#sUbuZHG2fS?fY>_;Dh3w' );

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
