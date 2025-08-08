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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'h(;0n`D3L:E.Wy3J!~8y?vE[hp$]7-NCZ-|6,IltU[OGVUuXt2,EEK%x7P}BWGn3' );
define( 'SECURE_AUTH_KEY',  'h@U&uV@d20#f2#ow)J|v=l9i:3q.>}5ad5@V+1eL-3|G:nFmz7dv,_Uv fA0Qe^*' );
define( 'LOGGED_IN_KEY',    'cF{K@yn1j)4FY3w7TW%i2/nQv>0G+Xl!>^9K5u<>oB|hOXB.uDmKl=i 2B6zM838' );
define( 'NONCE_KEY',        'J`FuJ$!RToW4w-ANu^&3sGN&mSTI!.U.}`ZEm=p(R>9ee0-op@C){U}.pwe4>0LM' );
define( 'AUTH_SALT',        'E  kSfIGIQy%W-83I>NJ5-h}+@7*S`l[]ie_RL&Zwq{=3En@%/oT99ncVtwib2s>' );
define( 'SECURE_AUTH_SALT', 'tATa|EsC!q80~|`a)%o1opRoNL?d62#<K2Y]%1v/S4syZWCt04SRrg|E-^Q@v#.b' );
define( 'LOGGED_IN_SALT',   '0d@1u,QruO[vU$vL.914|-&L9/xNPv;^ch[RKCPgP[p^)zc;nS:wa<p=W~%w%6$9' );
define( 'NONCE_SALT',       'YAn|BJEv7Jd{+N(0)sI0XeV0q34uSC>,r7fQGu[CPotg^s~+6(2.$F1tL^c^$/4u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'WP_A23';

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
