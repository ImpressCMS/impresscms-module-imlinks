<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/english/admin.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/
 
define( "_AM_IMLINKS_WARNINSTALL1", "<b>注意:</b>  %s という<u>フォルダ</u>は存在しています。 <br />削除してください。" );
define( "_AM_IMLINKS_WARNINSTALL2", "<b>注意:</b>  %s という<u>ファイル</u>が存在しています。<br />削除してください。" );
define( "_AM_IMLINKS_WARNINSTALL3", "<b>注意:</b>  %s という<u>フォルダ</u>がありません。<br />このフォルダはimLinksに必要なフォルダです。" );

define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );

define( "_AM_IMLINKS_BMODIFY", "編集" );
define( "_AM_IMLINKS_BDELETE", "削除" );
define( "_AM_IMLINKS_BCREATE", "作成" );
define( "_AM_IMLINKS_BADD", "追加" );
define( "_AM_IMLINKS_BAPPROVE", "承認" );
define( "_AM_IMLINKS_BIGNORE", "無視" );
define( "_AM_IMLINKS_BCANCEL", "キャンセル" );
define( "_AM_IMLINKS_BSAVE", "保存" );
define( "_AM_IMLINKS_BRESET", "リセット" );
define( "_AM_IMLINKS_BMOVE", "リンク移動" );
define( "_AM_IMLINKS_BUPLOAD", "アップロード" );
define( "_AM_IMLINKS_BDELETEIMAGE", "選択した画像を削除" );
define( "_AM_IMLINKS_BRETURN", "元いた所に戻る!" );
define( "_AM_IMLINKS_DBERROR", "データベースエラー: できましたら、このエラーをWF-Projectサイトで教えてください" );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "テキストオプション:" );
define( "_AM_IMLINKS_DISABLEHTML", " HTMLタグ使用不可" );
define( "_AM_IMLINKS_DISABLESMILEY", " スマイリー使用不可" );
define( "_AM_IMLINKS_DISABLEXCODE", " BBコード使用不可" );
define( "_AM_IMLINKS_DISABLEIMAGES", " 画像使用不可" );
define( "_AM_IMLINKS_DISABLEBREAK", " 改行を＜ｂｒ＞に変換する" );
define( "_AM_IMLINKS_UPLOADFILE", "リンクのアップロードに成功" );
define( "_AM_IMLINKS_NOMENUITEMS", "メニュー内に項目がありません" );
// Admin Bread crumb
define( "_AM_IMLINKS_PREFS", "一般設定" );
define( "_AM_IMLINKS_BUPDATE", "モジュールアップデート" );
define( "_AM_IMLINKS_BINDEX", "メイン" );
define( "_AM_IMLINKS_BPERMISSIONS", "権限" );
define( "_AM_IMLINKS_GOMODULE", "モジュールへ" );
define( "_AM_IMLINKS_ABOUT", "情報" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "カテゴリー: " );
define( "_AM_IMLINKS_SFILES", "リンク: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "送信日: " );
define( "_AM_IMLINKS_SMODREQUEST", "修正: " );
define( "_AM_IMLINKS_SREVIEWS", "レビュー: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "カテゴリ管理" );
define( "_AM_IMLINKS_MLINKS", "リンク管理" );
define( "_AM_IMLINKS_MLISTBROKEN", "リンク切れ一覧" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "リンクへのPing時間一覧" );
define( "_AM_IMLINKS_INDEXPAGE", "ページ管理" );
define( "_AM_IMLINKS_MUPLOADS", "画像アップロード" );

// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "カテゴリーを作成" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "カテゴリーを修正" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "カテゴリーリンクの移動" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "カテゴリー名:" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "リンクの移動に失敗: このカテゴリーに移動出来ませんでした" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "リンクの移動に失敗: このカテゴリはありませんでした" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "リンクの移動とデータベース更新が完了しました。" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "新しいカテゴリーを作成しました。" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "カテゴリーの修正が完了しました。" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "選択したカテゴリーの削除が完了しました。" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "注意: このカテゴリーを削除しますか？カテゴリーを削除するとこのカテゴリー内の全てのリンク情報とコメントが削除されます。" );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "リンク作成の前にカテゴリーを作成する必要があります。" );
define( "_AM_IMLINKS_FCATEGORY_GROUPPROMPT", "カテゴリアクセス権限:<div style='padding-top: 8px;'><span style='font-weight: normal;'>このカテゴリにアクセス出来るグループを設定してください。</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "カテゴリー名:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "表示順:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "サブカテゴリーとして設定:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "カテゴリー画像:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "カテゴリーの説明:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "カテゴリーの詳細説明:" );
/**
 * Index page Defines
 */
define( "_AM_IMLINKS_IPAGE_UPDATED", "インデックスページの修正が完了しました。" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "インデックスページ情報" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "インデックスページ修正" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "インデックスの画像:" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "インデックスタイトル:" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "インデックスヘッダー:" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "インデックスの冒頭説明:" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "インデックスフッター:" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "フッターの文字位置:" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "左寄せ" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "中央" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "右寄せ" );
/**
 * Permissions defines
 */
define( "_AM_IMLINKS_PERM_MANAGEMENT", "権限管理" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>確認:</b> ここでしっかりと設定を行わないと、リンク情報を見ることができない方が出る可能性があります。しっかりと確認してチェックしてください。</div>" );
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "カテゴリアクセス権限" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "カテゴリアクセス権限を設定してください" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "設定不能: まだカテゴリーが作成されてません!" );

/**
 * Upload defines
 */
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "画像のアップロードが完了しました。" );
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "エラー: アップロードファイルが選択されていません!" );
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "画像はすでに存在しています!" );
define( "_AM_IMLINKS_LINK_FILEDELETED", "リンクは削除されました。" );
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "リンク削除エラー: リンク情報がありません。" );
define( "_AM_IMLINKS_LINK_NOFILEERROR", "リンク削除エラー: 削除するリンクが選択されていません。" );
define( "_AM_IMLINKS_LINK_DELETEFILE", "確認: この画像リンクを削除しますか？" );
define( "_AM_IMLINKS_LINK_IMAGEINFO", "サーバー情報" );
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>PHP情報:</b>" );
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "セーフモード: " );
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "全体設定: " );
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "アップロード状態: " );
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "最大アップロードサイズ: " );
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "最大ポストサイズ: " );
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (これは問題を引き起こすかも)" );
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "ＧＤ画像ライブラリサポート: " );
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "ＧＤ画像ライブラリバージョン: " );
define( "_AM_IMLINKS_LINK_GDON", "<b>Enabled</b> (サムネイル可)" );
define( "_AM_IMLINKS_LINK_GDOFF", "<b>Disabled</b> (サムネイル不可)" );
define( "_AM_IMLINKS_LINK_OFF", "<b>いいえ</b>" );
define( "_AM_IMLINKS_LINK_ON", "<b>はい</b>" );
define( "_AM_IMLINKS_LINK_CATIMAGE", "カテゴリー画像" );
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "スクリーンショット画像" );
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "メイン画像" );
define( "_AM_IMLINKS_LINK_FCATIMAGE", "カテゴリー画像パス" );
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "スクリーンショット画像パス" );
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "メイン画像画像パス" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "アップロード画像: " );
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "アップロードパス: " );
define( "_AM_IMLINKS_LINK_FUPLOADURL", "アップロードＵＲＬ: " );
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "アップロード先を選択:" );
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "選択した画像の表示:" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "新しい画像を選択したアップロード先に送信:" );

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "モジュール管理" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "発行済みリンク:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "リンク名" );
define( "_AM_IMLINKS_MINDEX_POSTER", "送信者" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "状態" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "発行日" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "発行日だ" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "有効期限" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "日付が設定されていない" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "日付送信" );

