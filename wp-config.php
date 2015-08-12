<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/james/Sites/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'uniken');

/** MySQL database username */
define('DB_USER', 'uniken');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'uHMfe+}Eb=Jb)jKA(hK-v6|NZiU<p&7[;}N2|8QA Tm)p-6n*P/)KC76xL]t)5U~');
define('SECURE_AUTH_KEY',  'ulr%e2k9D9axGI9-V(rKU5MM@+v!w0-<*r;D|q^N[`*WQA[q/)ngud& B!|J^Ewc');
define('LOGGED_IN_KEY',    'RXF9LM-T+3V9ZJ-gWAKAVW;cG.g9l(M$;%%r7^q:NNGEa+zQa8h.crDK1Oe_$byv');
define('NONCE_KEY',        '{R/Fn]+-{iYIze?diZ*}x*|o5.;;R`E40oe}I*mGVxS,IcOOI<:;-cZkO8?)UmN{');
define('AUTH_SALT',        'ZB76TGS;uzQNM*3cr`sO|^+s1)1jY(Us^|^x-wCq( a-S.<G+P$LnxH.5Ygl2}FQ');
define('SECURE_AUTH_SALT', '?~=3F_!mN.F|9*wwYWN9d-`>Ww@K?8n>B[<R9+`ria@Bm#%Lp-yv{2J?>}ko0<J)');
define('LOGGED_IN_SALT',   '+JJmZVQTTYBe2n4%M-es1Az,{DtG`vUt`w7s%tsyX{scN7vvTdm`/`r9f|a#qmYb');
define('NONCE_SALT',       '!fEb;eb9,WYeB~2|2 >%idSE+GSB=b)[iWqZ~G.6Il(lHJ}VXp9->7b-7-?|s)}E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uni_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
