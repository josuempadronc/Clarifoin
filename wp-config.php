<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'Prueba' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'OEZIXWnr9HNKiRgVQIdtrT5yGtIWyXuZ0fLPQF7bbAAt4xRJWxQ6eZmi2G1VOBX6' );
define( 'SECURE_AUTH_KEY',  'HTIm3lZgxroiDNTyXO5hddPozJEhlQ11O7Tm6ryuNgkREwMOhKCj61ceCcvg74WM' );
define( 'LOGGED_IN_KEY',    '9wE3xGO9c1tubFfrKdcUVjkg87EvNTbRG0aFN4i8nWMfpMrdv4kUbWocMGkxMowG' );
define( 'NONCE_KEY',        'vvUzfKWBLeMuc795ENdOmFFqkb7Akx3gIf3WJNEuXUbulvlnQEJxr0dssiVe7ikk' );
define( 'AUTH_SALT',        '7hzAJkYwH5PFC5E5He7hO88zId2H3ByKEIlPp8mIxneJbBnnKdFv6TRcQVQsdfQn' );
define( 'SECURE_AUTH_SALT', 'NyePqQx6MS5DkHSX7TESHcliBFhz8h5pPFfgigEj0VQHhZ3JsjyTtJz2YRD4onvj' );
define( 'LOGGED_IN_SALT',   'LhZGHcGxmAPYZhdrydbNU0RIYlyDgLABJYZlIRGYLF9N8fAaC5hy4Qt1jGZLK1ET' );
define( 'NONCE_SALT',       'V1MYnqTffeXRgcWGIX2V1lUgmQwb9t806bXww6Snpzzjt7okoUT588v9875ddY8f' );

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