define( "_AM_IMLINKS_MINDEX_ACTION", "アクション" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "確認: 条件に合うリンクはありません" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>ページ:<b> " );
define( '_AM_IMLINKS_MINDEX_PAGEINFOTXT', '<ul><li>imLinks メインページ詳細</li><li>簡単にイメージロゴやヘッダやフッタを変更することができます。</li></ul><br />確認: 選択した画像はimLinksで利用されます。' );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "応答時間" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "送信済みリンク" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "リンク情報待ち" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "リンク有効化待ち: " );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>認証</b> 有効化せずに認証する。" );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "新しいリンクを<b>編集</b>後に認証。" );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "新しいリンク情報を<b>削除</b>。" );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "条件に合うリンクはありません。" );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "新しいリンクデータが作成されました。" );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATING", "レート" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "ユーザ以外の投票禁止" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "投票情報は削除されました。" );

define( "_AM_IMLINKS_VOTE_TOTALRATE", "投票総数" );

// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "修正リクエスト総数: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "修正済みリンク" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "修正済みリンク情報" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "タイトル" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "最初の投稿者: " );
define( "_AM_IMLINKS_MOD_DATE", "修正日" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "この条件にあうリクエストはありません" );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "修正者: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "修正者" );
define( "_AM_IMLINKS_MOD_PROPOSED", "リンク詳細Proposed" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "リンク詳細Orginal" );
define( "_AM_IMLINKS_MOD_REQDELETED", "修正のリクエストを削除" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "リンク修正が完了しました" );

