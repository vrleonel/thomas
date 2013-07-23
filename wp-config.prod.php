<?php
/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */

define('DB_NAME', 'thomashoopertattooingcom_wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'hooperserver');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'wpThomasBlog');

/** nome do host do MySQL */
define('DB_HOST', 'mysql.thomashoopertattooing.com/');


/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '<ijXyUQc_:2iI/3o|0.85m#!B{8sDLtt%Hg}*HST1` _),u+`%_o&is`n?{5,jDa');
define('SECURE_AUTH_KEY',  'h /Me-X/az||+pQ_s8hj%zLt+pO{cKaZ+8saCdcO(yx]qL~~OPoqn0>jCY1NX+:0');
define('LOGGED_IN_KEY',    '#W@Pbz,,G<Xlu^@u;:Q^xmS5K3-WLl*g?A|h6(#f&No7L#bdc1UjMB>)Fu,Kt|9%');
define('NONCE_KEY',        '.dZdSahYi~,QM90S=VLWCrE=tb_]OhQLv+Z3P-YcCUX0I?/`(=jW5xW!GVc=/g2U');
define('AUTH_SALT',        'wYshtx/FS?rQO&WK[duej%&>7j|UiPa}`_./:U-aKZ$<#of)L~C1-LOvlU7Tvh[J');
define('SECURE_AUTH_SALT', '8zKkM]I8wVWl+%LDoA>A~bP7PZ]+iUIYpX8BW!Px;kl&J>hc&sD/JUi6NIs+sko-');
define('LOGGED_IN_SALT',   'OY-7+R@HsYn.@M!iQ}k%$2iM.t|G 7lK- H| fC_-+{+|V$8Cp.jWyvz4/G+?)d|');
define('NONCE_SALT',       'F*KdU]A4DUlT%t2Bu8r;,Sw*OgA|Qd#93#OkPgi1&qSDB^sH&/1wM<E/VLOP`&[W');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'thomas_';


/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
