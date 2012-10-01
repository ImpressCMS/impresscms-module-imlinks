<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WFLinks 1.06
*
* File: language/english/modinfo.php
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

// Module Info
// The name of this module
define("_MI_IMLINKS_NAME", "imLinks");

// A brief description of this module
define("_MI_IMLINKS_DESC", "便利なリンク集の作成");

// Names of blocks for this module (Not all module has blocks)
define("_MI_IMLINKS_BNAME1", "最新リンク");
define("_MI_IMLINKS_BNAME2", "トップリンク");

// Sub menu titles
define("_MI_IMLINKS_SMNAME1","新規登録");
define("_MI_IMLINKS_SMNAME2","人気");
define("_MI_IMLINKS_SMNAME3","評価");
define("_MI_IMLINKS_SMNAME4","登録情報");

// Names of admin menu items
define("_MI_IMLINKS_BINDEX","メイン");
define("_MI_IMLINKS_INDEXPAGE","インデックスページ管理");
define("_MI_IMLINKS_MCATEGORY","カテゴリー管理");
define("_MI_IMLINKS_MLINKS","リンク管理");
define("_MI_IMLINKS_MUPLOADS","画像アップロード");
define("_MI_IMLINKS_PERMISSIONS","権限管理");
define("_MI_IMLINKS_BLOCKADMIN","ブロック管理");
define("_MI_IMLINKS_MVOTEDATA","投票データ");

// Title of config items
define('_MI_IMLINKS_POPULAR', '人気リンクヒット数');
define('_MI_IMLINKS_POPULARDSC', '設定以上のリンクがあれば人気リンクにします。');

//Display Icons
define("_MI_IMLINKS_ICONDISPLAY","人気・新着リンク:");
define("_MI_IMLINKS_DISPLAYICONDSC", "人気・新着リンク表示方法。");
define("_MI_IMLINKS_DISPLAYICON1", "アイコン表示");
define("_MI_IMLINKS_DISPLAYICON2", "テキスト表示");
define("_MI_IMLINKS_DISPLAYICON3", "表示しない");

define("_MI_IMLINKS_DAYSNEW","新着とする日数:");
define("_MI_IMLINKS_DAYSNEWDSC","登録後新着扱いにする日数を入力します。");
define("_MI_IMLINKS_DAYSUPDATED","更新とする日数:");
define("_MI_IMLINKS_DAYSUPDATEDDSC","更新後更新扱いにする日数を入力します。");

define('_MI_IMLINKS_PERPAGE', 'リストカウントをリンク:');
define('_MI_IMLINKS_PERPAGEDSC', 'カテゴリ毎のリンク数を表示します。');

define('_MI_IMLINKS_USESHOTS', 'スクリーンショット表示');
define('_MI_IMLINKS_USESHOTSDSC', 'スクリーンショットを表示するかどうかを設定');
define('_MI_IMLINKS_SHOTWIDTH', '画像の表示幅');
define('_MI_IMLINKS_SHOTWIDTHDSC', 'スクリーンショットの表示幅を設定');
define('_MI_IMLINKS_SHOTHEIGHT', '画像の表示高さ');
define('_MI_IMLINKS_SHOTHEIGHTDSC', 'スクリーンショットの表示高さを設定');
define('_MI_IMLINKS_CHECKHOST', 'ダイレクトリンクを禁止するか? (leeching)');
define('_MI_IMLINKS_REFERERS', 'これらのサイトは直接リンクからリンクされます<br />#で区切ってください');
define("_MI_IMLINKS_ANONPOST","ゲスト投稿:");
define("_MI_IMLINKS_ANONPOSTDSC","ゲスト投稿を許可するかどうかを設定します?");
define('_MI_IMLINKS_AUTOAPPROVE','投稿を自動承認');
define('_MI_IMLINKS_AUTOAPPROVEDSC','チェック無しで自動承認します。');

define('_MI_IMLINKS_MAXFILESIZE','アップロードサイズ (KB)');
define('_MI_IMLINKS_MAXFILESIZEDSC','アップロード出来るファイルの最大サイズ');
define('_MI_IMLINKS_IMGWIDTH','アップロード画像幅');
define('_MI_IMLINKS_IMGWIDTHDSC','アップロード出来る画像の横幅の最大サイズ');
define('_MI_IMLINKS_IMGHEIGHT','アップロード画像高さ');
define('_MI_IMLINKS_IMGHEIGHTDSC','アップロード出来る画像の高さの最大サイズ');

