<?php

class Tx_ThemesAdapterWordpress_Hooks_Tx_Themes_Domain_Repository_ThemeRepository_Hook {
	function init(&$params, $pObj) {
		if(!file_exists(PATH_site . 'typo3conf/themes/org.wordpress/themes')) {
			t3lib_div::mkdir_deep(PATH_site . 'typo3conf/', 'themes/org.wordpress/themes');
		}
		$themes = scandir(PATH_site . 'typo3conf/themes/org.wordpress/themes');
		foreach($themes as $theme) {
			if((substr($theme,0,1) !== '.') && is_dir(PATH_site . 'typo3conf/themes/org.wordpress/themes/' . $theme)) {
				$pObj->add(new Tx_ThemesAdapterWordpress_Domain_Model_Theme($theme));
			}
		}
	}
}