<?php
if (!defined('IN_PHPBB'))
{
	exit;
}
if (!defined('IN_ALPHA_INSTALL') && !defined('IN_INSTALL') && !defined('ADMIN_START') && !defined('IN_LOGIN'))
{
	include_sidebar('left');
	include_sidebar('right');
	include_sidebar('combined');
	include_sidebar('index');
	include_sidebar('portal');
}

function include_sidebar($sidebar)
{
	global $db, $user, $auth, $template;
	global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
	
	$select_sidebar = '';
	if ($sidebar == 'left')
	{
		$select_sidebar = '1';
	}
	else if ($sidebar == 'right')
	{
		$select_sidebar = '2';
	}
	else if ($sidebar == 'combined')
	{
		$select_sidebar = '3';
	}
	else if ($sidebar == 'index')
	{
		$select_sidebar = '4';
	}
	else if ($sidebar == 'portal')
	{
		$select_sidebar = '5';
	}

	$sql = 'SELECT *
			FROM ' . ALPHA_MODULES_TABLE . "
			WHERE module_class = 'ap'
					AND module_basename <> ''
					AND module_enabled = 1
					AND parent_id = $select_sidebar
			ORDER BY left_id";

	$result = $db->sql_query($sql);
			
	while ($row = $db->sql_fetchrow($result))
	{
		$info_class = "ap_{$row['module_basename']}_info";
		if (!class_exists($info_class))
		{
			include("{$phpbb_root_path}includes/ap/info/ap_{$row['module_basename']}.$phpEx");
		}
		$get_modules = new $info_class();
		$module_info = $get_modules->module();
		$module_mode = $row['module_mode'];

		$php_class_name = "ap_{$row['module_basename']}";
		if (!class_exists($php_class_name))
		{
			include("{$phpbb_root_path}includes/ap/{$module_info['filename']}.$phpEx");
		}
		$php_class = new $php_class_name();
		$php_class->module_data($row['module_mode'], $row['module_id']);
		$sidebar_caps = strtoupper($sidebar);

		if (!isset($php_class->no_display))
		{
			$template->set_filenames(array(
				"sidebar_{$sidebar}"    => $module_info['modes'][$module_mode]['tpl'] . '.html',
			));
			
			$include_file = $template->assign_display("sidebar_{$sidebar}", '', true);
			
			$template->assign_block_vars('include_modules', array(
				"S_INCLUDE_{$sidebar_caps}"		=> $include_file
			));
		}
		unset($info_class);
		unset($php_class);
	}
	$db->sql_freeresult($result);
}
?>