define('_MI_IMLINKS_UPLOADDIR','アップロード先フォルダ (最後のスラッシュは不要)');
define('_MI_IMLINKS_ALLOWSUBMISS','投稿権限:');
define('_MI_IMLINKS_ALLOWSUBMISSDSC','ユーザのリンク情報投稿権限');
define('_MI_IMLINKS_ALLOWUPLOADS','アップロード権限:');
define('_MI_IMLINKS_ALLOWUPLOADSDSC','ユーザの画像アップロード権限');
define('_MI_IMLINKS_SCREENSHOTS','スクリーンショットのアップロード先フォルダ');
define('_MI_IMLINKS_CATEGORYIMG','画像アップロードフォルダ');
define('_MI_IMLINKS_MAINIMGDIR','メイン画像フォルダ');
define('_MI_IMLINKS_USETHUMBS', 'サムネイル使用:');
define("_MI_IMLINKS_USETHUMBSDSC", "JPG, GIF, PNGファイルをサポート.<div style='padding-top: 8px;'>サムネイル画像を使用するかどうかを設定します。いいえの場合は原画像を使用します。</div>");
define('_MI_IMLINKS_DATEFORMAT', 'タイムスタンプ:');
define('_MI_IMLINKS_DATEFORMATDSC', '時刻の表示形式を設定<br />詳しくは <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHPマニュアル</a>を');
define('_MI_IMLINKS_SHOWDISCLAIMER', '送信前に注意事項を表示するかどうか');
define('_MI_IMLINKS_SHOWDISCLAIMERDSC', '送信前に注意事項を表示するかどうか');
define('_MI_IMLINKS_SHOWLINKDISCL', 'ユーザリンクの前に注意事項を表示するかどうか');
define('_MI_IMLINKS_SHOWLINKDISCLDSC', 'リンクを開くの前に注意事項を表示するかどうか');
define('_MI_IMLINKS_DISCLAIMER', '送信時の注意事項:');
define('_MI_IMLINKS_LINKDISCLAIMER', 'リンク時の注意事項:');
define('_MI_IMLINKS_SUBCATS', 'サブカテゴリー:');
define("_MI_IMLINKS_SUBMITART", "シンク送信:");
define("_MI_IMLINKS_SUBMITARTDSC", "リンク情報を送信出来るグループを選択");
define("_MI_IMLINKS_RATINGGROUPS", "リンクランキング投票:");
define("_MI_IMLINKS_RATINGGROUPSDSC", "リンクのランクを投票出来るグループを選択");
define("_MI_IMLINKS_IMGUPDATE", "サムネイルを更新");
define("_MI_IMLINKS_IMGUPDATEDSC", "選択するとサムネイル画像を更新します。<br /><br />");
define("_MI_IMLINKS_QUALITY", "サムネイルの品質:");
define("_MI_IMLINKS_QUALITYDSC", "品質 最低: 0 最高: 100");
define("_MI_IMLINKS_KEEPASPECT", "画像のアスペクト比を維持（相似形にする）");
define("_MI_IMLINKS_KEEPASPECTDSC", "画像のアスペクト比を維持（相似形にする）");
define("_MI_IMLINKS_ADMINPAGE", "管理者インデックスリンク:");
define("_MI_IMLINKS_AMDMINPAGEDSC", "モジュール管理で表示する新着リンク");
define("_MI_IMLINKS_ARTICLESSORT", "標準のリンク並べ順:");
define("_MI_IMLINKS_ARTICLESSORTDSC", "標準のリンクソート状態を選択してください。");
define("_MI_IMLINKS_TITLE", "タイトル");
define("_MI_IMLINKS_RATING", "評価");
define("_MI_IMLINKS_WEIGHT", "表示順");
define("_MI_IMLINKS_POPULARITY", "人気");
define("_MI_IMLINKS_SUBMITTED2", "登校日");
define('_MI_IMLINKS_COPYRIGHT', '著作権表示:');
define('_MI_IMLINKS_COPYRIGHTDSC', 'リンクページに表示する著作権を選択してください');
// Description of each config items
define('_MI_IMLINKS_SUBCATSDSC', '「はい」だとサブカテゴリーを表示「いいえ」だとサブカテゴリーを表示しません。');

