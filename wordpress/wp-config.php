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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '10up-techsandbox-test' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'P1SG+%lWbRlS39w28u@]h*z:}:ToiY%)Yx:=/)i{IIkhD&11Xj(Z`Tl{lq_d4fq2' );
define( 'SECURE_AUTH_KEY',   'BY+1U!3Z8a6SSZ8XCu{C(hCb+hH[ly$rWUk&tql-~>v>=xEXu=y mGBf?z6)Ua#<' );
define( 'LOGGED_IN_KEY',     '0K7Q.*[_A S@aGlp&^M~+khV})kS{4kd=bw|l7Hf`):Sp`y.j3 >4trNCg_+T1Hr' );
define( 'NONCE_KEY',         'r5pn#.ejzLXFj$<t6GK3UD%%I^NBxP~@CdVvKHqKOfoQ,~r;`XeLh<D<3gqw^HE~' );
define( 'AUTH_SALT',         'vc]8..T(I!F?y=E2%m*dp|bnP%7G15.~Bz{ygDUkqV.bj-RQ-zo.4;]#0G)g71O(' );
define( 'SECURE_AUTH_SALT',  '^?:E`vd$u^dg?:[ Mdo4V8DgYil=!]PEEUcE~,57;s*`&N@, +xr=)j<~Z`qp]&[' );
define( 'LOGGED_IN_SALT',    '@W(G?Vmv4.3K5Q& ?3%QeAuYyY+#`^4`$g#-6yv2/]I/[8Dl lM6gSa3p3Hlqr,v' );
define( 'NONCE_SALT',        'D1MVgtxLhS<t@@s}JWAd>,1p}}Lw,?2k`1[Yl-]`%El1}m<`I}0z5)/vCC.]HKrc' );
define( 'WP_CACHE_KEY_SALT', 'zpUAO1/Y@Z`SV{@cr/5t~T#LKJ+<Y-hAOmTJh%bJS7G8sapkzHGG2bej/S,/Gig>' );


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
