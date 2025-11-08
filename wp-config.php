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
define( 'DB_NAME', 'ncmf-ro9' );

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
define( 'AUTH_KEY',         'QwHQ-;=Jw~D@=i3h1k<#f]KMoaPe&Ub3&[a}Tx2@2]CRIZ5d.JGFDIjKCH,%=^q^' );
define( 'SECURE_AUTH_KEY',  ',cT_M|CNg?*`rgzhp8;B|G-RW>9JZ>-.>O2I6vKS.mM}%jE(J_uwNaU@4nxOcL#m' );
define( 'LOGGED_IN_KEY',    '@IR97vQ,-P5ZhB3Q-)@5DO*vx?%c<uUj(N7 p:/%dD,2s+kD^9<-g OAF`37=NXN' );
define( 'NONCE_KEY',        '2$0oznvMjEz1#tdk?0E6hg~#.[931}Im#=#Hwh7Cg}_/l6o[PdK%O@6]u$!RI6j&' );
define( 'AUTH_SALT',        '.#0,WN=V:&wx`%)b4)r0l=5/U=;$rtUO!)f!T^2,9^.uVEHbMN!L?zL|Jl,w#~}V' );
define( 'SECURE_AUTH_SALT', ']^isC*FEO={0$MJ8~f$wbG%Py:ewnpAJJGP9%zoxi)$DOtV^3,ET#!f mr>sS yd' );
define( 'LOGGED_IN_SALT',   'ziyi3k0x6V[9xfgS-t3&:mA4I5Ocf:RpOtUf:WCDJ6[4v8rq[tK 4_Ku_]*UYmfl' );
define( 'NONCE_SALT',       'WRQ25nM$z)QnE^WDE~}gnvf;;rXi_EJc@T$~CuP]O)4L{Xf2`>2Jqj|R+.!Ki~:W' );

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
