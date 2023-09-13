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
define( 'DB_NAME', 'anguwordpress' );

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
define( 'AUTH_KEY',         '41Q}URVJn:-`PryDnM]?^q>PNw`/=#6wHX+Yy^Qyay39kk>@Iu2:*) hb[!:,WTH' );
define( 'SECURE_AUTH_KEY',  'tOSRwy@=OmM.CO*BZ;5#s)R9k0?s.y4XBcKrtp5o!@U}Z0SfeX n!531K+6N @*%' );
define( 'LOGGED_IN_KEY',    'A*wPAX>nd=YMr7!|I]2TP)^??kO#%EXfM7tcb^g]jQ.V*U$m!z_HnHj?_u~3b4r,' );
define( 'NONCE_KEY',        'SNSRAa_czx.qRGjgSoud+c@~f_>r`YCtYri_D&=G2Xbe_l_LhVeHB6?t<f`Ptl{I' );
define( 'AUTH_SALT',        'U.,1+2E<~lifQ?/p`M4<dj8ptgd-fZM$6W:Gnmvny~rDfwywI4D6H(~xi!?X5mzM' );
define( 'SECURE_AUTH_SALT', '/y?V8DX&nF_CFbKcsTJ989{a{.#pmIwEK-IdOOYs.E]$c=][NP@uz7r|tFYPd<w6' );
define( 'LOGGED_IN_SALT',   '6+z~q@b,NmR/CsQk;w#JLz$=8qPB$n&QS)p8F6!-I{l4G`|IS{!~kl}%(dhD(1B]' );
define( 'NONCE_SALT',       '%quuN&9GdsxlZDC1S_rFf6JT1jdT@J%6Wknt|pq]*N)-a,/R65fw}A@yL.bhcyI2' );

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
