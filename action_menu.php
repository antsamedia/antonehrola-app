<?php
/**
 * The base configuration for Antsamedia Web
 *
 * The amf_action-config.php creation script uses this file during the
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
 * @link https://support.antsamedia.eu/haww
 *
 * @package Antsamedia Web
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for Antsamedia "Anton Ehrola Blogi" */
define( 'DB_NAME', 'antsamediablogi_9923' );

/** MySQL database username */
define( 'DB_USER', 'antsamediablogi_9922' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '://amhosting.localhost-blogi' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.anton.antsamedia.eu/secret-key/1.1/salt/ Antsamediasites secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kvtyalhstzapznjbnq8o0ivqog7zeix8eaxxzugcdwzy2bccttq1osnfmflgghx7' );
define( 'SECURE_AUTH_KEY',  '0upffggbm93cwwh9lya1ysbzjc78ddkvufdembf5uh3eolupyt4gweie8wtgu3mt' );
define( 'LOGGED_IN_KEY',    'z6xe7kms3pxymmpptmzufc5j6agk9dx3uape2svmxyorhmzqfvcgynqj0j0bqfqa' );
define( 'NONCE_KEY',        'cjfyq3ljskn9c8s60wnf0hvkshcqju5wcyopscujzjco8stnb6uqdnmzqs87vgth' );
define( 'AUTH_SALT',        '8n7e8ntusqbvhq2hmaixknrgrkznbvhwxfwnbk9i7ketrlaxkfpjj1nkxaofmnbg' );
define( 'SECURE_AUTH_SALT', 'cs2vu5xmm8fzxqoxjf8sq0o3uzxj2x8f0aj7qt65ebvq6ceq7yx4zhkgpriqrtkj' );
define( 'LOGGED_IN_SALT',   '58nui2zyo8pitpnndrdheqkzknhf3ahylwwouom3g4rltok5m8pd2y2futykge4t' );
define( 'NONCE_SALT',       'fogaj4ibb5iugf6gn1fj7xv49yggsyj1cxomxauuynlawamhit1w10kbt4jwqu0v' );

/**#@-*/

/**
 * Antsamedia Core Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprm_';

/**
 * For developers: Antsamedia Web debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * nodocumentation(local)
 */
define( 'ANTS_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the Antsamedia Web directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up Antsamedia Web vars and included files. */
require_once ABSPATH . 'amf_action-settings.php';
