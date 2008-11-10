<?php
/**
* imLinks
*
* Based upon WF-Link 1.06
*
* File: feed.php
*
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

include 'header.php';

global $xoopsModuleConfig, $xoopsModule;

if ( $xoopsModuleConfig['rssfeed'] ) {
	
include_once ICMS_ROOT_PATH . '/class/icmsfeed.php'; 
	
$myFeed = new IcmsFeed();

$myFeed -> webMaster = '';  // Admin contact email as stated in general preferences.
$myFeed -> image = array( 'url' => ICMS_ROOT_PATH . '/modules/' . $mydirname . '/images/imlinks_iconbig.png' );
$myFeed -> title = $xoopsConfig['sitename'] . ' : ' . $xoopsModule -> getVar( 'name' );

$sql = $xoopsDB -> query( 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) 
							. ' WHERE published > 0 AND published <= ' . time()
							. ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0'
							. ' ORDER BY published DESC ', $xoopsModuleConfig['rssfeedtotal'], 0 );

    while ( $myrow = $xoopsDB -> fetchArray( $sql ) ) {
		
		// First get the main category title of the link
		$sql2 = $xoopsDB -> query( 'SELECT title FROM ' . $xoopsDB -> prefix('imlinks_cat') . ' WHERE cid=' . $myrow['cid'] );
        $mycat = $xoopsDB -> fetchArray( $sql2 );
		$category = htmlspecialchars( $mycat['title'] );
		
		// Get date, title, definition (shortened) and the url of the link
		$date  = date( 'D, d M Y H:i:s', $myrow['published'] );
		$title = htmlspecialchars( $myrow['title'] );
		$text  = icms_substr( $myrow['description'], 0, $xoopsModuleConfig['totalchars'], '...' );
		$text  = $immyts -> displayTarea( $text, 1, 1, 1, 1, 1 );
		$link  = ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?cid=' . intval( $myrow['cid'] ) . '&amp;lid=' . intval( $myrow['lid'] );
		$author= $myrow['publisher'];
		
		// Add an automatic screenshot to the definition
		if ( $xoopsModuleConfig['autothumbsrc'] == 1 ) {
			$autothumbsrc = htmlspecialchars( '<img src="http://mozshot.nemui.org/shot/128x128?' . $myrow['url'] . '" align="right" alt="" />' . $text );
		} else {
			$autothumbsrc = htmlspecialchars( '<img src="http://open.thumbshots.org/image.pxf?url=' . $myrow['url'] . '" width="120" height="90" align="right" alt="" />' . $text );
}
		
$myFeed -> feeds[] = array(
			'title' 		=> $title,
			'link' 			=> $link,
			'description' 	=> $autothumbsrc,
			'pubdate' 		=> $date,
			'category'		=> $category,
			'author'		=> $author,
			'guid' 			=> $link
			);
	}
	
$myFeed -> render(); 

} else { echo 'RSS feed for ' . $xoopsModule -> getVar( 'name' ) . ' is turned off.'; }

?>