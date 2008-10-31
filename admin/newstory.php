<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: newstory.php
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

include_once ICMS_ROOT_PATH . '/modules/news/class/class.newsstory.php';

$story = new NewsStory();
$story -> setUid( $xoopsUser -> uid() );
$story -> setPublished( time() );
$story -> setExpired( 0 );
$story -> setType( 'admin' );
$story -> setHostname( getenv( 'REMOTE_ADDR' ) );
$story -> setApproved( 1 );
$topicid = intval( $_REQUEST['newstopicid'] );
$story -> setTopicId( $topicid );
$story -> setTitle( $title );
$_linkid = ( isset( $lid ) && $lid > 0 ) ? $lid : $newid;
$_link = $_REQUEST['descriptionb'] . "<br /><div><a href=" . ICMS_URL . "/modules/".$xoopsModule->getVar('dirname')."/singlelink.php?cid=" . $cid . "&amp;lid=" . $_linkid . ">" . $title . "</a></div>";

$description = $immyts -> addslashes( trim( $_link ) );
$story -> setHometext( $description );
$story -> setBodytext( '' );
$nohtml = ( empty( $nohtml ) ) ? 0 : 1;
$nosmiley = ( empty( $nosmiley ) ) ? 0 : 1;
$story -> setNohtml( $nohtml );
$story -> setNosmiley( $nosmiley );
$story -> store();
$notification_handler = &xoops_gethandler( 'notification' );

$tags = array();
$tags['STORY_NAME'] = $story -> title();
$modhandler = &xoops_gethandler( 'module' );
$newsModule = &$modhandler -> getByDirname( 'news' );
$tags['STORY_URL'] = ICMS_URL . '/modules/news/article.php?storyid=' . $story -> storyid();
if ( !empty( $isnew ) ) {
    $notification_handler -> triggerEvent( 'story', $story -> storyid(), 'approve', $tags );
} 
$notification_handler -> triggerEvent( 'global', 0, 'new_story', $tags );
unset( $xoopsModule );

?>