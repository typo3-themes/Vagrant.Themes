<?php

class tx_DyncssTurbine_Parser extends tx_Dyncss_Parser_AbstractParser{
	function __construct() {
		// ensure no one else has loaded lessc already ;)
		if(!class_exists('CSSP')) {
			$includes = array(
				'browser/browser.php',
				'cssmin/cssmin.php',
				'base.php',
				'parser.php',
				'cssp.php'
			);
			foreach($includes as $include) {
				include_once(t3lib_extMgm::extPath('dyncss_turbine') . 'Resources/Private/Php/turbine/' . $include);
			}
		}
		// build instance to usage
		$this->parser = new CSSP();
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
		 * Change the initial value of a turbine constant before compiling the file
		 */
		// not needed, as turbine has a "hook" like interface
		return $string;
	}

	/**
	 *
	 * based on Code by Tim Lochmüller - thanks :D
	 *
	 * @param $inputFilename
	 * @param $outputFilename
	 * @param $cacheFilename
	 */
	protected function _compileFile($inputFilename, $preparedFilename, $outputFilename, $cacheFilename) {
		try {
			$this->parser->load_file($preparedFilename, TRUE);
			$this->parser->set_indention_char();
			$this->parser->parse();
			$this->applyConstants();
			$this->parser->compile();
			return $this->parser->glue(FALSE);
		} catch(Exception $e) {
			return $e;
		}
	}

	/**
	 * applies constants to the instantiated parser object :D
	 */
	protected function applyConstants() {
		if(is_array($this->overrides)) {
			foreach($this->overrides as $key => $value) {
				$this->parser->parsed['global']['@constants'][$key] = array($value);
			}
		}
	}
}