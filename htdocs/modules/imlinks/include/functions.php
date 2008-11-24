<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: functions.php
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

if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'ICMS root path not defined' ); }

/**
 * wfs_gethandler()
 * 
 * @param  $name 
 * @param boolean $optional 
 * @return 
 */
function &iml_gethandler( $name, $optional = false ) {
    global $handlers, $xoopsModule;

    $name = strtolower( trim( $name ) );
    if ( !isset( $handlers[$name] ) ) {
        if ( file_exists( $hnd_file = ICMS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/class/class_' . $name . '.php' ) ) {
            require_once $hnd_file;
        } 
        $class = 'iml' . ucfirst( $name ) . 'Handler';
        if ( class_exists( $class ) ) {
            $handlers[$name] = new $class( $GLOBALS['xoopsDB'] );
        } 
    } 
    if ( !isset( $handlers[$name] ) && !$optional ) {
        trigger_error( '<div>Class <b>' . $class . '</b> does not exist.</div>
						<div>Handler Name: ' . $name, E_USER_ERROR ) . '</div>';
    } 
    return isset( $handlers[$name] ) ? $handlers[$name] : false;
} 

function iml_checkgroups( $cid = 0, $permType = 'imLinkCatPerm', $redirect = false ) {

    global $xoopsUser, $xoopsModule;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $xoopsModule -> getVar( 'mid' ) ) ) {
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
    global $xoopsDB;

    $sql = 'SELECT 
		COUNT(rating) AS rate, 
		MIN(rating) AS min_rate, 
		MAX(rating) AS max_rate, 
		AVG(rating) AS avg_rate, 
		COUNT(ratinguser) AS rating_user, 
		MAX(ratinguser) AS max_user, 
		MAX(title) AS max_title, 
		MIN(title) AS min_title, 
		sum(ratinguser = 0) AS null_ratinguser 
		FROM ' . $xoopsDB -> prefix( 'imlinks_votedata' );
    if ( $lid > 0 ) {
        $sql .= ' WHERE lid=' . $lid;
    } 
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        return false;
    } 
    $ret = $xoopsDB -> fetchArray( $result );

    return $ret;
} 

function iml_calcVoteData( $sel_id = 0 ) {
    $ret = array();
    $ret['useravgrating'] = 0;

    $sql = 'SELECT rating FROM ' . $xoopsDB -> prefix( 'imlinks_votedata' );
    if ( $sel_id != 0 ) {
        ' WHERE lid=' . $sel_id;
    } 
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        return false;
    } 
    $ret['uservotes'] = $xoopsDB -> getRowsNum( $result );
    while ( list( $rating ) = $xoopsDB -> fetchRow( $result ) ) {
        $ret['useravgrating'] += intval( $rating );
    } 
    if ( $ret['useravgrating'] > 0 ) {
        $ret['useravgrating'] = number_format( ( $ret['useravgrating'] / $ret['uservotes'] ), 2 );
    } 
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
	global $xoopsModule;
	$toolbar = '<a class="button" href="index.php">' . _MD_IMLINKS_MAIN . '</a> ';
    if ( true == iml_checkgroups( $cid, 'imLinkSubPerm' ) ) {
        $toolbar .= '<a class="button" href="submit.php?cid=' . $cid . '">' . _MD_IMLINKS_SUBMITLINK . '</a> ';
    }
    $toolbar .= '<a class="button" href="newlist.php?newlinkshowdays=7">' . _MD_IMLINKS_LATESTLIST . '</a> ';
	$toolbar .= '<a class="button" href="topten.php?list=hit">' . _MD_IMLINKS_POPULARITY . '</a> ';
	$toolbar .= '<a class="button" href="topten.php?list=rate">' . _MD_IMLINKS_TOPRATEDBUTT . '</a>';
    return $toolbar;
} 

// iml_serverstats()
// @return
function iml_serverstats() {
    echo '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_LINK_IMAGEINFO . '</legend>
		<div style="padding: 8px;">
		<div>' . _AM_IMLINKS_LINK_SPHPINI . '</div>';

    $safemode = ( ini_get( 'safe_mode' ) ) ? _AM_IMLINKS_LINK_ON . _AM_IMLINKS_LINK_SAFEMODEPROBLEMS : _AM_IMLINKS_LINK_OFF;
    $registerglobals = ( ini_get( 'register_globals' ) == '' ) ? _AM_IMLINKS_LINK_OFF : _AM_IMLINKS_LINK_ON;
    $links = ( ini_get( 'file_uploads' ) ) ? _AM_IMLINKS_LINK_ON : _AM_IMLINKS_LINK_OFF;

    $gdlib = ( function_exists( 'gd_info' ) ) ? _AM_IMLINKS_LINK_GDON : _AM_IMLINKS_LINK_GDOFF;
    echo '<li>' . _AM_IMLINKS_LINK_GDLIBSTATUS . $gdlib;
    if ( function_exists( 'gd_info' ) ) {
        if ( true == $gdlib = gd_info() ) {
            echo '<li>' . _AM_IMLINKS_LINK_GDLIBVERSION . '<b>' . $gdlib['GD Version'] . '</b>';
        } 
    } 
    echo '<br /><br />';
    echo '<li>' . _AM_IMLINKS_LINK_SAFEMODESTATUS . $safemode;
    echo '<li>' . _AM_IMLINKS_LINK_REGISTERGLOBALS . $registerglobals;
    echo '<li>' . _AM_IMLINKS_LINK_SERVERUPLOADSTATUS . $links;
    echo '</div>';
    echo '</fieldset><br />';
} 

