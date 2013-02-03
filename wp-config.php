<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'churchdb');

/** MySQL database username */
define('DB_USER', 'churchdb');

/** MySQL database password */
define('DB_PASSWORD', 'pRqKpuejuXpxD8ph');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '^d$uChVh#{1[jc00W$s:iNSm/j1`n(Rp_yt_1{u04{PjW Of=Q9*w2O2%^qb#!QZ');
define('SECURE_AUTH_KEY',  'Ol=TR]B$+FRTQlnnSH0`C(S;W%~N}~Yo`>p8bSd$:7ESs(`8Gh9^EW5HS6{;+Xw1');
define('LOGGED_IN_KEY',    '=6HyE(@e7R+.D-r/^;Hw50}+QI<`dV.1<*@)y/a3P{fNDhU?)6=:ef6gQU,xWK3+');
define('NONCE_KEY',        'Z%9&K8nY&h;#eb~|M[jr%V7aVvt$rCGB{p]z[stSuBO76c%0~%AIqt@RB!,_R00Y');
define('AUTH_SALT',        '&9 i^KlW9C3mASB3Ee1j4$2-CZ+3<2Fojf8-nfgtLz wv_WBBe@-{ :eOneci2;d');
define('SECURE_AUTH_SALT', 'U0fFb[BJ}B;)+HxNo2f8)(4qLA_*_=7F[q5_qhX.ufKW+3F{n$D3%*sYdg2Y,6_V');
define('LOGGED_IN_SALT',   'b^P, jsi~+ts{&euKM.Oz{@^.*(S#!N4|`[+ch-m=WsaU?-Y[5yMYaW0e?1t6,r/');
define('NONCE_SALT',       '!0K9}9bHk6eyg^}_(.ZHt_v<)$cP]NGD5i#S:k^o)u:BrUSU$+;7mG3vPJe#S9Fr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
