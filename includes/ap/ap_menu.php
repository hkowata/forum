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

class ap_menu
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		if ($mode == 'menu')
		{
			global $db, $user, $auth, $template;
			global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
			$template_root = 'alphaportal/';
			$this->tpl_name = $template_root . $mode;
			$user->add_lang('ap/' . $mode);
			$template->destroy_block_vars('forum_list');
			$template->destroy_block_vars('page_list');

			include_once($phpbb_root_path . 'includes/functions_admin.' . $phpEx);

			$forum_ary = make_forum_select(false, false, false, false, true, true, true);
			foreach ($forum_ary as $forum)
			{
				$template->assign_block_vars('forum_list', array(
					'U_FORUM'			=> append_sid("{$phpbb_root_path}viewforum.$phpEx", 'f=' . $forum['forum_id']),
					'FORUM_NAME'		=> $forum['forum_name'],
					'FORUM_PADDING'		=> $forum['padding'],

				));       
			}

			$sql_array = array(
				'SELECT'	=> 'p.*, m.page_alias, m.parent_id',
				'FROM'		=> array(
					ALPHA_PAGES_TABLE		=> 'p',
					ALPHA_MODULES_TABLE		=> 'm',
				),
				'WHERE'		=> '(p.in_menu = 1 OR
					m.parent_id = 6) AND
					p.page = m.page_alias',
			);
			$sql = $db->sql_build_query('SELECT', $sql_array);
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				if (($user->data['user_id'] != ANONYMOUS) ? $row['welcome'] <> 1 && $row['page'] : $row['page'])
				{
					$template->assign_block_vars('page_list', array(
						'TITLE'			=> $row['title'],
						'U_VIEW_PAGE'	=> append_sid("{$phpbb_root_path}pages.$phpEx", 'page=' . $row['page'])
					));
				}
			}
			$db->sql_freeresult($result);

			$template->assign_vars(array(
				'U_ACP'					=> ($auth->acl_get('a_') && $user->data['is_registered']) ? append_sid("{$phpbb_root_path}adm/index.$phpEx", false, true, $user->session_id) : '',
				'U_CHAT'				=> append_sid("{$phpbb_root_path}chat.$phpEx"),
				'U_PORTAL'				=> append_sid("{$phpbb_root_path}portal.$phpEx"),
				'BULLET_REG'			=> '<img src="' . $phpbb_root_path . 'styles/' . $user->theme['imageset_path'] . '/imageset/bullet.gif" />',
				'BULLET_DOWN'			=> '<img src="' . $phpbb_root_path . 'styles/' . $user->theme['imageset_path'] . '/imageset/bullet_down.gif" />',
				)
			);
		}
	}
}
?>