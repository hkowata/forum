<?php
/**
* Only adjust bitfields, do not rewrite text...
* All new parsings have the img, flash and quote modes set to true
*
* You should make a backup from your users, posts and privmsgs table in case something goes wrong
* Forum descriptions and rules need to be re-submitted manually.
*/
define('IN_PHPBB', true);
define('IN_ALPHA_INSTALL', true);
$phpbb_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.'.$phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('install_alpha');

// is the user logged in?
if (!$user->data['is_registered'])
{
    if ($user->data['is_bot'])
    {
        // the user is a bot, send them back to home plate...
        redirect(append_sid("{$phpbb_root_path}index.$phpEx"));
    }
    // the user is not logged in, give them a chance to login here...
    login_box('', 'LOGIN');
}
else if ($user->data['user_type'] != USER_FOUNDER)
{
    trigger_error('NOT_AUTHORIZED');
}

$action = request_var('action', 'install');
switch ($action)
{
	case 'install':
		if (confirm_box(true))
		{
			// Setup $auth_admin class so we can add permission options
			include($phpbb_root_path . 'includes/acp/auth.' . $phpEx);
			$auth_admin = new auth_admin();
			
			// Add permissions
			$auth_admin->acl_add_option(array(
				'global'   => array('a_manage_alpha_modules')
			));

			$sql = 'SELECT *
				FROM ' . STYLES_THEME_TABLE;
			$result = $db->sql_query($sql);
			while ($theme_row = $db->sql_fetchrow($result))
			{
				if ($theme_row['theme_storedb'] && file_exists("{$phpbb_root_path}styles/{$theme_row['theme_path']}/theme/stylesheet.css") && $theme_row && $theme_row['theme_storedb'])
				{
					$root_path = $phpbb_root_path . 'styles/' . $theme_row['theme_path'];

					$stylesheet = '';
					if (file_exists($root_path . '/theme/stylesheet.css'))
					{
						$stylesheet = file_get_contents($root_path . '/theme/stylesheet.css');
					}
					
					// Match CSS imports
					$matches = array();
					preg_match_all('/@import url\(["\'](.*)["\']\);/i', $stylesheet, $matches);
				
					if (sizeof($matches))
					{
						foreach ($matches[0] as $idx => $match)
						{
							$file = "{$phpbb_root_path}styles/{$theme_row['theme_path']}/theme/{$matches[1][$idx]}";

							if (file_exists($file) && ($content = file_get_contents($file)))
							{
								$content = trim($content);
							}
							else
							{
								$content = '';
							}
							$stylesheet = str_replace($match, $content, $stylesheet);
						}
					}

					// Save CSS contents
					$sql_ary = array(
						'theme_mtime'	=> (int) filemtime("{$phpbb_root_path}styles/{$theme_row['theme_path']}/theme/stylesheet.css"),
						'theme_data'	=> str_replace('./', 'styles/' . $theme_row['theme_path'] . '/theme/', $stylesheet)
					);

					$sql = 'UPDATE ' . STYLES_THEME_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . "
						WHERE theme_id = " . $theme_row['theme_id'];
					$db->sql_query($sql);

					$cache->destroy('sql', STYLES_THEME_TABLE);

					add_log('admin', 'LOG_THEME_REFRESHED', $theme_row['theme_name']);
				}
			}
			$db->sql_freeresult($result);

			switch ($db->sql_layer)
			{
				case 'mysql':
					$db_type = 'mysql_40';
				break;
			
				case 'mysql4':
					if (version_compare($db->mysql_version, '4.1.3', '>='))
					{
						$db_type = 'mysql_41';
					}
					else
					{
						$db_type = 'mysql_40';
					}
				break;
			
				case 'mysqli':
					$db_type = 'mysql_41';
				break;
			
				default:
					$db_type = $db->sql_layer;
				break;
			}
			$sql = 'CREATE TABLE ' . ALPHA_PAGES_TABLE . "(
				page varchar(255) NOT NULL default '',
				title varchar(255) NOT NULL default '',
				content text NULL,
				bbcode_options tinyint(1) NOT NULL default 7,
				bbcode_bitfield varchar(255) collate utf8_bin NOT NULL default '',
				bbcode_uid varchar(8) collate utf8_bin NOT NULL default '',
				in_menu int(1) default '0',
				welcome int(1) default '0',
				PRIMARY KEY  (page))";
			if ($db_type == 'mysql_41')
			{
				$sql .= 'CHARACTER SET utf8 COLLATE utf8_bin';
			}
			$db->sql_query($sql);
			
			$sql = 'CREATE TABLE ' . ALPHA_PORTAL_TABLE . "(
				module_id int(8) NOT NULL default '1',
				display int(1) default '1',
				forum varchar(255) default '2',
				number mediumint(8) default '3',
				length mediumint(8) default '0',
				one_post int(8) default '1',
				subforums int(8) default '0',
				signature int(8) default '1',
				user_info int(8) default '1',
				info_order int(8) default '0'
				)";
			if ($db_type == 'mysql_41')
			{
				$sql .= 'CHARACTER SET utf8 COLLATE utf8_bin';
			}
			$db->sql_query($sql);
			
			$sql = 'CREATE TABLE ' . ALPHA_MODULES_TABLE . "(
				module_id mediumint(8) unsigned NOT NULL auto_increment,
				module_enabled tinyint(1) unsigned NOT NULL default '1',
				module_display tinyint(1) unsigned NOT NULL default '1',
				module_basename varchar(255) collate utf8_bin NOT NULL default '',
				module_class varchar(10) collate utf8_bin NOT NULL default 'ap',
				parent_id mediumint(8) unsigned NOT NULL default '0',
				left_id mediumint(8) unsigned NOT NULL default '0',
				right_id mediumint(8) unsigned NOT NULL default '0',
				module_langname varchar(255) collate utf8_bin NOT NULL default '',
				module_mode varchar(255) collate utf8_bin NOT NULL default '',
				module_auth varchar(255) collate utf8_bin NOT NULL default '',
				page_alias varchar(255) NOT NULL default '',
				PRIMARY KEY  (module_id),
				KEY left_right_id (left_id, right_id),
				KEY module_enabled (module_enabled),
				KEY class_left_id (module_class, left_id),
				KEY module_langname (module_langname))";
			if ($db_type == 'mysql_41')
			{
				$sql .= 'CHARACTER SET utf8 COLLATE utf8_bin';
			}
			$db->sql_query($sql);
			
			$sql_ary = array(
				'module_id'				=> '1',
				'module_enabled'		=> '1',
				'module_display'		=> '1',
				'module_class'			=> 'ap',
				'parent_id'				=> '0',
				'left_id'				=> '1',
				'right_id'				=> '2',
				'module_langname'		=> 'AP_LEFT',
			);
			$sql = 'INSERT INTO ' . ALPHA_MODULES_TABLE . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);
			
			$sql_ary = array(
				'module_id'				=> '2',
				'module_enabled'		=> '1',
				'module_display'		=> '1',
				'module_class'			=> 'ap',
				'parent_id'				=> '0',
				'left_id'				=> '3',
				'right_id'				=> '4',
				'module_langname'		=> 'AP_RIGHT',
			);
			$sql = 'INSERT INTO ' . ALPHA_MODULES_TABLE . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);
			
			$sql_ary = array(
				'module_id'				=> '3',
				'module_enabled'		=> '1',
				'module_display'		=> '1',
				'module_class'			=> 'ap',
				'parent_id'				=> '0',
				'left_id'				=> '5',
				'right_id'				=> '6',
				'module_langname'		=> 'AP_COMBINED',
			);
			$sql = 'INSERT INTO ' . ALPHA_MODULES_TABLE . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);
			
			$sql_ary = array(
				'module_id'				=> '4',
				'module_enabled'		=> '1',
				'module_display'		=> '1',
				'module_class'			=> 'ap',
				'parent_id'				=> '0',
				'left_id'				=> '7',
				'right_id'				=> '10',
				'module_langname'		=> 'AP_INDEX',
			);
			$sql = 'INSERT INTO ' . ALPHA_MODULES_TABLE . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);

			$sql_ary = array(
				'module_id'				=> '7',
				'module_enabled'		=> '1',
				'module_display'		=> '1',
				'module_basename'		=> 'index',
				'module_class'			=> 'ap',
				'parent_id'				=> '4',
				'left_id'				=> '8',
				'right_id'				=> '9',
				'module_langname'		=> 'AP_INDEX',
				'module_mode'			=> 'index',
			);
			$sql = 'INSERT INTO ' . ALPHA_MODULES_TABLE . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);
			
			$sql_ary = array(
				'module_id'				=> '5',
				'module_enabled'		=> '1',
				'module_display'		=> '1',
				'module_class'			=> 'ap',
				'parent_id'				=> '0',
				'left_id'				=> '11',
				'right_id'				=> '14',
				'module_langname'		=> 'AP_PORTAL',
			);
			$sql = 'INSERT INTO ' . ALPHA_MODULES_TABLE . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);

			$sql_ary = array(
				'module_id'				=> '8',
				'module_enabled'		=> '1',
				'module_display'		=> '1',
				'module_basename'		=> 'portal',
				'module_class'			=> 'ap',
				'parent_id'				=> '5',
				'left_id'				=> '12',
				'right_id'				=> '13',
				'module_langname'		=> 'AP_PORTAL',
				'module_mode'			=> 'portal',
			);
			$sql = 'INSERT INTO ' . ALPHA_MODULES_TABLE . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);

			$sql_ary = array(
				'module_id'				=> '6',
				'module_enabled'		=> '1',
				'module_display'		=> '1',
				'module_class'			=> 'ap',
				'parent_id'				=> '0',
				'left_id'				=> '15',
				'right_id'				=> '16',
				'module_langname'		=> 'AP_PAGES',
			);
			$sql = 'INSERT INTO ' . ALPHA_MODULES_TABLE . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);
			
			$sql_ary = array(
				'module_id'				=> '8',
				'display'				=> '1',
				'forum'					=> '2',
				'number'				=> '5',
				'length'				=> '1000',
				'one_post'				=> '1',
				'subforums'				=> '0',
				'signature'				=> '1',
				'user_info'				=> '1',
				'info_order'			=> '0',
			);
			$sql = 'INSERT INTO ' . ALPHA_PORTAL_TABLE . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);
		
			// Done
			$db->sql_close();
			$cache->purge();
			meta_refresh(3, append_sid("{$phpbb_root_path}index.{$phpEx}"));
			$redirect = sprintf($user->lang['RETURN_INDEX'], '<a href="' . append_sid("{$phpbb_root_path}index.$phpEx") . '">', '</a> ');
			trigger_error($user->lang['SUCCESSFUL_INSTALL'] . $redirect);
		}
		else
		{
			confirm_box(false, $user->lang['INSTALL_CONFIRM_ALPHA'], build_hidden_fields(array()));
			meta_refresh(3, append_sid("{$phpbb_root_path}index.$phpEx"));
			$message = $user->lang['RETURN_INSTALL_ALPHA'] . sprintf($user->lang['RETURN_INDEX'], '<a href="' . append_sid("{$phpbb_root_path}index.$phpEx") . '">', '</a> ');
			trigger_error($message);
		}
		return;
	break;
	case 'update5';
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . "
				ADD welcome int(1) default '0'";
		$db->sql_query($sql);
		return;
	break;
	case 'update4';
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . "
				ADD welcome int(1) default '0'";
		$db->sql_query($sql);
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . "
				ADD in_menu int(1) default '0'";
		$db->sql_query($sql);
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . '
				MODIFY bbcode_uid varchar(8)';
		$db->sql_query($sql);
		return;
	break;
	case 'update3';
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . "
				ADD welcome int(1) default '0'";
		$db->sql_query($sql);
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . "
				ADD in_menu int(1) default '0'";
		$db->sql_query($sql);
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . '
				MODIFY bbcode_uid varchar(8)';
		$db->sql_query($sql);
		return;
	break;
	case 'update2';
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . "
				ADD welcome int(1) default '0'";
		$db->sql_query($sql);
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . "
				ADD in_menu int(1) default '0'";
		$db->sql_query($sql);
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . '
				MODIFY bbcode_uid varchar(8)';
		$db->sql_query($sql);
		return;
	break;
	case 'update1';
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . "
				ADD welcome int(1) default '0'";
		$db->sql_query($sql);
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . "
				ADD in_menu int(1) default '0'";
		$db->sql_query($sql);
		$sql = 'ALTER TABLE ' . ALPHA_PAGES_TABLE . '
				MODIFY bbcode_uid varchar(8)';
		$db->sql_query($sql);
		return;
	break;
}
?>
<?php
/*        //we'll be installing this module in the mods tab of the ACP… so we search for ACP_CAT_DOT_MODS
        $sql = 'SELECT * FROM ' . MODULES_TABLE . " WHERE module_langname = 'ACP_CAT_DOT_MODS'";
        $result = $db->sql_query($sql);
        $row = $db->sql_fetchrow($result);
        $db->sql_freeresult($result);
        
        //fill in the details for your ACP category…
//Note #1
        $sql_ary = array(
            'module_enabled'		=> 1,
            'module_display'		=> 1,
            'module_basename'		=> '',
            'module_class'			=> 'acp',
            'parent_id'				=> $row['module_id'],
            'left_id'				=> $row['right_id'],
            'right_id'				=> $row['right_id'] + 3,
            'module_langname'		=> 'ACP_MY_MODS',
            'module_mode'			=> '',
            'module_auth'			=> '',
        );
        
        $sql = 'INSERT INTO ' . MODULES_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
        $db->sql_query($sql);
        $module_id = $db->sql_nextid();
    
        $sql = 'UPDATE ' . MODULES_TABLE . "
        SET left_id = left_id + 4, right_id = right_id + 4
        WHERE left_id >= {$sql_ary['left_id']} AND module_id != $module_id";
        $db->sql_query($sql);
                            
        $sql = 'UPDATE ' . MODULES_TABLE . "
        SET right_id = right_id + 4
        WHERE left_id < {$sql_ary['left_id']} AND right_id >= {$sql_ary['left_id']} AND module_id != $module_id";
        $db->sql_query($sql);
//end note #1        
        //here is your ACP module page… its currently programmed to go inside the cat that you created above
//note #2
        $sql_ary = array(
            'module_enabled'		=> 1,
            'module_display'		=> 1,
            'module_basename'		=> 'mod',
            'module_class'			=> 'acp',
            'parent_id'				=> $module_id,
            'left_id'				=> $row['right_id'] + 1,
            'right_id'				=> $row['right_id'] + 2,
            'module_langname'		=> 'ACP_MOD',
            'module_mode'			=> 'default',
            'module_auth'			=> 'acl_a_',
        );
//End note #2
        
        $sql = 'INSERT INTO ' . MODULES_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
        $db->sql_query($sql);
*/
?>