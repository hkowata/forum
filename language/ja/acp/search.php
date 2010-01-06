<?php
/**
*
* acp_search [Japanese]
*
* @package language
* @version $Id: search.php 9438 2009-04-11 11:09:45Z acydburn $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'ここでは検索インデクスを管理できます。サーバの負担を少しでも軽くするため、利用していない方の検索バックエンドのインデクス情報は削除すべきです。検索設定を変更しても既に存在しているインデクス情報は影響を受けません。既存のインデクス情報に対して新しいインデクス設定ルールを反映するにはインデクスを再構築する必要があります。',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'ここでは検索バックエンドを指定できます（検索バックエンドとは記事のインデクス化処理と検索処理を行うエンジンの事です）。また、検索処理に制限を課す事によってサーバ負荷を軽くする事もできます。バックエンド共通の設定項目もありますが、バックエンド独自の設定項目もあります。
	<br /><br />
	<em>インデクス（index）化とは索引付けの事であり、具体的には記事が投稿された際に記事の件名と文章中に含まれるキーワードを抜き出してデータベースに保存する事を意味します。検索処理はデータベースに保存されたこのインデクス情報を基にして行われます。phpBB3 では検索バックエンドは Fulltext mysql と Fulltext native がはじめから用意されており、ここでどちらを利用するかを選択できます。デフォルトでは Fulltext native が選択されています。Fulltext mysql を使用するにはデータベースが MySQL である必要があります。</em>
	<br /><br />
	Fulltext mysql と Fulltext native ともに 英語・フランス語・ドイツ語 のようなラテン文字言語（単語と単語の間にスペースを挟む言語）には対応していますが、一方 日本語・タイ語・ハングルのような言語（単語と単語の間にスペースを挟まない言語）には対応していない点にご注意ください。phpBB3 のデータベースとして MySQL を使用している場合、MySQL が Senna 対応（Tritonn） であれば Fulltext mysql でも日本語文章をうまくインデクス化してくれる可能性はあります。そうでない場合、フォーラムに投稿される文章として日本語が主に使用されているのなら日本語に対応した検索バックエンドを使用すべきです。お使いの phpBB3 が www.phpbb.com 配布の純正版の場合、日本語に対応した検索バックエンドが含まれていないため日本語に対応した検索バックエンドを別途インストールする必要があるでしょう。',

	'COMMON_WORD_THRESHOLD'					=> 'コモンワード判定レベル',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'ある検索キーワードが全体の記事数に対してこのパーセンテージ（％）以上の記事数をヒットする場合、その検索キーワードは コモンワード（common word) とみなされ検索処理されません。コモンワードは検索クエリ（データベースへの問い合わせ）の際に無視されます。この機能が働くのは記事数が １００ を超えている場合のみです。もしこの機能を無効化したい場合は 0 を入力してください。コモンワード判定レベルを過去に投稿された記事に対して適用するにはインデクスを再構築する必要があります。',
	'CONFIRM_SEARCH_BACKEND'				=> '検索バックエンドを本当に変更してもよろしいですか？検索バックエンドを変更した後は新しい検索バックエンドで検索インデクスを再構築する必要があります。その際、以前の検索バックエンドに戻るつもりがないならサーバ負荷を少しでも軽くするため以前のバックエンドのインデクス情報は削除しておくべきです。',
	'CONTINUE_DELETING_INDEX'				=> '継続中のインデクス削除処理を再開する',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'インデクスの削除中です。“検索インデクス” ページへアクセスするには削除を完了させるかキャンセルする必要があります。',
	'CONTINUE_INDEXING'						=> '継続中のインデクス作成処理を再開する',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'インデクスの作成中です。“検索インデクス” ページへアクセスするには作成を完了させるかキャンセルする必要があります。',
	'CREATE_INDEX'							=> 'インデクス作成',

	'DELETE_INDEX'							=> 'インデクス削除',
	'DELETING_INDEX_IN_PROGRESS'			=> 'インデクス削除の処理中です',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '検索バックエンドは現在、インデクス情報を削除中です。処理が終わるには数分かかる事もあります。',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Fulltext mysql は MySQL4 以上で使用できます',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Fulltext mysql を使用するにはデータベースのテーブル形式が MyISAM である必要があります',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'インデクス済み記事数',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'latin 系キャラクタセット以外の UTF-8 文字の使用（mbstring によるサポート）:',
	'FULLTEXT_MYSQL_PCRE'					=> 'latin 系キャラクタセット以外の UTF-8 文字の使用（PCRE によるサポート）:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'もし PCRE（Perl互換正規表現） 関数 preg_match が UNICODEキャラクタプロパティ \p{Prop} を取り扱えない場合、latin 系キャラクタセット以外の UTF-8 文字（かな漢字）を検索する際、検索バックエンドは PHP拡張モジュール mbstring の正規表現関数 mb_ereg の使用を試みます',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'この検索バックエンドを使用するに当たって、latin 系キャラクタセット以外の UTF-8 文字（かな漢字）を検索するには、PCRE（Perl互換正規表現） 関数 preg_match が UNICODEキャラクタプロパティ \p{Prop} を取り扱える必要があります。PHP は 4.4 か 5.1 以上である必要があります。',

	'GENERAL_SEARCH_SETTINGS'				=> '検索バックエンド共通設定',
	'GO_TO_SEARCH_INDEX'					=> '“検索インデクス” ページへ移動',

	'INDEX_STATS'							=> 'インデクス統計',
	'INDEXING_IN_PROGRESS'					=> 'インデクス作成中',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '検索バックエンドは現在、掲示板の全投稿記事をインデクス化しています。記事数によっては数分から数時間かかる事もあります',

	'LIMIT_SEARCH_LOAD'						=> 'サーバCPU使用率の制限',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '検索処理で CPU 使用率がこの値を超えた時、掲示板は自動的にオフライン状態に移行します。0 から 1.0 の範囲の数字を入力してください。 1.0 は CPU 使用率 100 ％を意味します。この機能は UNIX 系サーバにのみ効果があります。',

	'MAX_SEARCH_CHARS'						=> 'インデクスの最大文字数',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'この数を超える字数のキーワードはインデクスの対象となりません',
	'MAX_NUM_SEARCH_KEYWORDS'				=> '検索キーワードの最大数',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> '同時に検索できるキーワードの最大数です。0 にすると上限はありません。',
	'MIN_SEARCH_CHARS'						=> 'インデクスの最小文字数',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'この数より小さい字数のキーワードはインデクスの対象となりません',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '投稿者名の最小文字数',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'ワイルドカード(*)を用いて投稿者検索をする際、この数以上の文字を入力する必要があります。もしこの数より小さい文字数の投稿者がいた場合、その投稿者の完全なユーザー名を入力する必要があります。',

	'PROGRESS_BAR'							=> '進行状況',

	'SEARCH_GUEST_INTERVAL'					=> 'ゲストに対する連続検索制限',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'ゲストが連続して検索する際、検索と検索の間にインターバルとして挟む必要がある秒数です。個々のゲストに対してチェックされます。この機能を無効にしたい場合は 0 を入力してください。',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> '記事ID %1$d までのインデクス化が完了しています。このステップで %2$d 個の投稿記事をインデクス化しました。<br />現在のインデクス化速度はおよそ１秒間に %3$.1f 個です。<br />インデクス化はまだ進行中です…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> '記事ID %1$d までのインデクス情報を削除しました。<br />インデクス情報の削除はまだ進行中です…',
	'SEARCH_INDEX_CREATED'					=> 'インデクス情報の作成に成功しました',
	'SEARCH_INDEX_REMOVED'					=> 'インデクス情報の削除に成功しました',
	'SEARCH_INTERVAL'						=> '登録ユーザーに対する連続検索制限',
	'SEARCH_INTERVAL_EXPLAIN'				=> '登録ユーザーが連続して検索する際、検索と検索の間にインターバルとして挟む必要がある秒数です。個々の登録ユーザーに対してチェックされます。この機能を無効にしたい場合は 0 を入力してください。',
	'SEARCH_STORE_RESULTS'					=> '検索結果のキャッシュの有効期間',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'この秒数が過ぎると検索結果のキャッシュ情報は破棄されます。0 に設定した場合、検索結果はキャッシュされません。',
	'SEARCH_TYPE'							=> '検索バックエンド',
	'SEARCH_TYPE_EXPLAIN'					=> '記事のインデクス化処理と検索処理を行うエンジンを選択します。デフォルトでは Fulltext native をエンジンとして利用します。',
	'SWITCHED_SEARCH_BACKEND'				=> '検索バックエンドを変更しました。投稿記事を検索するには、検索バックエンドの検索インデクスが作成されている必要があります。',

	'TOTAL_WORDS'							=> 'インデクス化されたキーワードの総数',
	'TOTAL_MATCHES'							=> 'インデクス化されたキーワードとマッチする投稿記事の のべ総数',

	'YES_SEARCH'							=> '検索機能を有効にする',
	'YES_SEARCH_EXPLAIN'					=> '記事検索機能とメンバー検索機能を有効にします',
	'YES_SEARCH_UPDATE'						=> 'インデクス化を強制する',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '検索機能が無効に設定されている状況で記事が投稿された場合、その投稿記事を強制的にインデクス化します',
));

?>