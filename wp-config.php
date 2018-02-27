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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wproot');

/** MySQL database password */
define('DB_PASSWORD', 'code');

define('FS_METHOD', 'direct');

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

define('AUTH_KEY',         'cbV+vq9)po~47.3@B[Mw_lxy|$J~f%G}X=W%F~x;OUHmIpIR3ZUO-{Bho^(l^a27');
define('SECURE_AUTH_KEY',  '$z5A6o<z*X2`WJkF6slBifc94slR,Fw@MAp!~$Uzg1,EDdUre|B{P``-+zJ+TC.3');
define('LOGGED_IN_KEY',    '$xvJK)g#MZ^W.HF -?2UKb9q/6K, f+QN6lA`H[+iPB8)!A||c1<5,L&p49aXP>f');
define('NONCE_KEY',        'OkX>9Pmw6km|TivP-8-C@x?)x%1*mSKj@|LG9e,67e$^K2]BOSQ2oWe]n4Vbd-jw');
define('AUTH_SALT',        '|z|g|Tn:Wr_aeaSqR:^AWG|+x@s5be|Z(4TOB:0i132E,>-fh^!P[&W!3fhVSMsC');
define('SECURE_AUTH_SALT', 'vII+zwTFqYf:&mdp}x<4Y4<s@]bfNaQ 2r5>bbY^d#Wj:hu~l$cxRHOZs+|xZj:c');
define('LOGGED_IN_SALT',   '##dIMRc*~HSMR|V9)uOFFT|}f/Uz$:OjYa_.%?q?z$`INgjj+_y4S?5+HNxo |vC');
define('NONCE_SALT',       '(+1T#I -vueJ)W]0_%HilbXsb8-tL//~BG))UBdW**vxpX0$X[68+o[yU9q=C?^/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
