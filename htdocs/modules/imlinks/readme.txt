=============================
INSTALLING imLINKS 1.00 RC-1
=============================



Unzip/unrar the downloaded file.



**First time install**
----------------------
Upload the folder 'imlinks' to the folder 'modules' on your server.
Upload the folder 'images' to the folder 'uploads' on your server and check that the folder including sub-folders are CHMOD 777.
Go to the Control Panel, choose Modules and install imLinks as any other ICMS module.



**Upgrading from WF-Links 1.06**
--------------------------------
1. backup the tables:
          wflinks_altcat
          wflinks_brokenlink
          wflinks_cat
          wflinks_indexpage
          wflinks_links
          wflinks_mods
          wflinks_votes
2. install imLinks 1.00 RC-1
3. point your browser to: <your.url>/modules/imlinks/update.php
4. follow the instructions on the screen
5. remove the file <your.url>/modules/imlinks/update.php
6. remove the folder <your.url>/modules/imlinks/update/
7. go to Modules Administration and update the module imLinks
8. start setting up imLinks (Preferences, Permissions, etc.)

Note: All information from WF-Links will be copied to imLinks, except the rating details they will be reset.
	  It's possible to have both imLinks and WF-Links installed at the same time.



**Sitemap**
-----------
A plugin for the Sitemap module is included.
You can download the module Sitemap from Gijoe's website: http://xoops.peak.ne.jp/



**imGlossary**
--------------
To have words linked to imGlossary this module has to be installed.



**Tags**
--------
To use the tag feature with imLinks your installation needs the following:
- Frameworks library installed
    http://addons.impresscms.org/modules/wfdownloads/singlefile.php?lid=170
- Xoops Tag module installed and active, for example version 1.6. 
    http://addons.impresscms.org/modules/wfdownloads/singlefile.php?cid=8&lid=1333

Make sure that you use versions for Xoops 2.0.18 and not for Xoops 2.3
If the Tag module is installed and active, an extra form for entering the tags will be visible in the submit forms.

Note: Do NOT use the blocks Top Tag and Tag Cloud when the Tag module is not installed.



**Fixes for ImpressCMS 1.1 Final**
----------------------------------
Hereby a minor fix to be made to have imLinks 1.0 RC-3 working correctly with ImpressCMS 1.1 Final.


TinyMCE
-------
This is a fix to have the captions visible when TinyMCE is selected as editor in imLinks -> Preferences.
Open the file /editors/tinymce/formtinymce.php and find this line:

	$this->XoopsFormTextArea ( "", @$this->_name, @$this->_value );

Replace it with this one:

	$this->XoopsFormTextArea ( @$this->_caption, @$this->_name, @$this->_value );





.::McDonald::.

http://code.google.com/p/mcdonaldsstore/downloads/list