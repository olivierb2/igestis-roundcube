<?php

/*
 +-----------------------------------------------------------------------+
 | Main configuration file                                               |
 |                                                                       |
 | This file is part of the Roundcube Webmail client                     |
 | Copyright (C) 2005-2010, Roundcube Dev. - Switzerland                 |
 | Licensed under the GNU GPL                                            |
 |                                                                       |
 +-----------------------------------------------------------------------+

*/

require_once dirname(__FILE__) . "/../../../../../config/igestis/ConfigIgestisGlobalVars.php";

$rcmail_config = array();

// ----------------------------------
// LOGGING/DEBUGGING
// ----------------------------------

$rcmail_config['igestis_root_folder'] = \ConfigIgestisGlobalVars::appliFolder();

// system error reporting: 1 = log; 2 = report (not implemented yet), 4 = show, 8 = trace
$rcmail_config['debug_level'] = 1;

// log driver:  'syslog' or 'file'.
$rcmail_config['log_driver'] = 'file';

// date format for log entries
// (read http://php.net/manual/en/function.date.php for all format characters)  
$rcmail_config['log_date_format'] = 'd-M-Y H:i:s O';

// Syslog ident string to use, if using the 'syslog' log driver.
$rcmail_config['syslog_id'] = 'roundcube';

// Syslog facility to use, if using the 'syslog' log driver.
// For possible values see installer or http://php.net/manual/en/function.openlog.php
$rcmail_config['syslog_facility'] = LOG_USER;

// Log sent messages to <log_dir>/sendmail or to syslog
$rcmail_config['smtp_log'] = true;

// Log successful logins to <log_dir>/userlogins or to syslog
$rcmail_config['log_logins'] = false;

// Log SQL queries to <log_dir>/sql or to syslog
$rcmail_config['sql_debug'] = false;

// Log IMAP conversation to <log_dir>/imap or to syslog
$rcmail_config['imap_debug'] = false;

// Log LDAP conversation to <log_dir>/ldap or to syslog
$rcmail_config['ldap_debug'] = false;

// Log SMTP conversation to <log_dir>/smtp or to syslog
$rcmail_config['smtp_debug'] = false;

// ----------------------------------
// IMAP
// ----------------------------------

// the mail host chosen to perform the log-in
// leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// To use SSL/TLS connection, enter hostname with prefix ssl:// or tls://
// Supported replacement variables:
// %n - http hostname ($_SERVER['SERVER_NAME'])
// %d - domain (http hostname without the first part)
// For example %n = mail.domain.tld, %d = domain.tld
$rcmail_config['default_host'] = 'localhost';

// TCP port used for IMAP connections
$rcmail_config['default_port'] = 143;

// IMAP AUTH type (DIGEST-MD5, CRAM-MD5, LOGIN, PLAIN or empty to use
// best server supported one)
$rcmail_config['imap_auth_type'] = null;

// If you know your imap's folder delimiter, you can specify it here.
// Otherwise it will be determined automatically
$rcmail_config['imap_delimiter'] = null;

// If IMAP server doesn't support NAMESPACE extension, but you're
// using shared folders or personal root folder is non-empty, you'll need to
// set these options. All can be strings or arrays of strings.
// Folders need to be ended with directory separator, e.g. "INBOX."
// (special directory "~" is an exception to this rule)
// These can be used also to overwrite server's namespaces
$rcmail_config['imap_ns_personal'] = null;
$rcmail_config['imap_ns_other']    = null;
$rcmail_config['imap_ns_shared']   = null;

// By default IMAP capabilities are readed after connection to IMAP server
// In some cases, e.g. when using IMAP proxy, there's a need to refresh the list
// after login. Set to True if you've got this case.
$rcmail_config['imap_force_caps'] = false;

// By default list of subscribed folders is determined using LIST-EXTENDED
// extension if available. Some servers (dovecot 1.x) returns wrong results
// for shared namespaces in this case. http://trac.roundcube.net/ticket/1486225
// Enable this option to force LSUB command usage instead.
$rcmail_config['imap_force_lsub'] = false;

// IMAP connection timeout, in seconds. Default: 0 (no limit)
$rcmail_config['imap_timeout'] = 0;

