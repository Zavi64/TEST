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
define( 'DB_NAME', 'test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|z@>(Y-.Bo8Q_U&Fdn:]gW(J2h%jonE<I7kw%Lmj$^6?<plvbG}NXdt:t)oNDZ5{' );
define( 'SECURE_AUTH_KEY',  '1gv?V.Qr>! ,FNFs%r:Te^IkINE1jDhilp>6TP9[mB(D<~jX48S]OL9+P/D/1M~I' );
define( 'LOGGED_IN_KEY',    'dTR1@l`pa~uX>oUi~jI(iD-l~&,,lns&B?Dm8vo]@_eM`l(]$ ,UHo(a1OQ}c0:1' );
define( 'NONCE_KEY',        '~f}6:o_;r@;]sd>7in73gyR}z> blvk/gTCz[<J<)4esu<]MHx vrF6f|)$7J==t' );
define( 'AUTH_SALT',        '9TV=c-%6&ne?oX0KHCJjEgiPXCG+_IwcAL;P5.+vAgoKi{N5P_bj,6Etn6@~P$F-' );
define( 'SECURE_AUTH_SALT', 'Vp w%121so-Tcs2)}iBf[+:lJ$q>;CGXN.K*SDX=LWF)5Wu@ZkSjehda6c=rfh E' );
define( 'LOGGED_IN_SALT',   'oq3>Hd,bnvFKlyLf=e6+BQs3H,gs$cwXy:Q*x@k]{oAyJ#?vqCPH-C7?^/Ll:pm1' );
define( 'NONCE_SALT',       ',oGM+slE2Oqdfz7)So7DmIG3QTyAM.H=P2q0g:&jz@^tW7wqWMOD&UBGJ-_3vf7A' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
