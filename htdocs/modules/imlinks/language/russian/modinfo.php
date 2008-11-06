<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
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
* @version		$Id$ Russian translation. Charset: utf-8 (without BOM)
*/

// Module Info
// The name of this module
define("_MI_IMLINKS_NAME", "imLinks");

// A brief description of this module
define("_MI_IMLINKS_DESC", "Создание секции ссылок, где пользователи могут размещать и оценивать различные ссылки.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_IMLINKS_BNAME1", "Последние ссылки");
define("_MI_IMLINKS_BNAME2", "Топ ссылок");

// Sub menu titles
define("_MI_IMLINKS_SMNAME1", "Разместить");
define("_MI_IMLINKS_SMNAME2", "Популярные");
define("_MI_IMLINKS_SMNAME3", "Топ оцененных");
define("_MI_IMLINKS_SMNAME4", "Новые ссылки");

// Names of admin menu items
define("_MI_IMLINKS_BINDEX", "Индекс");
define("_MI_IMLINKS_INDEXPAGE", "Индексная страница");
define("_MI_IMLINKS_MCATEGORY", "Категории");
define("_MI_IMLINKS_MLINKS", "Ссылки");
define("_MI_IMLINKS_MUPLOADS", "Изображения");
define("_MI_IMLINKS_PERMISSIONS", "Права доступа");
define("_MI_IMLINKS_BLOCKADMIN", "Блоки");
define("_MI_IMLINKS_MVOTEDATA", "Голосование");

// Title of config items
define('_MI_IMLINKS_POPULAR', 'Число популярности');
define('_MI_IMLINKS_POPULARDSC', 'Количество обращений к ссылке до получения ей статуса полулярности.');

//Display Icons
define("_MI_IMLINKS_ICONDISPLAY", "Отображение ссылок");
define("_MI_IMLINKS_DISPLAYICONDSC", "Выбрать способ отображения популярных и новых иконок в списке ссылок.");
define("_MI_IMLINKS_DISPLAYICON1", "Показывать как иконки");
define("_MI_IMLINKS_DISPLAYICON2", "Показывать как текст");
define("_MI_IMLINKS_DISPLAYICON3", "Не показывать");

define("_MI_IMLINKS_DAYSNEW", "Новизна ссылки");
define("_MI_IMLINKS_DAYSNEWDSC", "Количество дней, в течение которых ссылка считается новой.");
define("_MI_IMLINKS_DAYSUPDATED", "Обновленность ссылки");
define("_MI_IMLINKS_DAYSUPDATEDDSC", "Количество дней, в течение которых ссылка будет считаться обновленной.");

define('_MI_IMLINKS_PERPAGE', 'Ссылок в списке');
define('_MI_IMLINKS_PERPAGEDSC', 'Количество ссылок, показываемых в каждом списке категории.');

define('_MI_IMLINKS_USESHOTS', 'Показывать картинку образа экрана?');
define('_MI_IMLINKS_USESHOTSDSC', 'Выбрать Да для показа образов экрана для каждой ссылки');
define('_MI_IMLINKS_SHOTWIDTH', 'Ширина картинки');
define('_MI_IMLINKS_SHOTWIDTHDSC', 'Ширина картинки образа экрана');
define('_MI_IMLINKS_SHOTHEIGHT', 'Высота картинки');
define('_MI_IMLINKS_SHOTHEIGHTDSC', 'Высота картинки образа экрана');
define('_MI_IMLINKS_CHECKHOST', 'Disallow direct link linking? (leeching)');
define('_MI_IMLINKS_REFERERS', 'These sites can directly link to your links <br />Разделять #');
define("_MI_IMLINKS_ANONPOST", "Анонимное размещение");
define("_MI_IMLINKS_ANONPOSTDSC", "Разрешить гостям размещать ссылки и загружать контент на Ваш сайт?");
define('_MI_IMLINKS_AUTOAPPROVE', 'Auto Approve Submitted links');
define('_MI_IMLINKS_AUTOAPPROVEDSC', 'Select to approve submitted links without moderation.');

