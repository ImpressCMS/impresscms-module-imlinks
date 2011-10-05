<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: functions.php
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

if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'ICMS root path not defined' ); } 

function iml_checkgroups( $cid = 0, $permType = 'imLinkCatPerm', $redirect = false ) {
    $groups = is_object( icms::$user ) ? icms::$user -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = icms::handler('icms_member_groupperm');
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, icms::$module -> getVar( 'mid' ) ) ) {
        if ( $redirect == false ) {
            return false;
        } else {
            redirect_header( 'index.php', 3, _NOPERM );
            exit();
        } 
    } 
    return true;
} 

function iml_getVoteDetails( $lid = 0 ) {
    $sql = 'SELECT total_votes AS total_votes, total_value AS total_value FROM ' . icms::$xoopsDB -> prefix( 'imlinks_ratings' );
    if ( $lid > 0 ) {
        $sql .= ' WHERE id=' . $lid;
    } 
    if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
        return false;
    } 
    $ret = icms::$xoopsDB -> fetchArray( $result );
    return $ret;
} 

function iml_cleanRequestVars( &$array, $name = null, $def = null, $strict = false, $lengthcheck = 15 ) {
	// Sanitise $_request for further use.  This method gives more control and security.
	// Method is more for functionality rather than beauty at the moment, will correct later.
    unset( $array['usercookie'] );
    unset( $array['PHPSESSID'] );
    if ( is_array( $array ) && $name == null ) {
        $globals = array();
        foreach ( array_keys( $array ) as $k ) {
            $value = strip_tags( trim( $array[$k] ) );
            if ( strlen( $value >= $lengthcheck ) ) {
                return null;
            } 
            if ( ctype_digit( $value ) ) {
                $value = intval( $value );
            } else  {
                if ( $strict == true ) {
                    $value = preg_replace( '/\W/', '', trim( $value ) );
                } 
                $value = strtolower( strval( $value ) );
            } 
            $globals[$k] = $value;
        } 
        return $globals;
    } 
    if ( !isset( $array[$name] ) || !array_key_exists( $name, $array ) ) {
        return $def;
    } else {
        $value = strip_tags( trim( $array[$name] ) );
    } 
    if ( ctype_digit( $value ) ) {
        $value = intval( $value );
    } else {
        if ( $strict == true ) {
            $value = preg_replace( '/\W/', '', trim( $value ) );
        } 
        $value = strtolower( strval( $value ) );
    } 
    return $value;
} 

// toolbar()
// @return
function iml_toolbar( $cid = 0 ) {
	$toolbar = '<a class="button" href="index.php">' . _MD_IMLINKS_MAIN . '</a> ';
    if ( true == iml_checkgroups( $cid, 'imLinkSubPerm' ) ) {
        $toolbar .= '<a class="button" href="submit.php">' . _MD_IMLINKS_SUBMITLINK . '</a> ';
    }
    $toolbar .= '<a class="button" href="newlist.php?newlinkshowdays=7">' . _MD_IMLINKS_LATESTLIST . '</a> ';
	$toolbar .= '<a class="button" href="topten.php?list=hit">' . _MD_IMLINKS_POPULARITY . '</a> ';
	$toolbar .= '<a class="button" href="topten.php?list=rate">' . _MD_IMLINKS_TOPRATEDBUTT . '</a>';
    return $toolbar;
} 

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

// iml_displayicons()
// @param  $time
// @param integer $status
// @param integer $counter
// @return
function iml_displayicons( $time, $status = 0, $counter = 0 ) {
    $new = '';
    $pop = '';
    $newdate = ( time() - ( 86400 * intval( icms::$module -> config['daysnew'] ) ) );
    $popdate = ( time() - ( 86400 * intval( icms::$module -> config['daysupdated'] ) ) ) ;
    if ( icms::$module -> config['displayicons'] != 3 ) {
        if ( $newdate < $time ) {
            if ( intval( $status ) > 1 ) {
                if ( icms::$module -> config['displayicons'] == 1 )
                    $new = '&nbsp;<span class="minibutton"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/error.png" alt="" style="vertical-align: middle; padding-bottom: 2px;" />&nbsp;' . _MD_IMLINKS_UPDATED . "</span>";
                if ( icms::$module -> config['displayicons'] == 2 )
                    $new = '<i>' . _MD_IMLINKS_UPDATED . '</i>';
            } else {
                if ( icms::$module -> config['displayicons'] == 1 )
                    $new = '&nbsp;<span class="minibutton"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/flag_blue.png" alt="" style="vertical-align: middle; padding-bottom: 2px;" />&nbsp;' . _MD_IMLINKS_NEW . "</span>";
                if ( icms::$module -> config['displayicons'] == 2 )
                    $new = '<i>' . _MD_IMLINKS_NEW . '</i>';
            }
        } 
        if ( $popdate > $time ) {
            if ( $counter >= icms::$module -> config['popular'] ) {
                if ( icms::$module -> config['displayicons'] == 1 )
                    $pop = '&nbsp;<span class="minibutton"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/star.png" alt="" style="vertical-align: middle; padding-bottom: 2px;" />&nbsp;' . _MD_IMLINKS_POPULAR2 . "</span>";
                if ( icms::$module -> config['displayicons'] == 2 )
                    $pop = '<i>' . _MD_IMLINKS_POPULAR2 . '</i>';
            } 
        } 
    } 
    $icons = $new . ' ' . $pop;
    return $icons;
} 

// Reusable Link Sorting Functions
// iml_convertorderbyin()
// @param  $orderby
// @return
function iml_convertorderbyin( $orderby ) {
	switch ( trim( $orderby ) ) {
		case 'titleA':
			$orderby = 'title ASC';
			break;
		case 'dateA':
			$orderby = 'published ASC';
			break;
		case 'hitsA':
			$orderby = 'hits ASC';
			break;
		case 'ratingA':
			$orderby = 'rating ASC';
			break;
		case 'countryA':
			$orderby = 'country ASC';
			break;
		case 'titleD':
			$orderby = 'title DESC';
			break;
		case 'hitsD':
			$orderby = 'hits DESC';
			break;
		case 'ratingD':
			$orderby = 'rating DESC';
			break;
		case 'dateD':
			$orderby = 'published DESC';
			break;
		case 'countryD':
			$orderby = 'country DESC';
		break;
	}
	return $orderby;
} 

function iml_convertorderbytrans( $orderby ) {
	if ( $orderby == 'hits ASC' ) $orderbyTrans = _MD_IMLINKS_POPULARITYLTOM;
	if ( $orderby == 'hits DESC' ) $orderbyTrans = _MD_IMLINKS_POPULARITYMTOL;
	if ( $orderby == 'title ASC' ) $orderbyTrans = _MD_IMLINKS_TITLEATOZ;
	if ( $orderby == 'title DESC' ) $orderbyTrans = _MD_IMLINKS_TITLEZTOA;
	if ( $orderby == 'published ASC' ) $orderbyTrans = _MD_IMLINKS_DATEOLD;
	if ( $orderby == 'published DESC' ) $orderbyTrans = _MD_IMLINKS_DATENEW;
	if ( $orderby == 'rating ASC' ) $orderbyTrans = _MD_IMLINKS_RATINGLTOH;
	if ( $orderby == 'rating DESC' ) $orderbyTrans = _MD_IMLINKS_RATINGHTOL;
	if ( $orderby == 'country ASC' ) $orderbyTrans = _MD_IMLINKS_COUNTRYLTOH;
	if ( $orderby == 'country DESC' ) $orderbyTrans = _MD_IMLINKS_COUNTRYHTOL;
	return $orderbyTrans;
} 

