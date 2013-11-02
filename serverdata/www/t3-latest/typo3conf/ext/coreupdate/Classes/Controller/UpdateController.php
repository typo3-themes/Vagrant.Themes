<?php

class Tx_Coreupdate_Controller_UpdateController extends Tx_Extbase_MVC_Controller_ActionController{
	/**
	 * @var array
	 */
	protected $linksToCheck = array(
		'typo3', 't3lib', 'index.php', 'typo3_src'
	);

	/**
	 * @var null|array
	 */
	protected $calculatedPaths = null;

	/**
	 * @var array
	 */
	protected $versionInformation = null;

	protected function initializeAction() {

	}

	/**
	 * Base overview Action
	 */
	function indexAction() {
		try {
			$this->initializeEnvironment();
		} catch(Exception $e) {
			$this->flashMessageContainer->add(
				$e->getMessage(),
				''
			);
		}
		$this->view->assign('versionInformation',      $this->getVersionInformation());
		$this->view->assign('calculatedPaths',         $this->calculatedPaths);
		$this->view->assign('availableVersionSources', $this->getLocallyAvailableVersions());
		$this->view->assign('branchDownloads',         $this->getBranchDownloads());
	}

	/**
	 * Action to switch the version
	 *
	 * @param $version string
	 */
	function switchAction($version) {
		$this->initializeEnvironment();
		$newSource = $this->calculatedPaths['realSourceLocation'] . 'typo3_src-' . $version;
		if(file_exists($newSource) && is_dir($newSource)) {
			#$tceMain = t3lib_div::makeInstance('t3lib_TCEmain');
			#$tceMain->clear_cacheCmd('all');
			unlink(PATH_site . 'typo3_src');
			symlink($newSource, PATH_site . 'typo3_src');
		} else {
			$this->flashMessageContainer->add(
				'Problem switching source ' . htmlspecialchars($newSource) . ' does not exist'
			);
		}
		$this->redirect('index');
	}

	/**
	 * Action to get a version from the provider
	 *
	 * @param $version string
	 */
	function importAction($version) {
		$this->initializeEnvironment();
		if(!is_dir($this->calculatedPaths['realSourceLocation'] . 'typo3_src-' . $version)) {
			if(!class_exists('ZipArchive')) {
				$this->flashMessageContainer->add(
					'Missing class ZipArchive, please install the corresponding PHP Extension.'
				);
				return;
			}
			$zipFile = $this->calculatedPaths['realSourceLocation']  . 'typo3_src-' . $version . '.zip';
			$buffer  = t3lib_div::getUrl('http://get.typo3.org/' . $version . '/zip/');
			t3lib_div::writeFile($zipFile, $buffer);
			$this->flashMessageContainer->add(
				'Downloaded ' . htmlspecialchars($version)
			);
			unset($buffer);
			$zipArchive = new ZipArchive();
			$zipArchive->open($zipFile);
			$zipArchive->extractTo($this->calculatedPaths['realSourceLocation']);
			$zipArchive->close();
			unset($zipArchive);
			unlink($zipFile);
		} else {
			$this->flashMessageContainer->add(
				'Already exists ' . htmlspecialchars($version)
			);
		}
		$this->redirect('index');
	}

	protected function initializeEnvironment() {
		// check if all links are real links
		foreach($this->linksToCheck as $link) {
			if(!is_link(PATH_site . $link)) {
				throw new Exception('Atleast ' . $link . ' is not a symlink, this extension can only update symlinked installations!');
			}
		}

		//get paths
		$this->calculatedPaths  = array(
			'PATH_site'          => PATH_site,
			'realSourceLocation' => realpath (dirname(PATH_site . readlink(PATH_site.'index.php')) . '/..') . '/',
		);

		//add available TYPO3 versions


		//check write permissions
		if(!is_writable(PATH_site)) {
			throw new Exception('Can´t write TYPO3 root directory! Needed to change the symlink ...');
		}
		if(!is_writable($this->calculatedPaths['realSourceLocation'])) {
			throw new Exception('Can´t write source location, this is needed to save the new source ...');
		}
	}

	protected function getBranchDownloads() {
		$this->getVersionInformation();
		$branchInstalled = substr(
			$this->versionInformation['installed'],
			0,
			strrpos($this->versionInformation['installed'], '.')
		);
		return tx_Coreupdate_Lib_Helper::getInstance()->getAllVersionInformationByBranch($branchInstalled);
	}

	protected function getVersionInformation() {
		if($this->versionInformation === null) {
			return $this->versionInformation = tx_Coreupdate_Lib_Helper::getInstance()->isUpToDate();
		} else {
			return $this->versionInformation;
		}
	}

	protected function getLocallyAvailableVersions() {
		$files = scandir($this->calculatedPaths['realSourceLocation']);
		$this->availableVersionSources =  array();

		$this->getVersionInformation();
		$branchInstalled = substr(
			$this->versionInformation['installed'],
			0,
			strrpos($this->versionInformation['installed'], '.')
		);

		foreach($files as $file) {
			if(substr($file, 0, 10) === 'typo3_src-') {
				$version = substr($file, 10);
				$versionBranch = substr($version, 0, strrpos($version, '.'));
				if($branchInstalled === $versionBranch) {
					$this->availableVersionSources[] = $version;
				}
			}
		}

		return $this->availableVersionSources;
	}

}