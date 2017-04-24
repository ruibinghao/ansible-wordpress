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
define('DB_NAME', '{{database_name}}');

/** MySQL database username */
define('DB_USER', '{{database_user}}');

/** MySQL database password */
define('DB_PASSWORD', '{{database_password}}');

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
define('AUTH_KEY',         'og=kOb(K=*/L7kNFrgTN9JBna@A2MxbE?3-5t,rF/-g[21>9g,ktSJ(ItG~t?S ]');
define('SECURE_AUTH_KEY',  'Jy>zVP?M[qaZzjo?RnuBH|yk>=-p-|w5k{shyWr5S/r8.W#Jz>shzrb.Rq@=blze');
define('LOGGED_IN_KEY',    'c|=Cdr{tM/3{RV%#qE,{!17P;c3&b0|Dx3VNJ;p=c{2BH_JzZAXgsW{)8Qn7&>jV');
define('NONCE_KEY',        '%$kl7Y.iKchu+MIjBC~8W)p(R}FB*pAeq7Nw{C2f CGuFW{hEF>Xg9g=Dwb{}}k]');
define('AUTH_SALT',        'N%hJ8SU<Hr^Zp^Yr0t2]RuB7^bzXy]te^vV{S3<s7a`Q?PnV2C!lr?@XM=/UM.eU');
define('SECURE_AUTH_SALT', 'L5.eFh[]P5niYx=v*U*x:W9ifZvg_PI [0/z*`Y!Vj]$`vN5Bd<+Ft)6253`Exb!');
define('LOGGED_IN_SALT',   '+<H|#R!ejz)VZfj!1e`1m!N,z_fRtlOSD=T%w(0r)b~0wzsJD(wd9?8%fS&FCPz5');
define('NONCE_SALT',       'T6(EBM5QYE1[^-i;}JoBmH?Ucz2&a%x@Epv|?O)cGJQ5R:3`Az~_4NV4Ii`s9n%o');

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

