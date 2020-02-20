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
define( 'DB_NAME', 'clicknbuy' );

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
define( 'AUTH_KEY',         'SWFV#k|=?kdd1UA9<>2]mpA.xEC4_Y2&0J`7mM)H*!*HM?0SJ%Sk>9h|q?n26aNs' );
define( 'SECURE_AUTH_KEY',  'OW=Iyjl0I^)BZH3`a8@&~ Td&v$U:;*~nkV?$o{}I:VTQ_/C:@/]eURQAh~:=%IU' );
define( 'LOGGED_IN_KEY',    '+#5Z0dA&FB %K]!.Ru~VA#Bi|1$Dcl3.nfFjet<TVw)Z+d/]n^c#`5`CN^3y~.7X' );
define( 'NONCE_KEY',        'VS1 @`i+WP3?$`=F49#m>TuWK6<KGyVwfY<-ww1W!O;;Wk(A*BqH8p9;%2cq&qtk' );
define( 'AUTH_SALT',        'FwzF/j~JrFT|:Z&0sFG:[|mtt7huSQzpkWJbBQ]=D:w!%X{o[mi%ah&_2E]VkML}' );
define( 'SECURE_AUTH_SALT', ':d&Fi9iv9?u!iA|^@qJY_}|*m2)rgDH+E9SXK7AnF?Y>dxa8BkQLy5|TFqx<]_zG' );
define( 'LOGGED_IN_SALT',   'X,k@8<iC?fqB|d|OUE/^d{;zj`ebVDEng34}4k38TCta[`dR%;8VeW)g8ZF,14+@' );
define( 'NONCE_SALT',       'cQgi/2~l0OmX8Mh,_yRdoC:9G]?d:ZHE?J[NP8[y d9,=[nho5Vv*VqS.X#C@a[9' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
