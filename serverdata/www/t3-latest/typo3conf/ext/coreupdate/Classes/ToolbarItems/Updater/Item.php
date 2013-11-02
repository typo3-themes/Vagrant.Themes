<?php

require_once(PATH_typo3 . 'interfaces/interface.backend_toolbaritem.php');

class Tx_Coreupdate_ToolbarItems_Updater_Item  implements backend_toolbarItem  {
	/**
	 * reference back to the backend object
	 *
	 * @var	TYPO3backend
	 */
	protected $backendReference;
	protected $EXTKEY = 'coreupdate';
    /**
	 * constructor, loads the documents from the user control
	 *
	 * @param	TYPO3backend	TYPO3 backend object reference
	 */
	public function __construct(TYPO3backend &$backendReference = null) {
		$this->backendReference = $backendReference;
	}
	/**
	 * checks whether the user has access to this toolbar item
	 *
	 * @return  boolean  true if user has access, false if not
	 */
	public function checkAccess() {
		GLOBAL $TYPO3_CONF_VARS;

		$settings = unserialize($TYPO3_CONF_VARS['EXT']['extConf']['coreupdate']);
		return ($GLOBALS['BE_USER']->user['admin']) || (intval($settings['enableWarningForAllUsers']) === 1);
	}
	/**
	 * renders the toolbar item and the initial menu
	 *
	 * @return	string		the toolbar item including the initial menu content as HTML
	 */
	public function render() {
		$this->initSettings();
		$this->addJavascriptToBackend();
		$this->addCssToBackend();
		$this->addLLToBackend();
		return $this->renderMenu();
	}
	function initSettings() {
		$this->settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$this->EXTKEY]);
		if(!array_key_exists('notificationSound', $this->settings)) {
			$this->settings['notificationSound'] = 'EXT:coreupdate/Resources/Public/Sounds/Fire_pager-jason-1283464858.mp3';
		}
	}
    /**
     * @return string
     */
	function renderMenu() {
		$path     = t3lib_div::getFileAbsFileName($this->settings['notificationSound'],true);
		$path     = str_replace(PATH_site,'../',$path);

		$ogg      = str_replace('.mp3','.ogg',$path);
		$mp3      = str_replace('.ogg','.mp3',$path);

		$buffer = '<a href="#" class="toolbar-item"><img src="'.t3lib_extMgm::extRelPath($this->EXTKEY).'Resources/Public/Images/"    class="t3-icon" style="background-image:none;"></a>';
		$buffer.= '<div class="toolbar-item-menu" style="display: none;">';
		$buffer.= '<audio id="coreupdateAudio">';
		$buffer.= '  <source src="'.$ogg.'" type="audio/ogg" />';
		$buffer.= '  <source src="'.$mp3.'" type="audio/mp3" />';
		#$buffer.= '  <source src="'.t3lib_extMgm::extRelPath('benews').'Resources/Public/Sounds/sound.mp3" type="audio/mpeg" />';
		$buffer.= '</audio>';
		$buffer.= '<div class="toolbar-item-menu-dynamic">';
		#$buffer.= $this->renderMenu();
		$buffer.= '</div>';
		$buffer.= '</div>';
		return $buffer;
	}

	/**
	 * returns additional attributes for the list item in the toolbar
	 *
	 * @return	string		list item HTML attibutes
	 */
	public function getAdditionalAttributes() {
		return ' id="tx-coreupdate-menu"';
	}
	/**
	 * adds the neccessary javascript to the backend
	 *
	 * @return	void
	 */
	protected function addJavascriptToBackend() {
		$this->backendReference->addJavascriptFile(t3lib_extMgm::extRelPath($this->EXTKEY) . 'Resources/Public/JavaScripts/ToolbarItems/Updater.js');		/**
		 * @var $pageRenderer t3lib_PageRenderer
		 */
		$pageRenderer = t3lib_div::makeInstance('t3lib_PageRenderer');

		$pageRenderer->addInlineSettingArray($this->EXTKEY,$this->settings);
	}

	/**
	 * adds the neccessary CSS to the backend
	 *
	 * @return	void
	 */
	protected function addCssToBackend() {
		$this->backendReference->addCssFile('coreupdate', t3lib_extMgm::extRelPath($this->EXTKEY) . 'Resources/Public/Stylesheets/ToolbarItems/Updater.css');
	}

	function addLLToBackend() {
		// to be done @todo
	}

	//==========================================================================
	// AJAX
	//==========================================================================
	/**
	 * renders the menu so that it can be returned as response to an AJAX call
	 *
	 * @param	array		array of parameters from the AJAX interface, currently unused
	 * @param	TYPO3AJAX	object of type TYPO3AJAX
	 * @return	void
	 */
	public function renderAjax($params = array(), TYPO3AJAX &$ajaxObj = null) {
		$menuContent = $this->renderMenu();
		$ajaxObj->addContent($this->EXTKEY, $menuContent);
	}
}