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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp_db' );

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
define( 'AUTH_KEY',         'jhv8OqvuqXsC- ={CGYh;a8ES%D)YCqU:!HI7:P|~N;5XXF<W+y!D+:+[.E8H?!P' );
define( 'SECURE_AUTH_KEY',  ':te6|yqjL|6=Zo565c|M<z7tMQskyWP}>3< =^7&rg9v/SzjY?EV58>%0E~e3Pph' );
define( 'LOGGED_IN_KEY',    'Yn@5LBlL#tMg!9u0mL{7T9![38Y`l3LH@&M<>vOZ/pYpM<jh]jf}Z,]A3{=p6,d_' );
define( 'NONCE_KEY',        '/$.kfouT&Mfn:EF/0LBc%Kx z5-:|T4uY/I|2fm5ljIvB%s$ YP2)NK$((qFTA@^' );
define( 'AUTH_SALT',        'NphoeC+f@C]ht;E;:h]NE@TG!1T%q.9zj_|aSW@gso7^^$8_i%I{Du.[?%TK=RRl' );
define( 'SECURE_AUTH_SALT', 'mF(1>JK&)oH/OFRd{~vR,{LcQ`Pd,RhL]m}2MO43uLFOr9]t0T(q;:LBOw8){ Ib' );
define( 'LOGGED_IN_SALT',   'sE2uA)[`@OVQPnp%X5205qG:I_.4M(CSW3/=?cY|9+*#L>6|I2<!jRLP9EQ@p*SU' );
define( 'NONCE_SALT',       '=DS;@g ZaJXoNGAr;7B^:q6VV+]lOw!Z*y_xl~}(9M(O6Fa;`;d iC=$RhO,DAe|' );

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
