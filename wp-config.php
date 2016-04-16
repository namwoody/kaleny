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
define('DB_NAME', 'kale');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '{M8Z~&+M J*F-.]>ZA&jhv=o2fq?Mh2{ @=.WgDk+kP|}s-skO(yROs18zhN<UO{');
define('SECURE_AUTH_KEY',  'E^m6&zT5Q&^! ]o#=)!4&kQAS!ruxy;uF$:7Zwc+[y2nus_nU]SViN[xE9%qs{7{');
define('LOGGED_IN_KEY',    'lO7EU%OD6rV{)v 8l5Cx<&(,NC:Sc>xjYhU!bsd1j?[*:~Rzizx=!U?[ M<Ch8Qh');
define('NONCE_KEY',        '*|2&#)5;gQby9 Dd``F_+XhJogc}&q-(*.D*38R0BnFVbaB[Hgf:HI(fl&cuWj1d');
define('AUTH_SALT',        '@_-T{`RSG*4]4)A8s4GKYV~rZT,o@y^p?18ZOs:}lwf&)?Yw;:<0J4|m $%*QhBu');
define('SECURE_AUTH_SALT', 'R.:N%QJa0o1ctC7? @3Y,of&{&KhHUQ:d-T:$+ &nF-E~P4o],D^1/m.3ah[VQvQ');
define('LOGGED_IN_SALT',   'f0&QQ-rUoDRNxWI<;P13z>-A[1t[nb% RFbzx_G65O1-w(SF2]V@5~Vug05~<b1}');
define('NONCE_SALT',       'bi~RxZui(~{iBx<1B?k7_qF5!E*{uMD|9R`~wjnzoP12pN[FA7^[Sz2)uYseB-h<');

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
