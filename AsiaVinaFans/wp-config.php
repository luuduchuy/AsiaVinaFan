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
define( 'DB_NAME', 'asiavinafans' );

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
define( 'AUTH_KEY',         '=!ADN!-JhwA!4IHa)EbM;Jjq*-|A|1.<O6?|vRM++_|.1UlL]zZ-j2.91$CEXBQt' );
define( 'SECURE_AUTH_KEY',  ';t5j.$Tu_6`m{:%eF}{9)_o!aWs]Z2q-n2&)L-~K_d[0{jtd3ynv#-ggICGJZMRh' );
define( 'LOGGED_IN_KEY',    '2Z5bE+7o2DKI+,AB}_Jr24A$.[nLz#=Aj{26HGDPoxTaa9{kfR!#t+qxGRVBJp!%' );
define( 'NONCE_KEY',        'y{rCR>k{l3k8*5)0_#E;]]t.=f1~0p7KfL>V8*0|Kc&-(Z{1ztWL- f:Rz-qXDqp' );
define( 'AUTH_SALT',        'kBW}[;45=CAK`Q;wm8j$kBe[CZ3)&p}xk|cD+FnU[LVsP~Y)|U/5?UlY#Nv|~T,^' );
define( 'SECURE_AUTH_SALT', 'Cs;t2GP;>u*(G]wvh)C3t.,DZrs4bX&uTbF:6luB9K4P{:Fl>oxf_BPZt$<Kd%C&' );
define( 'LOGGED_IN_SALT',   'eFrWIeU9&PX_e{dEE^j+u9AAX3a7 ]iH$b#|y1MN(n><VjFwU=`r->7SKo]-{.w~' );
define( 'NONCE_SALT',       '1!L$dy%*Y=d9Tb2Z54;-?AX7&h4@ OQkgGc:(t?mwrUe7@r4V/5O289njI?i#6XF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vinafans_';

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
