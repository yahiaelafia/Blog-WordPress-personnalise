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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'd`}#}o[6^v>En=!QZ#KC/(.LfqpfL`1hZJ@57sXr^<p|1ze`=NBf#&!<A-Y)O(Tr' );
define( 'SECURE_AUTH_KEY',  'OdA(deL9+g]O>SdU?4|~]fZJsSb[<@Ij9Z{ZHeydJeie3H%1u^={AF8&!vm4z4 R' );
define( 'LOGGED_IN_KEY',    'zu[Izj^&{r 4!mV0|ag[!H1ftGJem$?;L}Dr!/$RD+ki)-1P?cLA]%xk694x/;~^' );
define( 'NONCE_KEY',        'rNNm7Y{5L72M6*V=rMh9ep/U8{8qrbzjP(Puynxy*/bt4oW:Z!lhy:L9m{&he7]^' );
define( 'AUTH_SALT',        '@$R+4,&`,?#&G^:sO5DaBD^rF`@%,:0y}o:*4cDE/W_>W?1[3qBrc *;>^u(Y3h0' );
define( 'SECURE_AUTH_SALT', 'E>SoEYlAQ~r!k=;a=RA/Q/mK20F|)gb!d2j-<JPTQ=d:) 0~bJTmPP#RO^AFF)q)' );
define( 'LOGGED_IN_SALT',   'Z5:(Do:QYbBDowP5^h@|4:&UEqr>A.N=,{)*O{fSF^7_`1vcF<L)E3?-4m&3sCWO' );
define( 'NONCE_SALT',       '^4Q)zO0Up,JqlnN(Yf}Hk4&[LFF[u^0/:[m1)hq;Zgge[Is+AAY+_^#v3k80{hGo' );

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
