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

define( 'DB_NAME', 'marseir2_burrito' );

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
define( 'AUTH_KEY',         '_4a{}Yt/g/)Ge2Isd1Ae&lbQRobGb!vOe-m<*(D_XliwyX?ow1f=<;2Oaf8Eiegi' );
define( 'SECURE_AUTH_KEY',  '0v/(:O2|L(&o~=x4=9-3vXhZIAZ*9vOeD*wF7B.[6h$nPjl]G8:dNW`4KFdgt|[n' );
define( 'LOGGED_IN_KEY',    '>kZ4N+q#E{y]Z?#%%HA6dM&)A$`T(hN,`TkwMY;l%i*H|D]c989q5`v(M+|Poj1{' );
define( 'NONCE_KEY',        'rNP)}xWvGY;i@Xmn%VQ=v$t((`)Qo1nl]wJEst##(ou.B!mWn(;2k0*-K##&U`=I' );
define( 'AUTH_SALT',        '(@:A4P?}.?w>8_Z 0W~Qgfk SbH}C<O<K78Ng9Aev%$O$T/4oo7),@oOp5o>b=P^' );
define( 'SECURE_AUTH_SALT', 'L#G=S.|bpo6z6[`-O7 M2x,ZqR{trkGZ0*k/%WReFDfG^igm,qq*_5T;_Oet||cZ' );
define( 'LOGGED_IN_SALT',   '$#rNt%)MLJVk$@<A$P-P>{!fE7}j(hHZ{J{)f**[h.wb5J$.J>!ddN;f;Y!*vT(=' );
define( 'NONCE_SALT',       'Bc5fFd[52t7,Z^S*7Kne1O[]g+M&%~usX=KF5x]XxsYr4~j{|/GH-_SZL4-tAo7G' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true ); 

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
