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
define('DB_NAME', 'kiwicarecleaning');

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
define('AUTH_KEY',         '}iPN/h0t{,42~;.Mk{9cI~0S(kiLoT<)#*J9-?$7Wn[dF7<,G,O&d(N[5&`g!42-');
define('SECURE_AUTH_KEY',  '1OuPaRK(=9#d:>`W(be<K#-UC/=M)/<xZE[E_&to6WF%>OyKRiXc>w;2, <i`~q.');
define('LOGGED_IN_KEY',    'Dzznx)8]sNxmlStX5_:ESR@Ab/e=ZdP)?0WeCmr5v8i!tI` FTSU|@QDS@Z/:Jtq');
define('NONCE_KEY',        ' pMV,mkr1LM*..O,EA~]`R[$;Dw]<Fj#cQ2Vd<`y&K4F)J$z?*w$S5)K/e /P)[*');
define('AUTH_SALT',        'HVKWOP:BSeF#i@ee|K.u2[B-O&%g}%8Or@(JV2Kh<0nRF4fr4Rv|zFf_//orRzKy');
define('SECURE_AUTH_SALT', '*n@zC1_#rCOfySsh3r!~m{k)VwOw^!yDq>l:Q_|JQfhLi~RU;A/qfFnMLVV?z?iK');
define('LOGGED_IN_SALT',   'UZiwd~AEKaf`M0}H#pD.u#`[FS$/};N.gKiy9EOC29CwpdEoyG-Od)+[qM3d88vz');
define('NONCE_SALT',       '[.$6QE<&OXkDlWXh#)*F?z$d2Uw),xIdx0-HhvFDJGKmB|h7o;s?W}gnAx`XK #V');

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
