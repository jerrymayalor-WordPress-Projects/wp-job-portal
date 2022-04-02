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
define( 'DB_NAME', 'wp_job_portal_db' );

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
define( 'AUTH_KEY',         'F%[a|iCl0cO1Xk_OwaS[LD4c3,.%8>K<JEg]5}S~typg@=ZJa?X}!(~lXtEkr#BM' );
define( 'SECURE_AUTH_KEY',  '^yrN@<y=p2(f8U*:KKlL`d@c&7QcJ|@FI}`rv45J]W*_ithw.W=-5d(93C1n(i@u' );
define( 'LOGGED_IN_KEY',    'F|Cx9~<mY((|et#q#rTcSz]$TnFcZ;)b}[fIpXc!zZ=jA.l$qXB&mVHAVPV/)~dd' );
define( 'NONCE_KEY',        '*B)graF-Va_gXn^7aC?3$W_FlfPUcro-N.3A?q&)DV5ODGJys1~Z>G dj@7z_Uu.' );
define( 'AUTH_SALT',        's>pw&Gb/3`^5dZ>1zumER%Sfb+G4iZ0{_~:dR`54,CgY$.@s0t-D`Xu.Xa++,ZBT' );
define( 'SECURE_AUTH_SALT', '-1t!pR%m M5=;aKWUN4|;dUt8n_0~4~XOgE]gjm]5Fu;VJdK^.|Mb3H=2KfI[po!' );
define( 'LOGGED_IN_SALT',   '?(u_~r{+gsOq9gAGAagW}io{KzoaQ}n`cMj[8sN}4R]K19%;J|8.Hd=x0l8(7H0~' );
define( 'NONCE_SALT',       'O|&H_8J+~LT^h4:VER43ku<)2@={2,X0Gc-.^}VlN#Q>vfe)*T!@`6!sR yd<NDk' );

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