// Optional IMAP authentication identifier to be used as authorization proxy
$rcmail_config['imap_auth_cid'] = null;

// Optional IMAP authentication password to be used for imap_auth_cid
$rcmail_config['imap_auth_pw'] = null;

// ----------------------------------
// SMTP
// ----------------------------------

// SMTP server host (for sending mails).
// To use SSL/TLS connection, enter hostname with prefix ssl:// or tls://
// If left blank, the PHP mail() function is used
// Supported replacement variables:
// %h - user's IMAP hostname
// %n - http hostname ($_SERVER['SERVER_NAME'])
// %d - domain (http hostname without the first part)
// %z - IMAP domain (IMAP hostname without the first part)
// For example %n = mail.domain.tld, %d = domain.tld
$rcmail_config['smtp_server'] = '';

// SMTP port (default is 25; 465 for SSL)
$rcmail_config['smtp_port'] = 25;

// SMTP username (if required) if you use %u as the username Roundcube
// will use the current username for login
$rcmail_config['smtp_user'] = '';

// SMTP password (if required) if you use %p as the password Roundcube
// will use the current user's password for login
$rcmail_config['smtp_pass'] = '';

// SMTP AUTH type (DIGEST-MD5, CRAM-MD5, LOGIN, PLAIN or empty to use
// best server supported one)
$rcmail_config['smtp_auth_type'] = '';

// Optional SMTP authentication identifier to be used as authorization proxy
$rcmail_config['smtp_auth_cid'] = null;

// Optional SMTP authentication password to be used for smtp_auth_cid
$rcmail_config['smtp_auth_pw'] = null;

// SMTP HELO host 
// Hostname to give to the remote server for SMTP 'HELO' or 'EHLO' messages 
// Leave this blank and you will get the server variable 'server_name' or 
// localhost if that isn't defined. 
$rcmail_config['smtp_helo_host'] = '';

// SMTP connection timeout, in seconds. Default: 0 (no limit)
$rcmail_config['smtp_timeout'] = 0;

// ----------------------------------
// SYSTEM
// ----------------------------------

// THIS OPTION WILL ALLOW THE INSTALLER TO RUN AND CAN EXPOSE SENSITIVE CONFIG DATA.
// ONLY ENABLE IT IF YOU'RE REALLY SURE WHAT YOU'RE DOING!
$rcmail_config['enable_installer'] = false;

// use this folder to store log files (must be writeable for apache user)
// This is used by the 'file' log driver.
$rcmail_config['log_dir'] = '/var/log/igestis/';

// use this folder to store temp files (must be writeable for apache user)
$rcmail_config['temp_dir'] = 'temp/';

// enable caching of messages and mailbox data in the local database.
// this is recommended if the IMAP server does not run on the same machine
$rcmail_config['enable_caching'] = false;

// lifetime of message cache
// possible units: s, m, h, d, w
$rcmail_config['message_cache_lifetime'] = '10d';

// enforce connections over https
// with this option enabled, all non-secure connections will be redirected.
// set the port for the ssl connection as value of this option if it differs from the default 443
$rcmail_config['force_https'] = false;

// tell PHP that it should work as under secure connection
// even if it doesn't recognize it as secure ($_SERVER['HTTPS'] is not set)
// e.g. when you're running Roundcube behind a https proxy
$rcmail_config['use_https'] = false;

// Allow browser-autocompletion on login form.
// 0 - disabled, 1 - username and host only, 2 - username, host, password
$rcmail_config['login_autocomplete'] = 0;

// If users authentication is not case sensitive this must be enabled.
// You can also use it to force conversion of logins to lower case.
$rcmail_config['login_lc'] = false;

// automatically create a new Roundcube user when log-in the first time.
// a new user will be created once the IMAP login succeeds.
// set to false if only registered users can use this service
$rcmail_config['auto_create_user'] = true;

// Includes should be interpreted as PHP files
$rcmail_config['skin_include_php'] = false;

// Session lifetime in minutes
// must be greater than 'keep_alive'/60
$rcmail_config['session_lifetime'] = 10;

// check client IP in session athorization
$rcmail_config['ip_check'] = false;

// Use an additional frequently changing cookie to athenticate user sessions.
// There have been problems reported with this feature.
$rcmail_config['double_auth'] = false;

