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
define( 'DB_NAME', 'khachhang_wp_bhthienan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'd@t@base' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3316' );

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
define( 'AUTH_KEY',         'gd[lOwk% UsH`*>G+5pU`G{}5-sdV7!shF?xSz!88ei<}Y,EnD3D$+z%Kg_UK.wu' );
define( 'SECURE_AUTH_KEY',  '$!J@b<s05F08a>-Z:{f`SS0l#6PAX_P`8_CL3Gd[iUHHVahh26ZqAYuF9Lf:MR]c' );
define( 'LOGGED_IN_KEY',    '( .&B$k1o,?>gY*L[RlS&smR[FS3Y[&pw|4uJNKVu.igB0Zk>cT(;Ybj-rK?cHd?' );
define( 'NONCE_KEY',        ')3V#FSXQ;jlKt^J*y2IdBCF`e>:90*QE}d2(fWTcFZR%,}R0Uh/K[W 3ee|*N[x(' );
define( 'AUTH_SALT',        'X:s/5Ef$g.{K$--3:W:f`-dx|7:JZz.ujF=(S3S/G=;ED4kB+<|U&&1i2IR+f`2?' );
define( 'SECURE_AUTH_SALT', 'F{x21L$0gT?xmh!:Gwy>w%/!!zqdjknr.F&~E1h@$j][M}q+L!n+JM)9dzF:v=Q}' );
define( 'LOGGED_IN_SALT',   'qVk`KKpJtts@tP9GzAl= wr/wm!XW4{ucqMr.kRS#CH.d<^ {l.2<vFg:+?4a1Iz' );
define( 'NONCE_SALT',       'Bwru.m;WAgm1XVo?N-e,m<:Kpl/5COLzP)O`_bhlWY{{QhJPC%Ht(Wo;qvC/nalk' );

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
