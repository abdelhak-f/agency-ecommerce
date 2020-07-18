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
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Ke:Di:v%G[fL4J{P3FqK{S8mGXb?n5C4<+F)*En^hc+i!?N:A;cJfo.y>d;I}>8?' );
define( 'SECURE_AUTH_KEY',  'q.qUi!),[ViO4$O}UiR 06/*U@&|EWpdf)Rg>Gmp<F(P~aMx<^:?eZ69NaWSc2@*' );
define( 'LOGGED_IN_KEY',    '(%zR>A!H_{Ka4>AYKu(D%B:~o-q@[Eq9+J=J*nl/pO`vrE@N2( JQ?K;h+FT;a`e' );
define( 'NONCE_KEY',        'FtIzQ]abR[r0Ui)cfDYzNhIE-S+_ap].yw0O7N3)SW$[s^g@W-Dg.J97Yx@>}om[' );
define( 'AUTH_SALT',        '_U(EoW}V:aKA.eHcbSGBf h1BRx]h7N)v4pn$.&9qW5Y7j#1mjWFPH&#3,S:h`I(' );
define( 'SECURE_AUTH_SALT', 'wwgbmmgeV**ri1?sl&[CV,?:NPOk(wnY`[rI^m!jshEm6XQr#HA1(Mb]@*nH!m4`' );
define( 'LOGGED_IN_SALT',   '%Zn8<46s-4d?--;1vZ2e#zcl `]pSTMn#GA#o jXi%.Di5Uh`$zS:Yf5&.:Wli;}' );
define( 'NONCE_SALT',       'Sxb^Kf<8,4_mXq~dGW.|X&]#(!Q!dq}bG3.31u*Vo&iWSw]Z-xJMtC7q,wpzao.N' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
