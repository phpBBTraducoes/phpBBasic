<?php
/**
* phpBBasic extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 2.0.0] (https://github.com/phpBBTraducoes)
* @copyright (c) 2015 DavidIQ.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_PHPBBASIC_CONFIG_EXPLAIN'		=> 'Ativar o phpBBasic criará um fórum com o título "phpBBasic". Isso manterá a informação do tópico em um fórum separado, se necessário para desativar esta extensão.',
	'PHPBBASIC_WARNING'	                => '<strong>ATENÇÃO:</strong> todos os fóruns anteriores serão removidos e mensagens movidas para "Fórum Principal". Isso NÃO PODE ser desfeito e pode demorar algum tempo para ser concluído se você tiver muitos fóruns.',

	'ENABLE_PHPBBASIC'					=> 'Ativar phpBBasic',
	'PHPBBASIC_ENABLED'					=> 'phpBBasic foi ativado e o principal fórum foi definido/criado.',
	'PHPBBASIC_DISABLED'				=> 'phpBBasic foi desativado. O fórum principal usado para phpBBasic agora deve ser visível.',
	'PHPBBASIC_FORUM'					=> 'Fórum Principal',
	'PHPBBASIC_FORUM_DESC'				=> 'Este fórum é exibido na página de índice, juntamente com todos os tópicos.',
	'PHPBBASIC_OPTIONS'					=> 'Opções do phpBBasic',

	'COPY_PERMISSIONS_FROM'				=> 'Copiar permissões de',
	'COPY_PERMISSIONS_FROM_EXPLAIN' 	=> 'Selecione um fórum para copiar permissões de fazer a página principal ter as mesmas permissões do que você selecionou aqui.',
));

?>