// Link management
define( "_AM_IMLINKS_LINK_ID", "リンクID: " );
define( "_AM_IMLINKS_LINK_IP", "修正者のＩＰアドレス: " );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "リンク情報修正" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "新しいリンクを作成" );
define( "_AM_IMLINKS_LINK_TITLE", "リンクタイトル: " );
define( "_AM_IMLINKS_LINK_LETTER", "読み分類(行): " );
define( "_AM_IMLINKS_LINK_DLURL", "リンクＵＲＬ: " );
define( "_AM_IMLINKS_LINK_DIRCA", " インターネットコンテンツレート: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "説明: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "メインカテゴリー: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", " オフラインにしますか？<br /><br /><span style='font-weight: normal;'>オフラインにするとユーザから見れなくなります。</span>" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " リンク情報を更新しますか？<br /><br /><span style='font-weight: normal;'>リンクに更新アイコンがつきます。</span>" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "スクリーンショット: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "このフォーラムに投稿しますか？" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "リンク有効期限:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />有効期限を削除:" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " 有効期限／時刻のセット" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>発行日のセット: </b>" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " 有効期限セット: " );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>S有効期限セット: </b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "Broken Reportを削除しますか？<br /><br /><span style='font-weight: normal;'><b>はい</b> を選択すると、レポートは削除され、リンク情報が再び有効になります。</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "スクリーンショットは%s フォルダの下で有効なファイル名でお願いします(例 shot.gif). イメージがないときは空白でお願いします。" );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "リンク承認:" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "新しいリンクが作成されました。" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "選択したリンクが修正されました。" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "選択したリンクを削除しますか？" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", " %s のリンクは削除されました。" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "リンクが承認されました。" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>リンクからニュースを作成</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "新着情報として新しいリンクを登録しますか？" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "ニュースカテゴリーを選択:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "タイトル:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>リンクタイトルは空白でお願いします Leave Blank to use Link Title</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "リンク発行者: " );

/**
 * Broken links defines
 */
define( "_AM_IMLINKS_SBROKENSUBMIT", "破損リンク: " );
define( "_AM_IMLINKS_BROKEN_FILE", "破損レポート" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "破損レポートは無視され削除されました。" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "認識状態が変更されました" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "了解状態が変更されました" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "破損レポート情報" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "破損レポート待ち:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>無視</b> 破損レポートのみを削除します。" );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>削除</b> 破損レポートおよびレポートされたリンクを削除します。" );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>編集</b> リンク情報を編集します" );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "認識" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "了解" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_TITLE", "タイトル" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "レポート者" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "送信者" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "送信日" );
define( "_AM_IMLINKS_BROKEN_ACTION", "実行" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "条件に合う破損レポートはありません。" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "リンク情報及び破損レポートを削除しました。" );

// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "このアイテムを修正" );
define( "_AM_IMLINKS_ICO_DELETE", "このアイテムを削除" );

define( "_AM_IMLINKS_ICO_ONLINE", "オンライン" );
define( "_AM_IMLINKS_ICO_OFFLINE", "オフライン" );
define( "_AM_IMLINKS_ICO_APPROVED", "認証済" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "未認証" );

define( "_AM_IMLINKS_ICO_LINK", "関連リンク" );
define( "_AM_IMLINKS_ICO_URL", "関連リンクを追加" );
define( "_AM_IMLINKS_ICO_ADD", "追加" );
define( "_AM_IMLINKS_ICO_APPROVE", "認証" );
define( "_AM_IMLINKS_ICO_STATS", "状態" );
define( "_AM_IMLINKS_ICO_VIEW", "このアイテムを見る" );

define( "_AM_IMLINKS_ICO_ACK", "破損レポートを認識" );
define( "_AM_IMLINKS_ICO_REPORT", "破損レポートを認識しますか？");
define( "_AM_IMLINKS_ICO_CONFIRM", "破損レポート了解" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "破損レポートを了解しますか?" );

// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "別のカテゴリを追加" );
define( "_AM_IMLINKS_MALTCAT", "カテゴリ交換管理" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "カテゴリ交換管理" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>交換するカテゴリはこのフォームから簡単追加削除ができます。</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', '交換カテゴリが保存されました' );

define( "_AM_IMLINKS_LISTBROKEN", "リンク表示は壊れることがあります。NB: 結果は正確でない可能性がありラフなガイドです。<br /><br />まずリンクが存在するかどうかを確認してください。<br /><br />" );
define( "_AM_IMLINKS_PINGTIMES", "それぞれのリンクへの最初のping時間を表示<br /><br />NB: この情報は正確ではない大体の情報として扱ってください。<br /><br />" );

define( "_AM_IMLINKS_NO_FORUM", "フォーラムの選択無し" );

define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "レート権限" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "選択したカテゴリのリンクレートを設定出来るグループを選択してください。" );

define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "リンク自動認証" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "リンクを自動で認証するグループを選択して下さい。" );

define( "_AM_IMLINKS_PERM_SPERMISSIONS", "リンク情報送信" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "このカテゴリにリンク情報を投稿出来るグループを選択してください。" );

define( "_AM_IMLINKS_PERM_APERMISSIONS", "管理グループ" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "このカテゴリの管理権限を持つグループを設定してください。" );

