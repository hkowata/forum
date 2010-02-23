<?php
/**
*
* posting [Japanese]
*
* @package language
* @version $Id: posting.php 9742 2009-07-09 10:34:40Z bantu $
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
	'ADD_ATTACHMENT'			=> 'ファイル添付',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'ファイルを添付します',
	'ADD_FILE'					=> 'ファイルの追加',
	'ADD_POLL'					=> '投票の作成',
	'ADD_POLL_EXPLAIN'			=> '投票トピックにしたくない場合はフィールドを空白のままにしてください',
	'ALREADY_DELETED'			=> '記事は既に削除されています',
	'ATTACH_QUOTA_REACHED'		=> '掲示板の添付ファイル保管スペースが限界に達したため、これ以上ファイルをアップロードすることはできません',
	'ATTACH_SIG'				=> 'サインを追加する（サインは ユーザーCP で変更できます）',

	'BBCODE_A_HELP'				=> '添付ファイルのインライン表示: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'ボールド（太字）: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'コード表示: [code]code[/code]',
	'BBCODE_E_HELP'				=> 'リスト: リスト要素の追加',
	'BBCODE_F_HELP'				=> 'フォントサイズ: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s: <em>OFF</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s: <em>ON</em>',
	'BBCODE_I_HELP'				=> 'イタリック（斜体）: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'リスト: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'リスト要素: [*]text[/*]',
	'BBCODE_O_HELP'				=> '番号付きリスト: [list=]text[/list]',
	'BBCODE_P_HELP'				=> '画像: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> '引用: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'フォントカラー: [color=red]text[/color]  Tip: color=#FF0000 も可',
	'BBCODE_U_HELP'				=> 'アンダーライン（下線）: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'ハイパーリンク: [url]http://url[/url] または [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'トピックに記事が投稿されて間もないため、しばらく時間が経つまでトピックを上げることはできません',

	'CANNOT_DELETE_REPLIED'		=> '既に返信された記事を削除することはできません',
	'CANNOT_EDIT_POST_LOCKED'	=> '記事が凍結されているため編集することはできません',
	'CANNOT_EDIT_TIME'			=> '一定時間経過したため記事を編集または削除できません',
	'CANNOT_POST_ANNOUNCE'		=> 'パーミッションが与えられていないため、告知トピックを投稿できません',
	'CANNOT_POST_STICKY'		=> 'パーミッションが与えられていないため、注目トピックを投稿できません',
	'CHANGE_TOPIC_TO'			=> 'トピックタイプの変更',
	'CLOSE_TAGS'				=> 'タグを閉じる',
	'CURRENT_TOPIC'				=> '現在のトピック',

	'DELETE_FILE'				=> 'ファイルの削除',
	'DELETE_MESSAGE'			=> '【削除済みメッセージ】',
	'DELETE_MESSAGE_CONFIRM'	=> 'このメッセージを本当に削除してもよろしいですか？',
	'DELETE_OWN_POSTS'			=> 'この記事を削除することはできません。削除できるのは自分が投稿した記事だけです。',
	'DELETE_POST_CONFIRM'		=> 'この記事を本当に削除してもよろしいですか？',
	'DELETE_POST_WARN'			=> '一度削除された記事を元に戻すことはできません',
	'DISABLE_BBCODE'			=> 'BBCode を無効にする',
	'DISABLE_MAGIC_URL'			=> 'URL を自動的にパースしない',
	'DISABLE_SMILIES'			=> 'スマイリーを無効にする',
	'DISALLOWED_CONTENT'		=> 'アップロードファイルの内容と MIME Type が一致しなかったため、アップロードファイルを拒否しました',
	'DISALLOWED_EXTENSION'		=> '拡張子 %s は許可されていません',
	'DRAFT_LOADED'				=> '下書きをロードしました。記事を完成させてください。<br />記事を投稿すると下書きは自動的に削除されます。',
	'DRAFT_LOADED_PM'			=> '下書きをロードしました。プライベートメッセージを完成させてください。<br />プライベートメッセージを投稿すると下書きは自動的に削除されます。',
	'DRAFT_SAVED'				=> '下書きのセーブに成功しました',
	'DRAFT_TITLE'				=> '下書きの件名',

	'EDIT_REASON'				=> '記事の編集理由',
	'EMPTY_FILEUPLOAD'			=> 'アップロードファイルが空です',
	'EMPTY_MESSAGE'				=> '投稿するにはメッセージを入力する必要があります',
	'EMPTY_REMOTE_DATA'			=> 'ファイルをアップロードできませんでした。手動でアップロードしてください。',

	'FLASH_IS_OFF'				=> '[flash]: <em>OFF</em>',
	'FLASH_IS_ON'				=> '[flash]: <em>ON</em>',
	'FLOOD_ERROR'				=> 'パーミッションが与えられていないため、連続して投稿することはできません。しばらく時間が経ってから投稿してください。',
	'FONT_COLOR'				=> 'フォントカラー',
	'FONT_COLOR_HIDE'			=> 'フォントカラーを隠す',
	'FONT_HUGE'					=> '極大',
	'FONT_LARGE'				=> '大',
	'FONT_NORMAL'				=> '標準',
	'FONT_SIZE'					=> 'フォントサイズ',
	'FONT_SMALL'				=> '小',
	'FONT_TINY'					=> '極小',

	'GENERAL_UPLOAD_ERROR'		=> '%s にファイルをアップロードできませんでした',

	'IMAGES_ARE_OFF'			=> '[img]: <em>OFF</em>',
	'IMAGES_ARE_ON'				=> '[img]: <em>ON</em>',
	'INVALID_FILENAME'			=> ' %s は正常なファイル名ではありません',

	'LOAD'						=> 'ロード',
	'LOAD_DRAFT'				=> '下書きをロードする',
	'LOAD_DRAFT_EXPLAIN'		=> '下書きをロード（読み込み）できます。下書きをロードすると現在書きかけの記事は削除されますのでご注意ください。下書きの閲覧、編集、削除は ユーザーCP で行うことができます。',
	'LOGIN_EXPLAIN_BUMP'		=> 'このフォーラムでトピックを上げるにはログインが必要です',
	'LOGIN_EXPLAIN_DELETE'		=> 'このフォーラムで記事を削除するにはログインが必要です',
	'LOGIN_EXPLAIN_POST'		=> 'このフォーラムで記事を投稿するにはログインが必要です',
	'LOGIN_EXPLAIN_QUOTE'		=> 'このフォーラムで返信記事を投稿するにはログインが必要です',
	'LOGIN_EXPLAIN_REPLY'		=> 'このフォーラムで返信記事を投稿するにはログインが必要です',

	'MAX_FONT_SIZE_EXCEEDED'	=> '使用できるフォントの最大サイズは %1$d です',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> '使用できる Flashファイル の最大サイズ（高さ）は %1$d pix です',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> '使用できる Flashファイル の最大サイズ（横幅）は %1$d pix です',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> '使用できる画像ファイルの最大サイズ（高さ）は %1$d pix です',
	'MAX_IMG_WIDTH_EXCEEDED'	=> '使用できる画像ファイルの最大サイズ（横幅）は %1$d pix です',

	'MESSAGE_BODY_EXPLAIN'		=> 'メッセージを入力してください。<strong>%d</strong> 字まで入力できます。',
	'MESSAGE_DELETED'			=> 'メッセージを削除しました',
	'MORE_SMILIES'				=> 'スマイリーを全て表示する',

	'NOTIFY_REPLY'				=> '返信が投稿されたら通知する',
	'NOT_UPLOADED'				=> 'ファイルをアップロードできませんでした',
	'NO_DELETE_POLL_OPTIONS'	=> '投票オプションに既に票が存在するため削除できません',
	'NO_PM_ICON'				=> 'アイコンなし',
	'NO_POLL_TITLE'				=> '投票のお題を入力してください',
	'NO_POST'					=> 'その記事は存在しません',
	'NO_POST_MODE'				=> '投稿モードが指定されていません',

	'PARTIAL_UPLOAD'			=> 'ファイルは一部だけアップロードされました',
	'PHP_SIZE_NA'				=> '添付ファイルのサイズが大き過ぎます。<br />PHP設定ファイル php.ini の設定オプション upload_max_filesize の値の取得に失敗しました。',
	'PHP_SIZE_OVERRUN'			=> '添付ファイルのサイズが大き過ぎます。アップロードできるファイルの最大サイズは %1$d %2$s です。<br />PHP設定ファイル php.ini の設定オプション upload_max_filesize の値を phpBB3 が上書きすることはできません。
',
	'PLACE_INLINE'				=> 'インライン表示',
	'POLL_DELETE'				=> '投票を削除する',
	'POLL_FOR'					=> '投票の受付期間',
	'POLL_FOR_EXPLAIN'			=> '0 か 空白にすると投票の受付が終了することはありません',
	'POLL_MAX_OPTIONS'			=> 'ユーザー１人あたりの投票可能オプション数',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'ユーザーが投票する際、いくつまで投票オプションを選択できるかを指定してください',
	'POLL_OPTIONS'				=> '投票オプション',
	'POLL_OPTIONS_EXPLAIN'		=> '１行につき１つのオプションを入力してください。最大 <strong>%d</strong> 個までオプションを作成できます。',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> '１行につき１つのオプションを入力してください。最大 <strong>%d</strong> 個までオプションを作成できます。オプションを削除または追加した場合、投票結果は全てリセットされます。',
	'POLL_QUESTION'				=> '投票のお題',
	'POLL_TITLE_TOO_LONG'		=> '投票のお題は１００字以下にしてください',
	'POLL_TITLE_COMP_TOO_LONG'	=> '投票のお題をページに表示すると大きくなりすぎる恐れがあります。BBCode とスマイリーの削除を検討してください。',
	'POLL_VOTE_CHANGE'			=> '再投票を許可する',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> '許可した場合、ユーザーは投票先オプションを自由に変更できます',
	'POSTED_ATTACHMENTS'		=> '添付ファイル',
	'POST_APPROVAL_NOTIFY'		=> '記事が承認されるとその旨のメッセージがあなたに通知されます',
	'POST_CONFIRMATION'			=> '投稿の確認',
	'POST_CONFIRM_EXPLAIN'		=> '不正プログラムによる投稿を防ぐため、CAPTCHA 認証コードの入力を強制しています。認証コードは下の画像に表示されています。CAPTCHA が表示されない、もしくは視覚的に問題がある場合は%s管理人%sにご連絡ください。',
	'POST_DELETED'				=> '記事の削除に成功しました',
	'POST_EDITED'				=> '記事の編集に成功しました',
	'POST_EDITED_MOD'			=> '記事の編集に成功しました。モデレータが承認するまで編集内容は記事に反映されません。',
	'POST_GLOBAL'				=> 'グローバル告知',
	'POST_ICON'					=> '記事アイコン',
	'POST_NORMAL'				=> '通常',
	'POST_REVIEW'				=> '記事のレビュー',
	'POST_REVIEW_EDIT'			=> '編集記事のレビュー',
	'POST_REVIEW_EDIT_EXPLAIN'	=> '記事編集中に他のユーザーがこの記事を編集しました。送信前に編集された記事をご確認ください。',
	'POST_REVIEW_EXPLAIN'		=> '記事作成中に他のユーザーがこのトピックに記事を投稿しました。投稿する前に全ての返信記事をご確認ください。',
	'POST_STORED'				=> '記事の投稿に成功しました',
	'POST_STORED_MOD'			=> '記事の投稿に成功しました。モデレータがこの記事を承認するとフォーラムに記事が表示されます。',
	'POST_TOPIC_AS'				=> 'トピックタイプ',
	'PROGRESS_BAR'				=> '進行状況',

	'QUOTE_DEPTH_EXCEEDED'		=> '引用入れ子の深さ制限は %1$d です',

	'SAVE'						=> 'セーブ',
	'SAVE_DATE'					=> 'セーブした日付',
	'SAVE_DRAFT'				=> '下書きのセーブ',
	'SAVE_DRAFT_CONFIRM'		=> '下書きをセーブすると記事の件名と本文以外の情報 - 添付ファイルと投票 - は失われる点にご注意ください。下書きをセーブしてもよろしいですか？',
	'SMILIES'					=> 'スマイリー',
	'SMILIES_ARE_OFF'			=> 'スマイリー: <em>OFF</em>',
	'SMILIES_ARE_ON'			=> 'スマイリー: <em>ON</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'この期間が過ぎるとトピックは通常トピックに自動的に変更されます',
	'STICK_TOPIC_FOR'			=> '注目/告知 の有効期間',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '0 か 空白にすると、注目/告知 トピックが通常トピックに自動的に変更されることはありません',
	'STYLES_TIP'				=> 'Tip: テキストを選択した状態で BBCode ボタンをクリックすると選択部分がタグで囲まれます',

	'TOO_FEW_CHARS'				=> 'メッセージが短すぎます',
	'TOO_FEW_CHARS_LIMIT'		=> '現在のメッセージは %1$d 字です。 %2$d 字以上にする必要があります。',
	'TOO_FEW_POLL_OPTIONS'		=> '投票オプションは少なくとも２つ作成してください',
	'TOO_MANY_ATTACHMENTS'		=> 'これ以上この記事にファイルを添付することはできません。記事１つあたりの最大添付ファイル数は %d です。',
	'TOO_MANY_CHARS'			=> 'メッセージが長すぎます',
	'TOO_MANY_CHARS_POST'		=> '記事のメッセージ字数が %1$d 字です。記事１つあたりのメッセージ最大字数は %2$d 字です。',
	'TOO_MANY_CHARS_SIG'		=> 'サイン字数が %1$d 字です。サインの最大字数は %2$d です。',
	'TOO_MANY_POLL_OPTIONS'		=> '投票オプションが多すぎます',
	'TOO_MANY_SMILIES'			=> 'メッセージに含まれているスマイリーが多過ぎます。記事１つあたりのスマイリー最大数は %d です。',
	'TOO_MANY_URLS'				=> 'メッセージに含まれている URL が多すぎます。記事１つあたりの URL の最大数は %d です。',
	'TOO_MANY_USER_OPTIONS'		=> 'ユーザー１人あたりの投票可能オプション数を、存在している投票オプション数以上に設定することはできません。',
	'TOPIC_BUMPED'				=> 'トピックの上げに成功しました',

	'UNAUTHORISED_BBCODE'		=> 'パーミッションが与えられていないため、BBCode を使用できません： %s',
	'UNGLOBALISE_EXPLAIN'		=> 'トピックの表示先フォーラムを選択してください',
	'UPDATE_COMMENT'			=> 'コメントの更新',
	'URL_INVALID'				=> '入力した URL が正しくありません',
	'URL_NOT_FOUND'				=> '指定したファイルが見つかりませんでした',
	'URL_IS_OFF'				=> '[url]: <em>OFF</em>',
	'URL_IS_ON'					=> '[url]: <em>ON</em>',
	'USER_CANNOT_BUMP'			=> 'パーミッションが与えられていないため、このフォーラムでトピックを上げることはできません',
	'USER_CANNOT_DELETE'		=> 'パーミッションが与えられていないため、このフォーラムでトピックを削除できません',
	'USER_CANNOT_EDIT'			=> 'パーミッションが与えられていないため、このフォーラムで記事を編集できません',
	'USER_CANNOT_REPLY'			=> 'パーミッションが与えられていないため、このフォーラムで返信記事を投稿できません',
	'USER_CANNOT_FORUM_POST'	=> 'このフォーラムに記事を投稿することはできません',

	'VIEW_MESSAGE'				=> '%s投稿した記事を表示する%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%s送信済みプライベートメッセージを表示する%s',

	'WRONG_FILESIZE'			=> 'ファイルサイズが大き過ぎます。許可されているファイルの最大サイズは %1d %2s です。',
	'WRONG_SIZE'				=> '画像サイズ（横幅 ｘ 高さ。単位は pix ）は最小 %1$d x %2$d と最大 %3$d x %4$d の間である必要があります。アップロードされた画像のサイズは %5$d x %6$d です。',
));

?>