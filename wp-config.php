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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naylin' );

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
define( 'AUTH_KEY',         '6W+tnk|ms/h!`e6 OPXRR}&.jTEnlLjF075<N!7&xtGuL#YYZ]jrXEh9yURjt.R(' );
define( 'SECURE_AUTH_KEY',  'EixktOzUGG~D*3wIS<,{-m`&]ltV+D|sTH|25kds<`.Agj(#68_.L1b 0g?Wgw3c' );
define( 'LOGGED_IN_KEY',    '`>r]XcUX7)|*h%^}5M4f-r:##z#y:XN?QOGs3^wOx8w%,${<e=_?]*M?+P.kC@#e' );
define( 'NONCE_KEY',        'EZ!RrK!UA%}[gHW2S#v$gNowm!wo#751;xb&f@f(M3LS|]5@rfJ/*s-ZCqk!@2>q' );
define( 'AUTH_SALT',        ';A$Zpr6:G*[Tk;qzM8*_{F5*/Mf&]RY{97=-g}^~T)yMMw>%IXsee-V8ga_?!OmQ' );
define( 'SECURE_AUTH_SALT', 'p6;5kU,r8@jlp+MytqM1iQ?Es!j)jH;)XMK[b?cBE^;3A.j#meIq<:Hzpu,22y-v' );
define( 'LOGGED_IN_SALT',   '<`O_uamL+e/3|1]kgsDgiLWYlM,quA1Qyt])5dueTpy~MUVMCHU)LF9Cj.d:oNim' );
define( 'NONCE_SALT',       'hz/WO3(/5X&6>~,w+e`{xPZog!;/`U8wy8k}c[; Hnr4z58iUTe^/Ny$ .,*-}*0' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
