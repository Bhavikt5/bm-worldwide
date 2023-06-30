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
define( 'DB_NAME', 'bm-worldwide' );

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
define( 'AUTH_KEY',         '1+VL4oDwXuR_fRBHZi}>#.szJ}ZU0(qXjeZ?B4PiB}C3o~&Rb|U {P?tqk49d@(,' );
define( 'SECURE_AUTH_KEY',  '?}SH&rw*t@e)7%q4(25zYz3;Z$]Z}tyCQ!q5(KWXnM7s],T f_LU~nCPl)_DDzD<' );
define( 'LOGGED_IN_KEY',    'W>K=JGlUfeVm-vmv*5eJ~uUdpG}}!9snlW~FH^VVT^,kFt2*%P/CpaXQl4L&ssq`' );
define( 'NONCE_KEY',        'aAna,`$,14QVmOSR[_w=PeQiXp<E[K?-qX:7nEmevQ21haXgO@:&*DUX?h%D.N6s' );
define( 'AUTH_SALT',        'hI3IJH!y~I0|!,^Gb9rGP4;`L=h{shV6s9!,Qjr(|q-POmK|{OxkG{,Pgsa.t.U1' );
define( 'SECURE_AUTH_SALT', '~9O}huD!5>QD~t>KT~:ad~76_j#b[)^=x*FKSAr%dU0L~U:i@@oF y;@e<Zn[y)w' );
define( 'LOGGED_IN_SALT',   'E<X+]`A.-x0RBP{^r1ly9OSp|frJ7QC&@d}BP#^V)S45P$*55~Vsw^&S(oU3Yp)+' );
define( 'NONCE_SALT',       '=~jR!x%qh-DLVSUHzz.lk2Es63]|oEW?AgM%#cUIHK#CP~`AbooRjzWJF%sQ:/<>' );

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
