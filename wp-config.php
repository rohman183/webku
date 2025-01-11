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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kelurahantembalang' );

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
define( 'AUTH_KEY',         'v-e:u0fWjG{7*?@A_lXoL$gtXWt!~f%R8YpK_fS7xy*|y0?l)_o.!.{YYGzDPyKG' );
define( 'SECURE_AUTH_KEY',  '46~RItdIHz%ZCQz~|A=S)DA(V*H-4drls9~b3|/8$#J[7{E{UY`Vkx|19whlRGj+' );
define( 'LOGGED_IN_KEY',    'r;y`CgX+U];y-MebK$WKP_GWvXI~_(@tlqU)C6aw(261*v39=|A8f[VLO.B:q,6W' );
define( 'NONCE_KEY',        'V8pl52vAnj(>H7D,:,u ~.+OPpb._*TAWs8tS/.A*ev_M9J{RGyc03l|wuAqQ%zt' );
define( 'AUTH_SALT',        'S&Ntc;iA))f73*i,(N}Kt?]QB$,I[.#`H}4D%nuHd<wT20!o!G>;x][&:VsL?nO{' );
define( 'SECURE_AUTH_SALT', '{vwXb^Jut ( e2M5`SL/?bG%YBk-[R)x<L>w|g0< uT}p`hM-GD/h P42m^.JF>c' );
define( 'LOGGED_IN_SALT',   'goUnX]feU](ct *tPAt0gg,+7%hx nH?ZhpTn;Nk?)^L|[~a>D;Z,,(Bhh~?N!s)' );
define( 'NONCE_SALT',       'R2Q?ClV?PJf98ZOf53j4nOo3?yjq~bRYErrq;g#o!gS$2vY9NdvC<0jLA$>2V3P;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
