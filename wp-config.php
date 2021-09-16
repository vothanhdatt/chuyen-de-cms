<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress_581' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bH@u,,XWs#hwPSC;o$Y;(]|y[bp52c]uoM><4K o6x@YnS/c3>n2C<oR~a L%ahO' );
define( 'SECURE_AUTH_KEY',  's9!vFU6-A@.yIELtL;$ya>0f6:]lTYd5H.8@PuB13z07~JCfl&NCfCQ#$Z5&amTO' );
define( 'LOGGED_IN_KEY',    'jv)9gX48<&k^|OA;cjR1>oi.,5SsRvW/h>6QNaDk*6@]T*D7GWMy?j}|Jmp|bqGh' );
define( 'NONCE_KEY',        'qJ#^$E.B52-3+19$},LW<;N9:z}-gM%_Nf,}k;=kEhsTz[?!yqmL_qtECGr?|sV(' );
define( 'AUTH_SALT',        'RE22UL8w7Zv1}qFc/a-+&,~$S3[?p9$Z+B=Tw{ 6jW^A%re0>US()*havmnj7zXD' );
define( 'SECURE_AUTH_SALT', 'B>C/N?@TZ+:P1)Qv()Li_~AT;v52Z]aYZ&+M)zE,00NI_gH8H,u<V`3qEsHz${34' );
define( 'LOGGED_IN_SALT',   'nY;LQ3Il}^;l@c,o-H)ACl+uWp!I![M+F]x12@wWB=XcYS~NC6rVxRYBz|44hN)&' );
define( 'NONCE_SALT',       'uqx+ijoNm-et`eI_N-lc48WlGgr]c2|Wglk7ViS&[r4utn:1VS5A2;^Dh@DqX.*5' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
