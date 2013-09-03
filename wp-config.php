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
define('DB_NAME', 'shingerie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'h#oN<}#jX!X:MV?V]Dd^.O8VEu<~.|5#JTIp8.=(G7N{/adWmGzNQfi;0ZCK@qv=');
define('SECURE_AUTH_KEY',  'xba^hxjP~(Amtb3ty_p,^nf4V}FQZ,Gt/*RNnh~xU=a7/^RYPE-cS)rs#3K<#I0d');
define('LOGGED_IN_KEY',    ']3swFdVsCNu- %q1XCBEC)Mjnk{w3,r_I_rZn1gL%,+m~``@-$eWoA>5;))(w&$n');
define('NONCE_KEY',        '=9k)RjbJMmq!Tp{_il)yUN25+ll{/!3)%IbSfs/hTf yD$D[3#D)5;bI4a~eMs#2');
define('AUTH_SALT',        'bdb W5#1|X4XCJyR2 UgY%-*df!dUd7c[aC(0AX,R@.4bw;K_+wnmdG&sVSR`UtL');
define('SECURE_AUTH_SALT', '/{.jP#. nJ)_F-rd1cfa8Cn7<f~Iu3OF26B8_t>3=K|-s(b*4xC?H=OPxQSzmvK]');
define('LOGGED_IN_SALT',   'S4CH~Cw,q9N(J-aMQTR<</W+tjJrsSy%+9$X~@i$C4Q>800S~aDY1lg**p^cY+j?');
define('NONCE_SALT',       'x7Y0trbT.x+V%,(n_j?;37;,N5x[Bk Wt+la0,j0)Z=p,H*z{2u{10N?Rbm/SfO>');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
