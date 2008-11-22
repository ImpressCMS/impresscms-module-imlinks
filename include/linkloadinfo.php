<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: linkloadinfo.php
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

$module_link = '';

$link['id'] = intval( $link_arr['lid'] );
$link['cid'] = intval( $link_arr['cid'] );
$link['published'] = intval( $link_arr['published'] ) ? true : false;

$path = $mytree -> getPathFromId( $link_arr['cid'], 'title' );
$path = substr( $path, 1 );
$path = basename( $path );
$path = str_replace( '/', '', $path );
$link['category'] = $path;

$rating = round( number_format( $link_arr['rating'], 0 ) / 2 );
$link['rateimg'] = 'rate' . $rating . '.gif';
unset( $rating );

$link['votes'] = ( $link_arr['votes'] == 1 ) ? _MD_IMLINKS_ONEVOTE : sprintf( _MD_IMLINKS_NUMVOTES, $link_arr['votes'] );
$link['hits'] = sprintf( _MD_IMLINKS_LINKHITS, intval( $link_arr['hits'] ) ) ;
$xoopsTpl -> assign( 'lang_dltimes', $link['hits'] );

$link['title'] = $link_arr['title'];
$link['url'] = $link_arr['url'];

// Get Google Pagerank
if ( isset( $xoopsModuleConfig['showpagerank'] ) && $xoopsModuleConfig['showpagerank'] == 1 ) {
  $link['pagerank'] = pagerank( $link['url'] );
}

if ( isset( $link_arr['screenshot'] ) ) {
    $link['screenshot_full'] = $immyts -> htmlSpecialCharsStrip( $link_arr['screenshot'] );
    if ( !empty( $link_arr['screenshot'] ) && file_exists( ICMS_ROOT_PATH . '/' . $xoopsModuleConfig['screenshots'] . '/' . xoops_trim( $link_arr['screenshot'] ) ) ) {
        if ( isset( $xoopsModuleConfig['usethumbs'] ) && $xoopsModuleConfig['usethumbs'] == 1 ) {
            $_thumb_image = new imThumbsNails( $link['screenshot_full'], $xoopsModuleConfig['screenshots'], 'thumbs' );
            if ( $_thumb_image ) {
                $_thumb_image -> setUseThumbs( 1 );
                $_thumb_image -> setImageType( 'gd2' );
                $_image = $_thumb_image -> do_thumb( $xoopsModuleConfig['shotwidth'],
                    $xoopsModuleConfig['shotheight'],
                    $xoopsModuleConfig['imagequality'],
                    $xoopsModuleConfig['updatethumbs'],
                    $xoopsModuleConfig['keepaspect']
                    );
            }
            $link['screenshot_thumb'] = ICMS_URL . "/{$xoopsModuleConfig['screenshots']}/$_image";
        } else {
            $link['screenshot_thumb'] = ICMS_URL . "/{$xoopsModuleConfig['screenshots']}/" . xoops_trim( $link_arr['screenshot'] );
        }
    }
}

if ( $moderate == 0 ) {
    $time = ( $link_arr['updated'] != 0 ) ? $link_arr['updated'] : $link_arr['published'];
    $is_updated = ( $link_arr['updated'] != 0 ) ? _MD_IMLINKS_UPDATEDON : _MD_IMLINKS_PUBLISHDATE;
    $xoopsTpl -> assign( 'lang_subdate' , $is_updated );
} else {
    $time = $link_arr['date'];
    $is_updated = _MD_IMLINKS_SUBMITDATE;
    $xoopsTpl -> assign( 'lang_subdate' , $is_updated );
}
 
$link['updated'] = formatTimestamp( $time, $xoopsModuleConfig['dateformat'] );
$description = $immyts -> displayTarea( $link_arr['description'], 1, 1, 1, 1, 1 );
$link['description'] = icms_substr( $description, 0, $xoopsModuleConfig['totalchars'],'...');

$link['submitter'] = icms_getLinkedUnameFromId( $link_arr['submitter'] );
$link['publisher'] = ( isset( $link_arr['publisher'] ) && !empty( $link_arr['publisher'] ) ) ? $immyts -> htmlSpecialCharsStrip( $link_arr['publisher'] ) : _MD_IMLINKS_NOTSPECIFIED;

if ( $link_arr['country'] ) {
	$country = $link_arr['country'];
	$link['countryflag'] = ICMS_URL . '/' . $xoopsModuleConfig['flagimage']. '/' . $country . '.gif';
	$link['countryname'] = iml_countryname( $link_arr['country'] );
	$link['country'] = _MD_IMLINKS_COUNTRYB . '&nbsp;<img src="' . $link['countryflag'] . '" alt="' . $link['countryname'] . '" align="absmiddle" />';
}