// displayicons()
// @param  $time
// @param integer $status
// @param integer $counter
// @return
function iml_displayicons( $time, $status = 0, $counter = 0 ) {
    global $xoopsModuleConfig, $xoopsModule;

    $new = '';
    $pop = '';

    $newdate = ( time() - ( 86400 * intval( $xoopsModuleConfig['daysnew'] ) ) );
    $popdate = ( time() - ( 86400 * intval( $xoopsModuleConfig['daysupdated'] ) ) ) ;

    if ( $xoopsModuleConfig['displayicons'] != 3 ) {
        if ( $newdate < $time ) {
            if ( intval( $status ) > 1 ) {
                if ( $xoopsModuleConfig['displayicons'] == 1 )
                    $new = '&nbsp;<img src="' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/update.png" alt="" align="top" />';
                if ( $xoopsModuleConfig['displayicons'] == 2 )
                    $new = '<i>' . _MD_IMLINKS_UPDATED . '</i>';
            } else {
                if ( $xoopsModuleConfig['displayicons'] == 1 )
                    $new = '&nbsp;<img src="' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/new.png" alt="" align="top" />';
                if ( $xoopsModuleConfig['displayicons'] == 2 )
                    $new = '<i>' . _MD_IMLINKS_NEW . '</i>';
            }
        } 
        if ( $popdate > $time ) {
            if ( $counter >= $xoopsModuleConfig['popular'] ) {
                if ( $xoopsModuleConfig['displayicons'] == 1 )
                    $pop = '&nbsp;<img src ="' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/popular.png" alt="" align="top" />';
                if ( $xoopsModuleConfig['displayicons'] == 2 )
                    $pop = '<i>' . _MD_IMLINKS_POPULAR2 . '</i>';
            } 
        } 
    } 
    $icons = $new . ' ' . $pop;
    return $icons;
} 

if ( !function_exists( 'iml_convertorderbyin' ) ) {
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
} 
if ( !function_exists( 'iml_convertorderbytrans' ) ) {
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
} 
if ( !function_exists( 'iml_convertorderbyout' ) ) {
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
} 

// updaterating()
// @param  $sel_id
// @return updates rating data in itemtable for a given item
function iml_updaterating( $sel_id ) {
    global $xoopsDB;
    $query = 'SELECT rating FROM ' . $xoopsDB -> prefix( 'imlinks_votedata' ) . ' WHERE lid=' . $sel_id;
    $voteresult = $xoopsDB -> query( $query );
    $votesDB = $xoopsDB -> getRowsNum( $voteresult );
    $totalrating = 0;
    while ( list( $rating ) = $xoopsDB -> fetchRow( $voteresult ) ) {
        $totalrating += $rating;
    } 
    $finalrating = $totalrating / $votesDB;
    $finalrating = number_format( $finalrating, 4 );
    $sql = sprintf( 'UPDATE %s SET rating = %u, votes = %u WHERE lid = %u', $xoopsDB -> prefix( 'imlinks_links' ), $finalrating, $votesDB, $sel_id );
    $xoopsDB -> query( $sql );
} 

