<?php

if(TYPO3_MODE == 'BE') {
	$extConfigs = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['beskin']);
	$paths = array ();

	if(t3lib_div::getFileAbsFileName($extConfigs['cssFile'])) {
		$paths['cssFile'] = t3lib_div::getFileAbsFileName($extConfigs['cssFile']);
	}
	if(t3lib_div::getFileAbsFileName($extConfigs['logo'])) {
		$paths['logo']    = t3lib_div::getFileAbsFileName($extConfigs['logo']);
	}

	$paths = t3lib_div::removePrefixPathFromList($paths,PATH_site);

	$GLOBALS['TYPO3backend']->addCssFile('beskin', '../'.$paths['cssFile']);
	$GLOBALS['TBE_STYLES']['logo'] = '../'.$paths['logo'];

}
?>