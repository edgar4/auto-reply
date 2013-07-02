<?
if (  !defined('CAMPAIGN_TABLE') ) 
{
	define('CAMPAIGN_TABLE', $tableprefix_.'campaign');
}
if (  !defined('SETTINGS_TABLE')  ) 
{
	define('SETTINGS_TABLE', $tableprefix_.'settings');
}

if (  !defined('LOGIN_TABLE')  ) 
{
	define('LOGIN_TABLE', $tableprefix_.'login');
}
if (  !defined('SUBSCRIBERS_TABLE') ) 
{
	define('SUBSCRIBERS_TABLE', $tableprefix_.'subscribers');
}
if (  !defined('MESSAGES_TABLE') ) 
{
	define('MESSAGES_TABLE', $tableprefix_.'messages');
}

if(!defined('CUSTOM_FIELDS_TABLE')){
	define('CUSTOM_FIELDS_TABLE',$tableprefix_.'custom_fields');
}

if(!defined('CUSTOM_FIELD_TYPE_TABLE')){
	define('CUSTOM_FIELD_TYPE_TABLE',$tableprefix_.'custom_field_type');
}

if(!defined('FORM_SUBSCRIBERS_TABLE')){
	define('FORM_SUBSCRIBERS_TABLE',$tableprefix_.'form_subscribers');
}

if (  !defined('BROADCAST_MESSAGES_TABLE') ) 
{
	define('BROADCAST_MESSAGES_TABLE', $tableprefix_.'broadcast_message');
}
if(!defined('MESSAGES_CONFIRM_TABLE'))
{
  define('MESSAGES_CONFIRM_TABLE',$tableprefix_.'conformation_messages');
} 
if (  !defined('MESSAGES_QUEUE_TABLE') ) 
{
	define('MESSAGES_QUEUE_TABLE', $tableprefix_.'messages_queue');
}
 if (  !defined('MESSAGES_SENT_TABLE') ) 
{
	define('MESSAGES_SENT_TABLE', $tableprefix_.'messages_sent');
}
  //////////////////////////////////////////////////////////////////////
  //new
  if (  !defined('LINK_TRACKING_CAMPAIGN_TABLE') ) 
{
	define('LINK_TRACKING_CAMPAIGN_TABLE', $tableprefix_.'link_tracking_campaign');
}
if (  !defined('LINK_TRACKING_GROUP_TABLE') ) 
{
	define('LINK_TRACKING_GROUP_TABLE', $tableprefix_.'link_tracking_group');
}
if (  !defined('LINK_TRAKING_TRACK_TABLE') ) 
{
	define('LINK_TRAKING_TRACK_TABLE', $tableprefix_.'link_tracking_track');
}

if (  !defined('SMTP_SETTINGS_TABLE') ) 
{
	define('SMTP_SETTINGS_TABLE', $tableprefix_.'smtp_settings');
}
if (  !defined('MAIL_SETTING_TABLE') ) 
{
	define('MAIL_SETTING_TABLE', $tableprefix_.'mail_settings');
}


if (  !defined('SEND_MAIL_TABLE') ) 
{
	define('SEND_MAIL_TABLE', $tableprefix_.'mail_send_settings');
}
#
# Table structure for table `auto_broadcast_message`
#

