<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: linkloadinfo.php
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

$module_link = '';

$imlink['id']  = intval( $link_arr['lid'] );
$imlink['cid'] = intval( $link_arr['cid'] );
$imlink['published'] = intval( $link_arr['published'] ) ? true : false;

$path = $mytree -> getPathFromId( $link_arr['cid'], 'title' );
$path = substr( $path, 1 );
$path = basename( $path );
$path = str_replace( '/', '', $path );
$imlink['category'] = $path;

$rating = round( number_format( $link_arr['rating'], 0 ) / 2 );
$imlink['rateimg'] = 'rate' . $rating . '.gif';
unset( $rating );

$imlink['hits'] = sprintf( _MD_IMLINKS_LINKHITS, intval( $link_arr['hits'] ) );
$xoopsTpl -> assign( 'lang_dltimes', $imlink['hits'] );

$imlink['title'] = $link_arr['title']; // Title of link
$imlink['url'] = $link_arr['url']; // url of link
if ( icms::$module -> config['showpagerank'] ) {
	$imlink['pagerank'] = imlinks_pagerank( $imlink['url'] ); // Google Pagerank
}

if ( $moderate == 0 ) {
	$time = ( $link_arr['updated'] != 0 ) ? $link_arr['updated'] : $link_arr['published'];
	$is_updated = ( $link_arr['updated'] != 0 ) ? _MD_IMLINKS_UPDATEDON : _MD_IMLINKS_PUBLISHDATE;
	$xoopsTpl -> assign( 'lang_subdate' ,$is_updated );
} else {
	$time = $link_arr['date'];
	$is_updated = _MD_IMLINKS_SUBMITDATE;
	$xoopsTpl -> assign( 'lang_subdate' ,$is_updated );
}

$imlink['updated'] = formatTimestamp( $time, icms::$module -> config['dateformat'] );
$imlink['description'] = icms_core_DataFilter::icms_substr( strip_tags( $link_arr['description'] ), 0, icms::$module -> config['totalchars'], '&#8230;' );
$imlink['submitter'] = icms_member_user_Handler::getUserLink( $link_arr['submitter'] );
$imlink['publisher'] = ( isset( $link_arr['publisher'] ) && !empty( $link_arr['publisher'] ) ) ? $immyts -> htmlSpecialCharsStrip( $link_arr['publisher'] ) : _MD_IMLINKS_NOTSPECIFIED;

if ( $link_arr['country'] ) {
	$imlink['country'] = _MD_IMLINKS_COUNTRYB . '&nbsp;<img src="' . ICMS_URL . '/' . icms::$module -> config['flagimage']. '/' . $link_arr['country'] . '.gif" alt="" title="' . iml_countryname( $link_arr['country'] ) . '" style="vertical-align: middle;" />';
}

