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
define( "_AM_IMLINKS_BCREATE", "Criar" );
define( "_AM_IMLINKS_BAPPROVE", "Aprovar" );
define( "_AM_IMLINKS_BIGNORE", "Ignorar" );
define( "_AM_IMLINKS_BSAVE", "Salvar" );
define( "_AM_IMLINKS_BRESET", "Limpar" );
define( "_AM_IMLINKS_BMOVE", "Mover" );
define( "_AM_IMLINKS_BUPLOAD", "Enviar" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Apagar imagens selecionadas" );
define( "_AM_IMLINKS_DBERROR", "Erro ao acessar o banco de dados: Favor informar erro no site do [url=http://community.impresscms.org/modules/newbb/viewforum.php?forum=9]ImpressCMS Community Forum - Module Support[/url]." );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Opções de texto:" );
define( "_AM_IMLINKS_DISABLEXCODE", " Desabilitar BBcodes" );
define( "_AM_IMLINKS_DISABLEIMAGES", " Desabilitar Imagens" );
define( "_AM_IMLINKS_DISABLEBREAK", " Converter 'quebra de linha'?" );
define( "_AM_IMLINKS_UPLOADFILE", "Link enviado com sucesso" );
// Admin Bread crumb
define( "_AM_IMLINKS_BUPDATE", "Atualizar módulo" );
define( "_AM_IMLINKS_BINDEX", "Página principal" );
define( "_AM_IMLINKS_BPERMISSIONS", "Permissões" );
define( "_AM_IMLINKS_GOMODULE", "Ir ao módulo" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Categoria: " );
define( "_AM_IMLINKS_SFILES", "Links: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Enviados: " );
define( "_AM_IMLINKS_SMODREQUEST", "Modificados: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Administração de categorias" );
define( "_AM_IMLINKS_MLINKS", "Administrar links" );
define( "_AM_IMLINKS_MLISTBROKEN", "Lista de links quebrados" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "Lista de links Pingtime" );
define( "_AM_IMLINKS_INDEXPAGE", "Página principal da administração" );
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

/**
 * Upload defines
 */
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "Imagem enviada com sucesso para o servidor.");
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "Erro: Não foi selecionado nenhum arquivo!");
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "Imagem já existe na pasta de upload!");
define( "_AM_IMLINKS_LINK_FILEDELETED", "Arquivo foi removido.");
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "Erro ao remover link: link não encontrado.");
define( "_AM_IMLINKS_LINK_NOFILEERROR", "Erro ao remover link: nenhum link selecionado.");
define( "_AM_IMLINKS_LINK_DELETEFILE", "ATENÇãO: Você tem certeza que deseja apagar esta imagem de link.");
define( "_AM_IMLINKS_LINK_IMAGEINFO", "Status do Servidor");
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>Informações extraídas do PHP ini:</b>");
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "Modo Seguro: ");
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "Registros Globais: ");
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Status de Uploads: ");
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Tamanho Max de Upload: ");
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "Tamanho Max de Mensagem: ");
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (Isto pode causar problemas)");
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "Suporte à Biblioteca GD: ");
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "Versão da Biblioteca GD: ");
define( "_AM_IMLINKS_LINK_GDON", "<b>Ativo</b> (Thumbnails Disponíveis)");
define( "_AM_IMLINKS_LINK_GDOFF", "<b>Inativo</b> (Nenhum Thumbnail Disponível)");
define( "_AM_IMLINKS_LINK_OFF", "<b>OFF</b>");
define( "_AM_IMLINKS_LINK_ON", "<b>ON</b>");
define( "_AM_IMLINKS_LINK_CATIMAGE", "Imagens de Categoria");
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "Imagens de ScreenShots");
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "Imagens Principais");
define( "_AM_IMLINKS_LINK_FCATIMAGE", "Caminho para Imagens de Categoria");
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "Caminho para Imagens de Screenshot");
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Caminho para Imagens Principais");
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Enviar Imagem: ");
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "Caminho do Upload: ");
define( "_AM_IMLINKS_LINK_FUPLOADURL", "URL de Upload : ");
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "Escolha o diretório de envio:");
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Mostrar Imagem Selecionada:");
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "Enviar nova imagem para a pasta selecionada:");

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Resumo sobre a administração do módulo" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Links publicados:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Título do link" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Enviado por" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Status" );
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
define( "_AM_IMLINKS_VOTE_RATING", "Pontuação" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "Nenhum voto de anônimos" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Votação deletada." );

define( "_AM_IMLINKS_VOTE_TOTALRATE", "Total de Votos" );

// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Total de pedidos de modificação: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Links modificados" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Informações de links modificados" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Título" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Mensagem original: " );
define( "_AM_IMLINKS_MOD_DATE", "Enviado" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "Não há pedidos que correspondem a estas características" );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Enviado por: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Enviar" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Detalhes propostos" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Detalhes originais" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Pedido de modificação removido do banco de dados" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Link selecionado modificado e banco de dados atualizado" );

// Link management
define( "_AM_IMLINKS_LINK_ID", "ID do link: " );
define( "_AM_IMLINKS_LINK_IP", "IP dos Uploaders: " );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Modificar informações do link" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Criar novo link" );
define( "_AM_IMLINKS_LINK_TITLE", "Título do link: " );
define( "_AM_IMLINKS_LINK_DLURL", "URL do Link: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Descrição do link: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Categoria principal do link: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", " colocar link como offline?<br /><br /><span style='font-weight: normal;'>o link não será visto pelos usuários.</span>" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " Colocar link como atualizado?<br /><br /><span style='font-weight: normal;'>o link ficará com o ícone de atualizado</span>" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "ScreenShot do Link: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Discutir link no fórum?" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Data de expiração do link:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Remover data de expiração:" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Incluir data/hora de expiração" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Incluir a data que o link deverá ser publicado: </b>" );
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
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Reconhecido" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Confirmado" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Informado por" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Enviado por" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Data de Envio" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Ação" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "Não existem Relatórios com estas características" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "Link removido e Relatório apagado do Banco de Dados" );

// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Editar este item" );
define( "_AM_IMLINKS_ICO_DELETE", "Apagar este item" );

define( "_AM_IMLINKS_ICO_ONLINE", "Online" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Offline" );
define( "_AM_IMLINKS_ICO_APPROVED", "Aprovado" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "Não aprovado" );

define( "_AM_IMLINKS_ICO_LINK", "Link Correspondente" );
define( "_AM_IMLINKS_ICO_URL", "Adicionar URL Correspondente" );
define( "_AM_IMLINKS_ICO_APPROVE", "Aprovar" );
define( "_AM_IMLINKS_ICO_STATS", "Estatísticas" );
define( "_AM_IMLINKS_ICO_VIEW", "Veja este item" );

define( "_AM_IMLINKS_ICO_ACK", "Relatório de Link quebrado Recebido" );
define( "_AM_IMLINKS_ICO_REPORT", "Receber Relatório de Link Quebrado?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Relatório de Link Quebrado Confirmado!" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "Confirmar Relatório de Link Quebrado?" );

// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Adicionar categoria alternativa" );
define( "_AM_IMLINKS_MALTCAT", "Administrar categoria alternativa" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Administrar categoria alternativa" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>As categorias alternativas podem ser adicionadas ou removidas facilmente através deste formulário.</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', 'Categorias alternativas forão salvas!' );

define( "_AM_IMLINKS_LISTBROKEN", "Exibir os links que talvez estejam quebrados. OBS: Estes resultados podem não ser exatos e devem ser conferidos.<br /><br />Por favor, verifique a existência do link antes de qualquer ação." );
define( "_AM_IMLINKS_PINGTIMES", "Exibir primeiramente o tempo de resposta para cada link. <br /><br />OBS: Estes resultados podem não ser exatos e devem ser conferidos." );

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
define( "_AM_IMLINKS_CATTITLE", "Categoria" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Mapas do Google" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Mapas do Yahoo" );
define( "_AM_IMLINKS_LINK_BINGMAP", "Mapas do Bing" );
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
define( '_AM_IMLINKS_CLONELINK', 'Clonar Link' );
define( '_AM_IMLINKS_ICO_CLONE', 'Clonar este item' );
define( '_AM_IMLINKS_RSSFEED', 'RSS Feed' );
define( '_AM_IMLINKS_RSSFEEDCFG', 'Configuração do RSS Feed' );
define( '_AM_IMLINKS_RSSFEEDDSC', 'Aqui você poderá configurar o seu RSS feed para o módulo de Links.<br />Para maiores informações, não deixe de visitar a <a href="http://www.rssficado2.com.br/wiki/Especifica%C3%A7%C3%A3o_do_RSS_2.0/" target="_blank">Especificação do RSS 2.0</a> e o wiki sobre <a href="http://pt.wikipedia.org/wiki/Feed/" target="_blank">feeds</a>. Para conteúdo em inglês, voce pode ver todos os detalhes no <a href="http://www.rssboard.org/" target="_blank">Conselho Consultivo do RSS</a> website.' );
define( '_AM_IMLINKS_RSSACTIVE', 'RSS feed ativado' );
define( '_AM_IMLINKS_RSSACTIVEDSC', 'Escolha <em><b>Sim</b></em> para ativar o RSS feed para o módulo de Links. Escolhendo <em><b>Não</b></em> você não irá gerar RSS feed para este módulo.' );
define( '_AM_IMLINKS_RSSTITLE', 'Título do RSS feed' );
define( '_AM_IMLINKS_RSSTITLEDSC', 'O nome do seu canal. Este é como as pessoas costumam fazer uma referência a este serviço. Se você tem um site que contém as mesmas informações que o seu arquivo de RSS, o título do seu canal deverá ser o mesmo que o título do seu site.' );
define( '_AM_IMLINKS_RSSLINKS', 'Link do RSS feed' );
define( '_AM_IMLINKS_RSSLINKSDSC', 'A URL do site que correspondente ao canal.' );
define( '_AM_IMLINKS_RSSDESCRIPTION', 'Descrição do RSS feed' );
define( '_AM_IMLINKS_RSSDESCRIPTIONDSC', 'Expressão ou frase que descreva o seu canal.' );
define( '_AM_IMLINKS_RSSIMAGE', 'Imagem do RSS feed' );
define( '_AM_IMLINKS_RSSIMAGEDSC', 'Informe uma imagem do tipo GIF, JPEG ou PNG que poderá ser exibida com o seu canal.' );
define( '_AM_IMLINKS_RSSWIDTH', 'Largura da imagem do RSS feed' );
define( '_AM_IMLINKS_RSSWIDTHDSC', 'Indica a largura da imagem em pixels.<br />Valor máximo para a largura é de 144pixels.' );
define( '_AM_IMLINKS_RSSHEIGHT', 'Altura da imagem do RSS feed' );
define( '_AM_IMLINKS_RSSHEIGHTDSC', 'Indica a altura da imagem em pixels.<br />O valor máximo de altura será de 400pixels.' );
define( '_AM_IMLINKS_RSSIMGTITLE', 'Título da imagem do RSS feed' );
define( '_AM_IMLINKS_RSSIMGTITLEDSC', 'Descreve um nome na imagem que será utilizado no atributo <span style="color:#ff0000"><b>ALT</b></span> da tag HTML <span style="color:#ff0000"><b>&#60;img&#62;</b></span> quando o canal é fornecido em HTML.' );
define( '_AM_IMLINKS_RSSIMGLINK', 'Link da Imagem do RSS feed' );
define( '_AM_IMLINKS_RSSIMGLINKDSC', 'Este é o URL do site, quando o canal for fornecido, a imagem é um link para o site. (Nota, na prática a imagem <span style="color:#ff0000"><b>&#60;title&#62;</b></span> e <span style="color:#ff0000"><b>&#60;link&#62;</b></span> devem ter o mesmo valor que o do canal <span style="color:#ff0000"><b>&#60;title&#62;</b></span> e <span style="color:#ff0000"><b>&#60;link&#62;</b></span>).' );
define( '_AM_IMLINKS_RSSTTL', 'RSS feed ttl' );
define( '_AM_IMLINKS_RSSTTLDSC', 'O ttl ou tempo de descanso para nova atualização. Este é o número de minutos que irá indicar de quanto em quanto tempo um canal pode ser armazenado antes de ser  atualizado a partir do código atual. Para mais informações, veja no wiki sobre <a href="http://pt.wikipedia.org/wiki/Time_to_Live/" target="_blank">ttl neste link.</a>' );
define( '_AM_IMLINKS_RSSWEBMASTER', 'Administrador do RSS feed' );
define( '_AM_IMLINKS_RSSWEBMASTERDSC', 'Endereço de e-mail da pessoa responsável por questões técnicas relacionadas a este canal.' );
define( '_AM_IMLINKS_RSSEDITOR', 'Editor do canal de RSS feed' );
define( '_AM_IMLINKS_RSSEDITORDSC', 'Endereço de e-mail da pessoa responsável pelo conteúdo ou editorial.' );
define( '_AM_IMLINKS_RSSCATEGORY', 'Categoria do RSS feed' );
define( '_AM_IMLINKS_RSSCATEGORYDSC', 'Especificar uma ou mais categorias para este canal. Segue as mesmas regras que os <span style="color:#ff0000"><b>&#60;item&#62;</b></span>-nível de elementos das categorias.' );
define( '_AM_IMLINKS_RSSGENERATOR', 'Gerador de RSS feed' );
define( '_AM_IMLINKS_RSSGENERATORDSC', 'Texto que indica o programa usado para gerar o canal.' );
define( '_AM_IMLINKS_RSSCOPYRIGHT', 'Direitos autorais do RSS feed' );
define( '_AM_IMLINKS_RSSCOPYRIGHTDSC', 'Direitos Autorais para o conteúdo no canal ou <b>Copyright</b>.' );
define( '_AM_IMLINKS_RSSTOTAL', 'Total de Links no RSS feed' );
define( '_AM_IMLINKS_RSSTOTALDSC', 'Coloque o número total de links para exibição no RSS feed.' );
define( '_AM_IMLINKS_RSSDBUPDATED', 'Banco de dados foi atualizado com sucesso' );
define( '_AM_IMLINKS_RSSOFFLINE', 'Título da mensagem quando RSS feed estiver offline' );
define( '_AM_IMLINKS_RSSOFFLINEDSC', 'Digite o título da mensagem quando o RSS feed estiver desativado.' );
define( '_AM_IMLINKS_RSSOFFMSG', 'Mensagem do RSS feed offline' );
define( '_AM_IMLINKS_RSSOFFMSGDSC', 'Digite aqui uma explicação do porque o seu RSS feed foi desativado.' );
define( '_AM_IMLINKS_RSSOFFTITLE', 'RSS feed foi desactivado.' );
define( '_AM_IMLINKS_RSSOFFMSGDEF', 'O RSS feed foi temporariamente desativado para manutenção.' );
define( '_AM_IMLINKS_RSSCLICKSUBMIT', 'Please click Submit to store all form values in the database!' );
define( '_AM_IMLINKS_COPYRIGHT', 'Copyright' ); //Mantendo sem tradução, se necessário, mudar para Direitos Autorais.

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

// Version 1.1
define( '_AM_IMLINKS_MSG_OFFLINE', 'Link was set Offline successfully.' );
define( '_AM_IMLINKS_MSG_ONLINE', 'Link was set Online successfully.' );
define( '_AM_IMLINKS_ICO_WAITING','Submitted, waiting approval' );
?>