// Text for notifications
define('_MI_IMLINKS_GLOBAL_NOTIFY', '全体');
define('_MI_IMLINKS_GLOBAL_NOTIFYDSC', '全体オプション');
define('_MI_IMLINKS_CATEGORY_NOTIFY', 'カテゴリー');
define('_MI_IMLINKS_CATEGORY_NOTIFYDSC', 'カテゴリーのオプションを設定');
define('_MI_IMLINKS_LINK_NOTIFY', 'リンク');
define('_MI_IMLINKS_FILE_NOTIFYDSC', 'リンクオプションを設定.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY', '新カテゴリー');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', '新カテゴリー作成時に通知');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', '新カテゴリー作成時に通知を受け取る');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動送信 : 新しいリンクカテゴリ');                              

define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'リンク修正則クエスト');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'リンク修正リクエストの通知');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'リンク修正リクエスト時に通知を受け取る');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動送信 : リンク修正依頼');

define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY', '破損リンク');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', '破損リンク情報時に通知');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', '破損リンク情報時に通知を受け取る');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動送信 : リンクエラー');

define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'リンク登録');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'リンク登録時に通知 (承認待ち).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'リンク登録が行われたときに通知を受け取る（承認待ち）');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動送信 : 新着リンク');

define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY', '新着リンク');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP', '全てのリンク投稿時に通知');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'リンク投稿が行われたときに通知');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動送信 : 新リンク');

define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY', 'カテゴリーリンク送信');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'このカテゴリーにリンク投稿があった時に送信 (承認待ち)');   
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'このカテゴリーにリンク投稿があった時に送信 (承認待ち)');      
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動送信 : カテゴリーへのリンク登録'); 

define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY', 'カテゴリー新着リンク');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'カテゴリーへのリンク投稿時に通知');   
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'カテゴリーへのリンク投稿時に通知');      
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動送信 : カテゴリへの新リンク'); 

define('_MI_IMLINKS_LINK_APPROVE_NOTIFY', 'リンク承認');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYCAP', 'リンク承認時に通知');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYDSC', 'リンク承認時に通知');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動送信 : リンク承認');

define('_MI_IMLINKS_AUTHOR_INFO', "開発者情報");
define('_MI_IMLINKS_AUTHOR_NAME', "開発者");
define('_MI_IMLINKS_AUTHOR_DEVTEAM', "開発チーム");
define('_MI_IMLINKS_AUTHOR_WEBSITE', "開発者のサイト");
define('_MI_IMLINKS_AUTHOR_EMAIL', "開発者 email");
define('_MI_IMLINKS_AUTHOR_CREDITS', "Credits");
define('_MI_IMLINKS_MODULE_INFO', "モジュール開発情報");
define('_MI_IMLINKS_MODULE_STATUS', "開発状態");
define('_MI_IMLINKS_MODULE_DEMO', "デモサイト");
define('_MI_IMLINKS_MODULE_SUPPORT', "公式サポートサイト");
define('_MI_IMLINKS_MODULE_BUG', "このモジュールのバグ。問題点をレポート");
define('_MI_IMLINKS_MODULE_FEATURE', "このモジュールの新機能を提案");
define('_MI_IMLINKS_MODULE_DISCLAIMER', "注意事項");
define('_MI_IMLINKS_RELEASE', "リリース日: ");

define('_MI_IMLINKS_MODULE_MAILLIST', "WF-Project メーリングリスト");
define('_MI_IMLINKS_MODULE_MAILANNOUNCEMENTS', "アナウンスメーリングリスト");
define('_MI_IMLINKS_MODULE_MAILBUGS', "バグメーリングリスト");
define('_MI_IMLINKS_MODULE_MAILFEATURES', "特徴メーリングリスト");
define('_MI_IMLINKS_MODULE_MAILANNOUNCEMENTSDSC', "WF-Projectの最新情報をゲット");
define('_MI_IMLINKS_MODULE_MAILBUGSDSC', "問題点やバグに関するメーリングリスト");
define('_MI_IMLINKS_MODULE_MAILFEATURESDSC', "新機能依頼のメーリングリスト");

define('_MI_IMLINKS_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-Project WEBSITE. IN NO
EVENT WILL WF-PROJECTS BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-PROJECT HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_IMLINKS_AUTHOR_CREDITSTEXT',"The WF-Projects Team would like to thank the following people for their help and support during the development phase of this module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_IMLINKS_AUTHOR_BUGFIXES', "バグフィックス");

