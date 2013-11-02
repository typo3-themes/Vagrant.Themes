<?php

class Tx_ThemesAdapterTvframework_Domain_Model_Theme extends Tx_Themes_Domain_Model_Theme {
	/**
	 * Constructs a new Skin
	 *
	 * @api
	 */
	public function __construct($extensionName) {
		parent::__construct($extensionName);

		/**
		 * set needed path variables
		 */
		$path                          = t3lib_extMgm::extPath($this->getExtensionName()) . 'typoscript/';
		$this->pathTyposcript          = $path . 'skin_typoscript.ts';
		$this->pathTyposcriptConstants = $path . 'skin_constants.ts';
		$this->pathTSConfig            = $path . 'skin_tsconfig.ts';

		if(t3lib_extMgm::isLoaded('templavoila_framework')) {
			$skinInfo = tx_templavoilaframework_lib::getSkinInfo('EXT:' . $extensionName);
			$this->title        = $skinInfo['title'];
			$this->description  = $skinInfo['description'];
			$this->previewImage = $skinInfo['icon'];
		} else {
			if(is_file(t3lib_extMgm::extPath($extensionName) . 'screenshot.gif')) {
				$this->previewImage = t3lib_extMgm::extRelPath($extensionName) . 'screenshot.gif';
			} elseif(is_file(t3lib_extMgm::extPath($extensionName) . 'screenshot.jpg')) {
				$this->previewImage = t3lib_extMgm::extRelPath($extensionName) . 'screenshot.jpg';
			} elseif(is_file(t3lib_extMgm::extPath($extensionName) . 'screenshot.png')) {
				$this->previewImage = t3lib_extMgm::extRelPath($extensionName) . 'screenshot.png';
			} else {
				$this->previewImage = t3lib_extMgm::extRelPath($extensionName) . 'ext_icon.gif';
			}
		}
	}

	public function getTSConfig() {
		$buffer = t3lib_div::getUrl(t3lib_extMgm::extPath('themes_adapter_tvframework') . 'Resources/Private/TypoScript/Compat/templavoila_framework/pagets.ts')
			. "\n\n"
			. parent::getTSConfig();
		return $buffer;
	}
		/**
	 * Includes static template records (from static_template table) and static template files (from extensions) for the input template record row.
	 *
	 * @param	array		Array of parameters from the parent class.  Includes idList, templateId, pid, and row.
	 * @param	object		Reference back to parent object, t3lib_tstemplate or one of its subclasses.
	 * @return	void
	 */
	public function addTypoScriptForFe(&$params, &$pObj) {
		$tvframeworkCompatBasePath = t3lib_extMgm::extPath('themes_adapter_tvframework') . 'Resources/Private/TypoScript/Compat/templavoila_framework/';

		// include templavoila wrapper templates, with core templates
			$pObj->processTemplate(
				array(
					'constants'=>
						t3lib_div::getUrl($tvframeworkCompatBasePath . 'core_constants.ts') .
						chr(10) . 'templavoila_framework.skinPath = ' . t3lib_extMgm::siteRelPath($this->getExtensionName()).
						chr(10) . 'templavoila_framework.corePath = ' . t3lib_extMgm::siteRelPath('themes_adapter_tvframework').'Resources/Public/',
					'config'=>		t3lib_div::getUrl($tvframeworkCompatBasePath . 'core_typoscript_wrapBefore.ts'),
					'editorcfg'=>	'',
					'include_static'=>	'',
					'include_static_file'=>	'',
					'title' =>	'themes_tvf_wrapBefore',
					'uid' => md5('themes_tvf_wrapBefore')
				),
				$params['idList'] . ',themes_tvf_wrapBefore',
				$params['pid'],
				'themes_tvf_wrapBefore',
				$params['templateId']
			);

		// include skin ts
			parent::addTypoScriptForFe($params, $pObj);

		// include templavoila core templates

			$pObj->processTemplate(
				array(
					'constants'=>	'',
					'config'=>		t3lib_div::getUrl($tvframeworkCompatBasePath . 'core_typoscript_wrapEnd.ts'),
					'editorcfg'=>	'',
					'include_static'=>	'',
					'include_static_file'=>	'',
					'title' =>	'themes_tvf_wrapEnd',
					'uid' => md5('themes_tvf_wrapEnd')
				),
				$params['idList'] . ',themes_tvf_wrapEnd',
				$params['pid'],
				'themes_tvf_wrapEnd',
				$params['templateId']
			);
	}
}