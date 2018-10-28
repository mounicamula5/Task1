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
define('DB_NAME', 'Movie Data');

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
define('AUTH_KEY',         'CBfnto&>h<+yBAkZ}-Yb0o5krs0qMl1wOG_dcPjU;f)tXDr_dAqm;LX6X%Rc#-@z');
define('SECURE_AUTH_KEY',  '6131NT&sA(=A7Sg<$BS-#4)KK8U:zR_$)&F?vEZ[mACkZ2&mye+PX8Icsh%_ZJU7');
define('LOGGED_IN_KEY',    's#<WM}x7v)~h`FFUp8{W#c-_c6s.*K{UcOvco=CRe5Fm|#FsR-L@[0to6zm)%ZYB');
define('NONCE_KEY',        '>&-/Ym(.qvaK9+ki=~TA.hKRrDZ$&YaMpYMdIOP6f|n_$NQJ,=hI:t|+eh`w(3>j');
define('AUTH_SALT',        'x|LIOdD4#^G^WEp@h>i{+*du/4$<*%}4I]/G2(&#l/<S:<?1QG5+5sIY)|pLxTZ8');
define('SECURE_AUTH_SALT', 'F7|/i7pwB.g2h]T=6`IMj}E.G5aKc]6vIF/~`S?Qytms6W^iW~NIr:J%ejoDUZ=k');
define('LOGGED_IN_SALT',   '_I7ujcd#=J oCr&ArapysKaT,5u*nM|VJ;)!bK[ZH1m[c+?G9P|h<chBqfP8[hgW');
define('NONCE_SALT',       'd0*W^dBHwasa+~$K&OlmNq,f]m1Z[4>&!=onJ .y#!Z4l&:gGS58YkGhSX3k%H~[');

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
