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
define( 'DB_NAME', 'jowawp' );

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
define( 'AUTH_KEY',         'fHs&sNx{>,9`J S-#.@_Qu= 3qOgb3h::TiJAwtFLcd Mh@]8B|bl.6z<Wa=+2&^' );
define( 'SECURE_AUTH_KEY',  'Ft>N&J[4[A-0JBZG(`M|=3b7J1R3zal/.V^El3yT2-Q08R!`WDd}1OvtjzVe@Fr`' );
define( 'LOGGED_IN_KEY',    'y^?EkJ _;3ygM_^?mw^g*a%[2KS*@,fU XpXrHlvK#0N++6gTQMYFol :pGh0@FL' );
define( 'NONCE_KEY',        '1sEsZ%dUw(gxv@Y/-m?u?e(u@f8ndGa8D)k/t8=grp;phy#tR)QKs)]I1BD|-t7U' );
define( 'AUTH_SALT',        'EmuG[.JUM3Zu+Wly!1iF<6Le$TDhX)b&LYNC%@J{jV=%$#s$uwZ0R@tTA=od:w(A' );
define( 'SECURE_AUTH_SALT', '@!;ge*daOE-)?[3THDLGm?k{O//Evrasb*PP4|j7:`ydPd=OyvK3/BOvHNo`*{}u' );
define( 'LOGGED_IN_SALT',   'BKI^iL!~z9gp l8D/ATiOu+gnVVbm27aHB&Ri@;@*^5ISlqrso::~j|xlv@YiBQK' );
define( 'NONCE_SALT',       ',5`Pt|XZ8&wSjAE+f-hJ,Q)<L<gw2y?p^yZ),-vK*#}odsK~M]nlSlI ]*Q[zXKJ' );

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
