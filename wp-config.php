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
define('DB_NAME', '[% db_name %]');

/** MySQL database username */
define('DB_USER', '[% db_name %]');

/** MySQL database password */
define('DB_PASSWORD', '[% db_password %]');

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
define('AUTH_KEY',         'OS*|n)d8K;+Ki5if5#7}5Z!]~I8Z;s:3do*4&C^<acKIQ<2lapnaKv12/)=<5|Rl');
define('SECURE_AUTH_KEY',  'lEo=Ka7+$iJ /l#{)p~mwpt7~iS&$}HhzSUpBIBNIQ3#i-R6S-l;rL+G>+{ze_.N');
define('LOGGED_IN_KEY',    'dgtTq`Zr%&e}+bj=W i48*fGW@=N,k)?[=024Mu6zJvFV}&^^]uQ|o)sBFD,%<$/');
define('NONCE_KEY',        'k>yHDW2y5f^Zv){nZ>Rl1bkplgJ&(swip9j&*3s5e9XOmw#*f)>gzBt)<k$DqvRu');
define('AUTH_SALT',        '3YeQU<0r2>4e]0SsBc-FHWlE_z>7 +wxdWAyZLcs-D9KxJyU7QpPF-I&{qWs.;:$');
define('SECURE_AUTH_SALT', '}CtO%7p5.ZAj]8|MI)4:W-+l1^<[9P|8.,Yf> ]y=4SwJ$D0fspa<*g54Sx?Q7iG');
define('LOGGED_IN_SALT',   ']4ND5BKsIj<aSWH~57aG)VyM1$Q [hSsa_{K8G:mE`.*Qt(d[DN8Y^M^Wo42he[]');
define('NONCE_SALT',       'e5={LalZf%.7m*k*G0l<Gj:z?grQOGSw(~np{``gMI7>,YuyDv{:W0,>.;Rm/gHd');

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


