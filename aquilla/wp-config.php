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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themedev_aquilla' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n]m(d@).1?U/{3C5[n9$4L(//Z4Ekg8%I7qC}.Jr ~S,D;u^o[v.&v$<nt>~x6U8' );
define( 'SECURE_AUTH_KEY',  '<(`#-$ny)0u(T2qe%;{sR%jEV2q6tH8>jj$LAeOh]2([fZE2XXjvH*5xCPg$<gN,' );
define( 'LOGGED_IN_KEY',    '$*&0|?q~biM.*}`g6FF(N?zxvI.$-p<:D *U~V{RPVn[s|ex9Ksk|CV_]^Y1kv()' );
define( 'NONCE_KEY',        'VSc)qquKM!6OkK(yM5UtAJ6_9(i}.kAKM^WQIS*=pVVe_u@&a];%m 3fZ9Aib<w.' );
define( 'AUTH_SALT',        'tPV=^VT?c?9DQoSjY~|DVMbxbBaYk4A5zyV2k ]fREeaAUR.9`,EjPZZrT==h[R;' );
define( 'SECURE_AUTH_SALT', 'dTng6QcYgPhD2xDL>LcH*~3ah9wpCR+lpZ1iIL^(Yr%C}iJ#PqPxh^93jhIzWr`L' );
define( 'LOGGED_IN_SALT',   'Rutsj.9>9ybrew@O$u8lL8+G93B.76n^}V=+ik._/aNFS:&;Wse/4N8[e{=}KO3=' );
define( 'NONCE_SALT',       'h11Cz.w{eEG^Ad0Lo]ji::Wm]5rz*^t4wDFZro%,;~N-D|3a=.fWYAm#CAS2R,7@' );

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
