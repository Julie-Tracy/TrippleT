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
define( 'DB_NAME', 'juliewp' );

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
define( 'AUTH_KEY',         'e5>5m1x%HPic2dJGFH#t^6[PEeCv2^.1>J`|BpT0sVU+`3rCD$Qs^a!*PiI4R2T%' );
define( 'SECURE_AUTH_KEY',  'df zSdTDfr[C4c%F%iNowI:fvj>nRw8B/e?|.RxB8[l<s)@b52bfNyuWXd$b]Sp]' );
define( 'LOGGED_IN_KEY',    'wcj ^p,jzFo&EJX:tR_qf_.j^5 WBG`$`W9J,SF:z{O>9rI%ks<@QegacL=Lz,lm' );
define( 'NONCE_KEY',        'aM|RQ7T_La-cM#C.4?%RDqg6i|Mgj9amRs?u42t UorQm?u_{i%dSV6TVt.CgDhm' );
define( 'AUTH_SALT',        '=M*uMY:Vn^h]ZBk3/?ARgcWkCxNO,BgJTmQ~i]m6dG..PFO*3JBE>~:bATni7`KJ' );
define( 'SECURE_AUTH_SALT', 's*jR+n~]^HQZ(?6>{1]Wo/;4+r*3Gus.G{9|UpUyY|}.[x1-O?hw4;fvHhH)8{!/' );
define( 'LOGGED_IN_SALT',   '+k;^Od4o;fX]UNEx*gZvg_}U1/6a66Oc>f=`)J;s]_ZMFTj8Y2dCDD&>AXqcLdNa' );
define( 'NONCE_SALT',       '/_]*tfRfWr2G*bO{5FcO~i@U!? M}pPsQO#lx+5fb}];:,O{kSwoT#^jWQCnyt2C' );

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
