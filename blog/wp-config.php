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
define('DB_NAME', 'Wp228849');
/** MySQL database username */
define('DB_USER', 'Wp228849');
/** MySQL database password */
define('DB_PASSWORD', '*54G&oHr');
/** MySQL hostname */
define('DB_HOST', 'mysql11.redehost.com.br');
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
define('AUTH_KEY',         'w-;5d4ft~h/OoOCX *.+=9G;JA`k(o-_(U-kEM|D3yVD[IhH[T9M0frU=6UA2#!_');
define('SECURE_AUTH_KEY',  'q:Qa+}>=`1Z ozsP#L+=>+M~-kgw+Hph-[8,~J4b;M/g$z!2+-D-G[`L99ypg8Hz');
define('LOGGED_IN_KEY',    '-wef>_)JJ/9.1w}%?,c.BnD[|rn}G,& e)BVJiLk)TxZi%TuDaLxNU?O,-K|ul_Y');
define('NONCE_KEY',        '@=TRw 4&i#v|IxJn-WdR`G7d{r=-F$2Pl}BQc<()D7Ws_JHA7Ay&;-PB:m[<s*fj');
define('AUTH_SALT',        '||2DtbGEeQw2^=<Dd)AW7n{p?{A<e i5!!Pjl3~|yun+;flg~h/=sNrA|T@9:fc@');
define('SECURE_AUTH_SALT', '>RUOFcJQEz09G 3A%-5RMwt,=EV!,AM=rNoK5@P}N5,[OV k#a=ER5)s]74|v+T}');
define('LOGGED_IN_SALT',   '}?(T;S8,Fgnj:M./Vp@z}4JMZ.@FXRZ93JUb9@-:7*)7p-X.ThyqJ@KpAh?k~G(^');
define('NONCE_SALT',       'z_pkg3!?Lfz-*&=BN[;AKZR)/bO=B)!*L3Ij,w^$EB<M4mi~KT1E/c??H4qn2,uu');

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

/** That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
