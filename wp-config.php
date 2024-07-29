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
define('DB_NAME', 'curetechbd_techbd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'hgfh7mtednfgzo10inm3hdru9kmsfjbj75yfm5hq3h5ozyohmrtxsafdyuie6saa');
define('SECURE_AUTH_KEY',  'kulrbnhxz9rlkwb9mz1nwhuf3dioza3z3bkzzq44hgz3t8s9bs0it8e1nec6njqq');
define('LOGGED_IN_KEY',    'tqzn3akxu1nihknscouondhgfkhp9vyzy3uvqtlpr7n7clgzqibwimdj4mhf5ptr');
define('NONCE_KEY',        'lcjzni53rjxknd4i4tkdddxwz14xs5ivxow5xw9r3mhdgqypsyegkaudzi1dlarn');
define('AUTH_SALT',        'i27myeqpqomzqyysopv43z6nlvknfvecw9ydlgi34ypvksssfvs1grfxwwp9x9aw');
define('SECURE_AUTH_SALT', 'hyeb021yz6vodqmwsjyfkmif4sw0aqzxeo4qvwnsccfqoya4io8qk8v2py9f54da');
define('LOGGED_IN_SALT',   'wzhc3e5wu7qydsi6jucisk7gsr1itma6v92ojx1g67webe145xlxza7ophbqvdmo');
define('NONCE_SALT',       'hkqxfdazt5ywr79gdn76yroc76oruzdb46j0yjen3oqywz8gvzncmqtldmwsctjn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ctb_';

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
