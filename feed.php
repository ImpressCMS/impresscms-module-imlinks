<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Link 1.06
*
* File: feed.php
*
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

include 'header.php';
include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/class/imlinksfeed.php'; 

$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_configs' );
$config_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

if ( $config_arr['rssactive'] == 1 ) {

$myFeed = new imLinksFeed();

$myFeed -> webMaster 	 = $config_arr['rsswebmaster'];
$myFeed -> channelEditor = $config_arr['rsseditor'];
$myFeed -> image 		 = array( 'url' => $config_arr['rssimgurl'] );
$myFeed -> width 		 = $config_arr['rsswidth'];
$myFeed -> height 		 = $config_arr['rssheight'];
$myFeed -> title 		 = $config_arr['rsstitle'];
$myFeed -> generator 	 = $config_arr['rssgenerator'];
$myFeed -> category 	 = $config_arr['rsscategory'];
$myFeed -> ttl 			 = $config_arr['rssttl'];
$myFeed -> copyright 	 = $config_arr['rsscopyright'];

$sql2 = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) 
							. ' WHERE published > 0 AND published <= ' . time()
							. ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0'
							. ' ORDER BY published DESC ', $config_arr['rsstotal'], 0 );

	while ( $myrow = icms::$xoopsDB -> fetchArray( $sql2 ) ) {

		// First get the main category title of the link
		$sql3 = icms::$xoopsDB -> query( 'SELECT title FROM ' . icms::$xoopsDB -> prefix('imlinks_cat') . ' WHERE cid=' . $myrow['cid'] );
		$mycat = icms::$xoopsDB -> fetchArray( $sql3 );
		$category = htmlspecialchars( $mycat['title'] );

		// Get date, title, description (shortened) and the url of the link
		$date  = formatTimestamp( $myrow['published'], 'r' );
		$title = htmlspecialchars( $myrow['title'] );
		$text  = icms_core_DataFilter::icms_substr( $myrow['description'], 0, icms::$module -> config['totalchars'], '...' );

		$nice_link = iml_nicelink( $myrow['title'], $myrow['nice_url'] );

		if ( icms::$module -> config['niceurl'] ) {
			$link = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . $myrow['lid'] . '&amp;page=' . $nice_link;
		} else {
			$link = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . $myrow['lid'];
		}

		// Add an automatic screenshot to the description
		if ( icms::$module -> config['autothumbsrc'] == 1 ) {
			$autothumbsrc = htmlspecialchars( '<img src="http://mozshot.nemui.org/shot/128x128?' . $myrow['url'] . '" style="float: right;" alt="" />' . $text );
		} else {
			$autothumbsrc = htmlspecialchars( '<img src="http://open.thumbshots.org/image.pxf?url=' . $myrow['url'] . '" style="float: right; width: 120px; height: 90px;" alt="" />' . $text );
}

		$myFeed -> feeds[] = array(	'title' 		=> $title,
									'link' 			=> $link,
									'description' 	=> $autothumbsrc,
									'pubdate' 		=> $date,
									'category'		=> $category,
									'guid' 			=> $link );
	}

	$myFeed -> render();

} else {
	$myFeed = new imLinksFeed();
	$myFeed -> feeds[] = array( 'title'			=> $config_arr['rssofftitle'],
								'link'			=> ICMS_URL,
								'description'	=> $config_arr['rssoffdsc'] );
	$myFeed -> render();
}
?>