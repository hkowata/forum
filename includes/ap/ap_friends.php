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

class ap_friends
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$user->add_lang('ucp');
		// Output listing of friends online
		$update_time = $config['load_online_time'] * 60;
	
		$sql = $db->sql_build_query('SELECT_DISTINCT', array(
			'SELECT'	=> 'u.user_id, u.username, u.username_clean, u.user_colour, MAX(s.session_time) as online_time, MIN(s.session_viewonline) AS viewonline',
	
			'FROM'		=> array(
				USERS_TABLE		=> 'u',
				ZEBRA_TABLE		=> 'z'
			),
	
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(SESSIONS_TABLE => 's'),
					'ON'	=> 's.session_user_id = z.zebra_id'
				)
			),
	
			'WHERE'		=> 'z.user_id = ' . $user->data['user_id'] . '
				AND z.friend = 1
				AND u.user_id = z.zebra_id',
	
			'GROUP_BY'	=> 'z.zebra_id, u.user_id, u.username_clean, u.user_colour, u.username',
	
			'ORDER_BY'	=> 'u.username_clean ASC',
		));
	
		$result = $db->sql_query($sql);
	
		while ($row = $db->sql_fetchrow($result))
		{
			$which = (time() - $update_time < $row['online_time'] && ($row['viewonline'] || $auth->acl_get('u_viewonline'))) ? 'online' : 'offline';
	
			$template->assign_block_vars("friends_{$which}", array(
				'USER_ID'		=> $row['user_id'],
	
				'U_PROFILE'		=> get_username_string('profile', $row['user_id'], $row['username'], $row['user_colour']),
				'USER_COLOUR'	=> get_username_string('colour', $row['user_id'], $row['username'], $row['user_colour']),
				'USERNAME'		=> get_username_string('username', $row['user_id'], $row['username'], $row['user_colour']),
				'USERNAME_FULL'	=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']))
			);
		}
		$db->sql_freeresult($result);
	}
}
?>