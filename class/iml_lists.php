<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: iml_lists.php
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
 
class imlLists {
    var $value;
    var $selected;
    var $path='uploads';
    var $size;
    var $emptyselect;
    var $type;
    var $prefix;
    var $suffix;

    function imlLists( $path='uploads', $value=null, $selected='', $size=1, $emptyselect=0, $type=0, $prefix='', $suffix='' ) {
        $this -> value = $value;
        $this -> selection = $selected;
        $this -> path = $path;
        $this -> size = intval( $size );
        $this -> emptyselect = ( $emptyselect ) ? 0 : 1;
        $this -> type = $type;
    }

    function &getarray( $this_array ) {
        $ret="<select size='" . $this -> size() . "' name='$this->value()'>";
        if ($this -> emptyselect) {
            $ret .= "<option value='" . $this -> value() . "'>----------------------</option>";
        }
        foreach( $this_array as $content ) {
            $opt_selected="";
            if ( $content[0] == $this -> selected() ) {
                $opt_selected="selected='selected'";
            }
            $ret .= "<option value='" . $content . "' $opt_selected>" . $content . "</option>";
        }
        $ret .= "</select>";
        return $ret;
    }

    /**
     * Private to be called by other parts of the class
     */
    function &getDirListAsArray( $dirname ) {
        $dirlist = array();
        if ( is_dir( $dirname ) && $handle = opendir( $dirname ) ) {
            while ( false !== ( $file = readdir( $handle ) ) ) {
                if ( !preg_match( "/^[.]{1,2}$/", $file ) ) {
                    if ( strtolower( $file ) != 'cvs' && is_dir( $dirname . $file ) ) {
                        $dirlist[$file] = $file;
                    }
                }
            }
            closedir( $handle ); 
            reset( $dirlist );
        }
        return $dirlist;
    }

    function &getListTypeAsArray( $dirname, $type='', $prefix='', $noselection=1 ) {
		$filelist = array();
        switch ( trim( $type ) ) {
            case 'images':
                $types='[.gif|.jpg|.png]';
                if ( $noselection )
                    $filelist['']=_AM_IMLINKS_SHOWNOIMAGE;
                break;
            case 'html':
                $types='[.htm|.html|.xhtml|.php|.php3|.phtml|.txt]';
                if ( $noselection )
                    $filelist['']='No Selection';
                break;
            default:
                $types='';
                if ( $noselection )
                    $filelist['']='No Selected File';
                break;
        }

        if ( substr($dirname, -1) == '/' ) {
            $dirname = substr( $dirname, 0, -1 );
        }
		
        if ( is_dir( $dirname ) && $handle = opendir( $dirname) ) {
            while ( false !== ( $file = readdir( $handle ) ) ) {
                if ( !preg_match( "/^[.]{1,2}$/", $file ) && preg_match( "/$types$/i", $file ) && is_file( $dirname . '/' . $file ) ) {
                    if ( strtolower( $file ) == 'blank.gif' )
                        Continue;
                    $file = $prefix . $file;
                    $filelist[$file] = $file;
                }
            }
            closedir( $handle );
            asort( $filelist );
            reset( $filelist );
        }
        return $filelist;
    }

    function &getForum( $type = 1, $selected ) {
        switch ( icms_core_DataFilter::icms_substr( $type ) ) {
            case 2:
				$sql = 'SELECT id, name FROM ' . icms::$xoopsDB -> prefix( 'ibf_forums' ) . ' ORDER BY id';
                break;
            case 3:
                $sql = 'SELECT forum_id, forum_name FROM ' . icms::$xoopsDB -> prefix( 'pbb_forums' ) . ' ORDER BY forum_id';
                break;
			case 4:
				$sql = 'SELECT forum_id, forum_name FROM ' . icms::$xoopsDB -> prefix('bbex_forums') . ' ORDER BY forum_id';
				break;
            case 1:
            case 0:
            default:
                $sql = 'SELECT forum_id, forum_name FROM ' . icms::$xoopsDB -> prefix( 'bb_forums' ) . ' ORDER BY forum_id';
                break;
        } 
        $result = icms::$xoopsDB -> query( $sql );
	
	    $noforum = ( defined( '_AM_IMLINKS_NO_FORUM' ) ) ? _AM_IMLINKS_NO_FORUM : _AM_IMLINKS_NO_FORUM;		
	
		echo "<select size='1' name='forumid'>";
        echo "<option value='0'>" . $noforum . "</option>";
        while ( list( $forum_id, $forum_name ) = icms::$xoopsDB -> fetchRow( $result ) ) {
	        $opt_selected = '';
            if ( $forum_id == $selected ) {
                $opt_selected = "selected='selected'";
            } 
            echo "<option value='" . $forum_id . "' $opt_selected>" . $forum_name . "</option>";
        } 
        echo "</select>"; 
       	return $forum_array;
    } 	
	
    function value() {
        return $this->value;
    }

    function selected() {
        return $this->selected;
    }

    function paths() {
        return $this->path;
    }

    function size() {
        return $this->size;
    }

    function emptyselect() {
        return $this->emptyselect;
    }

    function type() {
        return $this->type;
    }

    function prefix() {
        return $this->prefix;
    }

    function suffix() {
        return $this->suffix;
    }
}
?>