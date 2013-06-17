<?php
/**
 * Compiled ext_tables.php cache file
 */

global $T3_SERVICES, $T3_VAR, $TYPO3_CONF_VARS;
global $TBE_MODULES, $TBE_MODULES_EXT, $TCA;
global $PAGES_TYPES, $TBE_STYLES, $FILEICONS;
global $_EXTKEY;

/**
 * Extension: cms
 * File: /var/www/t3-latest/typo3/sysext/cms/ext_tables.php
 */

$_EXTKEY = 'cms';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'layout', 'top', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'layout/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_layout', 'EXT:cms/locallang_csh_weblayout.xml');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:cms/locallang_csh_webinfo.xml');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_info', 'tx_cms_webinfo_page', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'web_info/class.tx_cms_webinfo.php', 'LLL:EXT:cms/locallang_tca.xml:mod_tx_cms_webinfo_page');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_info', 'tx_cms_webinfo_lang', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'web_info/class.tx_cms_webinfo_lang.php', 'LLL:EXT:cms/locallang_tca.xml:mod_tx_cms_webinfo_lang');
}
// Add allowed records to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('pages_language_overlay,tt_content,sys_template,sys_domain,backend_layout');
// This is the standard TypoScript content table, tt_content
$TCA['tt_content'] = array(
	'ctrl' => array(
		'label' => 'header',
		'label_alt' => 'subheader,bodytext',
		'sortby' => 'sorting',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'title' => 'LLL:EXT:cms/locallang_tca.xml:tt_content',
		'delete' => 'deleted',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'type' => 'CType',
		'hideAtCopy' => TRUE,
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xml:LGL.prependAtCopy',
		'copyAfterDuplFields' => 'colPos,sys_language_uid',
		'useColumnsForDefaultValues' => 'colPos,sys_language_uid',
		'shadowColumnsForNewPlaceholders' => 'colPos',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'languageField' => 'sys_language_uid',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group'
		),
		'typeicon_column' => 'CType',
		'typeicon_classes' => array(
			'header' => 'mimetypes-x-content-header',
			'textpic' => 'mimetypes-x-content-text-picture',
			'image' => 'mimetypes-x-content-image',
			'bullets' => 'mimetypes-x-content-list-bullets',
			'table' => 'mimetypes-x-content-table',
			'uploads' => 'mimetypes-x-content-list-files',
			'multimedia' => 'mimetypes-x-content-multimedia',
			'media' => 'mimetypes-x-content-multimedia',
			'menu' => 'mimetypes-x-content-menu',
			'list' => 'mimetypes-x-content-plugin',
			'mailform' => 'mimetypes-x-content-form',
			'search' => 'mimetypes-x-content-form-search',
			'login' => 'mimetypes-x-content-login',
			'shortcut' => 'mimetypes-x-content-link',
			'script' => 'mimetypes-x-content-script',
			'div' => 'mimetypes-x-content-divider',
			'html' => 'mimetypes-x-content-html',
			'text' => 'mimetypes-x-content-text',
			'default' => 'mimetypes-x-content-text'
		),
		'typeicons' => array(
			'header' => 'tt_content_header.gif',
			'textpic' => 'tt_content_textpic.gif',
			'image' => 'tt_content_image.gif',
			'bullets' => 'tt_content_bullets.gif',
			'table' => 'tt_content_table.gif',
			'uploads' => 'tt_content_uploads.gif',
			'multimedia' => 'tt_content_mm.gif',
			'media' => 'tt_content_mm.gif',
			'menu' => 'tt_content_menu.gif',
			'list' => 'tt_content_list.gif',
			'mailform' => 'tt_content_form.gif',
			'search' => 'tt_content_search.gif',
			'login' => 'tt_content_login.gif',
			'shortcut' => 'tt_content_shortcut.gif',
			'script' => 'tt_content_script.gif',
			'div' => 'tt_content_div.gif',
			'html' => 'tt_content_html.gif'
		),
		'thumbnail' => 'image',
		'requestUpdate' => 'list_type,rte_enabled,menu_type',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tbl_tt_content.php',
		'dividers2tabs' => 1,
		'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform'
	)
);
// fe_users
$TCA['fe_users'] = array(
	'ctrl' => array(
		'label' => 'username',
		'default_sortby' => 'ORDER BY username',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'fe_cruser_id' => 'fe_cruser_id',
		'title' => 'LLL:EXT:cms/locallang_tca.xml:fe_users',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'disable',
			'starttime' => 'starttime',
			'endtime' => 'endtime'
		),
		'typeicon_classes' => array(
			'default' => 'status-user-frontend'
		),
		'useColumnsForDefaultValues' => 'usergroup,lockToDomain,disable,starttime,endtime',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tbl_cms.php',
		'dividers2tabs' => 1,
		'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company'
	),
	'feInterface' => array(
		'fe_admin_fieldList' => 'username,password,usergroup,name,address,telephone,fax,email,title,zip,city,country,www,company'
	)
);
// fe_groups
$TCA['fe_groups'] = array(
	'ctrl' => array(
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xml:LGL.prependAtCopy',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'title' => 'LLL:EXT:cms/locallang_tca.xml:fe_groups',
		'typeicon_classes' => array(
			'default' => 'status-user-group-frontend'
		),
		'useColumnsForDefaultValues' => 'lockToDomain',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tbl_cms.php',
		'dividers2tabs' => 1,
		'searchFields' => 'title,description'
	)
);
// sys_domain
$TCA['sys_domain'] = array(
	'ctrl' => array(
		'label' => 'domainName',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'title' => 'LLL:EXT:cms/locallang_tca.xml:sys_domain',
		'iconfile' => 'domain.gif',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'typeicon_classes' => array(
			'default' => 'mimetypes-x-content-domain'
		),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tbl_cms.php',
		'searchFields' => 'domainName,redirectTo'
	)
);
// pages_language_overlay
$TCA['pages_language_overlay'] = array(
	'ctrl' => array(
		'label' => 'title',
		'tstamp' => 'tstamp',
		'title' => 'LLL:EXT:cms/locallang_tca.xml:pages_language_overlay',
		'versioningWS' => TRUE,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime'
		),
		'transOrigPointerField' => 'pid',
		'transOrigPointerTable' => 'pages',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'shadowColumnsForNewPlaceholders' => 'title',
		'languageField' => 'sys_language_uid',
		'mainpalette' => 1,
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tbl_cms.php',
		'type' => 'doktype',
		'typeicon_classes' => array(
			'default' => 'mimetypes-x-content-page-language-overlay'
		),
		'dividers2tabs' => TRUE,
		'searchFields' => 'title,subtitle,nav_title,keywords,description,abstract,author,author_email,url'
	)
);
// sys_template
$TCA['sys_template'] = array(
	'ctrl' => array(
		'label' => 'title',
		'tstamp' => 'tstamp',
		'sortby' => 'sorting',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xml:LGL.prependAtCopy',
		'title' => 'LLL:EXT:cms/locallang_tca.xml:sys_template',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'delete' => 'deleted',
		'adminOnly' => 1,
		// Only admin, if any
		'iconfile' => 'template.gif',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime'
		),
		'typeicon_column' => 'root',
		'typeicon_classes' => array(
			'default' => 'mimetypes-x-content-template-extension',
			'1' => 'mimetypes-x-content-template'
		),
		'typeicons' => array(
			'0' => 'template_add.gif'
		),
		'dividers2tabs' => 1,
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tbl_cms.php',
		'searchFields' => 'title,constants,config'
	)
);
// layouts
$TCA['backend_layout'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:cms/locallang_tca.xml:backend_layout',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tbl_cms.php',
		'iconfile' => 'backend_layout.gif',
		'selicon_field' => 'icon',
		'selicon_field_path' => 'uploads/media',
		'thumbnail' => 'resources'
	)
);



/**
 * Extension: lang
 * File: /var/www/t3-latest/typo3/sysext/lang/ext_tables.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE == 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
		// Registers a Backend Module
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools', // Make module a submodule of 'tools'
		'language', // Submodule key
		'after:extensionmanager', // Position
		array(
				// An array holding the controller-action-combinations that are accessible
			'Language' => 'index, updateLanguageSelection, updateTranslation'
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod_language.xml',
		)
	);
}




/**
 * Extension: sv
 * File: /var/www/t3-latest/typo3/sysext/sv/ext_tables.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['sv']['services'] = array(
		'title' => 'LLL:EXT:sv/reports/locallang.xml:report_title',
		'description' => 'LLL:EXT:sv/reports/locallang.xml:report_description',
		'icon' => 'EXT:sv/reports/tx_sv_report.png',
		'report' => 'TYPO3\\CMS\\Sv\\Report\\ServicesListReport'
	);
}



/**
 * Extension: extensionmanager
 * File: /var/www/t3-latest/typo3/sysext/extensionmanager/ext_tables.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$TCA['tx_extensionmanager_domain_model_extension'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xml:tx_extensionmanager_domain_model_extension',
		'label' => 'uid',
		'default_sortby' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Extension.php',
		'hideTable' => TRUE
	),
);

$TCA['tx_extensionmanager_domain_model_repository'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xml:tx_extensionmanager_domain_model_repository',
		'label' => 'uid',
		'default_sortby' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Repository.php',
		'hideTable' => TRUE,
	),
);

if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools',
		'extensionmanager', '', array(
			'List' => 'index,ter,showAllVersions',
			'Action' => 'toggleExtensionInstallationState,removeExtension,downloadExtensionZip,downloadExtensionData',
			'Configuration' => 'showConfigurationForm,save',
			'Download' => 'checkDependencies,installFromTer,updateExtension,updateCommentForUpdatableVersions',
			'UpdateScript' => 'show',
			'UpdateFromTer' => 'updateExtensionListFromTer',
			'UploadExtensionFile' => 'form,extract'
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xml',
		)
	);

	// Register extension status report system
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Extension Manager'][] =
		'TYPO3\\CMS\\Extensionmanager\\Report\\ExtensionStatus';

	// Register specific icon for update script button
	t3lib_SpriteManager::addSingleIcons(
		array(
			'update-script' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/Icons/ExtensionUpdateScript.png'
		),
		$_EXTKEY
	);
}



/**
 * Extension: recordlist
 * File: /var/www/t3-latest/typo3/sysext/recordlist/ext_tables.php
 */

