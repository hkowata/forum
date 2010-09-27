<?php
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

// Adding new category
$lang['permission_cat']['alpha'] = 'AlphaPORTAL';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_manage_pages'    => array('lang' => 'Can manage custom pages', 'cat' => 'alpha'),
	'acl_a_add_page'    => array('lang' => 'Can add a custom page', 'cat' => 'alpha'),
	'acl_a_edit_pages'    => array('lang' => 'Can edit custom pages', 'cat' => 'alpha'),
	'acl_a_delete_pages'    => array('lang' => 'Can delete custom pages', 'cat' => 'alpha'),
	'acl_a_page_permissions'    => array('lang' => 'Can set custom page permissions', 'cat' => 'alpha'),
	'acl_a_manage_alpha_modules'    => array('lang' => 'Can manage sidebar modules', 'cat' => 'alpha'),
	'acl_a_portal_config'    => array('lang' => 'Can edit portal configuration', 'cat' => 'alpha'),
));
?>