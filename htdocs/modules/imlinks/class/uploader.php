<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: uploader.php
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

mt_srand((double) microtime() * 1000000);

class imLinksMediaUploader {
	var $mediaName;
	var $mediaType;
	var $mediaSize;
	var $mediaTmpName;
	var $mediaError;
	var $uploadDir='';
	var $allowedMimeTypes = array();
	var $maxFileSize = 0;
	var $maxWidth;
	var $maxHeight;
	var $targetFileName;
	var $prefix;
	var $ext;
	var $dimension;
	var $errors = array();
	var $savedDestination;
	var $savedFileName;
	/**
	* No admin check for uploads
	*/
	var $noadmin_sizecheck;
	/**
	* Constructor
	* @param string $uploadDir 
	* @param array $allowedMimeTypes 
	* @param int $maxFileSize 
	* @param int $maxWidth 
	* @param int $maxHeight 
	* @param int $cmodvalue 
	*/
	function imLinksMediaUploader( $uploadDir, $allowedMimeTypes = 0, $maxFileSize, $maxWidth = 0, $maxHeight = 0 ) {
		if ( is_array( $allowedMimeTypes ) ) {
			$this -> allowedMimeTypes = &$allowedMimeTypes;
		}
		$this -> uploadDir = $uploadDir;
		$this -> maxFileSize = intval( $maxFileSize );
		if ( isset( $maxWidth ) ) {
			$this -> maxWidth = intval( $maxWidth );
		}
		if ( isset( $maxHeight ) ) {
			$this -> maxHeight = intval( $maxHeight );
		}
	}

	function noAdminSizeCheck( $value ) {
		$this -> noadmin_sizecheck = $value;
	}

	/**
	* Fetch the uploaded file
	* @param string $media_name Name of the file field
	* @param int $index Index of the file (if more than one uploaded under that name)
	* @global $HTTP_POST_FILES
	* @return bool 
	*/
	function fetchMedia( $media_name, $index = null ) {
		global $_FILES;

	if ( !isset( $_FILES[$media_name] ) ) {
		$this -> setErrors( _AM_IMLINKS_READWRITEERROR );
		return false;
	} elseif ( is_array( $_FILES[$media_name]['name'] ) && isset( $index ) ) {
		$index = intval( $index );
		$this -> mediaName = ( get_magic_quotes_gpc() ) ? stripslashes( $_FILES[$media_name]['name'][$index] ) : $_FILES[$media_name]['name'][$index];
		$this -> mediaType = $_FILES[$media_name]['type'][$index];
		$this -> mediaSize = $_FILES[$media_name]['size'][$index];
		$this -> mediaTmpName = $_FILES[$media_name]['tmp_name'][$index];
		$this -> mediaError = !empty($_FILES[$media_name]['error'][$index]) ? $_FILES[$media_name]['error'][$index] : 0;
	} else {
		$media_name = @$_FILES[$media_name];
		$this -> mediaName = ( get_magic_quotes_gpc() ) ? stripslashes( $media_name['name'] ) : $media_name['name'];
		$this -> mediaName = $media_name['name'];
		$this -> mediaType = $media_name['type'];
		$this -> mediaSize = $media_name['size'];
		$this -> mediaTmpName = $media_name['tmp_name'];
		$this -> mediaError = !empty( $media_name['error'] ) ? $media_name['error'] : 0;
	}
		$this -> dimension = getimagesize( $this -> mediaTmpName );

		$this -> errors = array();

		if ( intval( $this -> mediaSize ) < 0 ) {
			$this -> setErrors( _AM_IMLINKS_INVALIDFILESIZE );
			return false;
		}
		if ( $this -> mediaName == '' ) {
			$this -> setErrors( _AM_IMLINKS_FILENAMEEMPTY );
			return false;
		}

		if ( $this -> mediaTmpName == 'none' ) {
			$this -> setErrors( _AM_IMLINKS_NOFILEUPLOAD );
			return false;
		}

		if ( !is_uploaded_file( $this -> mediaTmpName ) ) {
			switch ( $this -> mediaError ) {
				case 0: // no error; possible file attack!
					$this -> setErrors( _AM_IMLINKS_UPLOADERRORZERO );
					break;
				case 1: // uploaded file exceeds the upload_max_filesize directive in php.ini
						// if ($this->noadmin_sizecheck)
						// {
						// return true;
						//} 
					$this -> setErrors( _AM_IMLINKS_UPLOADERRORONE );
					break;
				case 2: // uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form
					$this -> setErrors( _AM_IMLINKS_UPLOADERRORTWO );
					break;
				case 3: // uploaded file was only partially uploaded
					$this -> setErrors( _AM_IMLINKS_UPLOADERRORTHREE );
					break;
				case 4: // no file was uploaded
					$this -> setErrors( _AM_IMLINKS_UPLOADERRORFOUR );
					break;
				default: // a default error, just in case!  :)
					$this -> setErrors( _AM_IMLINKS_UPLOADERRORFIVE );
					break;
			}
			return false;
		}
		return true;
	}

	/**
	* Set the target filename
	* @param string $value
	*/
	function setTargetFileName( $value ) {
		$this -> targetFileName = strval( trim( $value ) );
	}

	/**
	* Set the prefix
	* @param string $value
	*/
	function setPrefix( $value ) {
		$this -> prefix = strval( trim( $value ) );
	}

	/**
	* Get the uploaded filename
	* @return string
	*/
	function getMediaName() {
		return $this -> mediaName;
	}

	/**
	* Get the type of the uploaded file
	* @return string 
	*/
	function getMediaType() {
		return $this -> mediaType;
	}

