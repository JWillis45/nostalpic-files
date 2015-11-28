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
define('DB_NAME', 'nostalpic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Nn1k:.GgjyUh#Y+g}4dJ&5gK]!yU|RWnDHxL>IyJ(m|AqY2[YSU2o]+Uc(O8i6Y(');
define('SECURE_AUTH_KEY',  'YN2>{:#|A+[oJ6|-qy[-/SU6/%:gj%&#,%%|oSc7|)7c1p9:kUNUxQlVvajvj>8w');
define('LOGGED_IN_KEY',    'o9+fV+}~ZQ$yo|Xee-L,3!;kVPt.;`C#z+: *lv:fosHe>uNO;hAjDDE|x;M$f(G');
define('NONCE_KEY',        'EO!kOdn|!V+;QVl!qq+TL[OCPEdup9%T8FVPj/Q)6M]|m-0a5ReE/Y[KhOnv7Nxz');
define('AUTH_SALT',        'y~=nO0^ nqvfM@#[<)v.-7yT8{O, *]J[#GQPEJcxcV{(3d^rFMQ|hkN-lD5,Oca');
define('SECURE_AUTH_SALT', 'fL<cwr)14SPQt$]<<Fp.vs?u_-O1Z|$0Yaz-:wfTK2;1P<4rjx?e)HPiee#:2@|}');
define('LOGGED_IN_SALT',   'd$YNw8sp&4Rh>:bqa*7z32)D=_h>cq)y)3O^b<*&@^y(f2e<~3^(xF(i;AbK/b/K');
define('NONCE_SALT',       'omE3sPvl+UT>eDR2u%6H>TJaRK/`uw* ;t-$!&ZGr:X-}c(e,lxjG)OWZ5d wHN_');

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
