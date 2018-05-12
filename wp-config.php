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
define('DB_NAME', 'camgao');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'E~U1?=g]3(j[@=0u@sMSTp5USvuH@/^mW2Cot{+,[x_>b`RvjLXne.88h?BhwQQ&');
define('SECURE_AUTH_KEY',  'uH1b[KzUp,=|Jj^?P/doW(fz1tDZ&p=wGyGCL &JboYm?/Hsu&zktcEP?, vFYP3');
define('LOGGED_IN_KEY',    '8]HF>rdE98+I3AwYw$M9zHr%g&3W}!b*S$_h<ni?ysF3Zp#!Y3HucO4>:k)i>g,U');
define('NONCE_KEY',        'R4!!oARKKJF9;v<E,=:rqb1tBmrQb~Z$P5s8x<6Ye|_0LhEtK}k6|K48{St#]@Gz');
define('AUTH_SALT',        'd(l)7-6od*W-=_R~Fk*:N.11O&Y+n4lX9e|vgWm8$!~Vp_!dK@WofAx=.4E#x:.k');
define('SECURE_AUTH_SALT', 'wOeF:{OW3rJZ}E]N2d%~se!#%r5?{Cw,,$)EzrQy]yd8S+{0SJG(ha?qk`wp)*xZ');
define('LOGGED_IN_SALT',   'sX&+gGJgB-rib+J00C8{]OU;NunOT[nk|W*sk)9^D7wAvwSx^*,TmY~PG3hF$g8%');
define('NONCE_SALT',       'xT/[R}Fz#NX@bg^e]xlD)C<b=E?f:Ada_ML69r$gT!ey$uA&pymLFr;8Im3}X25%');

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
