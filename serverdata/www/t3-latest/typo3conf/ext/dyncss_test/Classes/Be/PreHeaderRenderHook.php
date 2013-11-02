<?php

class Tx_DyncssTest_Be_PreHeaderRenderHook {
	function main($arg) {
		/** @var $pagerenderer t3lib_PageRenderer */
		$pagerenderer = $arg['pageRenderer'];
		$overrides = t3lib_div::makeInstance('tx_Dyncss_Configuration_BeRegistry');

		$options = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['dyncss_test']);
		$overrides->setOverride('color', $options['baseColor']);

		if(t3lib_extMgm::isLoaded('dyncss_less')) {
			$pagerenderer->addCssFile(t3lib_extMgm::extRelPath('dyncss_test') . 'Resources/Public/Stylesheets/test_be.less');
		}
		if(t3lib_extMgm::isLoaded('dyncss_scss')) {
			$pagerenderer->addCssFile(t3lib_extMgm::extRelPath('dyncss_test') . 'Resources/Public/Stylesheets/test_be.scss');
		}
		if(t3lib_extMgm::isLoaded('dyncss_phpsass')) {
			$pagerenderer->addCssFile(t3lib_extMgm::extRelPath('dyncss_test') . 'Resources/Public/Stylesheets/test_be.scss');
		}
		if(t3lib_extMgm::isLoaded('dyncss_turbine')) {
			$pagerenderer->addCssFile(t3lib_extMgm::extRelPath('dyncss_test') . 'Resources/Public/Stylesheets/test_be.turbine');
		}

	}
}
