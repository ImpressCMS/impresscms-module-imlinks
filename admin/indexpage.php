<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: indexpage.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since		1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				WF-Links 
* @since		1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				imLinks
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

include 'admin_header.php';

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );

switch ( strtolower( $op ) ) {
	case 'save':
		$indexheading = icms_core_DataFilter::addSlashes( trim($_REQUEST['indexheading']) );
		$indexheader = icms_core_DataFilter::addSlashes( trim($_REQUEST['indexheader']) );
		$indexfooter = icms_core_DataFilter::addSlashes( trim($_REQUEST['indexfooter']) );
		$indeximage = icms_core_DataFilter::addSlashes( $_REQUEST['indeximage'] );
		$indexheaderalign = icms_core_DataFilter::addSlashes( $_REQUEST['indexheaderalign'] );
		$indexfooteralign = icms_core_DataFilter::addSlashes( $_REQUEST['indexfooteralign'] );
		$lastlinkstotal = icms_core_DataFilter::addSlashes( $_REQUEST['lastlinkstotal'] );
		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'imlinks_indexpage' ) . " SET indexheading='$indexheading', indexheader='$indexheader', indexfooter='$indexfooter', indeximage='$indeximage', indexheaderalign='$indexheaderalign ', indexfooteralign='$indexfooteralign', lastlinkstotal='$lastlinkstotal'";
		if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
			redirect_header( 'links.php', 1, _AM_IMLINKS_IPAGE_UPDATED );
			break;

	default:
		$sql = 'SELECT indeximage, indexheading, indexheader, indexfooter, indexheaderalign, indexfooteralign, lastlinkstotal FROM ' . icms::$xoopsDB -> prefix( 'imlinks_indexpage' );
		if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		list( $indeximage, $indexheading, $indexheader, $indexfooter, $indexheaderalign, $indexfooteralign, $lastlinkstotal ) = icms::$xoopsDB -> fetchrow( $result );

		icms_cp_header();
		iml_adminmenu( 4, _AM_IMLINKS_INDEXPAGE );

		echo '
			<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
			<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_IPAGE_INFORMATION . '</div>
			<div style="padding: 8px; font-weight: normal;">
				<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/indexpage.png" alt="" style="float: left; padding-right: 10px;" />
			' . _AM_IMLINKS_MINDEX_PAGEINFOTXT . '</div>
			</div><br />';

		$icmsAdminTpl -> assign( 'icms_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_URL . '/libraries/lytebox/lytebox.js"></script>
			  <link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_URL . '/libraries/lytebox/lytebox.css" />' );

		$sform = new icms_form_Theme( _AM_IMLINKS_IPAGE_MODIFY, 'op', '' );

		$sform -> addElement( new icms_form_elements_Text( _AM_IMLINKS_IPAGE_CTITLE, 'indexheading', 60, 60, $indexheading ), false );

		$graph_array = &imlLists :: getListTypeAsArray( ICMS_ROOT_PATH . "/" . icms::$module -> config['mainimagedir'], $type = "images" );
		$indeximage_select = new icms_form_elements_Select( '', 'indeximage', $indeximage );
		$indeximage_select -> addOptionArray( $graph_array );
		$indeximage_select -> setExtra( "onchange='showImgSelected(\"image\", \"indeximage\", \"" . icms::$module -> config['mainimagedir'] . "\", \"\", \"" . ICMS_URL . "\")'" );
		$indeximage_tray = new icms_form_elements_Tray( _AM_IMLINKS_IPAGE_CIMAGE, '&nbsp;' );
		$indeximage_tray -> addElement( $indeximage_select );
		if ( !empty( $indeximage ) ) {
			$indeximage_tray -> addElement( new icms_form_elements_Label( '', "<br /><br /><img src='" . ICMS_URL . "/" . icms::$module -> config['mainimagedir'] . "/" . $indeximage . "' name='image' id='image' alt='' />" ) );
		} else {
			$indeximage_tray -> addElement( new icms_form_elements_Label( '', "<br /><br /><img src='" . ICMS_URL . "/uploads/blank.gif' name='image' id='image' alt='' />" ) );
		}
		$sform -> addElement( $indeximage_tray );

		$editor = iml_editorform( _AM_IMLINKS_IPAGE_CHEADING, 'indexheader', $indexheader, '100%', '300px' );
		$sform -> addElement( $editor, false );

		$headeralign_select = new icms_form_elements_Select( _AM_IMLINKS_IPAGE_CHEADINGA, 'indexheaderalign', $indexheaderalign );
		$headeralign_select -> addOptionArray( array( 'left' => _AM_IMLINKS_IPAGE_CLEFT, 'right' => _AM_IMLINKS_IPAGE_CRIGHT, 'center' => _AM_IMLINKS_IPAGE_CCENTER ) );
		$sform -> addElement( $headeralign_select );

		$sform -> addElement( new icms_form_elements_Textarea( _AM_IMLINKS_IPAGE_CFOOTER, 'indexfooter', $indexfooter, 4, 60 ) );

		$footeralign_select = new icms_form_elements_Select( _AM_IMLINKS_IPAGE_CFOOTERA, 'indexfooteralign', $indexfooteralign );
		$footeralign_select -> addOptionArray( array( 'left' => _AM_IMLINKS_IPAGE_CLEFT, 'right' => _AM_IMLINKS_IPAGE_CRIGHT, 'center' => _AM_IMLINKS_IPAGE_CCENTER ) );
		$sform -> addElement( $footeralign_select );

		$lastlinkstotalform = new icms_form_elements_Text( _AM_IMLINKS_IPAGE_LATESTTOTAL . imlinks_tooltip( _AM_IMLINKS_IPAGE_LATESTTOTAL_DSC, 'help' ), 'lastlinkstotal', 2, 2, $lastlinkstotal );
		$sform -> addElement( $lastlinkstotalform, false );

		$button_tray = new icms_form_elements_Tray( '', '' );
		$hidden = new icms_form_elements_Hidden( 'op', 'save' );
		$button_tray -> addElement( $hidden );
		$button_tray -> addElement( new icms_form_elements_Button( '', 'post', _AM_IMLINKS_BSAVE, 'submit' ) );
		$sform -> addElement( $button_tray );
		$sform -> display();
		break;
}
icms_cp_footer();
?>