$mail_subject = rawurlencode( sprintf( _MD_IMLINKS_INTFILEFOUND, $xoopsConfig['sitename'] ) );
$mail_body = rawurlencode( sprintf( _MD_IMLINKS_INTFILEFOUND, $xoopsConfig['sitename'] ) . ':  ' . ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?cid=' . $link_arr['cid'] . '&amp;lid=' . $link_arr['lid'] );
$link['isadmin'] = ( ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) && $xoopsUser -> isAdmin( $xoopsModule -> mid() ) ) ? true : false;
$link['comments'] = $link_arr['comments'];
$whoisurl = str_replace( 'http://', '', $link['url']);

$link['adminlink'] = '';
if ( $link['isadmin'] == true && $moderate == 0 ) {
    $link['adminlink'] = '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/index.php"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/computer.png" alt="' . _MD_IMLINKS_ADMINSECTION . '" title="' . _MD_IMLINKS_ADMINSECTION . '" align="absmiddle"/></a>&nbsp;';
    $link['adminlink'] .=  '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/index.php?op=edit&amp;lid=' . $link_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world_edit.png" alt="' . _MD_IMLINKS_EDIT . '" title="' . _MD_IMLINKS_EDIT . '" align="absmiddle"/></a>&nbsp;';
    $link['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/index.php?op=delete&amp;lid=' . $link_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world_delete.png" alt="' . _MD_IMLINKS_DELETE . '" title="' . _MD_IMLINKS_DELETE . '" align="absmiddle"/></a>&nbsp;';
	$link['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/index.php?op=clone&amp;lid=' . $link_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world_clone.png" alt="' . _MD_IMLINKS_CLONE . '" title="' . _MD_IMLINKS_CLONE . '" align="absmiddle"/></a>&nbsp;';
    $link['adminlink'] .= '<a href="http://whois.domaintools.com/' . $whoisurl . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/domaintools.png" alt="WHOIS" title="WHOIS" align="absmiddle"/></a>';
} else {
    $link['adminlink'] = '[ <a href="' . ICMS_URL . '/modules/' . $mydirname . '/submit.php?op=edit&amp;lid=' . $link_arr['lid'] . '&approve=1">' . _MD_IMLINKS_APPROVE . '</a> | ';
    $link['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/submit.php?op=delete&amp;lid=' . $link_arr['lid'] . '">' . _MD_IMLINKS_DELETE . '</a> ]';
}

$votestring = ( $link_arr['votes'] == 1 ) ? _MD_IMLINKS_ONEVOTE : sprintf( _MD_IMLINKS_NUMVOTES, $link_arr['votes'] );

switch ( $xoopsModuleConfig['selectforum'] ) {
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
$xoopsforumModule = $xoopsModule -> getByDirname( $forum );
if ( is_object( $xoopsforumModule ) && $xoopsforumModule -> getVar( 'isactive' ) ) {
    $link['forumid'] = ( $link_arr['forumid'] > 0 ) ? $link_arr['forumid'] : 0;
    $link['forum_path'] = $forum_path_prefix . "{$link['forumid']}";
}

$link['icons'] = iml_displayicons( $link_arr['published'], $link_arr['status'], $link_arr['hits'] );
$link['module_dir'] = $mydirname;
$link['showpagerank'] = $xoopsModuleConfig['showpagerank'];
$link['quickview'] = $xoopsModuleConfig['quickview'];
$link['comment_rules'] = $xoopsModuleConfig['com_rule'];
$link['autoscrshot'] = $xoopsModuleConfig['useautothumb'];

if ( $xoopsModuleConfig['autothumbsrc'] == 1 ) {
	$link['autothumbsrc'] = '<a style="padding: 0 0 5px 5px;" href="' . ICMS_URL . '/modules/' . $mydirname . '/visit.php?cid=' . $link_arr['cid'] . '&lid='.$link_arr['lid'] . '" target="_blank"><img src="http://mozshot.nemui.org/shot/128x128?' . $link_arr['url'] . '" align="middle" alt="" /></a>';
} else {
	$link['autothumbsrc'] = '<a style="padding: 0 0 5px 5px;" href="' . ICMS_URL . '/modules/' . $mydirname . '/visit.php?cid=' . $link_arr['cid'] . '&lid='.$link_arr['lid'] . '" target="_blank"><img src="http://open.thumbshots.org/image.pxf?url=' . $link_arr['url'] . '" width="120" height="90" align="middle" alt="" /></a>';
}

$link['viewdetails'] = '<a class="button" href="' . ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?cid=' . $link_arr['cid'] . '&amp;lid='.$link_arr['lid'] . '">' . _MD_IMLINKS_VIEWDETAILS . '</a>';

?>