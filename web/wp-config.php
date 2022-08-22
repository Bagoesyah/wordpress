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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'bagus' );

/** Database password */
define( 'DB_PASSWORD', 'bagus123' );

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
define( 'AUTH_KEY',         'VO}&,WfH~v8n>G,CPrC){e|o&g.r #9(2=av1qFz%Hv6Z:XR~@TU[x&nChlL%4T$' );
define( 'SECURE_AUTH_KEY',  '^9Y>39o$8o&ld`2#Ek*s9lEY&BAWdP:#SLL4gL;7N2J~0j!EX,5q:n>9GNDvhsL]' );
define( 'LOGGED_IN_KEY',    '*7&6l6~<;Rk!;Y,aM.j%l|$P qYSzBlE-qn0]Ha|iDQo8:_9XLoXTHB1ghb~*8Qo' );
define( 'NONCE_KEY',        '&D:u%D59Z>L=?~nk!K#m(S?|3j%6i`G+mM.;|YGE]W{c0PbZ9j*2JA;zz2u<{TdV' );
define( 'AUTH_SALT',        'AJko$=|{=OAl,q1+_ZdHMb;i|PMz 5aBWbhCo>g(H52V#r$ >#Prz{G%DVA v%-R' );
define( 'SECURE_AUTH_SALT', 'Y`rAmLGYl%{cs-O=79ou9P$my3-G_vipDj F_^h,_;i/Mct| O,pTfMB8#-snXq7' );
define( 'LOGGED_IN_SALT',   'UQwgKPQU$R9=:{/GP?DUMNxn+[q1J;CC721OQTxS4{2Pm7}z}kCD,KL%X;Epu>z1' );
define( 'NONCE_SALT',       ')P*>F<58IVx7|/EgV;7Oa[ss_TQbT6`U^,U65f2W5o/[tX6C19F Mw7}>_Iks,Q=' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
