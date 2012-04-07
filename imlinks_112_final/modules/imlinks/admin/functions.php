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
	echo '<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
			<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_LINK_IMAGEINFO . '</div>
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
	echo '</div></div><br />';
}

function iml_adminmenu( $currentoption = 0, $header = '', $menu = '', $extra = '', $scount = 4 ) {
	icms::$module -> displayAdminMenu( $currentoption, icms::$module -> getVar( 'name' ) . ' | ' . $header );

	// ###### Output warn messages for security ######
	if ( is_dir( ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update/' ) ) {
		icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL1, ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update/' ) );
	}

	$_file = ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update.php';
	if ( file_exists( $_file ) ) {
		icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL2, ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update.php' ) );
	}

	$path1 = ICMS_ROOT_PATH . '/' . icms::$module -> config['mainimagedir'];
	if ( !is_dir( $path1 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path1 ) ); }
	if ( !is_writable( $path1 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path1 ) ); }

	$path1_t = ICMS_ROOT_PATH . '/' . icms::$module -> config['mainimagedir'] . '/thumbs';
	if ( !is_dir( $path1_t ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path1_t ) ); }
	if ( !is_writable( $path1_t ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path1_t ) ); }

	$path2 = ICMS_ROOT_PATH . '/' . icms::$module -> config['screenshots'];
	if ( !is_dir( $path2 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path2 ) ); }
	if ( !is_writable( $path2 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path2 ) ); }

	$path2_t = ICMS_ROOT_PATH . '/' . icms::$module -> config['screenshots'] . '/thumbs';
	if ( !is_dir( $path2_t ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path2_t ) ); }
	if ( !is_writable( $path2_t ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path2_t ) ); }

	$path3 = ICMS_ROOT_PATH . '/' . icms::$module -> config['catimage'];
	if ( !is_dir( $path3 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path3 ) ); }
	if ( !is_writable( $path3 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path3 ) ); }

	$path3_t = ICMS_ROOT_PATH . '/' . icms::$module -> config['catimage'] . '/thumbs';
	if ( !is_dir( $path3_t ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path3_t ) ); }
	if ( !is_writable( $path3_t ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path3_t ) ); }

	// Check if library folders are present
	$path_tickers_01 = ICMS_LIBRARIES_PATH . '/greybox';
	$path_tickers_02 = ICMS_LIBRARIES_PATH . '/lightwindow';
	$path_tickers_03 = ICMS_LIBRARIES_PATH . '/lytebox';
	$path_tickers_04 = ICMS_LIBRARIES_PATH . '/prototype';
	$path_tickers_05 = ICMS_LIBRARIES_PATH . '/scriptaculous';
	$path_tickers_06 = ICMS_LIBRARIES_PATH . '/socialshareprivacy';
	if ( !is_dir( $path_tickers_01 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path_tickers_01 ) ); }
	if ( !is_dir( $path_tickers_02 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path_tickers_02 ) ); }
	if ( !is_dir( $path_tickers_03 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path_tickers_03 ) ); }
	if ( !is_dir( $path_tickers_04 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path_tickers_04 ) ); }
	if ( !is_dir( $path_tickers_05 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path_tickers_05 ) ); }
	if ( !is_dir( $path_tickers_06 ) ) { icms_core_Message::error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path_tickers_06 ) ); }

	echo '<h3 style="color: #2F5376;">' . $header . '</h3>';
	if ( $extra ) { echo '<div>$extra</div>'; }
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

function iml_cattitle( $catt ) {
	$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $catt;
	$result = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
	return $result['title'];
}

