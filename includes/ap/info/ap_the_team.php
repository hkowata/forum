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

class ap_the_team_info
{
	function module()
	{
		return array(
			'filename'		=> 'ap_the_team',
			'title'			=> 'AP_THE_TEAM',
			'version'		=> '1.0.0',
			'modes'			=> array(
				'the_team'		=> array('title' => 'AP_THE_TEAM', 'auth' => 'acl_a_board', 'cat' => array('ACP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/the_team'),
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