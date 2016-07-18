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
define('DB_NAME', 'klover');

/** MySQL database username */
define('DB_USER', 'klover');

/** MySQL database password */
define('DB_PASSWORD', 'klover2016');

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
define('AUTH_KEY',         'H)9Q%2?SM_5QuV1BEF*)A|M?;0oz$D1zA}C:)0:^XjGC`C7[A.vdAD[B%KxJ)<dS');
define('SECURE_AUTH_KEY',  'nPJaix3-kW[DpC!L!reahWqJ`dCf/PDuSqKe:B2^-<R&x#Nb?^& Ai@}QR1 i3CJ');
define('LOGGED_IN_KEY',    'La:QX-8~(n]M;k: XM()XI*B~]-IAFB!8jU^vRLM5.-6Hj/WB?K-X-K>Z:9SCN$6');
define('NONCE_KEY',        'BcS}Xi7rc/^xWMTy[SbVXKi{ETaTM1/L[li)>OqK3onj|8pEVRdWEF8<PryY37B%');
define('AUTH_SALT',        'OMs/UNvJYOf_OciTzR$}uL.ln.Dtlzl)^XF4,Y7|W{MIX)iQ#=_rU?/kieOr6 FE');
define('SECURE_AUTH_SALT', 'Htteb1-xJetx$0|K@6q?:`KF6U&paalArO_n>2vH=NUC#//Z5)/q#x)oILJ] #(^');
define('LOGGED_IN_SALT',   'ShJby:PtOW-o:Fbt7qM]c@;hseP$zZ(Vu}q4FuJx=tf,Lr )@6>1F|A]Hm`b3 vH');
define('NONCE_SALT',       '[eR+k_e6lY4D`L{ &6Pl:,dlsKqPyacdY&-IXm[?^>wTSa+`CXear%]]e,Rb<In-');

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
