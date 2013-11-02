<?php

class tx_beskin_Hook_TYPO3Backend {
	function renderPostProcess($configuration) {
		$expression = '#<div id="typo3-logo">(.*)</div>#Ui';
			// $matches[0] -> complete match
			// $matches[0] -> part inside typo3-logo
		preg_match($expression, $configuration['content'], $matches);
				//get original code
		$buffer = $matches[1];
			//replace or append html
		$extConfigs         = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['beskin']);
		$extConfigs['html'] = str_replace('%TYPO3_version%',TYPO3_version,$extConfigs['html']);
		switch($extConfigs['replaceLogo']) {
			case 'append':
				$buffer = $buffer.$extConfigs['html'];
			break;
			case 'prepend':
				$buffer = $extConfigs['html'].$buffer;
			break;
			case 'htmlOnly':
				$buffer = $extConfigs['html'];
			break;
			case 'logoOnly':
			default:
				// $buffer = $buffer;
			break;
		}
		$configuration['content'] = str_replace($matches[1], $buffer, $configuration['content']);
		unset($buffer);
	}
}
