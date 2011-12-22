#
# SQL file for imLinks
#

#
# Table structure for table 'imlinks_altcat'
#

CREATE TABLE imlinks_altcat (
	lid int(11) unsigned NOT NULL default '0',
	cid int(5) unsigned NOT NULL default '0',
	PRIMARY KEY  (lid,cid)
) TYPE=MyISAM;

#
# Table structure for table 'imlinks_broken'
#

CREATE TABLE imlinks_broken (
	reportid int(5) NOT NULL auto_increment,
	lid int(11) NOT NULL default '0',
	sender int(11) NOT NULL default '0',
	ip varchar(20) NOT NULL default '',
	`date` varchar(11) NOT NULL default '0',
	confirmed tinyint(1) NOT NULL default '0',
	acknowledged tinyint(1) NOT NULL default '0',
	title varchar(255) NOT NULL default '',
	PRIMARY KEY  (reportid),
	KEY lid (lid),
	KEY sender (sender),
	KEY ip (ip)
) TYPE=MyISAM;

#
# Table structure for table 'imlinks_cat'
#

CREATE TABLE imlinks_cat (
	cid int(5) unsigned NOT NULL auto_increment,
	pid int(5) unsigned NOT NULL default '0',
	title varchar(50) NOT NULL default '',
	imgurl varchar(150) NOT NULL default '',
	description varchar(255) NOT NULL default '',
	weight int(11) NOT NULL default '0',
	PRIMARY KEY  (cid),
	KEY pid (pid)
) TYPE=MyISAM;

#
# Table structure for table 'imlinks_indexpage'
#

CREATE TABLE imlinks_indexpage (
	indeximage varchar(255) NOT NULL default 'blank.gif',
	indexheading varchar(255) NOT NULL default 'imLinks',
	indexheader text NOT NULL,
	indexfooter text NOT NULL,
	indexheaderalign varchar(25) NOT NULL default 'left',
	indexfooteralign varchar(25) NOT NULL default 'left',
	lastlinksyn tinyint(1) NOT NULL default '0',
	lastlinkstotal varchar(5) NOT NULL default '50',
	FULLTEXT KEY `indexheading` (`indexheading`),
	FULLTEXT KEY `indexheader` (`indexheader`),
	FULLTEXT KEY `indexfooter` (`indexfooter`)
) TYPE=MyISAM;

#
# Dumping data for table 'imlinks_indexpage'
#

INSERT INTO imlinks_indexpage (indeximage,indexheading,indexheader,indexfooter,indexheaderalign,indexfooteralign,lastlinksyn,lastlinkstotal) VALUES ('logo-en.png', 'imLinks', 'Welcome to imLinks.', 'imLinks footer', 'left', 'left', 0, 50);

# ############################

#
# Table structure for table 'imlinks_links'
#

CREATE TABLE `imlinks_links` (
	`lid` int(11) unsigned NOT NULL auto_increment,
	`cid` int(5) unsigned NOT NULL default '0',
	`title` varchar(100) NOT NULL,
	`url` varchar(255) NOT NULL,
	`screenshot` varchar(255) NOT NULL,
	`submitter` int(11) NOT NULL default '0',
	`publisher` varchar(255) NOT NULL,
	`status` tinyint(2) NOT NULL default '0',
	`date` int(10) NOT NULL default '0',
	`hits` int(11) unsigned NOT NULL default '0',
	`rating` double(6,4) NOT NULL default '0.0000',
	`votes` int(11) unsigned NOT NULL default '0',
	`comments` int(11) unsigned NOT NULL default '0',
	`forumid` int(11) NOT NULL default '0',
	`published` int(11) NOT NULL default '0',
	`expired` int(10) NOT NULL default '0',
	`updated` int(11) NOT NULL default '0',
	`offline` tinyint(1) NOT NULL default '0',
	`description` text NOT NULL,
	`ipaddress` varchar(120) NOT NULL default '0',
	`notifypub` int(1) NOT NULL default '0',
	`country` varchar(5) NOT NULL default '',
	`keywords` text NOT NULL,
	`item_tag` text NOT NULL,
	`googlemap` text NOT NULL,
	`yahoomap` text NOT NULL,
	`multimap` text NOT NULL,
	`street1` varchar(255) NOT NULL,
	`street2` varchar(255) NOT NULL,
	`town` varchar(255) NOT NULL,
	`zip` varchar(25) NOT NULL,
	`state` varchar(255) NOT NULL,
	`tel` varchar(25) NOT NULL,
	`fax` varchar(25) NOT NULL,
	`voip` varchar(25) NOT NULL,
	`mobile` varchar(25) NOT NULL,
	`email` varchar(60) NOT NULL,
	`vat` varchar(25) NOT NULL,
	`nice_url` varchar(100) NOT NULL default '',
	`ttlat` varchar(100) NOT NULL default '',
	`ttlong` varchar(100) NOT NULL default '',
	PRIMARY KEY  (`lid`),
	KEY `cid` (`cid`),
	KEY `status` (`status`),
	KEY `title` (`title`(40))
) TYPE=MyISAM;

