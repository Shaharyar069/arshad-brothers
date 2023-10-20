<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'WP_CACHE', true );

define( 'ITSEC_ENCRYPTION_KEY', 'bjF4ei5TPiQ6cEQ3R0xiQDg1Xzw2WW1lY2tSW1IoWShSa0xXMj41aG0teU5HPilCMmN2S2B3XSlZb1kqNmgqUg==' );


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
define( 'DB_NAME', 'rcmgiga_arshadbrodb' );

/** Database username */
define( 'DB_USER', 'rcmgiga_arshadbrodb' );

/** Database password */
define( 'DB_PASSWORD', 'arshadbrodb' );

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
define( 'AUTH_KEY',         'dnpNjPLsP_&$X#aM!%8$ *C(Uq?V9}?GGs8g>uNm9my?2( >w_r(okDml,U=tEp1' );
define( 'SECURE_AUTH_KEY',  'VQ,QVmy=:8Dh.=?SH3WT6&|J:RoZ72p>R2qw[WN<OT>Z(Of)XV$]P!3>Hx>;A|8S' );
define( 'LOGGED_IN_KEY',    'b_8OP87Oo+J^<f@d;K[c7k3}8|rK;fC U>:2Y{vOcj|TW3C7`DKi>drGEm<MJ9(n' );
define( 'NONCE_KEY',        '<6 %Vc9F;bB^6+k8Xj*^{vvVj82Sv1{2L`l:IR1UZs2h0vKC9TqMxK!-^-zR0ft?' );
define( 'AUTH_SALT',        '#rQjx!~4lpK7SU#NX!`Ps2]2`GDZ14@!0dp:Xz1O_k d+QJ`.$3[2b~GR}D++. X' );
define( 'SECURE_AUTH_SALT', 'Lr}8D@&P_?q`eTEwa/Ek$wt_M-o88Mu8efNa~^QZ!bTH(n_(QZ)fNX}C (_))6{l' );
define( 'LOGGED_IN_SALT',   'biK/vm) 3eH<vX1ZT[R|<,h!8B?} o(}~{$S&eO`>&F|k?GCTfMGOnjvGmpT,=0Q' );
define( 'NONCE_SALT',       '-J3+rSMQ|ldu?;1t#POsxw$n},#9,`PH2h]tqu2/jI)]/0FK(!f%=Hx!w`g,.KN9' );

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
