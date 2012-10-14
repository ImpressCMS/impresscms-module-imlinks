<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: visit.php
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

include 'header.php';

$agreed	= intval( iml_cleanRequestVars( $_REQUEST, 'agree', 0 ) );
$lid	= intval( iml_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

$sql3 = 'SELECT cid FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid;
list( $cid ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql3 ) );

if ( $cid == '' ) {
	redirect_header( 'index.php', 1, '' );
	exit();
} 

$sql2 = 'SELECT count(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN '
 . icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' b'
 . ' ON b.lid = a.lid'
 . ' WHERE a.published > 0 AND a.published <= ' . time()
 . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND a.offline = 0'
 . ' AND (b.cid=a.cid OR (a.cid=' . $cid . ' OR b.cid=' . $cid . '))';
list( $count ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql2 ) );

if ( false == iml_checkgroups( $cid ) && $count == 0 ) {
	redirect_header( 'index.php', 1, _MD_IMLINKS_MUSTREGFIRST );
	exit();
}

if ( icms::$module -> config['showlinkdisclaimer'] && $agreed == 0 ) {
	if ( icms::$module -> config['quickview'] ) {
		echo "
		<meta http-equiv='content-type' content='text/html; charset='"._CHARSET."' />\n
		<br /><div style='text-align: center;'>" . iml_imageheader() . "</div>\n
		<div style='font-family: Verdana, Arial, Helvetica, sans-serif;'><h4>" . _MD_IMLINKS_DISCLAIMERAGREEMENT . "</h4>\n
		<div style='font-size: 12px;'>" . icms::$module -> config['linkdisclaimer'] . "</div><br />\n
		<form action='visit.php' method='post'>\n
		<div style='text-align: center; font-weight: bold;'>" . _MD_IMLINKS_DOYOUAGREE . "</b><br /><br />\n
		<input type='button' onclick='location=\"visit.php?agree=1&amp;lid=" . $lid . "&amp;cid=" . $cid . "\"' class='formButton' value='" . _MD_IMLINKS_AGREE . "' alt='" . _MD_IMLINKS_AGREE . "' />\n
		&nbsp;\n
		<input type='button' onclick='location=\"index.php\"' class='formButton' value='" . _CANCEL . "' alt='" . _CANCEL . "' />\n
		<input type='hidden' name='lid' value='1' />\n
		<input type='hidden' name='cid' value='1' />\n
		</div></div></form>\n";
	} else {
		$xoopsOption['template_main'] = 'imlinks_disclaimer.html';
		include ICMS_ROOT_PATH . '/header.php';

		$xoopsTpl -> assign( 'image_header', iml_imageheader() );
		$xoopsTpl -> assign( 'linkdisclaimer', icms::$module -> config['linkdisclaimer'] );
		$xoopsTpl -> assign( 'cancel_location', '/index.php' );
		$xoopsTpl -> assign( 'agree_location', 'visit.php?agree=1&amp;lid=' . $lid );
		$xoopsTpl -> assign( 'link_disclaimer', true );
		$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );

		include ICMS_ROOT_PATH . '/footer.php';
		exit();
	}
} else {
	$url = '';
	$sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' SET hits=hits+1 WHERE lid=' . $lid;
	$result = icms::$xoopsDB -> queryF( $sql );

	$sql = 'SELECT url FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid;
	if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
		echo '<br /><div style="text-align: center;">' . iml_imageheader() . '</div>';
		reportBroken( $lid );
	} else {
		list( $url ) = icms::$xoopsDB -> fetchRow( $result );
		$url = icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( preg_replace( '/javascript:/si' , 'java script:', $url ), ENT_QUOTES ) );
	}

	if ( !empty( $url ) ) {

		switch( icms::$module -> config['lightwindow'] ) {
			case 0: // Open link in new browser tab/window
				header( "Cache-Control: no-store, no-cache, must-revalidate" );
				header( "Cache-Control: post-check=0, pre-check=0", false );
				// HTTP/1.0
				header( "Pragma: no-cache" );
				// Date in the past
				header( "Expires: Mon, 26 Jul 1997 05:00:00 GMT" );
				// always modified
				header( "Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . " GMT" );
				echo "<html><head><meta http-equiv=\"Refresh\" content=\"0; URL=" . $url . "\"></meta></head><body></body></html>";
				break;
			case 1: // Open link in LightWindow
			case 2: // Open link in GreyBox
				echo '<iframe src="' . $url . '" width="100%" height="100%"></iframe>';
				break;
		}
	}
}
?>