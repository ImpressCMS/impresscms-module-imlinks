<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: admin/functions.php
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


// iml_serverstats()
// @return
function iml_serverstats() {
    echo '<fieldset style="border: #e8e8e8 1px solid;">
		  <legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_LINK_IMAGEINFO . '</legend>
		  <div style="padding: 8px;">
		  <img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/server.png" alt="" style="float: left; padding-right: 10px;" />
		  <div>' . _AM_IMLINKS_LINK_SPHPINI . '</div>';
    $safemode = ( ini_get( 'safe_mode' ) ) ? _AM_IMLINKS_LINK_ON . _AM_IMLINKS_LINK_SAFEMODEPROBLEMS : _AM_IMLINKS_LINK_OFF;
    $registerglobals = ( ini_get( 'register_globals' ) == '' ) ? _AM_IMLINKS_LINK_OFF : _AM_IMLINKS_LINK_ON;
    $links = ( ini_get( 'file_uploads' ) ) ? _AM_IMLINKS_LINK_ON : _AM_IMLINKS_LINK_OFF;
    $gdlib = ( function_exists( 'gd_info' ) ) ? _AM_IMLINKS_LINK_GDON : _AM_IMLINKS_LINK_GDOFF;
    echo '<div style="padding-left: 44px;">&bull;&nbsp;' . _AM_IMLINKS_LINK_GDLIBSTATUS . $gdlib . '<br />';
    if ( function_exists( 'gd_info' ) ) {
        if ( true == $gdlib = gd_info() ) {
            echo '&bull;&nbsp;' . _AM_IMLINKS_LINK_GDLIBVERSION . '<b>' . $gdlib['GD Version'] . '</b>';
        } 
    } 
    echo '<br /><br />';
    echo '&bull;&nbsp;' . _AM_IMLINKS_LINK_SAFEMODESTATUS . $safemode . '<br />';
    echo '&bull;&nbsp;' . _AM_IMLINKS_LINK_REGISTERGLOBALS . $registerglobals . '<br />';
    echo '&bull;&nbsp;' . _AM_IMLINKS_LINK_SERVERUPLOADSTATUS . $links;
    echo '</div></div></fieldset>';
}

function iml_adminmenu( $currentoption = 0, $header = '', $menu = '', $extra = '', $scount = 4 ) {
	icms::$module -> displayAdminMenu( $currentoption, icms::$module -> getVar( 'name' ) . ' | ' . $header );
    // ###### Output warn messages for security ######
    if ( is_dir( ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update/' ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL1, ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update/' ) );
        echo '<br />';
    } 
    $_file = ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update.php';
    if ( file_exists( $_file ) ) {
		icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL2, ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update.php' ) );
        echo '<br />';
    }
    $path1 = ICMS_ROOT_PATH . '/' . icms::$module -> config['mainimagedir'];
    if ( !is_dir( $path1 ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path1 ) );
        echo '<br />';
    }
    if ( !is_writable( $path1 ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path1 ) );
        echo '<br />';
    }
    $path1_t = ICMS_ROOT_PATH . '/' . icms::$module -> config['mainimagedir'] . '/thumbs';
    if ( !is_dir( $path1_t ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path1_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path1_t ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path1_t ) );
        echo '<br />';
    }
    $path2 = ICMS_ROOT_PATH . '/' . icms::$module -> config['screenshots'];
    if ( !is_dir( $path2 ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path2 ) );
        echo '<br />';
    }
    if ( !is_writable( $path2 ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path2 ) );
        echo '<br />';
    }
    $path2_t = ICMS_ROOT_PATH . '/' . icms::$module -> config['screenshots'] . '/thumbs';
    if ( !is_dir( $path2_t ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path2_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path2_t ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path2_t ) );
        echo '<br />';
    }
    $path3 = ICMS_ROOT_PATH . '/' . icms::$module -> config['catimage'];
    if ( !is_dir( $path3 ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path3 ) );
        echo '<br />';
    }
    if ( !is_writable( $path3 ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path3 ) );
        echo '<br />';
    }
    $path3_t = ICMS_ROOT_PATH . '/' . icms::$module -> config['catimage'] . '/thumbs';
    if ( !is_dir( $path3_t ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path3_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path3_t ) ) {
        icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path3_t ) );
        echo '<br />';
    }
    echo '<h3 style="color: #2F5376;">' . $header . '</h3>';
    if ( $extra ) {
        echo '<div>$extra</div>';
    } 
}

