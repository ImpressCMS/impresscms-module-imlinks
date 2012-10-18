<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/portuguesebr/modinfo.php
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
* Translations: GibaPhp - http://br.impresscms.org /
* Revisions: 
* ----------------------------------------------------------------------------------------------------------
*/

// Module Info
// The name of this module
define("_MI_IMLINKS_NAME","imLinks");

// A brief description of this module
define("_MI_IMLINKS_DESC","Criar uma seção de links onde os usuários podem visualizar/incluir/votar.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_IMLINKS_BNAME1","Links recentes");
define("_MI_IMLINKS_BNAME2","Melhores links");

// Sub menu titles
define("_MI_IMLINKS_SMNAME1","Enviar");
define("_MI_IMLINKS_SMNAME2","Popular");
define("_MI_IMLINKS_SMNAME3","Mais votados");
define("_MI_IMLINKS_SMNAME4","Últimos Links");

// Names of admin menu items
define("_MI_IMLINKS_BINDEX","Início");
define("_MI_IMLINKS_INDEXPAGE","Administração");
define("_MI_IMLINKS_MCATEGORY","Categorias");
define("_MI_IMLINKS_MLINKS","Links");
define("_MI_IMLINKS_MUPLOADS","Envio de imagens");
define("_MI_IMLINKS_PERMISSIONS","Permissões");
define("_MI_IMLINKS_BLOCKADMIN","Blocos");
define("_MI_IMLINKS_MVOTEDATA","Votos");

// Title of config items
define('_MI_IMLINKS_POPULAR', 'Popular');
define('_MI_IMLINKS_POPULARDSC', 'O número de cliques que um link será considerado como Popular no seu site.');

//Display Icons
define("_MI_IMLINKS_ICONDISPLAY","Links populares e novos:");
define("_MI_IMLINKS_DISPLAYICONDSC", "Selecione como você irá mostrar os ícones populares e os novos na sua lista de links");
define("_MI_IMLINKS_DISPLAYICON1", "Mostrar como ícones");
define("_MI_IMLINKS_DISPLAYICON2", "Mostrar como texto");
define("_MI_IMLINKS_DISPLAYICON3", "Não mostrar");

define("_MI_IMLINKS_DAYSNEW","Links do dia:");
define("_MI_IMLINKS_DAYSNEWDSC","O número de dias que um link será considerado como novo.");
define("_MI_IMLINKS_DAYSUPDATED","Dias para Links atualizado:");
define("_MI_IMLINKS_DAYSUPDATEDDSC","O número de dias necessário para que um link seja considerado como Atualizado.");

define('_MI_IMLINKS_PERPAGE', 'Número de Links na lista:');
define('_MI_IMLINKS_PERPAGEDSC', 'Número de Links que será mostrado em cada categoria por padrão.');

define('_MI_IMLINKS_USESHOTS', 'Mostrar screenshots?');
define('_MI_IMLINKS_USESHOTSDSC', 'Selecione <em><b>SIM</b><em> caso você precise mostrar screenshots (pequenas imagens) para cada link no seu site');
define('_MI_IMLINKS_SHOTWIDTH', 'Mostrar comprimento da Imagem');
define('_MI_IMLINKS_SHOTWIDTHDSC', 'Mostrar comprimento do screenshot');
define('_MI_IMLINKS_SHOTHEIGHT', 'Mostrar altura da Imagem');
define('_MI_IMLINKS_SHOTHEIGHTDSC', 'Mostrar altura do screenshot');
define('_MI_IMLINKS_CHECKHOST', 'Desabilitar links diretos de outros sites para seus links?');
define('_MI_IMLINKS_REFERERS', 'Estes sites podem fazer links diretos <br />Separar com uma | ');
define("_MI_IMLINKS_ANONPOST","Envio por Usuários Anônimos:");
define("_MI_IMLINKS_ANONPOSTDSC","Permitir que usuários anônimos possam enviar novos links?");
define('_MI_IMLINKS_AUTOAPPROVE','Auto-aprovação de links enviados');
define('_MI_IMLINKS_AUTOAPPROVEDSC','Se escolher esta opção, os novos links serão aprovados automaticamente quando forem enviados ao seu site. (<b>não recomendado</b>).');

