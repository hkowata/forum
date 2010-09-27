<?php
/** 
*
* acp_alpha_modules [English]
*
* @package language
* @version $Id: modules.php,v 1.12 2007/05/10 15:31:21 acydburn Exp $
* @copyright (c) 2007 phpALPHA Team - Based on acp_modules by 2005 phpBB Group 
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Here you are able to manage modules for the AlphaPORTAL sidebars. Please note that the ACP has a two-level menu structure (Category -> Module), which must be kept. You may edit a modules settings (eg the topic from which the poll module will get it\'s poll) by clicking the edit button. You may also make a module invisible, or disable it. To make a custom page, simply make a module with the class of \'Custom Page\', or in the more advanced module making area, select \'Page\' instead of \'Module.\' To make a custom page that is not included on any page except its own, make it under the \'Custom Pages\' category',
	'ADD_MODULE'					=> 'Add module',
	'ADD_MODULE_CONFIRM'			=> 'Are you sure you want to add the selected module with the selected mode?',
	'ADD_MODULE_TITLE'				=> 'Add module',
	'ACP_AP'						=> 'Sidebar Layouts',
	
	'AP_LEFT'						=> 'Left',
	'AP_RIGHT'						=> 'Right',
	'AP_COMBINED'					=> 'Combined',
	'AP_INDEX'						=> 'Index',
	'AP_PORTAL'						=> 'Portal',
	
	'AP_BIRTHDAYS'					=> 'Birthdays',
	'AP_DOWNLOADS'					=> 'Downloads',
	'AP_FRIENDS'					=> 'Friends',
	'AP_LOGIN_LOGOUT'				=> 'Login/Logout',
	'AP_MENU'						=> 'Menu',
	'AP_ONLINE_LIST'				=> 'Online List',
	'AP_PAGES'						=> 'Custom Pages',
	'AP_POLL'						=> 'Poll',
	'AP_RECENT_BOX'					=> 'Recent Box',
	'AP_RECENT_TOPICS'				=> 'Recent Topics',
	'AP_RECENT_ANNOUNCE'			=> 'Recent Announcements',
	'AP_RECENT_HOT'					=> 'Recent Hot',
	'AP_SEARCH'						=> 'Search',
	'AP_STATISTICS'					=> 'Statistics',
	'AP_THE_TEAM'					=> 'The Team',
	'AP_TOP_POSTERS'				=> 'Top Posters',
	'AP_WELCOME'					=> 'Welcome',

	'PORTAL_FORUM'					=> 'Forum ID',
	'PORTAL_NUMBER'					=> 'Number of Posts',
	'PORTAL_LENGTH'					=> 'Length',
	'PORTAL_ONE_POST'				=> 'One Post?',
	'PORTAL_SUBFORUMS'				=> 'Display Subforums',
	'PORTAL_SIGNATURE'				=> 'Display Signature',
	'PORTAL_USER_INFO'				=> 'Display User Info',
	'PORTAL_INFO_ORDER'				=> 'User Info Placement',

	'PORTAL_FORUM_EXPLAIN'				=> 'What forum the portal will get posts from',
	'PORTAL_NUMBER_EXPLAIN'				=> 'How many posts to be displayed',
	'PORTAL_LENGTH_EXPLAIN'				=> 'How many characters will be displayed of the post. Put 0 for all.',
	'PORTAL_ONE_POST_EXPLAIN'			=> 'Display more than one post from a topic',
	'PORTAL_SUBFORUMS_EXPLAIN'			=> 'Should the portal take posts from subforums of the designated forum.',
	'PORTAL_SIGNATURE_EXPLAIN'			=> 'Will the user\'s signature be displayed.',
	'PORTAL_USER_INFO_EXPLAIN'			=> 'Should the portal display the poster\'s information.',
	'PORTAL_INFO_ORDER_EXPLAIN'			=> 'If yes, should it be above or below the post.',
	
	'ABOVE'						=> 'Above',
	'BELOW'						=> 'Below',

	'CONFIG'							=> 'Portal Configuration',
	'CONFIG_NEWS'						=> 'News Configuration',
	'CONFIG_ANNOUNCEMENT'				=> 'Announcement Configuration',
	'DISPLAY_NEWS'						=> 'Enable/Disable News',
	'DISPLAY_ANNOUNCEMENT'				=> 'Enable/Disable Announcements',
	'DISPLAY_NEWS_EXPLAIN'				=> 'Do you want to display the news in the portal?',
	'DISPLAY_ANNOUNCEMENT_EXPLAIN'		=> 'Do you want to display the announcements in the portal?',
	'ENABLE'							=> 'Enable',
	'DISABLE'							=> 'Disable',
	'OTHER_NEWS'						=> 'Enable/Disable other topics',
	'OTHER_NEWS_EXPLAIN'				=> 'Do you want to display other topics in addition to regular topics? Other topics includes stickies, announcements, and global announcements.',
	'NEWS_FORUMS'						=> 'News forum id\'s',
	'NEWS_FORUMS_EXPLAIN'				=> 'These are the forums that the portal will takes news from. Leave blank to add all forums. Seperate multiple forum id\'s with commas (,)',
	'NEWS_NUMBER'						=> 'Number of news topics',
	'ANNOUNCEMENT_NUMBER'				=> 'Number of announcements',
	'NEWS_NUMBER_EXPLAIN'				=> 'This is how many news topics that will be displayed in the portal.',
	'ANNOUNCEMENT_NUMBER_EXPLAIN'		=> 'This is how many announcements that will be displayed in the portal.',
	'NEWS_LENGTH'						=> 'News length',
	'ANNOUNCEMENT_LENGTH'				=> 'Announcement length',
	'NEWS_LENGTH_EXPLAIN'				=> 'This is how many characters of the news article that will be displayed. Put 0 to display the whole topic.',
	'ANNOUNCEMENT_LENGTH_EXPLAIN'		=> 'This is how many characters of the announcement that will be displayed. Put 0 to display the whole announcement.',
	
	'DOWNLOADS_RECENT'				=> 'Recent attachment',
	'DOWNLOADS_RECENT_EXPLAIN'		=> 'Use most recent attachment',
	'DOWNLOADS_ID'					=> 'Attachment id',
	'DOWNLOADS_ID_EXPLAIN'			=> 'Set an attachment id to get the download from if recent attachment is set to \'no\'',
	'POLL_ID'						=> 'Poll topic id',
	'RECENT_TOPICS_ID'				=> 'Forum id',
	'RECENT_TOPICS_NUMBER'			=> 'Number of topics',
	'RECENT_ANNOUNCE_ID'			=> 'Forum id',
	'RECENT_ANNOUNCE_NUMBER'		=> 'Number of announcements',
	'RECENT_HOT_ID'					=> 'Forum id',
	'RECENT_HOT_NUMBER'				=> 'Number of topics',
	'TOP_POSTERS_NUMBER'			=> 'Number of Top Posters',
	'WELCOME_MESSAGE'				=> 'Welcome Message',

	'CANNOT_REMOVE_MODULE'	=> 'Unable to remove module, it has assigned children. Please remove or move all children before performing this action.',
	'CATEGORY'				=> 'Category',
	'CANNOT_EDIT_CAT'		=> 'You cannot edit this category. This category must remain the way it is for alphaPORTAL to function properly.',
	'CANNOT_DELETE_CAT'		=> 'You cannot delete this category. This category must remain the way it is for alphaPORTAL to function properly.',
	'CHOOSE_MODE'			=> 'Choose module mode',
	'CHOOSE_MODE_EXPLAIN'	=> 'Choose the modules mode being used.',
	'CHOOSE_MODULE'			=> 'Choose module',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Choose the file being called by this module.',
	'CREATE_MODULE'			=> 'Create new module',

	'DEACTIVATED_MODULE'	=> 'Deactivated module',
	'DELETE_MODULE'			=> 'Delete module',
	'DELETE_MODULE_CONFIRM'	=> 'Are you sure you want to remove this module?',

	'EDIT_MODULE'			=> 'Edit module',
	'EDIT_MODULE_EXPLAIN'	=> 'Here you are able to enter module specific settings.',

	'HIDDEN_MODULE'			=> 'Hidden module',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Module successfully added.',
	'MODULE_DELETED'			=> 'Module successfully removed.',
	'MODULE_DISPLAYED'			=> 'Module displayed',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'If you do not wish to display this module, but want to use it, set this to no.',
	'MODULE_EDITED'				=> 'Module successfully edited.',
	'MODULE_ENABLED'			=> 'Module enabled',
	'MODULE_LANGNAME'			=> 'Module language name',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Enter the displayed module name. Use language constant if name is served from language file.',
	'MODULE_TYPE'				=> 'Module type',
	
	'MUST_SELECT_CAT'		=> 'You must select a category to put your module in.',

	'NO_CATEGORY_TO_MODULE'	=> 'Unable to turn category into module. Please remove/move all children before performing this action.',
	'NO_MODULE'				=> 'No module found.',
	'NO_MODULE_ID'			=> 'No module id specified.',
	'NO_MODULE_LANGNAME'	=> 'No module language name specified.',
	'NO_PARENT'				=> 'No Parent',

	'PAGE'						=> 'Page',
	'PAGE_ALIAS'				=> 'Page Alias',
	'PAGE_TITLE'				=> 'Title',
	'PAGE_CONTENT'				=> 'Content',
	'PAGE_IN_MENU'				=> 'Display in Menu?',
	'PAGE_WELCOME'				=> 'Guests Only?',
	'PAGE_ALIAS_EXPLAIN'		=> 'A shorter name for your page',
	'PAGE_TITLE_EXPLAIN'		=> 'The title of your custom page',
	'PAGE_CONTENT_EXPLAIN'		=> 'The content for your custom page',
	'PAGE_IN_MENU_EXPLAIN'		=> 'Do you want a link to this page to be displayed in the Menu?',
	'PAGE_WELCOME_EXPLAIN'		=> 'Do you want a link this page to be displayed as a Welcome message, and only shown to guests?',
	'PAGE_CREATED'				=> 'Page created successfully.',
	'PAGE_DELETED'				=> 'Page deleted successfully.',
	'PAGE_DELETE_EXPLAIN'		=> 'Are you sure you want to delete the selected page?',
	'PAGE_UPDATED'				=> 'Page information updated successfully.',

	'PARENT'					=> 'Parent',
	'PARENT_NO_EXIST'			=> 'Parent does not exist.',

	'SELECT_MODULE'				=> 'Select a module',
));

?>