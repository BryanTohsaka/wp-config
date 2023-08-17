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
define( 'DB_NAME', 'aliscomm_wp_v8wq7' );

/** MySQL database username */
define( 'DB_USER', 'aliscomm_wp_vn89l' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tim7y6f%%7CuP*Dm' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '119%!@C)h27_Bu993-M3--2d[+SkSC4E&WbNcrC--_-0Plw-[GpG(ibKg1L27n:7');
define('SECURE_AUTH_KEY', 'yHNvlK*&@&T*!tX233OP~/igze9|9mv/TUOo9aB:Xpf1A-4SSthW1g-;nm8%zJo+');
define('LOGGED_IN_KEY', 'K4|3_56L3K_d-rr33X7V&Hy(s5NfH])@/V6r2a9HO2)R6SKJp-8%&tKsavi|vChi');
define('NONCE_KEY', '36*nw8JoYCfAeSF(~!I|!1bE(y195_083E@7@dTPoI825*RXa~_Nv:4-)5NSa@%t');
define('AUTH_SALT', 'i21i598/!-EI1il&;eg4+r2:i12@t+Xc0UtH]2PS)0t:~&bK538iPi&G2J7#_L|;');
define('SECURE_AUTH_SALT', 'j&-43XhH&_98RhqM5D!Ke12IoVS9eM;gO5IV58aSnw_LVwX-mVv;47EXb7A#4953');
define('LOGGED_IN_SALT', 'I|1xO6b|M]z9MA]]gMza[8&xvFb6T4UZb#I37E6)[4*5_26S)Dc:61:5Tkypk5Y8');
define('NONCE_SALT', '@[940WY91n2c4&0E7vzTm*kfw9k;)488v#PHBKx326axhl1nq52A#c8;4d]WC0fV');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '2I7MY_';

define( 'WP_MEMORY_LIMIT', '456M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';