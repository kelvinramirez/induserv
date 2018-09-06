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
define('DB_NAME', 'iduserv');

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
define('AUTH_KEY',         'O8NK/:PV=LA^2N^8[IdM*a|^ChKb>7rn6e3s6-[D)RL191 6zX!t,+t @p$;`_J1');
define('SECURE_AUTH_KEY',  ')k6@)~MJZ5 Bo)x%f2~lta-A2z4;qg$f]=y@e~[5)YDq|Y/)LCdI?+ly,EeugPul');
define('LOGGED_IN_KEY',    'zIS&hHycY4S+c$C;]C4?#RgSy@J%9LehUfsSY%J@UNLD>u!y@vyRN9`s8ZGGq!O}');
define('NONCE_KEY',        'x#lC8}ZBj,UF_#It5DO|=q5zKq{L%hMOC_*K4:L{.)@kj0n*$B(qpCSm<V7ej<D-');
define('AUTH_SALT',        'jV 3yjs>m0iq%=ODQC<s~OL|gxhX+2<aT]o,jQ47n4|y)r;G]7wTJ>ft/>lw!`XL');
define('SECURE_AUTH_SALT', '35}<JQN@3?[!wbj`j@M~VyjrI#E/X36SeT[bQUT@0@1B?+`9rh/M;=guy:$I-<Ws');
define('LOGGED_IN_SALT',   'ZQwX>0WMKz%zqZ3D+MBL/B)_fYyNAB j9JKL3y;Z?t(BfIfP5[7!J7/}g`ELY^Yy');
define('NONCE_SALT',       '~2x3C9lGH9Zchm`^69f{O|;c)>fmeTyV&K<w^&*?YXi~:qRQfR^l+}gd9o~h;b}K');

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