define('_MI_IMLINKS_MAXFILESIZE', 'Размер загружаемого файла (KB)');
define('_MI_IMLINKS_MAXFILESIZEDSC', 'Максимальный размер ссылки, разрешенный для загрузки.');
define('_MI_IMLINKS_IMGWIDTH', 'Ширина загружаемой картинки');
define('_MI_IMLINKS_IMGWIDTHDSC', 'Максимальный размер файла картинки, разрешенный для загрузки изображения ссылок');
define('_MI_IMLINKS_IMGHEIGHT', 'Высота загружаемой картинки');
define('_MI_IMLINKS_IMGHEIGHTDSC', 'Максимальная высота картинки, зарешенная для загрузки изображения ссылки');

define('_MI_IMLINKS_UPLOADDIR', 'Каталог для загрузки (без завершающего слэша)');
define('_MI_IMLINKS_ALLOWSUBMISS', 'User Submissions:');
define('_MI_IMLINKS_ALLOWSUBMISSDSC', 'Разрешить пользователям размещать ссылки?');
define('_MI_IMLINKS_ALLOWUPLOADS', 'User Uploads:');
define('_MI_IMLINKS_ALLOWUPLOADSDSC', 'Разрешить пользователям размещать ссылки напрямую на Ваш сайт');
define('_MI_IMLINKS_SCREENSHOTS', 'Каталог для загрузки изображений экрана');
define('_MI_IMLINKS_CATEGORYIMG', 'Каталог для загрузки картинок категории');
define('_MI_IMLINKS_MAINIMGDIR', 'Основной каталог для картинок');
define('_MI_IMLINKS_USETHUMBS', 'Использовать набросок?');
define("_MI_IMLINKS_USETHUMBSDSC", "Поддерживаемые типы файлов: JPG, GIF, PNG.<div style='padding-top: 8px;'>imLinks will use thumb nails for images. Set to 'No' to use orginal image if the server does not support this option.</div>");
define('_MI_IMLINKS_DATEFORMAT', 'Формат даты:');
define('_MI_IMLINKS_DATEFORMATDSC', 'Формат даты по умолчанию для imLinks.<br />Смотрите <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHP руководство</a>');
define('_MI_IMLINKS_SHOWDISCLAIMER', 'Показать предупреждение об ответственности перед размещением?');
define('_MI_IMLINKS_SHOWDISCLAIMERDSC', 'Перед тем, как пользователь сможет разместить ссылку могут быть показаны правила');
define('_MI_IMLINKS_SHOWLINKDISCL', 'Показать сообщение об отвественности перед размещением ссылки?');
define('_MI_IMLINKS_SHOWLINKDISCLDSC', 'Show link regulations before open a link?');
define('_MI_IMLINKS_DISCLAIMER', 'Текст предупреждения об ответственности при размещении ссылки:');
define('_MI_IMLINKS_LINKDISCLAIMER', 'Текст предупреждения об ответственности при создании ссылки:');
define('_MI_IMLINKS_SUBCATS', 'Показывать подкатегории?');
define("_MI_IMLINKS_SUBMITART", "Размещено ссылок:");
define("_MI_IMLINKS_SUBMITARTDSC", "Выбор групп, которые могут размещать новы ссылки.");
define("_MI_IMLINKS_RATINGGROUPS", "Оценено ссылок:");
define("_MI_IMLINKS_RATINGGROUPSDSC", "Выбрать группы, которые могут оценивать ссылки.");
define("_MI_IMLINKS_IMGUPDATE", "Обновлять наброски?");
define("_MI_IMLINKS_IMGUPDATEDSC", "If selected Thumbnail images will be updated at each page render, otherwise the first thumbnail image will be used regardless. <br /><br />");
define("_MI_IMLINKS_QUALITY", "Качество наброска (контрольки):");
define("_MI_IMLINKS_QUALITYDSC", "Худшее: 0, Лучшее: 100");
define("_MI_IMLINKS_KEEPASPECT", "Сохранить пропорции изображения?");
define("_MI_IMLINKS_KEEPASPECTDSC", "");
define("_MI_IMLINKS_ADMINPAGE", "Кол-во ссылок для администратора:");
define("_MI_IMLINKS_AMDMINPAGEDSC", "Количество новых ссылок, показываемых администратору.");
define("_MI_IMLINKS_ARTICLESSORT", "Порядок ссылок по умолчанию:");
define("_MI_IMLINKS_ARTICLESSORTDSC", "Выбрать порядок отображения списка ссылок.");
define("_MI_IMLINKS_TITLE", "Заголовок");
define("_MI_IMLINKS_RATING", "Оценка");
define("_MI_IMLINKS_WEIGHT", "Вес");
define("_MI_IMLINKS_POPULARITY", "Популярность");
define("_MI_IMLINKS_SUBMITTED2", "Дата размещения");
define('_MI_IMLINKS_COPYRIGHT', 'Показывать сообщение о защите прав?');
define('_MI_IMLINKS_COPYRIGHTDSC', 'Select to display a copyright notice on link page.');
// Description of each config items
define('_MI_IMLINKS_SUBCATSDSC', 'Выберите ДА для показа подкатегорий. Выберите НЕТ, если Вы желаете скрыть подкатегории в списке');

