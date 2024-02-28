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
define( 'DB_NAME', 'zadanie_praktyki_1' );

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
define( 'AUTH_KEY',         'FXq},MLx_Es!e9hxvP5d)!^]dkYK5tEPSyk9)[|l.CIp<~rbN9[c-i$a{W-~&1|v' );
define( 'SECURE_AUTH_KEY',  '/g<A>sk)x3A58P3c&V>Jc71:=9^{UVY3mi?@{?J&XrrJ8C`M@YRP3Q[jR_3S{<mG' );
define( 'LOGGED_IN_KEY',    '/V;(<+Mh%KM,kS?skZu0}VBFl*CzQm<+]/&Qmv3bbZe2WisMj`.VDQ`:edg!Xv-n' );
define( 'NONCE_KEY',        '_UgZ7Ax=|^Jh)D1nQqV!##)VHH8T+XnN*rPP )Orgc!>x[0t;hhF~@GM-nE3XZ+,' );
define( 'AUTH_SALT',        'q]?(J8rT)8?=?a7JmURcu=#4kM5iQ 5r*|Y(}i6f7PR93Tw!`LsGyGnAH3XMXL*j' );
define( 'SECURE_AUTH_SALT', 'r0[mr2dyjKWd`b6i[rWh1e|Fr61wW.xX5Nmj<!k!&h2nOm Cl4;[0B^=)VN.!|wO' );
define( 'LOGGED_IN_SALT',   '@J;fcn%pI-^(?o|UG2MQj< <|*GEcEzM[5.(]-|j-Brp[?_w08~dTVHQ)BvCph&R' );
define( 'NONCE_SALT',       '-*F(7:RVdie-N(2SsyLck95BaF2+u;I8;&Rm/Gn^tc{%5)C-~CZcn8sC+#@4h;&<' );

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
