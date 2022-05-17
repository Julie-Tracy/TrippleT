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
define( 'DB_NAME', 'jackwp' );

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
define( 'AUTH_KEY',         'C Cl&$|-&;[LnkB)p65zd_-J}WVwfi{G/x^L-4z5Oht*.3%1;Dh){YCZ&$OCBKS7' );
define( 'SECURE_AUTH_KEY',  ':k=Zl]^|LtD(es1>8Bc`QJbYvJIuGzp1t;+4*?x@,JMSjpuJKa!.6z#]fk cp@wA' );
define( 'LOGGED_IN_KEY',    'w+Ef;@z,/n1R0/31bc85uz9X,YNT,rS^Ih~!Tv-DydzT^{`DRl[ 1V/s<v2zV7jS' );
define( 'NONCE_KEY',        '^ARnMt;CXBQbKfJCSL!eVqjUwH):9^B-CXa&.;{`*[BN?d-rQp*(q#LU<+2{n(/_' );
define( 'AUTH_SALT',        '**gj,,*P?y)7I .%8.x(bc,38Gf)2t*qYgW?&`[2hT9l_E%?4DY}lRk:EB}h$fx ' );
define( 'SECURE_AUTH_SALT', 'wlSifkk|@>L`e8x!?46v=vgK9eR?a:w-WZ= i;BcW-wd4k/=skozv,B[~<nN?8!E' );
define( 'LOGGED_IN_SALT',   '>4]Pzbuo#65:fP-XI{=pM>QD?{x!R*+:HyEF-h.Q#zRu`$@6>+&k=A@uL!HLH{#o' );
define( 'NONCE_SALT',       '#r.|`C[o$t@sAMzK+JdjcrANe>p2+{9TbAI]5<0!{Y]>{K;aiXu9@XRJ7!s0H` ]' );

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
