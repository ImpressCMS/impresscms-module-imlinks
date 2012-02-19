<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: modifications.php
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

include 'admin_header.php';

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );
$requestid = intval( iml_cleanRequestVars( $_REQUEST, 'requestid', 0 ) );

switch ( strtolower( $op ) ) {
	case 'listmodreqshow':

		icms_cp_header();
		iml_adminmenu( '', _AM_IMLINKS_MOD_MODREQUESTS );

		$sql = 'SELECT modifysubmitter, requestid, lid, cid, title, url, description, screenshot, forumid, country, keywords, item_tag, googlemap, yahoomap, multimap, street1, street2, town, state, zip, tel, fax, voip, mobile, email, vat, ttlat, ttlong FROM ' . icms::$xoopsDB -> prefix( 'imlinks_mod' ) . ' WHERE requestid=' . $requestid;
		$mod_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
		unset( $sql );

		$sql = 'SELECT submitter, lid, cid, title, url, description, screenshot, forumid, country, keywords, item_tag, googlemap, yahoomap, multimap, street1, street2, town, state, zip, tel, fax, voip, mobile, email, vat, ttlat, ttlong FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $mod_array['lid'];
		$orig_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
		unset( $sql );

		$orig_user = new icmsUser( $orig_array['submitter'] );
		$submittername = icms_member_user_Handler::getUserLink( $orig_array['submitter'] );
		$submitteremail = $orig_user -> getUnameFromId( 'email' );

		echo '<div><b>' . _AM_IMLINKS_MOD_MODPOSTER . '</b> ' . $submittername . '</div>';

		$not_allowed = array( 'lid', 'submitter', 'requestid', 'modifysubmitter' );

		$sform = new icms_form_Theme( _AM_IMLINKS_MOD_ORIGINAL, 'storyform', 'index.php' );
		$sform -> setExtra( 'enctype="multipart/form-data"' );

		foreach ( $orig_array as $key => $content ) {
			if ( in_array( $key, $not_allowed ) ) {
				continue;
			}
			$lang_def = constant( '_AM_IMLINKS_MOD_' . strtoupper( $key ) );
			if ( $key == 'cid' ) {
				$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $content;
				$row = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
				$content = $row['title'];
			}
			if ( $key == 'forumid' ) {
				$content = '';
				$modhandler = icms::handler( 'icms_module' );
				$icmsforumModule = &$modhandler -> getByDirname( 'newbb' );
				$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'bb_categories' ) . ' WHERE cid=' . $content;
				if ( $icmsforumModule && $content > 0 ) {
					$content = '<a href="' . ICMS_URL . '/modules/newbb/viewforum.php?forum=' . $content . '">Forumid</a>';
				}
			}
			if ( $key == 'screenshot' ) {
				$content = '';
				if ( $content > 0 )
					$content = '<img src="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] . '/' . $logourl . '" width="' . icms::$module -> config['shotwidth'] . '" alt="" />';
			}
			if ( $key == 'country' ) {
				$content = iml_countryname( $mod_array['country'] );
			}
			$sform -> addElement( new icms_form_elements_Label( $lang_def, $content ) );
		}
		$sform -> display();

		$orig_user = new icmsUser( $mod_array['modifysubmitter'] );
		$submittername = icms_member_user_Handler::getUserLink( $mod_array['modifysubmitter'] );
		$submitteremail = $orig_user -> getUnameFromId( 'email' );

		echo '<br /><div><b>' . _AM_IMLINKS_MOD_MODIFYSUBMITTER . '</b> ' . $submittername . '</div>';

		$sform = new icms_form_Theme( _AM_IMLINKS_MOD_PROPOSED, 'storyform', 'modifications.php' );
		$sform -> setExtra( 'enctype="multipart/form-data"' );

		foreach ( $mod_array as $key => $content ) {
			if ( in_array( $key, $not_allowed ) ) {
				continue;
			}
			$lang_def = constant( '_AM_IMLINKS_MOD_' . strtoupper( $key ) );

			if ( $key == 'cid' ) {
				$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $content;
				$row = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
				$content = $row['title'];
			}
			if ( $key == 'forumid' ) {
				$content = '';
				$modhandler = icms::handler( 'icms_module' );
				$icmsforumModule = &$modhandler -> getByDirname( 'newbb' );
				$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'bb_categories' ) . ' WHERE cid=' . $content;
				$content = '';
				if ( $icmsforumModule && $content > 0 ) {
					$content = '<a href="' . ICMS_URL . '/modules/newbb/viewforum.php?forum=' . $content . '">Forumid</a>';
				}
			}
			if ( $key == 'screenshot' ) {
				$content = '';
				if ( $content > 0 )
					$content = '<img src="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] . '/' . $logourl . '" width="' . icms::$module -> config['shotwidth'] . '" alt="" />';
			}
			if ( $key == 'country' ) {
				$content = iml_countryname( $mod_array['country'] );
			}
			$sform -> addElement( new icms_form_elements_Label( $lang_def, $content ) );
		}
		$button_tray = new icms_form_elements_Tray( '', '' );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'requestid', $requestid ) );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'lid', $mod_array['requestid'] ) );
		$hidden = new icms_form_elements_Hidden( 'op', 'changemodreq' );
		$button_tray -> addElement( $hidden );
		if ( $mod_array ) {
			$butt_dup = new icms_form_elements_Button( '', '', _AM_IMLINKS_BAPPROVE, 'submit' );
			$butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'changemodreq\'"' );
			$button_tray -> addElement( $butt_dup );
		}
		$butt_dupct2 = new icms_form_elements_Button( '', '', _AM_IMLINKS_BIGNORE, 'submit' );
		$butt_dupct2 -> setExtra( 'onclick="this.form.elements.op.value=\'ignoremodreq\'"' );
		$button_tray -> addElement( $butt_dupct2 );
		$sform -> addElement( $button_tray );
		$sform -> display();
		icms_cp_footer();
		break;

	case 'changemodreq':
		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_mod' ) . ' WHERE requestid=' . $requestid;
		$link_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

		$lid = $link_array['lid'];
		$cid = $link_array['cid'];
		$title = $link_array['title'];
		$url = $link_array['url'];
		$publisher = $icmsUser -> uname();
		$screenshot = $link_array['screenshot'];
		$description = $link_array['description'];
		$submitter = $link_array['modifysubmitter'];
		$country = $link_array['country'];
		$keywords = $link_array['keywords'];
		$item_tag = $link_array['item_tag'];
		$googlemap = $link_array['googlemap'];
		$yahoomap = $link_array['yahoomap'];
		$multimap = $link_array['multimap'];
		$street1 = $link_array['street1'];
		$street2 = $link_array['street2'];
		$town = $link_array['town'];
		$state = $link_array['state'];
		$zip = $link_array['zip'];
		$tel = $link_array['tel'];
		$fax = $link_array['fax'];
		$voip = $link_array['voip'];
		$mobile = $link_array['mobile'];
		$email = $link_array['email'];
		$vat = $link_array['vat'];
		$ttlat = $link_array['ttlat'];
		$ttlong = $link_array['ttlong'];
		$updated = time();

		icms::$xoopsDB -> query( "UPDATE " . icms::$xoopsDB -> prefix( 'imlinks_links' ) . " SET cid='$cid', title='$title', url='$url', submitter='$submitter', screenshot='$screenshot', publisher='$publisher', status='2', updated='$updated', description='$description', country='$country', keywords='$keywords', item_tag='$item_tag', googlemap='$googlemap', yahoomap='$yahoomap', multimap='$multimap', street1='$street1', street2='$street2', town='$town', state='$state', zip='$zip', tel='$tel', fax='$fax', voip='$voip', mobile='$mobile', email='$email', vat='$vat', ttlat='$ttlat', ttlong='$ttlong' WHERE lid=" . $lid );

		$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_mod' ) . ' WHERE requestid=' . $requestid;

		$result = icms::$xoopsDB -> query( $sql );
		redirect_header( 'index.php', 1, _AM_IMLINKS_MOD_REQUPDATED );
		break;

	case 'ignoremodreq':
		$sql = sprintf( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_mod' ) . ' WHERE requestid=' . $requestid );
		icms::$xoopsDB -> query( $sql );
		redirect_header( 'index.php', 1, _AM_IMLINKS_MOD_REQDELETED );
		break;

	case 'main':
	default:

		$start = isset( $_GET['start'] ) ? intval( $_GET['start'] ) : 0;
		$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_mod' ), 'requestid', 0 );
		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_mod' ) . ' ORDER BY requestdate DESC';
		$result = icms::$xoopsDB -> query( $sql, icms::$module -> config['admin_perpage'] , $start );
		$totalmodrequests = icms::$xoopsDB -> getRowsNum( icms::$xoopsDB -> query( $sql ) );

		icms_cp_header();
		iml_adminmenu( '', _AM_IMLINKS_MOD_MODREQUESTS );

		echo '<link rel="stylesheet" type="text/css" href="' . ICMS_URL . '/modules/' . $mydirname . '/style.css" />';

		echo '<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
				<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_MOD_MODREQUESTSINFO . '</div>
				<div style="padding: 8px;">' . _AM_IMLINKS_MOD_TOTMODREQUESTS . ' <b>' . $totalmodrequests . '</b></div>
			</div><br />';

		echo '<link rel="stylesheet" type="text/css" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/style.css" />';

		
		if ( $totalmodrequests > 0 ) {
			echo '<div class="imlinks_table" style="font-size: 10px;">
					<div class="imlinks_tblhdrrow">
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MOD_MODID . '</div>
						<div class="imlinks_tblcell">' . _AM_IMLINKS_MOD_MODTITLE . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MOD_MODIFYSUBMIT . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MOD_DATE . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_ACTION . '</div>
					</div>';
			while ( $link_arr = icms::$xoopsDB -> fetchArray( $result ) ) {
				$path = $mytree -> getNicePathFromId( $link_arr['requestid'], 'title', 'modifications.php?op=listmodreqshow&requestid' );
				$path = str_replace( '/', '', $path );
				$path = str_replace( ':', '', trim( $path ) );
				$title = trim( $path );
				$submitter = icms_member_user_Handler::getUserLink( $link_arr['modifysubmitter'] );;
				$requestdate = formatTimestamp( $link_arr['requestdate'], icms::$module -> config['dateformatadmin'] );

				echo '<div class="imlinks_tblrow">
						<div class="imlinks_tblhdrcell" style="text-align: center;">' . $link_arr['requestid'] . '</div>
						<div class="imlinks_tblcell">' . $title . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . $submitter . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . $requestdate . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">
						<a href="modifications.php?op=listmodreqshow&amp;requestid=' . $link_arr['requestid'] . '">' . $imagearray['view'] . '</a>
						</div>
					</div>';
			}
		} else {
			echo '<div style="border: 1px solid #ccc; text-align: center; margin: auto; width: 99%; font-weight: bold; padding: 3px; background-color: #FFFF99;">' . _AM_IMLINKS_MOD_NOMODREQUEST . '</div>';
		}
		echo '</div>';

		include_once ICMS_ROOT_PATH . '/class/pagenav.php';
		$pagenav = new icms_view_PageNav( $totalmodrequests, icms::$module -> config['admin_perpage'], $start, 'start' );
		echo '<div style="text-align: right; padding: 8px;">' . $pagenav -> renderNav() . '</div>';
		icms_cp_footer();
}
?>