<?php
/**
*
* viewforum [Japanese]
*
* @package language
* @version $Id: viewforum.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translator: ocean=Yohsuke < n/a > ( n/a ) http://bbmods.info/bbs/
* Translation Contributor: Weby
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> '最近のトピック',
	'ANNOUNCEMENTS'			=> '告知トピック',

	'FORUM_PERMISSIONS'		=> 'フォーラムパーミッション',

	'ICON_ANNOUNCEMENT'		=> '告知トピック',
	'ICON_STICKY'			=> '注目トピック',

	'LOGIN_NOTIFY_FORUM'	=> 'ウォッチ中のフォーラムに新しい記事が投稿されています。新しい記事を閲覧するにはログインしてください。',

	'MARK_TOPICS_READ'		=> 'すべてのトピックを既読にする',

	'NEW_POSTS_HOT'			=> '新しい記事あり [ 人気 ]',
	'NEW_POSTS_LOCKED'		=> '新しい記事あり [ 閉鎖中 ]',
	'NO_NEW_POSTS_HOT'		=> '新しい記事なし [ 人気 ]',
	'NO_NEW_POSTS_LOCKED'	=> '新しい記事なし [ 閉鎖中 ]',
	'NO_READ_ACCESS'		=> 'パーミッションが与えられていないため、このフォーラムの記事を閲覧できません',

	'POST_FORUM_LOCKED'		=> 'フォーラムは閉鎖中 [ 投稿禁止 ] です',

	'TOPICS_MARKED'			=> 'フォーラムのトピックをすべて既読にしました',

	'VIEW_FORUM'			=> 'フォーラム閲覧',
	'VIEW_FORUM_TOPIC'		=> '1 件のトピック',
	'VIEW_FORUM_TOPICS'		=> '%d 件のトピック',
));

?>