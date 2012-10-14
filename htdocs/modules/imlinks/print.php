<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: print.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since		1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				imLinks
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

include_once 'header.php';
require_once ICMS_ROOT_PATH . '/class/template.php';

$lid = intval( iml_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

$error_message = _MD_IMLINKS_NOITEMSELECTED;
if ( $lid == 0 ) {
	redirect_header( 'javascript:history.go(-1)', 1, $error_message );
	exit();
}

$result = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published > 0 AND published <= ' . time() . ' AND offline = 0 AND lid=' . $lid );
$myrow = icms::$xoopsDB -> fetchArray( $result );

$result2 = icms::$xoopsDB -> query( 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $myrow['cid'] );
$mycat = icms::$xoopsDB -> fetchArray( $result2 );

$xoopsTpl = new icms_view_Tpl();

$xoopsTpl -> assign( 'printsitename', ICMS_URL );
$xoopsTpl -> assign( 'printcategoryname', $mycat['title'] );

if ( icms::$module -> config['screenshot'] ) {
	if ( icms::$module -> config['useautothumb'] ) {
		if (icms::$module -> config['autothumbsrc'] == 0 ) {
			$xoopsTpl -> assign( 'printscrshot', '<img src="http://open.thumbshots.org/image.pxf?url=' . $myrow['url'] . '" alt="" title="" border="0" width="120" height="90" hspace="5" />' );
		} else {
			$xoopsTpl -> assign( 'printscrshot', '<img src="http://mozshot.nemui.org/shot/128x128?' . $myrow['url'] . '" alt="" title="" border="0" hspace="5" />' );
		}
	} elseif ( !$myrow['screenshot'] == '' ) {
		$xoopsTpl -> assign( 'printscrshot', '<img src="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] .'/'. $myrow['screenshot'] . '" alt="" title="" border="0" />' );
	}
}

$description = $myrow['description'];

$xoopsTpl -> assign( 'printtitle', $myrow['title'] );
$xoopsTpl -> assign( 'printdescription', $description );
$xoopsTpl -> assign( 'printfooter', icms::$module -> config['footerprint'] );
$xoopsTpl -> assign( 'lang_category', _MD_IMLINKS_CATEGORY );

if ( icms::$module -> config['printlogourl'] ) {
	$xoopsTpl -> assign( 'printlogo', '<img src="' . icms::$module -> config['printlogourl'] . '" alt="" title="" border="0" />' );
} else {
	$xoopsTpl -> assign( 'printlogo', '' );
}

include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/include/address.php';
$street1	= $myrow['street1'];
$street2	= $myrow['street2'];
$town		= $myrow['town'];
$state		= $myrow['state'];
$zip		= $myrow['zip'];
$tel		= $myrow['tel'];
$mobile		= $myrow['mobile'];
$voip		= $myrow['voip'];
$fax		= $myrow['fax'];
$url		= $myrow['url'];
$email		= iml_printemailcnvrt( $myrow['email'] );
$country	= iml_countryname( $myrow['country'] );

if ( $street1 == '' || $town == '' || icms::$module -> config['useaddress'] == 0 ) {
	$print['addryn'] = 0;
} else {
	$print['addryn'] = 1;
	$print['address'] = '<br />' . iml_address( $street1, $street2, $town, $state, $zip, $myrow['country'] ) . '<br />' . $country;

	if ( $myrow['tel'] == true ) {
		$print['tel'] = '<br />' . '<img src="images/icon/telephone.png" title="'._MD_IMLINKS_TELEPHONE.'" alt="" style="vertical-align: middle;" />&nbsp;' . $tel;
	}

	if ( $myrow['mobile'] == true ) {
		$print['mobile'] = '<br />' . '<img src="images/icon/phone.png" title="'._MD_IMLINKS_MOBILE.'" alt="" style="vertical-align: middle;" />&nbsp;' . $mobile;
	}

	if ( $myrow['voip'] == true ) {
		$print['voip'] = '<br />' .'<img src="images/icon/voip.png" title="'._MD_IMLINKS_VOIP.'" alt="" style="vertical-align: middle;" />&nbsp;'  . $voip;
	}

	if ( $myrow['fax'] == true ) {
		$print['fax'] = '<br />' . '<img src="images/icon/fax.png" title="'._MD_IMLINKS_FAX.'" alt="" style="vertical-align: middle;" />&nbsp;' . $fax;
	}

	if ( $myrow['email'] == true ) {
		$print['email'] = '<br />' . '<img src="images/icon/email.png" title="'._MD_IMLINKS_EMAIL . '" alt="" style="vertical-align: middle;" />&nbsp;' . $email;
	}

	if ( $myrow['vat'] == true ) {
		$print['vat'] = '<br />' . _MD_IMLINKS_VAT . ':&nbsp;' . $vat;
	}
}
$xoopsTpl -> assign( 'print', $print );

$xoopsTpl -> assign( 'worldwideweb', $url );

// Start of meta tags
$maxWords=100;
$words = array();
$words = explode( ' ', icms_html2text( $myrow['description'] ) );
$newWords = array();
$i = 0;

while ( $i < $maxWords - 1 && $i < count( $words ) ) {
	if ( isset( $words[$i] ) ) {
		$newWords[] = trim( $words[$i] );
	}
	$i++;
}

$link_meta_description = implode( ' ', $newWords );

	if ( is_object( $xoTheme ) ) {
		$xoTheme -> addMeta( 'meta', 'keywords', $myrow['keywords'] );
		$xoTheme -> addMeta( 'meta', 'title', $myrow['title'] );
		$xoTheme -> addMeta( 'meta', 'description', $link_meta_description );
	} else {
		$xoopsTpl -> assign( 'icms_meta_keywords', $myrow['keywords'] );
		$xoopsTpl -> assign( 'icms_meta_description', $link_meta_description );
	}
	$xoopsTpl -> assign( 'icms_pagetitle', $myrow['title'] );
	$xoopsTpl -> assign( 'icms_meta_author', $myrow['publisher'] );
	$xoopsTpl -> assign( 'icms_sitename', $icmsConfig['sitename'] );
	$xoopsTpl -> assign( 'icms_meta_copyright', $icmsConfig['sitename'] );
	iml_noindexnofollow();
// End of meta tags

$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );
$xoopsTpl -> display( 'db:imlinks_print.html' );
?>