function iml_linklistbody( $published ) {
	global $imagearray;
	$lid = $published['lid'];
	$cid = $published['cid'];
	$nice_link = iml_nicelink( $published['title'], $published['nice_url'] );
	if ( icms::$module -> config['niceurl'] ) {
		$title = '<a href="../singlelink.php?lid=' . $lid . '&amp;page=' . $nice_link . '">' . icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( trim( $published['title'] ) ) ) . '</a>';
	} else {
		$title = '<a href="../singlelink.php?lid=' . $lid . '">' . icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( trim( $published['title'] ) ) ) . '</a>';
	}
	$maintitle = urlencode( icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( trim( $published['title'] ) ) ) );
	$cattitle = '<a href="../viewcat.php?cid=' . $cid . '">' . iml_cattitle( $cid ) . '</a>';
	$submitter = icms_member_user_Handler::getUserLink( $published['submitter'] );
	$hwhoisurl = str_replace( 'http://', '', $published['url']);
	$submitted = formatTimestamp( $published['date'], icms::$module -> config['dateformat'] );
	$publish = ( $published['published'] > 0 ) ? formatTimestamp( $published['published'], icms::$module -> config['dateformatadmin'] ): 'Not Published';
	$expires = $published['expired'] ? formatTimestamp( $published['expired'], icms::$module -> config['dateformatadmin'] ): _AM_IMLINKS_MINDEX_NOTSET;
	
	if ( $published['status'] == 0 && $published['offline'] == 0 ) {
		// Link submitted, waiting for approval
		$published_status = $imagearray['waiting'];
	} elseif ( ( ( $published['expired'] && $published['expired'] > time() ) OR  $published['expired']==0)&& ( $published['published'] && $published['published'] < time() ) && $published['offline'] == 0 ) {
		// Online
		$published_status = '<a href="index.php?op=status_off&amp;lid=' . $lid . '">' . $imagearray['online'] . '</a>';
	} elseif ( ( $published['expired'] && $published['expired'] < time() )  && $published['offline'] == 0 ) {
		// Expired
		$published_status = $imagearray['expired'];
	} else {
		// Offline
		$published_status = ( $published['published'] == 0 ) ? "<a href='newlinks.php'>" . $imagearray['offline'] . "</a>" : '<a href="index.php?op=status_on&amp;lid=' . $lid . '">' . $imagearray['offline'] . '</a>';
	}

	$icon = '<a href="index.php?op=edit&amp;lid=' . $lid . '" title="' . _AM_IMLINKS_ICO_EDIT . '">' . $imagearray['editimg'] . '</a>';
	$icon .= '<a style="padding-left: 5px;" href="index.php?op=delete&amp;lid=' . $lid . '" title="' . _AM_IMLINKS_ICO_DELETE . '">' . $imagearray['deleteimg'] . '</a>';
	$icon .= '<a style="padding-left: 5px;" href="index.php?op=clone&amp;lid=' . $lid . '" title="' . _AM_IMLINKS_ICO_CLONE . '">' . $imagearray['clone'] . '</a>';
	$icon .= '<a style="padding-left: 5px;" href="altcat.php?op=main&amp;lid=' . $lid . '" title="' . _AM_IMLINKS_ALTCAT_CREATEF . '">' . $imagearray['altcat'] . '</a>';
	$icon .= '<a style="padding-left: 5px;" href="http://whois.domaintools.com/' . $hwhoisurl . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/domaintools.png" alt="WHOIS" title="WHOIS" align="absmiddle"/></a>';
	echo '<div class="imlinks_tblrow">
			<div class="imlinks_tblhdrcell" style="text-align: center;">' . $lid . '</div>
			<div class="imlinks_tblcell">' . $title . '</div>
			<div class="imlinks_tblcell">' . $cattitle . '</div>
			<div class="imlinks_tblcell" style="text-align: center;">' . $submitter . '</div>
			<div class="imlinks_tblcell" style="text-align: center;">' . $publish . '</div>
			<div class="imlinks_tblcell" style="text-align: center;">' . $expires . '</div>
			<div class="imlinks_tblcell" style="text-align: center;">' . $published_status . '</div>
			<div class="imlinks_tblcell" style="white-space: nowrap; text-align: center; width: 110px;">' . $icon . '</div>
		  </div>';
	unset( $published );
}
?>