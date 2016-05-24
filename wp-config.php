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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'orTD2%&[POMs|X{N7oi[9yH:tj@1!o-C,>2Cw18TyoPttp]#E|iQ#Q4xZimY8:i3');
define('SECURE_AUTH_KEY',  '>=:ML3-EN*@!UROHV1?!aY,jJ~[GOG=0tgRdG.[~4CF)EUM+s/hn^~{^f-UfFL]i');
define('LOGGED_IN_KEY',    'i;|x#3s 9^-5F/:|YoxhO<R1h.L@$`hRh;d41JT`kd@*,VRq|tamV ~zbzpgBQP=');
define('NONCE_KEY',        'r1?ln.8nc0ndmcOlK-duDn!=r^omdUJ8[J]l.f<dJ.V[=af<NKbRG?@-gSjG_?jZ');
define('AUTH_SALT',        '$5kp;<5j:BS.tjhKA^7<F9$F(7!3aTsfkAOWlDUjq<#HFhMB&Y0u^.dnnk24t=9#');
define('SECURE_AUTH_SALT', '$%Ma!U(&,}G{&E9}oGdmPLZj%r]Jd7ci]!Jwj&^uZnIPzDKR~@GEt2%@YTh1:b_Q');
define('LOGGED_IN_SALT',   '(d;v]=KZfEhqj%D_+[#_A.=R7DFF%<4#XV(q[<;k~gA.$^3-6IUP:&z}(<J&1V~Z');
define('NONCE_SALT',       'a/1%2;D;Cgi#dI:@Y%g&@]9ew`W9cGm(c/JB |9p7!nB/tB&7WH~gJqk2s=!elC5');

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

