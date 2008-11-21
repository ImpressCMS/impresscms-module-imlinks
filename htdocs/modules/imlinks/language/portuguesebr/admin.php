<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/portuguesebr/admin.php
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

define( "_AM_IMLINKS_WARNINSTALL1", "AVISO: O diretório %s existe no seu servidor. <br />por razões de segurança, você deve remover este diretório." );
define( "_AM_IMLINKS_WARNINSTALL2", "AVISO: O arquivo %s existe no seu servidor. <br />por razões de segurança, você deve remover este diretório." );
define( "_AM_IMLINKS_WARNINSTALL3", "AVISO: O diretorio %s não existe no seu servidor. <br />Este local é necessário para o ImLinks." );

define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );

define( "_AM_IMLINKS_BMODIFY", "Modificar" );
define( "_AM_IMLINKS_BDELETE", "Apagar" );
define( "_AM_IMLINKS_BCREATE", "Criar" );
define( "_AM_IMLINKS_BADD", "Adicionar" );
define( "_AM_IMLINKS_BAPPROVE", "Aprovar" );
define( "_AM_IMLINKS_BIGNORE", "Ignorar" );
define( "_AM_IMLINKS_BCANCEL", "Cancelar" );
define( "_AM_IMLINKS_BSAVE", "Salvar" );
define( "_AM_IMLINKS_BRESET", "Limpar" );
define( "_AM_IMLINKS_BMOVE", "Mover links" );
define( "_AM_IMLINKS_BUPLOAD", "Enviar" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Apagar imagens selecionadas" );
define( "_AM_IMLINKS_BRETURN", "Voltar!" );
define( "_AM_IMLINKS_DBERROR", "Erro ao acessar o banco de dados: Favor informar erro no site do WF-Project" );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Opções de texto:" );
define( "_AM_IMLINKS_DISABLEHTML", " Desabilitar Tags HTML" );
define( "_AM_IMLINKS_DISABLESMILEY", " Desabilitar icones de Smilie" );
define( "_AM_IMLINKS_DISABLEXCODE", " Desabilitar BBcodes" );
define( "_AM_IMLINKS_DISABLEIMAGES", " Desabilitar Imagens" );
define( "_AM_IMLINKS_DISABLEBREAK", " Converter 'quebra de linha'?" );
define( "_AM_IMLINKS_UPLOADFILE", "Link enviado com sucesso" );
define( "_AM_IMLINKS_NOMENUITEMS", "Nenhum sub-item dentro do menu" );
// Admin Bread crumb
define( "_AM_IMLINKS_PREFS", "Preferências" );
define( "_AM_IMLINKS_BUPDATE", "Atualizar módulo" );
define( "_AM_IMLINKS_BINDEX", "Página principal" );
define( "_AM_IMLINKS_BPERMISSIONS", "Permissões" );
// define( "_AM_IMLINKS_BLOCKADMIN", "Blocos" );
define( "_AM_IMLINKS_BLOCKADMIN", "Blocos" );
define( "_AM_IMLINKS_GOMODULE", "Ir ao módulo" );
define( "_AM_IMLINKS_ABOUT", "Sobre" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Categoria: " );
define( "_AM_IMLINKS_SFILES", "Links: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Enviados: " );
define( "_AM_IMLINKS_SMODREQUEST", "Modificados: " );
define( "_AM_IMLINKS_SREVIEWS", "Revisões: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Administração de categorias" );
define( "_AM_IMLINKS_MLINKS", "Administrar links" );
define( "_AM_IMLINKS_MLISTBROKEN", "Lista de links quebrados" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "Lista de links Pingtime" );
define( "_AM_IMLINKS_INDEXPAGE", "Página principal da administração" );
define( "_AM_IMLINKS_MCOMMENTS", "Comentários" );
define( "_AM_IMLINKS_MVOTEDATA", "Votações" );
define( "_AM_IMLINKS_MUPLOADS", "Enviar imagem" );

// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "Criar nova categoria" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "Modificar categoria" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "Mover links da categoria" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Título da categoria:" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "Movimentação Falhou: Categoria não pode ser movida" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "Movimentação Falhou: Categoria não encontrada" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Links movidos e categoria apagada" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "Nova categoria criada e banco de dados atualizado com sucesso" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "A Categoria escolhida foi modificada e o banco de dados foi atualizado com sucesso" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "A Categoria escolhida foi removida e o banco de dados foi atualizado com sucesso" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "ATENÇãO: Você tem certeza que deseja apagar esta categoria e TODOS os seus arquivos e comentários?" );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "Você precisa antes criar uma Categoria para incluir um link." );
define( "_AM_IMLINKS_FCATEGORY_GROUPPROMPT", "Permissões de Acesso nas Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos que podem acessar esta categoria.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_SUBGROUPPROMPT", "Permissões de Acesso nas Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos que podem enviar novos links para esta categoria.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_MODGROUPPROMPT", "Permissões de Acesso nas Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos que podem moderar esta categoria.</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Título da categoria:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Importância da categoria:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Colocar como sub-categoria:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "Selecionar imagem da categoria:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Descrição da categoria:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Sumário da categoria:" );
/**
 * Index page Defines
 */
define( "_AM_IMLINKS_IPAGE_UPDATED", "Página principal Modificada e o banco de dados foi atualizado com sucesso!" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "Informação da página principal" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "Modificar página principal" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "Escolha a imagem principal do módulo:" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "Título:" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "Cabeçalho:" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "Alinhamento do cabeçalho:" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "Rodapé:" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "Alinhamento do rodapé:" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "Alinhar na esquerda" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "Alinhar ao centro" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "Alinhar na direita" );
/**
 * Permissions defines
 */
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Administração de Permissões" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>NOTA:</b> Mesmo que as permissões sejam definidas corretamente aqui, um grupo pode não ter acesso ao Módulo ou aos Blocos se não definir o acesso ao módulo. Para fazer isto, vá até a <b>Administração do Sistema > Grupos </b>, escolha o grupo apropriado e dê-lhe acesso ao módulo.</div>" );
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Permissões de Categoria" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "Escolha as categorias que cada grupo pode ver" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "Ainda não é possível fazer ajustes nas permissões. Você deve criar alguma categoria antes!" );
define( "_AM_IMLINKS_PERM_FPERMISSIONS", "Permissões de links" );
define( "_AM_IMLINKS_PERM_FNOFILES", "Não foi possível ajustar permissões porque não há links!" );
define( "_AM_IMLINKS_PERM_FSELECTPERMISSIONS", "Escolha os links que cada grupo pode ver" );
/**
 * Upload defines
 */
define("_AM_IMLINKS_LINK_IMAGEUPLOAD", "Imagem enviada com sucesso para o servidor.");
define("_AM_IMLINKS_LINK_NOIMAGEEXIST", "Erro: Não foi selecionado nenhum arquivo!");
define("_AM_IMLINKS_LINK_IMAGEEXIST", "Imagem já existe na pasta de upload!");
define("_AM_IMLINKS_LINK_FILEDELETED", "Arquivo foi removido.");
define("_AM_IMLINKS_LINK_FILEERRORDELETE", "Erro ao remover link: link não encontrado.");
define("_AM_IMLINKS_LINK_NOFILEERROR", "Erro ao remover link: nenhum link selecionado.");
define("_AM_IMLINKS_LINK_DELETEFILE", "ATENÇãO: Você tem certeza que deseja apagar esta imagem de link.");
define("_AM_IMLINKS_LINK_IMAGEINFO", "Status do Servidor");
define("_AM_IMLINKS_LINK_SPHPINI", "<b>Informações extraídas do PHP ini:</b>");
define("_AM_IMLINKS_LINK_SAFEMODESTATUS", "Modo Seguro: ");
define("_AM_IMLINKS_LINK_REGISTERGLOBALS", "Registros Globais: ");
define("_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Status de Uploads: ");
define("_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Tamanho Max de Upload: ");
define("_AM_IMLINKS_LINK_MAXPOSTSIZE", "Tamanho Max de Mensagem: ");
define("_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (Isto pode causar problemas)");
define("_AM_IMLINKS_LINK_GDLIBSTATUS", "Suporte à Biblioteca GD: ");
define("_AM_IMLINKS_LINK_GDLIBVERSION", "Versão da Biblioteca GD: ");
define("_AM_IMLINKS_LINK_GDON", "<b>Ativo</b> (Thumbnails Disponíveis)");
define("_AM_IMLINKS_LINK_GDOFF", "<b>Inativo</b> (Nenhum Thumbnail Disponível)");
define("_AM_IMLINKS_LINK_OFF", "<b>OFF</b>");
define("_AM_IMLINKS_LINK_ON", "<b>ON</b>");
define("_AM_IMLINKS_LINK_CATIMAGE", "Imagens de Categoria");
define("_AM_IMLINKS_LINK_SCREENSHOTS", "Imagens de ScreenShots");
define("_AM_IMLINKS_LINK_MAINIMAGEDIR", "Imagens Principais");
define("_AM_IMLINKS_LINK_FCATIMAGE", "Caminho para Imagens de Categoria");
define("_AM_IMLINKS_LINK_FSCREENSHOTS", "Caminho para Imagens de Screenshot");
define("_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Caminho para Imagens Principais");
define("_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Enviar Imagem: ");
define("_AM_IMLINKS_LINK_FUPLOADPATH", "Caminho do Upload: ");
define("_AM_IMLINKS_LINK_FUPLOADURL", "URL de Upload : ");
define("_AM_IMLINKS_LINK_FOLDERSELECTION", "Escolha o diretório de envio:");
define("_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Mostrar Imagem Selecionada:");
define("_AM_IMLINKS_LINK_FUPLOADIMAGE", "Enviar nova imagem para a pasta selecionada:");

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Resumo sobre a administração do módulo" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Links publicados:" );
define( "_AM_IMLINKS_MINDEX_AUTOPUBLISHEDLINK", "Links auto publicados:" );
define( "_AM_IMLINKS_MINDEX_AUTOEXPIRE", "Links auto expirados:" );
define( "_AM_IMLINKS_MINDEX_EXPIRED", "Links expirados:" );
define( "_AM_IMLINKS_MINDEX_OFFLINELINK", "Links Offline: " );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Título do link" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Enviado por" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Status" );
define( "_AM_IMLINKS_MINDEX_ONLINESTATUS", "Online Status" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Publicar" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Publicado" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Expirado" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Data não ajustada" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "Data do envio" );

define( "_AM_IMLINKS_MINDEX_ACTION", "Ação" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "Aviso: Nenhum link corresponde com esta caracteristica" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Página:<b> " );
define( '_AM_IMLINKS_MINDEX_PAGEINFOTXT', '<ul><li>ImLinks - Detalhes da página principal de Links.</li><li>Você poderá mudar facilmente o logotipo, texto de cabeçalho e rodapé.</li></ul><br /><br /><b>AVISO:</b> A imagem do logo que você está vendo agora, será usada em todo o módulo imLinks.' );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "Tempo de resposta" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "Links enviados" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "Informação dos links que aguardam validação" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Links aguardando validação/Aprovação: " );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>Aprovar</b> = (Irá aprovar as informações do novo link sem efetuar revisões ou validação)." );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Editar</b> = (Alterar ou não as informações do novo link e efetivar a aprovação)." );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Apagar</b> = (As informações do novo link será removida definivamente)." );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "não há links com estas características" );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "Novo link criado e banco de dados atualizado com sucesso!" );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATINGINFOMATION", "Informação de votações" );
define( "_AM_IMLINKS_VOTE_TOTALVOTES", "Total de votos: " );
define( "_AM_IMLINKS_VOTE_REGUSERVOTES", "Votos de membros registrados: %s" );
define( "_AM_IMLINKS_VOTE_ANONUSERVOTES", "Votos de membros anônimos: %s" );
define( "_AM_IMLINKS_VOTE_USER", "Membro" );
define( "_AM_IMLINKS_VOTE_IP", "IP" );
define( "_AM_IMLINKS_VOTE_DATE", "Votado a" );
define( "_AM_IMLINKS_VOTE_RATING", "Pontuação" );
define( "_AM_IMLINKS_VOTE_NOREGVOTES", "Nenhum voto de membro" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "Nenhum voto de anônimos" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Votação deletada." );
define( "_AM_IMLINKS_VOTE_ID", "ID" );
define( "_AM_IMLINKS_VOTE_FILETITLE", "Título do link" );
define( "_AM_IMLINKS_VOTE_DISPLAYVOTES", "Informações sobre as votações" );
define( "_AM_IMLINKS_VOTE_NOVOTES", "nenhum voto para mostrar" );
define( "_AM_IMLINKS_VOTE_DELETE", "Apagar votação" );
define( "_AM_IMLINKS_VOTE_DELETEDSC", "<b>Apagar</b> a votação selecionada do banco de dados." );
define( "_AM_IMLINKS_VOTEDELETED", "votação selecionada apagada e banco de dados atualizado" );

define( "_AM_IMLINKS_VOTE_USERAVG", "Média de votos" );
define( "_AM_IMLINKS_VOTE_TOTALRATE", "Total de Votos" );
define( "_AM_IMLINKS_VOTE_MAXRATE", "Máximo de votos" );
define( "_AM_IMLINKS_VOTE_MINRATE", "Minimo de votos" );
define( "_AM_IMLINKS_VOTE_MOSTVOTEDTITLE", "Mais votados" );
define( "_AM_IMLINKS_VOTE_LEASTVOTEDTITLE", "Menos votados" );
define( "_AM_IMLINKS_VOTE_MOSTVOTERSUID", "maioria dos eleitores ativos" );
define( "_AM_IMLINKS_VOTE_REGISTERED", "Votos registrados" );
define( "_AM_IMLINKS_VOTE_NONREGISTERED", "Votos anônimos" );
// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Total de pedidos de modificação: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Links modificados" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Informações de links modificados" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Título" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Mensagem original: " );
define( "_AM_IMLINKS_MOD_DATE", "Enviado" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "Não há pedidos que correspondem a estas características" );
define( "_AM_IMLINKS_MOD_TITLE", "Título do link: " );
define( "_AM_IMLINKS_MOD_LID", "ID do link: " );
define( "_AM_IMLINKS_MOD_CID", "Categoria: " );
define( "_AM_IMLINKS_MOD_URL", "Url do link: " );
define( "_AM_IMLINKS_MOD_PUBLISHER", "Publicado por: " );
define( "_AM_IMLINKS_MOD_FORUMID", "Fórum: " );
define( "_AM_IMLINKS_MOD_SCREENSHOT", "Screenshot: " );
define( "_AM_IMLINKS_MOD_HOMEPAGE", "Home Page: " );
define( "_AM_IMLINKS_MOD_HOMEPAGETITLE", "Título da Home Page: " );
define( "_AM_IMLINKS_MOD_SHOTIMAGE", "Screenshot: " );
define( "_AM_IMLINKS_MOD_DESCRIPTION", "Descrição: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Enviado por: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Enviar" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Detalhes propostos" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Detalhes originais" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Pedido de modificação removido do banco de dados" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Link selecionado modificado e banco de dados atualizado" );
define( '_AM_IMLINKS_MOD_VIEW', 'Ver' );
// Link management
define( "_AM_IMLINKS_LINK_ID", "ID do link: " );
define( "_AM_IMLINKS_LINK_IP", "IP dos Uploaders: " );
define( "_AM_IMLINKS_LINK_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extensões permitidas na administração de links</b>:</div>" );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Modificar informações do link" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Criar novo link" );
define( "_AM_IMLINKS_LINK_TITLE", "Título do link: " );
define( "_AM_IMLINKS_LINK_DLURL", "URL do Link: " );
define( "_AM_IMLINKS_LINK_DIRCA", " Avaliação do conteãºdo: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Descrição do link: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Categoria principal do link: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", " colocar link como offline?<br /><br /><span style='font-weight: normal;'>o link não será visto pelos usuários.</span>" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " Colocar link como atualizado?<br /><br /><span style='font-weight: normal;'>o link ficará com o ícone de atualizado</span>" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "ScreenShot do Link: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Discutir link no fórum?" );
define( "_AM_IMLINKS_LINK_PUBLISHDATE", "Data de publicação do link:" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Data de expiração do link:" );
define( "_AM_IMLINKS_LINK_CLEARPUBLISHDATE", "<br /><br />Remover data de publicação:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Remover data de expiração:" );
define( "_AM_IMLINKS_LINK_PUBLISHDATESET", " Data de publicação atual: " );
define( "_AM_IMLINKS_LINK_SETDATETIMEPUBLISH", " Incluir data/hora de publicação" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Incluir data/hora de expiração" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Incluir a data que o link deverá ser publicado: </b>" );
define( "_AM_IMLINKS_LINK_SETNEWPUBLISHDATE", "<b>Nova data que o link deverá ser publicado: </b><br />Publicado a:" );
define( "_AM_IMLINKS_LINK_SETPUBDATESETS", "<b>Data de Futura Publicação: </b><br />Publicar na data:" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " Data de Expiração Atual: " );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>Incluir data que deverá Expirar: </b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "Apagar relatório de link com defeito?<br /><br /><span style='font-weight: normal;'>Quando você escolher <b>SIM</b> O relatório de erro será apagado e você confirmará que o link está funcionando novamente!</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "O ScreenShot precisa possuir um formato válido e estar na pasta: <br /> %s <br />(ex: shot.gif). <br />Deixe em branco se não existir nenhum ScreenShot." );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "Aprovar link:" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "Novo link criado e banco de dados atualizado!" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "O Link escolhido foi modificado e banco de dados atualizado!" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "Apagar o link selecionado?" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", "Link %s apagado corretamente do banco de dados!" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "Link aprovado e banco de dados atualizado!" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>Criar notícia com base neste link</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "Enviar novo link como notícia?" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "Escolha a categoria de Notícias na qual deverá ser enviado este link:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "Título de Notícia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Deixe em branco ou use o título do link</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "Nome do link publicado: " );

