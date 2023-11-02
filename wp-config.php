<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'Tv!f|xy$b>]:-f>,Esm|tuu3t803{$trIg`dAj|_SZ{!W mb~*H9.,j!41!_CRqu' );
define( 'SECURE_AUTH_KEY',  ')_~ uM~@$*G+0-o.W@$v29(Bqh#>a<4&b;Cr=[,z`}Xe@.6K[?B(0N<A5Sn2,hL(' );
define( 'LOGGED_IN_KEY',    '.o-(El-.r/.W1P#*)C&.R+f/zbxd9.@~Ot5=FVznzI4I@,IXh-x>63}*ctD|<sXG' );
define( 'NONCE_KEY',        'Rh m^vo@}X<ep6$,?JiO6riX2o?igBS~^8*qPw<*!=?@cn3P{Po]pjz<>NQ7:Ke*' );
define( 'AUTH_SALT',        'ep//{>#Ft5@_!} ?k!:-s.y:%849Yy!nnnBIlaQQ[&D(AC/ba0}||j}RS5Xx}8`b' );
define( 'SECURE_AUTH_SALT', 'FM@rrm;b>O?cY;GBNQ3NDAIUot|xnUDRR[E;sO;4H}z=KN]r5Egv.v=maw.P6no9' );
define( 'LOGGED_IN_SALT',   '+fO_Nt_KaR^EcLxe:RV6`lT,>DH95H0Nq^J_SO U/zxZ/u7)kNY(|C@po5y0Zm},' );
define( 'NONCE_SALT',       '8m1J?V]tbVYYBC;WnYI_x%=M!E*ubtG~7gL1H`;v>B4!&Ds2RcQJQfS<0sI&Fm[c' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
