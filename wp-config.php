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
define('DB_NAME', 'recipe_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S},OMLso{CLfKPBDUMJlN+O|~wZe%y7i=b h*bg2y 6dSh{%GY{gb;Qgf8[OSEjd');
define('SECURE_AUTH_KEY',  '<BR3$,Rbzb8W6gTtB4UEo(V^AZr<:r<NxjXXuw3d&s(1:WnheF]`Ck95>y=N:)Q=');
define('LOGGED_IN_KEY',    'ut$i,wKd&<Hk<ll1FuO(>#5Rf5TKU_Qhi~9$v6x75Cix7Tn3qTmp%Py(WS|Vi<TS');
define('NONCE_KEY',        'm+jJ<u h4CUuTds4>Er*Cv+fC=,vTX0nuXrc._ygeiWW (k?#vIy1X0cB.[m0S;k');
define('AUTH_SALT',        'zVce.a3hVoAr{k&y]Gs>/G2#}1svj6k[_4Kcrb^Tgx2[8L>ma(3k1WaEX&bu4c{X');
define('SECURE_AUTH_SALT', 'P?@s#d*Q7c2^CJzx]qT$+<F6^8Na]@yFB+i8.M12b^pMzHG#ia3EOM<|y449WmkR');
define('LOGGED_IN_SALT',   'yxA8bejL_`fWkxD%,Ucsv}JkH%P4Op GpOQ0_wMWS7+4@pu;(k7kaPi^SC@&qH*9');
define('NONCE_SALT',       '8gMj37xnAZs}+&phY9y9F^2x<6DG|a{$.QP&B5}&`_hsu+&|G[>|v> l7=kQ7bx4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
