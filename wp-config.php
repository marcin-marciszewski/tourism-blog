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
define( 'DB_NAME', 'wordpress_theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'marian87' );

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
define( 'AUTH_KEY',         'TSM.AXsujyC.0KInPQqv7K@Pb;l^tw/N<OR?MiRP/J05K?ns3&)N=GGijkLbEJkh' );
define( 'SECURE_AUTH_KEY',  'JiL/B]Dwr5{,r+|LNUiOT[_:S=tx%q}.w$(M8XDe`B+,vul.[9iP_X-/70YGx+rQ' );
define( 'LOGGED_IN_KEY',    'co]*#|{ |msswPF#IW]TkC0dGz-E}lz*=+Wy[xE@0^XtO,#ah3-}xcBGS2[I3f8j' );
define( 'NONCE_KEY',        'BYuSyf4/BlaaU16XXb`r{dNB%^{OuL`)`OG+kMv.nu[$L87}}~hy|QiV@rV?f!-<' );
define( 'AUTH_SALT',        'FK{`[[$Xv>*T)|<^ULgbjH|Ikl`1wn6$sFToj7D@0Zzq#kz~L{F`O<)lB@OuO/a2' );
define( 'SECURE_AUTH_SALT', 'vRvGs8`Si]HpLf>2x=Xd<8_f%O/{0ne(Gbc ]XxpWqM5Z)[~qJMckRos#`XEMt|[' );
define( 'LOGGED_IN_SALT',   '+x<B@5_o.m}u N(/Mw?b?1fte|pdAp,@d#VWEH005s;M(<e([O{mjTbf. Yh1O<J' );
define( 'NONCE_SALT',       'QL(Vr-a!]TdMa<MJ;=nDt+Oe`]H_1N`d=RWBQ@^4M;BB$vW><esSE*o4(BVz-0:.' );

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
define( 'WP_DEBUG', true );
define( 'SAVEQUERIES', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

