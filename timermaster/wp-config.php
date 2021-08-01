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
define( 'DB_NAME', 'themedev_timermaster' );

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
define( 'AUTH_KEY',         'A]nP~#1:d`OUNQYklmf^+cdlt1x+KlL+-iGV5UhyTM{[]!;i;d*VCpk3RS,MBsR4' );
define( 'SECURE_AUTH_KEY',  'TDUFZ?R3T9xe%/3 Ei1dye}M_U,xEc5j)o}/O?7b6m.M0N@2xv=PB>?WYb=_G=tR' );
define( 'LOGGED_IN_KEY',    ']2tGGbb&|0NbG?!!gR8oS5Op,<?i{][085AcZ4g~k-#cuV/D2E0m&$Md-}_lxX1p' );
define( 'NONCE_KEY',        '!`kqrD(HeB5$(*bG.ZsGC}Z9*p|%eUeJXhqBT#{cM_gI)Et`ojA+ 6h+@x_s2EHq' );
define( 'AUTH_SALT',        '*5<}Q(U?(v(Wo~U%SSI].t?4fyFohOTqhqlAG;aF$T#j2&],u,+xSU%|igF&ZnII' );
define( 'SECURE_AUTH_SALT', 'Ub/fr[g>,wlq$ea.,u7@JtN>{UKz2ju)tdB,]ra$oVo?-PQKTR9k<?u&1mvR}NP~' );
define( 'LOGGED_IN_SALT',   '0.%) JQbK@pm|D~aj=Hl`H&|S-H99Hbs$)AP83_Eh5XbX4[^v%6EtQPsdG}R@yl~' );
define( 'NONCE_SALT',       '}c1VgJsBAvpzRtyiZ5P%L3 $_?!#TmB306!6J0LFo:MQKf0P#PiB#IYP$4fEK (r' );

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
