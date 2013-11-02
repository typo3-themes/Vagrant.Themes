<?php


if(TYPO3_MODE == 'BE') {
	/**
	 * add Stylesheets
	 */	 	
	$GLOBALS['TYPO3_CONF_VARS']['typo3/backend.php']['additionalBackendItems'][] = t3lib_extMgm::extPath('beskin').'addStylesheet.php';
	/**
	 * make loginscreen configurable
	 */	 	
	$t = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['beskin']);
	if(is_readable(t3lib_div::getFileAbsFileName($t['logintemplate']))) {
		$GLOBALS['TBE_STYLES']['htmlTemplates']['templates/login.html'] = t3lib_div::getFileAbsFileName($t['logintemplate']);
	}
	if($t['loginLogoPath'] !== '') {
		$GLOBALS['TBE_STYLES']['logo_login'] = $t['loginLogoPath'];
		#$GLOBALS['TBE_STYLES']['loginBoxImage_rotationFolder'] = $t['loginLogoPath'];
		#$GLOBALS['TBE_STYLES']['loginBoxImage_rotationFolder'] = t3lib_div::getFileAbsFileName($t['loginLogoPath'], TRUE);
	}
}




?>