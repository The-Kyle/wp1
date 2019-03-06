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
define('DB_NAME', 'wplab5');

/** MySQL database username */
define('DB_USER', 'wplab5');

/** MySQL database password */
define('DB_PASSWORD', 'wplab5');

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
define('AUTH_KEY',         'C>GbCon#`tpgIe^`S.Nsf7Z jrdrR5[8GQk#OVtT[`}CEqS53GKEbK6l=&G!OK$<');
define('SECURE_AUTH_KEY',  '5*BzT}j$16=rh%&OG%%EW-O]i$jS=o2*WprZAdypq/1cB4:3Ou]lgiN:-_Gn|2s@');
define('LOGGED_IN_KEY',    '?d&hF-g``CDq-Ag{l@>dW4Gt#^o|jwq#%riyjM4#Wb2[&bV`!8m6P(3kmAtqs: 7');
define('NONCE_KEY',        'W;C%W{]Y.qQ5=uP{OyoNr>,4?1/]u9f^L?`n&?5x8Rp4-r]{JHeb$355ws/0,ET{');
define('AUTH_SALT',        'O^1)?5C)x]eB12/dx5bq!vNU<C)TA&!Zj#7d~_Js-12yKH%Ag^TYL.u8gAO){z0>');
define('SECURE_AUTH_SALT', 'iDTq`TW</2oa.+xg*PEA==$m./I%a$d~MKX}>FRqHyL!wJ>DF4=-;CH%o}L)hbD2');
define('LOGGED_IN_SALT',   '`:iC8&1T2(510yG;0ug:/K4YeEzH.3^bY|KKNk0)?d6M0~5:j.S;$G{A,@UDA!eD');
define('NONCE_SALT',       '2}u|_9Z$|g{[eq#ybZcKi*$~Z,*4~1G*{&^J{kCeiv6y5s?%jZ288,3vxV$sP.6~');

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
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