// check referer of incoming requests
$rcmail_config['referer_check'] = false;

// this key is used to encrypt the users imap password which is stored
// in the session record (and the client cookie if remember password is enabled).
// please provide a string of exactly 24 chars.
$rcmail_config['des_key'] = '1x-eoHnDNb4HFqR4BLNS_D65';

// Automatically add this domain to user names for login
// Only for IMAP servers that require full e-mail addresses for login
// Specify an array with 'host' => 'domain' values to support multiple hosts
// Supported replacement variables:
// %h - user's IMAP hostname
// %n - http hostname ($_SERVER['SERVER_NAME'])
// %d - domain (http hostname without the first part)
// %z - IMAP domain (IMAP hostname without the first part)
// For example %n = mail.domain.tld, %d = domain.tld
$rcmail_config['username_domain'] = '';

// This domain will be used to form e-mail addresses of new users
// Specify an array with 'host' => 'domain' values to support multiple hosts
// Supported replacement variables:
// %h - user's IMAP hostname
// %n - http hostname ($_SERVER['SERVER_NAME'])
// %d - domain (http hostname without the first part)
// %z - IMAP domain (IMAP hostname without the first part)
// For example %n = mail.domain.tld, %d = domain.tld
$rcmail_config['mail_domain'] = '';

// Password charset.
// Use it if your authentication backend doesn't support UTF-8.
// Defaults to ISO-8859-1 for backward compatibility
$rcmail_config['password_charset'] = 'ISO-8859-1';

// How many seconds must pass between emails sent by a user
$rcmail_config['sendmail_delay'] = 0;

// Maximum number of recipients per message. Default: 0 (no limit)
$rcmail_config['max_recipients'] = 0; 

// Maximum allowednumber of members of an address group. Default: 0 (no limit)
// If 'max_recipients' is set this value should be less or equal
$rcmail_config['max_group_members'] = 0; 

// add this user-agent to message headers when sending
$rcmail_config['useragent'] = 'Roundcube Webmail/'.RCMAIL_VERSION;

// use this name to compose page titles
$rcmail_config['product_name'] = 'Roundcube Webmail';

// try to load host-specific configuration
// see http://trac.roundcube.net/wiki/Howto_Config for more details
$rcmail_config['include_host_config'] = false;

// path to a text file which will be added to each sent message
// paths are relative to the Roundcube root folder
$rcmail_config['generic_message_footer'] = '';

// path to a text file which will be added to each sent HTML message
// paths are relative to the Roundcube root folder
$rcmail_config['generic_message_footer_html'] = '';

// add a received header to outgoing mails containing the creators IP and hostname
$rcmail_config['http_received_header'] = false;

// Whether or not to encrypt the IP address and the host name
// these could, in some circles, be considered as sensitive information;
// however, for the administrator, these could be invaluable help
// when tracking down issues.
$rcmail_config['http_received_header_encrypt'] = false;

// This string is used as a delimiter for message headers when sending
// a message via mail() function. Leave empty for auto-detection
$rcmail_config['mail_header_delimiter'] = NULL;

// number of chars allowed for line when wrapping text.
// text wrapping is done when composing/sending messages
$rcmail_config['line_length'] = 72;

// send plaintext messages as format=flowed
$rcmail_config['send_format_flowed'] = true;

// session domain: .example.org
$rcmail_config['session_domain'] = '';

// don't allow these settings to be overriden by the user
$rcmail_config['dont_override'] = array();

// Set identities access level:
// 0 - many identities with possibility to edit all params
// 1 - many identities with possibility to edit all params but not email address
// 2 - one identity with possibility to edit all params
// 3 - one identity with possibility to edit all params but not email address
$rcmail_config['identities_level'] = 0;

// mime magic database
$rcmail_config['mime_magic'] = '/usr/share/misc/magic';

// Enable DNS checking for e-mail address validation
$rcmail_config['email_dns_check'] = false;

// ----------------------------------
// PLUGINS
// ----------------------------------

// List of active plugins (in plugins/ directory)
//$rcmail_config['plugins'] = array('fetchmail_rc', 'igestis_autologon', 'sieverules', 'identiteam');

