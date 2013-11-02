<?php
namespace TYPO3\CMS\ThemesManager\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Themes development team
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Controller which handles actions related to Theme.
 */
class ThemeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \TYPO3\CMS\ThemesManager\Interfaces\ThemeRepositoryInterface
	 */
	protected $themeRepository;

	/**
	 * Initialize default action
	 */
	public function initializeAction() {
		$this->themeRepository = NULL; // @todo implement me
	}
	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('themes', $this->themeRepository->findAll());
	}

	/**
	 * @param string $identifier
	 * @return string
	 */
	public function downloadAction($identifier) {
		$theme = $this->themeRepository->findByIdentifier($identifier);
		$result = $theme->download();
	}

	/**
	 * @param string $identifier
	 * @return string
	 */
	public function installAction($identifier) {
		$theme = $this->themeRepository->findByIdentifier($identifier);
		$result = $theme->install();

	}

	/**
	 * @param string $identifier
	 * @return void
	 */
	public function unInstallAction($identifier) {
		$theme = $this->themeRepository->findByIdentifier($identifier);
		$result = $theme->unInstall();

	}

	/**
	 * @param string $identifier
	 * @return void
	 */
	public function eraseAction($identifier) {
		$theme = $this->themeRepository->findByIdentifier($identifier);
		$result = $theme->erase();
	}
}
?>
