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
define('DB_NAME', 'fatpigsignals');

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
define('AUTH_KEY',         'N~2TMcK)ok&<cq&B%GKB}u]dTMMX>S8L*/F>Nb>m=dQlMv7loL/xC}*AB.ckCc3+');
define('SECURE_AUTH_KEY',  'sHk[KDiJ>gb-V=ycQ?=2CzSZK:.27EJ59iqIO%t O/Qx<?miGtHNHrIG:x~Su2Lu');
define('LOGGED_IN_KEY',    'hZNxyuny7a<ovr.mXK.1Zf/e[]B/|vH6_TP4Ym5Ni;tQ9cGd9Mi}KX?|4n{%=E&u');
define('NONCE_KEY',        'M47,o6.KU9o:)b^OvX%Yl#!]?!VU(X!O]Md1{)]h7_,$QxKd`)`dGqSG3FOuGTcT');
define('AUTH_SALT',        'Q[Hln!zv_?bF#0|d+B2bPN,YK%W`H=*k5T`_Htu_/?$X81l[h;ypdqnaiJ#(TJD^');
define('SECURE_AUTH_SALT', 'ZuiA:Ys?ojigy.5>(JMnvl MNoN0B,+)673b!+}k3q$lnXhxp.W+BR`D. wLz^_f');
define('LOGGED_IN_SALT',   '<fFP~#rFi^xxkSQW8=} z&`3$EMAR)b:(=4mh[[3}aU0``w{ar3IC4d9cJYS)=;K');
define('NONCE_SALT',       '7S_*|.avu^16-OxRSKmf/qLMNeEK~wf?Se4MsZCyzBgG21dd`CV%Z4/Qzm|x| 4~');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
