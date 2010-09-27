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

class ap_recent_box_info
{
	function module()
	{
		return array(
			'filename'		=> 'ap_recent_box',
			'title'			=> 'AP_RECENT_BOX',
			'version'		=> '1.0.0',
			'modes'			=> array(
				'recent_topics'		=> array('title' => 'AP_RECENT_TOPICS', 'auth' => 'acl_a_board', 'cat' => array('AP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/recent_topics', 'edit_tpl' => 'acp_alpha_modules_recent_topics.html'),
				'recent_announce'		=> array('title' => 'AP_RECENT_ANNOUNCE', 'auth' => 'acl_a_board', 'cat' => array('AP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/recent_announce', 'edit_tpl' => 'acp_alpha_modules_recent_announce.html'),
				'recent_hot'		=> array('title' => 'AP_RECENT_HOT', 'auth' => 'acl_a_board', 'cat' => array('AP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/recent_hot', 'edit_tpl' => 'acp_alpha_modules_recent_hot.html'),
			),
		);
	}

	function install($module_id)
	{
		global $phpbb_root_path, $phpEx, $db, $user, $table_prefix, $config;
		if (!isset($config['recent_topics_module']))
		{
			set_config('recent_topics_module', '0', false);
		}
		if (!isset($config['recent_announce_module']))
		{
			set_config('recent_announce_module', '0', false);
		}
		if (!isset($config['recent_hot_module']))
		{
			set_config('recent_hot_module', '0', false);
		}
		if (!isset($config['recent_topics_number_module']))
		{
			set_config('recent_topics_number_module', '0', false);
		}
		if (!isset($config['recent_announce_number_module']))
		{
			set_config('recent_announce_number_module', '0', false);
		}
		if (!isset($config['recent_hot_number_module']))
		{
			set_config('recent_hot_number_module', '0', false);
		}
	}

	function uninstall()
	{
	}
	function edit($mode, $submit = false)
	{
		if ($mode == 'recent_topics')
		{
			global $phpbb_root_path, $phpEx, $db, $user, $table_prefix, $template, $cache, $config;
	
			if ($submit)
			{
				$recent_topics_id = request_var('recent_topics_id', '');
				$recent_topics_number = request_var('recent_topics_number', '');
				set_config('recent_topics_module', $recent_topics_id, false);
				set_config('recent_topics_number_module', $recent_topics_number, false);
			}
			else
			{	
				$template->assign_vars(array(
					'RECENT_TOPICS_ID'	 			=> $config['recent_topics_module'],
					'RECENT_TOPICS_NUMBER'	 		=> $config['recent_topics_number_module'],
				));
			}
		}
		if ($mode == 'recent_announce')
		{
			global $phpbb_root_path, $phpEx, $db, $user, $table_prefix, $template, $cache, $config;
	
			if ($submit)
			{
				$recent_announce_id = request_var('recent_announce_id', '');
				$recent_announce_number = request_var('recent_announce_number', '');
				set_config('recent_announce_module', $recent_announce_id, false);
				set_config('recent_announce_number_module', $recent_announce_number, false);
			}
			else
			{	
				$template->assign_vars(array(
					'RECENT_ANNOUNCE_ID'	 		=> $config['recent_announce_module'],
					'RECENT_ANNOUNCE_NUMBER' 		=> $config['recent_announce_number_module'],
				));
			}
		}
		if ($mode == 'recent_hot')
		{
			global $phpbb_root_path, $phpEx, $db, $user, $table_prefix, $template, $cache, $config;
	
			if ($submit)
			{
				$recent_hot_id = request_var('recent_hot_id', '');
				$recent_hot_number = request_var('recent_hot_number', '');
				set_config('recent_hot_module', $recent_hot_id, false);
				set_config('recent_hot_number_module', $recent_hot_number, false);
			}
			else
			{	
				$template->assign_vars(array(
					'RECENT_HOT_ID'	 		=> $config['recent_hot_module'],
					'RECENT_HOT_NUMBER'		=> $config['recent_hot_number_module'],
				));
			}
		}
	}
}

?>