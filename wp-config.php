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
define( 'AUTH_KEY',         '61|=edEa;9+F!JG4o8taKF!C9hW4J6)tv:jR5I6-dQ fv_Gc#udV}<QA(a/ ox.c' );
define( 'SECURE_AUTH_KEY',  'i$TNgKl45Q8N_a:m`a-EA=r,GLz 0Dh?%F;fIh^6jxc~KH:mIk|cFRMz<4!]+u,?' );
define( 'LOGGED_IN_KEY',    '~9I49jfU^>B7v+DBsB0$@u4ka^P:Y[4`W~haqg][?6$/APo@GP(D=kc15x*nKU^F' );
define( 'NONCE_KEY',        'NVRemTZ!c7QNpJ86uC>]#Zmte.?7f2~O3:]8}`;7PT]()%}PH6IH?@`9i{_7H$rD' );
define( 'AUTH_SALT',        'Zv%I.y+fZl$-Osz*U3Xh2s<6}gBXS$wI*al#:CWnqG,YRIv8SaSWn~bh3NAHnSWT' );
define( 'SECURE_AUTH_SALT', '}T*NFOb[D-AX9,T8|pIL!4C&QWg3u<2_,RNrSe>xpU49$:<< +aitt`~>5V@e{p:' );
define( 'LOGGED_IN_SALT',   'D4AOIHBlH2N7|e!DBL&b9BWMLo-7LYq-H]24F{4K=T8$EQNU& 0PJE5)NLS|A0.P' );
define( 'NONCE_SALT',       'PMZOP?6U<FnyYN]@GiSJD,=|7YDXt$!}NuE_-<7U,8nMBz)7TOY~LR~*(>%fa-V.' );

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
