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
define( 'DB_NAME', 'falcon' );

/** Database username */
define( 'DB_USER', 'ali' );

/** Database password */
define( 'DB_PASSWORD', 'Aali2000@$' );

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
define( 'AUTH_KEY',         'QN#x<?cHK+?2NJU-0j+{0IXo#6+gjeA)W`UT0L4U_S,ueHawI$9t}|S/g.`I$XB.' );
define( 'SECURE_AUTH_KEY',  'F<I_!R0jTToB=vz&uvn0mpCj|Og/t1x$xeAY6BRDU}Fk*f}DDIolqsD.ox9.5~CT' );
define( 'LOGGED_IN_KEY',    'L&I>`at$7O[/;8&iYYL-!uXiJQuDvl0Pb`^xJ4s.BtjPs2p!7|oB+bI?Ozn$m9PT' );
define( 'NONCE_KEY',        'T!&st&x#rFdRUZgJ%,.INYQ1w][5nttfMe<+iEEszA+jjyv|=avlrQQdH[qk`.Qr' );
define( 'AUTH_SALT',        'umZM0;i{.mkA#%1WVDZKgG.tzLc!dyV##ml9p/uJd%HB>^BD6f^D2,[aj0TmQMUy' );
define( 'SECURE_AUTH_SALT', '6JT 9=zz7-$C!Iz>n9giOk{2c4.-HB}N  /yBQT.nby;$,z`GX[_$(AhL_KTqGC<' );
define( 'LOGGED_IN_SALT',   '}3-!%}]yF=)%1@``[Y3lG%x2-X+!``%p3G7_QUb5CKNk/MZTA[c9?0*;WZ?Hd-j_' );
define( 'NONCE_SALT',       'BC^b~E6.h8d+6F;&bxe$XD?F)_00;_WT %?4=vnE,B/AN$LIL@,hg8h^9c:RY#c0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'flco_';

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
