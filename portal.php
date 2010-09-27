<?php
/**
*
* @package Display Posts Anywhere
* @version $Id: posts.php,v 1.0.0 2007/09/09 11:49:44 handyman Exp $
* @copyright (c) 2007 Francis "Handyman" Lewis
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('ap/portal');

// Output page
page_header($user->lang['PORTAL']);

$template->assign_var('S_IN_PORTAL', true);

$template->set_filenames(array(
	'body' => 'portal_body.html')
);

page_footer();

?>