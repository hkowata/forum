<?php
/**
*
* acp_forums [Japanese]
*
* @package language
* @version $Id: forums.php 9309 2009-01-27 19:16:29Z terrafrost $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'トピックの返信寿命',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'トピックが生存し続ける、最終返信日からの日数です。この日数が経ってもトピックに返信が無かった場合、そのトピックはプルーニングされます。',
	'AUTO_PRUNE_FREQ'			=> '自動プルーニングの頻度',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'この日数が経つ毎にトピックのプルーニング（一括削除）が実行されます',
	'AUTO_PRUNE_VIEWED'			=> 'トピックの閲覧寿命',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'トピックが生存し続ける、最終閲覧日からの日数です。この日数が経ってもトピックが閲覧されなかった場合、そのトピックはプルーニングされます。',

	'COPY_PERMISSIONS'				=> 'パーミッションのコピー ',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'フォーラムを選択した場合、選択したフォーラムと同じパーミッションがこのフォーラムに与えられます。フォーラムを選択しなかった場合、パーミッションが与えられるまでこのフォーラムは誰にも表示されない点に注意してください。',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'パーミッションをコピーした場合、選択したフォーラムと同じパーミッションがこのフォーラムに与えられます。現在のパーミッションは破棄され、かわりに選択したフォーラムのパーミッションに上書きされます。フォーラムを選択しなかった場合、現在のパーミッションが保持されます。',
	'CREATE_FORUM'					=> 'フォーラムの作成',

	'DECIDE_MOVE_DELETE_CONTENT'		=> '投稿記事を 削除する/別のフォーラムへ移動 する',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'サブフォーラムを 削除する/別のフォーラムへ移動 する',
	'DEFAULT_STYLE'						=> 'デフォルトスタイル',
	'DELETE_ALL_POSTS'					=> '記事を削除する',
	'DELETE_SUBFORUMS'					=> 'サブフォーラムと記事を全て削除する',
	'DISPLAY_ACTIVE_TOPICS'				=> '活発なトピックを表示する',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> ' “はい” にした場合、サブフォーラム内のトピックがこのカテゴリで表示されます。ただしサブフォーラムにおいても “活発なトピックを表示する” を “はい” にしている必要があります。',

	'EDIT_FORUM'					=> 'フォーラムの編集',
	'ENABLE_INDEXING'				=> '検索インデックスを有効にする',
	'ENABLE_INDEXING_EXPLAIN'		=> ' “はい” にした場合、投稿した記事はインデックス化され検索されるようになります',
	'ENABLE_POST_REVIEW'			=> '投稿プレビューを有効にする',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> ' “はい” にした場合、投稿ページで編集中の記事をプレビューできます。チャットフォーラムでは無効に設定すべきです。',
	'ENABLE_RECENT'					=> '活発なトピックを表示する',
	'ENABLE_RECENT_EXPLAIN'			=> ' “はい” にした場合、このフォーラムで投稿されたトピックは親フォーラム（カテゴリ）においても表示されます。ただしカテゴリにおいても “活発なトピックを表示する” を “はい” にしている必要があります。',
	'ENABLE_TOPIC_ICONS'			=> 'トピックアイコンを有効にする',

	'FORUM_ADMIN'						=> 'フォーラム管理',
	'FORUM_ADMIN_EXPLAIN'				=> 'phpBB3 のシステムを構成する基本的な概念は “フォーラム” であり “カテゴリ” ではありません。いかなるフォーラムも無限に（サブ）フォーラムを持つことが可能であり、それらフォーラム個々についてフォーラムタイプをカテゴリ、フォーラム、リンクのどれかから指定する必要があります。ここではフォーラムの追加、編集、削除、閉鎖、閉鎖解除などを実行できます。もしフォーラムのトピック数、投稿数、トピックの返信数、閲覧数がトピックの削除などによって正確なカウント数でなくなっている場合、同期を実行する事によってカウント数を正確にする事が可能です。<strong>新しく作成したフォーラムを掲示板トップページに表示させるには、他のフォーラムからパーミッションをコピーするかパーミッションを適切に設定する必要があります。</strong>',
	'FORUM_AUTO_PRUNE'					=> '自動プルーニングを有効にする',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'フォーラム内のトピックを自動的にプルーニングします。下記の 頻度/寿命 パラメータを設定してください。',
	'FORUM_CREATED'						=> 'フォーラムの作成に成功しました',
	'FORUM_DATA_NEGATIVE'				=> 'プルーニングパラメータをマイナスにはできません',
	'FORUM_DESC_TOO_LONG'				=> 'フォーラム説明が長すぎます。４０００ 字以内にしてください。',
	'FORUM_DELETE'						=> 'フォーラムの削除',
	'FORUM_DELETE_EXPLAIN'				=> 'ここではフォーラムの削除を実行できます。投稿可能なフォーラムの場合、そのフォーラムの全トピック（または全サブフォーラム）を他のフォーラムに移動できます。',
	'FORUM_DELETED'						=> 'フォーラムの削除に成功しました',
	'FORUM_DESC'						=> 'フォーラム説明',
	'FORUM_DESC_EXPLAIN'				=> 'HTML 言語を使用できます',
	'FORUM_EDIT_EXPLAIN'				=> 'ここではフォーラムをカスタマイズできます。このフォーラムの各機能へのユーザーまたはグループによるアクセスをコントロールするには、フォーラムパーミッションページへ行きそこでフォーラムパーミッションを設定する必要があります。',
	'FORUM_IMAGE'						=> 'フォーラム画像',
	'FORUM_IMAGE_EXPLAIN'				=> '画像ファイルへのパスを phpBB ルートディレクトリからの相対パスで指定してください。フォーラム内容を連想させるような画像が良いでしょう。',
	'FORUM_IMAGE_NO_EXIST'				=> '指定されたフォーラム画像が存在していません',
	'FORUM_LINK_EXPLAIN'				=> 'リンクを 絶対URL （プロトコルを含めてください。つまり <samp>http://</samp>）で指定してください。例： <samp>http://www.phpbb.com/</samp>',
	'FORUM_LINK_TRACK'					=> 'リンククリック数の追跡',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'フォーラムリンクが何回クリックされたかを記録します',
	'FORUM_NAME'						=> 'フォーラム名',
	'FORUM_NAME_EMPTY'					=> 'フォーラムの名前を入力してください',
	'FORUM_PARENT'						=> '親フォーラム',
	'FORUM_PASSWORD'					=> 'フォーラムパスワード',
	'FORUM_PASSWORD_CONFIRM'			=> 'フォーラムパスワード（確認）',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> '“フォーラムパスワード” を入力している場合のみ入力してください',
	'FORUM_PASSWORD_EXPLAIN'			=> 'このフォーラムへ入室するためのパスワードを設定できますが、できればパーミッションの使用を優先してください',
	'FORUM_PASSWORD_UNSET'				=> 'フォーラムパスワードの解除',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'フォーラムパスワードを解除する場合はチェックしてください',
	'FORUM_PASSWORD_OLD'				=> '現在使用中のフォーラムパスワードは古い暗号化アルゴリズムで暗号化されているため、フォーラムパスワードを今すぐ変更すべきです',
	'FORUM_PASSWORD_MISMATCH'			=> '入力した パスワード が不一致です',
	'FORUM_PRUNE_SETTINGS'				=> 'フォーラムのプルーニング設定',
	'FORUM_RESYNCED'					=> 'フォーラム “%s” の同期に成功しました',
	'FORUM_RULES_EXPLAIN'				=> 'フォーラムルールはフォーラム内のいかなるページにも表示されます',
	'FORUM_RULES_LINK'					=> 'フォーラムルールへのリンク',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'フォーラムルールを記したページまたは投稿記事への URL を入力できます。入力すると下の “フォーラムルール” オプションが無効になります。',
	'FORUM_RULES_PREVIEW'				=> 'フォーラムルールプレビュー',
	'FORUM_RULES_TOO_LONG'				=> 'フォーラムルールは ４０００ 字以内にしてください',
	'FORUM_SETTINGS'					=> 'フォーラム設定',
	'FORUM_STATUS'						=> 'フォーラムの閉鎖',
	'FORUM_STYLE'						=> 'フォーラムの使用スタイル',
	'FORUM_TOPICS_PAGE'					=> '１ページあたりの表示トピック数',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> '0 でない場合、デフォルト設定を上書きします',
	'FORUM_TYPE'						=> 'フォーラムタイプ',
	'FORUM_UPDATED'						=> 'フォーラム情報の更新に成功しました',

 	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'サブフォーラムを持つフォーラムのフォーラムタイプを “リンク” に変更しようとしています。全てのサブフォーラムを別のフォーラムに移動させてください。そうしないとサブフォーラムは全て削除されるでしょう。',

	'GENERAL_FORUM_SETTINGS'	=> 'フォーラムの一般設定',

	'LINK'					=> 'リンク',
	'LIST_INDEX'				=> '親フォーラムのフォーラム説明の下にフォーラムリンクを表示する',
	'LIST_INDEX_EXPLAIN'		=> 'このフォーラムへのリンクを親フォーラムのフォーラム説明の下に表示します。親フォーラムでオプション “フォーラム説明の下にサブフォーラムリンクを表示する” が “はい” に設定されている必要があります。',
	'LIST_SUBFORUMS'			=> 'フォーラム説明の下にサブフォーラムリンクを表示する',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'サブフォーラムへのリンクをこのフォーラムのフォーラム説明の下に表示します。サブフォーラムでオプション “親フォーラムのフォーラム説明の下にフォーラムリンクを表示する” が “はい” に設定されている必要があります。',
	'LOCKED'				=> '閉鎖 [ 投稿禁止 ]',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> '指定したフォーラムは投稿可能なフォーラムではありません。“カテゴリ” または “リンク” です。投稿可能なフォーラムを選択してください。',
	'MOVE_POSTS_TO'					=> '記事を移動する',
	'MOVE_SUBFORUMS_TO'				=> 'サブフォーラムを移動する',

	'NO_DESTINATION_FORUM'			=> '記事の移動先フォーラムを指定していません',
	'NO_FORUM_ACTION'				=> 'アクションが指定されなかったのでフォーラムの記事に対して何も起こりませんでした',
	'NO_PARENT'						=> '親フォーラムなし',
	'NO_PERMISSIONS'				=> 'パーミッションをコピーしない',
	'NO_PERMISSION_FORUM_ADD'		=> 'パーミッションが与えられていないため、フォーラムを追加できません',
	'NO_PERMISSION_FORUM_DELETE'	=> 'パーミッションが与えられていないため、フォーラムを削除できません',

	'PARENT_IS_LINK_FORUM'		=> '親フォーラムとして指定したフォーラムのフォーラムタイプは “リンク” です。“リンク” フォーラムはサブフォーラムを持つ事ができません。“カテゴリ” フォーラムか “フォーラム” フォーラムを指定してください。',
	'PARENT_NOT_EXIST'			=> '親フォーラムが存在しません',
	'PRUNE_ANNOUNCEMENTS'		=> '告知トピックをプルーニングする',
	'PRUNE_STICKY'				=> '注目トピックをプルーニングする',
	'PRUNE_OLD_POLLS'			=> '投票トピックをプルーニングする',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> '返信寿命が過ぎても投票されなかった投票トピックを削除します',

	'REDIRECT_ACL'	=> 'このフォーラムに対して%sパーミッションの設定%sを行う事が可能です',

	'SYNC_IN_PROGRESS'			=> 'フォーラムの同期を実行中',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> '現在全トピックの %1$d/%2$d を同期済みです',

	'TYPE_CAT'			=> 'カテゴリ',
	'TYPE_FORUM'		=> 'フォーラム',
	'TYPE_LINK'			=> 'リンク',

	'UNLOCKED'			=> '閉鎖解除',
));

?>