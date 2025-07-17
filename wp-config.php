<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fse' );

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
define( 'AUTH_KEY',         'PTn1[VkI&JkPKYEuCL!igx<IM =AaHMqOg{e v[e2NF$:}yYG>7#5J}Bom9b;T)A' );
define( 'SECURE_AUTH_KEY',  '^^Z0hMmfZ0rme2#!S(<G0*`g=CX_*c<~I|V 0s3b5H!-#4Jf&yXr#^:}=R 4=plJ' );
define( 'LOGGED_IN_KEY',    '7Ty.*8X?nh:UaCd]#e&o}BDV/Uf]~C@e/hi!W2#Ee~^{+>T>a7w`aVPVdn9~6:=<' );
define( 'NONCE_KEY',        'jTt-mHsi2ffK,8R*-s{LM|w_/g{ptJ%FUQv-,Sh{mXwUb]0mq]nI%8@e62M3)41o' );
define( 'AUTH_SALT',        'W<mF<lb[_tB|;d-#aSBH7;,FCwmJf:W@Ww@e8PF#w~/%f48BebtAhR},>$7(EW*J' );
define( 'SECURE_AUTH_SALT', 'uNib]vgfb*Dnd@+j-,Ih;Bfc|FIo!gsYIvy)s;#NJJwN&j}sd^-L<-s%SyG8f6Mj' );
define( 'LOGGED_IN_SALT',   '0.pz >=iAt-|Bn8W!hLSQ`XZ~^(;5bS;chhz6Po-{iGoc4G5UU r$B^e3%6%MTRo' );
define( 'NONCE_SALT',       'L/8ZyxFWMLO_K,3<`AdR%yzqm(#9CK4fbTZ5x6 U1e+g#xj<UH4LNZw}AJ-s1j]/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
