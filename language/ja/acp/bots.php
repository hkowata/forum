<?php
/**
*
* acp_bots [Japanese]
*
* @package language
* @version $Id: bots.php 8479 2008-03-29 00:22:48Z naderman $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'ボットの管理',
	'BOTS_EXPLAIN'		=> 'ボット、スパイダー、クローラー とは、ロボット型ウェブページ巡回プログラムの事であり、そのほとんどは検索エンジンのデータベースの更新を目的としています。これらがゲストとしてサイトにアクセスした場合、セッションをめったに正常に扱わないためオンラインユーザー数をおかしくしたり、一般ユーザーのページの読み込み時間を増大させたり、時には間違ったページをインデクス化してしまったりします。ここではこれらの問題に対処するため、どのユーザーエージェントまたは IPアドレス がボットなのかを指定できます。',
	'BOT_ACTIVATE'		=> '有効にする',
	'BOT_ACTIVE'		=> 'ボットを有効にする',
	'BOT_ADD'			=> 'ボットの追加',
	'BOT_ADDED'			=> 'ボットの追加に成功しました',
	'BOT_AGENT'			=> 'HTTPユーザーエージェント',
	'BOT_AGENT_EXPLAIN'	=> 'ボットの HTTPユーザーエージェント に部分的にマッチする文字列です',
	'BOT_DEACTIVATE'	=> '無効にする',
	'BOT_DELETED'		=> 'ボットの削除に成功しました',
	'BOT_EDIT'			=> '編集',
	'BOT_EDIT_EXPLAIN'	=> 'ここではボットの追加またはエントリー済みのボットの編集を行う事ができます。HTTPユーザーエージェント または複数 IPアドレス （範囲指定も可）を指定できます。ボットが閲覧した時の掲示板のスタイルと言語も指定できます。なるべくシンプルなスタイルを選択する事によってボットによる回線の混雑を緩和させる事ができるでしょう。パーミッション設定ページで適切なパーミッションを “ボット” グループに対して設定する事を忘れないでください。',
	'BOT_LANG'			=> '言語',
	'BOT_LANG_EXPLAIN'	=> 'ボットがどの言語で掲示板のページをインデクス化するかを指定できます',
	'BOT_LAST_VISIT'	=> '最近の訪問日時',
	'BOT_IP'			=> 'IPアドレス',
	'BOT_IP_EXPLAIN'	=> '部分一致としてワイルドカード(*)を使用できます。複数入力する場合はアドレスをコンマで区切ってください。',
	'BOT_NAME'			=> 'ボット名',
	'BOT_NAME_EXPLAIN'	=> 'ボットの名前を入力してください。他のボットと区別するために使われます。',
	'BOT_NAME_TAKEN'	=> 'その名前は既にユーザー名として使われているのでボット名には使えません',
	'BOT_NEVER'			=> '未訪問',
	'BOT_STYLE'			=> '掲示板のスタイル',
	'BOT_STYLE_EXPLAIN'	=> 'ボットが閲覧する掲示板のスタイルです',
	'BOT_UPDATED'		=> 'ボット情報の更新に成功しました',
	
	'ERR_BOT_AGENT_MATCHES_UA'	=> '指定した HTTPユーザーエージェント は現在使用しているものと被ります。被らない様に調節してください。',
	'ERR_BOT_NO_IP'				=> '指定した IPアドレス は正しくないかまたはホスト名が存在していません',
	'ERR_BOT_NO_MATCHES'		=> '少なくとも１つの HTTPユーザーエージェント または IPアドレス にマッチさせる必要があります',

	'NO_BOT'		=> '指定した ID を持つボットが見つかりませんでした',
	'NO_BOT_GROUP'	=> '特別グループ “ボット” が見つかりませんでした',
));

?>