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

// define('WP_ALLOW_REPAIR', true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|580^RQ8mf8:x2%n+c3aG~ ag<%0oR7dNfPVY{qb<wu@%Gf~Ic+~/,t(y>tetywP' );
define( 'SECURE_AUTH_KEY',  'q=BbP`<(WE2OgHH=oc~/wwRTj!3.[;W2suVmK1jLu/KVmS#9q0*_ue)2R;a[Q#P>' );
define( 'LOGGED_IN_KEY',    'C@f<K00oV~|^u4ca.ZQ=JAU<yv}QOSc3G{XlOinKXQKQ W;HPbW LZK,*0F4x%ws' );
define( 'NONCE_KEY',        'U}Xv!Vp7w`6j:]s N7V[>f;![C?%/X%.`LI<_z-Mll$<*?)}d8TCM%[S<Nb}GzjQ' );
define( 'AUTH_SALT',        '= T9xU%e}Aw}>nq[zisL:Vp._MaW~>jY3_`4],}JHk&t.FMb0V.(-4w~cF(l#XPK' );
define( 'SECURE_AUTH_SALT', 'o!rn(+[D*c/1)F_k^(#Lk!jis_B>{E+v{{PK>JT`t+T*>yG.Biv{HIQ t!B+f.v%' );
define( 'LOGGED_IN_SALT',   'luceK02Ab6QTyXJ@lb:!QG:Jl&+`?BCkZ/D%tZ{%APb?UC{TpJyF:w}d<XO~?!1#' );
define( 'NONCE_SALT',       'Z$rwl7 U$$y,sMWDzCN|rBP_oGiGeG:C=ho>^}NhK )|TEMmm^{[;x09Ee]Z[<=4' );

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
