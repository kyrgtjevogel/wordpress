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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'H=e&h*lp6T&O1qbd^ OhnOj&Q#,dhV_X[Mw@t_0}C}`U.oY%Pj_}]#_&D@HO#&Za' );
define( 'SECURE_AUTH_KEY',  'b&-bF17,T$mE1Y~hXG}) 0=&&m+)5|#=ORy58|F<X@7d]%3JJU3+[HTYTcZ|,u~V' );
define( 'LOGGED_IN_KEY',    '|VCQdOq#-itXXhtXC%DLD!~s#gAzSn2brI&`J0{jL~+TfyqK.UY+#beRKaf^V.A/' );
define( 'NONCE_KEY',        '@f[ON*y E%|19_q op)U]boZ u#|bnI%lhP?%;-Ng9RgS2K,3I./Xq??7Es|0A[J' );
define( 'AUTH_SALT',        'u@!/YWy-q,qE`{FT?r!(N%F+:2F0t}I2#MOrkUSuZZdS~|&@}Fri!`OA6cC3$I$`' );
define( 'SECURE_AUTH_SALT', 'F=/alq&mSj_]%iwNxf}A/x??P?@n^!>xmhipej3CHqd<,cB;2PMn(XJm7$mU@1d/' );
define( 'LOGGED_IN_SALT',   '7Ql2_SGJ[55u-pA0.-zb$L4 WUQRDF?>!6)#kULb/K,KBQ7ul[mFa[s2w0^@DG%j' );
define( 'NONCE_SALT',       'p^g&Dm*z+ hKAJ -=S[fQ+_v.Y6rersr]1e mTcsXmIns5ur~JvK6uxIy)8;Ois/' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
