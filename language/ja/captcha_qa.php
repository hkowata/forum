<?php
/**
*
* captcha_qa [English]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> '答えを正確に入力してください。答えられるかどうかでスパムボットか否かを判定します。',
	'CONFIRM_QUESTION_WRONG'	=> '問題の答え が間違っています',

	'QUESTION_ANSWERS'			=> '答え',
	'ANSWERS_EXPLAIN'			=> '答えを正確に入力してください。１行につき１つの答えを入力してください。',
	'CONFIRM_QUESTION'			=> '問題',

	'ANSWER'					=> '答え',
	'EDIT_QUESTION'				=> '答えの編集',
	'QUESTIONS'					=> '問題',
	'QUESTIONS_EXPLAIN'			=> 'ここで作成された問題と答えが CAPTCHA として使用されます。デフォルト言語の問題を少なくとも１つ作成するまでこの CAPTCHA プラグインは有効化されない点にご注意ください。問題はユーザーが答えられるぐらい簡単で且つスパムボットが答えられないくらい難しいものにすべきです。この Q&amp;A CAPTCHA は問題の数が多ければ多いほど、また問題を定期的に変更すればするほど効果を発揮します。',
	'QUESTION_DELETED'			=> '問題を削除しました',
	'QUESTION_LANG'				=> '言語',
	'QUESTION_LANG_EXPLAIN'		=> '言語パックを指定してください',
	'QUESTION_STRICT'			=> '厳密にチェック',
	'QUESTION_STRICT_EXPLAIN'	=> '“はい” にした場合、大文字・小文字の違いと半角スペースの有無がチェックされます',

	'QUESTION_TEXT'				=> '問題',
	'QUESTION_TEXT_EXPLAIN'		=> '問題を作成してください',

	'QA_ERROR_MSG'				=> '全ての問題に回答してください',
));

?>