// totalcategory()
// @param integer $pid
// @return
function iml_totalcategory( $pid = 0 ) {
    global $xoopsDB;

    $sql = 'SELECT cid FROM ' . $xoopsDB -> prefix( 'imlinks_cat' );
    if ( $pid > 0 ) {
        $sql .= ' WHERE pid=0';
    } 
    $result = $xoopsDB -> query( $sql );
    $catlisting = 0;
    while ( list( $cid ) = $xoopsDB -> fetchRow( $result ) ) {
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
   global $xoopsDB, $mytree, $_check_array;

    if ( $sel_id > 0 ) {
        $sql = 'SELECT a.lid, a.cid, a.published FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN '
         . $xoopsDB -> prefix( 'imlinks_altcat' ) . ' b '
         . 'ON b.lid=a.lid '
         . 'WHERE a.published > 0 AND a.published <= ' . time()
         . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND offline = 0 '
         . ' AND (b.cid=a.cid OR (a.cid=' . $sel_id . ' OR b.cid=' . $sel_id . ')) '
		 . ' GROUP BY a.lid, a.cid, a.published';
    } else {
        $sql = 'SELECT lid, cid, published FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE offline = 0 AND published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ')';
    } 
    if ( $return_sql == 1 ) {
        return $sql;
    } 

    $count = 0;
    $published_date = 0;

    $arr = array();
    $result = $xoopsDB -> query( $sql );
    while ( list( $lid, $cid, $published ) = $xoopsDB -> fetchRow( $result ) ) {
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
            $query2 = 'SELECT a.lid, a.published, a.cid FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN '
             . $xoopsDB -> prefix( 'imlinks_altcat' ) . ' b '
             . 'ON b.lid=a.lid '
             . 'WHERE a.published > 0 AND a.published <= ' . time()
             . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND offline = 0 '
             . ' AND (b.cid=a.cid OR (a.cid=' . $arr[$i] . ' OR b.cid=' . $arr[$i] . ')) GROUP BY a.lid, a.published, a.cid';

            $result2 = $xoopsDB -> query( $query2 );
            while ( list( $lid, $published ) = $xoopsDB -> fetchRow( $result2 ) ) {
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
    global $xoopsDB, $xoopsModuleConfig;

    if ( $indeximage == '' ) {
        $result = $xoopsDB -> query( 'SELECT indeximage, indexheading FROM ' . $xoopsDB -> prefix( 'imlinks_indexpage' ) );
        list( $indeximage, $indexheading ) = $xoopsDB -> fetchrow( $result );
    } 

    $image = '';
    if ( !empty( $indeximage ) ) {
        $image = iml_displayimage( $indeximage, 'index.php', $xoopsModuleConfig['mainimagedir'], $indexheading );
    } 
    return $image;
} 

function iml_displayimage( $image = '', $path = '', $imgsource = '', $alttext = '' ) {
    global $xoopsConfig, $xoopsUser, $xoopsModule;

    $showimage = '';
    // Check to see if link is given
    if ( $path ) {
        $showimage = '<a href=' . $path . '>';
    } 

    // checks to see if the file is valid else displays default blank image
    if ( !is_dir( ICMS_ROOT_PATH . "/{$imgsource}/{$image}" ) && file_exists( ICMS_ROOT_PATH . "/{$imgsource}/{$image}" ) ) {
        $showimage .= "<img src='" . ICMS_URL . "/{$imgsource}/{$image}' border='0' alt='" . $alttext . "' /></a>";
    } else {
        if ( $xoopsUser && $xoopsUser -> isAdmin( $xoopsModule -> getVar( 'mid' ) ) ) {
            $showimage .= "<img src='" . ICMS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/brokenimg.gif' alt='" . _MD_IMLINKS_ISADMINNOTICE . "' /></a>";
        } else {
            $showimage .= "<img src='" . ICMS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/blank.gif' alt='" . $alttext . "' /></a>";
        } 
    } 
    clearstatcache();
    return $showimage;
} 

function iml_letters() {
    global $xoopsModule;
//	$style = 'style="margin-bottom: 8px; margin-top: 8px; padding-right: 0.5em; padding-left: 0.5em; padding-bottom: 1px; padding-top: 1px; background-image: url(' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/backgnd.png); background-position: center center; background-repeat: repeat-x; color: #444; font-size: smaller; font-weight: bold; cursor: pointer; border: outset 1px #ccc;"';
    $letterchoice = '<div style="padding: 2px;">' . _MD_IMLINKS_BROWSETOTOPIC . '</div>';
 //   $letterchoice .= '';
    $alphabet = array ( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z' );
    $num = count( $alphabet ) - 1;
    $counter = 0;
    while ( list( , $ltr ) = each( $alphabet ) ) {
        $letterchoice .= '<a class="letters" href="' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?list='.$ltr.'">'.$ltr.'</a>';
        if ( $counter == round( $num / 2 ) )
            $letterchoice .= '<div style="height: 4px;"></div>';
        elseif ( $counter != $num )
            $letterchoice .= '&nbsp;';
        $counter++;
    } 
    $letterchoice .= '';
    return $letterchoice;
} 

function iml_isnewimage( $published ) {
    global $xoopsModule;

    $oneday = ( time() - ( 86400 * 1 ) );
    $threedays = ( time() - ( 86400 * 3 ) );
    $week = ( time() - ( 86400 * 7 ) );

    $path = 'modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon';

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
    global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;
	
	$xoopsModule -> displayAdminMenu( $currentoption, $xoopsModule -> name() . ' | ' . $header );

    // ###### Output warn messages for security ######
    if ( is_dir( ICMS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update/' ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL1, ICMS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update/' ) );
        echo '<br />';
    } 

    $_file = ICMS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update.php';
    if ( file_exists( $_file ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL2, ICMS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update.php' ) );
        echo '<br />';
    }

    $path1 = ICMS_ROOT_PATH . '/' . $xoopsModuleConfig['mainimagedir'];
    if ( !is_dir( $path1 ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path1 ) );
        echo '<br />';
    }
    if ( !is_writable( $path1 ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path1 ) );
        echo '<br />';
    }

    $path1_t = ICMS_ROOT_PATH . '/' . $xoopsModuleConfig['mainimagedir'] . '/thumbs';
    if ( !is_dir( $path1_t ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path1_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path1_t ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path1_t ) );
        echo '<br />';
    }

    $path2 = ICMS_ROOT_PATH . '/' . $xoopsModuleConfig['screenshots'];
    if ( !is_dir( $path2 ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path2 ) );
        echo '<br />';
    }
    if ( !is_writable( $path2 ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path2 ) );
        echo '<br />';
    }

    $path2_t = ICMS_ROOT_PATH . '/' . $xoopsModuleConfig['screenshots'] . '/thumbs';
    if ( !is_dir( $path2_t ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path2_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path2_t ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path2_t ) );
        echo '<br />';
    }

    $path3 = ICMS_ROOT_PATH . '/' . $xoopsModuleConfig['catimage'];
    if ( !is_dir( $path3 ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path3 ) );
        echo '<br />';
    }
    if ( !is_writable( $path3 ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path3 ) );
        echo '<br />';
    }

    $path3_t = ICMS_ROOT_PATH . '/' . $xoopsModuleConfig['catimage'] . '/thumbs';
    if ( !is_dir( $path3_t ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL3, $path3_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path3_t ) ) {
        xoops_error( sprintf( _AM_IMLINKS_WARNINSTALL4, $path3_t ) );
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
    global $_FILES, $xoopsConfig, $xoopsModuleConfig, $xoopsModule;

    $down = array();
    include_once ICMS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/class/uploader.php';
    if ( empty( $allowed_mimetypes ) ) {
        $allowed_mimetypes = iml_retmime( $_FILES['userfile']['name'], $usertype );
    } 
    $upload_dir = ICMS_ROOT_PATH . '/' . $uploaddir . '/';

    $maxfilesize = $xoopsModuleConfig['maxfilesize'];
    $maxfilewidth = $xoopsModuleConfig['maximgwidth'];
    $maxfileheight = $xoopsModuleConfig['maximgheight'];

    $uploader = new XoopsMediaUploader( $upload_dir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight );
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
                    $down['url'] = ICMS_URL . '/' . $uploaddir . '/' . strtolower( $uploader -> savedFileName );
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
    global $xoopsDB, $xoopsConfig;

    echo '<select name="forumid">';
    echo '<option value="0">----------------------</option>';
	if ($forumid < 4) {
		$result = $xoopsDB -> query( 'SELECT forum_name, forum_id FROM ' . $xoopsDB -> prefix( 'bb_forums' ) . ' ORDER BY forum_id' );
	} else {
		$result = $xoopsDB -> query( 'SELECT forum_name, forum_id FROM ' . $xoopsDB -> prefix( 'bbex_forums' ) . ' ORDER BY forum_id' );
	}	
    while ( list( $forum_name, $forum_id ) = $xoopsDB -> fetchRow( $result ) ) {
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
    echo '
		<h4 style="font-weight: bold; color: #0A3760;">' . $heading . '</h4>
		<table width="100%" cellspacing="1" class="outer" style="font-size: smaller;" summary>
		  <tr>
		    <th style="text-align: center;">' . _AM_IMLINKS_MINDEX_ID . '</th>
		    <th style="text-align: left;"><b>' . _AM_IMLINKS_MINDEX_TITLE . '</th>
		    <th style="text-align: left;"><b>' . _AM_IMLINKS_CATTITLE . '</th>
		    <th style="text-align: center;">' . _AM_IMLINKS_MINDEX_POSTER . '</th>
		    <th style="text-align: center;">' . _AM_IMLINKS_MINDEX_PUBLISH . '</th>
		    <th style="text-align: center;">' . _AM_IMLINKS_MINDEX_EXPIRE . '</th>
		    <th style="text-align: center;">' . _AM_IMLINKS_MINDEX_ONLINE . '</th>
		    <th style="text-align: center;">' . _AM_IMLINKS_MINDEX_ACTION . '</th>
		  </tr>
		';
} 

function iml_linklistbody( $published ) {
    global $immyts, $imagearray, $xoopsModuleConfig, $xoopsModule;

    $lid = $published['lid'];
    $cid = $published['cid'];
    
    $title = '<a href="../singlelink.php?cid=' . $published['cid'] . '&amp;lid=' . $published['lid'] . '">' . $immyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . '</a>';
    $maintitle = urlencode( $immyts -> htmlSpecialChars( trim( $published['title'] ) ) );
    $cattitle = '<a href="../viewcat.php?cid=' . $published['cid'] . '">' . iml_cattitle( $published['cid'] ) . '</a>';
    $submitter = icms_getLinkedUnameFromId( $published['submitter'] );
    $hwhoisurl = str_replace( 'http://', '', $published['url']);
    $submitted = formatTimestamp( $published['date'], $xoopsModuleConfig['dateformat'] );

    $publish = ( $published['published'] > 0 ) ? formatTimestamp( $published['published'], $xoopsModuleConfig['dateformatadmin'] ): 'Not Published';
    $expires = $published['expired'] ? formatTimestamp( $published['expired'], $xoopsModuleConfig['dateformatadmin'] ): _AM_IMLINKS_MINDEX_NOTSET;
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
    $icon .= '<a href="altcat.php?op=main&amp;cid="' . $cid . '&amp;lid=' . $lid . '&amp;title=' . $immyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . '" title="' . _AM_IMLINKS_ALTCAT_CREATEF . '">' . $imagearray['altcat'] . '</a>&nbsp;';
    $icon .= '<a href="http://whois.domaintools.com/' . $hwhoisurl . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/domaintools.png" alt="WHOIS" title="WHOIS" align="absmiddle"/></a>';

    echo '
		<tr style="text-align: center;">
		<td class="head"><small>' . $lid . '</small></td>
		<td class="even" style="text-align: left;"><small>' . $title . '</small></td>
		<td class="even" style="text-align: left;"><small>' . $cattitle . '</small></td>
		<td class="even"><small>' . $submitter . '</small></td>
		<td class="even"><small>' . $publish . '</small></td>
		<td class="even"><small>' . $expires . '</small></td>
		<td class="even">' . $published_status . '</td>
		<td class="even" style="text-align: center; width: 6%; white-space: nowrap;">' . $icon . '</td>
		</tr>
		';
    unset( $published );
} 

function iml_cattitle($catt) {
  global $xoopsDB;
  $sql = 'SELECT title FROM ' . $xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $catt;
         $result = $xoopsDB -> query( $sql );
         $result = $xoopsDB -> fetchArray( $result );
         return $result['title'];
}

function iml_linklistfooter() {
    echo '<tr style="text-align: center;"><td class="head" colspan="7">' . _AM_IMLINKS_MINDEX_NOLINKSFOUND . '</td></tr>';
} 

function iml_linklistpagenav( $pubrowamount, $start, $art = "art", $_this = '' ) {
    global $xoopsModuleConfig;
    echo '</table>';
    if ( ( $pubrowamount < $xoopsModuleConfig['admin_perpage'] ) ) {
        return false;
    } 
    // Display Page Nav if published is > total display pages amount.
    include_once ICMS_ROOT_PATH . '/class/pagenav.php';

    $pagenav = new XoopsPageNav( $pubrowamount, $xoopsModuleConfig['admin_perpage'], $start, 'st' . $art, $_this );
    echo '<div align="right" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
} 

function iml_linklistpagenavleft( $pubrowamount, $start, $art = 'art', $_this = '' ) {
    global $xoopsModuleConfig;

    if ( ( $pubrowamount < $xoopsModuleConfig['admin_perpage'] ) ) {
        return false;
    }
    // Display Page Nav if published is > total display pages amount.
    include_once ICMS_ROOT_PATH . '/class/pagenav.php';
    $pagenav = new XoopsPageNav( $pubrowamount, $xoopsModuleConfig['admin_perpage'], $start, 'st' . $art, $_this );
    echo '<div align="left" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
}

 // Retreive an editor according to the module's option "form_options"
function iml_getWysiwygForm( $caption, $name, $value ) {
	
	global $xoopsModuleConfig, $xoopsUser, $xoopsModule;

	$editor = false;
	$editor_configs = array();
	$editor_configs['caption'] = $caption;
	$editor_configs['name'] = $name;
	$editor_configs['value'] = $value;
	$editor_configs['rows'] = 35;
	$editor_configs['cols'] = 60;
	$editor_configs['width'] = '100%';
	$editor_configs['height'] = '500px';

	$isadmin = ( ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) && $xoopsUser -> isAdmin( $xoopsModule -> mid() ) ) ? true : false;
        if ( $isadmin == true ) {
          $formuser = $xoopsModuleConfig['form_options'];
        } else {
          $formuser = $xoopsModuleConfig['form_optionsuser'];
        }

	switch($formuser) {
	case 'dhtml':
		if ( is_readable( ICMS_ROOT_PATH . '/editors/dhtmltextarea/dhtmltextarea.php' ) )	{
			include_once( ICMS_ROOT_PATH . '/editors/dhtmltextarea/dhtmltextarea.php' );
			$editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
		} else {
			$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
		}
		break;

	case 'dhtmlext':
		if ( is_readable( ICMS_ROOT_PATH . '/class/xoopseditor/dhtmlext/dhtmlext.php' ) )	{
			include_once( ICMS_ROOT_PATH . '/class/xoopseditor/dhtmlext/dhtmlext.php' );
			$editor = new XoopsFormDhtmlTextAreaExtended( $caption, $name, $value, 10, 50 );
		} else {
			$editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
		}
		break;

	case 'textarea':
		$editor = new XoopsFormTextArea( $caption, $name, $value );
		break;
		
	case 'fck':
		if ( is_readable( ICMS_ROOT_PATH . '/class/xoopseditor/fckeditor/formfckeditor.php' ) )	{
			include_once( ICMS_ROOT_PATH . '/class/xoopseditor/fckeditor/formfckeditor.php' );
			$editor = new XoopsFormFckeditor( $editor_configs,true );
		} else {
			$editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
		}
		break;

	case 'koivi':
		if ( is_readable( ICMS_ROOT_PATH . '/class/xoopseditor/koivi/formwysiwygtextarea.php' ) ) {
			include_once( ICMS_ROOT_PATH . '/class/xoopseditor/koivi/formwysiwygtextarea.php' );
			$editor = new XoopsFormWysiwygTextArea( $caption, $name, $value, '100%', '500px' );
		} else {
			$editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
		}
		break;

	case 'tinyeditor':
		if ( is_readable( ICMS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php' ) ) {
			include_once( ICMS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php' );
			$editor = new XoopsFormTinyeditorTextArea( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => $editor_configs['width'], 'height' => $editor_configs['height'] ) );
		} else {
			$editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
		}
		break;

	case 'tinymce' :
        if ( is_readable( ICMS_ROOT_PATH . '/editors/tinymce/formtinymce.php' ) ) {
			include_once( ICMS_ROOT_PATH . '/editors/tinymce/formtinymce.php' );
			$editor = new XoopsFormTinymce( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => $editor_configs['width'], 'height' => $editor_configs['height'], 0 ) );
		} else {
			$editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
        }
        break;
	}
	return $editor;
}

