<?php
/**
*
* @author Harmlessgoat22 harmlessgoat22@gmail.com
*
* @package alphaPORTAL
* @version 1.2.0
* @copyright (c) 2007 phpAlpha
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = './';
$website_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.'.$phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

// View phpBB Pages!
$page = request_var('page', '');
if ($page == '')
{
	$sql = 'SELECT *
	FROM ' . ALPHA_PAGES_TABLE . '
	ORDER BY title ASC';
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		$content = generate_text_for_display($row['content'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);
		$template->assign_block_vars('view_page', array(
			'TITLE'	 		=> $row['title'],
			'CONTENT'	 	=> $content,
			'U_PAGE'		=> append_sid("{$phpbb_root_path}pages.{$phpEx}?page=" . $row['page']))
		);
		if (!$title)
		{
			$title = $row['title'];
		}
		else
		{
			$title = $title . " &bull; " . $row['title'];
		}
	}
	$db->sql_freeresult($result);
}
else
{
	$sql = 'SELECT title, content, bbcode_uid, bbcode_bitfield, bbcode_options
	FROM ' . ALPHA_PAGES_TABLE . "
	WHERE page = '" . $db->sql_escape($page) . "'";
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	
	$content = generate_text_for_display($row['content'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);

	$template->assign_block_vars('view_page', array(
		'TITLE'	 		=> $row['title'],
		'CONTENT'	 	=> $content,
		'U_PAGE'		=> append_sid("{$phpbb_root_path}pages.{$phpEx}?page=$page"))
	);
	$title = $row['title'];
}

$template->assign_vars(array(
	'S_VIEW_PAGE'	=> true)
);

// Output the page
page_header($title);

$template->set_filenames(array(
	'body' => 'pages_body.html')
);

page_footer();
?>