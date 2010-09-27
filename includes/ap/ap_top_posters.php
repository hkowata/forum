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

class ap_top_posters
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		if ($mode == 'top_posters')
		{
			global $db, $user, $auth, $template;
			global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
			$template_root = 'alphaportal/';
			$this->tpl_name = $template_root . $mode;
			$user->add_lang('ap/' . $mode);

			global $top_posters_array;
			if (!$top_posters_array)
			{
				$sql = 'SELECT user_id, username, user_posts, user_colour
					FROM ' . USERS_TABLE . '
					WHERE user_type <> 2
					AND user_posts <> 0
					ORDER BY user_posts DESC';
				
				$result = $db->sql_query_limit($sql, $config['top_posters_module']);
				
				while( ($row = $db->sql_fetchrow($result)) && ($row['username'] != '') )
				{
					$top_posters_array = $template->assign_block_vars('top_posters', array(
						'S_SEARCH_ACTION'	=> append_sid("{$phpbb_root_path}search.$phpEx", 'author_id=' . $row['user_id'] . '&amp;sr=posts'),
						'USERNAME'			=> censor_text($row['username']),
						'USERNAME_COLOR'	=> ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'"' : '',
						'U_USERNAME'		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']),
						'POSTER_POSTS'		=> $row['user_posts'],
						)
					);
				}
				$db->sql_freeresult($result);
			}
		}
	}
}
?>