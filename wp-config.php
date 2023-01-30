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
define( 'DB_NAME', 'kholita' );

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
define( 'AUTH_KEY',         'QGl4I5]h.s3&gPX- fjh-h8ue:3RU;}KW-!&Jl2(f&-1,Q,7Mp?xyAK0|u4Necnq' );
define( 'SECURE_AUTH_KEY',  '-SB]?Ojt0#C&4.y7AFV&7PuCwXS}.s%Jb!X60+p)Gee]^)t0EA]$?h6&*sqE4f)Y' );
define( 'LOGGED_IN_KEY',    'IHE[ArPYFH s81?/{V#%Yo`-]7Ijxg8w.N!zVI6xze{LljP9NvN`YqvZ6Tn=F*DE' );
define( 'NONCE_KEY',        ':,dq9PJyud,1CE~U(l[SRG]UE5R=L}1p?Orhf<bk`h!&B7A56XFdM,Q8Kx~jX=2M' );
define( 'AUTH_SALT',        'f{M|tr+% bI/VY*z9=|ciz}h|*c4T,;jUHC.s&uO~Zu$60vH5vU=+E![&PaA1vE=' );
define( 'SECURE_AUTH_SALT', 'JZ<nCOH4][)0as]kNH5Ur-FK.s*4@=<?6d!a^SY~=TZv/2.ky8j#tgCUG&LBMomY' );
define( 'LOGGED_IN_SALT',   'e__n7S2#^(B6C8,3pBZBXM|HH~|nWC%stJOxDDqI_]<*&fd{4[sSF<C4@Woij]@t' );
define( 'NONCE_SALT',       '`#8JCgMforsbVm9;29[{kx$wGsKO)a.(K9=9? w`Y{%D@xJBeiE*4`~ C8`vA$R!' );

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
