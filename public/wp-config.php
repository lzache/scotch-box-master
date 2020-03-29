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
define( 'DB_NAME', 'mysite' );

/** MySQL database username */
define( 'DB_USER', 'mysite' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wj98OVL4pwziIjYz' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Ttnx;5xR`wxpACGIgsW067BN&rAI:=H})VN5l<;(`;O_t$Gf$-yO[_KzN~`$l3P&' );
define( 'SECURE_AUTH_KEY',   'nNZ$|2q=O<y/gb:b&-AC89Px1p(6[{Dq~s}Od?.N@Ks7^{8j4,J- n-#o7r,GJRC' );
define( 'LOGGED_IN_KEY',     '<(^#,8D5lBw#^`hn0(d&I!dShg;G:.xN<ZA~R]X1c)Lo4|g1-IaWQ+z@>r}JQblZ' );
define( 'NONCE_KEY',         'JzG`}`>2vU]y#-KLajd;y`_`+N0`X,1KcjpJl#@TfqmiXX[;7b;3g3&=>X$o)uxb' );
define( 'AUTH_SALT',         'x?TohOif_kYT1U-~*K<3U_X#%pWQDM3T1bkIa4k,9-OWgzQ6svIH7U/=dV&t1LQp' );
define( 'SECURE_AUTH_SALT',  '# Ax`12M%[p)8t^fj7h50S6g$vC19RZ_l2xT*Ul|h|6}rIdUc4%xASl3HkSd#Pw*' );
define( 'LOGGED_IN_SALT',    '4SV>sdg+(Ex]>|&$|.tvz1=g)Jav{J)X{MCzH.WJ5dJNdQJe-2~uG?IVh@]e7Q<E' );
define( 'NONCE_SALT',        'WCh[<HpZy o&IFv-xF%I2w&g&KB|y~ MP<-/n,XjSe_~m~{hpIMtGu! ~DeYG=5a' );
define( 'WP_CACHE_KEY_SALT', 'B]]VZgV}t2a3gipIHFY0P< q5H`Wx[0&77 ?fy7^9!qSd?NnjK>SahxN=9mpD0N2' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'week2__';

define('DISABLE_WP_CRON', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

