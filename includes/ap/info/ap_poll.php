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

class ap_poll_info
{
	function module()
	{
		return array(
			'filename'		=> 'ap_poll',
			'title'			=> 'AP_POLL',
			'version'		=> '1.0.0',
			'modes'			=> array(
				'poll'		=> array('title' => 'AP_POLL', 'auth' => 'acl_a_board', 'cat' => array('ACP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/poll', 'edit_tpl' => 'acp_alpha_modules_poll.html'),
			),
		);
	}

	function install($module_id)
	{
		global $phpbb_root_path, $phpEx, $db, $user, $table_prefix, $config;
		if (!isset($config['poll_module']))
		{
			set_config('poll_module', '0', false);
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
			$poll_id = request_var('poll_id', '');
			
			set_config('poll_module', $poll_id, false);
		}
		else
		{	
			$template->assign_vars(array(
				'POLL_ID'	 		=> $config['poll_module'],
			));
		}
	}
}

?>