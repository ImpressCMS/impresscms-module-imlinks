<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: mylinks_update.php
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

if (!defined('IS_UPDATE_FILE')) {
	echo 'Cannot access this file directly!';
	exit();
}

    $error = array();
    $output = array();
	
    // Delete newly created tables in imLinks
    $table_array = array(
		imlinks_altcat,
		imlinks_broken,
        imlinks_cat,
		imlinks_indexpage,
        imlinks_links,
        imlinks_mod
        );
    foreach ( $table_array as $table_arr ) {
        $result = $xoopsDB -> queryF( "DROP TABLE " . $xoopsDB -> prefix( $table_arr ) . " " );
        if ( !$result ) {
            $error[]="<b>Error:</b> Could <span style='color:#ff0000;font-weight:bold'>not delete</span> table <b>$table_arr</b> as it does not exist!";
        } else {
            $output[]="<b>Success:</b> Table <b>$table_arr</b> was <span style='color:#FF0000;font-weight:bold'>delete</span> Successfully";
        } 
    } 
	echo '&nbsp;';
    // Copy over old links tables without delete;
    $table_array = array(
		'wflinks_altcat' 	=> imlinks_altcat,
		'wflinks_broken' 	=> imlinks_broken,
        'wflinks_cat' 		=> imlinks_cat,
		'wflinks_indexpage' => imlinks_indexpage,
        'wflinks_links' 	=> imlinks_links,
        'wflinks_mod' 		=> imlinks_mod
        ); 
    foreach ( $table_array as $table1 => $table2 ) {
        $result = $xoopsDB -> queryF( "CREATE TABLE " . $xoopsDB -> prefix( trim( $table2 ) ) . " SELECT * FROM " . $xoopsDB -> prefix( trim( $table1 ) ) . " " );
        if (!$result) {
            $error[]="<b>Error:</b> Could <span style='color: #ff0000; font-weight: bold;'>not rename</span> table $table1 to table <b>$table2</b>!";
        } else {
            $output[]="<b>Success:</b> Table <b>$table1</b> was <span style='color: #FF0000; font-weight:bold;'>copied</span> to $table2 Successfully";
        } 
        unset($result);
    } 
	
$i=0;
// Make changes to table imlinks_altcat
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_altcat') . " ADD PRIMARY KEY(lid,cid)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );

// Make changes to table imlinks_broken
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_broken') . " ADD PRIMARY KEY(reportid)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_broken') . " ADD INDEX(lid)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_broken') . " ADD INDEX(sender)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_broken') . " ADD INDEX(ip)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_broken') . " CHANGE `reportid` `reportid` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );

// Make changes to table imlinks_cat
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_cat') . " ADD PRIMARY KEY(cid)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_cat') . " CHANGE `cid` `cid` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_cat') . " ADD INDEX(pid)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );

// Make changes to table imlinks_indexpage
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_indexpage') . " ADD FULLTEXT(indexheading)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_indexpage') . " ADD FULLTEXT(indexheader)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_indexpage') . " ADD FULLTEXT(indexfooter)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );

// Make changes to table imlinks_links
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " ADD PRIMARY KEY(lid)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " ADD INDEX(cid)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " ADD INDEX(status)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " ADD INDEX(title)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " CHANGE `lid` `lid` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
// Drop old rating system
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " DROP rating");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " DROP votes");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " ADD COLUMN rating DOUBLE(6,4) NOT NULL default '0.0000' AFTER hits");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " ADD COLUMN votes INT(11) unsigned NOT NULL default '0' AFTER rating");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_links') . " ADD COLUMN nobreak INT(1) NOT NULL default '0' AFTER vat");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );

// Make changes to table imlinks_mod
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_mod') . " ADD INDEX(requestid)");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_mod') . " ADD COLUMN email VARCHAR(60) NOT NULL default '' AFTER mobile");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_mod') . " ADD COLUMN vat VARCHAR(25) NOT NULL default '' AFTER email");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_mod') . " ADD COLUMN nobreak INT(1) NOT NULL default '0' AFTER vat");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf( "ALTER TABLE " . $xoopsDB -> prefix( 'imlinks_mod') . " CHANGE `requestid` `requestid` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );


    // Update comments
    $modhandler = &xoops_gethandler( 'module' );
    $imlinksModule = &$modhandler -> getByDirname( $mydirname );
    $imlinks_id = $imlinksModule -> getVar( 'mid' );

    $modhandler = &xoops_gethandler( 'module' );
    $wflinksModule = &$modhandler -> getByDirname( 'wflinks' );
    $wflinks_id = $wflinksModule -> getVar( 'mid' );

    $sql = 'UPDATE ' . $xoopsDB -> prefix( 'xoopscomments' ) . ' SET com_modid=' . $imlinks_id. ' WHERE com_modid=' . $wflinks_id;
    $result2 = $xoopsDB -> queryF( $sql );

    echo '<p>...Updating</p>';
	
    if ( count( $error ) ) {
        foreach($error as $err) {
            echo $err . '<br>';
        } 
    } 
    if ( count( $output ) ) {
        echo '<p><span style="color: #0000FF; font-weight: bold;">There where updates made to your database.</span></p>';
        foreach($output as $nonerr) {
            echo $nonerr . '<br>';
        } 
    } 
    echo '<div align="left" style="margin: 20px;">
			<a style="border: 1px solid #5E5D63; color: #000000; background-color: #EFEFEF; padding: 4px 8px; text-align: center;" href="' . ICMS_URL . '/modules/system/admin.php?fct=modulesadmin">
			<b>Finish updating Module</b>
			</a>
		 </div>';
?>