$rcmail_config['plugins'] = array('fetchmail_rc', 'igestis_autologon', 'sieverules');
if (function_exists("ldap_connect")) {
    $rcmail_config['plugins'][] = 'identiteam';
}

// ----------------------------------
// USER INTERFACE
// ----------------------------------

// default messages sort column. Use empty value for default server's sorting, 
// or 'arrival', 'date', 'subject', 'from', 'to', 'size', 'cc'
$rcmail_config['message_sort_col'] = '';

// default messages sort order
$rcmail_config['message_sort_order'] = 'DESC';

// These cols are shown in the message list. Available cols are:
// subject, from, to, cc, replyto, date, size, status, flag, attachment
$rcmail_config['list_cols'] = array('subject', 'status', 'from', 'date', 'size', 'flag', 'attachment');

// the default locale setting (leave empty for auto-detection)
// RFC1766 formatted language name like en_US, de_DE, de_CH, fr_FR, pt_BR
$rcmail_config['language'] = null;

// use this format for short date display (date or strftime format)
$rcmail_config['date_short'] = 'D H:i';

// use this format for detailed date/time formatting (date or strftime format)
$rcmail_config['date_long'] = 'd.m.Y H:i';

// use this format for today's date display (date or strftime format)
$rcmail_config['date_today'] = 'H:i';

// store draft message is this mailbox
// leave blank if draft messages should not be stored
$rcmail_config['drafts_mbox'] = 'Drafts';

// store spam messages in this mailbox
$rcmail_config['junk_mbox'] = 'Junk';

// store sent message is this mailbox
// leave blank if sent messages should not be stored
$rcmail_config['sent_mbox'] = 'Sent';

// move messages to this folder when deleting them
// leave blank if they should be deleted directly
$rcmail_config['trash_mbox'] = 'Trash';

// display these folders separately in the mailbox list.
// these folders will also be displayed with localized names
$rcmail_config['default_imap_folders'] = array('INBOX', 'Drafts', 'Sent', 'Junk', 'Trash');

// automatically create the above listed default folders on login
$rcmail_config['create_default_folders'] = true;

// protect the default folders from renames, deletes, and subscription changes
$rcmail_config['protect_default_folders'] = true;

// if in your system 0 quota means no limit set this option to true 
$rcmail_config['quota_zero_as_unlimited'] = false;

// Make use of the built-in spell checker. It is based on GoogieSpell.
// Since Google only accepts connections over https your PHP installatation
// requires to be compiled with Open SSL support
$rcmail_config['enable_spellcheck'] = true;

// Set the spell checking engine. 'googie' is the default. 'pspell' is also available,
// but requires the Pspell extensions. When using Nox Spell Server, also set 'googie' here.
$rcmail_config['spellcheck_engine'] = 'pspell';

// For a locally installed Nox Spell Server, please specify the URI to call it.
// Get Nox Spell Server from http://orangoo.com/labs/?page_id=72
// Leave empty to use the Google spell checking service, what means
// that the message content will be sent to Google in order to check spelling
$rcmail_config['spellcheck_uri'] = '';

// These languages can be selected for spell checking.
// Configure as a PHP style hash array: array('en'=>'English', 'de'=>'Deutsch');
// Leave empty for default set of available language.
$rcmail_config['spellcheck_languages'] = NULL;

// don't let users set pagesize to more than this value if set
$rcmail_config['max_pagesize'] = 200;

// Minimal value of user's 'keep_alive' setting (in seconds)
// Must be less than 'session_lifetime'
$rcmail_config['min_keep_alive'] = 60;

// ----------------------------------
// ADDRESSBOOK SETTINGS
// ----------------------------------

// This indicates which type of address book to use. Possible choises:
// 'sql' (default) and 'ldap'.
// If set to 'ldap' then it will look at using the first writable LDAP
// address book as the primary address book and it will not display the
// SQL address book in the 'Address Book' view.
$rcmail_config['address_book_type'] = 'sql';

// In order to enable public ldap search, configure an array like the Verisign
// example further below. if you would like to test, simply uncomment the example.
$rcmail_config['ldap_public'] = array();

