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

class ap_pages
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		if ($mode == 'pages')
		{
			global $db, $user, $auth, $template;
			global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx, $last;

			if ($user->data['user_id'] != ANONYMOUS)
			{
				$where = 'm.module_id = ' . $id . ' AND p.page = m.page_alias AND p.welcome = 0';
			}
			else
			{
				$where = 'm.module_id = ' . $id . ' AND p.page = m.page_alias';
			}

			$sql_array = array(
				'SELECT'	=> 'p.*, m.page_alias',
				'FROM'		=> array(
					ALPHA_PAGES_TABLE		=> 'p',
					ALPHA_MODULES_TABLE		=> 'm',
				),
				'WHERE'		=> $where,
			);
			$sql = $db->sql_build_query('SELECT', $sql_array);
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);
			
			if (sizeof($row) == 1)
			{
				$no_display = true;
			}
			$content = generate_text_for_display($row['content'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);
		
			$template->assign_vars(array(
				'TITLE'	 		=> $row['title'],
				'CONTENT'	 	=> $content,
				'U_PAGE'		=> append_sid("{$phpbb_root_path}pages.{$phpEx}?page=" . $row['page']),
				'S_NO_DISPLAY'	=> $no_display)
			);
		}
	}
}
?>