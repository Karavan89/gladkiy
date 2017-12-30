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
define('DB_NAME', 'gladkiy_db');

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

//proxy
define('WP_PROXY_HOST', '192.168.1.1'); // ваш адрес
define('WP_PROXY_PORT', 3128); // ваш порт

define('WP_PROXY_USERNAME', 'karavan');
define('WP_PROXY_PASSWORD', 'kara1989');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^ZLeK ,[2<s.:;}@^dXPKX>9v@UBO$X@B:rqoqx)};@^jX^N.i%SeJeGzr$Qihyp');
define('SECURE_AUTH_KEY',  '=8}srM45/?Ai~a3mG]tV@cd.[~_!U0eJGXOe4`Q,#L}l`3t{AY2&`b7:ae@51opv');
define('LOGGED_IN_KEY',    'FQhBnpqY%x<t1NS+b( ^,rv1SG0L8J5_OX7c3zQy@?p*~M3y^JiJF qd9nH<-3]/');
define('NONCE_KEY',        '!cZ:zN#$KQZ7v[2 WPdvcG]i^d of?K7<iJ}-+1rJK!N9sw I_|x,1$;<d(_Z%3x');
define('AUTH_SALT',        'ad~o-LY1c#y}ta{t`S)_P!+m~PUS{p-D]mN*KbV#.E$(?-adcb7B9q78<X5hVg8O');
define('SECURE_AUTH_SALT', 'O=@w$qEYH?z>78QPT-E]^{=kLm54|P4b<GkjY0L[Q}#,R@:|ZzzWN-(2D|L-0ktL');
define('LOGGED_IN_SALT',   '`2b$!r~iPFHY3fq;l-D!G=.]-5zH@(gy@v1+MPWMQ r0f1hCdc5T1.b)t_bDq;Ib');
define('NONCE_SALT',       '?P3Uv^$AJRkTHM%`XvXxEdQ4UJRw|:,Bd+Js.ASnk*aXm|#i_,KLyh<U:[{TGJ5#');

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


