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
define( 'DB_NAME', 'wristland' );

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
define( 'AUTH_KEY',         '7C8&,H!Tllc[@|+x2s#J8irRus[<=WepeU/8dQ6I^6zYLxVp4;k)Q-oQjbFb^3S&' );
define( 'SECURE_AUTH_KEY',  'FX<|b18u-Mt3.Xl4|{m|)$M%-2:N7[,P~F#@$`?=4J@Ci<3IW9}KwkbR_9Jc*_j(' );
define( 'LOGGED_IN_KEY',    'iW:)C{VtN|~cB@212Hj$bT)?UXzH+(=LRo6p{-Ma%TE(APB/M^p$ng035,G44J&l' );
define( 'NONCE_KEY',        'I|)E7,e1D-e;i(lWYUA&^lE%V=1?1t8aDx-pAi ?mosk#T4puw*xgWw)b8KSV-|/' );
define( 'AUTH_SALT',        'CaU%]u;((cW&].b=V@E2b4S0<i!HprkAER5%|R2[.`dz5MuyX9J^@XxjWX!bf1nb' );
define( 'SECURE_AUTH_SALT', 'B7>P#Y3%|9kLol*;yVrE76B#T/!8a6Pe%=#3%N`EiU)Zq^^V*>*tg$EWjymxx~xY' );
define( 'LOGGED_IN_SALT',   'p&</h<x5xHt2NmOYhs*;p{&YLxUz;QrBww0X9Hr{jv?[Xts]UCa,Y.qKk1E{h{*[' );
define( 'NONCE_SALT',       'a{o?AzNolPzIA:NyO;E@Be,PS?b+lywuzd~,=Y6WZwTSUzKX.,|?Ib:d.s$UVtuK' );

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