$_EXTKEY = 'recordlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath('web_list', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'list', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
}



/**
 * Extension: extbase
 * File: /var/www/t3-latest/typo3/sysext/extbase/ext_tables.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	// register Extbase dispatcher for modules
	$TBE_MODULES['_dispatcher'][] = 'TYPO3\\CMS\\Extbase\\Core\\BootstrapInterface';
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['extbase'][] = 'TYPO3\\CMS\\Extbase\\Utility\\ExtbaseRequirementsCheckUtility';
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('fe_users');
if (!isset($TCA['fe_users']['ctrl']['type'])) {
	$tempColumns = array(
		'tx_extbase_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.0', '0'),
					array('LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser', 'Tx_Extbase_Domain_Model_FrontendUser')
				),
				'size' => 1,
				'maxitems' => 1,
				'default' => '0'
			)
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumns, 1);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'tx_extbase_type');
	$TCA['fe_users']['ctrl']['type'] = 'tx_extbase_type';
}
$TCA['fe_users']['types']['Tx_Extbase_Domain_Model_FrontendUser'] = $TCA['fe_users']['types']['0'];
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('fe_groups');
if (!isset($TCA['fe_groups']['ctrl']['type'])) {
	$tempColumns = array(
		'tx_extbase_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_groups.tx_extbase_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_groups.tx_extbase_type.0', '0'),
					array('LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup', 'Tx_Extbase_Domain_Model_FrontendUserGroup')
				),
				'size' => 1,
				'maxitems' => 1,
				'default' => '0'
			)
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_groups', $tempColumns, 1);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_groups', 'tx_extbase_type');
	$TCA['fe_groups']['ctrl']['type'] = 'tx_extbase_type';
}
$TCA['fe_groups']['types']['Tx_Extbase_Domain_Model_FrontendUserGroup'] = $TCA['fe_groups']['types']['0'];
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Extbase\\Scheduler\\Task'] = array(
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:task.name',
	'description' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:task.description',
	'additionalFields' => 'TYPO3\\CMS\\Extbase\\Scheduler\\FieldProvider'
);



/**
 * Extension: fluid
 * File: /var/www/t3-latest/typo3/sysext/fluid/ext_tables.php
 */

$_EXTKEY = 'fluid';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid: (Optional) default ajax configuration');



/**
 * Extension: cshmanual
 * File: /var/www/t3-latest/typo3/sysext/cshmanual/ext_tables.php
 */

$_EXTKEY = 'cshmanual';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('help', 'cshmanual', 'top', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/');
}



/**
 * Extension: install
 * File: /var/www/t3-latest/typo3/sysext/install/ext_tables.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath('tools_install', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('tools', 'install', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/');
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = 'TYPO3\\CMS\\Install\\Report\\InstallStatusReport';
}



/**
 * Extension: info
 * File: /var/www/t3-latest/typo3/sysext/info/ext_tables.php
 */

$_EXTKEY = 'info';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'info', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
}



/**
 * Extension: perm
 * File: /var/www/t3-latest/typo3/sysext/perm/ext_tables.php
 */

$_EXTKEY = 'perm';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'perm', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
	$TYPO3_CONF_VARS['BE']['AJAX']['PermissionAjaxController::dispatch'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/class.sc_mod_web_perm_ajax.php:TYPO3\\CMS\\Perm\\Controller\\PermissionAjaxController->dispatch';
}



/**
 * Extension: func
 * File: /var/www/t3-latest/typo3/sysext/func/ext_tables.php
 */

$_EXTKEY = 'func';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'func', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
}



/**
 * Extension: filelist
 * File: /var/www/t3-latest/typo3/sysext/filelist/ext_tables.php
 */

$_EXTKEY = 'filelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('file', 'list', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
}



/**
 * Extension: about
 * File: /var/www/t3-latest/typo3/sysext/about/ext_tables.php
 */

$_EXTKEY = 'about';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'help',
		'about',
		'top',
		array('About' => 'index'),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:about/ext_icon.gif',
			'labels' => 'LLL:EXT:lang/locallang_mod_help_about.xlf'
		)
	);
}



/**
 * Extension: version
 * File: /var/www/t3-latest/typo3/sysext/version/ext_tables.php
 */

$_EXTKEY = 'version';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	if (!\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('workspaces')) {
		$GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
			'name' => 'TYPO3\\CMS\\Version\\ClickMenu\\VersionClickMenu',
			'path' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_version_cm1.php'
		);
	}
}



/**
 * Extension: tsconfig_help
 * File: /var/www/t3-latest/typo3/sysext/tsconfig_help/ext_tables.php
 */

$_EXTKEY = 'tsconfig_help';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('help', 'txtsconfighelpM1', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
}



/**
 * Extension: context_help
 * File: /var/www/t3-latest/typo3/sysext/context_help/ext_tables.php
 */

$_EXTKEY = 'context_help';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_groups', 'EXT:context_help/locallang_csh_fe_groups.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_users', 'EXT:context_help/locallang_csh_fe_users.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:context_help/locallang_csh_pages.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages_language_overlay', 'EXT:context_help/locallang_csh_pageslol.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('static_template', 'EXT:context_help/locallang_csh_statictpl.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_domain', 'EXT:context_help/locallang_csh_sysdomain.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_storage', 'EXT:context_help/locallang_csh_sysfilestorage.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_template', 'EXT:context_help/locallang_csh_systmpl.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:context_help/locallang_csh_ttcontent.xml');
// Labels for TYPO3 4.5 and greater.  These labels override the ones set above, while still falling back to the original labels if no translation is available.
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:context_help/locallang_csh_pages.xml'][] = 'EXT:context_help/4.5/locallang_csh_pages.xml';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:context_help/locallang_csh_ttcontent.xml'][] = 'EXT:context_help/4.5/locallang_csh_ttcontent.xml';



/**
 * Extension: extra_page_cm_options
 * File: /var/www/t3-latest/typo3/sysext/extra_page_cm_options/ext_tables.php
 */

$_EXTKEY = 'extra_page_cm_options';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	$GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
		'name' => 'TYPO3\\CMS\\ExtraPageCmOptions\\ExtraPageContextMenuOptions',
		'path' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_extrapagecmoptions.php'
	);
}



/**
 * Extension: impexp
 * File: /var/www/t3-latest/typo3/sysext/impexp/ext_tables.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	$GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
		'name' => 'TYPO3\\CMS\\Impexp\\Clickmenu',
		'path' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_impexp_clickmenu.php'
	);
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['taskcenter']['impexp']['tx_impexp_task'] = array(
		'title' => 'LLL:EXT:impexp/locallang_csh.xml:.alttitle',
		'description' => 'LLL:EXT:impexp/locallang_csh.xml:.description',
		'icon' => 'EXT:impexp/export.gif'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_tx_impexp', 'EXT:impexp/locallang_csh.xml');
	// CSH labels for TYPO3 4.5 and greater.  These labels override the ones set above, while still falling back to the original labels if no translation is available.
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:impexp/locallang_csh.xml'][] = 'EXT:impexp/locallang_csh_45.xml';
	// Special context menu actions for the import/export module
	$importExportActions = '
		9000 = DIVIDER

		9100 = ITEM
		9100 {
			name = exportT3d
			label = LLL:EXT:impexp/app/locallang.xml:export
			spriteIcon = actions-document-export-t3d
			callbackAction = exportT3d
		}

		9200 = ITEM
		9200 {
			name = importT3d
			label = LLL:EXT:impexp/app/locallang.xml:import
			spriteIcon = actions-document-import-t3d
			callbackAction = importT3d
		}
	';
	// Context menu user default configuration
	$GLOBALS['TYPO3_CONF_VARS']['BE']['defaultUserTSconfig'] .= '
		options.contextMenu.table {
			virtual_root.items {
				' . $importExportActions . '
			}

			pages_root.items {
				' . $importExportActions . '
			}

			pages.items.1000 {
				' . $importExportActions . '
			}
		}
	';
}



/**
 * Extension: sys_note
 * File: /var/www/t3-latest/typo3/sysext/sys_note/ext_tables.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
$TCA['sys_note'] = array(
	'ctrl' => array(
		'label' => 'subject',
		'default_sortby' => 'ORDER BY crdate',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
		'delete' => 'deleted',
		'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif',
		'sortby' => 'sorting',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/Tca/SysNote.php'
	)
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_note');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_note', 'EXT:sys_note/Resources/Private/Language/locallang_csh_sysnote.xlf');



/**
 * Extension: tstemplate
 * File: /var/www/t3-latest/typo3/sysext/tstemplate/ext_tables.php
 */

$_EXTKEY = 'tstemplate';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'ts', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'ts/');
}



/**
 * Extension: tstemplate_ceditor
 * File: /var/www/t3-latest/typo3/sysext/tstemplate_ceditor/ext_tables.php
 */

$_EXTKEY = 'tstemplate_ceditor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_ts', 'tx_tstemplateceditor', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_tstemplateceditor.php', 'LLL:EXT:tstemplate/ts/locallang.xml:constantEditor');
}



/**
 * Extension: tstemplate_info
 * File: /var/www/t3-latest/typo3/sysext/tstemplate_info/ext_tables.php
 */

$_EXTKEY = 'tstemplate_info';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_ts', 'tx_tstemplateinfo', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_tstemplateinfo.php', 'LLL:EXT:tstemplate/ts/locallang.xml:infoModify');
}



/**
 * Extension: tstemplate_objbrowser
 * File: /var/www/t3-latest/typo3/sysext/tstemplate_objbrowser/ext_tables.php
 */

$_EXTKEY = 'tstemplate_objbrowser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_ts', 'tx_tstemplateobjbrowser', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_tstemplateobjbrowser.php', 'LLL:EXT:tstemplate/ts/locallang.xml:objectBrowser');
}



