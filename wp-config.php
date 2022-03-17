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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bootstrapblog' );

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
define( 'AUTH_KEY',         '[D_eJJZCwY}}TVDCI0^7MB9T!~D(~<)u^!^%33El%^.cTe;6zj]?#C6s7$bBnYv.' );
define( 'SECURE_AUTH_KEY',  'W!V:@q@u.d5A8e*pZ=urJs DS-()+d*.ODPEc$K;ogCH(5mM$nzn+8z<0]EWLpvF' );
define( 'LOGGED_IN_KEY',    '7#JrpX/liOCvH7gO)]1DkieTsoaM?wCL%T<@# LTCG>mYeHLr@DS7RU0m@2 zqCV' );
define( 'NONCE_KEY',        'K@g3{*,mzlrK[BTrmWZqxzkzlQX*{A$3V8U1([`M GW,A1-.$oXr[2e.[@#&86u,' );
define( 'AUTH_SALT',        'H[FD:(N!B$cd$|Tr{mkCunU+fa,*2FST9A?1J/nalH_HWG3xbOy<<~uA^%#e|4lZ' );
define( 'SECURE_AUTH_SALT', 'k(`ttxeU)-6X,7O~Y~w/J`VNx}b*nKz(J9Biu i]=17uCk[/P<v0ma>|wavN7Z&j' );
define( 'LOGGED_IN_SALT',   'XW/t@O!}j{q8:~bD;ssEjD$S~Gz5r->kYg `;}|R[wt[W=i_Iv5:77%`VdR3T W8' );
define( 'NONCE_SALT',       ':mkI3NsHOVe$-Z|v1f-nm(HXw2JWdG5kM7^qeA1)eprGhEG`V9iSk xcm`H<qC*v' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
