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
define( 'AUTH_KEY',         ']A( H2No| Hi|7<t$x+B#(KfV.W3-Zefd5xOM[vu+D+QuezH /2fsS6LJHUEjfNN' );
define( 'SECURE_AUTH_KEY',  '}u/exo]+6bT%IDIxX,2+xoy;CFNT|G-K)hvfsFFZM@j,8BF`Dn){;-p}+a&.<n&_' );
define( 'LOGGED_IN_KEY',    'HF/I_98=QKI5zJ(dd/D(s&)z%Wq3I#H_=HT/gqEFO?R~:bUv1VE5EmY5~3%%.%:|' );
define( 'NONCE_KEY',        'P7#7$0Kh[#j:kf|nA6HQAu#_Gv]:y`#$Fd1JXz`~}TOI[R=H=~$3Jwhd_#fyR?>;' );
define( 'AUTH_SALT',        'E`s=Wm.=26paQ|v{8m+$g9Dgvbe,{V0rb-OTcCbDh0ApCj;cIK.Qxfr1nX.b}8c+' );
define( 'SECURE_AUTH_SALT', '-nj`!{5XV{U5lUrqvD|!x#{~d3L5Wr,K0z*/>3i}?~t=sx6`>Fn(,kiB)c4Pr7jK' );
define( 'LOGGED_IN_SALT',   '.<MT||ffnxs3}K)epjkrQNR*XyA>ezADP5F8QrQWzfV[41aZEFd9f$|ow~9 ECX~' );
define( 'NONCE_SALT',       '3 kPMa>dQl$uF;&#%Q<[jh@xbMA`1?W(;K39.6)?U6d5.OSkO4wUmmid>]LHfmH@' );

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
