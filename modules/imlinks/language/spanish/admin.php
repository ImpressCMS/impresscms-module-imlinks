<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/spanish/admin.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links
* @since		1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links
* @since		1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since		1.00
* @author		McDonald
* @version		$Id$
* ----------------------------------------------------------------------------------------------------------
* translation	debianus (Sugerencias y reporte de errores en http://es.impresscms.org)
* language		spanish (español)
* format		utf-8
*/

define( "_AM_IMLINKS_WARNINSTALL1", "Aviso: el directorio %s existe en su servidor. <br />Por favor, por razones de seguridad elimine este directorio." );
define( "_AM_IMLINKS_WARNINSTALL2", "Aviso: el archivo %s existe en tu servidor. <br />Por favor, por razones de seguridad elimine este archivo." );
define( "_AM_IMLINKS_WARNINSTALL3", "Aviso: la carpeta %s no existe en su servidor. <br />Esta carpeta es necesaria para el funcionamiento de imLinks." );
define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );
define( "_AM_IMLINKS_BMODIFY", "Modificar" );
define( "_AM_IMLINKS_BCREATE", "Crear" );
define( "_AM_IMLINKS_BAPPROVE", "Aprobar" );
define( "_AM_IMLINKS_BIGNORE", "Ignorar" );
define( "_AM_IMLINKS_BSAVE", "Guardar" );
define( "_AM_IMLINKS_BRESET", "Reestablecer" );
define( "_AM_IMLINKS_BMOVE", "Mover enlaces" );
define( "_AM_IMLINKS_BUPLOAD", "Enviar" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Eliminar la imagen seleccionada" );
define( "_AM_IMLINKS_DBERROR", "Error accediendo a la base de datos: por favor, reportelo" );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Opciones de texto:" );
define( "_AM_IMLINKS_DISABLEXCODE", "Desactivar códigos de ImpressCMS" );
define( "_AM_IMLINKS_DISABLEIMAGES", "Desactivar imagenes" );
define( "_AM_IMLINKS_DISABLEBREAK", "¿Usar conversion <em>linebreak</em>?" );
define( "_AM_IMLINKS_UPLOADFILE", "Enlace enviado con éxito" );
define( "_AM_IMLINKS_NOMENUITEMS", "No hay items en el menú" );
// Admin Bread crumb
define( "_AM_IMLINKS_BUPDATE", "Actualizar el módulo" );
define( "_AM_IMLINKS_BINDEX", "Índice" );
define( "_AM_IMLINKS_BPERMISSIONS", "Permisos" );
define( "_AM_IMLINKS_GOMODULE", "Ir al módulo" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Categoría: " );
define( "_AM_IMLINKS_SFILES", "Enlaces: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Enviados: " );
define( "_AM_IMLINKS_SMODREQUEST", "Modificados: " );
// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Categorías" );
define( "_AM_IMLINKS_MLINKS", "Enlaces" );
define( "_AM_IMLINKS_MLISTBROKEN", "Listado de enlaces rotos" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "Listado de enlaces comprobados" );
define( "_AM_IMLINKS_INDEXPAGE", "Página principal" );
define( "_AM_IMLINKS_MUPLOADS", "Enviar imágenes" );
// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "Crear nueva categoría" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "Modificar categoría" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "Mover categoría" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Título de la categoría:" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "Fallo moviendo el enlace: no se puede mover a esta categoría" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "Fallo moviendo el enlace: no se puede encontrar esta categoría" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Enlaces movidos y categoría eliminada" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "Categoría creada satisfactoriamente" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "Categoría modificada satisfactoriamente" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "Categoría eliminada satisfactoriamente" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "Aviso: ¿está seguro que desea eliminar esta categoría incluyendo todos sus enlaces y comentarios?" );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "Deberá crear una categoría antes de agregar un enlace" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Título de la categoría:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Importancia de la categoría:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Establecer como subcategoría:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "Seleccionar imagen de la categoría:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Redactar descripción de la categoría:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Establecer resúmen de la categoría:" );
/**
 * Index page Defines
 */
define( "_AM_IMLINKS_IPAGE_UPDATED", "Página principal modificada satisfactoriamente" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "Información de la página principal" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "Modificar página principal" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "Seleccionar imagen principal del módulo:" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "Título del módulo:" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "Encabezado del módulo (texto de presentación):" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "Alineación del encabezado:" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "Pie de página del módulo:" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "Alineación del pie de página:" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "Izquierda" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "Central" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "Derecha" );
/**
 * Permissions defines
 */
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Administración de permisos" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>NOTA:</b> Por favor sepa que no solo debe configurar los permisos aquí sino que también debe hacerlo en la administración de grupos de ImpressCMS. Para ello acceda a <b>Sistema > Grupos</b> y elija los grupos correspondientes para configurar su acceso al módulo y a los bloques.</div>" );
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Permisos por categorías" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "Seleccione las categorías que cada grupo puede ver" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "No puede configurar permisos porque aún no hay categorías creadas" );

/**
 * Upload defines
 */
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "Imagen almacenada en el servidor satisfactoriamente" );
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "Error: no seleccionó ningún archivo para enviar; seleccione alguno" );
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "La imagen ya fue enviada al servidor anteriormente" );
define( "_AM_IMLINKS_LINK_FILEDELETED", "El enlace ha sido eliminado." );
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "Error eliminando enlace: no encontrado." );
define( "_AM_IMLINKS_LINK_NOFILEERROR", "Error eliminando enlace: no seleccionó ninguno para eliminar." );
define( "_AM_IMLINKS_LINK_DELETEFILE", "Aviso: ¿esta seguro de querer eliminar esta imagen?" );
define( "_AM_IMLINKS_LINK_IMAGEINFO", "Estado del servidor" );
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>Información obtenida desde PHP.ini:</b>" );
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "Estado de <em>Safe Mode</em>: " );
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "Estado de <em>Register Globals</em>: " );
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Estado de <em>Server Uploads</em>: " );
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Tamaño máximo de subida de archivos permitido: " );
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "Tamaño máximo de envíos permitido: " );
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (Esto puede causar problemas)" );
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "Soporte de la librería GD: " );
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "Versión de la librería GD: " );
define( "_AM_IMLINKS_LINK_GDON", "<b>Habilitado</b> (Miniaturas habilitadas)" );
define( "_AM_IMLINKS_LINK_GDOFF", "<b>Inhabilitado</b> (Miniaturas deshabilitadas)" );
define( "_AM_IMLINKS_LINK_OFF", "<b>Inactivo</b>" );
define( "_AM_IMLINKS_LINK_ON", "<b>Activo</b>" );
define( "_AM_IMLINKS_LINK_CATIMAGE", "Usar en categorías" );
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "Usar como capturas" );
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "Usar como imagen principal" );
define( "_AM_IMLINKS_LINK_FCATIMAGE", "Ruta de las categorías" );
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "Ruta de las capturas" );
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Ruta de las imagenes principales" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Enviar imagen " );
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "Ruta de subida: " );//pendiente
define( "_AM_IMLINKS_LINK_FUPLOADURL", "URL de subida: " );//pendiente
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "Seleccione el destino de la imagen:" );
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Seleccionar una imagen:" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "Enviar imagen al destino seleccionado:" );

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Resúmen del módulo" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Enlaces publicados:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Título del enlace" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Enviado por" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Estado" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Publicación" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Publicado" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Vencimiento" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Fecha no establecida" );
define( "_AM_IMLINKS_MINDEX_ACTION", "Acción" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "Aviso: no hay enlaces que coincidan con este criterio" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Página:<b> " );
define( '_AM_IMLINKS_MINDEX_PAGEINFOTXT', '<ul><li>Detalles de la página principal del módulo imLinks.</li><li>Puede cambiar de forma sencilla la imagen del logo, el encabezado principal y el pié de página así como la alineación de los mismos.</li></ul><br />Nota: La imagen del logo que elija será usada para imLinks.' );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "Tiempo de respuesta" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "Enviado el" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "Enlaces enviados" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "Enlaces esperando" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Enlaces esperando aprobación: " );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>Aprobar</b> enlace sin validación." );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Editar</b> enlace y luego aprobar." );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Eliminar</b> el enlace." );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "Aún no hay enlaces que coincidan con este criterio" );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "El nuevo enlace fue creado y la base de datos fue actualizada con éxito." );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATING", "Valoración" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "No hay votos de visitantes anónimos" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Fecha de votación borrada." );

