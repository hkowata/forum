<?php
/**
*
* @author Steve(c) @ www.phpbbandbbcodes.com
* @package umil
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
		'INSTALL_TOPIC_SEO'				    => 'Install Topic SEO',
		'INSTALL_TOPIC_SEO_CONFIRM'		    => 'Are you ready to install the Topic SEO Mod?',
		'TOPIC_SEO'						    => 'Topic SEO',
		'TOPIC_SEO_EXPLAIN'				    => 'Install Topic SEO database changes with UMIL auto method.',
		'UNINSTALL_TOPIC_SEO'				=> 'Uninstall Topic SEO',
		'UNINSTALL_TOPIC_SEO_CONFIRM'		=> 'Are you ready to uninstall the Topic SEO. All settings and data saved by this mod will be removed!',
		'UPDATE_TOPIC_SEO'					=> 'Update Topic SEO Mod',
		'UPDATE_TOPIC_SEO_CONFIRM'			=> 'Are you ready to update the Topic SEO ?',

));

?>