function iml_countryname( $countryn ) {
     $country_array = array (   
				""   => "Unknown",
				"-"  => "Unknown",                
				"AD" => "Andorra",
				"AE" => "United Arab Emirates",
				"AF" => "Afghanistan",
				"AG" => "Antigua and Barbuda",
				"AI" => "Anguilla",
				"AL" => "Albania",
				"AM" => "Armenia",
				"AN" => "Netherlands Antilles",
				"AO" => "Angola",
				"AQ" => "Antarctica",
				"AR" => "Argentina",
				"AS" => "American Samoa",
				"AT" => "Austria",
				"AU" => "Australia",
				"AW" => "Aruba",
				"AX" => "Åland Islands",   // Added
				"AZ" => "Azerbaijan",
				"BA" => "Bosnia and Herzegovina",
				"BB" => "Barbados",
				"BD" => "Bangladesh",
				"BE" => "Belgium",
				"BF" => "Burkina Faso",
				"BG" => "Bulgaria",
				"BH" => "Bahrain",
				"BI" => "Burundi",
				"BJ" => "Benin",
				"BL" => "Saint Barthélemy",   // Added
				"BM" => "Bermuda",
				"BN" => "Brunei Darussalam",
				"BO" => "Bolivia",
				"BR" => "Brazil",
				"BS" => "Bahamas",
				"BT" => "Bhutan",
				"BV" => "Bouvet Island",
				"BW" => "Botswana",
				"BY" => "Belarus",
				"BZ" => "Belize",
				"CA" => "Canada",
				"CC" => "Cocos (Keeling) Islands",
				"CD" => "Congo (Dem. Rep.)",   // Added
				"CF" => "Central African Republic",
				"CG" => "Congo",
				"CH" => "Switzerland",
				"CI" => "Cote D'Ivoire", // Removed: (Ivory Coast)
				"CK" => "Cook Islands",
				"CL" => "Chile",
				"CM" => "Cameroon",
				"CN" => "China",
				"CO" => "Colombia",
				"CR" => "Costa Rica",
				"CS" => "Czechoslovakia (former)",   // Not listed anymore
				"CU" => "Cuba",
				"CV" => "Cape Verde",
				"CX" => "Christmas Island",
				"CY" => "Cyprus",
				"CZ" => "Czech Republic",
				"DE" => "Germany",
				"DJ" => "Djibouti",
				"DK" => "Denmark",
				"DM" => "Dominica",
				"DO" => "Dominican Republic",
				"DZ" => "Algeria",
				"EC" => "Ecuador",
				"EE" => "Estonia",
				"EG" => "Egypt",
				"EH" => "Western Sahara",
				"ER" => "Eritrea",
				"ES" => "Spain",
				"EU" => "Europe",
				"ET" => "Ethiopia",
				"FI" => "Finland",
				"FJ" => "Fiji",
				"FK" => "Falkland Islands (Malvinas)",
				"FM" => "Micronesia",
				"FO" => "Faroe Islands",
				"FR" => "France",
				"FX" => "France, Metropolitan",   // Not listed anymore
				"GA" => "Gabon",
				"GB" => "Great Britain",     // Name was: Great Britain (UK)
				"GD" => "Grenada",
				"GE" => "Georgia",
				"GF" => "French Guiana",
				"GG" => "Guernsey",   // Added
				"GH" => "Ghana",
				"GI" => "Gibraltar",
				"GL" => "Greenland",
				"GM" => "Gambia",
				"GN" => "Guinea",
				"GP" => "Guadeloupe",
				"GQ" => "Equatorial Guinea",
				"GR" => "Greece",
				"GS" => "S. Georgia and S. Sandwich Isls.",
				"GT" => "Guatemala",
				"GU" => "Guam",
				"GW" => "Guinea-Bissau",
				"GY" => "Guyana",
				"HK" => "Hong Kong",
				"HM" => "Heard and McDonald Islands",
				"HN" => "Honduras",
				"HR" => "Croatia",
				"HT" => "Haiti",
				"HU" => "Hungary",
				"ID" => "Indonesia",
				"IE" => "Ireland",
				"IL" => "Israel",
				"IM" => "Isle of Man",    //  Added
				"IN" => "India",
				"IO" => "British Indian Ocean Territory",
				"IQ" => "Iraq",
				"IR" => "Iran",   //  Changed name
				"IS" => "Iceland",
				"IT" => "Italy",
				"JE" => "Jersey",
				"JM" => "Jamaica",
				"JO" => "Jordan",
				"JP" => "Japan",
				"KE" => "Kenya",
				"KG" => "Kyrgyzstan",
				"KH" => "Cambodia",
				"KI" => "Kiribati",
				"KM" => "Comoros",
				"KN" => "Saint Kitts and Nevis",
				"KP" => "Korea (North)",    // Official name: Korea, Democratic People's Republic of
				"KR" => "Korea (South)",    // Official name: Korea, Republic of
				"KW" => "Kuwait",
				"KY" => "Cayman Islands",
				"KZ" => "Kazakhstan",
				"LA" => "Laos",             // Official name: Lao People's Democratic Republic
				"LB" => "Lebanon",
				"LC" => "Saint Lucia",
				"LI" => "Liechtenstein",
				"LK" => "Sri Lanka",
				"LR" => "Liberia",
				"LS" => "Lesotho",
				"LT" => "Lithuania",
				"LU" => "Luxembourg",
				"LV" => "Latvia",
				"LY" => "Libya",            // Official name: Libyan Arab Jamahiriya
				"MA" => "Morocco",
				"MC" => "Monaco",
				"MD" => "Moldova",          // Official name: Moldova, Republic of
				"ME" => "Montenegro",       // Added
				"MF" => "Saint Martin",     // Added
				"MG" => "Madagascar",
				"MH" => "Marshall Islands",
				"MK" => "Macedonia",        // Official name: Macedonia, The Former Yugoslav Republic of
				"ML" => "Mali",
				"MM" => "Myanmar",
				"MN" => "Mongolia",
				"MO" => "Macao",            // Corrected name
				"MP" => "Northern Mariana Islands",
				"MQ" => "Martinique",
				"MR" => "Mauritania",
				"MS" => "Montserrat",
				"MT" => "Malta",
				"MU" => "Mauritius",
				"MV" => "Maldives",
				"MW" => "Malawi",
				"MX" => "Mexico",
				"MY" => "Malaysia",
				"MZ" => "Mozambique",
				"NA" => "Namibia",
				"NC" => "New Caledonia",
				"NE" => "Niger",
				"NF" => "Norfolk Island",
				"NG" => "Nigeria",
				"NI" => "Nicaragua",
				"NL" => "Netherlands",
				"NO" => "Norway",
				"NP" => "Nepal",
				"NR" => "Nauru",
				"NT" => "Neutral Zone",
				"NU" => "Niue",
				"NZ" => "New Zealand",
				"OM" => "Oman",
				"PA" => "Panama",
				"PE" => "Peru",
				"PF" => "French Polynesia",
				"PG" => "Papua New Guinea",
				"PH" => "Philippines",
				"PK" => "Pakistan",
				"PL" => "Poland",
				"PM" => "St. Pierre and Miquelon",
				"PN" => "Pitcairn",
				"PR" => "Puerto Rico",
				"PS" => "Palestinian Territory, Occupied",   // Added
				"PT" => "Portugal",
				"PW" => "Palau",
				"PY" => "Paraguay",
				"QA" => "Qatar",
				"RE" => "Reunion",
				"RO" => "Romania",
				"RS" => "Serbia",     // Added
				"RU" => "Russian Federation",
				"RW" => "Rwanda",
				"SA" => "Saudi Arabia",
				"SB" => "Solomon Islands",
				"SC" => "Seychelles",
				"SD" => "Sudan",
				"SE" => "Sweden",
				"SG" => "Singapore",
				"SH" => "St. Helena",
				"SI" => "Slovenia",
				"SJ" => "Svalbard and Jan Mayen Islands",
				"SK" => "Slovakia",              // Changed name, was: Slovak Republic
				"SL" => "Sierra Leone",
				"SM" => "San Marino",
				"SN" => "Senegal",
				"SO" => "Somalia",
				"SR" => "Suriname",
				"ST" => "Sao Tome and Principe",
				"SU" => "USSR (former)",          // Removed from ISO list, doesn' exsist anymore
				"SV" => "El Salvador",
				"SY" => "Syrian Arab Republic",   // Changed name, was: Syria
				"SZ" => "Swaziland",
				"TC" => "Turks and Caicos Islands",
				"TD" => "Chad",
				"TF" => "French Southern Territories",
				"TG" => "Togo",
				"TH" => "Thailand",
				"TJ" => "Tajikistan",
				"TK" => "Tokelau",
				"TL" => "Timor-Leste",    // Added
				"TM" => "Turkmenistan",
				"TN" => "Tunisia",
				"TO" => "Tonga",
				"TP" => "East Timor",             // Removed from ISO list, doesn' exsist anymore
				"TR" => "Turkey",
				"TT" => "Trinidad and Tobago",
				"TV" => "Tuvalu",
				"TW" => "Taiwan",         // Official name acc. to iso-list: Taiwan, Province of China
				"TZ" => "Tanzania",
				"UA" => "Ukraine",
				"UG" => "Uganda",
				"UK" => "United Kingdom",      // Doesn't exsist in iso-list ?
				"UM" => "US Minor Outlying Islands",
				"US" => "United States",
				"UY" => "Uruguay",
				"UZ" => "Uzbekistan",
				"VA" => "Vatican City State",	
				"VC" => "Saint Vincent and the Grenadines",
				"VE" => "Venezuela",
				"VG" => "Virgin Islands, British",
				"VI" => "Virgin Islands, U.S.",
				"VN" => "Viet Nam",
				"VU" => "Vanuatu",
				"WF" => "Wallis and Futuna Islands",
				"WS" => "Samoa",
				"YE" => "Yemen",
				"YT" => "Mayotte",
				"YU" => "Yugoslavia",        // Removed from iso list
				"ZA" => "South Africa",
				"ZM" => "Zambia",
 				"ZR" => "Zaire",             // Removed from iso list
				"ZW" => "Zimbabwe"
                              );
     return $country_array[$countryn];
}

