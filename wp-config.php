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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maquette' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'JOe4 K}ahqufxQv?+^fd_u<|g+,^7tRmT`8!ZFI:NE8~:Gr-N{)=f@vr1?CVtx&v' );
define( 'SECURE_AUTH_KEY',  'TYtTWq?>G_B_59B`]NXT|e_77O~=_%)$AO-6_Cr2W|QkDUH0fo:^bP7h8i=/%v&0' );
define( 'LOGGED_IN_KEY',    '2ezwg*G$ML4lFxB/1n/S]cmR^+:t)#o6w09IW/SW)8}o.G?E6pA?g*}1+CoXpw67' );
define( 'NONCE_KEY',        '*]|j<u]CAlXO,68coN7?L(X;u2tczTLf$f.UA^8 w_aj{ptLzQ?O@;wwLTS~#F%K' );
define( 'AUTH_SALT',        ')Y*7AVd>O $g48NMUiUl$WR*0+75RP>~V P[ow4 zZcqB]l{aZ5WGd2Xq`hQ[-P!' );
define( 'SECURE_AUTH_SALT', '9};!:UV/Ji/(^P3bxM(;Z0:Ir:#(1m+4!:64Dg-lyp7<@2hX88l7gBE38j=7}E%c' );
define( 'LOGGED_IN_SALT',   ')ivupjW`Ab7+#:KVRf@<RHGd~ R0$(2B8[N@rqjxZRr,Y-d>=.+w*/?y&=/wWq`a' );
define( 'NONCE_SALT',       'IW8_K^C#bS-ya50^jy]I!m}0nJ/PyXu+7(}OcZq!* itDLuHky+9GbU^Q7K%KDcr' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
