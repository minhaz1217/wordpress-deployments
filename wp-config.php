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
define( 'DB_NAME', 'wordpress-deployments' );

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
define( 'AUTH_KEY',         ' oP(e-295p<9N4$_?YO5OyL6jBc0:K>_AHzmmny{~:qL$&[.uo?xT@Hd4[6U^<6A' );
define( 'SECURE_AUTH_KEY',  'BA1jurbj{U(7B4VRn2VWURxSJ!jBj#{P5;!bOkm~i_QhZelXwK3&hjV3R8Y>Rx-5' );
define( 'LOGGED_IN_KEY',    '9avKXe%0=*BmX0@GryaDsYgg;51E540j[@wgD[u6KQEFV>dVvQ_HfExY(pU$,/RL' );
define( 'NONCE_KEY',        'CDIA8.f.yMkZe-IM~] 2bC5!3wCF[zkj?+0R)C0-veMwqh?@DuvP%Vk8k*zYL6l-' );
define( 'AUTH_SALT',        'HKyDsm:#w-[H8~0{#3I]( 5 (,]6Qj8%qe Wzhuv_M@eXGfm[S Mgf r@HvcoQ13' );
define( 'SECURE_AUTH_SALT', 'Z+RJP>0W6T7wq*Q?4 @_9~?:w=|ao9?}yPu_ O;`;aZPKFcFY6eY;,<wtN%|^qN!' );
define( 'LOGGED_IN_SALT',   '}Xn<)dKg.ak|hK.15K_I2}aIYjkXolGPMWsYDr<,CnTjGf60;z(w#[W/Z^+6]V{h' );
define( 'NONCE_SALT',       'T1oO1*Y l|WPZBUeIA1un4!,k}yHL?70Z3:B_ZQ(eH{;6Wkt,CF.D_g:m}*pC0{K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_deployments_';

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
