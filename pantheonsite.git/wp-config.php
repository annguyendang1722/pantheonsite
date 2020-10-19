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
define( 'DB_NAME', 'pantheonsite' );

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
define( 'AUTH_KEY',         'hdKOr{4lZhCumBZW0XE$pv;]aRM_|I[h.K^`fed(W=q[:Zq1#4bKN:Rk?r(|K>Np' );
define( 'SECURE_AUTH_KEY',  '. .9Z*V;6Gt!nR|lC58:qwF=ySX+@!GT^Y^<]PXBhtbOBMUZdAZUqlAt]Gd8^=Jj' );
define( 'LOGGED_IN_KEY',    'u6d7OJy}%l%@D:Ts>mv2!@z]@A5vt@6*QafbisD?]b,vLqLZ>$XD[M&3s7p$Ui;H' );
define( 'NONCE_KEY',        ' x@ys5(}j~w~B}Z%}}@oX6{@f_xL_nOoQ5=c5<0DAWY<qJ+AQoT+ecb.ei-^Pi7 ' );
define( 'AUTH_SALT',        '0naYD0-}aV%BzOoECS^*Jm=&OPJ_T-5w&8@z)M9M1q@5])`4CA];T}D.{pA19J]9' );
define( 'SECURE_AUTH_SALT', '8GfVq$Fo^=Swg8=0p9`cgb?I &3n[=!9`EVm)f!cyBM$bm)J)J1Qb^yW62 u`#k>' );
define( 'LOGGED_IN_SALT',   'Wr%q7CxDf[-|rt.3(|,Yr,iFB.+PzHBTZ5p=tk|Gf}3=>@R]-$De7oqe;j#i;4v0' );
define( 'NONCE_SALT',       'MC87@4kLoAT|0kRsyZ`WDI#/VT$Fw?ILvm7jUA6`Aj^+sjhyAlo3s8jx rCt:@>E' );

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
