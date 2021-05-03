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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Matt' );

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
define( 'AUTH_KEY',         '%mcb$PN{yBwHtGr 4#a$ZG^SfP$EOecu~_f?F1;Cjz3G]P;=bU+Nibj=z%p9A8yH' );
define( 'SECURE_AUTH_KEY',  '2hB]12O[V/mXL0!fr4+e6biW>}Z%d,?LcbGdOI:jdpj5H$ihu<O@j]b|}Mf|jr*}' );
define( 'LOGGED_IN_KEY',    'C: KuW)l+Y{A3w:b.Pb.57Lgau>h@.o!V|%n/rK*z69}R7!1=DLQK*Lt8)PU2tOb' );
define( 'NONCE_KEY',        '`pqSJ$qJzKX|wa2!*1=lJ(Lf{$,UJtvZ^NT>wo&MR04c7QMF|Tq,zm*!$9W:ndsG' );
define( 'AUTH_SALT',        '7}SUe0D X4>o46wmOt54}PH@$P_9q`Tmt.BU~Drh:#]MNYg>QrbH(EqlKT|eu.+!' );
define( 'SECURE_AUTH_SALT', 'lmh<Yp[)i7hJ<gH~H}`r)4P.bTv=z.%uj66:S/?Aa*avm&W_wpfbX62l=OK<s.3)' );
define( 'LOGGED_IN_SALT',   '_Fz^]cVfzNzdzka|Tw&>?+m(O`}TU>[ Ij)/D}Kvr_mWErVZ@]y>>3^MU469mPr?' );
define( 'NONCE_SALT',       'Yf{b3zaI1MQ{XZD1n0AE0(5Gk~&Xiq-6~+LU*H/VS^)5HjRtbdL%]Ej #EmM9b6J' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
