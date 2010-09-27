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

class ap_recent_box
{
	var $u_action;
	var $new_config;
	function module_data($mode, $id)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$template_root = 'alphaportal/';
		$this->tpl_name = $template_root . $mode;
		$user->add_lang('ap/recent_box');
		
		if ($mode == 'recent_announce')
		{
			//
			// Recent announcements
			//
			
			if ($config['recent_announce_module'] == '')
			{
				$forums_announce = '';
			}
			else
			{
				$forums_announce = 'AND forum_id = ' . $config['recent_announce_module'];
			}
			global $recent_announce_array;
			if (!$recent_announce_array)
			{
				$sql = 'SELECT topic_title, forum_id, topic_id
					FROM ' . TOPICS_TABLE . '
					WHERE topic_status <> 2 AND
						topic_approved = 1 AND
						( topic_type = 2 OR topic_type = 3 ) '
						 . $forums_announce . '
					ORDER BY topic_last_post_time DESC';
				
				$result = $db->sql_query_limit($sql, $config['recent_announce_number_module']);
				
				while( ($row = $db->sql_fetchrow($result)) && ($row['topic_title'] != '') )
				{
					$infos = 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'];
						$recent_announce_array = $template->assign_block_vars('latest_announcements', array(
						'TITLE'	 		=> censor_text($row['topic_title']),
						'U_VIEW_TOPIC'	=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", $infos)
						)
					);
				}
			}
		}
		elseif ($mode == 'recent_topics')
		{
			//
			// Recent topics
			//
			
			if ($config['recent_topics_module'] == '')
			{
				$forums_topic = '';
			}
			else
			{
				$forums_topic = 'AND forum_id = ' . $config['recent_topics_module'];
			}
			global $recent_topics_array;
			if (!$recent_topics_array)
			{
				$sql = 'SELECT topic_title, forum_id, topic_id
					FROM ' . TOPICS_TABLE . '
					WHERE topic_approved = 1 '
					 . $forums_topic . '
					ORDER BY topic_last_post_time DESC';
				
				$result = $db->sql_query_limit($sql, $config['recent_topics_number_module']);
				
				while( ($row = $db->sql_fetchrow($result)) && ($row['topic_title'] != '') )
				{
					$infos = 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'];
						$recent_topics_array = $template->assign_block_vars('latest_topics', array(
						'TITLE'	 		=> censor_text($row['topic_title']),
						'U_VIEW_TOPIC'	=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", $infos)
						)
					);
				}
			}
		}
		elseif ($mode == 'recent_hot')
		{
			//
			// Recent hot topics
			//
			
			if ($config['recent_hot_module'] == '')
			{
				$forums_hot = '';
			}
			else
			{
				$forums_hot = 'AND forum_id = ' . $config['recent_hot_module'];
			}
			
			$hot = $config['hot_threshold'];
			global $recent_hot_array;

			if (!$recent_hot_array)
			{			
				$sql = 'SELECT topic_title, forum_id, topic_id
					FROM ' . TOPICS_TABLE . '
					WHERE topic_approved = 1 AND
						topic_replies >= ' . $hot . ' '
						 . $forums_hot . '
					ORDER BY topic_last_post_time DESC';
				
				$result = $db->sql_query_limit($sql, $config['recent_hot_number_module']);
				
				while( ($row = $db->sql_fetchrow($result)) && ($row['topic_title'] != '') )
				{
					$infos = 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'];
						$recent_hot_array = $template->assign_block_vars('latest_hot_topics', array(
						'TITLE'	 		=> censor_text($row['topic_title']),
						'U_VIEW_TOPIC'	=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", $infos)
						)
					);
				}
			}
		}
	}
}
?>