/**
 * Extension: tstemplate_analyzer
 * File: /var/www/t3-latest/typo3/sysext/tstemplate_analyzer/ext_tables.php
 */

$_EXTKEY = 'tstemplate_analyzer';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_ts', 'tx_tstemplateanalyzer', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_tstemplateanalyzer.php', 'LLL:EXT:tstemplate/ts/locallang.xml:templateAnalyzer');
}



/**
 * Extension: func_wizards
 * File: /var/www/t3-latest/typo3/sysext/func_wizards/ext_tables.php
 */

$_EXTKEY = 'func_wizards';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_func', 'TYPO3\\CMS\\FuncWizards\\Controller\\WebFunctionWizardsBaseController', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_funcwizards_webfunc.php', 'LLL:EXT:func_wizards/locallang.php:mod_wizards');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:func_wizards/locallang_csh.xml');
}



/**
 * Extension: wizard_crpages
 * File: /var/www/t3-latest/typo3/sysext/wizard_crpages/ext_tables.php
 */

$_EXTKEY = 'wizard_crpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_func', 'TYPO3\\CMS\\WizardCrpages\\Controller\\CreatePagesWizardModuleFunctionController', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_wizardcrpages_webfunc_2.php', 'LLL:EXT:wizard_crpages/locallang.php:wiz_crMany', 'wiz');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:wizard_crpages/locallang_csh.xml');
}



/**
 * Extension: wizard_sortpages
 * File: /var/www/t3-latest/typo3/sysext/wizard_sortpages/ext_tables.php
 */

$_EXTKEY = 'wizard_sortpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_func', 'TYPO3\\CMS\\WizardSortPages\\View\\SortPagesWizardModuleFunction', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_wizardsortpages_webfunc_2.php', 'LLL:EXT:wizard_sortpages/locallang.php:wiz_sort', 'wiz');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:wizard_sortpages/locallang_csh.xml');
}



/**
 * Extension: lowlevel
 * File: /var/www/t3-latest/typo3/sysext/lowlevel/ext_tables.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('tools', 'dbint', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'dbint/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('tools', 'config', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'config/');
}



/**
 * Extension: belog
 * File: /var/www/t3-latest/typo3/sysext/belog/ext_tables.php
 */

$_EXTKEY = 'belog';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Register backend modules, but not in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	// Module Web->Info->Log
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_info',
		'TYPO3\\CMS\\Belog\\Module\\BackendLogModuleBootstrap',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Module/BackendLogModuleBootstrap.php',
		'Log'
	);

	// Module Tools->Log
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools',
		'log',
		'',
		array(
			'Tools' => 'index',
			'WebInfo' => 'index',
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:belog/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
		)
	);
}



/**
 * Extension: beuser
 * File: /var/www/t3-latest/typo3/sysext/beuser/ext_tables.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	// Module Admin > Backend Users
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools',
		'tx_Beuser',
		'top',
		array(
			'BackendUser' => 'index, addToCompareList, removeFromCompareList, compare, online, terminateBackendUserSession'
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf'
		)
	);
}



/**
 * Extension: aboutmodules
 * File: /var/www/t3-latest/typo3/sysext/aboutmodules/ext_tables.php
 */

$_EXTKEY = 'aboutmodules';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'help',
		'aboutmodules',
		'after:about',
		array(
			'Modules' => 'index'
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:aboutmodules/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf'
		)
	);
}



/**
 * Extension: setup
 * File: /var/www/t3-latest/typo3/sysext/setup/ext_tables.php
 */

$_EXTKEY = 'setup';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('user', 'setup', 'after:task', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_user_setup', 'EXT:setup/locallang_csh_mod.xml');
}
$GLOBALS['TYPO3_USER_SETTINGS'] = array(
	'ctrl' => array(
		'dividers2tabs' => 1
	),
	'columns' => array(
		'realName' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:beUser_realName',
			'table' => 'be_users',
			'csh' => 'beUser_realName'
		),
		'email' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:beUser_email',
			'table' => 'be_users',
			'csh' => 'beUser_email'
		),
		'emailMeAtLogin' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:emailMeAtLogin',
			'csh' => 'emailMeAtLogin'
		),
		'password' => array(
			'type' => 'password',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:newPassword',
			'table' => 'be_users',
			'csh' => 'newPassword',
			'eval' => 'md5'
		),
		'password2' => array(
			'type' => 'password',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:newPasswordAgain',
			'table' => 'be_users',
			'csh' => 'newPasswordAgain',
			'eval' => 'md5'
		),
		'lang' => array(
			'type' => 'select',
			'itemsProcFunc' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController->renderLanguageSelect',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:language',
			'csh' => 'language'
		),
		'startModule' => array(
			'type' => 'select',
			'itemsProcFunc' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController->renderStartModuleSelect',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:startModule',
			'csh' => 'startModule'
		),
		'thumbnailsByDefault' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:showThumbs',
			'csh' => 'showThumbs'
		),
		'edit_wideDocument' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:edit_wideDocument',
			'csh' => 'edit_wideDocument'
		),
		'titleLen' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:maxTitleLen',
			'csh' => 'maxTitleLen'
		),
		'edit_RTE' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:edit_RTE',
			'csh' => 'edit_RTE'
		),
		'edit_docModuleUpload' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:edit_docModuleUpload',
			'csh' => 'edit_docModuleUpload'
		),
		'showHiddenFilesAndFolders' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:showHiddenFilesAndFolders',
			'csh' => 'showHiddenFilesAndFolders'
		),
		'copyLevels' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:copyLevels',
			'csh' => 'copyLevels'
		),
		'recursiveDelete' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:recursiveDelete',
			'csh' => 'recursiveDelete'
		),
		'simulate' => array(
			'type' => 'select',
			'itemsProcFunc' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController->renderSimulateUserSelect',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:simulate',
			'csh' => 'simuser'
		),
		'resetConfiguration' => array(
			'type' => 'button',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:resetConfiguration',
			'buttonlabel' => 'LLL:EXT:setup/mod/locallang.xml:resetConfigurationShort',
			'csh' => 'reset',
			'onClick' => 'if (confirm(\'%s\')) { document.getElementById(\'setValuesToDefault\').value = 1; this.form.submit(); }',
			'onClickLabels' => array(
				'LLL:EXT:setup/mod/locallang.xml:setToStandardQuestion'
			)
		),
		'clearSessionVars' => array(
			'type' => 'button',
			'access' => 'admin',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:clearSessionVars',
			'buttonlabel' => 'LLL:EXT:setup/mod/locallang.xml:clearSessionVarsShort',
			'csh' => 'reset',
			'onClick' => 'if (confirm(\'%s\')) { document.getElementById(\'clearSessionVars\').value = 1; this.form.submit(); }',
			'onClickLabels' => array(
				'LLL:EXT:setup/mod/locallang.xml:clearSessionVarsQuestion'
			)
		),
		'enableFlashUploader' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:enableFlashUploader',
			'csh' => 'enableFlashUploader'
		),
		'resizeTextareas' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:resizeTextareas',
			'csh' => 'resizeTextareas'
		),
		'resizeTextareas_Flexible' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:resizeTextareas_Flexible',
			'csh' => 'resizeTextareas_Flexible'
		),
		'resizeTextareas_MaxHeight' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:flexibleTextareas_MaxHeight',
			'csh' => 'flexibleTextareas_MaxHeight'
		),
		'debugInWindow' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:debugInWindow',
			'access' => 'admin'
		)
	),
	'showitem' => '--div--;LLL:EXT:setup/mod/locallang.xml:personal_data,realName,email,emailMeAtLogin,password,password2,lang,
			--div--;LLL:EXT:setup/mod/locallang.xml:opening,startModule,thumbnailsByDefault,titleLen,
			--div--;LLL:EXT:setup/mod/locallang.xml:editFunctionsTab,edit_RTE,edit_wideDocument,edit_docModuleUpload,showHiddenFilesAndFolders,enableFlashUploader,resizeTextareas,resizeTextareas_Flexible,resizeTextareas_MaxHeight,copyLevels,recursiveDelete,resetConfiguration,clearSessionVars,
			--div--;LLL:EXT:setup/mod/locallang.xml:adminFunctions,simulate,debugInWindow'
);



/**
 * Extension: taskcenter
 * File: /var/www/t3-latest/typo3/sysext/taskcenter/ext_tables.php
 */

$_EXTKEY = 'taskcenter';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath('tools_txtaskcenterM1', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'task/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('user', 'task', 'top', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'task/');
	$GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['Taskcenter::saveCollapseState'] = 'EXT:taskcenter/Classes/class.tx_taskcenter_status.php:TYPO3\\CMS\\Taskcenter\\TaskStatus->saveCollapseState';
	$GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['Taskcenter::saveSortingState'] = 'EXT:taskcenter/Classes/class.tx_taskcenter_status.php:TYPO3\\CMS\\Taskcenter\\TaskStatus->saveSortingState';
}



/**
 * Extension: info_pagetsconfig
 * File: /var/www/t3-latest/typo3/sysext/info_pagetsconfig/ext_tables.php
 */

$_EXTKEY = 'info_pagetsconfig';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_info', 'tx_infopagetsconfig_webinfo', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_infopagetsconfig_webinfo.php', 'LLL:EXT:info_pagetsconfig/locallang.php:mod_pagetsconfig');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:info_pagetsconfig/locallang_csh_webinfo.xml');



/**
 * Extension: viewpage
 * File: /var/www/t3-latest/typo3/sysext/viewpage/ext_tables.php
 */

$_EXTKEY = 'viewpage';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	// Module Web->View
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'web',
		'view',
		'after:layout',
		array(
			'ViewModule' => 'show'
		),
		array(
			'icon' => 'EXT:viewpage/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
			'access' => 'user,group'
		)
	);
}



/**
 * Extension: rtehtmlarea
 * File: /var/www/t3-latest/typo3/sysext/rtehtmlarea/ext_tables.php
 */

