<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: include/functions.php
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
	$gperm_handler = icms::handler( 'icms_member_groupperm' );
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
	if ( $lid > 0 ) { $sql .= ' WHERE id=' . $lid; }
	if ( !$result = icms::$xoopsDB -> query( $sql ) ) { return false; }
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
			if ( strlen( $value >= $lengthcheck ) ) { return null; }
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
	$toolbar = '<a class="button" id="button" href="index.php">' . _MD_IMLINKS_MAIN . '</a> ';
	if ( true == iml_checkgroups( $cid, 'imLinkSubPerm' ) ) {
		$toolbar .= '<a class="button" href="submit.php">' . _MD_IMLINKS_SUBMITLINK . '</a> ';
	}
	$toolbar .= '<a class="button" href="newlist.php?newlinkshowdays=7">' . _MD_IMLINKS_LATESTLIST . '</a> ';
	$toolbar .= '<a class="button" href="topten.php?list=hit">' . _MD_IMLINKS_POPULARITY . '</a> ';
	$toolbar .= '<a class="button" href="topten.php?list=rate">' . _MD_IMLINKS_TOPRATEDBUTT . '</a>';
	return $toolbar;
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
	if ( $return_sql == 1 ) { return $sql; }
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
				if ( $published == 0 ) { continue; }
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

function iml_getDirSelectOption( $selected, $dirarray, $namearray ) {
	echo "<select size='1' name='workd' onchange='location.href=\"upload.php?rootpath=\"+this.options[this.selectedIndex].value'>";
	echo '<option value="">--------------------------------------</option>';
	foreach( $namearray as $namearray => $workd ) {
		if ( $workd === $selected ) {
			$opt_selected = 'selected';
		} else {
			$opt_selected = '';
		}
	echo '<option value="' . htmlspecialchars( $namearray, ENT_QUOTES ) . '"' . $opt_selected . '>' . $workd . '</option>';
	}
	echo '</select>';
}

function iml_getforum( $forumid ) {
	echo '<select name="forumid">';
	echo '<option value="0">----------------------</option>';
	if ( $forumid < 4 ) {
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

function iml_editorform( $caption, $name, $value, $width, $height ) {
	$isadmin = ( ( is_object( icms::$user ) && !empty( icms::$user ) ) && icms::$user -> isAdmin( icms::$module -> getVar( 'mid' ) ) ) ? true : false;
	if ( $isadmin == true ) {
		$formuser = icms::$module -> config['form_options'];
	} else {
		$formuser = icms::$module -> config['form_optionsuser'];
	}
	switch( $formuser ) {	
	case 'fck':
		$editor = iml_fckeditor( $caption, $name, $value, $width, $height );
		break;
	case 'tinymce' :
		$editor = iml_tinymce( $caption, $name, $value, $width, $height );    
		break;
	}
	return $editor;
}

function iml_fckeditor( $caption, $name, $value, $width = '100%', $height = '500px' ) {
	if ( file_exists( ICMS_ROOT_PATH . '/editors/FCKeditor/formfckeditor.php' ) )	{
		include_once( ICMS_ROOT_PATH . '/editors/FCKeditor/formfckeditor.php' );
		$imlinks_editor = new XoopsFormFckeditor( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '500px' ), true );
	} else {
		$imlinks_editor = new icms_form_elements_Dhtmltextarea( $caption, $name, $value, 35, 60 );
	}
	return $imlinks_editor;
}

function iml_tinymce( $caption, $name, $value, $width = '100%', $height = '500px' ) {
	if ( file_exists( ICMS_ROOT_PATH . '/editors/tinymce/formtinymce.php' ) ) {
		include_once( ICMS_ROOT_PATH . '/editors/tinymce/formtinymce.php' );
		$imlinks_editor = new XoopsFormTinymce( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => $width, 'height' => $height, 0 ) );
	} else {
		$imlinks_editor = new icms_form_elements_Dhtmltextarea( $caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
	}
	return $imlinks_editor;
}

function iml_countryname( $countryn ) {
			icms_loadLanguageFile( basename( dirname(  dirname( __FILE__ ) ) ), 'countries' );
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
			//	'AN' => _IMLINKS_COUNTRY_AN,
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
				// 'FX' => _IMLINKS_COUNTRY_FX,	//  Not listed in ISO 3166
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
				// 'NT' => _IMLINKS_COUNTRY_NT,	//  Not listed in ISO 3166
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
				// 'SU' => _IMLINKS_COUNTRY_SU,	//  Not listed in ISO 3166
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
				// 'TP' => _IMLINKS_COUNTRY_TP,	//  Not listed in ISO 3166
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
				// 'YU' => _IMLINKS_COUNTRY_YU,	//  Not listed in ISO 3166
				'ZA' => _IMLINKS_COUNTRY_ZA,
				'ZM' => _IMLINKS_COUNTRY_ZM,
				// 'ZR' => _IMLINKS_COUNTRY_ZR,	//  Not listed in ISO 3166
				'ZW' => _IMLINKS_COUNTRY_ZW
			);
	return $country_array[$countryn];
}

