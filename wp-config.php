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
define( 'DB_NAME', 'auf_exch_educ_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define('AUTH_KEY',         ']^3V`B|@~_|<}@7Z-l.:P[ijxVXceJ&,A!q.nr FQWeB$Oqc7cIZ$j])Pqh4>w<?');
define('SECURE_AUTH_KEY',  'UpVpWfZ|HS1+)b:FX2?^iGEi4Z*>3}0o)On$ht}z,?^.JhA@?0xglBI-(*oo}m@-');
define('LOGGED_IN_KEY',    'V i4T&ZjHb,P&3S^P(nowFF09x bAn{D^t7r 4NqL#cdNOoq$w>]9~l/Xo}av%AY');
define('NONCE_KEY',        'r~7isS>MfzN>JW!sIPswP:tjz,YUp-+=+=y4KT^P)~7tJ]2-JE{K9//5E!<eS+GP');
define('AUTH_SALT',        'a@O/e&6N:Z+Sp9QonT1TC=CyGqGka|N|UB>{9lKZRQ)-ii=_)$^L^OgL,a0<v#lG');
define('SECURE_AUTH_SALT', 'IWitBcr0)]~fEWc1L81+k0P=Op)i$$n{`+;vQozk=0/Dq-VMM5#vWnuA@Cjh4_zR');
define('LOGGED_IN_SALT',   'XS1,J@%;,z3~}+OM2r3u=@(g2Z]P|a.&d7]3n}.N|R~oBhF`>26WB}R%Ci+ wnL8');
define('NONCE_SALT',       'dleQJO`[`C>=xGKj{?cu90b 0X0k&dr-3>ji2[wXX%sQD.9laqiyZ+pXE<(Y8UsB');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
