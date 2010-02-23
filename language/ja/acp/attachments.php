<?php
/** 
*
* acp_attachments [Japanese]
*
* @package language
* @version $Id: attachments.php 8946 2008-09-26 18:32:05Z toonarmy $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translator: ocean=Yohsuke < n/a > ( n/a ) http://bbmods.info/bbs/
*
*/

/**
* DO NOT CHANGE
*/
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'ここではファイルの添付に関する設定を行うことができます。添付画像の設定も行うことができます。',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'ここでは拡張子グループの追加、削除、修正、無効化などを行うことができます。また各拡張子グループの設定ページでファイルタイプの指定、拡張子の有効化、アイコンの変更などを行うことができます。',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'ここではファイル拡張子の作成、削除、所属する拡張子グループの変更を行うことができます。ファイル拡張子を有効化するには拡張子グループ管理ページで行ってください。ただしスクリプトファイルの拡張子（<code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> など）は有効化しないことを強く勧めます。',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'ここでは孤立ファイルを管理できます。ユーザーが投稿画面でファイルを記事に添付したにもかかわらず、肝心の記事を投稿しなかった場合、その添付ファイルは孤立します。ここではそれら孤立したファイルを削除または再添付することが可能です。投稿済みの記事に孤立したファイルを再添付するには添付先記事の ID 番号が必要であり、この ID 番号はご自分で調べる必要があります。添付先記事の ID を孤立したファイルに割り当てればそのファイルはその記事において表示されます。',
	'ADD_EXTENSION'						=> 'ファイル拡張子の追加',
	'ADD_EXTENSION_GROUP'				=> '拡張子グループの追加',
	'ADMIN_UPLOAD_ERROR'				=> 'ファイルのアップロード実行中にエラーが発生しました: "%s"',
	'ALLOWED_FORUMS'					=> '許可フォーラム',
	'ALLOWED_FORUMS_EXPLAIN'			=> '上で有効化された拡張子のファイルは、ここで選択されたフォーラム（または全フォーラム）で添付できるようになります',
	'ALLOWED_IN_PM_POST'				=> '添付可',
	'ALLOW_ATTACHMENTS'					=> 'ファイル添付の許可',
	'ALLOW_ALL_FORUMS'					=> '全フォーラムで許可',
	'ALLOW_IN_PM'						=> 'プライベートメッセージで許可',
	'ALLOW_PM_ATTACHMENTS'				=> 'ファイル添付の許可 [ プライベートメッセージ ]',
	'ALLOW_SELECTED_FORUMS'				=> '選択したフォーラムのみで許可',
	'ASSIGNED_EXTENSIONS'				=> '拡張子の有効化',
	'ASSIGNED_GROUP'					=> '拡張子グループ',
	'ATTACH_EXTENSIONS_URL'				=> '拡張子',
	'ATTACH_EXT_GROUPS_URL'				=> '拡張子グループ',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> '添付ファイルの最大サイズ',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> '添付できるファイルの最大サイズです。0 に設定すると上限はありません。',
	'ATTACH_MAX_PM_FILESIZE'			=> '添付ファイルの最大サイズ [ プライベートメッセージ ]',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'プライベートメッセージで添付できるファイルの最大サイズです。0 に設定すると上限はありません。',
	'ATTACH_ORPHAN_URL'					=> '孤立ファイル',
	'ATTACH_POST_ID'					=> '記事 ID',
	'ATTACH_QUOTA'						=> '添付ファイルの保管スペース',
	'ATTACH_QUOTA_EXPLAIN'				=> '掲示板が保管しておける添付ファイル容量の限界です。0 に設定すると上限はありません。',
	'ATTACH_TO_POST'					=> '再添付',

	'CAT_FLASH_FILES'			=> 'Flash ファイル',
	'CAT_IMAGES'				=> '画像ファイル',
	'CAT_QUICKTIME_FILES'		=> 'Quicktimeファイル',
	'CAT_RM_FILES'				=> 'RealMediaファイル',
	'CAT_WM_FILES'				=> 'Windows Media ファイル',
	'CHECK_CONTENT'				=> '添付ファイルの MIME Type をチェックする',
	'CHECK_CONTENT_EXPLAIN'		=> 'ブラウザによっては MIME Type を間違ってファイルをアップロードしてしまう事があります。このオプションを有効にした場合、もしそのようなファイルがアップロードされても phpBB はそのファイルを拒否します。',
	'CREATE_GROUP'				=> '拡張子グループの作成',
	'CREATE_THUMBNAIL'			=> 'サムネイルの作成',
	'CREATE_THUMBNAIL_EXPLAIN'	=> '画像をサムネイル表示します',

	'DEFINE_ALLOWED_IPS'			=> 'IPアドレス/ホスト名 の許可',
	'DEFINE_DISALLOWED_IPS'			=> 'IPアドレス/ホスト名 の拒否',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> '１行につき１つの IPアドレス/ホスト名 を入力してください。IPアドレスを範囲指定する場合、数字と数字をハイフン(-)でつないでください。部分一致としてワイルドカード(*)を使用できます。',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> '複数選択するにはマウスとキーボードをうまく活用してください（ <samp>SHIFT</samp>キー または <samp>CTRL</samp>キー を押しながらクリック）',
	'DISPLAY_INLINED'				=> '画像をインライン表示する',
	'DISPLAY_INLINED_EXPLAIN'		=> ' “いいえ” を選択した場合、添付画像は記事内で直接表示されずにリンクをクリックする事で表示されるようになります。',
	'DISPLAY_ORDER'					=> '添付ファイルの表示順',
	'DISPLAY_ORDER_EXPLAIN'			=> '記事に添付ファイルがいくつかある場合、添付された順番で並びが決定されます。早い順（昇順）か遅い順（降順）のどちらかを指定してください。',
	
	'EDIT_EXTENSION_GROUP'			=> '拡張子グループの編集',
	'EXCLUDE_ENTERED_IP'			=> '“はい” を選択した場合、入力した IPアドレス/ホスト名 は例外として追加されます。例外として追加された IPアドレス/ホスト名 はリストの有効範囲から除外されます。',
	'EXCLUDE_FROM_ALLOWED_IP'		=> '例外モード',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> '例外モード',
	'EXTENSIONS_UPDATED'			=> '拡張子の更新に成功しました',
	'EXTENSION_EXIST'				=> '拡張子 %s はすでに存在しています',
	'EXTENSION_GROUP'				=> '拡張子グループ',
	'EXTENSION_GROUPS'				=> '拡張子グループ',
	'EXTENSION_GROUP_DELETED'		=> '拡張子グループの削除に成功しました',
	'EXTENSION_GROUP_EXIST'			=> '拡張子グループ %s は既に存在しています',

	'GO_TO_EXTENSIONS'		=> '拡張子管理ページへ移動',
	'GROUP_NAME'			=> '拡張子グループ名',

	'IMAGE_LINK_SIZE'			=> 'リンク表示の画像サイズ',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'このサイズ以上の添付画像が読み込まれた場合、画像ではなくリンクとして表示されます。この機能を無効にしたい場合、 0 x 0 px としてください。 ',
	'IMAGICK_PATH'				=> 'ImageMagick へのパス',
	'IMAGICK_PATH_EXPLAIN'		=> 'ImageMagick へのフルパスです。例 <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> '記事１件あたりの添付ファイル最大数',
	'MAX_ATTACHMENTS_PM'			=> 'プライベートメッセージ１件あたりの添付ファイル最大数',
	'MAX_EXTGROUP_FILESIZE'			=> 'ファイルサイズの上限',
	'MAX_IMAGE_SIZE'				=> '最大画像サイズ',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> '添付画像の最大サイズです。上限なしにしたい場合、 0 x 0 px としてください。',
	'MAX_THUMB_WIDTH'				=> 'サムネイルの最大幅',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> '生成されるサムネイルはこの幅を超えません',
	'MIN_THUMB_FILESIZE'			=> 'サムネイルの最小ファイルサイズ',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'この値より小さいファイルサイズの画像はサムネイル表示されません',
	'MODE_INLINE'					=> 'インライン',
	'MODE_PHYSICAL'					=> '固定',

	'NOT_ALLOWED_IN_PM'			=> '投稿記事にのみ添付可',
	'NOT_ALLOWED_IN_PM_POST'	=> '添付不可',
	'NOT_ASSIGNED'				=> 'なし',
	'NO_EXT_GROUP'				=> 'なし',
	'NO_EXT_GROUP_NAME'			=> '拡張子グループ名が入力されていません。',
	'NO_EXT_GROUP_SPECIFIED'	=> '拡張子グループが指定されていません。',
	'NO_FILE_CAT'				=> 'なし',
	'NO_IMAGE'					=> 'なし',
	'NO_THUMBNAIL_SUPPORT'		=> 'サムネイルを表示できない環境にあります。サムネイルを表示させるには GD 拡張モジュールが利用可能であるかまたは ImageMagick がサーバにインストールされている必要があります。',
	'NO_UPLOAD_DIR'				=> 'アップロードディレクトリが存在しません',
	'NO_WRITE_UPLOAD'			=> 'アップロードディレクトリに書き込みできません。アップロードするにはディレクトリのアクセス権を変更する必要があります。',

	'ONLY_ALLOWED_IN_PM'	=> 'プライベートメッセージにのみ添付可',
	'ORDER_ALLOW_DENY'		=> '許可',
	'ORDER_DENY_ALLOW'		=> '拒否',

	'REMOVE_ALLOWED_IPS'		=> '<em>ダウンロードリスト [ 許可 ]</em> から IPアドレス/ホスト名 を削除',
	'REMOVE_DISALLOWED_IPS'		=> '<em>ダウンロードリスト [ 拒否 ]</em> から IPアドレス/ホスト名 を削除',

	'SEARCH_IMAGICK'				=> 'ImageMagick を探す',
	'SECURE_ALLOW_DENY'				=> 'ダウンロードリストのタイプ',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'セキュアダウンロードが有効な場合、許可/拒否 のどちらをリストとして使用するかを選択します',
	'SECURE_DOWNLOADS'				=> 'セキュアダウンロードを有効にする',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'このオプションを有効にした場合、ダウンロードできるユーザーを IPアドレス/ホスト名 で指定（制限）できます',
	'SECURE_DOWNLOAD_NOTICE'		=> 'セキュアダウンロードが有効ではありません。以下の設定項目はセキュアダウンロードが有効な場合に適用されます。',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IPアドレスのリストの更新に成功しました',
	'SECURE_EMPTY_REFERRER'			=> 'リファラなしユーザーによるダウンロードの許可',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'セキュアダウンロードはリファラ情報（リンク移動元ページのアドレス）を基に動作します。セキュアダウンロードが有効な場合、リファラなしユーザーによるダウンロードを許可しますか？',
	'SETTINGS_CAT_IMAGES'			=> '添付画像の設定',
	'SPECIAL_CATEGORY'				=> 'ファイルタイプ',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'ファイルの種類を指定してください。添付ファイルの表示に直接影響します。',
	'SUCCESSFULLY_UPLOADED'			=> 'アップロードに成功しました',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> '拡張子グループの追加に成功しました',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> '拡張子グループの更新に成功しました',

	'UPLOADING_FILES'				=> 'ファイルのアップロード中',
	'UPLOADING_FILE_TO'				=> 'ファイル “%1$s” を ID %2$d の記事へアップロードしています…',
	'UPLOAD_DENIED_FORUM'			=> 'パーミッションが与えられていないため、フォーラム “%s” でファイルをアップロードできません',
	'UPLOAD_DIR'					=> 'アップロードディレクトリ',
	'UPLOAD_DIR_EXPLAIN'			=> '添付ファイルの保存場所です。このディレクトリを変更した場合、元のディレクトリから変更先のディレクトリへ、保存されている添付ファイルを手動で移動させる必要があります。',
	'UPLOAD_ICON'					=> 'アイコン',
	'UPLOAD_NOT_DIR'				=> '指定したアップロード先はディレクトリではありません',
));

?>