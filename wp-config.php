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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dinkurs' );

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
define( 'AUTH_KEY',         'XmwE[t_a4Uj}-;uPS9fc%^ezF#V6.HsMR+ 4Z]H:f:/*9Y;<Q3*Pm&M/,{H0$W]$' );
define( 'SECURE_AUTH_KEY',  '*0Y2gZ/q%{r8Nf*iF7[Qmdg-pY>|_zSy~L$,uRa_n.2~^eapld5TS|@yJ}b>w,{&' );
define( 'LOGGED_IN_KEY',    '6ls:%pN<ORRok.x#pE#n/nPQ[MN6%20;=D] |AOwk5V|n=|UH/)Pclx/F3U++M]s' );
define( 'NONCE_KEY',        'q6q F~?[>Bfs*p-5W}am%jJZYH{4*X={!V:G;i)dGaGnpW-i^r$98fqXOQ~yM5!f' );
define( 'AUTH_SALT',        'B>f<SYz-=_r0}E&)W!}#d4~M[S./&(M^dLH-&A7q8n#_2).ajWe_x7&8@2HTi(Nn' );
define( 'SECURE_AUTH_SALT', '8:)!T`i:.vK>Q={-7p6GdlA5bleI4Jq/56,MeyFW/cK[U0F8 tWC1~;%?4vF}J0u' );
define( 'LOGGED_IN_SALT',   'iu&-sT(k)M:#|@_Pk#>n{*G``$!DD2Wn#lS$m5I6=ZfcNhZ0m>THa5UCL_LZT0cU' );
define( 'NONCE_SALT',       'W%0I-<#+3h$JTas[AhI`pv<!Y#1oZ3LLJzAwrxqG^Ro&<cy+TKEPx~O0}x[pBF/`' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
