<?php
namespace TYPO3\CMS\Uncache\Override\Core\Cache;

class CacheManager extends \TYPO3\CMS\Core\Cache\CacheManager implements \TYPO3\CMS\Core\SingletonInterface {

	/**
	 * CONSTRUCTOR
	 */
	public function __construct() {
		$this->cacheFactory = new \TYPO3\CMS\Core\Cache\CacheFactory('production', $this);
	}

	/**
	 * @param string $identifier
	 * @return \TYPO3\CMS\Core\Cache\Frontend\FrontendInterface
	 */
	public function getCache($identifier) {
		return parent::getCache($identifier);
	}

	/**
	 * Instantiates the cache for $identifier.
	 *
	 * @param string $identifier
	 * @return void
	 */
	protected function createCache($identifier) {
		if (isset($this->cacheConfigurations[$identifier]['frontend'])) {
			$frontend = $this->cacheConfigurations[$identifier]['frontend'];
		} else {
			$frontend = $this->defaultCacheConfiguration['frontend'];
		}
		if (isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][$frontend]['className']) === TRUE) {
			$frontend = $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][$frontend]['className'];
			$backend = 'TYPO3\\CMS\\Core\\Cache\\Backend\\NullBackend';
		} elseif (isset($this->cacheConfigurations[$identifier]['backend'])) {
			$backend = $this->cacheConfigurations[$identifier]['backend'];
		} else {
			$backend = $this->defaultCacheConfiguration['backend'];
		}
		$backendOptions = array();
		$this->cacheFactory->create($identifier, $frontend, $backend, $backendOptions);
		$this->caches[$identifier]->getBackend()->setDefaultLifetime(1);
	}

}