$rcmail_config['ldap_public']['Customers'] = array(
  'name'          => 'Customers',
  'hosts'         => array(\ConfigIgestisGlobalVars::ldapUris()),
  'port'          => 389,
  'use_tls'	      => false,
  'user_specific' => false,
  'base_dn'       => \ConfigIgestisGlobalVars::ldapCustomersOu(),
  'bind_dn'       => \ConfigIgestisGlobalVars::ldapAdmin(),
  'bind_pass'     => \ConfigIgestisGlobalVars::ldapPassword(),
  'writable'      => false,
  'LDAP_Object_Classes' => array("top", "inetOrgPerson"),
  'required_fields'     => array("cn", "sn", "mail"),
  'LDAP_rdn'      => 'mail',
  'ldap_version'  => 3,
  'search_fields' => array('mail', 'cn'),
  'name_field'    => 'cn',
  'email_field'   => 'mail',
  'surname_field' => 'sn',
  'firstname_field' => 'gn',
  'sort'          => 'cn',
  'scope'         => 'sub',
  'filter'        => '(objectClass=inetOrgPerson)',
  'fuzzy_search'  => true
);

$rcmail_config['ldap_public']['Employees'] = array(
  'name'          => 'Employees',
  'hosts'         => array(\ConfigIgestisGlobalVars::ldapUris()),
  'port'          => 389,
  'use_tls'       => false,
  'user_specific' => false,
  'base_dn'       => \ConfigIgestisGlobalVars::ldapUsersOu(),
  'bind_dn'       => \ConfigIgestisGlobalVars::ldapAdmin(),
  'bind_pass'     => \ConfigIgestisGlobalVars::ldapPassword(),
  'writable'      => false,
  'LDAP_Object_Classes' => array("top", "inetOrgPerson"),
  'required_fields'     => array("cn", "sn", "mail"),
  'LDAP_rdn'      => 'mail',
  'ldap_version'  => 3,
  'search_fields' => array('mail', 'cn'),
  'name_field'    => 'cn',
  'email_field'   => 'mail',
  'surname_field' => 'sn',
  'firstname_field' => 'gn',
  'sort'          => 'cn',
  'scope'         => 'sub',
  'filter'        => '(|(objectClass=user)(objectClass=posixAccount))',
  'fuzzy_search'  => true
);

$rcmail_config['ldap_public']['Suppliers'] = array(
  'name'          => 'Suppliers',
  'hosts'         => array(\ConfigIgestisGlobalVars::ldapUris()),
  'port'          => 389,
  'use_tls'       => false,
  'user_specific' => false,
  'base_dn'       => \ConfigIgestisGlobalVars::ldapSuppliersOu(),
  'bind_dn'       => \ConfigIgestisGlobalVars::ldapAdmin(),
  'bind_pass'     => \ConfigIgestisGlobalVars::ldapPassword(),
  'writable'      => false,
  'LDAP_Object_Classes' => array("top", "inetOrgPerson"),
  'required_fields'     => array("cn", "sn", "mail"),
  'LDAP_rdn'      => 'mail',
  'ldap_version'  => 3,
  'search_fields' => array('mail', 'cn'),
  'name_field'    => 'cn',
  'email_field'   => 'mail',
  'surname_field' => 'sn',
  'firstname_field' => 'gn',
  'sort'          => 'cn',
  'scope'         => 'sub',
  'filter'        => '(objectClass=inetOrgPerson)',
  'fuzzy_search'  => true
);

// An ordered array of the ids of the addressbooks that should be searched
// when populating address autocomplete fields server-side. ex: array('sql','Verisign');
$rcmail_config['autocomplete_addressbooks'] = array('sql', 'Employees', 'Customers', 'Suppliers' );

// The minimum number of characters required to be typed in an autocomplete field
// before address books will be searched. Most useful for LDAP directories that
// may need to do lengthy results building given overly-broad searches
$rcmail_config['autocomplete_min_length'] = 1;

// ----------------------------------
// USER PREFERENCES
// ----------------------------------

// Use this charset as fallback for message decoding
$rcmail_config['default_charset'] = 'ISO-8859-1';

// skin name: folder from skins/
$rcmail_config['skin'] = 'default';

// show up to X items in list view
$rcmail_config['pagesize'] = 40;

// use this timezone to display date/time
$rcmail_config['timezone'] = 'auto';

// is daylight saving On?
$rcmail_config['dst_active'] = (bool)date('I');

