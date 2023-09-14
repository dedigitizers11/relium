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
define( 'DB_NAME', 'relium' );

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
define( 'AUTH_KEY',         '-b -0N8,=C9.+`My(<@cC<Lp[PX9pvtU.1(Z-EbIhV!ot,.GM8h~0pnUz!;&BQZt' );
define( 'SECURE_AUTH_KEY',  'i9kt.YyphKK=ia$RC9s6U$HF!^6g+#j+7-nG)QlAGGwN{LB>M#TPN.J^U|NBno$h' );
define( 'LOGGED_IN_KEY',    '.|W53ZCGz-EgdoTVE;A#eamjdc>my[(@}i: .wzXu!dYkW:rAr@aD^!``Jod^mKg' );
define( 'NONCE_KEY',        ']%H!!D-M2P$e1Ek/dJ3_kxy>R2kOO`m`;_Og)|x$hFmj@JL)d`_k;)e(x;4R}P &' );
define( 'AUTH_SALT',        'kxI6~)UVNSLGo&MnG0k$%hC{sY&%mpB5[9-KqO~41NIDMeW}?sy;*Ej.vl+I]}:4' );
define( 'SECURE_AUTH_SALT', 'jH?b(5`4](1E;dT6`P5nmz(EWo<&$/00LVHN?af@U<?wGu;AR%*cEho;u`?|H/Bq' );
define( 'LOGGED_IN_SALT',   'OdZh;O#,,+y`g0#poEpY^w!w(Yz9Y[W9OgyXfS8a7ch&Qs1.+>j,cwC:jO7h!aB%' );
define( 'NONCE_SALT',       '%EPr{:_@rXj9(2hzIT)>I]6RyP[JQ|VS~m=MpC|z%4f;YyHveVVfKmB#%FHeZ)en' );

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
