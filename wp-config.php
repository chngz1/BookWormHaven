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
define( 'DB_NAME', 'u900825059_i5Luh' );

/** Database username */
define( 'DB_USER', 'u900825059_S3sP3' );

/** Database password */
define( 'DB_PASSWORD', 'ngsuDDcOB2' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'd]/<_6qv_&- Vi7Sz#Ne _rR. C_#MipiW 7@-z~-dIUn.e1D4>qWrUpL>{8}:4o' );
define( 'SECURE_AUTH_KEY',   'rvV:Vz4?TEAPtyA;D!5T([Luw3)8`I9{8B->Jp:UI7[~Wr>{}N7tR3%4cwH?U_2}' );
define( 'LOGGED_IN_KEY',     '95|x/3NOz%qq hO}TePGej%!`vrrt(.qG)93TQ0GBA+nM60#;FN%X}cb$NkeTQzk' );
define( 'NONCE_KEY',         'bpY>#*9Y><Y4RHih5iW)Yd/Z{XXID790r9gK9l%ZmmjWxf&edK%g5Z<,muOsc(V_' );
define( 'AUTH_SALT',         'u#jS~GuaC/e8!&aJNJMeGCju;SC`q>Eyd,kU`DVf5t,3S)(#$/|=6.7JdA|c@N}3' );
define( 'SECURE_AUTH_SALT',  '?kzYwiJK8%tZf8Vji&WBKPH#Oj`cQ`?Z*$W!-wmXsTs]d|#)gI~tj%KwR/Bd7:hI' );
define( 'LOGGED_IN_SALT',    ' 2`gWW!C2VMmv0)|zP?mm$$Y6F]hUjSgT_59IJsx5I|L!`E$8r2#qI}>g,-x@A#P' );
define( 'NONCE_SALT',        'y,HZ12A/6#=a;qbNgZ:gd5l{*><$M$$:aa-.%%ijeuNdDWoU=qX_s,M!#uZYEB9`' );
define( 'WP_CACHE_KEY_SALT', '+k:YW b9-I;@g,4&EnAkicn?FAAmY`#$XR}oj3Z&DQJ*20~:N6=~^Sgx6[3tB&h)' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
