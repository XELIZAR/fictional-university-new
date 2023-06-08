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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'StlTF2OBTH4EkIOTcRxiNGLXSrnQGmRoHWp/6YP9ulXcNuLYjuK3upkvVrmQM/UhwoQxJSBR6EWhCtQBW8oVFA==');
define('SECURE_AUTH_KEY',  'up0bTCIRwtczzL0roGeXw/VDjNY9ff8nT12OAkuzrdA8ppuvLuiVuuhvZQaqQF2dFwa1NvwREFqNmIGQsjoiPQ==');
define('LOGGED_IN_KEY',    '8O8unwkopi7POWe1Nha5lyHwifxTugkEPI1kX3cSAfMNUX1Njvg+9Vw4lN9vGSami+nHwPcJlIfVQf5atzJ5ww==');
define('NONCE_KEY',        'lktgHbIJN+yl2jyTutTCnJ5Eb18j35Jfm00Wfwv+AMjp92gC1abyporEO5qxKSnkeLkLE9WrZ6Isqfp1TonRRA==');
define('AUTH_SALT',        'eWxZkje/aBR2aUQVN5obQVJ4gs0OQ+Chqv+NkWzQxiKDxM8A1oIM1aA2KcOw3FmgX3ZFnTbQ8sb5xuI/+jJbqw==');
define('SECURE_AUTH_SALT', 'faGvMUsG3sO5/vsS1U4iIyUyw3JX8wepWkcGVU70bCRTJDHNpwupA+fBmpzAWcpWvKxJkj2e4Z2sEdYwh25fjg==');
define('LOGGED_IN_SALT',   'Qbmm2bnGILzeExB2zrqcW5do+r2WMOHNSWx/43YGf3PYtzmdhg8Gl4IeEI7/oKOQL/NP9k/cjF4SqqQOFymXdw==');
define('NONCE_SALT',       'P72bSefon2mqOfOafhJjcz4VtIsw4I/mhP+jbRxbvflTdyyRJew/X32S2ZMXJ2IKXmTuuN+a1PBL9eeGmh81jg==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
