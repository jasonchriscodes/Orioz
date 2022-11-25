<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wp_database' );

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
define( 'AUTH_KEY',         '5j~mo)fvJ8mZ*t%;surz)%V+q2we/tRt(#2>+tzM{oQ+YvUI(AQP$lK[GOj;Ma4T' );
define( 'SECURE_AUTH_KEY',  'q60c=uN!7jjC}2_Y2?:!nD=;{)O<`=x%sw!uE{3rE*/,4XC&jN~Q&>g?YPa(b^@F' );
define( 'LOGGED_IN_KEY',    'M]K]Psa2Wrm.Sm^JUWrqT0jaHAWI}H!6V$! %AW,j *qH/}Xgv.Fc)6K>nmvhQjF' );
define( 'NONCE_KEY',        'K$TO0{REU,;:4EFD`nW^>^**;mdqUme)4M%l(E#M!c3gv0yJ-QJkW7uh1U:AH`,5' );
define( 'AUTH_SALT',        'm=bdDCAU0Y.<fLuV}zRLYT=Yyy~4<F(OTb@,z;,E]o)_s@hRp.g@[L7-@zfdZkt/' );
define( 'SECURE_AUTH_SALT', '(h~A.18:${+(g h6A&K->u[b6w]!YIEfj:w5Zy;Ban#T^(e(Y=1X,RXWVFsZbq2Z' );
define( 'LOGGED_IN_SALT',   'j|*OEtR71M}b+A_g#TXfp~Vxw(sSWZ:(lGp[y@JGw<=@V^7uR4[`XdeU9:9H-bNA' );
define( 'NONCE_SALT',       'PQ+V5fkJfjKK27(;iB<cUomUUd-(TFE0td?TdWt@=1z9 |Y;CyiW[Gwo/avaC,vs' );

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
