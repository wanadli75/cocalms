<?php defined("IN_FORMA") or die('Direct access is forbidden.');

/* ======================================================================== \
|   FORMA - The E-Learning Suite                                            |
|                                                                           |
|   Copyright (c) 2013 (Forma)                                              |
|   http://www.formalms.org                                                 |
|   License  http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt           |
|                                                                           |
|   from docebo 4.0.5 CE 2008-2012 (c) docebo                               |
|   License http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt            |
\ ======================================================================== */

/**
 * Db info
 * -------------------------------------------------------------------------
 * db type, now mysql and mysqli are supported
 * db server address
 * db user name
 * db user password
 * db name
 * charset to use in the db connection
 */
$cfg['db_type'] = 'mysql';
$cfg['db_host'] = '[%-DB_HOST-%]';
$cfg['db_user'] = '[%-DB_USER-%]';
$cfg['db_pass'] = '[%-DB_PASS-%]';
$cfg['db_name'] = '[%-DB_NAME-%]';
$cfg['db_charset'] = 'utf8';

/**
 * Tables prefix
 * -------------------------------------------------------------------------
 * prefix for the core tables
 * prefix for the lms tables
 * prefix for the cms tables
 * prefix for the scs tables
 * prefix for the ecom tables
 * prefix for the ecom tables
 */
$cfg['prefix_fw']	= 'core';
$cfg['prefix_lms']	= 'learning';
$cfg['prefix_cms'] 	= 'cms';
$cfg['prefix_scs']	= 'conference';
$cfg['prefix_ecom']	= 'ecom';
$cfg['prefix_crm']	= 'crm';

/**
 * File upload
 * -------------------------------------------------------------------------
 * upload type (fs|ftp)
 * ftphost: the ftp hostname
 * ftpport: the ftp port
 * ftpuser: the ftp username
 * ftppass: the ftp password
 * ftppath: the ftp path from the user main home dir to the docebo root folder
 */
$cfg['uploadType'] = '[%-UPLOAD_METHOD-%]';

$cfg['ftphost'] 	= '[%-FTP_HOST-%]';
$cfg['ftpport'] 	= '[%-FTP_PORT-%]';
$cfg['ftpuser'] 	= '[%-FTP_USER-%]';
$cfg['ftppass'] 	= '[%-FTP_PASS-%]';
$cfg['ftppath'] 	= '[%-FTP_PATH-%]';

/**
 * External smtp config
 * -------------------------------------------------------------------------
 */
$cfg['use_smtp'] = 'off';
$cfg['smtp_host'] ='';
$cfg['smtp_user'] ='';
$cfg['smtp_pwd'] ='';

/**
 * Other params
 * -------------------------------------------------------------------------
  * timezone     = default site timezone , if not specified get default from php.ini date.timezone
 *                for valid timezone see http://www.php.net/manual/en/timezones.php
 * set_mysql_tz = set mysql timezone same as php timezone ,  valid value
 *                true = set ,  false = (default) not set
*/
//$cfg['timezone'] = 'Europe/Rome';		//define if different from php.ini setting
//$cfg['set_mysql_tz'] = false;			//set mysql timezone same as php timezone , default false

/**
 * Session custom param
 * -------------------------------------------------------------------------
 * debug is enabled ?
 * session must survive at least X seconds
 * session save_path if specified will be used instead of the defaul one
 */
$cfg['do_debug'] 			= false;
$cfg['session_lenght'] 		= (120 * 60);
$cfg['session_save_path'] 	= false;
$cfg['demo_mode']			= false;

/**
 * Technical preferences
 * -------------------------------------------------------------------------
 * filter_tool: the class for input filtering that you want to use
 * mail_br: used in mail composition (no longer needed?)
 */
$cfg['filter_tool'] = 'htmlpurifier';
$cfg['mail_br'] 	= "\r\n";
