<?php

interface tx_Dyncss_Parser_ParserInterface {
	function setOverrides($overrides);
	function compile($string, $name = null);
	function compileFile($inputFilename, $outputFilename = null);
}