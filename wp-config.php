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
define( 'DB_NAME', 'pkdwebsite' );

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
define( 'AUTH_KEY',         '>]q}k76l?4:?$skH29-oI#_4D{$QD8X*s?emCK<SKhibcWOwr.y!+)3nt,(pz]p*' );
define( 'SECURE_AUTH_KEY',  ']|hPnBnIAwP33^d{;ti:<:/_2G`&M4@T(xjez|viv -AT]<UBO?HNNJc5s%Q)T, ' );
define( 'LOGGED_IN_KEY',    'g{0VuX1Wq.]}qLES 6:f0P$Y!}f9+D~:*F@+r]S%K`>TUhsYMYM?EizurB!1q?~|' );
define( 'NONCE_KEY',        '[+VO2}>PA~U*KGPO%[Kq9(U:DTqTpc4b+|_k-P7Q>UL#HO+hy.pk2/pg{aMiZ21S' );
define( 'AUTH_SALT',        'R;B,#UfvVF2D$nJ;V!<S*>)N=vU$!?ACj+y(C%_&/OVV}4,[ZH|5LdMs&6jjZy@J' );
define( 'SECURE_AUTH_SALT', 'Lfrj$D0Nu/~*]+.`I:&s{CmzG B6PEID{uIx!Zh,vWCUBbC3^4u3Tj1xM:lZsZP~' );
define( 'LOGGED_IN_SALT',   '?||@n(bb=}^PZ`so%`f9;EeV*LRQ$JF*c?u{<}]d$7,oO@5G~{ZsP5]=ii>+!bJp' );
define( 'NONCE_SALT',       'DI6O6rMsJ!}@IdcIAUqA+;f|h@r,bNsZ,lIb8leou`O/2a!LI4FF>wr4RIBo|+o5' );

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
