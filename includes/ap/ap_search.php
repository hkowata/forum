<?php
/**
*
* @package acp
* @version $Id: acp_bbcodes.php,v 1.42 2007/06/16 14:11:27 davidmj Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/

class ap_search
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;		
		$template->assign_var('S_IN_SEARCH', true);
	}
}
?>