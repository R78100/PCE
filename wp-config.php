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
define('DB_NAME', 'PCE');

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
define('AUTH_KEY',         'zhEy6abMdsVwz~7/?M=R9War*gVaG=Uh.y{Tp8 ;YE _>RMjY:[R ehQ6YheHx,k');
define('SECURE_AUTH_KEY',  't>!]z=K0yiU!Wg[eG3p7TbNi`r:~@xpu*LP4uVCS_+-oV_nD]#y6d6VJ0np[@QB}');
define('LOGGED_IN_KEY',    'Pv(W=o[nK:m+^_THQ5t4 ,e(X;=W{bp7NX;D59A1K[p-&`O<kJ<-Ahq)cNE.3pA0');
define('NONCE_KEY',        'im^7/DMwN|Jt3l^P#Ui2}#3*Sq{^HsJq#}(ZW??vH%;`NxlA $k_J!V2`;fI93iP');
define('AUTH_SALT',        'leAU(~a}`MH+FMJ+GkrE!LX0-KG=[:AzFJ2]tO#aS3X9(l+sR$9Y&&]ZQ#52li{(');
define('SECURE_AUTH_SALT', '(YgxOdCt=B)o}Pl;_!YN8fg)wi2&3Z^mY+U^qVr;u;8yGiBMvS`s*;nr2SGvu}Qd');
define('LOGGED_IN_SALT',   'xd5#>0e`Yr<zM%Omkk4}b;`JX:?2G*`|b$XqZqT_=JJ:T`K&0fw@o7dooy+i2o)G');
define('NONCE_SALT',       '`:xLN:cRg(sWk(rvQLe`Z~ebDSUPgBqhyC0#@Q9Q{&&YB|JLyF9dz3tD/HI/:xED');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'PCE_';

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
define('FS_METHOD', 'direct');

