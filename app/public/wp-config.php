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
define('AUTH_KEY',         '7YuoLgMFPAAx27ieyYJ2eOIM8qjOm6otgImIPQfeS3Xy+PwIxGvt3osrRnlYruV1zSelTTWI5eMkvEORubCvtw==');
define('SECURE_AUTH_KEY',  'iTiQioPrD3hUfDqQyc8Ku6a8zUL3vzpLLj9qwn5bnwpez/bD9z/mM6fNZf5vIV1zMm3dfLP9stRHN8VSKNTqHw==');
define('LOGGED_IN_KEY',    'IqdFADHXpoD6kYVptR11+Zp+1UMNqFSGyE9+okTbqYgA8EmEuyr7hK8fGqlyumQGRQn1E3iX1Qayap3iDRH+OA==');
define('NONCE_KEY',        'qh5g82tZOR/3swcy9cA9ealw1M+8eQm6zi5zHd2Q+BWeumWDufEjpbwoqy8SSLb6bWUkJTFsqTFxxE2vqGrpHQ==');
define('AUTH_SALT',        '4cNbuDGz3jALoj4OT/b4gYGchDEzsj5dLNwXNCbzb2qWuo8nyLEM5JNJLow5ZtVaFNHWRUVfjB8DYu6yAQaSKA==');
define('SECURE_AUTH_SALT', 'J9Y+JjB/oICwGVSEn6mMP61YRVkckzg2pCNiIqD49JSwDnxgd6jWzjnnmcOiOYHtLsVOUmpmlA8uDW+u25crKg==');
define('LOGGED_IN_SALT',   'xZvltNmBnMkiMXGtr/N1joI0sTbIhlAPUhm++rH9SaLZhLGJo2yOEFrpFlwWD57kyU9dCdHgjemGwSOHy54DUg==');
define('NONCE_SALT',       'U7ZSUBRqBrqhQ5ASsSjvQGa9ng/wb4z0n5rCPToCrh0G+xjAGgE1Mc8srQsouOXN4TmrvrJPgxfsYk4brjZWeQ==');

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
