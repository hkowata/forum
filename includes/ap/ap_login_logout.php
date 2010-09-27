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

class ap_login_logout
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		if ($mode == 'login_logout')
		{
			global $db, $user, $auth, $template;
			global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
			$template_root = 'alphaportal/';
			$this->tpl_name = $template_root . $mode;
			$user->add_lang('ap/' . $mode);
			
			include_once($phpbb_root_path . 'includes/functions_display.' . $phpEx);

			$template->assign_vars(array(
					'BLOCK_AVATAR'				=> get_user_avatar($user->data['user_avatar'], $user->data['user_avatar_type'], $user->data['user_avatar_width'], $user->data['user_avatar_height']),
					'BLOCK_WARNINGS'			=> sprintf($user->lang['WARNING_COUNT'], $user->data['user_warnings']),
					'BLOCK_WARNING_COUNT'		=> $user->data['user_warnings'],
					'S_USERNAME_FULL'			=> get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']),
					'S_LOGIN_BLOCK'				=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=login'),
				)
			);
		}
	}
}
?>