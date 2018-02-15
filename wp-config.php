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
define('DB_NAME', 'partner');

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
define('AUTH_KEY',         'Wh?Xg*jB?-^/?)q{3op+q=ql+iUU!Z8C|#CST?=m(CbvP)&;$iB[xmeOKs)+-MbZ');
define('SECURE_AUTH_KEY',  'UMo_}g,z#YFlSth9:stB1!T&gB*ap} kBx*B)e!3nYR@|5^sQW-5L/<><,F<7>=S');
define('LOGGED_IN_KEY',    'x`koom}yeY4eflP+8k.j-Rp:Hgnb3h2HaTH$R:8|>~QO YKUK1>L@.W9U`m7+Vn.');
define('NONCE_KEY',        '*VAB@ylFwT%Q0M*m?[0 ~HPUCQh0YbHhE?sfKg1$k/qgGL399x^#A2?[:Vj$ (W}');
define('AUTH_SALT',        '1_~#tOeiSo2piKF&whO?MIKDo2EbiC61O`kb|326~719+=m64ecl72~%w2!AVWri');
define('SECURE_AUTH_SALT', '6>r[V^g+(9i{i<8*~a5c 8+TLEDi%Tq1KyZ3Oqq]{k<*7%v1&pK=OP>TBS_(l*N;');
define('LOGGED_IN_SALT',   'xBc6G}A2gHN7=Li{A6eDo+;O@*6rXIlQf_^Ks2=5dWx8n9XQiYu4^-KFwk,71SqU');
define('NONCE_SALT',       'EbDg{L-#Imp%/NCx!{bPK|wB00S}UWcK {MIy?4$J{Ki56|165KnXz&.ct&gll!`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pm_';

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

define('WP_HOME','http://localhost/partner/');
define('WP_SITEURL','http://localhost/partner/');