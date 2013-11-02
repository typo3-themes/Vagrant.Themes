<?php
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] =
		'EXT:easylogin/Classes/Hooks/PreStartPageHook.php:&tx_easylogin_Hooks_PreStartPageHook->addLoginNews';
	#$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/index.php']['loginFormHook'][] = 
	#	'EXT:easylogin/Classes/Hooks/PreStartPageHook.php:&tx_easylogin_Hooks_PreStartPageHook->addLoginNews';
?>