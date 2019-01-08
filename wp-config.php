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
define('DB_NAME', 'saleonline4u_db');

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
define('AUTH_KEY',         '# 3asCMl*d5l2@Jfc]$eOC*cK~XMIf1*0a%?HJl7$Dso<atgcJ9xd2^nN{r]P_J4');
define('SECURE_AUTH_KEY',  'p|,H=vGt8:o<:65rJ.q&W&%MKJZp?XykN.xcpB*T3^RYjx<XCM1HHf2HBeGC8y+D');
define('LOGGED_IN_KEY',    'v!)}ren#P-Iz=0I.KGiO K;OP+WWMDGmQZ8bm}kv{LYBdK-n%eW*`/C;?s2gTz0-');
define('NONCE_KEY',        'f]S!S[ %TSKO3z64He!G]l@DuS=#e@<[z,>qYRt<e*84@1kI5m[;]vZJv#wkVVHf');
define('AUTH_SALT',        'MR=sRDE~h^G>mu^b!&(nle0*0zL=kP.Hfc;3Gfw)0=FB*n@Vl9]=[3sddBRR3C`h');
define('SECURE_AUTH_SALT', 'Mj!PpuGXe)U={7t!Xhl~!oTiQkGAr@r(qJ`9He[!baY_=v$L#],C}_zMQy1*.u]$');
define('LOGGED_IN_SALT',   'ZG!}-=X5O%(5bM`1$GR$@*SYjq%e]1kt_Had4a_b_e[*sQt37f%tA]N-WRV_i5_&');
define('NONCE_SALT',       'chd+n5Z7/L39qb?uqB-dm?[OS)9F`;JW|3sU%u~NuhIYWHUwOHb(8g]8N>w 0,Ix');

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
