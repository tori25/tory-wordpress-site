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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'pc9u5rk8cxFRIDYQAXLztQTEpzVy6CvGBytyoYmenXujS/U8m29M4Um1i+NZSzgn7f50oLUIIV4ioeZv8Ny9Fg==');
define('SECURE_AUTH_KEY',  'DlgRKH6VraglZHxHuI9jOsJ4dWaQ5tCtgd4UkqQ2dxSrhnrpExw+TCr504Gq1YvdenkT4MGktKuvIplA4E/Lbg==');
define('LOGGED_IN_KEY',    'NquDL8jorLthmeHoaR5gXFvM083k30iTo1gw40Sp8gckNpo4viZsC17JL56tHd+0QdZyAYM+Dpnss8BgO6b/Yg==');
define('NONCE_KEY',        '7GnyNOXIkdMo4r+kp+X3BSpKRbWyA3/zauladcIui1drc6QEZBld4u573wgxN2swyal1A2hYWSQ65/aKL7QMBQ==');
define('AUTH_SALT',        'QLTu483KbRp15R+y2G58pywBpWQbT+LRKiFYgHiswXkaIpizbaAsvp2p09g3vLmKTdQYerrSc3J3/YydnbQt5Q==');
define('SECURE_AUTH_SALT', 'OOlpZCQluuCKjWXOni6xdBWdAIUcNi42p3WoX1YwgNfDKh0+gzYQbqZGMqdUueI7V1Q/AfnCrZYSqppf6fugDw==');
define('LOGGED_IN_SALT',   'ab0cfx8ih8XBRR3g7XF4cEGy/4FBKkq7qtDtBqEVR6trjHzvgQP/WnZtRWuH+hMCz2b/0FqjPsaGtQmC3W6H4g==');
define('NONCE_SALT',       '69QfLFVa3lOvTpdNWJV7B2IKwUn2u0GWyCkI4wKbU1pymIV8SQFGX40gdqoj6BKRndP9h3vs0KY7UdK05/FoIw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
