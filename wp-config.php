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
define( 'DB_NAME', "serena_wp" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',          'gSa1a6aB! 5%lRn-k,_vs*0&Qo[j]=b!Lfk:>lM{65[.^NBl0~v>]IRFj|JlitaV' );
define( 'SECURE_AUTH_KEY',   'Gp.5<8W~uZ5.zVZCE@i!kk{T5w I-,w&y#r[+m$q>0UX V)omm2GOtjdjO{[3cfw' );
define( 'LOGGED_IN_KEY',     'L-?nug8:F{p4q``F/TNztoEF4u%qz^N/b)gAL)oFci(PusY6/F+=HEs5?r$@_?-,' );
define( 'NONCE_KEY',         'crg~=o3F^$?nP*.B4h$%^]1G+]]>=43S(!^j;+f6xuLE/s9OHL}KL.zL!OejAH2d' );
define( 'AUTH_SALT',         'KYsEC+nvL(01u]T<Yomk$Y |8wzZ$kv{|7V61Z(^+1ZR/=NMpm#NwMfEf.m=,xeM' );
define( 'SECURE_AUTH_SALT',  'SD=k@P*F_XGoY(|K w|LB1o$<MVJMC2$L(Qcxr&>jlO;(]HzOHq9|qg!B<{7J/(P' );
define( 'LOGGED_IN_SALT',    'ty8AF@iW}.HDuj$hL{yfwG-WX]hFk1hTGUT9!%)ag%)Ts5a|?U|[0ouYuD>)&yi~' );
define( 'NONCE_SALT',        'w(:k?@PsqK%$r0y)7I%y9r5WB.Xxl&:V1/YG[$7n3Py/I*unc&Hi`pIH{{#/JmgJ' );
define( 'WP_CACHE_KEY_SALT', 'r./B~i|xa$[h>pI~dT4W_h_`p@_KP#@]KiF}U4Ml&qDO8JI`+EU``{+aq-((7-A!' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
