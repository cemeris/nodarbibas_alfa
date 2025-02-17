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
define( 'DB_NAME', '17_02_wordpress' );

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
define( 'AUTH_KEY',         'm>*TXl(/ev~Xl:4p W2C^y*~|#A<,:dY`s&F{s$mhLFsENCP=`4i5bTGemnk 1sF' );
define( 'SECURE_AUTH_KEY',  '_2k,lS)#QS$B!XNqMGEw><uB-w}|4,,Ap9i^p^P*/.v9]*rb{!.Z[jN7Qe(fL*BY' );
define( 'LOGGED_IN_KEY',    '=Qe,!*[/3+~Z_t&F7atT>qn08qR:PhYMY*pX`:%>$n ZbDC*HCOoK4-hqR7;7<ZY' );
define( 'NONCE_KEY',        'MV,)(=h?/Co[o:!wq%TJ32H^AOh|go%O5bPgrhC9MXQ+N,zNsC3^22t#>iWWn^mH' );
define( 'AUTH_SALT',        'ja]FbNC;XmtiBn3RCyM)+j*!19c5w|p[wF`O</LJcO%TE{CC@%KatuPa0}RZI=EX' );
define( 'SECURE_AUTH_SALT', 'h#5Y6qw2;D~kMXmzM+Xb^Ipyn7l!x,P5B7~1J+i>Xd]$z:.EA5jR^x[*W,9Oua(.' );
define( 'LOGGED_IN_SALT',   '9^x,xus^*rWEzVoF]8dQB>wp~fIin+)aB(H>bNThmp(Pb?QaX6 q9&OesJ2&3_#;' );
define( 'NONCE_SALT',       'w8_jV 8W$jtk&0VtY#DI^h/=IO5sA8n,`~=LMcUR3`eASm<ZsfX*-,,1STDwQDNB' );

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
