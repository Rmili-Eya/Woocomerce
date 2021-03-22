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
define( 'DB_NAME', 'Sport' );

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
define( 'AUTH_KEY',         'S P=gVr3KK%_A&$<Vt`:wj sjg[-3O.5-/!s?n2mYf+uI7p]`;!6gFPzl=CnM5kK' );
define( 'SECURE_AUTH_KEY',  '45KhF-mtIpri WkT[g`aB|Wp~:=9xBo<~T5Fy#?x902i:l8O7#L3-xnsQJx|O.HK' );
define( 'LOGGED_IN_KEY',    '{ u$ldmfN.w3e5Gm9DbNZ0mO[bO+yhJ|y{W>{}`Z%0&rM w<F-LSo:7Vw~u7R8d/' );
define( 'NONCE_KEY',        '=I[$>GmH$t]6Yxr%x.=SzTHt0gyl :pr!]1$:V!}C_m,7rSh]b,3 [taAsWQh P]' );
define( 'AUTH_SALT',        '|z@w}}+2L5`X3dH#(X:T=+,Fr Fc*(VCpubjj^7Ax&SO_%h^NT>4eG},apQm4rYR' );
define( 'SECURE_AUTH_SALT', 'fh-|v%kBI{G:_VOo_3b{gIkK<p$=tPZTC]RzvIeNS^ZR,/q@;eszjB?$<]gH$myl' );
define( 'LOGGED_IN_SALT',   '}p3t~c=;T3b;RPo0affB_px&#HxC1%QzviO|%YxE>./}R&N>|}X25NAlBkqwIa_?' );
define( 'NONCE_SALT',       '(vS;j}Bu.U(Sj5:OaVWtY+wUV (2dxyumNFhUP.wN6s-P:)(<3PtW^iWKLjEZ6C@' );

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
define( 'FS_METHOD', 'direct' );
