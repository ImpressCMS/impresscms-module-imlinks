<?php
/**
 * -----------------------------------------------------------------------------
 * About this sitemap plug-in : wflinks for sitemap
 *
 * Name					: 	wflinks.php
 * Author				: 	DuGris (http://www.dugris.info)
 
 * Name					: 	imlinks.php
 * By					: 	McDonald (http://www.dugris.info)
 *
 * Necessary modules		:	sitemap 1.30 (http://xoops.peak.ne.jp/)
 *							imlinks 1.00 ( http://members.lycos.nl/mcdonaldsstore/phpBB2/ )
 *
 * -----------------------------------------------------------------------------
**/

function b_sitemap_imlinks() {
	global $sitemap_configs;
	global $xoopsDB, $xoopsUser, $xoopsModule;
	$myts = &MyTextSanitizer::getInstance();

	include_once ICMS_ROOT_PATH . '/class/xoopstree.php';
	$mytree = new XoopsTree( $xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );

	$MyModule = &xoops_gethandler( 'module' );
	$imlinksModule = $MyModule -> getByDirname( 'imlinks' );

	$MyConfig = &xoops_gethandler( 'config' );
	$imlinksConfig = $MyConfig -> getConfigsByCat( 0, $imlinksModule -> getVar( 'mid' ) );

	$groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
	$gperm_handler = &xoops_gethandler( 'groupperm' );

	$sitemap = array();
	$sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE pid=0 ORDER BY weight';
	$result = $xoopsDB -> queryF( $sql );
	while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
		if ( $gperm_handler -> checkRight( 'imLinkCatPerm', $myrow['cid'], $groups, $imlinksModule -> getVar( 'mid' ) ) ) {
        	$i = intval( $myrow['cid'] );
			$sitemap['parent'][$i]['id'] = intval( $myrow['cid'] );
			$sitemap['parent'][$i]['title'] = $myts -> makeTboxData4Show( $myrow['title'] );
			$sitemap['parent'][$i]['url'] = 'viewcat.php?cid=' . intval( $myrow['cid'] );
			if ( $sitemap_configs['show_subcategoris'] ) {
				$arr = array();
				$arr = $mytree -> getFirstChild( $myrow['cid'], 'title' );
				foreach( $arr as $key => $ele ) {
					if ( $gperm_handler -> checkRight( 'imLinkCatPerm', $ele['cid'], $groups, $imlinksModule -> getVar( 'mid' ) ) ) {
						$j = $key;
						$sitemap['parent'][$i]['child'][$j]['id'] = intval( $ele['cid'] );
						$sitemap['parent'][$i]['child'][$j]['title'] = $myts -> makeTboxData4Show( $ele['title'] );
						$sitemap['parent'][$i]['child'][$j]['image'] = 2;
						$sitemap['parent'][$i]['child'][$j]['url'] = 'viewcat.php?cid=' . intval( $ele['cid'] );
					}
				}
			}
		}
	}
	return $sitemap;
}
?>