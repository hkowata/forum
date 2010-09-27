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

class ap_birthdays
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		// Generate birthday list if required ...
		$birthday_list = '';
		if ($config['load_birthdays'] && $config['allow_birthdays'])
		{
			$now = getdate(time() + $user->timezone + $user->dst - date('Z'));
			$sql = 'SELECT user_id, username, user_colour, user_birthday
				FROM ' . USERS_TABLE . "
				WHERE user_birthday LIKE '" . $db->sql_escape(sprintf('%2d-%2d-', $now['mday'], $now['mon'])) . "%'
					AND user_type IN (" . USER_NORMAL . ', ' . USER_FOUNDER . ')';
			$result = $db->sql_query($sql);
		
			while ($row = $db->sql_fetchrow($result))
			{
				$birthday_list .= (($birthday_list != '') ? ', ' : '') . get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']);
		
				if ($age = (int) substr($row['user_birthday'], -4))
				{
					$birthday_list .= ' (' . ($now['year'] - $age) . ')';
				}
			}
			$db->sql_freeresult($result);
		}
		$template->assign_vars(array(
			'BLOCK_BIRTHDAY_LIST'				=> $birthday_list,
			'S_DISPLAY_BLOCK_BIRTHDAY_LIST'		=> ($config['load_birthdays']) ? true : false)
		);
	}
}
?>