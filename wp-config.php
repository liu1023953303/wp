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
define('DB_NAME', 'db_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '7758wei');

/** MySQL hostname */
define('DB_HOST', 'book.noasis.cn');

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
define('AUTH_KEY',         '}jb2k;TO?5).u`XMw7LxF,uc}W#X03Em?Y+H_1>aq2&/EMvfx@xBY]PaVcgjY!9s');
define('SECURE_AUTH_KEY',  'ge&L)cpr}:id)74ch-I:)},hq|!*hpe,5*U;1sUd5mC%$Vgc)mA.#{iI>B9C3iz@');
define('LOGGED_IN_KEY',    '18g9#Y}X|/H-^nn$#gZ?a ; ]{GzF#!jQu!#)8&>;wp-ao83ALgk-B`FaL7l`bks');
define('NONCE_KEY',        'ZXU{zMnlJ~O|sfuKj`S794OKw{oi=e8tS ?XkJQ4>=G `0^&8FW1)13|1P*H2J22');
define('AUTH_SALT',        '0XVaUUcWXPE4WNr|>zC-}4Se-0cYNDw86:s<5Qg1Xto%.amC`3b9tg%8,[wJNH3k');
define('SECURE_AUTH_SALT', '=&1W# }!+/VF_d>k29mu~@L.$N+a/8#M.8,%U.;yq-1=RW@s5 vEaUzc?DHXSEp}');
define('LOGGED_IN_SALT',   'h}>!l,*kyl4vsbM%>1_.sBZ^^t<o1)qX%4_b|O-9=R2t@OuWCVw,E|fRhbnVqmR8');
define('NONCE_SALT',       ';Qs}J5moSc?R)`qzb@V_AKe3$Yx<^<NpRKDO=k=LfBVh_+LVG~GDW0w]H0)Eczh;');

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
