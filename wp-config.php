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
define( 'DB_NAME', 'store_db' );

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
define( 'AUTH_KEY',         '3q(btvr_3I oMMUH90ApzW_~K6r?bGbLbaA:~4kR,a!o{GtI&Vp$ZoIEqA-&mg_J' );
define( 'SECURE_AUTH_KEY',  '/40Do9YO38Qw@|2&O)_LEK?~ps:$@1~imE22_{ylba[0,uT+m9 #kb6cw`(*2ycW' );
define( 'LOGGED_IN_KEY',    '}uOys av7,^./M}Kob+ f{}t=ERGYqn1H0uAecwv~4yg|ga}}}|t@S^a?.6FQ*)y' );
define( 'NONCE_KEY',        '3KC:|_@]aoyMZ3lcKbPquzG~Xj&ga2kxhDg-z<)H)URGj!)7u|Km|:{v#Q1SI&=V' );
define( 'AUTH_SALT',        'Qd_ l^MDn*M:)mU.lw/-sgpyBKGcRr~m|A{,%J/B,2/C32(naO?:c9RbT8/B}ku?' );
define( 'SECURE_AUTH_SALT', 'GlYC]>na}xV}}q^<17vB+Or5R;&iyGi+C(zB|FFLU>U?[Pxge@+fN X~JhL$GC*&' );
define( 'LOGGED_IN_SALT',   'HOZ>}NJ4T$1nR]oBR[FWP{*2C@K,.s4R14W_(jGop]~(Uc$EQFmDwwW^JH++_>6C' );
define( 'NONCE_SALT',       'Z/x:7-JPw|Dm&ioL/h8aMUYxNpj}od[?6,i,]Tt?Lxn0}[K!A@?n?NR_tqp3`;O)' );

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
