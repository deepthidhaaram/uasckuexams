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
define( 'DB_NAME', 'existingDBwiwb0');

/** MySQL database username */
define( 'DB_USER', 'existingDBwiwb0');

/** MySQL database password */
define( 'DB_PASSWORD', '9FcKkkmEnE');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'L_l^YB{yjM7>$nYI3{*qbM6{+A{$nXM6scRC}@rcN0!sRC}!zjUF0,vfJ4>vkUF0^');
define( 'SECURE_AUTH_KEY', 'C+lWH1_td;.uePA;*qTE.ufPA6#xiSH2_mXL6#xiWH$nYM7>yjNB}$nYM7>ufQA');
define( 'LOGGED_IN_KEY', 'D#teH6#xiSD2_YI3<yjUE}$nYM7>yjfPA{*qbL.ufQE.u[zkVJ4|vZN8[zkVG7}');
define( 'NONCE_KEY', '$fM7<$nXA;*qbL6]ufPA*qfPkUJ4,vgR8[zkVJ4|vrcM7}$nYB}^rcN7}$SC:~o');
define( 'AUTH_SALT', 'rcRF4>@rgUC0|zocVJ8}!9;_xeSH5]~maPD2]~tiWLG5[_wlZOC1|thWOD1#-pdS{');
define( 'SECURE_AUTH_SALT', '>yjYMB>$rfUJ7,ynjXMA3<$qfTI<$qfUI7{^yRF[@sgVJ80@sgVJ8:!wkZUJ7}^');
define( 'LOGGED_IN_SALT', 'WC1#-TI6{*uibPE2*uiXMA2<+qfaPD2]*tiWL9<+qeXLA;.xmB,yqfUI{^nbQF3{');
define( 'NONCE_SALT', 'rcQF3>$rfUB0,zncUJ7}^9:_wlZOG5[~lD1#-pdSKG4[~shVK81|shVK8:_wlZO<+');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
