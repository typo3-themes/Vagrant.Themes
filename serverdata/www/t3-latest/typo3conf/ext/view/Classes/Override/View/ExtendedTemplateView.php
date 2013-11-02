<?php
namespace NamelessCoder\View\Override\View;
$version = TYPO3_version;
$shouldMapClassesForV6 = $version{0} >= 6;
if ($shouldMapClassesForV6) {
	class_alias('TYPO3\\CMS\\Fluid\\View\\TemplateView', 'NamelessCoder\\View\\Override\\View\\TemplateViewProxy');
	class_alias('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface', 'NamelessCoder\\View\\Override\\View\\ViewInterfaceProxy');
} else {
	class_alias('\\Tx_Fluid_View_TemplateView', 'NamelessCoder\\View\\Override\\View\\TemplateViewProxy');
	class_alias('\\Tx_Extbase_Mvc_View_ViewInterface', 'NamelessCoder\\View\\Override\\View\\ViewInterfaceProxy');
}
class ExtendedTemplateViewProxy extends TemplateViewProxy implements ViewInterfaceProxy {

	/**
	 * @var boolean
	 */
	protected $versionIsAtLeastSixPointZero = FALSE;

	/**
	 * @var boolean
	 */
	protected $versionIsFourPointFive = FALSE;

	/**
	 * CONSTRUCTOR
	 */
	public function __construct() {
		parent::__construct();
		$version = TYPO3_version;
		$this->versionIsAtLeastSixPointZero = ($version{0} >= 6);
		$this->versionIsFourPointFive = ($version{0} == 4 && $version{2} == 5);
	}

	/**
	 * @param string $pattern Pattern to be resolved
	 * @param boolean $bubbleControllerAndSubpackage if TRUE, then we successively split off parts from "@controller" and "@subpackage" until both are empty.
	 * @param boolean $formatIsOptional if TRUE, then half of the resulting strings will have ."@format" stripped off, and the other half will have it.
	 * @return array unix style path
	 */
	protected function expandGenericPathPattern($pattern, $bubbleControllerAndSubpackage, $formatIsOptional) {
		$subpackageKey = $this->controllerContext->getRequest()->getControllerSubpackageKey();
		$pathOverlayConfigurations = $this->buildPathOverlayConfigurations($subpackageKey);
		$templateRootPath = $backupTemplateRootPath = $this->getTemplateRootPath();
		$partialRootPath = $backupPartialRootPath = $this->getPartialRootPath();
		$layoutRootPath = $backupLayoutRootPath = $this->getLayoutRootPath();
		$subpackageKey = $this->controllerContext->getRequest()->getControllerSubpackageKey();
		$paths = parent::expandGenericPathPattern($pattern, $bubbleControllerAndSubpackage, $formatIsOptional);
		foreach ($pathOverlayConfigurations as $overlayPaths) {
			$templateRootPath = $overlayPaths['templateRootPath'];
			$partialRootPath = $overlayPaths['partialRootPath'];
			$layoutRootPath = $overlayPaths['layoutRootPath'];
			if (FALSE === empty($templateRootPath)) {
				$this->setTemplateRootPath($templateRootPath);
			}
			if (FALSE === empty($partialRootPath)) {
				$this->setPartialRootPath($partialRootPath);
			}
			if (FALSE === empty($layoutRootPath)) {
				$this->setLayoutRootPath($layoutRootPath);
			}
			$subset = parent::expandGenericPathPattern($pattern, $bubbleControllerAndSubpackage, $formatIsOptional);
			$paths = array_merge($paths, $subset);
		}
		$paths = array_unique($paths);
		$paths = array_reverse($paths);
		return $paths;
	}

	/**
	 * @param string $subpackageKey
	 * @return array
	 */
	private function buildPathOverlayConfigurations($subpackageKey) {
		if ($this->versionIsAtLeastSixPointZero) {
			$configurationManagerInterfaceName = 'TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManagerInterface';
			$configurationType = constant('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager::CONFIGURATION_TYPE_FRAMEWORK');
		} else {
			$configurationManagerInterfaceName = 'Tx_Extbase_Configuration_ConfigurationManagerInterface';
			$configurationType = constant('Tx_Extbase_Configuration_ConfigurationManager::CONFIGURATION_TYPE_FRAMEWORK');
		}
		$configurations = $this->objectManager->get($configurationManagerInterfaceName)->getConfiguration($configurationType);
		$configurations = $configurations['view'];
		$templateRootPath = NULL;
		$partialRootPath = NULL;
		$layoutRootPath = NULL;
		$overlays = array();
		$paths = array();
		if (TRUE === isset($configurations['overlays'])) {
			$overlays = $configurations['overlays'];
		}
		foreach ($overlays as $overlaySubpackageKey => $configuration) {
			if (TRUE === isset($configuration['templateRootPath'])) {
				$templateRootPath = $this->getFileAbsFileNameProxy($configuration['templateRootPath']);
			}
			if (TRUE === isset($configuration['partialRootPath'])) {
				$partialRootPath = $this->getFileAbsFileNameProxy($configuration['partialRootPath']);
			}
			if (TRUE === isset($configuration['layoutRootPath'])) {
				$layoutRootPath = $this->getFileAbsFileNameProxy($configuration['layoutRootPath']);
			}
			$paths[$overlaySubpackageKey] = array(
				'templateRootPath' => $templateRootPath,
				'partialRootPath' => $partialRootPath,
				'layoutRootPath' => $layoutRootPath
			);
		}
		$paths = array_reverse($paths);
		$paths[] = array(
			'templateRootPath' => $this->getTemplateRootPath(),
			'partialRootPath' => $this->getPartialRootPath(),
			'layoutRootPath' => $this->getLayoutRootPath()
		);
		return $paths;
	}

	/**
	 * @param string $filename
	 * @return string
	 */
	protected function getFileAbsFileNameProxy($filename) {
		if ($this->versionIsFourPointFive) {
			return \t3lib_div::getFileAbsFileName($filename);
		}
		if ($this->versionIsAtLeastSixPointZero) {
			return \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($filename);
		}
		return \t3lib_div::getFileAbsFileName($filename);
	}

	/**
	 * @param string $path
	 * @return string
	 */
	protected function fixWindowsFilePathProxy($path) {
		if ($this->versionIsAtLeastSixPointZero) {
			return \TYPO3\CMS\Core\Utility\GeneralUtility::fixWindowsFilePath($path);
		}
		return \t3lib_div::fixWindowsFilePath($path);
	}

}

if ($shouldMapClassesForV6) {
	class_alias('NamelessCoder\\View\\Override\\View\\ExtendedTemplateViewProxy', 'NamelessCoder\\View\\Override\\View\\ExtendedTemplateView');
} else {
	class_alias('NamelessCoder\\View\\Override\\View\\ExtendedTemplateViewProxy', 'Tx_View_Override_View_ExtendedTemplateView');
}
unset($shouldMapClassesForV6, $version);