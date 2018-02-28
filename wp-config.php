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
define('DB_NAME', 'care');

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
define('AUTH_KEY',         '^Q_a#1|^`_(hXL$IPze$+_$EgQ{^cXOS;ER5~q}7eba0gl^rdIPKr4u~t~nwJ}NA');
define('SECURE_AUTH_KEY',  '< 3wt#p_yCZSH5@dvKB?UhK~^~pT?owB-Xs&=?V%j=K~.=8}hUNurvk+klV$22Kp');
define('LOGGED_IN_KEY',    'prvuc#Mz-WE)_CTUOCXiH10Z]yHJQL=?p-,!4m{z qSKlQy?tvO~H0q_*6[`tW9F');
define('NONCE_KEY',        'i=k:Q(/H=DG@|j!>-?pV1CjL*MC<?imH[ju43ud8a$q=FP1f=t0#)Rvh3_ 1Xn,$');
define('AUTH_SALT',        'F-}A%~_w~<wbR@+d!Hl%jCN&qY9%~Q]|z{=JhH:ykT3n{uGxKI12.G7rcEqLXP?Y');
define('SECURE_AUTH_SALT', 'G>ZI}d/C]T]7 }3 =kw)*zaAuC)a%wH<[8a9fYfdAa{)(pP$&[[vsP![djrk>,8K');
define('LOGGED_IN_SALT',   'K*Yi8iDA}rb_|3tDZM81{m[.e*z_QcUoqcV{TQuVqGY6OSbER( imq^Q9<N8r^fM');
define('NONCE_SALT',       'o+{PH>wGvz7F]#Ev&rY9nfaQn,D}S]n=TtC:SOv,.Ib1Sq4u0RR@/ds|_tk!TNHw');

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
