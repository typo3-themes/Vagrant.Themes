<?php

class Tx_ThemesAdapterWordpress_Domain_Model_Theme extends Tx_Themes_Domain_Model_Theme {
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
		$path                          = PATH_site . 'typo3conf/themes/org.wordpress/themes/' . $extensionName;
		$relPath                       =
		$this->pathTyposcript          = $path . 'skin_typoscript.ts';
		$this->pathTyposcriptConstants = $path . 'skin_constants.ts';
		$this->pathTSConfig            = $path . 'skin_tsconfig.ts';



		$themeProperties               = $this->readWordpressDescription($path);

		$this->title                   = $themeProperties['theme name'];
		$this->description             = $themeProperties['description'];

		$this->version                 = $themeProperties['version'];

		$this->author['name']          = $themeProperties['author'];
		$this->author['email']         = $themeProperties['author'];
		$this->author['company']       = $themeProperties['author'];

		$this->previewImage = '../typo3conf/themes/org.wordpress/themes/' . $extensionName . '/screenshot.png';

	}

	public function readWordpressDescription($path) {
		$styleContent                  = file_get_contents($path . '/style.css');
		$properties                    = array();
		$suchmuster = '/^def/';
		preg_match(
			'#/\*(.*)\*/#Uis',
			$styleContent,
			$matches
		);
		$matchesLines = explode("\n", $matches[1]);

		foreach($matchesLines as $match) {
			if(strpos($match, ':') !== FALSE) {
				list($key,$value) = explode(':', $match, 2);
				if($key) {
					$properties[strtolower(trim($key))] = trim($value);
				}
			}
		}
		return $properties;
	}

	public function getTSConfig() {
		$buffer = t3lib_div::getUrl(t3lib_extMgm::extPath('themes_adapter_templavoilaframework') . 'Resources/Private/TypoScript/Compat/templavoila_framework/pagets.ts')
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

		$themeItem = array(
			'constants'=>	t3lib_div::getUrl(t3lib_extMgm::extPath('themes_adapter_wordpress') . 'Resources/Private/Configuration/TypoScript/Adapter/constants.txt'),
			'config'=>		t3lib_div::getUrl(t3lib_extMgm::extPath('themes_adapter_wordpress') . 'Resources/Private/Configuration/TypoScript/Adapter/setup.txt'),
			'editorcfg'=>	'',
			'include_static'=>	'',
			'include_static_file'=>	'',
			'title' =>	'themes:' . $this->getExtensionName(),
			'uid' => md5($this->getExtensionName())
		);

		$themeItem['constants'] .= chr(10) . 'plugin.tx_themes.relPath     = ' . t3lib_extMgm::siteRelPath('themes_adapter_wordpress');
		$themeItem['constants'] .= chr(10) . 'plugin.tx_themes.name        = ' . $this->getExtensionName();
		$themeItem['constants'] .= chr(10) . 'plugin.tx_themes.templatePid = ' . $params['pid'];
		$themeItem['constants'] .= chr(10) . 'plugin.tx_themes_adapter_wordpress.themePath = typo3conf/themes/org.wordpress/themes/' . $this->getExtensionName() . '/';


		$pObj->processTemplate(
			$themeItem,
			$params['idList'] . ',themes_' . $this->getExtensionName(),
			$params['pid'],
			'themes_' . $this->getExtensionName(),
			$params['templateId']
		);
	}
}