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

class ap_pages_info
{
	function module()
	{
		return array(
			'filename'		=> 'ap_pages',
			'title'			=> 'AP_PAGES',
			'version'		=> '1.0.0',
			'modes'			=> array(
				'pages'		=> array('title' => 'AP_PAGES', 'auth' => 'acl_a_board', 'cat' => array('ACP_GENERAL_ALPHAPORTAL'), 'tpl' => 'alphaportal/pages')
			),
		);
	}

	function install($page = 'test_page', $title = 'Test Title', $content = 'Test Content', $in_menu = 0, $welcome = 0)
	{ 
		global $sql, $db, $user;
		// Safe guard in case someone puts '' as their value for Title of Content in the manual page creation.
		// It does not matter if they are blank after editting though - just something with the BBCodes.
		if ($title == '')
		{
			$title = 'Test Title';
		}
		if ($content == '')
		{
			$content = 'Test Content';
		}
		$content_parse = utf8_normalize_nfc($content);
		$uid = $bitfield = $options = '';
		$allow_bbcode = $allow_urls = $allow_smilies = true;
		generate_text_for_storage($content, $uid, $bitfield, $options, $allow_bbcode, $allow_urls, $allow_smilies);
		$num = 1;
		$go_on = false;
		$page_check = $page;
		while ($go_on == false)
		{
			$sql = 'SELECT page
				FROM ' . ALPHA_PAGES_TABLE . "
				WHERE page = '" . $db->sql_escape($page_check) . "'";
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);
			if ($row['page'] <> '')
			{
				$num = $num + 1;
				$page_check = $page . $num;
			}
			else
			{
				$page = $page_check;
				$go_on = true;
			}
		}

		$sql_ary = array(
			'page'				=> $page,
			'title'				=> $title,
			'content'			=> $content_parse,
			'bbcode_uid'		=> $uid,
			'bbcode_bitfield'	=> $bitfield,
			'bbcode_options'	=> $options,
			'in_menu'			=> $in_menu,
			'welcome'			=> $welcome,
		);
		$sql = 'INSERT ' . ALPHA_PAGES_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
		$db->sql_query($sql);

		add_log('admin', 'LOG_PAGE_NEW', $page);
		return $page;
	}

	function uninstall($page)
	{
		global $sql, $db, $user;
		$sql = 'DELETE FROM ' . ALPHA_PAGES_TABLE . " WHERE page = '{$page}'";
		$db->sql_query($sql);
		add_log('admin', 'LOG_PAGE_DELETE', $page);
	}
	function edit($mode, $submit = false)
	{
		global $sql, $db, $user, $template;
		$module_id = request_var('m', '');
		$sql_array = array(
			'SELECT'	=> 'p.*, m.page_alias',
			'FROM'		=> array(
				ALPHA_PAGES_TABLE		=> 'p',
				ALPHA_MODULES_TABLE		=> 'm',
			),
			'WHERE'		=> 'm.module_id = ' . $db->sql_escape($module_id) . ' AND
				p.page = m.page_alias',
		);
		$sql = $db->sql_build_query('SELECT', $sql_array);
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		
		decode_message($row['content'], $row['bbcode_uid']);
		$template->assign_vars(array_merge(array(
			'ALIAS'			=> $row['page'],
			'TITLE'			=> $row['title'],
			'CONTENT'		=> $row['content'],
			'IN_MENU'		=> $row['in_menu'],
			'WELCOME'		=> $row['welcome'],
		)));

		if ($submit)
		{
			$page = request_var('page_alias', '', true);
			if ($page <> $row['page'])
			{
				$num = 1;
				$go_on = false;
				$page_check = $page;
				while ($go_on == false)
				{
					$sql = 'SELECT page
						FROM ' . ALPHA_PAGES_TABLE . "
						WHERE page = '" . $db->sql_escape($page_check) . "'";
					$result = $db->sql_query($sql);
					$check = $db->sql_fetchrow($result);
					$db->sql_freeresult($result);
					if ($check['page'] <> '')
					{
						$num = $num + 1;
						$page_check = $page . $num;
					}
					else
					{
						$page = $page_check;
						$go_on = true;
					}
				}
			}
			$content = utf8_normalize_nfc(request_var('page_content', '', true));
			$uid = $bitfield = $options = '';
			$allow_bbcode = $allow_urls = $allow_smilies = true;
			generate_text_for_storage($content, $uid, $bitfield, $options, $allow_bbcode, $allow_urls, $allow_smilies);
	
			$sql_ary = array(
				'page'				=> $page,
				'title'				=> request_var('page_title', '', true),
				'content'			=> $content,
				'bbcode_uid'		=> $uid,
				'bbcode_bitfield'	=> $bitfield,
				'bbcode_options'	=> $options,
				'in_menu'			=> request_var('in_menu', '0'),
				'welcome'			=> request_var('welcome', '0'),
			);
			$sql = 'UPDATE ' . ALPHA_PAGES_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE page = '" . $db->sql_escape($row['page']) . "'";
			$db->sql_query($sql);
	
			add_log('admin', 'LOG_PAGE_EDIT', $page);
			return $page;
		}
	}
}

?>