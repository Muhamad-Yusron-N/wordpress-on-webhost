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
define( 'DB_NAME', 'wordpresss' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Artificial_Advisor77' );

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
define( 'AUTH_KEY',         'Ln`]^!dZ:Q* w_1ng1<WQP&N^N?@.;(:h<<(A<1g1wm X;( g9:q_4)S;e.b@V(x' );
define( 'SECURE_AUTH_KEY',  '<Ar*Hhs57-)n%,887SIZnwfSAzj~]vB,wWDfk|_RcLJ/XA$M&;W5w1~,uZUSi*;$' );
define( 'LOGGED_IN_KEY',    'Uya&W0-Nx&tQG8%0b)T.7}BFV2D%tZGFzj&k,X5UsC/[q-i]y0/QMLPpySp)DI8R' );
define( 'NONCE_KEY',        '=ZodaVL2jqpA=l62_(AK[mBX!I0IonuB1~MR0z@jUS6bNN+UlQ&2aukom3EaBC:]' );
define( 'AUTH_SALT',        'hX+L2k.Qtw?`Ze ?z!}@dJMB,L]MfMp2uEC|o@JVtd?L;HaS>Ce=9KT7[&NfBf_V' );
define( 'SECURE_AUTH_SALT', 'JJ2d11/SEs+*!$Yc?`^1FjVjMgUeI6HYeb,3_(L+IA4E7TpbhVIz?C{|46Q{E{@B' );
define( 'LOGGED_IN_SALT',   'mHtUUNg~cJ$ $<Ad1zL-)Ce=k$K^EA<_+9;zBqqywDd_/Wf]zBM:*qk,|?Y=HCA{' );
define( 'NONCE_SALT',       'hb]} EXi%`#I$|zZk*O.:/J%ooK4QdGlLp S%$THQ$y+RspU$go7`3=O$%:fj3^*' );

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
