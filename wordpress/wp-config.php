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
define('DB_NAME', 'sem11act2');

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
define('AUTH_KEY',         '`i~I9?%Hb<!!b|).O$*UqF6~szH}lm(Yb$LY$xgpm8r?b`vas#O]_eUj<$:[RGS!');
define('SECURE_AUTH_KEY',  ']3A<imh+pC +z@@V*Iich5=*844fq.y^$xQ|ceG?xH++o%-u(1r1fNM-)V8D*I<H');
define('LOGGED_IN_KEY',    'yl/^+i^j_$NY<!8k<q1uOXdt>-)05UdZ,AO$CzY-MwSpE:Q J}$5)R4nfSz1<ky@');
define('NONCE_KEY',        'cq!Wr >p^BN^C7pzC5?iM|aAAyyc&;~cL{5+raZO^|[6GBxh4F>YhRD6P7?@ge=M');
define('AUTH_SALT',        '<M4AToV-44}2QV`uV;|Lz]mXlm1XDt?>$sVX+SWPzR]>]MZ`gjCj4$|(zQfSPzsn');
define('SECURE_AUTH_SALT', '=j;W #hW|Qy O#xqJ,u0i03 46`C)2=`goMj!U>;9<SPQFyi`YO#L^fd]##tY$?/');
define('LOGGED_IN_SALT',   'W7fa~}Mg)bEia<InwN[.8WdkhZq`5XJ?[pVmWHf W*&iJ6!Fj/,8|b+t,pA>^8PS');
define('NONCE_SALT',       ',S 6?5M^|*{IEm+jt3}RB0p!D_X}r](YuZQp@PkFVySX =TqCSmZtx=owkFgysB+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl';

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