$_EXTKEY = 'rtehtmlarea';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Add static template for Click-enlarge rendering
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/clickenlarge/', 'Clickenlarge Rendering');
// Add configuration of soft references on image tags in RTE content
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'hooks/softref/ext_tables.php';
// Add acronyms table
$GLOBALS['TCA']['tx_rtehtmlarea_acronym'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:rtehtmlarea/locallang_db.xml:tx_rtehtmlarea_acronym',
		'label' => 'term',
		'default_sortby' => 'ORDER BY term',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime'
		),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tca.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'extensions/Acronym/skin/images/acronym.gif'
	)
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rtehtmlarea_acronym');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rtehtmlarea_acronym', 'EXT:' . $_EXTKEY . '/locallang_csh_abbreviation.xml');
// Add contextual help files
$htmlAreaRteContextHelpFiles = array(
	'General' => 'EXT:' . $_EXTKEY . '/locallang_csh.xlf',
	'Acronym' => 'EXT:' . $_EXTKEY . '/extensions/Acronym/locallang_csh.xlf',
	'EditElement' => 'EXT:' . $_EXTKEY . '/extensions/EditElement/locallang_csh.xlf',
	'Language' => 'EXT:' . $_EXTKEY . '/extensions/Language/locallang_csh.xlf',
	'MicrodataSchema' => 'EXT:' . $_EXTKEY . '/extensions/MicrodataSchema/locallang_csh.xlf',
	'PlainText' => 'EXT:' . $_EXTKEY . '/extensions/PlainText/locallang_csh.xlf',
	'RemoveFormat' => 'EXT:' . $_EXTKEY . '/extensions/RemoveFormat/locallang_csh.xlf',
	'TableOperations' => 'EXT:' . $_EXTKEY . '/extensions/TableOperations/locallang_csh.xlf'
);
foreach ($htmlAreaRteContextHelpFiles as $key => $file) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xEXT_' . $_EXTKEY . '_' . $key, $file);
}
unset($htmlAreaRteContextHelpFiles);
// Extend TYPO3 User Settings Configuration
if (TYPO3_MODE === 'BE' && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('setup') && is_array($GLOBALS['TYPO3_USER_SETTINGS'])) {
	$GLOBALS['TYPO3_USER_SETTINGS']['columns'] = array_merge($GLOBALS['TYPO3_USER_SETTINGS']['columns'], array(
		'rteWidth' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xml:rteWidth',
			'csh' => 'xEXT_rtehtmlarea_General:rteWidth'
		),
		'rteHeight' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xml:rteHeight',
			'csh' => 'xEXT_rtehtmlarea_General:rteHeight'
		),
		'rteResize' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xml:rteResize',
			'csh' => 'xEXT_rtehtmlarea_General:rteResize'
		),
		'rteMaxHeight' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xml:rteMaxHeight',
			'csh' => 'xEXT_rtehtmlarea_General:rteMaxHeight'
		),
		'rteCleanPasteBehaviour' => array(
			'type' => 'select',
			'label' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xml:rteCleanPasteBehaviour',
			'items' => array(
				'plainText' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xml:plainText',
				'pasteStructure' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xml:pasteStructure',
				'pasteFormat' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xml:pasteFormat'
			),
			'csh' => 'xEXT_rtehtmlarea_PlainText:behaviour'
		)
	));
	$GLOBALS['TYPO3_USER_SETTINGS']['showitem'] .= ',--div--;LLL:EXT:rtehtmlarea/locallang.xml:rteSettings,rteWidth,rteHeight,rteResize,rteMaxHeight,rteCleanPasteBehaviour';
}



/**
 * Extension: css_styled_content
 * File: /var/www/t3-latest/typo3/sysext/css_styled_content/ext_tables.php
 */

$_EXTKEY = 'css_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add flexform
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('*', 'FILE:EXT:css_styled_content/flexform_ds.xml', 'table');

// Load TCA before manipulating the column configuration
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');

$TCA['tt_content']['types']['table']['showitem'] = 'CType;;4;;1-1-1, hidden, header;;3;;2-2-2, linkToTop;;;;4-4-4,
			--div--;LLL:EXT:cms/locallang_ttc.xml:CType.I.5, layout;;10;;3-3-3, cols, bodytext;;9;nowrap:wizards[table], text_properties, pi_flexform,
			--div--;LLL:EXT:cms/locallang_tca.xml:pages.tabs.access, starttime, endtime, fe_group';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/', 'CSS Styled Content');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v3.8/', 'CSS Styled Content TYPO3 v3.8');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v3.9/', 'CSS Styled Content TYPO3 v3.9');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.2/', 'CSS Styled Content TYPO3 v4.2');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.3/', 'CSS Styled Content TYPO3 v4.3');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.4/', 'CSS Styled Content TYPO3 v4.4');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.5/', 'CSS Styled Content TYPO3 v4.5');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.6/', 'CSS Styled Content TYPO3 v4.6');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.7/', 'CSS Styled Content TYPO3 v4.7');
$TCA['tt_content']['columns']['section_frame']['config']['items'][0] = array('LLL:EXT:css_styled_content/locallang_db.php:tt_content.tx_cssstyledcontent_section_frame.I.0', '0');
$TCA['tt_content']['columns']['section_frame']['config']['items'][9] = array('LLL:EXT:css_styled_content/locallang_db.php:tt_content.tx_cssstyledcontent_section_frame.I.9', '66');



/**
 * Extension: t3skin
 * File: /var/www/t3-latest/typo3/sysext/t3skin/ext_tables.php
 */

