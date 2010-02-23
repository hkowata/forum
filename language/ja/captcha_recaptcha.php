<?php
/**
*
* recaptcha [English]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
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
	'RECAPTCHA_LANG'				=> 'en',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCaptcha を利用するには先に <a href="http://recaptcha.net">reCaptcha.net</a> でアカウントを作成しておく必要があります',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> '入力した 認証コード が間違っています',

	'RECAPTCHA_PUBLIC'				=> 'reCaptcha 公開キー',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'reCaptcha 公開キー は <a href="http://recaptcha.net">reCaptcha.net</a> から入手できます',
	'RECAPTCHA_PRIVATE'				=> 'reCaptcha 非公開キー',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'reCaptcha 非公開キー は <a href="http://recaptcha.net">reCaptcha.net</a> から入手できます',

	'RECAPTCHA_EXPLAIN'				=> '不正プログラムによるアクセスを防ぐため、reCaptcha 認証コードの入力を強制しています。下に表示されている 2 つのワードを両方ともテキストフィールドに入力してください。',
));

?>