<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "uncache".
 *
 * Auto generated 05-12-2012 02:29
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Uncache: Caches? What do you mean, caches...?',
	'description' => 'You know caches. You hate them while developing - so this extension prevents them all from working.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 'core',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Claus Due',
	'author_email' => 'claus@wildside.dk',
	'author_company' => 'Wildside A/S',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'core' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"6783";s:9:"README.md";s:4:"2f68";s:44:"Classes/Override/Core/Cache/CacheManager.php";s:4:"d823";s:52:"Classes/Override/Core/Cache/Frontend/PhpFrontend.php";s:4:"0f31";s:55:"Classes/Override/Core/Cache/Frontend/StringFrontend.php";s:4:"ebab";s:57:"Classes/Override/Core/Cache/Frontend/VariableFrontend.php";s:4:"898a";}',
	'suggests' => array(
	),
);

?>