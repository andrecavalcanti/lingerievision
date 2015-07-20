<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'lin1519409063214');

/** MySQL database username */
define('DB_USER', 'lin1519409063214');

/** MySQL database password */
define('DB_PASSWORD', 'n5T@b8uDN6');

/** MySQL hostname */
define('DB_HOST', 'lin1519409063214.db.10592526.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '96M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M$APm5JyCh5x9(HqA_6y');
define('SECURE_AUTH_KEY',  '9adO$b9IXyfQWazXEFZS');
define('LOGGED_IN_KEY',    'E=Mf@)2yTLmC=J%A-O#D');
define('NONCE_KEY',        '$jHkpS*YPmtkbD_8xW&m');
define('AUTH_SALT',        'VJBrY+p L=A5w*hp$%-6');
define('SECURE_AUTH_SALT', 'Ltv%WgcEG9E#6_a=n+Ct');
define('LOGGED_IN_SALT',   'Lj0NZYfJbgJDxQ7R6qrE');
define('NONCE_SALT',       'C4(Rk3L(8xPmMK2t2)vZ');

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
