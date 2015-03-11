<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '6947698a12');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '556bab12d5235d26d4a0cf941777b21aa9c36d8a850a1fb3c06c21c4e9a28e7e');
define('SECURE_AUTH_KEY',  '0e459d882a33a3024130fae05d4ea273d22ecaae3e399084ee827e7106b60d6f');
define('LOGGED_IN_KEY',    'c972336d3b264225cfd35710a8a0a03096d35b3e8ac635d5a3874a43f2f03e1f');
define('NONCE_KEY',        '7ec98d2db85a9a72845ee3b7d9c21f1e88ca1b314f2b813377d465034ab99975');
define('AUTH_SALT',        '6801ea1d38b96313cedb9992e1840f727b3438273d2145d9b704c148979077f3');
define('SECURE_AUTH_SALT', '117364d52c0150d2ac768dc102b5b617809f48f971286505881fc42c7b6fc80d');
define('LOGGED_IN_SALT',   'fa5014db5beb94ef8c9ce7869acda786873e7b1231039ed95a1e686d4fb46bc0');
define('NONCE_SALT',       '871160ccdc0a983c0d437e80cdb87f6cbfaa8750eaf7269c2c84efc4fbeb1309');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:/xampp/apps/wordpress/tmp');

