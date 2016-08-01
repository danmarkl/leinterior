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
define('DB_NAME', 'leinterior');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'Jf[@jf!5Z+E{32h>0x;rnNNSYTr*v%i12jp<YIt3E##ZAMC.r7+gW#e!MDQcZg>Y');
define('SECURE_AUTH_KEY',  'z]C;quTicVsB`)8CC[GE27Bcn5w22$PnZ!DEsJ17</gpZn2BS+[ad2chL6jsRswp');
define('LOGGED_IN_KEY',    'JT^lK;Ja4aLM+>)@uO4SGX>=oa` odf@1D>H?WSfb9k@Of78wW |*Sb/5[N<~zhO');
define('NONCE_KEY',        'lk-|i2!^i~*:hJMb+Vf=J{T`{:m&W6*j{WzwQ6-|.aGq=jZtP^r!.ha6/sQ9-ipr');
define('AUTH_SALT',        'g@i.$fa;%C#^ED$RwFkc7G|~kya!@ch6$yRumMq$Yl%BhI8+4f*up]lA^ 4PF3id');
define('SECURE_AUTH_SALT', '?!pXQ~i!E @MX?Aby?:n2u{jMJ _NlWx>nRJBL#0[/hkP-C}[LN*?#_e|Eex4BpW');
define('LOGGED_IN_SALT',   'KBCGq?[mUQyT-a.zhUU|E.C?-JYL=/&1<~Rac)dvuK>4?Y_%+w@9M;8cuiY&pn/t');
define('NONCE_SALT',       ')l=Mn2Yi(Bnfw3L`vz^q0S[4m^R]k+MEHOr#E^%Xj0IA1yBH+BlT&t+9*a *CM{M');

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

if(is_admin()) {
	add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
	define( 'FS_CHMOD_DIR', 0751 );
}