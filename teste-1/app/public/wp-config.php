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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ',};U @G-_!]Fazp =Z(.Glu1ao~RcwhHI)G=#PP|~HY=4ng4i:`}d7S:|D]-I9l}' );
define( 'SECURE_AUTH_KEY',   'P]Nd5a&@DY>}?:sK$p9<9OG|2 UM(g,p!n)F(m$df)?Ka~!0jlBd)<HWdwJ]W k*' );
define( 'LOGGED_IN_KEY',     'Aii3NM@nTN7_w<!38`QXe+FvZkp2fQ2OjxXQ+@xWgf06!my9I8-}qg(29AWyBOTD' );
define( 'NONCE_KEY',         'yofZLZX?}B3>8}S`)TWQXmHrMADs6(^CPRHFk7~|t/LV#Rw9I7GH%=C[>5gpw^t-' );
define( 'AUTH_SALT',         '%R;*K.2)=;d}LuLFKv?C5Bn0uBsdvc}Y4_[~7vV-1:=4]Q:x%/Yr@<*q9%^%Y=H]' );
define( 'SECURE_AUTH_SALT',  'IoLC:X$|.D1:Co>`-Kaax[Z<|7D}[Z-5v9o#XL3U[-U-_!x$%,|bc(+9Kk,CAkDj' );
define( 'LOGGED_IN_SALT',    'ue|--8v}DdwFH3VpYL_>v+R0=[eFT4(fM0wuN;niPQz(|$^BqQJXB~mErpS(B~Ic' );
define( 'NONCE_SALT',        '0 A%fa,hAq~qD~tbQ-je(3gURl+tOM$>y3)4qNYIy?Xy7M-NckR}8idO+LaES},Q' );
define( 'WP_CACHE_KEY_SALT', 'p.`D}Hlu6!t&*i@)~!??ij:DKO=E{5yc}:OVgI!@>y51@Ysx/|iM]%{}r]lOL`ur' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
