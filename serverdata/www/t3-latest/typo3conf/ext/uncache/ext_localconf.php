<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Cache\\Frontend\\PhpFrontend'] =
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['t3lib_cache_frontend_PhpFrontend'] =
	array('className' => 'TYPO3\\CMS\\Uncache\\Override\\Core\\Cache\\Frontend\\PhpFrontend');
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend'] =
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['t3lib_cache_frontend_VariableFrontend'] =
	array('className' => 'TYPO3\\CMS\\Uncache\\Override\\Core\\Cache\\Frontend\\VariableFrontend');
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Cache\\Frontend\\StringFrontend'] =
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['t3lib_cache_frontend_StringFrontend'] =
	array('className' => 'TYPO3\\CMS\\Uncache\\Override\\Core\\Cache\\Frontend\\StringFrontend');
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Cache\\CacheManager'] =
	array('className' => 'TYPO3\\CMS\\Uncache\\Override\\Core\\Cache\\CacheManager');
if (isset($GLOBALS['typo3CacheManager']) === TRUE) {
	$configurations = \TYPO3\CMS\Extbase\Reflection\ObjectAccess::getProperty($GLOBALS['typo3CacheManager'], 'cacheConfigurations', TRUE);
	$caches = \TYPO3\CMS\Extbase\Reflection\ObjectAccess::getProperty($GLOBALS['typo3CacheManager'], 'caches', TRUE);
	$GLOBALS['typo3CacheManager'] = new \TYPO3\CMS\Uncache\Override\Core\Cache\CacheManager();
	$GLOBALS['typo3CacheManager']->setCacheConfigurations($configurations);
	\TYPO3\CMS\Extbase\Reflection\ObjectAccess::setProperty($GLOBALS['typo3CacheManager'], 'caches', $caches, TRUE);
	\TYPO3\CMS\Core\Utility\GeneralUtility::setSingletonInstance('TYPO3\\CMS\\Core\\Cache\\CacheManager', $GLOBALS['typo3CacheManager']);
	unset($configurations, $caches);
}