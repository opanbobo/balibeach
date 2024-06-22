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
define('AUTH_KEY',         '4ZjO!+3qSbaH<f}<IGBAPVmpX5b+OdivHg)`1+gz6 5+&o%*:kDcI{EXg+;:DTO3');
define('SECURE_AUTH_KEY',  '{xX/V:G/weoxGNZ}N@Regb A!DKP0ZO4J29a=?=N=1ZpFa9HO@}7lvU)X-j)O#xG');
define('LOGGED_IN_KEY',    '70S|J78%]|xO%MfVI#InrW1 0/&,=N=uye)#3Ju,}s 5I.^7@C34UIF-z6B*9eHf');
define('NONCE_KEY',        'oV`69f.6Cw*HLS` -p=%|J=DRI)0b.QkBcTiZcO;c|qX}`82+<fm+|Gqsp{c+g3p');
define('AUTH_SALT',        'Z/@2+K38hr-M+E2`WYwFYt6W-T]k;q/_-W1.r`97mh,yTjCIo^FO+1*upP/_-q7y');
define('SECURE_AUTH_SALT', '-r:d f~4@cv`^MC*x9V0BK_;%j&G56)]y,|+BN|]>g?!cbY&R~+4cNKB?Q yWb/Y');
define('LOGGED_IN_SALT',   ',t,^cR#5y7X2;G+U.A!D9/a{Gtu<iZ|j<G7dhkuChG%|;+)Ul8ZQz;C$VVmgR/]r');
define('NONCE_SALT',       'p+Jqo0]eQdf4-o}HqqWbR,2)zr~ChXYDNvFDL$PM*y]#W|}[|?>4;rGE&C[gx|ys');

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
