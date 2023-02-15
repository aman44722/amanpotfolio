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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amanpotfolio' );

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
define( 'AUTH_KEY',         '#bgt-Y!))LlZ qLe;*&i0NrM;d8KkNRG=OLx[z=%=<-530S]G4pMN^c5W av(<h5' );
define( 'SECURE_AUTH_KEY',  ' Bh&p9ETy,jOxGU%ON&Ys1XyR-iRF&VSR8{)ZlTf^Fm+X`bu0mhq9|O,kBAQ8$q)' );
define( 'LOGGED_IN_KEY',    'mm;p}iO;*^5C55d~rmVm_k!~t+dfRBW }Za6vEq_%A-C>TPL6.sW?M<VTf+%_Bh.' );
define( 'NONCE_KEY',        '$$4s[(;]|OE=V+Yda^hqqeeWHO3,bsayP@]Kk8qjO6w@Rw(NW&z8TuIm#BS3PTt#' );
define( 'AUTH_SALT',        '>htE9LYGBYzi>I[Wbq[OS,*b;nJh)F/D^1?,B?|N{l:J<Q2eK2Avls$L}3*T*I9~' );
define( 'SECURE_AUTH_SALT', 'w|o>AMf%F)u9AV//jxd#d|1;me;b703.1r{E1#] P*7lXJY%@oLe297T<iya_~W<' );
define( 'LOGGED_IN_SALT',   '2K1F#~>ZAXf&R9B1|4.Oss.XA/!zS)dL/(rgndYz]/@)OfO+PA@$*p/44#zC@`16' );
define( 'NONCE_SALT',       ']db4-.bA|EW}>}Ht6G_!QOo;0v1P}3dCVNM[hRm1)H+G=j`X#r9r:l?)r>$*[qx:' );

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