// Text for notifications
define('_MI_IMLINKS_GLOBAL_NOTIFY', 'Общие');
define('_MI_IMLINKS_GLOBAL_NOTIFYDSC', 'Общие опции оповещений.');
define('_MI_IMLINKS_CATEGORY_NOTIFY', 'Категория');
define('_MI_IMLINKS_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current link category.');
define('_MI_IMLINKS_LINK_NOTIFY', 'Ссылка');
define('_MI_IMLINKS_FILE_NOTIFYDSC', 'Notification options that apply to the current link.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'Новая категория');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Оповестить меня, когда будет создана новая категория ссылок.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receive notification when a new link category is created.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : Новая категория ссылок');                              

define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Запрос о редактировании ссылки');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Оповестить меня о любом запросе на редактирование ссылки.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Receive notification when any link modification request is submitted.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : Запрос на редактирование ссылки');

define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Обнаружена сбойная ссылка');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Оповестить меня, когда будет сообщено о любой сбойной ссылке.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Receive notification when any broken link report is submitted.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : Сообщение осбойной ссылке');

define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'Размещение ссылки');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Оповестить меня, когда любая новая ссылка будет размещена (ожидающая одобрения).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Receive notification when any new link is submitted (awaiting approval).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : Размещена новая ссылка');

define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY', 'Новая ссылка');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Оповестить меня, когда будет отправлена любая новая ссылка.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Receive notification when any new link is posted.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : New link');

define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY', 'Размещена ссылка');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Оповестить меня, когда будет размщена новая ссылка (ожидающая одобрения) в текущей категории.');   
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Receive notification when a new link is submitted (awaiting approval) to the current category.');      
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : В категории размщена новая ссылка'); 

define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY', 'Новая ссылка');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Оповестить меня, когда новая ссылка отправлена в текущую категорию.');   
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Receive notification when a new link is posted to the current category.');      
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : New link in category'); 

define('_MI_IMLINKS_LINK_APPROVE_NOTIFY', 'Одобрение ссылки');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYCAP', 'Оповестить меня, когда эта ссылка будет одобрена.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYDSC', 'Получить оповещение, когда эта ссылка будет одоббрена.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : Link Approved');

