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
 * Interface for theme
 */
interface ThemeInterface {

	/**
	 * @return bool
	 */
	public function download();

	/**
	 * @return bool
	 */
	public function install();

	/**
	 * @return bool
	 */
	public function unInstall();

	/**
	 * @return bool
	 */
	public function erase();

	/**
	 * Whether the theme is downloaded, installed,
	 *
	 * @return string
	 */
	public function getState();

	/**
	 * @return string
	 */
	public function getIdentifier();

	/**
	 * @param string $identifier
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function setIdentifier($identifier);

	/**
	 * @return string
	 */
	public function getTitle();

	/**
	 * @param string $title
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function setTitle($title);

	/**
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThumbnailInterface[]
	 */
	public function getThumbnails();

	/**
	 * @param array $thumbnails
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function setThumbnails($thumbnails);

	/**
	 * @return array
	 */
	public function getKeywords();

	/**
	 * @param array $keywords
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function setKeywords($keywords);

	/**
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\AuthorInterface[]
	 */
	public function getAuthors();

	/**
	 * @param array $authors
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function setAuthors($authors);

	/**
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\LicenseInterface
	 */
	public function getLicense();

	/**
	 * @param array $license
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function setLicense($license);

	/**
	 * @return string
	 */
	public function getDemoUrl();

	/**
	 * @param string $demoUrl
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function setDemoUrl($demoUrl);

	/**
	 * @return int
	 */
	public function getVotes();

	/**
	 * @param int $votes
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function setVotes($votes);

	/**
	 * @return array
	 */
	public function getDependencies();

	/**
	 * @param array $dependencies
	 * @return \TYPO3\CMS\ThemesManager\Interfaces\ThemeInterface
	 */
	public function setDependencies($dependencies);
}
?>