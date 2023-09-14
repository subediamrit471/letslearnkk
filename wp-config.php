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
define( 'DB_NAME', 'letslearndb' );

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
define( 'AUTH_KEY',         'AZ>PDTogvXm5,YG(!5lycRFL<R45!9ib%b/V(;Nn[(Xl^7r(3!S$04em.zgV8:T!' );
define( 'SECURE_AUTH_KEY',  'u*S]3SOyLBV8K+5W~<{$|{(?!Ppo8v#*?~8DjSP^jOCr_x#!_-Be=7j,,<fQ hc#' );
define( 'LOGGED_IN_KEY',    'G`/ww9Yu5SHG)Dr00qT3Lh3FxB)[NFQMN Go5[o?zL=S81j!#9w.e(_NE~z~VGo[' );
define( 'NONCE_KEY',        'r&Zk?s@qShk>LczMboY;hdSYqWf&MheE?SQ?$OMrp5}g1uopZ`x4sw*nRi^ijrz}' );
define( 'AUTH_SALT',        '>6z,t+$W(SFTFefB~F&.otfx%F`?5C_cB4k,XSlMstL<8`#|$`8H@4B<&=x@n<hp' );
define( 'SECURE_AUTH_SALT', 'x{_~P6]fuE=Ks$SEd8Q/>CdV8UHaJBBfcZ-J@YqSm}Q0?y1*la|7*OsikT(hjfrn' );
define( 'LOGGED_IN_SALT',   'lH9f9nN(F-@P5X`de|AV1e+Od>Zh6g)*@bG`?Fe4}C4#ew&Q!f<N[o:=cdTrLh#a' );
define( 'NONCE_SALT',       'FVYz,=VITx+3=hodKhvaaQ<ykOY3hLf,NQDg!,,(HFYphdF&8}W1[iT4|d/!s58E' );

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
