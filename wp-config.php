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
define('DB_NAME', 'newproject');

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
define('AUTH_KEY',         'eUwuhB1u*KpE}8O2a)}oH()wJg$.kf.3OlOz}z)8J*vYUAn>Yd]:(w5zXm31;,wH');
define('SECURE_AUTH_KEY',  'V=8Z5 JiEUQ3tVj?hZtP3aG{8q&x{gMj%zVRRp#EkR>/I+ZsiJnwg[qQ/3wmSQcg');
define('LOGGED_IN_KEY',    '8T@PWLW,:=!(Z)h3sqx6t]iT}vc~%Hlb jY/hw;^yz#7}6K8E)3RM]H#LC2xaNVl');
define('NONCE_KEY',        'U@dfphjNGc)(@Qe6XYZ,`hw|2/@zo5;DZ j5/2D%(t^Y]UXbfeM+Niwj/sggxn7`');
define('AUTH_SALT',        'MqLz))9 KB{@>n1^nnsM8Oh` z~hcIi=Z8:K>^Ydt!:/j((y87f6!uhXMj2MS#]`');
define('SECURE_AUTH_SALT', 'AF.L:Rr[G 4b(7g%8ekIG;U:>]qz82Wez=M0A+)G;[45Nk#1,?qpZ2z:FqOl-l.K');
define('LOGGED_IN_SALT',   '>ogw7JBmfQJz,ULsTPQ=v)HSXhzdn^yj5XN>gvECb)udS_)vJA[oeIw|%%v_$L`h');
define('NONCE_SALT',       '$V,UXiPD4rJ/P:LQka;aco?OHS+Lrgp;O}uoe~$m@3M4?l:LIT$1ImwlGj4b9`9T');

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
