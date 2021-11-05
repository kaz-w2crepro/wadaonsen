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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1sm6J1e6RppWLS6IFzJnZJvhFEDkVa8GOCYCpefULPa0h+WkcjSNxbLmMufTpMAo9f9Lr226/b0KQShwdyHGVA==');
define('SECURE_AUTH_KEY',  'N5NmMKEI+xRemf3NOMVtvmAAqZ4B+EANk4sI6wX8ZJmJoH2pa8ZBP9ePO5mnLBiOjjbAwzE1E605x4o6BvAa0Q==');
define('LOGGED_IN_KEY',    '7Ah5P5ARvEKy2KCxFcLexPOk7iou9k4yYvApOQovs1o8al9+MyxenB3Mo3+PdJTpcBnq/o/ElHxryEHtZmPjnw==');
define('NONCE_KEY',        'vvvxkxGjOHcEuzv7s3Ok+/1H2R+ITEvKDyBI2WAaj+3TGAJ9yIPllUb3MI/5pt7p7DqlLrYM/H7aBgHxjdEMrw==');
define('AUTH_SALT',        'JQHnSre1is82t4uVHmocIHVGNm8hUviv6Vr/+iL5IhZFoMW38t0X/NufrvTnu/xqh9ZUGxFe6k6y6DlhVP3sqA==');
define('SECURE_AUTH_SALT', '5rhi4dyP6kuW80RDcF9gO0+KqcRADmy5sghqFbxRGiq/ElxeYiq0NZ6kDwAC5mbu02WrEcrTXYkxb8dk3r+f8w==');
define('LOGGED_IN_SALT',   'j2UPeOjZP3hFVgoMuC5k7qbn/IqPmjWyFQY29YWVTnp4tUByrQRazEJKuI8rCGRBjdUNURhBbEm0fYyXrb6+vw==');
define('NONCE_SALT',       '6STYMuOIuvJhgoiGwBNhL2Y7p8NheRavKDuo9Qq3RAfe8lvI9G4uIPLbzkSB9tAGx1j0rZ2nVJR9/k9/3Okz7A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
