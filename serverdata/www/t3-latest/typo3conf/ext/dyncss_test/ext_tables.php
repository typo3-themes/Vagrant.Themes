<?php

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preHeaderRenderHook'][] = 'EXT:dyncss_test/Classes/Be/PreHeaderRenderHook.php:Tx_DyncssTest_Be_PreHeaderRenderHook->main';

t3lib_extMgm::addStaticFile(
	'dyncss_test',
	'Resources/Private/TypoScript',
	'dyncss_test'
);