define('_MI_IMLINKS_COPYRIGHT2', 'Copyright' );
define('_MI_IMLINKS_COPYRIGHTIMAGE', "Unless stated otherwise, this Module (imLinks) and its images are copyright to the WF-Projects team.<br /><br />You have the permission to copy, edit and change imLinks to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the WF-Projects team.<br /><br />PageRank is a trademark of Google Inc.");

define('_MI_IMLINKS_SELECTFORUM', "フォーラム選択:");
define('_MI_IMLINKS_SELECTFORUMDSC', "imLinksが使うフォーラムを選択");

define('_MI_IMLINKS_DISPLAYFORUM1', "Newbb (all)");
define('_MI_IMLINKS_DISPLAYFORUM2', "IPB Forum");
define('_MI_IMLINKS_DISPLAYFORUM3', "PHPBB2 Module");

// added by McDonald
define( "_MI_IMLINKS_COUNTRY", "国:" );
define('_MI_IMLINKS_EDITOR', "使用するエディタ(管理者):");
define('_MI_IMLINKS_EDITORCHOICE', "管理者メニューで使用するエディタを設定してください。");
define('_MI_IMLINKS_EDITORUSER', "使用するエディタ(ユーザ):");
define('_MI_IMLINKS_EDITORCHOICEUSER', "通常メニューで使用するエディタを設定してください。");
define("_MI_IMLINKS_FORM_DHTML", "DHTML");
define("_MI_IMLINKS_FORM_COMPACT", "コンパクト");
define("_MI_IMLINKS_FORM_SPAW", "SPAWエディタ");
define("_MI_IMLINKS_FORM_HTMLAREA", "HtmlAreaエディタ");
define("_MI_IMLINKS_FORM_FCK", "FCKエディタ");
define("_MI_IMLINKS_FORM_KOIVI", "Koivi エディタ");
define("_MI_IMLINKS_FORM_INBETWEEN", "Inbetween");
define("_MI_IMLINKS_FORM_TINYEDITOR", "TinyEditor");
define("_MI_IMLINKS_FORM_TINYMCE", "TinyMCE");
define("_MI_IMLINKS_FORM_DHTMLEXT", "DHTML Extended");
define("_MI_IMLINKS_SORTCATS", "カテゴリーのソート順:");
define("_MI_IMLINKS_SORTCATSDSC", "カテゴリーの並べ替え方法");
define("_MI_IMLINKS_KEYLENGTH", "キーワードの最大も字数:");
define("_MI_IMLINKS_KEYLENGTHDSC", "デフォルトは255文字");
define("_MI_IMLINKS_OTHERLINKS", "送信者による他のリンクも表示するかどうか");
define("_MI_IMLINKS_OTHERLINKSDSC", "送信者が登録した他のリンクも表示");
define("_MI_IMLINKS_TOTALCHARS", "カテゴリー説明の文字数を設定");
define("_MI_IMLINKS_TOTALCHARSDSC", "カテゴリー説明の文字数を設定");
define("_MI_IMLINKS_QUICKVIEW", "Quickビューオプション");
define("_MI_IMLINKS_QUICKVIEWDSC", "Quickビューオプションを使うかどうかを選択");
define('_MI_IMLINKS_ICONS_CREDITS', "アイコン");
define("_MI_IMLINKS_SHOWSBOOKMARKS", "ソーシャルブックマークを表示");
define("_MI_IMLINKS_SHOWSBOOKMARKSDSC", "ソーシャルブックマークを表示するかどうかを選択");
define("_MI_IMLINKS_SHOWPAGERANK", "Google ページランクを表示");
define("_MI_IMLINKS_SHOWPAGERANKSDSC", "Google ページランクを表示するかを選択.");
define("_MI_IMLINKS_USERTAGDESCR", "ユーザがタグを登録出来るか:");
define("_MI_IMLINKS_USERTAGDSC", "ユーザがタグを入力出来るかどうかを選択");

