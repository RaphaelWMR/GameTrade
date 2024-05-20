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
define( 'DB_NAME', 'railway' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'MIBQqTrjSrOFrgYWIGUOREDasmbPwjHl' );

/** Database hostname */
define( 'DB_HOST', 'roundhouse.proxy.rlwy.net:13736' );

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
define( 'AUTH_KEY',         'U PG($;sNrbID=FiW]PhK|(>F2RGy3_`)xgM`YTT69h1~q.S5XfZvwrb{X<@39g(' );
define( 'SECURE_AUTH_KEY',  'Kb;T2(G/r7&N3QLo:6Bsc7_Jj:g]cy{yTVZ#FQh&~)Rg+v]52a5sv(FX59d&o1r5' );
define( 'LOGGED_IN_KEY',    'A7sa!GgrLGuCrcqRZ-+>aid4cR+(u`kd dEg-TN~T@bmfUW[&bNzF_h;oXI5+WAc' );
define( 'NONCE_KEY',        '-Q!e<!+g>[PkcgvQU2f%Y)g2CW22^T O#6]%{(@q2k7oVlv}QW 6b*Rz#&d~!S4I' );
define( 'AUTH_SALT',        'y%+AK.{^vu%_9#Zn~C8Rw&d;N9,tLD@zEJ 3(dbCXj-W[9l/uCb<:fx[a67kcVQq' );
define( 'SECURE_AUTH_SALT', ' %uy2Xkz_:?H[%t|n-1&,][Z*_r%zuq=e%bLajp_42|fZaP6`yY^-}t&f=k2$-=$' );
define( 'LOGGED_IN_SALT',   '9Qb?8X/M<(Sp@^{)ks!1MeG}zL>7=eXH1`D7k%=~[umS!fK]IB5=W;*LI|+le[0R' );
define( 'NONCE_SALT',       'W-cZFJQsfdW^k[.Z8(??eyt8,+?,oZ_N!u6-_pM~[!4*|*+Dk|~cL+00[0/Z%E3b' );

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