define('_MI_IMLINKS_MAXFILESIZE','Tamanho do Upload em (KB)');
define('_MI_IMLINKS_MAXFILESIZEDSC','Tamanho máximo permitido para os arquivos enviados.');
define('_MI_IMLINKS_IMGWIDTH','Comprimento Imagem no Upload');
define('_MI_IMLINKS_IMGWIDTHDSC','Comprimento máximo da imagem quando se envia arquivo de imagem.');
define('_MI_IMLINKS_IMGHEIGHT','Altura da Imagem no Upload');
define('_MI_IMLINKS_IMGHEIGHTDSC','Altura máxima da imagem quando se envia arquivo de imagem.');

define('_MI_IMLINKS_UPLOADDIR','Pasta de Uploads (Sem barra no final)');
define('_MI_IMLINKS_ALLOWSUBMISS','Sugestão de Usuários:');
define('_MI_IMLINKS_ALLOWSUBMISSDSC','Permitir que usuários possam fazer sugestão de novos Links');
define('_MI_IMLINKS_ALLOWUPLOADS','Envio por Usuário:');
define('_MI_IMLINKS_ALLOWUPLOADSDSC','Permitir que os usuários possam enviar imagens diretamente para o site');
define('_MI_IMLINKS_SCREENSHOTS','Pasta de Upload dos Screenshots');
define('_MI_IMLINKS_CATEGORYIMG','Pasta de Upload de Imagem nas Categorias');
define('_MI_IMLINKS_MAINIMGDIR','Pasta Principal de Imagens');
define('_MI_IMLINKS_USETHUMBS', 'Usar Miniaturas:');
define("_MI_IMLINKS_USETHUMBSDSC", "Formatos suportados: JPG, GIF, PNG.<div style='padding-top: 8px;'>ImLinks vai usar thumbnails nas imagens. Escolha  'Não' para usar a imagem original se o servidor não suportar esta opção.</div>");
define('_MI_IMLINKS_DATEFORMAT', 'Relógio:');
define('_MI_IMLINKS_DATEFORMATDSC', 'Relógio usado por padrão no ImLinks:');
define('_MI_IMLINKS_SHOWDISCLAIMER', 'Mostrar Termos de Uso antes do upload de arquivo?');
define('_MI_IMLINKS_SHOWDISCLAIMERDSC', 'Antes dos usuários incluirem um link, mostrar o regulamento.');
define('_MI_IMLINKS_SHOWLINKDISCL', 'Mostrar termos de uso antes do link do usuário?');
define('_MI_IMLINKS_SHOWLINKDISCLDSC', 'Mostrar regulamentos antes do usuário abrir o link?');
define('_MI_IMLINKS_DISCLAIMER', 'Escreva o texto dos termos de uso:');
define('_MI_IMLINKS_LINKDISCLAIMER', 'Entre com o link dos termos de uso:');
define('_MI_IMLINKS_SUBCATS', 'Sub-Categorias:');
define("_MI_IMLINKS_SUBMITART", "Inclusão do link:");
define("_MI_IMLINKS_SUBMITARTDSC", "Selecione grupos que podem adicionar novos links.");
define("_MI_IMLINKS_RATINGGROUPS", "Pontuação:");
define("_MI_IMLINKS_RATINGGROUPSDSC", "Selecione grupos que podem votar nos links.");
define("_MI_IMLINKS_IMGUPDATE", "Atualizar Thumbnails?");
define("_MI_IMLINKS_IMGUPDATEDSC", "Se for escolhido os thumbnails, eles serão atualizados a cada visualização da página, senão vai ser usada a primeira imagem sempre. <br /><br />");
define("_MI_IMLINKS_QUALITY", "Qualidade do Thumbnail:");
define("_MI_IMLINKS_QUALITYDSC", "Qualidade 0 (menor) 10 (maior)");
define("_MI_IMLINKS_KEEPASPECT", "Manter Aspect Ratio da Imagem?");
define("_MI_IMLINKS_KEEPASPECTDSC", "");
define("_MI_IMLINKS_ADMINPAGE", "Número de Arquivos na página principal no Admin:");
define("_MI_IMLINKS_AMDMINPAGEDSC", "Número de novos arquivos a ser mostrado na zona de admin de módulos");
define("_MI_IMLINKS_ARTICLESSORT", "Ordem padrão dos links:");
define("_MI_IMLINKS_ARTICLESSORTDSC", "selecione a ordem que os links serão listados");
define("_MI_IMLINKS_TITLE", "Título");
define("_MI_IMLINKS_RATING", "Votos");
define("_MI_IMLINKS_WEIGHT", "Importância");
define("_MI_IMLINKS_POPULARITY", "Popularidade");
define("_MI_IMLINKS_SUBMITTED2", "Data de Envio");
define('_MI_IMLINKS_COPYRIGHT', 'Copyright:');
define('_MI_IMLINKS_COPYRIGHTDSC', 'Selecione para mostrar Copyright na página de links.');
// Description of each config items
define('_MI_IMLINKS_SUBCATSDSC', 'Selecione <b>SIM</b> para mostrar sub-categorias. Ao Selecionar <b>NÃO</b> vai esconder as sub-categorias nas listagens.');

