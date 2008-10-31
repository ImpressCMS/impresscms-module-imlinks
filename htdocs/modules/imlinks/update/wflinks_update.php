<?php
if (!defined('IS_UPDATE_FILE')) {
	echo "Cannot access this file directly!";
	exit();
}

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

    $error = array();
    $output = array();
    /**
     * Delete newly created tables in imLinks
     */
    $table_array = array(
		imlinks_altcat,
		imlinks_broken,
        imlinks_cat,
		imlinks_indexpage,
        imlinks_links,
        imlinks_mod,
        imlinks_votedata,
        imlinks_indexpage
        );
    foreach ( $table_array as $table_arr ) {
        $result = $xoopsDB -> queryF( "DROP TABLE " . $xoopsDB -> prefix( $table_arr ) . " " );
        if ( !$result ) {
            $error[]="<b>Error:</b> Could <span style='color:#ff0000;font-weight:bold'>not delete</span> table <b>$table_arr</b> as it does not exist!";
        } else {
            $output[]="<b>Success:</b> Table <b>$table_arr</b> was <span style='color:#FF0000;font-weight:bold'>delete</span> Successfully";
        } 
    } 
    /**
     * Copy over old links tables without delete;
     */
    $table_array = array(
		'wflinks_altcat' => imlinks_altcat,
		'wflinks_broken' => imlinks_broken,
        'wflinks_cat' => imlinks_cat,
		'wflinks_indexpage' => imlinks_indexpage,
        'wflinks_links' => imlinks_links,
        'wflinks_mod' => imlinks_mod,
        'wflinks_votedata' => imlinks_votedata,
        ); 
    foreach ( $table_array as $table1 => $table2 ) {
        $result = $xoopsDB -> queryF( "ALTER TABLE " . $xoopsDB -> prefix( trim( $table1 ) ) . " RENAME TO " . $xoopsDB -> prefix( trim( $table2 ) ) . " " );
        if (!$result) {
            $error[]="<b>Error:</b> Could <span style='color:#ff0000;font-weight:bold'>not rename</span> table $table1 to table <b>$table2</b>!";
        } else {
            $output[]="<b>Success:</b> Table <b>$table1</b> was <span style='color:#FF0000;font-weight:bold'>renamed</span> to $table2 Successfully";
        } 
        unset($result);
    } 

    /**
     * Update comments
     */
    $modhandler = & xoops_gethandler( 'module' );
    $wflinksModule = & $modhandler -> getByDirname( 'imlinks' );
    $PD_id = $wflinksModule -> getVar( 'mid' );

    $modhandler = & xoops_gethandler( 'module' );
    $linksModule = & $modhandler -> getByDirname( 'wflinks' );
    $my_id = $linksModule -> getVar( 'mid' );

    $sql = "UPDATE " . $xoopsDB -> prefix( 'xoopscomments' ) . " SET com_modid = $PD_id WHERE com_modid = $my_id";
    $result2 = $xoopsDB -> queryF( $sql );

    echo "<p>...Updating</p>\n";
	
    if ( count( $error ) ) {
        foreach($error as $err) {
            echo $err . "<br>";
        } 
    } 
    if ( count( $output ) ) {
        echo "<p><span style='color:#0000FF;font-weight:bold'>There where updates made to your database.</span></p>\n";
        foreach($output as $nonerr) {
            echo $nonerr . "<br>";
        } 
    } 
    echo "<div align='center' style='margin: 20px;'><a style='border: 1px solid #5E5D63; color: #000000; background-color: #EFEFEF; padding: 4px 8px; text-align:center;' href='../../admin.php'><b>Finish updating Module</b></a></div>\n";

?>