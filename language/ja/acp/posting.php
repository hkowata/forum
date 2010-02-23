<?php
/**
*
* acp_posting [Japanese]
*
* @package language
* @version $Id: posting.php 9375 2009-03-16 16:47:16Z acydburn $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode とは、HTMLを利用した phpBB 独自の実装によるマークアップ言語です。ここでは BBCode の追加、削除、編集を行うことができます。',
	'ADD_BBCODE'				=> 'BBCode の追加',

	'BBCODE_ADDED'				=> 'BBCode の追加に成功しました',
	'BBCODE_EDITED'				=> 'BBCode の編集に成功しました',
	'BBCODE_NOT_EXIST'			=> 'BBCode が存在していません',
	'BBCODE_HELPLINE'			=> 'ヘルプライン',
	'BBCODE_HELPLINE_EXPLAIN'	=> '簡単な説明文を入力してください。投稿ページの BBCode ボタン上にマウスカーソルを移動させると表示されます。',
	'BBCODE_HELPLINE_TEXT'		=> 'ヘルプライン',
	'BBCODE_HELPLINE_TOO_LONG'	=> '入力した ヘルプライン が長すぎます',
	
	'BBCODE_INVALID_TAG_NAME'	=> 'その BBCode タグは既に存在しています',
	'BBCODE_INVALID'			=> 'BBCode定義 に問題があります',
	'BBCODE_OPEN_ENDED_TAG'		=> 'BBCode は開始タグと終了タグの両方を含んでいる必要があります',
	'BBCODE_TAG'				=> 'タグ',
	'BBCODE_TAG_TOO_LONG'		=> 'タグが長すぎます',
	'BBCODE_TAG_DEF_TOO_LONG'	=> '入力した タグ が長すぎます。タグを短くしてください。',
	'BBCODE_USAGE'				=> 'BBCode定義',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'ここで BBCode の形を定義します。想定している入力文字の種類に応じて適切なトークン { } を使用してください（%sトークンについて%s）。',

	'EXAMPLE'						=> '例： ',
	'EXAMPLES'						=> '例： ',

	'HTML_REPLACEMENT'				=> 'HTML表現',
 	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'BBCode を含む文章をブラウザで表示する際、文章内の各 BBCode 部分をそれぞれ対応する HTMLコード に置き換える必要があります。ここでは上で定義した BBCode に対応する HTML表現 を定義できます。BBCode定義 で使用したトークン { } を必ず用いるようにしてください。',

	'TOKEN'					=> 'トークン',
	'TOKENS'				=> 'トークンとは',
	'TOKENS_EXPLAIN'		=> 'トークン(token)の概念を日本語で一言で表現すれば “抽象化した代替物” です。<br /><em>トークン(token)の概念を例を用いて具体的に説明しましょう。明治時代初期、政府が誕生してからまだ日が浅かった為に日本で円は流通していませんでした。その当時の人々の経済はおそらく物々交換経済か、あるいは貨幣としてお米か金（ゴールド）を使用していたはずです。当時は治安が悪かったので、人々は安全の為により信用のおける資産家の蔵に自分のお米や金を預け（貸し）たいと考えたでしょう。お米か金を預かった（借りた）資産家（今でいう銀行）は借りた相手に当然 “借用書” を渡します。その “借用書” がトークンです。その借用書をその資産家に持って行きさえすればいつでもお米か金に交換する事ができたので、お米か金をその場で持っていなくても人々はその借用書で物を買ったり売ったりする事ができました。実際には借用書自体はただの紙切れに過ぎないにもかかわらず、その紙切れがまさにお米か金そのものであるかのように振舞っています。すなわち、“借用書という紙切れ” ＝ “お米や金の代替物” ＝ “お米や金のトークン” という事です。</em><br /><br />トークンとして使用可能な型は数値だけでなく、文字列（テキスト、メールアドレス、URL、HTMLカラー等）も使用できます。当然、文章作成の際に BBCode に入力する型とそれに対応するトークンの型は一致している必要があります。同じトークンを複数使用する場合は {TEXT1}, {TEXT2} のようにトークン名の後ろに数値を付け足してください。<br /><br />BBCode を定義する際、language/ja ディレクトリ内の各ファイルで定義されている言語キーを {L_<em>&lt;STRINGNAME&gt;</em>} の形で使用する事ができます。例えば、トークン{L_WROTE} は “さんが書きました” に置換されます。',
	'TOKEN_DEFINITION'		=> '何のトークンか？',
	'TOO_MANY_BBCODES'		=> 'BBCode をこれ以上作成できません。BBCode を１つ以上削除してからもう一度作成してください。',

	'tokens'	=>	array(
		'TEXT'			=> 'テキスト文字（漢字、ひらがな等を含むあらゆる文字）。HTMLタグ 内でこのトークンを使用するべきではありません。HTMLタグ 内でトークンを使用する場合は IDENTIFIER か SIMPLETEXT を使用してください。',
		'SIMPLETEXT'	=> '半角アルファベット(A-Z)、半角数字(0-9)、半角スペース、コンマ(,)、マイナス(-)、プラス(+)、ハイフン(-)、アンダーライン(_)',
		'IDENTIFIER'	=> '半角アルファベット(A-Z)、半角数字(0-9)、ハイフン(-)、アンダーライン(_)',
		'NUMBER'		=> '半角数字(0-9)',
		'EMAIL'			=> 'メールアドレス',
		'URL'			=> '絶対URL（プロトコルを含める必要があります。プロトコルとは URL 中の http、ftp 部分の事です。JavaScript コード内では無視されます）。プロトコルを指定しなかった場合、“http://” が自動的に挿入されます。',
		'LOCAL_URL'		=> 'ローカルURL。トピック表示ページと相対的な URL である必要があります。サーバ名（ホストまたはドメイン）とプロトコルを含んではいけません。',
		'COLOR'			=> 'HTMLカラー。<samp>#FF1234</samp> のような数値形式か、 <samp>fuchsia</samp> または <samp>InactiveBorder</samp> のような <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSSカラーキーワード</a> である必要があります。 '
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'ここではトピックアイコンの追加、削除、編集を行う事ができます。これらのアイコンはフォーラム閲覧ページでトピックまたは返信記事の件名と並べて表示されます。アイコンパックのインストールと作成を行う事もできます。',
	'ACP_SMILIES_EXPLAIN'	=> 'スマイリー（別称：エモーションアイコン）とは、感情や気持ちを表現するために用いられる比較的小さな画像の事です。ここではユーザーが投稿記事とプライベートメッセージで使用できるスマイリーの作成、削除、編集を行うことができます。スマイリーパックのインストールと作成を行う事もできます。',
	'ADD_SMILIES'			=> 'スマイリーコードの追加',
	'ADD_SMILEY_CODE'		=> 'スマイリーコードの追加',
	'ADD_ICONS'				=> 'アイコンの追加',
	'AFTER_ICONS'			=> 'After %s',
	'AFTER_SMILIES'			=> 'After %s',

	'CODE'						=> 'コード',
	'CURRENT_ICONS'				=> '現在使用中のアイコン',
	'CURRENT_ICONS_EXPLAIN'		=> '現在使用しているアイコンについてどうするかを選択してください',
	'CURRENT_SMILIES'			=> '現在使用中のスマイリー',
	'CURRENT_SMILIES_EXPLAIN'	=> '現在使用しているスマイリーについてどうするかを選択してください',

	'DISPLAY_ON_POSTING'		=> '投稿ページで表示する',
	'DISPLAY_POSTING'			=> '投稿ページで表示',
	'DISPLAY_POSTING_NO'		=> '投稿ページで非表示',
  
  

	'EDIT_ICONS'				=> 'アイコンの編集',
	'EDIT_SMILIES'				=> 'スマイリーの編集',
	'EMOTION'					=> '意味',
	'EXPORT_ICONS'				=> 'icons.pak のエクスポート &amp; ダウンロード',
	'EXPORT_ICONS_EXPLAIN'		=> '%sこちらをクリックするとアイコンパックファイル <samp>icons.pak</samp> のダウンロードを開始します。パックファイル <samp>icons.pak</samp> を images/icons ディレクトリにアップロードすればアイコン設定をインストールできます。',
	'EXPORT_SMILIES'			=> 'smilies.pak のエクスポート &amp; ダウンロード',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sこちらをクリックするとスマイリーパックファイル <samp>smilies.pak</samp> のダウンロードを開始します。パックファイル <samp>smilies.pak</samp> を images/smilies ディレクトリにアップロードすればスマイリー設定をインストールできます。',

	'FIRST'			=> 'First',

	'ICONS_ADD'				=> 'アイコンの追加',
	'ICONS_NONE_ADDED'		=> 'アイコンは追加されませんでした',
	'ICONS_ONE_ADDED'		=> 'アイコンの追加に成功しました',
	'ICONS_ADDED'			=> 'アイコンの追加に成功しました',
	'ICONS_CONFIG'			=> 'アイコン設定',
	'ICONS_DELETED'			=> 'アイコンの削除に成功しました',
	'ICONS_EDIT'			=> 'アイコンの編集',
	'ICONS_ONE_EDITED'		=> 'アイコンの更新に成功しました',
	'ICONS_NONE_EDITED'		=> 'アイコンは更新されませんでした',
	'ICONS_EDITED'			=> 'アイコンの更新に成功しました',
	'ICONS_HEIGHT'			=> '画像の高さ( pix )',
	'ICONS_IMAGE'			=> 'アイコン画像',
	'ICONS_IMPORTED'		=> 'アイコンパックのインストールに成功しました',
	'ICONS_IMPORT_SUCCESS'	=> 'アイコンパックのインポートに成功しました',
	'ICONS_LOCATION'		=> '画像ファイルへのパス',
	'ICONS_NOT_DISPLAYED'	=> '以下のアイコンは投稿ページで表示されません',
	'ICONS_ORDER'			=> 'アイコンの並び順',
	'ICONS_URL'				=> 'アイコン画像',
	'ICONS_WIDTH'			=> '画像の横幅（ pix ）',
	'IMPORT_ICONS'			=> 'アイコンパックのインストール',
	'IMPORT_SMILIES'		=> 'スマイリーパックのインストール',

	'KEEP_ALL'			=> '上書きしない',

	'MASS_ADD_SMILIES'	=> 'スマイリーの追加',

	'NO_ICONS_ADD'		=> '追加できるアイコン画像がありません',
	'NO_ICONS_EDIT'		=> '修正できるアイコン画像がありません',
	'NO_ICONS_EXPORT'	=> 'アイコン画像が存在しないため、アイコンパックを作成する事ができません',
	'NO_ICONS_PAK'		=> 'アイコンパックが見つかりません',
	'NO_SMILIES_ADD'	=> '追加できるスマイリー画像がありません',
	'NO_SMILIES_EDIT'	=> '修正できるスマイリー画像がありません',
	'NO_SMILIES_EXPORT'	=> 'スマイリー画像が存在しないため、スマイリーパックを作成できません',
	'NO_SMILIES_PAK'	=> 'スマイリーパックが見つかりません',

	'PAK_FILE_NOT_READABLE'		=> 'パックファイル <samp>.pak</samp> のファイルアクセス権が読み込み不可になっています',

	'REPLACE_MATCHES'	=> '上書きする',

	'SELECT_PACKAGE'			=> 'パックファイルの選択',
	'SMILIES_ADD'				=> 'スマイリーの追加',
	'SMILIES_NONE_ADDED'		=> 'スマイリーは追加されませんでした',
	'SMILIES_ONE_ADDED'			=> 'スマイリーの追加に成功しました',
	'SMILIES_ADDED'				=> 'スマイリーの追加に成功しました',
	'SMILIES_CODE'				=> 'スマイリーコード',
	'SMILIES_CONFIG'			=> 'スマイリー設定',
	'SMILIES_DELETED'			=> 'スマイリーの削除に成功しました',
	'SMILIES_EDIT'				=> 'スマイリーの編集',
	'SMILIES_NONE_EDITED'		=> 'スマイリーは更新されませんでした',
	'SMILIES_ONE_EDITED'		=> 'スマイリーの更新に成功しました',
	'SMILIES_EDITED'			=> 'スマイリーの更新に成功しました',
	'SMILIE_NO_CODE'			=> 'コードが未入力だったため、スマイリー “%s” は無視されました',
	'SMILIE_NO_EMOTION'		=> '意味が未入力だったため、スマイリー “%s” は無視されました',
	'SMILIES_EMOTION'			=> '意味',
	'SMILIES_HEIGHT'			=> '画像の高さ（ pix ）',
	'SMILIES_IMAGE'				=> 'スマイリー画像',
	'SMILIES_IMPORTED'			=> 'スマイリーパックのインストールに成功しました',
	'SMILIES_IMPORT_SUCCESS'	=> 'スマイリーパックのインポートに成功しました',
	'SMILIES_LOCATION'			=> '画像ファイルへのパス',
	'SMILIES_NOT_DISPLAYED'		=> '以下のスマイリーは投稿ページのスマイリー欄に表示されません',
	'SMILIES_ORDER'				=> 'スマイリーの並び順',
	'SMILIES_URL'				=> 'スマイリー画像',
	'SMILIES_WIDTH'				=> '画像の横幅（ pix ）',

	'TOO_MANY_SMILIES'			=> 'スマイリーが最大数 %d に達しています',
	
	'WRONG_PAK_TYPE'	=> '指定したパック内のデータが適切なデータではありません',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'ここでは言語フィルターの追加、編集、削除を行うことができます。記事を表示する際、投稿記事内にもし言語フィルターに登録されている言葉があれば自動的に指定された言葉に置き換えられます。ユーザー登録の際、言語フィルターリストに追加されている言葉をユーザー名に含める事は可能です。部分一致としてワイルドカード(*)を使用できます（例： *test* という言語フィルターの場合、detestable, detest といった言葉も置換します）。',
	'ADD_WORD'				=> '言語フィルターの追加',

	'EDIT_WORD'		=> '言語フィルターの編集',
	'ENTER_WORD'	=> '「対象」 と 「置換」 の両方を入力する必要があります。',

	'NO_WORD'	=> '編集する言語フィルターが選択されていません。',

	'REPLACEMENT'	=> '置換',

	'UPDATE_WORD'	=> '言語フィルターの更新',

	'WORD'				=> '対象',
	'WORD_ADDED'		=> '言語フィルターの追加に成功しました',
	'WORD_REMOVED'		=> '言語フィルターの削除に成功しました',
	'WORD_UPDATED'		=> '言語フィルターの更新に成功しました',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'ここではランクの追加、編集、閲覧、削除を行うことができます。特別ランクを作成することもできます。特別ランクは AdminCP のユーザー管理を通してのみユーザーに割り当てる事が可能なランクです。特別ランクでないランクは投稿数に基づいてユーザーに割り当てられます。',
	'ADD_RANK'				=> 'ランクの追加',

	'MUST_SELECT_RANK'		=> 'ランクを選択する必要があります。',
	
	'NO_ASSIGNED_RANK'		=> '特別ランクの割り当てはありません。',
	'NO_RANK_TITLE'			=> 'ランク名を指定していません。',
	'NO_UPDATE_RANKS'		=> 'ランクの削除に成功しました。しかしながらこのランクを持つユーザーのアカウントは更新されていません。ユーザーのランク割り当てはアカウント毎に設定し直す必要があります。',

	'RANK_ADDED'			=> 'ランクの追加に成功しました',
	'RANK_IMAGE'			=> 'ランク画像',
	'RANK_IMAGE_EXPLAIN'	=> 'ランク画像を指定してください。パスは phpBB ルートディレクトリからの相対パスです。',
	'RANK_IMAGE_IN_USE'		=> '（使用中）',
	'RANK_MINIMUM'			=> '投稿数',
	'RANK_REMOVED'			=> 'ランクの削除に成功しました',
	'RANK_SPECIAL'			=> '特別ランクにする',
	'RANK_TITLE'			=> 'ランク名',
	'RANK_UPDATED'			=> 'ランクの更新に成功しました',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'ここでは拒否ユーザー名の追加と解除を行う事ができます。拒否ユーザー名をユーザー登録の際に使用する事はできません。部分一致としてワイルドカード(*)を使用できます。すでに存在しているユーザー名を拒否ユーザー名リストに加える事はできない点にご注意ください。',
	'ADD_DISALLOW_EXPLAIN'	=> '部分一致としてワイルドカード(*)を使用できます。',
	'ADD_DISALLOW_TITLE'	=> '拒否ユーザー名の追加',

	'DELETE_DISALLOW_EXPLAIN'	=> 'ユーザー名を拒否ユーザー名リストから解除する事ができます。',
	'DELETE_DISALLOW_TITLE'		=> '拒否ユーザー名の解除',
	'DISALLOWED_ALREADY'		=> '入力したユーザー名は既に拒否ユーザー名リストに存在しているか、言語フィルターリストに存在しているか、ユーザー登録されています。',
	'DISALLOWED_DELETED'		=> '拒否ユーザー名の解除に成功しました',
	'DISALLOW_SUCCESSFUL'		=> '拒否ユーザー名の追加に成功しました',

	'NO_DISALLOWED'				=> '拒否されたユーザー名はありません',
	'NO_USERNAME_SPECIFIED'		=> 'ユーザー名を指定していません',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'ここでは理由を管理できます。理由は ユーザーが投稿記事をモデレータに通報する時 と モデレータが記事の承認を却下する時 の選択肢として使用されます。デフォルト理由（ * でマークされています）は削除できません。デフォルト理由は該当する理由がない場合に使用されます。',
	'ADD_NEW_REASON'		=> '理由の追加',
	'AVAILABLE_TITLES'		=> 'ローカライズ済みの理由タイトル',
	
	'IS_NOT_TRANSLATED'			=> 'ローカライズされて<strong>いません</strong>',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'この理由はローカライズされて<strong>いません</strong>。つまりこの理由のタイトルと説明がそのままユーザーに表示されます。掲示板を利用するユーザーが日本語ユーザーのみなら理由のタイトルと説明が日本語でも問題ありませんが、そうでない場合は言語パック毎にローカライズしたほうが良いでしょう。ローカライズするには言語ファイル（language/｛言語パック名｝/mcp.php）に理由を追加してください。具体的には、report_reasons 配列内の各連想配列 TITLE と DESCRIPTION に値を追加する必要があります。',
	'IS_TRANSLATED'				=> 'ローカライズされています',
	'IS_TRANSLATED_EXPLAIN'		=> 'この理由はローカライズされています。つまり 理由タイトル と 理由の説明 が言語ファイル（language/ja/mcp.php）で定義されているため、その定義されたタイトルと説明が使用されます。',
	
	'NO_REASON'					=> '理由が見つかりません',
	'NO_REASON_INFO'			=> '理由タイトルと理由の説明の両方を入力する必要があります',
	'NO_REMOVE_DEFAULT_REASON'	=> '“Other” はデフォルト理由であるため削除する事はできません',

	'REASON_ADD'				=> '理由の追加',
	'REASON_ADDED'				=> '理由の追加に成功しました',
	'REASON_ALREADY_EXIST'		=> '入力した 理由タイトル は既に存在しています。別のタイトルを入力してください。',
	'REASON_DESCRIPTION'		=> '理由の説明',
	'REASON_DESC_TRANSLATED'	=> 'ユーザーに表示される 理由の説明',
	'REASON_EDIT'				=> '通報/却下 の理由の編集',
	'REASON_EDIT_EXPLAIN'		=> 'ここでは理由の追加と編集を行う事ができます。理由がローカライズ済みの場合（言語ファイルで定義されている場合）はそちらが使用されます。',
	'REASON_REMOVED'			=> '理由の削除に成功しました',
	'REASON_TITLE'				=> '理由タイトル',
	'REASON_TITLE_TRANSLATED'	=> 'ユーザーに表示される 理由タイトル',
	'REASON_UPDATED'			=> '理由の更新に成功しました',

	'USED_IN_REPORTS'		=> '通報回数',
));


?>