// Text for notifications
define('_MI_IMLINKS_GLOBAL_NOTIFY', 'Global');
define('_MI_IMLINKS_GLOBAL_NOTIFYDSC', 'Opções globais de notificações.');
define('_MI_IMLINKS_CATEGORY_NOTIFY', 'Categoria');
define('_MI_IMLINKS_CATEGORY_NOTIFYDSC', 'Opções de notificações correspondentes apenas à categoria corrente.');
define('_MI_IMLINKS_LINK_NOTIFY', 'Link');
define('_MI_IMLINKS_FILE_NOTIFYDSC', 'Opções de notificações aplicadas ao link atual');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nova categoria');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Avise-me quando uma nova categoria de link for criada.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receber uma notificação sobre todo pedidos para uma nova categoria de link for criada');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação-Automática : Nova categoria de link');                              

define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Pedido de modificação do link');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Avise-me quando qualquer modificação de link for enviada.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Receber notificações para todo pedido de modificação de link.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação-Automática : Novo pedido de modificação de link');

define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Notificação de Link corrompindo');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Avise-me sobre relatórios de links quebrados.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Receber notificações quando qualquer relatório de link quebrado for enviado.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação-Automática : Relatório de Link quebrado');

define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'Link enviado');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Avise-me sobre todos os links enviados (aguardando aprovação).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Receber notificação de todo link enviado (aguardando aprovação).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : Novo link enviado');

define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY', 'Novo Link');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Avise-me de todos novos links publicados');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Receber notificação de todo novo link publicado.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação-Automática : Novo link');

define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY', 'Link enviado');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Avise-me quando um novo link for enviado (aguardando aprovação) para a categoria atual.');   
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Receber notificação quando novo link for enviado (aguardando aprovação) para a categoria atual.');      
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação-Automática : Novo link enviado na categoria'); 

define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY', 'Novo link');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Avise-me quando um novo link for incluido na categoria atual.');   
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Receber notificação quando um novo link for incluido na categoria atual.');      
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação-Automática : Nova categoria'); 

define('_MI_IMLINKS_LINK_APPROVE_NOTIFY', 'Link Aprovado');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYCAP', 'Avise-me quando o link for aprovado.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYDSC', 'Receber notificação quando o link for aprovado.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação-Automática : Link aprovado');

define('_MI_IMLINKS_AUTHOR_CREDITSTEXT',"A equipe do WF-Projects gostaria de agradecer as seguintes pessoas por sua ajuda e apoio durante a fase do desenvolvimento deste módulo.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333, GibaPhp");
define('_MI_IMLINKS_AUTHOR_BUGFIXES', "Historico de reparos de erro");

