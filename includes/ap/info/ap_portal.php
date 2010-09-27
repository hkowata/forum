<?php
/** 
*
* @package acp
* @version $Id: acp_bbcodes.php,v 1.2 2006/05/01 19:45:42 grahamje Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package module_install
*/

class ap_portal_info
{
	function module()
	{
		return array(
			'filename'		=> 'ap_portal',
			'title'			=> 'AP_PORTAL',
			'version'		=> '1.0.0',
			'modes'			=> array(
				'portal'		=> array('title' => 'AP_PORTAL', 'auth' => 'acl_a_board', 'cat' => array('ACP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/portal', 'edit_tpl' => 'acp_alpha_modules_portal.html')
			),
		);
	}

	function install($module_id)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$sql_ary = array(
			'module_id'			=> $module_id,
			'display'			=> '1',
			'forum'				=> '2',
			'number'			=> '5',
			'length'			=> '1000',
			'one_post'			=> '1',
			'subforums'			=> '1'
		);
		$sql = 'INSERT INTO ' . ALPHA_PORTAL_TABLE . $db->sql_build_array('INSERT', $sql_ary);
		$db->sql_query($sql);
	}
	function uninstall($module_id)
	{
		global $sql, $db, $user;
		$sql = 'DELETE FROM ' . ALPHA_PORTAL_TABLE . " WHERE module_id = '{$module_id}'";
		$db->sql_query($sql);
	}
	function edit($mode, $submit = false)
	{
		global $sql, $db, $user, $template;
		$module_id = request_var('m', '');
		if ($submit)
		{
			$sql_ary = array(
				'forum'				=> request_var('forum', '', true),
				'number'			=> request_var('number', '', true),
				'length'			=> request_var('length', '', true),
				'one_post'			=> request_var('one_post', '', true),
				'subforums'			=> request_var('subforums', '', true),
				'signature'			=> request_var('signature', '', true),
				'user_info'			=> request_var('user_info', '', true),
				'info_order'		=> request_var('info_order', '', true)
			);
			$sql = 'UPDATE ' . ALPHA_PORTAL_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE module_id = '{$module_id}'";
			$db->sql_query($sql);
		}
		else
		{
			$sql_array = array(
				'SELECT'	=> 'p.*, m.page_alias',
				'FROM'		=> array(
					ALPHA_PORTAL_TABLE		=> 'p',
					ALPHA_MODULES_TABLE		=> 'm',
				),
				'WHERE'		=> 'm.module_id = ' . $db->sql_escape($module_id) . ' AND
					p.module_id = m.module_id',
			);
			$sql = $db->sql_build_query('SELECT', $sql_array);
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);
	
			$template->assign_vars(array_merge(array(
				'FORUM'				=> $row['forum'],
				'NUMBER'			=> $row['number'],
				'LENGTH'			=> $row['length'],
				'ONE_POST'			=> $row['one_post'],
				'SUBFORUMS'			=> $row['subforums'],
				'SIGNATURE'			=> $row['signature'],
				'USER_INFO'			=> $row['user_info'],
				'INFO_ORDER'		=> $row['info_order']
			)));
		}
	}
}

?>