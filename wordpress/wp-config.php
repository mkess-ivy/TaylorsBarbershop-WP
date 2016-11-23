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
define('DB_NAME', 'taylors');

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
define('AUTH_KEY',         'vez<[m/uvHEj|n:GS:pN!%&>`HGHVAw6NbOfW|T;{1(X3H>(|iq] 8OWC.>+f>XI');
define('SECURE_AUTH_KEY',  'KIa0T.rx?gCnyXY<c+vq!bAOJ/g-K*Mo1y_x=W*wsrL02z.YU6+U0<dqDg(C (I;');
define('LOGGED_IN_KEY',    'V^}Rw|Gph$MCtZr(5VFE_GS<lUz#&?e==@nK+1p:7^ics6X8o{?37t<kS#aTeW<O');
define('NONCE_KEY',        'OIM4G{0ZXD773@zJ vJRM6_.so^Ooa?mLCR|N88~]G~Vd/>&H^)0TJq)Ksrn<&&Z');
define('AUTH_SALT',        'Rh:YXEA;Zj{/#qz2rX:;(hk:+@=uJK4Vu]L)NkL?Glj1Uh0Ay`nga^&Y2#yc5.:%');
define('SECURE_AUTH_SALT', 'dI-kG(g9|<ylGnP`%MB)6;yk8!-0FuB=3[BQ8Hd>O9}yl?`||Q0[.<Xb^Zd++}&z');
define('LOGGED_IN_SALT',   'GDg+w$!O`PF/9d3m({fv%3}~c* ] 6yTKx~/h `u%(|6YG:qnY|aP[E:V?8tOjD1');
define('NONCE_SALT',       'xOutcx?5tGyy7@Inqa 39T|4z./28_r;E|^pnm=:we4W<I[ui$bT72S;~B3wF2bJ');

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
