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
define('DB_NAME', 'funlife_db3');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'funlife_user');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '@funelife_uio');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

@ini_set( 'upload_max_filesize' , '1280M' );
@ini_set( 'post_max_size', '1280M');
@ini_set( 'memory_limit', '2560M' );
@ini_set( 'max_execution_time', '50000000000' );
@ini_set( 'max_input_time', '300000000000000' );

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
define('AUTH_KEY',         '}b03]5f7I;$#}$LB9Ak<)y={},,8evN6L3u/$cDEYhQz!|f8MKqs9|3_Gnf=iW=N');
define('SECURE_AUTH_KEY',  ';QY)oP!(: |-6xrp,Q2K4_j1z=t[O_})A`_U|^F$A&!7Z*>O$wc#u?_`myI0&L~=');
define('LOGGED_IN_KEY',    '5R**xV&_xrl{zna&%{]^s[Mi9rC/<i;}p+q)@H&4q9 j}>*_08Gin).fe*7k!!sT');
define('NONCE_KEY',        '3jAuM.oRD+F7P&(W>85p>,4F,Pa:D^<bGL_1bDR:yue]]z}myG];8>omZ*V-IoO`');
define('AUTH_SALT',        'Z}2]6/;k+W5bJ,NpA^iCGZ0x?u&dhA3HBe( 5U;{8GeOi]K9$2fn6o7WA6?.a@&!');
define('SECURE_AUTH_SALT', '[?HYx%O2cV`fVoAvfEFNO)K^:Q?LCX~}j@r(d=dl&A~7r1+K}Cm;;FL/@t@@>ju^');
define('LOGGED_IN_SALT',   '7C<xNJ<<Ay, ,52c^8|jBUk>Sh[lkgmFqkuNW9PsHx4qQ#h 0J?XL8PWFm;Y`|LC');
define('NONCE_SALT',       'e/D0q2s@]qB{K<8}xpo*I8Zz}0+Ui@rNxioR>GQF4[Lr7^>Bp]]AlGo0/s%y4_L$');
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