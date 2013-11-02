<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Define the TCA for the access control calendar selector.
$tempColumn = array(
	'tx_themes_skin' => array(
		'exclude' => 1,
		'label' => 'Themes',
		'displayCond' => 'FIELD:root:REQ:true',
		'config' => array(
			'type' => 'user',
			'userFunc' => 'KayStrobach\\Themes\\Tca\\ThemeSelector->display',
		)
	),
);

// Add the skin selector for backend users.
GeneralUtility::loadTCA('sys_template');
ExtensionManagementUtility::addTCAcolumns('sys_template', $tempColumn);
ExtensionManagementUtility::addToAllTCAtypes('sys_template', '--div--;Themes,tx_themes_skin');
