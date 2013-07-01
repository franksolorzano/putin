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
define('DB_NAME', 'franksdt_nuevowordpress1');

/** MySQL database username */
define('DB_USER', 'franksdt_deibi');

/** MySQL database password */
define('DB_PASSWORD', 'frank123');

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
define('AUTH_KEY',         '#LREwQPbTp@w_oeJBvE-W}M|#uO72v)4e5?@PKW%-<]?.W]vb93os;KeZO5#(+|#');
define('SECURE_AUTH_KEY',  'mL;}M7^L=nDGODO[51i&joruV>.*|x+9&HT^/Ufd}s2Lbu#bph}T~$d0afh=&YAw');
define('LOGGED_IN_KEY',    '-fZ%M,F%[: m/S>.O]~!bk+Wooz0dg9s+dIbmn2Ob5#?z._xnXRj&TMKn`zfu+f*');
define('NONCE_KEY',        'r@Y;wHx^ZFCvIKB-e-UYe0d-3`,z^;|-*<UZk-}QnI!&!`yW:!;p+6>-sJd-&AL+');
define('AUTH_SALT',        's%,Ga0+pm 5_IH[xmBdd#3iz^6OR5uHgsm)[m^^q`8yiNMb^dHeLQl5`2gy`)p{.');
define('SECURE_AUTH_SALT', 'bY`H|I`4eXz|_;*yfHOri}?1j?II6fy:n)mly7GmgRR@STTB9^e$&)j$--c.aJto');
define('LOGGED_IN_SALT',   'zxfzkdBHeqWR>pA}PL.gG.`<=i0*E&AC4-X W&~G+^v[chZ$>t[R;z<`oy6%U/d*');
define('NONCE_SALT',       '!T%d62lS9Zl(LXK,Fa#^3-aT,^G_P#vO-+C-J|2n1|+~JJ]O/Xh0SZ|9k1e0EBHQ');

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