function iml_convertorderbyout( $orderby ) {
	if ( $orderby == 'title ASC' ) $orderby = 'titleA';
	if ( $orderby == 'published ASC' ) $orderby = 'dateA';
	if ( $orderby == 'hits ASC' ) $orderby = 'hitsA';
	if ( $orderby == 'rating ASC' ) $orderby = 'ratingA';
	if ( $orderby == 'country ASC' ) $orderby = 'countryA';
	if ( $orderby == 'weight ASC' ) $orderby = 'weightA';
	if ( $orderby == 'title DESC' ) $orderby = 'titleD';
	if ( $orderby == 'published DESC' ) $orderby = 'dateD';
	if ( $orderby == 'hits DESC' ) $orderby = 'hitsD';
	if ( $orderby == 'rating DESC' ) $orderby = 'ratingD';
	if ( $orderby == 'country DESC' ) $orderby = 'countryD';
	return $orderby;
} 

// updaterating()
// @param  $sel_id
// @return updates rating data in itemtable for a given item
function iml_updaterating( $sel_id ) {
    $query = 'SELECT rating FROM ' . icms::$xoopsDB -> prefix( 'imlinks_votedata' ) . ' WHERE lid=' . $sel_id;
    $voteresult = icms::$xoopsDB -> query( $query );
    $votesDB = icms::$xoopsDB -> getRowsNum( $voteresult );
    $totalrating = 0;
    while ( list( $rating ) = icms::$xoopsDB -> fetchRow( $voteresult ) ) {
        $totalrating += $rating;
    } 
    $finalrating = $totalrating / $votesDB;
    $finalrating = number_format( $finalrating, 4 );
    $sql = sprintf( 'UPDATE %s SET rating = %u, votes = %u WHERE lid = %u', icms::$xoopsDB -> prefix( 'imlinks_links' ), $finalrating, $votesDB, $sel_id );
    icms::$xoopsDB -> query( $sql );
} 

// totalcategory()
// @param integer $pid
// @return
function iml_totalcategory( $pid = 0 ) {
    $sql = 'SELECT cid FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' );
    if ( $pid > 0 ) {
        $sql .= ' WHERE pid=0';
    } 
    $result = icms::$xoopsDB -> query( $sql );
    $catlisting = 0;
    while ( list( $cid ) = icms::$xoopsDB -> fetchRow( $result ) ) {
        if ( iml_checkgroups( $cid ) ) {
            $catlisting++;
        } 
    } 
    return $catlisting;
} 

// iml_getTotalItems()
// @param integer $sel_id
// @param integer $get_child
// @param integer $return_sql
// @return
function iml_getTotalItems( $sel_id = 0, $get_child = 0, $return_sql = 0 ) {
   global $mytree;
    if ( $sel_id > 0 ) {
        $sql = 'SELECT a.lid, a.cid, a.published FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN '
         . icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' b ON b.lid=a.lid'
         . ' WHERE a.published>0 AND a.published<=' . time()
         . ' AND (a.expired=0 OR a.expired>' . time() . ') AND offline=0'
         . ' AND (b.cid=a.cid OR (a.cid=' . $sel_id . ' OR b.cid=' . $sel_id . '))'
		 . ' GROUP BY a.lid, a.cid, a.published';
    } else {
        $sql = 'SELECT lid, cid, published FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE offline=0 AND published>0 AND published<=' . time() . ' AND (expired=0 OR expired>' . time() . ')';
    } 
    if ( $return_sql == 1 ) {
        return $sql;
    } 
    $count = 0;
    $published_date = 0;
    $arr = array();
    $result = icms::$xoopsDB -> query( $sql );
    while ( list( $lid, $cid, $published ) = icms::$xoopsDB -> fetchRow( $result ) ) {
        if ( true == iml_checkgroups() ) {
            $count++;
            $published_date = ( $published > $published_date ) ? $published : $published_date;
        } 
    } 
    $child_count = 0;
    if ( $get_child == 1 ) {
        $arr = $mytree -> getAllChildId( $sel_id );
        $size = count( $arr );
        for( $i = 0; $i < count( $arr ); $i++ ) {
            $query2 = 'SELECT a.lid, a.published, a.cid FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN '
             . icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' b ON b.lid=a.lid'
             . ' WHERE a.published>0 AND a.published<=' . time()
             . ' AND (a.expired=0 OR a.expired>' . time() . ') AND offline=0'
             . ' AND (b.cid=a.cid OR (a.cid=' . $arr[$i] . ' OR b.cid=' . $arr[$i] . ')) GROUP BY a.lid, a.published, a.cid';
            $result2 = icms::$xoopsDB -> query( $query2 );
            while ( list( $lid, $published ) = icms::$xoopsDB -> fetchRow( $result2 ) ) {
                if ( $published == 0 ) {
                    continue;
                } 
                $published_date = ( $published > $published_date ) ? $published : $published_date;
                $child_count++;
            } 
        } 
    } 
    $info['count'] = $count + $child_count;
    $info['published'] = $published_date;
    return $info;
} 

function iml_imageheader( $indeximage = '', $indexheading = '' ) {
    if ( $indeximage == '' ) {
        $result = icms::$xoopsDB -> query( 'SELECT indeximage, indexheading FROM ' . icms::$xoopsDB -> prefix( 'imlinks_indexpage' ) );
        list( $indeximage, $indexheading ) = icms::$xoopsDB -> fetchrow( $result );
    } 
    $image = '';
    if ( !empty( $indeximage ) ) {
        $image = iml_displayimage( $indeximage, 'index.php', icms::$module -> config['mainimagedir'], $indexheading );
    } 
    return $image;
} 

function iml_displayimage( $image = '', $path = '', $imgsource = '', $alttext = '' ) {
    $showimage = '';
    // Check to see if link is given
    if ( $path ) {
        $showimage = '<a href=' . $path . '>';
    } 
    // checks to see if the file is valid else displays default blank image
    if ( !is_dir( ICMS_ROOT_PATH . "/{$imgsource}/{$image}" ) && file_exists( ICMS_ROOT_PATH . "/{$imgsource}/{$image}" ) ) {
        $showimage .= "<img src='" . ICMS_URL . "/{$imgsource}/{$image}' border='0' alt='" . $alttext . "' /></a>";
    } else {
        if ( icms::$user && icms::$user -> isAdmin( icms::$module -> getVar( 'mid' ) ) ) {
            $showimage .= "<img src='" . ICMS_URL . "/modules/" . icms::$module -> getVar( 'dirname' ) . "/images/brokenimg.gif' alt='" . _MD_IMLINKS_ISADMINNOTICE . "' /></a>";
        } else {
            $showimage .= "<img src='" . ICMS_URL . "/modules/" . icms::$module -> getVar( 'dirname' ) . "/images/blank.gif' alt='" . $alttext . "' /></a>";
        } 
    } 
    clearstatcache();
    return $showimage;
} 

