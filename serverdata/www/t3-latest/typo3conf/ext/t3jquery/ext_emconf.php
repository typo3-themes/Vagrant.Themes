<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3jquery".
 *
 * Auto generated 07-06-2013 13:09
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'T3 jQuery',
	'description' => 'Provides a shared version of the jQuery Javascript framework for use in other extensions. See class.tx_t3jquery.php for API and usage. Includes BE module to configure the used parts of jQuery UI, jQuery TOOLS and Bootstrap.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.6.3',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Juergen Furrer',
	'author_email' => 'juergen.furrer@gmail.com',
	'author_company' => '',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'cms' => '',
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.3.0-6.0.4',
		),
		'conflicts' => '',
		'suggests' => 
		array (
		),
	),
);

?>