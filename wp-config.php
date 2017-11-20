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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'fr8lWn*o 43#;F2;P9usKQ*3(3T^=tIJLn$DW_ias2A}L@leBa&,N^l/rPF=sTGE');
define('SECURE_AUTH_KEY',  '0oUJS9w?y6wywyVU_)zqQWIsn7:R&5)?#sYC?Rt0^]{5(!O}$vcq0$7]Gh<lQ}rc');
define('LOGGED_IN_KEY',    'eTa((z}td]2P,D&YpQ#kRb?Do/A%Llg@D<Pzajs/z-]8|>E`VNc^0z&PpWt$ku`=');
define('NONCE_KEY',        'XzpXr5$x)MOZMpf&W@LVt}x.~yJD/z~5?QY0lQW4}_?g_ M390Vm=e-<J&ja*?vX');
define('AUTH_SALT',        'o>p.$?IS;HXWa8-#z :3C0v(|8hrd BP!^8Zd)?wxJx5.Y0vPEk#N,FI{QLX@<ru');
define('SECURE_AUTH_SALT', '>R,b8}eiI(.uE|NN]5e<m~uLQ%9*^E6l8(oBC]u6W#-MBIQ0ow[}_dl,-%<{2w0,');
define('LOGGED_IN_SALT',   '>}{=mv5K2eykb%Bx4tORFEE! H3nIOElo=tC$[;&A4/`x: {4/w-4mWy)^;dMC5)');
define('NONCE_SALT',       'lSWb2kYR#4b0BGlf-O~/UI@3bTPB<PJaGG:d4Lxzj Bw{=6)NIOw&H/Ii,IB1Lh%');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