define('_MI_IMLINKS_COPYRIGHT2', 'Copyright' );
define('_MI_IMLINKS_COPYRIGHTIMAGE', "A menos que indicado de outra maneira, este módulo (ImLinks) e suas imagens são registradas à equipe do WF-Projects.<br /><br />Você pode copiar, editar e mudar o ImLinks para servir suas exigências pessoais. Você concorda em não modificar, apaptar e redistribuir o código fonte sem autorização da equipe WF-Projects.");

define('_MI_IMLINKS_SELECTFORUM', "Selecione forum:");
define('_MI_IMLINKS_SELECTFORUMDSC', "Selecione o forum que você instalou e será usado pelo ImLinks.");

define('_MI_IMLINKS_DISPLAYFORUM1', "Newbb (todos)");
define('_MI_IMLINKS_DISPLAYFORUM2', "IPB Forum");
define('_MI_IMLINKS_DISPLAYFORUM3', "Módulo PHPBB2");

// added by McDonald
define( "_MI_IMLINKS_COUNTRY", "País:" );
define('_MI_IMLINKS_EDITOR', "Usar editor:");
define('_MI_IMLINKS_EDITORCHOICE', "Selecione o editor para o administrador. Se você tem uma instalação 'simples' (e.g você está usando somente a classe de editores padrão do core, fornecidos no pacote padrão core), é só selecionar o DHTML Compacto para trabalhar corretamente.");
define('_MI_IMLINKS_EDITORUSER', "Usar editor (usuário):");
define('_MI_IMLINKS_EDITORCHOICEUSER', "Selecione editor para o usuário. Se você tem uma instalação 'simples' (e.g você está usando somente a classe de editores padrão do core, fornecidos no pacote padrão core), é só selecionar o DHTML Compacto para trabalhar corretamente.");
define("_MI_IMLINKS_FORM_DHTML","DHTML");
define("_MI_IMLINKS_FORM_COMPACT","Compacto");
define("_MI_IMLINKS_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_IMLINKS_FORM_FCK","FCK Editor");
define("_MI_IMLINKS_FORM_KOIVI","Koivi Editor");
define("_MI_IMLINKS_FORM_TINYEDITOR","Tinyeditor");
define("_MI_IMLINKS_FORM_TINYMCE", "TinyMCE");
define("_MI_IMLINKS_FORM_DHTMLEXT", "DHTML Extendido");
define("_MI_IMLINKS_SORTCATS", "Classificar por categorias:");
define("_MI_IMLINKS_SORTCATSDSC", "Escolha como categorias e subcategorias serão ordenadas.");
define("_MI_IMLINKS_KEYLENGTH", "Digite o máximo de caracteres para meta palavras-chave:");
define("_MI_IMLINKS_KEYLENGTHDSC", "Padrão será 255 caracteres");
define("_MI_IMLINKS_OTHERLINKS", "Mostrar outros links enviados pelo Autor?");
define("_MI_IMLINKS_OTHERLINKSDSC", "Selecione se outros links do autor serão exibidas.");
define("_MI_IMLINKS_TOTALCHARS", "Escolher o total de caracteres para a descrição?");
define("_MI_IMLINKS_TOTALCHARSDSC", "Definir o total de caracteres para a descrição da categoria.");
define("_MI_IMLINKS_QUICKVIEW", "Mostrar opção de visualização rápida");
define("_MI_IMLINKS_QUICKVIEWDSC", "Isto irá transformar (ligar)on/off(desligar) a opção Rápida de Visualização.");
define('_MI_IMLINKS_ICONS_CREDITS', "Ícones por");
define("_MI_IMLINKS_SHOWSBOOKMARKS", "Exibir Social Bookmarks?");
define("_MI_IMLINKS_SHOWSBOOKMARKSDSC", "Selecione Sim se quiser que um Social Bookmark seja exibido no link.");
define("_MI_IMLINKS_SHOWPAGERANK", "Exibir Google PageRank?");
define("_MI_IMLINKS_SHOWPAGERANKSDSC", "Escolha Sim se pretende que o PageRank do Google seja exibido.");
define("_MI_IMLINKS_USERTAGDESCR", "Usuário pode enviar Tags:");
define("_MI_IMLINKS_USERTAGDSC", "Selecione Sim para autorizar o usuário a enviar tags.");

