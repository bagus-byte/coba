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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foxy' );

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
define( 'AUTH_KEY',         'MpTB2(gC1Z)=imU2t_a~f[A_SAIT0&`7O0BUACuus=;!s:=(o$_sb?Z7l7J%%wB6' );
define( 'SECURE_AUTH_KEY',  'loKLw0->~v*3:LV]/C:gK}Z<D1{Vb%]qgC& U+xMaQ0>!AoN`d8Nurb0z2mv;u):' );
define( 'LOGGED_IN_KEY',    '2ts-2V{1(L$~_D:V))%f|5qy&gk!Cza[7HT<8/bEb|< ,o1DUz*zvA!-Z-lE[926' );
define( 'NONCE_KEY',        '-n%o:O1?kczyuc>5}w$b6TPp+FS8PSQ3@uZi>Hir$STImJVHUUA,v*D?OKI;r)nS' );
define( 'AUTH_SALT',        '!y!MYm?X:VwFXx.XvI_P68QH])2I*6h,EsoVRDT.O-`YX-+@U/;U9b,U9@DQt6DL' );
define( 'SECURE_AUTH_SALT', 'Q5W^]~04$B*!1lJX/6*bk-H0f[Y-~8TAtS@B<o-~J|b{`WITk{XrTgc0.4d[~_Rl' );
define( 'LOGGED_IN_SALT',   '`KJQI50xMtYG~W%1%rjR86Xf(m?Aq#m9,eOJk)+!]q6;+#1S>m)?in-^h2N4QR|`' );
define( 'NONCE_SALT',       '%*_|G^cm4c3,|C}6.$=]R]W`J5fbE/hcT@rnc]:qT6xt85(Y;V,To|Zm{yWu#*XA' );

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
