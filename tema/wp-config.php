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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_bootstrap4_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'R@Jpj(b;X;9/X$k`$l;i)P:qQ}8?u.kF%zKq-`dMgFsyi((:XK-#-~`Y8<_yT%N.' );
define( 'SECURE_AUTH_KEY',  'wC?Br^ 5*YW*SMQNFRGAmx.4LF?|Is+i^&L0S9r1%nEK+TkG/JbXzjl{sM1+2HkC' );
define( 'LOGGED_IN_KEY',    'n ?TVeMPyr7k{lra5}&T]%.Z4>)B-w]3D/4Q`&0Che$D`C/5bZBzW8;0A0D2=#|k' );
define( 'NONCE_KEY',        '{L5OtW%wnGX>Yp(.>(RQ._STp!p|r#+{FZATk[LAc<vMiI#x0QH7GNBCHri4~?|$' );
define( 'AUTH_SALT',        'vIpq>TZ_p .[fA9RO`>f,XXB/UxCX2eD:g%Q,[|.R_1{3C[07zh8<jo@]6KG0Vb-' );
define( 'SECURE_AUTH_SALT', '%2Uv`=k=8w`k./:P7F{{M>i2g;]JZ2D@xOJjF@KaX46^eu^.(Uk}u>=eS7j4j6g[' );
define( 'LOGGED_IN_SALT',   '`Bz)a&._sZ$X6K^Wuw9Ye:b8&FJVmWwP$[`J)(,ICP/tOF{QJ???B/Qhg.f4+X=4' );
define( 'NONCE_SALT',       '(#jHk4+vCO_UTm5e_Ptjq8wCtb8v1183)zYU|A@Km@9iDVa)D~qejHt<zQq7JW=z' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
