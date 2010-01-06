<?php
/**
*
* recaptcha [正體中文]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
* @copyright (c) 2009 phpBB TW Group (心靈捕手)
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
	'RECAPTCHA_LANG'				=> '英文',
	'RECAPTCHA_NOT_AVAILABLE'		=> '為了使用 reCaptcha，您必須要在 <a href="http://recaptcha.net">reCaptcha.net</a> 註冊一個帳號。',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> '您輸入的確認代碼是不正確的。',

	'RECAPTCHA_PUBLIC'				=> '公開的 reCaptcha 關鍵碼',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '您公開的 reCaptcha 關鍵碼。此關鍵碼可以在 <a href="http://recaptcha.net">reCaptcha.net</a> 獲得。',
	'RECAPTCHA_PRIVATE'				=> '私密的 reCaptcha 關鍵碼',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '您私密的 reCaptcha 關鍵碼。此關鍵碼可以在 <a href="http://recaptcha.net">reCaptcha.net</a> 獲得。',

	'RECAPTCHA_EXPLAIN'				=> '為了防止自動提交，我們要求您在底部欄位中，輸入顯示在其上方的兩個字詞。',
));

?>