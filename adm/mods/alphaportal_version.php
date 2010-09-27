<?php
/**
*
* @package acp
* @version $Id: mod_version_check_version.php 48 2007-09-23 20:23:14Z Handyman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package mod_version_check
*/
class alphaportal_version
{
	function version()
	{
		return array(
			'author'	=> 'harmlessgoat22',
			'title'		=> 'alphaPORTAL',
			'tag'		=> 'alphaportal',
			'version'	=> '1.0.6',
			'file'		=> array('alphaportal.net', 'info', 'alphaportal.xml'),
		);
	}
}

?>