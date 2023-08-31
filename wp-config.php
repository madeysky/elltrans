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
define( 'DB_NAME', 'elltrans' );

/** Database username */
define( 'DB_USER', 'elltrans' );

/** Database password */
define( 'DB_PASSWORD', 'M@yday1234' );

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
define( 'AUTH_KEY',         '}G[#]1:2-C.lcWm74lc,AZd^7l!ew4~)3poZv`22Co_B(-[N;Ol|ydG.Jp9V!(X^' );
define( 'SECURE_AUTH_KEY',  'J~>,d3xc~y#SJ)g?Oh5QC6Rq|7?z%Z|%qeOP)`rUuIBCq*ExH]W`F<]ma$dWtbq)' );
define( 'LOGGED_IN_KEY',    '<yJqeL;-SH;<pYob`Ia}lerNi6]EK;q=YePxf>E3`<r_pTg!M^NXY8FS!t(_p ES' );
define( 'NONCE_KEY',        '~8q}DR6q*~u-n7u+-B*UA/<{0}p7F8?4/nC|[f4e~Az0wX54jDbdWzC$Gl[8NeU5' );
define( 'AUTH_SALT',        '^H7v8-GrY<xE RaZ!Q6>{KchoK^sJ=?2nexuGhKGTV=Imk{=>AQL8ke-FBxF/94V' );
define( 'SECURE_AUTH_SALT', 'E]6d!d~e-M<jD &:1=9l;/mMDFbx>dn1Kvlr*Y6| N11&B/N(HuhO{TuLOrvX@*a' );
define( 'LOGGED_IN_SALT',   'RT&v[&A5Ur]FZcMnia,k.XGWu^@V|Q*$DRR%HJDs[6K.a#tfcF*`9!2XcVlCl|oj' );
define( 'NONCE_SALT',       's;JZk>oO7^c_62$37VC /4c8xr523>Hd%ivTaG}{-=bm(tYqyL*i*>d^&G$(Yx@,' );

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
