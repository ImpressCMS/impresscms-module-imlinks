<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/spanish/modinfo.php
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
* ----------------------------------------------------------------------------------------------------------
* translation		debianus (Sugerencias y reporte de errores en http://es.impresscms.org)
* language		spanish (español)
* format			utf-8
*/

// Module Info
// The name of this module
define("_MI_IMLINKS_NAME","imLinks");

// A brief description of this module
define("_MI_IMLINKS_DESC","Permite crear y gestionar una sección de enlaces donde los usuarios pueden enviarlos y calificar sitios web.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_IMLINKS_BNAME1","Enlaces recientes");
define("_MI_IMLINKS_BNAME2","Enlaces importantes");

// Sub menu titles
define("_MI_IMLINKS_SMNAME1","Enviar");
define("_MI_IMLINKS_SMNAME2","Populares");
define("_MI_IMLINKS_SMNAME3","Valoraciones");
define("_MI_IMLINKS_SMNAME4","Nuevos enlaces");

// Names of admin menu items
define("_MI_IMLINKS_BINDEX","Inicio");
define("_MI_IMLINKS_INDEXPAGE","Página principal");
define("_MI_IMLINKS_MCATEGORY","Categorías");
define("_MI_IMLINKS_MLINKS","Enlaces");
define("_MI_IMLINKS_MUPLOADS","Enviar imágenes");
define("_MI_IMLINKS_PERMISSIONS","Permisos");
define("_MI_IMLINKS_BLOCKADMIN","Bloques");
define("_MI_IMLINKS_MVOTEDATA","Información de los votos");

// Title of config items
define('_MI_IMLINKS_POPULAR', 'Cantidad de visitas para que un enlace sea considerado popular:');
define('_MI_IMLINKS_POPULARDSC', 'Número de visitas antes que un enlace sea considerado como popular.');

//Display Icons
define("_MI_IMLINKS_ICONDISPLAY","Avisos de popular y nuevo:");
define("_MI_IMLINKS_DISPLAYICONDSC", "Seleccione como mostrará los avisos de enlaces populares y nuevos.");
define("_MI_IMLINKS_DISPLAYICON1", "Mostrar como iconos");
define("_MI_IMLINKS_DISPLAYICON2", "Mostrar como texto");
define("_MI_IMLINKS_DISPLAYICON3", "No mostrar");
define("_MI_IMLINKS_DAYSNEW","Días como nuevo:");
define("_MI_IMLINKS_DAYSNEWDSC","Número de días en los que un enlace será considerado como nuevo.");
define("_MI_IMLINKS_DAYSUPDATED","Días como actualizado:");
define("_MI_IMLINKS_DAYSUPDATEDDSC","Número de días en los que un enlace será considerado como actualizado.");
define('_MI_IMLINKS_PERPAGE', 'Enlaces por categoría:');
define('_MI_IMLINKS_PERPAGEDSC', 'Máximo número de enlaces que se mostrará en cada categoría.');
define('_MI_IMLINKS_USESHOTS', 'Mostrar captura de pantalla:');
define('_MI_IMLINKS_USESHOTSDSC', 'Seleccionar <em>Si</em> para mostrar una captura de pantalla en cada enlace');
define('_MI_IMLINKS_SHOTWIDTH', 'Ancho de la imagen:');
define('_MI_IMLINKS_SHOTWIDTHDSC', 'Ancho que tendrá la captura de pantalla');
define('_MI_IMLINKS_SHOTHEIGHT', 'Alto de la imagen:');
define('_MI_IMLINKS_SHOTHEIGHTDSC', 'Alto que tendrá la captura de pantalla');
define('_MI_IMLINKS_CHECKHOST', 'Inhabilitar enlaces directos (leeching):');
define('_MI_IMLINKS_REFERERS', 'Listado de sitios que tienen permitido enlazar directamente<br />Separados con #');
define("_MI_IMLINKS_ANONPOST","Envío de usuario anónimo:");
define("_MI_IMLINKS_ANONPOSTDSC","¿Desea permitir a los usuarios anónimos realizar envíos o subidas a su sitio?");
define('_MI_IMLINKS_AUTOAPPROVE','Aprobar envíos automáticamente:');
define('_MI_IMLINKS_AUTOAPPROVEDSC','Seleccionar SI para aprobar los envíos sin la intervención del moderador.');
define('_MI_IMLINKS_MAXFILESIZE','Tamaño de la imagen a enviar (Kb):');
define('_MI_IMLINKS_MAXFILESIZEDSC','Tamaño máximo permitido para la imagen.');
define('_MI_IMLINKS_IMGWIDTH','Ancho de la imagen a enviar:');
define('_MI_IMLINKS_IMGWIDTHDSC','Ancho máximo permitido para la imagen');
define('_MI_IMLINKS_IMGHEIGHT','Alto de la imagen a enviar:');
define('_MI_IMLINKS_IMGHEIGHTDSC','Alto máximo permitido para la imagen');
define('_MI_IMLINKS_UPLOADDIR','Directorio de subida (no haga <em>trailing slash</em>)');
define('_MI_IMLINKS_ALLOWSUBMISS','Envío de usuarios:');
define('_MI_IMLINKS_ALLOWSUBMISSDSC','Permitir a los usuarios enviar nuevos enlaces');
define('_MI_IMLINKS_ALLOWUPLOADS','Subidas de usuarios:');
define('_MI_IMLINKS_ALLOWUPLOADSDSC','Permitir a los usuarios enviar enlaces directamente a su sitio');
define('_MI_IMLINKS_SCREENSHOTS','Directorio para la captura de pantalla');
define('_MI_IMLINKS_CATEGORYIMG','Directorio para la imagen de la categoría');
define('_MI_IMLINKS_MAINIMGDIR','Directorio para la imagen principal');
define('_MI_IMLINKS_USETHUMBS', 'Usar miniaturas:');
define("_MI_IMLINKS_USETHUMBSDSC", "Tipos de formatos soportados: JPG, GIF, PNG.<div style='padding-top: 8px;'>imLinks usará thumbnails para mostrar las imagenes. Configure 'No' para utilizar la imagen original si el servidor no soporta esta opción.</div>");
define('_MI_IMLINKS_DATEFORMAT', 'Formato de fecha:');
define('_MI_IMLINKS_DATEFORMATDSC', 'Formato predeterminado para las fechas en imLinks');
define('_MI_IMLINKS_SHOWDISCLAIMER', 'Mostrar condiciones de uso antes del envío de enlaces:');
define('_MI_IMLINKS_SHOWDISCLAIMERDSC', 'Se mostrarán las condiciones de uso antes de que un usuario envíe un enlace');
define('_MI_IMLINKS_SHOWLINKDISCL', 'Mostrar condiciones de uso antes de que el usuario visite un sitio:');
define('_MI_IMLINKS_SHOWLINKDISCLDSC', 'Se mostrarán las condiciones de uso antes de que un usuario visite un enlace');
define('_MI_IMLINKS_DISCLAIMER', 'Introduzca las condiciones de uso para envíos:');
define('_MI_IMLINKS_LINKDISCLAIMER', 'Introduzca las condiciones de uso para visitar sitios:');
define('_MI_IMLINKS_SUBCATS', 'Subcategorías:');
define("_MI_IMLINKS_SUBMITART", "Envíos de enlaces:");
define("_MI_IMLINKS_SUBMITARTDSC", "Seleccionar grupos que pueden enviar nuevos enlaces.");
define("_MI_IMLINKS_RATINGGROUPS", "Valoración de enlaces:");
define("_MI_IMLINKS_RATINGGROUPSDSC", "Seleccionar grupos que pueden calificar un enlace.");
define("_MI_IMLINKS_IMGUPDATE", "¿Actualizar miniaturas?");
define("_MI_IMLINKS_IMGUPDATEDSC", "Si eligió usar miniaturas, las imágenes serán actualizadas cada vez que carga la página; de otro modo se utilizará la primera miniatura únicamente. <br /><br />");
define("_MI_IMLINKS_QUALITY", "Calidad de la miniatura:");
define("_MI_IMLINKS_QUALITYDSC", "Baja: 0 Alta: 100");
define("_MI_IMLINKS_KEEPASPECT", "¿Mantener la proporción?");
define("_MI_IMLINKS_KEEPASPECTDSC", "");
define("_MI_IMLINKS_ADMINPAGE", "Enlaces en la administración:");
define("_MI_IMLINKS_AMDMINPAGEDSC", "Máximo número de enlaces que se mostrará en la administración.");
define("_MI_IMLINKS_ARTICLESSORT", "Ordenamiento de los enlaces:");
define("_MI_IMLINKS_ARTICLESSORTDSC", "Seleccionar un órden por defecto para el listado de enlaces.");
define("_MI_IMLINKS_TITLE", "Título");
define("_MI_IMLINKS_RATING", "Valoración");
define("_MI_IMLINKS_WEIGHT", "Importancia");
define("_MI_IMLINKS_POPULARITY", "Popularidad");
define("_MI_IMLINKS_SUBMITTED2", "Fecha de envío");
define('_MI_IMLINKS_COPYRIGHT', 'Anuncio de <em>Copyright</em/>:');
define('_MI_IMLINKS_COPYRIGHTDSC', 'Seleccionar si mostrará un anuncio sobre copyright en la página de enlaces.');
// Description of each config items
define('_MI_IMLINKS_SUBCATSDSC', 'Seleccione SI para mostrar subcategorías. Seleccionando NO, ocultará las subcategorías del listado');
// Text for notifications
define('_MI_IMLINKS_GLOBAL_NOTIFY', 'Global');
define('_MI_IMLINKS_GLOBAL_NOTIFYDSC', 'Opciones globales de notificación de enlaces.');
define('_MI_IMLINKS_CATEGORY_NOTIFY', 'Categoría');
define('_MI_IMLINKS_CATEGORY_NOTIFYDSC', 'Opciones de notificación que se aplicarán en la categoría actual.');
define('_MI_IMLINKS_LINK_NOTIFY', 'Enlaces');
define('_MI_IMLINKS_FILE_NOTIFYDSC', 'Opciones de notificación que se aplicarán en el enlace actual.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nuevas Categorías');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificarme cuando una nueva categoría es creada.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recibir notificación cuando una nueva categoría es creada.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificar : nuevas categorías');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Solicitud de modificación de enlaces');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Notificarme de cualquier solicitud de modificación de enlace.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Recibir notificación cuando se reciba cualquier solicitud de modificación de enlace.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificar : solicitud de modificación de enlaces');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Reporte de enlace erróneo');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Notificarme de cualquier reporte de enlace erróneo.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Recibir notificación cuando se reciba un reporte de enlace erróneo.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificar : reporte de enlace erróneo');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'Enlace enviado');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Notificarme cuando cualquier nuevo enlace sea enviado y este aguardando aprobación.');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Recibir notificación de cualquier nuevo enlace enviado que este aguardando aprobación.');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificar : nuevo enlace enviado');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY', 'Nuevo enlace');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Notificarme cuando un nuevo enlace es publicado.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Recibir notificación cuando un nuevo enlace es publicado.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificar : nuevo enlace');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY', 'Enlace enviado');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notificarme cuando cualquier nuevo enlace sea enviado en esta categoría y este aguardando aprobación.');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Recibir notificación de cualquier nuevo enlace enviado en esta categoría y que este aguardando aprobación.');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificar : nuevo enlace enviado en la nategoría');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY', 'Nuevo enlace');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Notificarme cuando un nuevo enlace es publicado en esta categoría.');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Recibir notificación cuando un nuevo enlace es publicado en esta categoría.');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificar : nuevo enlace publicado en la categoría');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFY', 'Enlace aprobado');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYCAP', 'Notificarme cuando este enlace sea aprobado.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYDSC', 'Recibir notificación cuando este enlace sea aprobado.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificar : enlace aprobado');

