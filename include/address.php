<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: address.php
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

/**
 *
 * International Address Formats: 	http://www.bitboost.com/ref/international-address-formats.html#Formats
 *								http://www.upu.int/post_code/en/postal_addressing_systems_member_countries.shtml
 */

function iml_address( $street1, $street2, $town, $state, $zip, $country='' ) {

	switch( $country ) {
	
	// Albania
	case 'AL':  
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
		
	// Argentina
	case 'AR':  
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;	
		
	//Armenia
	case 'AM': 
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
		
	// Australia
	case 'AU':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $state . '&nbsp;' . $zip;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . ',&nbsp;' . $state . '&nbsp;' . $zip;
			} else {
				$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
			}
		}
		break;
		
	// Austria
	case 'AT':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
		
	// Azerbaijan
	case 'AZ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Bahamas
	case 'BS':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $state;
		} else {
			$address = $street1 . '<br />' . $town . ',&nbsp;' . $state;
		}	
	break;
	
	// Bahrain
	case 'BH':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}	
		break;
	
	// Bangladesh 
	case 'BD':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;-&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;-&nbsp;' . $zip;
		}	
		break;
	
	// Barbados
	case 'BB':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}	
		break;
	
	// Belarus 
	case 'BY':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;	
		}
		break;
	
	// Belgium
	case 'BE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;	
		}
		break;
	
	// Belize 
	case 'BZ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $state;	
		}
		break;
	
	// Benin 
	case 'BJ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;	
		}
		break;
	
	// Bermuda 
	case 'BM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Bhutan 
	case 'BT':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;	
		}
		break;
	
	// Bolivia 
	case 'BO':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;	
		}
		break;
	
	// Bosnia and Herzegovina 
	case 'BA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;	
		}
		break;
	
	// Botswana 
	case 'BW':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;	
		}
		break;
	
	// Brazil 
	case 'BR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
		}
		break;
	
	// Brunei Darussalam 
	case 'BN':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $state . '&nbsp;' . $zip;
		}
		break;
	
	// Bulgaria 
	case 'BG':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;	
		}
		break;
	
	// Burkina Faso 
	case 'BF':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;	
		}
		break;
	
	// Burundi 
	case 'BI':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;	
		}
		break;
	
	// Cambodia 
	case 'KH':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '&nbsp;' . $zip;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . '<br />' . $state . '&nbsp;' . $zip;
			} else {
				$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
			}
		}		
		break;
	
	// Cameroon
	case 'CM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;	
		}
		break;
	
	// Canada 
	case 'CA':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $state . '&nbsp;' . $zip;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . ',&nbsp;' . $state . '&nbsp;' . $zip;
			} else {
				$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
			}
		}		
		break;
	
	// Cape Verde 
	case 'CV':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town . '<br />' . $state;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town . '<br />' . $state;
			} else {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
			}
		}		
		break;
	
	// Cayman Islands 
	case 'KY':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}		
		break;
	
	// Chad 
	case 'TD':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}		
		break;
	
	// Chile 
	case 'CL':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}		
		break;
	
	// China 
	case 'CN':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town . '<br />' . $state;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town . '<br />' . $state;
			} else {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
			}
		}
		break;
	
	// Colombia 
	case 'CO':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;-&nbsp;' . $state;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . '&nbsp;-&nbsp;' . $state;
			} else {
				$address = $street1 . '<br />' . $town;
			}
		}
		break;
	
	// Comoros 
	case 'KM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}		
		break;
	
	// Congo 
	case 'CG':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}		
		break;
	
	// Congo (Dem. Rep.) 
	case 'CD':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}		
		break;
	
	// Cook Islands 
	case 'CK':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Costa Rica 
	case 'CR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Croatia 
	case 'HR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Cuba 
	case 'CU':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Cyprus 
	case 'CY':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Czech Republic 
	case 'CZ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . ',&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . ',&nbsp;' . $town;
		}		
		break;
	
	// Denmark 
	case 'DK':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}  
		break;
	
	// Djibouti 
	case 'DJ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}  
		break;
	
	// Dominica 
	case 'DM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}  
		break;
	
	// Dominican Republic 
	case 'DO':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $state . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $state . '<br />' . $zip . '&nbsp;' . $town;
		}  
		break;
	
	// Ecuador 
	case 'EC':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '<br />' . $town;
		}  
		break;
	
	// Egypt 
	case 'EG':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $zip;
		} 
		break;
	
	// El Salvador 
	case 'SV':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		} 
		break;
	
	// Equatorial Guinea 
	case 'GQ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		} 
		break;
	
	// Eritrea 
	case 'ER':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		} 
		break;
	
	// Estonia 
	case 'EE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . ',&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . ',&nbsp;' . $town;
		}		
		break;
	
	// Ethiopia 
	case 'ET':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		} 
		break;
	
	// Falkland Islands (Malvinas) 
	case 'FK':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		} 
		break;
	
	// Faroe Islands 
	case 'FO':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		} 
		break;
	
	// Fiji 
	case 'FJ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $state . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $state . '<br />' . $town;
		}
		break;
	
	// Finland
	case 'FI':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// France 
	case 'FR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Gabon 
	case 'GA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $zip;
		}
		break;
	
	// Gambia 
	case 'GM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Georgia 
	case 'GE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Germany 
	case 'DE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Ghana 
	case 'GH':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Gibraltar
	case 'GI':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
			} else {
				$address = $street1 . '<br />' . $town . '<br />' . $zip;
			}
		}
		break;
	
	// Greece 
	case 'GR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Greenland 
	case 'GL':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
		
	// Grenada 
	case 'GD':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Guatemala 
	case 'GT':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '-' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '-' . $town;
		}
		break;
	
	// Guinea 
	case 'GN':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Guyana 
	case 'GY':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Haiti 
	case 'HT':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Honduras 
	case 'HN':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town . ',&nbsp;' . $state;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town . ',&nbsp;' . $state;
		}
		break;
	
	// Hong Kong 
	case 'HK':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Iceland 
	case 'IS':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// India
	case 'IN':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '-' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '-' . $zip;
		}
		break;
	
	// Indonesia 
	case 'ID':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {	
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}	
		break;
	
	// Iraq 
	case 'IQ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $state . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . ',&nbsp;' . $state . '<br />' . $zip;
		}	
		break;
	
	// Ireland 
	case 'IE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}	
		break;
	
	// Isle of Man 
	case 'IM':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
			} else {
				$address = $street1 . '<br />' . $town . '<br />' . $zip;
			}
		}
		break;
	
	// Israel 
	case 'IL':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Italy 
	case 'IT':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Jamaica 
	case 'JM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Japan 
	case 'JP':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Jersey 
	case 'JE':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
			} else {
				$address = $street1 . '<br />' . $town . '<br />' . $zip;
			}
		}
		break;
	
	// Jordan 
	case 'JO':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Kazakhstan 
	case 'KZ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
		}
		break;
	
	// Kenya
	case 'KE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $zip;
		}
		break;
	
	// Kiribati 
	case 'KI':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $state;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
		
	// Korea (South) 
	case 'KR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $state;
		}
		break;
	
	// Kuwait 
	case 'KW':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Kyrgyzstan 
	case 'KG':
		if ( $street2 ) {
			$address = $zip . '&nbsp;' . $town . '<br />' . $street1 . '<br />' . $street2;
		} else {
			$address = $zip . '&nbsp;' . $town . '<br />' . $street1;
		}
		break;
	
	// Latvia 
	case 'LV':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . ',&nbsp;' . $zip;
		}
		break;
	
	// Lebanon 
	case 'LB':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Lesotho 
	case 'LS':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Liberia 
	case 'LR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Libya 
	case 'LY':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Lithuania 
	case 'LT':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Luxembourg 
	case 'LU':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Madagascar 
	case 'MG':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Malawi 
	case 'MW':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Malaysia 
	case 'MY':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town . ',&nbsp;' . $state;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
			}	
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town . ',&nbsp;' . $state;
			} else {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
			}	
		}	
		break;
	
	// Mali 
	case 'ML':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Malta 
	case 'MT':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $zip;
		}
		break;
	
	// Mauritania 
	case 'MR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Mexico 
	case 'MX':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town . ',&nbsp;' . $state;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
			}	
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town . ',&nbsp;' . $state;
			} else {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
			}	
		}	
		break;
	
	// Moldova 
	case 'MD':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Monaco 
	case 'MC':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Mongolia 
	case 'MN':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . ',&nbsp;' . $zip;
		}
		break;
	
	// Montenegro 
	case 'ME':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Morocco 
	case 'MA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Mozambique 
	case 'MZ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Myanmar 
	case 'MM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . ',&nbsp;' . $zip;
		}
		break;
	
	// Namibia 
	case 'NA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Nauru 
	case 'NR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Nepal 
	case 'NP':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Netherlands 
	case 'NL':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Netherlands Antilles 
	case 'AN':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// New Zealand 
	case 'NZ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Nicaragua 
	case 'NI':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '<br />' . $town;
		}
		break;
	
	// Niger 
	case 'NE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Nigeria 
	case 'NG':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip . '<br />' . $state;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
			}	
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . '&nbsp;' . $zip . '<br />' . $state;
			} else {
				$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
			}	
		}	
		break;
	
	// Norway 
	case 'NO':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Oman 
	case 'OM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '<br />' . $town;
		}
		break;
	
	// Pakistan 
	case 'PK':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '-' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '-' . $zip;
		}	
		break;
	
	// Palau 
	case 'PW':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $state . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . ',&nbsp;' . $state . '&nbsp;' . $zip;
		}
		break;
	
	// Panama 
	case 'PA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $state;
		}
		break;
	
	// Papua New Guinea 
	case 'PG':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Paraguay 
	case 'PY':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	//Peru 
	case 'PE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Philippines 
	case 'PH':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '<br />' . $town;
		}	
		break;
	
	// Poland 
	case 'PL':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}	
		break;
	
	// Portugal 
	case 'PT':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Puerto Rico 
	case 'PR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Qatar 
	case 'QA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Romania 
	case 'RO':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town . '<br />' . $state;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town . '<br />' . $state;
			} else {
				$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
			}
		}
		break;
	
	// Russian Federation 
	case 'RU':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Rwanda 
	case 'RW':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Saudi Arabia 
	case 'SA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Senegal 
	case 'SN':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Serbia 
	case 'RS':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Seychelles 
	case 'SC':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Sierra Leone 
	case 'SL':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Singapore 
	case 'SG':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Slovakia 
	case 'SK':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Slovenia 
	case 'SI':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Somalia 
	case 'SO':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . ',&nbsp;' . $zip;
		}
		break;
	
	// South Africa 
	case 'ZA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Korea (South) 
	case 'KP':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . ',&nbsp;' . $zip;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $zip;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . '<br />' . $state . ',&nbsp;' . $zip;
			} else {
				$address = $street1 . '<br />' . $town . ',&nbsp;' . $zip;
			}
		}
		break;
	
	// Spain 
	case 'ES':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Sri Lanka 
	case 'LK':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $zip;
		}
		break;
	
	// Sudan 
	case 'SD':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '<br />' . $town;
		}
		break;
	
	// Suriname 
	case 'SR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Swaziland 
	case 'SZ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $zip;
		}
		break;
	
	// Sweden 
	case 'SE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Switzerland 
	case 'CH':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Taiwan 
	case 'TW':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip;
		}
		break;
	
	// Thailand 
	case 'TH':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $state . '&nbsp;' . $zip;
		}	
		break;
		
	// Tunisia 
	case 'TN':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Turkey 
	case 'TR':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Turkmenistan 
	case 'TM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Tuvalu 
	case 'TV':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $state;
		}
		break;
	
	// Uganda 
	case 'UG':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Ukraine 
	case 'UA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $zip;
		}
		break;
	
	// United Arab Emirates 
	case 'AE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// United Kingdom 
	case 'UK':
		if ( $street2 ) {
			if ( $state ) {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
			} else {
				$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
			}
		} else {
			if ( $state ) {
				$address = $street1 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;
			} else {
				$address = $street1 . '<br />' . $town . '<br />' . $zip;
			}
		}
		break;
	
	// United States 
	case 'US':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . ',&nbsp;' . $state . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . ',&nbsp;' . $state . '&nbsp;' . $zip;
		}
		break;
	
	// Uruguay 
	case 'UY':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Uzbekistan 
	case 'UZ':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $zip;
		}
		break;
	
	// Vatican City State 
	case 'VA':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Venezuela 
	case 'VE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '&nbsp;' . $zip . ',&nbsp;' . $state;
		} else {
			$address = $street1 . '<br />' . $town . '&nbsp;' . $zip . ',&nbsp;' . $state;
		}
		break;
	
	// Viet Nam 
	case 'VN':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '&nbsp;' . $zip;
		} else {
			$address = $street1 . '<br />' . $town . '<br />' . $state . '&nbsp;' . $zip;
		}
		break;
	
	// Yemen 
	case 'YE':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Zambia 
	case 'ZM':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $zip . '&nbsp;' . $town;
		} else {
			$address = $street1 . '<br />' . $zip . '&nbsp;' . $town;
		}
		break;
	
	// Zimbabwe 
	case 'ZW':
		if ( $street2 ) {
			$address = $street1 . '<br />' . $street2 . '<br />' . $town;
		} else {
			$address = $street1 . '<br />' . $town;
		}
		break;
	
	// Default address   
	case '':
	case '-':
		$address = $street1 . '<br />' . $street2 . '<br />' . $town . '<br />' . $state . '<br />' . $zip;   
		break;
	}
  return $address;
}
?>