<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: visit.php
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

include 'header.php';

global $xoopsModuleConfig;

$agreed = iml_cleanRequestVars( $_REQUEST, 'agree', 0 );
$cid = iml_cleanRequestVars( $_REQUEST, 'cid', 0 );
$lid = iml_cleanRequestVars( $_REQUEST, 'lid', 0 );
$cid = intval($cid);
$lid = intval($lid);
$agreed = intval($agreed);

$sql2 = 'SELECT count(*) FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN'
 . $xoopsDB -> prefix( 'imlinks_altcat' ) . " b "
 . ' ON b.lid = a.lid'
 . ' WHERE a.published > 0 AND a.published <= ' . time()
 . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND a.offline = 0'
 . ' AND (b.cid=a.cid OR (a.cid=' . intval($cid) . ' OR b.cid=' . intval($cid) . '))';
list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql2 ) );

if ( false == iml_checkgroups( $cid ) && $count == 0 ) {
    redirect_header( 'index.php', 1, _MD_IMLINKS_MUSTREGFIRST );
    exit();
} 

if ( $xoopsModuleConfig['showlinkdisclaimer'] && $agreed == 0 ) {
	if ( $xoopsModuleConfig['quickview'] ) {
		echo "
		<meta http-equiv='content-type' content='text/html; charset='"._CHARSET."' />\n
		<br /><div style='text-align: center;'>" . iml_imageheader() . "</div>\n
		<div style='font-family: Verdana, Arial, Helvetica, sans-serif;'><h4>" . _MD_IMLINKS_DISCLAIMERAGREEMENT . "</h4>\n
		<div style='font-size: 12px;'>" . $immyts -> displayTarea( $xoopsModuleConfig['linkdisclaimer'], 1, 1, 1, 1, 1 ) . "</div><br />\n
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
		$xoopsTpl -> assign( 'linkdisclaimer', $immyts -> displayTarea( $xoopsModuleConfig['linkdisclaimer'], 1, 1, 1, 1, 1 ) );
		$xoopsTpl -> assign( 'cancel_location', ICMS_URL . '/modules/' . $mydirname . '/index.php' );
		$xoopsTpl -> assign( 'agree_location', ICMS_URL . '/modules/' . $mydirname . '/visit.php?agree=1&amp;lid=' . intval($lid ) . '&amp;cid=' . intval( $cid ) );
		$xoopsTpl -> assign( 'link_disclaimer', true );
		$xoopsTpl -> assign( 'module_dir', $mydirname );

		include ICMS_ROOT_PATH . '/footer.php';
		exit();
	}
} else {
    $url = '';
    $sql = 'UPDATE ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' SET hits=hits+1 WHERE lid=' . intval( $lid );
    $result = $xoopsDB -> queryF( $sql );

    $sql = 'SELECT url FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . intval( $lid );
    if ( !$result = $xoopsDB -> queryF( $sql ) ) {
        echo '<br /><div style="text-align: center;">' . iml_imageheader() . '</div>';
        reportBroken( $lid );
    } else {
        list( $url ) = $xoopsDB -> fetchRow( $result );
        $url = htmlSpecialChars( preg_replace( '/javascript:/si' , 'java script:', $url ), ENT_QUOTES );
    } 

    if ( !empty( $url ) ) {
        header( "Cache-Control: no-store, no-cache, must-revalidate" );
        header( "Cache-Control: post-check=0, pre-check=0", false ); 
        // HTTP/1.0
        header( "Pragma: no-cache" ); 
        // Date in the past
        header( "Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
        // always modified
        header( "Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . " GMT" );
        echo "<html><head><meta http-equiv=\"Refresh\" content=\"0; URL=" . $url . "\"></meta></head><body></body></html>";
    } 
} 
?>