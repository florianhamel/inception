<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'bob' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'hehe' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mariadb:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';8!GoQv[GX ^{ %k.$VRheK0:2t@T@c-E%-zh4Z|mU9LT4-]l(c@cH&!kAu%G:6T' );
define( 'SECURE_AUTH_KEY',  '.*2ZR]m%])0Y1BgmmQ7f_Sp`.[6>i<0LcQ-mO%?r zW%h2g5|&`%(w dsi1|{^lJ' );
define( 'LOGGED_IN_KEY',    'a/WuCQ>EoF:A?^V>[cxceAoF=e/MA6K9kDu)RgGQGst9|M]UFr>1`+L$UVC ._tz' );
define( 'NONCE_KEY',        'gtu{Bx2BT56!6kKM,-s[ 2SX<+d&ktKsh^_v-&eZE/K`Lg{XM^>*(;w*{C0e!-M~' );
define( 'AUTH_SALT',        'x[cHY?9$1GIzh%XdoBM1+jWm}CS_!_0)j;F~u;X[Z N}Q[0b.::aR|._d+9Mm9L%' );
define( 'SECURE_AUTH_SALT', '>OQsvSaT)#MZQO#5iN6k=1S[zVWENd:4yV>] =7)2/x)i-y|$EfI](t&!t>0qvaI' );
define( 'LOGGED_IN_SALT',   '$`#h<|B6jA<FJ!R!D BQRy[.enskW1 UXKhb3tZK|N/6KaBTG{NyJjIJ:N*,[lG4' );
define( 'NONCE_SALT',       'mGOLTkMtr:L?eNc4aZX+Q%&ME,|MTq/aR}l|3T7WFh;TB8#y6&g5y8pDu,y&5?-M' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
