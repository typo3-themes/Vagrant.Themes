<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

/*******************************************************************************
 * register handler for Ext.Direct
 */
    if (TYPO3_MODE == 'BE') {
		t3lib_extMgm::registerExtDirectComponent(
			'TYPO3.Coreupdate',
			'EXT:coreupdate/Classes/Controller/ExtDirectController.php:tx_Coreupdate_Controller_ExtDirectController'
		);
    }

/**
 * Toolbar item
 */ 
	if (TYPO3_MODE == 'BE') {
		$GLOBALS['TYPO3_CONF_VARS']['typo3/backend.php']['additionalBackendItems'][]
			= t3lib_extMgm::extPath($_EXTKEY).'Classes/ToolbarItems/Updater/Hook.php';
	}

/**
 * Backend module
 */

$t = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['coreupdate']);
if($t['enableBackendModule']) {
	if (TYPO3_MODE === 'BE'){
		Tx_Extbase_Utility_Extension::registerModule(
			$_EXTKEY,                # Extension-Key
			'tools',                        # Kategorie
			'tx_coreupdate_m1',        # Modulname
			'',                             # Position
			Array ('Update' => 'index,import,switch'),       #Controller
			Array ('access'  => 'admin',                      # Konfiguration
				'icon'   => 'EXT:'.$_EXTKEY.'/ext_icon.gif',
				'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallangUpdateController.xml',
			)
		);
	}
}

/**
 * Add to reports module
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = 'tx_coreupdate_Hook_Reports_VersionStatusProvider';
?>
