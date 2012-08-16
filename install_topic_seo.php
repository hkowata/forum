<?php
/**
*
* @author Steve(c) @ www.phpbbandbbcodes.com
* @package umil
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}
/*
* The language file which will be included when installing
* Language entries that should exist in the language file for UMIL (replace $mod_name with the mod's name you set to $mod_name above)
* $mod_name
* 'INSTALL_' . $mod_name
* 'INSTALL_' . $mod_name . '_CONFIRM'
* 'UPDATE_' . $mod_name
* 'UPDATE_' . $mod_name . '_CONFIRM'
* 'UNINSTALL_' . $mod_name
* 'UNINSTALL_' . $mod_name . '_CONFIRM'
*/
$language_file = 'mods/install_topic_seo';

// The name of the mod to be displayed during installation.
$mod_name = 'TOPIC_SEO';

/*
* The name of the config variable which will hold the currently installed version
* You do not need to set this yourself, UMIL will handle setting and updating the version itself.
*/
$version_config_name = 'topic_seo_version';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(

    // Version 1.0.0
        '1.0.0'   => array(
		
    // Lets add a new column to the  and topics table.
        'table_column_add' => array(
            array('phpbb_topics', 'topic_seo_desc', array('VCHAR_UNI', '')),
            array('phpbb_topics', 'topic_seo_key', array('VCHAR_UNI', '')),
        ),      
             
    // Now to add some permission settings.
        'permission_add' => array(
            array('u_topic_seo_key'),
            array('u_topic_seo_desc'),
        ), 
	),		
	
    // Version 1.0.1
        '1.0.1'   => array(
		
    // Lets delete the old column,s to the topics table.
        'table_column_remove' => array(
            array('phpbb_topics', 'topic_seo_desc', array('VCHAR_UNI', '')),
            array('phpbb_topics', 'topic_seo_key', array('VCHAR_UNI', '')),
        ), 

    // Lets add the new column,s to the topics table.
        'table_column_add' => array(
            array('phpbb_topics', 'seo_desc', array('VCHAR_UNI', '')),
            array('phpbb_topics', 'seo_key', array('VCHAR_UNI', '')),
		),
    ),	
	
    // Version 1.0.2
        '1.0.2'   => array(	
			
    // Now to add some permission settings.
        'permission_add' => array(
            array('u_seo_post_key'),
	    ),	
		
	// Lets add the new column to the posts table.
        'table_column_add' => array(	
			array('phpbb_posts', 'seo_post_key', array('VCHAR_UNI', '')),
        ), 
    ),
	
	// Version 1.0.3 
        '1.0.3'   => array(	
		
    // Lets add the new column,s to the forums table.
        'table_column_add' => array(
            array('phpbb_forums', 'enable_topic_seo', array('BOOL', 0)),
		),
	),
	
	// Version 1.0.4 
        '1.0.4'   => array(	
		
    // Lets add the new column,s to the forums table.
        'table_column_add' => array(
            array('phpbb_topics', 'topic_seo_title', array('VCHAR_UNI', '')),
		),
	),
	
	// Version 1.0.5 
        '1.0.5'   => array(	
	),
	
	// Version 1.0.6 
        '1.0.6'   => array(	
		
	// clear the cache and refresh the templates.	
		'cache_purge' => array('', 'template'),
	),
);    

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>