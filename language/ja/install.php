<?php
/**
*
* install [Japanese]
*
* @package language
* @version $Id: install.php 10101 2009-09-04 14:49:41Z acydburn $
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
	'ADMIN_CONFIG'				=> '管理人設定',
	'ADMIN_PASSWORD'			=> '管理人のパスワード',
	'ADMIN_PASSWORD_CONFIRM'	=> '管理人のパスワード（確認）',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'パスワードは 6 字以上 30 字以下にする必要があります',
	'ADMIN_TEST'				=> '管理人設定のチェック',
	'ADMIN_USERNAME'			=> '管理人のユーザー名',
	'ADMIN_USERNAME_EXPLAIN'	=> 'ユーザー名は 3 字以上 20 字以下にする必要があります',
	'APP_MAGICK'				=> 'ImageMagick のサポート [ 添付画像 ]',
	'AUTHOR_NOTES'				=> 'コンバータ開発者からの注意<br />≫ %s',
	'AVAILABLE'					=> '利用できます',
	'AVAILABLE_CONVERTORS'		=> '利用できるコンバータ',

	'BEGIN_CONVERT'					=> 'データコンバート開始',
	'BLANK_PREFIX_FOUND'			=> 'データベース内の phpBB2テーブル をスキャンしたところ、phpBB2テーブル の接頭語が見当たりませんでした',
	'BOARD_NOT_INSTALLED'			=> 'phpBB3 がインストールされていません（ファイル config.php が存在していないか内容に欠陥があります）',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBBコンバータフレームワーク を使用するには phpBB3 を先にインストールしておく必要があります。今まで利用していた掲示板システムのデータを phpBB3 へコンバートするには、先に<a href="%s"> phpBB3 のインストール</a>を完了してください。',

	'CATEGORY'					=> 'カテゴリ',
	'CACHE_STORE'				=> 'キャッシュの保存場所',
	'CACHE_STORE_EXPLAIN'		=> 'データがキャッシュされる保存場所です。推奨はファイルシステムです。',
	'CAT_CONVERT'				=> 'データコンバート',
	'CAT_INSTALL'				=> 'インストール',
	'CAT_OVERVIEW'				=> '概要',
	'CAT_UPDATE'				=> 'アップデート',
	'CHANGE'					=> '変更',
	'CHECK_TABLE_PREFIX'		=> 'テーブル接頭語を確認し、もう一度試してみてください',
	'CLEAN_VERIFY'				=> '最終段階におけるデータ構築の確認とクリーニング',
	'CLEANING_USERNAMES'		=> 'ユーザー名をクリーニング中',
	'COLLIDING_CLEAN_USERNAME'	=> 'クリーニングされたユーザー名 <strong>%s</strong> for:',
	'COLLIDING_USERNAMES_FOUND'	=> '旧掲示板システムのデータ内に、データをコンバートすると（データをクリーニングすると）衝突してしまうユーザー名が存在します。データコンバートする前にそれら衝突するユーザーを削除するかリネームしてユーザー名が衝突しないようにしてください。',
	'COLLIDING_USER'			=> '≫ ユーザーID: <strong>%d</strong> ユーザー名: <strong>%s</strong> （投稿数 %d）',
	'CONFIG_CONVERT'			=> 'コンフィグファイルのデータコンバート',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'コンフィグファイル config.php にデータを書き込めませんでした。コンフィグファイルを手動で作成する必要があります。下記の手順に従ってコンフィグファイルを作成してください。',
	'CONFIG_FILE_WRITTEN'		=> 'コンフィグファイル config.php にデータを書き込みました。次のステップへ進んでインストールを続行してください',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 のコンフィグ変数 “%s” が空です',
	'CONFIG_RETRY'				=> '再実行',
	'CONTACT_EMAIL_CONFIRM'		=> '連絡先メールアドレス（確認）',
	'CONTINUE_CONVERT'			=> 'データコンバート続行',
	'CONTINUE_CONVERT_BODY'		=> '以前に開始されてそのままになっているデータコンバートを検出しました。データコンバートを最初からやり直すか、以前に開始されたデータコンバートを再開するかを選択してください。',
	'CONTINUE_LAST'				=> '次のステップへ',
	'CONTINUE_OLD_CONVERSION'	=> '以前に開始されたデータコンバートを再開する',
	'CONVERT'					=> 'データコンバート',
	'CONVERT_COMPLETE'			=> 'データコンバート完了',
	'CONVERT_COMPLETE_EXPLAIN'	=> '旧掲示板システムのデータは新掲示板 phpBB 3.0 へコンバートされました。新掲示板にログインするには<a href="../">こちら</a>をクリックしてください。旧掲示板システムの基本設定が新掲示板にきちんと移転・反映されているかをご確認ください。もし問題がなければ、install ディレクトリを削除することによって一般ユーザーが新掲示板にアクセスできるようになります。',
	'CONVERT_INTRO'				=> 'phpBBコンバータフレームワーク へようこそ',
	'CONVERT_INTRO_BODY'		=> 'ここではあなたが今まで使用していた掲示板システムのデータを phpBB3 へコンバートできます。あなたが使用していた掲示板ソフトウェア用のコンバータがもしリストにない場合、お望みのコンバータが存在しているかどうかを phpBB Group 公式サイトを訪れてチェックしてみてください。もしかするとお望みのコンバータがダウンロード可能になっているかもしれません。',
	'CONVERT_NEW_CONVERSION'	=> '新しくデータコンバートを開始する',
	'CONVERT_NOT_EXIST'			=> 'コンバータが存在していません',
	'CONVERT_OPTIONS'			=> 'オプション',
	'CONVERT_SETTINGS_VERIFIED'	=> '入力情報が正しい事を確認しました。データコンバートを開始するには下のボタンをクリックしてください。',
	'CONV_ERR_FATAL'				=> '致命的なデータコンバートエラー',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> '旧掲示板システムで FTP アップロードによるファイル添付が許可されています。旧掲示板システムの FTP アップロードオプションを無効に設定してください。そして旧掲示板システムにおけるアップロード先ディレクトリを正しく設定し、FTPサーバ に置かれている全アップロードファイルをそのディレクトリへコピーしてください。コピーが完了し次第、データコンバートを再開してください。',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'コンバート可能なコンフィグ情報はありません',
	'CONV_ERROR_FORUM_ACCESS'			=> 'フォーラムのアクセス情報を取得できませんでした',
	'CONV_ERROR_GET_CATEGORIES'			=> 'カテゴリ情報を取得できませんでした',
	'CONV_ERROR_GET_CONFIG'				=> '旧掲示板システムのコンフィグ情報を取得できませんでした',
	'CONV_ERROR_COULD_NOT_READ'			=> '“%s” へのアクセスまたは読み込みに失敗しました',
	'CONV_ERROR_GROUP_ACCESS'			=> 'グループのアクセス権情報を取得できませんでした',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> '関数 add_bots() を実行中、グループテーブル内のデータに不一致が見られました。手動でグループを追加する場合、特別グループを全て追加する必要があります。',
	'CONV_ERROR_INSERT_BOT'				=> 'テーブル users にボットを追加できませんでした',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'テーブル bots にボットを追加できませんでした',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'テーブル user_group にユーザーを追加できませんでした',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'メッセージパースエラー',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '開発者への注意: %s を使用するには $convertor[\'avatar_path\'] を指定する必要があります',
	'CONV_ERROR_NO_FORUM_PATH'			=> '新掲示板ルートディレクトリへの相対パスが指定されていません',
	'CONV_ERROR_NO_GALLERY_PATH'		=> '開発者への注意: %s を使用するには $convertor[\'avatar_gallery_path\'] を指定する必要があります',
	'CONV_ERROR_NO_GROUP'				=> '%2$s でグループ “%1$s” を見つけられませんでした',
	'CONV_ERROR_NO_RANKS_PATH'			=> '開発者への注意: %s を使用するには $convertor[\'ranks_path\'] を指定する必要があります',
	'CONV_ERROR_NO_SMILIES_PATH'		=> '開発者への注意: %s を使用するには $convertor[\'smilies_path\'] を指定する必要があります',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '開発者への注意: %s を使用するには $convertor[\'upload_path\'] を指定する必要があります',
	'CONV_ERROR_PERM_SETTING'			=> 'パーミッション設定を 追加/更新 できませんでした',
	'CONV_ERROR_PM_COUNT'				=> 'Unable to select folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> '旧カテゴリを新フォーラムに置き換えて追加することに失敗しました',
	'CONV_ERROR_REPLACE_FORUM'			=> '旧フォーラムを新フォーラムに置き換えて追加することに失敗しました',
	'CONV_ERROR_USER_ACCESS'			=> 'ユーザーのアクセス権情報を取得できませんでした',
	'CONV_ERROR_WRONG_GROUP'			=> '不正なグループ “%1$s” が %2$s で定義されています',
	'CONV_OPTIONS_BODY'					=> 'フォームに既に入力されている情報は当 phpBB3（以下 “新掲示板”） のデータベース情報です。もし新掲示板のデータベースと旧掲示板システムのデータベースが異なる場合、入力されている情報を旧掲示板システムのデータベース情報に変更してください。コンバータはここで指定されたデータベース内のテーブルと格納データを一切変更しません。コンバータが途中で中断されないよう、旧掲示板を使用不可にしておくべきです。',
	'CONV_SAVED_MESSAGES'				=> '保存メッセージ',

	'COULD_NOT_COPY'			=> 'ファイル <strong>%1$s</strong> を <strong>%2$s</strong> にコピーできませんでした。<br /><br />ディレクトリの存在とアクセス権を確認してください。',
	'COULD_NOT_FIND_PATH'		=> '入力した “旧掲示板システムへのパス” にディレクトリが見つかりませんでした。設定をチェックして再度実行してください。<br />≫ 入力した “旧掲示板システムへのパス” は %s です。',

	'DBMS'						=> 'データベースの種類',
	'DB_CONFIG'					=> 'データベースの環境設定',
	'DB_CONNECTION'				=> 'データベースへの接続',
	'DB_ERR_INSERT'				=> 'クエリ <code>INSERT</code> の実行中にエラーが発生しました',
	'DB_ERR_LAST'				=> '<var>query_last</var> の実行中にエラーが発生しました',
	'DB_ERR_QUERY_FIRST'		=> '<var>query_first</var> の実行中にエラーが発生しました',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '<var>query_first</var> の実行中にエラーが発生しました, %s ( “%s” )',
	'DB_ERR_SELECT'				=> 'クエリ <code>SELECT</code> の実行中にエラーが発生しました',
	'DB_HOST'					=> 'データベースサーバのホスト名 または DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN とは Data Source Name のことです。サーバが ODBC を採用している - DSN を提供している - 場合のみ DSN を入力してください。',
	'DB_NAME'					=> 'データベースの名前',
	'DB_PASSWORD'				=> 'データベースのパスワード',
	'DB_PORT'					=> 'データベースサーバのポート番号',
	'DB_PORT_EXPLAIN'			=> '非標準ポートを使用している場合のみ入力してください',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'このアップデートスクリプトは “%1$s” より古いバージョンの phpBB には対応していません。現在お使いの phpBB のバージョンは “%1$s” です。このアップデートスクリプトを利用するには先に phpBB を、このアップデートスクリプトが対応するバージョンまでアップデートする必要があります。何か分からない事があれば phpBB.com の Support Forum で質問してください。',
	'DB_USERNAME'				=> 'データベースのユーザー名',
	'DB_TEST'					=> '接続テスト',
	'DEFAULT_LANG'				=> '掲示板のデフォルト言語',
	'DEFAULT_PREFIX_IS'			=> '指定のデータベース内に指定された接頭語をもつテーブルが見つかりませんでした。旧掲示板システムのデータベース情報が正確に入力されているかどうかをご確認ください。旧掲示板システム %1$s におけるデフォルト接頭語は <strong>%2$s</strong> です。',
	'DEV_NO_TEST_FILE'			=> 'コンバータプログラム内で変数 $test_file に値が設定されていません。あなたがコンバータ利用者である場合このエラーはあなたに表示されないはずですが、もし表示されている場合はこのメッセージをコンバータ開発者に報告して頂きますようお願いします。あなたがコンバータ開発者である場合、コンバータ利用者が入力したパスが正確であるかどうかテストするため、旧掲示板システム内に存在するファイル名を変数 $test_file に文字列として与えなければいけません。',
	'DIRECTORIES_AND_FILES'		=> 'ディレクトリとファイルの設定',
	'DISABLE_KEYS'				=> '（データベーステーブルの）キーの無効化',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'FTP 拡張モジュールのサポート [ 自動インストール &amp; 自動アップデート ]',
	'DLL_GD'					=> 'GD 拡張モジュールのサポート [ CAPTCHA ]',
	'DLL_MBSTRING'				=> 'マルチバイト文字のサポート',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML 拡張モジュールのサポート [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib圧縮 拡張モジュールのサポート [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'コンフィグファイルのダウンロード',
	'DL_CONFIG_EXPLAIN'			=> 'コンフィグファイル config.php をご自分の PC にダウンロードできます。ダウンロードした config.php ファイルを phpBB3 ルートディレクトリに上書きアップロードしてください。アップロードする時、アスキーモードでアップロードしてください（やり方がわからない場合、お使いの FTPアプリケーション のドキュメントをご参照ください）。アップロードが完了したら “完了” ボタンをクリックして次のステップへ進んでください。',
	'DL_DOWNLOAD'				=> 'ダウンロード',
	'DONE'						=> '完了',

	'ENABLE_KEYS'				=> '（データベーステーブルの）キーを有効にします。しばらく時間がかかります。',

	'FILES_OPTIONAL'			=> 'ファイルとディレクトリ [ オプション ]',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>オプション</strong> - これらファイルまたはディレクトリの存在と、それらに対する書き込み権は必ずしも必要というわけではありません。インストールシステムはこれらの条件を満たさない場合でも機能するように設計されています。しかしこれらの条件を満たしている方がインストールは早く終わるでしょう。',
	'FILES_REQUIRED'			=> 'ファイルとディレクトリ [ 必須 ]',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>必須</strong> - phpBB3 を正常に機能させるには重要なファイルとディレクトリに対してきちんとアクセスできる必要があります。もし “見つかりません” と表示されている場合、該当のファイルまたはディレクトリを手動で作成してください。もし “書き込めません” と表示されている場合、該当のファイルまたはディレクトリのアクセス権を手動で変更し、phpBB3 がそのファイルまたはディレクトリに対して書き込みできるようにしてください。',
	'FILLING_TABLE'				=> 'テーブル <strong>%s</strong> へデータ挿入',
	'FILLING_TABLES'			=> 'テーブルへデータ挿入',

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> '2.1 より古いバージョンの Firebird/Interbase はもはやサポート外です。phpBB をアップデートするには先に Firebird を 2.1.0 以上にアップデートする必要があります。',

	'FINAL_STEP'				=> '最終ステップの処理',
	'FORUM_ADDRESS'				=> '旧掲示板システムのアドレス',
	'FORUM_ADDRESS_EXPLAIN'		=> '旧掲示板システムの URL です。例: <samp>http://www.example.com/phpBB2/</samp>。アドレスが入力された場合、旧掲示板システムの記事、プライベートメッセージ、サイン内でこのアドレスが使用されている箇所はデータコンバートされた際に全て新掲示板のアドレスに置き換えられます。',
	'FORUM_PATH'				=> '旧掲示板へのパス',
	'FORUM_PATH_EXPLAIN'		=> '<strong>phpBB3 ルートディレクトリ</strong>から旧掲示板システムへの<strong>相対</strong>パスです。',
	'FOUND'						=> '見つかりました',
	'FTP_CONFIG'				=> 'FTP でコンフィグファイルを転送する',
	'FTP_CONFIG_EXPLAIN'		=> 'FTP 拡張モジュールを検出しました。もしお望みなら PHP の FTP 拡張モジュール関数を使って config.php をサーバへアップロードできます。その場合、下のフォームに FTP 情報を入力する必要があります。ユーザー名とパスワードはサーバのアカウント情報であることにご注意ください（判らない場合はサーバ管理者にお問い合わせください）。',
	'FTP_PATH'					=> 'FTP パス',
	'FTP_PATH_EXPLAIN'			=> 'サーバルートディレクトリから phpBB3 へのパスです。例: <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'アップロード',

	'GPL'						=> 'GPL (General Public License)',

	'INITIAL_CONFIG'			=> '基本設定',
	'INITIAL_CONFIG_EXPLAIN'	=> 'このサーバで phpBB が動作するということが判明したので、動作に必要な情報をいくつか入力する必要があります。もしデータベースに接続するための情報が分からない場合、まず最初にサーバ管理者にお問い合わせください。それでも解決しない場合、phpBB サポートフォーラムをご利用ください。データの入力が完了したら、入力したデータが正確であることを確認してから次のステップへ進んでください。',
	'INSTALL_CONGRATS'			=> 'おめでとうございます！',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		phpBB %1$s のインストールに成功しました。新しくインストールした phpBB3 を今すぐ使用するか、他の掲示板システムのデータをコンバートして使用するかを選択できます:</p>
		<h2>今まで使っていた掲示板システムから phpBB へコンバートする</h2>
		<p>phpBBコンバータフレームワーク は phpBB 2.0.x または他の掲示板システムから phpBB3 へのデータコンバートを統合的にサポートします。あなたの旧掲示板システムのデータを phpBB3 へコンバートするには、<a href="%2$s">コンバータ選択ページ</a>をクリックしてください。</p>
		<h2>phpBB3 を今すぐ使用します！</h2>
		<p>下のボタンをクリックすれば Administration Control Panel (AdminCP) へ入室できます。そこで phpBB3 がどのような機能を備えているか確認すると良いでしょう。ヘルプ情報はこちらをご覧ください： <a href="http://www.phpbb.com/support/documentation/3.0/">Documentation</a>, <a href="%3$s">README</a>, <a href="http://www.phpbb.com/community/viewforum.php?f=46">Support Forums</a>。</p><p><strong>install ディレクトリを削除すれば一般ユーザーが掲示板にアクセスできるようになります。install ディレクトリがそのままの状態で存在している間は AdminCP ページのみしかアクセスすることはできません。</strong></p>',
	'INSTALL_INTRO'				=> 'phpBB3 のインストールへようこそ',
 
	'INSTALL_INTRO_BODY'		=> 'ここでは phpBB3 のインストールを行うことができます。</p><p>インストールするにはデータベースへ接続するための情報が必要です。もしデータベースへ接続するための情報が判らない場合、サーバ管理者にお問い合わせください。データベースに接続できないとインストールを先へ進めることはできません。必要な情報は次の通りです:</p>

	<ul>
		<li>データベースの種類 - サーバがサポートしているデータベースソフトウェアの種類です</li>
		<li>データベースサーバのホスト名 または DSN - データベースサーバのアドレスです</li>
		<li>データベースサーバのポート番号 - データベースサーバが使用しているポート番号です（ほとんどのケースでは入力する必要はありません）</li>
		<li>データベースの名前 - サーバ上であなたが使用できるデータベースの名前です</li>
		<li>データベースのユーザー名とパスワード - データベースにアクセスするためのログイン情報です</li>
	</ul>

	<p><strong>注意:</strong> もしデータベースの種類として SQLite を選択した場合、“データベースサーバのホスト名 または DSN” としてデータベースファイルへのフルパスを入力してください。さらにユーザー名とパスワードは空白のままにしてください。セキュリティ上の理由から、データベースファイルをインターネットからアクセス可能な場所に置くべきではありません。</p>

	<p>phpBB3 がサポートするデータベース:</p>
	<ul>
		<li>MySQL 3.23 以上（MySQLi も可）</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 以上 （直接または ODBC 経由）</li>
		<li>Oracle</li>
	</ul>

	<p>データベースの種類を選択する際、これらの中でサーバがサポートしているデータベースのみ表示されます',
	'INSTALL_INTRO_NEXT'		=> 'インストールを開始するには下のボタンをクリックしてください',
	'INSTALL_LOGIN'				=> 'ログイン',
	'INSTALL_NEXT'				=> '次のステージへ',
	'INSTALL_NEXT_FAIL'			=> 'パスしなかったテストがいくつかあるため、次のステージへ進むべきではありません。このまま次のステージへ進んだ場合、不完全なインストールに終わってしまう可能性があります。',
	'INSTALL_NEXT_PASS'			=> '全てのテストをパスしたので次のステージへ進んでかまいません。インストール後にもしファイルのアクセス権を変更したり PHP 拡張モジュールを変更したりして再テストしたいと思った場合、いつでもできます。',
	'INSTALL_PANEL'				=> 'インストールパネル',
	'INSTALL_SEND_CONFIG'		=> 'コンフィグ情報を config.php に書き込めませんでした。ファイル config.php が存在しないかファイルアクセス権が書き込み可になっていないかのどちらかが考えられます。下に表示されているオプションを選択して config.php のインストールを完了してください。',
	'INSTALL_START'				=> 'インストール開始',
	'INSTALL_TEST'				=> '再テスト',
	'INST_ERR'					=> 'インストールエラー',
	'INST_ERR_DB_CONNECT'		=> 'データベースに接続できませんでした。下のエラーメッセージをご確認ください。',
	'INST_ERR_DB_FORUM_PATH'	=> 'データベースファイルへのパスとして、掲示板ディレクトリツリー内のファイルへのパスが指定されています。セキュリティ上の理由から、データベースファイルをインターネットからアクセス可能な場所に格納すべきではありません。',
	'INST_ERR_DB_NO_ERROR'		=> 'このエラーに対するメッセージは用意されていません',
	'INST_ERR_DB_NO_MYSQLI'		=> 'サーバにインストールされている MySQL のバージョンでは “MySQL with MySQLi Extension” をご利用になれません。かわりにオプション “MySQL” を選択してください。',
	'INST_ERR_DB_NO_SQLITE'		=> 'SQLite のバージョンが古すぎます。少なくとも 2.8.2 以上にアップグレードしてください。',
	'INST_ERR_DB_NO_ORACLE'		=> 'サーバにインストールされている Oracle のバージョンでは <var>NLS_CHARACTERSET</var> パラメータを <var>UTF8</var> に設定しておく必要があります。パラメータを変更するかバージョンを 9.2+ にアップグレードしてください。',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Firebird のバージョンが古すぎます。少なくとも 2.1 以上にアップグレードしてください。',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Firebird データベースのページサイズが 8192 より低いです。少なくとも 8192 以上である必要があります。',
	'INST_ERR_DB_NO_POSTGRES'	=> '選択したデータベースは文字エンコーディング <var>UNICODE</var> または <var>UTF8</var> で作成されていません。文字エンコーディングを <var>UNICODE</var> か <var>UTF8</var> にして再度データベースを作成してください。',
	'INST_ERR_DB_NO_NAME'		=> 'データベースの名前が入力されていません',
	'INST_ERR_EMAIL_INVALID'	=> '入力した メールアドレス は無効です',
	'INST_ERR_EMAIL_MISMATCH'	=> '入力した メールアドレス が不一致です',
	'INST_ERR_FATAL'			=> '致命的なインストールエラー',
	'INST_ERR_FATAL_DB'			=> '致命的かつ復元不可能なデータベースエラーが発生しました。これはおそらく指定したユーザーには <code>CREATE TABLES</code> または <code>INSERT</code> などの SQL 命令の実行権限が与えられていないためと考えられます。詳細は下記をご覧ください。まず最初にサーバ管理者にこの事をお問い合わせください。それでも解決しない場合、phpBBサポートフォーラム をご利用ください。',
	'INST_ERR_FTP_PATH'			=> '入力したディレクトリパスへカレントディレクトリを移動できませんでした。入力したパスが正確かどうかをご確認ください。',
	'INST_ERR_FTP_LOGIN'		=> 'FTPサーバ にログインできませんでした。ユーザー名とパスワードが正しいかご確認ください。',
	'INST_ERR_MISSING_DATA'		=> 'このブロックのフィールドは全て入力する必要があります',
	'INST_ERR_NO_DB'			=> '選択したデータベースを取り扱うための PHP 拡張モジュールの読み込みに失敗しました',
	'INST_ERR_PASSWORD_MISMATCH'	=> '入力した パスワード が不一致です',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '入力した パスワード が長すぎます。３０ 字以下にしてください。',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '入力した パスワード が短すぎます。６ 字以上にしてください。',
	'INST_ERR_PREFIX'			=> '入力した テーブル接頭語 を持つテーブルが既にデータベース内に存在します。接頭語を変更してください。',
	'INST_ERR_PREFIX_INVALID'	=> '入力した テーブル接頭語 に不正な文字が含まれています。ハイフンやコンマなどの文字を使用しないでください。',
	'INST_ERR_PREFIX_TOO_LONG'	=> '入力した テーブル接頭語 が長すぎます。%d 字以下にしてください。',
	'INST_ERR_USER_TOO_LONG'	=> '入力した ユーザー名 が長すぎます。２０ 字以下にしてください。',
	'INST_ERR_USER_TOO_SHORT'	=> '入力した ユーザー名 が短すぎます。３ 字以上にしてください。',
	'INVALID_PRIMARY_KEY'		=> '不正な主キー : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'この処理はしばらく時間がかかります... 処理が終わるまでページを移動しないでください',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> 拡張モジュールのチェック',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>必須</strong> - <samp>mbstring</samp> はマルチバイト文字を扱うための PHP 拡張モジュールです。mbstring 設定オプションのいくつかは phpBB3 と相性が良くないため、それらのオプションを無効にしておく必要があります。もし下のチェックのどれかが “いいえ” になっている場合、phpBB3 ルートディレクトリ直下のファイル .htaccess に下記コードを追加することで解決することがあります。<br />
<var>
--- コード ---<br />
php_value mbstring.func_overload 0<br />
php_flag mbstring.encoding_translation Off<br />
php_value mbstring.http_input pass<br />
php_value mbstring.http_output pass<br />
-------------
 </var>',
	'MBSTRING_FUNC_OVERLOAD'				=> '関数のオーバーロード',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> は 0 か 4 に設定されています',
	'MBSTRING_ENCODING_TRANSLATION'			=> '透過的な文字エンコーディングフィルタ',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> は 0 に設定されています',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP 入力文字エンコーディングの自動変換',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> は <samp>pass</samp> に設定されています',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP 出力文字エンコーディングの自動変換',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> は <samp>pass</samp> に設定されています',

	'MAKE_FOLDER_WRITABLE'		=> 'このフォルダの存在 と アクセス権が書き込み可である事 を確認した後、もう一度試してみてください:<br />≫<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'これらのフォルダの存在 と アクセス権が書き込み可である事 を確認した後、もう一度試してみてください:<br />≫<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'phpBB3 データベースのスキーマがサーバにインストールされている MySQL 用のものではありません。サーバで稼動している MySQL のバージョンが %2$s であるのに対し、phpBB3 データベーススキーマは MySQL 3.x/4.x 用のものです。<br /><strong>アップデートを開始する前にデータベーススキーマを更新する必要があります。</strong><br /><br />詳しくは <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base article about upgrading the MySQL schema</a> をご確認ください。もし何らかの問題が起こった場合、<a href="http://www.phpbb.com/community/viewforum.php?f=46">our support forums</a> で質問できます。',
	
	'NAMING_CONFLICT'			=> 'ユーザー名の衝突: %s と %s は同じユーザーと見なされます<br /><br />%s',
	'NEXT_STEP'					=> '次のステップへ',
	'NOT_FOUND'					=> '見つかりません',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s ( “%s” )',
	'NO_CONVERTORS'				=> 'ご利用可能なコンバータがありません',
	'NO_CONVERT_SPECIFIED'		=> 'コンバータが指定されていません',
	'NO_LOCATION'				=> 'ImageMagick が見つかりません。もしサーバに ImageMagick がインストールされている場合、後で AdminCP にて ImageMagick へのパスを指定できます。',
	'NO_TABLES_FOUND'			=> 'テーブルが１つも見つかりません',

	'OVERVIEW_BODY'				=> 'phpBB3 へようこそ！<br /><br />phpBB™ は世界で最も広く使用されているインターネット掲示板ソフトウェアです。phpBB3 は 2000 年から現在に至るまでのパッケージラインナップの中で最新のパッケージです。かつての phpBB2 と同様、phpBB3 は豊富な機能を持ち、ユーザーフレンドリーであり、phpBB Team によって完全にサポートされています。phpBB3 では phpBB2 の重要かつ基本的な機能に十分な改良が施され、さらに phpBB2 では備えていなかった全く新しい機能が追加されています。私達はこの phpBB3 があなたの期待に応えるものであることを願っています。 <br /><br />このインストールシステムは phpBB3 のインストール、最新バージョンへのアップデート、phpBB3 とは異なる掲示板システム（phpBB2 含む）からのデータコンバートを手助けします。より詳しい情報は <a href="../docs/INSTALL.html">the installation guide</a> をご覧ください。<br /><br />phpBB3 のライセンスまたはサポートに関してはサイドメニューの項目からご覧頂けます。インストール、アップデート、データコンバートを始めるには上のタブからオプションを選択してください。',

	'PCRE_UTF_SUPPORT'				=> 'PCRE関数の UTF-8 文字列のサポート',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'もし PCRE（Perl 互換正規表現）関数が UTF-8 によるパターン文字列を取り扱えない場合、 phpBB3 は動作<strong>しません</strong>。PHP の PCRE拡張モジュール のバージョンが古い場合、この症状が起こります。',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP関数 getimagesize() を利用できます',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>必須</strong> - phpBB を正常に機能させるには関数 getimagesize が利用可能である必要があります。',
	'PHP_OPTIONAL_MODULE'			=> '拡張モジュール [ オプション ]',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>オプション</strong> - これらのモジュールまたはアプリケーションは必ずしも必要というわけではありません。しかし phpBB3 の機能の中にはこれらを必要とするものもあります。',
	'PHP_SUPPORTED_DB'				=> 'データベースのサポート',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>必須</strong> - ここに挙げられているデータベースの内、少なくとも１つは PHP 拡張モジュールとして利用できる必要があります。もし PHP のデータベースモジュールが１つも利用できない場合、サーバ管理者にデータベースの使用を相談してください。',
	'PHP_REGISTER_GLOBALS'			=> 'PHP設定オプション <var>register_globals</var> が無効です',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'この設定オプションが有効に設定されていても phpBB3 は動作するでしょう。しかしセキュリティ上の理由で、もし可能であるなら register_globals を無効にしておくことを強く勧めます。もし “いいえ” になっている場合、phpBB3 ルートディレクトリ直下のファイル .htaccess に下記コードを追加することで解決することがあります。<br />
<var>
--- コード ---<br />
php_flag register_globals off<br />
-------------
 </var>',
	'PHP_SAFE_MODE'					=> 'セーフモード',
	'PHP_SETTINGS'					=> 'PHP のバージョンと設定',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>必須</strong> - phpBB3 を使用するにはサーバにインストールされている PHP のバージョンが 4.3.3 以上である必要があります。もし下に "<var>セーフモード</var>" と表示されている場合、PHP のセーフモードが有効になっていることを示します。セーフモードが有効な場合、リモート操作に制限が課せられます。',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP設定オプション <var>allow_url_fopen</var> が有効です',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>オプション</strong> - この設定オプションが無効に設定されていても phpBB3 は動作するでしょう。しかし他サイトのアバター表示などがきちんと動作しなくなります。',
	'PHP_VERSION_REQD'				=> 'PHPバージョン 4.3.3 以上',
	'POST_ID'						=> '投稿記事ID',
	'PREFIX_FOUND'					=> '指定したデータベースのテーブルをスキャンしたところ、テーブル接頭語として <strong>%s</strong> が使われています',
	'PREPROCESS_STEP'				=> 'データコンバートプリプロセス 関数/クエリ の遂行',
	'PRE_CONVERT_COMPLETE'			=> 'データコンバートプリステップを全て完了しました。データコンバートを開始してください。コンバート完了後、手動で調整しなければならない点がいくつかあるかもしれない点にご注意ください。特にパーミッションが正しく割り当てられているかチェックしてください。必要であれば検索インデクスを再構築してください。アバターやスマイリーのような画像ファイルが正確にコピーされているかどうかもご確認ください。',
	'PROCESS_LAST'					=> 'プロセスの実行',

	'REFRESH_PAGE'				=> '各ステップをページ毎にリフレッシュする',
	'REFRESH_PAGE_EXPLAIN'		=> ' “はい” にした場合、ページを進める度にコンバータは各コンバートステップの処理を完了します。きちんとデータコンバートが最後まで完了するかどうか自信がない場合、前もってエラーを発見しておくために最初は “いいえ” にすることを勧めます。',
	'REQUIREMENTS_TITLE'		=> 'インストールの診断',
	'REQUIREMENTS_EXPLAIN'		=> 'ここでは、phpBB3 をサーバにインストール可能かどうか、インストール後にきちんと動作するかどうかについてのテスト結果が表示されています。表示されている全てのテスト結果に目を通してください。必須テストを全てパスするまでインストールを開始することはできません。phpBB3 の全機能を利用するにはオプションテストもパスしておく必要があります。',
	'RETRY_WRITE'				=> 'リトライ - config.php への書き込み',
	'RETRY_WRITE_EXPLAIN'		=> 'phpBB3 が書き込めるように config.php のファイルアクセス権を変更したい場合、下のボタンをクリックしてください。phpBB3 のインストール完了後、config.php のファイルアクセス権を元に戻しておくことを忘れないでください。',

	'SCRIPT_PATH'				=> 'スクリプトパス',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB3 ルートディレクトリへのパスです。ドメインからの相対パスで指定する必要があります。例: <samp>/phpBB3</samp>',
	'SELECT_LANG'				=> '言語の選択',
	'SERVER_CONFIG'				=> 'サーバ環境設定',
	'SEARCH_INDEX_UNCONVERTED'	=> '検索インデクスをコンバートできませんでした',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> '旧掲示板システムの検索インデクスをコンバートできませんでした。検索インデクスが作成されていない状態で検索しても常に “検索結果は 0 件です” を返すだけになります。新しい検索インデクスを作成するには AdminCP へ入室し、 “メンテナンス” タブのサブメニューから “検索インデクス” を選択してください。',
	'SOFTWARE'					=> '掲示板ソフトウェア',
	'SPECIFY_OPTIONS'			=> 'コンバートオプションの指定',
	'STAGE_ADMINISTRATOR'		=> '管理人設定',
	'STAGE_ADVANCED'			=> '詳細な環境設定',
	'STAGE_ADVANCED_EXPLAIN'	=> 'ここでは環境設定を変更できます。デフォルト設定と違う環境設定にする必要がある場合のみ入力・変更してください。ここで表示されている各設定を理解できなくても心配せずにそのまま次のステップへ進んでください。これらの設定は後で AdminCP にて変更できます。',
	'STAGE_CONFIG_FILE'			=> 'コンフィグファイル',
	'STAGE_CREATE_TABLE'		=> 'データベーステーブルの作成',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> '指定されたデータベースに phpBB 3.0 用のテーブルを作成し、初期データを投入しました。次のページへ進んで phpBB3 のインストールを完了してください。',
	'STAGE_DATABASE'			=> 'データベース設定',
	'STAGE_FINAL'				=> '最終ステージ',
	'STAGE_INTRO'				=> '導入',
	'STAGE_IN_PROGRESS'			=> 'データコンバート進行中',
	'STAGE_REQUIREMENTS'		=> 'インストールの診断',
	'STAGE_SETTINGS'			=> '設定',
	'STARTING_CONVERT'			=> 'データコンバートの開始',
	'STEP_PERCENT_COMPLETED'	=> 'ステップ <strong>%d</strong> ／ <strong>%d</strong>',
	'SUB_INTRO'					=> 'はじめに',
	'SUB_LICENSE'				=> 'ライセンス',
	'SUB_SUPPORT'				=> 'サポート',
	'SUCCESSFUL_CONNECT'		=> '接続に成功しました',
	'SUPPORT_BODY'				=> 'phpBB3 の最新安定バージョンに関するサポートは無料で提供されています。サポートの内容は:</p><ul><li>インストール</li><li>各種設定</li><li>技術的な質問</li><li>ソフトウェアのバグに関する問題</li><li>リリース候補（RC）バージョンから最新安定バージョンへのアップデート</li><li>phpBB2.0.x から phpBB3 へのデータコンバート</li><li>他の掲示板ソフトウェアから phpBB3 へのデータコンバート（<a href="http://www.phpbb.com/community/viewforum.php?f=65">Convertors Forum</a> をご覧ください）</li></ul><p>もし phpBB3 のベータバージョンをまだ利用している場合、phpBB3 の最新安定バージョンを新しくインストールすることを強く勧めます。</p><h2>MOD / スタイル</h2><p>MOD については <a href="http://www.phpbb.com/community/viewforum.php?f=81">Modifications Forum</a> の関連するトピックに質問・投稿してください。<br />スタイル、テンプレート、イメージセットについては、<a href="http://www.phpbb.com/community/viewforum.php?f=80">Styles Forum</a> の関連するトピックに質問・投稿してください。<br /><br />もし特定のバージョンについて質問したい場合、そのバージョン専用のトピックがありますのでそちらにご投稿ください。</p><h2>サポート</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="http://www.phpbb.com/support/">Support Section</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Quick Start Guide</a><br /><br />最新ニュースと最新リリースのメールを購読するには <a href="http://www.phpbb.com/support/">subscribe to our mailing list</a> にてメールアドレスを入力し送信してください。<br /><br />',
	'SYNC_FORUMS'				=> 'フォーラムの同期',
	'SYNC_POST_COUNT'			=> 'post_counts の同期',
	'SYNC_POST_COUNT_ID'		=> '<var>エントリー</var> %1$s から %2$s までの post_counts を同期中',
	'SYNC_TOPICS'				=> 'トピックの同期',
	'SYNC_TOPIC_ID'				=> '<var>topic_id</var> %1$s から %2$s までのトピックを同期中',

	'TABLES_MISSING'			=> 'テーブルが見つかりません<br />≫ <strong>%s</strong>',
	'TABLE_PREFIX'				=> 'データベーステーブルの接頭語',
	'TABLE_PREFIX_SAME'			=> 'テーブル接頭語は旧掲示板システムが使用しているテーブルの接頭語である必要があります。<br />≫ 指定したテーブル接頭語 %s',
	'TESTS_PASSED'				=> 'テストをパスしました',
	'TESTS_FAILED'				=> 'テストをパスできませんでした',

	'UNABLE_WRITE_LOCK'			=> 'ロックファイル（このテンポレリファイルが存在している間はインストール中であることを意味します）への書き込みに失敗しました',
	'UNAVAILABLE'				=> '利用できません',
	'UNWRITABLE'				=> '書き込めません',
	'UPDATE_TOPICS_POSTED'		=> 'トピック情報の生成',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'トピック情報の生成中にエラーが発生しました。データコンバート完了後に AdminCP でこのステップをリトライできます。',
	'VERIFY_OPTIONS'			=> 'コンバートオプションの確認中',
	'VERSION'					=> 'バージョン',

	'WELCOME_INSTALL'			=> 'phpBB3 のインストールへようこそ',
	'WRITABLE'					=> '書き込めます',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> '差分ファイルは全てアップデートされました。<a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">掲示板にログイン</a>して動作に問題がないかご確認ください。install ディレクトリを削除することを忘れないでください！ <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">サーバと掲示板の設定情報の提供</a> のご協力をお願い致します。',
	'ARCHIVE_FILE'				=> 'パッケージ内ファイル',

	'BACK'				=> '戻る',
	'BINARY_FILE'		=> 'バイナリファイル',
	'BOT'				=> 'スパイダー/ボット',

	'CHANGE_CLEAN_NAMES'			=> 'ユーザー名を同一とみなす方式に変更があります。新しい方式でユーザー名を比較すると同一とみなされるユーザーが何人か存在します。先へ進む前にこれら重複したユーザー名について、片方のユーザー名を削除かリネームしてユーザー名が重複しないようにする必要があります。',
	'CHECK_FILES'					=> 'ファイルチェック',
	'CHECK_FILES_AGAIN'				=> 'ファイル再チェック',
	'CHECK_FILES_EXPLAIN'			=> '次のステップで、phpBB3 の全ファイルについてアップデートすべきファイルかどうかをチェックします - ファイルチェックにはしばらく時間がかかります。',
	'CHECK_FILES_UP_TO_DATE'		=> 'データベースに保管されている情報によればお使いの phpBB3 のバージョンは最新です。ウェブサーバ上の phpBB3 の全ファイルが本当に最新バージョンであるかどうかを確かめるためにファイルチェックを行ってももちろんかまいません。',
	'CHECK_UPDATE_DATABASE'			=> '次のアップデートプロセスへ',
	'COLLECTED_INFORMATION'			=> 'ファイルチェック情報',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'ここではファイルチェックの結果からアップデートの必要ありと判断されたファイルがリストアップされています。ファイルリストはタイプ別に分けられています。各ファイルリストの説明をよく読んでから必要なアップデートを行ってください。',
	'COLLECTING_FILE_DIFFS'			=> '差分ファイルの確認中',
	'COMPLETE_LOGIN_TO_BOARD'		=> '<a href="../ucp.php?mode=login">掲示板にログイン</a>して動作に問題がないかご確認ください。install ディレクトリを削除することを忘れないでください！',
	'CONTINUE_UPDATE_NOW'			=> '次のアップデートプロセスへ',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'ファイル再チェック',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> '衝突ブロック [Begin]',
	'CURRENT_VERSION'				=> '使用しているバージョン',

	'DATABASE_TYPE'						=> 'データベースの種類',
	'DATABASE_UPDATE_INFO_OLD'			=> 'install ディレクトリ内のデータベースアップデートファイルのバージョンが最新ではありません。アップロードしたファイルのバージョンが最新かどうかご確認ください。',
	'DELETE_USER_REMOVE'				=> 'ユーザーのアカウントと投稿記事の削除',
	'DELETE_USER_RETAIN'				=> 'ユーザーアカウントの削除（投稿記事は保持）',
	'DESTINATION'						=> 'アップロード位置',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> '衝突ブロック [End] / アップデートコード [Begin]',
	'DIFF_SIDE_BY_SIDE'					=> 'Side by Side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'このファイルをアップデートしない',
	'DONE'								=> '完了',
	'DOWNLOAD'							=> 'ダウンロード',
	'DOWNLOAD_AS'						=> 'ダウンロードファイルの圧縮形式',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'アップデートパッケージのダウンロード（推奨）',
	'DOWNLOAD_CONFLICTS'				=> '衝突ファイルのダウンロード',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '衝突ブロックを見つけるにはファイルをエディタで開き、 &lt;&lt;&lt; を検索してください',
	'DOWNLOAD_UPDATE_METHOD'			=> 'アップデートパッケージのダウンロード',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'ここではアップデートファイルをダウンロードできます。圧縮形式を選択してアップデートファイルをダウンロードしてください。ダウンロード後、解凍して出てきたファイルを phpBB3 ルートディレクトリへアップロードしてください。アップデートファイルを全てアップロードし終わったら “ファイル再チェック” をクリックしてアップデートがきちんと完了したかをご確認ください。',

	'ERROR'			=> 'エラー',
	'EDIT_USERNAME'	=> 'ユーザー名を編集する',

	'FILE_ALREADY_UP_TO_DATE'		=> 'このファイルは既にアップデートされています',
	'FILE_DIFF_NOT_ALLOWED'			=> 'このファイルは差分表示を許可されていません',
	'FILE_USED'						=> '使用情報',			// Single file
	'FILES_CONFLICT'				=> 'ハックファイル [ 衝突 ]',
	'FILES_CONFLICT_EXPLAIN'		=> '以下のファイルはハックファイルです。これらのファイルはハック部分がアップデート部分と衝突しています。アップデートするには衝突部分をご自分で調べて手動で衝突部分を取り除くか、表示されているオプションの中からアップデート方法を選択してください。手動で衝突部分を取り除いた場合、 “ファイル再チェック” をクリックして衝突部分が本当に取り除かれているか確認してください。アップデート方法のオプションは各ファイル毎に選ぶことができます。ハック部分とアップデート部分をマージ（共存・統合）する場合、１番目のオプションでは衝突部分にアップデートコードが使用されハックコードは破棄されます。２番目のオプションでは衝突部分にハックコードが使用されアップデートコードは破棄されます。',
	'FILES_MODIFIED'				=> 'ハックファイル',
	'FILES_MODIFIED_EXPLAIN'		=> '以下のファイルはハックファイルです。ハック部分とアップデート部分のマージ（共存・統合）が可能です。',
	'FILES_NEW'						=> '新しいファイル',
	'FILES_NEW_EXPLAIN'				=> '以下のファイルは当アップデートで新しく追加されたファイルです。これらのファイルはお使いの phpBB3 に新しく追加されます。',
	'FILES_NEW_CONFLICT'			=> '新しいファイル [ 衝突 ]',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> '以下のファイルは当アップデートで新しく追加されたファイルです。しかしこの追加ファイルと同じ位置、同じファイル名のファイルが当 phpBB3 内に既に存在しています。アップデートファイルをアップロードするとこのファイルは上書きされます。',
	'FILES_NOT_MODIFIED'			=> '純正ファイル',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> '以下のファイルは純正ファイルです。ハックは一切されていません。',
	'FILES_UP_TO_DATE'				=> 'アップデート済みファイル',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '以下のファイルは既にアップデートが完了しているため、アップロードする必要はありません。',
	'FTP_SETTINGS'					=> 'FTP設定',
	'FTP_UPDATE_METHOD'				=> 'FTPアップロード',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'このアップデートファイルはお使いの phpBB3 のバージョンと互換性がありません。お使いの phpBB3 のバージョンは %1$s であり、このアップデートファイルは phpBB %2$s から %3$s へアップデートするためのファイルです。',
	'INCOMPLETE_UPDATE_FILES'		=> 'サーバにアップロードされたアップデートファイルに欠陥があります',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'データベースアップデートに成功しました。次のアップデートプロセスへ移行してください。',

	'KEEP_OLD_NAME'		=> 'ユーザー名を保持する',

	'LATEST_VERSION'		=> '最新バージョン',
	'LINE'					=> 'Line',
	'LINE_ADDED'			=> '追加',
	'LINE_MODIFIED'			=> '修正',
	'LINE_REMOVED'			=> '削除',
	'LINE_UNMODIFIED'		=> '純正コード',
	'LOGIN_UPDATE_EXPLAIN'	=> 'phpBB3 をアップデートするにはログインしてください。',

	'MAPPING_FILE_STRUCTURE'	=> '表示されている各アップデートファイルを指定先にアップロードしてください。',

	'MERGE_MODIFICATIONS_OPTION'	=> 'マージする',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'マージしない - アップデートファイルを使用する',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'マージしない - 現在のハックファイルをそのまま使用する',
	'MERGE_MOD_FILE_OPTION'		=> 'マージする - 衝突ブロックにハックコードを適用する',
	'MERGE_NEW_FILE_OPTION'		=> 'マージする - 衝突ブロックにアップデートコードを適用する',
	'MERGE_SELECT_ERROR'		=> 'マージモードが選択されていない衝突ファイルがあります',
	'MERGING_FILES'				=> 'マージ中',
	'MERGING_FILES_EXPLAIN'		=> '最終的なファイルの変更を確認しています。<br /><br />変更ファイルに対する全てのプロセスが完了するまでお待ちください。',

	'NEW_FILE'						=> 'アップデートコード [End]',
	'NEW_USERNAME'					=> '新しいユーザー名',
	'NO_AUTH_UPDATE'				=> 'アップデートする権限がありません',
	'NO_ERRORS'						=> 'エラーなし',
	'NO_UPDATE_FILES'				=> '以下のファイルをアップデートしていません',
	'NO_UPDATE_FILES_EXPLAIN'		=> '以下のファイルはアップデートファイルですが、アップロード先のディレクトリが見つからなかったためアップロードできませんでした。もしこのリストに language/ や styles/ 以外のディレクトリ下のファイルが含まれている場合、phpBB3 のディレクトリ構造が変更されている可能性があります。',
	'NO_UPDATE_FILES_OUTDATED'		=> 'アップデートパッケージが見つかりませんでした。アップデートパッケージをサーバにアップロードしたかをご確認ください。<br /><br />phpBB3 は最新バージョンにアップデートされて<strong>いません</strong>。現在、この phpBB %1$s を最新バージョンにアップデートするためのアップデートパッケージを利用できます。<a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> に訪れてアップデートパッケージ( phpBB-%2$s_to_%3$s )をダウンロードしてください。',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'phpBB3 のバージョンは最新バージョンです。当アップデートツールを実行する必要はありません。',
	'NO_UPDATE_INFO'				=> 'ファイルのアップデート情報が見つかりません',
	'NO_UPDATES_REQUIRED'			=> '必要なアップデート処理はありません',
	'NO_VISIBLE_CHANGES'			=> '変更はありません',
	'NOTICE'						=> '通知',
	'NUM_CONFLICTS'					=> '衝突ブロック数',
	'NUMBER_OF_FILES_COLLECTED'		=> '現在、%2$d ファイルの内、%1$d ファイルまでチェックを終了しました。<br />ファイルチェックが全て終了するまでお待ちください。',

	'OLD_UPDATE_FILES'		=> 'アップデートファイルが最新ではありません。このアップデートファイルは phpBB %1$s から phpBB %2$s へアップデートを行います。一方、現在の phpBB3 の最新バージョンは %3$s です。',

	'PACKAGE_UPDATES_TO'				=> 'このパッケージによるアップデート後のバージョン',
	'PERFORM_DATABASE_UPDATE'			=> 'データベースアップデート',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> '下のボタンをクリックするとデータベースアップデートが開始されます。データベースのアップデートにはしばらく時間がかかります。アップデートが完了するまで決してページ移動しないでください。アップデートの完了後、次のアップデートプロセスへ移行してください。',
	'PREVIOUS_VERSION'					=> 'アップデート前のバージョン',
	'PROGRESS'							=> '進行状況',

	'RESULT'					=> '結果',
	'RUN_DATABASE_SCRIPT'		=> 'データベースアップデートを開始する',

	'SELECT_DIFF_MODE'			=> '差分表示モードの選択',
	'SELECT_DOWNLOAD_FORMAT'	=> 'ダウンロード形式の選択',
	'SELECT_FTP_SETTINGS'		=> 'FTP情報 の入力',
	'SHOW_DIFF_CONFLICT'		=> '差分/衝突 コード確認',
	'SHOW_DIFF_FINAL'			=> 'コード確認',
	'SHOW_DIFF_MODIFIED'		=> '差分コード確認',
	'SHOW_DIFF_NEW'				=> 'コード確認',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'コード確認',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'コード確認',
	'SOME_QUERIES_FAILED'		=> 'クエリの実行に失敗しました。下に表示されているのは実行しようとしたクエリとそのエラーです。',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'この失敗はおそらく心配するほどのことではありません。アップデートはうまくいくでしょう。この失敗に関して理解したいなら公式サポートフォーラムで質問してくれてかまいません。公式サポートフォーラムでアドバイスを得る方法に関しては <a href="../docs/README.html">README</a> をご覧ください。',
	'STAGE_FILE_CHECK'			=> 'ファイルチェック',
	'STAGE_UPDATE_DB'			=> 'データベースアップデート',
	'STAGE_UPDATE_FILES'		=> 'ファイルアップデート',
	'STAGE_VERSION_CHECK'		=> 'バージョンチェック',
	'STATUS_CONFLICT'			=> 'ハックファイル [ 衝突 ]',
	'STATUS_MODIFIED'			=> 'ハックファイル',
	'STATUS_NEW'				=> '新しいファイル',
	'STATUS_NEW_CONFLICT'		=> '新しいファイル [ 衝突 ]',
	'STATUS_NOT_MODIFIED'		=> '純正ファイル',
	'STATUS_UP_TO_DATE'			=> 'アップデート済みファイル',

	'TOGGLE_DISPLAY'			=> 'ファイルリストの 表示/非表示',
	'TRY_DOWNLOAD_METHOD'		=> '“アップデートパッケージのダウンロード” を利用してみよう<br />この方法でアップデートすることが推奨されています',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'この方法で今すぐアップデート',

	'UPDATE_COMPLETED'				=> 'アップデートが完了しました',
	'UPDATE_DATABASE'				=> 'データベースアップデート',
	'UPDATE_DATABASE_EXPLAIN'		=> '次のステップでデータベースをアップデートします',
	'UPDATE_DATABASE_SCHEMA'		=> 'データベーススキーマを更新中',
	'UPDATE_FILES'					=> 'ファイルアップデート',
	'UPDATE_FILES_NOTICE'			=> 'ファイルのアップデートを忘れないでください。このスクリプトはデータベースのアップデートのみを実行しました。',
	'UPDATE_INSTALLATION'			=> 'phpBB3 のアップデート',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'ここでは phpBB3 のアップデートを行います。<br />アップデートプロセスの中には phpBB3 の各ファイルについてアップデートすべきファイルかどうかをチェックするものもあります。アップデートを実行する前にこれらアップデートされるファイルの差分コードを確認できます。<br /><br />ファイルアップデートは２つの方法から選択できます。</p><h2>手動アップデート</h2><p>このアップデート方法では、あなたが MOD などで独自にハックを施しているファイルについて、ハック部分を損なうことなくアップデート差分を追加したファイルを作成し、そのパッケージをダウンロードすることが可能です。このパッケージをダウンロード後、パッケージ内ファイルをご自分で phpBB3 ディレクトリ下の正しい位置にアップロードする必要があります。アップロードが完了したら “ファイル再チェック” を実行することで正しい位置にファイルがアップロードされたかどうかを確認できます。</p><h2>FTP による自動アップデート</h2><p>このアップデート方法ではアップデートは自動で行われます。この方法を使用するには FTPサーバ へのログイン情報が必要です。自動アップデートが完了するとファイル再チェックが自動的に始まり、ファイルがきちんとアップデートされているかどうかを確認できます。<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>リリースのお知らせ</h1>

		<p>アップデートを行う前に <a href="%1$s" title="%1$s"><strong>the release announcement for the latest version</strong></a> をお読みください。読んで損はしないはずです。そちらにダウンロードリンクとアップデートによる変更ログも含まれています。</p>

		<br />

		<h1>自動アップデート</h1>

		<p>以下の手順で自動アップデートすることが推奨されています。INSTALL.html で紹介されているアップデート方法でアップデートすることももちろん可能です。自動アップデートのステップは:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li><a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com downloads page</a> をクリックして "Automatic Update Package" をダウンロードする<br /><br /></li>
			<li>ダウンロードしたパッケージを解凍する<br /><br /></li>
			<li>解凍して出てきたフォルダ install/ を phpBB3 ルートディレクトリ（config.php を含むディレクトリ）にアップロードする<br /><br /></li>
		</ul>

		<p>アップロードが完了すると一般ユーザーは全てオフライン状態に移行します<br /><br />
		<strong><a href="%2$s" title="%2$s">こちらをクリック</a>してアップデートを開始してください</strong><br />
		<br />
		アップデートを開始したら各プロセスの指示に従ってください。アップデートが完了するとその旨のメッセージが表示されます。
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>未完了アップデートを検出しました</h1>

		<p>未完了状態の自動アップデートを検出しました。自動アップデートの各ステップの指示にきちんと従っていたかをご確認ください。下のリンクをクリックすれば未完了の自動アップデートを続行することが可能です。</p>
	',
	'UPDATE_METHOD'					=> 'アップデート方法',
	'UPDATE_METHOD_EXPLAIN'			=> 'アップデート方法を選択できます。FTPアップロード を使用するには FTPサーバ へのログイン情報が必要です。FTPアップロード を選択した場合、ファイルは自動的にアップロードされバックアップファイル .bak も自動的に作成されます。アップデートパッケージのダウンロードを選択した場合、ダウンロードパッケージ内のアップデートファイルをご自分で phpBB3 ディレクトリ下の正しい位置にアップロードする必要があります。',
	'UPDATE_REQUIRES_FILE'			=> 'アップデートには次のファイルが必要です: %s',
	'UPDATE_SUCCESS'				=> 'アップデートに成功しました',
	'UPDATE_SUCCESS_EXPLAIN'		=> '全てのファイルをアップデートすることに成功しました。次のステップでファイル再チェックを実行します。そこでファイルが正しくアップデートされたかどうかを確認してください。',
	'UPDATE_VERSION_OPTIMIZE'		=> 'バージョンの更新とデータベースの最適化中',
	'UPDATING_DATA'					=> 'データを更新中',
	'UPDATING_TO_LATEST_STABLE'		=> 'データベースを最新安定版に更新しています',
	'UPDATED_VERSION'				=> 'アップデート後のバージョン',
	'UPLOAD_METHOD'					=> 'アップロード方法',

	'UPDATE_DB_SUCCESS'				=> 'データベースのアップデートに成功しました',
	'USER_ACTIVE'					=> '有効アカウントユーザー',
	'USER_INACTIVE'					=> '無効アカウントユーザー',

	'VERSION_CHECK'				=> 'バージョンチェック',
	'VERSION_CHECK_EXPLAIN'			=> 'ここでは phpBB のバージョンが最新バージョンかどうかを確認できます',
	'VERSION_NOT_UP_TO_DATE'		=> 'phpBB のバージョンが最新ではありません。最新バージョンにアップデートしてください。',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'phpBB のバージョンが最新ではありません。<br />下のリンクをクリックすれば最新バージョンへのアップデート情報をご覧頂けます。',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'phpBB のバージョンが最新ではありません',
	'VERSION_UP_TO_DATE'			=> 'phpBB のバージョンは最新です。ファイルの正当性をチェックしたい場合はこのまま先へ進んでください。',
	'VERSION_UP_TO_DATE_ACP'		=> 'phpBB のバージョンは最新です。アップデートする必要はありません。',
	'VIEWING_FILE_CONTENTS'		=> 'ファイルのソースを確認中',
	'VIEWING_FILE_DIFF'			=> 'ファイルの差分を確認中',

	'WRONG_INFO_FILE_FORMAT'	=> 'データファイルのフォーマットに問題があります',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Thanks, The Management',
	'CONFIG_SITE_DESC'				=> 'A short text to describe your forum',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> 'この記事は phpBB3 のインストールがうまくいってるかどうかを確認するために投稿されたテスト記事です。この記事が表示されるということは phpBB3 がきちんと動作している証拠です。この記事は削除してかまいません。このカテゴリとフォーラムには特別グループ（Admin、ボット、グローバルモデレータ、ゲスト、登録ユーザー、登録ユーザー（COPPA））に対して最初から適切なパーミッションが与えられています。このカテゴリとフォーラムを削除して別の新しいカテゴリとフォーラムを作成する場合、特別グループに適切なフォーラムパーミッションを割り当てることを忘れないでください。フォーラムパーミッションの割り当てに慣れていない phpBB3 初心者の方は次のやり方がお勧めです。まず、このカテゴリとフォーラムを削除せずに名前だけを変更します。次に、新しく作成したカテゴリとフォーラムに対してはこのカテゴリとフォーラムのパーミッションをそのままコピーします。パーミッションの割り当てに慣れるに従って、自分の好きなようにフォーラムパーミッションをカスタマイズしていけるようになるでしょう。',

	'EXT_GROUP_ARCHIVES'			=> 'アーカイブ',
	'EXT_GROUP_DOCUMENTS'			=> 'ドキュメント',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'ダウンロード可能なファイル',
	'EXT_GROUP_FLASH_FILES'			=> 'Flashファイル',
	'EXT_GROUP_IMAGES'				=> '画像ファイル',
	'EXT_GROUP_PLAIN_TEXT'			=> 'テキストファイル',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktimeファイル',
	'EXT_GROUP_REAL_MEDIA'			=> 'RealMediaファイル',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media ファイル',

	'FORUMS_FIRST_CATEGORY'			=> 'はじめてのカテゴリ',
	'FORUMS_TEST_FORUM_DESC'		=> 'これはテストフォーラムです。',
	'FORUMS_TEST_FORUM_TITLE'		=> 'テストフォーラム その壱',

	'RANKS_SITE_ADMIN_TITLE'		=> '管理人',
	'REPORT_WAREZ'					=> 'この投稿記事には 海賊版ソフト販売へのリンク が含まれています',
	'REPORT_SPAM'					=> 'この投稿記事には 販売広告へのリンク が含まれています',
	'REPORT_OFF_TOPIC'				=> 'この投稿記事は トピックの話題から外れ ています',
	'REPORT_OTHER'					=> 'その他。詳細に記述します',

	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'phpBB3 へようこそ',
));

?>