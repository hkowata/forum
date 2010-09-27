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

class ap_portal
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$user->add_lang('ap/' . $mode);
		include_once($phpbb_root_path . 'includes/functions_posts_anywhere.' . $phpEx);
		include_once($phpbb_root_path . 'includes/functions_display.' . $phpEx);
		$template->destroy_block_vars('portal_row');
		$sql = 'SELECT * 
			FROM ' . ALPHA_PORTAL_TABLE . "
			WHERE module_id = {$id}";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		if ($row['display'] == '1')
		{
			display_posts($row['forum'], $row['number'], $row['length'], true, true);
		}
		$template->assign_vars(array(
				'S_VIEW_SIGNATURE'			=> ($row['signature'] == 1) ? true : false,
				'S_VIEW_USER_INFO'			=> ($row['user_info'] == 1) ? true : false,
				'S_USER_INFO_ORDER'			=> ($row['info_order'] == 1) ? true : false,
				'PORTAL_COPYRIGHT'			=> sprintf($user->lang['COPYRIGHT'], '<a href="http://startrekguide.com/community/f26-scripts/t1069-add-on-display-posts-anywhere-1-0-0-.html" style="font-weight: bold;">', '</a>', '<a href="http://startrekguide.com/community/memberlist.php?mode=viewprofile&un=Handyman" style="color: rgb(170, 0, 0); font-weight: bold;">', '</a>', '<a href="http://startrekguide.com/community/memberlist.php?mode=viewprofile&u=120" style="color: rgb(10, 163, 6); font-weight: bold;">', '</a>'),
			)
		);
	}
}
?>