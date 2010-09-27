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

class ap_downloads_info
{
	function module()
	{
		return array(
			'filename'		=> 'ap_downloads',
			'title'			=> 'AP_DOWNLOADS',
			'version'		=> '1.0.0',
			'modes'			=> array(
				'downloads'		=> array('title' => 'AP_DOWNLOADS', 'auth' => 'acl_a_board', 'cat' => array('ACP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/downloads', 'edit_tpl' => 'acp_alpha_modules_downloads.html'),
			),
		);
	}

	function install($module_id)
	{
		global $phpbb_root_path, $phpEx, $db, $user, $table_prefix, $config;
		if (!isset($config['downloads_recent_module']))
		{
			set_config('downloads_recent_module', 1, false);
		}
		if (!isset($config['downloads_topic_module']))
		{
			set_config('downloads_topic_module', '', false);
		}
	}

	function uninstall()
	{
	}
	function edit($mode, $submit = false)
	{
		global $phpbb_root_path, $phpEx, $db, $user, $table_prefix, $template, $cache, $config;

		if ($submit)
		{
			$downloads_recent = request_var('downloads_recent', '');
			$downloads_id = request_var('downloads_id', '');
			set_config('downloads_recent_module', $downloads_recent, false);
			set_config('downloads_topic_module', $downloads_id, false);
		}
		else
		{	
			$template->assign_vars(array(
				'S_DOWNLOADS_RECENT' 	=> ($config['downloads_recent_module'] == 1) ? true : false,
				'DOWNLOADS_TOPIC' 		=> $config['downloads_topic_module'],
			));
		}
	}
}

?>