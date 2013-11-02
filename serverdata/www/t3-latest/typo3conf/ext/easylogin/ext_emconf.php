<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "easylogin".
 *
 * Auto generated 11-03-2013 19:41
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'EasyLogin',
	'description' => 'Login a user in BE with predefined credentials - unsafe for non development systems!',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.4.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Kay Strobach',
	'author_email' => 'typo3@kay-strobach.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '4.5.0-6.0.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:21:"ext_conf_template.txt";s:4:"ca92";s:12:"ext_icon.gif";s:4:"6759";s:17:"ext_localconf.php";s:4:"cc7c";s:14:"ext_tables.php";s:4:"a0fd";s:16:"locallang_db.xml";s:4:"aabc";s:34:"Classes/Hooks/PreStartPageHook.php";s:4:"9a18";s:49:"Resources/Public/JavaScript/LoginToolbar/main.css";s:4:"cafc";s:48:"Resources/Public/JavaScript/LoginToolbar/main.js";s:4:"e4a8";}',
	'suggests' => 
	array (
	),
);

?>