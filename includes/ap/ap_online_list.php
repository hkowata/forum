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

class ap_online_list
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		if ($mode == 'online_list')
		{
			global $db, $user, $auth, $template;
			global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
			$template_root = 'alphaportal/';
			$this->tpl_name = $template_root . $mode;

			// Grab group details for legend display
			if ($auth->acl_gets('a_group', 'a_groupadd', 'a_groupdel'))
			{
				$sql = 'SELECT group_id, group_name, group_colour, group_type
					FROM ' . GROUPS_TABLE . '
					WHERE group_legend = 1
					ORDER BY group_name ASC';
			}
			else
			{
				$sql = 'SELECT g.group_id, g.group_name, g.group_colour, g.group_type
					FROM ' . GROUPS_TABLE . ' g
					LEFT JOIN ' . USER_GROUP_TABLE . ' ug
						ON (
							g.group_id = ug.group_id
							AND ug.user_id = ' . $user->data['user_id'] . '
							AND ug.user_pending = 0
						)
					WHERE g.group_legend = 1
						AND (g.group_type <> ' . GROUP_HIDDEN . ' OR ug.user_id = ' . $user->data['user_id'] . ')
					ORDER BY g.group_name ASC';
			}
			$result = $db->sql_query($sql);
			
			$legend = '';
			while ($row = $db->sql_fetchrow($result))
			{
				$colour_text = ($row['group_colour']) ? ' style="color:#' . $row['group_colour'] . '"' : '';
			
				if ($row['group_name'] == 'BOTS')
				{
					$legend .= (($legend != '') ? ', ' : '') . '<span' . $colour_text . '>' . $user->lang['G_BOTS'] . '</span>';
				}
				else
				{
					$legend .= (($legend != '') ? ', ' : '') . '<a' . $colour_text . ' href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=group&amp;g=' . $row['group_id']) . '">' . (($row['group_type'] == GROUP_SPECIAL) ? $user->lang['G_' . $row['group_name']] : $row['group_name']) . '</a>';
				}
			}
			$db->sql_freeresult($result);
			
			// Assign index specific vars
			$template->assign_vars(array(
				'BLOCK_LEGEND'		=> $legend)
			);
		}
	}
}
?>