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
define( 'DB_NAME', 'assessment' );

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
define( 'AUTH_KEY',         'Vjcfdy_)6E3GiGrcq1fO5,glT9*DLU *)-zw tfC(rajl&/.kiBCRBGy.0O$GKJ5' );
define( 'SECURE_AUTH_KEY',  'K{hQsP.0BQ|q4sbb9yAn+TBwn}(bxc@;BZ$kM;5#IoT{auLaE.O_`4|~cWUTm:#>' );
define( 'LOGGED_IN_KEY',    'j1})%nMmsX R^4>!;I%Qsdgbc`G~Vw=2^0B:t0jd0ZgbnrjSOKmRJi!ww0[R.KMK' );
define( 'NONCE_KEY',        'uH*|Qi,~7T;zS.ck$Ol{4ZcGhFh&J:2YO^e895lNYG[n?bBTHjfL+O50sGr`F:jF' );
define( 'AUTH_SALT',        'u@$J}It3RK2S<^an4;PY1(@#;*E^9l$QJ0KivKMM``_K,Fn 1)>x9J-Mj=^5H$OB' );
define( 'SECURE_AUTH_SALT', ';T8_3M^;y-}j0xwqO|6$;;$~mBr3=8kN?sPSCPgs@x1FY6]u%*UxL+y?5NzOvUIw' );
define( 'LOGGED_IN_SALT',   '-nyM{19; )e$QqdQ>`V/?l!Z%xpuum}N1=WPYRtBKihkwO6a{8lgJ1a NZE([raJ' );
define( 'NONCE_SALT',       '|8f:zbzeBbY!d)n+(d@A0D/3zQ#J^BR8*!I*0qS90;6qEY4ZqT{5PfSL}3*cVbBN' );

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