define('_MI_IMLINKS_AUTHOR_INFO', "Информация о разработчиках");
define('_MI_IMLINKS_AUTHOR_NAME', "Разработчик");
define('_MI_IMLINKS_AUTHOR_DEVTEAM', "Команда разработчиков");
define('_MI_IMLINKS_AUTHOR_WEBSITE', "Вэбсайт разработчиков");
define('_MI_IMLINKS_AUTHOR_EMAIL', "Email разработчика");
define('_MI_IMLINKS_AUTHOR_CREDITS', "Участники");
define('_MI_IMLINKS_MODULE_INFO', "Module Development Information");
define('_MI_IMLINKS_MODULE_STATUS', "Development Status");
define('_MI_IMLINKS_MODULE_DEMO', "Демо сайт");
define('_MI_IMLINKS_MODULE_SUPPORT', "Официальный сайт поддержки");
define('_MI_IMLINKS_MODULE_BUG', "Report a bug for this module");
define('_MI_IMLINKS_MODULE_FEATURE', "Suggest a new feature for this module");
define('_MI_IMLINKS_MODULE_DISCLAIMER', "Отказ от ответственности");
define('_MI_IMLINKS_RELEASE', "Дата релиза: ");

define('_MI_IMLINKS_MODULE_MAILLIST', "Список рассылки WF-Project");
define('_MI_IMLINKS_MODULE_MAILANNOUNCEMENTS', "Список рассылки анонсов");
define('_MI_IMLINKS_MODULE_MAILBUGS', "Список рассылки ошибок");
define('_MI_IMLINKS_MODULE_MAILFEATURES', "Список рассылки свойств");
define('_MI_IMLINKS_MODULE_MAILANNOUNCEMENTSDSC', "Возьмите последние анонсы о WF-Project.");
define('_MI_IMLINKS_MODULE_MAILBUGSDSC', "Список рассылки отслеживания ошибок");
define('_MI_IMLINKS_MODULE_MAILFEATURESDSC', "Список рассылки для запросов о новых свойствах.");

