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
define( 'DB_NAME', 'wp_kristina_test' );

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
define( 'AUTH_KEY',         '|5BuqbSV=qt :}7VZZuvV$`Egt8<)OIp}$d&iI~aqoj& 6VW{:@,7>U)#`Q!h?H5' );
define( 'SECURE_AUTH_KEY',  'x+u.Kr{AG>DYk2c|S@yk0[Vo|f-m_pF+toixQA4wTYQ2HhH&>uxe6Zs4G%hXp:DO' );
define( 'LOGGED_IN_KEY',    '_) $4oRJ-S+Y.ya@:a]GLejVsUu)nb:galxW!>!zhUNC<U%E<z3Af_H5C_,ovE/>' );
define( 'NONCE_KEY',        '+R1|1j oUBUbTC]x4WzAn:S!pUn+hcB*$;Q7y?Q%F9{0K]zh!N$~vNtJd3ly<)T:' );
define( 'AUTH_SALT',        '|)_jsP/UmyiUpI&|uDs/zpuF^1|]k!?3+Aml8JQhW7KB2@Z;p11d/Zh`h]*_,Q7B' );
define( 'SECURE_AUTH_SALT', 'Flu1!-._XHU TQ)(iw~$teWk8%aIOL53MEBc.7;:)!YyRfmYQmIPn&p9HacQ;$Rd' );
define( 'LOGGED_IN_SALT',   'f`d$ERb}sJrlJ#^^V=}0n*CZPbtM`W=>ZxWs.oM`ouY]qn]`6hP6&10BHTCMd&QU' );
define( 'NONCE_SALT',       'b!}@)=+ khL^=D^FIc2d:1XeO$gpojEjl ?bV4$2S$j)pZA VJ,x|,dVRm{[bF/t' );

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
