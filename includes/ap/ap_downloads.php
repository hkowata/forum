<?php
/**
*
* @package acp
* @version $Id: acp_bbcodes.php,v 1.42 2007/06/16 14:11:27 davidmj Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/

class ap_downloads
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		if ($mode == 'downloads')
		{
			global $db, $user, $auth, $template;
			global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
			$template_root = 'alphaportal/';
			$this->tpl_name = $template_root . $mode;
			$user->add_lang('ap/' . $mode);

			if ($config['downloads_recent_module'] == 0)
			{
				$sql_array = array(
					'SELECT'		=> 'a.attach_id, a.topic_id, a.poster_id, a.download_count, a.real_filename, a.attach_comment, a.filetime, a.filesize, e.group_id, t.forum_id, t.topic_title, u.user_id, u.username, u.user_colour',
					'FROM'			=> array(
						ATTACHMENTS_TABLE	=> 'a',
						EXTENSIONS_TABLE	=> 'e',
						TOPICS_TABLE		=> 't',
						USERS_TABLE			=> 'u',
					),
					'WHERE'			=> 'a.attach_id = ' . $config['downloads_topic_module'] . ' AND
						t.topic_id = a.topic_id AND
						u.user_id = a.poster_id AND
						e.extension = a.extension',
					'ORDER_BY'		=> 'a.filetime DESC',
				);
				$sql = $db->sql_build_query('SELECT', $sql_array);
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
			}
			else
			{
				$sql_array = array(
					'SELECT'		=> 'a.attach_id, a.topic_id, a.poster_id, a.download_count, a.real_filename, a.attach_comment, a.extension, a.filetime, a.filesize, e.group_id, t.forum_id, t.topic_title, u.user_id, u.username, u.user_colour',
					'FROM'			=> array(
						ATTACHMENTS_TABLE	=> 'a',
						EXTENSIONS_TABLE	=> 'e',
						TOPICS_TABLE		=> 't',
						USERS_TABLE			=> 'u',
					),
					'WHERE'			=> 't.topic_id = a.topic_id AND
						u.user_id = a.poster_id AND
						e.extension = a.extension',
					'ORDER_BY'		=> 'a.filetime DESC',
				);
				$sql = $db->sql_build_query('SELECT', $sql_array);
				$result = $db->sql_query_limit($sql, 1);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
			}

			if ($auth->acl_get('u_download') && $auth->acl_get('f_download', $row['forum_id']))
			{
				if ($row['download_count'] == 0)
				{
					$download_lang = $user->lang['DOWNLOAD_COUNT_NONE'];
				}
				elseif ($row['download_count'] == 1)
				{
					$download_lang = $user->lang['DOWNLOAD_COUNT'];
				}
				else
				{
					$download_lang = $user->lang['DOWNLOAD_COUNTS'];
				}
				global $download_array;
				if (!$download_array)
				{
					$download_array = $template->assign_block_vars('download', array(
						'POSTER'			=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
						'FILENAME'			=> $row['real_filename'],
						'COMMENT'			=> $row['attach_comment'],
						'THUMBNAIL'			=> ($row['group_id'] == 1) ? '<a href="' . append_sid("{$phpbb_root_path}download/file.{$phpEx}?id=" . $row['attach_id']) . '"><img src="' . append_sid("{$phpbb_root_path}download/file.{$phpEx}?id=" . $row['attach_id'] . "&amp;topic_id=1") . '" width="100%" /></a><br />' : '',
						'DOWNLOAD_LINK'		=> '<a href="' . append_sid("{$phpbb_root_path}download/file.{$phpEx}?id=" . $row['attach_id']) . '"><strong>' . $user->lang['DOWNLOAD_FILE'] . '</strong></a>',
						'TOPIC'				=> '<a href="' . append_sid("{$phpbb_root_path}viewtopic.{$phpEx}?f=" . $row['forum_id'] . "&amp;t=" . $row['topic_id']) . '"><strong>' . $row['topic_title'] . '</strong></a>',
						'DOWNLOAD_COUNT'	=> sprintf($download_lang, $row['download_count']),
						'FILESIZE'			=> $row['filesize'],
						'FILETIME'			=> $user->format_date($row['filetime']),
					));
					$template->assign_vars(array(
						'S_CAN_VIEW_ATTACHMENT' => true,
					));
				}
			}

		}
	}
}
?>