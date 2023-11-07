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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2jR9{,W(F9;*;2,{|eqNW3gXLq/Kf=yHrwwW/>vpsZoMlNl]ahUS=Iu2|hy4ENk$' );
define( 'SECURE_AUTH_KEY',  'n%o5(bm4X[>TG:egJhan-G~yS=qvu(3IQcp<&~--QmzH<88q8~&uIVFT~1~qCq]p' );
define( 'LOGGED_IN_KEY',    ':M7kR*#W59-D;FQots.KAF=URaT=C:f-TJxkB92Ik0x<=}e;E`{.%Dm|yK,qKmTr' );
define( 'NONCE_KEY',        '(P9~exxiUPRq~L]Wf]85op^|L1PH2W]4o v4 2^kDLf#:4Xcdf_DU{H| Q[0{AMJ' );
define( 'AUTH_SALT',        'Z-&1dn(K64ChL9)4g/$9[!+da^Qg6Bx[7&z2/6l<,#%!]+8?gwhsHs@/?W*aAXJT' );
define( 'SECURE_AUTH_SALT', 'YQZ)$Zc1>2,18#W6]eb%9Ty>>``,9&=DBR/ovA$eLCO}>VmqL~&;An[/KKg7bO1A' );
define( 'LOGGED_IN_SALT',   '#*T:L]xcst<f8?+oMgxZOAy@0.>V*3ncN|<,THagm;<6eD={..omxI=YssWsKp;G' );
define( 'NONCE_SALT',       ' qCVa*Ua>.C~DgPf+ HV`,Q0U%zkfs`QBQyPkYtjPN9!Hm*}%|^L+3)PVGFJzG7]' );

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
