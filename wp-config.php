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
// /** The name of the database for WordPress */
// define( 'DB_NAME', 'local' );

// /** MySQL database username */
// define( 'DB_USER', 'root' );

// /** MySQL database password */
// define( 'DB_PASSWORD', 'root' );

// /** MySQL hostname */
// define( 'DB_HOST', 'localhost' );

// /** Database Charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8' );

// /** The Database Collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );
$url = parse_url(getenv('CLEARDB_DATABASE_URL'));
/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1DWxz529azw/9glHJzHS1M/0YRYBc0rTPPlJEI8wz4oqzSXvnCztZLBQEakpV8HSri/vn1B0kh/Q+LJ509OOMQ==');
define('SECURE_AUTH_KEY',  'H2pPrvKSRvVVqgDmEzRJW01F/qxsntFGDM+OT7j8raixWb0u/xoaVo2xSKaQW33pAFLOq5rwia8cQt9zBkEpCg==');
define('LOGGED_IN_KEY',    '545xjVeIJ4pjVFIHy3KkmkL6qxTCdEDoatZnCXHL8Atl5Z8nfWhFi8mUYBBQM2XRUH3ZhOSZWwweoPyvciv5/Q==');
define('NONCE_KEY',        'FpTPSR6Cb06XJLEZMu3P2BSJOB6a2wkbeiCgOOfdP3uTT1kqcf408XOQntOPtAUjp9F9CdkJk+PqQBC18BD/FA==');
define('AUTH_SALT',        'W8XoVBVRIAQ/DQZx/NDqswgwKKcpfEnn5qeAyQZ9DSVU79m0vXgU/FPc+sRO+RsZKiXytsoCoBezZAQyIHu5Tg==');
define('SECURE_AUTH_SALT', '99hlD1PQlOnPv8R4ZkB6sTAAIGXxK97FqRRFgWZgguU/kWXKrnAwqv9i7StepyRrdeVKS5JqJ5V9jdjOL2/iog==');
define('LOGGED_IN_SALT',   'edrVFPJ51hGZn3kz/OpWxhSRoFQQ76hxiiab9jSqXMUmjLUrrl/60miQ+b7pJWPeXhWkbJQr1RtFKeAMgXceWQ==');
define('NONCE_SALT',       'm+u2hIOw/lV/0+M8afNqSzxVoiC5SGErIxPcj/NE7H3R/822LhPXgxBp8khDXSkyxbuDWF8a8Rb4LyWDrPBLDg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
