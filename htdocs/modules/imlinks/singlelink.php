<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: singlelink.php
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

include 'header.php';

//$page = iml_cleanRequestVars( $_REQUEST, 'page', '' );
$lid  = intval( iml_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

$sql3 = 'SELECT cid FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid;
list( $cid ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql3 ) );

$sql2 = 'SELECT count(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN '
		. icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' b'
		. ' ON b.lid = a.lid'
		. ' WHERE a.published > 0 AND a.published <= ' . time()
		. ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND a.offline = 0'
		. ' AND (b.cid=a.cid OR (a.cid=' . intval( $cid ) . ' OR b.cid=' . intval( $cid ) . '))';
list( $count ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql2 ) );

if ( false == iml_checkgroups( $cid = 0 ) && $count == 0 ) {
	redirect_header( 'index.php', 1, _MD_IMLINKS_MUSTREGFIRST );
	exit();
}

$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . intval( $lid ) . '
		AND (published > 0 AND published <= ' . time() . ')
		AND (expired = 0 OR expired > ' . time() . ')
		AND offline = 0 
		AND cid > 0';
$result = icms::$xoopsDB -> query( $sql );
$link_arr = icms::$xoopsDB -> fetchArray( $result );

if ( !is_array( $link_arr ) ) {
	redirect_header( 'index.php', 1, _MD_IMLINKS_NOLINKLOAD );
	exit();
}

$xoopsOption['template_main'] = 'imlinks_singlelink.html';

include ICMS_ROOT_PATH . '/header.php';
include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/address.php';

// tags support
if ( iml_tag_module_included() ) {
	include_once ICMS_ROOT_PATH . '/modules/tag/include/tagbar.php';
	$xoopsTpl -> assign( 'tagbar', tagBar( $link_arr['lid'], 0 ) );
}

