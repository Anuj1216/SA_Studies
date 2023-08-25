<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sastudies' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F.}{S|Bgt2lc3<6i*;7<&AuFCW4&Duzy:q*G|+eRKwsY]ED,[(G<QDL2DLvV,y!E' );
define( 'SECURE_AUTH_KEY',  'exu*Qh.d&S<G=,9xt)eJ)ofy9)5Ma+H1UJK%-ZQ=_;Dv)CRRA:dy9{X)pSxVT?](' );
define( 'LOGGED_IN_KEY',    ' q.hv0~WirWC,F-nXECt1C]J`De-I<)t&y+X Q5q~lo.a}<cR]+IPQ=hnf~*(Eqk' );
define( 'NONCE_KEY',        'Zg3!kgXu4f60$R]l+:4eKLD!<j85.MpShnZg_. jP*W9s$uQDj!Mkk~dCT0S~_p,' );
define( 'AUTH_SALT',        'F3,S.VdodjlX5/_-w$7GaV4#4]?)5!v@:})bvTDB^8|Uq9(:`}j/&,ne;R.QzL| ' );
define( 'SECURE_AUTH_SALT', 'V^robu5.SQ}lW8{#GWS-RM1JKdu/N+v%!WeYg{xszUlAP@P?[S&_,]PkGX9O8)_j' );
define( 'LOGGED_IN_SALT',   '1/SV62%/x!w+y`RpQ=[He!!5NA/<:Z=/E!j=z&4JjeblCaf4?!`<nGbI1]H7E1Q7' );
define( 'NONCE_SALT',       '}ox8Hxo?T3DdhTKO%_O#vf<v|KWh71$%O^eP:.vo:HAcKp@}Xm2NKvy$BGpV<;Pj' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