//    Start functions for Google PageRank
//    Source: http://www.sws-tech.com/scripts/googlepagerank.php
//    This code is released under the public domain
function zeroFill($a, $b) {
    $z = hexdec(80000000);
    //echo $z;
        if ($z & $a) {
            $a = ($a>>1);
            $a &= (~$z);
            $a |= 0x40000000;
            $a = ($a>>($b-1));
        } else {
            $a = ($a>>$b);
        }
        return $a;
}

function mix($a,$b,$c) {
  $a -= $b; $a -= $c; $a ^= (zeroFill($c,13));
  $b -= $c; $b -= $a; $b ^= ($a<<8);
  $c -= $a; $c -= $b; $c ^= (zeroFill($b,13));
  $a -= $b; $a -= $c; $a ^= (zeroFill($c,12));
  $b -= $c; $b -= $a; $b ^= ($a<<16);
  $c -= $a; $c -= $b; $c ^= (zeroFill($b,5));
  $a -= $b; $a -= $c; $a ^= (zeroFill($c,3));
  $b -= $c; $b -= $a; $b ^= ($a<<10);
  $c -= $a; $c -= $b; $c ^= (zeroFill($b,15));
  return array($a,$b,$c);
}

function GoogleCH($url, $length=null, $init=0xE6359A60) {
    if (is_null($length)) {
        $length = sizeof($url);
    }
    $a = $b = 0x9E3779B9;
    $c = $init;
    $k = 0;
    $len = $length;
    while ($len >= 12) {
        $a += ($url[$k+0] +($url[$k+1]<<8) +($url[$k+2]<<16) +($url[$k+3]<<24));
        $b += ($url[$k+4] +($url[$k+5]<<8) +($url[$k+6]<<16) +($url[$k+7]<<24));
        $c += ($url[$k+8] +($url[$k+9]<<8) +($url[$k+10]<<16)+($url[$k+11]<<24));
        $mix = mix($a,$b,$c);
        $a = $mix[0]; $b = $mix[1]; $c = $mix[2];
        $k += 12;
        $len -= 12;
    }
    $c += $length;
    switch ($len)              /* all the case statements fall through */
    {
        case 11: $c+=($url[$k+10]<<24);
        case 10: $c+=($url[$k+9]<<16);
        case 9 : $c+=($url[$k+8]<<8);
          /* the first byte of c is reserved for the length */
        case 8 : $b+=($url[$k+7]<<24);
        case 7 : $b+=($url[$k+6]<<16);
        case 6 : $b+=($url[$k+5]<<8);
        case 5 : $b+=($url[$k+4]);
        case 4 : $a+=($url[$k+3]<<24);
        case 3 : $a+=($url[$k+2]<<16);
        case 2 : $a+=($url[$k+1]<<8);
        case 1 : $a+=($url[$k+0]);
         /* case 0: nothing left to add */
    }
    $mix = mix($a,$b,$c);
    //echo $mix[0];
    /*-------------------------------------------- report the result */
    return $mix[2];
}
//converts a string into an array of integers containing the numeric value of the char
function strord($string) {
  for($i=0; $i<strlen($string); $i++) {
    $result[$i] = ord($string{$i});
  }
  return $result;
}

