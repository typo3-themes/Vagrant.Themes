<?php

########################################################################
# Extension Manager/Repository config file for ext "less".
#
# Auto generated 09-03-2012 10:37
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'DynCss - Sass and Scss Parser',
	'description' => 'DynCss-Parser',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.2.5',
	'dependencies' => 'dyncss',
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
	'constraints' => array(
		'depends' => array(
			'dyncss' => '0.2.0 - 0.2.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"dfaa";s:10:"README.txt";s:4:"ee2d";s:21:"ext_conf_template.txt";s:4:"1cbe";s:12:"ext_icon.gif";s:4:"6c2c";s:17:"ext_localconf.php";s:4:"e47e";s:28:"ext_typoscript_constants.txt";s:4:"f81f";s:24:"ext_typoscript_setup.txt";s:4:"e8b6";s:13:"locallang.xml";s:4:"13b4";s:23:"lib/lessc-0.2.0.inc.php";s:4:"efef";s:23:"lib/lessc-0.3.3.inc.php";s:4:"e18e";s:25:"pi1/class.tx_less_pi1.php";s:4:"6db7";}',
);

?>