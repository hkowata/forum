<?php
/**
*
* acp_permissions [Japanese]
*
* @package language
* @version $Id: permissions.php 10017 2009-08-18 14:37:49Z bantu $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>パーミッション（権限）設定は高度に細分化されており４つのセクションにグループ化されています。それらを以下にまとめると：</p>
	
		<h2>グローバルパーミッション</h2>
		<p>グローバルレベルでのパーミッションをコントロールし、掲示板全体に渡って効力を発揮します。グローバルパーミッションとして、ユーザーパーミッション、グローバルモデレータパーミッション、Adminパーミッション の３つがあります。</p>
	
		<h2>ローカルパーミッション</h2>
		<p>ローカルレベルでのパーミッションをコントロールし、掲示板の各フォーラムにのみ効力を発揮します。 ローカルパーミッションとして、フォーラムパーミッション と モデレータパーミッション の２つがあります。</p>
	
		<h2>パーミッションセット</h2>
		<p>パーミッションセット（パーミッションオプションの集まり）を管理できます。パーミッションの種類としてユーザー、フォーラム、モデレータ、Admin の４つが存在します。デフォルトで用意されているパーミッションセットは掲示板を管理しやすいように権限が大きいものから小さいものまでありますが、より掲示板を管理しやすいようにパーミッションセットの 追加/編集/削除 をあなたの裁量で自由に行う事ができます。</p>
	
		<h2>パーミッションマスク</h2>
		<p>割り当てたパーミッションを閲覧・確認できます。</p>
	
		<br />
	
		<p>パーミッションの設定と管理についてのより詳しい説明が <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Quick Start Guide : Chapter 1.5</a> に載ってます。</p>
	',

	'ACL_NEVER'				=> 'Never',
	'ACL_SET'				=> 'パーミッションの設定',
	'ACL_SET_EXPLAIN'		=> 'ユーザーまたはグループにパーミッションを割り当てるには、それぞれのユーザーまたはグループに対してパーミッションセットを割り当てるか、カスタム設定でパーミッションオプションを個別に選択する（ “はい” にする）必要があります。<br /><br /><em>パーミッション設定が重複している状況について分かり易く説明するために、ユーザーＸ さんが グループＡ と グループＢ のメンバーである状況を例にして説明します。<br />例１： あるパーミッションオプションが グループＡ で <samp>はい</samp> 、グループＢ で <samp>いいえ</samp> に設定されている場合、たとえ ユーザーＸ で <samp>いいえ</samp> に設定されていたとしても、ユーザーＸ はそのパーミッションの機能を<b>使用できます</b>。<br />例２： あるパーミッションオプションが グループＡ で <samp>はい</samp>、グループＢ で <samp>Never</samp> に設定されている場合、たとえ ユーザーＸ で <samp>はい</samp> に設定されていたとしても、ユーザーＸ はそのパーミッションの機能を<b>使用できません</b>。<br />つまり要約するとパーミッションの優先順位は ユーザー ・ グループ に関係なく <samp>Never</samp> ＞ <samp>はい</samp> ＞ <samp>いいえ</samp> である、という事です。</em><br /><br />通常は <samp>Never</samp> の使用はグループではなく個々のユーザーのみに控えた方が良いでしょう。複数のユーザーまたはグループに同じ設定をする場合、ユーザー名またはグループ名の隣にあるチェックボックスをチェックする事で設定をコピーできます。',
	'ACL_SETTING'			=> '設定値',

	'ACL_TYPE_A_'			=> 'Adminパーミッション',
	'ACL_TYPE_F_'			=> 'フォーラムパーミッション',
	'ACL_TYPE_M_'			=> 'モデレータパーミッション',
	'ACL_TYPE_U_'			=> 'ユーザーパーミッション',

	'ACL_TYPE_GLOBAL_A_'	=> 'Adminパーミッション',
	'ACL_TYPE_GLOBAL_U_'	=> 'ユーザーパーミッション',
	'ACL_TYPE_GLOBAL_M_'	=> 'グローバルモデレータパーミッション',
	'ACL_TYPE_LOCAL_M_'		=> 'モデレータパーミッション',
	'ACL_TYPE_LOCAL_F_'		=> 'フォーラムパーミッション',
	
	'ACL_NO'				=> 'いいえ',
	'ACL_VIEW'				=> 'パーミッションの閲覧',
	'ACL_VIEW_EXPLAIN'		=> 'ここではユーザーまたはグループが持つパーミッションオプションを閲覧できます。赤はパーミッションが与えられていない事を示し、緑はパーミッションが与えられている事を示します。',
	'ACL_YES'				=> 'はい',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'ここではユーザーとグループに対して Adminパーミッション を割り当てる事ができます。Adminパーミッション を持つユーザーは AdminCP へ入室できます。',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'ここではユーザーとグループに対してモデレータパーミッションを割り当てる事ができます。モデレータパーミッションはグローバルモデレータパーミッションと違って選択したフォーラムにのみ効力を発揮します。',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'ここではユーザーとグループに対してフォーラムパーミッションを割り当てる事ができます。モデレータパーミッションを割り当てるには該当のページで行ってください。',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'ここではフォーラムのフォーラムパーミッション設定を他のフォーラムにコピーできます。',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'ここではユーザーとグループに対してグローバルモデレータパーミッションを割り当てる事ができます。グローバルモデレータパーミッションはモデレータパーミッションと違って掲示板の全フォーラムに渡って効力を発揮します。',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'ここではグループに対してローカルパーミッション（フォーラムパーミッション、モデレータパーミッション）を割り当てる事ができます。',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'ここではグループに対してグローバルパーミッション（ユーザーパーミッション、グローバルモデレータパーミッション、Adminパーミッション）を割り当てる事ができます。ユーザーパーミッションはアバターやプライベートメッセージの使用などの権限を、グローバルモデレータパーミッションは記事の承認やトピック管理やアクセス禁止などの権限を、Adminパーミッション はパーミッション設定や BBCode のカスタム設定やフォーラム管理などの権限をそれぞれ含みます。ユーザー個々のパーミッションの設定は特別な事情がある場合のみに限るべきです。推奨される方法はユーザーをまずグループに振り分け、そのグループに対してパーミッションを割り当てる方法です。',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'ここでは Adminパーミッションセット を管理できます。パーミッションセットとはパーミッションオプションの集まりの事であり、もしパーミッションセットの構成を変更するとそのパーミッションセットを与えられたユーザーとグループもその変更の影響を受けます。',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'ここではフォーラムパーミッションのパーミッションセットを管理できます。パーミッションセットとはパーミッションオプションの集まりの事であり、もしパーミッションセットの構成を変更するとそのパーミッションセットを与えられたユーザーとグループもその変更の影響を受けます。',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'ここではモデレータパーミッションのパーミッションセットを管理できます。パーミッションセットとはパーミッションオプションの集まりの事であり、もしパーミッションセットの構成を変更するとそのパーミッションセットを与えられたユーザーとグループもその変更の影響を受けます。',
	'ACP_USER_ROLES_EXPLAIN'					=> 'ここではユーザーパーミッションのパーミッションセットを管理できます。パーミッションセットとはパーミッションオプションの集まりの事であり、もしパーミッションセットの構成を変更するとそのパーミッションセットを与えられたユーザーとグループもその変更の影響を受けます。',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'ここではユーザーに対してローカルパーミッション（フォーラムパーミッション、モデレータパーミッション）を割り当てる事ができます。',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'ここではユーザーに対してグローバルパーミッション（ユーザーパーミッション、グローバルモデレータパーミッション、Adminパーミッション）を割り当てる事ができます。ユーザーパーミッションはアバターやプライベートメッセージの使用などの権限を、グローバルモデレータパーミッションは記事の承認やトピック管理やアクセス禁止などの権限を、Adminパーミッション はパーミッション設定や BBCode のカスタム設定やフォーラム管理の権限などをそれぞれ含みます。多数のユーザーに対して同じ設定をする場合は グローバルパーミッション [ グループ ] を利用した方が良いでしょう。ユーザー個々のパーミッションの設定は特別な事情がある場合のみに限るべきです。推奨される方法はユーザーをまずグループに振り分け、そのグループに対してパーミッションを割り当てる方法です。',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'ここではユーザーまたはグループに割り当てられた Adminパーミッション を閲覧・確認できます',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'ここではユーザーまたはグループに割り当てられたグローバルモデレータパーミッションを閲覧・確認できます。',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'ここでは各フォーラムでユーザーまたはグループに割り当てられているフォーラムパーミッションを閲覧・確認できます。',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'ここでは各フォーラムでユーザーまたはグループに割り当てられているモデレータパーミッションを閲覧・確認できます。',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'ここではユーザーまたはグループに割り当てられたユーザーパーミッションを閲覧・確認できます。',

	'ADD_GROUPS'				=> 'グループ追加',
	'ADD_PERMISSIONS'			=> 'パーミッション追加',
	'ADD_USERS'					=> 'ユーザー追加',
	'ADVANCED_PERMISSIONS'		=> 'カスタム設定',
	'ALL_GROUPS'				=> '全てのグループを選択',
	'ALL_NEVER'					=> '全て <samp>NEVER</samp>',
	'ALL_NO'					=> '全て <samp>いいえ</samp>',
	'ALL_USERS'					=> '全てのユーザーを選択',
	'ALL_YES'					=> '全て <samp>はい</samp>',
	'APPLY_ALL_PERMISSIONS'		=> '全体更新',
	'APPLY_PERMISSIONS'			=> '更新',
	'APPLY_PERMISSIONS_EXPLAIN'	=> '他の ユーザー/グループ のチェックボックスをチェックしてこの更新をクリックした場合、その ユーザー/グループ に対してこのカスタム設定がコピーされます',
	'AUTH_UPDATED'				=> 'パーミッションの更新に成功しました',

	'COPY_PERMISSIONS_CONFIRM'				=> '本当に実行してもよろしいですか? パーミッション設定は全て上書きされる点にご注意ください。',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'コピー元フォーラムを選択してください。フォーラムのフォーラムパーミッション設定を他のフォーラムにコピーします。',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'コピー先フォーラムを選択してください。フォーラムパーミッションが上書きされます。',
	'COPY_PERMISSIONS_FROM'					=> 'コピー元フォーラム',
	'COPY_PERMISSIONS_TO'					=> 'コピー先フォーラム',

	'CREATE_ROLE'				=> 'パーミッションセットの作成',
	'CREATE_ROLE_FROM'			=> '…の設定をコピー',
	'CUSTOM'					=> 'カスタム設定…',

	'DEFAULT'					=> 'デフォルト',
	'DELETE_ROLE'				=> 'デフォルトパーミッションセット',
	'DELETE_ROLE_CONFIRM'		=> 'パーミッションセットを本当に削除してもよろしいですか？もし削除した場合、このパーミッションセットを与えられたユーザーとグループはパーミッションオプションを<strong>失いません</strong>。',
	'DISPLAY_ROLE_ITEMS'		=> 'このパーミッションセットを与えられた ユーザー/グループ の閲覧',

	'EDIT_PERMISSIONS'			=> 'パーミッション編集',
	'EDIT_ROLE'					=> 'パーミッションセットの編集',

	'GROUPS_NOT_ASSIGNED'		=> 'このパーミッションセットを与えられたグループはありません',

	'LOOK_UP_GROUP'				=> 'グループの選択',
	'LOOK_UP_USER'				=> 'ユーザーの選択',

	'MANAGE_GROUPS'		=> 'グループ管理',
	'MANAGE_USERS'		=> 'ユーザー管理',

	'NO_AUTH_SETTING_FOUND'		=> 'パーミッション割り当てデータの送信に失敗しました',
	'NO_ROLE_ASSIGNED'			=> 'パーミッションセットなし',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'こちらを選択するとカスタム設定になります。無設定状態にするには “全て<samp>いいえ</samp>” リンクをクリックして更新してください。',
	'NO_ROLE_AVAILABLE'			=> '使用可能なパーミッションセットがありません',
	'NO_ROLE_NAME_SPECIFIED'	=> 'パーミッションセットに名前を与えてください',
	'NO_ROLE_SELECTED'			=> 'パーミッションセットが見つかりません',
	'NO_USER_GROUP_SELECTED'	=> 'ユーザーまたはグループを選択していません',

	'ONLY_FORUM_DEFINED'	=> '選択したのはフォーラムだけです。ユーザーまたはグループも選択してください。',

	'PERMISSION_APPLIED_TO_ALL'		=> 'ユーザー/グループ のチェックボックスをチェックすると、パーミッションオプションまたはパーミッションセットはそれらチェックしたユーザー/グループにも同様に設定されます',
	'PLUS_SUBFORUMS'				=> '+サブフォーラム',

	'REMOVE_PERMISSIONS'			=> 'パーミッション削除',
	'REMOVE_ROLE'					=> 'パーミッションセットの削除',
 	'RESULTING_PERMISSION'			=> '最終的なパーミッションの値です',
	'ROLE'							=> 'パーミッションセット',
	'ROLE_ADD_SUCCESS'				=> 'パーミッションセットの追加に成功しました',
	'ROLE_ASSIGNED_TO'				=> 'パーミッションセット %s を与えられた ユーザー/グループ',
	'ROLE_DELETED'					=> 'パーミッションセットの削除に成功しました',
	'ROLE_DESCRIPTION'				=> 'パーミッションセットの説明',

	'ROLE_ADMIN_FORUM'			=> 'Forum Admin',
	'ROLE_ADMIN_FULL'			=> 'Full Admin',
	'ROLE_ADMIN_STANDARD'		=> 'Standard Admin',
	'ROLE_ADMIN_USERGROUP'		=> 'User and Groups Admin',
	'ROLE_FORUM_BOT'			=> 'Bot Access',
	'ROLE_FORUM_FULL'			=> 'Full Access',
	'ROLE_FORUM_LIMITED'		=> 'Limited Access',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Limited Access + Polls',
	'ROLE_FORUM_NOACCESS'		=> 'No Access',
	'ROLE_FORUM_ONQUEUE'		=> 'On Moderation Queue',
	'ROLE_FORUM_POLLS'			=> 'Standard Access + Polls',
	'ROLE_FORUM_READONLY'		=> 'Read Only Access',
	'ROLE_FORUM_STANDARD'		=> 'Standard Access',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Newly registered User',
	'ROLE_MOD_FULL'				=> 'Full Moderator',
	'ROLE_MOD_QUEUE'			=> 'Queue Moderator',
	'ROLE_MOD_SIMPLE'			=> 'Simple Moderator',
	'ROLE_MOD_STANDARD'			=> 'Standard Moderator',
	'ROLE_USER_FULL'			=> 'All Features',
	'ROLE_USER_LIMITED'			=> 'Limited Features',
	'ROLE_USER_NOAVATAR'		=> 'No Avatar',
	'ROLE_USER_NOPM'			=> 'No Private Messages',
	'ROLE_USER_STANDARD'		=> 'Standard Features',
	'ROLE_USER_NEW_MEMBER'		=> 'Newly registered User',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'フォーラム管理とフォーラムパーミッション設定へのアクセスが可能です',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'この掲示板の全ての管理機能へのアクセスが可能です。<br />非推奨です。',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'ほとんどの管理機能へのアクセスが可能ですが、サーバ/システム 関連ツールの使用は許可されていません',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'グループとユーザーの管理が可能です：パーミッションの変更、パーミッションセットの設定、アクセス禁止の管理、ランク管理',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'このパーミッションセットはボットとスパイダーに対して使用する事を勧めます',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> '告知トピックと注目トピックの投稿を含むフォーラムの全機能を使用できます。連続投稿制限を無視して投稿できます。<br />一般ユーザーに対して非推奨です。',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'フォーラム機能をいくつか使用できますが、ファイル添付とトピックアイコンは使用できません',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> '投票トピックを作成できる事以外は Limited Access と同じです',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'フォーラムへ入室できません。表示すらされません。',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'ファイル添付を含むほとんどのフォーラム機能を使用できますが、記事の投稿にはモデレータの承認が必要です',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> '投票トピックを作成できる事以外は Standard Access と同じです',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'フォーラムへ入室できますが、投稿はできません',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'ファイル添付と自分が投稿したトピックの削除を含むほとんどのフォーラム機能を使用できますが、自分が投稿したトピックの閉鎖と投票トピックの投稿はできません',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> '一見さんグループに対して使用する事を勧めます； ユーザー登録して間もないユーザーに対してフォーラム機能のいくつかを完全にロックするため、<samp>NEVER</samp> が使用されています。',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'アクセス禁止を含むモデレータの全機能を使用できます',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> '記事の編集と承認を実行できますが、それ以外の権限を一切持ちません',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> '記事の基本的なアクションのみ実行できます。警告の送信と記事の承認はできません',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'ほとんどのモデレータ機能を使用できますが、アクセス禁止と投稿者の変更はできません',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'ユーザー名の変更、連続投稿制限の無視を含む、ユーザーのために実装されているフォーラム機能の全てを使用できます',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'ユーザー機能のいくつかにアクセスできますが、ファイル添付、メール、インスタントメッセージは許可されていません',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'アバター機能を使用できない事以外は Limited Features と同じです',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'プライベートメッセージを使用できない事以外は Limited Features と同じです',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'ほとんどのユーザー機能にアクセスできますが全てではありません。例えばユーザー名の変更、連続投稿制限の無視などです',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> '一見さんグループに対して使用する事を勧めます； ユーザー登録して間もないユーザーに対してフォーラム機能のいくつかを完全にロックするため、<samp>NEVER</samp> が使用されています。',
		
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'このパーミッションセットで何ができるのか、あるいは何についてのものなのかの要約を記述できます。ここで入力された文章はパーミッション設定ページにおいても表示されます',
	'ROLE_DESCRIPTION_LONG'			=> 'パーミッションセットの説明文が長すぎます。４０００ 字以内にしてください。',
	'ROLE_DETAILS'					=> 'パーミッションセットの詳細',
	'ROLE_EDIT_SUCCESS'				=> 'パーミッションセットの編集に成功しました',
	'ROLE_NAME'						=> 'パーミッションセット名',
	'ROLE_NAME_ALREADY_EXIST'		=> 'パーミッションセット名 <strong>%s</strong> は既に存在しています',
	'ROLE_NOT_ASSIGNED'				=> 'このパーミッションセットを与えられた ユーザー/グループ はありません',

	'SELECTED_FORUM_NOT_EXIST'		=> 'フォーラムが存在していません',
	'SELECTED_GROUP_NOT_EXIST'		=> 'グループが存在していません',
	'SELECTED_USER_NOT_EXIST'		=> 'ユーザーが存在していません',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'サブフォーラムも含めて設定したい場合はこちらで親フォーラムを選択してください',
	'SELECT_ROLE'					=> 'パーミッションセットの選択…',
	'SELECT_TYPE'					=> 'タイプの選択',
	'SET_PERMISSIONS'				=> 'パーミッションの設定',
	'SET_ROLE_PERMISSIONS'			=> 'パーミッションセットの設定',
	'SET_USERS_PERMISSIONS'			=> 'グローバルパーミッションの設定',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'ローカルパーミッションの設定',

	'TRACE_DEFAULT'					=> 'パーミッションのデフォルトは <samp>いいえ</samp>（未設定） です。以下に続く各グループまたはユーザーのパーミッション設定値次第で暫定値は <samp>はい</samp> か <samp>NEVER</samp> に上書きされます。',
	'TRACE_FOR'						=> 'トレース',
	'TRACE_GLOBAL_SETTING'			=> '%s (グローバル)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'			=> '<samp>NEVER</samp> に設定されています。直前も <samp>NEVER</samp> であるため <samp>NEVER</samp> が保持されます。',
 	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> '<samp>NEVER</samp> に設定されています。直前も <samp>NEVER</samp> であるため <samp>NEVER</samp> が保持されます。',
	'TRACE_GROUP_NEVER_TOTAL_NO'			=> '<samp>NEVER</samp> に設定されています。暫定値がまだ設定されていないのでこの値が新しい暫定値となります。',
 	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'		=> '<samp>NEVER</samp> に設定されています。暫定値がまだ設定されていないのでこの値が新しい暫定値となります。',
	'TRACE_GROUP_NEVER_TOTAL_YES'			=> '<samp>NEVER</samp> に設定されています。よって暫定値は <samp>はい</samp> から <samp>NEVER</samp> に上書きされます。',
 	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'		=> '<samp>NEVER</samp> に設定されています。よって暫定値は <samp>はい</samp> から <samp>NEVER</samp> に上書きされます。',
	'TRACE_GROUP_NO'						=> '<samp>いいえ</samp> に設定されているので、暫定値に変更はありません',
 	'TRACE_GROUP_NO_LOCAL'				=> '<samp>いいえ</samp> に設定されているので、暫定値に変更はありません',
	'TRACE_GROUP_YES_TOTAL_NEVER'			=> '<samp>はい</samp> に設定されていますが、直前の暫定値が <samp>NEVER</samp> なので、暫定値に変更はありません',
 	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'		=> '<samp>はい</samp> に設定されていますが、直前の暫定値が <samp>NEVER</samp> なので、暫定値に変更はありません',
	'TRACE_GROUP_YES_TOTAL_NO'				=> '<samp>はい</samp> に設定されています。暫定値がまだ設定されていないので、この値が新しい暫定値となります。',
 	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'			=> '<samp>はい</samp> に設定されています。暫定値がまだ設定されていないので、この値が新しい暫定値となります。',
	'TRACE_GROUP_YES_TOTAL_YES'				=> '<samp>はい</samp> に設定されています。直前の暫定値も <samp>はい</samp> なので、暫定値に変更はありません。',
 	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> '<samp>はい</samp> に設定されています。直前の暫定値も <samp>はい</samp> なので、暫定値に変更はありません。',
	'TRACE_PERMISSION'				=> 'パーミッションのトレース - %s',
 	'TRACE_RESULT'					=> 'トレース結果',
	'TRACE_SETTING'					=> 'トレース',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> '<samp>はい</samp> に設定されていますが、暫定値が既に <samp>はい</samp> なので暫定値に変更はありません。%sグローバルパーミッションのトレース%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> '<samp>はい</samp> に設定されているので、現在のローカル値 <samp>NEVER</samp> は上書きされます。%sグローバルパーミッションのトレース%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'		=> '<samp>NEVER</samp> に設定されていますが、ローカル値に影響はありません。%sグローバルパーミッションのトレース%s',

	'TRACE_USER_FOUNDER'					=> 'このユーザーはウェブマスターなので、Adminパーミッション は常に <samp>はい</samp> です',
	'TRACE_USER_KEPT'					=> '<samp>いいえ</samp> に設定されているので、暫定値に変更はありません',
	'TRACE_USER_KEPT_LOCAL'				=> '<samp>いいえ</samp> に設定されているので、暫定値に変更はありません',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> '<samp>NEVER</samp> に設定されています。暫定値も <samp>NEVER</samp> なので, 暫定値に変更はありません。',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'		=> '<samp>NEVER</samp> に設定されています。暫定値も <samp>NEVER</samp> なので, 暫定値に変更はありません。',
	'TRACE_USER_NEVER_TOTAL_NO'			=> '<samp>NEVER</samp> に設定されています。直前が <samp>いいえ</samp> なので、暫定値は <samp>NEVER</samp> に上書きされます。',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> '<samp>NEVER</samp> に設定されています。直前が <samp>いいえ</samp> なので、暫定値は <samp>NEVER</samp> に上書きされます。',
	'TRACE_USER_NEVER_TOTAL_YES'			=> '<samp>NEVER</samp> に設定されています。よって暫定値は <samp>はい</samp> から <samp>NEVER</samp> に上書きされます。',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> '<samp>NEVER</samp> に設定されています。よって暫定値は <samp>はい</samp> から <samp>NEVER</samp> に上書きされます。',
	'TRACE_USER_NO_TOTAL_NO'				=> '<samp>いいえ</samp> に設定されています。直前の暫定値も <samp>いいえ</samp> なので、暫定値は <samp>NEVER</samp> に変更されます。',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> '<samp>いいえ</samp> に設定されています。直前の暫定値も <samp>いいえ</samp> なので、暫定値は <samp>NEVER</samp> に変更されます。',
	'TRACE_USER_YES_TOTAL_NEVER'			=> '<samp>はい</samp> に設定されていますが、直前の暫定値が <samp>NEVER</samp> なので、暫定値は上書きされません',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> '<samp>はい</samp> に設定されていますが、直前の暫定値が <samp>NEVER</samp> なので、暫定値は上書きされません',
	'TRACE_USER_YES_TOTAL_NO'				=> '<samp>はい</samp> に設定されています。直前の暫定値が <samp>いいえ</samp> なので、暫定値は <samp>はい</samp> に上書きされます。',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> '<samp>はい</samp> に設定されています。直前の暫定値が <samp>いいえ</samp> なので、暫定値は <samp>はい</samp> に上書きされます。',
	'TRACE_USER_YES_TOTAL_YES'				=> '<samp>はい</samp> に設定されています。直前の暫定値が <samp>はい</samp> なので、暫定値に変更はありません。',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'			=> '<samp>はい</samp> に設定されています。直前の暫定値が <samp>はい</samp> なので、暫定値に変更はありません。',
	'TRACE_WHO'								=> '設定対象',
	'TRACE_TOTAL'							=> '暫定値',

	'USERS_NOT_ASSIGNED'			=> '割り当てなし',
	'USER_IS_MEMBER_OF_DEFAULT'		=> '次の特別グループのメンバーです',
	'USER_IS_MEMBER_OF_CUSTOM'		=> '次の作成グループのメンバーです',

	'VIEW_ASSIGNED_ITEMS'	=> '割り当て状況を見る',
	'VIEW_LOCAL_PERMS'		=> 'ローカルパーミッション',
	'VIEW_GLOBAL_PERMS'		=> 'グローバルパーミッション',
	'VIEW_PERMISSIONS'		=> 'パーミッションの閲覧',

	'WRONG_PERMISSION_TYPE'				=> '不適切なパーミッションタイプが選択されました。',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> '送信されたパーミッション設定データ( $_POST[\'setting\'] )に不備があるため、パーミッション設定を正常に行えませんでした。',
));

?>