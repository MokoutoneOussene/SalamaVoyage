<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'base-agence');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<lrEY v6{DQg.4S;,6Y&)KMzQ8tzIWZcH*%]f!7:;i|![_r)+ev[w>0q~LV_~<x&');
define('SECURE_AUTH_KEY',  '7u4K,T*B|D[2s(c,RQN&qzk=`?B5%7zj+WJ-J%R[&uKetp|~17c`(5~_F-r)|qa7');
define('LOGGED_IN_KEY',    ',5TZ&e>Y}!VK(r2ED+r}H<MBKrX,x{ZuKWiUc1w/ys^+Ox~}mICh49=r_$Ln4Hi-');
define('NONCE_KEY',        '4/ANipav>LA>8-Cx)$DT3~?:o*6J}$%ZWL!v_)QEnl22Oyk?z$9;]EgARf|G8YV1');
define('AUTH_SALT',        'F+Wmk{y_+x}-]ffEYY?v#=R-SJMg3*NGNz<Q.sz^^!$:Cn93zs.i^s`MR%/5n(9P');
define('SECURE_AUTH_SALT', 'dvq}Q&KLd{_:MfBosZTKQRE|=TmJU?tW>bf/^2yWruSHLSsEwgfRaZoC&y&3yvQ8');
define('LOGGED_IN_SALT',   'Z_G!X#mN[&L< zcL3RjO;},EI_$?iL5.$[A=>TK[8qv$PoMpcf0Ldj-/q}L g_@F');
define('NONCE_SALT',       '3WKeWmY5V2|^b t{%g;H9G eSrm7@^6.WNiw{dKH g2`l8^@6<G&{Ao`IX5WZ4ag');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');