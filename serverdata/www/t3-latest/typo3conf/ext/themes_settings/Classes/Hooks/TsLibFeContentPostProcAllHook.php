<?php

class tx_ThemesSettings_Hooks_TsLibFeContentPostProcAllHook {
	/**
	 * @param $params
	 * @param $reference
	 */
	function init(&$params, &$reference) {
		$this->baseUrl      = $params['pObj']->config['config']['baseURL'];
		$this->id           = $params['pObj']->id;
		$this->pagerenderer = $params['pObj']->getPageRenderer();
		$this->beUserLogin  = $params['pObj']->beUserLogin;
		$content            = $params['pObj']->content;

	}
	/**
	 * handler for non cached output processing to insert piwik tracking code
	 * if in independent mode
	 *
	 * @param	pointer    $$params: passed params from the hook
	 * @param	pointer    $reference: to the parent object
	 * @return	void       void
	 */
	function contentPostProc_output(&$params, &$reference){

		$t = new \TYPO3\CMS\Core\TypoScript\Parser\TypoScriptParser();

		$this->init($params, $reference);
		/**
		 * @var Tx_ThemesSettings_TypoScript_Helper $tsparser
		 */
		$tsparser = t3lib_div::makeInstance('Tx_ThemesSettings_TypoScript_Helper');

		print_r($tsparser->getAllowedConstants($this->id));

		die();

		//check wether there is a BE User loggged in, if yes, check other access rights and enable the layout changer if rights are given
		if(!($beUserLogin == 1)) {
			return;
		}
	}
}