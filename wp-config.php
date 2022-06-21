<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

/**
 * Database connection information is automatically provided.
 * There is no need to set or change the following database configuration
 * values: */

define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress-pass' );

/** Database hostname */
define( 'DB_HOST', 'wordpress.c9dye9ktkpew.us-west-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '?1YR[k@M!^f;fqjxfZwb,*tm:6-3.np%qmi[gf[mbQ)}*7:@^z=BAt.Qwax66MU]');
define('SECURE_AUTH_KEY',  'XC*6.bK_Ll#kY~*wP%tn-s1s$7}M#Cc.e;Ardc<>8syO?Mb7bkB}6PPd~hLY;z9A');
define('LOGGED_IN_KEY',    'GTf2C6]@RVh+XfALz9e(;@rr@fj[3{GP-2g5!}K+Mh#qwqfn[nef>bbil{#()@tI');
define('NONCE_KEY',        '.,}S4djK}UJb:c!@fJ:P62P^G=$zC@fjHtq?~bKkZYtuH_}37R~nCTr0!.G:NXU[');
define('AUTH_SALT',        ')iF_(HPS4hDS=Q*##43h5w%De9PUk3>Y*H_g5TU+6k*$tyV4=yG-qktP5>i8[;1I');
define('SECURE_AUTH_SALT', '[,@EoS:G.Ld<|_#yb}:!zwX21(Ms2Wb)}A--I<Hd*z<(D4VaoimQL,py$kKE_6<;');
define('LOGGED_IN_SALT',   'QjWSwgESypwJ_mQHyuBvtDVK!WToexZ-(1eYh?Ex{b*=?_#=F|q)mW|zzd#ub-o*');
define('NONCE_SALT',       'zkpT,yW#($6jbTr-LRtDO|YvVG}w.kam]X.;c$!(Li_0Iiy7yaCBD!HtO+4p?0::');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
if ( ! defined( 'WP_DEBUG') ) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
