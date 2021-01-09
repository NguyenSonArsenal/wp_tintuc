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
define( 'DB_NAME', 'v68_myblog' );

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

// list all the queries
define('SAVEQUERIES', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '};u5-!%{ixMo#Y7@0li]p|>~=zrzN&qhypqq;{uuX(7r&a?qk$Ne9M0|<Qm`oi_J' );
define( 'SECURE_AUTH_KEY',  'CB~lC7z6{8`&{x!|z/;Gl`b5~rlaKYX4^^GnAnhg%~i;jWb-<UE+l%w:[D%pkOt^' );
define( 'LOGGED_IN_KEY',    'yy#x/&.(Gx,/.;S;Ov6>?L$saRRP`_60c$fSjT/vZ]CONhBNEkrUut9],9h`V&t`' );
define( 'NONCE_KEY',        '=d6:Es_T9^TYs,90k8CkEG|Kk?*TGVf5|?11F:vrz;M.hnH-QXv10/2*tTOgZ#l,' );
define( 'AUTH_SALT',        '<PP}my/aA`f%3t5t4EQ}mOI+i%HYWW6Z?Jlm0Bs+EU*&Z@U]6GW,^D5Zw rPjvOY' );
define( 'SECURE_AUTH_SALT', '0dvek;#2F!sMLVUFRB]EsT(BM_5bj;!zFUU6M|w@Lu&;qtN5j:ZM(UPJ=X22<uMG' );
define( 'LOGGED_IN_SALT',   '8LduUf0O4qSGkLCL[)l%Vx}OBIupE,oZ+K_f lpvj0+&!JG_kz%jT}F5093Ya9&n' );
define( 'NONCE_SALT',       '_KSBy-!!~8W;Qb2$!}*17K1uj(B9UD~tj^^KN/kI9;cWkz,L~&0wbERo~}Fktx6S' );

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