$_EXTKEY = 't3skin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE' || TYPO3_MODE == 'FE' && isset($GLOBALS['BE_USER'])) {
	global $TBE_STYLES;
	// Register as a skin
	$TBE_STYLES['skins'][$_EXTKEY] = array(
		'name' => 't3skin'
	);
	// Support for other extensions to add own icons...
	$presetSkinImgs = is_array($TBE_STYLES['skinImg']) ? $TBE_STYLES['skinImg'] : array();
	$TBE_STYLES['skins'][$_EXTKEY]['stylesheetDirectories']['sprites'] = 'EXT:t3skin/stylesheets/sprites/';
	/** Setting up backend styles and colors */
	$TBE_STYLES['mainColors'] = array(
		// Always use #xxxxxx color definitions!
		'bgColor' => '#FFFFFF',
		// Light background color
		'bgColor2' => '#FEFEFE',
		// Steel-blue
		'bgColor3' => '#F1F3F5',
		// dok.color
		'bgColor4' => '#E6E9EB',
		// light tablerow background, brownish
		'bgColor5' => '#F8F9FB',
		// light tablerow background, greenish
		'bgColor6' => '#E6E9EB',
		// light tablerow background, yellowish, for section headers. Light.
		'hoverColor' => '#FF0000',
		'navFrameHL' => '#F8F9FB'
	);
	$TBE_STYLES['colorschemes'][0] = '-|class-main1,-|class-main2,-|class-main3,-|class-main4,-|class-main5';
	$TBE_STYLES['colorschemes'][1] = '-|class-main11,-|class-main12,-|class-main13,-|class-main14,-|class-main15';
	$TBE_STYLES['colorschemes'][2] = '-|class-main21,-|class-main22,-|class-main23,-|class-main24,-|class-main25';
	$TBE_STYLES['colorschemes'][3] = '-|class-main31,-|class-main32,-|class-main33,-|class-main34,-|class-main35';
	$TBE_STYLES['colorschemes'][4] = '-|class-main41,-|class-main42,-|class-main43,-|class-main44,-|class-main45';
	$TBE_STYLES['colorschemes'][5] = '-|class-main51,-|class-main52,-|class-main53,-|class-main54,-|class-main55';
	$TBE_STYLES['styleschemes'][0]['all'] = 'CLASS: formField';
	$TBE_STYLES['styleschemes'][1]['all'] = 'CLASS: formField1';
	$TBE_STYLES['styleschemes'][2]['all'] = 'CLASS: formField2';
	$TBE_STYLES['styleschemes'][3]['all'] = 'CLASS: formField3';
	$TBE_STYLES['styleschemes'][4]['all'] = 'CLASS: formField4';
	$TBE_STYLES['styleschemes'][5]['all'] = 'CLASS: formField5';
	$TBE_STYLES['styleschemes'][0]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][1]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][2]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][3]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][4]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][5]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][0]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][1]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][2]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][3]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][4]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][5]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][0]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][1]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][2]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][3]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][4]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][5]['select'] = 'CLASS: select';
	$TBE_STYLES['borderschemes'][0] = array('', '', '', 'wrapperTable');
	$TBE_STYLES['borderschemes'][1] = array('', '', '', 'wrapperTable1');
	$TBE_STYLES['borderschemes'][2] = array('', '', '', 'wrapperTable2');
	$TBE_STYLES['borderschemes'][3] = array('', '', '', 'wrapperTable3');
	$TBE_STYLES['borderschemes'][4] = array('', '', '', 'wrapperTable4');
	$TBE_STYLES['borderschemes'][5] = array('', '', '', 'wrapperTable5');
	// Setting the relative path to the extension in temp. variable:
	$temp_eP = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY);
	// Alternative dimensions for frameset sizes:
	// Left menu frame width
	$TBE_STYLES['dims']['leftMenuFrameW'] = 190;
	// Top frame height
	$TBE_STYLES['dims']['topFrameH'] = 42;
	// Default navigation frame width
	$TBE_STYLES['dims']['navFrameWidth'] = 280;
	// Setting roll-over background color for click menus:
	// Notice, this line uses the the 'scriptIDindex' feature to override another value in this array (namely $TBE_STYLES['mainColors']['bgColor5']), for a specific script "typo3/alt_clickmenu.php"
	$TBE_STYLES['scriptIDindex']['typo3/alt_clickmenu.php']['mainColors']['bgColor5'] = '#dedede';
	// Setting up auto detection of alternative icons:
	$TBE_STYLES['skinImgAutoCfg'] = array(
		'absDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'icons/',
		'relDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'icons/',
		'forceFileExtension' => 'gif',
		// Force to look for PNG alternatives...
		'iconSizeWidth' => 16,
		'iconSizeHeight' => 16
	);
	// Changing icon for filemounts, needs to be done here as overwriting the original icon would also change the filelist tree's root icon
	$TCA['sys_filemounts']['ctrl']['iconfile'] = '_icon_ftp_2.gif';
	// Adding flags to sys_language
	\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('sys_language');
	$TCA['sys_language']['ctrl']['typeicon_column'] = 'flag';
	$TCA['sys_language']['ctrl']['typeicon_classes'] = array(
		'default' => 'mimetypes-x-sys_language',
		'mask' => 'flags-###TYPE###'
	);
	$flagNames = array(
		'multiple',
		'ad',
		'ae',
		'af',
		'ag',
		'ai',
		'al',
		'am',
		'an',
		'ao',
		'ar',
		'as',
		'at',
		'au',
		'aw',
		'ax',
		'az',
		'ba',
		'bb',
		'bd',
		'be',
		'bf',
		'bg',
		'bh',
		'bi',
		'bj',
		'bm',
		'bn',
		'bo',
		'br',
		'bs',
		'bt',
		'bv',
		'bw',
		'by',
		'bz',
		'ca',
		'catalonia',
		'cc',
		'cd',
		'cf',
		'cg',
		'ch',
		'ci',
		'ck',
		'cl',
		'cm',
		'cn',
		'co',
		'cr',
		'cs',
		'cu',
		'cv',
		'cx',
		'cy',
		'cz',
		'de',
		'dj',
		'dk',
		'dm',
		'do',
		'dz',
		'ec',
		'ee',
		'eg',
		'eh',
		'england',
		'er',
		'es',
		'et',
		'europeanunion',
		'fam',
		'fi',
		'fj',
		'fk',
		'fm',
		'fo',
		'fr',
		'ga',
		'gb',
		'gd',
		'ge',
		'gf',
		'gh',
		'gi',
		'gl',
		'gm',
		'gn',
		'gp',
		'gq',
		'gr',
		'gs',
		'gt',
		'gu',
		'gw',
		'gy',
		'hk',
		'hm',
		'hn',
		'hr',
		'ht',
		'hu',
		'id',
		'ie',
		'il',
		'in',
		'io',
		'iq',
		'ir',
		'is',
		'it',
		'jm',
		'jo',
		'jp',
		'ke',
		'kg',
		'kh',
		'ki',
		'km',
		'kn',
		'kp',
		'kr',
		'kw',
		'ky',
		'kz',
		'la',
		'lb',
		'lc',
		'li',
		'lk',
		'lr',
		'ls',
		'lt',
		'lu',
		'lv',
		'ly',
		'ma',
		'mc',
		'md',
		'me',
		'mg',
		'mh',
		'mk',
		'ml',
		'mm',
		'mn',
		'mo',
		'mp',
		'mq',
		'mr',
		'ms',
		'mt',
		'mu',
		'mv',
		'mw',
		'mx',
		'my',
		'mz',
		'na',
		'nc',
		'ne',
		'nf',
		'ng',
		'ni',
		'nl',
		'no',
		'np',
		'nr',
		'nu',
		'nz',
		'om',
		'pa',
		'pe',
		'pf',
		'pg',
		'ph',
		'pk',
		'pl',
		'pm',
		'pn',
		'pr',
		'ps',
		'pt',
		'pw',
		'py',
		'qa',
		'qc',
		're',
		'ro',
		'rs',
		'ru',
		'rw',
		'sa',
		'sb',
		'sc',
		'scotland',
		'sd',
		'se',
		'sg',
		'sh',
		'si',
		'sj',
		'sk',
		'sl',
		'sm',
		'sn',
		'so',
		'sr',
		'st',
		'sv',
		'sy',
		'sz',
		'tc',
		'td',
		'tf',
		'tg',
		'th',
		'tj',
		'tk',
		'tl',
		'tm',
		'tn',
		'to',
		'tr',
		'tt',
		'tv',
		'tw',
		'tz',
		'ua',
		'ug',
		'um',
		'us',
		'uy',
		'uz',
		'va',
		'vc',
		've',
		'vg',
		'vi',
		'vn',
		'vu',
		'wales',
		'wf',
		'ws',
		'ye',
		'yt',
		'za',
		'zm',
		'zw'
	);
	foreach ($flagNames as $flagName) {
		$TCA['sys_language']['columns']['flag']['config']['items'][] = array($flagName, $flagName, 'EXT:t3skin/images/flags/' . $flagName . '.png');
	}
	// Manual setting up of alternative icons. This is mainly for module icons which has a special prefix:
	$TBE_STYLES['skinImg'] = array_merge($presetSkinImgs, array(
		'gfx/ol/blank.gif' => array('clear.gif', 'width="18" height="16"'),
		'MOD:web/website.gif' => array($temp_eP . 'icons/module_web.gif', 'width="24" height="24"'),
		'MOD:web_layout/layout.gif' => array($temp_eP . 'icons/module_web_layout.gif', 'width="24" height="24"'),
		'MOD:web_view/view.gif' => array($temp_eP . 'icons/module_web_view.png', 'width="24" height="24"'),
		'MOD:web_list/list.gif' => array($temp_eP . 'icons/module_web_list.gif', 'width="24" height="24"'),
		'MOD:web_info/info.gif' => array($temp_eP . 'icons/module_web_info.png', 'width="24" height="24"'),
		'MOD:web_perm/perm.gif' => array($temp_eP . 'icons/module_web_perms.png', 'width="24" height="24"'),
		'MOD:web_func/func.gif' => array($temp_eP . 'icons/module_web_func.png', 'width="24" height="24"'),
		'MOD:web_ts/ts1.gif' => array($temp_eP . 'icons/module_web_ts.gif', 'width="24" height="24"'),
		'MOD:web_modules/modules.gif' => array($temp_eP . 'icons/module_web_modules.gif', 'width="24" height="24"'),
		'MOD:web_txversionM1/cm_icon.gif' => array($temp_eP . 'icons/module_web_version.gif', 'width="24" height="24"'),
		'MOD:file/file.gif' => array($temp_eP . 'icons/module_file.gif', 'width="22" height="24"'),
		'MOD:file_list/list.gif' => array($temp_eP . 'icons/module_file_list.gif', 'width="22" height="24"'),
		'MOD:file_images/images.gif' => array($temp_eP . 'icons/module_file_images.gif', 'width="22" height="22"'),
		'MOD:user/user.gif' => array($temp_eP . 'icons/module_user.gif', 'width="22" height="22"'),
		'MOD:user_task/task.gif' => array($temp_eP . 'icons/module_user_taskcenter.gif', 'width="22" height="22"'),
		'MOD:user_setup/setup.gif' => array($temp_eP . 'icons/module_user_setup.gif', 'width="22" height="22"'),
		'MOD:user_doc/document.gif' => array($temp_eP . 'icons/module_doc.gif', 'width="22" height="22"'),
		'MOD:user_ws/sys_workspace.gif' => array($temp_eP . 'icons/module_user_ws.gif', 'width="22" height="22"'),
		'MOD:tools/tool.gif' => array($temp_eP . 'icons/module_tools.gif', 'width="25" height="24"'),
		'MOD:tools_beuser/beuser.gif' => array($temp_eP . 'icons/module_tools_user.gif', 'width="24" height="24"'),
		'MOD:tools_em/em.gif' => array($temp_eP . 'icons/module_tools_em.png', 'width="24" height="24"'),
		'MOD:tools_em/install.gif' => array($temp_eP . 'icons/module_tools_em.gif', 'width="24" height="24"'),
		'MOD:tools_dbint/db.gif' => array($temp_eP . 'icons/module_tools_dbint.gif', 'width="25" height="24"'),
		'MOD:tools_config/config.gif' => array($temp_eP . 'icons/module_tools_config.gif', 'width="24" height="24"'),
		'MOD:tools_install/install.gif' => array($temp_eP . 'icons/module_tools_install.gif', 'width="24" height="24"'),
		'MOD:tools_log/log.gif' => array($temp_eP . 'icons/module_tools_log.gif', 'width="24" height="24"'),
		'MOD:tools_txphpmyadmin/thirdparty_db.gif' => array($temp_eP . 'icons/module_tools_phpmyadmin.gif', 'width="24" height="24"'),
		'MOD:tools_isearch/isearch.gif' => array($temp_eP . 'icons/module_tools_isearch.gif', 'width="24" height="24"'),
		'MOD:help/help.gif' => array($temp_eP . 'icons/module_help.gif', 'width="23" height="24"'),
		'MOD:help_about/info.gif' => array($temp_eP . 'icons/module_help_about.gif', 'width="25" height="24"'),
		'MOD:help_aboutmodules/aboutmodules.gif' => array($temp_eP . 'icons/module_help_aboutmodules.gif', 'width="24" height="24"'),
		'MOD:help_cshmanual/about.gif' => array($temp_eP . 'icons/module_help_cshmanual.gif', 'width="25" height="24"'),
		'MOD:help_txtsconfighelpM1/moduleicon.gif' => array($temp_eP . 'icons/module_help_ts.gif', 'width="25" height="24"')
	));
	// Logo at login screen
	$TBE_STYLES['logo_login'] = $temp_eP . 'images/login/typo3logo-white-greyback.gif';
	// extJS theme
	$TBE_STYLES['extJS']['theme'] = $temp_eP . 'extjs/xtheme-t3skin.css';
	// Adding HTML template for login screen
	$TBE_STYLES['htmlTemplates']['templates/login.html'] = 'sysext/t3skin/templates/login.html';
	$GLOBALS['TBE_STYLES']['stylesheets']['admPanel'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('t3skin') . 'stylesheets/standalone/admin_panel.css';
	foreach ($flagNames as $flagName) {
		\TYPO3\CMS\Backend\Sprite\SpriteManager::addIconSprite(array(
			'flags-' . $flagName,
			'flags-' . $flagName . '-overlay'
		));
	}
	unset($flagNames, $flagName);
}



/**
 * Extension: t3editor
 * File: /var/www/t3-latest/typo3/sysext/t3editor/ext_tables.php
 */

