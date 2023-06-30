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
define( 'DB_NAME', 'bmworldwide' );

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
define( 'AUTH_KEY',         'TSLXt}v1g.rZt<HBPSn__7@)t_h2*H`BAt*|r2wlw,LQ~fNBZ*p#-!2[,=L&TzS2' );
define( 'SECURE_AUTH_KEY',  ')7+^! f8gfE;{JhePgwkIx~#rwx^LKrfk^x^YdLi3HH!6;m2zM*NR!#v5d6(5#aQ' );
define( 'LOGGED_IN_KEY',    'wuNtThu*S)v<rXfIp86x)#Fpt H~ MTQ+qrXq: ~&>C<5S .$soxrT{Z}M65,FGE' );
define( 'NONCE_KEY',        'ITsXOeYn1i8p{EIam&1LniFgX]|5~[+$qL@nR{M8r6H9)O70m973}[eDW8eI-9#1' );
define( 'AUTH_SALT',        '2+&0PP@Ax>6e*D.F2369@SW@-$lba-PBw(LH93&l{a.KSi(<ag_q6_Tb!pr48X]~' );
define( 'SECURE_AUTH_SALT', '.+N6N@V4y!L8,B48s%v5p]A+SgO-@MfSf[<S [Da&VEM*O!zeZ*;|vU0 vogIU.F' );
define( 'LOGGED_IN_SALT',   '6C,6m)QM$FmHZTi&*2ge|vWCY,VKA|bSXLU>%)zPN }bdvz/`_c/4tj4$ug(G$J$' );
define( 'NONCE_SALT',       'FN^9!3I2~<Gxdc/bi*VH>+jC=%;/lW>oMJV0)}>G9HY-u[LC.Z#vV187B-,SskaR' );

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
