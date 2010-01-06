<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Japanese]
*
* @package language
* @version $Id: permissions_phpbb.php 9686 2009-06-26 11:52:54Z rxu $
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'アクション',
		'content'		=> '記事コンテンツ',
		'forums'		=> 'フォーラム',
		'misc'			=> 'その他',
		'permissions'	=> 'パーミッション',
		'pm'			=> 'プライベートメッセージ',
		'polls'			=> '投票',
		'post'			=> '投稿',
		'post_actions'	=> '投稿アクション',
		'posting'		=> '投稿',
		'profile'		=> 'プロフィール',
		'settings'		=> '環境',
		'topic_actions'	=> 'トピックアクション',
		'user_group'	=> 'ユーザー &amp; グループ',
	),

 	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'ユーザーパーミッション',
		'a_'			=> 'Adminパーミッション',
		'm_'			=> 'モデレータパーミッション',
		'f_'			=> 'フォーラムパーミッション',
 		'global'		=> array(
 			'm_'			=> 'グローバルモデレータパーミッション',
 		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
 	'acl_u_viewprofile'	=> array('lang' => 'プロフィール、メンバーリスト、オンラインデータの閲覧', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'ユーザー名の変更', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'パスワードの変更', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'メールアドレスの変更', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'アバターの変更', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'デフォルトグループの変更', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'ファイルの添付', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'ファイルのダウンロード', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => '下書きのセーブ', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => '言語フィルターの無効化', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'サインの使用', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'プライベートメッセージの送信', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => '複数のユーザーへのプライベートメッセージの送信', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'グループへのプライベートメッセージの送信', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'プライベートメッセージの閲覧', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'プライベートメッセージの編集', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'プライベートメッセージの削除', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'プライベートメッセージの転送', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'プライベートメッセージのメール送信', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'プライベートメッセージの印刷ビューの表示', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'プライベートメッセージでファイルの添付', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'プライベートメッセージでファイルのダウンロード', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'プライベートメッセージで BBCode の使用', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'プライベートメッセージでスマイリーの使用', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'プライベートメッセージで [img] BBCode の使用', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'プライベートメッセージで [flash] BBCode の使用', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'メールの送信', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'インスタントメッセージの送信', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => '連続投稿制限の無視', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'お忍びユーザー', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'オンラインデータページでお忍びユーザーの表示', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => '掲示板全体で検索', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'フォーラムの表示', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'フォーラムへのアクセス', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => '新規トピックの投稿', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'トピックへ返信', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'トピック/返信アイコン の使用', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => '告知トピックの投稿', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => '注目トピックの投稿', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => '投票トピックの作成', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => '投票トピックへ投票', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => '投票先の変更', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'ファイルの添付', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'ファイルのダウンロード', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'サインの使用', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => '投稿記事で BBCode の使用', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => '投稿記事でスマイリーの使用', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => '投稿記事で [img] BBCode の使用', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => '投稿記事で [flash] BBCode の使用', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => '記事の編集', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => '記事の削除', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'トピックの閉鎖', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'トピックの “上げ” ', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => '記事の通報', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'フォーラムウォッチ', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'トピックの印刷ビューの表示', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'トピックのメール送信', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'フォーラム内検索', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => '連続投稿制限の無視', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => '投稿数のカウント<br /><em>記事が投稿された場合のみカウントされる点にご注意ください。投稿記事が削除、移動された場合にカウント数が影響を受ける事はありません。</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => '承認なしで投稿可能', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => '記事の編集', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => '記事の削除', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => '記事の承認', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => '通報の審査と削除', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => '投稿者の変更', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'トピックの移動', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'トピックの閉鎖', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'トピックの分割', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'トピックの統合', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => '記事の詳細の閲覧', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => '警告<br /><em>このオプションはグローバルパーミッションとして適用されます。ローカルパーミッションとして適用されることはありません。</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'アクセス禁止の管理<br /><em>このオプションはグローバルパーミッションとして適用されます。ローカルパーミッションとして適用されることはありません。</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => '掲示板の設定/更新チェック の変更', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'サーバ/クライアント の環境設定の変更', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Jabber 設定の変更', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'PHP情報の閲覧', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'フォーラムの管理', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'フォーラムの作成', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'フォーラムの削除', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'フォーラムのプルーニング', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'トピックアイコン と スマイリー の変更', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => '言語フィルターの変更', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'BBCode の作成', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'ファイル添付に関する設定の変更', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'ユーザーの管理<br /><em>オンラインデータページにおけるブラウザ情報（httpユーザーエージェント）の表示も含みます</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'ユーザーの削除/プルーニング', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'グループの管理', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'グループの追加', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'グループの削除', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'ランクの管理', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'カスタムプロフィールフィールドの管理', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => '拒否ユーザー名の管理', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'アクセス禁止の管理', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'パーミッションマスクの表示', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'パーミッションの変更 [ グループ ]', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'パーミッションの変更 [ ユーザー ]', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'フォーラムパーミッションセットの変更', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'モデレータパーミッションセットの変更', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Adminパーミッションセット の変更', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'ユーザーパーミッションセットの変更', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'パーミッションセットの管理', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'パーミッションテストの使用', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'スタイルの管理', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'ログの閲覧', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'ログの消去', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'モジュールの管理', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => '言語パックの管理', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => '大量メールの送信', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'ボットの管理', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => '通報/却下 の理由の管理', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'データベースの バックアップ/復元', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => '検索バックエンドと検索設定の管理', 'cat' => 'misc'),
));

?>