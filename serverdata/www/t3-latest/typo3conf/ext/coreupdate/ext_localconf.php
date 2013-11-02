<?php


// Register cache 'myext_mycache'
if (!is_array($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore'])) {
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore'] = array();
}
// Define string frontend as default frontend, this must be set with TYPO3 4.5 and below
// and overrides the default variable frontend of 4.6
if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['core']['frontend'])) {
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['frontend'] = 't3lib_cache_frontend_VariableFrontend';
}
if (t3lib_utility_VersionNumber::convertVersionNumberToInteger(TYPO3_version) < '4006000') {
    // Define database backend as backend for 4.5 and below (default in 4.6)
    if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['backend'])) {
        $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['backend'] = 't3lib_cache_backend_DbBackend';
    }
	// Define data and tags table for 4.5 and below (obsolete in 4.6)
	if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['options'])) {
		$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['options'] = array();
	}
	if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['options']['cacheTable'])) {
		$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['options']['cacheTable'] = 'cf_coreupdate_versionstore';
	}
	if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['options']['tagsTable'])) {
		$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['coreupdate_versionStore']['options']['tagsTable'] = 'tx_coreupdate_cache_tags';
	}
}