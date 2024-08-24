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
define( 'DB_NAME', 'u963765151_balilocal' );

/** Database username */
define( 'DB_USER', 'u963765151_balilocal' );

/** Database password */
define( 'DB_PASSWORD', 'BalipasS@123' );

/** Database hostname */
define( 'DB_HOST', '153.92.15.5' );

// define( 'DB_NAME', 'balibeach' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', '' );
// define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'X*=641B|f9_*+S2=H7^|[Nmw]AZvsDqL^|H2`JW|Z:jbtmBhG*2;I/ X]:e@4(u4');
define('SECURE_AUTH_KEY',  'V?u|.1>s~~UWzeyQ vn}NXd/$+M&UN0~^V&hC.jXXAW=FXe{  y)in<7-F2fzOi|');
define('LOGGED_IN_KEY',    '{rx0oq.fMbg`sA<#9wx&DG2Y +ndf4W}I_0yS]W}1,ON(Ka8Qf(JlPK9cA@L[A|O');
define('NONCE_KEY',        '-k4PK.L7>wqdLR-,N^to{=8+(tiG=/?_]}-L^8m>pj$Y7G[v=I`73:IwVJZOqD#h');
define('AUTH_SALT',        'o>fyyxfJF^p|5M88G9*V.,c`S8z<-)]c8b En?-TXm6zEimS~+Z{f`m(/q0qMiD?');
define('SECURE_AUTH_SALT', '+ +B}L8S9A%KkO/+V#S+6guEPzct,I[bl[?t&1%y5jj`vJzC`R(MqpjuvfoDFH,4');
define('LOGGED_IN_SALT',   'Q9!bMfGYvFG`+I^+.p2<Z`v#ET|Z_@bs9yC~(=^[]ZzgM-&6#QKb!@nBYW#.RuJz');
define('NONCE_SALT',       ';+4LmoaT:8^|%o?HG;rz!6LWjjU4,_k7k|}ac-|L$1j@,32N.c;*H`AvrmjSE+Xb');

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

define('DISALLOW_FILE_EDIT', true);
