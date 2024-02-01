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
define( 'DB_NAME', 'Rojan\'s Fashion' );

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
define( 'AUTH_KEY',         'N-m6qc5%7Fj<:C/u!LEsnn,E$Ish_] >PgX+twMIb[Ky7vFz>|~H_Lr~TPFfYl_8' );
define( 'SECURE_AUTH_KEY',  ';>c/8oH:!4-j3Y5BsvnOc[;(E(a]e](<a_{U&ztUS{+:_M>nWAR;.#3sO:dKhq y' );
define( 'LOGGED_IN_KEY',    'H2ISV.48-No~{xfU_ v#E-e$oInRtP<-N^3:W4oM+yQ&(V{nx[1+t}IBQ/:G[]d~' );
define( 'NONCE_KEY',        'RBaLRz4Ht6o/C[-fP0pTIh?e {9VYoD[a*:[H[uik,O!zL@=55;nk_p&s23<V Ts' );
define( 'AUTH_SALT',        'xE%i0wP^ln&FQwjC26zk7In5AG0K@g&n70#=7?,Mbx](<z>@ cD> M>Q[fti8d}[' );
define( 'SECURE_AUTH_SALT', 'TwxTK#L:0KQ6.kL=b=3BA{Os8`gqy`T.EklN{~|x!g<W?j9QE<)H8<!eC4Tk:FuQ' );
define( 'LOGGED_IN_SALT',   'cD?xH/JNvZOscg{+]BAXiseg5(VGVUSD:~4wCVZ;Q(7r88)A]$?m_|P&xW+K/-?G' );
define( 'NONCE_SALT',       '}.2@ID8#] 0xBY?Gg:Junx>5{KUP`y(@>4<S!mtg`gkt&+9KUd6S4 nll-B=jq?;' );

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
