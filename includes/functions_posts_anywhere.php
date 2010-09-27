<?php
/**
*
* @package acp
* @version $Id: functions_admin.php,v 1.247 2007/08/19 13:36:52 naderman Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * Display posts for forums, topics or posts
 *
 * @param mixed $forum_id forum_id or forum_ids (array)
 * @param mixed $topic_id topic_id or topic_ids (array)
 * @param mixed $post_id post_id or post_ids (array)
 * @param int $limit Number of results returned
 * @param string $display_type forum, topic or post. Displays results as forum, topic or posts
 * @param int $char_limit character limit for each post before it cuts off to say read more
 * @param bool $recursive view topics or posts under this parent recursively
 */

function display_posts($id, $limit = 10, $char_limit = 500, $unique = true, $recursive = true)
{
	global $db, $user, $template, $phpbb_root_path, $auth, $phpEx, $config;

	$forum_id = request_var('f', 0);
	if (!$forum_id)
	{
		$forum_id = (int)$id;
	}

	// Container for user details, only process once
	$forum_ary = $post_ary = $user_cache = $user_ary = $post_ids = $user_cache = $attachments = $update_count = array();
	$has_attachments = $display_notice = false;

	//if recursive is selected, grab forums beneath the selected
	if ($recursive && $forum_id)
	{
		//grab array of subforums beneath this one
		$forum_ary = select_subforums($forum_id);

		if (!sizeof($forum_ary))
		{
			return;
		}
		$where = $db->sql_in_set('forum_id', $forum_ary) . ((!$auth->acl_get('m_approve', 'forum_id')) ? ' AND post_approved = 1' : '');
	}
	else if ($forum_id)
	{
		if (!$auth->acl_get('f_read', $forum_id) && $forum_id !== 0)
		{
			return;
		}
		$forum_ary[$forum_id] = $forum_id;
		$where = $db->sql_in_set('forum_id', $forum_ary) . ((!$auth->acl_get('m_approve', 'forum_id')) ? ' AND post_approved = 1' : '');
	}
	else if ($id === false)
	{
		$where = (!$auth->acl_get('m_approve', 'forum_id')) ? ' post_approved = 1' : '';
	}
	else
	{
		$forum_ary[0] = 0;
		$where = $db->sql_in_set('forum_id', $forum_ary) . ((!$auth->acl_get('m_approve', 'forum_id')) ? ' AND post_approved = 1' : '');
	}

	if ($unique)
	{
		//grab the topic id's well be using
		$sql_ary = array(
			'SELECT'	=> 'DISTINCT topic_id',
			'FROM'		=> array(
				POSTS_TABLE	=> '',
			),
			'WHERE'		=> $where,
			'ORDER_BY'	=> 'post_time DESC',
		);
		$sql = $db->sql_build_query('SELECT', $sql_ary);
		$result = $db->sql_query_limit($sql, $limit);

		while ($row = $db->sql_fetchrow($result))
		{
			$topic_ary[$row['topic_id']] = $row['topic_id'];
		}
		$db->sql_freeresult($result);
	}

	$details_ary = array(
		'unique'	=> $unique,
		'limit'		=> $limit,
	);

	select_posts($details_ary, $forum_ary, $topic_ary, $post_ary, $post_ids, $user_ary);

	if (!sizeof($post_ids))
	{
		return;
	}

	//grab attachments if any for these posts
	$sql_ary = array(
		'SELECT'	=> '*',
		'FROM'		=> array(
			ATTACHMENTS_TABLE	=> '',
		),
		'WHERE'		=> $db->sql_in_set('post_msg_id', $post_ids),
	);
	$sql = $db->sql_build_query('SELECT', $sql_ary);
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		$attachments[$row['post_msg_id']][] = $row;
	}
	$db->sql_freeresult($result);

	//get user_cache
	build_user_cache($user_ary, $user_cache);

	// Load custom profile fields
	if ($config['load_cpf_viewtopic'])
	{
		if (!class_exists('custom_profile') && !class_exists('custom_profile_admin'))
		{
			include($phpbb_root_path . 'includes/functions_profile_fields.' . $phpEx);
		}
		$cp = new custom_profile();

		// Grab all profile fields from users in id cache for later use - similar to the poster cache
		$profile_fields_cache = $cp->generate_profile_fields_template('grab', $user_ary);
	}

	// Generate online information for user
	if ($config['load_onlinetrack'] && sizeof($user_ary))
	{
		$sql_ary = array(
			'SELECT'	=> 'session_user_id, MAX(session_time) as online_time, MIN(session_viewonline) AS viewonline',
			'FROM'		=> array(
				SESSIONS_TABLE	=> '',
			),
			'WHERE'		=> $db->sql_in_set('session_user_id', $user_ary),
			'GROUP_BY'	=> 'session_user_id',
		);
		$sql = $db->sql_build_query('SELECT', $sql_ary);
		$result = $db->sql_query($sql);

		$update_time = $config['load_online_time'] * 60;
		while ($row = $db->sql_fetchrow($result))
		{
			$user_cache[$row['session_user_id']]['online'] = (time() - $update_time < $row['online_time'] && (($row['viewonline']) || $auth->acl_get('u_viewonline'))) ? true : false;
		}
		$db->sql_freeresult($result);
	}

	foreach ($post_ary as $row)
	{
		$poster_id = $row['poster_id'];
		$forum_id = $row['forum_id'];
		$row['bbcode_options'] = $row['enable_bbcode'] + $row['enable_smilies'] + $row['enable_magic_url'];
		$row['username'] = $user_cache[$poster_id]['username'];
		$row['user_colour'] = $user_cache[$poster_id]['user_colour'];

		$message = $row['post_text'];
		$trim = false;

		if ($char_limit)
		{
			strip_bbcode($message, $row['bbcode_uid']);
			if (utf8_strlen($message) > $char_limit)
			{
				$message = utf8_substr($message, 0, $char_limit);
				$trim = true;
			}
			else
			{
				$message = generate_text_for_display($row['post_text'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);
			}
		}
		else
		{
			$message = generate_text_for_display($row['post_text'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);
		}

		if ($auth->acl_get('u_download') && $auth->acl_get('f_download', $forum_id))
		{
			parse_attachments($forum_id, $message, $attachments[$row['post_id']], $update_count);
		}
		else
		{
			$display_notice = true;
		}
		$post_unread = ($row['mark_time'] > $row['post_time'] && $user->data['user_id'] != ANONYMOUS) ? true : false;

		if ($config['load_cpf_viewtopic'])
		{
			$cp_row = (isset($profile_fields_cache[$poster_id])) ? $cp->generate_profile_fields_template('show', false, $profile_fields_cache[$poster_id]) : array();
		}
		$template->assign_block_vars('portal_row', array(
			'POST_AUTHOR_FULL'		=> get_username_string('full', $poster_id, $row['username'], $row['user_colour'], $row['post_username']),
			'POST_AUTHOR_COLOUR'	=> get_username_string('colour', $poster_id, $row['username'], $row['user_colour'], $row['post_username']),
			'POST_AUTHOR'			=> get_username_string('username', $poster_id, $row['username'], $row['user_colour'], $row['post_username']),
			'U_POST_AUTHOR'			=> get_username_string('profile', $poster_id, $row['username'], $row['user_colour'], $row['post_username']),

			'RANK_TITLE'		=> $user_cache[$poster_id]['rank_title'],
			'RANK_IMG'			=> $user_cache[$poster_id]['rank_image'],
			'RANK_IMG_SRC'		=> $user_cache[$poster_id]['rank_image_src'],
			'POSTER_JOINED'		=> $user_cache[$poster_id]['joined'],
			'POSTER_POSTS'		=> $user_cache[$poster_id]['posts'],
			'POSTER_FROM'		=> $user_cache[$poster_id]['from'],
			'POSTER_AVATAR'		=> $user_cache[$poster_id]['avatar'],
			'POSTER_WARNINGS'	=> $user_cache[$poster_id]['warnings'],
			'POSTER_AGE'		=> $user_cache[$poster_id]['age'],

			'POST_DATE'			=> $user->format_date($row['post_time']),
			'POST_SUBJECT'		=> $row['post_subject'],
			'MESSAGE'			=> $message,
			'READ_MORE'			=> ($trim) ? true : false,
			'SIGNATURE'			=> ($row['enable_sig']) ? $user_cache[$poster_id]['sig'] : '',
			'EDITED_MESSAGE'	=> ($row['post_edit_count']) ? get_username_string('full', $row['post_edit_user'], $user_cache[$poster_id]['username'], $user_cache[$poster_id]['user_colour']) : '',
			'EDIT_REASON'		=> $row['post_edit_reason'],

			'MINI_POST_IMG'		=> ($post_unread) ? $user->img('icon_post_target_unread', 'NEW_POST') : $user->img('icon_post_target', 'POST'),
			#'POST_ICON_IMG'		=> ($row['enable_icons'] && !empty($row['icon_id'])) ? $icons[$row['icon_id']]['img'] : '',
			#'POST_ICON_IMG_WIDTH'	=> ($row['enable_icons'] && !empty($row['icon_id'])) ? $icons[$row['icon_id']]['width'] : '',
			#'POST_ICON_IMG_HEIGHT'=> ($row['enable_icons'] && !empty($row['icon_id'])) ? $icons[$row['icon_id']]['height'] : '',
			'ICQ_STATUS_IMG'	=> $user_cache[$poster_id]['icq_status_img'],
			'ONLINE_IMG'		=> ($poster_id == ANONYMOUS || !$config['load_onlinetrack']) ? '' : (($user_cache[$poster_id]['online']) ? $user->img('icon_user_online', 'ONLINE') : $user->img('icon_user_offline', 'OFFLINE')),
			'S_ONLINE'			=> ($poster_id == ANONYMOUS || !$config['load_onlinetrack']) ? false : (($user_cache[$poster_id]['online']) ? true : false),

			'U_EDIT'			=> (!$user->data['is_registered']) ? '' : ((($user->data['user_id'] == $poster_id && $auth->acl_get('f_edit', $forum_id) && ($row['post_time'] > time() - ($config['edit_time'] * 60) || !$config['edit_time'])) || $auth->acl_get('m_edit', $forum_id)) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=edit&amp;f=$forum_id&amp;p={$row['post_id']}") : ''),
			'U_QUOTE'			=> ($auth->acl_get('f_reply', $forum_id)) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=quote&amp;f=$forum_id&amp;p={$row['post_id']}") : '',
			'U_INFO'			=> ($auth->acl_get('m_info', $forum_id)) ? append_sid("{$phpbb_root_path}mcp.$phpEx", "i=main&amp;mode=post_details&amp;f=$forum_id&amp;p=" . $row['post_id'], true, $user->session_id) : '',
			'U_DELETE'			=> (!$user->data['is_registered']) ? '' : ((($user->data['user_id'] == $poster_id && $auth->acl_get('f_delete', $forum_id) && $row['topic_last_post_id'] == $row['post_id'] && ($row['post_time'] > time() - ($config['edit_time'] * 60) || !$config['edit_time'])) || $auth->acl_get('m_delete', $forum_id)) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=delete&amp;f=$forum_id&amp;p={$row['post_id']}") : ''),

			'U_PROFILE'			=> $user_cache[$poster_id]['profile'],
			'U_SEARCH'			=> $user_cache[$poster_id]['search'],
			'U_PM'				=> ($poster_id != ANONYMOUS && $config['allow_privmsg'] && $auth->acl_get('u_sendpm') && ($user_cache[$poster_id]['allow_pm'] || $auth->acl_gets('a_', 'm_') || $auth->acl_getf_global('m_'))) ? append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=pm&amp;mode=compose&amp;action=quotepost&amp;p=' . $row['post_id']) : '',
			'U_EMAIL'			=> $user_cache[$poster_id]['email'],
			'U_WWW'				=> $user_cache[$poster_id]['www'],
			'U_ICQ'				=> $user_cache[$poster_id]['icq'],
			'U_AIM'				=> $user_cache[$poster_id]['aim'],
			'U_MSN'				=> $user_cache[$poster_id]['msn'],
			'U_YIM'				=> $user_cache[$poster_id]['yim'],
			'U_JABBER'			=> $user_cache[$poster_id]['jabber'],

			'U_REPORT'			=> ($auth->acl_get('f_report', $forum_id)) ? append_sid("{$phpbb_root_path}report.$phpEx", 'f=' . $forum_id . '&amp;p=' . $row['post_id']) : '',
			'U_MCP_REPORT'		=> ($auth->acl_get('m_report', $forum_id)) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=reports&amp;mode=report_details&amp;f=' . $forum_id . '&amp;p=' . $row['post_id'], true, $user->session_id) : '',
			'U_MCP_APPROVE'		=> ($auth->acl_get('m_approve', $forum_id)) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=queue&amp;mode=approve_details&amp;f=' . $forum_id . '&amp;p=' . $row['post_id'], true, $user->session_id) : '',
			'U_MINI_POST'		=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'p=' . $row['post_id']) . (($row['topic_type'] == POST_GLOBAL) ? '&amp;f=' . $forum_id : '') . '#p' . $row['post_id'],
			#'U_NEXT_POST_ID'	=> ($i < $i_total && isset($rowset[$post_list[$i + 1]])) ? $rowset[$post_list[$i + 1]]['post_id'] : '',
			#'U_PREV_POST_ID'	=> $prev_post_id,
			'U_NOTES'			=> ($auth->acl_getf_global('m_')) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=notes&amp;mode=user_notes&amp;u=' . $poster_id, true, $user->session_id) : '',
			'U_WARN'			=> ($auth->acl_get('m_warn') && $poster_id != $user->data['user_id'] && $poster_id != ANONYMOUS) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=warn&amp;mode=warn_post&amp;f=' . $forum_id . '&amp;p=' . $row['post_id'], true, $user->session_id) : '',

			'POST_ID'			=> $row['post_id'],
			'POSTER_ID'			=> $poster_id,

			'S_HAS_ATTACHMENTS'	=> (!empty($attachments[$row['post_id']])) ? true : false,
			'S_POST_UNAPPROVED'	=> ($row['post_approved']) ? false : true,
			'S_POST_REPORTED'	=> ($row['post_reported'] && $auth->acl_get('m_report', $forum_id)) ? true : false,
			'S_DISPLAY_NOTICE'	=> $display_notice && $row['post_attachment'],
			#'S_FRIEND'			=> ($row['friend']) ? true : false,
			'S_UNREAD_POST'		=> $post_unread,
			#'S_FIRST_UNREAD'	=> $s_first_unread,
			'S_CUSTOM_FIELDS'	=> (isset($cp_row['row']) && sizeof($cp_row['row'])) ? true : false,
			#'S_TOPIC_POSTER'	=> ($topic_data['topic_poster'] == $poster_id) ? true : false,
		));

		// Display not already displayed Attachments for this post, we already parsed them. ;)
		if (!empty($attachments[$row['post_id']]))
		{
			foreach ($attachments[$row['post_id']] as $attachment)
			{
				$template->assign_block_vars('portal_row.attachment', array(
					'DISPLAY_ATTACHMENT'	=> $attachment)
				);
			}
		}
	}
	unset($cp);

	$db->sql_freeresult($result);
	return;
}

/**
 * Select subforums
 *
 * @param int $forum_id
 * @return array $forum_ary array of forum id's
 */
function select_subforums($forum_id)
{
	global $db, $auth;

	$forum_ary = array();
	//grab all forums and subforums under the forum id selected
	$sql_ary = array(
		'SELECT'	=> 'b.*',
		'FROM'		=> array(
			FORUMS_TABLE	=> 'a',
		),
		'LEFT_JOIN'	=> array(
			array(
				'FROM'	=> array(FORUMS_TABLE => 'b'),
				'ON'	=> 'b.left_id BETWEEN a.left_id AND a.right_id',
			)
		),
		'WHERE'		=> "a.forum_id = $forum_id",
		'ORDER_BY'	=> 'b.forum_last_post_time DESC',
	);
	$sql = $db->sql_build_query('SELECT', $sql_ary);
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		//compile the list of ids if we have permission to view them
		if (!$auth->acl_get('f_read', $forum_id))
		{
			continue;
		}
		$forum_ary[$row['forum_id']] = $row['forum_id'];
	}
	$db->sql_freeresult($result);
	return $forum_ary;
}

/**
 * Select posts and post info to display
 *
 * @param array $details insert details (limit, where and unique)
 * @param array $topic_ary insert topic_ary
 * @param array $post_ary output post_ary
 * @param array $post_ids output post_ids
 * @param array $user_ary output user_ary (array of user_ids)
 */
function select_posts($details, $forum_ary, &$topic_ary, &$post_ary, &$post_ids, &$user_ary)
{
	global $db, $user, $auth;

	//open up some vars
	$unique = $details['unique'];
	$limit = $details['limit'];

	//get unread and posts data
	$count = 0;

	if (sizeof($topic_ary))
	{
		$where = $db->sql_in_set('p.topic_id', $topic_ary) . ' AND t.topic_id = p.topic_id';
	}
	else if (sizeof($forum_ary))
	{
		// Used to be
		// $where = $db->sql_in_set('p.forum_id', $forum_ary) . ((!$auth->acl_get('m_approve', 'p.forum_id')) ? ' AND p.post_approved = 1' : '');
		$where = $db->sql_in_set('p.forum_id', $forum_ary) . ((!$auth->acl_get('m_approve', " . 'p.forum_id' . ")) ? ' AND p.post_approved = 1' : '');
	}
	else
	{
		$where = '';
	}

	$sql_ary = array(
		'SELECT'	=> 'p.*, t.*, tt.mark_time',
		'FROM'		=> array(
			POSTS_TABLE	=> 'p',
			TOPICS_TABLE => 't',
		),
		'LEFT_JOIN'	=> array(
			array(
				'FROM'	=> array(TOPICS_TRACK_TABLE => 'tt'),
				'ON'	=> "tt.topic_id = p.topic_id AND tt.user_id = {$user->data['user_id']}",
			),
			array(
				'FROM'	=> array(USERS_TABLE => 'u'),
				'ON'	=> 'u.user_id = p.poster_id',
			),
		),

		'WHERE'		=> $where,
		'ORDER_BY'	=> 'p.post_time DESC',
	);

	$sql = $db->sql_build_query('SELECT', $sql_ary);
	$result = ($unique) ? $db->sql_query($sql) : $db->sql_query_limit($sql, $limit);

	while ($row = $db->sql_fetchrow($result))
	{
		if (!$auth->acl_get('f_read', $row['forum_id']) && $row['forum_id'] != 0)
		{
			continue;
		}

		//if unique = true, make sure we aren't pulling duplicate topics
		if ($unique)
		{
			if (!isset($topic_ary[$row['topic_id']]))
			{
				continue;
			}
			if ($count == $limit)
			{
				break;
			}
			unset($topic_ary[$row['topic_id']]);
			$count++;
		}
		$post_ary[$row['post_id']] = $row;
		$post_ids[$row['post_id']] = $row['post_id'];

		if ($row['post_edit_user'])
		{
			$user_ary[$row['post_edit_user']] = $row['post_edit_user'];
		}
		$user_ary[$row['poster_id']] = $row['poster_id'];
	}
	$db->sql_freeresult($result);



	return;
}

/**
 * Build User Cache
 *
 * @param array $user_ary insert user id's
 * @param array $user_cache outputs user_cache
 */
function build_user_cache($user_ary, &$user_cache)
{
	global $db, $user, $config, $auth, $phpbb_root_path, $phpEx;
	$now = getdate(time() + $user->timezone + $user->dst - date('Z'));

	//grab users data
	$sql_ary = array(
		'SELECT'	=> '*',
		'FROM'		=> array(
			USERS_TABLE	=> '',
		),
		'WHERE'		=> $db->sql_in_set('user_id', $user_ary),
	);
	$sql = $db->sql_build_query('SELECT', $sql_ary);
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		$poster_id = $row['user_id'];
		if (!isset($user_cache[$poster_id]))
		{
			if ($poster_id == ANONYMOUS)
			{
				$user_cache[$poster_id] = array(
					'joined'		=> '',
					'posts'			=> '',
					'from'			=> '',

					'sig'					=> '',
					'sig_bbcode_uid'		=> '',
					'sig_bbcode_bitfield'	=> '',

					'online'			=> false,
					'avatar'			=> '',
					'rank_title'		=> '',
					'rank_image'		=> '',
					'rank_image_src'	=> '',
					'sig'				=> '',
					'posts'				=> '',
					'profile'			=> '',
					'pm'				=> '',
					'email'				=> '',
					'www'				=> '',
					'icq_status_img'	=> '',
					'icq'				=> '',
					'aim'				=> '',
					'msn'				=> '',
					'yim'				=> '',
					'jabber'			=> '',
					'search'			=> '',
					'age'				=> '',

					'username'			=> $row['username'],
					'user_colour'		=> $row['user_colour'],

					'warnings'			=> 0,
					'allow_pm'			=> 0,
				);
			}
			else
			{
				$user_sig = '';

				// We add the signature to every posters entry because enable_sig is post dependant
				if ($row['user_sig'] && $config['allow_sig'] && $user->optionget('viewsigs'))
				{
					$user_sig = generate_text_for_display($row['user_sig'], $row['user_sig_bbcode_uid'], $row['user_sig_bbcode_bitfield'], 7);
				}

				$user_cache[$poster_id] = array(
					'joined'		=> $user->format_date($row['user_regdate']),
					'posts'			=> $row['user_posts'],
					'warnings'		=> (isset($row['user_warnings'])) ? $row['user_warnings'] : 0,
					'from'			=> (!empty($row['user_from'])) ? $row['user_from'] : '',

					'sig'			=> $user_sig,

					'viewonline'	=> $row['user_allow_viewonline'],
					'allow_pm'		=> $row['user_allow_pm'],

					'avatar'	=> ($user->optionget('viewavatars')) ? get_user_avatar($row['user_avatar'], $row['user_avatar_type'], $row['user_avatar_width'], $row['user_avatar_height']) : '',
					'age'		=> '',

					'rank_title'		=> '',
					'rank_image'		=> '',
					'rank_image_src'	=> '',

					'username'			=> $row['username'],
					'user_colour'		=> $row['user_colour'],

					'online'		=> false,
					'profile'		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=viewprofile&amp;u=$poster_id"),
					'www'			=> $row['user_website'],
					'aim'			=> ($row['user_aim'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=aim&amp;u=$poster_id") : '',
					'msn'			=> ($row['user_msnm'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=msnm&amp;u=$poster_id") : '',
					'yim'			=> ($row['user_yim']) ? 'http://edit.yahoo.com/config/send_webmesg?.target=' . $row['user_yim'] . '&amp;.src=pg' : '',
					'jabber'		=> ($row['user_jabber'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=jabber&amp;u=$poster_id") : '',
					'search'		=> ($auth->acl_get('u_search')) ? append_sid("{$phpbb_root_path}search.$phpEx", 'search_author=' . urlencode($row['username']) .'&amp;showresults=posts') : '',
				);

				get_user_rank($row['user_rank'], $row['user_posts'], $user_cache[$poster_id]['rank_title'], $user_cache[$poster_id]['rank_image'], $user_cache[$poster_id]['rank_image_src']);

				$user_cache[$poster_id]['email'] = '';
				if (!empty($row['user_allow_viewemail']) || $auth->acl_get('a_email'))
				{
					$user_cache[$poster_id]['email'] = ($config['board_email_form'] && $config['email_enable']) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=email&amp;u=$poster_id") : (($config['board_hide_emails'] && !$auth->acl_get('a_email')) ? '' : 'mailto:' . $row['user_email']);
				}

				$user_cache[$poster_id]['icq'] = (!empty($row['user_icq'])) ? 'http://www.icq.com/people/webmsg.php?to=' . $row['user_icq'] : '';
				$user_cache[$poster_id]['icq_status_img'] = (!empty($row['user_icq'])) ? '<img src="http://web.icq.com/whitepages/online?icq=' . $row['user_icq'] . '&amp;img=5" width="18" height="18" alt="" />' : '';

				if ($config['allow_birthdays'] && !empty($row['user_birthday']))
				{
					list($bday_day, $bday_month, $bday_year) = array_map('intval', explode('-', $row['user_birthday']));

					if ($bday_year)
					{
						$diff = $now['mon'] - $bday_month;
						$diff = ($diff < 0 || $now['mday'] - $bday_day < 0) ? 1 : 0;

						$user_cache[$poster_id]['age'] = (int) ($now['year'] - $bday_year - $diff);
					}
				}
			}
		}
	}
	$db->sql_freeresult($result);

	return;
}
?>