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
define( 'DB_NAME', 'happyhobbitwp' );

/** MySQL database username */
define( 'DB_USER', 'happyhobbitwp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'ssMf9Rp*P=wTJ#@xYA`B>tX[(H-kQ_2?WnTg,Lt//P4ci_Zk??tOyj8G+aT51tlF');
define('SECURE_AUTH_KEY',  '-Li}#`<o+#/jrvBS$..8%^6, RHY)epM&p4[})aY,4{j8@`9{JsWOrp7K8SZFAn=');
define('LOGGED_IN_KEY',    'tf?=yR:$FoXn:#]1#!F4d5*1u7|n;3QH{RlRXy/+xN-J+L)*e^b|Kb5Rk:m G(39');
define('NONCE_KEY',        '+@dsL3=YB:v0U8ug$ay23HofM)GG>nj-TKFZM1@Ge|fyD|7;6;2QvSl[8|`*f^T9');
define('AUTH_SALT',        'ey;<cjw!+mDmBS9@~<zAM)3Ys^OR APu}I!Xn7|6^|~O&>mUZV?FUhH+nxYuid|n');
define('SECURE_AUTH_SALT', '9=(OS6L{iyGTCwhc7D*gF9V<1|&,@TOv)],o&-:_Fr#b7eV#1kB`6J/~ Aq8j&&C');
define('LOGGED_IN_SALT',   ',rhB`PW=;:3<<0qrjk/.ZI/6D?n&w2>Am!!YAJ0c?A_+xygXo(7]SBhA@J0rB[I-');
define('NONCE_SALT',       '(=EE28*BGMomnl%aH1FN!4i~.s3U+T7kI[az4MEckOABZu8A&YvW]C)5N=i-385S');
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
