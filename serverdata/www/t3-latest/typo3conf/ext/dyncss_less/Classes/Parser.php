<?php

class tx_DyncssLess_Parser extends tx_Dyncss_Parser_AbstractParser{
	function __construct() {
		// ensure no one else has loaded lessc already ;)
		if(!class_exists('lessc')) {
			include_once(t3lib_extMgm::extPath('dyncss_less') . 'Resources/Private/Php/less/lessc.inc.php');
		}
		// build instance to usage
		$this->parser = new lessc();
	}
	/**
	 * @param $string
	 * @param null $name
	 * @return mixed
	 */
	protected function _compile($string, $name = null) {
		// TODO: Implement _compile() method.
	}

	/**
	 * @param $string
	 * @return mixed
	 */
	protected function _prepareCompile($string) {
		/**
		 * Change the initial value of a less constant before compiling the file
		 */
		if(is_array($this->overrides)) {
			foreach($this->overrides as $key => $value) {
				$string = preg_replace(
					'/@' . $key . ':(.*);/U',
					 '@' . $key . ': ' . $value . ';',
					 $string,
					 1
				);
			}
		}
		return $string;
	}

	/**
	 * @param $inputFilename
	 * @param $outputFilename
	 * @param $cacheFilename
	 */
	protected function _compileFile($inputFilename, $preparedFilename, $outputFilename, $cacheFilename) {
		//check for cache file
		if(file_exists($cacheFilename)) {
			$cache = unserialize(file_get_contents($cacheFilename));
		} else {
			$cache = $preparedFilename;
		}
		try {
			$this->parser->setImportDir(
				array(
					dirname($inputFilename),
					PATH_site
				)
			);
			$newCache = $this->parser->cachedCompile($cache);
			if((!is_array($cache)) ||  ($newCache["updated"] > $cache["updated"])) {
				file_put_contents($cacheFilename,  serialize($newCache));
				return $newCache['compiled'];
			} else {
				return false;
			}
		} catch(Exception $e) {
			return $e;
		}
	}

	protected function _checkIfCompileNeeded($inputFilename) {
		return true;
	}
}