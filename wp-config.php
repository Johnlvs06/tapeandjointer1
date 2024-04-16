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
define( 'DB_NAME', 'tj_db' );

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
define( 'AUTH_KEY',         'D*RVz~8)1$N7QUW+]#uw]t2g,ujq1goA z9Q`|4~7E+?K0-b}Vxt&N6Y2(Bl)^=/' );
define( 'SECURE_AUTH_KEY',  'GuAaW.{:{!LE*#A_kJ5Yl:9Fy8Yy*~Pc%$Aqam?Xdf=zZu0^=(v:Ez%i$2<iqZoT' );
define( 'LOGGED_IN_KEY',    'SCK`},SoRP} bHM_+nHyDB=7kuYCf5J2@EjKwgk,5yxa]l}KhMT^oqTp*?j*R$Hd' );
define( 'NONCE_KEY',        '<w:=(vFEBbW[AY.hpyi[6tWT0ShC}btv!]9ORU&qRZHK@S<;_aaGq1d?7w4&2t<:' );
define( 'AUTH_SALT',        ' [OB.E9P(Gk#,GXF/g 0QXdCk=Fp(Z|FTI}yi>ZVNQgk=$h^&r4}w$:}F^}rnzW.' );
define( 'SECURE_AUTH_SALT', 'Jb>[G8@j52EauXA>LPTkpsN+y78MVGeC#T 5%Qq04uwBDHvuYN_?P}<S8):v4_z=' );
define( 'LOGGED_IN_SALT',   'O08t_fo+Uag@ZZ#o@^kQB* ^#di64BkRG:UY+8L9ij &u3g=a+3}XIrbp#FeRRS|' );
define( 'NONCE_SALT',       'bxKcz=I.p=%#>ov)Dl$cctkuQ4#%p2=m|oBo]rrsUpXVxF1-z+?a|hcyCwo!(`Ro' );

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
