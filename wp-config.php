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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trevor_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'su,k;C8eFa5Js?br:X;U6ab:/uO*CCc/S[P|<N=N>`K8JO-6bynbR$1/ER0W,;N[' );
define( 'SECURE_AUTH_KEY',  '1J]gmpPRM#KHsNE.T}?{$(]D`-n~Y6L#{,wrm MxADPHJAMEP^${(-TxO~n+]zL+' );
define( 'LOGGED_IN_KEY',    'pi].f!vW#XRFBLXepR@ku.sO{XJdOIV~Bfsji-rxj]5G7w|,o?vZVd_|(_|:b2pS' );
define( 'NONCE_KEY',        '4aAC{hsx1Z3{&fl+ti!9z`m3-$Et*w5A?d&?2<+e]076c>Se@g&dD*7Q1tn!=E|5' );
define( 'AUTH_SALT',        ' |1MrR1Y,s?~S]1oQ%e_N;1Ab~bH Dbr@Cv)7~FwDW*nWe/X%csFh!Q.#=t>84BY' );
define( 'SECURE_AUTH_SALT', '(9y-egS}1Z$,Ey7Y;C]+D-dh)WpcppOF@s]UiYwxVM5,D:+8wWr&V ohz#jIrkvE' );
define( 'LOGGED_IN_SALT',   'ob[f/j069zkxq+t@dt_n=aX<E`KP^|4t/j[Gl3hw2!1dK0?Txedlm^NotB[}wWAs' );
define( 'NONCE_SALT',       ',qELA;J.;`J!zx9kX&1G0_sx+-OSNYDcIRxN.(YDwGrfOM]i{__glQKiXu,V@x Q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
