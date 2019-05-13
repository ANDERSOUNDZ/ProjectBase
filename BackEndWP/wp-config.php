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
define( 'DB_NAME', 'wpprojbase' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'bi0s0M(}k+}5FiJqrI3i.e.=ZWY=g~EGBB{1Iyja/75PpqBtI5&e-[ysa>iX8m_W' );
define( 'SECURE_AUTH_KEY',  ',OqjbOcJ#uzEe(S!e[39qVHYmqEwvt7S:6#$/!vMSrALW<{8mj%`2!3d1l)hP8AG' );
define( 'LOGGED_IN_KEY',    '68 t#?[Y$Ff0`]}?w7+]X4?u,>R]~:|<kiSkf*CN=Cy|l2CO{.ZAdQ;?6)Z=v4Wo' );
define( 'NONCE_KEY',        '_(X_k~Yx_^|t+,8++/d.OZ)uFs714Qr%Pv{`K*A.NQZ`u+_3mnhHpayZS`9Y]r+G' );
define( 'AUTH_SALT',        '-f^om8/OT?D3qPqJqAZ#GkxPz_5mw.8* Ne:/&7V(G#+#_+r)~|KFj,.zBtpLe7R' );
define( 'SECURE_AUTH_SALT', 'pA<A]48z}yM$T;}wQs;XHL-_:_*k?r~4B(0[Uqw=]eT%+dbW!F]o_Gbc+l 0|_|{' );
define( 'LOGGED_IN_SALT',   '^C*-4&#QNmi>2PwFaH8>9BDE;wU?aNJ>#mng]hTIU0y,9`,WYLhod-qI1C>| Coi' );
define( 'NONCE_SALT',       'GH4~_}32P|B B#2TXS$AQaroAR2+R>.zWuaHmW:E_jPk%=8RUD)Slou=+VarJ@JV' );

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
