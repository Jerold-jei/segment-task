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
define( 'DB_NAME', 'task-wp' );

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
define( 'AUTH_KEY',         'j63jAdbQ?F*9iC<<{I}T|V9+8wVu2 ?DhU]uC},$1Y9fa[uX4V%3kOs{oB8pPK77' );
define( 'SECURE_AUTH_KEY',  '$mJVIi$akQd!I|0f2Mz_J9G/fdq~@qG`03Urn+6-y=PGm_atI%{l2:j%6^uJV+.$' );
define( 'LOGGED_IN_KEY',    '.9QYeM2}6)or+HBjV`V4Ov LbaCmXd ;};aqbdy}l#U1AaV0e$o@T$b&<sq%*>2B' );
define( 'NONCE_KEY',        'v1zY2$zE<a%giLA]ES[%XQ./nq(RcJQ%pfg@PY!R-y(K04_M>e9m?(+Slc?ZMOW(' );
define( 'AUTH_SALT',        'N>Up3Bt> Q,mJR F@ye(Av.]LN2w5&AqC_2cDLA/@0l1>dzW$+kY_9;;PeGsu7?P' );
define( 'SECURE_AUTH_SALT', 'Mw  $u/8P2hI0<rLu-Qp3sD:f%%|oz72Kq^E7SmdWD>;]]tzN4.vH:T.%L_G;3>8' );
define( 'LOGGED_IN_SALT',   'ib/E,MIuk2YBa #jE_,Gnz07:*|`n4POqJA18dUyX09MV?[g-k0+VRIHFu^ 3}gy' );
define( 'NONCE_SALT',       '4pA5s[htCn!L<IS,]_Mo*SR!Cj]B2wHcVv<No3=k!]4rxQLcap[MIWkSn:1k>r6_' );

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
