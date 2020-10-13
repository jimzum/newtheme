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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myprtsuz_team2' );

/** MySQL database username */
define( 'DB_USER', 'myprtsuz_team2' );

/** MySQL database password */
define( 'DB_PASSWORD', '3c_xNpKVo@gN' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`h$R!2>!cIN>ymU2qmE)9`q hu!Qh,yOo(,tz[JLY;&OE1GSa<w:!|C.l,S>vK~N' );
define( 'SECURE_AUTH_KEY',  'tI3}HRR.8+*my30F5JcRsa5FqPH}ITN)A5ojhyy<E!5.g3RWFn@%!9zgW}*Q+SCC' );
define( 'LOGGED_IN_KEY',    '=PVt>y[(5LVG,MV8$!Bq27NLh1pC2G>)X-sfA22qnY=a2EY{,ywm|F4MoJXw_Z.^' );
define( 'NONCE_KEY',        '4ga)4x0<RMLkW`QSR6kGpu=EFWU6M< JP$DTp7D%lbAK|Tllti1-s5K>0g@1%;A)' );
define( 'AUTH_SALT',        '5Hc`A1W.5>=]Wg >>#8Q%p(5t[9f3}B5)@<f7hJA4Pot(a-7U^-?}p7`Ek$;BwiL' );
define( 'SECURE_AUTH_SALT', 'I)giiI{*JL8L(0d3#m,`Jn.h1&HvJc3GKlx,7}UOHfxg6dt/c/w~-&J3Df_o5vN-' );
define( 'LOGGED_IN_SALT',   '0yWAL0}c*:22h+UaP}Xh8UB&(KH._y(VIFZ0yF%2wL$o(`-H?l@%hC1d[9 zE;Rq' );
define( 'NONCE_SALT',       'I=6fb!y&?yG>)8@)R.Q/}w1_!:]z]eL8JxCzmv)e2!o#@NQGhB#u$#0YF-WOMo!/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
