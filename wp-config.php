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
define( 'DB_NAME', 'cohen' );

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
define( 'AUTH_KEY',         '$~z#eEvahVWl)6|Mn*&$)kCzXO_]_vgnwWCVUGj23ig;1U6n=_nlPj<rWVYd#<;!' );
define( 'SECURE_AUTH_KEY',  'v3-r}(Qcaz9s|E*K<D-GfMyf!Qn%O=4 iaL3@1OIVuW<7}]h t%v]x o-0&V+Bus' );
define( 'LOGGED_IN_KEY',    '{TQq-ybks=Xz53Qclq#iTjT,A~:s2`&5},$_Z ;v[9-aK=l`L%WZ3=Zj/0~q&[=0' );
define( 'NONCE_KEY',        '5ZjdF$Uw[Fem7RWJ~0kX[Dg2F97`dt:QV<#|?.SuhmqJLKw^]ktYhN.dhw<2I#vb' );
define( 'AUTH_SALT',        'T{&,o z0_ 6k`|L@D%Aa&>v>>pP=?^=YYk]-/h/0fab8xK*X*TOgn%;!g58F;F!f' );
define( 'SECURE_AUTH_SALT', '6_1d^?!b1q}AI)89C~ocDL:#;4V)jk@zEb@3@EsU>7< zZ}&HHjUO;B52=oA>sR ' );
define( 'LOGGED_IN_SALT',   'jc-lr)}Od)9R:?M G)hb^gasf+A1isZAN-hO63>2x3zpsTKpGU>_HHVahCKw^C{X' );
define( 'NONCE_SALT',       '(iBed{t%@@<B(gM43`G@+Ce?0e*4z#p!n,(ETe5?d&C`c)F/#[! #^YTd:~dB#[n' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
