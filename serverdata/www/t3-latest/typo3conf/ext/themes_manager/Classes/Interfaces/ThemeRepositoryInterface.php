<?php
namespace TYPO3\CMS\ThemesManager\Interfaces;

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
 * Interface for theme repository
 */
interface ThemeRepositoryInterface {

	/**
	 * Find a theme given an identifier.
	 *
	 * @param string $identifier
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function findByIdentifier($identifier);

	/**
	 * Find all themes regardless of their status. Possible status can be downloaded, installed, etc...
	 *
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface[]
	 */
	public function findAll();

	/**
	 * Find all installed themes on the system.
	 *
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface[]
	 */
	public function findInstalled();

	/**
	 * Find all downloaded themes on the system regardless if they are installed or not.
	 *
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface[]
	 */
	public function findDownloaded();

}
?>