<?php

class Tx_ThemesFcesFluidcontentBasic_ViewHelpers_MaxImageWidthViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	/**
	 * Initialize
	 * @return void
	 */
	public function initializeArguments() {
		$this->registerArgument('parentMaxWidth',  'integer', 'MaxImageWidth of the parent Element');
		$this->registerArgument('percentOfParent', 'integer', 'percentage of parent width for this element',              FALSE, 100);
		$this->registerArgument('gutterColumn',    'integer', 'Pixels to remove after parentMaxWidth * percentOfResult',  FALSE, 0);
		$this->registerArgument('gutter',          'integer', 'Pixels to remove before parentMaxWidth * percentOfResult', FALSE, 0);
	}

	/**
	 * Render
	 *
	 * @return mixed
	 */
	function render() {
		return (($this->arguments['parentMaxWidth'] - $this->arguments['gutter']) * ($this->arguments['percentOfParent'] / 100)) - $this->arguments['gutterColumn'];
	}


	
}