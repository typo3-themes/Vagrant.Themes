<?php

class tx_Dyncss_Service_DyncssService {
	/**
	 * @param $inputFile notCompiled Dynamic Css file
	 * @return string path to the compiled file, or to the input file, if not modified
	 */
	static function getCompiledFile($inputFile) {
		$currentFile = self::fixPathForInput($inputFile);
		$pathInfo    = pathinfo($currentFile);
		$parser = tx_DynCss_Configuration_BeRegistry::get()->getFileHandler($pathInfo['extension']);
		if($parser !== null) {
			$parser->setOverrides(self::getOverrides());
			$outputFile = $parser->compileFile($currentFile);
			return self::fixPathForOutput($outputFile);
		} else {
			return $inputFile;
		}
	}

	/**
	 * Just makes path absolute
	 *
	 * @param $file
	 * @return string
	 */
	protected static function fixPathForInput($file) {
		if(TYPO3_MODE === 'FE') {
			$file = t3lib_div::getFileAbsFileName($file);
		} elseif(TYPO3_MODE === 'BE') {
			$file = t3lib_div::resolveBackPath(PATH_typo3 . $file);
		}
		return $file;
	}
	/**
	 * Fixes the path for fe or be usage
	 *
	 * @param $file
	 * @return mixed
	 */
	protected static function fixPathForOutput($file) {
		if(TYPO3_MODE === 'FE') {
			$file = str_replace(PATH_site, '', $file);
		} elseif(TYPO3_MODE === 'BE') {
			$file = str_replace(PATH_site, '../', $file);
			if(array_key_exists('BACK_PATH', $GLOBALS)){
				$file = $GLOBALS['BACK_PATH'] . $file;
			}
		}
		return $file;
	}
	/**
	 * Gets the overrides (replacements) for the less file as array()
	 *
	 * @return array
	 */
	static function getOverrides() {
		$overrides = array();
		if(TYPO3_MODE === 'FE') {
			if((array_key_exists('plugin.',    $GLOBALS['TSFE']->tmpl->setup))
			&& (array_key_exists('tx_dyncss.',   $GLOBALS['TSFE']->tmpl->setup['plugin.']))
			&& (array_key_exists('overrides.', $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_dyncss.']))) {
				// iterate of cObjects and render them to pass them into the vars
				foreach($GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_dyncss.']['overrides.'] as $varName => $varCObj) {
					if(substr($varName, -1, 1) !== '.') {
						$cObj = t3lib_div::makeInstance('tslib_cObj');
						$overrides[$varName] = $cObj->cObjGetSingle($varCObj, $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_dyncss.']['overrides.'][$varName . '.']);
					}
				}
			}
			//
		} elseif(TYPO3_MODE === 'BE') {
			$configManager = t3lib_div::makeInstance('tx_Dyncss_Configuration_BeRegistry');
			$overrides = $configManager->getAllOverrides();
		}
		return $overrides;
	}

}