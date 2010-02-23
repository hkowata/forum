<?php
/**
*
* acp_language [Japanese]
*
* @package language
* @version $Id: language.php 9649 2009-06-21 19:17:20Z bantu $
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
	'ACP_FILES'						=> 'Admin 言語ファイル',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'ここでは言語パックの インストール/アンインストール を行う事ができます。アスタリスク(*)が表示されている言語は掲示板のデフォルト言語である事を意味します。',

	'EMAIL_FILES'			=> 'メールテンプレートファイル',

	'FILE_CONTENTS'				=> 'ファイルコンテンツ',
	'FILE_FROM_STORAGE'			=> '保管フォルダ内のファイル',

	'HELP_FILES'				=> 'ヘルプファイル',

	'INSTALLED_LANGUAGE_PACKS'	=> 'インストール済み言語パック',
	'INVALID_LANGUAGE_PACK'		=> '選択した言語パックが正常ではないようです。言語パックが正常であるかどうかをご確認ください。必要であれば言語パックを再度アップロードしてください。',
	'INVALID_UPLOAD_METHOD'		=> '選択したアップロード方式を使用できません。別の方式を選んでください。',

	'LANGUAGE_DETAILS_UPDATED'			=> '言語データの更新に成功しました',
	'LANGUAGE_ENTRIES'					=> '言語ファイルのエントリー',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'ここでは言語パック内の各ファイルの言語キーをハック、翻訳できます。<br /><strong>注意：</strong>アップロードした場合、ハックした言語ファイルは保管ディレクトリに格納されます。ハックファイルを得るにはその保管ディレクトリからダウンロードしてください。純正ファイルをハックファイルに置き換えるまでユーザーが見る掲示板に変化はありません。',
	'LANGUAGE_FILES'					=> '言語ファイル',
	'LANGUAGE_KEY'						=> '言語キー',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'この言語パックは既にインストールされています',
	'LANGUAGE_PACK_DELETED'				=> '言語パック <strong>%s</strong> のアンインストールに成功しました。同時にこの言語パックを使用していた全ユーザーの言語設定を掲示板のデフォルト言語に変更しました。',
	'LANGUAGE_PACK_DETAILS'				=> '言語パックのデータ',
	'LANGUAGE_PACK_INSTALLED'			=> '言語パック <strong>%s</strong> のインストールに成功しました',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'ローカル言語名',
	'LANGUAGE_PACK_NAME'				=> '名前',
	'LANGUAGE_PACK_NOT_EXIST'			=> '言語パックが存在していません',
	'LANGUAGE_PACK_USED_BY'				=> '使用ユーザー数（ボット含む）',
	'LANGUAGE_VARIABLE'					=> '言語値',
	'LANG_AUTHOR'						=> '言語パック作成者',
	'LANG_ENGLISH_NAME'					=> '英語名',
	'LANG_ISO_CODE'						=> 'ISOコード',
	'LANG_LOCAL_NAME'					=> 'ローカル言語名',

	'MISSING_LANGUAGE_FILE'		=> '言語ファイルが見つかりません：<strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> '言語値が見つかりません',
	'MODS_FILES'				=> 'MOD言語ファイル',

	'NO_FILE_SELECTED'				=> '言語ファイルを指定していません',
	'NO_LANG_ID'					=> '言語パックを指定していません',
	'NO_REMOVE_DEFAULT_LANG'		=> 'デフォルト言語パックをアンインストールする事はできません。<br />この言語パックをアンインストールするには掲示板のデフォルト言語を先に変更してください。',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> '言語パックがインストールされていません',

	'REMOVE_FROM_STORAGE_FOLDER'		=> '保管フォルダから削除する',

	'SELECT_DOWNLOAD_FORMAT'	=> 'ダウンロード形式の選択',
	'SUBMIT_AND_DOWNLOAD'		=> '更新 ＆ ダウンロード',
	'SUBMIT_AND_UPLOAD'			=> '更新 ＆ アップロード',

	'THOSE_MISSING_LANG_FILES'			=> '次の言語ファイルが言語フォルダ %s 内に見つかりませんでした',
	'THOSE_MISSING_LANG_VARIABLES'		=> '次の言語値が言語パック <strong>%s</strong> 内に見つかりませんでした',

	'UNINSTALLED_LANGUAGE_PACKS'	=> '未インストール状態の言語パック',

	'UNABLE_TO_WRITE_FILE'		=> '%s に対する書き込み権限がありません',
	'UPLOAD_COMPLETED'			=> 'アップロードは完全に成功しました',
	'UPLOAD_FAILED'				=> 'アップロードに失敗しました。失敗理由は不明です。関連ファイルを置き換えるにはアップロードを手動で行ってください。',
	'UPLOAD_METHOD'				=> 'アップロード形式',
	'UPLOAD_SETTINGS'			=> 'アップロード設定',

	'WRONG_LANGUAGE_FILE'		=> '選択した言語ファイルは正常ではありません',
));

?>