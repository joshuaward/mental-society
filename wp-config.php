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
define('DB_NAME', 'mentalsociety');

/** MySQL database username */
define('DB_USER', 'joshuaward');

/** MySQL database password */
define('DB_PASSWORD', 'Umbrella!1');

/** MySQL hostname */
define('DB_HOST', '50.62.209.53');

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
define('AUTH_KEY',         '!M4$w`(D&tIoUVu]&QW^jLB8ap:M4:l?}U55>;Rkv4@pKuBsVnlE0WNhz1ru-T1U');
define('SECURE_AUTH_KEY',  '|b0Q1R:sGbWhy7N+^%]}|!)xDG_z8n_2wg1df,WPg2f<f-r?SWKn<_KD- P>bi@x');
define('LOGGED_IN_KEY',    '.`FzrSlj`j)b=;rpla22MPY}teOg.BAO7TL!>f<5_nG2L&[m](h2$p[<m a|M,8?');
define('NONCE_KEY',        '*7[u~W*9`Xtww]S?`b_>T9AE/);XNg5?u/Y`Y)MvS{)Xj2h!TaVG5_Vw`<Ojqs^4');
define('AUTH_SALT',        'z/}#Xc2A(AchyzzE^KKUG@`Bhh.p(w#B}p3C/YoV3Vch*(fk0S0B++>ws6gF&u9H');
define('SECURE_AUTH_SALT', 'K]$(MYAai|qZw}%{n$DNtHKX)MVR+J;nIpIbofn!kHSsSOQhY9A}SSNxUw`c,{-?');
define('LOGGED_IN_SALT',   'dFP*eDfR+FrH1+P}e<`8yz*^?  |Qj0pSY{%od@/HPN/^HZtQh<`8SlLaaF_2Q.Q');
define('NONCE_SALT',       '.Zqk$mgV$`J K$EB?WWKgg|`.Z[lo@09]]q`YoP91oIN61E_K$!f7a^RC!RKbNOl');

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
