==================
INSTALLING imLINKS
==================


Make sure you're have ImpressCMS 1.2 or higher installed


Unzip/unrar the downloaded file.



**First time install**
----------------------
Upload the folders 'libraries/greybox' (optional), 'modules/imlinks' and 'uploads/images' to your server.
Check that the folder 'uploads/images' including all sub-folders have read/write permission (CHMOD 777).
Go to the Control Panel, choose Modules and install imLinks as any other ImpressCMS module.

Note: It's possible to give the installation folder of the module another name than 'imlinks'.
      You can give it any name you want, but you have to do this before you install the module.

      If you use the Sitemap and/or Waiting plugin you have to modify these plugins, 
      this means you have to rename the folder inside the plugin files (see below).



**Upgrading from WF-Links 1.06 or higher**
------------------------------------------
1. backup the following database tables:
          wflinks_altcat
          wflinks_brokenlink
          wflinks_cat
          wflinks_indexpage
          wflinks_links
          wflinks_mods
          wflinks_votes
2. install imLinks 1.03
3. point your browser to: <your.url>/modules/imlinks/update.php
4. follow the instructions on the screen
5. remove the file <your.url>/modules/imlinks/update.php
6. remove the folder <your.url>/modules/imlinks/update/
7. go to Modules Administration and update the module imLinks
8. start setting up imLinks (Preferences, Permissions, etc.)

Note: All information from WF-Links will be copied to imLinks, except the rating details they will be reset.
      It's possible to have both imLinks and WF-Links installed and running at the same time.

	  
 
**Upgrading from imLinks 1.02 to 1.03**
------------------------------------------
1. backup the following database tables:
          imlinks_altcat
          imlinks_brokenlink
          imlinks_cat
          imlinks_indexpage
          imlinks_links
          imlinks_mods
          imlinks_ratings
		  imlinks_configs
2. uninstall imLinks 1.02
3. remove all files and folders from /modules/imlinks/
4. upload files from imLinks 1.03 to /modules/imlinks/
5. install imLinks 1.03
6. restore database tables from point 1.
7. update imLinks 1.03 from the Module Administration


		  
**GreyBox**
-----------
imLinks can have links opened in a so called GreyBox. This can be set in the Preferences.
To use this option the folder 'libraries/greybox' needs to be copied to your server.



**Sitemap & Waiting**
---------------------
Plugins for the modules Sitemap and Waiting are included.
You can download these modules from Gijoe's website: http://xoops.peak.ne.jp/

In case the name of the installation folder of imLinks has been changed the plugins have to be modified.
Open the plugin(s) in a text editor and in the 2 lines as shown below you have to replace 'imlinks' with the name given to the folder:

	// name of installation folder imLinks
	$imlinks_dirname = 'imlinks';
	
For users of ImpressCMS 1.2 just copy the Waiting plugin into the folder ../plugins/waiting/ on your server.



**imGlossary**
--------------
To have words linked to imGlossary this module has to be installed.
You can download the latest version from the ImpressCMS Addons website.



**Tags**
--------
To use the tag feature with imLinks your installation needs the following:
- Frameworks library installed
    http://addons.impresscms.org/modules/wfdownloads/singlefile.php?lid=170
- Xoops Tag module installed and active, for example version 1.6. 
    http://addons.impresscms.org/modules/wfdownloads/singlefile.php?cid=8&lid=1333

Make sure that you use versions for Xoops 2.0.18 and not for Xoops 2.3!
If the Tag module is installed and active, an extra form for entering the tags will be visible in the submit forms.
For users the tag form can be enabled/disabled from the Preferences, for admins this form will always be visible.

Note: Do NOT use the blocks Top Tag and Tag Cloud when the Tag module is not installed.




.::McDonald::.

http://code.google.com/p/mcdonaldsstore/downloads/list