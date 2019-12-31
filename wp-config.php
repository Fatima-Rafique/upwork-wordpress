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
define( 'DB_NAME', 'Funwei' );

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
define( 'AUTH_KEY',         '$pu{Y0BojG2[Ql`qJ-P{C]sG$>Tgr:2gncU5ZtD|b[HnwM9Bd> ZO!6TfmIW.w^1' );
define( 'SECURE_AUTH_KEY',  'l}uc.^YMwJ;I#Rn:5gLqq?  G+?K|cu_o9~^hp}21X?cUJWMLv}ZRd),gaCeF>Wp' );
define( 'LOGGED_IN_KEY',    '2e@n%OhYZ),U60<Oc9kkfe-oB!X}``%DR<e-5G%@y)*q$vbt]?:O{9MExj:Wj_fO' );
define( 'NONCE_KEY',        'RrTU+K/D/fDEAJ7V<G?3BkK>ND{NckeR9VR53=0DzjJ$)m37==B>xMALJ`+D:eBK' );
define( 'AUTH_SALT',        '*>/=r8kee}!Q%h+0,$<5dy_:S<KL^DLKZ|`A;4IAMD3RErH;[QrqK?I(w)27+3zV' );
define( 'SECURE_AUTH_SALT', 'sRq4=QEW>~HN5E+^<[xXN4hlGP>d=Fhh>3<])F8aKPgruFH9F|bYFX+@obhWZyhx' );
define( 'LOGGED_IN_SALT',   '$^KErgi#<@tqvfDK2F6r=wdx2(H=RrBykhcUh_GZn*.|#BIE0^gLCkt-; ^8V2$(' );
define( 'NONCE_SALT',       'vf][{lm63lLm6a:NeTGHelQT Aj#`vyaZ,@q40*2ueeY-{%vjgAW${76=XB.#9Jh' );

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
define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
