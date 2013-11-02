<?php

class tx_DyncssPhpsass_ParserScss extends tx_DyncssPhpsass_ParserSass{
	/**
	 * @var string $filetype type of the file, either sass or scss
	 */
	protected $fileType = 'scss';

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
}