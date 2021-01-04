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
define( 'DB_NAME', 'develop_wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hirajima0119' );

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
define( 'AUTH_KEY',         '_+yd?@y}!U33L*i82ZnI+aFRWP8yphk8s8OTBD.(X7H6Go82P l2DSsR<%+&cQEH' );
define( 'SECURE_AUTH_KEY',  '2_-PurQs]qY41i?~d});rzk*n#LQzmfK6X?74D5za{ri(WeefaO(,p3rdVX_26LK' );
define( 'LOGGED_IN_KEY',    'YLP{SA:%)hlL+O!v?D%Z}F([oy:]2C?Ru)S^La{&.>eb[v;S;9TOut#]JxmYEAU9' );
define( 'NONCE_KEY',        'UX4Uae$%IgE8njXS22v6WOD=ZDyE9rtshkY_@>Bu4K7,3$xG|yLx&2rQyR-v03RG' );
define( 'AUTH_SALT',        'Qz2K8Tkb]kPIP~,uBIug{]W[l@YHrjfFUuMR[/2MqUG:Add!?B[tf5nJ&[rzj6O<' );
define( 'SECURE_AUTH_SALT', '1Z(oFbm$/H.nLd#o<9!@!h,6[[9=Vn`%pV #Yf~#7yMT>)lG6M|i<Z47)ouo$KXG' );
define( 'LOGGED_IN_SALT',   '&q9w/c_Nn8C-z%y}.FkkF``8DL/;Rytwh+#=W`UFP zU|9b7Gls_B)u*m!x77MTM' );
define( 'NONCE_SALT',       'au[:3!x(PH_|T&0^f2RyI<hACbj5fk42HqZ*g/{F=%+RU.p6~?2_fWF{6rY{i#1z' );

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
