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
define( 'DB_NAME', 'agency' );

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
define( 'AUTH_KEY',         '* ya5X4He`^:NVx&.Gb],rM<1gVPYhGo?z|KDl[<9GQ4|]:3j7&Q{tG`k#Z/lUmU' );
define( 'SECURE_AUTH_KEY',  '`/_T]NA1h`JoNBw}P~Zm7NY6T73XNv57wAskvvz9,;r /Z5!XbLU(<>r!O09.4K)' );
define( 'LOGGED_IN_KEY',    'i5]:jV9OI7fe_Hr1Q{]&,,HJAq3UtT;phirTSl(&;N{KYpfTR7zSuf $xWy_DPDC' );
define( 'NONCE_KEY',        '9^.:aE,!^@0[k{tA|/Cas{E17mP03cPuA]0+oMT!~P8h)Lqt^Y6P%X0Ha1CX-ikz' );
define( 'AUTH_SALT',        '~5uudyY7Xk1a$5c2,n#BX/IIZ6`-_OnFP!T::m(g.Z(J*[ZY%z3kvH4#=KOvw(r:' );
define( 'SECURE_AUTH_SALT', 'Iir<6K$<noOZ}2ba-3c03;vqnG%D ,Mc|.w[2RQ^JmhSb.CKY1!eDorP(8ER`vg>' );
define( 'LOGGED_IN_SALT',   '4zV@,l)G&q)$s(F(+Qz%*(k%kdczQVgh!`b;X*NdJez`qc2M={D9;h3}M9T}r3J.' );
define( 'NONCE_SALT',       '99V*~oMTCqbpe)#_TazHF]6iS^9el/|}4U[/*YZg!qxuYM*$.S0$:Cs;&uXimt32' );

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
