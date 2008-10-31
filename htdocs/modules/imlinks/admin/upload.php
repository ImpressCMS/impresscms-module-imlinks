<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: upload.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				WF-Links 
* @since			1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

include 'admin_header.php';

global $xoopsModuleConfig;

$op = ( isset( $_REQUEST['op'] ) && !empty( $_REQUEST['op'] ) ) ? $_REQUEST['op'] : '';
$rootpath = ( isset( $_GET['rootpath'] ) ) ? intval( $_GET['rootpath'] ) : 0;

switch ( strtolower( $op ) ) {
    case 'upload':
        if ( $_FILES['uploadfile']['name'] != '' ) {
            if ( file_exists( ICMS_ROOT_PATH . '/' . $_POST['uploadpath'] . '/' . $_FILES['uploadfile']['name'] ) ) {
                redirect_header( 'upload.php', 2, _AM_IMLINKS_LINK_IMAGEEXIST );
            } 
            $allowed_mimetypes = array( 'image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png' );
            iml_uploading( $_FILES, $_POST['uploadpath'], $allowed_mimetypes, 'upload.php', 1, 0 );
            redirect_header( 'upload.php', 2 , _AM_IMLINKS_LINK_IMAGEUPLOAD );
            exit();
        } else {
            redirect_header( 'upload.php', 2 , _AM_IMLINKS_LINK_NOIMAGEEXIST );
            exit();
        } 
        break;

    case 'delfile':

        if ( isset( $_POST['confirm'] ) && $_POST['confirm'] == 1 ) {
            $filetodelete = ICMS_ROOT_PATH . '/' . $_POST['uploadpath'] . '/' . $_POST['linkfile'];
            if ( file_exists( $filetodelete ) ) {
                chmod( $filetodelete, 0666 );
                if ( @unlink( $filetodelete ) ) {
                    redirect_header( 'upload.php', 1, _AM_IMLINKS_LINK_FILEDELETED );
                } else {
                    redirect_header( 'upload.php', 1, _AM_IMLINKS_LINK_FILEERRORDELETE );
                } 
            } 
            exit();
        } else {
            if ( empty( $_POST['linkfile'] ) ) {
                redirect_header( 'upload.php', 1, _AM_IMLINKS_LINK_NOFILEERROR );
                exit();
            } 
            xoops_cp_header();
            xoops_confirm( array( 'op' => 'delfile', 'uploadpath' => $_POST['uploadpath'], 'linkfile' => $_POST['linkfile'], 'confirm' => 1 ), 'upload.php', _AM_IMLINKS_LINK_DELETEFILE . '<br /><br />' . $_POST['linkfile'], _AM_IMLINKS_BDELETE );
        } 
        break;

    case 'default':
    default:
        $displayimage = '';
        xoops_cp_header();

        $dirarray = array( 1 => $xoopsModuleConfig['catimage'], 2 => $xoopsModuleConfig['screenshots'], 3 => $xoopsModuleConfig['mainimagedir'] );
        $namearray = array( 1 => _AM_IMLINKS_LINK_CATIMAGE , 2 => _AM_IMLINKS_LINK_SCREENSHOTS, 3 => _AM_IMLINKS_LINK_MAINIMAGEDIR );
        $listarray = array( 1 => _AM_IMLINKS_LINK_FCATIMAGE , 2 => _AM_IMLINKS_LINK_FSCREENSHOTS, 3 => _AM_IMLINKS_LINK_FMAINIMAGEDIR );

        iml_adminmenu( 5, _AM_IMLINKS_MUPLOADS );
        iml_serverstats();
        if ( $rootpath > 0 ) {
            echo "<div><b>" . _AM_IMLINKS_LINK_FUPLOADPATH . "</b> " . ICMS_ROOT_PATH . "/" . $dirarray[$rootpath] . "</div>\n";
            echo "<div><b>" . _AM_IMLINKS_LINK_FUPLOADURL . "</b> " . ICMS_URL . "/" . $dirarray[$rootpath] . "</div><br />\n";
        } 
        $pathlist = ( isset( $listarray[$rootpath] ) ) ? $namearray[$rootpath] : '';
        $namelist = ( isset( $listarray[$rootpath] ) ) ? $namearray[$rootpath] : '';

        $iform = new XoopsThemeForm( _AM_IMLINKS_LINK_FUPLOADIMAGETO . $pathlist, 'op', xoops_getenv( 'PHP_SELF' ) );
        $iform -> setExtra( 'enctype="multipart/form-data"' );
        ob_start();
        $iform -> addElement( new XoopsFormHidden( 'dir', $rootpath ) );
			iml_getDirSelectOption( $namelist, $dirarray, $namearray );
			$iform -> addElement( new XoopsFormLabel( _AM_IMLINKS_LINK_FOLDERSELECTION, ob_get_contents() ) );
        ob_end_clean();

        if ( $rootpath > 0 ) {
            $graph_array = &imlLists :: getListTypeAsArray( ICMS_ROOT_PATH . '/' . $dirarray[$rootpath], $type = 'images' );
            $indeximage_select = new XoopsFormSelect( '', 'linkfile', '' );
            $indeximage_select -> addOptionArray( $graph_array );
            $indeximage_select -> setExtra( "onchange='showImgSelected(\"image\", \"linkfile\", \"" . $dirarray[$rootpath] . "\", \"\", \"" . ICMS_URL . "\")'" );
            $indeximage_tray = new XoopsFormElementTray( _AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE, '&nbsp;' );
            $indeximage_tray -> addElement( $indeximage_select );
            if ( !empty( $imgurl ) ) {
                $indeximage_tray -> addElement( new XoopsFormLabel( '', "<br /><br /><img src='" . ICMS_URL . "/" . $dirarray[$rootpath] . "/" . $linkfile . "' name='image' id='image' alt='' />" ) );
            } else {
                $indeximage_tray -> addElement( new XoopsFormLabel( '', "<br /><br /><img src='" . ICMS_URL . "/uploads/blank.gif' name='image' id='image' alt='' />" ) );
            } 
            $iform -> addElement( $indeximage_tray );
            $iform -> addElement( new XoopsFormFile( _AM_IMLINKS_LINK_FUPLOADIMAGE, 'uploadfile', 0 ) );
            $iform -> addElement( new XoopsFormHidden( 'uploadpath', $dirarray[$rootpath] ) );
            $iform -> addElement( new XoopsFormHidden( 'rootnumber', $rootpath ) );

            $dup_tray = new XoopsFormElementTray( '', '' );
            $dup_tray -> addElement( new XoopsFormHidden( 'op', 'upload' ) );
            $butt_dup = new XoopsFormButton( '', '', _AM_IMLINKS_BUPLOAD, 'submit' );
            $butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'upload\'"' );
            $dup_tray -> addElement( $butt_dup );

            $butt_dupct = new XoopsFormButton( '', '', _AM_IMLINKS_BDELETEIMAGE, 'submit' );
            $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'delfile\'"' );
            $dup_tray -> addElement( $butt_dupct );
            $iform -> addElement( $dup_tray );
        } 
        $iform -> display();
} 
xoops_cp_footer();

?>