$mail_subject = rawurlencode( sprintf( _MD_IMLINKS_INTFILEFOUND, $icmsConfig['sitename'] ) );
$mail_body = rawurlencode( sprintf( _MD_IMLINKS_INTFILEFOUND, $icmsConfig['sitename'] ) . ':  ' . ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?cid=' . $link_arr['cid'] . '&amp;lid=' . $link_arr['lid'] );
$imlink['comments'] = $link_arr['comments'];
$whoisurl = str_replace( 'http://', '', $imlink['url'] );

$imlink['adminlink'] = '';
if ( icms_userIsAdmin() == true && $moderate == 0 ) {
	$imlink['adminlink'] = '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/index.php"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/computer.png" alt="' . _MD_IMLINKS_ADMINSECTION . '" title="' . _MD_IMLINKS_ADMINSECTION . '" style="vertical-align: bottom;" /></a>&nbsp;';
	$imlink['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/index.php?op=edit&amp;lid=' . $link_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world_edit.png" alt="' . _EDIT . '" title="' . _EDIT . '" style="vertical-align: bottom;" /></a>&nbsp;';
	$imlink['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/index.php?op=delete&amp;lid=' . $link_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world_delete.png" alt="' . _DELETE . '" title="' . _DELETE . '" style="vertical-align: bottom;" /></a>&nbsp;';
	$imlink['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/index.php?op=clone&amp;lid=' . $link_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world_clone.png" alt="' . _CLONE . '" title="' . _CLONE . '" style="vertical-align: bottom;" /></a>&nbsp;';
	$imlink['adminlink'] .= '<a href="http://whois.domaintools.com/' . $whoisurl . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/domaintools.png" alt="WHOIS" title="WHOIS" style="vertical-align: bottom;" /></a>';
} else {
	$imlink['adminlink'] = '[ <a href="' . ICMS_URL . '/modules/' . $mydirname . '/submit.php?op=edit&amp;lid=' . $link_arr['lid'] . '&approve=1">' . _MD_IMLINKS_APPROVE . '</a> | ';
	$imlink['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/submit.php?op=delete&amp;lid=' . $link_arr['lid'] . '">' . _DELETE . '</a> ]';
}

switch ( icms::$module -> config['selectforum'] ) {
	case '0':
		$forum = '';
		$forum_path_prefix = '';
	case '1':
		$forum = 'newbb';
		$forum_path_prefix = '/modules/newbb/viewforum.php?forum=';
		break;
	case '2':
		$forum = 'ipboard';
		$forum_path_prefix = '/modules/ipboard/index.php?showforum=';
		break;
	case '3':
		$forum = 'pbboard';
		$forum_path_prefix = '/modules/pbboard/viewforum.php?f=';
		break;
	case '4':
		$forum = 'newbbex';
		$forum_path_prefix = '/modules/newbbex/viewforum.php?forum=';
		break;
}
$module_handler = icms::handler( 'icms_module' );
$icmsforumModule = $module_handler -> getByDirname( $forum );
if ( is_object( $icmsforumModule ) && $icmsforumModule -> getVar( 'isactive' ) ) {
	$imlink['forumid'] = ( $link_arr['forumid'] > 0 ) ? $link_arr['forumid'] : 0;
	$imlink['forum_path'] = $forum_path_prefix . "{$imlink['forumid']}";
}

include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/_drawrating.php';
$imlink['ratingbar'] = rating_bar( $link_arr['lid'], '5', $link_arr['cid'] );

$nice_link = iml_nicelink( $link_arr['title'], $link_arr['nice_url'] );
if ( icms::$module -> config['niceurl'] ) {
	$url = ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?lid=' . intval( $link_arr['lid'] ) . '&amp;page=' . $nice_link;
	$imlink['viewdetails']   = '<a class="button" href="' . ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?lid=' . $link_arr['lid'] . '&amp;page=' . $nice_link . '">' . _MD_IMLINKS_VIEWDETAILS . '</a>';
	$imlink['visit'] = ICMS_URL . '/modules/' . $mydirname . '/visit.php?lid=' . $link_arr['lid'] . '&amp;page=' . $nice_link;
} else {
	$url = ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?lid=' . intval( $link_arr['lid'] );
	$imlink['viewdetails'] = '<a class="button" href="' . ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?lid=' . $link_arr['lid'] . '">' . _MD_IMLINKS_VIEWDETAILS . '</a>';
	$imlink['visit'] = ICMS_URL . '/modules/' . $mydirname . '/visit.php?lid=' . $link_arr['lid'];
}

$imlink['icons']			= iml_displayicons( $link_arr['published'], $link_arr['status'], $link_arr['hits'] );
$imlink['module_dir']		= $mydirname;
$imlink['showrating']		= icms::$module -> config['showrating'];
$imlink['showpagerank']		= icms::$module -> config['showpagerank'];
$imlink['infoblock2']		= ( $imlink['showrating'] || $imlink['showpagerank'] );
$imlink['quickview']		= icms::$module -> config['quickview'];
$imlink['comment_rules']	= icms::$module -> config['com_rule'];
$imlink['autoscrshot']		= icms::$module -> config['useautothumb'];

$imlink['screenshot'] = '';
if ( icms::$module -> config['useautothumb'] == 1 && icms::$module -> config['autothumbsrc'] == 1 ) {
	$imlink['screenshot'] = iml_mozshot( $link_arr['url'] );
} elseif ( icms::$module -> config['useautothumb'] == 1 && icms::$module -> config['autothumbsrc'] == 0 ) {
	$imlink['screenshot'] = iml_thumbshot( $link_arr['url'] );
} else {
	if ( isset( $link_arr['screenshot'] ) ) {
		$imlink['screenshot_full'] = $immyts -> htmlSpecialCharsStrip( $link_arr['screenshot'] );
		if ( !empty( $link_arr['screenshot'] ) && file_exists( ICMS_ROOT_PATH . '/' . icms::$module -> config['screenshots'] . '/' . trim( $link_arr['screenshot'] ) ) ) {
			if ( isset( icms::$module -> config['usethumbs'] ) && icms::$module -> config['usethumbs'] == 1 ) {
				$_thumb_image = new imThumbsNails( $imlink['screenshot_full'], icms::$module -> config['screenshots'], 'thumbs' );
				if ( $_thumb_image ) {
						$_thumb_image -> setUseThumbs( 1 );
						$_thumb_image -> setImageType( 'gd2' );
						$_image = $_thumb_image -> do_thumb( icms::$module -> config['shotwidth'],
															 icms::$module -> config['shotheight'],
															 icms::$module -> config['imagequality'],
															 icms::$module -> config['updatethumbs'],
															 icms::$module -> config['keepaspect'] );
				}
				$imlink['screenshot'] = '<a class="lytebox" title="' . $link_arr['title'] . '" href="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] . '/' . trim( $link_arr['screenshot'] ) . '"><img src="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] . '/' . $_image . '" alt="" title="' . _MD_IMLINKS_SCRSHOTENLARGE . '" /></a>';
			} else {
				$imlink['screenshot'] = '<img src="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] . '/' . trim( $link_arr['screenshot'] ) . '" alt="" />';
			}
		}
	}
}

switch( icms::$module -> config['lightwindow'] ) {

	// Open link in new browser tab/window
	case 0:
		$imlink['visitspinner'] = '<a href="' . $imlink['visit'] . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/spinner.gif" alt="' . _MD_IMLINKS_LINKNOW . '" title="' . _MD_IMLINKS_LINKNOW . '" style="vertical-align: middle;" /></a>';
		$imlink['visitlink']    = '<span  id="button"><a class="button" href="' . $imlink['visit'] . '" target="_blank">' . _MD_IMLINKS_LINKNOW . '</a></span>';
		$imlink['visittitle']   = '<a href="' . $imlink['visit'] . '" target="_blank">' . $link_arr['title'] . '</a>';
		break;

	// Open link in LightWindow
	case 1:
		$lightwindow = 'params="lightwindow_width=800,lightwindow_height=600,lightwindow_loading_animation=true" title="' . $link_arr['title'] . '" caption="' . $imlink['hits'] . '"';
		$imlink['visitspinner'] = '<a class="lightwindow" href="' . $imlink['visit'] . '" ' . $lightwindow . '><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/spinner.gif" alt="' . _MD_IMLINKS_LINKNOW . '" title="' . _MD_IMLINKS_LINKNOW . '" style="vertical-align: middle;" /></a>';
		$imlink['visitlink']    = '<span  id="button"><a class="lightwindow button" href="' . $imlink['visit'] . '"  ' . $lightwindow . '>' . _MD_IMLINKS_LINKNOW . '</a></span>';
		$imlink['visittitle']   = '<a class="lightwindow" href="' . $imlink['visit'] . '">' . $link_arr['title'] . '</a>';
		break;

	// Open link in GreyBox
	case 2:
		$imlink['visitspinner'] = '<a href="' . $imlink['visit'] . '" rel="gb_page_center[800, 600]"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/spinner.gif" alt="' . _MD_IMLINKS_LINKNOW . '" style="vertical-align: middle;" /></a>';
		$imlink['visitlink']    = '<span  id="button"><a class="button" href="' . $imlink['visit'] . '" title="' . $link_arr['title'] . '" rel="gb_page_center[800, 600]">' . _MD_IMLINKS_LINKNOW . '</a></span>';
		$imlink['visittitle']   = '<a href="' . $imlink['visit'] . '" title="' . $link_arr['title'] . '" rel="gb_page_center[800, 600]">' . $link_arr['title'] . '</a>';
		break;
}
?>