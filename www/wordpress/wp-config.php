<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'pUqsAH6z7AZdE4Tlk_KO');

/** MySQL hostname */
define('DB_HOST', '192.168.33.99');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 */
define('AUTH_KEY',         'w|B$~:4laYh9(?aXIEf`ucz)=S;y|3> sb{@z{^R3;NQ~;4u9qkSmhyGtJ&a_2w#');
define('SECURE_AUTH_KEY',  '_(knHH-.$H)w1-68@/_]V:H_bL--sjw^ont4J0@][b_QZ-ZQH-{!-;flLIMR$Oqq');
define('LOGGED_IN_KEY',    '}1W0:y<T!nQZXCVR%?<&F0H0}!?d-.~4_NZSBmRsvMTmu^-@NnXV&,iEDBL`$95%');
define('NONCE_KEY',        'R2iac]7~NV+Tz!HVARbS<.ptXnE|!I:V/;bfMdzs2D=5Q0H<y>Bwv?8k|RH&Fwa1');
define('AUTH_SALT',        'S!cQG8$,XU,Y*xs+>+g)g(;!;Y$Q?De.|9kc~;u<fNL1-pjB$Ivg-{<(X(,ZECC@');
define('SECURE_AUTH_SALT', 'n=+zt(byvreaQYQVOz=(VF|djriv&3I`g+sRg/yotzhkX&<aI^%iZhB-/<8l+.rG');
define('LOGGED_IN_SALT',   '|8 RJ)U>ZD9x7hnU{+biv!s| L|Qh=a28R.wb/HZSTT(=$d/%P;]Px<e:m4Xu}^T');
define('NONCE_SALT',       '= G.G|hLWrK@_Q6b},8;=k06[l|Yi D@eq/W6L2`A!ic^3v:*||-au:q-c;B3pq~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ja');

define( 'WP_DEBUG', true );
define( 'FORCE_SSL_ADMIN', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
