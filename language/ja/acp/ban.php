<?php
/**
*
* acp_ban [Japanese]
*
* @package language
* @version $Id: ban.php 8479 2008-03-29 00:22:48Z naderman $
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

// Banning
$lang = array_merge($lang, array(

	'1_HOUR'		=> '1 時間',
	'30_MINS'		=> '30 分',
	'6_HOURS'		=> '6 時間',

	'ACP_BAN_EXPLAIN'	=> 'ここではユーザー名、IPアドレス、メールアドレスを用いてユーザーのアクセスを禁止できます。アクセス禁止されたユーザーは掲示板にアクセスできなくなります。アクセス禁止されたユーザー名、IPアドレス、メールアドレスそれぞれに対してアクセス禁止した理由（最大３０００字）をメモしておく事が可能です。このメモは Adminログ で表示されます。アクセス禁止の期限を指定することも可能です。もしアクセス禁止期限を特定の年月日までに指定したい場合、 <span style="text-decoration: underline;">期限指定 -&gt;</span> を選択して <kbd>YYYY-MM-DD</kbd> 形式で年月日を入力してください。 ',

	'BAN_EXCLUDE'			=> '例外モード',
	'BAN_LENGTH'			=> 'アクセス禁止の期限',
	'BAN_REASON'			=> 'アクセス禁止の理由（ Adminログ に表示されます）',
	'BAN_GIVE_REASON'		=> 'アクセス禁止の理由（アクセス禁止されたユーザーに対して表示されます）',
	'BAN_UPDATE_SUCCESSFUL'	=> 'アクセス禁止リストの更新に成功しました',
	'BANNED_UNTIL_DATE'		=> '%s まで', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (%2$s まで)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'メールアドレスによるアクセス禁止',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> '例外として追加されたメールアドレスはアクセス禁止から除外されます',
	'EMAIL_BAN_EXPLAIN'			=> '１行につき１つのメールアドレスを入力してください。部分一致としてワイルドカード(*)を使用できます（<samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp> など）',
	'EMAIL_NO_BANNED'			=> 'アクセス禁止されているメールアドレスはありません',
	'EMAIL_UNBAN'				=> 'アクセス禁止の解除（メールアドレス）',
	'EMAIL_UNBAN_EXPLAIN'		=> '複数選択するにはマウスとキーボードをうまく活用してください（ <samp>SHIFT</samp>キー または <samp>CTRL</samp>キー を押しながらクリック）',

	'IP_BAN'					=> 'IPアドレス によるアクセス禁止',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> '例外として追加された IPアドレス はアクセス禁止から除外されます',
	'IP_BAN_EXPLAIN'			=> '１行につき１つの IPアドレス/ホスト名 を入力してください。IPアドレス を範囲指定する場合、数字と数字をハイフン(-)でつないでください。部分一致としてワイルドカード(*)を使用できます',
	'IP_HOSTNAME'				=> 'IPアドレス または ホスト名',
	'IP_NO_BANNED'				=> 'アクセス禁止されている IPアドレス はありません',
	'IP_UNBAN'					=> 'アクセス禁止の解除（ IPアドレス ）',
	'IP_UNBAN_EXPLAIN'			=> '複数選択するにはマウスとキーボードをうまく活用してください（ <samp>SHIFT</samp>キー または <samp>CTRL</samp>キー を押しながらクリック）',

	'LENGTH_BAN_INVALID'		=> '日付フォーマットは <kbd>YYYY-MM-DD</kbd> である必要があります',

	'PERMANENT'		=> '期限なし',
	
	'UNTIL'						=> '期限指定',
	'USER_BAN'					=> 'ユーザー名によるアクセス禁止',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> '例外として追加されたユーザー名はアクセス禁止から除外されます',
	'USER_BAN_EXPLAIN'			=> '１行につき１つのユーザー名を入力してください。<span style="text-decoration: underline;">ユーザー検索</span>を活用すると良いでしょう。',
	'USER_NO_BANNED'			=> 'アクセス禁止されているユーザー名はありません',
	'USER_UNBAN'				=> 'アクセス禁止の解除（ユーザー名）',
	'USER_UNBAN_EXPLAIN'		=> '複数選択するにはマウスとキーボードをうまく活用してください（ <samp>SHIFT</samp>キー または <samp>CTRL</samp>キー を押しながらクリック）',

));

?>