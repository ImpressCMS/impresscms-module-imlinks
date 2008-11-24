<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: print.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

$mydirname = basename( dirname( __FILE__ ) );

include_once 'header.php';
require_once ICMS_ROOT_PATH . '/class/template.php';

$lid = iml_cleanRequestVars( $_REQUEST, 'lid', 0 );
$lid = intval($lid);

$error_message = _MD_IMLINKS_NOITEMSELECTED;
if ( $lid == 0 ) {
	redirect_header( 'javascript:history.go(-1)', 1, $error_message );
	exit();
}

global $xoopsDB, $xoopsConfig, $xoopsModuleConfig, $xoopsModule, $xoopsTpl, $xoTheme;

$result = $xoopsDB -> query( 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published > 0 AND published <= ' . time() . ' AND offline = 0 AND lid=' . intval( $lid ) );
$myrow = $xoopsDB -> fetchArray( $result );

$result2 = $xoopsDB -> query( 'SELECT title FROM ' . $xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $myrow['cid'] );
$mycat = $xoopsDB -> fetchArray( $result2 );

$xoopsTpl = new XoopsTpl();
$myts = MyTextSanitizer::getInstance();

$xoopsTpl -> assign( 'printsitename', ICMS_URL );
$xoopsTpl -> assign( 'printcategoryname', $mycat['title'] );

if ( $xoopsModuleConfig['screenshot'] ) {
	if ( $xoopsModuleConfig['useautothumb'] ) {
		if ($xoopsModuleConfig['autothumbsrc'] == 0 ) {
			$xoopsTpl -> assign( 'printscrshot', '<img src="http://open.thumbshots.org/image.pxf?url=' . $myrow['url'] . '" alt="" title="" border="0" width="120" height="90" hspace="5" />' );
		} else {
			$xoopsTpl -> assign( 'printscrshot', '<img src="http://mozshot.nemui.org/shot/128x128?' . $myrow['url'] . '" alt="" title="" border="0" hspace="5" />' );
		}
	} else {
		$xoopsTpl -> assign( 'printscrshot', '<img src="' . ICMS_URL . '/' . $xoopsModuleConfig['screenshots'] .'/'. $myrow['screenshot'] . '" alt="" title="" border="0" />' );
	}		
}

$description = $myts -> displayTarea( $myrow['description'], 1, 1, 1, 1, $myrow['nobreak'] );

$xoopsTpl -> assign( 'printtitle', $myts -> displayTarea( $myrow['title'] ) );
$xoopsTpl -> assign( 'printdescription', $description );
$xoopsTpl -> assign( 'printfooter', $xoopsModuleConfig['footerprint'] );
$xoopsTpl -> assign( 'lang_category', _MD_IMLINKS_CATEGORY );

if ( $xoopsModuleConfig['printlogourl'] ) {
  $xoopsTpl -> assign( 'printlogo', '<img src="' . $xoopsModuleConfig['printlogourl'] . '" alt="" title="" border="0" />' );
} else {
  $xoopsTpl -> assign( 'printlogo', '' );
}

include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/address.php';
$street1 = $myrow['street1'];
$street2 = $myrow['street2'];
$town    = $myrow['town'];
$state   = $myrow['state'];
$zip     = $myrow['zip'];
$tel     = $myrow['tel'];
$mobile  = $myrow['mobile'];
$voip    = $myrow['voip'];
$fax     = $myrow['fax'];
$url     = $myrow['url'];
$email   = imlinks_printemailcnvrt( $myrow['email'] );
$country = iml_countryname( $myrow['country'] );

if ( $street1 == '' || $town == '' || $xoopsModuleConfig['useaddress'] == 0 ) {
  $print['addryn'] = 0;
} else {
  $print['addryn'] = 1;
  $address = iml_address( $street1, $town, $state, $zip, $country );
  $print['address'] = '<b>' . _MD_IMLINKS_ADDRESS . '</b><br />' . iml_address( $street1, $street2, $town, $state, $zip, $country ) . '<br />' . $country;
  if ( $tel == '' ) {
    $print['tel'] = '';
    } else {
      $print['tel'] = '<br />' . '<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/telephone.png" title="" alt="" align="absmiddle" />&nbsp;' . $tel;
    }
  if ( $mobile == '' ) {
    $print['mobile'] = '';
    } else {
      $print['mobile'] = '<br />' .'<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/phone.png" title="" alt="" align="absmiddle" />&nbsp;'  . $mobile;
    }
  if ( $voip == '' ) {
    $print['voip'] = '';
    } else {
      $print['voip'] = '<br />' .'<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/voip.png" title="" alt="" align="absmiddle" />&nbsp;'  . $voip;
    }
  if ( $fax == '' ) {
    $print['fax'] = '';
    } else {
      $print['fax'] = '<br />' . '<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/fax.png" title="" alt="" align="absmiddle" />&nbsp;' . $fax;
    }
  if ( $email == '' ) {
    $print['email'] = '';
    } else {
      $print['email'] = '<br />' . '<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/email.png" title="" alt="" align="absmiddle" />&nbsp;' . $email;
    }
  }
$xoopsTpl -> assign( 'print', $print );

$xoopsTpl -> assign( 'worldwideweb', '<br />' . '<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world.png" title="" alt="" align="absmiddle" />&nbsp;' . $url );

// Start of meta tags
$maxWords=100;
$words = array();
$words = explode( ' ', icms_html2text( $myrow['description'] ) );
$newWords = array();
$i = 0;

while ( $i < $maxWords - 1 && $i < count( $words ) ) {
if ( isset( $words[$i] ) ) {
  $newWords[] = trim($words[$i]);
  }
$i++;
}

$link_meta_description = implode( ' ', $newWords );

	if ( is_object( $xoTheme ) ) {
		$xoTheme -> addMeta( 'meta', 'keywords', $myrow['keywords'] );
		$xoTheme -> addMeta( 'meta', 'title', $myrow['title'] );
		$xoTheme -> addMeta( 'meta', 'description', $link_meta_description );
	} else {
		$xoopsTpl -> assign( 'xoops_meta_keywords', $myrow['keywords'] );
		$xoopsTpl -> assign( 'xoops_meta_description', $link_meta_description );
	}
	$xoopsTpl -> assign( 'xoops_pagetitle', $myrow['title'] );
	$xoopsTpl -> assign( 'xoops_meta_author', $myrow['publisher'] );
	$xoopsTpl -> assign( 'xoops_sitename', $xoopsConfig['sitename'] );
	$xoopsTpl -> assign( 'xoops_meta_robots', 'noindex,nofollow' );
	$xoopsTpl -> assign( 'xoops_meta_copyright', $xoopsConfig['sitename'] );
// End of meta tags

$xoopsTpl -> assign( 'module_dir', $mydirname );
$xoopsTpl -> display( 'db:imlinks_print.html' );
?>