<?php
/**
 * $Id: linkloadinfo.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-Links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
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

$link['votes'] = ( $link_arr['votes'] == 1 ) ? _MD_WFL_ONEVOTE : sprintf( _MD_WFL_NUMVOTES, $link_arr['votes'] );
$link['hits'] = sprintf( _MD_WFL_LINKHITS, intval( $link_arr['hits'] ) ) ;
$xoopsTpl -> assign( 'lang_dltimes', $link['hits'] );

$link['title'] = $link_arr['title'];
$link['url'] = $link_arr['url'];

// Get Google Pagerank
if (isset( $xoopsModuleConfig['showpagerank'] ) && $xoopsModuleConfig['showpagerank'] == 1 ) {
  $link['pagerank'] = pagerank($link['url']);
}

if ( isset( $link_arr['screenshot'] ) ) {
    $link['screenshot_full'] = $wfmyts -> htmlSpecialCharsStrip( $link_arr['screenshot'] );
    if ( !empty( $link_arr['screenshot'] ) && file_exists( XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['screenshots'] . '/' . xoops_trim( $link_arr['screenshot'] ) ) ) {
        if ( isset( $xoopsModuleConfig['usethumbs'] ) && $xoopsModuleConfig['usethumbs'] == 1 ) {
            $_thumb_image = new wfThumbsNails( $link['screenshot_full'], $xoopsModuleConfig['screenshots'], 'thumbs' );
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
            $link['screenshot_thumb'] = XOOPS_URL . "/{$xoopsModuleConfig['screenshots']}/$_image";
        } else {
            $link['screenshot_thumb'] = XOOPS_URL . "/{$xoopsModuleConfig['screenshots']}/" . xoops_trim( $link_arr['screenshot'] );
        }
    }
}

if ( $moderate == 0 ) {
    $time = ( $link_arr['updated'] != 0 ) ? $link_arr['updated'] : $link_arr['published'];
    $is_updated = ( $link_arr['updated'] != 0 ) ? _MD_WFL_UPDATEDON : _MD_WFL_PUBLISHDATE;
    $xoopsTpl -> assign( 'lang_subdate' , $is_updated );
} else {
    $time = $link_arr['date'];
    $is_updated = _MD_WFL_SUBMITDATE;
    $xoopsTpl -> assign( 'lang_subdate' , $is_updated );
}
 
$link['updated'] = formatTimestamp( $time, $xoopsModuleConfig['dateformat'] );
$description = $wfmyts -> displayTarea( $link_arr['description'], 1, 1, 1, 1, 1 );
if (defined("ICMS_VERSION_NAME")) {
  $link['description'] = wfl_substr( $description, 0, $xoopsModuleConfig['totalchars'], '...' );
} else {
  $link['description'] = xoops_substr( $description, 0, $xoopsModuleConfig['totalchars'], '...' );
}

$link['submitter'] = xoops_getLinkedUnameFromId( $link_arr['submitter'] );
$link['publisher'] = ( isset( $link_arr['publisher'] ) && !empty( $link_arr['publisher'] ) ) ? $wfmyts -> htmlSpecialCharsStrip( $link_arr['publisher'] ) : _MD_WFL_NOTSPECIFIED;

$country = $link_arr['country'];
$link['country'] = XOOPS_URL . '/' . $xoopsModuleConfig['flagimage']. '/' . $country . '.gif';
$link['countryname'] = wfl_countryname( $link_arr['country'] );

$mail_subject = rawurlencode( sprintf( _MD_WFL_INTFILEFOUND, $xoopsConfig['sitename'] ) );
$mail_body = rawurlencode( sprintf( _MD_WFL_INTFILEFOUND, $xoopsConfig['sitename'] ) . ':  ' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . $link_arr['cid'] . '&amp;lid=' . $link_arr['lid'] );
$link['isadmin'] = ( ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) && $xoopsUser -> isAdmin( $xoopsModule -> mid() ) ) ? true : false;
$link['comments'] = $link_arr['comments'];
$whoisurl = str_replace( 'http://', '', $link['url']);

$link['adminlink'] = '';
if ( $link['isadmin'] == true && $moderate == 0 ) {
    $link['adminlink'] = '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/computer.png" alt="' . _MD_WFL_ADMINSECTION . '" title="' . _MD_WFL_ADMINSECTION . '" align="absmiddle"/></a>&nbsp;';
    $link['adminlink'] .=  '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php?op=edit&amp;lid=' . $link_arr['lid'] . '"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/world_edit.png" alt="' . _MD_WFL_EDIT . '" title="' . _MD_WFL_EDIT . '" align="absmiddle"/></a>&nbsp;';
    $link['adminlink'] .= '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php?op=delete&amp;lid=' . $link_arr['lid'] . '"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/world_delete.png" alt="' . _MD_WFL_DELETE . '" title="' . _MD_WFL_DELETE . '" align="absmiddle"/></a>&nbsp;';
    $link['adminlink'] .= '<a href="http://whois.domaintools.com/' . $whoisurl . '" target="_blank"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/domaintools.png" alt="WHOIS" title="WHOIS" align="absmiddle"/></a>';
} else {
    $link['adminlink'] = '[ <a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/submit.php?op=edit&amp;lid=' . $link_arr['lid'] . '&approve=1">' . _MD_WFL_APPROVE . '</a> | ';
    $link['adminlink'] .= '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/submit.php?op=delete&amp;lid=' . $link_arr['lid'] . '">' . _MD_WFL_DELETE . '</a> ]';
}

$votestring = ( $link_arr['votes'] == 1 ) ? _MD_WFL_ONEVOTE : sprintf( _MD_WFL_NUMVOTES, $link_arr['votes'] );

$link['useradminlink'] = 0;
if ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) {
  $_user_submitter = ( $xoopsUser -> getvar( 'uid' ) == $link_arr['submitter'] ) ? true : false;
  if ( true == wfl_checkgroups( $cid ) ) {
    $link['useradminlink'] = 1;
    if ( $xoopsUser -> getvar( 'uid' ) == $link_arr['submitter'] ) {
      $link['usermodify'] = '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/submit.php?lid=' . $link_arr['lid'] . '"> ' . _MD_WFL_MODIFY . '</a> |';
    }
  }
}

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

$xoopsTpl -> assign ( 'ratethislink', '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/ratelink.php?cid=' . $link_arr['cid'] . '&amp;lid=' . $link_arr['lid'] . '">' ._MD_WFL_RATETHISFILE . '</a>');

$xoopsTpl -> assign ( 'reportbroken', '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/brokenlink.php?lid=' . $link_arr['lid'] . '">' . _MD_WFL_REPORTBROKEN . '</a>');

$xoopsTpl -> assign ( 'mailto', '<a href="mailto:?subject=' . $mail_subject . '&body=' . $mail_body . '" target="_top">' . _MD_WFL_TELLAFRIEND . '</a>');

$xoopsTpl -> assign( 'commentz', '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/singlelink.php?cid=' . $link_arr['cid'] . '&amp;lid=' . $link_arr['lid'] . '">' . _COMMENTS . '&nbsp;(' . $link_arr['comments'] . ')</a>' );

$xoopsTpl -> assign( 'print', '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/print.php?lid=' . $link_arr['lid'] . '"  target="_blank">' . _MD_WFL_PRINT . '</a>' );

$link['icons'] = wfl_displayicons( $link_arr['published'], $link_arr['status'], $link_arr['hits'] );
$link['allow_rating'] = ( wfl_checkgroups( $cid, 'WFLinkRatePerms' ) ) ? true : false;
$link['total_chars'] = $xoopsModuleConfig['totalchars'];
$link['module_dir'] = $xoopsModule -> getVar( 'dirname' );
$link['otherlinx'] = $xoopsModuleConfig['otherlinks'];
$link['showpagerank'] = $xoopsModuleConfig['showpagerank'];
$link['quickview'] = $xoopsModuleConfig['quickview'];
$link['comment_rules'] = $xoopsModuleConfig['com_rule'];
$link['autoscrshot'] = $xoopsModuleConfig['useautothumb'];
?>