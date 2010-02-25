<?php
/**
*
* search [正體中文]
*
* @package language
* @version $Id: search.php 10004 2009-08-17 13:25:04Z rxu $
* @copyright (c) 2001 - 2007 phpBB TW Group (Mac)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ALL_AVAILABLE'			=> '所有文章',
	'ALL_RESULTS'			=> '所有的',

	'DISPLAY_RESULTS'		=> '顯示結果',

	'FOUND_SEARCH_MATCH'		=> '有 %d 筆資料符合您搜尋的條件',
	'FOUND_SEARCH_MATCHES'		=> '有 %d 筆資料符合您搜尋的條件',
	'FOUND_MORE_SEARCH_MATCHES'	=> '有超過 %d 筆資料符合您搜尋的條件',

	'GLOBAL'				=> '全域公告',

	'IGNORED_TERMS'			=> '已忽略的',
	'IGNORED_TERMS_EXPLAIN'	=> '以下的字詞在搜尋時將被忽略，因為它們是太常共用的字詞：<strong>%s</strong>。',

	'JUMP_TO_POST'			=> '跳到文章',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> '您必須註冊並且登入後才能檢視您自己的文章。',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> '您必須註冊並且登入後才能檢視您尚未閱讀的文章。',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> '您所指定要搜尋的字數太多。請不要輸入超過 %1$d 字。',

	'NO_KEYWORDS'			=> '您至少需要輸入一個關鍵字，每一個關鍵字最少要有 %d 個字元，最多不能超過 %d 個字元 (不含 * 萬用字元)。',
	'NO_RECENT_SEARCHES'	=> '最近沒有人使用過搜尋系統。',
	'NO_SEARCH'				=> '很抱歉！您不被允許使用搜尋系統。',
	'NO_SEARCH_RESULTS'		=> '沒有搜尋到符合的結果。',
	'NO_SEARCH_TIME'		=> '很抱歉! 您現在無法使用搜尋系統，請稍後再試。',
	'WORD_IN_NO_POST'		=> '沒有文章被搜尋到，因為這個關鍵字 <strong>%s</strong> 不被包含在任何文章中。',
	'WORDS_IN_NO_POST'		=> '沒有文章被搜尋到，因為這些關鍵字 <strong>%s</strong> 不被包含在任何文章中。',

	'POST_CHARACTERS'		=> '個字元',

	'RECENT_SEARCHES'		=> '最近的搜尋',
	'RESULT_DAYS'			=> '時間範圍',
	'RESULT_SORT'			=> '排列順序',
	'RETURN_FIRST'			=> '返回第一頁',
	'RETURN_TO_SEARCH_ADV'	=> '返回進階搜尋',

	'SEARCHED_FOR'				=> '使用過的關鍵字',
	'SEARCHED_TOPIC'			=> '搜尋過的主題',
	'SEARCH_ALL_TERMS'			=> '搜尋符合以上所有關鍵字的資料',
	'SEARCH_ANY_TERMS'			=> '搜尋符合以上任一關鍵字的資料',
	'SEARCH_AUTHOR'				=> '搜尋發表人',
	'SEARCH_AUTHOR_EXPLAIN'		=> '您可以使用 * 萬用字元搜尋。',
	'SEARCH_FIRST_POST'			=> '只要主題的第一篇文章內容',
	'SEARCH_FORUMS'				=> '選擇搜尋版面',
	'SEARCH_FORUMS_EXPLAIN'		=> '選擇您想搜尋的版面。子版面會自動加入搜尋條件中，如果要關閉此功能，請反選下一個選項。',
	'SEARCH_IN_RESULTS'			=> '搜尋這些結果',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '在關鍵字前面加上 <strong>+</strong> 表示必須被搜尋到的。在關鍵字前面加上 <strong>-</strong> 表示不必被搜尋到的。如果關鍵字中僅有部分的字詞必須被搜尋到，那麼使用 <strong>|</strong> 把它隔開。使用 <strong>*</strong> 做為萬用字元。',
	'SEARCH_MSG_ONLY'			=> '只要文章內容',
	'SEARCH_OPTIONS'			=> '搜尋選項',
	'SEARCH_QUERY'				=> '搜尋方式',
	'SEARCH_SUBFORUMS'			=> '搜尋子版面',
	'SEARCH_TITLE_MSG'			=> '文章主題與內容',
	'SEARCH_TITLE_ONLY'			=> '只要文章主題',
	'SEARCH_WITHIN'				=> '搜尋範圍',
	'SORT_ASCENDING'			=> '依序遞增',
	'SORT_AUTHOR'				=> '發表人',
	'SORT_DESCENDING'			=> '依序遞減',
	'SORT_FORUM'				=> '版面',
	'SORT_POST_SUBJECT'			=> '文章主題',
	'SORT_TIME'					=> '發表時間',

	'TOO_FEW_AUTHOR_CHARS'	=> '您必須最少輸入 %d 個字元的發表人。',
));

?>