<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Mageing7');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         '2~u7c@(Uu_Frd[&bg%xc-RxcA3l-q!SfXd1$A:l+?y(*-E2UOF<[Vi_6[]n]:o`X');
define('SECURE_AUTH_KEY',  'a(ja|>re(:oC-!q s:b].V[(Nkz}8ewb7y[$p8ha|{!]v9+,@%|oXD%hWC/#A#u^');
define('LOGGED_IN_KEY',    '3(p@lYuJ[:}yPN,5GED1pO!,y_3TsWVuO nv|b}d N|<Oj!u4;rs_r%k|fgK+7-5');
define('NONCE_KEY',        '+S[~kZ@X++p2xtwOo+lo;py6hntrATAJS~ZQCuZ-b+{CH|Z8|5i:3 EqD$Vr4F)W');
define('AUTH_SALT',        '1.<Q7D[6fB6+o) 9*Bv&{A&aM8_lZx25,txwiNLSwu{3YNe7x ^+G5=2nG)%ML_V');
define('SECURE_AUTH_SALT', '`F[40uaHd*HFSwo}_[=IY||;]s>Hu|k6QQD;y+ i,U|1-?}evPq2,d-8f2-w8|8$');
define('LOGGED_IN_SALT',   '+>97|Rso2t+qZ$uSK<`bM&#B]O%Bxk&b{-id,_>#hqjL|rzyOhzC`a-/`!mvkBGq');
define('NONCE_SALT',       '&x-| >AHEC.s1+IC!^[9XGTwt)[+|I}c!_,AgHtx3/dV?#C4UwD(WV;gnbp|I)hd');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
