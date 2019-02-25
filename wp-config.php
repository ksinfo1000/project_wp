<?php


/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'kozhe37_kc');

/** MySQL database username */
define('DB_USER', 'kozhe37_kc37');

/** MySQL database password */
define('DB_PASSWORD', 'LFn2ED$7F=6r');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sFy2H*mC7skOKT6@!N(UeqI9UZzlRPgB)jW41brrJT)hK^upu2U)bj6MLlQo@Q1C');
define('SECURE_AUTH_KEY',  'HovMfnTSF!nXUcHRyyTskKrn1Zbg2DMaJGuFd&Vgm1dNJCWG6iYb^q@Ut1CYo&5t');
define('LOGGED_IN_KEY',    '!QwfV!3Y01ITFS3nVisex9WSl1k6ghVgE(Oex1TKoK%jnXizk7GPEbXhiKrfT08v');
define('NONCE_KEY',        'a9bo$9wE8t#73!nZX4yt)Sh3#nctCkU$%)(xV5Bnb*&c9DDfRi6tXAZxHIXcL24B');
define('AUTH_SALT',        'pTob3zBUGG9syGdSsgTO*ev%2yWMnqsw#m3Ode8L7moEm@A9)pmm7a2)oYKvbQin');
define('SECURE_AUTH_SALT', 'kjnHK%Cih^2w6AfZziO4V%2YD^M8GS*)J9*equS6DxKiuz^pIXo0VPEvdeSpuYVa');
define('LOGGED_IN_SALT',   'tYfsz%Ma8zS0^^Wt(@tPKlN1cug2&*SNwWx0R%H!PfGwGyPFo4g7j11cu*lBe^ur');
define('NONCE_SALT',       '63H&D!6ARi%aq@v0Z$RX&)#wkGnLPO5JPB6U@EBb6(H!0J)@lSxab&j3zQeW0u#H');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'ru_RU');
define("WP_CACHE", true);
define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

define('DISABLE_WP_CRON', true);

/* Iv.Savchuk */
define('WP_POST_REVISIONS', false);
define('EMPTY_TRASH_DAYS', 5);
/*  */

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