if ( iml_imageheader() != '' ) {
$imlink['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . iml_imageheader() . '</div>'; }
$imlink['id'] = $link_arr['lid'];
$imlink['cid'] = $link_arr['cid'];

if ( icms::$module -> config['linkedterms'] ) {
	if ( iml_imglossary_module_included() ) {
		$glossaryterm = $link_arr['title'];
		$description = iml_linkterms( $link_arr['description'], $glossaryterm );
		$imlink['description2'] = $description;
	} else {
		$imlink['description2'] = $link_arr['description'];
	}
} else {
	$imlink['description2'] = $link_arr['description'];
}

// Address
$street1 = $link_arr['street1'];
$street2 = $link_arr['street2'];
$town = $link_arr['town'];
$state = $link_arr['state'];
$zip = $link_arr['zip'];
$tel = $link_arr['tel'];
$mobile = $link_arr['mobile'];
$voip = $link_arr['voip'];
$fax = $link_arr['fax'];
$email = $link_arr['email'];
$vat = $link_arr['vat'];
$country = iml_countryname( $link_arr['country'] );

if ( $street1 == '' || $town == '' || icms::$module -> config['useaddress'] == 0 ) {
	$imlink['addryn'] = 0;
} else {
	$imlink['addryn'] = 1;
	$imlink['address'] = '<br />' . iml_address( $street1, $street2, $town, $state, $zip, $link_arr['country'] ) . '<br />' . $country;
}

if ( icms::$module -> config['useaddress'] == 1 ) {
	$imlink['addryn'] = 1;

	if ( $link_arr['tel'] == true ) {
		$imlink['tel'] = '<br />' . '<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/telephone.png" title="'._MD_IMLINKS_TELEPHONE.'" alt="'._MD_IMLINKS_TELEPHONE.'" style="vertical-align: middle;" />&nbsp;' . $tel;
	}

	if ( $link_arr['mobile'] == true ) {
		$imlink['mobile'] = '<br />' . '<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/phone.png" title="'._MD_IMLINKS_MOBILE.'" alt="'._MD_IMLINKS_MOBILE.'" style="vertical-align: middle;" />&nbsp;' . $mobile;
	}

	if ( $link_arr['voip'] == true ) {
		$imlink['voip'] = '<br />' .'<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/voip.png" title="'._MD_IMLINKS_VOIP.'" alt="'._MD_IMLINKS_VOIP.'" style="vertical-align: middle;" />&nbsp;'  . $voip;
	}

	if ( $link_arr['fax'] == true ) {
		$imlink['fax'] = '<br />' . '<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/fax.png" title="'._MD_IMLINKS_FAX.'" alt="'._MD_IMLINKS_FAX.'" style="vertical-align: middle;" />&nbsp;' . $fax;
	}

	if ( $link_arr['email'] == true ) {
		$imlink['email'] = '<br />' . '<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/email.png" title="'._MD_IMLINKS_EMAIL . '" alt="' ._MD_IMLINKS_EMAIL.'" style="vertical-align: middle;" />&nbsp;' . $email;
	}

	if ( $link_arr['vat'] == true ) {
		$imlink['vat'] = '<br />' . _MD_IMLINKS_VAT . ':&nbsp;' . $vat;
	}
}

if ( icms::$module -> config['tomtom_apikey'] ) {
	if ( $link_arr['ttlat'] == true && $link_arr['ttlong'] == true ) {
		$tomtom_name   = $link_arr['title'];
		$tomtom_attr   = $icmsConfig['sitename'];
		$tomtom_source = ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?lid=' . intval( $lid );
		$tomtom_logo   = icms::$module -> config['tomtom_logo'];;
		$imlink['addtotomtom'] = '<a href="http://addto.tomtom.com/api/home/v2/georeference?action=add&amp;apikey=' . icms::$module -> config['tomtom_apikey'] . '&amp;name=' . $tomtom_name . '&amp;latitude=' . $link_arr['ttlat'] .'&amp;longitude=' . $link_arr['ttlong'] . '&amp;attribution=' . $tomtom_attr . '&amp;source=' . $tomtom_source . '&amp;logo=' . $tomtom_logo . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/add_to_tomtom.png" alt="' . _MD_IMLINKS_ADDTOTOMTOM . '" title="' . _MD_IMLINKS_ADDTOTOMTOM . '" border="0" /></a>';
	}
}

if ( $link_arr['street1'] == true || $link_arr['tel'] == true || $link_arr['mobile'] == true || $link_arr['fax'] == true || $link_arr['email'] == true ) {
	$xoopsTpl -> assign( 'contactdetails', '<b>' . _MD_IMLINKS_ADDRESS . '</b>' );
	$xoopsTpl -> assign( 'vcard' , '<br />' . '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/vcard.php?lid=' . $link_arr['lid'] .'" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/vcard.png" title="vCard" alt="vCard" /></a>' );
}

// Maps
if ( icms::$module -> config['useaddress'] == 1 ) {
	$googlemap = $link_arr['googlemap'];
	$yahoomap = $link_arr['yahoomap'];
	$multimap = $link_arr['multimap'];

	if ( $link_arr['googlemap'] == true ) {
		$imlink['googlemap'] = '<a href="' . $googlemap . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/google_map.png" alt="' . _MD_IMLINKS_GETMAP . '" title="' . _MD_IMLINKS_GETMAP . '" style="vertical-align: middle;" /></a>&nbsp;';
	}

	if ( $link_arr['yahoomap'] == true ) {
		$imlink['yahoomap'] = '<a href="' . $yahoomap . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/yahoo_map.png" alt="' . _MD_IMLINKS_GETMAP . '" title="' . _MD_IMLINKS_GETMAP . '" style="vertical-align: middle;" /></a>&nbsp;';
	}

	if ( $link_arr['multimap'] == true ) {
		$imlink['multimap'] = '<a href="' . $multimap . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/bing_map.png" alt="' . _MD_IMLINKS_GETMAP . '" title="' . _MD_IMLINKS_GETMAP . '" style="vertical-align: middle;" /></a>';
	}
}

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );
$pathstring = '<a href="index.php">' . _MD_IMLINKS_MAIN . '</a>&nbsp;:&nbsp;';
$pathstring .= $mytree -> getNicePathFromId( $imlink['cid'], 'title', 'viewcat.php?op=' );
$imlink['path'] = $pathstring;

$link_url = iml_niceurl( $link_arr['lid'], $link_arr['title'], $link_arr['nice_url'] );

// Start of meta tags
$maxWords = 100;
$words = array();
$words = explode( ' ', icms_html2text( $link_arr['description'] ) );
$newWords = array();
$i = 0;

while ( $i < $maxWords-1 && $i < count( $words ) ) {
	if ( isset( $words[$i] ) ) {
		$newWords[] = trim( $words[$i] );
	}
	$i++;
}
$link_meta_description = implode( ' ', $newWords );

if ( is_object( $xoTheme ) ) {
	if ( $link_arr['keywords'] != '' ) {
		$xoTheme -> addMeta( 'meta', 'keywords', $link_arr['keywords'] );
	}
	$xoTheme -> addMeta( 'meta', 'title', $link_arr['title'] );
	$xoTheme -> addMeta( 'meta', 'description', $link_meta_description );
} else {
	if ( $link_arr['keywords'] != '' ) {
		$xoopsTpl -> assign( 'icms_meta_keywords', $link_arr['keywords'] );
	}
	$xoopsTpl -> assign( 'icms_meta_description', $link_meta_description );
}
	$xoopsTpl -> assign( 'icms_pagetitle', $link_arr['title'] );
	// Open Graph tags
	$xoopsTpl -> assign( 'og_url', $link_url );
	$xoopsTpl -> assign( 'og_image', ICMS_URL . '/modules/' . $mydirname . '/images/imlinks_ilogo.png' );
// End of meta tags

$moderate = 0;
$res_type = 1;
include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/linkloadinfo.php';

$xoopsTpl -> assign( 'show_screenshot', false );
if ( isset( icms::$module -> config['screenshot'] ) && icms::$module -> config['screenshot'] == 1 ) {
	$xoopsTpl -> assign( 'shots_dir', icms::$module -> config['screenshots'] );
	$xoopsTpl -> assign( 'shotwidth', icms::$module -> config['shotwidth'] );
	$xoopsTpl -> assign( 'shotheight', icms::$module -> config['shotheight'] );
	$xoopsTpl -> assign( 'show_screenshot', true );
}

// Show other author links
$sql = 'SELECT lid, cid, title, published, nice_url FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . '
	WHERE submitter=' . $link_arr['submitter'] . '
	AND published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ')
	AND offline = 0 ORDER by published DESC';
$result = icms::$xoopsDB -> query( $sql, 10, 0 );

while ( $arr = icms::$xoopsDB -> fetchArray( $result ) ) {
	$linkuid['title'] = $immyts -> htmlSpecialCharsStrip( $arr['title'] );
	$linkuid['niceurl'] = iml_niceurl( $arr['lid'], $arr['title'], $arr['nice_url'] );
	$linkuid['published'] = formatTimestamp( $arr['published'], icms::$module -> config['dateformat'] );
	$xoopsTpl -> append( 'link_uid', $linkuid );
}

// Copyright notice
if ( isset( icms::$module -> config['copyright'] ) && icms::$module -> config['copyright'] == 1 ) {
	$xoopsTpl -> assign( 'lang_copyright', $imlink['title'] . ' &copy; ' . _MD_IMLINKS_COPYRIGHT . ' ' . formatTimestamp( time(), 'Y' ) . ' - <a href="' . ICMS_URL . '">' .  $icmsConfig['sitename'] . '</a>' );
}

if ( isset( icms::$module -> config['otherlinks'] ) && icms::$module -> config['otherlinks'] == 1 ) {
	$xoopsTpl -> assign( 'other_links', "<b>" ._MD_IMLINKS_OTHERBYUID . "</b>"  . icms_member_user_Handler::getUserLink( $link_arr['submitter'] ) . "<br />" );
}

$imlink['useradminlink'] = 0;
if ( is_object( icms::$user ) && !empty( icms::$user ) ) {
	$_user_submitter = ( icms::$user -> getVar( 'uid' ) == $link_arr['submitter'] ) ? true : false;
	if ( true == iml_checkgroups( $cid ) ) {
		$imlink['useradminlink'] = 1;
		if ( icms::$user -> getVar( 'uid' ) == $link_arr['submitter'] ) {
			$imlink['usermodify'] = '<a class="button" href="' . ICMS_URL . '/modules/' . $mydirname . '/submit.php?lid=' . $link_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/link_edit.png" alt="" style="vertical-align: middle;" /> ' . _MD_IMLINKS_MODIFY . '</a>';
		}
	}
}

$xoopsTpl -> assign ( 'reportbroken', '<a class="button" href="' . ICMS_URL . '/modules/' . $mydirname . '/brokenlink.php?lid=' . $link_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/link_break.png" alt="" style="vertical-align: middle;" /> ' . _MD_IMLINKS_REPORTBROKEN . '</a>');

$xoopsTpl -> assign ( 'mailto', '<a class="button" href="mailto:?subject=' . $mail_subject . '&body=' . $mail_body . '" target="_top"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/email.png" alt="" style="vertical-align: middle;" /> ' . _MD_IMLINKS_TELLAFRIEND . '</a>');

$xoopsTpl -> assign( 'commentz', '<a class="button" href="' . $url . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/comments.png" alt="" style="vertical-align: middle;" /> ' . _COMMENTS . '&nbsp;(' . $link_arr['comments'] . ')</a>' );

$xoopsTpl -> assign( 'print', '<a class="button" href="' . ICMS_URL . '/modules/' . $mydirname . '/print.php?lid=' . $link_arr['lid'] . '"  target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/printer.png" alt="" style="vertical-align: middle;" /> ' . _MD_IMLINKS_PRINT . '</a>' );

$xoopsTpl -> assign( 'back' , '<a class="button" href="javascript:history.go(-1)">&#9668; ' . _BACK . '</a>' );

$imlink['otherlinx']	= icms::$module -> config['otherlinks'];
$imlink['total_chars']	= icms::$module -> config['totalchars'];
$imlink['allow_rating'] = ( iml_checkgroups( $cid, 'imLinkRatePerms' ) ) ? true : false;

$xoopsTpl -> assign( 'lightwindow', icms::$module -> config['lightwindow'] );
if ( icms::$module -> config['lightwindow'] == 2 ) {
	if ( is_readable( ICMS_ROOT_PATH . '/libraries/greybox/AJS.js' ) ) {
		$xoopsTpl -> assign( 'xoops_module_header', '<script type="text/javascript">var GB_ROOT_DIR = "' . ICMS_URL . '/libraries/greybox/";</script>' );
	}
}

//Twitter button
switch ( icms::$module -> config['twitt_bttn'] ) {
	case 1:
		$twcount = 'none';
		break;
	case 2:
		$twcount = 'horizontal';
		break;
	case 3:
		$twcount = 'vertical';
		break;
}

if ( icms::$module -> config['twitt_bttn'] > 0 ) {
	$twitter = '<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
				<span style="margin-right: 10px;"><a href="https://twitter.com/share" class="twitter-share-button" data-count="' . $twcount . '">' . _MI_IMPRESSION_TWEET . '</a></span>';
}

//Facebook button
switch ( icms::$module -> config['faceb_bttn'] ) {
	case 1:
		$fbcount = 'button_count';
		break;
	case 2:
		$fbcount = 'box_count';
		break;
}

if ( icms::$module -> config['faceb_bttn'] > 0 ) {
	$facebook = '<div data-href="' . $link_url . '" class="fb-like" data-send="false" data-layout="' . $fbcount . '" data-show-faces="false"></div>';
}

//Google +1 button
switch ( icms::$module -> config['plusone_bttn'] ) {
	case 0:
		$plusone = '';
		break;
	case 1:
		$plusone = '<g:plusone size="medium" annotation="none"></g:plusone>';
		break;
	case 2:
		$plusone = '<span style="margin: 0; padding: 0;"><g:plusone size="medium" annotation="bubble"></g:plusone></span>';
		break;
	case 3:
		$plusone = '<span style="margin: 0; padding: 0;"><g:plusone size="tall" annotation="bubble"></g:plusone></span>';
		break;
}

//Social bookmarks
$imlink['showsbookmarks'] = icms::$module -> config['showsbookmarks'];

switch ( icms::$module -> config['showsbookmarks'] ) {
	case 0:
		$imlink['socialbutton'] = '';
		break;
	case 1:
		include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/sbookmarks.php';
		$imlink['socialbutton'] = '<div class="imlinks_socbookmark">' . iml_sbmarks( $link_arr['lid'], $link_arr['title'] ) . '</div>';
		break;
	case 2:
		$imlink['socialbutton'] = '<br /><div style="text-align: center; padding: 10px 0 5px 0;">' . $twitter . $facebook . $plusone . '</div>';
		break;
	case 3:
		$imlink['socialbutton'] = '<br /><div style="text-align: center; padding: 10px 0 5px 0;" id="socialshareprivacy"></div>';
		break;
}
//End Social buttons

$xoopsTpl -> assign( 'imlink', $imlink );
$xoopsTpl -> assign( 'module_dir', $mydirname );

if ( iml_imageheader() != '' ) {
	$catarray['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . iml_imageheader() . '</div>';
}
$catarray['letters'] = '<div style="padding-bottom: 12px; text-align: center;" class="itemPermaLink">' . iml_letters() . '</div>';
$catarray['toolbar'] = '<div style="padding-bottom: 12px; text-align: center;">' . iml_toolbar() . '</div>';
$xoopsTpl -> assign( 'catarray', $catarray );

if ( icms::$module -> config['lightwindow'] == 2 ) {
	$xoopsTpl -> assign( 'xoops_module_header', '<script type="text/javascript">var GB_ROOT_DIR = "' . ICMS_URL . '/libraries/greybox/";</script>' );
}

include ICMS_ROOT_PATH . '/include/comment_view.php';
include ICMS_ROOT_PATH . '/footer.php';
?>