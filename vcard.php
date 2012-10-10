<?php
/*
* Filename.......: vcard_example.php
* Author.........: Troy Wolf [troy@troywolf.com]
* Last Modified..: 2005/07/14 13:30:00
* Description....: An example of using Troy Wolf's class_vcard.
*/

/*
Modify the path according to your system.
*/
require_once('/class/class_vcard.php');
include_once 'header.php';

$lid = iml_cleanRequestVars( $_REQUEST, 'lid', 0 );
$lid = intval( $lid );

$result = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . intval( $lid ) );
$vcard_arr = icms::$xoopsDB -> fetchArray( $result );

$title		= $vcard_arr['title'];
$street1	= $vcard_arr['street1'];
$street2	= $vcard_arr['street2'];
$town		= $vcard_arr['town'];
$zip		= $vcard_arr['zip'];
$state		= $vcard_arr['state'];
$country	= iml_countryname( $vcard_arr['country'] );
$tel		= $vcard_arr['tel'];
$mobile		= $vcard_arr['mobile'];
$fax		= $vcard_arr['fax'];
$voip		= $vcard_arr['voip'];
$url		= $vcard_arr['url'];
$email		= $vcard_arr['email'];
$vat		= $vcard_arr['vat'];
$charset	= _CHARSET;

if ( $street2 ){
	$street = $street1 . ', ' . $street2;
} else {
	$street = $street1;
}

$emailaddr = vcardemailcnvrt( $email );
/*
Instantiate a new vcard object.
*/
$vc = new vcard();

/*
filename is the name of the .vcf file that will be sent to the user if you
call the download() method. If you leave this blank, the class will 
automatically build a filename using the contact's data.
*/
$vc->filename = "vcard";

/*
If you leave this blank, the current timestamp will be used.
*/
#$vc->revision_date = "";

/*
Possible values are PUBLIC, PRIVATE, and CONFIDENTIAL. If you leave class
blank, it will default to PUBLIC.
*/
#$vc->class = "PUBLIC";

/*
Contact's name data.
If you leave display_name blank, it will be built using the first and last name.
*/
#$vc->data['display_name'] = "";
#$vc->data['first_name'] = "Troy";
#$vc->data['last_name'] = "Wolf";
#$vc->data['additional_name'] = ""; //Middle name
#$vc->data['name_prefix'] = "";  //Mr. Mrs. Dr.
#$vc->data['name_suffix'] = ""; //DDS, MD, III, other designations.
#$vc->data['nickname'] = "TJ";

/*
Contact's company, department, title, profession
*/
$vc->data['company'] = $title;
#$vc->data['department'] = "";
#$vc->data['title'] = "Web Developer";
#$vc->data['role'] = "";

/*
Contact's work address
*/
#$vc->data['work_po_box'] = "";
#$vc->data['work_extended_address'] = "";
$vc->data['work_address'] = $street;
$vc->data['work_city'] = $town;
$vc->data['work_state'] = $state;
$vc->data['work_postal_code'] = $zip;
$vc->data['work_country'] = $country;

/*
Contact's home address
*/
#$vc->data['home_po_box'] = "";
#$vc->data['home_extended_address'] = "";
#$vc->data['home_address'] = "7027 N. Hickory";
#$vc->data['home_city'] = "Kansas City";
#$vc->data['home_state'] = "MO";
#$vc->data['home_postal_code'] = "64118";
#$vc->data['home_country'] = "United States of America";

/*
Contact's telephone numbers.
*/
$vc->data['office_tel'] = $tel;
#$vc->data['home_tel'] = "";
$vc->data['cell_tel'] = $mobile;
$vc->data['fax_tel'] = $fax;
$vc->data['pcs_tel'] = $voip;

/*
Contact's email addresses
*/
$vc->data['email1'] = $emailaddr;
#$vc->data['email2'] = "";

/*
Contact's website
*/
$vc->data['url'] = $url;

/*
Some other contact data.
*/
#$vc->data['photo'] = "";  //Enter a URL.
#$vc->data['birthday'] = "1971-08-13";
#$vc->data['timezone'] = "-06:00";

/*
If you leave this blank, the class will default to using last_name or company.
*/
#$vc->data['sort_string'] = "";

/*
Notes about this contact.
*/
if ( $vat ) {
	$vc->data['note'] = _MD_IMLINKS_VAT . $vat;
}

/*
Generate card and send as a .vcf file to user's browser for download.
*/
$vc->download();

function vcardemailcnvrt( $email ) {
	
	$search = array (
		'/\ AT /',
		'/\ DOT /',
		'/ \[at] /',
		'/ \[dot] /',
	);

	$replace = array (
		"@",
		".",
		"@",
		".",
	);

	$text = preg_replace( $search, $replace, $email );
		return $text;
}
?>
