<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		$_EXTKEY,
		'tools', // Make themes manager module a submodule of 'admin'
		'm1',
		'after:Extensionmanager', // Position
		array(
			'Theme' => 'index',
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:themes_manager/ext_icon.gif',
			'labels' => 'LLL:EXT:themes_manager/Resources/Private/Language/locallang_module.xlf',
		)
	);
}

// @todo remove this code if unused in a close future
// Add sprite icon for type Variant
//\TYPO3\CMS\Backend\Sprite\SpriteManager::addIconSprite()
//\TYPO3\CMS\Backend\Sprite\SpriteManager::addSingleIcons(
//	array(
//		'variant-edit' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/image_edit.png',
//	),
//	$_EXTKEY
//);
?>