// Version 1.05 RC5
define('_MI_IMLINKS_DATEFORMATADMIN', 'タイムスタンプ管理:');
define('_MI_IMLINKS_DATEFORMATADMINDSC', '基本的なimLinksタイムスタンプ<br />詳しくは<a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHPマニュアルを</a>');
define("_MI_IMLINKS_USEADDRESSDESCR", "住所と地図のオプションを利用");
define("_MI_IMLINKS_USEADDRESSDSC","住所と地図のオプションを利用");
define("_MI_IMLINKS_HEADERPRINT","[印刷オプション] ページヘッダを印刷");
define("_MI_IMLINKS_HEADERPRINTDSC","それぞれのリンクの前にヘッダが印刷される");
define("_MI_IMLINKS_LOGOURLPRINT","[印刷オプション] ロゴ印刷");
define("_MI_IMLINKS_LOGOURLDSCPRINT","ロゴを印刷するかどうか");
define("_MI_IMLINKS_FOOTERPRINT","[印刷オプション] ページフッタを印刷");
define("_MI_IMLINKS_FOOTERPRINTDSC","それぞれのリンクの後にフッタが印刷される");
define("_MI_IMLINKS_BNAME3","imLinks スポンサー");
define("_MI_IMLINKS_VCARD_CREDITS","vCard スクリプト ");

