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
define('DB_NAME', 'albumart');

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
define('AUTH_KEY',         ')NV)hlLG7QNv$Y.5#QhM5CZ,`2}ckR3$sXm]|<`yW!fY47/&%r`7zh_%Mk.(f[i+');
define('SECURE_AUTH_KEY',  '@6~$rT kt|hM|)w28cJUx%ZBN6k6M!jj#=F4*0`c|O{BPrm%<*%|MT_n<S0:>0:V');
define('LOGGED_IN_KEY',    '`hIuK,i%vh8k}V$H.lpe4Nns=Sz<9:GybU@l +HH174+@QO*2B&T{$9F(?4u0If/');
define('NONCE_KEY',        '@17r^}v?+mvHnOH+4P9R`qr8[&w;GL]i#UqkhABre/iV)9(0`b,[_ 7X)YFi-CtK');
define('AUTH_SALT',        '4VjeC(7kIJy-]Y2SWba@AD,6r7${j4G7S`u4EC3g(j0ixV3lOg 3+$!p@NH4=#:_');
define('SECURE_AUTH_SALT', '9 FQ?5)KkKN61:$=c%ZE_sE`ov69VelT+p;:><IN]Wmvn]`{:kNX7I$eK1kS=mGP');
define('LOGGED_IN_SALT',   '{=z9gB]&vm]Objef~/p:}E}LZ/jQw~Qhhg,tZS}NXY;[*am9T(I<j)XQ:*=m$2`^');
define('NONCE_SALT',       'XKuVD!o)N&~fBs5DH$Hc#SS5_~X7|=Tg,PR(0U7Csh+;-Rq2c2q9bJ%kl`>Im0[Q');

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
