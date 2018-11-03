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
define('DB_NAME', 'wpfirst');

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
define('AUTH_KEY',         '={8Rb|5aVm(aJhT;.tGa=gSp1NolkmAo;.Eb(+}f . uI]86]Mp`M5{R=B|6Ax),');
define('SECURE_AUTH_KEY',  'mhz5W$^E[dDaQmo,AM7>7YxN#0{(8542X4}C+!nB[lQz.B2&~]p,r]H|Ra1mI1{}');
define('LOGGED_IN_KEY',    'xt^/!nd*NbSt6Y%-yxnNg2u^L.*>YujC]YQXR_CyvP0KR8E)D`hdEDb&]`*ZTPgk');
define('NONCE_KEY',        'mF8A[Chx>HDWH?G)*EcBc3{FTa!5/A$|HCQ!/(6g:{bTtQ]k86*XA2f/ZoyzXE(b');
define('AUTH_SALT',        'K=;),Z:^Y3s=^Pl~p:Tc6S-x~F80-%9] )I#+2xQOMeRV^cT 4uAq1JSdm:XohV&');
define('SECURE_AUTH_SALT', 'y#)-#SPrq^pZov$<LHk@KIKA8c7S]dAn9V7X>e}6,O(Q_IB&:HS{4V?&Yjn#ZTZO');
define('LOGGED_IN_SALT',   'c/0XO*pRw25vr[C#>m$WGR*FM,s]6aN C{%L=+*mYlU^VQRL@=aWlR$kB*M[Xy<O');
define('NONCE_SALT',       '1*>KtA[aWG&$hB+A1F#sGn@E?9=vDmQ#UmvV[gfA>#Su{Mv>t1=vMxQfL`?E38/%');

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
