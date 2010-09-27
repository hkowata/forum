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

class ap_top_posters_info
{
	function module()
	{
		return array(
			'filename'		=> 'ap_top_posters',
			'title'			=> 'AP_TOP_POSTERS',
			'version'		=> '1.0.0',
			'modes'			=> array(
				'top_posters'		=> array('title' => 'AP_TOP_POSTERS', 'auth' => 'acl_a_board', 'cat' => array('ACP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/top_posters', 'edit_tpl' => 'acp_alpha_modules_top_posters.html'),
			),
		);
	}

	function install($module_id)
	{
		global $phpbb_root_path, $phpEx, $db, $user, $table_prefix, $config;
		if (!isset($config['top_posters_module']))
		{
			set_config('top_posters_module', '10', false);
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
			$poll_id = request_var('top_posters_number', '');
			
			set_config('top_posters_module', $poll_id, false);
		}
		else
		{	
			$template->assign_vars(array(
				'TOP_POSTERS_NUMBER' 		=> $config['top_posters_module'],
			));
		}
	}
}

?>