function iml_linklistpagenav( $pubrowamount, $start, $art = 'art', $_this = '', $align = 'left' ) {
    if ( ( $pubrowamount < icms::$module -> config['admin_perpage'] ) ) { return false; }
    $pagenav = new icms_view_PageNav( $pubrowamount, icms::$module -> config['admin_perpage'], $start, 'st' . $art, $_this );
    echo '<div style="float: ' . $align . '; font-size: .9em;">' . $pagenav -> renderNav() . '</div>';
}

function iml_uploading( $_FILES, $uploaddir = 'uploads', $allowed_mimetypes = '', $redirecturl = 'index.php', $num = 0, $redirect = 0, $usertype = 1 ) {
    global $_FILES;
    $down = array();
    include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/class/uploader.php';
    if ( empty( $allowed_mimetypes ) ) {
        $allowed_mimetypes = iml_retmime( $_FILES['userfile']['name'], $usertype );
    } 
    $upload_dir = ICMS_ROOT_PATH . '/' . $uploaddir . '/';
    $maxfilesize = icms::$module -> config['maxfilesize'];
    $maxfilewidth = icms::$module -> config['maximgwidth'];
    $maxfileheight = icms::$module -> config['maximgheight'];
    $uploader = new imLinksMediaUploader( $upload_dir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight );
    $uploader -> noAdminSizeCheck( 1 );
    if ( $uploader -> fetchMedia( $_POST['xoops_upload_file'][0] ) ) {
        if ( !$uploader -> upload() ) {
            $errors = $uploader -> getErrors();
            redirect_header( $redirecturl, 2, $errors );
        } else {
            if ( $redirect ) {
                redirect_header( $redirecturl, 1 , _AM_PDD_UPLOADFILE );
            } else {
                if ( is_file( $uploader -> savedDestination ) ) {
                    $down['url']  = ICMS_URL . '/' . $uploaddir . '/' . strtolower( $uploader -> savedFileName );
                    $down['size'] = filesize( ICMS_ROOT_PATH . '/' . $uploaddir . '/' . strtolower( $uploader -> savedFileName ) );
                } 
                return $down;
            } 
        } 
    } else {
        $errors = $uploader -> getErrors();
        redirect_header( $redirecturl, 1, $errors );
    } 
}

function iml_linklistheader( $heading ) {
    echo '<br />
		  <div style="font-weight: bold; color: #0A3760;">' . $heading . '</div>
		  <table width="100%" cellspacing="1" class="outer" summary>
		  <tr>
		    <th style="text-align: center; font-size: smaller;">' . _AM_IMLINKS_MINDEX_ID . '</th>
		    <th style="text-align: left; font-size: smaller;">' . _AM_IMLINKS_MINDEX_TITLE . '</th>
		    <th style="text-align: left; font-size: smaller;">' . _AM_IMLINKS_CATTITLE . '</th>
		    <th style="text-align: center; font-size: smaller;">' . _AM_IMLINKS_MINDEX_POSTER . '</th>
		    <th style="text-align: center; font-size: smaller;">' . _AM_IMLINKS_MINDEX_PUBLISH . '</th>
		    <th style="text-align: center; font-size: smaller;">' . _AM_IMLINKS_MINDEX_EXPIRE . '</th>
		    <th style="text-align: center; font-size: smaller;">' . _AM_IMLINKS_MINDEX_ONLINE . '</th>
		    <th style="text-align: center; font-size: smaller;">' . _AM_IMLINKS_MINDEX_ACTION . '</th>
		  </tr>';
} 

