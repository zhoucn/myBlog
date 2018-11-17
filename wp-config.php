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
define('AUTH_KEY',         'Pu   -i]SzC.Vb^Rv<c$ ^fIpm<R3c[<4H~rhJv *DD({<BL<[qe$w@Xo v`HFsP');
define('SECURE_AUTH_KEY',  'ogq0I5!r.q*p0^RK&/_,,S?cNO)~?Cvc(>+1cku,aSbl.8Zh/Nq]D*jN2_@_/fi6');
define('LOGGED_IN_KEY',    'a]LXcCuB*@aQ/2QGczxE5`Pw5p#AwYYRYDVXWQk;b?h2louO#fxo~a}$BcRQ^?U(');
define('NONCE_KEY',        'Y!z]&W0Y*7A0^GyC]0m1dPB#!65&hOKVqF3VIXB;/g4.YG@T/fW&n%w^g2%EU<U>');
define('AUTH_SALT',        'YoHl(n98Wd;pF{[Q>I]{TTFT^AkEfAc[:&LwN~,MOKub)MdXa|RFGLxD,4FBb?{=');
define('SECURE_AUTH_SALT', '{tgIBFdYA{sZg!>F9lTGXD!en|bAuN+&2a*mYkT<@9d=Ec;%l_|5;W$-E_JK6FH~');
define('LOGGED_IN_SALT',   'pq|j,-9jO9|HoX:bY97p@zL(gsKbE%$|W{~@KxVRgk:jzpU>kE`k~/5[$pZ%Ao*t');
define('NONCE_SALT',       'fmFhyw7:NI6XeXTl>Cr{HcE`E[{%D!z?HPZ`I+pq]abh>dd2Dmu %^9Vw}a{;V[+');

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
