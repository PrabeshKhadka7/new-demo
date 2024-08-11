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
define( 'DB_NAME', 'bloodmanagementsystem' );

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
define( 'AUTH_KEY',         'J?0}Bt;m3`= 6GGjCeN47]I9q,WKeASr7QPB-Sv,%M)PsFi{=/o/;X`B(uFT8;>}' );
define( 'SECURE_AUTH_KEY',  'g(s5V+_VY.U+Se:aKQNS8}WNe;3kEM]N]i[11/cV2J@+V4_!#@5p0(U(66v23FJ7' );
define( 'LOGGED_IN_KEY',    '<I*W_&XNph[`;|rlE+tA7F-c:vl4UmYK0IXYu0AaF#IV&=WWu&ob_=RTKpGg!BhY' );
define( 'NONCE_KEY',        'f(>]bZ@-J$<`{/o@+eh1lfuY!%|X)NY/rpUb3PBUnEyp_R~lZ]8k.4(Eu=DZ8GOt' );
define( 'AUTH_SALT',        '=hEA!/T93>FA[iWO#$9/UP46!]?eFU%NwZ9A5,7pJoO*>!B$q~,h[$yK@Zf_,|!a' );
define( 'SECURE_AUTH_SALT', 'x59{6sVq4U*F$@5IN)]gpy|_zdEJ}*(IGb!qUCzFZ-gU/KJi:JE$sz0Z6WA3~4<3' );
define( 'LOGGED_IN_SALT',   '+Vhl3|IV%zg?GJCfQvP}.-7fP/^}8Lk<X#O4KVZ`3<[z(aeiC+%DH1D;lRhswVr&' );
define( 'NONCE_SALT',       'N~?OPQstT j![>>#H0dVI_xLN$=T*Iz>iZ]<Np!}:Dcp,q9{{T~Of5@8%.s_3%cG' );

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
