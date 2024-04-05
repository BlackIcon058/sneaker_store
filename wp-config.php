<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'sneaker_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'NX1;*dl_F;8IX)~?4,[db ol/5%J+Q[U}u@S8DS*JoRu0FOMd*[cGnVdhY9;Z<B{' );
define( 'SECURE_AUTH_KEY',  '-<W~jG].7D)m~9My&Oho_v1q_G$ ~5J|u#}F:DO`zScXS`skG6o-~woO[K>tFv}A' );
define( 'LOGGED_IN_KEY',    'A [Qj<R$Ss|,5sTa|H=O{<t6,D3AXJ]O&Yj2sAEgYoPs)g$B [bxt+g>oVJVU}fH' );
define( 'NONCE_KEY',        '#au8y}}-yI OJ@.}[Lzsn/O^j8o:](^oesNh>,#1r[<b[14unw``KAVfu~1x-Y;W' );
define( 'AUTH_SALT',        'Y5s|xjjH%[axW;#VN>z=<Wf#-U0Rfxg`U9(N>R?!ORu[^e?x;NARYsU}?a[IRniz' );
define( 'SECURE_AUTH_SALT', 'GLO+jdtU}=hn#FVO++$i=AoI%|$Lw~s$@[ru6B56TE>v:MwiM)p8Vla$mKVKL:#9' );
define( 'LOGGED_IN_SALT',   '0Ot+U~Ee(q1/{#5KXYeo9$>ltkx/)#J}6|r{d1Bs:$1#z#8vWp ]D6`E6X#,[#I;' );
define( 'NONCE_SALT',       'prv?KU7%m%9OT*<?W7+vY5woG$:Ocv}u!58Ak/B<a !,n(PrDuCZDV=q .gSY@Uo' );

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
