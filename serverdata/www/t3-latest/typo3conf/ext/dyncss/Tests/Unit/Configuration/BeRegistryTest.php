<?php

class Tx_Dyncss_Configuration_BeRegistryTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var tx_DynCss_Configuration_BeRegistry
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new tx_DynCss_Configuration_BeRegistry;
	}

	public function tearDown() {
		unset($this->fixture);
	}


	/**
	 * @test
	 */
	public function registerFileHandlerMissing() {
		$this->assertSame(
			NULL,
			$this->fixture->getFileHandler('sass')
		);
	}

	/**
	 * @test
	 */
	public function registerFileHandlerExisting() {
		$this->fixture->registerFileHandler('less', 'tx_Dyncss_Service_DyncssService');

		$this->assertSame(
			'tx_Dyncss_Service_DyncssService',
			get_class($this->fixture->getFileHandler('less'))
		);
	}

	/**
	 * @test
	 */
	public function getAllFileHandler() {
		$this->fixture->registerFileHandler('less', 't3lib_div');

		$this->assertSame(
			'array',
			gettype($this->fixture->getAllFileHandler()),
			'Filetypes is not an array'
		);

	}

}
?>