// Version 1.05 RC5
define('_MI_IMLINKS_DATEFORMATADMIN', 'Administração de datas e horas:');
define('_MI_IMLINKS_DATEFORMATADMINDSC', 'O padrão na administração é Timestamp para o ImLinks<br />Veja também o <a href="http://jp.php.net/manual/pt_BR/function.date.php" target="_blank">manual do PHP sobre datas.</a>');
define("_MI_IMLINKS_USEADDRESSDESCR", "Utilize o endereço e opções de mapas?");
define("_MI_IMLINKS_USEADDRESSDSC","Selecione Sim para utilizar o endereço e o recurso de mapas.");
define("_MI_IMLINKS_HEADERPRINT","[PRINT OPTIONS] Imprimir cabeçalho da página");
define("_MI_IMLINKS_HEADERPRINTDSC","Cabeçalho que será impresso em cada link");
define("_MI_IMLINKS_LOGOURLPRINT","[PRINT OPTIONS] URL do Logo a imprimir");
define("_MI_IMLINKS_LOGOURLDSCPRINT","URL do logotipo a ser impresso no topo da página");
define("_MI_IMLINKS_FOOTERPRINT","[PRINT OPTIONS] Imprimir rodapé da página");
define("_MI_IMLINKS_FOOTERPRINTDSC","Rodapé que será impresso para cada link");
define("_MI_IMLINKS_BNAME3","ImLinks - Estatísticas do Patrocinador ");
define("_MI_IMLINKS_VCARD_CREDITS","vCard pelo script");

