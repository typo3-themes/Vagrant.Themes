<?php

class tx_DyncssPhpsass_ParserSass extends tx_Dyncss_Parser_AbstractParser{
	/**
	 * @var string $filetype type of the file, either sass or scss
	 */
	protected $fileType = 'sass';

	/**
	 * prepare the parser
	 */
	function __construct() {
		$this->initEmConfiguration();
		// ensure no one else has loaded sass already ;)
		if(!class_exists('SassParser')) {
			include_once(t3lib_extMgm::extPath('dyncss_phpsass') . 'Resources/Private/Php/PHPSass/SassParser.php');
		}
		$this->parser = new SassParser(
			array(
				'style'  => 'nested',
				'cache'  => FALSE,
				'syntax' => $this->fileType,
				'debug'  => FALSE,
				'callbacks' => array(
					'warn'  => 'tx_DyncssPhpsass_ParserSass_callback',
					'debug' => 'tx_DyncssPhpsass_ParserSass_callback',
				)
			)
		);

		if($this->config['enableDebugMode']) {
			$this->parser->debug      = TRUE;
			$this->parser->debug_info = TRUE;
		}
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
		 * Change the initial value of a sass constant before compiling the file
		 */
		if(is_array($this->overrides)) {
			foreach($this->overrides as $key => $value) {
				$string = preg_replace(
					'/\$' . $key . ':(.*);/U',
					 '\$' . $key . ': ' . $value,
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
			$this->parser->load_paths[] = dirname($inputFilename);

			return $this->parser->toCss($preparedFilename);
		} catch(Exception $e) {
			return print_r($this, TRUE) . "\n\n\n" .$e;
		}

	}
}

function tx_DyncssPhpsass_ParserSass_callback($filename, $parser) {
	#echo $filename . print_r($parser, TRUE);
}
