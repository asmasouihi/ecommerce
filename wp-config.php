<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^QC}6+D0XGf&17CeorB(_/Zv_T6#_:[^j_x$*Mx6i@$N3|,OtZ61dCq<Um-2j4{<' );
define( 'SECURE_AUTH_KEY',  'e!OlG&IA$bJEO6s1k><{1l{OLTy-$a$F9|d1PLsafQ&c{|2wWV&5!i:K#WWB5_4^' );
define( 'LOGGED_IN_KEY',    'L&[tUjUc_aMO$J/ cDk,*w#mG]i]eS24n>/RA~}n,N1AFVozrR[heqQIZ441#rd.' );
define( 'NONCE_KEY',        'Ww/7t{?4_l}PK>}O]>jpcDjPw[n7HNbcG`DfrLWROaH7>.6CV<_3EK,1sa^e`X!<' );
define( 'AUTH_SALT',        'NqAH7;/QEi^tNC]iU#DDZ[Zv&h]0_4nQ,0EFdt|?uJLksJ]Q4yN ezEkC+eYTT<<' );
define( 'SECURE_AUTH_SALT', '5gx!#HIWbXjF3_|[4OGi<zUd_037=qQrXcSLA!%Jd^.KMpSW&jpW8i3<pZWg/.,|' );
define( 'LOGGED_IN_SALT',   'TnttT^AacT59e]hWtF})|ms*fc=(/2G)dEj91_Z,WcTjvmDViov4cwXV?qu4c<)0' );
define( 'NONCE_SALT',       '(N~_(p~u!Qj7]U09~3H5i(`=y.<HXbhqEh^e6%Ex{h#7Ce75]PtnoRx+w^)NWka~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct'); 
