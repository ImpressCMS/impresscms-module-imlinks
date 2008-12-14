<?php
/**
 * $Id: index.php v 1.00 03 july 2004 John N Exp $
 * Module: WF-Links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

$adminmenu[1]['title'] = _MI_WFL_BINDEX;
$adminmenu[1]['link']="admin/index.php";
$adminmenu[2]['title'] = _MI_WFL_INDEXPAGE;
$adminmenu[2]['link']="admin/indexpage.php";
$adminmenu[3]['title'] = _MI_WFL_MCATEGORY;
$adminmenu[3]['link']="admin/category.php";
$adminmenu[4]['title'] = _MI_WFL_MLINKS;
//$adminmenu[4]['link']="admin/index.php?op=linkload";
$adminmenu[4]['link']="admin/index.php?op=edit";
$adminmenu[5]['title'] = _MI_WFL_MUPLOADS;
$adminmenu[5]['link']="admin/upload.php";
$adminmenu[7]['title'] = _MI_WFL_MVOTEDATA;
$adminmenu[7]['link']="admin/votedata.php";
$adminmenu[8]['title'] = _MI_WFL_BLOCKADMIN;
$adminmenu[8]['link']="admin/myblocksadmin.php"; 

?>