define( "_AM_IMLINKS_VOTE_TOTALRATE", "Total de votos" );

// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Solicitudes de modificación: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Enlaces modificados" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Modificar información del enlace" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Título" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Autor original: " );
define( "_AM_IMLINKS_MOD_DATE", "Enviado por" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "Aún no hay requisitos que coincidan con este criterio." );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Enviado por: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Enviado por" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Detalles del enlace propuesto" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Detalles del enlace original" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Solicitud de modificación eliminada de la base de datos" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Solicitud de modificación aprobada y base de datos actualizada" );

// Link management
define( "_AM_IMLINKS_LINK_ID", "ID: " );
define( "_AM_IMLINKS_LINK_IP", "IP de quien envió: " );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Modificar enlace" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Crear enlace" );
define( "_AM_IMLINKS_LINK_TITLE", "Título: " );
define( "_AM_IMLINKS_LINK_DLURL", "URL: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Descripción: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Categoría: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", "¿Enlace no activo?" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " ¿Estado actualizado?" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "Captura: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "¿Agregar discusión en este foro?" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Fecha de expiración:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Eliminar fecha de expiración:" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", "Configurar la fecha de expiración" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Configurar fecha de publicación: </b>" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " Configurar fecha de expiración: " );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>Configurar fecha de expiración: </b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "¿Eliminar reporte de enlace erróneo?<br /><br /><span style='font-weight: normal;'>Cuando elige <b>SI</b> los reportes de enlaces erróneos serán automáticamente eliminados y el enlace se confirmará otra vez.</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "La captura deberá ser una imagen válida del directorio %s (ej. shot.gif). Deje esto en blanco si no hay imagenes." );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "Aprobar enlace:" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "Nuevo enlace creado y base de datos actualizada satisfactoriamente" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "Enlace modificado y base de datos actualizada satisfactoriamente" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "¿Realmente desea eliminar el enlace seleccionado?" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", "Enlace %s eliminado de la base de datos satisfactoriamente" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "Enlace aprobado y base de datos actualizada satisfactoriamente" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>Crear un artículo sobre el enlace</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "¿Enviar el enlace como una noticia?" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "Seleccionar la categoría de la noticia:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "Título de la noticia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Dejar en blanco para usar el título del enlace</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "Enviado por: " );
/**
 * Broken links defines
 */
