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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'nbx*V6^i8^Ll:-$Ug=z23zAA`$cDO$zl0{fOUNCWI`V?Fx`;`-cI4=*h3%&*a&43' );
define( 'SECURE_AUTH_KEY',  ') NkqY2&k2y8?aF3,8euGwqe.yx=w{G_jubV`vDP8b1kW(Pm]ZxeV_%6%BX2F_c_' );
define( 'LOGGED_IN_KEY',    'sirv[=ZZ#HE X%KZ xs:/{a(]BzE/LDjtCy;Af}>vEN>B>Ag@kr.hqB[ RiV!ij ' );
define( 'NONCE_KEY',        ')WqrI<X0&c:uwW*GN!|hlkU$X9DFdK>ZnX6rf=ABtL:}&Ar-LMSBZe1x},OaeBew' );
define( 'AUTH_SALT',        'Pm}eUGC`FR)x/FzZ&3)-3wg7f>Prjwq)5kz&|c,)EB^x:Hai?-U@+<Lf*!]iT wC' );
define( 'SECURE_AUTH_SALT', 'j21}X*x<%nc,hzvt~j=fCKQf!*W=BF4ilkp6T1?8-!CD uKH0PdvEJWG{Dq,P0cY' );
define( 'LOGGED_IN_SALT',   'onmV&iAv;4}3`dC)u^E>z|gh^Fm,<Ddbbx&W~^k,%ez!^m~Zrj5tW(=u%n&[PgRw' );
define( 'NONCE_SALT',       'pRjsactrc4*0&]`r1W+JfWqvGTI:3VV9>:BNU8npLM#gy|,{cz{Jin5]DqA6+Phv' );

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