// Version 1.05 RC6
define("_MI_IMLINKS_FLAGIMG","国旗イメージ");
define("_MI_IMLINKS_FLAGIMGDSC","最後にスラッシュをつけずにURLを入力");
define("_MI_IMLINKS_CATEGORYIMGDSC","最後にスラッシュをつけずにURLを入力");
define("_MI_IMLINKS_SCREENSHOTSDSC","最後にスラッシュをつけずにURLを入力");
define("_MI_IMLINKS_MAINIMGDIRDSC","最後にスラッシュをつけずにURLを入力");
define("_MI_IMLINKS_USEAUTOSCRSHOT","自動スクリーンショットを使用");
define("_MI_IMLINKS_USEAUTOSCRSHOTDSC","自動でスクリーンショットを作成します。ただし全てのサイトで有効になるわけではありません。");
define("_MI_IMLINKS_MOZSHOT_CREDITS", "自動スクリーンショット ");
define("_MI_IMLINKS_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (コード礼賛巣は <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a> lisenceに従います)');

// Version 1.06 RC-1
define("_MI_IMLINKS_BNAME4", "imLinks タグクラウド");
define("_MI_IMLINKS_BNAME5", "imLinks トップタグ");

// Version 1.06 RC-3
define('_MI_IMLINKS_DISPLAYFORUM4', "Newbbex");
define("_MI_IMLINKS_TITLE_A", "タイトル (昇順)");
define("_MI_IMLINKS_TITLE_D", "タイトル (降順)");
define("_MI_IMLINKS_RATING_A", "アクセス数 (A)");
define("_MI_IMLINKS_RATING_D", "アクセス数 (D)");
define("_MI_IMLINKS_SUBMITTED_A", "登録日 (A)");
define("_MI_IMLINKS_SUBMITTED_D", "登録日 (D)");
define("_MI_IMLINKS_POPULARITY_A", "人気 (A)");
define("_MI_IMLINKS_POPULARITY_D", "人気 (D)");
define("_MI_IMLINKS_COUNTRY_A", "国 (A)");
define("_MI_IMLINKS_COUNTRY_D", "国 (D)");

// imLinks 1.00 RC-1
define( "_MI_IMLINKS_CAPTCHA", "送信フォームにキャプチャ（画像認証）を使う?" );
define( "_MI_IMLINKS_CAPTCHADSC", "送信フォームにCaptcha画像を使う場合は<em>はい</em>を選択下さい.<br />デフォルト: <em>はい</em>" );
define( "_MI_IMLINKS_LINKEDTERMS", "glossaryにリンクする?" );
define( "_MI_IMLINKS_LINKEDTERMSDSC", "これを使うにはimGlossaryモジュールのインストールが必要です." );
define( "_MI_IMLINKS_IMGLOSSARYDIR", "imGlossaryのフォルダ名:" );
define( "_MI_IMLINKS_IMGLOSSARYDIRDSC", "imGlossaryモジュールのフォルダ名を記入してください.<br />デフォルト: <em>imglossary</em>" );
define( '_MI_IMLINKS_ABOUTLICENSE', 'GNU General Public License (GPL) - a copy of the GNU license is enclosed (license.txt).' );
define( '_MI_IMLINKS_AUTOTHUMBSRC', '自動スクリーンショット作成ソースを選択してくださいt:' );
define( '_MI_IMLINKS_AUTOTHUMBSRCDSC', '詳しくは:<br />- <a href="http://www.thumbshots.org/" target="_blank">Thumbshots.org</a><br />- <a href="http://mozshot.nemui.org/" target="_blank">Mozshot</a>' );
define( '_MI_IMLINKS_CATCOLS', '１行に表示するカテゴリ数:' );
define( '_MI_IMLINKS_CATCOLSDSC', '行あたりのカテゴリ数を入力してください.<br />デフォルト: <em>2</em>' );
define( '_MI_IMLINKS_RSSFEED', 'RSSフィード' );
define( '_MI_IMLINKS_SHOWRATING', '評価を表示する?' );
define( '_MI_IMLINKS_SHOWRATINGDSC', '<em>はい</em> で評価を表示します。<em>いいえ</em> で非表示. 注意: これは権限設定は変更しません.' );

// imLinks 1.00 RC-2
define("_MI_IMLINKS_BNAME6", "ランダムリンク");

// imLinks 1.01
define( '_MI_IMLINKS_SHOWLEGEND', 'カテゴリの説明が必要' );
define( '_MI_IMLINKS_SHOWLEGENDDSC', 'このオプションでカテゴリアイコンの詳しい説明を表示します' );
define( '_MI_IMLINKS_LIGHTWINDOW', 'リンクをどうやってひらく？:' );
define( '_MI_IMLINKS_LIGHTWINDOWDSC', 'Select <em>Default</em> では新しいウインドウを開きます<br />
									   Select <em>LightWindow</em> では<a href="http://www.stickmanlabs.com/lightwindow/" target="_blank">LightWindow</a>を使って表示.<br />
									   Select <em>GreyBox</em> では<a href="http://orangoo.com/labs/GreyBox/" target="_blank">GreyBox</a>を使って表示.' );
define( '_MI_IMLINKS_DEFAULT', 'デフォルト' );

// imLinks 1.03
define( '_MI_IMLINKS_NICEURL', 'Use nice urls?' );
define( '_MI_IMLINKS_NICEURLDSC', 'Use nice urls for links.' );
define( '_MI_IMLINKS_TOMTOMAPI', 'TomTom API key:' );
define( '_MI_IMLINKS_TOMTOMAPIDSC', 'To have a <em>Add to TomTom</em> buttom displayed with the contact details of a link you need to enter your API key here.<br />A valid API key can be requested from add2TTsupport@tomtom.com' );
define( '_MI_IMLINKS_TOMTOMLOGO', 'Enter url for logo to display:' );
define( '_MI_IMLINKS_TOMTOMLOGODSC', 'Enter the url of the logo to display in the window <em>Starting TomTom Home</em>.<br />This logo will displayed together with the website name for the <em>Content provided by</em>.' );

// imLinks 1.12
define( '_MI_IMLINKS_SOCIALBTTNS', 'Show Social Media buttons' );
define( '_MI_IMLINKS_SOCIALBTTNSDSC', 'Select if you want to have Social Bookmarks (old style), Social Media buttons or Social Media buttons with privacy switch (German only). If you select <i>Social Share Privacy</i> the type of button is not taken into account.' );
define( '_IM_IMLINKS_SOCBOOK', 'Social Bookmarks' );
define( '_IM_IMLINKS_SOCMEDIA', 'Social Media' );
define( '_IM_IMLINKS_SOCMEDIAPRIVE', 'Social Share Privacy' );
define( '_MI_IMLINKS_HORICNT', 'Hor. counter' );
define( '_MI_IMLINKS_VERTCNT', 'Vert. counter' );
define( '_MI_IMLINKS_TWITTER', 'Twitter' );
define( '_MI_IMLINKS_TWEET', 'Tweet' );
define( '_MI_IMLINKS_TWITTERBTTN', 'Twitter button' );
define( '_MI_IMLINKS_TWITTERBTTNDSC', 'Choose a Twitter button style.' );
define( '_MI_IMLINKS_FACEBOOKBTTN', 'Facebook "I Like" button' );
define( '_MI_IMLINKS_FACEBOOKBTTNDSC', 'Choose a Facebook button style.' );
define( '_MI_IMLINKS_PLUSONEBTTN', 'Google +1 button' );
define( '_MI_IMLINKS_PLUSONEBTTNDSC', 'Choose a Google +1 button style.' );
?>