<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'blowoutandgo.ginkuf.0001.euw1.cache.amazonaws.com');
 
define('WP_HOME','http://ec2-54-246-195-113.eu-west-1.compute.amazonaws.com');
define('WP_SITEURL','http://ec2-54-246-195-113.eu-west-1.compute.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blowoutandgo');

/** MySQL database username */
define('DB_USER', 'blowoutandgo');

/** MySQL database password */
define('DB_PASSWORD', 'blowoutandgo');

/** MySQL hostname */
define('DB_HOST', 'blowoutandgo-cluster.cluster-cgnumpxlz0t0.eu-west-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ST&*2=HX|dkA7BH%]Z>b|0$cl>|my0jh<p6tHYi?),a~AQyyd~%zb/^RX?AM|*2b');
define('SECURE_AUTH_KEY',  'aCa|$$tHJ!9B(HnrK{e-GaABxO[6a*m3`v=J-l6$){=|EF^%B$mIg3Vx`xeDv-6f');
define('LOGGED_IN_KEY',    '{s#*un NaSJw=O+brwvI,.73{?e0)FfSVV#+s3/%8$G1}E``7QKRe0V--E+#Le~d');
define('NONCE_KEY',        ':VtuEX Ru;eV*h/XlreOegf7KDxd98h{%>Jfyzp:oOB3{[G`k]D~5HcBUk{&Y+ r');
define('AUTH_SALT',        't|?W.{=&AUYZL%or-!.!S#ES$`#6q;Fs#CA87~-Fvz 36i-%ETs3{.3kvhYp+H2P');
define('SECURE_AUTH_SALT', 'mV{&/feq^,lPrbsf5+h >ed~:G%I^5^z0%:leAjDx?SAs?H%8F)pD!Wm/#ctv&|o');
define('LOGGED_IN_SALT',   '&-2T`ck(jB<`R&%d}%WmUt:N3(H!cfHYZdGSD2nw|Qm@i{a8bVcY `S_AVOp2NT3');
define('NONCE_SALT',       'r}ekweCP`X67VC%%Qt<-$;*CAn2d-!%XG%*dB+t_2mZ$n7[J+KEuS|uc2vOn,<@d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
