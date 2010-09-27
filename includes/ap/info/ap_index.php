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

class ap_index_info
{
	function module()
	{
		return array(
			'filename'		=> 'ap_index',
			'title'			=> 'AP_INDEX',
			'version'		=> '1.0.0',
			'modes'			=> array(
				'index'		=> array('title' => 'AP_INDEX', 'auth' => 'acl_a_board', 'cat' => array('ACP_GENERAL_ALPHAPORTAL'), 'tpl' => 'forumlist_body')
			),
		);
	}

	function install($module_id)
	{
	}
	function uninstall()
	{
	}
	function edit($mode, $submit = false)
	{
	}
}

?>