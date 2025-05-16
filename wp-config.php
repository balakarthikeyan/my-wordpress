<?php
// Load Composer’s autoloader
require __DIR__ . '/vendor/autoload.php';

/**
 * initialise configurations from the environment file
 */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * Database name
 */
define('DB_NAME', $_ENV['DB_NAME']);

/**
 * Database user
 */
define('DB_USER', $_ENV['DB_USER']);

/**
 * Database user password
 */
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

/**
 * Database host
 */
define('DB_HOST', $_ENV['DB_HOST']);

/**
 * WordPress DB Charset (is setup this way when the tables are made)
 */
define( 'DB_CHARSET', 'utf8' );

/**
 * WordPress DB Collation (is setup this way when the tables are made)
 */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**
 * WordPress home URL (for the front-of-site)
 */
define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/wordpress');

/**
 * WordPress site URL (which is for the admin)
 */
define('WP_SITEURL', WP_HOME . '/wordpress');

/**
 * WordPress content directory
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wordpress/wp-content');

/**
 * WordPress content directory url
 */
define( 'WP_CONTENT_URL', WP_HOME . '/wordpress/wp-content');

/**
 * WordPress plugins directory
 */
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/wordpress/wp-content/plugins');

/**
 * WordPress plugins directory
 */
define('WP_PLUGIN_URL', WP_HOME . '/wordpress/wp-content/plugins');

/**
 * Controls the error reporting. When true, it sets the error reporting level to E_ALL. 
 */
define( 'WP_DEBUG', false );

/**
 * If error logging is enabled, this determines whether the error
 * is logged or not in the debug.log file inside /wp-content.
 */
define( 'WP_DEBUG_LOG', false );

/**
 * If error logging is enabled, this determines whether the error is 
 * shown on the site (in-browser)
 */
define( 'WP_DEBUG_DISPLAY', false );

/**
 * This disables live edits of theme and plugin files on the WordPress
 * administration area. It also prevents users from adding, 
 * updating and deleting themes and plugins.
 */
define( 'DISALLOW_FILE_MODS', true );

/**
 * Prevents WordPress core updates, as this is controlled through Composer.
 */
define( 'WP_AUTO_UPDATE_CORE', false );

/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         $_ENV['AUTH_KEY']);
define('SECURE_AUTH_KEY',  $_ENV['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    $_ENV['LOGGED_IN_KEY']);
define('NONCE_KEY',        $_ENV['NONCE_KEY']);
define('AUTH_SALT',        $_ENV['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   $_ENV['LOGGED_IN_SALT']);
define('NONCE_SALT',       $_ENV['NONCE_SALT']);

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

// Stop Autosave
define( 'AUTOSAVE_INTERVAL', false );
// Disable Post Revisions
define( 'WP_POST_REVISIONS', false );

/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wordpress/');

// /* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');