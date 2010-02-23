<?php
/**
*
* acp_profile [Japanese]
*
* @package language
* @version $Id: profile.php 9916 2009-08-03 15:46:56Z Kellanved $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'プロフィールフィールドの追加に成功しました',
	'ALPHA_ONLY'			=> 'アルファベットと数字のみ',
	'ALPHA_SPACERS'			=> 'アルファベットと数字とスペース',
	'ALWAYS_TODAY'			=> '常に最新の日付を表示する',

	'BOOL_ENTRIES_EXPLAIN'	=> 'オプションを設定してください',
	'BOOL_TYPE_EXPLAIN'		=> 'チェックボックスにするかラジオボタンにするかを決定してください',

	'CHANGED_PROFILE_FIELD'		=> 'プロフィールフィールドの変更に成功しました',
	'CHARS_ANY'					=> '全ての文字（数字・符号を含む）',
	'CHECKBOX'					=> 'チェックボックス',
	'COLUMNS'					=> '列',
	'CP_LANG_DEFAULT_VALUE'		=> 'デフォルト値',
	'CP_LANG_EXPLAIN'			=> 'フィールド説明',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'フィールドについての記述です',
	'CP_LANG_NAME'				=> 'フィールド名',
	'CP_LANG_OPTIONS'			=> 'オプション',
	'CREATE_NEW_FIELD'			=> 'プロフィールフィールドの作成',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> '未翻訳のプロフィールフィールドが存在します。 “翻訳” リンクをクリックして翻訳ページへ移動し、翻訳を完了してください。',

	'DEFAULT_ISO_LANGUAGE'			=> 'デフォルト言語 [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'デフォルト言語でのフィールド名が入力されていません',
	'DEFAULT_VALUE'					=> 'デフォルト値',
	'DELETE_PROFILE_FIELD'			=> 'プロフィールフィールドの削除',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'このプロフィールフィールドを本当に削除してもよろしいですか？',
	'DISPLAY_AT_PROFILE'			=> 'ユーザーCP で表示する',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'ユーザー自身が ユーザーCP でこのプロフィールフィールドを変更できるようになります',
	'DISPLAY_AT_REGISTER'			=> 'ユーザー登録時に表示する',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'ユーザー登録の際にこのプロフィールフィールドを表示します',
	'DISPLAY_ON_VT'					=> 'トピック表示ページで表示する',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'トピック表示ページのミニプロフィールドにこのプロフィールフィールドを表示します',
	'DISPLAY_PROFILE_FIELD'			=> 'プロフィールフィールドを表示する',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> ' “はい” を選択した場合、このプロフィールフィールドをトピック表示ページ、プロフィールページ、メンバーリストページで表示します。ただし AdminCP の “読み込み設定” で許可されているものに限ります。',
 	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'オプションを作成してください。オプション１つにつき１行で入力してください。',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'オプション名の変更と追加が可能です。新しいオプションを追加する場合は最下行に入力してください。もし既存オプションの間に割り込んで追加してしまうとユーザーのプロフィール情報がそれに合わせて乱れてしまう点にご注意ください。オプションを削除する場合も同様です。もし最下行のオプションを削除した場合、そのオプションを選択している全ユーザーのプロフィールフィールド情報はデフォルト値に設定し直されます。',
	'EMPTY_FIELD_IDENT'				=> 'フィールド名が空白です',
	'EMPTY_USER_FIELD_NAME'			=> 'フィールド名を入力してください',
	'ENTRIES'						=> 'オプション',
	'EVERYTHING_OK'					=> '全て OK',

	'FIELD_BOOL'				=> 'ブール値（はい/いいえの２択）',
	'FIELD_DATE'				=> '日付',
	'FIELD_DESCRIPTION'			=> 'フィールド説明',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'このフィールドについての説明です',
	'FIELD_DROPDOWN'			=> 'ドロップダウンボックス',
	'FIELD_IDENT'				=> 'フィールド名',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'そのフィールド名は既に存在しています。別の名前を入力してください。',
	'FIELD_IDENT_EXPLAIN'		=> 'フィールドID です。データベースとテンプレートファイル内で区別するために使用されます。',
	'FIELD_INT'					=> '数値',
	'FIELD_LENGTH'				=> '入力ボックスの大きさ',
	'FIELD_NOT_FOUND'			=> 'プロフィールフィールドが見つかりません',
	'FIELD_STRING'				=> 'シングルテキスト',
	'FIELD_TEXT'				=> 'テキストエリア',
	'FIELD_TYPE'				=> 'フィールドタイプ',
	'FIELD_TYPE_EXPLAIN'		=> 'フィールド作成後にフィールドタイプを変更する事はできません',
	'FIELD_VALIDATION'			=> '使用可能な文字',
	'FIRST_OPTION'				=> '第１オプション',

	'HIDE_PROFILE_FIELD'			=> 'プロフィールフィールドを隠す',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'ユーザー自身と Admin とモデレータのみに表示されます。“ユーザーCP で表示” を無効にしている場合、Admin のみに表示され変更も Admin のみが行えます。',

	'INVALID_CHARS_FIELD_IDENT'	=> 'フィールド名は 小文字(a-z) と アンダーバー(_) のみ使用できます',
	'INVALID_FIELD_IDENT_LEN'	=> 'フィールド名は １７ 字以下である必要があります',
	'ISO_LANGUAGE'				=> '言語 [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> '言語オプション [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> '最大文字数',
	'MAX_FIELD_NUMBER'		=> '入力の最大数値',
	'MIN_FIELD_CHARS'		=> '最小文字数',
	'MIN_FIELD_NUMBER'		=> '入力の最小数値',

	'NO_FIELD_ENTRIES'			=> 'オプションが入力されていません',
	'NO_FIELD_ID'				=> 'フィールド名が指定されていません',
	'NO_FIELD_TYPE'				=> 'フィールドタイプが指定されていません',
	'NO_VALUE_OPTION'			=> 'ノンエントリーオプション',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'ここで指定されたオプションは選択肢としてエントリーされません。必須フィールドの場合、ユーザーがこのオプションを選択するとエラーメッセージが表示されます。ユーザーに対してフィールドの選択を促すような文のオプションを指定すると良いでしょう。例えば 「以下の中から好きなものを選択してください」 など。',
	'NUMBERS_ONLY'				=> '半角数字(0-9) のみ',

	'PROFILE_BASIC_OPTIONS'		=> '基本設定',
	'PROFILE_FIELD_ACTIVATED'	=> 'プロフィールフィールドを有効にしました',
	'PROFILE_FIELD_DEACTIVATED'	=> 'プロフィールフィールドを無効にしました',
	'PROFILE_LANG_OPTIONS'		=> '言語設定',
	'PROFILE_TYPE_OPTIONS'		=> 'フィールドタイプ特別設定',

	'RADIO_BUTTONS'				=> 'ラジオボタン',
	'REMOVED_PROFILE_FIELD'		=> 'プロフィールフィールドの削除に成功しました',
	'REQUIRED_FIELD'			=> '必須フィールド',
	'REQUIRED_FIELD_EXPLAIN'	=> 'プロフィールフィールドの入力または選択をユーザーまたは Admin に強制します。“ユーザー登録時に表示” を無効にしている場合、ユーザーが自分のプロフィールを変更する時に入力または選択が強制されます。',
	'ROWS'						=> '行',

	'SAVE'							=> '保存',
	'SECOND_OPTION'					=> '第２オプション',
	'STEP_1_EXPLAIN_CREATE'			=> 'ここではプロフィールフィールドの基本パラメータを入力できます。基本パラメータを入力しないと次の設定ページへ進む事はできません。',
	'STEP_1_EXPLAIN_EDIT'			=> 'ここではプロフィールフィールドの基本パラメータを変更できます。変更をすぐに保存しなくても、次の設定ページへ進めばここで入力された情報は反映されます。',
	'STEP_1_TITLE_CREATE'			=> 'プロフィールフィールドの作成',
	'STEP_1_TITLE_EDIT'				=> 'プロフィールフィールドの編集',
	'STEP_2_EXPLAIN_CREATE'			=> 'ここでは指定されたフィールドタイプについての特別な設定を行うことができます。',
	'STEP_2_EXPLAIN_EDIT'			=> 'ここでは指定されたフィールドタイプについての特別な設定を行うことができます。<br /><strong>ここでプロフィールフィールドを変更しても、既にユーザーが入力したユーザープロフィールは変更されない点にご注意ください。</strong>',
	'STEP_2_TITLE_CREATE'			=> 'フィールドタイプ特別設定',
	'STEP_2_TITLE_EDIT'				=> 'フィールドタイプ特別設定',
	'STEP_3_EXPLAIN_CREATE'			=> '言語パックが複数インストールされているため、デフォルト言語以外の言語についても設定する必要があります。空白にした場合、デフォルト言語の設定がそのまま採用されます。',			
	'STEP_3_EXPLAIN_EDIT'			=> '言語パックが複数インストールされているため、デフォルト言語以外の言語についても設定する必要があります。空白にした場合、デフォルト言語の設定がそのまま採用されます。',
	'STEP_3_TITLE_CREATE'			=> 'デフォルト言語以外の言語設定',
	'STEP_3_TITLE_EDIT'				=> '言語設定',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'デフォルトのフレーズを入力してください。空白でかまわない場合は入力する必要はありません。',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'デフォルトのテキストを入力してください。空白でかまわない場合は入力する必要はありません。',
	'TRANSLATE'						=> '翻訳',

	'USER_FIELD_NAME'	=> 'フィールド名',

	'VISIBILITY_OPTION'				=> '表示オプション',
));

?>