#
# Table structure for table 'imlinks_mod'
#

CREATE TABLE `imlinks_mod` (
	`requestid` int(11) NOT NULL auto_increment,
	`lid` int(11) unsigned NOT NULL default '0',
	`cid` int(5) unsigned NOT NULL default '0',
	`title` varchar(255) NOT NULL default '',
	`url` varchar(255) NOT NULL default '',
	`screenshot` varchar(255) NOT NULL default '',
	`submitter` int(11) NOT NULL default '0',
	`publisher` text NOT NULL,
	`status` tinyint(2) NOT NULL default '0',
	`date` int(10) NOT NULL default '0',
	`hits` int(11) unsigned NOT NULL default '0',
	`rating` double(6,2) NOT NULL default '0.00',
	`votes` int(11) unsigned NOT NULL default '0',
	`comments` int(11) unsigned NOT NULL default '0',
	`forumid` int(11) NOT NULL default '0',
	`published` int(10) NOT NULL default '0',
	`expired` int(10) NOT NULL default '0',
	`updated` int(11) NOT NULL default '0',
	`offline` tinyint(1) NOT NULL default '0',
	`description` text NOT NULL,
	`modifysubmitter` int(11) NOT NULL default '0',
	`requestdate` int(11) NOT NULL default '0',
	`country` varchar(5) NOT NULL default '',
	`keywords` text NOT NULL,
	`item_tag` text NOT NULL,
	`googlemap` text NOT NULL,
	`yahoomap` text NOT NULL,
	`multimap` text NOT NULL,
	`street1` varchar(255) NOT NULL default '',
	`street2` varchar(255) NOT NULL default '',
	`town` varchar(255) NOT NULL default '',
	`zip` varchar(25) NOT NULL default '',
	`state` varchar(255) NOT NULL default '',
	`tel` varchar(25) NOT NULL default '',
	`fax` varchar(25) NOT NULL default '',
	`voip` varchar(25) NOT NULL default '',
	`mobile` varchar(25) NOT NULL default '',
	`email` varchar(60) NOT NULL default '',
	`vat` varchar(25) NOT NULL default '',
	`ttlat` varchar(100) NOT NULL default '',
	`ttlong` varchar(100) NOT NULL default '',
	PRIMARY KEY  (`requestid`)
) TYPE=MyISAM;

#
# Table structure for table 'imlinks_ratings'
#

CREATE TABLE imlinks_ratings (
	id int(11) NOT NULL,
	total_votes int(11) NOT NULL default '0',
	total_value int(11) NOT NULL default '0',
	used_ips longtext,
	PRIMARY KEY  (id)
) TYPE=MyISAM;

#
# Table structure for table 'imlinks_configs'
#

CREATE TABLE imlinks_configs (
	rssactive INT(1) NOT NULL DEFAULT '1',
	rsstitle VARCHAR(128) NOT NULL,
	rsslink VARCHAR(128) NOT NULL,
	rssdsc VARCHAR(128) NOT NULL,
	rssimgurl VARCHAR(255) NOT NULL,
	rsswidth TINYINT(8) NOT NULL DEFAULT '0',
	rssheight TINYINT(8) NOT NULL DEFAULT '0',
	rssimgtitle VARCHAR(128) NOT NULL,
	rssimglink VARCHAR(255) NOT NULL,
	rssttl TINYINT(8) NOT NULL DEFAULT '0',
	rsswebmaster VARCHAR(255) NOT NULL,
	rsseditor VARCHAR(255) NOT NULL,
	rsscategory VARCHAR(128) NOT NULL,
	rssgenerator VARCHAR(128) NOT NULL,
	rsscopyright VARCHAR(128) NOT NULL,
	rsstotal TINYINT(8) NOT NULL DEFAULT '0',
	rssofftitle VARCHAR(128) NOT NULL DEFAULT '',
	rssoffdsc VARCHAR(255) NOT NULL DEFAULT ''
) TYPE=MYISAM;

INSERT INTO imlinks_configs (rssactive,rsstitle,rsslink,rssdsc,rssimgurl,rsswidth,rssheight,rssimgtitle,rssimglink,rssttl,rsswebmaster,rsseditor,rsscategory,rssgenerator,rsscopyright,rsstotal,rssofftitle,rssoffdsc) VALUES ('1', '', '', '', '', '', '', '', '', '60', '', '', '', '', '', '15', '', '');