$_EXTKEY = 't3editor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	// Register AJAX handlers:
	$TYPO3_CONF_VARS['BE']['AJAX']['T3Editor::saveCode'] = 'EXT:t3editor/Classes/class.tx_t3editor.php:TYPO3\\CMS\\T3Editor\\T3Editor->ajaxSaveCode';
	$TYPO3_CONF_VARS['BE']['AJAX']['T3Editor::getPlugins'] = 'EXT:t3editor/Classes/class.tx_t3editor.php:TYPO3\\CMS\\T3Editor\\T3Editor->getPlugins';
	$TYPO3_CONF_VARS['BE']['AJAX']['T3Editor_TSrefLoader::getTypes'] = 'EXT:t3editor/Classes/ts_codecompletion/class.tx_t3editor_tsrefloader.php:TYPO3\\CMS\\T3Editor\\TypoScriptReferenceLoader->processAjaxRequest';
	$TYPO3_CONF_VARS['BE']['AJAX']['T3Editor_TSrefLoader::getDescription'] = 'EXT:t3editor/Classes/ts_codecompletion/class.tx_t3editor_tsrefloader.php:TYPO3\\CMS\\T3Editor\\TypoScriptReferenceLoader->processAjaxRequest';
	$TYPO3_CONF_VARS['BE']['AJAX']['CodeCompletion::loadTemplates'] = 'EXT:t3editor/Classes/ts_codecompletion/class.tx_t3editor_codecompletion.php:TYPO3\\CMS\\T3Editor\\CodeCompletion->processAjaxRequest';
	\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');
	// Add the t3editor wizard on the bodytext field of tt_content
	$TCA['tt_content']['columns']['bodytext']['config']['wizards']['t3editor'] = array(
		'enableByTypeConfig' => 1,
		'type' => 'userFunc',
		'userFunc' => 'EXT:t3editor/Classes/class.tx_t3editor_tceforms_wizard.php:TYPO3\\CMS\\T3Editor\\FormWizard->main',
		'title' => 't3editor',
		'icon' => 'wizard_table.gif',
		'script' => 'wizard_table.php',
		'params' => array(
			'format' => 'html',
			'style' => 'width:98%; height: 200px;'
		)
	);
	// Activate the t3editor only for type html
	$TCA['tt_content']['types']['html']['showitem'] = str_replace('bodytext,', 'bodytext;LLL:EXT:cms/locallang_ttc.xml:bodytext.ALT.html_formlabel;;nowrap:wizards[t3editor],', $TCA['tt_content']['types']['html']['showitem']);
}



/**
 * Extension: reports
 * File: /var/www/t3-latest/typo3/sysext/reports/ext_tables.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools',
		'txreportsM1',
		'',
		array(
			'Report' => 'index,detail'
		), array(
			'access' => 'admin',
			'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/moduleicon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf'
		)
	);
	$statusReport = array(
		'title' => 'LLL:EXT:reports/reports/locallang.xml:status_report_title',
		'description' => 'LLL:EXT:reports/reports/locallang.xml:status_report_description',
		'report' => 'TYPO3\\CMS\\Reports\\Report\\Status\\Status'
	);
	if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'])) {
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array();
	}
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'], $statusReport);
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\Typo3Status';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\SystemStatus';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\SecurityStatus';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['configuration'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\ConfigurationStatus';
}



/**
 * Extension: felogin
 * File: /var/www/t3-latest/typo3/sysext/felogin/ext_tables.php
 */

$_EXTKEY = 'felogin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
$_EXTCONF = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['felogin']);
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');
if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 4002000) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('*', 'FILE:EXT:' . $_EXTKEY . '/flexform.xml', 'login');
} else {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('default', 'FILE:EXT:' . $_EXTKEY . '/flexform.xml');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem('tt_content', 'CType', array(
	'LLL:EXT:cms/locallang_ttc.xml:CType.I.10',
	'login',
	'i/tt_content_login.gif'
), 'mailform', 'after');
$TCA['tt_content']['types']['login']['showitem'] = '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
													--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
													--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.plugin,
													pi_flexform;;;;1-1-1,
													--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
													--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
													--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
													--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
													--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
													--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.behaviour,
													--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';
// Adds the redirect field to the fe_groups table
$tempColumns = array(
	'felogin_redirectPid' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:felogin/locallang_db.xml:felogin_redirectPid',
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'pages',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'wizards' => array(
				'suggest' => array(
					'type' => 'suggest'
				)
			)
		)
	)
);
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('fe_groups');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_groups', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_groups', 'felogin_redirectPid;;;;1-1-1', '', 'after:TSconfig');
// Adds the redirect field and the forgotHash field to the fe_users-table
$tempColumns = array(
	'felogin_redirectPid' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:felogin/locallang_db.xml:felogin_redirectPid',
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'pages',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'wizards' => array(
				'suggest' => array(
					'type' => 'suggest'
				)
			)
		)
	),
	'felogin_forgotHash' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:felogin/locallang_db.xml:felogin_forgotHash',
		'config' => array(
			'type' => 'passthrough'
		)
	)
);
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('fe_users');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'felogin_redirectPid;;;;1-1-1', '', 'after:TSconfig');



/**
 * Extension: form
 * File: /var/www/t3-latest/typo3/sysext/form/ext_tables.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add Default TS to Include static (from extensions)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Default TS');

// Load TCA before manipulating the column configuration
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');

$TCA['tt_content']['columns']['bodytext']['config']['wizards']['forms'] = array(
	'notNewRecords' => 1,
	'enableByTypeConfig' => 1,
	'type' => 'script',
	'title' => 'Form wizard',
	'icon' => 'wizard_forms.gif',
	'script' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('form') . 'Classes/Controller/Wizard.php',
	'params' => array(
		'xmlOutput' => 0
	)
);
$TCA['tt_content']['types']['mailform']['showitem'] = '
	CType;;4;;1-1-1,
	hidden,
	header;;3;;2-2-2,
	linkToTop;;;;3-3-3,
	--div--;LLL:EXT:cms/locallang_ttc.xml:CType.I.8,
	bodytext;LLL:EXT:cms/locallang_ttc.php:bodytext.ALT.mailform;;nowrap:wizards[forms];3-3-3,
	--div--;LLL:EXT:cms/locallang_tca.xml:pages.tabs.access,
	starttime,
	endtime,
	fe_group
';



/**
 * Extension: opendocs
 * File: /var/www/t3-latest/typo3/sysext/opendocs/ext_tables.php
 */

$_EXTKEY = 'opendocs';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	$opendocsPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('opendocs');
	// Register toolbar item
	$GLOBALS['TYPO3_CONF_VARS']['typo3/backend.php']['additionalBackendItems'][] = $opendocsPath . 'registerToolbarItem.php';
	// Register AJAX calls
	$GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['OpendocsController::renderMenu'] = $opendocsPath . 'class.tx_opendocs.php:TYPO3\\CMS\\Opendocs\\Controller\\OpendocsController->renderAjax';
	$GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['OpendocsController::closeDocument'] = $opendocsPath . 'class.tx_opendocs.php:TYPO3\\CMS\\Opendocs\\Controller\\OpendocsController->closeDocument';
	// Register update signal to update the number of open documents
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['updateSignalHook']['OpendocsController::updateNumber'] = $opendocsPath . 'class.tx_opendocs.php:TYPO3\\CMS\\Opendocs\\Controller\\OpendocsController->updateNumberOfOpenDocsHook';
}



/**
 * Extension: recycler
 * File: /var/www/t3-latest/typo3/sysext/recycler/ext_tables.php
 */

$_EXTKEY = 'recycler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	// Add module
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath('web_txrecyclerM1', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'txrecyclerM1', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
}



/**
 * Extension: scheduler
 * File: /var/www/t3-latest/typo3/sysext/scheduler/ext_tables.php
 */

$_EXTKEY = 'scheduler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	// Add module
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('tools', 'txschedulerM1', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
	// Add context sensitive help (csh) to the backend module
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_tools_txschedulerM1', 'EXT:' . $_EXTKEY . '/mod1/locallang_csh_scheduler.xml');
}



/**
 * Extension: workspaces
 * File: /var/www/t3-latest/typo3/sysext/workspaces/ext_tables.php
 */

$_EXTKEY = 'workspaces';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// avoid that this block is loaded in the frontend or within the upgrade-wizards
if (TYPO3_MODE == 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	/** Registers a Backend Module */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'web',
		'workspaces',
		'before:info',
		array(
				// An array holding the controller-action-combinations that are accessible
			'Review' => 'index,fullIndex,singleIndex',
			'Preview' => 'index,newPage'
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:workspaces/Resources/Public/Images/moduleicon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xml',
			'navigationComponentId' => 'typo3-pagetree'
		)
	);
	// register ExtDirect
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerExtDirectComponent('TYPO3.Workspaces.ExtDirect', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/ExtDirect/Server.php:TYPO3\\CMS\\Workspaces\\ExtDirect\\ExtDirectServer', 'web_WorkspacesWorkspaces', 'user,group');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerExtDirectComponent('TYPO3.Workspaces.ExtDirectActions', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/ExtDirect/ActionHandler.php:TYPO3\\CMS\\Workspaces\\ExtDirect\\ActionHandler', 'web_WorkspacesWorkspaces', 'user,group');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerExtDirectComponent('TYPO3.Workspaces.ExtDirectMassActions', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/ExtDirect/MassActionHandler.php:TYPO3\\CMS\\Workspaces\\ExtDirect\\MassActionHandler', 'web_WorkspacesWorkspaces', 'user,group');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerExtDirectComponent('TYPO3.Ajax.ExtDirect.ToolbarMenu', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/ExtDirect/ToolbarMenu.php:TYPO3\\CMS\\Workspaces\\ExtDirect\\ToolbarMenu');
}
/**
 * Table "sys_workspace":
 */
