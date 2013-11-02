<?php

class tx_Coreupdate_Lib_Helper {
	/**
	 * @var null
	 */
	protected static $instance = NULL;

	/**
	 * @return null|tx_CoreUpdate_Lib_Helper
	 */
	static function getInstance() {
		if(self::$instance === NULL) {
			self::$instance = new tx_CoreUpdate_Lib_Helper();
		}
		return self::$instance;
	}
	function getAllVersionInformation() {
		if(false === ($versionInformation = $this->getFromCache())) {
			$versionInformation = json_decode(t3lib_div::getURL('http://get.typo3.org/json'), TRUE);
			if($versionInformation !== NULL) {
				$this->storeInCache($versionInformation);
			}
		}
		return $versionInformation;
	}

	function getAllVersionInformationByBranch($branch) {
		$versionInformation = $this->getAllVersionInformation();
		if(array_key_exists($branch, $versionInformation)) {
			#throw new Exception(json_encode($versionInformation[$branch]['releases']));
			return $versionInformation[$branch]['releases'];
		} else {
			return array();
		}
	}

	/**
	 * @throws Exception
	 */
	function isUpToDate() {
		$versionInformation = $this->getAllVersionInformation();

		if($versionInformation === null) {
			$return = array(
				'systemState'             => 'error',
				'message'                 => 'Could not retrieve version information.',
				'installed'               => TYPO3_version,
				'latest_installed_branch' => '?',
			);
		} else {
			if(($versionInformation['latest_lts'] === TYPO3_version)
			|| ($versionInformation['latest_stable'] === TYPO3_version)
			|| ($versionInformation['latest_old_stable'] === TYPO3_version)){
					// system is uptodate - perfect
				$systemstate = 'noUpdate';
			} elseif(
				($this->getMinor($versionInformation['latest_lts']) === $this->getMinor(TYPO3_version))
			  ||($this->getMinor($versionInformation['latest_stable']) === $this->getMinor(TYPO3_version))
			  ||($this->getMinor($versionInformation['latest_old_stable']) === $this->getMinor(TYPO3_version))
			  ||($this->getMinor($versionInformation['latest_deprecated']) === $this->getMinor(TYPO3_version))) {
					// system is not uptodate, but the version is maintained, search for minor updates
				$minorVersion = $this->getMinor(TYPO3_version);
				$patchVersion = $this->getPatch(TYPO3_version);
				if(!array_key_exists($minorVersion . '.' . $patchVersion, $versionInformation[$this->getMinor(TYPO3_version)]['releases'])) {
					$systemstate = 'error';
					$message     = 'installed TYPO3 version not found in version list';
				} else {
					$systemstate  = 'noUpdate';
					$patchVersion++;

					while(array_key_exists($minorVersion . '.' . $patchVersion, $versionInformation[$this->getMinor(TYPO3_version)]['releases'])) {
						switch($versionInformation[$this->getMinor(TYPO3_version)]['releases'][$minorVersion . '.' . $patchVersion]['type']) {
							case 'regular':
								if($systemstate !== 'newSecurityUpdate') {
									$systemstate = 'newMinorUpdate';
								}
							break;
							case 'security':
								$systemstate = 'newSecurityUpdate';
							break;
							default:
								throw new Exception('unknown update type');
							break;
						}
						$patchVersion++;
					}
				}
			} else {
				// system is not uptodate, version is not maintained anymore
				$systemstate = 'newMajorUpdate';
			}
			$return = array(
				'systemState'             => $systemstate,
				'latest_lts'              => $versionInformation['latest_lts'],
				'latest_stable'           => $versionInformation['latest_stable'],
				'latest_old_stable'       => $versionInformation['latest_old_stable'],
				'latest_deprecated'       => $versionInformation['latest_deprecated'],
				'latest_installed_branch' => $versionInformation[$this->getMinor(TYPO3_version)]['latest'],
				'installed'               => TYPO3_version,
			);
			if(!empty($message)) {
				$return['message'] = $message;
			}
		}
		return $return;
	}

	protected function initCache() {
		t3lib_cache::initializeCachingFramework();
		try {
			$this->cacheInstance = $GLOBALS['typo3CacheManager']->getCache('coreupdate_versionStore');
		} catch (t3lib_cache_exception_NoSuchCache $e) {
			$this->cacheInstance = $GLOBALS['typo3CacheFactory']->create(
				'coreupdate_versionStore',
				$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['frontend'],
				$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['backend'],
				$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['options']
			);
		}
	}

	protected function storeInCache($value) {
		$this->initCache();
		return $GLOBALS['typo3CacheManager']->getCache('coreupdate_versionStore')->set('coreupdate_versionStore', $value, array(), 3600);
	}

	protected function getFromCache() {
		$this->initCache();
		return $GLOBALS['typo3CacheManager']->getCache('coreupdate_versionStore')->get('coreupdate_versionStore');
	}

	protected function getMinor($version) {
		list($major, $minor, $patch) = explode('.', TYPO3_version);
		$branch_version = intval($major) . '.' . intval($minor);
		return $branch_version;
	}
	protected function getPatch($version) {
		list($major, $minor, $patch) = explode('.', TYPO3_version);
		return intval($patch);
	}
}