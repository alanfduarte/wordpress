<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoemvideowp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*<`?lVg[$HY<y8]_1YVU/7u>bI>8  1[TNwd0^u~qnopNdc:]yrx?1LSk_T5*E1N' );
define( 'SECURE_AUTH_KEY',  'O?rMg9L+XGz:(Vx5f*,;j~:?1,MqXVD$$zIG7t[BWCzZS|VWBQB`*??k.?}Ciqq2' );
define( 'LOGGED_IN_KEY',    'pp}+!lw^bx9)&@1wT:ox|#3gfeM]?p=J%JU2|;b#m=)%Y;FP^nw@=g])=,5F,vY|' );
define( 'NONCE_KEY',        'l/Lqoz,-&16!OiC;gqqqocs-R<Yp?G;mMQJKt@>qW-<H=MdL{Y]YG@0*|%2OWj!m' );
define( 'AUTH_SALT',        'F%OH#k&c(q?8lnb5YT8/6J*>HX(AQ}^/Qdd{+gM:X!eoRMK|K?^4t1[|iIwB?iV!' );
define( 'SECURE_AUTH_SALT', 'N62/s%HA@~x+>)x-m3 <)}kkar5@a4B%xD}$dI+ZPe:8$l]+{#Cyi=Z4HFo-^J0d' );
define( 'LOGGED_IN_SALT',   'Cz|P]KOmHiZCv1b.jR*V}<uUw_=*IuO>G+6?a0q&{+&8=3r1hXNg(]J,HLI+ 1D:' );
define( 'NONCE_SALT',       'iFNhnl;}D6)6`LK,^cP${+=;xnSQSw#EbLSTGM]rlf^(l8`7||f8grR+h=3/q`O{' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
