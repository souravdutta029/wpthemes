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
define( 'DB_NAME', 'wpwebsite' );

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
define( 'AUTH_KEY',         ' ODtQx>LEIJu?6HHh,(<iik,?1,[mp;|zdOjdYkJ(ytZ>8716@PGj3e0!Xpu?7$K' );
define( 'SECURE_AUTH_KEY',  '8-.[unoyuV yd?FIuB]svj%lRV9W&B8{S;N7FTLvqrl.<ImX*)QSbzGJ6,NG&<kS' );
define( 'LOGGED_IN_KEY',    ']D(9b~@p6@.Xf&_57Z`y>,?+{BhZzv~0t|wzCce3&=v02dAdY>nIAljS1A?md{oa' );
define( 'NONCE_KEY',        'e8c.:6==72#/(8Mp0m=|2>F(hc;AJ2RoP|gb4>|~o^s?U#tM;e;0f]9,3ENy+V#L' );
define( 'AUTH_SALT',        'N~NV5B`%g%ii?mFcp9{k`t(w$j&WN`~[h[6ib+=}VeK,?PwAVq4m?j7&k5j-|gYr' );
define( 'SECURE_AUTH_SALT', '[D=upX0sH[17Dskfsg81om^~DN|>$JKX#yL}K=9]H!d5gw*6y#4C5yw-};{IUEL)' );
define( 'LOGGED_IN_SALT',   'ZQ.j2S5tex3!6M`I5OAPH+ybE|wd{p{4n_sO?jm0hR15Si>t?DwlT147m,Yis5Xi' );
define( 'NONCE_SALT',       'A;E j7<?zaNav@6/6>%sl;xaFsP<kPXV!tH-|y2k0m! wR6k=LICny]DaP%ao gw' );

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
