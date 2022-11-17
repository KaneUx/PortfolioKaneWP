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
define( 'DB_NAME', 'wpkane' );

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
define( 'AUTH_KEY',         ';2*Wj$b/0z#EAQ=[[m)rV<>NpngOQ9o<SZ{|;DmXp3IvkYE7x:v`<(~XJrvBG%/O' );
define( 'SECURE_AUTH_KEY',  'J@9)XBUr1{i33lk K1zDART/srz)|0-mq3R+!(nwVY.4[iB)vr]HL3-`O*wV{uw=' );
define( 'LOGGED_IN_KEY',    '%PVcmb`AvdB.*8as-5.DsCqv#%U]Ibp=w78Q/n7m/0hc<zWB[s-@F+*.|FdH^;3_' );
define( 'NONCE_KEY',        'U4Gxd]$8{=p;{6<BSMJFd` 4=&]k`K]| Z468]!]Z#D4FF?[A}kZ!@-4Vg(cEU3^' );
define( 'AUTH_SALT',        '$vFtT<K!$Cr [e(Q]a@K@/cA00r@7!5C:C5XRgT4{@)I>_Sb]A4W-H^h[jfk&l 7' );
define( 'SECURE_AUTH_SALT', 'bw0pyyY1wqXj]MThujZt^=Hm/IMyN~)^EHv&5O=`kV0[X<Fj0xVGV?;FKUI.{I-r' );
define( 'LOGGED_IN_SALT',   '7Ag^+,.>PG*R=DTRfieNMCm6J#Y@1KDU7Vs[J`beX*FP9$]biCK,A1,0Oe9zQwL-' );
define( 'NONCE_SALT',       ';zq26rd3O?aaphRK%x2,(1ue).N3pi=&fV%02/3;^gK3=c*I@pX_to[d}yLGvog4' );

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
