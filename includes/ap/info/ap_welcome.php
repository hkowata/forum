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

class ap_welcome_info
{
	function module()
	{
		return array(
			'filename'		=> 'ap_welcome',
			'title'			=> 'AP_WELCOME',
			'version'		=> '1.0.0',
			'modes'			=> array(
				'welcome'		=> array('title' => 'AP_WELCOME', 'auth' => 'acl_a_board', 'cat' => array('ACP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/welcome', 'edit_tpl' => 'acp_alpha_modules_welcome.html'),
			),
		);
	}

	function install($module_id)
	{
		global $phpbb_root_path, $phpEx, $db, $user, $table_prefix, $config;
		if (!isset($config['welcome_module']))
		{
			set_config('welcome_module', 'Hello! Welcome to my board. I hope you enjoy looking around, and maybe become a member. Hope to see you again soon!', false);
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
			$welcome_message = request_var('welcome_message', '');
			
			set_config('welcome_module', $welcome_message, false);
		}
		else
		{	
			$template->assign_vars(array(
				'WELCOME_MESSAGE' 		=> $config['welcome_module'],
			));
		}
	}
}

?>