define('_MI_IMLINKS_AUTHOR_CREDITSTEXT',"The WF-Projects Team would like to thank the following people for their help and support during the development phase of this module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_IMLINKS_AUTHOR_BUGFIXES', "Historial de solución de errores");
define('_MI_IMLINKS_COPYRIGHT2', 'Copyright' );
define('_MI_IMLINKS_COPYRIGHTIMAGE', "Unless stated otherwise, this Module (WF-Links) and its images are copyright to the WF-Projects team.<br /><br />You have the permission to copy, edit and change WF-Links to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the WF-Projects team.");
define('_MI_IMLINKS_SELECTFORUM', "Seleccionar foro:");
define('_MI_IMLINKS_SELECTFORUMDSC', "Seleccione el foro que tiene instalado para ser usado por imLinks.");
define('_MI_IMLINKS_DISPLAYFORUM1', "Newbb (all)");
define('_MI_IMLINKS_DISPLAYFORUM2', "IPB Forum");
define('_MI_IMLINKS_DISPLAYFORUM3', "PHPBB2");
// added by McDonald
define( "_MI_IMLINKS_COUNTRY", "País:" );
define('_MI_IMLINKS_EDITOR', "Editor a usar (administradores):");
define('_MI_IMLINKS_EDITORCHOICE', "Seleccione el editor que se usará en la administración. Si solo ha hecho una instalación normal de ImpressCMS (sin ningún extra), podrá seleccionar DHTML y TinyMCE");
define('_MI_IMLINKS_EDITORUSER', "Editor a usar (usuarios):");
define('_MI_IMLINKS_EDITORCHOICEUSER', "Seleccione el editor que se usará en la administración. Si solo ha hecho una instalación normal de ImpressCMS (sin ningún extra), podrá seleccionar DHTML y TinyMCE");
define("_MI_IMLINKS_FORM_DHTML", "DHTML");
define("_MI_IMLINKS_FORM_COMPACT", "Compact");
define("_MI_IMLINKS_FORM_HTMLAREA", "HtmlArea Editor");
define("_MI_IMLINKS_FORM_FCK", "FCK Editor");
define("_MI_IMLINKS_FORM_KOIVI", "Koivi Editor");
define("_MI_IMLINKS_FORM_TINYEDITOR", "TinyEditor");
define("_MI_IMLINKS_FORM_TINYMCE", "TinyMCE");
define("_MI_IMLINKS_FORM_DHTMLEXT", "DHTML extendido");
define("_MI_IMLINKS_SORTCATS", "Ordenar categorías por:");
define("_MI_IMLINKS_SORTCATSDSC", "Seleccione como las categorías y subcategorías serán ordenadas.");
define("_MI_IMLINKS_KEYLENGTH", "Máximo número de caracteres para las palabras clave:");
define("_MI_IMLINKS_KEYLENGTHDSC", "De forma predeterminada son 255");
define("_MI_IMLINKS_OTHERLINKS", "¿Mostrar otros enlaces enviados por el mismo usuario?");
define("_MI_IMLINKS_OTHERLINKSDSC", "Elija si otros envíos del mismo usuario serán o no mostrados.");
define("_MI_IMLINKS_TOTALCHARS", "¿Limitar el número total de caracteres para la descripción?");
define("_MI_IMLINKS_TOTALCHARSDSC", "Establezca el número total de caraceres para la descripción en las vistas de las categorías.");
define("_MI_IMLINKS_QUICKVIEW", "¿Mostrar opción de vista rápida?");
define("_MI_IMLINKS_QUICKVIEWDSC", "Activa/Desactiva dicha opción.");
define('_MI_IMLINKS_ICONS_CREDITS', "Iconos por");
define("_MI_IMLINKS_SHOWSBOOKMARKS", "¿Mostrar Marcadores sociales?");
define("_MI_IMLINKS_SHOWSBOOKMARKSDSC", "Selecione <em>Sí</em> si desea que un bloque de Marcadores Sociales sea mostrado debajo de cada artículo.");
define("_MI_IMLINKS_SHOWPAGERANK", "¿Mostrar Google PageRank?");
define("_MI_IMLINKS_SHOWPAGERANKSDSC", "Selecione <em>Sí</em> si desea que sea mostrado.");
define("_MI_IMLINKS_USERTAGDESCR", "Los usuarios pueden enviar etiquetas (tags):");
define("_MI_IMLINKS_USERTAGDSC", "Selecione si los usuarios pueden o no enviar solapas.");

// Version 1.05 RC5
define('_MI_IMLINKS_DATEFORMATADMIN', 'Formato de fecha en la Administración:');
define('_MI_IMLINKS_DATEFORMATADMINDSC', 'Administración predeterminada de fechas para imLinks en la sección administrativa del módulo.<br />Lea el <a href="http://jp.php.net/manual/es/function.date.php" target="_blank">Manual de PHP</a> para más información sobre la materia');
define("_MI_IMLINKS_USEADDRESSDESCR", "¿Usar direcciones y mapas?");
define("_MI_IMLINKS_USEADDRESSDSC","Seleccione si desea usar o no la característica de adición de direcciones y mapas.");
define("_MI_IMLINKS_HEADERPRINT","[Opciones de impresión] Cabecera de página a imprimir");
define("_MI_IMLINKS_HEADERPRINTDSC","La misma será la cabecera que se imprimirá en cada enlace junto con la información de éste.");
define("_MI_IMLINKS_LOGOURLPRINT","[Opciones de impresión] URL del logo a imprimir");
define("_MI_IMLINKS_LOGOURLDSCPRINT","URL del logo que se imprimirá en la parte superior de la página.");
define("_MI_IMLINKS_FOOTERPRINT","[Opciones de impresión] Pie de página de impresión");
define("_MI_IMLINKS_FOOTERPRINTDSC","Pie de página que será impreso en cada enlace");
define("_MI_IMLINKS_BNAME3","Estadísticas del patrocinador de imLinks");
define("_MI_IMLINKS_VCARD_CREDITS","Script de vCard por");

// Version 1.05 RC6
define("_MI_IMLINKS_FLAGIMG","Directorio para las imágenes de las banderas de los países");
define("_MI_IMLINKS_FLAGIMGDSC","Introduzca un URL (sin 'trailing slash')");
define("_MI_IMLINKS_CATEGORYIMGDSC","Introduzca un URL (sin 'trailing slash')");
define("_MI_IMLINKS_SCREENSHOTSDSC","Introduzca un URL (sin 'trailing slash')");
define("_MI_IMLINKS_MAINIMGDIRDSC","Introduzca un URL (sin 'trailing slash')");
define("_MI_IMLINKS_USEAUTOSCRSHOT","Usar autocaptura de pantallas");
define("_MI_IMLINKS_USEAUTOSCRSHOTDSC","Se creará una captura automáticamente basada en el URL. Como las imágenes que ya estén en el servidor serán sobreescritas, puede que esta característica no pueda usarse en todos los sitios.");
define("_MI_IMLINKS_MOZSHOT_CREDITS", "Autocaptura de pantalla por");
define("_MI_IMLINKS_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (todo el código fuente está publicado con la licencia <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a>)');

// Version 1.06 RC-1
define("_MI_IMLINKS_BNAME4","'Nube de etiquetas' de imLinks");
define("_MI_IMLINKS_BNAME5","Etiquetas relevantes de imLinks");

// Version 1.06 RC-3
define('_MI_IMLINKS_DISPLAYFORUM4', "Newbbex");
define("_MI_IMLINKS_TITLE_A", "Título (A)");
define("_MI_IMLINKS_TITLE_D", "Título (D)");
define("_MI_IMLINKS_RATING_A", "Valoración (A)");
define("_MI_IMLINKS_RATING_D", "Valoración (D)");
define("_MI_IMLINKS_SUBMITTED_A", "Fecha de envío (A)");
define("_MI_IMLINKS_SUBMITTED_D", "Fecha de envío (D)");
define("_MI_IMLINKS_POPULARITY_A", "Popularidad (A)");
define("_MI_IMLINKS_POPULARITY_D", "Popularidad (D)");
define("_MI_IMLINKS_COUNTRY_A", "País (A)");
define("_MI_IMLINKS_COUNTRY_D", "País (D)");

// imLinks 1.00 RC-1
define( "_MI_IMLINKS_CAPTCHA", "¿Usar Capcha en el formulario de envío?" );
define( "_MI_IMLINKS_CAPTCHADSC", "Seleccione <em>Sí</em> para usar Captcha en el mismo. <br />Predeterminado: <em>Sí</em>" );
define( "_MI_IMLINKS_LINKEDTERMS", "¿Enlazar con los términos del glosario?" );
define( "_MI_IMLINKS_LINKEDTERMSDSC", "El módulo imGlossary necesita estar instalado y activo para usar esta característica." );
define( "_MI_IMLINKS_IMGLOSSARYDIR", "Carpeta de imGlossary:" );
define( "_MI_IMLINKS_IMGLOSSARYDIRDSC", "Nombre de la carpeta donde está instalado imGlossary.<br />Predeterminado: <em>imglossary</em>" );
define( '_MI_IMLINKS_ABOUTLICENSE', 'GNU General Public License (GPL) - una copia de dicha licencia está en el archivo (license.txt).' );
define( '_MI_IMLINKS_AUTOTHUMBSRC', 'Selecione la fuente para generar autocapturas de pantalla' );
define( '_MI_IMLINKS_AUTOTHUMBSRCDSC', 'Más información:<br />- <a href="http://www.thumbshots.org/" target="_blank">Thumbshots.org</a><br />- <a href="http://mozshot.nemui.org/" target="_blank">Mozshot</a>' );
define( '_MI_IMLINKS_CATCOLS', 'Número de las columnas de la categoría:' );
define( '_MI_IMLINKS_CATCOLSDSC', 'Seleccione el mismo para la página índice.<br />Predeterminado: <em>2</em>' );
define( '_MI_IMLINKS_RSSFEED', 'Origen de RSS' );
define( '_MI_IMLINKS_SHOWRATING', '¿Mostrar característica de valoración?' );
define( '_MI_IMLINKS_SHOWRATINGDSC', 'Seleccione <em>Sí</em> para mostrar la posibilidad de valorar a los usuarios. Seleccione <em>No</em> para ocultarla. Nota: esta configuración es ajena al sistema de permisos.' );

// imLinks 1.00 RC-2
define( '_MI_IMLINKS_BNAME6', 'Enlace aleatorio' );

// imLinks 1.01
define( '_MI_IMLINKS_SHOWLEGEND', '¿Mostrar la leyenda de la categoría?' );
define( '_MI_IMLINKS_SHOWLEGENDDSC', 'Con esta opción puede activar o no la leyenda que explica los diferentes colores de los iconos predeterminados para cada categoría.' );
define( '_MI_IMLINKS_LIGHTWINDOW', '¿Mostrar cómo se debería abrir el enlace?' );
define( '_MI_IMLINKS_LIGHTWINDOWDSC', 'Seleccione <em>Predeterminado</em> para que se abran en una nueva solapa del  nevegador.<br />
									   Seleccione <em>LightWindow</em> para usar el script  <a href="http://www.stickmanlabs.com/lightwindow/" target="_blank">LightWindow</a>.<br />
									   Seleccione <em>GreyBox</em> para usar el script <a href="http://orangoo.com/labs/GreyBox/" target="_blank">GreyBox</a>.' );
// imLinks 1.03
define( '_MI_IMLINKS_NICEURL', '¿Usar URL abreviadas?' );
define( '_MI_IMLINKS_NICEURLDSC', 'Esta opción permite usar URL abreviadas para los enlaces.' );
define( '_MI_IMLINKS_TOMTOMAPI', 'TomTom API:' );
define( '_MI_IMLINKS_TOMTOMAPIDSC', 'Para tener el botón <em>Añadir en TomTom</em> en los detalles de un contanto necesita indicar su clave API aquí.<br />Puede solicitarse en add2TTsupport@tomtom.com' );
define( '_MI_IMLINKS_TOMTOMLOGO', 'Establezca el URL del logo que se mostrará:' );
define( '_MI_IMLINKS_TOMTOMLOGODSC', 'El mismo aparecerá en la ventana <em>Accediendo a TomTom</em>.<br />Este logo se mostrará con el nombre del sitio como <em>Contenido porporcionado por</em>.' );

// imLinks 1.12
define( '_MI_IMLINKS_SOCIALBTTNS', 'Mostrar botones Social Media' );
define( '_MI_IMLINKS_SOCIALBTTNSDSC', 'Seleccione si desea mostrar Social Bookmarks (estilo tradicional), botones de Social Media normales u otros con selección de privacidad (sólo en Alemania). Si selecciona <i>Social Share Privacy</i> the type of button is not taken into account.' );
define( '_IM_IMLINKS_SOCBOOK', 'Marcadores sociales' );
define( '_IM_IMLINKS_SOCMEDIA', 'Social Media' );
define( '_IM_IMLINKS_SOCMEDIAPRIVE', 'Privacidad de Social Share' );
define( '_MI_IMLINKS_DEFAULT', 'Predeterminado' );
define( '_MI_IMLINKS_HORICNT', 'Contador horizontal' );
define( '_MI_IMLINKS_VERTCNT', 'Contador vertical' );
define( '_MI_IMLINKS_TWITTER', 'Twitter' );
define( '_MI_IMLINKS_TWEET', 'Tweet' );
define( '_MI_IMLINKS_TWITTERBTTN', 'Botón de Twitter' );
define( '_MI_IMLINKS_TWITTERBTTNDSC', 'Elija un estilo para el botón de Twitter.' );
define( '_MI_IMLINKS_FACEBOOKBTTN', 'Botón "Me gusta" de Facebook' );
define( '_MI_IMLINKS_FACEBOOKBTTNDSC', 'Elija un estilo para el botón de Facebook.' );
define( '_MI_IMLINKS_PLUSONEBTTN', 'Botón de Google +1' );
define( '_MI_IMLINKS_PLUSONEBTTNDSC', 'Elija un estilo para el botón de Google +1.' );
define( '_MI_IMLINKS_BNAME7', 'Enlaces recientes - Extendidos' );

// imLinks 1.13
define( '_MI_IMLINKS_IPFTABLE', 'Usar tablas de IPF en la página principal de la administración' );
define( '_MI_IMLINKS_IPFTABLEDSC', 'Ello limita el número de enlaces a mostrar por página.' );
define( '_MI_IMLINKS_USELYTE', 'Usar Lytebox para los globos de ayuda y aumentar las miniaturas:' );
define( '_MI_IMLINKS_USELYTEDSC', 'Seleccione <i>Sí</i> para ello; <i>No</i> deshabilita esta característica.' );
?>