define('_MI_IMLINKS_WARNINGTEXT', "ПРОГРАММНОЕ ОБЕСПЕЧЕНИЕ ПРЕДОСТАВЛЯЕТСЯ WF-PROJECTS \"КАК ЕСТЬ\" И \"ВСЕМИ ОШИБКАМИ.\"
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

define('_MI_IMLINKS_AUTHOR_CREDITSTEXT',"The WF-Projects Team would like to thank the following people for their help and support during the development phase of this module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333, GibaPhp");
define('_MI_IMLINKS_AUTHOR_BUGFIXES', "История исправления ошибок");

define('_MI_IMLINKS_COPYRIGHT2', 'Copyright' );
define('_MI_IMLINKS_COPYRIGHTIMAGE', "Unless stated otherwise, this Module (imLinks) and its images are copyright to the ImpressCMS community.<br /><br />You have the permission to copy, edit and change imLinks to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the ImpressCMS team.<br /><br />PageRank is a trademark of Google Inc.");

define('_MI_IMLINKS_SELECTFORUM', "Выбор форума:");
define('_MI_IMLINKS_SELECTFORUMDSC', "Выбрать форум, который Вы инсталлируете и будете использовать с imLinks.");

define('_MI_IMLINKS_DISPLAYFORUM1', "Newbb (все)");
define('_MI_IMLINKS_DISPLAYFORUM2', "IPB форум");
define('_MI_IMLINKS_DISPLAYFORUM3', "PHPBB2 модуль");

// added by McDonald
define( "_MI_IMLINKS_COUNTRY", "Страна:" );
define('_MI_IMLINKS_EDITOR', "Редактор для администратора:");
define('_MI_IMLINKS_EDITORCHOICE', "Select the editor to use for admin side. If you have a 'simple' install (e.g you use only XOOPS core editor class, provided in the standard xoops core package), then you can just select DHTML and Compact");
define('_MI_IMLINKS_EDITORUSER', "Редактор для пользователя:");
define('_MI_IMLINKS_EDITORCHOICEUSER', "Select the editor to use for user side. If you have a 'simple' install (e.g you use only XOOPS core editor class, provided in the standard xoops core package), then you can just select DHTML and Compact");
define("_MI_IMLINKS_FORM_DHTML", "DHTML");
define("_MI_IMLINKS_FORM_COMPACT", "Compact");
define("_MI_IMLINKS_FORM_SPAW", "Spaw Editor");
define("_MI_IMLINKS_FORM_HTMLAREA", "HtmlArea Editor");
define("_MI_IMLINKS_FORM_FCK", "FCK Editor");
define("_MI_IMLINKS_FORM_KOIVI", "Koivi Editor");
define("_MI_IMLINKS_FORM_INBETWEEN", "Inbetween");
define("_MI_IMLINKS_FORM_TINYEDITOR", "TinyEditor");
define("_MI_IMLINKS_FORM_TINYMCE", "TinyMCE");
define("_MI_IMLINKS_FORM_DHTMLEXT", "DHTML Extended");
define("_MI_IMLINKS_SORTCATS", "Сортировать категории по:");
define("_MI_IMLINKS_SORTCATSDSC", "Выберите по какому параметру сортировать категории и подкатегории.");
define("_MI_IMLINKS_KEYLENGTH", "Enter max. characters for meta keywords:");
define("_MI_IMLINKS_KEYLENGTHDSC", "По умолчанию 255 символов");
define("_MI_IMLINKS_OTHERLINKS", "Show other links submitted by Submitter?");
define("_MI_IMLINKS_OTHERLINKSDSC", "Select if other links of the submitter will be displayed.");
define("_MI_IMLINKS_TOTALCHARS", "Кол-во символов для описания");
define("_MI_IMLINKS_TOTALCHARSDSC", "Set total amount of characters for description in category view.");
define("_MI_IMLINKS_QUICKVIEW", "Установть опцию быстрого просмотра");
define("_MI_IMLINKS_QUICKVIEWDSC", "This turns on/off the Quick View option.");
define('_MI_IMLINKS_ICONS_CREDITS', "Icons by");
define("_MI_IMLINKS_SHOWSBOOKMARKS", "Показать социальные закладки?");
define("_MI_IMLINKS_SHOWSBOOKMARKSDSC", "Select Yes if you want Social Bookmark icons to be displayed under article.");
define("_MI_IMLINKS_SHOWPAGERANK", "Показать Google PageRank™?");
define("_MI_IMLINKS_SHOWPAGERANKSDSC", "Выберите Да, если Вы желаете показывать Google PageRank™ .");
define("_MI_IMLINKS_USERTAGDESCR", "Пользователь может размещать тэги?");
define("_MI_IMLINKS_USERTAGDSC", "Выберите ДА, если пользователю разрешено размещать тэги.");

// Version 1.05 RC5
define('_MI_IMLINKS_DATEFORMATADMIN', 'Формат даты для администратора:');
define('_MI_IMLINKS_DATEFORMATADMINDSC', 'Формат даты для администратора в imLinks<br />Смотрите <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHP руководство</a>');
define("_MI_IMLINKS_USEADDRESSDESCR", "Использовать опции карты и адреса?");
define("_MI_IMLINKS_USEADDRESSDSC", "Выберите Да, если Вы желаете использовать показ адресов на карте.");
define("_MI_IMLINKS_HEADERPRINT", "Заголовок на странице для печати");
define("_MI_IMLINKS_HEADERPRINTDSC", "Заголовок, который будет напечатан для каждой ссылки");
define("_MI_IMLINKS_LOGOURLPRINT", "Url логотипа");
define("_MI_IMLINKS_LOGOURLDSCPRINT", "Url логотипа, который будет напечатан вверху страницы");
define("_MI_IMLINKS_FOOTERPRINT", "Подпись на странице для печати");
define("_MI_IMLINKS_FOOTERPRINTDSC", "Подпись, которая будет напечатана для каждой ссылки");
define("_MI_IMLINKS_BNAME3", "Статистика спонсоров imLinks");
define("_MI_IMLINKS_VCARD_CREDITS", "vCard script by");

// Version 1.05 RC6
define("_MI_IMLINKS_FLAGIMG", "Каталог с картинками флагов стран");
define("_MI_IMLINKS_FLAGIMGDSC", "Введите url без завершающего слэша");
define("_MI_IMLINKS_CATEGORYIMGDSC", "Введите url без завершающего слэша");
define("_MI_IMLINKS_SCREENSHOTSDSC", "Введите url без завершающего слэша");
define("_MI_IMLINKS_MAINIMGDIRDSC", "Введите url без завершающего слэша");
define("_MI_IMLINKS_USEAUTOSCRSHOT", "Использовать автоматическое создание образов экрана");
define("_MI_IMLINKS_USEAUTOSCRSHOTDSC", "This will automatically create a screenshot based on the url. This overrules uploaded screenshots and might not work for all websites.");
define("_MI_IMLINKS_MOZSHOT_CREDITS", "Автоматический образ экрана создан при помощи ");
define("_MI_IMLINKS_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (all source code provided under <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a> lisence)');

// Version 1.06 RC-1
define("_MI_IMLINKS_BNAME4", "Облако тэгов imLinks");
define("_MI_IMLINKS_BNAME5", "Топ тэгов imLinks");

// Version 1.06 RC-3
define('_MI_IMLINKS_DISPLAYFORUM4', "Newbbex");
define("_MI_IMLINKS_TITLE_A", "Заголовок (взр)");
define("_MI_IMLINKS_TITLE_D", "Заголовок (убв)");
define("_MI_IMLINKS_RATING_A", "Оценка (взр)");
define("_MI_IMLINKS_RATING_D", "Оценка (убв)");
define("_MI_IMLINKS_SUBMITTED_A", "Дата размещения (взр)");
define("_MI_IMLINKS_SUBMITTED_D", "Дата размещения (убв)");
define("_MI_IMLINKS_POPULARITY_A", "Популярность (взр)");
define("_MI_IMLINKS_POPULARITY_D", "Популярность (убв)");
define("_MI_IMLINKS_COUNTRY_A", "Страна (взр)");
define("_MI_IMLINKS_COUNTRY_D", "Страна (убв)");

// imLinks 1.00 RC-1
define( "_MI_IMLINKS_CAPTCHA", "Использовать captcha в формах?" );
define( "_MI_IMLINKS_CAPTCHADSC", "Выберите <em>Да</em>  чтобы использовать captcha формах запроса на размещение.<br />По умолчанию: <em>Да</em>" );
define( "_MI_IMLINKS_LINKEDTERMS", "Ссылка на термин глоссария?" );
define( "_MI_IMLINKS_LINKEDTERMSDSC", "Для этого свойства необходимо установить и активировать модуль imGlossary." );
define( "_MI_IMLINKS_IMGLOSSARYDIR", "Каталог imGlossary:" );
define( "_MI_IMLINKS_IMGLOSSARYDIRDSC", "Имя каталога, где расположен imGlossary.<br />По умолчанию: <em>imglossary</em>" );
define( '_MI_IMLINKS_SELECTFEED', 'Использовать ICMS RSS канал?' );
define( '_MI_IMLINKS_SELECTFEED_DSC', 'Выберите <em>Да</em>, чтобы использовать ImpressCMS RSS канал. Выберите <em>Нет</em>, чтобы использовать модуль Brandycoke\'s RSSfit (должны быть активированы подканалы).'  );
define( '_MI_IMLINKS_FEEDSTOTAL', 'Какое количество ссылок отображать в RSS канале?' );
define( '_MI_IMLINKS_FEEDSTOTALDSC', 'Это число имеет значение только для ImpressCMS RSS канала. По умолчанию: <em>15</em>' );
define( '_MI_IMLINKS_ABOUTLICENSE', 'GNU General Public License (GPL) - a copy of the GNU license is enclosed (license.txt).' );
define( '_MI_IMLINKS_AUTOTHUMBSRC', 'Выбор источника автоматической генерации образов экрана' );
define( '_MI_IMLINKS_AUTOTHUMBSRCDSC', 'Дополнительная информация:<br />- <a href="http://www.thumbshots.org/" target="_blank">Thumbshots.org</a><br />- <a href="http://mozshot.nemui.org/" target="_blank">Mozshot</a>' );
define( '_MI_IMLINKS_CATCOLS', 'Кол-во колонок категории:' );
define( '_MI_IMLINKS_CATCOLSDSC', 'Выберите количество колонок категории на индексной странице.<br />По умолчанию: <em>2</em>' );
?>