<?php
/**
*
* mcp [Japanese]
*
* @package language
* @version $Id: mcp.php 8940 2008-09-26 11:25:04Z toonarmy $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translator: ocean=Yohsuke < n/a > ( n/a ) http://bbmods.info/bbs/
* Translation Contributor: anit
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
	'ACTION'				=> 'アクション',
	'ACTION_NOTE'			=> 'アクション／ノート',
	'ADD_FEEDBACK'			=> 'フィードバックの追加',
	'ADD_FEEDBACK_EXPLAIN'	=> 'このユーザーへのフィードバック（あなたの意見、評価）を以下に書き込んでください。プレーンテキストのみ使用してください。HTML、BBCode などは使用できません。フィードバックはユーザーログに追加され、他の Admin またはモデレータも同様に参照できます。',
	'ADD_WARNING'			=> '警告の追加',
	'ADD_WARNING_EXPLAIN'	=> 'このユーザーへの警告を追加するには以下のフォームに内容を書き込んでください。 プレーンテキストのみ使用してください。 HTML、BBCode などは使用できません。“この警告をユーザーに通知する” をオンにして送信した場合、警告はプライベートメッセージとしてユーザーに送信されます。',
	'ALL_ENTRIES'			=> 'すべて',
	'ALL_NOTES_DELETED'		=> 'ユーザーノートの削除に成功しました',
	'ALL_REPORTS'			=> 'すべて',
	'ALREADY_REPORTED'		=> 'この記事は既にリポートされています',
	'ALREADY_WARNED'		=> 'この記事は既に警告されています',
	'APPROVE'				=> '承認',
	'APPROVE_POST'			=> '投稿記事の承認',
	'APPROVE_POST_CONFIRM'	=> 'この投稿記事を本当に承認してもよろしいですか？',
	'APPROVE_POSTS'			=> '投稿記事を承認する',
	'APPROVE_POSTS_CONFIRM'	=> '選択した投稿記事を本当に承認してもよろしいですか？',

	'CANNOT_MOVE_SAME_FORUM'=> '同じフォーラムに移動させることはできません',
	'CANNOT_WARN_ANONYMOUS'	=> 'ゲストユーザーに警告することはできません',
	'CANNOT_WARN_SELF'		=> '自分自身に警告することはできません',
	'CAN_LEAVE_BLANK'		=> '空白でもかまいません',
	'CHANGE_POSTER'			=> '投稿者の変更',
	'CLOSE_REPORT'			=> 'リポートの審査を完了する',
	'CLOSE_REPORT_CONFIRM'	=> '選択したリポートの審査を本当に完了してもよろしいですか？',
	'CLOSE_REPORTS'			=> 'リポートの審査を完了する',
	'CLOSE_REPORTS_CONFIRM'	=> '選択したリポートの審査を本当に完了してもよろしいですか？',

	'DELETE_POSTS'				=> '記事を削除する',
	'DELETE_POSTS_CONFIRM'		=> 'これらの記事を本当に削除してもよろしいですか？',
	'DELETE_POST_CONFIRM'		=> 'この記事を本当に削除してもよろしいですか？',
	'DELETE_REPORT'				=> 'リポートを削除する',
	'DELETE_REPORT_CONFIRM'		=> '選択したリポートを本当に削除してもよろしいですか？',
	'DELETE_REPORTS'			=> 'リポートを削除する',
	'DELETE_REPORTS_CONFIRM'	=> '選択したリポートを本当に削除してもよろしいですか？',
	'DELETE_SHADOW_TOPIC'		=> 'シャドウトピックを削除する',
	'DELETE_TOPICS'				=> '選択したトピックの削除',
	'DELETE_TOPICS_CONFIRM'		=> 'これらのトピックを本当に削除してもよろしいですか？',
	'DELETE_TOPIC_CONFIRM'		=> 'このトピックを本当に削除してもよろしいですか？',
	'DISAPPROVE'				=> '却下',
	'DISAPPROVE_REASON'			=> '却下の理由',
	'DISAPPROVE_POST'			=> '投稿記事の却下',
	'DISAPPROVE_POST_CONFIRM'	=> 'この投稿記事を本当に却下してもよろしいですか？',
	'DISAPPROVE_POSTS'			=> '投稿記事の却下',
	'DISAPPROVE_POSTS_CONFIRM'	=> '選択した投稿記事を本当に却下してもよろしいですか？',
	'DISPLAY_LOG'				=> '期間内表示',
	'DISPLAY_OPTIONS'			=> '表示オプション',

	'EMPTY_REPORT'					=> 'この理由を選択した場合、“詳細” に内容を入力する必要があります',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> '記事がなくなったトピックはデータベースから削除されている点にご注意ください',

	'FEEDBACK'				=> 'フィードバック',
	'FORK'					=> 'コピー',
	'FORK_TOPIC'			=> 'トピックのコピー',
	'FORK_TOPIC_CONFIRM'	=> 'このトピックを本当にコピーしてもよろしいですか？',
	'FORK_TOPICS'			=> '選択したトピックのコピー',
	'FORK_TOPICS_CONFIRM'	=> '選択したトピックを本当にコピーしてもよろしいですか？',
	'FORUM_DESC'			=> 'フォーラム説明',
	'FORUM_NAME'			=> 'フォーラム名',
	'FORUM_NOT_EXIST'		=> 'フォーラムが存在していません',
	'FORUM_NOT_POSTABLE'	=> '選択したフォーラムに投稿することはできません',
	'FORUM_STATUS'			=> 'フォーラムのステータス',
	'FORUM_STYLE'			=> 'フォーラムのスタイル',

	'GLOBAL_ANNOUNCEMENT'	=> 'グローバル告知トピック',

	'IP_INFO'				=> 'IPアドレス情報',
	'IPS_POSTED_FROM'		=> 'このユーザーが投稿した時の IPアドレス',

	'LATEST_LOGS'				=> '最近のアクションログ ５件',
	'LATEST_REPORTED'			=> '最近のリポート ５件',
	'LATEST_UNAPPROVED'			=> '最近の承認待ち記事 ５件',
	'LATEST_WARNING_TIME'		=> '最近の警告',
	'LATEST_WARNINGS'			=> '最近の警告 ５件',
	'LEAVE_SHADOW'				=> 'このフォーラムにシャドウトピックを残す',
	'LIST_REPORT'				=> '1 件のリポート',
	'LIST_REPORTS'				=> '%d 件のリポート',
	'LOCK'						=> '閉鎖',
	'LOCK_POST_POST'			=> '記事の凍結 [ 編集禁止 ]',
	'LOCK_POST_POST_CONFIRM'	=> 'この記事を本当に凍結してもよろしいですか？',
	'LOCK_POST_POSTS'			=> '記事を凍結する',
	'LOCK_POST_POSTS_CONFIRM'	=> '選択した記事を本当に凍結してもよろしいですか？',
	'LOCK_TOPIC_CONFIRM'		=> 'このトピックを本当に閉鎖してもよろしいですか？',
	'LOCK_TOPICS'				=> '選択したトピックの閉鎖 [ 返信禁止 ]',
	'LOCK_TOPICS_CONFIRM'		=> '選択したトピックを本当に閉鎖してもよろしいですか？',
	'LOGS_CURRENT_TOPIC'		=> '次のトピックのログを現在見ています:',
	'LOGIN_EXPLAIN_MCP'			=> 'このフォーラムを管理するにはログインが必要です。',
	'LOGVIEW_VIEWTOPIC'			=> 'トピックを見る',
	'LOGVIEW_VIEWLOGS'			=> 'トピックログを見る',
	'LOGVIEW_VIEWFORUM'			=> 'フォーラムを見る',
	'LOOKUP_ALL'				=> '全IP lookup',
	'LOOKUP_IP'					=> 'IP lookup',

	'MARKED_NOTES_DELETED'		=> 'マークしたユーザーノートの削除に成功しました',

	'MCP_ADD'						=> '警告の追加',

	'MCP_BAN'					=> 'アクセス禁止',
	'MCP_BAN_EMAILS'			=> 'アクセス禁止 - メールアドレス',
	'MCP_BAN_IPS'				=> 'アクセス禁止 - IPアドレス',
	'MCP_BAN_USERNAMES'			=> 'アクセス禁止 - ユーザー名',

	'MCP_LOGS'						=> 'モデレータログ',
	'MCP_LOGS_FRONT'				=> 'フロントページ',
	'MCP_LOGS_FORUM_VIEW'			=> 'フォーラムログ',
	'MCP_LOGS_TOPIC_VIEW'			=> 'トピックログ',

	'MCP_MAIN'						=> 'メイン',
	'MCP_MAIN_FORUM_VIEW'			=> 'フォーラムを見る',
	'MCP_MAIN_FRONT'				=> 'フロントページ',
	'MCP_MAIN_POST_DETAILS'			=> '投稿記事の詳細',
	'MCP_MAIN_TOPIC_VIEW'			=> 'トピックを見る',
	'MCP_MAKE_ANNOUNCEMENT'			=> ' “告知トピック” へ変更する',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'このトピックを本当に “告知トピック” へ変更してもよろしいですか？',
	'MCP_MAKE_ANNOUNCEMENTS'		=> ' “告知トピック” へ変更する',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> '選択したトピックを本当に “告知トピック” へ変更してもよろしいですか？',
	'MCP_MAKE_GLOBAL'				=> ' “グローバル告知トピック” へ変更する',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'このトピックを本当に “グローバル告知トピック” へ変更してもよろしいですか？',
	'MCP_MAKE_GLOBALS'				=> ' “グローバル告知トピック” へ変更する',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> '選択したトピックを本当に “グローバル告知トピック” へ変更してもよろしいですか？',
	'MCP_MAKE_STICKY'				=> ' “注目トピック” へ変更する',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'このトピックを本当に “注目トピック” へ変更してもよろしいですか？',
	'MCP_MAKE_STICKIES'				=> ' “注目トピック” へ変更する',
	'MCP_MAKE_STICKIES_CONFIRM'		=> '選択したトピックを本当に “注目トピック” へ変更してもよろしいですか？',
	'MCP_MAKE_NORMAL'				=> ' “一般トピック” へ変更する',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'このトピックを本当に “通常トピック” へ変更してもよろしいですか？',
	'MCP_MAKE_NORMALS'				=> ' “通常トピック” へ変更する',
	'MCP_MAKE_NORMALS_CONFIRM'		=> '選択したトピックを本当に “通常トピック” へ変更してもよろしいですか？',

	'MCP_NOTES'						=> 'ユーザーノート',
	'MCP_NOTES_FRONT'				=> 'フロントページ',
	'MCP_NOTES_USER'				=> 'ユーザーノート',

	'MCP_POST_REPORTS'				=> 'この記事のリポート',

	'MCP_REPORTS'					=> 'リポート',
	'MCP_REPORT_DETAILS'			=> 'リポートの詳細',
	'MCP_REPORTS_CLOSED'			=> '審査済みリポート',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> '既に審査を完了しているリポートのリストです',
	'MCP_REPORTS_OPEN'				=> '審査待ちリポート',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'まだ審査されていないリポートのリストです',

	'MCP_QUEUE'								=> '承認',
	'MCP_QUEUE_APPROVE_DETAILS'				=> '投稿内容の承認',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> '承認待ち記事',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> '承認待ち記事のリストです。これらの記事は承認後にトピックに掲載されます。',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> '承認待ちトピック',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> '承認待ちトピックのリストです。これらのトピックは承認後にフォーラムに掲載されます。',

	'MCP_VIEW_USER'			=> 'ユーザーの警告を見る',

	'MCP_WARN'				=> '警告',
	'MCP_WARN_FRONT'		=> 'フロントページ',
	'MCP_WARN_LIST'			=> '警告リスト',
	'MCP_WARN_POST'			=> '警告の発行',
	'MCP_WARN_USER'			=> 'ユーザーへ警告',

	'MERGE_POSTS'			=> '記事を統合する',
	'MERGE_POSTS_CONFIRM'	=> '選択した記事を本当に統合してもよろしいですか？',
	'MERGE_TOPIC_EXPLAIN'	=> 'ここでは選択した記事を他のトピックに統合できます。選択された記事は新しい返信記事として統合先トピックへそのまま追加されます。<br />統合先トピックの IDナンバー を入力するか、 “トピック選択” をクリックして統合先トピックを検索してください。',
	'MERGE_TOPIC_ID'		=> '統合先トピックの IDナンバー',
	'MERGE_TOPICS'			=> 'トピックを統合する',
	'MERGE_TOPICS_CONFIRM'	=> '選択したトピックを本当に統合してもよろしいですか？',
	'MODERATE_FORUM'		=> 'フォーラム管理',
	'MODERATE_TOPIC'		=> 'トピック管理',
	'MODERATE_POST'			=> '返信記事の管理',
	'MOD_OPTIONS'			=> 'モデレータオプション',
	'MORE_INFO'				=> '詳細',
	'MOST_WARNINGS'			=> '警告が最も多いユーザー',
	'MOVE_TOPIC_CONFIRM'	=> 'このトピックを本当に新しいフォーラムに移動してもよろしいですか？',
	'MOVE_TOPICS'			=> '選択したトピックの移動',
	'MOVE_TOPICS_CONFIRM'	=> '選択したトピックを本当に新しいフォーラムに移動してもよろしいですか？',

	'NOTIFY_POSTER_APPROVAL'		=> 'この承認を投稿者に通知する',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'この却下を投稿者に通知する',
	'NOTIFY_USER_WARN'				=> 'この警告をユーザーに通知する',
	'NOT_MODERATOR'					=> 'あなたはこのフォーラムのモデレータではありません。',
	'NO_DESTINATION_FORUM'			=> '移動先のフォーラムを選択してください',
	'NO_DESTINATION_FORUM_FOUND'	=> '移動先として指定できるフォーラムがありません',
	'NO_ENTRIES'					=> 'ログはありません',
	'NO_FEEDBACK'					=> 'このユーザーへのフィードバックはありません',
	'NO_FINAL_TOPIC_SELECTED'		=> '統合先トピックを選択する必要があります',
	'NO_MATCHES_FOUND'				=> '見つかりませんでした',
	'NO_POST'						=> '警告する記事を選択する必要があります',
	'NO_POST_REPORT'				=> 'この記事にリポートはありません',
	'NO_POST_SELECTED'				=> '記事を１つ以上選択してからオペレーションを実行してください',
	'NO_REASON_DISAPPROVAL'			=> '却下する適切な理由を選択または入力してください',
	'NO_REPORT'						=> 'リポートはありません',
	'NO_REPORTS'					=> 'リポートはありません',	
	'NO_REPORT_SELECTED'			=> 'リポートを１つ以上選択してから実行してください',
	'NO_TOPIC_ICON'					=> 'なし',
	'NO_TOPIC_SELECTED'				=> 'トピックを１つ以上選択してから実行してください',
	'NO_TOPICS_QUEUE'				=> '承認待ちトピックはありません',

	'ONLY_TOPIC'			=> 'Only topic “%s”',
	'OTHER_USERS'			=> 'この IPアドレス から投稿した他のユーザー',

	'POSTER'					=> '投稿者',
	'POSTS_APPROVED_SUCCESS'	=> '選択した記事を承認しました',
	'POSTS_DELETED_SUCCESS'		=> '選択した記事をデータベースから削除することに成功しました',
	'POSTS_DISAPPROVED_SUCCESS'	=> '選択した記事を却下しました',
	'POSTS_LOCKED_SUCCESS'		=> '選択した記事の凍結に成功しました',
	'POSTS_MERGED_SUCCESS'		=> '選択した記事を統合しました',
	'POSTS_UNLOCKED_SUCCESS'	=> '選択した記事の凍結解除に成功しました',
	'POSTS_PER_PAGE'			=> 'ページあたりの記事数',
	'POSTS_PER_PAGE_EXPLAIN'	=> '（ 0 にするとすべての記事を表示します）',
	'POST_APPROVED_SUCCESS'		=> '選択した記事を承認しました',
	'POST_DELETED_SUCCESS'		=> '選択した記事をデータベースから削除することに成功しました',
	'POST_DISAPPROVED_SUCCESS'	=> '選択した記事を却下しました',
	'POST_LOCKED_SUCCESS'		=> '選択した記事の凍結に成功しました',
	'POST_NOT_EXIST'			=> '要求された記事は存在しません',
	'POST_REPORTED_SUCCESS'		=> '記事のリポートに成功しました',
	'POST_UNLOCKED_SUCCESS'		=> '記事の凍結解除に成功しました',

	'READ_USERNOTES'			=> 'ユーザーノート',
	'READ_WARNINGS'				=> 'ユーザーへの警告',
	'REPORTER'					=> 'リポートしたユーザー',
	'REPORTED'					=> 'Reported',
	'REPORTED_BY'				=> 'Reported by',
	'REPORTED_ON_DATE'			=> 'on',
	'REPORTS_CLOSED_SUCCESS'	=> '選択したリポートを審査完了にしました',
	'REPORTS_DELETED_SUCCESS'	=> '選択したリポートの削除に成功しました',
	'REPORTS_TOTAL'				=> '審査すべきリポートが <strong>%d</strong> 件あります',
	'REPORTS_ZERO_TOTAL'		=> '審査すべきリポートはありません',
	'REPORT_CLOSED'				=> 'このリポートは既に審査を完了しています',
	'REPORT_CLOSED_SUCCESS'		=> '選択したリポートを審査完了にしました',
	'REPORT_DELETED_SUCCESS'	=> '選択したリポートの削除に成功しました',
	'REPORT_DETAILS'			=> 'リポートの詳細',
	'REPORT_MESSAGE'			=> '記事のリポート',
	'REPORT_MESSAGE_EXPLAIN'	=> '記事をモデレータと管理人にリポート（報告）します。 リポートは通常、記事の内容がフォーラムルールを破っている場合に使用されるべきです。',
	'REPORT_NOTIFY'				=> '審査結果の通知',
	'REPORT_NOTIFY_EXPLAIN'		=> '審査結果をあなたに通知します',
	'REPORT_POST_EXPLAIN'		=> '記事をモデレータと管理人にリポート（報告）します。 リポートは通常、記事の内容がフォーラムルールを破っている場合に使用されるべきです。',
	'REPORT_REASON'				=> 'リポート理由',
	'REPORT_TIME'				=> 'リポート日時',
	'REPORT_TOTAL'				=> '<strong>1</strong> 件のリポートがあります。',
	'RESYNC'					=> '同期',
	'RETURN_MESSAGE'			=> '%sメッセージへ戻る%s',
	'RETURN_NEW_FORUM'			=> '%s新しいフォーラムへ移動する%s',
	'RETURN_NEW_TOPIC'			=> '%s新しいトピックへ移動する%s',
	'RETURN_POST'				=> '%s記事へ戻る%s',
	'RETURN_QUEUE'				=> '%s承認待ちリストへ戻る%s',
	'RETURN_REPORTS'			=> '%sリポートへ戻る%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sトピックへ戻る%s',

	'SEARCH_POSTS_BY_USER'				=> 'Search posts by',
	'SELECT_ACTION'						=> 'アクションを選択してください',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'グローバル告知トピックを表示するフォーラムを選択してください',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> '選択したトピックにグローバル告知トピックが含まれています。グローバル告知トピックを表示するフォーラムを選択してください。',
	'SELECT_MERGE'						=> '統合先として選択',
	'SELECT_TOPICS_FROM'				=> '別フォーラムのトピックを選択',
	'SELECT_TOPIC'						=> 'トピック選択',
	'SELECT_USER'						=> 'ユーザー選択',
	'SORT_ACTION'						=> 'ログアクション',
	'SORT_DATE'							=> '日時',
	'SORT_IP'							=> 'IPアドレス',
	'SORT_WARNINGS'						=> '警告',
	'SPLIT_AFTER'						=> '指定した記事以降を分割する',
	'SPLIT_FORUM'						=> '新しいトピックの移動先フォーラム',
	'SPLIT_POSTS'						=> '選択した記事を分割する
	',
	'SPLIT_SUBJECT'						=> '新しいトピックのタイトル',
	'SPLIT_TOPIC_ALL'					=> '指定した記事以降をトピックから分割',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'このトピックを本当に分割してもよろしいですか？',
	'SPLIT_TOPIC_BEYOND'				=> '選択した記事をトピックから分割',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> '指定した記事以降をこのトピックから本当に分割してもよろしいですか？',
	'SPLIT_TOPIC_EXPLAIN'				=> 'ここではトピックを分割できます。選択した記事のみを分割する方法 と 指定した記事以降すべてを分割する方法 の２つがあります。',

	'THIS_POST_IP'				=> '投稿IPアドレス',
	'TOPICS_APPROVED_SUCCESS'	=> '選択したトピックを承認しました',
	'TOPICS_DELETED_SUCCESS'	=> '選択したトピックをデータベースから削除することに成功しました',
	'TOPICS_DISAPPROVED_SUCCESS'=> '選択したトピックを却下しました',
	'TOPICS_FORKED_SUCCESS'		=> '選択したトピックのコピーに成功しました',
	'TOPICS_LOCKED_SUCCESS'		=> '選択したトピックを閉鎖しました',
	'TOPICS_MOVED_SUCCESS'		=> '選択したトピックの移動に成功しました',
	'TOPICS_RESYNC_SUCCESS'		=> '選択したトピックを同期しました',
	'TOPICS_TYPE_CHANGED'		=> 'トピックのタイプの変更に成功しました',
	'TOPICS_UNLOCKED_SUCCESS'	=> '選択したトピックを開放しました',
	'TOPIC_APPROVED_SUCCESS'	=> '選択したトピックを承認しました',
	'TOPIC_DELETED_SUCCESS'		=> '選択したトピックをデータベースから削除することに成功しました',
	'TOPIC_DISAPPROVED_SUCCESS'	=> '選択したトピックを却下しました',
	'TOPIC_FORKED_SUCCESS'		=> '選択したトピックのコピーに成功しました',
	'TOPIC_LOCKED_SUCCESS'		=> '選択したトピックを閉鎖しました',
	'TOPIC_MOVED_SUCCESS'		=> '選択したトピックの移動に成功しました',
	'TOPIC_NOT_EXIST'			=> 'トピックが存在していません',
	'TOPIC_RESYNC_SUCCESS'		=> '選択したトピックを同期しました',
	'TOPIC_SPLIT_SUCCESS'		=> '選択したトピックの分割に成功しました',
	'TOPIC_TIME'				=> 'トピックの投稿日時',
	'TOPIC_TYPE_CHANGED'		=> 'トピックタイプの変更に成功しました',
	'TOPIC_UNLOCKED_SUCCESS'	=> '選択したトピックを開放しました',
	'TOTAL_WARNINGS'			=> '警告レベル',

	'UNAPPROVED_POSTS_TOTAL'		=> '承認待ち記事が <strong>%d</strong> 件あります',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> '承認待ち記事はありません',
	'UNAPPROVED_POST_TOTAL'			=> '承認待ち記事が <strong>1</strong> 件あります',
	'UNLOCK'						=> '開放',
	'UNLOCK_POST'					=> '記事の凍結解除',
	'UNLOCK_POST_EXPLAIN'			=> '編集の許可',
	'UNLOCK_POST_POST'				=> '記事の凍結解除',
	'UNLOCK_POST_POST_CONFIRM'		=> 'この記事を本当に凍結解除してもよろしいですか？',
	'UNLOCK_POST_POSTS'				=> '記事を凍結解除する',
	'UNLOCK_POST_POSTS_CONFIRM'		=> '選択した記事を本当に凍結解除してもよろしいですか？',
	'UNLOCK_TOPIC'					=> 'トピックの開放',
	'UNLOCK_TOPIC_CONFIRM'			=> 'このトピックを本当に開放してもよろしいですか？',
	'UNLOCK_TOPICS'					=> '選択したトピックの開放',
	'UNLOCK_TOPICS_CONFIRM'			=> '選択したトピックを本当に開放してもよろしいですか？',
	'USER_CANNOT_POST'				=> 'パーミッションが与えられていないため、このフォーラムに記事を投稿することはできません',
	'USER_CANNOT_REPORT'			=> 'パーミッションが与えられていないため、このフォーラムの記事をリポートすることはできません',
	'USER_FEEDBACK_ADDED'			=> 'フィードバックの追加に成功しました',
	'USER_WARNING_ADDED'			=> 'ユーザーに警告を発行することに成功しました',

	'VIEW_DETAILS'			=> '詳細データ',
	'VIEW_POST'				=> '記事表示',

	'WARNED_USERS'			=> '警告されたユーザー',
	'WARNED_USERS_EXPLAIN'	=> '警告の有効期間が切れていないユーザーの一覧です',
	'WARNING_PM_BODY'		=> 'あなたが投稿した記事の内容に問題があるため、あなたに警告します。[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> '【掲示板からの警告】',
	'WARNING_POST_DEFAULT'	=> 'あなたが投稿した次の記事の内容に問題があります： %s ',
	'WARNINGS_ZERO_TOTAL'	=> '警告はありません',

	'YOU_SELECTED_TOPIC'	=> '選択したトピックの ID %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez(ウェアーズ)',
			'SPAM'		=> 'Spam(スパム)',
			'OFF_TOPIC'	=> 'Off-topic(話題外)',
			'OTHER'		=> 'その他',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'この投稿記事には 海賊版ソフト販売へのリンク が含まれています',
			'SPAM'		=> 'この投稿記事には 販売広告へのリンク が含まれています',
			'OFF_TOPIC'	=> 'この投稿記事は トピックの話題から外れ ています',
			'OTHER'		=> 'その他。詳細に記述します',
		)
	),
));

?>