function pagerank($url) {
  $pagerank = '';
  $ch = "6" . GoogleCH(strord("info:" . $url));
  $fp = fsockopen("www.google.com", 80, $errno, $errstr, 30);
  if (!$fp) {
      echo "$errstr ($errno)<br />\n";
    } else {
      $out = "GET /search?client=navclient-auto&ch=". $ch .  "&features=Rank&q=info:" . $url . " HTTP/1.1\r\n";
      $out .= "Host: www.google.com\r\n";
      $out .= "Connection: Close\r\n\r\n";

      fwrite($fp, $out);
   
      while (!feof($fp)) {
	$data = fgets($fp, 128);
	$pos = strpos($data, "Rank_");
	if($pos === false){} else{
	$pagerank = substr($data, $pos + 9);
	}
   }
   fclose($fp);
  }
  return $pagerank;
}
//  End functions for Google PageRank

// Check if Tag module is installed
function iml_tag_module_included() {
  static $iml_tag_module_included;
  if ( !isset( $iml_tag_module_included ) ) {
    $modules_handler = xoops_gethandler( 'module' );
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
  global $xoopsModule;
  if ( iml_tag_module_included() ) {
    include_once ICMS_ROOT_PATH . '/modules/tag/include/formtag.php';
    $tag_handler = xoops_getmodulehandler( 'tag', 'tag' );
    $tag_handler -> updateByItem( $item_tag, $lid, $xoopsModule -> getVar( 'dirname' ), 0 );
  }
}

// Check if News module is installed
function iml_news_module_included() {
  static $iml_news_module_included;
  if ( !isset( $iml_news_module_included ) ) {
    $modules_handler = xoops_gethandler( 'module' );
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
global $xoopsConfig;
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
  if ($xoopsConfig['my_ip'] == xoops_getenv( 'REMOTE_ADDR' ) ) {
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
global $xoopsConfig;
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
if ($xoopsConfig['my_ip'] == xoops_getenv('REMOTE_ADDR')) {
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

function emailcnvrt($email) {
         $search = array(
         "/\@/",
         "/\./",
         "/\mailto:/",
	);

	 $replace = array(
         " [at] ",
         " [dot] ",
         "",
	);

	$text = preg_replace($search, $replace, $email);
        return $text;
}

function printemailcnvrt($email) {
         $search = array (
         "/\ [at] /",
         "/\ [dot] /",
	);

	 $replace = array (
         "@",
         ".",
	);

	$text = preg_replace($search, $replace, $email);
        return $text;
}

// Check if imGlossary module is installed
function imlinks_imglossary_module_included() {
  global $xoopsModuleConfig;
  static $imlinks_imglossary_module_included;
  if ( !isset( $imlinks_imglossary_module_included ) ) {
    $modules_handler = xoops_gethandler( 'module' );
    $news_mod = $modules_handler -> getByDirName( $xoopsModuleConfig['imglossarydir'] );
    if ( !$news_mod ) {
      $news_mod = false;
    } else {
      $imlinks_imglossary_module_included = $news_mod -> getVar( 'isactive' ) == 1;
    }
  }
  return $imlinks_imglossary_module_included;
}

function imlinks_linkterms( $definition, $glossaryterm ) {
	
	global $xoopsModule, $xoopsDB;
	
	// Code to make links out of glossary terms
		$parts = explode( '¤', $definition );

		// First, retrieve all terms from the glossary...
		$allterms = $xoopsDB -> query( "SELECT entryID, term FROM " . $xoopsDB -> prefix( 'imglossary_entries' ) . " WHERE submit=0 AND offline=0" );
		while ( list( $entryID, $term ) = $xoopsDB -> fetchrow( $allterms ) ) {
			foreach( $parts as $key => $part ) {
				if ( $term != $glossaryterm ) {
					// singular
					$term_q = preg_quote( $term, '/' );
					$search_term = '/\b$term_q\b/i';
					$replace_term = "<span><b><a style='color: #2F5376;' href='" . ICMS_URL . "/modules/imglossary/entry.php?entryID=" . intval( $entryID ) . "'>" . $term . "</a></b></span>";
					$parts[$key] = preg_replace( $search_term, $replace_term, $parts[$key] );

					// plural
					$term = $term . 's';
					$term_q = preg_quote( $term, '/' );
					$search_term = '/\b$term_q\b/i';
					$replace_term = "<span><b><a style='color: #2F5376;' href='" . ICMS_URL . "/modules/imglossary/entry.php?entryID=" . intval( $entryID ) . "'>" . $term . "</a></b></span>";
					$parts[$key] = preg_replace( $search_term, $replace_term, $parts[$key] );

					// plural with e
					$term = $term . 'es';
					$term_q = preg_quote( $term, '/' );
					$search_term = '/\b$term_q\b/i';
					$replace_term = "<span><b><a style='color: #2F5376;' href='" . ICMS_URL . "/modules/imglossary/entry.php?entryID=" . intval( $entryID ) . "'>" . $term . "</a></b></span>";
					$parts[$key] = preg_replace( $search_term, $replace_term, $parts[$key] );

				}
			}
		}
	$definition = implode( '¤', $parts );

	return $definition;
}

?>