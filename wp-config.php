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
define( 'AUTH_KEY',         '4H3Rxd.`2i3/!e4HFVtxe.*[i!*0h:gO)jo^[MV+*/=_o $cAkA;:eWVSS0TOc{U' );
define( 'SECURE_AUTH_KEY',  'p>i6QVxu05R8 *[*VE7#LLdM$/bHw^qr47U[> =HY@qA4|Y$/EEwWk:#KmkeAN=^' );
define( 'LOGGED_IN_KEY',    '+JU.t$3>TO!UmJR<d|)!`X}zD6yK4%G:UpPI~+#s@2&[rT6r?N-X{.8>;LzXlA22' );
define( 'NONCE_KEY',        '&,CfTdH?F$NsG<>[-9!&}d?;5[umX%]F3BqjZ!Rgl+rd$$&.18VIk[LMgieBP*L!' );
define( 'AUTH_SALT',        'BqtLvCdtUAp$;G*k~^DqI9}w_Kqi kYH} f7$<Uj>95.zlAsa?K@R8ovmufCb/Ox' );
define( 'SECURE_AUTH_SALT', 'iwm^ZpLh`{z##PqmQWfG+M$xxmH%ETJ[3r9)s5y|]D~@jjtyxRgJ@%nbuN3_=h!2' );
define( 'LOGGED_IN_SALT',   '+ItD]{ #l5smzEQn95?*B]LWeW9r<,H.`>sM_h%;$IM]#Vl#Q,S=1qEE<R|]b1C,' );
define( 'NONCE_SALT',       'A%)#b{oN;`T6 0$:xq^xJjS,kz,]0h<S:vdv[pTtVB:FI4wGKi1&H*IgPq@^Uz_ ' );

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
