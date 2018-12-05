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
define('DB_NAME', 'CMDS');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'CMDS');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'CMDS');

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
define('AUTH_KEY',         '0lB`2a:L540R~Vh-SIF]:s)LEs[hc+/1Rcrl=YFm<lMdIR4kd08 VqLQl/m6!Wn}');
define('SECURE_AUTH_KEY',  'AJBe1!dU+NMu3.r3]]+p}-Ys@mi#-wNS*)Af H=|~;=?viTPnm-AxhxynJmZH]5P');
define('LOGGED_IN_KEY',    '|96{|n4Q?Bs-r2HT)H3apmX<&|qcJ4i|v,(M}IA[&42sT@xr}szbv^}vT|&cA(.j');
define('NONCE_KEY',        'D4X^i:i7U-Jd.5HHH_--q[lvTjL=<Hp_pImr!3S6){8LLfmy`TEX^`H!!z%0)?[[');
define('AUTH_SALT',        ' 5wcB=7_0?!&=k(h(2cI-M[O .r!O|.dFb]FAD{kyP<T:9^g|&vTPj>bE/P.5e<w');
define('SECURE_AUTH_SALT', '6fK9%3t=C@w.Q9NgL1`5>)+<7G=-4(WlX(bO9q!M[7P<e}6_>_.c4||][GjpX{<x');
define('LOGGED_IN_SALT',   'r*=pap!>f=&NdG-YM.Vm8Y)oTS T|mq*I7N]-G%*5&Ze&Xqe#aTNNC=!+e*#(Z-=');
define('NONCE_SALT',       'Q$leq5+{W6=+%;L-P>E+Ig9u.P?[IF%gV#4J4R9/Lc9Gy]aXCe33pJby7Yo]nBsF');;
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

// J'indique à WordPress où se trouve physiquement le dossier "wp-content"
define('WP_CONTENT_DIR', dirname(ABSPATH) . '/content');

// J'indique à WordPress l'url du dossier "wp-content"
define('WP_CONTENT_URL', 'http://localhost/CMDS/content' );

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
define('WP_DEBUG', true);

// Si le débug est activé
if (WP_DEBUG) {

  // Permet d'afficher ou non dans la page les erreurs
  define('WP_DEBUG_DISPLAY', true);

  // Permet de stocker dans un fichier de log les erreurs
  define('WP_DEBUG_LOG', false);

  // Je désactive les révisions (le versionning des contenus)
  define( 'WP_POST_REVISIONS', false );

  // J'autorise l'installation de thème & plugins
  define( 'DISALLOW_FILE_MODS', false );

  // Je garde la corbeille qu'une seule journée
  define( 'EMPTY_TRASH_DAYS', 1);

} else {

  // Permet d'afficher ou non dans la page les erreurs
  define('WP_DEBUG_DISPLAY', false);

  // Permet de stocker dans un fichier de log les erreurs
  define('WP_DEBUG_LOG', true);

  // Je limite le nombre de révisions (le versionning des contenus)
  define( 'WP_POST_REVISIONS', 7);

  // J'interdit l'installation de thème & plugins
  define( 'DISALLOW_FILE_MODS', true );

  // La corbeille est concervée 30 jours
  define( 'EMPTY_TRASH_DAYS', 30);
}

// Désactive l'éditeur embarqué
define( 'DISALLOW_FILE_EDIT', true );

// Je demande à WordPress de télécharger directement les fichiers
define('FS_METHOD', 'direct');


/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
