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
define('DB_NAME', 'sanfrublog');

/** MySQL database username */
define('DB_USER', 'webmaster');

/** MySQL database password */
define('DB_PASSWORD', '=20sanfru15-15admin20=');

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
define('AUTH_KEY',         '(Uk345:m&0$N@[X+T711>RUG@0V$r>*@l,#Vb}8CK(LMTs+6o ]VlEJYQ/8{.@6T');
define('SECURE_AUTH_KEY',  'cN448hZ6,JfxiK,h_/-t wqyOb9Fd7B?j[pKQ2+;_qLO*txsM=0g=_SqH%L m#8g');
define('LOGGED_IN_KEY',    'hIE&#G)Cw3f#A;=sgp+~J:QSyJO=<RCXy28`RHExrf@5(qw#@o]z+!Ns9h<(8`Ja');
define('NONCE_KEY',        '<DR2j2`NA!rJ%qEk|4C|B[;nJU);fe.QCSg2DgO:RLr*4vZ_!j4SF*0y?y`BbZm%');
define('AUTH_SALT',        '-mdxn c/RFpZr1M{~Az9@mAg{<y|sL!~iLCpJ4:{Ul|J6EKOY@h6IoDXsS(0n-3%');
define('SECURE_AUTH_SALT', '`P>XG3BIqWz Q*Zapiic|K>862%~Y|UOG~T*{]vQp5IH}5Q.n1&C,I5)iR`$T:XJ');
define('LOGGED_IN_SALT',   '`rD;prMdAycewhHWSk,o+!L)I?F Ij:=kSCt:u_ HYji?89AR1:1[s: yZ32c~cW');
define('NONCE_SALT',       'N>=.*VLm9$e-D?ZJC@4#4plLr2<8)Km[<T!`c/$Yo)M=pr6~Lq`LlYCLFf, 4V:U');

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
