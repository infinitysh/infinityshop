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
define( 'DB_NAME', 'am' );

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
define( 'AUTH_KEY',         'QhE~xjlL?d](!TM)5gH/@o+vv0Hoe`!C;k*r>p|vU$ 9cij4QNwk#58_<NG>>C*t' );
define( 'SECURE_AUTH_KEY',  'p5bnfq~U!Y9K{#A1a}YHrMfSuZupSb]V:-FK;}?.vNQ*b*F*o;2y^``4.eK|=.hT' );
define( 'LOGGED_IN_KEY',    ')gPDT>W:^b3@tF6rbLNX68aC?MM/^d c+eG:x61q<ujym%XL9V3+Nch4h</h6<4h' );
define( 'NONCE_KEY',        'Psq4!bDuP70@Y?o4x.`XDil+YbKz=^m>Y hx*Hg9!@#B,.A6(~a%A3Tj`{j=Z)Xr' );
define( 'AUTH_SALT',        '}396$L>TC}X2|el9]/K?j7@3/v MO-Iv]{PZ(mO%Uwn1PDwdP!]LR()r<tGu]}K9' );
define( 'SECURE_AUTH_SALT', 'rYW6=J_Mvm2hBk#%F4h>pn%i0=+j%JPPG*yn`eV`U6[dZ;tN<f?]oc<P$Tk{djE-' );
define( 'LOGGED_IN_SALT',   'uzo-G2pLm(Mp_q~ W9%g@lE4/m%yE e3_T!Vp:5 2+M;wbkb`!~#Hat8I?KE=Ozh' );
define( 'NONCE_SALT',       '`?&(q=@tza(2=*lRD5|i/yjg/?FV<+?jogpYmeli&p=^)!uBCwpq9X9uPjn_un6]' );

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
