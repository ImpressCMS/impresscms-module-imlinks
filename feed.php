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
include_once ICMS_ROOT_PATH . '/class/icmsfeed.php'; 

global $xoopsModuleConfig;

$myFeed = new IcmsFeed();

$myFeed -> webMaster = '';  // Admin contact email as stated in general preferences.

$sql = $xoopsDB -> query( 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) 
							. ' WHERE published > 0 AND published <= ' . time()
							. ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0'
							. ' ORDER BY published DESC ', $xoopsModuleConfig['rssfeedtotal'], 0 );

    while ( $myrow = $xoopsDB -> fetchArray( $sql ) ) {	
		
		$date  = date( 'D, d M Y H:i:s', $myrow['published'] );
		$title = htmlspecialchars( $myrow['title'] );
		$text  = icms_substr( $myrow['description'], 0, $xoopsModuleConfig['totalchars'], '...' );
		$text  = htmlspecialchars( $immyts -> displayTarea( $text, 1, 1, 1, 1, 1 ) );
		$link  = ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?cid=' . intval( $myrow['cid'] ) . '&amp;lid=' . intval( $myrow['lid'] );

		$myFeed -> feeds[] = array(
			'title' 		=> $title,
			'link' 			=> $link,
			'description' 	=> $text,
			'pubdate' 		=> $date,
			'guid' 			=> $link
			);
	}
	
$myFeed -> render(); 

?>