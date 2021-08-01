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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themedev_consult' );

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
define( 'AUTH_KEY',         'jI&=<hzg@P?N;Uc*.EZ0F;Xm3W|QjXd+XiLqk[*oEjr3E AeVFZ,*v}wzWnmdk~P' );
define( 'SECURE_AUTH_KEY',  'a_FAksH/i:gLX_`Sp1owL%8X`daWcqs{U~_T%G&P0dRb7Aon[Frvn]q}p06iTsmH' );
define( 'LOGGED_IN_KEY',    '1I.%{gp8H8Funl5^GO0VC=`)yA;p9HAW:D/ku]0,)xf@M`cU~i7;BWtDPOPvxksx' );
define( 'NONCE_KEY',        'j}p#zE?|Z  BNs-s/E ~,//F9b])t1#>Zns;mK-;.B)Olrh*6_:6<X9qWh4vF,NX' );
define( 'AUTH_SALT',        'FOyj0Eg5%3/DHOhHVr{w2nj:VRAfWmDK*lL~ao}/4>k~e</^*+vL,[rR5@fJ_g4t' );
define( 'SECURE_AUTH_SALT', 'MKq+<@y2ke?Eiq9BZKkp!>mIeKIPrvC/}kn-IXx=w% Adt>>U4)kFj n7.u~57qX' );
define( 'LOGGED_IN_SALT',   ']<*TvG5$`3MWk2@N_iuL2H_B!u`$Jk,S&oG1NR^Dvu_2GswC!P[9/,M4ARXqz,Y*' );
define( 'NONCE_SALT',       '7X`,UQW$0plSb$zKF>$,^.hSTUJ&i;`5 31s.X!.l}:P~c_sJMeL.Av;wYvjTL[W' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
