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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpsample' );

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
define( 'AUTH_KEY',         'KG88E)bVC.ygwTW]-pIej,0^62!!R)nx1kK=0]2c`s;5%}}%cO<,PZdR.4^Qcapn' );
define( 'SECURE_AUTH_KEY',  't[$E[ZGtlv&;9KG7IF][ `7J7.%*3(pAm+.h*OSUV~&D=J$_c?J/i6|eyAC]8Njk' );
define( 'LOGGED_IN_KEY',    'G5]{Gwv!&,t%@mA%3ki5hm?2Iz>g~kYBSINF%C8_J1;D3z8%br ~Jt^~ns3<DFVb' );
define( 'NONCE_KEY',        'F~(hY1%hs+ms{hI55$;Km]_Yk/n^u7!jG1>_xqJNP8BTYp[3WS1+wlZKNEtYFi`7' );
define( 'AUTH_SALT',        '<M]/L[!t0p,2Y*.5/`*#>arS?X>.!tUOeZwq*R+aiOO}E0 Sxn`efo|[P}>50haZ' );
define( 'SECURE_AUTH_SALT', 'Lm^,GJOH=8Dcl9JBR9Ic;=e#T!=sng4m/D>l0tx2yx<lJOj{-_&#} 9s9IfED)pO' );
define( 'LOGGED_IN_SALT',   'S.P3jieYVO,5]qZhLXOQ0%SzLm}l^3XJ*V<1./I]s=hq*=_RCt^xHhE;t*PJ/NKN' );
define( 'NONCE_SALT',       'Q NqcM-DtZ<SCv-+^Q5$sG#zLVbhsyfR2?yR]%<9W>C%RV25m}_Jfl)0ZU^.%_h[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
