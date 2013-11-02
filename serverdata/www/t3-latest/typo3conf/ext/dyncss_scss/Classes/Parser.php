<?php

class tx_DyncssScss_Parser extends tx_Dyncss_Parser_AbstractParser{
	function __construct() {
		// ensure no one else has loaded lessc already ;)
		if(!class_exists('scssc')) {
			include_once(t3lib_extMgm::extPath('dyncss_scss') . 'Resources/Private/Php/scss/scss.inc.php');
		}
		// build instance to usage
		$this->parser = new scssc();
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
					'/\$' . $key . ':(.*);/U',
					 '\$' . $key . ': ' . $value . ';',
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
		try {
			$this->parser->setImportPaths(array(dirname($inputFilename), dirname($preparedFilename)));
			return $this->parser->compile('@import "' . basename($preparedFilename) . '"');
		} catch(Exception $e) {
			return $e;
		}

	}
}