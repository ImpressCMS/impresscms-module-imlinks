==================
INSTALLING imLINKS
==================


Make sure you're have ImpressCMS 1.3 installed


Unzip/unrar the downloaded file.



**First time install**
----------------------
Upload the folders 'libraries/greybox' (optional), 'modules/imlinks' and 'uploads/images' to your server.
Check that the folder 'uploads/images' and all sub-folders have read/write permission (CHMOD 777).
Go to the Control Panel, choose Modules and install imLinks as any other ImpressCMS module.

For instructions about installing modules see the ImpressCMS Wiki: http://wiki.impresscms.org/index.php?title=Adding_Modules

Note: It's possible to give the installation folder of the module another name than 'imlinks'.
      You can give it any name you want, but you have to do this before you install the module.

      If you use the Sitemap and/or Waiting plugin you have to modify these plugins, 
      this means you have to rename the folder inside the plugin files.


	  
**GreyBox**
-----------
imLinks can have links opened in a so called GreyBox. This can be set in the Preferences.
To use this option the folder 'libraries/greybox' needs to be copied to your server.



**imGlossary**
--------------
To have words linked to imGlossary this module has to be installed.
You can download the latest version from the ImpressCMS Addons website or McDonalds Store.



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