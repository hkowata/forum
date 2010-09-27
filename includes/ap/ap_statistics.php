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

class ap_statistics
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		if ($mode == 'statistics')
		{
			global $db, $user, $auth, $template;
			global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
			$template_root = 'alphaportal/';
			$this->tpl_name = $template_root . $mode;
			
			// Set some stats, get posts count from forums data if we... hum... retrieve all forums data
			$total_posts	= $config['num_posts'];
			$total_topics	= $config['num_topics'];
			$total_users	= $config['num_users'];
			$newest_user	= $config['newest_username'];
			$newest_uid		= $config['newest_user_id'];
			
			$l_total_user_s = ($total_users == 0) ? 'TOTAL_USERS_ZERO' : 'TOTAL_USERS_OTHER';
			$l_total_post_s = ($total_posts == 0) ? 'TOTAL_POSTS_ZERO' : 'TOTAL_POSTS_OTHER';
			$l_total_topic_s = ($total_topics == 0) ? 'TOTAL_TOPICS_ZERO' : 'TOTAL_TOPICS_OTHER';
			
			// Grab group details for legend display
			$sql = 'SELECT group_id, group_name, group_colour, group_type
				FROM ' . GROUPS_TABLE . '
				WHERE group_legend = 1
					AND group_type <> ' . GROUP_HIDDEN . '
				ORDER BY group_name ASC';
			$result = $db->sql_query($sql);
			
			$legend = '';
			while ($row = $db->sql_fetchrow($result))
			{
				$legend .= (($legend != '') ? ', ' : '') . '<a style="color:#' . $row['group_colour'] . '" href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=group&amp;g=' . $row['group_id']) . '">' . (($row['group_type'] == GROUP_SPECIAL) ? $user->lang['G_' . $row['group_name']] : $row['group_name']) . '</a>';
			}
			$db->sql_freeresult($result);
			
			// Generate birthday list if required ...
			$birthday_list = '';
			if ($config['load_birthdays'])
			{
				$now = getdate();
				$sql = 'SELECT user_id, username, user_colour, user_birthday
					FROM ' . USERS_TABLE . "
					WHERE user_birthday LIKE '" . $db->sql_escape(sprintf('%2d-%2d-', $now['mday'], $now['mon'])) . "%'
						AND user_type IN (" . USER_NORMAL . ', ' . USER_FOUNDER . ')';
				$result = $db->sql_query($sql);
			
				while ($row = $db->sql_fetchrow($result))
				{
					$user_colour = ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'"' : '';
					$birthday_list .= (($birthday_list != '') ? ', ' : '') . '<a' . $user_colour . ' href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']) . '">' . $row['username'] . '</a>';
			
					if ($age = (int) substr($row['user_birthday'], -4))
					{
						$birthday_list .= ' (' . ($now['year'] - $age) . ')';
					}
				}
				$db->sql_freeresult($result);
			}
			
			// Assign index specific vars
			
			$template->assign_vars(array(
				'BLOCK_TOTAL_POSTS'				=> sprintf($user->lang[$l_total_post_s], $total_posts),
				'BLOCK_TOTAL_TOPICS'			=> sprintf($user->lang[$l_total_topic_s], $total_topics),
				'BLOCK_TOTAL_USERS'				=> sprintf($user->lang[$l_total_user_s], $total_users),
				'BLOCK_NEWEST_USER'				=> sprintf($user->lang['NEWEST_USER'], '<a href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $newest_uid) . '">', $newest_user, '</a>'),
				'BLOCK_LEGEND'					=> $legend,
				'BLOCK_BIRTHDAY_LIST'			=> $birthday_list,
			
				'S_DISPLAY_BIRTHDAY_LIST'	=> ($config['load_birthdays']) ? true : false,
			
				'U_MCP'					=> ($auth->acl_get('m_') || $auth->acl_getf_global('m_')) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=main&amp;mode=front', true, $user->session_id) : '',
				)
			);
		}
	}
}
?>