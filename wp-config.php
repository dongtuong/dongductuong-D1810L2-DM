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
define('DB_NAME', 'dongtuong');

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
define('AUTH_KEY',         'Fqwk xbpT6]qPmpR<|fP0uMAr=,|dFuF7Va>r6@r%NqP$%.?dtTnjL:-Bm~]!OOt');
define('SECURE_AUTH_KEY',  ']Y}3nnfH:S^I:xnAG+hJc;]:gOiumQE4#JJ( PPE*FyH^]vVDU@Cz;P1:`G/s(SR');
define('LOGGED_IN_KEY',    'd&@>rM<Efy[S8xF0Xt-;p&fj=j<1d4P0-5]Se~QjnXFE_$aIe?SC>TKnDUFZ?^U{');
define('NONCE_KEY',        'b>?d6|,EF+5#%M~8_Rb cu`xX{:1O(>r3>5 +rfHGU>Q $c.zom@@wKuil5QVE#&');
define('AUTH_SALT',        'lC{?]2Vg~ze7;&ewD<D| !3.->/HIV#Ackk]24qUeKasG-Z)^UQA0ZV0U<B+QZ{I');
define('SECURE_AUTH_SALT', 'x&@=-/mn1pAAm/V?ctCZt6n?u6m-b*2v1k`XV/Ug1T@T6zP#Wu@A^5Y=,5drCx(O');
define('LOGGED_IN_SALT',   '_JQ&guR,feW*09!LL$N#K0@%~wwO81c(HHqQjlHpIZ2XmU0/g5*RnWY>6u8k8_hu');
define('NONCE_SALT',       'bm{2NUL/pgCr)  R**Dd_a1PHwL-=cLP5*rP]RUwK: uigE:XH/CG;ZkCU|4XsU&');

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
