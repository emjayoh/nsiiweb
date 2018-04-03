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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nsiiweb' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0{JuYoQ:>8N&F_]pZ(b^C@-Aw?fHNzsU7GPAJPW}?JCmF+yTCFSr8T~[)p^hWVh~' );
define( 'SECURE_AUTH_KEY',  'JH$JrJKj4C#6$:[p[KSzjJsGN$p3}lG jOmZ&52Kr=][tOqqA!eundl$pJQ_>oQF' );
define( 'LOGGED_IN_KEY',    'FTtxD> ^)r2_{>VeXN7xV)Vxm}W=7%e+Ojl#TqN%BSBq5ZqA`<VCc4hZJ}K?r=6i' );
define( 'NONCE_KEY',        'G>h`/>#[~CA.Tl&-~=rlURVd:(*2O#xfLUg2XbCWYuhSR/Q8R/7%OoijYL(._Yjh' );
define( 'AUTH_SALT',        'Gm6&.&_lH_]lEWPY3b:Jc@WNrj 7DSh2V~5BQ0qoV%nNt+I$wCOKO#*~CQ|:*LqP' );
define( 'SECURE_AUTH_SALT', '`^*Rm58bT Qh^q>tQo8pPxEVu,_uP]IFS] K 9p2Q4i 6y8BHEIk!C+dY8F9G2b@' );
define( 'LOGGED_IN_SALT',   'aGK9q==LXz5zXP4nQUX>UcrMU<PeDy)*]Xl{&]xUgd@`YJ HmHu#Vcw}e*D}jFs?' );
define( 'NONCE_SALT',       'T,FT<}sgB V.lKrb5zp<I<h;KB#:qWyn?;ENT9G).L?*yay>L:7U&z_Fk$WC{WZ(' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nsii_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'JETPACK_DEV_DEBUG', true );
define( 'JETPACK_STAGING_MODE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
