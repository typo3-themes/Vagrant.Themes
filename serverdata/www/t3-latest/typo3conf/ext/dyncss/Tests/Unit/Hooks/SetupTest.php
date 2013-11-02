<?php

class tx_Dyncss_Hooks_SetupTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var tx_Dyncss_ExtMgm_Statefield
	 */
	protected $fixture;

	public function setUp() {
		#$this->fixture = new tx_Dyncss_ExtMgm_Statefield;
	}

	public function tearDown() {
		#unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function T3libPageRendererRenderPreProcessHook() {
		$this->assertContains(
			'tx_Dyncss_Hooks_T3libPageRendererRenderPreProcessHook->execute',
			$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'],
			'Rendering hook missing'
		);
	}

	/**
	 * @test
	 */
	public function T3libTcemainHook() {
		$this->assertContains(
			'tx_dyncss_Hooks_T3libTcemainHook->clearCachePostProc',
			$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'],
			'clear cache hook missing'
		);
	}
}