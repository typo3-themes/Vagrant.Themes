<?php

class tx_Dyncss_ExtMgm_StatefieldTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var tx_Dyncss_ExtMgm_Statefield
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new tx_Dyncss_ExtMgm_Statefield;
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function mainTest() {
		$this->assertSame(
			'string',
			gettype($this->fixture->main()),
			'got not html string to embed in extension manager'
		);
	}
}