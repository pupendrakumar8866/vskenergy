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
define( 'DB_NAME', 'wwwvskenergy_vsk' );

/** Database username */
define( 'DB_USER', 'wwwvskenergy_usvk' );

/** Database password */
define( 'DB_PASSWORD', 'C&YX.)]dkfay' );

/** Database hostname */
define( 'DB_HOST', '192.168.2.7' );

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
define( 'AUTH_KEY',         '}`H{/Hen#b{+A{4JzX29 _Yf>uKaCtt9pO&xr^O:@-C}g# fg@pU<.9JOuoZog)2' );
define( 'SECURE_AUTH_KEY',  'GciCd`LliX78>9:=1Seln->20g|OKKNu@8<oh;ZYPi9MkO0Wtl^_Q:>V2*x;.A0:' );
define( 'LOGGED_IN_KEY',    'L|$[c@Hs~Xqy9bJNfS;O<q@B?g}~1td:<4@LSv!g2QBkW!=q>F+]`(VN:#{~4R%#' );
define( 'NONCE_KEY',        '+cDC2O3VrhnIr|7H7/cvR&cm%MmRIoyAI#2O%a(Ly H`t9aCkRkofj{U1K`&1{<u' );
define( 'AUTH_SALT',        'zjbEejt_Al<Te3crbAD8}308c|n(;xl=2J2E~)g^|UAQ .0w/SdX(?|v4}ua%?&?' );
define( 'SECURE_AUTH_SALT', '9>5%oCk99JqCf%o-3<Nze}{sn0_%t0raXQnh2I[Pewy2N~+mg,csEw2c Zzh3$}0' );
define( 'LOGGED_IN_SALT',   'bwNu%5~SKKG]1&r4VPH/W)eH&1M>D(=.0rU8q>zse<b0w~pM6y$:dvM/|r.*3h#.' );
define( 'NONCE_SALT',       '*t&&Tf}poDen{ESJJfy8?h* !BM*F(aUPWF8u.u?1NiZ@b<v,)fi-,20e1{}{fn_' );

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
 define('WP_HOME', 'https://www.vskenergy.com');
define('WP_SITEURL', 'https://www.vskenergy.com');
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