// prefer displaying HTML messages
$rcmail_config['prefer_html'] = true;

// display remote inline images
// 0 - Never, always ask
// 1 - Ask if sender is not in address book
// 2 - Always show inline images
$rcmail_config['show_images'] = 0;

// compose html formatted messages by default
// 0 - never, 1 - always, 2 - on reply to HTML message only 
$rcmail_config['htmleditor'] = 0;

// show pretty dates as standard
$rcmail_config['prettydate'] = true;

// save compose message every 300 seconds (5min)
$rcmail_config['draft_autosave'] = 300;

// default setting if preview pane is enabled
$rcmail_config['preview_pane'] = false;

// Mark as read when viewed in preview pane (delay in seconds)
// Set to -1 if messages in preview pane should not be marked as read
$rcmail_config['preview_pane_mark_read'] = 0;

// focus new window if new message arrives
$rcmail_config['focus_on_new_message'] = true;

// Clear Trash on logout
$rcmail_config['logout_purge'] = false;

// Compact INBOX on logout
$rcmail_config['logout_expunge'] = false;

// Display attached images below the message body 
$rcmail_config['inline_images'] = true;

// Encoding of long/non-ascii attachment names:
// 0 - Full RFC 2231 compatible
// 1 - RFC 2047 for 'name' and RFC 2231 for 'filename' parameter (Thunderbird's default)
// 2 - Full 2047 compatible
$rcmail_config['mime_param_folding'] = 0;

// Set true if deleted messages should not be displayed
// This will make the application run slower
$rcmail_config['skip_deleted'] = false;

// Set true to Mark deleted messages as read as well as deleted
// False means that a message's read status is not affected by marking it as deleted
$rcmail_config['read_when_deleted'] = true;

// Set to true to newer delete messages immediately
// Use 'Purge' to remove messages marked as deleted 
$rcmail_config['flag_for_deletion'] = false;

// Default interval for keep-alive/check-recent requests (in seconds)
// Must be greater than or equal to 'min_keep_alive' and less than 'session_lifetime'
$rcmail_config['keep_alive'] = 60;

// If true all folders will be checked for recent messages
$rcmail_config['check_all_folders'] = false;

// If true, after message delete/move, the next message will be displayed
$rcmail_config['display_next'] = false;

// 0 - Do not expand threads 
// 1 - Expand all threads automatically 
// 2 - Expand only threads with unread messages 
$rcmail_config['autoexpand_threads'] = 0;

// When replying place cursor above original message (top posting)
$rcmail_config['top_posting'] = false;

// When replying strip original signature from message
$rcmail_config['strip_existing_sig'] = true;

// Show signature:
// 0 - Never
// 1 - Always
// 2 - New messages only
// 3 - Forwards and Replies only
$rcmail_config['show_sig'] = 1;

// When replying or forwarding place sender's signature above existing message
$rcmail_config['sig_above'] = false;

// Use MIME encoding (quoted-printable) for 8bit characters in message body
$rcmail_config['force_7bit'] = false;

// Defaults of the search field configuration.
// The array can contain a per-folder list of header fields which should be considered when searching
// The entry with key '*' stands for all folders which do not have a specific list set.
// Please note that folder names should to be in sync with $rcmail_config['default_imap_folders']
$rcmail_config['search_mods'] = null;  // Example: array('*' => array('subject'=>1, 'from'=>1), 'Sent' => array('subject'=>1, 'to'=>1));

// 'Delete always'
// This setting reflects if mail should be always deleted
// when moving to Trash fails. This is necessary in some setups
// when user is over quota and Trash is included in the quota.
$rcmail_config['delete_always'] = false;

// Behavior if a received message requests a message delivery notification (read receipt)
// 0 = ask the user, 1 = send automatically, 2 = ignore (never send or ask)
// 3 = send automatically if sender is in addressbook, otherwise ask the user
// 4 = send automatically if sender is in addressbook, otherwise ignore
$rcmail_config['mdn_requests'] = 0;

// Return receipt checkbox default state
$rcmail_config['mdn_default'] = 0;

// Delivery Status Notification checkbox default state
$rcmail_config['dsn_default'] = 0;

// Place replies in the folder of the message being replied to
$rcmail_config['reply_same_folder'] = false;

// end of config file
