<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'centrocx');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'hrossi');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '9|Q2|lHBpCxKt');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql995.umbler.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E91SP>:0~ZD/ 5&@kG`v{}*JFOI[F0&_q|B8Ba3n<qAA9>R^=1(?mu+&3!rVFA5j');
define('SECURE_AUTH_KEY',  'cDx&-d1J<eTQoEi),5dzAJ.w7-]Oug+97ldZ4F~y^WiBb4n.EPLi|Mv(?lr:Y)J+');
define('LOGGED_IN_KEY',    '=+emn**9pY<9FjkjM/_q^p61RAvO o1%tLU**is,woJ<arL,xh_-R vvuIhkX>VJ');
define('NONCE_KEY',        'x2f31aTF>H3,&5&?Hv}?LPHXY+2/77)o,nE@[InMLAVm$7I0IcSqjVY@tq}_Ht,y');
define('AUTH_SALT',        'fJ`!)ZYDI$i)jLEN9Gr|Z*b8jTi1B>vH3 VX(,O.|L-[p~-o2JnXA{%;I6.6f5v~');
define('SECURE_AUTH_SALT', 'Cg`D;zXmHdVX_PWZDby^|}k5gT)Y:!_)R+^0)pg_8@sqO$A,ScA^e2`27{6s/.F}');
define('LOGGED_IN_SALT',   '&)3+~gV246+GNt.DTUgXd&Gl>E1FT&L(K37F r#EF; z~0bz215@);xav~P[^yB,');
define('NONCE_SALT',       'JKl,3@8Hlp;t61hnMvX!zX-Kb<9mRvgAm>^VAY#~^bx&B-[vnY4!4uLi:pI3I_ve');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
