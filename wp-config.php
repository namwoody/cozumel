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
define('DB_NAME', 'cozumel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'D7Hpk2lRsx');

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
define('AUTH_KEY',         'aB1WNY_Gd;Jr?YM;wtQ#p7+d$cO8RQ53FC1l?#I lI+LPZ/S> FTz*eiVpG#?Ed+');
define('SECURE_AUTH_KEY',  'f`%LLHA6l&QHh<OwJw4y94eMmWsRY0i1q%W2%hIIWlJ@$i$FP 8/^}b_6Sx4QSc$');
define('LOGGED_IN_KEY',    'v66ux5?,>UR>D5I_D_92k,(G)V ^@u?1e~kVyzoxb- *80[(fPJTCa4 fd,9@o`_');
define('NONCE_KEY',        '4w9)du*rS6dlm|S#tyq@Hm=*jhM6IHNOko-=9j35(q;3*q2J9)Grt2uS9!:ps:4P');
define('AUTH_SALT',        'RM5F#fo>dOE[uZ*<{urO[$tM;wLUlh;N<L,d3J.2pqh?cVVe#,J>}+d[, !QloTT');
define('SECURE_AUTH_SALT', 'WjZC3V@.5w|2Rsn&te2fKa[F%hMn8obw`!-PSAtkJs/s=v`rG[4ygh8sLn%?X/bT');
define('LOGGED_IN_SALT',   '+%-n)AyNGr[NW+#Da=;>-+lm<U:516qDl%b6nvU5-UT(kTcBq/3_S<,0;2i|sl0N');
define('NONCE_SALT',       '@oAHw6K[8Eoqjoet%V2!=}19+CH)Qjk<zK#7eW9?Ozp/E9OvuozP~:.Ng@AJs]u1');

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