// added by McDonald
define( "_AM_IMLINKS_COUNTRY", "国:" );
define( "_AM_IMLINKS_KEYWORDS", "キーワード:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "キーワードは半角のコンマで分けてください (keyword1, keyword2, keyword3, ..)" );
define( "_AM_IMLINKS_CATTITLE", "カテゴリー" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Googleマップ" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Yahoomappu" );
define( "_AM_IMLINKS_LINK_BINGMAP", "Bing Maps" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "Check 確認" );
define( "_AM_IMLINKS_STREET1", "住所 1" );
define( "_AM_IMLINKS_STREET2", "住所 2 (optional)" );
define( "_AM_IMLINKS_TOWN", "都市名" );
define( "_AM_IMLINKS_STATE", "都道府県" );
define( "_AM_IMLINKS_ZIPCODE", "郵便番号" );
define( "_AM_IMLINKS_TELEPHONE", "電話番号" );
define( "_AM_IMLINKS_FAX", "Fax" );

// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>WARNING:</b> %s フォルダは書き込み不可になっています。 <br />このフォルダは書き込み権限が必要です。(CHMOD 777)" );
// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "送信者のリンク: " );
define( "_AM_IMLINKS_MOBILE", "携帯電話" );
define( "_AM_IMLINKS_CATSPONSOR", "カテゴリのスポンサーを選択:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "下のフォームからクライアントバナーを選ぶと保存されません・・？" );
define( "_AM_IMLINKS_BANNER", "バナー" );
define( "_AM_IMLINKS_FBANNER", "バナー" );
define( "_AM_IMLINKS_BANNERID", "バナーID選択:" );
define( "_AM_IMLINKS_BANNERIDDSC", "下のフォームからクライアントバナーを選ぶと保存されません・・？" );

// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "VAT Reg No" );
define( "_AM_IMLINKS_VATWIKI", "詳しい情報は <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a>に" );
define( "_AM_IMLINKS_EMAIL", "E-Mail" );
define( "_AM_IMLINKS_ICO_EXPIRE", "有効期限" );
define( "_AM_IMLINKS_LINK_NORESPONSE", '反応無し' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>アドレスフォーム</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>いろんなリンク設定</b>' );

// Version 1.06 RC1
define( "_AM_IMLINKS_READWRITEERROR", "アップロードファイルを選択していないかサーバーの設定に問題があります。" );
define( "_AM_IMLINKS_INVALIDFILESIZE", "無効なファイルサイズ" );
define( "_AM_IMLINKS_FILENAMEEMPTY", "ファイル名がありません" );
define( "_AM_IMLINKS_NOFILEUPLOAD", "エラーです。ファイルはアップロードされませんでした。" );
define( "_AM_IMLINKS_UPLOADERRORZERO", "エラー: 0　何かしらの問題がありました" );
define( "_AM_IMLINKS_UPLOADERRORONE", "エラー: 1　ファイルサイズが大きすぎます。" );
define( "_AM_IMLINKS_UPLOADERRORTWO", "エラー: 2　ファイルサイズが大きすぎます。" );
define( "_AM_IMLINKS_UPLOADERRORTHREE", "エラー: 3　ファイルの一部分しかアップロードされていません" );
define( "_AM_IMLINKS_UPLOADERRORFOUR", "エラー: 4　ファイルが選択されていません" );
define( "_AM_IMLINKS_UPLOADERRORFIVE", "エラー: 5　ファイルが選択されていません" );
define( "_AM_IMLINKS_NOUPLOADDIR", "アップロードフォルダがセットされていません" );
define( "_AM_IMLINKS_FAILOPENDIR", "フォルダを開くことができません: " );
define( "_AM_IMLINKS_FAILOPENDIRWRITEPERM", "フォルダの書き込み権限がありません: " );
define( "_AM_IMLINKS_FILESIZEMAXSIZE", "ファイルサイズ: %u. 最大許容サイズ: %u" );
define( "_AM_IMLINKS_FILESIZEMAXWIDTH", "画像の幅: %u. 最大許容幅: %u" );
define( "_AM_IMLINKS_FILESIZEMAXHEIGHT", "画像の高さ: %u. 最大許容高さ: %u" );
define( "_AM_IMLINKS_MIMENOTALLOW", "認められていないMIMEタイプです: " );
define( "_AM_IMLINKS_FAILEDUPLOADING", "アップロード失敗: " );
define( "_AM_IMLINKS_FILE", "この " );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " というファイルはすでに存在しています。名前を変えてリトライしてください。<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>アップロード中にエラー発生</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " ファイルはありません!" );
define( "_AM_IMLINKS_INFORMATION", "リンク情報" );
define( "_AM_IMLINKS_HITS", "ヒット: " );
define( "_AM_IMLINKS_PAGERANK", "ページランク: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "カテゴリそれ自身はサブカテゴリとしてセット出来ません!" );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "最新の情報を表示しますか?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "いくつ表示しますか?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 はこのオプションを無効にします." );

//version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "ドキュメント" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "画像無し" );
define( "_AM_IMLINKS_NOSELECTION", "選択無し" );
define( "_AM_IMLINKS_NOFILESELECT", "ファイル選択無し" );

// *** imLinks ***

//version 1.00 RC-1
define( '_AM_IMLINKS_COUNTRYDSC', '国指定がない場合は、表示しない.' );
define( '_AM_IMLINKS_MAPDSC', 'アイコンをクリックして新しいウインドウで地図を開くかどうか.<br />デフォルト: %s' );
define( '_AM_IMLINKS_LINKURLDSC', 'アイコンをクリックして新しいウインドウを開きます.<br />URLが正しいかどうかのチェックができます.' );
define( '_AM_IMLINKS_STREETTWODSC', 'このフィールドはオプションです。 空白なら使用しません' );
define( '_AM_IMLINKS_STATEDSC', '郡・地域などを入れてください。使わない場合は空白で結構です。' );
define( '_AM_IMLINKS_EMAILDSC', 'メールアドレスを入力してください。例:<br />- name@domain.com<br />- mailto:name@domain.com' );
define( '_AM_IMLINKS_CLONE', '**クローンE**' );
define( '_AM_IMLINKS_CLONELINK', 'クローンリンク' );
define( '_AM_IMLINKS_ICO_CLONE', 'このアイテムのクローン' );
define( '_AM_IMLINKS_RSSFEED', 'RSSフィード' );
define( '_AM_IMLINKS_RSSFEEDCFG', 'RSSフィード設定' );
define( '_AM_IMLINKS_RSSFEEDDSC', 'ここで、imLinksのRSSフィードの設定を行うことができます。<br />詳しいことは<a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a> サイトをご覧下さい.' );
define( '_AM_IMLINKS_RSSACTIVE', 'RSSフィードを有効にする' );
define( '_AM_IMLINKS_RSSACTIVEDSC', '<em>はい</em>で有効 <em>いいえ</em>で無効.' );
define( '_AM_IMLINKS_RSSTITLE', 'RSSフィードのタイトル' );
define( '_AM_IMLINKS_RSSTITLEDSC', 'フィードの名前です。このサービスを参照します. もしRSSファイルと同じ情報があなたのサイトに含まれている場合は、チャンネル名はサイト名称と同じにすべきです.' );
define( '_AM_IMLINKS_RSSLINKS', 'RSSフィードリンク' );
define( '_AM_IMLINKS_RSSLINKSDSC', 'フィードへのリンクURL.' );
define( '_AM_IMLINKS_RSSDESCRIPTION', 'RSSフィードの説明' );
define( '_AM_IMLINKS_RSSDESCRIPTIONDSC', 'チャンネルを説明する単語または文章を入力.' );
define( '_AM_IMLINKS_RSSIMAGE', 'RSSフィード画像' );
define( '_AM_IMLINKS_RSSIMAGEDSC', 'チャンネルの画像(GIF,JPEGまたはPNG)があれば.' );
define( '_AM_IMLINKS_RSSWIDTH', 'RSSフィード画像幅' );
define( '_AM_IMLINKS_RSSWIDTHDSC', '画像の横幅を設定します.<br />最大値は144ピクセルです' );
define( '_AM_IMLINKS_RSSHEIGHT', 'RSSフィード画像高さ' );
define( '_AM_IMLINKS_RSSHEIGHTDSC', '画像の高さ設定します.<br />最大値は400ピクセルです.' );
define( '_AM_IMLINKS_RSSIMGTITLE', 'RSS画像のタイトル' );
define( '_AM_IMLINKS_RSSIMGTITLEDSC', '画像の説明です。altタグとして使用されます。' );
define( '_AM_IMLINKS_RSSIMGLINK', 'RSS画像クリック時のリンク' );
define( '_AM_IMLINKS_RSSIMGLINKDSC', 'これは通常サイトのURLを入力します。' );
define( '_AM_IMLINKS_RSSTTL', 'RSSフィード TTL' );
define( '_AM_IMLINKS_RSSTTLDSC', 'TTLは有効期限です。' );
define( '_AM_IMLINKS_RSSWEBMASTER', 'RSSフィード管理者Email' );
define( '_AM_IMLINKS_RSSWEBMASTERDSC', 'このチャンネルの管理者のEmailアドレス.' );
define( '_AM_IMLINKS_RSSEDITOR', 'RSSフィードチャンネル記者Email' );
define( '_AM_IMLINKS_RSSEDITORDSC', 'このチャンネルの記入者のEmailアドレス.' );
define( '_AM_IMLINKS_RSSCATEGORY', 'RSSフィードカテゴリ' );
define( '_AM_IMLINKS_RSSCATEGORYDSC', 'RSSフィードのカテゴリを最低１つは選んでください.' );
define( '_AM_IMLINKS_RSSGENERATOR', 'RSSフィードプログラム' );
define( '_AM_IMLINKS_RSSGENERATORDSC', 'このチャンネルを生成するプログラム.' );
define( '_AM_IMLINKS_RSSCOPYRIGHT', 'RSSフィード著作権' );
define( '_AM_IMLINKS_RSSCOPYRIGHTDSC', 'このチャンネル内の記事の著作権.' );
define( '_AM_IMLINKS_RSSTOTAL', 'RSSフィード合計リンク' );
define( '_AM_IMLINKS_RSSTOTALDSC', 'RSSフィードで取得表示する記事数.' );
define( '_AM_IMLINKS_RSSDBUPDATED', 'データベースは無事に更新されました。' );
define( '_AM_IMLINKS_RSSOFFLINE', 'RSSフィードオフラインメッセージのタイトル' );
define( '_AM_IMLINKS_RSSOFFLINEDSC', 'RSSフィードがオフラインの時に表示するメッセージ' );
define( '_AM_IMLINKS_RSSOFFMSG', 'RSSフィードがオフラインです' );
define( '_AM_IMLINKS_RSSOFFMSGDSC', 'RSSフィードが有効でない理由を記入してください' );
define( '_AM_IMLINKS_RSSOFFTITLE', 'RSSフィードは無効になりました.' );
define( '_AM_IMLINKS_RSSOFFMSGDEF', 'RSSフィードは管理のため一時的に無効になっています.' );
define( '_AM_IMLINKS_RSSCLICKSUBMIT', 'クリックしてデータベースに保存してください。' );
define( '_AM_IMLINKS_COPYRIGHT', 'Copyright' );

define( '_MD_A_MYMENU_MYTPLSADMIN', 'テンプレート管理' );

// Version 1.01 RC-1
define( '_AM_IMLINKS_NOREPLY', 'No reply' );

// imLinks 1.03
define( '_AM_IMLINKS_NICEURL', 'Alternative title for url:' );
define( '_AM_IMLINKS_NICEURLDSC', 'Enter an alternative title for the link to be used in the url. When the option <em>Use nice urls</em> from Preferences is selected and this field is left empty, than the title of the link will be used.' );
define( '_AM_IMLINKS_TOMTOM', 'Add to TomTom' );
define( '_AM_IMLINKS_TOMTOMDSC', 'Enter the latitude and longitude of the address entered above.<br />You can find the geographic position of the address by using the website <a href="http://itouchmap.com/latlong.html" target="_blank">iTouchMap.com</a><br />Geographic latitude/longitude of the location should be in decimal degrees. May be negative; "N"/"S"/"W"/"E" suffix is not accepted. Default geodetic datum is WGS-84.<br />The geographic position should be entered as follows:<br />- Latitude: 57.2355591<br />- Longitude: -2.3535921' );
define( '_AM_IMLINKS_TOMTOMLONG', 'Enter longitude:' );
define( '_AM_IMLINKS_TOMTOMLAT', 'Enter latitude:' );
define( '_AM_IMLINKS_MOD_TTLAT', 'TomTom Latitude:' );
define( '_AM_IMLINKS_MOD_TTLONG', 'TomTom Longitude:' );
?>