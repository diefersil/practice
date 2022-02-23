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
define( 'DB_NAME', 'practice_wp' );

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
define( 'AUTH_KEY',         '!2[.bnLc6 Q!xH9j;:EJXc#:b?2njt<>V;^>KAt@na]P+E <!>T3]B$*nW3 /@w0' );
define( 'SECURE_AUTH_KEY',  'Zn^{D;(bqSfV%,}#z2pPH,u}deo4LK{L9bt8MXad`hyE%E,xF`h]cWt>(=! m%3;' );
define( 'LOGGED_IN_KEY',    'Wi,MY3ze_oT/9XrA.bDb0hNK$)TvW%,al(-~]mcf4:b_#9-ra4~{_$TafF`<mD9#' );
define( 'NONCE_KEY',        '=e;($f~GZaWx57axZ6R(-^7@t0]nL2-qcvqY7OYL+3i&U?%?SX1Ae:@~fXmBs_^:' );
define( 'AUTH_SALT',        '2.br+m7*m qa)t?VS&+iHZ5&F`EJo*OeCj_vaXmX)U4.r>m-^<RcU5<tPq]2l<^~' );
define( 'SECURE_AUTH_SALT', '0kYxHIq;:{)MjEs kTMXm,U|nY1kGwU;U:uvUf0Hw$4 &-^jBn$5bk=~OCztO]Br' );
define( 'LOGGED_IN_SALT',   'mX5peI`K]W`uIDiMSshev{4&vOr%<<,7)Cv</Wc{Gh_ss|W58+:N.%gN.*i|nl`F' );
define( 'NONCE_SALT',       'v,>r#t$MsNO[[vTS0Yxg#v&Nq/#eyuTHnp[Fx0]eocSj]0WhI?z%xL!+!h(JuJ,b' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
