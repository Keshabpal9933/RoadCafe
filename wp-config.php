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
define( 'DB_NAME', 'roadcafe' );

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
define( 'AUTH_KEY',         'f::0vi-;X4xL@BH8y`zR`q_>(s*eiKqdJ/abwF]4o%y_@u[ =8gZykv{${v.W,![' );
define( 'SECURE_AUTH_KEY',  '@<BFTc@B}q,I#xNLs* DT!GY2?X-t|CO61X2WKGT?vF,5f mnp}EV$d94g|DAyxZ' );
define( 'LOGGED_IN_KEY',    'G5D+.g&A|vSo8IFqm+>{=7;``?~(gn/wQL~No4p(Sao*#.}t!Fy)rMq<1ZhK%MYJ' );
define( 'NONCE_KEY',        '>)F4@*a+NJ2E586JRXA_m1w*&w!Ge7szY6pmw6H0ca/y#~G[pR]2m|zh_e*n0+Tt' );
define( 'AUTH_SALT',        'x*kgH })p~o@3/((!y-mBPP76YJq#(VN7E.PF<_%Yo_a[Ui#,BlQ;H%5K7<Rg3kF' );
define( 'SECURE_AUTH_SALT', 'gB@a(o8F37}8mQj~93v;KmP?c0AX^sE]16wX&`g5ZeO(/O-P9W1zd3)5m]x2&,,T' );
define( 'LOGGED_IN_SALT',   '@@Cq`pUbz2LQH({kj#b=`s.QM$pF`Z2-#G3:wmr3_N=#w6]r{#|=f*%qZd>IXsm*' );
define( 'NONCE_SALT',       'V,92G(yq200Ntc5HP/!^LAx?K}@Nd}E)|E &yu4QX^!X5F<KuS!j?!H[+?8*?}:/' );

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