// Version 1.05 RC6
define("_MI_IMLINKS_FLAGIMG","Imagem da bandeira do País no diretório");
define("_MI_IMLINKS_FLAGIMGDSC","Digite o URL sem uma barra final");
define("_MI_IMLINKS_CATEGORYIMGDSC","Digite o URL sem uma barra final");
define("_MI_IMLINKS_SCREENSHOTSDSC","Digite o URL sem uma barra final");
define("_MI_IMLINKS_MAINIMGDIRDSC","Digite o URL sem uma barra final");
define("_MI_IMLINKS_USEAUTOSCRSHOT","Usar Auto Screenshot");
define("_MI_IMLINKS_USEAUTOSCRSHOTDSC","Isto irá criar automaticamente uma tela (ScreenShot) com base na url. Este recurso de screenshots poderá ser ignorado e poderá não funcionar para todos os sites.");
define("_MI_IMLINKS_MOZSHOT_CREDITS", "Auto Screenshot por");
define("_MI_IMLINKS_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>MozShot</a> (todos os códigos fontes estão a sua disposição no <a href="http://www.ruby-lang.org/pt/" target=_blank>Ruby site Pt</a> licença)');

// Version 1.06 RC-1
define("_MI_IMLINKS_BNAME4","Tags");
define("_MI_IMLINKS_BNAME5","Melhores Tags");

// Version 1.06 RC-3
define('_MI_IMLINKS_DISPLAYFORUM4', "Newbbex");
define("_MI_IMLINKS_TITLE_A", "Título (A)");
define("_MI_IMLINKS_TITLE_D", "Título (D)");
define("_MI_IMLINKS_RATING_A", "Votos (A)");
define("_MI_IMLINKS_RATING_D", "Votos (D)");
define("_MI_IMLINKS_SUBMITTED_A", "Data de Envio (A)");
define("_MI_IMLINKS_SUBMITTED_D", "Data de Envio (D)");
define("_MI_IMLINKS_POPULARITY_A", "Popularidade (A)");
define("_MI_IMLINKS_POPULARITY_D", "Popularidade (D)");
define("_MI_IMLINKS_COUNTRY_A", "País (A)");
define("_MI_IMLINKS_COUNTRY_D", "País (D)");

// imLinks 1.00 RC-1
define( "_MI_IMLINKS_CAPTCHA", "Use captcha nos formulários de envio?" );
define( "_MI_IMLINKS_CAPTCHADSC", "Escolha <em><b>Sim</b></em> para usar o captcha nos forulários em que for enviar alguma informação no lado do usuário.<br />Padrão é: <em>Sim</em>" );
define( "_MI_IMLINKS_LINKEDTERMS", "Link para termos do glossário?" );
define( "_MI_IMLINKS_LINKEDTERMSDSC", "O módulo imGlossary precisa estar instalado e ativo para este recurso funcionar corretamente." );
define( "_MI_IMLINKS_IMGLOSSARYDIR", "Nome da pasta onde está o ImGlossary:" );
define( "_MI_IMLINKS_IMGLOSSARYDIRDSC", "O nome da pasta onde está fisicamente o módulo imGlossary no seu site<br />O padrão é: <em>imglossary</em> mas se você instalou em outro local, fique muito atento aqui." );
define( '_MI_IMLINKS_ABOUTLICENSE', 'GNU General Public License (GPL) - uma cópia desta licença GNU está incluída no arquivo (license.txt).' );
define( '_MI_IMLINKS_AUTOTHUMBSRC', 'Escolha a fonte para a geração automática do screenshot' );
define( '_MI_IMLINKS_AUTOTHUMBSRCDSC', 'Mais informações:<br />- <a href="http://www.thumbshots.org/" target="_blank">Thumbshots.org</a><br />- <a href="http://mozshot.nemui.org/" target="_blank">Mozshot</a>' );
define( '_MI_IMLINKS_CATCOLS', 'Número de colunas da categoria:' );
define( '_MI_IMLINKS_CATCOLSDSC', 'Escolha o número de colunas para a página da categoria principal.<br />Padrão: <em>2</em>' );
define( '_MI_IMLINKS_RSSFEED', 'RSS Feed' );
define( '_MI_IMLINKS_SHOWRATING', 'Mostrar a funcionalidade de votos?' );
define( '_MI_IMLINKS_SHOWRATINGDSC', 'Escolha <em><b>Sim</b></em> para mostrar a nova função de votos interativa. Escolha <em>Não</em> para esconder as votações. Nota: Esta opção não tem nada em comum com a definição de permissões.' );

// imLinks 1.00 RC-2
define( '_MI_IMLINKS_BNAME6', 'Random Link' );

// imLinks 1.01
define( '_MI_IMLINKS_SHOWLEGEND', 'Show category legend?' );
define( '_MI_IMLINKS_SHOWLEGENDDSC', 'With this option you can turn on/off the legend explaining the different colours of the default category icons.' );
define( '_MI_IMLINKS_LIGHTWINDOW', 'Open links in LightWindow?' );
define( '_MI_IMLINKS_LIGHTWINDOWDSC', 'Select <em>Yes</em> to have links opened in a LightWindow instead of a new browser tab/window.' );
define( '_MI_IMLINKS_LIGHTWINDOW', 'Select how a link should be opened?' );
define( '_MI_IMLINKS_LIGHTWINDOWDSC', 'Select <em>Default</em> to have links opened in a new browser tab/window.<br />
									   Select <em>LightWindow</em> to have links opened in a <a href="http://www.stickmanlabs.com/lightwindow/" target="_blank">LightWindow</a>.<br />
									   Select <em>GreyBox</em> to have links opened in a <a href="http://orangoo.com/labs/GreyBox/" target="_blank">GreyBox</a>.' );
define( '_MI_IMLINKS_DEFAULT', 'Default' );

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

// imLinks 1.13
define( '_MI_IMLINKS_IPFTABLE', 'Use IPF table on admin main index page' );
define( '_MI_IMLINKS_IPFTABLEDSC', 'Using the IPF table will limit the amount of links listed per page.' );
define( '_MI_IMLINKS_USELYTE', 'Use Lytebox for helptips and enlarging screenshots:' );
define( '_MI_IMLINKS_USELYTEDSC', 'Choose <i>Yes</i> for helptips in the forms and enlarging screenshots. Choose <i>No</i> to disable these features.' );
?>