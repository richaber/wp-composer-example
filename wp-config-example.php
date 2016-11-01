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

/** 
 * The URL to this site.
 *
 * The `WP_HOME` constant (which corresponds to the `Site Address (URL)` setting, found
 * under Settings → General Settings, and is stored in the database options table as `home`)
 * defines where the WordPress main index.php file resides (in our case, the web root).
 *
 * @link http://goo.gl/p0sP0U
 *
 * @var string WP_HOME
 */
define( 'WP_HOME', 'http:///wp-composer-example.dev' );

/** 
 * The URL to WordPress Core.
 *
 * The `WP_SITEURL` constant (which corresponds to the `WordPress Address (URL)` setting,
 * found under Settings → General Settings, and is stored in the database options table as
 * `siteurl`) defines where the WordPress core files reside (in our case, the wp directory).
 *
 * @link http://goo.gl/rYTRuQ
 *
 * @var string WP_SITEURL
 */
define( 'WP_SITEURL', WP_HOME . '/wp' );

/** 
 * The wp-content directory.
 *
 * `WP_CONTENT_DIR` defines the filesystem path on the server itself to the wp-content
 * directory.
 *
 * @link http://goo.gl/E2YVfB
 *
 * @var string
 */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );

/** 
 * The wp-content URL.
 *
 * `WP_CONTENT_URL` defines the browser accessible URL to the wp-content directory.  
 *
 * @link http://goo.gl/E2YVfB
 *
 * @var string WP_CONTENT_URL
 */
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

if ( WP_DEBUG ) {
    define( 'WP_DEBUG_DISPLAY', false );
    define( 'WP_DEBUG_LOG', true );
    define( 'SAVEQUERIES', true );
    define( 'SCRIPT_DEBUG', true );
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
