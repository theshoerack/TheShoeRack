<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'dbs4272278' );

/** MySQL database username */
define( 'DB_USER', 'dbu1066670' );

/** MySQL database password */
define( 'DB_PASSWORD', 'RFfCpKIGPTPPaCCsomgs' );

/** MySQL hostname */
define( 'DB_HOST', 'db5005104408.hosting-data.io' );

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
define( 'AUTH_KEY',          'p{MlZSLuP7)c=Azgb R_tT>(PV1a Kw;/7t6WP>n,3Y1lqG!x0iLPj@KNetl?mz!' );
define( 'SECURE_AUTH_KEY',   'r:%hl?PaMBk&U>Xm`;+MV`qem2#js-S,blr;A1{7*9M(g:,qOoXIKFF=*Vbz{Dmy' );
define( 'LOGGED_IN_KEY',     'eqbDE8uox+~VJ|HzI^8/|zX;9F6k!VJ;Dh&;-}5@VaUOGV (**`Zn{AAVT.g_>=O' );
define( 'NONCE_KEY',         'GDA9/~+AN!M}+?d_B9Fi4#^N`C%#bDbhEXZ]1wOsotwP[nJ(&PcoEQ:xeXDU<:?5' );
define( 'AUTH_SALT',         'kX-TO Bs1v5Q`U@#iIBwf=^6BA>:l_D9+#]uxci)%$ah.ChFEqwJ(v,f+~-|O>eK' );
define( 'SECURE_AUTH_SALT',  'G24U33OKytrvd$@(EW3ok{aTOktL}qKN-p%:^l]4 e^iL`4VdVvmkUqa<NR))nzV' );
define( 'LOGGED_IN_SALT',    '7u~7W_JJ1MP~i:;Sqy`+A48r+S|lEA:dj!.zRU^@55V^V<MR]uVqZ|=5:=^BfkYU' );
define( 'NONCE_SALT',        'Q*GgQ5t[(ew+n6Pm=0ip7$[Autz0zJ;78?|/61vGN`vsftrTq%/63{gWwJo^d6l~' );
define( 'WP_CACHE_KEY_SALT', 'b]f6>%I)+Uc:(1r%&_%~Lf[knb;[}G_sL=Ky0<#-vPG-r>)rMUdhiQuGro@oQ1d{' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nrJGPzRA';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