/**
 * Broken links defines
 */
define( "_AM_IMLINKS_SBROKENSUBMIT", "Quebrado: " );
define( "_AM_IMLINKS_BROKEN_FILE", "Relatório de link quebrado" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Relatório de link quebrado ignorado e removido do banco de dados!" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Status recebido alterado e banco de dados atualizado!" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Status Atual modificado e banco de dados atualizado!" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Informações sobre o Relatório de link Quebrado" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Relatórios aguardando um solução:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Ignorar</b> = (Irá remover do relatório e nada será feito)." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Apagar</b> = (Será removido o link e também o relatório)." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>Editar</b> = (Edite o link para corrigir este problema)." );
define( "_AM_IMLINKS_BROKEN_ACKDESC", "<b>Recebido</b> = (Declara o recebimento do relatório)." );
define( "_AM_IMLINKS_BROKEN_CONFIRMDESC", "<b>Confirmado</b> = (Confirma o recebimento do relatório)." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Reconhecido" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Confirmado" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_TITLE", "Título" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Informado por" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Enviado por" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Data de Envio" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Ação" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "Não existem Relatórios com estas características" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "Link removido e Relatório apagado do Banco de Dados" );
/**
 * About defines
 */
define( "_AM_IMLINKS_BY", "por" );
// block defines
define( "_AM_IMLINKS_BADMIN", "Administração de Blocos" );
define( "_AM_IMLINKS_BLKDESC", "Descrição" );
define( "_AM_IMLINKS_TITLE", "Título" );
define( "_AM_IMLINKS_SIDE", "Alinhamento" );
define( "_AM_IMLINKS_WEIGHT", "Importância" );
define( "_AM_IMLINKS_VISIBLE", "Visível" );
define( "_AM_IMLINKS_ACTION", "Ação" );
define( "_AM_IMLINKS_SBLEFT", "Esquerda" );
define( "_AM_IMLINKS_SBRIGHT", "Direita" );
define( "_AM_IMLINKS_CBLEFT", "Centro-Esq" );
define( "_AM_IMLINKS_CBRIGHT", "Centro-Dir" );
define( "_AM_IMLINKS_CBCENTER", "Centro-Centro" );
define( "_AM_IMLINKS_ACTIVERIGHTS", "Direito de Ativar" );
define( "_AM_IMLINKS_ACCESSRIGHTS", "Direito de Acessar" );
// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Editar este item" );
define( "_AM_IMLINKS_ICO_DELETE", "Apagar este item" );
define( "_AM_IMLINKS_ICO_RESOURCE", "Editar este recurso" );

define( "_AM_IMLINKS_ICO_ONLINE", "Online" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Offline" );
define( "_AM_IMLINKS_ICO_APPROVED", "Aprovado" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "Não aprovado" );

define( "_AM_IMLINKS_ICO_LINK", "Link Correspondente" );
define( "_AM_IMLINKS_ICO_URL", "Adicionar URL Correspondente" );
define( "_AM_IMLINKS_ICO_ADD", "Adicionar" );
define( "_AM_IMLINKS_ICO_APPROVE", "Aprovar" );
define( "_AM_IMLINKS_ICO_STATS", "Estatísticas" );
define( "_AM_IMLINKS_ICO_VIEW", "Veja este item" );

define( "_AM_IMLINKS_ICO_IGNORE", "Ignorar" );
define( "_AM_IMLINKS_ICO_ACK", "Relatório de Link quebrado Recebido" );
define( "_AM_IMLINKS_ICO_REPORT", "Receber Relatório de Link Quebrado?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Relatório de Link Quebrado Confirmado!" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "Confirmar Relatório de Link Quebrado?" );
define( "_AM_IMLINKS_ICO_RES", "Editar recurso/Links para este item" );
define( "_AM_IMLINKS_MOD_URLRATING", "Avaliação do conteãºdo na internet:" );
// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Adicionar categoria alternativa" );
define( "_AM_IMLINKS_MALTCAT", "Administrar categoria alternativa" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Administrar categoria alternativa" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>As categorias alternativas podem ser adicionadas ou removidas facilmente através deste formulário.</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', 'Categorias alternativas forão salvas!' );

define( "_AM_IMLINKS_MRESOURCES", "Administração de recurso" );
define( "_AM_IMLINKS_RES_CREATED", "Administração de recurso" );
define( "_AM_IMLINKS_RES_ID", "ID" );
define( "_AM_IMLINKS_RES_DESC", "Descrição" );
define( "_AM_IMLINKS_RES_NAME", "Nome do recurso" );
define( "_AM_IMLINKS_RES_TYPE", "Tipo do recurso" );
define( "_AM_IMLINKS_RES_USER", "Membro" );
define( "_AM_IMLINKS_RES_CREATEF", "Adicionar recurso" );
define( "_AM_IMLINKS_RES_MODIFYF", "Modificar recurso" );
define( "_AM_IMLINKS_RES_NAMEF", "Nome do recurso:" );
define( "_AM_IMLINKS_RES_DESCF", "Descrição do recurso:" );
define( "_AM_IMLINKS_RES_URLF", "URL do recurso:" );
define( "_AM_IMLINKS_RES_ITEMIDF", "ID do item:" );
define( "_AM_IMLINKS_RES_INFOTEXT", "<ul><li>Novos recursos podem ser adicionados, editados ou removidos facilmente através deste formulário.</li>
	<li>Listar todos os recursos ligados ao link</li>
	<li>modificar nome do recurso e descrição</li></ul>
	" );
define( "_AM_IMLINKS_LISTBROKEN", "Exibir os links que talvez estejam quebrados. OBS: Estes resultados podem não ser exatos e devem ser conferidos.<br /><br />Por favor, verifique a existência do link antes de qualquer ação.<br /><br />" );
define( "_AM_IMLINKS_PINGTIMES", "Exibir primeiramente o tempo de resposta para cada link. <br /><br />OBS: Estes resultados podem não ser exatos e devem ser conferidos.<br /><br />" );

define( "_AM_IMLINKS_NO_FORUM", "Nenhum fórum selecionado" );

define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "Quem pode enviar avaliações" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "Selecione os grupos que poderão votar nas categorias selecionadas." );

define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Auto Aprovar Links" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "Selecione os grupos que terão novos link aprovados sem intervenção do administrador." );

define( "_AM_IMLINKS_PERM_SPERMISSIONS", "Pode Enviar links" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "Selecione os grupos que poderão enviar novos links para a categoria selecionada." );

define( "_AM_IMLINKS_PERM_APERMISSIONS", "Grupo de moderadores" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "Selecione os grupos que terão privilégios de moderação para a categoria selecionada." );

// added by McDonald
define( "_AM_IMLINKS_COUNTRY", "País:" );
define( "_AM_IMLINKS_KEYWORDS", "Palavra chave:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "<i>A palavra chave deverá ser separada sempre por um virgula, exemplo: (Palavra chave1, Palavra chave2, Palavra chave3, etc...).</i>" );
define( "_AM_IMLINKS_CHECKURL", "Verificar URL" );
define( "_AM_IMLINKS_CATTITLE", "Categoria" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Mapas do Google" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Mapas do Yahoo" );
define( "_AM_IMLINKS_LINK_MULTIMAP", "Multimap" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "Verificar mapa" );
define( "_AM_IMLINKS_STREET1", "Rua 1" );
define( "_AM_IMLINKS_STREET2", "Rua 2 (opcional)" );
define( "_AM_IMLINKS_TOWN", "Cidade" );
define( "_AM_IMLINKS_STATE", "Estado" );
define( "_AM_IMLINKS_ZIPCODE", "CEP" );
define( "_AM_IMLINKS_TELEPHONE", "Fone" );
define( "_AM_IMLINKS_FAX", "Fax" );

// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>AVISO:</b> <u>Pasta</u> %s não tem permissão de escrita/gravação. <br />Essa pasta deve ser gravável (CHMOD 777) para ImLinks." );
// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "Nome do apresentador do Link: " );
define( "_AM_IMLINKS_MOBILE", "Mobile" );
define( "_AM_IMLINKS_CATSPONSOR", "Escolha a categoria do Patrocinador:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "Se você selecionar um id do banner de clientes a partir do formulário abaixo não serão salvos!" );
define( "_AM_IMLINKS_BANNER", "Banner" );
define( "_AM_IMLINKS_FBANNER", "Banner" );
define( "_AM_IMLINKS_BANNERID", "Escolha o ID do Banner:" );
define( "_AM_IMLINKS_BANNERIDDSC", "Se você tiver selecionado um cliente, sob a forma acima do banner id não serão salvos!" );

// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "Reg. VAT Num." );
define( "_AM_IMLINKS_VATWIKI", "Para maiores informações veja no <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a> (Este recurso não se aplica no brasil neste momento)" );
define( "_AM_IMLINKS_EMAIL", "E-Mail" );
define( "_AM_IMLINKS_ICO_EXPIRE", "Expirado" );
define( "_AM_IMLINKS_LINK_NORESPONSE", 'Sem resposta' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Formulário de Endereços</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Várias configurações extras para seus Links</b>' );

// Version 1.06 RC1
define( "_AM_IMLINKS_READWRITEERROR", "Você não escolheu um arquivo para fazer o upload ou o servidor não tem permissões suficientes para ler/escrever para carregar este arquivo!" );
define( "_AM_IMLINKS_INVALIDFILESIZE", "Tamanho do arquivo inválido" );
define( "_AM_IMLINKS_FILENAMEEMPTY", "Nome do arquivo está vazio" );
define( "_AM_IMLINKS_NOFILEUPLOAD", "Nenhum arquivo carregado, isto é µm erro" );
define( "_AM_IMLINKS_UPLOADERRORZERO", "Houve um problema com seu upload. Erro: 0" );
define( "_AM_IMLINKS_UPLOADERRORONE", "O arquivo que você está tentando carregar é muito grande. Erro: 1" );
define( "_AM_IMLINKS_UPLOADERRORTWO", "O arquivo que você está tentando carregar é muito grande. Erro: 2" );
define( "_AM_IMLINKS_UPLOADERRORTHREE", "O arquivo que você está tentando carregar apenas foi carregado parcialmente. Erro: 3" );
define( "_AM_IMLINKS_UPLOADERRORFOUR", "Nenhum arquivo selecionado para upload. Erro: 4" );
define( "_AM_IMLINKS_UPLOADERRORFIVE", "Nenhum arquivo selecionado para upload. Erro: 5" );
define( "_AM_IMLINKS_NOUPLOADDIR", "O Diretório para Enviar (upload) não foi definido" );
define( "_AM_IMLINKS_FAILOPENDIR", "Falha na abertura diretório: " );
define( "_AM_IMLINKS_FAILOPENDIRWRITEPERM", "Falha na abertura do diretório com permissões de escrita: " );
define( "_AM_IMLINKS_FILESIZEMAXSIZE", "Tamanho do arquivo: %u. O tamanho máximo permitido éº %u" );
define( "_AM_IMLINKS_FILESIZEMAXWIDTH", "Largura do Arquivo: %u. Largura máxima permitida éº %u" );
define( "_AM_IMLINKS_FILESIZEMAXHEIGHT", "Altura do Arquivo: %u. A altura máxima permitida éº %u" );
define( "_AM_IMLINKS_MIMENOTALLOW", "Tipo MIME não permitido: " );
define( "_AM_IMLINKS_FAILEDUPLOADING", "Falhou carregamento do arquivo: " );
define( "_AM_IMLINKS_FILE", "Arquivo " );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " Já existe no servidor. Por favor, renomear esse arquivo e tentar novamente.<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Erros retornados ao fazer o upload</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " não existe!" );
define( "_AM_IMLINKS_INFORMATION", "Informações: " );
define( "_AM_IMLINKS_HITS", "Acessos: " );
define( "_AM_IMLINKS_PAGERANK", "PageRank?: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "Não é possível definir uma categoria como uma sub-categoria de si mesmo!" );
define( "_AM_IMLINKS_MOD_COUNTRY", "País:" );
define( "_AM_IMLINKS_MOD_KEYWORDS", "Palavras-chave:" );
define( "_AM_IMLINKS_MOD_ITEM_TAG", "Tags:" );
define( "_AM_IMLINKS_MOD_GOOGLEMAP", "Mapas Google:" );
define( "_AM_IMLINKS_MOD_YAHOOMAP", "Mapas Yahoo:" );
define( "_AM_IMLINKS_MOD_MULTIMAP", "Multimap:" );
define( "_AM_IMLINKS_MOD_STREET1", "End 1:" );
define( "_AM_IMLINKS_MOD_STREET2", "End 2 (opcional):" );
define( "_AM_IMLINKS_MOD_TOWN", "Cidade:" );
define( "_AM_IMLINKS_MOD_STATE", "Estado:" );
define( "_AM_IMLINKS_MOD_ZIP", "Cep:" );
define( "_AM_IMLINKS_MOD_TEL", "Fone:" );
define( "_AM_IMLINKS_MOD_FAX", "Fax:" );
define( "_AM_IMLINKS_MOD_VOIP", "VoIP:" );
define( "_AM_IMLINKS_MOD_MOBILE", "Mobile:" );
define( "_AM_IMLINKS_MOD_EMAIL", "E-Mail:" );
define( "_AM_IMLINKS_MOD_VAT", "VAT:" );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "Mostrar últimas listagens?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "Quantos links deverá mostrar?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 (Zero) deixará esta opção desabilitada (off)." );

//version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "Documentação" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "Não mostrar imagem" );
define( "_AM_IMLINKS_NOSELECTION", "Nenhuma seleção" );
define( "_AM_IMLINKS_NOFILESELECT", "Nenhum arquivo selecionado" );

// *** imLinks ***

//version 1.00 RC-1
define( '_AM_IMLINKS_COUNTRYDSC', 'Se o endereço não for conhecido deste país selecionado e não pode ser formatado, ele não irá será exibido.' );
define( '_AM_IMLINKS_MAPDSC', 'Clique no ícone para abrir uma nova aba ou janela do browser que irá mostrar o mapa.<br />Padrão: %s' );
define( '_AM_IMLINKS_LINKURLDSC', 'Clique no ícone para abrir uma nova url em uma aba ou janela no navegador.<br />Você pode usar isso para verificar o url.' );
define( '_AM_IMLINKS_STREETTWODSC', 'Este campo é opcional. Se o campo for deixado em branco, não será usado.' );
define( '_AM_IMLINKS_STATEDSC', 'Digite país, distrito, cidade, estado, etc. Se o campo for deixado em branco, não será usado.' );
define( '_AM_IMLINKS_EMAILDSC', 'Digite endereço de e-mail como:<br />- name@domain.com<br />- mailto:name@domain.com' );
define( '_AM_IMLINKS_CLONE', '**CLONAR**' );
define( '_AM_IMLINKS_CLONELINK', 'Clonar Link' );
define( '_AM_IMLINKS_ICO_CLONE', 'Clonar este item' );
define( '_AM_IMLINKS_RSSFEED', 'RSS Feed' );
define( '_AM_IMLINKS_RSSFEEDCFG', 'RSS Feed Configuration' );
define( '_AM_IMLINKS_RSSFEEDDSC', 'Here you can configure the RSS feed for imLinks.<br />For more information visit the <a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a> website.' );
define( '_AM_IMLINKS_RSSACTIVE', 'RSS feed activated' );
define( '_AM_IMLINKS_RSSACTIVEDSC', 'Select <em>Yes</em> to turn RSS feed for imLinks on, select <em>No</em> to turn it off.' );
define( '_AM_IMLINKS_RSSTITLE', 'RSS feed title' );
define( '_AM_IMLINKS_RSSTITLEDSC', 'The name of the channel. It\'s how people refer to your service. If you have a website that contains the same information as your RSS file, the title of your channel should be the same as the title of your website.' );
define( '_AM_IMLINKS_RSSLINKS', 'RSS feed link' );
define( '_AM_IMLINKS_RSSLINKSDSC', 'The URL to the website corresponding to the channel.' );
define( '_AM_IMLINKS_RSSDESCRIPTION', 'RSS feed description' );
define( '_AM_IMLINKS_RSSDESCRIPTIONDSC', 'Phrase or sentence describing the channel.' );
define( '_AM_IMLINKS_RSSIMAGE', 'RSS feed image' );
define( '_AM_IMLINKS_RSSIMAGEDSC', 'Specifies a GIF, JPEG or PNG image that can be displayed with the channel.' );
define( '_AM_IMLINKS_RSSWIDTH', 'RSS feed image width' );
define( '_AM_IMLINKS_RSSWIDTHDSC', 'Indicates the width of the image in pixels.<br />Maximum value for width is 144.' );
define( '_AM_IMLINKS_RSSHEIGHT', 'RSS feed image height' );
define( '_AM_IMLINKS_RSSHEIGHTDSC', 'Indicates the height of the image in pixels.<br />Maximum value for height is 400.' );
define( '_AM_IMLINKS_RSSIMGTITLE', 'RSS feed image title' );
define( '_AM_IMLINKS_RSSIMGTITLEDSC', 'Describes the image, it\'s used in the ALT attribute of the HTML &#60;img&#62; tag when the channel is rendered in HTML.' );
define( '_AM_IMLINKS_RSSIMGLINK', 'RSS feed image link' );
define( '_AM_IMLINKS_RSSIMGLINKDSC', 'This is the URL of the site, when the channel is rendered, the image is a link to the site. (Note, in practice the image &#60;title&#62; and &#60;link&#62; should have the same value as the channel\'s &#60;title&#62; and &#60;link&#62;.' );
define( '_AM_IMLINKS_RSSTTL', 'RSS feed ttl' );
define( '_AM_IMLINKS_RSSTTLDSC', 'ttl stands for time to live. It\'s a number of minutes that indicates how long a channel can be cached before refreshing from the source.' );
define( '_AM_IMLINKS_RSSWEBMASTER', 'RSS feed webmaster' );
define( '_AM_IMLINKS_RSSWEBMASTERDSC', 'Email address for person responsible for technical issues relating to channel.' );
define( '_AM_IMLINKS_RSSEDITOR', 'RSS feed channel editor' );
define( '_AM_IMLINKS_RSSEDITORDSC', 'Email address for person responsible for editorial content.' );
define( '_AM_IMLINKS_RSSCATEGORY', 'RSS feed category' );
define( '_AM_IMLINKS_RSSCATEGORYDSC', 'Specify one or more categories that the channel belongs to. Follows the same rules as the &#60;item&#62;-level category element.' );
define( '_AM_IMLINKS_RSSGENERATOR', 'RSS feed generator' );
define( '_AM_IMLINKS_RSSGENERATORDSC', 'String indicating the program used to generate the channel.' );
define( '_AM_IMLINKS_RSSCOPYRIGHT', 'RSS feed copyright' );
define( '_AM_IMLINKS_RSSCOPYRIGHTDSC', 'Copyright notice for content in the channel.' );
define( '_AM_IMLINKS_RSSTOTAL', 'RSS feed total links' );
define( '_AM_IMLINKS_RSSTOTALDSC', 'Give the total number of links to display in RSS feed.' );
define( '_AM_IMLINKS_RSSDBUPDATED', 'Database has been updated successfully' );
define( '_AM_IMLINKS_RSSOFFLINE', 'RSS feed offline message title' );
define( '_AM_IMLINKS_RSSOFFLINEDSC', 'Enter the title for the message when RSS feed is deactived.' );
define( '_AM_IMLINKS_RSSOFFMSG', 'RSS feed offline message' );
define( '_AM_IMLINKS_RSSOFFMSGDSC', 'Enter here an explanation for why the RSS feed has been deactivated.' );
define( '_AM_IMLINKS_RSSOFFTITLE', 'RSS feed has been deactivated.' );
define( '_AM_IMLINKS_RSSOFFMSGDEF', 'The RSS feed has been temporarily deactivated for maintenance.' );
define( '_AM_IMLINKS_COPYRIGHT', 'Copyright' );
?>