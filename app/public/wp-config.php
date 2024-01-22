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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Ap%1rG2&.YLDEb3=qeCFjB3C<TNH,h4==]2Jm@n,VEg2[}|T1i%HqV%N#N3~C[7k' );
define( 'SECURE_AUTH_KEY',   '01lfmg/:Q8I$QwZ/|~e_[aarTQ$ys+X8k.Zs82Z}tXrYgc*RCEpOlE|opi2=nxVL' );
define( 'LOGGED_IN_KEY',     'eB/C]Y55sYZ5Hy:`:n3*a<+]{a!-qj3BK0C5PT0B2U>#+Hmk0(lzU<rN~#aYn63m' );
define( 'NONCE_KEY',         'K!g_MFi;nS%)ChsgOoOm3z)8~.f]6`#0=#,Gd*7 )FW{>lHXR+U}O;kL;xV%j/qT' );
define( 'AUTH_SALT',         '4jg0}nGCvPd{1O3*m/:@/qsG&sBcN6=v`TR$pxTm[Yfh8.b&nd8V!_EQ?^CtgKLU' );
define( 'SECURE_AUTH_SALT',  '[WK{$`|n.THXWd3~-4=ruI%4B%*t56FYmrB&d;rTq8Zn~Y|> 7i?O~*+Ci7&D/sv' );
define( 'LOGGED_IN_SALT',    '#mvW8AzL<W>=tt`Qw<V({ dW0+cpqRO:t[fC5Y2-2S$$<g );x`Kcz$r:too(bXh' );
define( 'NONCE_SALT',        'LOTKsv:SRNy_[=U<Gz4}4VF38uN*@EO`{h+78!JqO[:/wY3X@FTN]VrAXhsqn?P3' );
define( 'WP_CACHE_KEY_SALT', 'B{w5f#-cs[~Gd9.DqMD{NBr[h_E2$`]P+{RzMx/nKnjgiHC8/ikl7LzI!6IWkxRt' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
