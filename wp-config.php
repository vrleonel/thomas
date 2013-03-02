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
define('DB_NAME', 'thomas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'S33$JE{nwm5;!Mw, *l8~.%Ple-U#a=rZU*T&|Xb;]D|-;B|)cMZwP(&8_;?O0F^');
define('SECURE_AUTH_KEY',  '9C_&gLe+Gb;y8=*MVU=&EUynxd5nxP~uu.Rd>%cg6&MCIRR5GLk0[kw=A/aBrv7s');
define('LOGGED_IN_KEY',    '-CBT`:k].hZs>aGeU<iVsYTIEuQLBH8glNx@P3{%`o:xEz+c$Pko:]u+7uYME`o3');
define('NONCE_KEY',        ':rxb2=NM(GC8dw6aXaU;3T>+[F{FN<BX[][RFx!APQO{a8,CDalB%{ e;ys>)O/7');
define('AUTH_SALT',        '_(CE[ <>J(S_1P OIJO=!W_5*/JV@Lak3[lq#Qw3!dh+cHQT_?A,>K?&7~i-*us0');
define('SECURE_AUTH_SALT', 'JW_OmMd5<54jB0[Z^+jvj7v/)1<xa_L/vQ@P^/l^>(M5+E>1qFWp80UFT&29)PLv');
define('LOGGED_IN_SALT',   '{8L$A_<l9[WnIuZ26Zb7o}y|?2b(rauD@ gFKtpumdJlH$%>!7~]qC]eNjte]d9+');
define('NONCE_SALT',       'Wa]+xaAyEc.>%W|W<m9`-5t^{,eAP}w/<W}Q^&Dk9[$|noH(XL&9?5*hG/HNeyUv');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