define( "_AM_IMLINKS_SBROKENSUBMIT", "Erróneos: " );
define( "_AM_IMLINKS_BROKEN_FILE", "Reporte de enlaces erróneos" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Reporte de enlace erróneo ignorado y satisfactoriamente eliminado de la base de datos" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Estado del enlace cambiado y base de datos actualizada" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Estado confirmado y base de datos actualizada" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Información del enlace erróneo" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Reportes de enlace erróneos aguardando:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Ignorar</b> reportes y eliminar los reportes de enlace erróneos." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Eliminar</b> los datos de enlaces reportados y los reportes de enlace roto para este enlace." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>Modificar</b> el enlace y arreglar el problema." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Examinado" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Confirmado" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Reportado por" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Enviado por" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Enviado el" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Acción" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "No hay enlaces erróneos reportados" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "Enlace eliminado de la base de datos" );

// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Modificar este ítem" );
define( "_AM_IMLINKS_ICO_DELETE", "Eliminar este ítem" );
define( "_AM_IMLINKS_ICO_ONLINE", "Activo" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Inactivo" );
define( "_AM_IMLINKS_ICO_APPROVED", "Aprobado" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "No aprobado" );
define( "_AM_IMLINKS_ICO_LINK", "Enlaces calificados" );
define( "_AM_IMLINKS_ICO_URL", "Agregar URL relacionado" );
define( "_AM_IMLINKS_ICO_APPROVE", "Aprobar" );
define( "_AM_IMLINKS_ICO_STATS", "Estadísticas" );
define( "_AM_IMLINKS_ICO_VIEW", "Ver este ítem" );
define( "_AM_IMLINKS_ICO_ACK", "Reporte de enlace erróneo reconocido (examinado)" );
define( "_AM_IMLINKS_ICO_REPORT", "¿Reconocer reporte de enlace erróneo?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Reporte de enlace erróneo confirmado" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "¿Confirmar reporte de enlace erróneo?" );

// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Agregar categoría alternativa" );
define( "_AM_IMLINKS_MALTCAT", "Administración de categorías alternativas" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Administración de categorías alternativas" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>Las categorías alternativas pueden ser agregadas o eliminadas fácilmente mediante este formulario.</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', 'Categorías alternativas almacenadas' );

define( "_AM_IMLINKS_LISTBROKEN", "Mostrar enlaces que posiblemente estén fallando. Nota: Estos resultados pueden no ser exactos y se deben tomar como una referencia.<br /><br />Compruebe que el enlace exista antes de realizar cualquier acción." );
define( "_AM_IMLINKS_PINGTIMES", "Mostrar los primeros ping time de cada enlace.<br /><br />Nota: Estos resultados pueden no ser exactos y se deben tomar como una referencia." );
define( "_AM_IMLINKS_NO_FORUM", "No seleccionar foro" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "Permisos para calificación" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "Seleccionar grupos que puedan calificar enlaces en las categorías seleccionadas." );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Permisos de autoaprobación" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "Seleccionar grupos que podrán enviar nuevos enlaces que se autoaprobarán sin la intervención del administrador." );
define( "_AM_IMLINKS_PERM_SPERMISSIONS", "Permisos para enviar" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "Seleccionar grupos que pueden enviar nuevos enlaces en las categorías seleccionadas." );
define( "_AM_IMLINKS_PERM_APERMISSIONS", "Permisos de moderación" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "Sellecionar grupos que tienen privilegios para moderar las categorías seleccionadas." );
// added by McDonald
define( "_AM_IMLINKS_COUNTRY", "País:" );
define( "_AM_IMLINKS_KEYWORDS", "Palabras clave:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "Las palabras clave deberían estar separadas por una coma (palabra1, palabra2, etc.)" );
define( "_AM_IMLINKS_CATTITLE", "Categoría" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Google Maps" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Yahoo Maps" );
define( "_AM_IMLINKS_LINK_BINGMAP", "Bing Maps" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "Comprobar mapa" );
define( "_AM_IMLINKS_STREET1", "Calle 1" );
define( "_AM_IMLINKS_STREET2", "Calle 2 (opcional)" );
define( "_AM_IMLINKS_TOWN", "Ciudad" );
define( "_AM_IMLINKS_STATE", "Estado" );
define( "_AM_IMLINKS_ZIPCODE", "Código postal" );
define( "_AM_IMLINKS_TELEPHONE", "Teléfono" );
define( "_AM_IMLINKS_FAX", "Fax" );
// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>Aviso:</b> <u>La carpeta</u> %s no es escribible. <br />Esta carpeta necesita tener permisos de escritura (CHMOD 777) para que imLinks pueda escribir en ella." );
// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "Nombre de quien envió el enlace: " );
define( "_AM_IMLINKS_MOBILE", "Teléfono móvil" );
define( "_AM_IMLINKS_CATSPONSOR", "Seleccione una categoría para el espónsor:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "Si selecciona un cliente, el id del banner del formulario que se muestra debajo no será guardado" );
define( "_AM_IMLINKS_BANNERID", "Seleccione Banner ID:" );
define( "_AM_IMLINKS_BANNERIDDSC", "Si selecciona un cliente, el id del banner del formulario que se muestra arriba no será guardado" );
// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "VAT Reg No" );
define( "_AM_IMLINKS_VATWIKI", "Para más información, haga clic en <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a>" );
define( "_AM_IMLINKS_EMAIL", "Correo electrónico" );
define( "_AM_IMLINKS_ICO_EXPIRE", "Expirado" );
define( "_AM_IMLINKS_LINK_NORESPONSE", 'Sin respuesta' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Formulario de direcciones</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Preferencias de la miscelanea de enlaces</b>' );//Miscellaneous Link settings
// Version 1.06 RC1
define( "_AM_IMLINKS_READWRITEERROR", "No seleccionó un archivo a subir o el servidor tiene insuficientes permisos de lectura/escritura para alojar este archivo" );
define( "_AM_IMLINKS_INVALIDFILESIZE", "Tamaño de archivo inválido" );
define( "_AM_IMLINKS_FILENAMEEMPTY", "El archivo está vacío" );
define( "_AM_IMLINKS_NOFILEUPLOAD", "Error: no se alojó ningún archivo" );
define( "_AM_IMLINKS_UPLOADERRORZERO", "Hubo un problema en el envío del archivo. Error: 0" );
define( "_AM_IMLINKS_UPLOADERRORONE", "El archivo que intenta enviar al servidor es demasiado grande. Error: 1" );
define( "_AM_IMLINKS_UPLOADERRORTWO", "El archivo que intenta enviar al servidor es demasiado grande. Error: 2" );
define( "_AM_IMLINKS_UPLOADERRORTHREE", "El archivo que intenta enviar al servidor fue sólo parcialmente alojado. Error: 3" );
define( "_AM_IMLINKS_UPLOADERRORFOUR", "No seleccionó ningún archivo. Error: 4" );
define( "_AM_IMLINKS_UPLOADERRORFIVE", "No seleccionó ningún archivo. Error: 5" );
define( "_AM_IMLINKS_NOUPLOADDIR", "No seleccionó ningún directorio en el servidor para alojar el archivo" );
define( "_AM_IMLINKS_FAILOPENDIR", "Error al abrir el directorio: " );
define( "_AM_IMLINKS_FAILOPENDIRWRITEPERM", "Error al abrir el directorio con permisos de escritura: " );
define( "_AM_IMLINKS_FILESIZEMAXSIZE", "Tamaño del archivo: %u. Tamaño máximo permitido: %u" );
define( "_AM_IMLINKS_FILESIZEMAXWIDTH", "Anchura del archivo: %u. Anchura máxima permitida: %u" );
define( "_AM_IMLINKS_FILESIZEMAXHEIGHT", "Altura del archivo: %u. Máxima altura permitida: %u" );
define( "_AM_IMLINKS_MIMENOTALLOW", "Tipo de archivo type no permitido: " );
define( "_AM_IMLINKS_FAILEDUPLOADING", "Fallo al alojar el archivo: " );
define( "_AM_IMLINKS_FILE", "Archivo" );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " ya está en el servidor. Por favor, renómbrelo a inténtelo de nuevo.<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Errores al alojar el archivo</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " no existe" );
define( "_AM_IMLINKS_INFORMATION", "Información del enlace" );
define( "_AM_IMLINKS_HITS", "Clics: " );
define( "_AM_IMLINKS_PAGERANK", "PageRank: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "No puede establecer una categoría como subcategoría de ella misma." );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "¿Mostrar últimos listados?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "¿Cuantos enlaces se mostrarán?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 desactiva esta opción." );
 //version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "Documentación" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "No mostrar imagen" );
define( "_AM_IMLINKS_NOSELECTION", "No hay selección" );
define( "_AM_IMLINKS_NOFILESELECT", "No se seleccionó ningún archivo" );

// *** imLinks ***

//version 1.00 RC-1
define( '_AM_IMLINKS_COUNTRYDSC', 'Si no se ha seleccionado ningún país la dirección no podrá ser formateada y no será mostrada.' );
define( '_AM_IMLINKS_MAPDSC', 'Haga clic en el icono para abrir una nueva solapa o ventana en el navegador mostrando el mapa.<br />Predeterminado: %s' );
define( '_AM_IMLINKS_LINKURLDSC', 'Haga clic en el icono para abrir el URL en una nueva solapa o ventana en el navegador.<br />Puede usar esta posibilidad para comprobar el URL.' );
define( '_AM_IMLINKS_STREETTWODSC', 'Este campo es opcional. Si se deja en blanco no será usado.' );
define( '_AM_IMLINKS_STATEDSC', 'Introduzca el condado, distrito, provincia, estado, etc. Si se deja en blanco no será usado.' );
define( '_AM_IMLINKS_EMAILDSC', 'Introduzca la dirección de correo electrónico:<br />- name@domain.com<br />- mailto:name@domain.com' );
define( '_AM_IMLINKS_CLONELINK', 'Duplicar el enlace' );
define( '_AM_IMLINKS_ICO_CLONE', 'Duplicar este ítem' );
define( '_AM_IMLINKS_RSSFEED', 'Origen de RSS' );
define( '_AM_IMLINKS_RSSFEEDCFG', 'Configuración del origen de RSS' );
define( '_AM_IMLINKS_RSSFEEDDSC', 'Aquí puede configurar el origen de RSS para imLinks.<br />Para más información, visite el sitio web <a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a>.' );
define( '_AM_IMLINKS_RSSACTIVE', 'Origen de RSS activado' );
define( '_AM_IMLINKS_RSSACTIVEDSC', 'Seleccione <em>Sí</em> para activar el origen de RSS para imLinks; seleccione <em>No</em> para desactivarlo.' );
define( '_AM_IMLINKS_RSSTITLE', 'Título del origen de RSS' );
define( '_AM_IMLINKS_RSSTITLEDSC', 'El nombre del canal; por él los internautas se referirán a este servicio. Si tiene un sitio web que contiene la misma información que el archivo RSS, el título de su canal debería ser el mismo que el del sitio web.' );
define( '_AM_IMLINKS_RSSLINKS', 'Enlace al origen de RSS' );
define( '_AM_IMLINKS_RSSLINKSDSC', 'El URL del sitio web correspondiente al canal.' );
define( '_AM_IMLINKS_RSSDESCRIPTION', 'Descripción del origen de RSS' );
define( '_AM_IMLINKS_RSSDESCRIPTIONDSC', 'Frase o sentencia que describe el canal.' );
define( '_AM_IMLINKS_RSSIMAGE', 'Imagen del origen de RSS' );
define( '_AM_IMLINKS_RSSIMAGEDSC', 'Especifique una imagen GIF, JPEG o PNG que será mostrada en el canal.' );
define( '_AM_IMLINKS_RSSWIDTH', 'Ancho de la imagen del origen de RSS' );
define( '_AM_IMLINKS_RSSWIDTHDSC', 'Indica el ancho de la misma en pixels.<br />El valor máximo es 144.' );
define( '_AM_IMLINKS_RSSHEIGHT', 'Altura de la imagen del origen de RSS' );
define( '_AM_IMLINKS_RSSHEIGHTDSC', 'Indica la altura de la misma en pixels.<br />El valor máximo es 400.' );
define( '_AM_IMLINKS_RSSIMGTITLE', 'Título de la imagen del origen de RSS' );
define( '_AM_IMLINKS_RSSIMGTITLEDSC', 'Describa la imagen como lo será por el atributo ALT de HTML &#60;img&#62; la etiqueta del canal será formateada en HTML.' );
define( '_AM_IMLINKS_RSSIMGLINK', 'Enlace de la imagen del origen de RSS' );
define( '_AM_IMLINKS_RSSIMGLINKDSC', 'Este es el URL del sitio; cuando el canal es mostrado la imagen es un enlace al sitio. (Nota: en la práctica, la imagen &#60;title&#62; y &#60;link&#62; deberían tener el mismo valor que el canal &#60;title&#62; and &#60;link&#62;).' );
define( '_AM_IMLINKS_RSSTTL', 'ttl del origen de RSS' );
define( '_AM_IMLINKS_RSSTTLDSC', 'Número de minutos en los que el canal permanecerá en caché antes de ser actualizado desde la fuente.' );
define( '_AM_IMLINKS_RSSWEBMASTER', 'Administrador del origen de RSS' );
define( '_AM_IMLINKS_RSSWEBMASTERDSC', 'Dirección de correo electrónico de la persona responsable de las cuestiones técnicas relativas al canal.' );
define( '_AM_IMLINKS_RSSEDITOR', 'Editor del canal del origen de RSS' );
define( '_AM_IMLINKS_RSSEDITORDSC', 'Dirección de correo electrónico de la persona responsable por el contenido editorial.' );
define( '_AM_IMLINKS_RSSCATEGORY', 'Categoría del origen de RSS' );
define( '_AM_IMLINKS_RSSCATEGORYDSC', 'Especifique una o más categorías para el canal. Siga las mismas reglas que  &#60;item&#62; elemento de la categoría.' );
define( '_AM_IMLINKS_RSSGENERATOR', 'Generador del origen de RSS' );
define( '_AM_IMLINKS_RSSGENERATORDSC', 'Llave indicando el programa usado para generar el canal.' );
define( '_AM_IMLINKS_RSSCOPYRIGHT', 'Copyright del origen de RSS' );
define( '_AM_IMLINKS_RSSCOPYRIGHTDSC', 'Contenido del Copyright del canal.' );
define( '_AM_IMLINKS_RSSTOTAL', 'Total de enlaces del origen de RSS' );
define( '_AM_IMLINKS_RSSTOTALDSC', 'Número total de enlaces que se mostrarán en el mismo.' );
define( '_AM_IMLINKS_RSSDBUPDATED', 'La base de datos fue actualizada con éxito' );
define( '_AM_IMLINKS_RSSOFFLINE', 'Título del mensaje cuando el origen de RSS está desactivado' );
define( '_AM_IMLINKS_RSSOFFLINEDSC', '' );
define( '_AM_IMLINKS_RSSOFFMSG', 'Mensaje cuando el origen de RSS esté desactivado' );
define( '_AM_IMLINKS_RSSOFFMSGDSC', 'El mismo será usado como explicación del porqué de dicha circunstancia.' );
define( '_AM_IMLINKS_RSSOFFTITLE', 'Este origen de RSS ha sido desactivado.' );
define( '_AM_IMLINKS_RSSOFFMSGDEF', 'Este origen de RSS ha sido temporalmente desactivado por motivos de mantenimiento.' );
define( '_AM_IMLINKS_RSSCLICKSUBMIT', 'Por favor, haga clic en <em>Enviar</em> para almacenar todos los valores del formulario en la base de datos' );
define( '_AM_IMLINKS_COPYRIGHT', 'Copyright' );

// Version 1.01 RC-1
define( '_AM_IMLINKS_NOREPLY', 'No responder' );
// imLinks 1.03
define( '_AM_IMLINKS_NICEURL', 'Usar URL abreviada para el enlace:' );
define( '_AM_IMLINKS_NICEURLDSC', 'Cuando la opción <em>Usar URL abreviada</em> en las preferencias está seleccionada y este campo está vacío, se usará el título del enlace.' );
define( '_AM_IMLINKS_TOMTOM', 'Añadir a TomTom' );
define( '_AM_IMLINKS_TOMTOMDSC', 'Establezca la latitud de la dirección.<br />Puede encontrar la posición geográfica de la misma en el sitio <a href="http://itouchmap.com/latlong.html" target="_blank">iTouchMap.com</a><br />La latitud y la longitud deberían estar en decimales, pero pueden ser negativos; "N"/"S"/"W"/"E" no son sufijos aceptados. El dato geodético predeterminado es WGS-84.<br />La posición geográfica debería ser establecida así:<br />- Latitud: 57.2355591<br />- Longitud: -2.3535921' );
define( '_AM_IMLINKS_TOMTOMLONG', 'Establecer longitud:' );
define( '_AM_IMLINKS_TOMTOMLAT', 'Establecer latitud:' );
define( '_AM_IMLINKS_MOD_TTLAT', 'Latitud para TomTom:' );
define( '_AM_IMLINKS_MOD_TTLONG', 'Longitud para TomTom:' );

// Version 1.1
define( '_AM_IMLINKS_MSG_OFFLINE', 'El enlace fue desactivado con éxito' );
define( '_AM_IMLINKS_MSG_ONLINE', 'El enlace fue activado con éxito' );
define( '_AM_IMLINKS_ICO_WAITING','Enviado y aguardando aprobación' );

// Version 1.12
define( "_AM_IMLINKS_LINK_FILESSTATUSDSC", "El enlace no estará visible para los usuarios." );
define( "_AM_IMLINKS_LINK_SETASUPDATEDDSC", "El enlace mostrará un ícono de actualizado." );
define( '_AM_IMLINKS_SCRSHOTENLARGE', 'Clic para agrandar la imagen' );

// Version 1.13
define( '_AM_IMLINKS_SEARCHTITLE', 'Search title' );
define( '_AM_IMLINKS_NOTPUBLISHED', 'Not Published' );
define( '_AM_IMLINKS_IPAGE_LETTERS', 'Show letters:' );
define( '_AM_IMLINKS_IPAGE_LETTERSDSC', 'Show letters above each page.' );
define( '_AM_IMLINKS_IPAGE_BUTTONS', 'Show buttons:' );
define( '_AM_IMLINKS_IPAGE_BUTTONSDSC', 'Show buttons like Submit, Popular and Latest Listing above each page.' );
?>