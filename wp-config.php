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
define( 'DB_NAME', 'born_on_road' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', '8qP4tOFkxHvuBKkvbhT8' );

/** MySQL hostname */
define( 'DB_HOST', '64.227.41.194' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_DEBUG_LOG', false );

define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '66cnz&^$%>WZvm^?r)_XT-  pP_;o$28N$=/DK}h|z9|TQQJL},]1qT6_>,HSb,m' );
define( 'SECURE_AUTH_KEY',  '<Bv4R;uR3*tq(u,.60Y?rE1*+I>.RVoYo0]4B<7m;KGJ.v{#)7)w.8RrsKw<;+!D' );
define( 'LOGGED_IN_KEY',    'aCr:!Hi%dK/rf^/azcbVjX7g?RJh0C}P?.ULiFQjMjZ$bWqs>ve[6VekmQTL?hu}' );
define( 'NONCE_KEY',        'u:Wh#h^1{-Z>$;y&4xF~oj^~?u*Ql^Zax;,:yNTL|#xb2V~Sz&l4Ho!?;o(C_a4~' );
define( 'AUTH_SALT',        ')Vh`k$>i<i&!sJA(4%muxu&y.]q8[67NHX/i{1)wTp0hK gZ?k!WxiLxQ3LY:F0A' );
define( 'SECURE_AUTH_SALT', 'Tp&#>3d>u*B5|HnJ%bx}`;,]cE>M0H:[%v?XxB`LZR&e^eF]#WcwNzTl}g2sW0%)' );
define( 'LOGGED_IN_SALT',   ';XZIywq_>QH|vJP$PPIaZ(ZnR_kH-`M]4<zpFT-^P7F}LPn/U]u4FM92-l&@M(Ql' );
define( 'NONCE_SALT',       'C21<@Hm3R{*(E/M.!$DNEO!}!7@Fv-.PagR_FE#$3x W)DUX2D#9_0Lj#y$u@~Ma' );

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
define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
