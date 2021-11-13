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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresstest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'RLzVJM%6V!]fy{-/Oq*sN.nB#kfz*&[A:raP75:4[r|2LG@7X@pHo+m1byc=WWZg' );
define( 'SECURE_AUTH_KEY',  'gVkl;z~j5.qX_]Ii<UxeP Qyw:LKb9^/Ms/a~OKjYEdoVq(K@)7l}F&DKo@XOjY/' );
define( 'LOGGED_IN_KEY',    'Juh(f)mU9/vMVlq-o([7]N,`dApLCIo7(OKP3CfD ~oc$>(|sXFR>K)p8?x^^m_g' );
define( 'NONCE_KEY',        '<42V$I>`_FRtNV}M4Y2-9?@D>Yr/n:*b.ZB4r2@$^ #g-,TJ>h)suSb-DXAEi%1i' );
define( 'AUTH_SALT',        '#i|(_-eI:Kr.I:;,/Ve(JWD*PzyW_tBkmHM8ef+4FdgG+E3LN00EJ JT67HoeV#<' );
define( 'SECURE_AUTH_SALT', '0.)r.EY-In,F;uq_NHl$~j5kb(XeQvG/jNE7:1@2J<xQUx$6`:IO6wtx2&iU!5st' );
define( 'LOGGED_IN_SALT',   'r9SDR>>DH2>)v3r|9#9p!cn=mGX*EA1DU8{VV??~~VZ]t@,Kya,Y]]_>/!=%v8S0' );
define( 'NONCE_SALT',       '+6!Iu?Rdyo]UMI^9_ldLTn$jpj^-=N3,SP;([{BU5tjXqbKi9@^?k[T UbO$fX4x' );

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
