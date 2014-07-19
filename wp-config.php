<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'campaign');

/** MySQL database username */
define('DB_USER', 'campaign');

/** MySQL database password */
define('DB_PASSWORD', 'campaign');

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
define('AUTH_KEY',         'dicL5#snKt2#z&ZKnhx{`M-prP1Goex!+8DA[Yg.M@*v%DDin|sz(20FZJ6FT4,L');
define('SECURE_AUTH_KEY',  '{;YK}+W/5>jR-?VZ))61 rZP`)#3,;IjQ~;1AghyFgjr)77_{K`+|eW>;Pki48>H');
define('LOGGED_IN_KEY',    '#K99.>}zf^`I|~P_FS{<jp[JocZ=Z+k4]vvG]IUw+M~q?N}~9GK*!W Y,(Q&4=l]');
define('NONCE_KEY',        'r|P/Sv]QsEw } B5CvWkEftCbn=28g+cgy >#q+3HvZ.vdE{Vhi+oDV|.)P5y5X}');
define('AUTH_SALT',        'FEv/RR;+O Z9zS6ZGJ9+9=u%#H0@Zbq5!nmAW-<Fn^?~-I+_,uaBK{UltQoxDWc&');
define('SECURE_AUTH_SALT', 'pJ~m)5n?=3J;2rb/!^0s9HlrcE}SU.N!,%1|iCFC$$W_~v38g|b gl-O+SGZ~asF');
define('LOGGED_IN_SALT',   'N97LsgzN3b1+Xp}f-~9#C*o7n/>8Gy}yB{2C?p?yGqGFhv)B^M+X(I{+b0@l;PXq');
define('NONCE_SALT',       'nn%7PF:Uh0 FQPubr007qzJ4VshUKKX5>RB&N_rTYL;eadGy.]AS_7riqQO;m@P*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
