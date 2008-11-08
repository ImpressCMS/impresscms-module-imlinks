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
8. restore the backup from step 1 if you want to continue using WF-Links otherwise uninstall the module
9. start setting up imLinks (Preferences, Permissions, etc.)



**Fixes for ImpressCMS 1.1 Final**
----------------------------------
Hereby a minor fix to be made to have Impression 1.0 RC-3 working correctly with ImpressCMS 1.1 Final.


TinyMCE
-------
This is a fix to have the captions visible when TinyMCE is selected as editor in Impression -> Preferences.
Open the file /editors/tinymce/formtinymce.php and find this line:

	$this->XoopsFormTextArea ( "", @$this->_name, @$this->_value );

Replace it with this one:

	$this->XoopsFormTextArea ( @$this->_caption, @$this->_name, @$this->_value );





.::McDonald::.

http://members.lycos.nl/mcdonaldsstore/