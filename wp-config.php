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
define('DB_NAME', 'easypaie');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'P4S%6HM1T);wiH8s $x3:to;iq<u1R&&ot4VY/NMg$:lqx&A-aiiNYNMv9i`fn~$');
define('SECURE_AUTH_KEY',  'L#><5N{D3IPY{>54(YjkLI@aD*;p8kgSNs:T<Qkv/-^VcZZF*izZ_3 U?)P: W:t');
define('LOGGED_IN_KEY',    '*vmLmmIH4I*{$AP}MuICK<6I NgXolX$L:wD$pO-&~`=XOSA9JZs(Tv]<[GY]s/C');
define('NONCE_KEY',        'o{@!DL.gw`U0[}2PkV2>;|X}qb_]rCPq1DIZG?{*/:)poksb}8gd5m*dIPQyLp:8');
define('AUTH_SALT',        'tKfvLmPr^VjANHNC<R&KA43rJ(&?YVBb6OS}trj@%|R:w=,WKn&AvQxGN1}//w;D');
define('SECURE_AUTH_SALT', '~{}Rzl97o{WOpaU9S1;aYQ?%G$2v61-:)X@$Gcz@2.a|q!dpo4gO*1fH~uRQ`o1g');
define('LOGGED_IN_SALT',   '*RV0,sMsQjxn#//m9u2vKr.rF%5G^.(48KWtT+d]s:yC#teAjsHRls:SHkWvkc>]');
define('NONCE_SALT',       'NnPZh>Q$<}5;rB<@HsP;vV)r%k)2l48MZq5`-oRFDS%t@v/lm=A:nO3T=<.9yO|^');
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