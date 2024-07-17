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
define( 'DB_NAME', 'officialstore_db' );

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
define( 'AUTH_KEY',         'n=EG==7_%v+ih9%8wzP-<E}&y{~ih|&(gts%KD:3qFhTn 6Z&BlrP~hWW]F9qOs?' );
define( 'SECURE_AUTH_KEY',  'Aq=}N1Z&2u|}+PA~F5zWVc0d>6p_XQCZ(gjlJHYvA@-$3KJnEk& ]1nb1{`#4<I@' );
define( 'LOGGED_IN_KEY',    '%CCJEQl Gb7q<DsUu5G+?<J,%j6MNE;?a1e!O=5y^u0h- z!k!WZ&]Zh[>mO*i]y' );
define( 'NONCE_KEY',        '<T_pin$tMJ2QRI<%}e2~aN|jw@rDH`~K`}?o1xqy.^bi*w|+v^!sL=5:yirWk/o`' );
define( 'AUTH_SALT',        'lOk-Iau2$}QA:G,=8=|Zn_HY~p5<NOEY!H2AbJs[!xtNkR&5:@->6<m&r/irT 4x' );
define( 'SECURE_AUTH_SALT', 'VQsvn*/l~2r[.pL/Q+nz1Ba()1a>a*}2!I1nBc8T}lJh@3ijhydlAivGgmn.C+kZ' );
define( 'LOGGED_IN_SALT',   '[#=#q%ApM8pXz/sOj[<fZ&-^J+sY2?/d|.>eot)BkEk:FV9{M3>dg$w.rhXH{clU' );
define( 'NONCE_SALT',       'me0>8CD=|(`Ptg<Pw=OtW>UlKjlR`p]yaq4lfjYZKp4pZf@Ef:U 7Jl2pR&K#6NO' );

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
