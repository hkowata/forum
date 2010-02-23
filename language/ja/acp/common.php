<?php
/**
*
* acp_common [Japanese]
*
* @package language
* @version $Id: common.php 10134 2009-09-10 15:32:16Z marshalrusty $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Adminパーミッション',
	'ACP_ADMIN_LOGS'			=> 'Adminログ',
	'ACP_ADMIN_ROLES'			=> 'Adminパーミッションセット',
	'ACP_ATTACHMENTS'			=> 'ファイル添付',
	'ACP_ATTACHMENT_SETTINGS'	=> 'ファイル添付（アップロード、ダウンロード）の設定',
	'ACP_AUTH_SETTINGS'			=> 'ログイン認証設定',
	'ACP_AUTOMATION'			=> 'オートメイション',
	'ACP_AVATAR_SETTINGS'		=> 'アバター設定',
	
	'ACP_BACKUP'				=> 'バックアップ',
	'ACP_BAN'					=> 'アクセス禁止',
	'ACP_BAN_EMAILS'			=> 'アクセス禁止（メールアドレス）',
	'ACP_BAN_IPS'				=> 'アクセス禁止（IPアドレス）',
	'ACP_BAN_USERNAMES'			=> 'アクセス禁止（ユーザー名）',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> '掲示板の設定',
	'ACP_BOARD_FEATURES'		=> '掲示板の機能',
	'ACP_BOARD_MANAGEMENT'		=> '掲示板の管理',
	'ACP_BOARD_SETTINGS'		=> '掲示板の環境',
	'ACP_BOTS'					=> 'スパイダー/ボット',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'データベース',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'フォーラム',
	'ACP_CAT_GENERAL'			=> 'メイン',
	'ACP_CAT_MAINTENANCE'		=> 'メンテナンス',
	'ACP_CAT_PERMISSIONS'		=> 'パーミッション',
	'ACP_CAT_POSTING'			=> '投稿',
	'ACP_CAT_STYLES'			=> 'スタイル',
	'ACP_CAT_SYSTEM'			=> 'システム',
	'ACP_CAT_USERGROUP'			=> 'ユーザー＆グループ',
	'ACP_CAT_USERS'				=> 'ユーザー',
	'ACP_CLIENT_COMMUNICATION'	=> 'クライアントコミュニケイション',
	'ACP_COOKIE_SETTINGS'		=> 'cookie 設定',
	'ACP_CRITICAL_LOGS'			=> 'エラーログ',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'カスタムプロフィールフィールド',

	'ACP_DATABASE'				=> 'データベースの管理',
	'ACP_DISALLOW'				=> '拒否',
	'ACP_DISALLOW_USERNAMES'	=> 'ユーザー名の拒否',
	
	'ACP_EMAIL_SETTINGS'		=> 'メール設定',
	'ACP_EXTENSION_GROUPS'		=> '拡張子グループの管理',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'ローカルパーミッション',
	'ACP_FORUM_LOGS'				=> '掲示板のログ',
	'ACP_FORUM_MANAGEMENT'			=> 'フォーラム管理',
	'ACP_FORUM_MODERATORS'			=> 'モデレータパーミッション',
	'ACP_FORUM_PERMISSIONS'			=> 'フォーラムパーミッション',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'フォーラムパーミッションのコピー',
	'ACP_FORUM_ROLES'				=> 'フォーラムパーミッションセット',

	'ACP_GENERAL_CONFIGURATION'		=> '一般設定',
	'ACP_GENERAL_TASKS'				=> '一般タスク',
	'ACP_GLOBAL_MODERATORS'			=> 'グローバルモデレータパーミッション',
	'ACP_GLOBAL_PERMISSIONS'		=> 'グローバルパーミッション',
	'ACP_GROUPS'					=> 'グループ',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'ローカルパーミッション [ グループ ]',
	'ACP_GROUPS_MANAGE'				=> 'グループ管理',
	'ACP_GROUPS_MANAGEMENT'			=> 'グループ管理',
	'ACP_GROUPS_PERMISSIONS'		=> 'グローバルパーミッション [ グループ ]',
	
	'ACP_ICONS'					=> 'トピックアイコン',
	'ACP_ICONS_SMILIES'			=> 'トピックアイコン/スマイリー',
	'ACP_IMAGESETS'				=> 'イメージセット',
	'ACP_INACTIVE_USERS'		=> '無効アカウント',
	'ACP_INDEX'					=> 'ACP index',
	
	'ACP_JABBER_SETTINGS'		=> 'Jabber 設定',
	
	'ACP_LANGUAGE'				=> '言語管理',
	'ACP_LANGUAGE_PACKS'		=> '言語パック',
	'ACP_LOAD_SETTINGS'			=> '読み込み設定',
	'ACP_LOGGING'				=> 'ログ',
	
	'ACP_MAIN'					=> 'ACP index',
	'ACP_MANAGE_EXTENSIONS'		=> 'ファイル拡張子の管理',
	'ACP_MANAGE_FORUMS'			=> 'フォーラム管理',
	'ACP_MANAGE_RANKS'			=> 'ランク管理',
	'ACP_MANAGE_REASONS'		=> '通報/却下 の理由',
	'ACP_MANAGE_USERS'			=> 'ユーザー管理',
	'ACP_MASS_EMAIL'			=> '大量メール',
	'ACP_MESSAGES'				=> 'メッセージ',
	'ACP_MESSAGE_SETTINGS'		=> 'プライベートメッセージ設定',
	'ACP_MODULE_MANAGEMENT'		=> 'モジュール管理',
	'ACP_MOD_LOGS'				=> 'モデレータログ',
	'ACP_MOD_ROLES'				=> 'モデレータパーミッションセット',
	
	'ACP_NO_ITEMS'				=> 'データなし',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> '孤立ファイル',
	
	'ACP_PERMISSIONS'			=> 'パーミッション',
	'ACP_PERMISSION_MASKS'		=> 'パーミッションマスク',
	'ACP_PERMISSION_ROLES'		=> 'パーミッションセット',
	'ACP_PERMISSION_TRACE'		=> 'パーミッショントレース',
	'ACP_PHP_INFO'				=> 'PHP 情報',
	'ACP_POST_SETTINGS'			=> '投稿設定',
	'ACP_PRUNE_FORUMS'			=> 'フォーラムのプルーニング',
	'ACP_PRUNE_USERS'			=> 'ユーザーのプルーニング',
	'ACP_PRUNING'				=> 'プルーニング',
	
	'ACP_QUICK_ACCESS'			=> 'クイックアクセス',
	
	'ACP_RANKS'					=> 'ランク',
	'ACP_REASONS'				=> '通報/却下 の理由',
	'ACP_REGISTER_SETTINGS'		=> 'ユーザー登録設定',

	'ACP_RESTORE'				=> '復元',

	'ACP_FEED'					=> 'フィード管理',
	'ACP_FEED_SETTINGS'			=> 'フィード設定',

	'ACP_SEARCH'				=> '検索',
	'ACP_SEARCH_INDEX'			=> '検索インデクス',
	'ACP_SEARCH_SETTINGS'		=> '検索設定',

	'ACP_SECURITY_SETTINGS'		=> 'セキュリティ設定',
	'ACP_SEND_STATISTICS'		=> '設定情報の提供',
	'ACP_SERVER_CONFIGURATION'	=> 'サーバ設定',
	'ACP_SERVER_SETTINGS'		=> 'サーバ環境',
	'ACP_SIGNATURE_SETTINGS'	=> 'サイン設定',
	'ACP_SMILIES'				=> 'スマイリー',
	'ACP_STYLE_COMPONENTS'		=> 'スタイル構成',
	'ACP_STYLE_MANAGEMENT'		=> 'スタイル管理',
	'ACP_STYLES'				=> 'スタイル',

	'ACP_SUBMIT_CHANGES'		=> 'Submit changes',
	
	'ACP_TEMPLATES'				=> 'テンプレートセット',
	'ACP_THEMES'				=> 'テーマ',
	
	'ACP_UPDATE'					=> 'アップデート',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'ローカルパーミッション [ ユーザー ]',
	'ACP_USERS_LOGS'				=> 'ユーザーログ',
	'ACP_USERS_PERMISSIONS'			=> 'グローバルパーミッション [ ユーザー ]',
	'ACP_USER_ATTACH'				=> '添付ファイル',
	'ACP_USER_AVATAR'				=> 'アバター',
	'ACP_USER_FEEDBACK'				=> 'フィードバック',
	'ACP_USER_GROUPS'				=> 'グループ',
	'ACP_USER_MANAGEMENT'			=> 'ユーザー管理',
	'ACP_USER_OVERVIEW'				=> 'アカウント情報',
	'ACP_USER_PERM'					=> 'パーミッション',
	'ACP_USER_PREFS'				=> 'ユーザー設定',
	'ACP_USER_PROFILE'				=> 'プロフィール',
	'ACP_USER_RANK'					=> 'ランク',
	'ACP_USER_ROLES'				=> 'ユーザーパーミッションセット',
	'ACP_USER_SECURITY'				=> 'ユーザーセキュリティ',
	'ACP_USER_SIG'					=> 'サイン',
	'ACP_USER_WARNINGS'				=> '警告',

	'ACP_VC_SETTINGS'					=> 'CAPTCHA 設定',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA プレビュー',
	'ACP_VERSION_CHECK'					=> '更新チェック',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Adminパーミッションマスク',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'モデレータパーミッションマスク',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'フォーラムパーミッションマスク',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'グローバルモデレータパーミッションマスク',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'ユーザーパーミッションマスク',
	
	'ACP_WORDS'					=> '言語フィルター',

	'ACTION'				=> 'アクション',
	'ACTIONS'				=> 'アクション',
	'ACTIVATE'				=> '有効にする',
	'ADD'					=> '追加',
	'ADMIN'					=> 'Admin',
	'ADMIN_INDEX'			=> 'AdminCP トップ',
	'ADMIN_PANEL'			=> 'AdminCP',

	'ADM_LOGOUT'			=> 'ACP&nbsp;ログアウト',
	'ADM_LOGGED_OUT'		=> 'Administration Control Panel からログアウトしました',

	'BACK'					=> '戻る',

	'COLOUR_SWATCH'			=> '色のサンプル',
	'CONFIG_UPDATED'		=> '設定の更新に成功しました',

	'DEACTIVATE'				=> '無効にする',
	'DIRECTORY_DOES_NOT_EXIST'	=> '入力したパス “%s” にディレクトリが存在していません',
	'DIRECTORY_NOT_DIR'			=> '入力したパス “%s” はディレクトリではありません',
	'DIRECTORY_NOT_WRITABLE'	=> '入力したパス “%s” のディレクトリに書き込めません',
	'DISABLE'					=> '無効にする',
	'DOWNLOAD'					=> 'ダウンロード',
	'DOWNLOAD_AS'				=> 'ダウンロード形式',
	'DOWNLOAD_STORE'			=> 'ダウンロード or 保管',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'ファイルをダウンロードするか <samp>store/</samp> フォルダに保管するかを選択してください',

	'EDIT'					=> '編集',
	'ENABLE'				=> '有効にする',
	'EXPORT_DOWNLOAD'		=> 'ダウンロード',
	'EXPORT_STORE'			=> '保管',

	'GENERAL_OPTIONS'		=> '一般オプション',
	'GENERAL_SETTINGS'		=> '一般設定',
	'GLOBAL_MASK'			=> 'グローバルパーミッションマスク',

	'INSTALL'				=> 'インストール',
	'IP'					=> 'IPアドレス',
	'IP_HOSTNAME'			=> 'IPアドレス/ホスト名',

	'LOGGED_IN_AS'			=> 'ログイン名：',
	'LOGIN_ADMIN'			=> 'AdminCP へ入室するにはログインする必要があります',
	'LOGIN_ADMIN_CONFIRM'	=> 'AdminCP へ入室するには再度ユーザー認証する必要があります',
	'LOGIN_ADMIN_SUCCESS'	=> '認証に成功しました。AdminCP へ自動的にリダイレクトします。',
	'LOOK_UP_FORUM'			=> 'フォーラムの選択',
	'LOOK_UP_FORUMS_EXPLAIN'=> '複数のフォーラムを選択できます',

	'MANAGE'				=> '管理',
	'MENU_TOGGLE'			=> 'サイドメニューの表示/非表示',
	'MORE'					=> 'More',			// Not used at the moment
	'MORE_INFORMATION'		=> '詳しくはこちら ≫',
	'MOVE_DOWN'				=> '下に移動',
	'MOVE_UP'				=> '上に移動',

	'NOTIFY'				=> '通告',
	'NO_ADMIN'				=> 'ユーザー認証されていないため、AdminCP へ入室できません',
	'NO_EMAILS_DEFINED'		=> 'メールアドレスが見つかりませんでした',
	'NO_PASSWORD_SUPPLIED'	=> 'AdminCP へアクセスするにはパスワードを入力する必要があります',	

	'OFF'					=> 'オフ',
	'ON'					=> 'オン',

	'PARSE_BBCODE'						=> 'BBCode をパースする',
	'PARSE_SMILIES'						=> 'スマイリーをパースする',
	'PARSE_URLS'						=> 'URL をパースする',
	'PERMISSIONS_TRANSFERRED'			=> 'パーミッションテスト中',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'ユーザー %1$s のパーミッションテストを実行中です。Adminパーミッションをテストすることはできないため、パーミッションテスト中は AdminCP へ入室することはできません。あなたはいつでも<a href="%2$s"><strong>パーミッションテストを終了する</strong></a>事ができます。',
	'PIXEL'								=> 'px',	
	'PROCEED_TO_ACP'					=> '%sAdminCP へ%s',

	'REMIND'							=> 'アカウント有効化メールの送信',
	'RESYNC'							=> '同期',
	'RETURN_TO'							=> '…に戻る',

	'SELECT_ANONYMOUS'		=> '匿名ユーザーの選択',
	'SELECT_OPTION'			=> 'オプションを選択してください',

	'SETTING_TOO_LOW'		=> '“%1$s” の値が小さすぎます。%2$d 以上にしてください。',
	'SETTING_TOO_BIG'			=> '“%1$s” の値が大きすぎます。%2$d 以下にしてください。',
	'SETTING_TOO_LONG'		=> '“%1$s” が長すぎます。%2$d 字以下にしてください。',
	'SETTING_TOO_SHORT'		=> '“%1$s” が短すぎます。%2$d 字以上にしてください。',
	'SHOW_ALL_OPERATIONS'	=> 'Show all operations',

	'UCP'					=> 'ユーザーCP',
	'USERNAMES_EXPLAIN'		=> '１行につき１つのユーザー名を入力してください',
	'USER_CONTROL_PANEL'	=> 'ユーザーCP',

	'WARNING'				=> '警告',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'ここではサーバにインストールされている PHP の設定情報（php.ini）を確認できます。設定情報には拡張モジュール、利用可能な変数、デフォルト設定の詳細が含まれています。これらの情報はサイトに何か問題が起こった場合、その問題を診断する時に役立つはずです。ホスティングサービスを利用している場合、サーバ運営会社によってはセキュリティ上の理由で表示される情報が制限されている可能性があります。www.phpbb.com のサポートフォーラムの<a href="http://www.phpbb.com/about/team/">オフィシャルチームメンバー</a>に質問する時以外はこのページにおけるいかなる情報も口外すべきではない事を忠告しておきます。',

	'NO_PHPINFO_AVAILABLE'	=> 'PHP の設定情報（php.ini）を取得できません。セキュリティ上の理由で phpinfo() が使えなくなっています。',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'ここでは Admin によって実行された全アクションのログをリストアップしています。ログはユーザー名、日時、IPアドレス、アクションでソート可能です。パーミッション次第でログの削除も可能です。',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'ここでは掲示板システムが自ら実行したアクションのログをリストアップしています。もし掲示板になんらかの問題（例えばメールの配達不能）が起こった場合、それを解決するための情報としてログが記録されます。ログはユーザー名、日時、IPアドレス、アクションでソート可能です。パーミッション次第でログの削除も可能です。',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'ここではフォーラム、トピック、返信記事において、アクセス禁止アクションも含めモデレータが実行した全アクションのログをリストアップしています。ログはユーザー名、日時、IPアドレス、アクションでソート可能です。パーミッション次第でログの削除も可能です。',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'ここではユーザーによって、あるいはユーザーに対して実行された全アクションのログをリストアップしています。',
	'ALL_ENTRIES'				=> '全ログ',

	'DISPLAY_LOG'	=> '期間内表示',

	'NO_ENTRIES'	=> 'ログはありません',

	'SORT_IP'		=> 'IPアドレス',
	'SORT_DATE'		=> '日時',
	'SORT_ACTION'	=> 'ログアクション',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Administration Control Panel (AdminCP) へようこそ。AdminCP では掲示板を管理するための様々な機能を利用できます。',
	'ADMIN_LOG'					=> 'Admin によるアクションログ',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Admin によって最近実行された５つのアクションを表示しています。全ログを参照するには次のリンクをクリックしてください。',
	'AVATAR_DIR_SIZE'			=> 'アバターディレクトリのサイズ',

	'BOARD_STARTED'		=> '掲示板開始日時',
 	'BOARD_VERSION'		=> 'phpBB バージョン',

	'DATABASE_SERVER_INFO'	=> 'データベース',
	'DATABASE_SIZE'			=> 'データベースサイズ',

	'FILES_PER_DAY'		=> '１日あたりのファイル添付数',
	'FORUM_STATS'		=> '掲示板の統計データ',

	'GZIP_COMPRESSION'	=> 'GZip圧縮',

	'NOT_AVAILABLE'		=> '利用できません',
	'NUMBER_FILES'		=> '添付ファイル数',
	'NUMBER_POSTS'		=> '記事数',
	'NUMBER_TOPICS'		=> 'トピック数',
	'NUMBER_USERS'		=> 'ユーザー数',
	'NUMBER_ORPHAN'		=> '孤立ファイル数',

	'POSTS_PER_DAY'		=> '１日あたりの投稿数',

	'PURGE_CACHE'			=> 'キャッシュの消去',
	'PURGE_CACHE_CONFIRM'	=> 'キャッシュを本当に消去してもよろしいですか?',
	'PURGE_CACHE_EXPLAIN'	=> '掲示板のキャッシュデータを全て消去します。テンプレートファイルと SQLファイル の消去を含みます。',

	'PURGE_SESSIONS'			=> 'セッションの消去',
	'PURGE_SESSIONS_CONFIRM'	=> 'セッションを本当に消去してもよろしいですか? ユーザーは全て強制的にログアウトされます。',
	'PURGE_SESSIONS_EXPLAIN'	=> 'セッションを全て消去します。ユーザーは全て強制的にログアウトされます。',

	'RESET_DATE'					=> '掲示板開始日時をリセットする',
	'RESET_DATE_CONFIRM'			=> '掲示板開始日時を本当にリセットしてもよろしいですか？',
	'RESET_ONLINE'					=> '最大同時ユーザーオンライン数をリセットする',
	'RESET_ONLINE_CONFIRM'			=> '最大同時ユーザーオンライン数を本当にリセットしてもよろしいですか？',
	'RESYNC_POSTCOUNTS'				=> '記事数の同期',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> '現存している記事のみカウントされます。プルーニングされた記事はカウントされません。',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> '記事数を本当に同期してもよろしいですか？',
	'RESYNC_POST_MARKING'			=> 'トピックの投稿マークの同期',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'トピックの投稿マークを本当に同期してもよろしいですか？',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'トピックの投稿マークを全て一旦解除し、その後過去６ヶ月間に返信されているトピックのみを再マークします',
	'RESYNC_STATS'					=> '統計の同期',
	'RESYNC_STATS_CONFIRM'			=> '統計データを本当に同期してもよろしいですか？',
	'RESYNC_STATS_EXPLAIN'			=> '全返信数、全トピック数、全ユーザー数、全添付ファイル数を再計算します',
	'RUN'							=> '実行',

	'STATISTIC'					=> '統計',
	'STATISTIC_RESYNC_OPTIONS'	=> '統計データの 同期/リセット',

	'TOPICS_PER_DAY'	=> '１日あたりのトピック数',

	'UPLOAD_DIR_SIZE'	=> 'アップロードディレクトリのサイズ',
	'USERS_PER_DAY'		=> '１日あたりの登録ユーザー数',

	'VALUE'					=> '値',
	'VERSIONCHECK_FAIL'			=> '最新バージョン情報の取得に失敗しましたFailed to obtain latest version information.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'バージョン再チェック',
	'VIEW_ADMIN_LOG'		=> '全ての Adminログ を表示',
	'VIEW_INACTIVE_USERS'	=> '全ての無効アカウントを表示',

	'WELCOME_PHPBB'			=> 'phpBB へようこそ',
	'WRITABLE_CONFIG'		=> 'コンフィグファイル（config.php）のアクセス権の設定が非常に危険です。サーバの全ユーザーに対して書き込みが許可されており、誰でも修正できる状態にあります。今すぐにファイルアクセス権を 604 または少なくとも 644 に設定（<a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 604 config.php）してください。',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'アカウント無効（停止）日時',
	'INACTIVE_REASON'				=> '無効理由',
	'INACTIVE_REASON_MANUAL'		=> 'Admin がアカウントを停止した',
	'INACTIVE_REASON_PROFILE'		=> 'プロフィールの詳細を変更した',
	'INACTIVE_REASON_REGISTER'		=> '新しくアカウントを登録した',
	'INACTIVE_REASON_REMIND'		=> 'ユーザーにアカウント有効化メールを再送信した',
	'INACTIVE_REASON_UNKNOWN'		=> '不明',
	'INACTIVE_USERS'				=> '無効アカウント',
	'INACTIVE_USERS_EXPLAIN'		=> 'アカウントが無効（停止）状態の登録ユーザーのリストです。無効アカウントに対して、有効化、削除、アカウント有効化メールの送信を行うことができます。',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'アカウントが無効（停止）状態の登録ユーザーの最近１０件のリストです。 全ての無効アカウントを参照するには次のリンクをクリックしてください。移動先のページでアカウントの有効化、削除、アカウント有効化メールの送信を行う事ができます。',

	'NO_INACTIVE_USERS'	=> '無効アカウントはありません',

	'SORT_INACTIVE'		=> 'アカウント無効（停止）日時',
	'SORT_LAST_VISIT'	=> '最近の訪問日時',
	'SORT_REASON'		=> '理由',
	'SORT_REG_DATE'		=> '登録日時',
	'SORT_LAST_REMINDER'=> '最近のアカウント有効化メール送信日時',
	'SORT_REMINDER'		=> 'アカウント有効化メール送信数',

	'USER_IS_INACTIVE'		=> '無効アカウント',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'サーバと掲示板の設定情報を phpBB Group に提供します。この情報は主に phpBB の今後の開発方針を決定する際に参考として利用されます。ユーザーの皆様のご協力をお願い致します。またこの情報は一般公開され、プログラミング言語 PHP の開発にも利用されます。提供情報には、ユーザーまたはサイトを特定するような情報は一切含まれませんのでご安心ください - それら個人情報は全て <strong>匿名</strong> として扱われます。',
	'EXPLAIN_SHOW_STATISTICS'	=> '下のボタンをクリックすれば提供情報の全データが表示されます',
	'DONT_SEND_STATISTICS'		=> 'AdminCP トップに戻る',
	'GO_ACP_MAIN'				=> 'AdminCP トップへ',
	'HIDE_STATISTICS'			=> '提供情報を隠す',
	'SEND_STATISTICS'			=> 'サーバと掲示板の設定情報を phpBB Group に提供する',
	'SHOW_STATISTICS'			=> '提供情報を表示する',
	'THANKS_SEND_STATISTICS'	=> 'ご協力して頂きありがとうございました',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>ユーザーパーミッションを追加 or 変更しました</strong><br />≫ %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>ユーザーパーミッションを追加 or 変更しました</strong><br />≫ %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>グローバルモデレータパーミッションを追加 or 変更しました</strong><br />≫ %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>グローバルモデレータパーミッションを追加 or 変更しました</strong><br />≫ %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Adminパーミッション を追加 or 変更しました</strong><br />≫ %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Adminパーミッション を追加 or 変更しました</strong><br />≫ %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Adminパーミッション を追加 or 変更しました</strong><br />≫ %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>グローバルモデレータパーミッションを追加 or 変更しました</strong><br />≫ %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>フォーラムパーミッションを追加 or 変更しました - </strong> %1$s<br />≫ %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>モデレータパーミッションを追加 or 変更しました - </strong> %1$s<br />≫ %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>フォーラムパーミッションを追加 or 変更しました - </strong> %1$s<br />≫ %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>モデレータパーミッションを追加 or 変更しました - </strong> %1$s<br />≫ %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>モデレータパーミッションを追加 or 変更しました - </strong> %1$s<br />≫ %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>フォーラムパーミッションを追加 or 変更しました - </strong> %1$s<br />≫ %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Adminパーミッション を削除しました</strong><br />≫ %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>グローバルモデレータパーミッションを削除しました</strong><br />≫ %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>モデレータパーミッションを削除しました - </strong> %1$s<br />≫ %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>フォーラムパーミッションを削除しました - </strong> %1$s<br />≫ %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>パーミッションテストを開始しました</strong><br />≫ %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>パーミッションテストを終了しました</strong><br />≫ %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>AdminCP へのログインに失敗しました</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>AdminCP へのログインに成功しました</strong>',

 	'LOG_ATTACHMENTS_DELETED'	=> '<strong>添付ファイルを削除しました</strong><br />≫ %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>添付ファイルの拡張子を追加 or 変更しました</strong><br />≫ %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>添付ファイルの拡張子を削除しました</strong><br />≫ %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>添付ファイルの拡張子を更新しました</strong><br />≫ %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>拡張子グループを追加しました</strong><br />≫ %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>拡張子グループを編集しました</strong><br />≫ %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>拡張子グループを削除しました</strong><br />≫ %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>孤立ファイルを記事に添付しました</strong><br />≫ ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>孤立ファイルを削除しました</strong><br />≫ %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>アクセス禁止リストから ユーザー名 を削除しました</strong> -理由- “<em>%1$s</em>” <br />≫ %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>アクセス禁止リストから IPアドレス を削除しました</strong> -理由- “<em>%1$s</em>” <br />≫ %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>アクセス禁止リストから メールアドレス を削除しました</strong> -理由- “<em>%1$s</em>” <br />≫ %2$s',
	'LOG_BAN_USER'			=> '<strong>アクセス禁止リストに ユーザー名 を追加しました</strong> -理由- “<em>%1$s</em>” <br />≫ %2$s',
	'LOG_BAN_IP'			=> '<strong>アクセス禁止リストに IPアドレス を追加しました</strong> -理由- “<em>%1$s</em>” <br />≫ %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>アクセス禁止リストに メールアドレス を追加しました</strong> -理由- “<em>%1$s</em>” <br />≫ %2$s',
	'LOG_UNBAN_USER'		=> '<strong>アクセス禁止リストから ユーザー名 を削除しました</strong><br />≫ %s',
	'LOG_UNBAN_IP'			=> '<strong>アクセス禁止リストから IPアドレス を削除しました</strong><br />≫ %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>アクセス禁止リストから メールアドレス を削除しました</strong><br />≫ %s',

	'LOG_BBCODE_ADD'		=> '<strong>BBCode を追加しました</strong><br />≫ %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode を編集しました</strong><br />≫ %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode を削除しました</strong><br />≫ %s',

	'LOG_BOT_ADDED'		=> '<strong>ボットを追加しました</strong><br />≫ %s',
	'LOG_BOT_DELETE'	=> '<strong>ボットを削除しました</strong><br />≫ %s',
	'LOG_BOT_UPDATED'	=> '<strong>ボットを更新しました</strong><br />≫ %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Adminログ を消去しました</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>エラーログを消去しました</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>モデレータログを消去しました</strong>',
	'LOG_CLEAR_USER'		=> '<strong>ユーザーログを消去しました</strong><br />≫ %s',
	'LOG_CLEAR_USERS'		=> '<strong>全ユーザーログを消去しました</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>添付ファイルの設定 を変更しました</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>ログイン認証設定 を変更しました</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>アバター設定 を変更しました</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>cookie 設定 を変更しました</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>メール設定 を変更しました</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>掲示板の機能 を変更しました</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>読み込み設定 を変更しました</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>プライベートメッセージ設定 を変更しました</strong>',
	'LOG_CONFIG_POST'			=> '<strong>投稿設定 を変更しました</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>ユーザー登録設定 を変更しました</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>フィード設定 を変更しました</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>検索設定 を変更しました</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>セキュリティ設定 を変更しました</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>サーバ設定 を変更しました</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>掲示板の環境 を変更しました</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>サイン設定 を変更しました</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>CAPTCHA 設定 を変更しました</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>トピックを承認しました</strong><br />≫ %s',
	'LOG_BUMP_TOPIC'			=> '<strong>トピックを上げました</strong><br />≫ %s',
	'LOG_DELETE_POST'			=> '<strong>記事を削除しました</strong><br />≫ %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>シャドウトピックを削除しました</strong><br />≫ %s',
	'LOG_DELETE_TOPIC'			=> '<strong>トピックを削除しました</strong><br />≫ %s',
	'LOG_FORK'					=> '<strong>トピックをコピーしました</strong><br />≫ from %s',
	'LOG_LOCK'					=> '<strong>トピックを閉鎖しました</strong><br />≫ %s',
	'LOG_LOCK_POST'				=> '<strong>記事を凍結しました</strong><br />≫ %s',
	'LOG_MERGE'					=> '<strong>記事をトピックに統合しました</strong><br />≫ %s',
	'LOG_MOVE'					=> '<strong>トピックを移動しました</strong><br />≫ from %1$s to %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>通報 [ PM ] の審査を完了しました</strong><br />≫ %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>通報 [ PM ] を削除しました</strong><br />≫ %s',
	'LOG_POST_APPROVED'			=> '<strong>記事を承認しました</strong><br />≫ %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>次の理由で記事 “%1$s” を承認しませんでした</strong><br />≫ %2$s',
	'LOG_POST_EDITED'			=> '<strong>記事 “%1$s” を編集しました</strong><br />≫ %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>通報の審査を完了しました</strong><br />≫ %s',
	'LOG_REPORT_DELETED'		=> '<strong>通報を削除しました</strong><br />≫ %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>分割した記事を移動しました</strong><br />≫ to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>記事を分割しました</strong><br />≫ from %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>トピックを承認しました</strong><br />≫ %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>次の理由でトピック “%1$s” を承認しませんでした</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>トピックカウンタを同期しました</strong><br />≫ %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>トピックタイプを変更しました</strong><br />≫ %s',
	'LOG_UNLOCK'				=> '<strong>トピックを閉鎖しました</strong><br />≫ %s',
	'LOG_UNLOCK_POST'			=> '<strong>記事の凍結を解除しました</strong><br />≫ %s',

	'LOG_DISALLOW_ADD'		=> '<strong>拒否リストにユーザー名を追加しました</strong><br />≫ %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>拒否リストからユーザー名を削除しました</strong>',

	'LOG_DB_BACKUP'			=> '<strong>データベースをバックアップしました</strong>',
	'LOG_DB_DELETE'			=> '<strong>データベースのバックアップを削除しました</strong>',
	'LOG_DB_RESTORE'		=> '<strong>データベースを復元しました</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>ダウンロードリストに IPアドレス/ホスト名 を例外として追加しました</strong><br />≫ %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>ダウンロードリストに IPアドレス/ホスト名 を追加しました</strong><br />≫ %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>ダウンロードリストから IPアドレス/ホスト名 を削除しました</strong><br />≫ %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber エラー</strong><br />≫ %s',
	'LOG_ERROR_EMAIL'		=> '<strong>メールエラー</strong><br />≫ %s',
	
	'LOG_FORUM_ADD'							=> '<strong>フォーラムを作成しました</strong><br />≫ %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>フォーラムパーミッションをコピーしました</strong> from %1$s<br />≫ %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>フォーラムを削除しました</strong><br />≫ %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>フォーラムとそのサブフォーラムを削除しました</strong><br />≫ %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>フォーラムを削除しサブフォーラムを移動しました</strong><br />≫ %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>フォーラムを削除し、投稿記事を</strong> %1$s へ<strong>移動しました</strong><br />≫ %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>フォーラムとそのサブフォーラムを削除し、投稿記事を</strong> %1$s へ<strong>移動しました</strong><br />≫ %2$s',
	
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>フォーラムを削除し、投稿記事を</strong> %1$s へ<strong>移動し、サブフォーラムを</strong> %2$s へ<strong>移動しました</strong><br />≫ %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>フォーラムと投稿記事を削除しました</strong><br />≫ %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>フォーラムと投稿記事とサブフォーラムを削除しました</strong><br />≫ %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>フォーラムと投稿記事を削除し、サブフォーラムは</strong> %1$s へ<strong>移動しました</strong><br />≫ %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>フォーラム設定を編集しました</strong><br />≫ %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>フォーラム</strong> %1$s <strong>を</strong> %2$s <strong>の下に移動しました</strong>',
	'LOG_FORUM_MOVE_UP'						=> '<strong>フォーラム</strong> %1$s <strong>を</strong> %2$s <strong>の上に移動しました</strong>',
	'LOG_FORUM_SYNC'						=> '<strong>フォーラムを同期しました</strong><br />≫ %s',

	'LOG_GENERAL_ERROR'	=> '<strong>一般エラーが発生しました</strong>: %1$s <br />≫ %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>グループを作成しました</strong><br />≫ %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>グループ “%1$s” をデフォルトグループにしました</strong><br />≫ %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>グループを削除しました</strong><br />≫ %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>グループ</strong> %1$s <strong>のリーダーが解任されました</strong><br />≫ %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>グループ</strong> %1$s <strong>でリーダーが任命されました</strong><br />≫ %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>グループ</strong> %1$s <strong>からメンバーが除名されました<br />≫ %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>グループ設定を更新しました</strong><br />≫ %s',
	'LOG_MODS_ADDED'		=> '<strong>グループ</strong> %1$s <strong>で新しいリーダーを任命しました</strong><br />≫ %2$s',
	'LOG_USERS_ADDED'		=> '<strong>グループ</strong> %1$s <strong>にメンバーを追加しました<br />≫ %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>ユーザーがグループへの参加を承認されました</strong> %1$s<br />≫ %2$s',
	'LOG_USERS_PENDING'		=> '<strong>ユーザーがグループ “%1$s” へ参加を申請しました</strong><br />≫ %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>画像作成中にエラーが発生しました</strong><br />≫ Error in %1$s on line %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>データベースに新しいイメージセットを追加しました</strong><br />≫ %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>該当のディレクトリに新しいイメージセットをアップロードしてください</strong><br />≫ %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>イメージセットを削除しました</strong><br />≫ %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>イメージセット設定を編集しました</strong><br />≫ %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>イメージセットを編集しました</strong><br />≫ %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>イメージセットをエクスポートしました</strong><br />≫ %s',
 	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>イメージセット “%2$s” が見つかりませんでした</strong><br />≫ %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>イメージセット “%2$s” をリフレッシュしました</strong><br />≫ %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>イメージセットをリフレッシュしました</strong><br />≫ %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>アカウントを有効化しました</strong><br />≫ %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>無効アカウントを削除しました</strong><br />≫ %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>無効アカウントにアカウント有効化メールを送信しました</strong><br />≫ %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>%1$s から phpBB %2$s へデータコンバートしました</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s をインストールしました</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>IPアドレス/ブラウザ/X_FORWARDED_FOR によるセッションチェックが一致しませんでした</strong><br />≫ユーザーの IPアドレス “<em>%1$s</em>” をセッション IPアドレス “<em>%2$s</em>” でチェックし、ユーザーのブラウザ “<em>%3$s</em>” をセッションブラウザ “<em>%4$s</em>” でチェックし、ユーザーの X_FORWARDED_FOR “<em>%5$s</em>” はセッション X_FORWARDED_FOR “<em>%6$s</em>” でチェックしました',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber アカウントを変更しました</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber パスワードを変更しました</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber アカウントを登録しました</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber 設定を変更しました</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>言語パックを削除しました</strong><br />≫ %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>言語パックをインストールしました</strong><br />≫ %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>言語パックの設定を更新しました</strong><br />≫ %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>言語ファイルを置き換えました</strong><br />≫ %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>言語パックを保管フォルダに格納しました</strong><br />≫ %s',

	'LOG_MASS_EMAIL'		=> '<strong>大量メールを送信しました</strong><br />≫ %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>トピック “%1$s” の投稿者を変更しました</strong><br />≫ from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>モジュールを無効化しました</strong><br />≫ %s',
	'LOG_MODULE_ENABLE'		=> '<strong>モジュールを有効化しました</strong><br />≫ %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>モジュールを下に移動しました</strong><br />≫ %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>モジュールを上に移動しました</strong><br />≫ %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>モジュールを削除しました</strong><br />≫ %s',
	'LOG_MODULE_ADD'		=> '<strong>モジュールを追加しました</strong><br />≫ %s',
	'LOG_MODULE_EDIT'		=> '<strong>モジュールを編集しました</strong><br />≫ %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Adminパーミッションセット を追加しました</strong><br />≫ %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Adminパーミッションセット を変更しました</strong><br />≫ %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Adminパーミッションセット を削除しました</strong><br />≫ %s',
	'LOG_F_ROLE_ADD'		=> '<strong>フォーラムパーミッションセットを追加しました</strong><br />≫ %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>フォーラムパーミッションセットを変更しました</strong><br />≫ %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>フォーラムパーミッションセットを削除しました</strong><br />≫ %s',
	'LOG_M_ROLE_ADD'		=> '<strong>モデレータパーミッションセットを追加しました</strong><br />≫ %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>モデレータパーミッションセットを変更しました</strong><br />≫ %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>モデレータパーミッションセットを削除しました</strong><br />≫ %s',
	'LOG_U_ROLE_ADD'		=> '<strong>ユーザーパーミッションセットを追加しました</strong><br />≫ %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>ユーザーパーミッションセットを変更しました</strong><br />≫ %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>ユーザーパーミッションセットを削除しました</strong><br />≫ %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>プロフィールフィールドを有効化しました</strong><br />≫ %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>プロフィールフィールドを追加しました</strong><br />≫ %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>プロフィールフィールドを無効化しました</strong><br />≫ %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>プロフィールフィールドを変更しました</strong><br />≫ %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>プロフィールフィールドを削除しました</strong><br />≫ %s',

	'LOG_PRUNE'					=> '<strong>フォーラムをプルーニングしました</strong><br />≫ %s',
	'LOG_AUTO_PRUNE'			=> '<strong>フォーラムを自動プルーニングしました</strong><br />≫ %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>アカウントを停止しました（プルーニング）</strong><br />≫ %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>アカウントをプルーニングし、投稿記事を削除しました</strong><br />≫ %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>アカウントをプルーニングし、投稿記事をそのまま残しました</strong><br />≫ %s',

	'LOG_PURGE_CACHE'			=> '<strong>キャッシュを消去しました</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>セッションを消去しました</strong>',


	'LOG_RANK_ADDED'		=> '<strong>ランクを追加しました</strong><br />≫ %s',
	'LOG_RANK_REMOVED'		=> '<strong>ランクを削除しました</strong><br />≫ %s',
	'LOG_RANK_UPDATED'		=> '<strong>ランクを更新しました</strong><br />≫ %s',

	'LOG_REASON_ADDED'		=> '<strong>通報/却下 の理由を追加しました</strong><br />≫ %s',
	'LOG_REASON_REMOVED'	=> '<strong>通報/却下 の理由を削除しました</strong><br />≫ %s',
	'LOG_REASON_UPDATED'	=> '<strong>通報/却下 の理由を更新しました</strong><br />≫ %s',

	'LOG_REFERER_INVALID'		=> '<strong>不正なリファラを検出しました</strong><br />≫検出されたリファラは “<em>%1$s</em>” です。リファラが一致しなかったため、受信リクエストを破棄し、セッションを削除しました。',
	'LOG_RESET_DATE'			=> '<strong>掲示板開始日時をリセットしました</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>最大同時ユーザーオンライン数をリセットしました</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>記事数を同期しました</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>トピックの投稿マークを同期しました</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>統計データ（記事数、トピック数、ユーザー数）を同期しました</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>検索インデクスを作成しました</strong><br />≫for %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>検索インデクスを削除しました</strong><br />≫for %s',
	'LOG_STYLE_ADD'				=> '<strong>スタイルを追加しました</strong><br />≫ %s',
	'LOG_STYLE_DELETE'			=> '<strong>スタイルを削除しました</strong><br />≫ %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>スタイルを編集しました</strong><br />≫ %s',
	'LOG_STYLE_EXPORT'			=> '<strong>スタイルをエクスポートしました</strong><br />≫ %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>テンプレートセットをデータベースに追加しました</strong><br />≫ %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>テンプレートセットを該当のディレクトリにアップロードしてください</strong><br />≫ %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>テンプレートセット <em>%1$s</em> のキャッシュファイルを削除しました</strong><br />≫ %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>テンプレートセットを削除しました</strong><br />≫ %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>テンプレートセット <em>%1$s</em> を編集しました</strong><br />≫ %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>テンプレート設定を編集しました</strong><br />≫ %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>テンプレートセットをエクスポートしました</strong><br />≫ %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>テンプレートセットをリフレッシュしました</strong><br />≫ %s',

	'LOG_THEME_ADD_DB'			=> '<strong>新しいテーマをデータベースに追加しました</strong><br />≫ %s',
	'LOG_THEME_ADD_FS'			=> '<strong>新しいテーマを該当のディレクトリにアップロードしてください</strong><br />≫ %s',
	'LOG_THEME_DELETE'			=> '<strong>テーマを削除しました</strong><br />≫ %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>テーマ設定を編集しました</strong><br />≫ %s',
	'LOG_THEME_EDIT'			=> '<strong>テーマ <em>%1$s</em> を編集しました</strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>テーマ <em>%1$s</em> を編集しました</strong><br />≫ ハックファイル <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>テーマをエクスポートしました</strong><br />≫ %s',
	'LOG_THEME_REFRESHED'		=> '<strong>テーマをリフレッシュしました</strong><br />≫ %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>データベースをバージョン %1$s からバージョン %2$s へ更新しました</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB をバージョン %1$s からバージョン %2$s へ更新しました</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>アカウントを有効化しました</strong><br />≫ %s',
	'LOG_USER_BAN_USER'		=> '<strong>アクセス禁止リストに ユーザー名 を追加しました</strong> -理由- “<em>%1$s</em>” <br />≫ %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>アクセス禁止リストに IPアドレス を追加しました</strong> -理由- “<em>%1$s</em>” <br />≫ %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>アクセス禁止リストに メールアドレス を追加しました</strong> -理由- “<em>%1$s</em>” <br />≫ %2$s',
	'LOG_USER_DELETED'		=> '<strong>ユーザーを削除しました</strong><br />≫ %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>添付ファイルを削除しました</strong><br />≫ %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>アバターを削除しました</strong><br />≫ %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>送信ボックスを空にしました</strong><br />≫ %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>全投稿記事を削除しました</strong><br />≫ %s',
	'LOG_USER_DEL_SIG'		=> '<strong>サインを削除しました</strong><br />≫ %s',
	'LOG_USER_INACTIVE'		=> '<strong>アカウントを停止しました</strong><br />≫ %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>記事を移動しました</strong><br />≫ posts by “%1$s” to forum “%2$s” ',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>パスワードを変更しました</strong><br />≫ %s',
	'LOG_USER_REACTIVATE'	=> '<strong>アカウント有効化メールを送信しました</strong><br />≫ %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>ユーザーを一見さんから登録ユーザーに変更しました</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>ユーザー “%1$s” がメールアドレスを変更しました</strong><br />≫ from “%2$s” to “%3$s” ',
	'LOG_USER_UPDATE_NAME'	=> '<strong>ユーザー名を変更しました</strong><br />≫ from “%1$s” to “%2$s” ',
	'LOG_USER_USER_UPDATE'	=> '<strong>ユーザー設定を更新しました</strong><br />≫ %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>アカウントを有効化しました</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>アバターを削除しました</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>サインを削除しました</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>フィードバックを追加しました</strong><br />≫ %s',
	'LOG_USER_GENERAL'			=> '<strong>フィードバック:</strong><br />≫ %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>アカウントを停止しました</strong>',
	'LOG_USER_LOCK'				=> '<strong>自分のトピックを閉鎖しました</strong><br />≫ %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>フォーラムの全投稿記事を移動しました</strong>≫ %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>アカウント有効化メールを送信しました</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>自分のトピックを開放しました</strong><br />≫ %s',
	'LOG_USER_WARNING'			=> '<strong>警告しました</strong><br />≫ %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>警告しました</strong><br />≫ %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>デフォルトグループを変更しました</strong><br />≫ %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>グループからユーザーを除名しました</strong><br />≫ %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>グループに参加しました</strong><br />≫ %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>グループに参加しました（承認を必要としています）</strong><br />≫ %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>グループから脱退しました</strong><br />≫ %s',

	'LOG_WARNING_DELETED'		=> '<strong>ユーザーの警告を削除しました</strong><br />≫ %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>ユーザー %2$s 名の警告を削除しました</strong><br />≫ %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />≫ username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>全てのユーザーの警告を削除しました</strong><br />≫ %s',
	
	'LOG_WORD_ADD'			=> '<strong>言語フィルターを追加しました</strong><br />≫ %s',
	'LOG_WORD_DELETE'		=> '<strong>言語フィルターを削除しました</strong><br />≫ %s',
	'LOG_WORD_EDIT'			=> '<strong>言語フィルターを編集しました</strong><br />≫ %s',
));
?>