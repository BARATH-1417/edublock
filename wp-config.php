<?php
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
define( 'DB_NAME', 'edublock' );

/** Database username */
define( 'DB_USER', 'barath' );

/** Database password */
define( 'DB_PASSWORD', 'MdA(BEbe)ru]o6bp' );

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
define( 'AUTH_KEY',         'r63V$/]~O@h,>tMc99L3MUzp5@Bm IA#r)MMeww#TW1I!I!.Ro!Nt8DNbv%C[L-u' );
define( 'SECURE_AUTH_KEY',  'a2z@N$1r?)b:qL P94W&FeaH[$9CdbM+.6aizdd;dQgD_49/wp}<`U~3w:>=06c:' );
define( 'LOGGED_IN_KEY',    'FH.u%^R4}w?mI0Vek692^U/xPl.*Wk/QY;%dD&9cx=H)ga*9 /_jPlm-=iZJQ^~X' );
define( 'NONCE_KEY',        'RVv>n^XOnVQcS7szO)xh3_X*H<Yx`2k-Oyk+,+auw`jy>bSC]cW}/uzC5T,P_o_d' );
define( 'AUTH_SALT',        'z0rd+}Eok@e3shLdw.G.z%rD<locTu!Hr#,a$#* N!p}eU9?RB)sWP]oI)ykB=mE' );
define( 'SECURE_AUTH_SALT', 'k*y}s{uqm>8w_TuRrQxqe^ZhEV~tRs*GUQ6t~0sPA<uF*CK4e1WZmCY_Q][n|J?s' );
define( 'LOGGED_IN_SALT',   '%f!Pd>=CRkQ~qrz_xehrR 0.@BhfJ9uU]-wbEGF*<B_)%jQ$vXedW;K$oL@J6B+U' );
define( 'NONCE_SALT',       'wp&IM2hx]JH:!%<wymBnIuNcp3|`#vh4P,0e}Wv8%ToU#Htc>bNZ3QH*pg0-Ch&w' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
