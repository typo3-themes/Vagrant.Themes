<?php

class Tx_ThemesSettings_TypoScript_Helper implements t3lib_Singleton{
	/**
	 * @var t3lib_tsparser_ext
	 */
	protected $tsParser;
	protected $tsParserTplRow;
	protected $tsParserConstants;
	protected $tsParserInitialized;

	function applyToPid($pid,array $constants, $isSetConstants = array()) {
		$this->initializeTSParser($pid);
		$this->setConstants($pid, $constants, $isSetConstants);
		//@todo add hook to apply additional options
	}
	function getConstants($pid) {
		$this->initializeTSParser($pid);

		return $this->tsParserConstants;
	}

	function getAllowedConstants($pid) {
		$categoriesArray = $this->getCategories($pid);
		$constantArray   = $this->getConstants($pid);
		$return     = array();
		foreach($categoriesArray as $category => $constants) {
			$return[$category] = array();
			foreach($constants as $constant => $subcat) {
				$return[$category][$constant] = $constantArray[$constant];
			}
		}
		return $return;
	}

	function getCategories($pid) {
		$this->initializeTSParser($pid);

		$extConf          = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['themes_settings']);

		$categoriesToShow = t3lib_div::trimExplode(',', $extConf['categoriesToShow']);
		$deniedFields     = t3lib_div::trimExplode(',', $extConf['constantsToHide']);

		foreach($this->tsParser->categories as $categorieName => $categorie) {
			if(in_array($categorieName, $categoriesToShow)) {
				foreach($categorie as $constantName => $type) {
					if(in_array($constantName, $deniedFields)) {
						unset($this->tsParser->categories[$categorieName][$constantName]);
					}
				}
			} else {
				unset($this->tsParser->categories[$categorieName]);
			}

		}
		return $this->tsParser->categories;
	}
	function getTsParser($pid) {
		$this->initializeTSParser($pid);
		return $this->tsParser;
	}
	/**
	 * @todo access check!
	 *
	 * @param $pid
	 * @param $constants
	 * @return void
	 */
	protected function setConstants($pid, $constants, $isSetConstants = array()) {
		$this->getConstants($pid);

		$filteredConstants = array();
		/*foreach($constants as $constant) {
			foreach($this->tsParserConstants as $allowedConstants) {
				if($constant['name'] == $allowedConstants['name']) {
					$filteredConstants[] = $constant;
					break;
				}
			}
		}*/
		$filteredConstants = $constants;

		$postData = array(
			'data' => $constants,
			'check'=> $isSetConstants,
		);

		$this->tsParser->changed = 0;
		//$this->tsParser->ext_dontCheckIssetValues = 1;
		$this->tsParser->ext_procesInput($postData, $_FILES, $this->tsParserConstants, $this->tsParserTplRow);

		if ($this->tsParser->changed) {
			// Set the data to be saved
			$saveId = $this->tsParserTplRow['uid'];
			$recData = array();
			$recData['sys_template'][$saveId]['constants'] = implode($this->tsParser->raw, chr(10));
			// Create new  tce-object
			$tce = t3lib_div::makeInstance('t3lib_TCEmain');
			$tce->stripslashes_values = 0;

			// Initialize
			$user = clone $GLOBALS['BE_USER'];
			$user->user['admin'] = 1;
			$tce->start($recData, Array(), $user);
			$tce->admin = 1;
			// Saved the stuff
			$tce->process_datamap();
			// Clear the cache (note: currently only admin-users can clear the cache in tce_main.php)
			$tce->clear_cacheCmd('all');
			unset($user);
		}
	}
	protected function initializeTSParser($pageId, $template_uid = 0) {
		if(!$this->tsParserInitialized) {
			$this->tsParserInitialized = TRUE;
			$this->tsParser = t3lib_div::makeInstance('t3lib_tsparser_ext');
			$this->tsParser->tt_track = 0; // Do not log time-performance information
			$this->tsParser->init();

			$this->tsParser->ext_localGfxPrefix = t3lib_extMgm::extPath('tstemplate_ceditor');
			$this->tsParser->ext_localWebGfxPrefix = $GLOBALS['BACK_PATH'].t3lib_extMgm::extRelPath('tstemplate_ceditor');

			$this->tsParserTplRow = $this->tsParser->ext_getFirstTemplate($pageId, $template_uid);

			if (is_array($this->tsParserTplRow)) {
				/**
				 * @var t3lib_pageSelect $sys_page
				 */
				$sys_page = t3lib_div::makeInstance('t3lib_pageSelect');
				$rootLine = $sys_page->getRootLine($pageId);
				$this->tsParser->runThroughTemplates($rootLine, $template_uid); // This generates the constants/config + hierarchy info for the template.
				$this->tsParserConstants = $this->tsParser->generateConfig_constants(); // The editable constants are returned in an array.
				$this->tsParser->ext_categorizeEditableConstants($this->tsParserConstants); // The returned constants are sorted in categories, that goes into the $tmpl->categories array
				$this->tsParser->ext_regObjectPositions($this->tsParserTplRow['constants']);
				// This array will contain key=[expanded constantname], value=linenumber in template. (after edit_divider, if any)
				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return TRUE;
		}
	}
}