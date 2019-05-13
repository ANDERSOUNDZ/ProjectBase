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
define( 'DB_NAME', 'prueba' );

/** MySQL database username */
define( 'DB_USER', 'ander' );

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
define( 'AUTH_KEY',         'ZheW.~@CQE{yyYv}q^Hl~~&S=;2 : 0&/}xH}Qd+0;xGjbe*nXY3wnmJ#s,s{O>/' );
define( 'SECURE_AUTH_KEY',  'gzCT2O{ UzNsll(w Hj1HedWZkXAr*%F|2PZaiX#;!f.=|~Lp|t[5xsUA]FTLr<f' );
define( 'LOGGED_IN_KEY',    '@My?%;Z!+ckDq:@*>i#{u?e|8;zKGNyA*oA1en/&}RI6mWJ#aL(P$o!JA`>B4YOc' );
define( 'NONCE_KEY',        'N@e66h5oz4.<&=j]>u:ThV-?r:!(D_X+eL.GaZi~Y$=LSY4%[z58,_4ujOrDp&HO' );
define( 'AUTH_SALT',        'S)hkd,~L}Bz,l(cz|~^G79Dm/ZP!5%b|& ;GeOzL@8xQybaJ}Zm$dwT2*0-Z?J27' );
define( 'SECURE_AUTH_SALT', 'YjyS#7,*ozoJOv#T0JRnw5a>c0K7l<e_oT$MX_RxE%=c<7D7*1$B5<8~9oWZ^o=x' );
define( 'LOGGED_IN_SALT',   '7^vjL=6]%D3jBcAYZ|d`2,v:pYK|X6dzg3ur~%@No{GI&ot^>JH~bH3r1%.-0EwA' );
define( 'NONCE_SALT',       '*YTWga*EHX|Fr}IKMvkeaJ71d?tL=1D%C07hqRY ^YRI_+d+K|PFx+*&1*z?R$hF' );

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
