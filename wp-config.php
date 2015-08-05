<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aprt2245265115');

/** MySQL database username */
define('DB_USER', 'aprt2245265115');

/** MySQL database password */
define('DB_PASSWORD', 'XSRuYw=S3iT|');

/** MySQL hostname */
define('DB_HOST', 'aprt2245265115.db.2245265.hostedresource.com:3311');

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
define('AUTH_KEY',         'hLs7HG1MQJ0=kn&sS_YQ');
define('SECURE_AUTH_KEY',  'D1m8AssbVa9C_/fE33KU');
define('LOGGED_IN_KEY',    'IbGqjzc(#I(8df5!w9H+');
define('NONCE_KEY',        'xz5qfP7qz%9f5j6dA!H2');
define('AUTH_SALT',        'H@/#Nwky*nhHH/9Kg8()');
define('SECURE_AUTH_SALT', 'bghPRm8mq+qBFcQLZ6+j');
define('LOGGED_IN_SALT',   '10)6q_4fL(g5=-aTX#OP');
define('NONCE_SALT',       'tL7#8f/7%$ c)6Ix1k6p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_v32w8tzg51_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');