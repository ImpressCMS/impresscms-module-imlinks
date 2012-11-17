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

Note:	It's possible to give the installation folder of the module another name than 'imlinks'.
		You can give it any name you want, but you have to do this before you install the module.

		If you use the Sitemap and/or Waiting plugin you have to modify these plugins, 
		this means you have to rename the folder inside the plugin files.



**imGlossary**
--------------
To have words linked to imGlossary this module has to be installed.
You can download the latest version from the ImpressCMS Addons website or McDonalds Store.



Open Graph
----------
When a link (singlelink.php) is being read imLinks passes the following two Open Graph properties to the theme header:
- image
- url
For this it is advised to add the following to the header of the file theme.html of your theme. Preferbly after the meta-tags.

<!-- Open Graph -->
	<meta property="fb:admins" content="0123456789" />
	<meta property="og:title" content="<{if $icms_pagetitle !=''}><{$icms_pagetitle}><{else}><{$icms_sitename}><{/if}>" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<{$icms_meta_description}>" />
	<meta property="og:site_name" content="<{$icms_sitename}>" />
	<meta property="og:locale" content="en_US" />
	<{if $og_image !=''}><meta property="og:image" content="<{$og_image}>" /><{else}><meta property="og:image" content="<{$icms_url}>/images/s_poweredby.gif" /><{/if}>
	<{if $og_url !=''}><meta property="og:url" content="<{$og_url}>" /><{/if}>

Replace in the first line 0123456789 with a comma-separated list of the Facebook IDs of page administrators. At a minimum, include only your own Facebook ID.

In case you're using a module on the frontpage, for example imLinks, and the url to your website looks like www.website.com/modules/imlinks/ the last line should look like this:

	<{if $og_url !=''}><meta property="og:url" content="<{$og_url}>" /><{else}><meta property="og:url" content="<{$icms_url}>/modules/imlinks/" /><{/if}>

To test if the above code is working you can test it by passing the website url or an url to an imLinks singlelink page to the Facebook Debugger: http://developers.facebook.com/tools/debug

Further, in the file theme.html you have to replace this line

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<{$icms_langcode}>">

with this one:

	<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" xml:lang="<{$icms_langcode}>">

More information about the Open Graph Protocol can be found here:
- http://ogp.me/
- http://developers.facebook.com/docs/beta/



.::McDonald::.

http://code.google.com/p/mcdonaldsstore/downloads/list