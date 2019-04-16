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
define( 'DB_NAME', 'new_quick_mobile_repair' );

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
define( 'AUTH_KEY',         '9O@$xj&#p*Y.} %M]BvsLSdWOB;T WXDUxeRnuU.8H}m;1>/phEtyOy=mE^D9lbn' );
define( 'SECURE_AUTH_KEY',  'W*TPMM=n/9*@mdm]Z/<Avo=sk3I=8voxMO8B,,+)M>mm@^j8[3F<g-Xi=lXu7.:3' );
define( 'LOGGED_IN_KEY',    '=TEzDe}dCdN[@~qrOdf|mz:Gjwx+E/N[Q??v&[$IsMg(|agK?%:>%SZYx5VQEC(i' );
define( 'NONCE_KEY',        '`a@cnJzrVVKSK,Yy,l*CXKG1ZZikX=zGti -o)@Hq7XwVrrlKqLBZGxwUphL:LTj' );
define( 'AUTH_SALT',        'cye~6~?(V=[v?)xwh q5[=Fn)&zyu2QWH?GEMbU1;5+*1eKYxS1S?OE?E,HU}Hf_' );
define( 'SECURE_AUTH_SALT', '[GQ&;O6#?|i?t#yxpW},/WKeYML;|!#{gG62N6tA$V6x^JQiD&k$qniT~GNzE;uS' );
define( 'LOGGED_IN_SALT',   '$f1gjY f1.)0Fx=xSZyoYjsiP+6.tjWyMKK5hB]@T/HxS7?6e9!)#ab*#+Z_RBKD' );
define( 'NONCE_SALT',       'Zd/1IwvK@pylJ~[:g:#5&O2e1oxQzF2]ZT`]$5>|T}:oE^`&L&byWb-fvsB{9O@H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qmr_';

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
