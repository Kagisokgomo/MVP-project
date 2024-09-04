<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mvp_dp' );

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
define( 'AUTH_KEY',         'SGJ}[fRJu~q!/r14y0xrZ3OPIF n[WrV<,baHra6}<]O#G[0~S9|Dge+-HB^cMT&' );
define( 'SECURE_AUTH_KEY',  'rRr1J@*#ZqYe?RX[~OZNV*]W|T>I0atWZNaNc[R?+X_dl`ar2}:1s$VWeqiCQ#:P' );
define( 'LOGGED_IN_KEY',    '6VHUrNQs).K<:&QaRp@G4qe=SpkgAVFyCnL|9eex|u{!6M!ifnEFh9csg)3=]j>B' );
define( 'NONCE_KEY',        '{mK90@$$$Xnn4s+=p}lt<WwX`dZ#x)8poge5[ZlU_zVM3,GT]Iv#M+N]nE&w#KZ!' );
define( 'AUTH_SALT',        'Gt#bvORvN9@WfG>>ue#nAH3T6LlpQ(agT3;(/iFT! Z#MckaU_bnFe*D(E=xp75^' );
define( 'SECURE_AUTH_SALT', ']yn-8Ir#A{0X2;1 4@6ImUL^mJ)TqIKI?1j*h(`fH`G*,;Hb[?TO)q#<slpO/Dcc' );
define( 'LOGGED_IN_SALT',   'pb+;oqxxvV@=Z-^!m&e7x`kbp]r9qH X. _-XF<oN)ce.[J4AAr+?kg6nd,_[$_/' );
define( 'NONCE_SALT',       'zJ2I*sYDreG!3@B-FUhUGH9LC+b.,Z,V-i7bil9X;OP7me4YNJbYJ3.!k$1?}Qn+' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