/*DROP TABLE IF EXISTS auto_broadcast_message;
CREATE TABLE auto_broadcast_message (
  id int(11) NOT NULL auto_increment,
  campid int(11) NOT NULL default '0',
  receipentname text,
  subject varchar(255) default NULL,
  body text,
  attachement varchar(255) default NULL,
  messagedate date NOT NULL default '0000-00-00',
  PRIMARY KEY  (id),
  FULLTEXT KEY body (body)
) TYPE=MyISAM;
*/
/*# --------------------------------------------------------

#
# Table structure for table `auto_campaign`
#

DROP TABLE IF EXISTS auto_campaign;
CREATE TABLE auto_campaign (
  id int(11) NOT NULL auto_increment,
  campname varchar(255) NOT NULL default '',
  startdate datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (id)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `auto_conformation_messages`
#

DROP TABLE IF EXISTS auto_conformation_messages;
CREATE TABLE auto_conformation_messages (
  id int(11) NOT NULL auto_increment,
  campid int(11) NOT NULL default '0',
  confirm_success text,
  unsubscribe_success text,
  PRIMARY KEY  (id)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `auto_custom_field_type`
#

DROP TABLE IF EXISTS auto_custom_field_type;
CREATE TABLE auto_custom_field_type (
  id int(10) NOT NULL auto_increment,
  name varchar(50) NOT NULL default '',
  description varchar(50) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM;
#
# Dumping data for table `auto_custom_field_type`
#

INSERT INTO auto_custom_field_type VALUES (1, 'textbox', 'Text Box');
INSERT INTO auto_custom_field_type VALUES (2, 'textarea', 'Text Area');
INSERT INTO auto_custom_field_type VALUES (3, 'radiobutton', 'Radio Button');
INSERT INTO auto_custom_field_type VALUES (4, 'checkbox', 'Check Box');
INSERT INTO auto_custom_field_type VALUES (5, 'combobox', 'List Box');
INSERT INTO auto_custom_field_type VALUES (6, 'date', 'date type');
# --------------------------------------------------------

#
# Table structure for table `auto_custom_fields`
#

DROP TABLE IF EXISTS auto_custom_fields;
CREATE TABLE auto_custom_fields (
  id int(10) NOT NULL auto_increment,
  campid int(10) NOT NULL default '0',
  field_name varchar(50) NOT NULL default '',
  field_type int(10) NOT NULL default '0',
  default_value varchar(100) default NULL,
  status int(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) TYPE=MyISAM;



# --------------------------------------------------------

#
# Table structure for table `auto_form_subscribers`
#

DROP TABLE IF EXISTS auto_form_subscribers;
CREATE TABLE auto_form_subscribers (
  id int(10) NOT NULL auto_increment,
  subs_id int(10) NOT NULL default '0',
  field_name varchar(100) NOT NULL default '',
  value varchar(255) NOT NULL default '',
  camp_id int(11) NOT NULL default '0',
  PRIMARY KEY  (id)
) TYPE=MyISAM;


# --------------------------------------------------------

#
# Table structure for table `auto_login`
#

DROP TABLE IF EXISTS auto_login;
CREATE TABLE auto_login (
  id int(11) NOT NULL auto_increment,
  loginid varchar(100) NOT NULL default '',
  password varchar(50) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM;

#
# Dumping data for table `auto_login`
#

INSERT INTO auto_login VALUES (1, 'admin', 'admin');
# --------------------------------------------------------

#
# Table structure for table `auto_messages`
#

DROP TABLE IF EXISTS auto_messages;
CREATE TABLE auto_messages (
  id int(11) NOT NULL auto_increment,
  campid int(11) NOT NULL default '0',
  subject varchar(255) default NULL,
  body text,
  attachement varchar(255) default NULL,
  date_of_sending date default NULL,
  status varchar(50) default NULL,
  PRIMARY KEY  (id),
  FULLTEXT KEY body (body)
) TYPE=MyISAM;



# --------------------------------------------------------

#
# Table structure for table `auto_settings`
#

DROP TABLE IF EXISTS auto_settings;
CREATE TABLE auto_settings (
  id int(11) NOT NULL auto_increment,
  campid int(11) NOT NULL default '0',
  fromname varchar(255) default NULL,
  fromurl varchar(100) default NULL,
  redirecttourl varchar(255) default NULL,
  setunsubscribelink varchar(10) default NULL,
  reporttoadmin varchar(10) default NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM;



# --------------------------------------------------------

#
# Table structure for table `auto_subscribers`
#

DROP TABLE IF EXISTS auto_subscribers;
CREATE TABLE auto_subscribers (
  id int(11) NOT NULL auto_increment,
  campid int(11) NOT NULL default '0',
  EMAIL varchar(255) default NULL,
  name varchar(255) default NULL,
  status int(1) NOT NULL default '1',
  PRIMARY KEY  (id)
) TYPE=MyISAM;

#
# Table structure for table `auto_messages_queue`
#

DROP TABLE IF EXISTS auto_messages_queue;
CREATE TABLE auto_messages_queue (
  id int(11) NOT NULL auto_increment,
  campid int(11) NOT NULL default '0',
  subject varchar(255) default NULL,
  body text,
  attachement varchar(255) default NULL,
  delay int(11) NOT NULL default '0',
  status int(11) default NULL,
  PRIMARY KEY  (id),
  FULLTEXT KEY body (body)
) TYPE=MyISAM;


 */
?>