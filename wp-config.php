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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'CAD' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'VjK2PHhjFurC8yldLbZyxAKKZdSBe7XB8AUv2r5qZ3ikw5oBZc0XtfJUIhbzigAp' );
define( 'SECURE_AUTH_KEY',  'jAA46YhbtK02216EaReq6H7gevcQOFWfrSTRRxuZ3BHgsEwLlT5NN6LcvUIZoXAG' );
define( 'LOGGED_IN_KEY',    '5w78u6x6BdL24SRVX3gdWoMzFG7ZSXD5x3DqH2dKbxvKk8k637S5kvoJR9Tn2KcY' );
define( 'NONCE_KEY',        'EkVPUXAWrqp5fEt6vbx05IvBga6eGdYgzMmoyPXUkGIo6MKO25rYi8BuYbYOdVS9' );
define( 'AUTH_SALT',        'IzRAixhX6sW3YIABNq7Co94tmHNaixlkMN97mHCSvbJA8Tjk6NJ1Wa8yLJm8HWlH' );
define( 'SECURE_AUTH_SALT', 'lhRSCt8upj8NeIojD1kA2g40N4x3zZ5FE77CVyUSNyNmYfGQ2YsMbm6lPTHUv79H' );
define( 'LOGGED_IN_SALT',   'B4MjaDQv6izpe6nx4IV8UTYyfLTYp1NhzzCWK9Tq5EBgPqyUHXoRtbMSXSCe6Bi0' );
define( 'NONCE_SALT',       'Gozz6CuYalfvg0rZcZTgBfcc23zX3iSLdErGQ9T8o2X3wvb7L3bitrnDs6E7uTvV' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
