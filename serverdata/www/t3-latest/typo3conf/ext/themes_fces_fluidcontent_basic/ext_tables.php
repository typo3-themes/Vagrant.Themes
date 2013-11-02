<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid Content Elements: Basic FCEs');

Tx_Flux_Core::registerProviderExtensionKey('themes_fces_fluidcontent_basic', 'Page');