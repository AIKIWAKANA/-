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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '~gA@&c$6lipIe%8UZ(lFq.,T<,_0,$zs>h9vcYJ3WOBtL3 [.L%/yD)zUMh!ukSl' );
define( 'SECURE_AUTH_KEY',  'w{,4R=_!hDa!OoW7F8rU9zANmpL!?Jw3^c^+ciOk3.cT+b_KBkUWU``wWWv1Qho5' );
define( 'LOGGED_IN_KEY',    '5L-M:X4-fHNxIZs~*2&BU`},Z91 dmk`vkfqb!VlDs@aczAY+Ez3.oUy8_Z7@lb~' );
define( 'NONCE_KEY',        'RM(W[v,<oyDfO+S.+Eq<F)S;ojsSds}vZp_+}rghgoKc8HS;3RP{[7L]$~L+6;kg' );
define( 'AUTH_SALT',        'v>QNf]kY-: 1UV}X<p!t3VkSlX3 ~pcH!;l |V3([<zK4m$`I`nuX{0^P{Urfxi@' );
define( 'SECURE_AUTH_SALT', 'Jg?#Wy3+Bp$OCb?)i<b&7)c7<2?**(<kP5]4GW(n`LezGK=JCjV|KgN[~.1Z`_c<' );
define( 'LOGGED_IN_SALT',   '_o5BWsDGHppCAnjIc4;mSYQ;-,Lc#oAz;r#/S~/o+@PP2?)^Po-@n8~k2XId51Z|' );
define( 'NONCE_SALT',       '8$;W!N},U:.8fWH[}f)QZNZ} KBebeUD0H3u}_OinOqj6|i}wOy]Uc0v8F-,Sm~i' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
