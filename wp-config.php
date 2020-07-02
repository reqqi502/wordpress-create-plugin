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
define( 'DB_NAME', 'boiler' );

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
define( 'AUTH_KEY',         'Bc=mL8C!`8&%!|8;3qhr7l{Dj$<o&KZ?!!KU5K(](mj4?ODG(5#0jWLOvHHrk_+I' );
define( 'SECURE_AUTH_KEY',  'dXo3!<SoO,?xXtFDC0!]^-?qa{A.fV,DUbrYYos8H9c*9rtm~zk EbO=4:yq/V#J' );
define( 'LOGGED_IN_KEY',    'Q|}BiKD=@vPlw;6~k[TH&SWcW)(@,NtS`5OAz~t6!c<%~K[/||a@CD4cbg:Jdbh0' );
define( 'NONCE_KEY',        '0Ny[p].>S[}Rd~q+_jA_Bp^$&]pG,*ZO&3KZ*w c;9ymIMr=ch4`GzYkK!GN5fk!' );
define( 'AUTH_SALT',        ':}+jSd]=#|X}wP~kP[]1#C[A#Gm/hJ(_|&8i!O[un~3vjK|;1hCUbzZ/$WU%6*uY' );
define( 'SECURE_AUTH_SALT', '/Wna.%S`! N]:U9>J;#YC@;tE@<a.8m+TQarqh?-s(X/3d=l18A83`QZ;A{X*yHR' );
define( 'LOGGED_IN_SALT',   '<H+;4cnDKtz.c_rG6x5#It+vi{bZ<O&vh1~H`xI>TDl;R+Ov]B[YR6|u<X^]#7ip' );
define( 'NONCE_SALT',       ' Bz7_5hE^N.kDUL=,Y~]jw*1GcgBYex/Fzbb)DYD4N:6<O#=n%[,_6Tut97LX&6@' );

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
