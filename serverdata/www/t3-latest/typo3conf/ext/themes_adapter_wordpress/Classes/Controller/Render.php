<?php

class Tx_ThemesAdapterWordpress_Controller_Renderer implements t3lib_Singleton{
	public $confEvaluated = array();

	function main($content, $conf) {
		foreach($conf as $key => $object) {
			if((!strpos($key, '.')) && (array_key_exists($key . '.', $conf))) {
				$this->confEvaluated[$key] = $GLOBALS['TSFE']->cObj->cObjGetSingle(
					$conf[$key],
					$conf[$key . '.']
				);
			}
		}

		$this->initializeWordpressEnvironment();

		return $this->getWordpressOutput();
	}

	function initializeWordpressEnvironment() {
		define('ABSPATH', t3lib_extMgm::extPath('themes_adapter_wordpress') . 'Resources/Private/Php/');
		define('WPINC', 'wp-includes');

		define('WP_SITEURL', 'typo3conf/themes/org.wordpress');

		$themeName = $this->confEvaluated['themeName'];

		if( ! defined('WP_USE_THEMES'))
			define('WP_USE_THEMES', TRUE);
		if ( ! defined( 'WP_CONTENT_URL' ) )
			define( 'WP_CONTENT_URL', WP_SITEURL );
		if ( ! defined( 'WP_CONTENT_DIR' ) )
			define( 'WP_CONTENT_DIR', PATH_site . 'typo3conf/themes/org.wordpress');
		if( ! defined( 'TEMPLATEPATH' ))
			define( 'TEMPLATEPATH', PATH_site . 'typo3conf/themes/org.wordpress/themes/' . $themeName);
		if( ! defined( 'STYLESHEETPATH' ))
			define( 'STYLESHEETPATH', PATH_site . 'typo3conf/themes/org.wordpress/themes/' . $themeName);

		$GLOBALS['wp_theme_directories'] = array(
			TEMPLATEPATH,
		);

		include(t3lib_extMgm::extPath('themes_adapter_wordpress') . 'Resources/Private/Php/main.php');
	}

	function getWordpressOutput() {
		#ob_start();
		if(is_file($this->confEvaluated['path'] . '/index.php')) {
			include($this->confEvaluated['path'] . '/index.php');
		} else {
			throw new Exception($this->confEvaluated['path'] . '/index.php - can´t be loaded as wordpress theme');
		}
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}