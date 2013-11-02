<?php

namespace KayStrobach\Themes\Tca;

/**
 *
 */

class ThemeSelector {

	/**
	 * Displays the Theme selector as a TCEForm's userfunc. Handles display of
	 * skins and copying skins but leaves the saving to TCEmain.
	 *
	 * @param	array	$PA
	 * @param	object	$pObj
	 * @return	string
	 */
	public function display($PA, $pObj) {
		$repository = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Tx_Themes_Domain_Repository_ThemeRepository');

		$view = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Tx_Fluid_View_StandaloneView');

		$view->setFormat('html');
		$view->setTemplatePathAndFilename(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:themes/Resources/Private/Templates/ThemeSelector.html'));
		$view->assignMultiple(array(
			'formField' => array(
				'table' => $PA['table'],
				'row'   => $PA['row'],
			),
			'selectedSkin' => $repository->findByUid($PA['row']['tx_themes_skin']),
			'selectableSkins' => $repository->findAll(),
		));
		return $view->render();
	}

}

