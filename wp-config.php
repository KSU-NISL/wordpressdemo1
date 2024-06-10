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
define( 'DB_NAME', 'wordpressdemo1' );

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
define( 'AUTH_KEY',         '(b3%Y`7j ODa )EUp}4H{oF`vQ6t{JtzsP@Cl,7=!F$8.M`nI e<vYDqlH.HdiT(' );
define( 'SECURE_AUTH_KEY',  '.fsJ(}EPvod+]nzGxRO{Rfe;~PmWY+ySnXXnqxY@=tE/f-;mZ6#WJ{-IZ,vf>A^O' );
define( 'LOGGED_IN_KEY',    'eS^r=3tQI#Q;fD3 {s[W$QDly,VhH#YV;B?=,bE(fW2M5L_G^%;4V`oxP/n{1U@T' );
define( 'NONCE_KEY',        ')y]#Ly}DC(PA?45&oe5nh-SR8[Gcw&m-H%W@/V%64Bm-fPylw(v[wRT{h)8q+^>p' );
define( 'AUTH_SALT',        '}5=cl11LL-?b:My 0H0VS7%&$9^/+?ZBjw;y3iCc_$JIFe~9$?nG;EkA$vFZG<rH' );
define( 'SECURE_AUTH_SALT', 'cxB!x@r|{T0Wonw%dN,>(7A6SCK!{tR ebv:r[0buWk@%^S*A;!02@1@_kZSBYAX' );
define( 'LOGGED_IN_SALT',   '7]L-t GCU>({hMyF Q%Bho<qp~e%WEb5_u#D@# $+QyX`7}-UD@U>fy/5kE2ulAq' );
define( 'NONCE_SALT',       '(PPnb?YuLw!KjVzvh%9W~N| mr;k`4d9TvitV,=|o]zT4PWK]k2G,-n4uVpu28N=' );

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
