<?php
/**
*
* search [Japanese]
*
* @package language
* @version $Id: search.php 10004 2009-08-17 13:25:04Z rxu $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translator: ocean=Yohsuke < n/a > ( n/a ) http://bbmods.info/bbs/
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
	'ALL_AVAILABLE'			=> 'すべて',
	'ALL_RESULTS'			=> 'すべて',

	'DISPLAY_RESULTS'		=> '検索結果の表示',

	'FOUND_SEARCH_MATCH'		=> '検索結果 %d 件',
	'FOUND_SEARCH_MATCHES'		=> '検索結果 %d 件',
	'FOUND_MORE_SEARCH_MATCHES'	=> '検索結果 %d 件以上',

	'GLOBAL'				=> 'グローバル告知トピック',

	'IGNORED_TERMS'			=> '無効な検索キーワード',
	'IGNORED_TERMS_EXPLAIN'	=> '次の検索キーワードは無効です: <strong>%s</strong>',

	'JUMP_TO_POST'			=> '記事へ移動',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> '投稿記事を確認するにはユーザー登録とログインが必要です',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> '未読記事を確認するにはユーザー登録とログインが必要です',
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> '検索キーワードが多すぎます。 %1$d 個以上の検索キーワードを同時に検索しないでください。',
	
	'NO_KEYWORDS'			=> '有効な検索キーワードを少なくとも１つ入力してください。検索キーワードは %d 字以上 %d 字以下である必要があります。',
	'NO_RECENT_SEARCHES'	=> '最近検索されたキーワードはありません',
	'NO_SEARCH'				=> 'パーミッションが与えられていないため、検索機能を使用できません',
	'NO_SEARCH_RESULTS'		=> '検索に一致する記事が見つかりませんでした',
	'NO_SEARCH_TIME'		=> '連続して検索することはできません。数分後に再度お試しください。',
	'WORD_IN_NO_POST'		=> '検索キーワード <strong>%s</strong> を含む記事が存在しないため検索結果は 0 件です',
	'WORDS_IN_NO_POST'		=> '検索キーワード <strong>%s</strong> を含む記事が存在しないため検索結果は 0 件です',

	'POST_CHARACTERS'		=> '文字',

	'RECENT_SEARCHES'		=> '最近検索されたキーワード',
	'RESULT_DAYS'			=> '期間内検索',
	'RESULT_SORT'			=> 'ソート',
	'RETURN_FIRST'			=> '表示文字数',
	'RETURN_TO_SEARCH_ADV'	=> '詳細検索ページに戻る',

	'SEARCHED_FOR'				=> '有効な検索キーワード',
	'SEARCHED_TOPIC'			=> '検索されたトピック',
	'SEARCH_ALL_TERMS'			=> 'AND検索 または クエリ検索',
	'SEARCH_ANY_TERMS'			=> 'OR検索',
	'SEARCH_AUTHOR'				=> '投稿者検索',
	'SEARCH_AUTHOR_EXPLAIN'		=> '部分一致としてワイルドカード(*)を使用できます',
	'SEARCH_FIRST_POST'			=> 'トピックの最初の記事のみ',
	'SEARCH_FORUMS'				=> 'フォーラム',
	'SEARCH_FORUMS_EXPLAIN'		=> '検索を行いたいフォーラムを選択します。下の “サブフォーラム” を “いいえ” にしていない限り、サブフォーラム内の記事も自動的に検索されます。',
	'SEARCH_IN_RESULTS'			=> 'この検索結果をさらに検索',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '検索したくない記事のキーワードには <strong>-</strong> をキーワードの直前に置いてください。部分一致としてワイルドカード(*)を使用できます。クエリとはデータベースへの命令文のことです。-* を使用する場合はクエリ検索を選択してください。',
	'SEARCH_MSG_ONLY'			=> 'メッセージのみ',
	'SEARCH_OPTIONS'			=> '検索オプション',
	'SEARCH_QUERY'				=> '検索クエリ',
	'SEARCH_SUBFORUMS'			=> 'サブフォーラム',
	'SEARCH_TITLE_MSG'			=> '記事の件名とメッセージ',
	'SEARCH_TITLE_ONLY'			=> 'トピックの件名のみ',
	'SEARCH_WITHIN'				=> '検索対象',
	'SORT_ASCENDING'			=> '昇順',
	'SORT_AUTHOR'				=> '投稿者',
	'SORT_DESCENDING'			=> '降順',
	'SORT_FORUM'				=> 'フォーラム',
	'SORT_POST_SUBJECT'			=> '記事の件名',
	'SORT_TIME'					=> '投稿日時',

	'TOO_FEW_AUTHOR_CHARS'	=> '投稿者名は %d 字以上である必要があります',
));

?>