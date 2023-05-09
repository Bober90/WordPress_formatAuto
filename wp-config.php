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
define( 'DB_NAME', 'auto_bd' );

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
define( 'AUTH_KEY',         'fJFYI0|G<l:7UXnl2*&hh;6P|L%MuxV>~L0D?2BRnh%d[fjXYKFZWj.t$`Dd9GHn' );
define( 'SECURE_AUTH_KEY',  'z~_t+]`4`r)kfNw=$hQNnf@:0EU}g_{#^Q,BeVRS3jXcbBZR27)p;!*DW*bZ^J3>' );
define( 'LOGGED_IN_KEY',    '{H740[vg7ZWUD)J`2PdBj9{(66o9<5h*.6[&u%:X,6Q:yL*V6X8$qldfHy`=4u)9' );
define( 'NONCE_KEY',        '0)~$N/H!#u8)ymt3^XO|xEt:y<V~x@@Xc ao.EC:LU!nE3-|Yo6+z3iB;U?d[:Ft' );
define( 'AUTH_SALT',        'wEKeL;Kb#I2YQp`Br,ntK9z(c.yL_fdYO*yM:-,Zd=1=5vkOMn$OZnyWP6$kflMc' );
define( 'SECURE_AUTH_SALT', 'uCx]RijLn`[n)4ho3|bH_QS`:XsoQjBoXjjm+])h3p^lP>sZS^1-hto*Qe_JJ{(p' );
define( 'LOGGED_IN_SALT',   'Poj;1N=Tr-JMB7=e7:(/k_kOq;;KfVCQ;yH-0s=^{:OI +02We5z9Qiz[fyW{z8O' );
define( 'NONCE_SALT',       'bY}lJj={SwC}=)[4.a!MA*Q*9}+oHrn-$F{I{m6Gje%^`g#:,-Cx h.1u_-Z0oL&' );

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