/** 
 * PageRank Lookup (Based on Google Toolbar for Mozilla Firefox) 
 * 
 * @copyright   2012 HM2K <hm2k@php.net> 
 * @link        http://pagerank.phurix.net/ 
 * @author      James Wade <hm2k@php.net> 
 * @version     $Revision: 2.1 $ 
 * @require     PHP 4.3.0 (file_get_contents) 
 * @updated     06/10/11 
 */ 

function imlinks_pagerank( $q, $host = 'toolbarqueries.google.com', $context = NULL ) {
    $seed = "Mining PageRank is AGAINST GOOGLE'S TERMS OF SERVICE. Yes, I'm talking to you, scammer.";
    $result = 0x01020345;
    $len = strlen( $q );
    for ( $i=0; $i<$len; $i++ ) {
        $result ^= ord( $seed{$i%strlen( $seed )} ) ^ ord( $q{$i} );
        $result = ( ( $result >> 23 ) & 0x1ff ) | $result << 9;
    }
    if (PHP_INT_MAX != 2147483647) {
        $result = -(~($result & 0xFFFFFFFF) + 1);
    }
    $ch = sprintf( '8%x', $result );
    $url = 'http://%s/tbr?client=navclient-auto&ch=%s&features=Rank&q=info:%s';
    $url = sprintf( $url, $host, $ch, $q );
    @$pr = file_get_contents( $url, false, $context );
    return $pr?substr( strrchr( $pr, ':' ), 1 ):false;
}
// End Google Pagerank function

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
	$sql = icms::$xoopsDB -> query( 'SELECT entryID, term FROM ' . icms::$xoopsDB -> prefix( 'imglossary_entries' ) . ' WHERE submit=0 AND offline=0' );
	$allterms = icms::$xoopsDB -> query( $sql );
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
	$mozshot = '<img src="http://mozshot.nemui.org/shot?' . $url . '" style="vertical-align: middle;" alt="" />';
	return $mozshot;
}

function iml_thumbshot( $url ) {
	$thumbshot = '<img src="http://open.thumbshots.org/image.pxf?url=' . $url . '" width="120" height="90" style="vertical-align: middle;" alt="" />';
	return $thumbshot;
}

function imlinks_tooltip( $description, $tip = 'help' ) {
	switch ( $tip ) {
		case 'help':
			$tooltip = '<a style="float: right;" href="javascript:void(0)" class="lytetip" data-lyte-options="tipStyle:help tipDecoration:none" title="' . $description . '"><img style="float: right;" src="' . ICMS_LIBRARIES_URL . '/lytebox/images/help_small.png" alt="" /></a>';
			break;
		case 'info':
			$tooltip = '<a style="float: right;" href="javascript:void(0)" class="lytetip" data-lyte-options="tipStyle:info tipDecoration:none" title="' . $description . '"><img style="float: right;" src="' . ICMS_LIBRARIES_URL . '/lytebox/images/information_small.png" alt="" /></a>';
			break;
		case 'warning':
			$tooltip = '<a style="float: right;" href="javascript:void(0)" class="lytetip" data-lyte-options="tipStyle:warning tipDecoration:none" title="' . $description . '"><img style="float: right;" src="' . ICMS_LIBRARIES_URL . '/lytebox/images/error_small.png" alt="" /></a>';
			break;
		case 'error':
			$tooltip = '<a style="float: right;" href="javascript:void(0)" class="lytetip" data-lyte-options="tipStyle:error tipDecoration:none" title="' . $description . '"><img style="float: right;" src="' . ICMS_LIBRARIES_URL . '/lytebox/images/exclamation_small.png" alt="" /></a>';
			break;
	}
	return $tooltip;
}
?>