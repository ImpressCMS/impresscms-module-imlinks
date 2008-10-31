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
		
		$date = formatTimestamp( $myrow['published'], $xoopsModuleConfig['dateformat'] );
		$text = icms_substr( $myrow['description'], 0, $xoopsModuleConfig['totalchars'], '...' );
		$text = $immyts -> displayTarea( $text, 1, 1, 1, 1, 1 );

		$myFeed -> feeds[] = array(
			'title' 		=> $myrow['title'],
			'link' 			=> ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?cid=' . intval( $myrow['cid'] ) . '&amp;lid=' . intval( $myrow['lid'] ),
			'description' 	=> $text,
			'pubdate' 		=> $date,
			'guid' 			=> ''
			);
	}
	
$myFeed -> render(); 

?>