function iml_letters() {
    $letterchoice = '<div style="padding: 2px; font-size: smaller;">' . _MD_IMLINKS_BROWSETOTOPIC . '</div>';
    $alphabet = alfabet();
    $num = count( $alphabet ) - 1;
    $counter = 0;
    while ( list( , $ltr ) = each( $alphabet ) ) {
        $letterchoice .= '<a class="letters" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?list=' . $ltr .'">' .$ltr . '</a>';
        if ( $counter == round( $num / 2 ) )
            $letterchoice .= '<br />';
        elseif ( $counter != $num )
            $letterchoice .= '&nbsp;';
        $counter++;
    } 
    return $letterchoice;
}

function iml_isnewimage( $published ) {
    $oneday = ( time() - ( 86400 * 1 ) );
    $threedays = ( time() - ( 86400 * 3 ) );
    $week = ( time() - ( 86400 * 7 ) );
    $path = 'modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon';
    if ( $published > 0 && $published < $week ) {
        $indicator['image'] = "$path/linkload4.png";
        $indicator['alttext'] = _MD_IMLINKS_NEWLAST;
    } elseif ( $published >= $week && $published < $threedays ) {
        $indicator['image'] = "$path/linkload3.png";
        $indicator['alttext'] = _MD_IMLINKS_NEWTHIS;
    } elseif ( $published >= $threedays && $published < $oneday ) {
        $indicator['image'] = "$path/linkload2.png";
        $indicator['alttext'] = _MD_IMLINKS_THREE;
    } elseif ( $published >= $oneday ) {
        $indicator['image'] = "$path/linkload1.png";
        $indicator['alttext'] = _MD_IMLINKS_TODAY;
    } else {
        $indicator['image'] = "$path/linkload.png";
        $indicator['alttext'] = _MD_IMLINKS_NO_FILES;
    } 
    return $indicator;
}  

