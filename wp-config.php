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
define( 'DB_NAME', 'goldenage' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpresspass' );

/** Database hostname */
define( 'DB_HOST', 'mysql:3306' );

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
define( 'AUTH_KEY',         'j&Kb@9$mL2xQ#vPr7nW4zY5C6tD8eF1A9sG3hJ0kM4nO7pR2qS5tU8vW1xY4zB' );
define( 'SECURE_AUTH_KEY',  'mP9@sL3$xK#vM8wN4zQ7rT2yU5aV8bW1cX4dY7eZ0fA3gB6hC9iD2jE5kF8lG1m' );
define( 'LOGGED_IN_KEY',    'qR8#dF2$jK@wL4xM7yN0zP3aQ6rS9tU2vW5xY8zA1bC4dE7fG0hI3jK6lM9nO2p' );
define( 'NONCE_KEY',        'vW1$mP4#tQ7xR0yS3zT6uU9vV2wW5xX8yY1zZ4aA7bB0cC3dD6eE9fF2gG5hH8i' );
define( 'AUTH_SALT',        'bC5@nO8$jP2#kQ5lR8mS1nT4oU7pV0qW3rX6sY9tZ2uA5vB8wC1xD4yE7zF0gG3h' );
define( 'SECURE_AUTH_SALT', 'fG9#sH2$tI5@uJ8vK1wL4xM7yN0zO3aP6bQ9cR2dS5eT8fU1gV4hW7iX0jY3kZ6l' );
define( 'LOGGED_IN_SALT',   'jK6$pL9#qM2@rN5sO8tP1uQ4vR7wS0xT3yU6zV9aW2bX5cY8dZ1eA4fB7gC0hD3i' );
define( 'NONCE_SALT',       'oP3@vQ6$wR9#xS2yT5zU8aV1bW4cX7dY0eZ3fA6gB9hC2iD5jE8kF1lG4mH7nI0o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

define( 'WP_HOME', 'http://goldenage.local' );
define( 'WP_SITEURL', 'http://goldenage.local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
