<?php
/**
*
* acp_modules [Japanese]
*
* @package language
* @version $Id: modules.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'ここではモジュールの管理を行うことができます。AdminCP は３階層メニュー構成（カテゴリ->カテゴリ->モジュール）、ユーザーCP と モデレータCP は２階層メニュー構成（カテゴリ->モジュール）で成り立っています。もし “モジュール管理” モジュール（今現在使用しているこのモジュール）を無効化または削除した場合、モジュール管理が一切できなくなってしまう点にご注意ください。もしそうなった場合、元の状態に戻すにはデータベース内の modules テーブルを復元する必要があります。',
	'ADD_MODULE'					=> 'モジュールの追加',
	'ADD_MODULE_CONFIRM'			=> '選択したモジュールを本当に追加してもよろしいですか？',
	'ADD_MODULE_TITLE'				=> 'モジュールの追加',

	'CANNOT_REMOVE_MODULE'	=> '指定したモジュールが子モジュールを持っているため、モジュールを削除できません。先に全ての子モジュールを削除または移動してからこのアクションを実行してください。',
	'CATEGORY'				=> 'カテゴリ',
	'CHOOSE_MODE'			=> 'モジュールモードの選択',
	'CHOOSE_MODE_EXPLAIN'	=> '使用するモードを選択してください',
	'CHOOSE_MODULE'			=> 'モジュールの選択',
	'CHOOSE_MODULE_EXPLAIN'	=> '使用するモジュールファイルを選択してください',
	'CREATE_MODULE'			=> 'モジュールの作成',

	'DEACTIVATED_MODULE'	=> '無効モジュール',
	'DELETE_MODULE'			=> 'モジュールの削除',
	'DELETE_MODULE_CONFIRM'	=> 'このモジュールを本当に削除してもよろしいですか？',

	'EDIT_MODULE'			=> 'モジュールの編集',
	'EDIT_MODULE_EXPLAIN'	=> 'ここではモジュールの詳細データの設定を行うことができます',

	'HIDDEN_MODULE'			=> '隠れモジュール',

	'MODULE'					=> 'モジュール',
	'MODULE_ADDED'				=> 'モジュールの追加に成功しました',
	'MODULE_DELETED'			=> 'モジュールの削除に成功しました',
	'MODULE_DISPLAYED'			=> 'モジュールを表示する',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'このモジュールを表示しない場合、 “いいえ” を選択してください',
	'MODULE_EDITED'				=> 'モジュールの編集に成功しました',
	'MODULE_ENABLED'			=> 'モジュールを有効にする',
	'MODULE_LANGNAME'			=> 'モジュール名',
	'MODULE_LANGNAME_EXPLAIN'	=> 'モジュールの名前を入力してください。名前が言語ファイル内で定義されている場合、その定義（言語キー）を使用してください。',
	'MODULE_TYPE'				=> 'モジュールタイプ',

	'NO_CATEGORY_TO_MODULE'	=> 'カテゴリをモジュールに変更できませんでした。全ての子モジュールもしくは子カテゴリを 削除/移動 してからこのアクションを実行してください。',
	'NO_MODULE'				=> 'モジュールが見つかりません',
	'NO_MODULE_ID'			=> 'モジュールが指定されていません',
	'NO_MODULE_LANGNAME'	=> 'モジュール名が指定されていません',
	'NO_PARENT'				=> '親カテゴリなし',

	'PARENT'				=> '親カテゴリ',
	'PARENT_NO_EXIST'		=> '親カテゴリが存在しません',

	'SELECT_MODULE'			=> 'モジュールの選択',
));

?>