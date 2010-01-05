<?php
/**
*
* viewtopic [Japanese]
*
* @package language
* @version $Id: viewtopic.php 8775 2008-08-21 15:41:12Z Kellanved $
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
	'ATTACHMENT'						=> '添付ファイル',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '添付ファイル機能は無効に設定されています',

	'BOOKMARK_ADDED'		=> 'トピックをブックマークしました',
	'BOOKMARK_ERR'			=> 'トピックのブックマークに失敗しました。もう一度お試しください。',
	'BOOKMARK_REMOVED'		=> 'トピックのブックマークを解除しました',
	'BOOKMARK_TOPIC'		=> 'このトピックをブックマークする',
	'BOOKMARK_TOPIC_REMOVE'	=> 'ブックマークを解除',
	'BUMPED_BY'				=> 'トピックを最後に上げたユーザー %1$s [ %2$s ]',
	'BUMP_TOPIC'			=> 'トピックを上げる',

	'CODE'					=> 'コード',

	'DELETE_TOPIC'			=> 'トピックを削除する',
	'DOWNLOAD_NOTICE'		=> 'パーミッションが与えられていないため、記事の添付ファイルを見ることができません',

	'EDITED_TIMES_TOTAL'	=> '最後に編集したユーザー %1$s [ %2$s ], 累計 %3$d 回',
	'EDITED_TIME_TOTAL'		=> '最後に編集したユーザー %1$s [ %2$s ], 累計 %3$d 回',
	'EMAIL_TOPIC'			=> '知人にメールで知らせる',
	'ERROR_NO_ATTACHMENT'	=> '添付ファイルが存在していません',

	'FILE_NOT_FOUND_404'	=> 'ファイル <strong>%s</strong> が存在していません',
	'FORK_TOPIC'			=> 'トピックをコピーする',

	'LINKAGE_FORBIDDEN'		=> 'あなたはこのサイト内の画像またはファイルについて、表示、ダウンロード、リンクすることをサイトから拒否されました',
	'LOGIN_NOTIFY_TOPIC'	=> '監視中のトピックに新しい返信記事があります。新しい返信記事を閲覧するにはログインしてください。',
	'LOGIN_VIEWTOPIC'		=> 'このトピックを閲覧するにはユーザー登録かログインが必要です',

	'MAKE_ANNOUNCE'				=> ' “告知トピック” へ変更する',
	'MAKE_GLOBAL'				=> ' “グローバル告知トピック” へ変更する',
	'MAKE_NORMAL'				=> ' “通常のトピック” へ変更する',
	'MAKE_STICKY'				=> ' “注目トピック” へ変更する',
	'MAX_OPTIONS_SELECT'		=> '<strong>%d</strong> つのオプションまで選択できます',
	'MAX_OPTION_SELECT'			=> '<strong>1</strong> つのオプションを選択できます',
	'MISSING_INLINE_ATTACHMENT'	=> '添付ファイル <strong>%s</strong> がありません',
	'MOVE_TOPIC'				=> 'トピックを移動する',

	'NO_ATTACHMENT_SELECTED'=> 'ダウンロードまたは表示する添付ファイルを選択していません',
	'NO_NEWER_TOPICS'		=> 'このフォーラムにはこれ以上新しいトピックはありません',
	'NO_OLDER_TOPICS'		=> 'このフォーラムにはこれ以上古いトピックはありません',
	'NO_UNREAD_POSTS'		=> 'このトピックに未読記事はありません',
	'NO_VOTE_OPTION'		=> '投票オプションを選択してください',
	'NO_VOTES'				=> '0 票',

	'POLL_ENDED_AT'			=> '投票は %s に終了しました',
	'POLL_RUN_TILL'			=> '投票は %s に終了します',
	'POLL_VOTED_OPTION'		=> 'このオプションに投票しました',
	'PRINT_TOPIC'			=> '印刷ビュー',

	'QUICK_MOD'				=> 'モデレータ用クイックツール',
	'QUOTE'					=> '引用',

	'REPLY_TO_TOPIC'		=> 'トピックへ返信する',
	'RETURN_POST'			=> '%s記事へ戻る%s',

	'SUBMIT_VOTE'			=> '投票',

	'TOTAL_VOTES'			=> '総投票数',

	'UNLOCK_TOPIC'			=> 'トピックを開放する',

	'VIEW_INFO'				=> '記事の詳細',
	'VIEW_NEXT_TOPIC'		=> '次のトピックへ',
	'VIEW_PREVIOUS_TOPIC'	=> '１つ前のトピックへ',
	'VIEW_RESULTS'			=> '投票結果を見る',
	'VIEW_TOPIC_POST'		=> '1 件の記事',
	'VIEW_TOPIC_POSTS'		=> '%d 件の記事',
	'VIEW_UNREAD_POST'		=> '未読記事へ',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> '投票しました',
	'VOTE_CONVERTED'		=> 'データコンバートされた投票トピックの投票オプションを変更することはできません。残念ながら現在はサポート外です。',

));

?>