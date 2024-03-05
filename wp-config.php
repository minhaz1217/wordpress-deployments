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
define( 'DB_NAME', 'marina-resort' );

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
define( 'AUTH_KEY',         '{2wqB8@<ez <OnGbw2),ScZ-nU goZ}~Z7uQbw{dBq(1:nB:ONkQDzR2>x.2-tEx' );
define( 'SECURE_AUTH_KEY',  'jY%}1t8@.P4N|1=}T$Rk@kRxM@c=xTm=h=3|]C>?Yi#`b`Za-B:<{e7|jSBdMJF+' );
define( 'LOGGED_IN_KEY',    'C6JFJ&Tgh@%<w[k[3n=+gFf>@CT6T9s@7:G%Tr$cIl|WDo&p=oq4Q:kpIvn7.{>I' );
define( 'NONCE_KEY',        'Te2qYeL6)Qx(XZ1m?XmDHqZOZE[iwnB!9fR4fK8hWLZ,PxPHJ0W%Nh6vVnJH<6th' );
define( 'AUTH_SALT',        '=?nUTGMf,pNPcei)w|urvmPW{2NHl/B@TWJkYk3_1X3}]Q[$9j[*R?gC.9fl(h2k' );
define( 'SECURE_AUTH_SALT', '|VRh7$NE4+lNc>ccLDpDLf}Dd:=9Q;vy98d{*(DKRhLp7c iW!B)zV|/N-b[=&?y' );
define( 'LOGGED_IN_SALT',   'mQ~GZ?N/PD$JH6I1AuW6XGg j65EI0OG2Zdy`&tD}wC-h`,bUIPf5+pbO2G7Cx_B' );
define( 'NONCE_SALT',       '[43t{0<0$N;_vP}~%`,*Qmq0g]{^pO/<zoTSn:BBK=ayHkI/}Xu sqo@E`=QiQov' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'marina_resort';

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
