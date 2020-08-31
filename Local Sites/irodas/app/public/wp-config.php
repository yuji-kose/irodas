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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define('AUTH_KEY',         '6a0K8j3yW7tzhCsZltSKL2hIgb6y/bWjY03V7httgzEVa4NBLgEDEMFbcPdS4Ql/mvy+zeGfai6R2ySjvh1m4A==');
define('SECURE_AUTH_KEY',  'nZ7wNtvyxFRfwteEKCYO4NP5XmZ2e0xRjR9YwIyHEtPehFyZbuWbVaZZYQfLmrddubzhdwGhJFd+xcJMugs18g==');
define('LOGGED_IN_KEY',    'CLjSVgkvZl6WOJ8XdAz8Z2TgXA2jIUFPg1b7KNb3U0q8NNsE/pMddwL8/bP5paHWYJ7j+KxLDsBeEnl2NaEvhA==');
define('NONCE_KEY',        'GXxhXkzc3CVyuQe20iKGCOzZ/bBgxqbQybLE4pjXYTTbku4tKbUk0LfMGhTJmCa3Svk4bPEIgMqxsblObk4y2w==');
define('AUTH_SALT',        '62W+K9OO6B04/Z3ogfdr2lyF7C7GStKlBbGwpew/9ACIVL7FaLnYWi2Nw36DtbYCYaSl9IBDc9hcp78+8uiiWA==');
define('SECURE_AUTH_SALT', 'hCSykS+umefR3TX7vIwtcWP4zIFu2IY8pPM9T4vuOWK3t97uaN6uAa12CwCuk7hWWc1VkUQmG12OT9c0rnlZRQ==');
define('LOGGED_IN_SALT',   'IsYL5d8PaVmDKK9hRFpugwpVQHby4Nfxec+ZTGK2yuikBrzpSJLKTYsT0fhnnYnSjNvBdHctU7DHqJIN5WbIpA==');
define('NONCE_SALT',       'ycUT5xNSFMlUfO4CMWimGdjSD87mmwg+F7+zs2bAjjtg4Lx8fw4tGbcpCmUbXumTueOaVU3cMHoXCoK69AhSEw==');

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
