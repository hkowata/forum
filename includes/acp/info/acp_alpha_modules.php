<?php
/** 
*
* @package acp
* @version $Id: acp_modules.php,v 1.2 2006/05/01 19:45:42 grahamje Exp $
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

class acp_alpha_modules_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_alpha_modules',
			'title'		=> 'ACP_ALPHA_MODULE_MANAGEMENT',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'ap'		=> array('title' => 'ACP_AP', 'auth' => 'acl_a_manage_alpha_modules', 'cat' => array('ACP_ALPHA_PORTAL')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>