	/**
	* Get the size of the uploaded file
	* @return int 
	*/
	function getMediaSize() {
		return $this -> mediaSize;
	}

	/**
	* Get the temporary name that the uploaded file was stored under
	* @return string 
	*/
	function getMediaTmpName() {
		return $this -> mediaTmpName;
	}

	/**
	* Get the saved filename
	* @return string
	*/
	function getSavedFileName() {
		return $this -> savedFileName;
	}

	/**
	* Get the destination the file is saved to
	* @return string
	*/
	function getSavedDestination() {
		return $this -> savedDestination;
	}

	/**
	* Check the file and copy it to the destination
	* @return bool
	*/
	function upload( $chmod = 0644 ) {
		if ( $this -> uploadDir == '' ) {
			$this -> setErrors( _AM_IMLINKS_NOUPLOADDIR );
			return false;
		}

		if ( !is_dir( $this -> uploadDir ) ) {
			$this -> setErrors( _AM_IMLINKS_FAILOPENDIR . $this -> uploadDir );
			return false;
		}

		if ( !is_writeable( $this -> uploadDir ) ) {
			$this -> setErrors( _AM_IMLINKS_FAILOPENDIRWRITEPERM . $this -> uploadDir );
			return false;
		}

		if ( !$this -> checkMaxFileSize() ) {
			$this -> setErrors( sprintf( _AM_IMLINKS_FILESIZEMAXSIZE , $this -> mediaSize, $this -> maxFileSize ) );
			return false;
		}

		if ( is_array( $this -> dimension ) ) {
			if ( !$this -> checkMaxWidth( $this -> dimension[0] ) ) {
				$this -> setErrors( sprintf( _AM_IMLINKS_FILESIZEMAXWIDTH, $this -> dimension[0], $this -> maxWidth ) );
				return false;
			}
			if ( !$this -> checkMaxHeight($this -> dimension[1])) {
				$this -> setErrors( sprintf( _AM_IMLINKS_FILESIZEMAXHEIGHT, $this -> dimension[1], $this -> maxHeight ) );
				return false;
			}
		}

		if ( !$this -> checkMimeType() ) {
			$this -> setErrors( _AM_IMLINKS_MIMENOTALLOW . $this -> mediaType );
			return false;
		}

		if ( !$this -> _copyFile( $chmod ) ) {
			$this -> setErrors( _AM_IMLINKS_FAILEDUPLOADING . $this -> mediaName );
			return false;
		}

		if ( count( $this -> errors ) > 0 ) {
			return false;
		}
		return true;
	}

	/**
	* Copy the file to its destination
	* @return bool
	*/
	function _copyFile( $chmod ) {
		$matched = array();
		if ( !preg_match( "/\.([a-zA-Z0-9]+)$/", $this -> mediaName, $matched ) ) {
			return false;
		}
		if ( isset( $this -> targetFileName ) ) {
			$this -> savedFileName = $this -> targetFileName;
		} elseif ( isset( $this -> prefix ) ) {
			$this -> savedFileName = uniqid( $this -> prefix ) . '.' . strtolower( $matched[1] );
		} else {
			$this -> savedFileName = strtolower( $this -> mediaName );
		}
		$this -> savedFileName = preg_replace( '!\s+!', '_', $this -> savedFileName );
		$this->savedDestination = $this -> uploadDir . $this -> savedFileName;
		if ( is_file( $this -> savedDestination ) && !!is_dir( $this -> savedDestination ) ) {
			$this -> setErrors( _AM_IMLINKS_FILE . $this -> mediaName . _AM_IMLINKS_ALREADYEXISTTRYAGAIN );
			return false;
		}
		if ( !move_uploaded_file( $this -> mediaTmpName, $this -> savedDestination ) ) {
			return false;
		}
		@chmod( $this -> savedDestination, $chmod );
		return true;
	}

	/**
	* Is the file the right size?
	* @return bool
	*/
	function checkMaxFileSize() {
		if ( $this -> noadmin_sizecheck ) {
			return true;
		}
		if ( $this -> mediaSize > $this -> maxFileSize ) {
			return false;
		}
		return true;
	}

	/**
	* Is the picture the right width?
	* @return bool 
	*/
	function checkMaxWidth( $dimension ) {
		if ( !isset( $this->maxWidth ) ) {
			return true;
		}
		if ( $dimension > $this -> maxWidth ) {
			return false;
		}
		return true;
	}

	/**
	* Is the picture the right height?
	* @return bool 
	*/
	function checkMaxHeight( $dimension ) {
		if ( !isset( $this -> maxHeight ) ) {
			return true;
		}
		if ( $dimension > $this -> maxWidth ) {
			return false;
		}
		return true;
	}

	/**
	* Is the file the right Mime type
	* (is there a right type of mime? ;-)
	* @return bool
	*/
	function checkMimeType() {
		if ( count( $this -> allowedMimeTypes ) > 0 && !in_array( $this -> mediaType, $this -> allowedMimeTypes ) ) {
			return false;
		} else {
			return true;
		}
	}

	/**
	* Add an error
	* @param string $error 
	*/
	function setErrors( $error ) {
		$this -> errors[] = trim( $error );
	}

	/**
	* Get generated errors
	* @param bool $ashtml Format using HTML?
	* @return array |string		Array of array messages OR HTML string
	*/
	function &getErrors( $ashtml = true ) {
		if ( !$ashtml ) {
			return $this -> errors;
		} else {
			$ret='';
			if ( count( $this -> errors ) > 0 ) {
				$ret = _AM_IMLINKS_ERRORSRETURNUPLOAD;
				foreach ( $this -> errors as $error ) {
					$ret .= $error . '<br />';
				}
			}
			return $ret;
		}
	}
}
?>