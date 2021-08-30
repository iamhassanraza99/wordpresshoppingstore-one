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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'W!m8%l=ZE4$YRt3;;0&Fr~eK=O#R(#y[/:SrM(}D(N$-RWw[W6t5Fl~Uo$B06jd>' );
define( 'SECURE_AUTH_KEY',  'z~h:V>FFsJKEI |EzQ+*V=)9QIZmH)p`f|5[QyFo@5-DYEs(@C~Fx#97L;%vwaR;' );
define( 'LOGGED_IN_KEY',    'Nz3g}|{*P$l7vY$ mTgUn$_2y4~z)4N }qr1bW6;88McE)ZN/ i4_qWt03XA8e67' );
define( 'NONCE_KEY',        '#Uml?DH+DQgL4skoKxb&>)tAx|#DDz*K)H0pgaq7N1AV9,Yea@i:q@-5?2BkdAJ!' );
define( 'AUTH_SALT',        '}T7{s3wY7>KT bNOR7.y{VYf`J+r4eBqrUfeQ:Zv_[X60#cHySe!!cuHB8EbP%[%' );
define( 'SECURE_AUTH_SALT', '.Nbcov8ACY(k<-Pip|g2(gS0jb5v<_T2V-^}A_@Ujh_&o+x|[Qt|KG=IkqZaZl:%' );
define( 'LOGGED_IN_SALT',   'w8e[)<g7OuhVe$M73j=!UEcCW+7;xKH0>P{^s{`OwFTaaA s09_vOZK5{ PqT4F2' );
define( 'NONCE_SALT',       '9u<&|kjG^zl7F~md[:>gytGo:Jwr6&f*Mu;=NWx>Ah#@Ahgvu;}J=&^DsvudFF#.' );

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
