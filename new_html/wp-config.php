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
define('DB_NAME', 'corecare');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'adc');

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
define('AUTH_KEY',         'u<|aA5yxx<AqU+A62?f${!$Q/:br*-od/~5~^xil3tXyikhTRv{!cKN||p-yAxcg');
define('SECURE_AUTH_KEY',  '7^adqw$!4A/V2R6X` J?7!R*$gx+5_`rwAL.yn`,AM=yv#WXE[&]Ds^?k19x7Y]7');
define('LOGGED_IN_KEY',    'P$grKxmugD|Eh m$|VPDps6SE-h@1$BIhuma|oi-y %s3?-?L88+H7JZ68Ys(v-1');
define('NONCE_KEY',        '50bd>Im?`+LSO@rQ2F}X@A]y=n},W:l b{U&sClCXmfk)dH;^-BTn#ajk@wh)|D1');
define('AUTH_SALT',        'njO&*UGjPf8U$updX&oVNj>*MPRcy)|2-R|QDMWM)E)rNkeISm{az`9^b&9b$/!]');
define('SECURE_AUTH_SALT', 'LR+0;8#rc@RC1f[&!-Qy {.=-jLIwF{Bma3o;N8-tQ)apz!rj~,57():s9+C4h80');
define('LOGGED_IN_SALT',   '?{6Bi.r`6|*?B_WS~S(34KD%B8~YkX:KIT-Cd9l*j4^1|?rmQk@y|gZX-Nxe)%;U');
define('NONCE_SALT',       '`XID.f,|EuXJMPGIS%5+D5eQOn!>ay%J7*6o|[lk`hIhu%Ce*bb%}+zuSsCEi~x8');

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
define('WP_MEMORY_LIMIT', '1024M');
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