function iml_strrrchr( $haystack, $needle ) {
    return substr( $haystack, 0, strpos( $haystack, $needle ) + 1 );
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

function iml_getDirSelectOption( $selected, $dirarray, $namearray ) {
    echo "<select size='1' name='workd' onchange='location.href=\"upload.php?rootpath=\"+this.options[this.selectedIndex].value'>";
    echo '<option value="">--------------------------------------</option>';
    foreach( $namearray as $namearray => $workd ) {
        if ( $workd === $selected ) {
            $opt_selected = 'selected';
        } else {
            $opt_selected = '';
        } 
        echo '<option value="' . htmlspecialchars( $namearray, ENT_QUOTES ) . '" $opt_selected>' . $workd . '</option>';
    } 
    echo '</select>';
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

function iml_getforum( $forumid ) {
    echo '<select name="forumid">';
    echo '<option value="0">----------------------</option>';
	if ($forumid < 4) {
		$result = icms::$xoopsDB -> query( 'SELECT forum_name, forum_id FROM ' . icms::$xoopsDB -> prefix( 'bb_forums' ) . ' ORDER BY forum_id' );
	} else {
		$result = icms::$xoopsDB -> query( 'SELECT forum_name, forum_id FROM ' . icms::$xoopsDB -> prefix( 'bbex_forums' ) . ' ORDER BY forum_id' );
	}	
    while ( list( $forum_name, $forum_id ) = icms::$xoopsDB -> fetchRow( $result ) ) {
        if ( $forum_id == $forumid ) {
            $opt_selected = 'selected="selected"';
        } else {
            $opt_selected = '';
        } 
        echo '<option value="' . $forum_id . '" $opt_selected>' . $forum_name . '</option>';
    } 
    echo '</select></div>';
    return $forumid;
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
        $published_status = $imagearray['online'];
    } elseif ( ( $published['expired'] && $published['expired'] < time() )  && $published['offline'] == 0 ) {
        $published_status = $imagearray['expired'];
    } else {
        $published_status = ( $published['published'] == 0 ) ? "<a href='newlinks.php'>" . $imagearray['offline'] . "</a>" : $imagearray['offline'];
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

function iml_cattitle( $catt ) {
  $sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $catt;
  $result = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
  return $result['title'];
}

function iml_linklistfooter() {
    echo '<tr style="text-align: center;">
			<td class="head" colspan="7">' . _AM_IMLINKS_MINDEX_NOLINKSFOUND . '</td>
		  </tr>';
} 

function iml_linklistpagenav( $pubrowamount, $start, $art = 'art', $_this = '', $align = 'left' ) {
    if ( ( $pubrowamount < icms::$module -> config['admin_perpage'] ) ) { return false; }
    $pagenav = new icms_view_PageNav( $pubrowamount, icms::$module -> config['admin_perpage'], $start, 'st' . $art, $_this );
    echo '<div style="float: ' . $align . '; font-size: .9em;">' . $pagenav -> renderNav() . '</div>';
} 

function iml_editorform( $caption, $name, $value ) {
	$isadmin = ( ( is_object( icms::$user ) && !empty( icms::$user ) ) && icms::$user -> isAdmin( icms::$module -> getVar( 'mid' ) ) ) ? true : false;
	if ( $isadmin == true ) {
		$formuser = icms::$module -> config['form_options'];
	} else {
		$formuser = icms::$module -> config['form_optionsuser'];
	}
	switch( $formuser ) {	
	case 'fck':
		$editor = iml_fckeditor( $caption, $name, $value );
		break;
	case 'tinyeditor':
		$editor = iml_tinyeditor( $caption, $name, $value );
		break;
	case 'tinymce' :
		$editor = iml_tinymce( $caption, $name, $value );    
        break;
	}
	return $editor;
}

function iml_fckeditor( $caption, $name, $value ) {
	if ( file_exists( ICMS_ROOT_PATH . '/editors/FCKeditor/formfckeditor.php' ) )	{
		include_once( ICMS_ROOT_PATH . '/editors/FCKeditor/formfckeditor.php' );
		$imlinks_editor = new XoopsFormFckeditor( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '500px' ), true );
	} else {
		$imlinks_editor = new icms_form_elements_Dhtmltextarea( $caption, $name, $value, 35, 60 );
	}
	return $imlinks_editor;
}

function iml_tinyeditor( $caption, $name, $value ) {
	if ( file_exists( ICMS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php' ) ) {
		include_once( ICMS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php' );
		$imlinks_editor = new XoopsFormTinyeditorTextArea( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '500px' ) );
	} else {
		$imlinks_editor = new icms_form_elements_Dhtmltextarea( $caption, $name, $value, 35, 60 );
	}
	return $imlinks_editor;
}	

function iml_tinymce( $caption, $name, $value ) {
	if ( file_exists( ICMS_ROOT_PATH . '/editors/tinymce/formtinymce.php' ) ) {
		include_once( ICMS_ROOT_PATH . '/editors/tinymce/formtinymce.php' );
		$imlinks_editor = new XoopsFormTinymce( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '500px', 0 ) );
	} else {
		$imlinks_editor = new icms_form_elements_Dhtmltextarea( $caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
	}
	return $imlinks_editor;
}

function iml_countryname( $countryn ) {
			icms_loadLanguageFile( icms::$module -> getVar( 'dirname' ), 'countries' );
			$country_array = array (
				''   => _IMLINKS_COUNTRY_UNKNOWN,
				'-'  => _IMLINKS_COUNTRY_UNKNOWN,
				'AD' => _IMLINKS_COUNTRY_AD,
				'AE' => _IMLINKS_COUNTRY_AE,
				'AF' => _IMLINKS_COUNTRY_AF,
				'AG' => _IMLINKS_COUNTRY_AG,
				'AI' => _IMLINKS_COUNTRY_AI,
				'AL' => _IMLINKS_COUNTRY_AL,
				'AM' => _IMLINKS_COUNTRY_AM,
				'AN' => _IMLINKS_COUNTRY_AN,
				'AO' => _IMLINKS_COUNTRY_AO,
				'AQ' => _IMLINKS_COUNTRY_AQ,
				'AR' => _IMLINKS_COUNTRY_AR,
				'AS' => _IMLINKS_COUNTRY_AS,
				'AT' => _IMLINKS_COUNTRY_AT,
				'AU' => _IMLINKS_COUNTRY_AU,
				'AW' => _IMLINKS_COUNTRY_AW,
				'AX' => _IMLINKS_COUNTRY_AX,
				'AZ' => _IMLINKS_COUNTRY_AZ,
				'BA' => _IMLINKS_COUNTRY_BA,
				'BB' => _IMLINKS_COUNTRY_BB,
				'BD' => _IMLINKS_COUNTRY_BD,
				'BE' => _IMLINKS_COUNTRY_BE,
				'BF' => _IMLINKS_COUNTRY_BF,
				'BG' => _IMLINKS_COUNTRY_BG,
				'BH' => _IMLINKS_COUNTRY_BH,
				'BI' => _IMLINKS_COUNTRY_BI,
				'BJ' => _IMLINKS_COUNTRY_BJ,
				'BL' => _IMLINKS_COUNTRY_BL,
				'BM' => _IMLINKS_COUNTRY_BM,
				'BN' => _IMLINKS_COUNTRY_BN,
				'BO' => _IMLINKS_COUNTRY_BO,
				'BQ' => _IMLINKS_COUNTRY_BQ,
				'BR' => _IMLINKS_COUNTRY_BR,
				'BS' => _IMLINKS_COUNTRY_BS,
				'BT' => _IMLINKS_COUNTRY_BT,
				'BV' => _IMLINKS_COUNTRY_BV,
				'BW' => _IMLINKS_COUNTRY_BW,
				'BY' => _IMLINKS_COUNTRY_BY,
				'BZ' => _IMLINKS_COUNTRY_BZ,
				'CA' => _IMLINKS_COUNTRY_CA,
				'CC' => _IMLINKS_COUNTRY_CC,
				'CD' => _IMLINKS_COUNTRY_CD,
				'CF' => _IMLINKS_COUNTRY_CF,
				'CG' => _IMLINKS_COUNTRY_CG,
				'CH' => _IMLINKS_COUNTRY_CH,
				'CI' => _IMLINKS_COUNTRY_CI,
				'CK' => _IMLINKS_COUNTRY_CK,
				'CL' => _IMLINKS_COUNTRY_CL,
				'CM' => _IMLINKS_COUNTRY_CM,
				'CN' => _IMLINKS_COUNTRY_CN,
				'CO' => _IMLINKS_COUNTRY_CO,
				'CR' => _IMLINKS_COUNTRY_CR,
			//	'CS' => _IMLINKS_COUNTRY_CS,	//  Not listed in ISO 3166
				'CU' => _IMLINKS_COUNTRY_CU,
				'CV' => _IMLINKS_COUNTRY_CV,
				'CX' => _IMLINKS_COUNTRY_CX,
				'CY' => _IMLINKS_COUNTRY_CY,
				'CZ' => _IMLINKS_COUNTRY_CZ,
				'DE' => _IMLINKS_COUNTRY_DE,
				'DJ' => _IMLINKS_COUNTRY_DJ,
				'DK' => _IMLINKS_COUNTRY_DK,
				'DM' => _IMLINKS_COUNTRY_DM,
				'DO' => _IMLINKS_COUNTRY_DO,
				'DZ' => _IMLINKS_COUNTRY_DZ,
				'EC' => _IMLINKS_COUNTRY_EC,
				'EE' => _IMLINKS_COUNTRY_EE,
				'EG' => _IMLINKS_COUNTRY_EG,
				'EH' => _IMLINKS_COUNTRY_EH,
				'ER' => _IMLINKS_COUNTRY_ER,
				'ES' => _IMLINKS_COUNTRY_ES,
				'ET' => _IMLINKS_COUNTRY_ET,
				'FI' => _IMLINKS_COUNTRY_FI,
				'FJ' => _IMLINKS_COUNTRY_FJ,
				'FK' => _IMLINKS_COUNTRY_FK,
				'FM' => _IMLINKS_COUNTRY_FM,
				'FO' => _IMLINKS_COUNTRY_FO,
				'FR' => _IMLINKS_COUNTRY_FR,
			//	'FX' => _IMLINKS_COUNTRY_FX,	//  Not listed in ISO 3166
				'GA' => _IMLINKS_COUNTRY_GA,
				'GB' => _IMLINKS_COUNTRY_GB,
				'GD' => _IMLINKS_COUNTRY_GD,
				'GE' => _IMLINKS_COUNTRY_GE,
				'GF' => _IMLINKS_COUNTRY_GF,
				'GG' => _IMLINKS_COUNTRY_GG,
				'GH' => _IMLINKS_COUNTRY_GH,
				'GI' => _IMLINKS_COUNTRY_GI,
				'GL' => _IMLINKS_COUNTRY_GL,
				'GM' => _IMLINKS_COUNTRY_GM,
				'GN' => _IMLINKS_COUNTRY_GN,
				'GP' => _IMLINKS_COUNTRY_GP,
				'GQ' => _IMLINKS_COUNTRY_GQ,
				'GR' => _IMLINKS_COUNTRY_GR,
				'GS' => _IMLINKS_COUNTRY_GS,
				'GT' => _IMLINKS_COUNTRY_GT,
				'GU' => _IMLINKS_COUNTRY_GU,
				'GW' => _IMLINKS_COUNTRY_GW,
				'GY' => _IMLINKS_COUNTRY_GY,
				'HK' => _IMLINKS_COUNTRY_HK,
				'HM' => _IMLINKS_COUNTRY_HM,
				'HN' => _IMLINKS_COUNTRY_HN,
				'HR' => _IMLINKS_COUNTRY_HR,
				'HT' => _IMLINKS_COUNTRY_HT,
				'HU' => _IMLINKS_COUNTRY_HU,
				'ID' => _IMLINKS_COUNTRY_ID,
				'IE' => _IMLINKS_COUNTRY_IE,
				'IL' => _IMLINKS_COUNTRY_IL,
				'IM' => _IMLINKS_COUNTRY_IM,
				'IN' => _IMLINKS_COUNTRY_IN,
				'IO' => _IMLINKS_COUNTRY_IO,
				'IQ' => _IMLINKS_COUNTRY_IQ,
				'IR' => _IMLINKS_COUNTRY_IR,
				'IS' => _IMLINKS_COUNTRY_IS,
				'IT' => _IMLINKS_COUNTRY_IT,
				'JE' => _IMLINKS_COUNTRY_JE,
				'JM' => _IMLINKS_COUNTRY_JM,
				'JO' => _IMLINKS_COUNTRY_JO,
				'JP' => _IMLINKS_COUNTRY_JP,
				'KE' => _IMLINKS_COUNTRY_KE,
				'KG' => _IMLINKS_COUNTRY_KG,
				'KH' => _IMLINKS_COUNTRY_KH,
				'KI' => _IMLINKS_COUNTRY_KI,
				'KM' => _IMLINKS_COUNTRY_KM,
				'KN' => _IMLINKS_COUNTRY_KN,
				'KP' => _IMLINKS_COUNTRY_KP,
				'KR' => _IMLINKS_COUNTRY_KR,
				'KW' => _IMLINKS_COUNTRY_KW,
				'KY' => _IMLINKS_COUNTRY_KY,
				'KZ' => _IMLINKS_COUNTRY_KZ,
				'LA' => _IMLINKS_COUNTRY_LA,
				'LB' => _IMLINKS_COUNTRY_LB,
				'LC' => _IMLINKS_COUNTRY_LC,
				'LI' => _IMLINKS_COUNTRY_LI,
				'LK' => _IMLINKS_COUNTRY_LK,
				'LR' => _IMLINKS_COUNTRY_LR,
				'LS' => _IMLINKS_COUNTRY_LS,
				'LT' => _IMLINKS_COUNTRY_LT,
				'LU' => _IMLINKS_COUNTRY_LU,
				'LV' => _IMLINKS_COUNTRY_LV,
				'LY' => _IMLINKS_COUNTRY_LY,
				'MA' => _IMLINKS_COUNTRY_MA,
				'MC' => _IMLINKS_COUNTRY_MC,
				'MD' => _IMLINKS_COUNTRY_MD,
				'ME' => _IMLINKS_COUNTRY_ME,
				'MF' => _IMLINKS_COUNTRY_MF,
				'MG' => _IMLINKS_COUNTRY_MG,
				'MH' => _IMLINKS_COUNTRY_MH,
				'MK' => _IMLINKS_COUNTRY_MK,
				'ML' => _IMLINKS_COUNTRY_ML,
				'MM' => _IMLINKS_COUNTRY_MM,
				'MN' => _IMLINKS_COUNTRY_MN,
				'MO' => _IMLINKS_COUNTRY_MO,
				'MP' => _IMLINKS_COUNTRY_MP,
				'MQ' => _IMLINKS_COUNTRY_MQ,
				'MR' => _IMLINKS_COUNTRY_MR,
				'MS' => _IMLINKS_COUNTRY_MS,
				'MT' => _IMLINKS_COUNTRY_MT,
				'MU' => _IMLINKS_COUNTRY_MU,
				'MV' => _IMLINKS_COUNTRY_MV,
				'MW' => _IMLINKS_COUNTRY_MW,
				'MX' => _IMLINKS_COUNTRY_MX,
				'MY' => _IMLINKS_COUNTRY_MY,
				'MZ' => _IMLINKS_COUNTRY_MZ,
				'NA' => _IMLINKS_COUNTRY_NA,
				'NC' => _IMLINKS_COUNTRY_NC,
				'NE' => _IMLINKS_COUNTRY_NE,
				'NF' => _IMLINKS_COUNTRY_NF,
				'NG' => _IMLINKS_COUNTRY_NG,
				'NI' => _IMLINKS_COUNTRY_NI,
				'NL' => _IMLINKS_COUNTRY_NL,
				'NO' => _IMLINKS_COUNTRY_NO,
				'NP' => _IMLINKS_COUNTRY_NP,
				'NR' => _IMLINKS_COUNTRY_NR,
			//	'NT' => _IMLINKS_COUNTRY_NT,	//  Not listed in ISO 3166
				'NU' => _IMLINKS_COUNTRY_NU,
				'NZ' => _IMLINKS_COUNTRY_NZ,
				'OM' => _IMLINKS_COUNTRY_OM,
				'PA' => _IMLINKS_COUNTRY_PA,
				'PE' => _IMLINKS_COUNTRY_PE,
				'PF' => _IMLINKS_COUNTRY_PF,
				'PG' => _IMLINKS_COUNTRY_PG,
				'PH' => _IMLINKS_COUNTRY_PH,
				'PK' => _IMLINKS_COUNTRY_PK,
				'PL' => _IMLINKS_COUNTRY_PL,
				'PM' => _IMLINKS_COUNTRY_PM,
				'PN' => _IMLINKS_COUNTRY_PN,
				'PR' => _IMLINKS_COUNTRY_PR,
				'PS' => _IMLINKS_COUNTRY_PS,
				'PT' => _IMLINKS_COUNTRY_PT,
				'PW' => _IMLINKS_COUNTRY_PW,
				'PY' => _IMLINKS_COUNTRY_PY,
				'QA' => _IMLINKS_COUNTRY_QA,
				'RE' => _IMLINKS_COUNTRY_RE,
				'RO' => _IMLINKS_COUNTRY_RO,
				'RS' => _IMLINKS_COUNTRY_RS,
				'RU' => _IMLINKS_COUNTRY_RU,
				'RW' => _IMLINKS_COUNTRY_RW,
				'SA' => _IMLINKS_COUNTRY_SA,
				'SB' => _IMLINKS_COUNTRY_SB,
				'SC' => _IMLINKS_COUNTRY_SC,
				'SD' => _IMLINKS_COUNTRY_SD,
				'SE' => _IMLINKS_COUNTRY_SE,
				'SG' => _IMLINKS_COUNTRY_SG,
				'SH' => _IMLINKS_COUNTRY_SH,
				'SI' => _IMLINKS_COUNTRY_SI,
				'SJ' => _IMLINKS_COUNTRY_SJ,
				'SK' => _IMLINKS_COUNTRY_SK,
				'SL' => _IMLINKS_COUNTRY_SL,
				'SM' => _IMLINKS_COUNTRY_SM,
				'SN' => _IMLINKS_COUNTRY_SN,
				'SO' => _IMLINKS_COUNTRY_SO,
				'SR' => _IMLINKS_COUNTRY_SR,
				'SS' => _IMLINKS_COUNTRY_SS,
				'ST' => _IMLINKS_COUNTRY_ST,
			//	'SU' => _IMLINKS_COUNTRY_SU,	//  Not listed in ISO 3166
				'SV' => _IMLINKS_COUNTRY_SV,
				'SX' => _IMLINKS_COUNTRY_SX,
				'SY' => _IMLINKS_COUNTRY_SY,
				'SZ' => _IMLINKS_COUNTRY_SZ,
				'TC' => _IMLINKS_COUNTRY_TC,
				'TD' => _IMLINKS_COUNTRY_TD,
				'TF' => _IMLINKS_COUNTRY_TF,
				'TG' => _IMLINKS_COUNTRY_TG,
				'TH' => _IMLINKS_COUNTRY_TH,
				'TJ' => _IMLINKS_COUNTRY_TJ,
				'TK' => _IMLINKS_COUNTRY_TK,
				'TL' => _IMLINKS_COUNTRY_TL,
				'TM' => _IMLINKS_COUNTRY_TM,
				'TN' => _IMLINKS_COUNTRY_TN,
				'TO' => _IMLINKS_COUNTRY_TO,
			//	'TP' => _IMLINKS_COUNTRY_TP,	//  Not listed in ISO 3166
				'TR' => _IMLINKS_COUNTRY_TR,
				'TT' => _IMLINKS_COUNTRY_TT,
				'TV' => _IMLINKS_COUNTRY_TV,
				'TW' => _IMLINKS_COUNTRY_TW,
				'TZ' => _IMLINKS_COUNTRY_TZ,
				'UA' => _IMLINKS_COUNTRY_UA,
				'UG' => _IMLINKS_COUNTRY_UG,
				'UK' => _IMLINKS_COUNTRY_UK,	//  Not listed in ISO 3166
				'UM' => _IMLINKS_COUNTRY_UM,
				'US' => _IMLINKS_COUNTRY_US,
				'UY' => _IMLINKS_COUNTRY_UY,
				'UZ' => _IMLINKS_COUNTRY_UZ,
				'VA' => _IMLINKS_COUNTRY_VA,
				'VC' => _IMLINKS_COUNTRY_VC,
				'VE' => _IMLINKS_COUNTRY_VE,
				'VG' => _IMLINKS_COUNTRY_VG,
				'VI' => _IMLINKS_COUNTRY_VI,
				'VN' => _IMLINKS_COUNTRY_VN,
				'VU' => _IMLINKS_COUNTRY_VU,
				'WF' => _IMLINKS_COUNTRY_WF,
				'WS' => _IMLINKS_COUNTRY_WS,
				'YE' => _IMLINKS_COUNTRY_YE,
				'YT' => _IMLINKS_COUNTRY_YT,
			//	'YU' => _IMLINKS_COUNTRY_YU,	//  Not listed in ISO 3166
				'ZA' => _IMLINKS_COUNTRY_ZA,
				'ZM' => _IMLINKS_COUNTRY_ZM,
			//	'ZR' => _IMLINKS_COUNTRY_ZR,	//  Not listed in ISO 3166
				'ZW' => _IMLINKS_COUNTRY_ZW
			);
     return $country_array[$countryn];
}

//    Start functions for Google PageRank
//    Source: http://www.sws-tech.com/scripts/googlepagerank.php
//    This code is released under the public domain
function imlinks_zeroFill( $a, $b ) {
    $z = hexdec( 80000000 );
    //echo $z;
	if ( $z & $a ) {
		$a = ( $a>>1 );
		$a &= ( ~$z );
		$a |= 0x40000000;
		$a = ( $a>>( $b-1 ) );
	} else {
		$a = ( $a>>$b );
	}
	return $a;
}

function imlinks_mix( $a, $b, $c ) {
  $a -= $b; $a -= $c; $a ^= ( imlinks_zeroFill( $c,13 ) );
  $b -= $c; $b -= $a; $b ^= ( $a<<8 );
  $c -= $a; $c -= $b; $c ^= ( imlinks_zeroFill( $b,13 ) );
  $a -= $b; $a -= $c; $a ^= ( imlinks_zeroFill( $c,12 ) );
  $b -= $c; $b -= $a; $b ^= ( $a<<16 );
  $c -= $a; $c -= $b; $c ^= ( imlinks_zeroFill( $b,5 ) );
  $a -= $b; $a -= $c; $a ^= ( imlinks_zeroFill( $c,3 ) );
  $b -= $c; $b -= $a; $b ^= ( $a<<10 );
  $c -= $a; $c -= $b; $c ^= ( imlinks_zeroFill( $b,15 ) );
  return array( $a,$b,$c );
}

function imlinks_GoogleCH( $url, $length=null, $init=0xE6359A60 ) {
    if ( is_null( $length ) ) {
        $length = sizeof( $url );
    }
    $a = $b = 0x9E3779B9;
    $c = $init;
    $k = 0;
    $len = $length;
    while ( $len >= 12 ) {
        $a += ( $url[$k+0] +( $url[$k+1]<<8 ) +( $url[$k+2]<<16 ) +( $url[$k+3]<<24 ) );
        $b += ( $url[$k+4] +( $url[$k+5]<<8 ) +( $url[$k+6]<<16 ) +( $url[$k+7]<<24 ) );
        $c += ( $url[$k+8] +( $url[$k+9]<<8 ) +( $url[$k+10]<<16 )+( $url[$k+11]<<24 ) );
        $mix = imlinks_mix( $a,$b,$c );
        $a = $mix[0]; $b = $mix[1]; $c = $mix[2];
        $k += 12;
        $len -= 12;
    }
    $c += $length;
    switch ( $len ) {             /* all the case statements fall through */
        case 11: $c+=( $url[$k+10]<<24 );
        case 10: $c+=( $url[$k+9]<<16 );
        case 9 : $c+=( $url[$k+8]<<8 );
          /* the first byte of c is reserved for the length */
        case 8 : $b+=( $url[$k+7]<<24 );
        case 7 : $b+=( $url[$k+6]<<16 );
        case 6 : $b+=( $url[$k+5]<<8 );
        case 5 : $b+=( $url[$k+4] );
        case 4 : $a+=( $url[$k+3]<<24 );
        case 3 : $a+=( $url[$k+2]<<16 );
        case 2 : $a+=( $url[$k+1]<<8 );
        case 1 : $a+=( $url[$k+0] );
         /* case 0: nothing left to add */
    }
    $mix = imlinks_mix( $a,$b,$c );
    //echo $mix[0];
    /*-------------------------------------------- report the result */
    return $mix[2];
}
//converts a string into an array of integers containing the numeric value of the char
function imlinks_strord( $string ) {
  for ( $i=0; $i<strlen( $string ); $i++ ) {
    $result[$i] = ord( $string{$i} );
  }
  return $result;
}

function imlinks_pagerank( $url ) {
  $pagerank = '';
  $ch = '6' . imlinks_GoogleCH( imlinks_strord( 'info:' . $url ) );
  $fp = fsockopen( 'www.google.com', 80, $errno, $errstr, 30 );
  if ( !$fp ) {
      echo "$errstr ($errno)<br />\n";
    } else {
      $out = "GET /search?client=navclient-auto&ch=" . $ch .  "&features=Rank&q=info:" . $url . " HTTP/1.1\r\n";
      $out .= "Host: www.google.com\r\n";
      $out .= "Connection: Close\r\n\r\n";
      fwrite( $fp, $out );
      while ( !feof( $fp ) ) {
	$data = fgets( $fp, 128 );
	$pos = strpos( $data, 'Rank_' );
	if( $pos === false ){} else {
	$pagerank = substr( $data, $pos + 9 );
	}
   }
   fclose( $fp );
  }
  return $pagerank;
}
//  End functions for Google PageRank

// Check if Tag module is installed
function iml_tag_module_included() {
  static $iml_tag_module_included;
  if ( !isset( $iml_tag_module_included ) ) {
    $modules_handler = icms::handler( 'icms_module' );
    $tag_mod = $modules_handler -> getByDirName( 'tag' );
    if ( !$tag_mod ) {
      $tag_mod = false;
    } else {
      $iml_tag_module_included = $tag_mod -> getVar( 'isactive' ) == 1;
    }
  }
  return $iml_tag_module_included;
}

// Add item_tag to Tag-module
function iml_tagupdate( $lid, $item_tag ) {
  if ( iml_tag_module_included() ) {
    include_once ICMS_ROOT_PATH . '/modules/tag/include/formtag.php';
    $tag_handler = icms_getModuleHandler( 'tag', 'tag' );
    $tag_handler -> updateByItem( $item_tag, $lid, icms::$module -> getVar( 'dirname' ), 0 );
  }
}

// Check if News module is installed
function iml_news_module_included() {
  static $iml_news_module_included;
  if ( !isset( $iml_news_module_included ) ) {
    $modules_handler = icms::handler( 'icms_module' );
    $news_mod = $modules_handler -> getByDirName( 'news' );
    if ( !$news_mod ) {
      $news_mod = false;
    } else {
      $iml_news_module_included = $news_mod -> getVar( 'isactive' ) == 1;
    }
  }
  return $iml_news_module_included;
}

function iml_getbanner_from_id_banner( $banner_id ) {
###### Hack by www.stefanosilvestrini.com ######
global $icmsConfig;
$db =& Database::getInstance();
$bresult = $db -> query( 'SELECT COUNT(*) FROM ' . $db -> prefix( 'banner' ) . ' WHERE bid=' . $banner_id );
list ( $numrows ) = $db -> fetchRow( $bresult );
if ( $numrows > 1 ) {
    $numrows = $numrows - 1;
    mt_srand( ( double )microtime() * 1000000 );
    $bannum = mt_rand( 0, $numrows );
} else {
    $bannum = 0;
}
if ( $numrows > 0 ) {
  $bresult = $db -> query( 'SELECT * FROM ' . $db -> prefix( 'banner' ). ' WHERE bid=' . $banner_id, 1, $bannum );
  list ( $bid, $cid, $imptotal, $impmade, $clicks, $imageurl, $clickurl, $date, $htmlbanner, $htmlcode ) = $db -> fetchRow( $bresult );
  if ($icmsConfig['my_ip'] == xoops_getenv( 'REMOTE_ADDR' ) ) {
    // EMPTY
    } else {
      $db -> queryF( sprintf( 'UPDATE %s SET impmade = impmade+1 WHERE bid = %u', $db -> prefix( 'banner' ), $bid ) );
  }
  /* Check if this impression is the last one and print the banner */
  if ( $imptotal == $impmade ) {
    $newid = $db -> genId( $db -> prefix( 'bannerfinish' ) . '_bid_seq' );
    $sql = sprintf( 'INSERT INTO %s (bid, cid, impressions, clicks, datestart, dateend) VALUES (%u, %u, %u, %u, %u, %u)', $db -> prefix( 'bannerfinish' ), $newid, $cid, $impmade, $clicks, $date, time() );
    $db -> queryF( $sql );
    $db -> queryF( sprintf( 'DELETE FROM %s WHERE bid = %u', $db -> prefix( 'banner' ), $bid ) );
  }
  if ( $htmlbanner ) {
    $bannerobject = $htmlcode;
    } else {
      $bannerobject = '<div align="center"><a href="' . ICMS_URL . '/banners.php?op=click&bid=' . $bid . '" target="_blank">';
      if ( stristr( $imageurl, '.swf' ) ) {
        $bannerobject = $bannerobject
        . '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="468" height="60">'
        . '<param name="movie" value="' . $imageurl . '"></param>'
        . '<param name="quality" value="high"></param>'
        . '<embed src="' . $imageurl . '" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="468" height="60">'
        . '</embed>'
        .'</object>';
        } else {
          $bannerobject = $bannerobject . '<img src="' . $imageurl . '" alt="" />';
        }
        $bannerobject = $bannerobject . '</a></div>';
      }
    return $bannerobject;
  }
}

function iml_getbanner_from_id_client( $client_id ) {
###### Hack by www.stefanosilvestrini.com ######
global $icmsConfig;
$db =& Database::getInstance();
$bresult = $db -> query( 'SELECT COUNT(*) FROM ' . $db -> prefix('banner') . ' WHERE cid=' . $client_id );
list ( $numrows ) = $db -> fetchRow( $bresult );
if ( $numrows > 1 ) {
  $numrows = $numrows - 1;
  mt_srand( ( double )microtime() * 1000000 );
  $bannum = mt_rand( 0, $numrows );
} else {
  $bannum = 0;
}
if ( $numrows > 0 ) {
$bresult = $db -> query( 'SELECT * FROM ' . $db -> prefix( 'banner' ) . ' WHERE cid=' . $client_id . ' ORDER BY rand()', 1, $bannum );
list ( $bid, $cid, $imptotal, $impmade, $clicks, $imageurl, $clickurl, $date, $htmlbanner, $htmlcode ) = $db -> fetchRow( $bresult );
if ($icmsConfig['my_ip'] == xoops_getenv('REMOTE_ADDR')) {
  // EMPTY
  } else {
    $db -> queryF( sprintf( 'UPDATE %s SET impmade = impmade+1 WHERE bid = %u', $db -> prefix( 'banner' ), $bid ) );
}
/* Check if this impression is the last one and print the banner */
if ( $imptotal == $impmade ) {
  $newid = $db -> genId( $db -> prefix( 'bannerfinish' ) . '_bid_seq' );
  $sql = sprintf( 'INSERT INTO %s (bid, cid, impressions, clicks, datestart, dateend) VALUES (%u, %u, %u, %u, %u, %u)', $db -> prefix( 'bannerfinish' ), $newid, $cid, $impmade, $clicks, $date, time() );
  $db -> queryF( $sql );
  $db -> queryF( sprintf( 'DELETE FROM %s WHERE bid = %u', $db -> prefix( 'banner' ), $bid ) );
}
if ( $htmlbanner ) {
  $bannerobject = $htmlcode;
  } else {
    $bannerobject = '<div align="center"><a href="' . ICMS_URL . '/banners.php?op=click&bid=' . $bid . '" target="_blank">';
    if ( stristr( $imageurl, '.swf' ) ) {
      $bannerobject = $bannerobject
      . '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="468" height="60">'
      . '<param name="movie" value="' . $imageurl . '"></param>'
      . '<param name="quality" value="high"></param>'
      . '<embed src="' . $imageurl . '" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="468" height="60">'
      . '</embed>'
      . '</object>';
      } else {
        $bannerobject = $bannerobject . '<img src="' . $imageurl . '" alt="" />';
    }
    $bannerobject = $bannerobject . '</a></div>';
   }
  return $bannerobject;
  }
}

function iml_emailcnvrt( $email ) {
     $search = array(
         "/\@/",
         "/\./",
         "/\mailto:/"
		);
	 $replace = array(
         " [at] ",
         " [dot] ",
         ""
		);
	$text = preg_replace( $search, $replace, $email );
	return $text;
}

function iml_printemailcnvrt( $email ) {
    $search = array (
				"/\ [at] /",
				"/\ [dot] /"
				);
	 $replace = array (
				"@",
				"."
				);
	$text = preg_replace( $search, $replace, $email );
    return $text;
}

// Check if imGlossary module is installed
function iml_imglossary_module_included() {
  static $imlinks_imglossary_module_included;
  if ( !isset( $imlinks_imglossary_module_included ) ) {
    $modules_handler = icms::handler( 'icms_module' );
    $imglossary_mod = $modules_handler -> getByDirName( icms::$module -> config['imglossarydir'] );
    if ( !$imglossary_mod ) {
      $imglossary_mod = false;
    } else {
      $imlinks_imglossary_module_included = $imglossary_mod -> getVar( 'isactive' ) == 1;
    }
  }
  return $imlinks_imglossary_module_included;
}

function iml_linkterms( $definition, $glossaryterm ) {
	// Code to make links out of glossary terms
		$parts = explode( '¤', $definition );
		// First, retrieve all terms from the glossary...
		$allterms = icms::$xoopsDB -> query( 'SELECT entryID, term FROM ' . icms::$xoopsDB -> prefix( 'imglossary_entries' ) . ' WHERE submit=0 AND offline=0' );
		while ( list( $entryID, $term ) = icms::$xoopsDB -> fetchrow( $allterms ) ) {
			foreach( $parts as $key => $part ) {
				if ( $term != $glossaryterm ) {
					// singular
					$term_q = preg_quote( $term, '/' );
					$search_term = "/\b$term_q\b/i";
					$replace_term = '<span><a style="cursor: help; font-weight: bold;" href="' . ICMS_URL . '/modules/' . icms::$module -> config['imglossarydir'] . '/entry.php?entryID=' . intval( $entryID ) . '">' . $term . '</a></span>';
					$parts[$key] = preg_replace( $search_term, $replace_term, $parts[$key] );

					// plural
					$term = $term . 's';
					$term_q = preg_quote( $term, '/' );
					$search_term = "/\b$term_q\b/i";
					$replace_term = '<span><a style="cursor: help; font-weight: bold;" style="color: #2F5376;" href="' . ICMS_URL . '/modules/' . icms::$module -> config['imglossarydir'] . '/entry.php?entryID=' . intval( $entryID ) . '">' . $term . '</a></span>';
					$parts[$key] = preg_replace( $search_term, $replace_term, $parts[$key] );

					// plural with e
					$term = $term . 'es';
					$term_q = preg_quote( $term, '/' );
					$search_term = "/\b$term_q\b/i";
					$replace_term = '<span><a style="cursor: help; font-weight: bold;" style="color: #2F5376;" href="' . ICMS_URL . '/modules/' . icms::$module -> config['imglossarydir'] . '/entry.php?entryID=' . intval( $entryID ) . '">' . $term . '</a></span>';
					$parts[$key] = preg_replace( $search_term, $replace_term, $parts[$key] );
				}
			}
		}
	$definition = implode( '¤', $parts );
	return $definition;
}

function iml_noindexnofollow() { 
    global $xoopsTpl, $xoTheme; 
    if ( is_object( $xoTheme ) ) { 
        $xoTheme -> addMeta( 'meta', 'robots', 'noindex,nofollow' ); 
    } else { 
        $xoopsTpl -> assign( 'icms_meta_robots', 'noindex,nofollow' ); 
    } 
}

function iml_nicelink( $title, $niceurl ) {
	$title = strtolower( filter_var( str_replace( ' ', '_', iml_charrepl( $title ) ), FILTER_SANITIZE_SPECIAL_CHARS ) );
	$niceurl = strtolower( filter_var( str_replace( ' ', '_', iml_charrepl( $niceurl ) ), FILTER_SANITIZE_SPECIAL_CHARS ) );
	if ( !$niceurl ) {
		$nicelink = filter_var( $title, FILTER_SANITIZE_URL );
	} else {
		$nicelink = filter_var( $niceurl, FILTER_SANITIZE_URL );
	}
	return $nicelink;
}

function iml_niceurl( $lid, $title, $niceurl ) {
	if ( icms::$module -> config['niceurl'] ) {
		$niceurl = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . $lid . '&amp;page=' . iml_nicelink( $title, $niceurl );
	} else {
		$niceurl = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . $lid;
	}
	return $niceurl;
}

function iml_charrepl( $string ) {
    $find = array( 'À','Á','Â','Ã','Ä','Å','Ā','Ă','Ą','Æ','Ç','Ć','Ĉ','Ċ','Č','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ń','Ņ','Ň','Ò','Ó','Ô','Õ','Ö','Œ','Ø','Ŕ','Ŗ','Ř','Ś','Ŝ','Ş','Š','Ù','Ú','Û','Ü','Ũ','Ů','Ű','Ý','Ŷ','Ÿ','à','á','â','ã','ä','å','ā','ă','ą','æ','ç','ć','ĉ','ċ','č','è','é','ê','ë','ì','í','î','ï','ð','ñ','ń','ŉ','ņ','ň','ò','ó','ô','õ','ö','œ','ø','ŕ','ŗ','ř','ś','ŝ','ş','š','ũ','ú','û','ü','ů','ű','ß','ý','ŷ','ÿ' );
	$repl = array( 'A','A','A','A','A','A','A','A','A','AE','C','C','C','C','C','E','E','E','E','I','I','I','I','D','N','N','N','N','O','O','O','O','O','O','O','R','R','R','S','S','S','S','U','U','U','U','U','U','U','Y','Y','Y','a','a','a','a','a','a','a','a','a','ae','c','c','c','c','c','e','e','e','e','i','i','i','i','d','n','n','n','n','n','o','o','o','o','o','o','o','o','r','r','r','s','s','s','s','u','u','u','u','u','u','s','y','y','y' );
	$text1 = str_replace( $find, $repl, $string );
	// Now remove unwanted characters from the title
	$search = array (
         '/\'/',
		 '/\"/',
         '/\$/',
		 '/\£/',
		 '/\¥/',
		 '/\¢/',
		 '/\¤/',
		 '/\%/',
         '/\@/',
		 '/\&/',
		 '/\#/',
		 '/\*/',
		 '/\~/',
		 '/\^/',
		 '/\`/',
		 '/\´/',
		 '/\,/',
		 '/\./',
		 '/\(/',
		 '/\)/',
		 '/\[/',
		 '/\]/',
		 '/\{/',
		 '/\}/',
		 '/\|/',
		 '/\</',
		 '/\>/',
		 '/\?/',
		 '/\!/',
		 '/\//',
		 '/\;/',
		 '/\:/',
		 '/\©/',
		 '/\®/',
		 '/\¼/',
		 '/\½/',
		 '/\¾/',
		 '/\¹/',
		 '/\²/',
		 '/\³/',
		 '/\¿/',
		 '/\×/',
		 '/\¡/',
		 '/\°/',
		 '/\µ/',
		 '/\÷/',
		 '/\+/' );
	$text = preg_replace( $search, '', $text1 );
    return $text;
}

function iml_mozshot( $url ) {
	$mozshot = '<img src="http://mozshot.nemui.org/shot/128x128?' . $url . '" style="vertical-align: middle;" alt="" />';
	return $mozshot;
}

function iml_thumbshot( $url ) {
	$thumbshot = '<img src="http://open.thumbshots.org/image.pxf?url=' . $url . '" width="120" height="90" style="vertical-align: middle;" alt="" />';
	return $thumbshot;
}
?>