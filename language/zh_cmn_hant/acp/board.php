<?php
/**
*
* acp_board [正體中文]
*
* @package language
* @version $Id: board.php 10080 2009-08-31 14:57:04Z nickvergessen $
* @copyright (c) 2001 - 2007 phpBB TW Group (心靈捕手)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> '在這裡，您可以決定討論區的基本組態，設定適當的名稱以及描述，以及調整合適的時區與語系預設值。',
	'CUSTOM_DATEFORMAT'				=> '自訂...',
	'DEFAULT_DATE_FORMAT'			=> '時間格式',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> '時間格式相同於 PHP <code>date</code> 函式。',
	'DEFAULT_LANGUAGE'				=> '預設語言',
	'DEFAULT_STYLE'					=> '預設風格',
	'DISABLE_BOARD'					=> '關閉討論區',
	'DISABLE_BOARD_EXPLAIN'			=> '這個動作將使會員無法連結討論區。如果您希望，那麼您也可以輸入一段簡短的 (最多 255 個字元) 訊息去顯示。',
	'OVERRIDE_STYLE'				=> '覆蓋會員風格',
	'OVERRIDE_STYLE_EXPLAIN'		=> '用討論區的預設風格取代會員的風格。',
	'SITE_DESC'						=> '討論區描述',
	'SITE_NAME'						=> '討論區名稱',
	'SYSTEM_DST'					=> '開啟日光節約時間/<abbr title="Daylight Saving Time">DST (Daylight Saving Time)</abbr>',
	'SYSTEM_TIMEZONE'				=> '系統時區',
	'WARNINGS_EXPIRE'				=> '警告持續',
	'WARNINGS_EXPIRE_EXPLAIN'		=> '幾天後這份警告將到期，並從會員的記錄中自動消失。',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> '在這裡，您可以開啟/關閉數個討論區的特色。',

	'ALLOW_ATTACHMENTS'			=> '允許附加檔案',
	'ALLOW_BIRTHDAYS'			=> '允許輸入生日',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> '允許輸入生日以及在個人資料顯示年齡。請注意！在討論區首頁的生日列表由另外的負荷設定控制。',
	'ALLOW_BOOKMARKS'			=> '允許將主題加入我的最愛',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> '會員能夠貯藏其個人最愛的主題。',
	'ALLOW_BBCODE'				=> '允許使用 BBCode',
	'ALLOW_FORUM_NOTIFY'		=> '允許訂閱版面',
	'ALLOW_NAME_CHANGE'			=> '允許會員名稱變更',
	'ALLOW_NO_CENSORS'			=> '允許關閉字詞過濾',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> '會員可以選擇關閉在文章與私人訊息中的自動字詞過濾功能。',
	'ALLOW_PM_ATTACHMENTS'		=> '允許在私人訊息中附加檔案',
	'ALLOW_PM_REPORT'			=> '允許會員檢舉私人訊息',
	'ALLOW_PM_REPORT_EXPLAIN'	=> '如果啟用，那麼會員將有檢舉他們已接收私人訊息或傳送給論壇版主的選項。這些私人訊息將會顯示在 MCP 中。',
	'ALLOW_QUICK_REPLY'			=> '允許快速回覆',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> '這個設定定義快速回覆的啟用與否。如果啟用，那麼需要在版面的快速回覆選項也同時啟用。',
	'ALLOW_SIG'					=> '允許使用簽名檔',
	'ALLOW_SIG_BBCODE'			=> '允許在會員簽名檔中使用 BBCode',
	'ALLOW_SIG_FLASH'			=> '允許在會員簽名檔中使用 <code>[FLASH]</code> 的 BBCode 標籤',
	'ALLOW_SIG_IMG'				=> '允許在會員簽名檔中使用 <code>[IMG]</code> 的 BBCode 標籤',
	'ALLOW_SIG_LINKS'			=> '允許在會員簽名檔中使用網址連結',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> '如果不允許，那麼 <code>[URL]</code> BBCode 標籤以及超連結網址是無法使用的。',
	'ALLOW_SIG_SMILIES'			=> '允許在會員簽名檔中使用表情符號',
	'ALLOW_SMILIES'				=> '允許使用表情符號',
	'ALLOW_TOPIC_NOTIFY'		=> '允許訂閱主題',
	'BOARD_PM'					=> '私人訊息',
	'BOARD_PM_EXPLAIN'			=> '開啟或關閉所有的會員使用私人訊息。',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> '頭像一般是會員用於聯想到自己的一個小的，獨特的圖檔。根據風格，當檢視文章時，它們經常顯示在會員名稱的下面。在這裡，您可以決定會員如何定義他們的頭像。請注意！如果允許會員上傳頭像，您必須建立下面您所命名的資料夾，並確定這個資料夾對於網站伺服器是可寫入的。同時也請注意！那個檔案大小限制只對頭像上傳有效，對於連結的頭像是沒有限制的。',

	'ALLOW_AVATARS'					=> '啟用頭像',
	'ALLOW_AVATARS_EXPLAIN'			=> '允許一般頭像的使用；<br />如果您停用一般頭像或某些模式的頭像，這被停用的頭像將不再顯示於論壇上，但是會員仍然可由 UCP 下載他們自己的頭像。',
	'ALLOW_LOCAL'					=> '允許使用系統相簿頭像',
	'ALLOW_REMOTE'					=> '允許使用外部連結頭像',
	'ALLOW_REMOTE_EXPLAIN'			=> '頭像連結來自其他網站。',
	'ALLOW_REMOTE_UPLOAD'			=> '允許使用外部連結上傳頭像',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> '允許自另外的網站上傳頭像。',
	'ALLOW_UPLOAD'					=> '允許會員上傳頭像',
	'AVATAR_GALLERY_PATH'			=> '系統相簿路徑',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> '該路徑必須在 phpBB 的根目錄內，例如：<samp>images/avatars/gallery</samp>。',
	'AVATAR_STORAGE_PATH'			=> '頭像儲存路徑',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> '該路徑必須在 phpBB 的根目錄內，例如：<samp>images/avatars/upload</samp>。',
	'MAX_AVATAR_SIZE'				=> '頭像尺寸最大限制',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '寬 x 高 (像素)。',
	'MAX_FILESIZE'					=> '頭像檔案大小限制',
	'MAX_FILESIZE_EXPLAIN'			=> '允許上傳的頭像檔案大小。',
	'MIN_AVATAR_SIZE'				=> '頭像尺寸最小限制',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '寬 x 高 (像素)。',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> '在這裡，您可以設定所有關於私人訊息的預設值。',

	'ALLOW_BBCODE_PM'			=> '允許在私人訊息中使用 BBCode',
	'ALLOW_FLASH_PM'			=> '允許在私人訊息中使用 <code>[FLASH]</code> 的 BBCode 標籤',
	'ALLOW_FLASH_PM_EXPLAIN'	=> '注意！如果允許在私人訊息中使用動畫，那麼也必須視其權限為何。',
	'ALLOW_FORWARD_PM'			=> '允許會員轉寄私人訊息',
	'ALLOW_IMG_PM'				=> '允許在私人訊息中使用 <code>[IMG]</code> 的 BBCode 標籤',
	'ALLOW_MASS_PM'				=> '允許會員發送私人訊息給多個會員以及群組',
	'ALLOW_MASS_PM_EXPLAIN'		=> '在每個群組的設定頁面內，可以發送私人訊息給其他群組。',
	'ALLOW_PRINT_PM'			=> '允許在私人訊息中使用預覽列印',
	'ALLOW_QUOTE_PM'			=> '允許在私人訊息中使用引言回覆',
	'ALLOW_SIG_PM'				=> '允許在私人訊息中使用簽名檔',
	'ALLOW_SMILIES_PM'			=> '允許在私人訊息中使用表情符號',
	'BOXES_LIMIT'				=> '每個私人訊息信箱最大容量',
	'BOXES_LIMIT_EXPLAIN'		=> '會員無法接收超過這個最大容量的私人訊息。設定為 0，表示沒有限制。',
	'BOXES_MAX'					=> '私人訊息資料夾可用數量',
	'BOXES_MAX_EXPLAIN'			=> '預設會員可以建立儲存私人訊息個人資料夾的數量。',
	'ENABLE_PM_ICONS'			=> '能夠在私人訊息中使用主題圖示',
	'FULL_FOLDER_ACTION'		=> '塞爆資料夾的預設動作',
	'FULL_FOLDER_ACTION_EXPLAIN'=> '預設動作是針對如果會員的資料夾塞爆的處理原則，如果設定全部，那麼是不合適的。惟一的例外是「訊息發送夾」預設的動作為刪除舊的私人訊息。',
	'HOLD_NEW_MESSAGES'			=> '保留新的訊息',
	'PM_EDIT_TIME'				=> '限制編輯時間',
	'PM_EDIT_TIME_EXPLAIN'		=> '限制編輯尚未傳送之私人訊息的有效時間。設定為 0，表示沒有限制。',
	'PM_MAX_RECIPIENTS'			=> '允許收件人之最大數量',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> '在私人訊息中，允許收件人之最大數量。設定為 0，表示沒有限制。這個設定可以在每個群組的設定頁面再做調整。',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> '在這裡，您可以設定所有發表文章的預設值。',
	'ALLOW_POST_LINKS'					=> '允許在文章/私人訊息中使用網址連結功能',
	'ALLOW_POST_LINKS_EXPLAIN'			=> '如果不允許，那麼 <code>[URL]</code> BBCode 標籤以及超連結網址是無法使用的。',
	'ALLOW_POST_FLASH'					=> '允許在文章中使用 <code>[FLASH]</code> 的 BBCode 標籤',
	'ALLOW_POST_FLASH_EXPLAIN'			=> '如果不允許，那麼 <code>[FLASH]</code> BBCode 標籤在文章中是無法使用的。否則，權限系統必須控制會員可以使用 <code>[FLASH]</code> BBCode 標籤。',

	'BUMP_INTERVAL'					=> '推文時間間隔',
	'BUMP_INTERVAL_EXPLAIN'			=> '距離一個主題的最後發表文章多少時間 (分鐘，小時或天) 後，才能推文。',
	'CHAR_LIMIT'					=> '每篇文章最多字元數',
	'CHAR_LIMIT_EXPLAIN'			=> '每篇文章所允許發表的字元上限。設定為 0，表示沒有限制。',
	'DELETE_TIME'					=> '刪除時間限制',
	'DELETE_TIME_EXPLAIN'			=> '有效刪除新文章的時間限制。設定 0 表示停用此功能。',
	'DISPLAY_LAST_EDITED'			=> '顯示最後編輯時間資訊',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> '選擇是否在文章上顯示最後編輯的相關資訊。',
	'EDIT_TIME'						=> '限制編輯時間',
	'EDIT_TIME_EXPLAIN'				=> '限制編輯一篇新的文章之有效時間。設定為 0，表示沒有限制。',
	'FLOOD_INTERVAL'				=> '灌水時間間隔',
	'FLOOD_INTERVAL_EXPLAIN'		=> '發表新文章之間必須等待的秒數。要讓會員不受此限制，請修改其權限。',
	'HOT_THRESHOLD'					=> '熱門主題的門檻',
	'HOT_THRESHOLD_EXPLAIN'			=> '評價為熱門主題所需要的最少文章數。設定為 0，表示沒有熱門主題功能。',
	'MAX_POLL_OPTIONS'				=> '投票選項的最大數量',
	'MAX_POST_FONT_SIZE'			=> '每篇文章的最大字型',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> '在一篇文章中允許的最大字型。設定為 0，表示沒有限制。',
	'MAX_POST_IMG_HEIGHT'			=> '每篇文章的最大圖檔高度',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> '發文時允許一個圖檔/動畫的最大高度。設定為 0，表示沒有限制。',
	'MAX_POST_IMG_WIDTH'			=> '每篇文章的最大圖檔寬度',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> '發文時允許一個圖檔/動畫的最大寬度。設定為 0，表示沒有限制。',
	'MAX_POST_URLS'					=> '每篇文章的最多連結',
	'MAX_POST_URLS_EXPLAIN'			=> '在一篇文章中允許的最多連結數量。設定為 0，表示沒有限制。',
	'MIN_CHAR_LIMIT'				=> '每篇文章/私訊最少字元數',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> '每篇文章/私訊所允許發表的字元下限。',
	'POSTING'						=> '發表中',
	'POSTS_PER_PAGE'				=> '每頁顯示文章數',
	'QUOTE_DEPTH_LIMIT'				=> '每篇文章中的最多引言',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> '在一篇文章中允許的最多引言數量。設定為 0，表示沒有限制。',
	'SMILIES_LIMIT'					=> '每篇文章中的最多表情符號',
	'SMILIES_LIMIT_EXPLAIN'			=> '在一篇文章中允許的最多表情符號數量。設定為 0，表示沒有限制。',
	'SMILIES_PER_PAGE'				=> '每頁表情符號數',
	'TOPICS_PER_PAGE'				=> '每頁顯示主題數',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> '在這裡，您可以設定所有簽名檔的預設值。',

	'MAX_SIG_FONT_SIZE'				=> '簽名檔的最大字型',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> '會員簽名檔中允許的最大字型。設定為 0，表示沒有限制。',
	'MAX_SIG_IMG_HEIGHT'			=> '簽名檔的最大圖檔高度',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> '會員簽名檔中允許一個圖檔/動畫的最大高度。設定為 0，表示沒有限制。',
	'MAX_SIG_IMG_WIDTH'				=> '簽名檔的最大圖檔寬度',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> '會員簽名檔中允許一個圖檔/動畫的最大寬度。設定為 0，表示沒有限制。',
	'MAX_SIG_LENGTH'				=> '簽名檔的最大長度',
	'MAX_SIG_LENGTH_EXPLAIN'		=> '會員簽名檔中允許的最多字元數量。',
	'MAX_SIG_SMILIES'				=> '簽名檔的的最多表情符號',
	'MAX_SIG_SMILIES_EXPLAIN'		=> '會員簽名檔中允許的最多表情符號數量。設定為 0，表示沒有限制。',
	'MAX_SIG_URLS'					=> '簽名檔中的最多連結',
	'MAX_SIG_URLS_EXPLAIN'			=> '會員簽名檔中允許的最多連結數量。設定為 0，表示沒有限制。',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> '在這裡，您可以定義註冊和個人資料相關的設定',

	'ACC_ACTIVATION'			=> '帳號啟用',
	'ACC_ACTIVATION_EXPLAIN'	=> '這決定了會員是否可以在註冊後立刻登入討論區，還是必須進行確認。您也可以完全地停止新的註冊。',
	'NEW_MEMBER_POST_LIMIT'			=> '新會員文章限制',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> '新會員直到他們達到此文章數之前，都是在 <em>新註冊會員</em> 群組之內。您可以使用這個群組讓他們使用 PM 系統，或去檢視他們的文章。<strong>設定 0 表示停用此功能。</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> '預設為新註冊會員群組',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> '如果設定為是，那麼新會員文章限制不只是將新註冊會員放進 <em>新註冊會員</em> 群組, 而且將是他們的預設會員群組。如果您想要指派一個有預設等級且/或頭像的群組供會員繼承，這也許會派上用場。',

	'ACC_ADMIN'					=> '由管理員',
	'ACC_DISABLE'				=> '停止',
	'ACC_NONE'					=> '不必',
	'ACC_USER'					=> '由會員',
//	'ACC_USER_ADMIN'			=> '會員 + 管理員',
	'ALLOW_EMAIL_REUSE'			=> '允許 e-mail 位址重複使用',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> '不同的會員可以使用相同的 e-mail 位址註冊。',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA 傳真號碼',
	'COPPA_MAIL'				=> 'COPPA 郵件位址',
	'COPPA_MAIL_EXPLAIN'		=> '這是父母將要發送 COPPA 註冊表單的郵件位址。',
	'ENABLE_COPPA'				=> '啟用 COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> '這需要會員聲明他們是否大於 13 歲，以遵守美國 COPPA 法規。如果停用此功能，那麼 COPPA 會員群組將不再顯示。',
	'MAX_CHARS'					=> '最大',
	'MIN_CHARS'					=> '最小',
	'NO_AUTH_PLUGIN'			=> '沒有發現合適的認證外掛。',
	'PASSWORD_LENGTH'			=> '密碼長度',
	'PASSWORD_LENGTH_EXPLAIN'	=> '密碼的最少和最多字元數量。',
	'REG_LIMIT'					=> '註冊嘗試次數',
	'REG_LIMIT_EXPLAIN'			=> '會員在被暫停註冊前的確認代碼嘗試次數。',
	'USERNAME_ALPHA_ONLY'		=> '只能英文字母，數字',
	'USERNAME_ALPHA_SPACERS'	=> '英文字母，數字和空格',
	'USERNAME_ASCII'			=> 'ASCII (非萬國碼)',
	'USERNAME_LETTER_NUM'		=> '任何的字母和數字',
	'USERNAME_LETTER_NUM_SPACERS'	=> '任何的字母，數字和空格',
	'USERNAME_CHARS'			=> '限制會員名稱字元',
	'USERNAME_CHARS_ANY'		=> '任何的字元',
	'USERNAME_CHARS_EXPLAIN'	=> '限制可用於會員名稱的字元類型，包括：空格、-、+、_、[ 和 ]。',
	'USERNAME_LENGTH'			=> '會員名稱長度',
	'USERNAME_LENGTH_EXPLAIN'	=> '會員名稱的最少和最多字元數量。',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> '一般消息來源設定',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> '這個模組使用各種有效的 ATOM 消息來源，解析任何文章中的 BBCode，使它們可以在外部的消息來源中被閱讀。',

	'ACP_FEED_ENABLE'					=> '啟用消息來源',
	'ACP_FEED_ENABLE_EXPLAIN'			=> '開啟或關閉整個論壇的 ATOM 消息來源。<br />無論底下的選項設定為何，停用這個將關閉所有的消息來源。',
	'ACP_FEED_LIMIT'					=> '項目數量',
	'ACP_FEED_LIMIT_EXPLAIN'			=> '消息來源項目所要顯示的最大數量。',

	'ACP_FEED_OVERALL_FORUMS'			=> '啟用整個論壇之消息來源',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> '消息來源顯示論壇所有主題的最後發表之文章。',
	'ACP_FEED_OVERALL_FORUMS_LIMIT'		=> '在論壇消息來源中每頁所要顯示的項目數量',

	'ACP_FEED_OVERALL_TOPIC'			=> '啟用所有主題之消息來源',
	'ACP_FEED_OVERALL_TOPIC_EXPLAIN'	=> '啟用「所有主題」之消息來源。',
	'ACP_FEED_OVERALL_TOPIC_LIMIT'		=> '在主題消息來源中每頁所要顯示的項目數量',
	'ACP_FEED_FORUM'					=> '啟用每個版面之消息來源',
	'ACP_FEED_FORUM_EXPLAIN'			=> '單一版面的新文章。',
	'ACP_FEED_TOPIC'					=> '啟用每個主題之消息來源',
	'ACP_FEED_TOPIC_EXPLAIN'			=> '單一主題的新文章。',
	'ACP_FEED_NEWS'						=> '新聞之消息來源',
	'ACP_FEED_NEWS_EXPLAIN'				=> '自這些版面中拉出第一篇文章。沒有選擇版面將停用此功能。<br />以按住 <samp>CTRL</samp> 以及點選來選擇多個版面。',

	'ACP_FEED_GENERAL'					=> '一般消息來源設定',

	'ACP_FEED_ITEM_STATISTICS'			=> '項目統計',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> '下面的消息來源顯示個別的項目統計<br />(發表者、日期與時間、回覆數、觀看數)',
	'ACP_FEED_EXCLUDE_ID'				=> '排除這些版面',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> '來自這些版面的內容將 <strong>不包含在消息來源中</strong>。沒有選擇版面將自所有的版面拉出資料。<br />以按住 <samp>CTRL</samp> 以及點選來選擇/刪除多個版面。',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> '在這裡，您可以選擇以及設定 CAPTCHA 外掛，它們將以各種不同的方法拒絕所謂的廣告機器人嘗試註冊。',
	'AVAILABLE_CAPTCHAS'					=> '有用的外掛',
	'CAPTCHA_UNAVAILABLE'					=> '這 CAPTCHA 不能選擇，因為它沒有所需的要件。',
	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_3D'							=> 'GD 3D Captcha',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA 前景干擾',
	'CAPTCHA_GD_EXPLAIN'					=> '使用 GD 去產生更進階的 CAPTCHA。',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> '使用前景干擾去產生基於 GD 而較堅固的 CAPTCHA。',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA X 軸背景干擾',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> '使用這種較低的設定去產生基於 GD 而較堅固的 CAPTCHA。設定 0 將停用 X 軸背景干擾。',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA Y 軸背景干擾',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> '使用這種較低的設定去產生基於 GD 而較堅固的 CAPTCHA。設定 0 將停用 Y 軸背景干擾。',
	'CAPTCHA_GD_WAVE'						=> 'GD CAPTCHA 波形扭曲',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> '將波形扭曲的功能加入 CAPTCHA 中。',
	'CAPTCHA_GD_3D_NOISE'					=> '增加 3D 干擾物',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> '增加額外的物體到 CAPTCHA 中，覆蓋原來的字。',
	'CAPTCHA_GD_FONTS'						=> '使用不同的字體',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> '此設定控制許多不同的已使用之字體。您只可以使用預設字體或介紹已改變的字體。增加小寫字體也是可行的。',
	'CAPTCHA_FONT_DEFAULT'					=> '預設字體',
	'CAPTCHA_FONT_NEW'						=> '新的字體',
	'CAPTCHA_FONT_LOWER'					=> '也有小寫',
	'CAPTCHA_NO_GD'							=> 'CAPTCHA 沒有 GD',
	'CAPTCHA_PREVIEW_MSG'					=> '您所改變的確認代碼設定尚未儲存，這只是預覽。',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> '使用目前選擇的確認代碼，看起來就像這個樣子。',

	'CAPTCHA_SELECT'						=> '安裝 CAPTCHA 外掛',
	'CAPTCHA_SELECT_EXPLAIN'				=> '由下拉式選單中選取論壇所認證的 CAPTCHA 外掛。灰色的項目目前是沒有用的，而在使用前必須調整基本組態。',
	'CAPTCHA_CONFIGURE'						=> 'CAPTCHAs 設定',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> '為已選擇的 CAPTCHA 改變設定。.',
	'CONFIGURE'								=> '設定',
	'CAPTCHA_NO_OPTIONS'					=> '這 CAPTCHA 沒有設定選項。',

	'VISUAL_CONFIRM_POST'					=> '啟用訪客發文確認代碼',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> '當匿名使用者發文時，需要輸入一個隨機而符合圖片的代碼，以協助防止大量發文。',
	'VISUAL_CONFIRM_REG'					=> '啟用註冊確認代碼',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> '當新的使用者註冊時，需要輸入一個隨機而符合圖片的代碼，以協助防止大量註冊。',
	'VISUAL_CONFIRM_REFRESH'				=> '啟用使用者重新整理確認代碼',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> '如果在註冊時無法判定確認代碼，那麼允許使用者去重新讀取新的確認代碼。某些外掛不支援這個選項。',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> '這些細節定義發送 cookies 到會員瀏覽器的資料。在大部分情況下設定 cookie 預設值應該是足夠的。如果您需要做任何改變，那麼得謹慎，不正確的設定將使會員無法登入討論區。',

	'COOKIE_DOMAIN'				=> 'Cookie 網域',
	'COOKIE_NAME'				=> 'Cookie 名稱',
	'COOKIE_PATH'				=> 'Cookie 路徑',
	'COOKIE_SECURE'				=> 'Cookie 安全',
	'COOKIE_SECURE_EXPLAIN'		=> '如果您的伺服器使用 SSL 機制，那麼啟用這個選項，否則請停用。如果沒有使用 SSL 機制而啟用這個選項，那麼當重新導向時將會導致伺服器錯誤。',
	'ONLINE_LENGTH'				=> '檢視上線的時間間距',
	'ONLINE_LENGTH_EXPLAIN'		=> '已離線的使用者在多少分鐘後將不出現在「誰在線上」列表。此值越高則產生列表需要越大的處理過程。',
	'SESSION_LENGTH'			=> 'Session 長度',
	'SESSION_LENGTH_EXPLAIN'	=> 'Session 多少時間後將終止，單位：秒。',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> '在這裡，您可以啟用以及停用某些討論區功能以減少需要處理的資料量。對於大多數伺服器並不需要停用任何功能。不過，在系統或共用主機的環境下，停用您真正不需要的功能是有利的。您也可以指定系統負荷以及有效 sessions 的限制，超過限制討論區將關閉。',

	'CUSTOM_PROFILE_FIELDS'			=> '自訂個人資料欄位',
	'LIMIT_LOAD'					=> '系統負荷限制',
	'LIMIT_LOAD_EXPLAIN'			=> '如果系統的每分鐘平均負荷超過這個值，那麼討論區將無法連線。值 1.0 等於一個處理器的 100% 使用率。只有在基於 UNIX 的伺服器，才有這個功能以及可得資訊。',
	'LIMIT_SESSIONS'				=> '限制 sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> '如果在一分鐘內的 sessions 數量超過這個值，那麼討論區將無法連線。設定為 0，表示沒有限制。',
	'LOAD_CPF_MEMBERLIST'			=> '允許風格在會員列表中顯示自訂個人資料欄位',
	'LOAD_CPF_VIEWPROFILE'			=> '在會員個人資料中顯示自訂個人資料欄位',
	'LOAD_CPF_VIEWTOPIC'			=> '在主題頁面中顯示自訂個人資料欄位',
	'LOAD_USER_ACTIVITY'			=> '顯示會員的活動',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> '在會員個人資料以及會員控制台中，顯示最常討論的主題/版面。在超過百萬篇文章的討論區，建議停用此功能。',
	'RECOMPILE_STYLES'				=> '重新編輯舊的風格組件',
	'RECOMPILE_STYLES_EXPLAIN'		=> '檢查在檔案系統中已更新的風格組件並重新編輯。',
	'YES_ANON_READ_MARKING'			=> '啟用訪客主題標示',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> '為訪客儲存已讀/未讀狀態。如果停用，那麼對於訪客而言文章總是顯示為已讀。',
	'YES_BIRTHDAYS'					=> '啟用生日列表',
	'YES_BIRTHDAYS_EXPLAIN'			=> '如果停用，那麼生日列表將不再顯示。為了讓此設定生效，討論區特色設定也需要允許會員輸入生日。',
	'YES_JUMPBOX'					=> '顯示跳頁',
	'YES_MODERATORS'				=> '顯示討論區版主',
	'YES_ONLINE'					=> '顯示誰在線上列表',
	'YES_ONLINE_EXPLAIN'			=> '在首頁，版面和主題頁面中顯示線上使用者資訊。',
	'YES_ONLINE_GUESTS'				=> '顯示線上訪客列表',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> '在檢視誰在線上時，顯示訪客 (匿名使用者) 資訊。',
	'YES_ONLINE_TRACK'				=> '顯示會員上線/離線資訊',
	'YES_ONLINE_TRACK_EXPLAIN'		=> '在個人資料和主題頁面中顯示會員上線/離線資訊。',
	'YES_POST_MARKING'				=> '啟用加小點的主題',
	'YES_POST_MARKING_EXPLAIN'		=> '指出會員有參與發表的主題。',
	'YES_READ_MARKING'				=> '啟用伺服器端主題標示',
	'YES_READ_MARKING_EXPLAIN'		=> '在資料庫中儲存已讀/未讀資訊，而不只是一個 cookie。',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB 支援認證的外掛或模組。這些允許您決定當會員登入討論區時如何被認證。預設下，提供三個外掛；DB、LDAP、以及 Apache。並不是所有的方式都需要額外的資訊，所以您只需要填滿所選擇的方式之相關的欄位即可。',

	'AUTH_METHOD'				=> '請選擇一個認證的方式',

	'APACHE_SETUP_BEFORE_USE'	=> '在您轉換 phpBB 到這個認證方式以前，您必須安裝 apache 認證。記住！您用於 apache 認證的會員名稱必須和 phpBB 的會員名稱相同。Apache 認證只能用於 mod_php (不含 CGI 版本) 以及停用 safe_mode。',

	'LDAP_DN'						=> 'LDAP 基礎 <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> '這是個卓越的名字 (Distinguished Name)，用來指出會員資訊，例如：<samp>o=My Company,c=US</samp>。',
	'LDAP_EMAIL'					=> 'LDAP e-mail 屬性',
	'LDAP_EMAIL_EXPLAIN'			=> '設定它為您會員輸入的 e-mail 屬性名稱 (如果存在的話)，以便於為新會員自動設定 e-mail 位址，留空的話將導致第一次登入的會員之 e-mail 位址為空。',
	'LDAP_INCORRECT_USER_PASSWORD'	=> '使用特定的會員名稱/密碼連結 LDAP 伺服器失敗。',
	'LDAP_NO_EMAIL'					=> '特定的 e-mail 屬性不存在。',
	'LDAP_NO_IDENTITY'				=> '無法為 %s 找到登入身份。',
	'LDAP_PASSWORD'					=> 'LDAP 密碼',
	'LDAP_PASSWORD_EXPLAIN'			=> '留白以便於使用匿名瀏覽。否則，為上面的會員填入密碼。這需要使用 Active Directory Servers。<strong>警告:</strong> 這個密碼將以清楚的文字儲存在資料庫中，對於每個可瀏覽資料庫，或者可以檢視此設定頁面的會員，都是可以看見的。',
	'LDAP_PORT'						=> 'LDAP 伺服器埠號',
	'LDAP_PORT_EXPLAIN'				=> '隨便您指定用於連接 LDAP 伺服器的埠號，預設埠號為 389。',
	'LDAP_SERVER'					=> 'LDAP 伺服器名稱',
	'LDAP_SERVER_EXPLAIN'			=> '如果正在使用 LDAP，那麼這是 LDAP 伺服器的主機名稱或 IP 位址。例如：您可以指定像這樣的網址 ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> '這是用於搜尋一個已給予登入身份的關鍵字，例如：<var>uid</var>、<var>sn</var>、...等。',
	'LDAP_USER'						=> 'LDAP 會員  <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> '留白以便於使用匿名瀏覽。如果填入，那麼 phpBB 將使用特定卓越的名字在嘗試登入時去尋找正確的會員，例如：<samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>。這需要使用 Active Directory Servers。',
	'LDAP_USER_FILTER'				=> 'LDAP 會員過濾',
	'LDAP_USER_FILTER_EXPLAIN'		=> '隨便您更進一步以額外的過濾器去限制搜尋的目標。例如：<samp>objectClass=posixGroup</samp> 將導致 <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp> 的結果。',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> '在這裡，您可以定義伺服器和網域名稱相關的設定。請確認您所輸入的資料是正確的，錯誤的設定將導致 e-mail 包含不正確的資訊。當輸入網域名稱時，記住不包含 http:// 或其他通訊協議。如果您知道您的伺服器使用一個不同的連接埠時，那麼才需要更改埠號，絕大部分使用的連接埠號都是 80。',

	'ENABLE_GZIP'				=> '啟用 GZip 壓縮',
	'ENABLE_GZIP_EXPLAIN'		=> '產生的內容將在發送到使用者之前被壓縮。這能減少網路流量，但是會同時增加伺服器和客戶端的 CPU 使用量。需要加載 PHP 的延伸功能。',
	'FORCE_SERVER_VARS'			=> '強迫伺服器 URL 設定',
	'FORCE_SERVER_VARS_EXPLAIN'	=> '如果設定為是，那麼在此定義的伺服器設定將自動地使用有利的決定值。',
	'ICONS_PATH'				=> '主題圖示儲存路徑',
	'ICONS_PATH_EXPLAIN'		=> '位於 phpBB 根目錄底下的路徑，例如：<samp>images/icons</samp>。',
	'PATH_SETTINGS'				=> '路徑設定',
	'RANKS_PATH'				=> '等級圖示儲存路徑',
	'RANKS_PATH_EXPLAIN'		=> '位於 phpBB 根目錄底下的路徑，例如：<samp>images/ranks</samp>。',
	'SCRIPT_PATH'				=> 'Script 路徑',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB 相對於網域名稱的路徑，例如：<samp>/phpBB3</samp>。',
	'SERVER_NAME'				=> '網域名稱',
	'SERVER_NAME_EXPLAIN'		=> '討論區所在的網域名稱 (例如：<samp>www.example.com</samp>)。',
	'SERVER_PORT'				=> '伺服器連接埠',
	'SERVER_PORT_EXPLAIN'		=> '伺服器運行的連接埠，通常是 80，如果不同才需要更改。',
	'SERVER_PROTOCOL'			=> '伺服器通訊協議',
	'SERVER_PROTOCOL_EXPLAIN'	=> '如果強迫設定，這將用於伺服器通訊協議。如果留白或未強迫設定，那麼此協議由 cookie 安全性設定決定 (<samp>http://</samp> 或 <samp>https://</samp>)。',
	'SERVER_URL_SETTINGS'		=> '伺服器 URL 設定',
	'SMILIES_PATH'				=> '表情符號儲存路徑',
	'SMILIES_PATH_EXPLAIN'		=> '位於 phpBB 根目錄底下的路徑，例如：<samp>images/smilies</samp>。',
	'UPLOAD_ICONS_PATH'			=> '副檔名群組圖示儲存路徑',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> '位於 phpBB 根目錄底下的路徑，例如：<samp>images/upload_icons</samp>。',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> '在這裡，您可以定義 session 和登入的相關設定。',

	'ALL'							=> '所有',
	'ALLOW_AUTOLOGIN'				=> '允許自動登入',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> '決定當會員拜訪討論區時是否可以自動登入。',
	'AUTOLOGIN_LENGTH'				=> '自動登入關鍵值到期長度 (天數)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> '在多少天後移除自動登入關鍵值，設定為 0，將沒有限制。',
	'BROWSER_VALID'					=> '瀏覽器驗證',
	'BROWSER_VALID_EXPLAIN'			=> '為了改進每個 session 的安全，啟用瀏覽器驗證。',
	'CHECK_DNSBL'					=> '檢查 IP 以抵禦 DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> '如果啟用，那麼會員的 IP 位址將被檢查以抵禦下面在註冊和發文時的 DNSBL 服務：<a href="http://spamcop.net">spamcop.net</a> 以及 <a href="http://www.spamhaus.org">www.spamhaus.org</a>。這個檢查也許要花費一些時間，依伺服器的設定情形而定。如果速度變慢或產生太多錯誤報告，那麼建議停用這個檢查。',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> '檢查 e-mail 網域名稱之有效的 MX 記錄',
	'EMAIL_CHECK_MX_EXPLAIN'		=> '如果啟用，那麼會員在註冊和修改個人資料時所提供的 email 網域名稱之有效的 MX 記錄將被檢查。',
	'FORCE_PASS_CHANGE'				=> '強迫密碼變更',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> '需要會員在設定的天數之後更改密碼。設定為 0，將沒有限制。',
	'FORM_TIME_MAX'					=> '送出表單的最大時間',
	'FORM_TIME_MAX_EXPLAIN'			=> '會員必須在這個時間內送出表單。設定為 -1 將沒有限制。注意！如果  session 終止，那麼表單將會變成無效，不管您的設定為何。',
	'FORM_SID_GUESTS'				=> '限制訪客 sessions 表單',
	'FORM_SID_GUESTS_EXPLAIN'		=> '如果啟用，那麼訪客所產生問題的表單將被視為 session-例外的。這會引起某些 ISP 出問題。',
	'FORWARDED_FOR_VALID'			=> '有效的 <var>X_FORWARDED_FOR</var> 開頭',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> '只有在發送的 <var>X_FORWARDED_FOR</var> 開頭等於前一次請求中的開頭才可繼續 sessions。封鎖時也將檢查 <var>X_FORWARDED_FOR</var> 中的 IP。',
	'IP_VALID'						=> 'Session IP 驗證',
	'IP_VALID_EXPLAIN'				=> '決定會員的 IP 如何用於 session 驗證；<samp>所有</samp> 表示比較完整的位址，<samp>A.B.C</samp> 表示比較開頭的 x.x.x，<samp>A.B</samp> 表示比較開頭的 x.x，<samp>沒有</samp> 表示取消驗證。在 IPv6 位址 <samp>A.B.C</samp> 表示比較前四個區塊以及 <samp>A.B</samp> 表示比較前三個區塊。',
	'MAX_LOGIN_ATTEMPTS'			=> '嘗試登入的最大次數',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> '登入失敗次數超過後，會員需要額外的確認代碼驗證。',
	'NO_IP_VALIDATION'				=> '沒有',
	'NO_REF_VALIDATION'				=> '沒有',
	'PASSWORD_TYPE'					=> '密碼複雜度',
	'PASSWORD_TYPE_EXPLAIN'			=> '決定當要設定或變更密碼時的複雜程度，隨後的選項包含先前的。',
	'PASS_TYPE_ALPHA'				=> '必須包含英文字母和數字',
	'PASS_TYPE_ANY'					=> '沒有要求',
	'PASS_TYPE_CASE'				=> '必須包含大小寫英文字母',
	'PASS_TYPE_SYMBOL'				=> '必須包含符號',
	'REF_HOST'						=> '只有有效的主機',
	'REF_PATH'						=> '也要有效的路徑',
	'REFERER_VALID'					=> '有效的回傳',
	'REFERER_VALID_EXPLAIN'			=> '如果啟用，那麼發文的回傳請求，將針對主機或 script 路徑的設定而被檢查。這對於使用多個網域名稱或外部登入者，也許會引起一些問題。',
	'TPL_ALLOW_PHP'					=> '允許在樣板中使用 PHP',
	'TPL_ALLOW_PHP_EXPLAIN'			=> '如果啟用這個選項，<code>PHP</code> 和 <code>INCLUDEPHP</code> 語法將在樣板中被辨認和解析。',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> '這個資訊用於當討論區向您的會員發送 e-mail 時。請確認您所指定 e-mail 位址是有效的，任何被退回或無法投遞的訊息都將被發送到那個位址。如果您的主機不提供本地 (基於 PHP 的) e-mail 服務，那麼您可以直接使用 SMTP 發送訊息。這需要合適的伺服器位址 (假如不清楚，請詢問提供者)。如果伺服器需要驗證 (並且只有在需要時) 那麼輸入必要的會員名稱、密碼以及驗證方式。',

	'ADMIN_EMAIL'					=> '返回 e-mail 位址',
	'ADMIN_EMAIL_EXPLAIN'			=> '這將是所有的 e-mail 之返回位址。在 e-mail 中，它將用於 <samp>Return-Path</samp> 和 <samp>Sender</samp>。',
	'BOARD_EMAIL_FORM'				=> '會員經由討論區發送 e-mail',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> '會員能夠經由討論區發送 e-mail 而不顯示他們的 e-mail 位址。',
	'BOARD_HIDE_EMAILS'				=> '隱藏 e-mail 位址',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> '這個功能保持 e-mail 位址完全隱密。',
	'CONTACT_EMAIL'					=> '聯絡 e-mail 位址',
	'CONTACT_EMAIL_EXPLAIN'			=> '這個位址將使用在任何需要指定聯絡地點的場合，例如：廣告信、錯誤輸出、...等。在 e-mail 中，它將用於 <samp>From</samp> 和 <samp>Reply-To</samp>。',
	'EMAIL_FUNCTION_NAME'			=> 'E-mail 函數名稱',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> '透過 PHP 用於發送 e-mail 的函數。',
	'EMAIL_PACKAGE_SIZE'			=> 'E-mail 包裹大小',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> '這是在一個包裹中允許的最大 e-mail 數量。這個設定適用於內部訊息審核；如果您有收到無法傳送的通知，那麼設定為 0。',
	'EMAIL_SIG'						=> 'E-mail 簽名',
	'EMAIL_SIG_EXPLAIN'				=> '這段文字將附加在討論區所有發送的 e-mail 中。',
	'ENABLE_EMAIL'					=> '允許討論區發送 e-mail',
	'ENABLE_EMAIL_EXPLAIN'			=> '如果停用，那麼將沒有任何 e-mail 會被討論區發送。<em>注意！由會員或管理員啟用帳號的設定者，必須啟用這個設定。如果停用此設定，那麼新的帳號將不需要啟用的程序。</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTP 驗證方式',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> '只有在設定過會員名稱/密碼時才有用，如果您不確定使用何種方式，那麼請詢問您的提供者。',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP 密碼',
	'SMTP_PASSWORD_EXPLAIN'			=> '只有當您的 SMTP 伺服器需要它時才要輸入。',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP 伺服器連接埠',
	'SMTP_PORT_EXPLAIN'				=> '只有在您知道您的 SMTP 伺服器運行在一個不同的連接埠時才需要變更。',
	'SMTP_SERVER'					=> 'SMTP 伺服器位址',
	'SMTP_SETTINGS'					=> 'SMTP 設定',
	'SMTP_USERNAME'					=> 'SMTP 會員名稱',
	'SMTP_USERNAME_EXPLAIN'			=> '只有當您的 SMTP 伺服器需要它時才要輸入。',
	'USE_SMTP'						=> '使用 SMTP 伺服器發送 e-mail',
	'USE_SMTP_EXPLAIN'				=> '選擇「是」，如果您想要或必須經由 SMTP 伺服器而不是本地的信件函數發送 e-mail。',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> '在這裡，您可以啟用並控制會員使用 Jabber 發送即時訊息和討論區通知。Jabber 是任何人都可以使用的開放原始碼通訊協議。某些 Jabber 包含入口或傳送的服務允許您聯絡在其他網路上的會員。並非所有的伺服器都提供所有的傳送，通訊協議上的改變將阻止傳送的操作。請確認輸入的是已經註冊的帳號細節，phpBB 將會使用您在此所輸入的資料。',

	'JAB_ENABLE'				=> '啟用 Jabber',
	'JAB_ENABLE_EXPLAIN'		=> '允許使用 Jabber 發送訊息和通知。',
	'JAB_GTALK_NOTE'			=> '請注意！因為沒有找到 <samp>dns_get_record</samp> 函數，那個 GTalk 將無作用。這個函數在 PHP4 是無效的，並且無法在 Windows 作業平台上執行。它目前無法在 BSD-based 系統運作，包含 Mac OS。',
	'JAB_PACKAGE_SIZE'			=> 'Jabber 包裹大小',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> '這是一個包裹中發送的訊息數量。設定為 0，訊息將立即發送而不會延遲。',
	'JAB_PASSWORD'				=> 'Jabber 密碼',
	'JAB_PORT'					=> 'Jabber 連接埠',
	'JAB_PORT_EXPLAIN'			=> '除非您知道這個連接埠不是 5222，否則留白。',
	'JAB_SERVER'				=> 'Jabber 伺服器',
	'JAB_SERVER_EXPLAIN'		=> '檢視 %sjabber.org%s 上的伺服器列表。',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber 設定變更成功。',
	'JAB_USE_SSL'				=> '使用 SSL 連接',
	'JAB_USE_SSL_EXPLAIN'		=> '如果啟用，那麼安全連接將試著被建立。如果 5222 已經被指定，那麼 Jabber 連接埠將修改為 5223。',
	'JAB_USERNAME'				=> 'Jabber 會員名稱或 JID',
	'JAB_USERNAME_EXPLAIN'		=> '請指定一個已經註冊的會員名稱或一個有效的 JID。此會員名稱將無法被檢查是否有效。如果您只有輸入會員名稱，那麼您的 JID 將是您的會員名稱以及上頭所指定的伺服器。此外，請詳述有效的 JID，例如：「user@jabber.org」。',
));

?>