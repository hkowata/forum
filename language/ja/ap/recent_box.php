<?php
/** 
*
* alphaPORTAL Recent Box Module [English]
*
* @package alphaPORTAL
* @version $Id: portal/recent_box.php 2007-08-04 20:43:00 Harmlessgoat22 $
* @copyright (c) 2007 phpALPHA Group
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

// Common language entries
$lang = array_merge($lang, array(
	'RECENT_ANNOUNCE' 		=> 'Recent Announcements',
	'RECENT_TOPICS'			=> 'Recent Topics',
	'RECENT_HOT' 			=> 'Recent Popular Topics',
	'NO_RECENT_ANNOUNCE' 	=> 'No new announcements',
	'NO_RECENT_TOPICS'		=> 'No new topics',
	'NO_RECENT_HOT'			=> 'No new popular topics',
));

?>