$TCA['sys_workspace'] = array(
	'ctrl' => array(
		'label' => 'title',
		'tstamp' => 'tstamp',
		'title' => 'LLL:EXT:lang/locallang_tca.xml:sys_workspace',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'delete' => 'deleted',
		'iconfile' => 'sys_workspace.png',
		'typeicon_classes' => array(
			'default' => 'mimetypes-x-sys_workspace'
		),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tca.php',
		'versioningWS_alwaysAllowLiveEdit' => TRUE,
		'dividers2tabs' => TRUE
	)
);
/**
 * Table "sys_workspace_stage":
 * Defines single custom stages which are related to sys_workspace table to create complex working processes
 * This is only the 'header' part (ctrl). The full configuration is found in t3lib/stddb/tbl_be.php
 */
$TCA['sys_workspace_stage'] = array(
	'ctrl' => array(
		'label' => 'title',
		'tstamp' => 'tstamp',
		'sortby' => 'sorting',
		'title' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xml:sys_workspace_stage',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'hideTable' => TRUE,
		'delete' => 'deleted',
		'iconfile' => 'sys_workspace.png',
		'typeicon_classes' => array(
			'default' => 'mimetypes-x-sys_workspace'
		),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'tca.php',
		'versioningWS_alwaysAllowLiveEdit' => TRUE,
		'dividers2tabs' => TRUE
	)
);
// todo move icons to Core sprite or keep them here and remove the todo note ;)
$icons = array(
	'sendtonextstage' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/version-workspace-sendtonextstage.png',
	'sendtoprevstage' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/version-workspace-sendtoprevstage.png',
	'generatepreviewlink' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/generate-ws-preview-link.png'
);
\TYPO3\CMS\Backend\Sprite\SpriteManager::addSingleIcons($icons, $_EXTKEY);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_workspace_stage', 'EXT:workspaces/Resources/Private/Language/locallang_csh_sysws_stage.xml');



/**
 * Extension: easylogin
 * File: /var/www/t3-latest/typo3conf/ext/easylogin/ext_tables.php
 */

$_EXTKEY = 'easylogin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}




/**
 * Extension: themes_builder
 * File: /var/www/t3-latest/typo3conf/ext/themes_builder/ext_tables.php
 */

$_EXTKEY = 'themes_builder';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (TYPO3_MODE === 'BE') {
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,                       # Extension-Key
		'tools',                        # Kategorie
		'tx_theme_builder_m1',          # Modulname
		'',                             # Position
		array(                          #Controller
			'Build' => 'index,create,list'
		),
		array(                          # Konfiguration
			'access'  => 'admin',
			'icon'    => 'EXT:' . $_EXTKEY  . '/ext_icon.gif',
			'labels'  => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml',
		)
	);
}


/**
 * Extension: themes
 * File: /var/www/t3-latest/typo3conf/ext/themes/ext_tables.php
 */

$_EXTKEY = 'themes';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Define the TCA for the access control calendar selector.
$tempColumn = array(
	'tx_themes_skin' => array(
		'exclude' => 1,
		'label' => 'Themes',
		'displayCond' => 'FIELD:root:REQ:true',
		'config' => array(
			'type' => 'user',
			'userFunc' => 'tx_Themes_Tca_ThemeSelector->display',
		)
	),
);

// Add the skin selector for backend users.
t3lib_div::loadTCA('sys_template');
t3lib_extMgm::addTCAcolumns('sys_template', $tempColumn);
t3lib_extMgm::addToAllTCAtypes('sys_template', '--div--;Themes,tx_themes_skin');


/**
 * Extension: coreupdate
 * File: /var/www/t3-latest/typo3conf/ext/coreupdate/ext_tables.php
 */

$_EXTKEY = 'coreupdate';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

/*******************************************************************************
 * register handler for Ext.Direct
 */
    if (TYPO3_MODE == 'BE') {
		t3lib_extMgm::registerExtDirectComponent(
			'TYPO3.Coreupdate',
			'EXT:coreupdate/Classes/Controller/ExtDirectController.php:tx_Coreupdate_Controller_ExtDirectController'
		);
    }

/**
 * Toolbar item
 */ 
	if (TYPO3_MODE == 'BE') {
		$GLOBALS['TYPO3_CONF_VARS']['typo3/backend.php']['additionalBackendItems'][]
			= t3lib_extMgm::extPath($_EXTKEY).'Classes/ToolbarItems/Updater/Hook.php';
	}

/**
 * Backend module
 */

$t = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['coreupdate']);
if($t['enableBackendModule']) {
	if (TYPO3_MODE === 'BE'){
		Tx_Extbase_Utility_Extension::registerModule(
			$_EXTKEY,                # Extension-Key
			'tools',                        # Kategorie
			'tx_coreupdate_m1',        # Modulname
			'',                             # Position
			Array ('Update' => 'index,import,switch'),       #Controller
			Array ('access'  => 'admin',                      # Konfiguration
				'icon'   => 'EXT:'.$_EXTKEY.'/ext_icon.gif',
				'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallangUpdateController.xml',
			)
		);
	}
}

/**
 * Add to reports module
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = 'tx_coreupdate_Hook_Reports_VersionStatusProvider';



/**
 * Extension: rsaauth
 * File: /var/www/t3-latest/typo3/sysext/rsaauth/ext_tables.php
 */

$_EXTKEY = 'rsaauth';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Define the table for keys. Make sure that it cannot be edited or seen by
// any user in any way.
$TCA['tx_rsaauth_keys'] = array(
	'ctrl' => array(
		'adminOnly' => TRUE,
		'hideTable' => TRUE,
		'is_static' => TRUE,
		'label' => 'uid',
		'readOnly' => TRUE,
		'rootLevel' => 1,
		'title' => 'Oops! You should not see this!'
	),
	'columns' => array(),
	'types' => array(
		'0' => array(
			'showitem' => ''
		)
	)
);



/**
 * Extension: saltedpasswords
 * File: /var/www/t3-latest/typo3/sysext/saltedpasswords/ext_tables.php
 */

$_EXTKEY = 'saltedpasswords';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('fe_users');
$GLOBALS['TCA']['fe_users']['columns']['password']['config']['max'] = 100;
if (\TYPO3\CMS\Saltedpasswords\Utility\SaltedPasswordsUtility::isUsageEnabled('FE')) {
	// Get eval field operations methods as array keys
	$operations = array_flip(\TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $GLOBALS['TCA']['fe_users']['columns']['password']['config']['eval'], TRUE));
	// Remove md5 and temporary password from the list of evaluated methods
	unset($operations['md5'], $operations['password']);
	// Append new methods to have "password" as last operation.
	$operations['tx_saltedpasswords_eval_fe'] = 1;
	$operations['password'] = 1;
	$GLOBALS['TCA']['fe_users']['columns']['password']['config']['eval'] = implode(',', array_keys($operations));
	unset($operations);
}
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('be_users');
$GLOBALS['TCA']['be_users']['columns']['password']['config']['max'] = 100;
if (\TYPO3\CMS\Saltedpasswords\Utility\SaltedPasswordsUtility::isUsageEnabled('BE')) {
	// Get eval field operations methods as array keys
	$operations = array_flip(\TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $GLOBALS['TCA']['be_users']['columns']['password']['config']['eval'], TRUE));
	// Remove md5 and temporary password from the list of evaluated methods
	unset($operations['md5'], $operations['password']);
	// Append new methods to have "password" as last operation.
	$operations['tx_saltedpasswords_eval_be'] = 1;
	$operations['password'] = 1;
	$GLOBALS['TCA']['be_users']['columns']['password']['config']['eval'] = implode(',', array_keys($operations));
	unset($operations);
	// Prevent md5 hashing on client side via JS
	$GLOBALS['TYPO3_USER_SETTINGS']['columns']['password']['eval'] = '';
	$GLOBALS['TYPO3_USER_SETTINGS']['columns']['password2']['eval'] = '';
}
// Add context sensitive help (csh) for scheduler task
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_txsaltedpasswords', 'EXT:' . $_EXTKEY . '/locallang_csh_saltedpasswords.xml');



/**
 * Extension: flux
 * File: /var/www/t3-latest/typo3conf/ext/flux/ext_tables.php
 */

$_EXTKEY = 'flux';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['flux']['setup'] = unserialize($_EXTCONF);

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'API', 'Flux API (do not use on pages)');

t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addTCAcolumns('tt_content', array(
		'tx_flux_column' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:flux/Resources/Private/Language/locallang.xml:tt_content.tx_flux_column',
			'config' => array (
				'type' => 'select',
				'default' => '',
				'itemsProcFunc' => 'EXT:flux/Classes/Backend/AreaListItemsProcessor.php:Tx_Flux_Backend_AreaListItemsProcessor->itemsProcFunc'
			)
		),
		'tx_flux_parent' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:flux/Resources/Private/Language/locallang.xml:tt_content.tx_flux_parent',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'tt_content',
				'foreign_table_where' => "AND tt_content.CType = 'fed_fce' AND tt_content.pid = '###CURRENT_PID###'",
				'default' => 0,
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'tx_flux_children' => array (
			'exclude' => 0,
			'config' => array (
				'type' => 'inline',
				'foreign_table' => 'tt_content',
				'foreign_field' => 'tx_flux_parent',
				'foreign_sortby' => 'sorting',
			)
		),
	)
);

$TCA['tt_content']['columns']['colPos']['config']['items'][] = array('LLL:EXT:flux/locallang.xml:tt_content.tx_flux_container', '-42');

Tx_Flux_Core::registerConfigurationProvider('Tx_Flux_Provider_Configuration_ContentObjectConfigurationProvider');


/**
 * Extension: fluidcontent
 * File: /var/www/t3-latest/typo3conf/ext/fluidcontent/ext_tables.php
 */

$_EXTKEY = 'fluidcontent';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

define('FLUIDCONTENT_TEMPFILE', PATH_site . 'typo3temp/.FED_CONTENT');
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluidcontent']['setup'] = unserialize($_EXTCONF);

Tx_Flux_Core::unregisterConfigurationProvider('Tx_Fed_Provider_Configuration_ContentObjectConfigurationProvider');
Tx_Flux_Core::registerConfigurationProvider('Tx_Fluidcontent_Provider_ContentConfigurationProvider');