function iml_linklistbody( $published ) {
    global $immyts, $imagearray;
    $lid = $published['lid'];
    $cid = $published['cid'];
	$nice_link = iml_nicelink( $published['title'], $published['nice_url'] );
    if ( icms::$module -> config['niceurl'] ) {
    $title = '<a href="../singlelink.php?lid=' . $published['lid'] . '&amp;page=' . $nice_link . '">' . $immyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . '</a>';
	} else {
	$title = '<a href="../singlelink.php?lid=' . $published['lid'] . '">' . $immyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . '</a>';
	}
    $maintitle = urlencode( $immyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) );
    $cattitle = '<a href="../viewcat.php?cid=' . $published['cid'] . '">' . iml_cattitle( $published['cid'] ) . '</a>';
    $submitter = icms_member_user_Handler::getUserLink( $published['submitter'] );
    $hwhoisurl = str_replace( 'http://', '', $published['url']);
    $submitted = formatTimestamp( $published['date'], icms::$module -> config['dateformat'] );
    $publish = ( $published['published'] > 0 ) ? formatTimestamp( $published['published'], icms::$module -> config['dateformatadmin'] ): 'Not Published';
    $expires = $published['expired'] ? formatTimestamp( $published['expired'], icms::$module -> config['dateformatadmin'] ): _AM_IMLINKS_MINDEX_NOTSET;
	
    if ( ( ( $published['expired'] && $published['expired'] > time() ) OR  $published['expired']==0)&& ( $published['published'] && $published['published'] < time() ) && $published['offline'] == 0 ) {
        $published_status = '<a href="index.php?op=status_off&amp;lid=' . $lid . '">' . $imagearray['online'] . '</a>';
    } elseif ( ( $published['expired'] && $published['expired'] < time() )  && $published['offline'] == 0 ) {
        $published_status = $imagearray['expired'];
    } else {
        $published_status = ( $published['published'] == 0 ) ? "<a href='newlinks.php'>" . $imagearray['offline'] . "</a>" : '<a href="index.php?op=status_on&amp;lid=' . $lid . '">' . $imagearray['offline'] . '</a>';
    }
	
    $icon = '<a href="index.php?op=edit&amp;lid=' . $lid . '" title="' . _AM_IMLINKS_ICO_EDIT . '">' . $imagearray['editimg'] . '</a>&nbsp;';
    $icon .= '<a href="index.php?op=delete&amp;lid=' . $lid . '" title="' . _AM_IMLINKS_ICO_DELETE . '">' . $imagearray['deleteimg'] . '</a>&nbsp;';
	$icon .= '<a href="index.php?op=clone&amp;lid=' . $lid . '" title="' . _AM_IMLINKS_ICO_CLONE . '">' . $imagearray['clone'] . '</a>&nbsp;';
    $icon .= '<a href="altcat.php?op=main&amp;lid=' . $lid . '" title="' . _AM_IMLINKS_ALTCAT_CREATEF . '">' . $imagearray['altcat'] . '</a>&nbsp;';
    $icon .= '<a href="http://whois.domaintools.com/' . $hwhoisurl . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/domaintools.png" alt="WHOIS" title="WHOIS" align="absmiddle"/></a>';
    echo '<tr style="text-align: center; font-size: smaller;">
			<td class="head">' . $lid . '</td>
			<td class="even" style="text-align: left;">' . $title . '</td>
			<td class="even" style="text-align: left;">' . $cattitle . '</td>
			<td class="even">' . $submitter . '</td>
			<td class="even">' . $publish . '</td>
			<td class="even">' . $expires . '</td>
			<td class="even">' . $published_status . '</td>
			<td class="even" style="text-align: center; width: 6%; white-space: nowrap;">' . $icon . '</td>
		  </tr>';
    unset( $published );
} 

function iml_linklistfooter() {
    echo '<tr style="text-align: center;">
			<td class="head" colspan="7">' . _AM_IMLINKS_MINDEX_NOLINKSFOUND . '</td>
		  </tr>';
}

?>