t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addPlugin(array('Fluid Content', 'fluidcontent_content', t3lib_extMgm::extRelPath('fluidcontent') . 'ext_icon.gif'), 'CType');
//t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid Content'); // Disabled temporarily: fluidcontent currently does not use TS configuration.
t3lib_extMgm::addTCAcolumns('tt_content', array(
	'tx_fed_fcefile' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:fluidcontent/Resources/Private/Language/locallang.xml:tt_content.tx_fed_fcefile',
		'config' => array (
			'type' => 'user',
			'userFunc' => 'Tx_Fluidcontent_Backend_ContentSelector->renderField',
		)
	),
), 1);

if (FALSE === isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluidcontent']['setup']['removeTab']) || TRUE === (boolean) $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluidcontent']['setup']['removeTab']) {
	$tab = NULL;
} else {
	$tab = '--div--;LLL:EXT:fluidcontent/Resources/Private/Language/locallang.xml:pages.tab.content_settings,';
}

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fluidcontent_content'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['types']['fluidcontent_content']['showitem'] = '
	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
	' . $tab . '
	tx_fed_fcefile;LLL:EXT:fluidcontent/Resources/Private/Language/locallang.xml:pages.tab.element_type,
	pi_flexform;LLL:EXT:fluidcontent/Resources/Private/Language/locallang.xml:pages.tab.configuration,
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended,
	--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.extended;extended
	 ';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['fluidcontent_content'] = 'apps-pagetree-root';

if (file_exists(FLUIDCONTENT_TEMPFILE)) {
	t3lib_extMgm::addPageTSConfig(file_get_contents(FLUIDCONTENT_TEMPFILE));
}

unset($tab);


/**
 * Extension: fluidpages
 * File: /var/www/t3-latest/typo3conf/ext/fluidpages/ext_tables.php
 */

$_EXTKEY = 'fluidpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid Pages: PAGE');

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', array(
	'tx_fed_page_controller_action' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:fluidpages/Resources/Private/Language/locallang.xml:pages.tx_fed_page_controller_action',
		'config' => array (
			'type' => 'user',
			'userFunc' => 'Tx_Fluidpages_Backend_PageLayoutSelector->renderField'
		)
	),
	'tx_fed_page_controller_action_sub' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:fluidpages/Resources/Private/Language/locallang.xml:pages.tx_fed_page_controller_action_sub',
		'config' => array (
			'type' => 'user',
			'userFunc' => 'Tx_Fluidpages_Backend_PageLayoutSelector->renderField'
		)
	),
	'tx_fed_page_flexform' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:fluidpages/Resources/Private/Language/locallang.xml:pages.tx_fed_page_flexform',
		'config' => array (
			'type' => 'flex',
		)
	),
), 1);

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluidpages']['setup'] = unserialize($_EXTCONF);
$doktypes = '0,1,4';
$fields = 'tx_fed_page_controller_action,tx_fed_page_controller_action_sub,tx_fed_page_flexform';
$position = 'before:layout';
$additionalDoktypes = trim($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluidpages']['setup']['doktypes'], ',');
t3lib_extMgm::addToAllTCAtypes(
	'pages',
	$fields,
	$doktypes,
	$position
);

if (FALSE === empty($additionalDoktypes)) {
	$fields = '--div--;LLL:EXT:fluidpages/Resources/Private/Language/locallang.xml:pages.tx_fed_page_layoutselect,' . $fields;
	t3lib_extMgm::addToAllTCAtypes(
		'pages',
		$fields,
		$additionalDoktypes
	);
}


/**
 * Extension: themes_fces_fluidcontent_basic
 * File: /var/www/t3-latest/typo3conf/ext/themes_fces_fluidcontent_basic/ext_tables.php
 */

$_EXTKEY = 'themes_fces_fluidcontent_basic';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid Content Elements: Basic FCEs');

Tx_Flux_Core::registerProviderExtensionKey('themes_fces_fluidcontent_basic', 'Page');


/**
 * Extension: theme_bootstrap
 * File: /var/www/t3-latest/typo3conf/ext/theme_bootstrap/ext_tables.php
 */

$_EXTKEY = 'theme_bootstrap';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



/**
 *
 * Configuration of theme_bootstrap
 *
 */

if(!t3lib_extMgm::isLoaded('themes')) {
	t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', $_EXTKEY . ': theme');
}


/**
 * Extension: static_info_tables
 * File: /var/www/t3-latest/typo3conf/ext/static_info_tables/ext_tables.php
 */

$_EXTKEY = 'static_info_tables';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// Configure extension static template
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Static', 'Static Info Tables');

$typo3Version = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version);
$extensionResourcesLanguagePath = 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_db.xlf:';
$extensionConfigurationTcaPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/Tca/';
$extensionResourcesIconsPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/Icons/';

// Country reference data from ISO 3166-1
$GLOBALS['TCA']['static_countries'] = array(
	'ctrl' => array(
		'label' => 'cn_short_en',
		'label_alt' => 'cn_iso_2',
		'label_alt_force' => 1,
		'label_userFunc' => 'SJBR\StaticInfoTables\Hook\Backend\Form\ElementRenderingHelper->addIsoCodeToLabel',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY cn_short_en',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_countries.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'Country.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_countries.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'cn_iso_2,cn_iso_3,cn_iso_nr,cn_official_name_local,cn_official_name_en,cn_capital,cn_tldomain,cn_currency_iso_3,cn_currency_iso_nr,cn_phone,cn_uno_member,cn_eu_member,cn_address_format,cn_short_en'
	)
);

// Country subdivision reference data from ISO 3166-2
$GLOBALS['TCA']['static_country_zones'] = array(
	'ctrl' => array(
		'label' => 'zn_name_local',
		'label_alt' => 'zn_name_local,zn_code',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY zn_name_local',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_country_zones.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'CountryZone.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_countries.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'zn_country_iso_nr,zn_country_iso_3,zn_code,zn_name_local,zn_name_en'
	)
);

// Currency reference data from ISO 4217
$GLOBALS['TCA']['static_currencies'] = array(
	'ctrl' => array(
		'label' => 'cu_name_en',
		'label_alt' => 'cu_iso_3',
		'label_alt_force' => 1,
		'label_userFunc' => 'SJBR\StaticInfoTables\Hook\Backend\Form\ElementRenderingHelper->addIsoCodeToLabel',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY cu_name_en',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_currencies.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'Currency.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_currencies.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'cu_iso_3,cu_iso_nr,cu_name_en,cu_symbol_left,cu_symbol_right,cu_thousands_point,cu_decimal_point,cu_decimal_digits,cu_sub_name_en,cu_sub_divisor,cu_sub_symbol_left,cu_sub_symbol_right'
	)
);

// Language reference data from ISO 639-1
$GLOBALS['TCA']['static_languages'] = array(
	'ctrl' => array(
		'label' => 'lg_name_en',
		'label_alt' => 'lg_iso_2',
		'label_alt_force' => 1,
		'label_userFunc' => 'SJBR\StaticInfoTables\Hook\Backend\Form\ElementRenderingHelper->addIsoCodeToLabel',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY lg_name_en',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_languages.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'Language.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_languages.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'lg_name_local,lg_name_en,lg_iso_2,lg_typo3,lg_country_iso_2,lg_collate_locale,lg_sacred,lg_constructed'
	)
);

// UN Territory reference data 
$GLOBALS['TCA']['static_territories'] = array(
	'ctrl' => array(
		'label' => 'tr_name_en',
		'label_alt' => 'tr_iso_nr',
		'label_alt_force' => 1,
		'label_userFunc' => 'SJBR\StaticInfoTables\Hook\Backend\Form\ElementRenderingHelper->addIsoCodeToLabel',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY tr_name_en',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_territories.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'Territory.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_territories.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'tr_name_en,tr_iso_nr'
	)
);

unset($extensionResourcesLanguagePath);
unset($extensionConfigurationTcaPath);
unset($extensionResourcesIconsPath);

// Configure static language field of sys_language table
if ($typo3Version < 6001000) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('sys_language');
}
$GLOBALS['TCA']['sys_language']['columns']['static_lang_isocode']['config'] = array(
	'type' => 'select',
	'items' => array(
		array('',0),
	),
	'foreign_table' => 'static_languages',
	'foreign_table_where' => 'AND static_languages.pid=0 ORDER BY static_languages.lg_name_en',
	'itemsProcFunc' => 'SJBR\StaticInfoTables\Hook\Backend\Form\ElementRenderingHelper->translateLanguagesSelector',
	'size' => 1,
	'minitems' => '0',
	'maxitems' => 1,
	'wizards' => array(
		'suggest' => array(
			'type' => 'suggest',
			'default' => array(
				'receiverClass' => 'SJBR\StaticInfoTables\Hook\Backend\Form\SuggestReceiver'
			)
		)
	)
);

// Add data handling hook to manage ISO codes redundancies on records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'SJBR\StaticInfoTables\Hook\Core\DataHandling\ProcessDataMap';

if (TYPO3_MODE == 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	/**
	 * Registers the Static Info Tables Manager backend module, if enabled
	 */
	if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['enableManager']) {
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
			$_EXTKEY,
			// Make module a submodule of 'tools'
			'tools',
			// Submodule key
			'Manager',
			// Position
			'',
			// An array holding the controller-action combinations that are accessible
			array(
				'Manager' => 'information,newLanguagePack,createLanguagePack,testForm,testFormResult,sqlDumpNonLocalizedData'
			),
			array(
				'access' => 'user,group',
				'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Images/Icons/moduleicon.gif',
				'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf'
			)
		);
		// Add module configuration setup
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TypoScript/Manager/setup.txt">');
		
		// Enable editing Static Info Tables
		if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['tables'])) {
			$tableNames = array_keys($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['tables']);
			foreach ($tableNames as $tableName) {
				if ($typo3Version < 6001000) {
					\SJBR\StaticInfoTables\Utility\TcaUtility::loadTCA($tableName);
				}
				$GLOBALS['TCA'][$tableName]['ctrl']['readOnly'] = 0;
			}
		}
	}
}



#